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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Stock</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('stock1') }}">Stock</a></strong>

            <ul class="stockul">
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lots</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('stock1') }}">Lot</a></li>
                        <li><a class="dropdown-item" href="{{ url('packets') }}">Packets</a></li>
                    </ul>
                </li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal">Add Packets</a></li>
                <li class="stockli"><a href="{{ url('cancelpackets') }}">Cancel Packets</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#editpacketsModal">Edit Packets</a></li>
                <li class="stockli"><a href="{{ url('stockloss') }}">Stock Loss</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#stockreportpacketsModal">Report</a></li>
                <li class="stockli"><a href="{{ url('weightloss') }}">Weight Loss</a></li>
                <li class="stockli"><a href="{{ url('chocolate') }}">Chocolate</a></li>
                <li class="stockli nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuration</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('location') }}">Location</a></li>
                        <li><a class="dropdown-item" href="{{ url('stockmove') }}">Stock Move</a></li>
                        <li><a class="dropdown-item" href="{{ url('stockquant') }}">Stock Quant</a></li>
                    </ul>
                </li>
            </ul>
            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Add Packets</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Batch</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Pcs</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Shape</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
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
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Height(Micron)</label>
                                                        <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Length(MM)</label>
                                                        <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Width(MM)</label>
                                                        <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Weight(Ct)</label>
                                                        <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Create</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editpacketsModal" tabindex="-1" aria-labelledby="editpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editpacketsModalLabel">Scan Packet</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-9"></div>
                                    <div class="col-lg-3">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{ URL::asset('admin/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label"></label></div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Height(Micron)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Length(MM)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Shape</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Note</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Width(MM)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Weight(Ct)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirm</button>
                            <button type="button" class="btn btn-light">Discard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="stockreportpacketsModal" tabindex="-1" aria-labelledby="stockreportpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stockreportpacketsModalLabel">Stock Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Domain</label></div>
                                                    <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">Match All Records</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label"> </label></div>
                                                    <div class="col-12 col-md-9"><i class="fa-solid fa-arrow-right-long"></i> <button type="button" class="btn btn-light">12929 Record(S)</button>
                                                        <button type="button" class="btn btn-secondary">Edit Domain</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Print</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="headerborder1"> Location / New </h4>
                    </div>
                    <div class="col-md-9">
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Save </button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Discard </button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="float-right"><i class="fa-brands fa-dropbox"></i> Current Stock </h4>
                            </div>
                            <div class="card-body">
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Company : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Department : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Is Final Stock : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Is Stock Loss : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Is Chocolate : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Is Seed : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-md-2"></div>
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Send Message <span class="profilespan">Log Note</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i> 0</a></li>
                                    <li><a href="#">Follow</a></li>
                                    <li class="active"><i class="fa-solid fa-user"></i> 0</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h6 class="headerborder">Today</h6>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-xs-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ URL::asset('admin/assets/images/admin.jpg')}}">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-dark display-6">Administrator</h2>
                                                    <p>Creating a new Record....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </aside>
                            </div>

                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ URL::asset('admin/assets/images/admin.jpg')}}">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-dark display-6">DineshB</h2>
                                                    <p>9 Hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item listgroupitem">
                                                <a href="#">Stock Lot Created <i class="fa-solid fa-arrow-right"></i> Received</a>
                                            </li>
                                        </ul>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>


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
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>
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
