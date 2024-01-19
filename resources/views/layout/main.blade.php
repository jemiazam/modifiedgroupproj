<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Sidebars · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Vendor Styles -->
  <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css">

  <!-- Main Theme Styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

  <style>

body {
        font-family: Arial, sans-serif;
        margin: 100px;
        padding: 0;
    }

    /* start club styling */

    .content {
        padding: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
    width: calc(33.33% - 20px);
    background-color: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    padding: 10px;
    margin-bottom: 20px;
    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
    box-sizing: border-box;
    }

    .card:hover {
        background-color: #8bc34a;
        transform: translateY(-5px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .card-img-top {
        border-radius: 10px;
        object-fit: cover;
    }

    .card-body {
        padding: 10px;
    }

    .card-title {
        font-size: 16px;
        margin-bottom: 5px;
        text-align: center;
    }

    .card-text {
        margin-bottom: 10px;
        text-align: center;
    }

    .btn {
        display: inline-block;
        padding: 5px 15px;
        border-radius: 20px;
        background-color: #2196f3;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #1976d2;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* end club styling */

    /* start member table styling */

    .table {
      margin:90px
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
    }

.table th {
background-color: #333; /* Custom header background color */
color: #6AC5BD; /* Custom header text color */
}

.table td,
.table th {
padding: 10px; /* Custom cell padding */
border: 1px solid #ccc; /* Custom cell border */
}

    /* end member table styling */

        /* start friend table styling */

        .friendtable {
            width: 100%;
            border-collapse: collapse;
        }

        .friendtable th,
        .friendtable td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .friendtable th {
            background-color: #f5f5f5;
        }

        .friendtable tbody tr:hover {
            background-color: #f9f9f9;
        }

    /* end friend table styling */

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>

  <!-- Custom styles for this template -->
  {{-- <link href="sidebars.css" rel="stylesheet"> --}}
</head>

<body>
@yield('content')
</body>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendor Scripts -->
  <script src="assets/vendor/rellax/rellax.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/lightgallery/lightgallery.min.js"></script>
  <script src="assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
  <script src="assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
  <script src="assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>

  <!-- Main Theme Script -->
  <script src="assets/js/theme.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>
