<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">

    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/normalize.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Chocolate</span></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa  fa-comments"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/1.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/2.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/3.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/4.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{URL:: asset('admin/assets/images/admin.jpg')}}" alt="User Avatar">
                            <span class="profilespan">Administrator</span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('chocolatedashboard') }}">Chocolate</a></strong>

            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('chocolatedashboard') }}">Chocolate</a></li>
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#receiveModal">Receive</a></li>
                <li class="stockli mt-2"><a href="{{ url('lots') }}">Lots</a></li>
                <li class="stockli mt-2"><a href="{{ url('packetdashboard') }}">Packets</a></li>
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#returnModal">Return</a></li>
            </ul>
            <div class="modal fade" id="receiveModal" tabindex="-1" aria-labelledby="receiveModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Receive</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal">Receive</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-left">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Records</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Micro)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Pcs</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="returnModal" tabindex="-1" aria-labelledby="returnModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Return</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal">Return</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-right">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Micro)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Pcs</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <h4 class="headerborder1">Lot </h4>
                    </div>
                    <div class="col-md-7">
                        <li class="stockli nav-item dropdown">
                            <a href="#" class="nav-link " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-filter"></i> Filter</button></a>
                            <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Confirmed Batch</a></li>
                                <li class="stockli dropdown-submenu"><a href="#" class="dropdown-toggle" tabindex="-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add Custom Filter</a>
                                    <ul class="dropdown-menu" id="submenu" aria-labelledby="navbarDropdown">
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-keyboard"></i> Group By</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-star"></i> Favorites</button></a>
                    </div>
                    <div class="col-md-1 float-right">
                        <a href="{{ url('lots') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                        <a href="{{ url('lotslist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-6 col-sm-6">
                        <div class="card">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>

                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Dashboard</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329</strong>
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/init/datatables-init.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
