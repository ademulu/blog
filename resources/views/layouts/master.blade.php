<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Blog Adem ULU</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!--Theme CSS -->
    <link href={{asset("css/toastr.min.css")}} rel="stylesheet">
    <link href={{asset("css/bootstrap-switch.min.css")}} rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link href={{asset("vendor/summernote/summernote.css")}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href={{asset("css/clean-blog.min.css")}} rel="stylesheet">
    <link href={{asset("css/custom.css")}} rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container" id="topbar">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="/"><i class="fa fa-home">Ana Sayfa</i></a></li>
                    <li><a href="/login" class="uyelik-tus"><i class="fa fa-sign-in-alt">Üye Girişi</i></a></li>
                    <li><a href="/register" class="uyelik-tus"><i class="fa fa-users">Üye Ol</i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <!--a class="navbar-brand" href="index.html">Start Bootstrap</a-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('icerik')

<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src={{asset("vendor/jquery/jquery.min.js")}}></script>
<script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

<script src={{asset("vendor/summernote/summernote.min.js")}}></script>
<script src={{asset("vendor/summernote/lang/summernote-tr-TR.js")}}></script>
<script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js")}}></script>

<!-- Custom scripts for this template -->
<script src={{asset("js/clean-blog.min.js")}}></script>
<script src={{asset("js/custom.js")}}></script>
<script src={{asset("js/laravel-delete.js")}}></script>
<script src={{asset("js/bootstrap-switch.min.js")}}></script>
<script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js")}}></script>

</body>

</html>
