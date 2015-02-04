<!DOCTYPE html>
<html lang="en" ng-app="StarterApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Planning Poker</title>
    
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Angulars Material CSS now available via Google CDN; version 0.7 used here -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.7.0/angular-material.min.css">

    <link rel="stylesheet" href="/css/angular-material.css" >


  </head>
  <body layout="column" ng-controller="AppCtrl">
    <md-toolbar layout="row">
      <button ng-click="toggleSidenav('left')" hide-gt-sm class="menuBtn">
        <span class="visuallyhidden">Menu</span>
      </button>
      <h1>Planning Poker</h1>
    </md-toolbar>
    <div layout="row" flex>
        <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$media('gt-sm')">
          
        </md-sidenav>
        <div layout="column" flex id="content">
            <md-content layout="column" flex class="md-padding">
	            @yield('content')
            </md-content>
        </div>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Angular Material Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-aria.min.js"></script>
    <!-- Angular Material Javascript now available via Google CDN; version 0.7 used here -->
    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.7.1/angular-material.min.js"></script>
  	<script src="js/angular-material.js"></script>
  </body>
</html>