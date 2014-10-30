<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exmed Doc</title>

    <!-- Core CSS - Include with every page -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('font-awesome/css/font-awesome.css') }}

    <!-- Page-Level Plugin CSS - Dashboard -->
    {{ HTML::style('css/plugins/morris/morris-0.4.3.min.css') }}
    {{ HTML::style('css/plugins/timeline/timeline.css') }}
	{{ HTML::style('global.css') }}

 <!-- Page-Level Plugin CSS - Tables -->
    {{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css') }}

    <!-- SB Admin CSS - Include with every page -->
    {{ HTML::style('css/sb-admin.css') }}

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Doctor's Update</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                    
                    
                   
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li><a href="profile"><i class="fa fa-user fa-fw"></i> Users Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
