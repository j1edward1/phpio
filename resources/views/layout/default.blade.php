<!doctype html>
<html>
<head>
    <!-- my head section goes here -->
    <!-- my css and js goes here -->
    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- load fontawesome -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .comment {
            padding-bottom: 20px;
        }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <!-- load angular -->

    <script src="js/controllers/mainCtrl.js"></script>
    <!-- load our controller -->
    <script src="js/services/postService.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->


    @yield('view_js')
    @yield('view_css')
</head>
<body>
<div class="container">
    <header> @include('layout.header') </header>
    <div class="contents"> @yield('view_content') </div>
    <footer> @include('layout.footer') </footer>
</div>
</body>
</html>