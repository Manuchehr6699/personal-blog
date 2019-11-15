<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 17:29
 */
$this->title = 'Home page';
?>

<div class="row">
    <div class="col-md-12">
        <div class="top-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="widget-card-1">
            <div class="left">
                <img src="/admin_assets/img/flat-icons/currency_exchange.svg" alt="" class="img-fluid">
            </div>
            <div class="right">
                <h3 class="text-orange">$492923</h3>
                <p>Monthly Revenue</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget-card-1">
            <div class="left">
                <img src="/admin_assets/img/flat-icons/shipped.svg" alt="" class="img-fluid">
            </div>
            <div class="right">
                <h3 class="text-green">23892</h3>
                <p>Weekly Orders</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget-card-1">
            <div class="left">
                <img src="/admin_assets/img/flat-icons/bullish.svg" alt="" class="img-fluid">
            </div>
            <div class="right">
                <h3 class="text-purple">$10233</h3>
                <p>Daily Sale</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget-card-1">
            <div class="left">
                <img src="/admin_assets/img/flat-icons/conference_call.svg" alt="" class="img-fluid">
            </div>
            <div class="right">
                <h3 class="text-pink">382993</h3>
                <p>Total Visitors</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Monthly Sales</h3>
                <div id="scatterchart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Daily Visits Insight</h3>
                <div id="area"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card customer-details">
            <div class="card-body ">
                <h3 class="card-title">Customer Details</h3>
                <div class="slimScroll">
                    <div class="table-responsive">
                        <table class="table table-hover customer-details">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Order Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="table-img">
                                    1
                                </td>
                                <td>John Doe</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>ERP System</td>
                                <td>
                                    <button class="flat-btn flat-btn-info">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img">
                                    2
                                </td>
                                <td>Sarah Smith</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-primary">Inactive</span>
                                </td>
                                <td>Abc Website</td>
                                <td>
                                    <button class="flat-btn flat-btn-info ">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img">
                                    3
                                </td>
                                <td>Airi Satou</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>Android App</td>
                                <td>
                                    <button class="flat-btn flat-btn-info">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img">
                                    4
                                </td>
                                <td>Angelica Ramos</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>Ios App</td>
                                <td>
                                    <button class="flat-btn flat-btn-info">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img">
                                    5
                                </td>
                                <td>Ashton Cox</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-primary">Inactive</span>
                                </td>
                                <td>Java Website</td>
                                <td>
                                    <button class="flat-btn flat-btn-info">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img">
                                    6
                                </td>
                                <td>Cara Stevens</td>
                                <td>xyz@email.com</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>Desktop App</td>
                                <td>
                                    <button class="flat-btn flat-btn-info">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="flat-btn flat-btn-warning">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-body ">
                <h3 class="card-title">Activity Timeline</h3>
                <div class="slimScroll">
                    <div class="activity-timeline">
                        <div class="activity-timeline-items">
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text">12 new users registered</span>
                                <span class="activity-timeline-time">Just now</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-info"></span>
                                <span class="activity-timeline-text">System shutdown <span
                                        class="badge badge-warning">pending</span></span>
                                <span class="activity-timeline-time">14 mins</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-danger"></span>
                                <span class="activity-timeline-text">New invoice received</span>
                                <span class="activity-timeline-time">20 mins</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-secondary"></span>
                                <span class="activity-timeline-text">DB overloaded 80% <span
                                        class="badge badge-info">settled</span></span>
                                <span class="activity-timeline-time">1 hr</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-warning"></span>
                                <span class="activity-timeline-text">System error - <a href="#"
                                                                                       class="m-link">Check</a></span>
                                <span class="activity-timeline-time">2 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-brand"></span>
                                <span class="activity-timeline-text">Production server down</span>
                                <span class="activity-timeline-time">3 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-info"></span>
                                <span class="activity-timeline-text">Production server up</span>
                                <span class="activity-timeline-time">5 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text">New order received <span
                                        class="badge badge-danger">urgent</span></span>
                                <span class="activity-timeline-time">7 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text">12 new users registered</span>
                                <span class="activity-timeline-time">Just now</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-info"></span>
                                <span class="activity-timeline-text">System shutdown <span
                                        class="badge badge-warning">pending</span></span>
                                <span class="activity-timeline-time">14 mins</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-danger"></span>
                                <span class="activity-timeline-text">New invoice received</span>
                                <span class="activity-timeline-time">20 mins</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-secondary"></span>
                                <span class="activity-timeline-text">DB overloaded 80% <span
                                        class="badge badge-info">settled</span></span>
                                <span class="activity-timeline-time">1 hr</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-danger"></span>
                                <span class="activity-timeline-text">New invoice received</span>
                                <span class="activity-timeline-time">20 mins</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-secondary"></span>
                                <span class="activity-timeline-text">DB overloaded 80% <span
                                        class="badge badge-info">settled</span></span>
                                <span class="activity-timeline-time">1 hr</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-warning"></span>
                                <span class="activity-timeline-text">System error - <a href="#"
                                                                                       class="m-link">Check</a></span>
                                <span class="activity-timeline-time">2 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-brand"></span>
                                <span class="activity-timeline-text">Production server down</span>
                                <span class="activity-timeline-time">3 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-info"></span>
                                <span class="activity-timeline-text">Production server up</span>
                                <span class="activity-timeline-time">5 hrs</span>
                            </div>
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text">New order received <span
                                        class="badge badge-danger">urgent</span></span>
                                <span class="activity-timeline-time">7 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 sparkboxes">
        <div class="box box1">
            <div id="spark1"></div>
        </div>
        <div class="box box2">
            <div id="spark2"></div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card profile-card1">
            <div class="cardheader">
            </div>
            <div class="avatar">
                <img alt="" src="img/user-images/1.jpg">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="https://scripteden.com/">Script Eden</a>
                </div>
                <div class="desc">Passionate designer</div>
                <div class="row mb-3">
                    <div class="col-4">
                        <h3>2.4M</h3>
                        <h4>Fans</h4>
                    </div>
                    <div class="col-4">
                        <h3>203</h3>
                        <h4>Following</h4>
                    </div>
                    <div class="col-4">
                        <h3>322</h3>
                        <h4>Posts</h4>
                    </div>
                </div>
                <button class="btn-theme btn-theme-primary btn-lg btn-block mb-4">Follow</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card weather-card">
            <div class="card-body">
                <h2>New York</h2>
                <h3>Cloudy<span>Wind 10km/h <span class="dot">•</span> Precip 0%</span></h3>
                <div class="clearfix"></div>
                <h1>23°</h1>
                <div class="sky">
                    <div class="sun"></div>
                    <div class="cloud">
                        <div class="circle-small"></div>
                        <div class="circle-tall"></div>
                        <div class="circle-medium"></div>
                    </div>
                </div>
                <table>
                    <tr>
                        <td>TUE</td>
                        <td>WED</td>
                        <td>THU</td>
                        <td>FRI</td>
                        <td>SAT</td>
                    </tr>
                    <tr>
                        <td>30°</td>
                        <td>34°</td>
                        <td>36°</td>
                        <td>34°</td>
                        <td>37°</td>
                    </tr>
                    <tr>
                        <td>17°</td>
                        <td>22°</td>
                        <td>19°</td>
                        <td>23°</td>
                        <td>19°</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Sales Growth</h3>
                <div id="radialBarBottom"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Social Media Reach</h3>
                <div id="bubbleChart"></div>
            </div>
        </div>
    </div>
</div>
