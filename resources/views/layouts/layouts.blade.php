<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>In Vehicle Security Testbed</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #E2E5E8;
        }

        .navbar {
            background-color: #ffffff;
            width: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .navbar-inner {
            display: flex;
            justify-content: space-between;
            padding-top: 10px;
            padding-right: 50px;
            padding-bottom: 10px;
            padding-left: 50px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #4F2984;
            color: #ffffff;
        }

        .content {
            text-align: center;
            align-items: center;
            flex: 1;
            justify-content: center;
        }

        .content h1 {
            text-align: center;
            margin-top: 120px;
        }

        .content h2 {
            text-align: center;
            margin-top: 20px;
        }

        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            color: #ffffff;
            height: 60px;
            line-height: 60px;
            background-color: #4F2984;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="navbar-left">
                <li>
                    <a href="/" style="display:contents;">
                        <img src="/img/Xive-cropped.png" class="tntech" width="150">
                    </a>
                </li>
            </ul>
            <ul class="navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="/jobs/create">Create Job</a></li>
                <li><a href="/result">View Result</a></li>
            </ul>
        </div>
    </div>

    @yield('content')
</body>
<footer>
    <div id="copyright text-right">© Copyright 2021 Tennessee Technological University.</div>
</footer>

</html>