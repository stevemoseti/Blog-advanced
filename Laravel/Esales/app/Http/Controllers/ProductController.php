<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProduteRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
//to protect every method in this middleware to be authenticated.
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('products.index')->with('products',Product::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('adkf joa');
        return view('products.create')->with('categories',Category::all())->with('brands',Brand::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        
        // upload image to storage folder
         $product_image = $request->product_image->store('products','public');
        //  create the product
         Product::create([
           'product_title'=>$request->product_title,
            'product_description'=>$request->product_description,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_image' =>$product_image,
            'category_id'=>$request->category,
            'brand_id'=>$request->brand,
        
        ]);
       

        session()->flash('success','Product Created successfully.');
        return redirect(route('products.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    return view('products.create')->with('product',$product)->with('categories',Category::all())->with('brands',Brand::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduteRequest $request, $product)
    {
        $products = Product::find($product);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time().'.'.$extension;
            $file->move('storage/public/posts',$filename);
            $products->product_image=$filename;

            $products->save();

        }

        $products->product_title=$request->input('product_title');
        $products->product_description=$request->input('product_description');
        $products->product_quantity=$request->input('product_quantity');
        $products->product_price=$request->input('product_price');
        $products->category_id=$request->input('category');
        $products->brand_id=$request->input('brand');

        $products->save();

        session()->flash('success','Product updated successfully');


        return redirect(route('products.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $product = Product::find($id);

        $product->delete();
       

        session()->flash('success','Product Deleted successfully');
        return redirect(route('products.index'));
    }
}
