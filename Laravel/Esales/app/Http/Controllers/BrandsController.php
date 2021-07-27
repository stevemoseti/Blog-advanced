<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brands\CreateBrandRequest;
use App\Http\Requests\Brands\UpdateBrandsRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
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
        return view('brands.index')->with('brands',Brand::all())->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBrandRequest $request)
    {
        Brand::create([
            'brand_name' => $request->brand_name
        ]);

        session()->flash('success','    Brand created successfully.');

        return redirect(route('brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.create')->with('brand',$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandsRequest $request,Brand $brand)
    {
         $brand->update([
            'brand_name'=>$request->brand_name
        ]);
        session()->flash('success','Brand updated successfully.');
        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
       if($brand->products->count()>0)
        {
            session()->flash('error','Brand cannot be deleted It has some Products');
            return redirect()->back();
        }
        $brand->delete();

        session()->flash('success','Brand deleted successfully');

        return redirect(route('brands.index'));

        
       
    }
    
}
