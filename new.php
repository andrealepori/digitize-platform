<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>DIGITIZE Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- plugin css for this page -->
      <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="chart_css/chartstyle.css">
      <!-- endinject -->
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <link rel="shortcut icon" href="favicon/favicon.png" />
   </head>
   <link href="https://playground.anychart.com/gallery/src/Sparkline_Charts/Column/iframe" rel="canonical">
   <meta content="AJAX Chart,Chart from JSON,Dashboard,JSON Chart,JSON Plot,Sparkline Chart,Table Layout" name="keywords">
   <meta content="AnyChart - JavaScript Charts designed to be embedded and integrated" name="description">
   <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
   <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
   <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" rel="stylesheet" type="text/css">
   <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" rel="stylesheet" type="text/css">
   <style>
.al-border-footer{
   text-align:center;
   max-width:1390px;
   padding-left:93px;
}
      .al-number{
      font-size:40px;
      padding-top: 35px;
      text-align: center
      }
      .mdi-arrow-top-right-bold-outline:before {
      color: green !important;
      background-size:3300px !important;
      content: "\F9C4";
      }
      html,
      body,
      #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      }
      .canvasjs-stock-container
      .canvasjs-navigator-panel{
      display:none !important;
      }
      .text-avatar{
         padding-top:8px;
         text-align:center;
         font-weight:bold;
      }
      .top{
      padding-top:65.5%;
      }
      .parent {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 0px;
      grid-row-gap: 0px;
      }
      .div1 { grid-area: 1 / 1 / 2 / 3; }
      .div2 { grid-area: 1 / 3 / 2 / 4; }
      .demo-container {
      box-sizing: border-box;
      width: 670px;
      height: 450px;
      padding: 20px 15px 15px 15px;
      margin: 15px auto 30px auto;
      border: 1px solid #ddd;
      background: #fff;
      background: linear-gradient(#f6f6f6 0, #fff 50px);
      background: -o-linear-gradient(#f6f6f6 0, #fff 50px);
      background: -ms-linear-gradient(#f6f6f6 0, #fff 50px);
      background: -moz-linear-gradient(#f6f6f6 0, #fff 50px);
      background: -webkit-linear-gradient(#f6f6f6 0, #fff 50px);
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
      -o-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      -ms-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      -webkit-tap-highlight-color: rgba(0,0,0,0);
      -webkit-tap-highlight-color: transparent;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }
      .demo-placeholder {
      width: 100%;
      height: 100%;
      font-size: 14px;
      }
      fieldset {
      display: block;
      -webkit-margin-start: 2px;
      -webkit-margin-end: 2px;
      -webkit-padding-before: 0.35em;
      -webkit-padding-start: 0.75em;
      -webkit-padding-end: 0.75em;
      -webkit-padding-after: 0.625em;
      min-width: -webkit-min-content;
      border-width: 2px;
      border-style: groove;
      border-color: threedface;
      border-image: initial;
      padding: 10px;
      }
      .legend {
      display: block;
      -webkit-padding-start: 2px;
      -webkit-padding-end: 2px;
      border-width: initial;
      border-style: none;
      border-color: initial;
      border-image: initial;
      padding-left: 10px;
      padding-right: 10px;
      padding-top: 10px;
      padding-bottom: 10px;
      }
      .legendLayer .background {
      fill: rgba(255, 255, 255, 0.85);
      stroke: rgba(0, 0, 0, 0.85);
      stroke-width: 1;
      }
      input[type="radio"] {
      margin-top: -1px;
      vertical-align: middle;
      }
      .tickLabel {
      line-height: 1.1;
      }
      .number{ 
      font-size: 30px;
      font-weight: 600;
      text-align:center;
      }
      .box{
      padding: 30px
      }
      header{
      margin-top:20px;
      margin-bottom: 20px;
      }
      .column-one{
      float: left;
      width: 50%;
      }
      .column-two{
      float: left;
      width: 50%;
      }
      .column-three{
      float: left;
      width: 50%;
      }
      .clear{
      clear: both;
      }
      footer{
      margin-bottom: 20px;
      }
      .al-bold{
      font-size:30px;
      padding-bottom:8px;
      font-weight:600;
      }
      .logout{
      padding-left:23px !important;
      color: #000 !important;
      }
      .al-card-title{  
      color: #000;
      text-align:Center;
      font-weight:750;
      }
      .col-md-12.grid-margin.al-italy {
    height: 470px !important;
}.al-italy {
    height: 470px !important;
}
.al-welcome-title{
   font-weight:800;
   font-size:30px;
   padding-left:18px !important;
}

.al-welcome-subtitle{
   padding-left:24px !important;
}

.al-card-body-background{
   background-color: #fff !important; 
}
.text-danger{
   color:red !important;
}
.al-color{
   color: #FF8C00 !important;;
}
.footer  {
   max-width:700px !important;
max-width:1000px !important;}
    .al-pb-footer {
    padding-bottom: 22px !important;
}
.al-bcg-footer {    padding: 0px 90px;
  background-color: #f3f3f3;
}
.footer__logo img  {
    width:  100px;
    height:  auto }
.footer__tagline  {
    margin-top:  15px;
    display:  block;
    font-size:  14px;
    line-height:  24px;
    color:  silver;
    margin-bottom:  0 }
.footer__links  {
    display:  flex;
    flex-direction:  column;
    justify-content:  flex-start;
    align-items:  flex-start;
    width:  100%;
    margin-top:  5px }
.footer__links a  {
    display:  inline-flex;
    flex-direction:  row;
    justify-content:  flex-start;
    align-items:  center;
    margin-top:  10px;
    color:  silver;
    font-size:  16px }
.footer__links a svg  {
    width:  20px;
    height:  auto;
    fill:  #25a56a;
    margin-right:  10px }
.footer__links a:hover  {
    color:  #25a56a }
.footer__social  {
    display:  flex;
    flex-direction:  row;
    justify-content:  flex-start;
    align-items:  flex-start;
    flex-wrap:  wrap;
    width:  100% }
.footer__social a  {
    margin-top:  20px;
    margin-right:  15px;
    display:  flex;
    flex-direction:  row;
    justify-content:  center;
    align-items:  center;
    width:  30px;
    height:  30px;
    position:  relative;
    transition-property:  all }
.footer__social a svg  {
    width:  100%;
    height:  auto }
.footer__social a:last-child  {
    margin-right:  0 }
.footer__social a:hover  {
    opacity:  1!important;
    -webkit-filter:  grayscale(0)!important;
    filter:  grayscale(0)!important }
.footer__social:hover a  {
    opacity:  .6;
    -webkit-filter:  grayscale(.6);
    filter:  grayscale(.6) }
.footer__content  {
   
    border-top:  1px solid rgba(255,  255,  255,  .1) }
.footer__copyright  {
    display:  block;
    font-size:  14px;
    color:  silver;
    margin-top:  20px }
.footer__copyright a  {
    color:  silver }
.footer__copyright a:hover  {
    color:  #25a56a }
.footer__title  {
    display:  block;
    margin-top:  30px;
    font-size:  16px;
    color:  #fff;
    font-family:  Inter,  sans-serif;
    font-weight:  500;
    margin-bottom:  15px }
.footer__nav  {
    display:  flex;
    flex-direction:  column;
    justify-content:  flex-start;
    align-items:  flex-start }
.footer__nav a  {
    font-size:  15px;
    line-height:  24px;
    margin-bottom:  10px;
    color:  silver }
.footer__nav a:last-child  {
    margin-bottom:  0 }
.footer__nav a:hover  {
    color:  #25a56a }
@media (min-width:576px)  {
    .footer  {
    padding:  30px 15px 20px }
}@media (min-width:768px)  {
    .footer  {
    padding:  20px 15px 25px }
.footer__content  {
    display:  flex;
    flex-direction:  row;
    justify-content:  space-between;
    align-items:  center;
    width:  100% }

    .footer__social  {
    width:  auto;
    order:  2 }
.footer__social a  {
    margin-top:  0 }
.footer__copyright  {
    margin-top:  0;
    order:  1 }
}@media (min-width:1200px)  {
    .footer  {
    padding-left:  295px;
    padding-right:  15px }
.footer__social  {
    display:  inline-flex;
    width:  auto }
}

   </style>
   <body>
      <div id="large"></div>
      <div id="content">
         <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
               <div class="navbar-brand-wrapper d-flex justify-content-center">
                  <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
                     <a class="navbar-brand brand-logo" href="#"><img src="images/logo.svg" alt="logo"/></a>
                     <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                     <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                     <span class="mdi mdi-sort-variant"></span>
                     </button>
                  </div>
               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                  <ul class="navbar-nav mr-lg-4 w-100">
                     <li class="nav-item nav-search d-none d-lg-block w-100">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="search">
                              <i class="mdi mdi-magnify"></i>
                              </span>
                           </div>
                           <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                     </li>
                  </ul>
                  <ul class="navbar-nav navbar-nav-right">
                     <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-message-text mx-0"></i>
                        <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                           <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="item-content flex-grow">
                                 <h6 class="ellipsis font-weight-normal">David Grey
                                 </h6>
                                 <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                 </p>
                              </div>
                           </a>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="item-content flex-grow">
                                 <h6 class="ellipsis font-weight-normal">Tim Cook
                                 </h6>
                                 <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                 </p>
                              </div>
                           </a>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                              </div>
                              <div class="item-content flex-grow">
                                 <h6 class="ellipsis font-weight-normal"> Johnson
                                 </h6>
                                 <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                 </p>
                              </div>
                           </a>
                        </div>
                     </li>
                     <li class="nav-item dropdown mr-4">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0"></i>
                        <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                           <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <div class="item-icon bg-success">
                                    <i class="mdi mdi-information mx-0"></i>
                                 </div>
                              </div>
                              <div class="item-content">
                                 <h6 class="font-weight-normal">Application Error</h6>
                                 <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                 </p>
                              </div>
                           </a>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <div class="item-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                 </div>
                              </div>
                              <div class="item-content">
                                 <h6 class="font-weight-normal">Settings</h6>
                                 <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                 </p>
                              </div>
                           </a>
                           <a class="dropdown-item">
                              <div class="item-thumbnail">
                                 <div class="item-icon bg-info">
                                    <i class="mdi mdi-account-box mx-0"></i>
                                 </div>
                              </div>
                              <div class="item-content">
                                 <h6 class="font-weight-normal">New user registration</h6>
                                 <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                 </p>
                              </div>
                           </a>
                        </div>
                     </li>
                     <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="images/faces/face5.jpg" alt="profile"/>
                        <span class="nav-profile-name"><?php echo $_SESSION['username']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                           <a class="dropdown-item">
                           <i class="mdi mdi-settings text-primary"></i>
                           Settings
                           </a>
                           <a class="dropdown-item">
                           <a href="index.php?logout='1'" class="logout"> <i class="mdi mdi-logout text-primary"></i>Logout</a> 
                           </a>
                        </div>
                     </li>
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="mdi mdi-menu"></span>
                  </button>
               </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_sidebar.html -->
               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                  <ul class="nav">
                     <li class="nav-item">
                        <br>

                        <a class="nav-link" href="#">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        </a>
                     </li>
                     <!--
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-circle-outline menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                           <ul class="nav flex-column sub-menu">
                              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                           </ul>
                        </div>
                     </li> !-->
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Personalizzability</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">ADV </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Convertions</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Website speed</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Social media reaction</span>
                     </a> 
</li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <!-- partial -->
               <div class="main-panel">
                  <div class="content-wrapper">
                     <div class="row">
                        <div class="col-md-12 grid-margin">
                           <div class="d-flex justify-content-between flex-wrap">
                              <div class="d-flex align-items-end flex-wrap">
                                 <div class="mr-md-3 mr-xl-5">





                                    <h2 class="al-welcome-title"> WELCOME BACK  <?php echo $_SESSION['username']; ?></h2>
                                   
                                    <p class="mb-md-0 al-welcome-subtitle">Your analytics dashboard template.</p>
                                 </div>
                                 <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-between align-items-end flex-wrap">
                                 <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                                 <i class="mdi mdi-download text-muted"></i>
                                 </button>
                                 <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                 <i class="mdi mdi-clock-outline text-muted"></i>
                                 </button>
                                 <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                 <i class="mdi mdi-plus text-muted"></i>
                                 </button>
                                 <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12 grid-margin">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3 col-md-6">
                                          <div class="d-flex">
                                             <div class="wrapper">
                                                <h3 class="mb-0 font-weight-semibold al-bold">32,451</h3>
                                                <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                                                <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                                             </div>
                                             <div class="wrapper my-auto ml-auto ml-lg-4">
                                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                   <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                   </div>
                                                   <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                   </div>
                                                </div>
                                                <canvas height="100" width="200" id="stats-line-graph-1" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                          <div class="d-flex">
                                             <div class="wrapper">
                                                <h3 class="mb-0 font-weight-semibold al-bold">15,236</h3>
                                                <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                             </div>
                                             <div class="wrapper my-auto ml-auto ml-lg-4">
                                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                   <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                   </div>
                                                   <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                   </div>
                                                </div>
                                                <canvas height="100" width="200" id="stats-line-graph-2" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                          <div class="d-flex">
                                             <div class="wrapper">
                                                <h3 class="mb-0 font-weight-semibold al-bold">7,688</h3>
                                                <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                                                <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                                             </div>
                                             <div class="wrapper my-auto ml-auto ml-lg-4">
                                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                   <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                   </div>
                                                   <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                   </div>
                                                </div>
                                                <canvas height="100" width="200" id="stats-line-graph-3" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                          <div class="d-flex">
                                             <div class="wrapper">
                                                <h3 class="mb-0 font-weight-semibold al-bold">1,553</h3>
                                                <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                             </div>
                                             <div class="wrapper my-auto ml-auto ml-lg-4">
                                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                   <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                   </div>
                                                   <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                   </div>
                                                </div>
                                                <canvas height="100" width="200" id="stats-line-graph-4" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <div class="card">
                              <div class="card-body">
                                 <h2 class="al-card-title"> VIEWS
                                 </h2>
                                 <div id="chartContainer"></div>
                                 <div class="demo-container">
                                    <div id="placeholder" class="demo-placeholder"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="card">
                              <div class="card-body dashboard-tabs p-0">
                                 <ul class="nav nav-tabs px-4" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content py-0 px-0">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">12.0209 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">27sett</a>
                                                      <a class="dropdown-item" href="#">28sett</a>
                                                      <a class="dropdown-item" href="#">29sett</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views</small>
                                                <h5 class="mr-2 mb-0">9833550</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <br>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <br>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views         </small>
                                                <h5 class="mr-2 mb-0">9833550  </h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body dashboard-tabs p-0">
                        
                                 <div class="tab-content py-0 px-0">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views</small>
                                                <h5 class="mr-2 mb-0">9833550</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views</small>
                                                <h5 class="mr-2 mb-0">9833550</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                                       <div class="d-flex flex-wrap justify-content-xl-between">
                                          <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Start date</small>
                                                <div class="dropdown">
                                                   <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                   </a>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                      <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                      <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                      <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <br>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Revenue</small>
                                                <h5 class="mr-2 mb-0">$577545</h5>
                                             </div>
                                          </div>
                                          <br>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total views</small>
                                                <h5 class="mr-2 mb-0">9833550</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Downloads</small>
                                                <h5 class="mr-2 mb-0">2233783</h5>
                                             </div>
                                          </div>
                                          <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                             <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                             <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Flagged</small>
                                                <h5 class="mr-2 mb-0">3497843</h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                           <div class="card">
                              <div class="card-body">
                                      <div class="">
         



<figure class="highcharts-figure">
    <div id="container"></div>

</figure>


            </div>
             <!-- <div id="myDiv"></div> !-->
                              </div>
                           </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                           <div class="card">
                              <div class="card-body">
   
                                 <p class="card-title">Total sales</p>
                                 <h1>$ 28835</h1>
                                 <h4>Gross sales over the years</h4>
                                 <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
                                 <div id="total-sales-chart-legend"></div>
                              </div>
                              <canvas id="total-sales-chart"></canvas>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <div class="row">
                              <div class="col-md-6 grid-margin stretch-card">
                                 <div class="card">
                                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                       <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                       </div>
                                       <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                       </div>
                                    </div>
                                    <div class="card-body pb-0">
                                       <div class="d-flex justify-content-between">
                                          <h4 class="card-title mb-0">Total Revenue</h4>
                                          <p class="font-weight-semibold mb-0">+1.37%</p>
                                       </div>
                                       <h3 class="font-weight-medium mb-4 al-number">184.42K</h3>
                                    </div>
                                    <canvas class="mt-n4 chartjs-render-monitor" height="180" id="total-revenue" width="706" style="display: block; height: 90px; width: 353px;">
                                    </canvas>
                                 </div>
                              </div>
                              <div class="col-md-6 grid-margin stretch-card">
                                 <div class="card">
                                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                       <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                       </div>
                                       <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                       </div>
                                    </div>
                                    <div class="card-body pb-0">
                                       <div class="d-flex justify-content-between">
                                          <h4 class="card-title mb-0">Transaction</h4>
                                          <p class="font-weight-semibold mb-0">-2.87%</p>
                                       </div>
                                       <h3 class="font-weight-medium al-number">147.7K</h3>
                                    </div>
                                    <canvas class="mt-n3 chartjs-render-monitor" height="180" id="total-transaction" width="706" style="display: block; height: 90px; width: 353px;">
                                    </canvas>
                                 </div>
                              </div>
                              <div class="col-md-12 grid-margin">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                             <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                          </div>
                                          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                             <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                          </div>
                                       </div>
                                       <h4 class="card-title mb-0">Market Overview</h4>
                                       <div class="d-flex align-items-center justify-content-between w-100">
                                          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                          <div class="dropdown">
                                             <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                                             <div class="dropdown-menu" aria-labelledby="dateSorter">
                                                <div class="dropdown-item" id="market-overview_1">Daily</div>
                                                <div class="dropdown-item" id="market-overview_2">Weekly</div>
                                                <div class="dropdown-item" id="market-overview_3">Monthly</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-end">
                                          <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                                          <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                                          <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                                       </div>
                                       <div id="regions_div" style="width:690px; height: 500px;"></div>
                                       <!--
                                          <canvas class="mt-4 chartjs-render-monitor" height="450" id="market-overview-chart" width="1354" style="display: block; height: 225px; width: 677px;"></canvas> !-->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 grid-margin">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between">
                                          <h4 class="card-title mb-0">Invoice</h4>
                                          <a href="#"><small>Show All</small></a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                                       <div class="table-responsive">
                                          <table class="table table-striped table-hover">
                                             <thead>
                                                <tr>
                                                   <th>Invoice ID</th>
                                                   <th>Customer</th>
                                                   <th>Status</th>
                                                   <th>Due Date</th>
                                                   <th>Amount</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>INV-87239</td>
                                                   <td>Viola Ford</td>
                                                   <td>Paid</td>
                                                   <td>20 Jan 2019</td>
                                                   <td>$755</td>
                                                </tr>
                                                <tr>
                                                   <td>INV-87239</td>
                                                   <td>Dylan Waters</td>
                                                   <td>Unpaid</td>
                                                   <td>23 Feb 2019</td>
                                                   <td>$800</td>
                                                </tr>
                                                <tr>
                                                   <td>INV-87239</td>
                                                   <td>Louis Poole</td>
                                                   <td>Unpaid</td>
                                                   <td>25 Mar 2019</td>
                                                   <td>$463</td>
                                                </tr>
                                                <tr>
                                                   <td>INV-87239</td>
                                                   <td>Vera Howell</td>
                                                   <td>Paid</td>
                                                   <td>27 Mar 2019</td>
                                                   <td>$235</td>
                                                </tr>
                                                <tr>
                                                   <td>INV-87239</td>
                                                   <td>Allie Goodman</td>
                                                   <td>Unpaid</td>
                                                   <td>1 Apr 2019</td>
                                                   <td>$657</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 grid-margin stretch-card">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="row">
                                       <div class="col-md-6">
                                             <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-danger mr-2"></div>         
                                                      
                                                
                                                
                                                <p class="mb-0">Total Sales</p>
                                             </div>
                                             <h4 class="font-weight-semibold">$7,590</h4>
                                           
                                          </div>
                                          <div class="col-md-6 mt-4 mt-md-0">
                                             <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-success mr-2"></div>
                                                <p class="mb-0">Active Users</p>
                                             </div>
                                             <h4 class="font-weight-semibold">$5,460</h4>
                                             <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                              <div class="card">
                                    <div class="card-body">
                                       <div class="row">
                                       <div class="col-md-6">
                                             <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-danger mr-2"></div>
                                                <p class="mb-0">Total Sales</p>
                                             </div>
                                             <h4 class="font-weight-semibold">$7,590</h4>
                                           
                                          </div>
                                          <div class="col-md-6 mt-4 mt-md-0">
                                             <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-success mr-2"></div>
                                                <p class="mb-0">Active Users</p>
                                             </div>
                                             <h4 class="font-weight-semibold">$5,460</h4>
                                             <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="row">
                              <div class="col-md-12 grid-margin">
                                 <div class="card">
                                    <div class="card-body">
                                       <h1 class="card-title mb-4">Website Audience Metrics</h1>
                                       <div class="row">
                                          <div class="col-5 col-md-5">
                                             <div class="wrapper border-bottom mb-2 pb-2">
                                                <h4 class="font-weight-semibold mb-0">523,200</h4>
                                                <div class="d-flex align-items-center">
                                                   <p class="mb-0">Page Views</p>
                                                   <div class="dot-indicator bg-secondary ml-auto"></div>
                                                </div>
                                             </div>
                                             <div class="wrapper">
                                                <h4 class="font-weight-semibold mb-0">753,098</h4>
                                                <div class="d-flex align-items-center">
                                                   <p class="mb-0">Bounce Rate</p>
                                                   <div class="dot-indicator bg-primary ml-auto"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-5 col-md-7 d-flex pl-4">
                                             <div class="ml-auto">
                                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                   <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                   </div>
                                                   <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                   </div>
                                                </div>
                                                <canvas height="200" id="realtime-statistics" width="600" style="display: block; height: 100px; width: 300px;" class="chartjs-render-monitor"></canvas>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row mt-5">
                                          <div class="col-6">
                                             <div class="d-flex align-items-center mb-2">
                                                <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                                   <i class="icon ion-logo-buffer icon-sm"></i>
                                                </div>
                                                <h2 class="font-weight-semibold mb-0">3,605</h2>
                                             </div>
                                             <p>Since last week</p>
                                             <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                                          </div>
                                          <div class="col-6">
                                             <div class="mt-n3 ml-auto" id="dashboard-guage-chart">
                                                <svg height="100%" version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.6875px; top: -0.359375px;">
                                                   <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.4</desc>
                                                   <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                      <filter id="inner-shadow-dashboard-guage-chart">
                                                         <feOffset dx="0" dy="3"></feOffset>
                                                         <feGaussianBlur result="offset-blur" stdDeviation="5"></feGaussianBlur>
                                                         <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse"></feComposite>
                                                         <feFlood flood-color="black" flood-opacity="0.2" result="color"></feFlood>
                                                         <feComposite operator="in" in="color" in2="inverse" result="shadow"></feComposite>
                                                         <feComposite operator="over" in="shadow" in2="SourceGraphic"></feComposite>
                                                      </filter>
                                                   </defs>
                                                   <path fill="#edebeb" stroke="none" d="M33.78525,107.43384L13.5141,107.43384A54.0564,54.0564,0,0,1,121.62689999999999,107.43384L101.35575,107.43384A33.78525,33.78525,0,0,0,33.78525,107.43384Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" filter="url(#inner-shadow-dashboard-guage-chart)"></path>
                                                   <path fill="#ff0000" stroke="none" d="M33.78525,107.43384L13.5141,107.43384A54.0564,54.0564,0,0,1,92.11159205012083,59.26923492586392L82.90868253132552,77.33096182866495A33.78525,33.78525,0,0,0,33.78525,107.43384Z" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" filter="url(#inner-shadow-dashboard-guage-chart)"></path>
                                                   <path fill="#000000" stroke="none" d="M80.02261564982544,85.97192330894065L77.61438539611865,84.74486870643462L94.2589376045064,55.054831981877015Z" stroke-width="0" stroke-linecap="square" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linecap: square;"></path>
                                                   <text x="67.5705" y="37.836225" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#999999" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: bold; fill-opacity: 1;" font-weight="bold" fill-opacity="1">
                                                      <tspan dy="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan>
                                                   </text>
                                                   <text x="67.5705" y="105.73795294117647" text-anchor="middle" font-family="Arial" font-size="16px" stroke="none" fill="#010101" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 16px; font-weight: bold; fill-opacity: 1;" font-weight="bold" fill-opacity="1">
                                                      <tspan dy="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">65%</tspan>
                                                   </text>
                                                   <text x="67.5705" y="119.0543221719457" text-anchor="middle" font-family="Arial" font-size="10px" stroke="none" fill="#b3b3b3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 10px; font-weight: normal; fill-opacity: 1;" font-weight="normal" fill-opacity="1">
                                                      <tspan dy="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan>
                                                   </text>
                                                   <text x="23.649675" y="119.0543221719457" text-anchor="middle" font-family="Arial" font-size="10px" stroke="none" fill="#b3b3b3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 10px; font-weight: normal; fill-opacity: 1;" font-weight="normal" fill-opacity="1">
                                                      <tspan dy="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                                   </text>
                                                   <text x="111.49132499999999" y="119.0543221719457" text-anchor="middle" font-family="Arial" font-size="10px" stroke="none" fill="#b3b3b3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 10px; font-weight: normal; fill-opacity: 1;" font-weight="normal" fill-opacity="1">
                                                      <tspan dy="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                                                   </text>
                                                </svg>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                              <div class="col-md-12 grid-margin">
                                 <div class="card">
                                    <div class="card-body al-progressivo">


                                                <p class="mb-0">Total Sales</p>
                                 
                                             <h4 class="font-weight-semibold">$7,590</h4>
                                   

                                    
                                         <div class="progress progress-md">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                             </div>

                                             <p class="mb-0">Total Sales</p>
                                 
                                 <h4 class="font-weight-semibold">$7,590</h4>
                       

                        
                             <div class="progress progress-md">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="78"></div>
                                 </div>

                                 <p class="mb-0">Total Sales</p>
                                 
                                 <h4 class="font-weight-semibold">$7,590</h4>
                       

                        
                             <div class="progress progress-md">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="78"></div>
                                 </div>

                                 <p class="mb-0">Total Sales</p>
                                 
                                 <h4 class="font-weight-semibold">$7,590</h4>
                       

                        
                             <div class="progress progress-md">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="78"></div>
                                 </div>

                                       <!--
                                       <div class="wrapper">
                                          <div class="d-flex w-100 pt-2 mt-4">
                                             <p class="mb-0 font-weight-semibold">California</p>
                                             <div class="wrapper ml-auto d-flex align-items-center">
                                                <p class="font-weight-semibold mb-0">26,437</p>
                                                <p class="ml-1 mb-0">26%</p>
                                             </div>
                                          </div>
                                          <div class="d-flex w-100 pt-2">
                                             <p class="mb-0 font-weight-semibold">Washington</p>
                                             <div class="wrapper ml-auto d-flex align-items-center">
                                                <p class="font-weight-semibold mb-0">3252</p>
                                                <p class="ml-1 mb-0">64%</p>
                                             </div>
                                          </div>
                                          <div class="d-flex w-100 pt-2">
                                             <p class="mb-0 font-weight-semibold">Michigan</p>
                                             <div class="wrapper ml-auto d-flex align-items-center">
                                                <p class="font-weight-semibold mb-0">4,987</p>
                                                <p class="ml-1 mb-0">30%</p>
                                             </div>
                                          </div>
                                       </div> !-->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 grid-margin">

                              <div class="card-body al-card-body-background">
                    <h4 class="card-title">ADV EARN</h4>
                    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> -€394
                          </td>
                          <td>
                             
                            <label class="badge badge-danger"> <i class="mdi mdi-arrow-down"></i> -28.7%</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-warning al-color"> €194,39
                          </td>
                          <td>
                            <label class="badge badge-warning"><i class="mdi mdi-arrow-up"></i>
                                +53.3%</label>
                          </td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-warning al-color"> €292,24
                          </td>
                          <td>
                            <label class="badge badge-warning"><i class="mdi mdi-arrow-down"></i> -12.6% </label>
                          </td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> €382,00
                          </td>
                          <td>
                            <label class="badge badge-success"><i class="mdi mdi-arrow-up"></i>+ 73.2%</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-danger">-€298,3 
                          </td>
                          <td>
                            <label class="badge badge-danger"> <i class="mdi mdi-arrow-down"></i>-49.3% </label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                                 <div class="card">
                                    <div class="">
                                    <div class="">
                                    <div class="card-body">
                        <h4 class="card-title mb-0">New Account </h4>
                        <div class="d-flex mt-3 py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1180&q=80s" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">1 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                     
                        <span class="img-sm rounded-circle bg-success text-white text-avatar">
                           EN </span>                    <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Eugenio Nigerian</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1180&q=80" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex pt-2">
                          <span class="img-sm rounded-circle bg-success text-white text-avatar">AS</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Alberto Sircula</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">7 Hours ago</small>
                        </div>
                      </div>
                    
                    <div class="aligner-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                      </div>
                    </div>
                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                  
                    </div>
                  </div>
                                     <!--  <h4 class="card-title mb-0">Top Performer</h4>
                                       <div class="d-flex mt-3 py-2 border-bottom">
                                          <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                                          <div class="wrapper ml-2">
                                             <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                                             <small>162543</small>
                                          </div>
                                          <small class="text-muted ml-auto">1 Hours ago</small>
                                       </div>
                                       <div class="d-flex py-2 border-bottom">
                                          <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                                          <div class="wrapper ml-2">
                                             <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                                             <small>162543</small>
                                          </div>
                                          <small class="text-muted ml-auto">4 Hours ago</small>
                                       </div>
                                       <div class="d-flex py-2 border-bottom">
                                          <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg" alt="profile image">
                                          <div class="wrapper ml-2">
                                             <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                                             <small>162543</small>
                                          </div>
                                          <small class="text-muted ml-auto">4 Hours ago</small>
                                       </div>
                                       <div class="d-flex pt-2">
                                          <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                                          <div class="wrapper ml-2">
                                             <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                                             <small>162543</small>
                                          </div>
                                          <small class="text-muted ml-auto">7 Hours ago</small>
                                       </div>
                                       !-->
                                       
                                    </div>
                                 </div>  
                                 <br>
                           
                              </div>
                        </div>
                     </div>
                  </div>
                  <div id="container"></div>
                  
               </div>
<!-- footer !-->
<div class="al-bcg-footer">
<footer>



<div class="footer__content">
                <div class="footer__social">
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#3B5998"></path> <path d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z" fill="white"></path> </svg>                        </a>
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#55ACEE"></path> <path d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z" fill="white"></path> </svg>                        </a>
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="white"></path> <mask x="0" y="0" width="30" height="30"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="white"></path> </mask> <g> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9984 7C12.8279 7 12.5552 7.00949 11.7022 7.04834C10.8505 7.08734 10.2692 7.22217 9.76048 7.42001C9.23431 7.62433 8.78797 7.89767 8.3433 8.3425C7.8983 8.78717 7.62496 9.23352 7.41996 9.75952C7.22162 10.2684 7.08662 10.8499 7.04829 11.7012C7.01012 12.5546 7.00012 12.8274 7.00012 15.0001C7.00012 17.1728 7.00979 17.4446 7.04846 18.2979C7.08762 19.1496 7.22246 19.731 7.42013 20.2396C7.62463 20.7658 7.89796 21.2122 8.3428 21.6568C8.78731 22.1018 9.23365 22.3758 9.75948 22.5802C10.2685 22.778 10.85 22.9128 11.7015 22.9518C12.5548 22.9907 12.8273 23.0002 14.9999 23.0002C17.1727 23.0002 17.4446 22.9907 18.2979 22.9518C19.1496 22.9128 19.7316 22.778 20.2406 22.5802C20.7666 22.3758 21.2123 22.1018 21.6568 21.6568C22.1018 21.2122 22.3751 20.7658 22.5801 20.2398C22.7768 19.731 22.9118 19.1495 22.9518 18.2981C22.9901 17.4448 23.0001 17.1728 23.0001 15.0001C23.0001 12.8274 22.9901 12.5547 22.9518 11.7014C22.9118 10.8497 22.7768 10.2684 22.5801 9.7597C22.3751 9.23352 22.1018 8.78717 21.6568 8.3425C21.2118 7.89752 20.7668 7.62418 20.2401 7.42001C19.7301 7.22217 19.1484 7.08734 18.2967 7.04834C17.4434 7.00949 17.1717 7 14.9984 7ZM14.5903 8.44156L14.7343 8.44165L15.0009 8.44171C17.1369 8.44171 17.3901 8.44937 18.2336 8.4877C19.0136 8.52338 19.437 8.65369 19.719 8.76321C20.0923 8.9082 20.3585 9.08154 20.6383 9.36154C20.9183 9.64154 21.0916 9.9082 21.237 10.2816C21.3465 10.5632 21.477 10.9866 21.5125 11.7666C21.5508 12.6099 21.5591 12.8633 21.5591 14.9983C21.5591 17.1333 21.5508 17.3866 21.5125 18.23C21.4768 19.01 21.3465 19.4333 21.237 19.715C21.092 20.0883 20.9183 20.3542 20.6383 20.634C20.3583 20.914 20.0925 21.0873 19.719 21.2323C19.4373 21.3423 19.0136 21.4723 18.2336 21.508C17.3903 21.5463 17.1369 21.5547 15.0009 21.5547C12.8647 21.5547 12.6115 21.5463 11.7682 21.508C10.9882 21.472 10.5649 21.3417 10.2827 21.2322C9.90935 21.0872 9.64268 20.9138 9.36268 20.6338C9.08268 20.3538 8.90934 20.0878 8.76401 19.7143C8.65451 19.4326 8.52401 19.0093 8.48851 18.2293C8.45017 17.386 8.4425 17.1326 8.4425 14.9963C8.4425 12.8599 8.45017 12.6079 8.48851 11.7646C8.52417 10.9846 8.65451 10.5612 8.76401 10.2792C8.90901 9.90588 9.08268 9.63922 9.36268 9.35919C9.64268 9.07919 9.90935 8.90588 10.2827 8.76053C10.5647 8.65054 10.9882 8.52054 11.7682 8.48471C12.5062 8.45135 12.7922 8.44138 14.2832 8.4397V8.44171C14.3803 8.44156 14.4825 8.44153 14.5903 8.44156ZM18.3113 10.7296C18.3113 10.1994 18.7413 9.76987 19.2713 9.76987V9.76953C19.8013 9.76953 20.2313 10.1995 20.2313 10.7296C20.2313 11.2596 19.8013 11.6895 19.2713 11.6895C18.7413 11.6895 18.3113 11.2596 18.3113 10.7296ZM15.0011 10.8916C12.7323 10.8916 10.8928 12.7311 10.8928 15C10.8928 17.2688 12.7323 19.1075 15.0011 19.1075C17.27 19.1075 19.1088 17.2688 19.1088 15C19.1088 12.7311 17.2698 10.8916 15.0011 10.8916ZM17.6678 14.9999C17.6678 13.5271 16.4738 12.3333 15.0011 12.3333C13.5283 12.3333 12.3344 13.5271 12.3344 14.9999C12.3344 16.4726 13.5283 17.6666 15.0011 17.6666C16.4738 17.6666 17.6678 16.4726 17.6678 14.9999Z" fill="black"></path> </g> </svg>                        </a>
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#4C6C91"></path> <path d="M15.7848 19.9226C15.7848 19.9226 16.0736 19.8911 16.2215 19.7351C16.3568 19.5922 16.3521 19.3226 16.3521 19.3226C16.3521 19.3226 16.3341 18.0636 16.9297 17.8777C17.5166 17.6949 18.2702 19.0952 19.07 19.6337C19.6741 20.0408 20.1327 19.9517 20.1327 19.9517L22.2699 19.9226C22.2699 19.9226 23.3874 19.855 22.8576 18.9923C22.8137 18.9216 22.5485 18.354 21.269 17.1879C19.9284 15.9673 20.1084 16.1647 21.7221 14.053C22.705 12.7672 23.0978 11.9821 22.975 11.6464C22.8584 11.3253 22.1353 11.4106 22.1353 11.4106L19.7297 11.4252C19.7297 11.4252 19.5513 11.4014 19.419 11.4789C19.2899 11.555 19.2061 11.7324 19.2061 11.7324C19.2061 11.7324 18.8258 12.7272 18.3179 13.5737C17.2466 15.3589 16.8185 15.4534 16.6433 15.3428C16.2355 15.0839 16.3373 14.3042 16.3373 13.7504C16.3373 12.0197 16.6049 11.2984 15.8169 11.1118C15.5555 11.0495 15.363 11.0088 14.6939 11.0019C13.8354 10.9935 13.1092 11.005 12.6976 11.2024C12.4237 11.3338 12.2124 11.6272 12.3415 11.6441C12.5004 11.6648 12.8604 11.7394 13.0513 11.9944C13.2978 12.3239 13.2892 13.0629 13.2892 13.0629C13.2892 13.0629 13.4308 15.1 12.9582 15.3528C12.6342 15.5264 12.1897 15.1723 11.2342 13.5522C10.7451 12.7226 10.3757 11.8054 10.3757 11.8054C10.3757 11.8054 10.3045 11.6341 10.177 11.5419C10.0228 11.4306 9.80759 11.396 9.80759 11.396L7.52173 11.4106C7.52173 11.4106 7.17818 11.4198 7.05219 11.5665C6.94029 11.6963 7.04358 11.966 7.04358 11.966C7.04358 11.966 8.8333 16.0764 10.8601 18.1481C12.7187 20.047 14.8285 19.9226 14.8285 19.9226H15.7848Z" fill="white"></path> </svg>                        </a>
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#010101"></path> <path d="M13.2143 13.1245V12.4195C12.9696 12.3808 12.7224 12.3595 12.4747 12.356C10.0763 12.3509 7.95291 13.9051 7.23271 16.1928C6.51252 18.4805 7.36263 20.9708 9.33138 22.3405C7.85664 20.7622 7.44716 18.4646 8.28583 16.474C9.1245 14.4834 11.0547 13.1716 13.2143 13.1245Z" fill="#25F4EE"></path> <path d="M13.3472 21.1097C14.6881 21.1079 15.7904 20.0515 15.8491 18.7118V6.75693H18.0332C17.9886 6.50713 17.9673 6.25373 17.9696 6H14.9824V17.9433C14.9327 19.2898 13.8279 20.3564 12.4804 20.3586C12.0778 20.3552 11.6817 20.2561 11.3248 20.0697C11.794 20.7197 12.5456 21.1062 13.3472 21.1097Z" fill="#25F4EE"></path> <path d="M22.1125 10.8133V10.1489C21.3087 10.1491 20.5227 9.91193 19.8533 9.46704C20.4401 10.1493 21.2332 10.6219 22.1125 10.8133Z" fill="#25F4EE"></path> <path d="M19.8534 9.46693C19.1939 8.71597 18.8304 7.75063 18.8306 6.75122H18.0333C18.2414 7.86795 18.8996 8.84996 19.8534 9.46693Z" fill="#FE2C55"></path> <path d="M12.4747 15.343C11.324 15.3489 10.325 16.1372 10.0517 17.2551C9.77836 18.3729 10.3009 19.5333 11.3191 20.0695C10.7674 19.3078 10.6895 18.301 11.1174 17.4635C11.5453 16.626 12.4067 16.0992 13.3472 16.0999C13.598 16.103 13.8471 16.1419 14.0868 16.2155V13.1762C13.842 13.1395 13.5948 13.1202 13.3472 13.1184H13.2143V15.4296C12.9733 15.365 12.7242 15.3358 12.4747 15.343Z" fill="#FE2C55"></path> <path d="M22.1125 10.813V13.1242C20.6245 13.1214 19.1751 12.6503 17.9696 11.7779V17.8507C17.9632 20.881 15.5049 23.3341 12.4746 23.3341C11.3493 23.3361 10.251 22.9889 9.33136 22.3403C10.8662 23.991 13.2547 24.5344 15.3525 23.71C17.4504 22.8857 18.8301 20.8616 18.8306 18.6076V12.5522C20.0401 13.4189 21.4913 13.8838 22.9792 13.8812V10.9054C22.6879 10.9045 22.3975 10.8735 22.1125 10.813Z" fill="#FE2C55"></path> <path d="M17.9696 17.851V11.7782C19.1787 12.6456 20.6301 13.1105 22.1182 13.1071V10.7959C21.2391 10.6102 20.4441 10.1438 19.8532 9.46693C18.8994 8.84996 18.2413 7.86795 18.0331 6.75122H15.849V18.7119C15.8053 19.779 15.0906 20.7013 14.0682 21.01C13.0458 21.3186 11.9401 20.9459 11.3132 20.0813C10.295 19.5451 9.77243 18.3847 10.0457 17.2669C10.319 16.1491 11.3181 15.3607 12.4688 15.3548C12.7197 15.357 12.9688 15.396 13.2084 15.4704V13.1591C11.0368 13.1959 9.09197 14.5124 8.25091 16.5149C7.40985 18.5174 7.83142 20.8277 9.32553 22.4041C10.2543 23.0313 11.3541 23.3562 12.4746 23.3344C15.5049 23.3344 17.9632 20.8812 17.9696 17.851Z" fill="white"></path> </svg>                        </a>
                    <a href="#" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9999 0C6.71586 0 0 6.71569 0 14.9997C0 23.2847 6.71586 30 14.9999 30C23.2843 30 30 23.2847 30 14.9997C30 6.71569 23.2843 0 14.9999 0" fill="#1ED760"></path> <path d="M21.5494 21.3091C21.2839 21.7445 20.717 21.8809 20.2832 21.6156C16.814 19.4952 12.4472 19.0164 7.30464 20.191C6.80908 20.3046 6.31511 19.9941 6.2022 19.4987C6.08859 19.0032 6.39803 18.5092 6.89464 18.3961C12.5224 17.1097 17.3497 17.6633 21.2438 20.0428C21.678 20.308 21.8147 20.8751 21.5494 21.3091" fill="white"></path> <path d="M23.3571 17.2862C23.023 17.8283 22.3141 17.9984 21.7727 17.6655C17.8025 15.2251 11.7482 14.518 7.05106 15.9438C6.44207 16.1278 5.79867 15.7845 5.6136 15.1764C5.43013 14.5674 5.77361 13.9252 6.38173 13.74C11.7475 12.1117 18.4181 12.9003 22.9781 15.7027C23.5196 16.0361 23.69 16.7453 23.3571 17.2862" fill="white"></path> <path d="M23.5131 13.0974C18.7508 10.2692 10.8956 10.0092 6.34947 11.389C5.61927 11.6105 4.84726 11.1984 4.62621 10.4684C4.40498 9.73787 4.81656 8.96639 5.54711 8.74445C10.7659 7.16039 19.4411 7.4663 24.9235 10.7207C25.5803 11.1106 25.7956 11.9586 25.4064 12.6142C25.0169 13.2708 24.1681 13.4873 23.5131 13.0974" fill="white"></path> </svg>                        </a>
                    <a href="#3" target="_blank"> <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#FF0000"></path> <path d="M22.6656 11.2958C22.4816 10.5889 21.9395 10.0322 21.251 9.84333C20.0034 9.5 15 9.5 15 9.5C15 9.5 9.99664 9.5 8.74891 9.84333C8.06045 10.0322 7.51827 10.5889 7.33427 11.2958C7 12.5769 7 15.25 7 15.25C7 15.25 7 17.923 7.33427 19.2042C7.51827 19.9111 8.06045 20.4678 8.74891 20.6568C9.99664 21 15 21 15 21C15 21 20.0034 21 21.251 20.6568C21.9395 20.4678 22.4816 19.9111 22.6656 19.2042C23 17.923 23 15.25 23 15.25C23 15.25 23 12.5769 22.6656 11.2958" fill="white"></path> <path d="M13.5 18V13L17.5 15.5001L13.5 18Z" fill="#FF0000"></path> </svg>                        </a>
                </div> <p >© VENUS, 2021. Created by Andrea Lepori andrealepori.designer@gmail.com . </p> </div>

                <p class="footer__copyright">Source: <a href="https://canvasjs.com/javascript-charts/synchronized-charts/">https://canvasjs.com/javascript-charts/synchronized-charts/</a></p>


      </footer>
      </div>
</div></div></div></div></div></div></div></div></div></div></div></div>
   </body>
   <script type="text/javascript">
      window.onload = function () {
        var charts = [];
        var toolTip = {
          shared: true
        },
        legend = {
          cursor: "pointer",
          itemclick: function (e) {
            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
            } else {
              e.dataSeries.visible = true;
            }
            e.chart.render();
          }
        };  
      
        var systemDps = [], userDps=[], waitDps = [], buffersDps = [], cacheDps = [], usedDps=[], inboundDps = [], outboundDps = [], writeDps = [], readDps = [];
      
        var cpuChartOptions = {
          animationEnabled: true,
          theme: "light2", // "light1", "light2", "dark1", "dark2"
          title:{
            text: "CPU Utilization"
          },
          toolTip: toolTip,
          axisY: {
            valueFormatString: "#0.#%",
          },
          legend: legend,
          data: [{
            type: "splineArea", 
            showInLegend: "true",
            name: "User",
            yValueFormatString: "#0.#%",
            color: "#64b5f6",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            legendMarkerType: "square",
            dataPoints: userDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "System",
            yValueFormatString: "#0.#%",
            color: "#2196f3",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            legendMarkerType: "square",
            dataPoints: systemDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "Wait",
            yValueFormatString: "#0.#%",
            color: "#1976d2",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            legendMarkerType: "square",
            dataPoints: waitDps
          }]
        };
        var memoryChartOptions = {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Memory Usage"
          },
          axisY: {
            suffix: " GB"
          },
          toolTip: toolTip,
          legend: legend,
          data: [{
            type: "splineArea", 
            showInLegend: "true",
            name: "Cache",
            color: "#e57373",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## GB",
            legendMarkerType: "square",
            dataPoints: cacheDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "Buffers",
            color: "#f44336",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## GB",
            legendMarkerType: "square",
            dataPoints: buffersDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "Used",
            color: "#d32f2f",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## GB",
            legendMarkerType: "square",
            dataPoints: usedDps
          }]
        }
        var networkChartOptions = {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Network Traffic"
          },
          axisY: {
            suffix: " Kb/s"
          },
          toolTip: toolTip,
          legend: legend,
          data: [{
            type: "splineArea", 
            showInLegend: "true",
            name: "Outbound",
            color: "#81c784",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## Kb/s",
            legendMarkerType: "square",
            dataPoints: outboundDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "Inbound",
            color: "#388e3c",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## Kb/s",
            legendMarkerType: "square",
            dataPoints: inboundDps
          }]
        }
        var diskChartOptions = {
          animationEnabled: true,
          theme: "light2",
          title:{
            text: "Disk I/O (IOPS)"
          },
          axisY: {},
          toolTip: toolTip,
          legend: legend,
          data: [{
            type: "splineArea", 
            showInLegend: "true",
            name: "Write",
            color: "#ffb74d",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## ops/second",
            legendMarkerType: "square",
            dataPoints: writeDps
          },{
            type: "splineArea", 
            showInLegend: "true",
            name: "Read",
            color: "#f57c00",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM YY HH:mm",
            yValueFormatString: "#.## ops/second",
            legendMarkerType: "square",
            dataPoints: readDps
          }]
        }
      
        charts.push(new CanvasJS.Chart("chartContainer1", cpuChartOptions));
        charts.push(new CanvasJS.Chart("chartContainer2", memoryChartOptions));
        charts.push(new CanvasJS.Chart("chartContainer3", networkChartOptions));
        charts.push(new CanvasJS.Chart("chartContainer4", diskChartOptions));
      
        $.get("https://canvasjs.com/data/gallery/javascript/server-matrics.json", function(data) {
          for (var i = 1; i < data.length; i++) {
            systemDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].system)});
            userDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].user)});
            waitDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].wait)});
            buffersDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].buffers)});
            cacheDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].cache)});
            usedDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].used)});
            inboundDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].inbound)});
            outboundDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].outbound)});
            writeDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].write)});
            readDps.push({x: parseInt(data[i].time), y: parseFloat(data[i].read)});
          }
          for( var i = 0; i < charts.length; i++){
            charts[i].options.axisX = {
              labelAngle: 0,
              crosshair: {
                enabled: true,
                snapToDataPoint: true,
                valueFormatString: "HH:mm"
              }
            }
          }
      
          syncCharts(charts, true, true, true); // syncCharts(charts, syncToolTip, syncCrosshair, syncAxisXRange)
      
          for( var i = 0; i < charts.length; i++){
            charts[i].render();
          }
      
        });  
      
        function syncCharts(charts, syncToolTip, syncCrosshair, syncAxisXRange) {
      
          if(!this.onToolTipUpdated){
            this.onToolTipUpdated = function(e) {
              for (var j = 0; j < charts.length; j++) {
                if (charts[j] != e.chart)
                  charts[j].toolTip.showAtX(e.entries[0].xValue);
              }
            }
          }
      
          if(!this.onToolTipHidden){
            this.onToolTipHidden = function(e) {
              for( var j = 0; j < charts.length; j++){
                if(charts[j] != e.chart)
                  charts[j].toolTip.hide();
              }
            }
          }
      
          if(!this.onCrosshairUpdated){
            this.onCrosshairUpdated = function(e) {
              for(var j = 0; j < charts.length; j++){
                if(charts[j] != e.chart)
                  charts[j].axisX[0].crosshair.showAt(e.value);
              }
            }
          }
      
          if(!this.onCrosshairHidden){
            this.onCrosshairHidden =  function(e) {
              for( var j = 0; j < charts.length; j++){
                if(charts[j] != e.chart)
                  charts[j].axisX[0].crosshair.hide();
              }
            }
          }
      
          if(!this.onRangeChanged){
            this.onRangeChanged = function(e) {
              for (var j = 0; j < charts.length; j++) {
                if (e.trigger === "reset") {
                  charts[j].options.axisX.viewportMinimum = charts[j].options.axisX.viewportMaximum = null;
                  charts[j].options.axisY.viewportMinimum = charts[j].options.axisY.viewportMaximum = null;
                  charts[j].render();
                } else if (charts[j] !== e.chart) {
                  charts[j].options.axisX.viewportMinimum = e.axisX[0].viewportMinimum;
                  charts[j].options.axisX.viewportMaximum = e.axisX[0].viewportMaximum;
                  charts[j].render();
                }
              }
            }
          }
      
          for(var i = 0; i < charts.length; i++) { 
      
            //Sync ToolTip
            if(syncToolTip) {
              if(!charts[i].options.toolTip)
                charts[i].options.toolTip = {};
      
              charts[i].options.toolTip.updated = this.onToolTipUpdated;
              charts[i].options.toolTip.hidden = this.onToolTipHidden;
            }
      
            //Sync Crosshair
            if(syncCrosshair) {
              if(!charts[i].options.axisX)
                charts[i].options.axisX = { crosshair: { enabled: true }};
      		
              charts[i].options.axisX.crosshair.updated = this.onCrosshairUpdated; 
              charts[i].options.axisX.crosshair.hidden = this.onCrosshairHidden; 
            }
      
            //Sync Zoom / Pan
            if(syncAxisXRange) {
              charts[i].options.zoomEnabled = true;
              charts[i].options.rangeChanged = this.onRangeChanged;
            }
          }
        }  
      
      }
      
   </script>

  
   <!-- plugins:js -->
   <script src="vendors/base/vendor.bundle.base.js"></script>
   <!-- endinject -->
   <!-- Plugin js for this page-->
   <script src="vendors/chart.js/Chart.min.js"></script>
   <script src="vendors/chart.js/mix.js"></script>
   <script src="vendors/datatables.net/jquery.dataTables.js"></script>
   <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
   <!-- End plugin js for this page-->
   <!-- inject:js -->
   <script src="chart_js/off-canvas.js"></script>
   <script src="chart_js/hoverable-collapse.js"></script>
   <script src="chart_js/template.js"></script>
   <script src='chart_js/al-area.js'></script>
   <script src="chart_js/dashboard.js"></script>
   <script src="chart_js/zoomchart.js"></script>
   <script src="chart_js/data-table.js"></script>
   <script src="chart_js/jquery.dataTables.js"></script>
   <script src="chart_js/newcanvas.js"><
   <script src="chart_js/dataTables.bootstrap4.js"></script>
   <script src="https://unpkg.com/react/umd/react.production.min.js"></script>
   <script src="https://unpkg.com/react-dom/umd/react-dom.production.min.js"></script>
   <script src="https://unpkg.com/prop-types/prop-types.min.js"></script>
   <script src="https://unpkg.com/recharts/umd/Recharts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.canvaswrapper.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.colorhelpers.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.saturated.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.browser.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.drawSeries.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.uiConstants.js"></script>
   <script language="javascript" type="text/javascript" src="source/jquery.flot.time.js"></script>
   <script language="javascript" type="text/javascript" src="lib/globalize.js"></script>
   <script language="javascript" type="text/javascript" src="lib/globalize.culture.en-US.js"></script>
   <script  src="chart_js/new.js"></script>
   <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>
   <script type="text/javascript">
      window.onload = function () {  
        var stockChart = new CanvasJS.StockChart("chartContainer",{
      
          height: 500,
          animationEnabled: true,
          exportEnabled: true,
          charts: [{
            axisX: {
              crosshair: {
                enabled: true,
                snapToDataPoint: true
              }
            },
            axisY: {
              crosshair: {
                enabled: true,
                //snapToDataPoint: true
              }
            },
            data: data
          }],    
          rangeSelector: {
            inputFields: {
              startValue: 4000,
              endValue: 6000,
              valueFormatString: "###0"
            },
            
            buttons: [{
              label: "1000",
              range: 1000,
              rangeType: "number"
            },{
              label: "2000",
              range: 2000,
              rangeType: "number"
            },{
              label: "5000",
              range: 5000,
              rangeType: "number"
            },{
              label: "All",        
              rangeType: "all"
            }]
          }
        });
      
        stockChart.render();    
      }
      
      var limit = 10000;    //increase number of dataPoints by increasing this
      var y = 1000;
      var data = []; var dataSeries = { type: "spline" };
      var dataPoints = [];
      for (var i = 0; i < limit; i += 1) {
        y += Math.round((Math.random() * 10 - 5));
        dataPoints.push({ x: i, y: y });
      }
      dataSeries.dataPoints = dataPoints;
      data.push(dataSeries);
   </script>
   <script>
      Plotly.d3.csv("https://raw.githubusercontent.com/plotly/datasets/master/finance-charts-apple.csv", function(err, rows){
      
        function unpack(rows, key) {
        return rows.map(function(row) { return row[key]; });
      }
      
        
      var trace1 = {
        type: "scatter",
        mode: "lines",
        name: 'AAPL High',
        x: unpack(rows, 'Date'),
        y: unpack(rows, 'AAPL.High'),
        line: {color: '#17BECF'}
      }
      
      var trace2 = {
        type: "scatter",
        mode: "lines",
        name: 'AAPL Low',
        x: unpack(rows, 'Date'),
        y: unpack(rows, 'AAPL.Low'),
        line: {color: '#7F7F7F'}
      }
      
      var data = [trace1,trace2];
          
      var layout = {
        title: 'Basic Time Series', 
      };
      
      Plotly.newPlot('myDiv', data, layout, {showSendToCloud: true});
      })
   </script>
  <script src='https://unpkg.com/chart.js@3'></script>
<script src='https://unpkg.com/chartjs-chart-geo@3'></script><script  src="./script.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-sparkline.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-table.min.js"></script>
   <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
   <script src="chart_js/lastchart.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);
      
      function drawRegionsMap() {
      
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);
      
        var options = {};
      
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
      
        chart.draw(data, options);
      }
   </script>
   <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


   
<script>
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Social reaction'
    },
    subtitle: {
        text: 'Coach: Andrea Lepori'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Like',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'Share',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
   </script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
</body>
</html>




