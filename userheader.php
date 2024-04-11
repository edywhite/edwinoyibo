<!doctype html>
<?php
session_start();
if(!isset($_SESSION['name']))
{
echo '<script>alert("Log In First");';
   echo 'window.location= "login.php";</script>';
}
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edwin Oyibo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="dashbord/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/owl.carousel.css">
    <link rel="stylesheet" href="dashbord/css/owl.theme.css">
    <link rel="stylesheet" href="dashbord/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="dashbord/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="dashbord/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="dashbord/js/vendor/modernizr-2.8.3.min.js"></script>
</head>  