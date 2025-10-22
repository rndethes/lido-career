<?php
$CI =& get_instance();
$CI->load->model('main_model');
$content_zero = $CI->main_model->getSettingZero();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link
        href="<?= base_url() ?>assets/img/img-landing/logo_webpage.png"
        rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>
        Login
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="<?= base_url() ?>assets/build/css/intlTelInput.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <style>
        .btn{
            background-color: <?= $content_zero['warna']; ?> !important;
        }

        .mask{
            background-color: <?= $content_zero['warna']; ?> !important;
        }

        .text-danger{
            color: <?= $content_zero['warna']; ?> !important;
        }

        /* Add styles for the privacy policy */
      .privacy-policy {
        width: 80%;
        margin: 0 auto;
        font-size: 14px;
        line-height: 1.5;
      }

      .privacy-policy h1,
      .privacy-policy h2,
      .privacy-policy h3 {
        font-weight: bold;
        margin-top: 30px;
      }

      .privacy-policy p {
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .privacy-policy table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
      }

      .privacy-policy th,
      .privacy-policy td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      .privacy-policy th {
        background-color: #ddd;
        font-weight: bold;
      }
      
    </style>
 
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">

    </div>