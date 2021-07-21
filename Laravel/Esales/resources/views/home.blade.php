@extends('layouts.app')

@section('content')
<h2 class="dashboard-title">Overview</h2>
            <div class="dashboard-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-briefcase"></span>
                        <div>
                            <h5>Account Balance</h5>
                            <h4>kes. 300000</h4>
                        </div>
                    </div>
                        <div class="card-footer">
                            <a href="">View all</a>
                        </div>  
                </div> 
                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-reload"></span>
                        <div>
                            <h5>Pending</h5>
                            <h4>kes. 300000</h4>
                        </div>
                    </div>
                        <div class="card-footer">
                            <a href="">View all</a>
                        </div>
                 </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-check-box"></span>
                        <div>
                            <h5>Processed</h5>
                            <h4>kes. 300000</h4>
                        </div>
                    </div>
                        <div class="card-footer">
                            <a href="">View all</a>
                        </div>
                </div>
            </div> 
                <section class="recent">
                    <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Recent activity</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>TitleHead</th>
                                    <th>TitleHead</th>
                                    <th>TitleHead</th>
                                    <th>TitleHead</th>
                                    <th>TitleHead</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>web</td>
                                    <td>start</td>
                                    <td>name</td>
                                    <td class="td-team">
                                        <div>
                                            <img class="img-1" src="img/jesus.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-2" src="img/user.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-3" src="img/jesus.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>web</td>
                                    <td>start</td>
                                    <td>name</td>
                                    <td class="td-team" >
                                          <img class="img-1" src="img/jesus.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-2" src="img/user.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-3" src="img/jesus.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge warning">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>web</td>
                                    <td>start</td>
                                    <td>name</td>
                                    <td class="td-team">
                                         <img class="img-1" src="img/jesus.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-2" src="img/user.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-3" src="img/jesus.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>web</td>
                                    <td>start</td>
                                    <td>name</td>
                                    <td class="td-team">
                                         <img class="img-1" src="img/jesus.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-2" src="img/user.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-3" src="img/jesus.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge warning">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                   <td>web</td>
                                    <td>start</td>
                                    <td>name</td>
                                    <td class="td-team">
                                         <img class="img-1" src="img/jesus.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-2" src="img/user.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="img-3" src="img/jesus.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="fas fa-id-badge"></span>
                                <div>
                                    <h5>196</h5>
                                    <small>Number of sellers</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fas fa-id-badge"></span>
                                <div>
                                    <h5>19</h5>
                                    <small>Number of Admins</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fas fa-id-badge"></span>
                                <div>
                                    <h5>46</h5>
                                    <small>Number of customer requests</small>
                                </div>
                            </div>
                        </div>

                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="img">
                                <img class="bday-img" src="img/jesus.jpg" alt="">
                            </div>
                            <div class="bday-info">
                                <h5>Steve M. Moseti</h5>
                                <small>Birthday Today</small>
                            </div>
                            </div>
                            <div class="text-center">
                                    <button>
                                        <span class="fas fa-gift"></span>
                                        Wish Him
                                    </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </section>   
    


@endsection