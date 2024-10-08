<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/aa.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="/niceadmin/assets/css/style.css" rel="stylesheet">
    <style>
        .trix-button-group.trix-button-group--file-tools {
            display: none;
        }
    </style>

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">Karyamulya</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item pe-3">

                <a class="nav-link" href="#">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-dark px-3" type="submit">Logout <span data-feather="log-out"
                                class="align-text-bottom"></span></button>
                    </form>
              
                </a><!-- End Profile Iamge Icon -->

   
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/post">
                <i class="bi bi-journal-text"></i><span>Forms</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link" href="/faq">
                <i class="bi bi-question-circle"></i>
                <span>Contact</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <section class="section dashboard" style="min-height: 80vh">
        @yield('container')
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/niceadmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/niceadmin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="/niceadmin/assets/vendor/echarts/echarts.min.js"></script>
<script src="/niceadmin/assets/vendor/quill/quill.min.js"></script>
<script src="/niceadmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/niceadmin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/niceadmin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/niceadmin/assets/js/main.js"></script>
<script>
    // prevents attachments:
    document.addEventListener("trix-file-accept", function(event) {
        event.preventDefault();
    });
</script>

</body>

</html>
