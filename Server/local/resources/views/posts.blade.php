<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{$posts->title}}|Franary Blog </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="single">

<div class="fh5co-loader"></div>

<div id="page">
    <div id="fh5co-aside" style="background-image: url(/images/image_2.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <nav role="navigation">
            <ul>
                <li><a href="/"><i class="icon-home"></i></a></li>
            </ul>
        </nav>
        <div class="page-title">
            <img src="/images/person_2.jpg" alt="Free HTML5 by FreeHTMl5.co">
            <span>{{$posts->created_at}}</span>
            <h2>{{$posts->title}} </h2>
        </div>
    </div>
    <div id="fh5co-main-content">
        <div class="fh5co-post">
            <div class="fh5co-entry padding">
                <div>
                    <p>作者:{{$posts->user->name}} <br>浏览次数:{{$posts->view}}  <br>发布时间:{{$posts->created_at}}</p>
                      {!!$markdown!!}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="fh5co-navigation">
    <div class="fh5co-cover prev fh5co-cover-sm" style="background-image: url(/images/pro-4.jpg)">
        <div class="overlay"></div>
        <a class="copy" href="/posts/{{$posts->id-1}}">
            <div class="display-t">
                <div class="display-tc">
                    <div>
                        <span>上一篇文章</span>
                        <h2>Last</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
    <div class="fh5co-cover next fh5co-cover-sm" style="background-image: url(/images/pro-5.jpg)">
        <div class="overlay"></div>
        <a class="copy" href="/posts/{{$posts->id+1}}">
            <div class="display-t">
                <div class="display-tc">
                    <div>
                        <span>下一篇文章</span>
                        <h2>Next</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
</div>

<footer>
    <div>
        <p>&copy; 2017 BLOG BY FRANRY</p>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="/js/main.js"></script>

</body>
</html>
