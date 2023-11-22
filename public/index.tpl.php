<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>DKEngine</title>
</head>

<body class="bg-theme bg-theme2">
<!--wrapper-->
<div class="wrapper">
    <header class="login-header shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded fixed-top rounded-0 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <h4 class="logo-text">DKEngine</h4>
                </a>
                <!--ТУТ ВСТАВЛЯТЬ ШАБЛОН ССЫЛОК НАЧАЛО -->
                <?php require 'links.tpl.php' ?>
                <!--ТУТ ВСТАВЛЯТЬ ШАБЛОН ССЫЛОК КОНЕЦ -->
            </div>
        </nav>
    </header>
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mt-5 mt-lg-0">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <!--ТУТ ВСТАВЛЯТЬ ШАБЛОН СТРАНИЦЫ НАЧАЛО -->
                                <?php require 'login.tpl.php' ?>
                                <!--ТУТ ВСТАВЛЯТЬ ШАБЛОН СТРАНИЦЫ КОНЕЦ -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <footer class="bg-light shadow-sm border-top p-2 text-center fixed-bottom">
    </footer>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<!--ТУТ ВСТАВЛЯТЬ ШАБЛОН СКРИПТА ПАРОЛЕЙ НАЧАЛО -->
<?php require 'psw.script.tpl.php' ?>
<!--ТУТ ВСТАВЛЯТЬ ШАБЛОН СКРИПТА ПАРОЛЕЙ КОНЕЦ -->
<!--app JS-->
<script src="assets/js/app.js"></script>
</body>

</html>