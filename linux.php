<?php
require_once "products/products.php";
session_start();
try {
  $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
  echo $exception;
}
mysqli_query($link, "SET NAMES utf8");
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-XfhC/Sid4FIGSXYebcOtcSCRFkd/zZzAMVipf0bNWucloRvcKK2/dpVWodQbQ1Ek" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/e95a8ce8bc.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./style.css" />
  <title>Linux | لینوکس</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <section class="mt-3">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold text-start mt-4 text-dark mb-3">
          <span><i class="fab fa-linux fa-2x"></i></span><span> هاست های لینوکس </span>
        </h4>
      </div>
      <div class="row align-items-center">
        <?php
        $query = "SELECT * FROM linuxhost";
        $result = mysqli_query($link, $query);
        foreach ($result as $product) {
          showProduct("fab fa-linux icon fa-2x","لینوکس", $product['code'], $product['version'], $product['title'], $product['price'], $product['ram'], $product['cpu'], $product['rom']);
        }
        ?>
      </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #212529"></path>
    </svg>
  </div>

  <footer class="bg-dark">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-6">
          <h3 class="fw-bold">ایران هاست</h3>
          <p>ما را در شبکه های اجتماعی دنبال کنید</p>
          <a href=""><i class="bi bi-instagram fs-3"></i></a>
          <a href=""><i class="bi bi-facebook fs-3 ms-5"></i></a>
          <a href=""><i class="bi bi-linkedin fs-3 ms-5"></i></a>
          <a href=""><i class="bi bi-telegram fs-3 ms-5"></i></a>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 mt-5 mt-sm-0">
              <h6 class="fw-bold">دانلود اپلیکیشن سایت</h6>
              <hr />
              <ul class="list-unstyled">
                <li>
                  <a href=""><span> دانلود برای اندروید </span>
                    <span><i class="fab fa-google-play"></i></span>
                  </a>
                </li>
                <li class="mt-3">
                  <a href=""><span> دانلود برای ای او اس </span>
                    <span><i class="fab fa-app-store-ios"></i></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 mt-5 mt-sm-0">
              <h6 class="fw-bold">پشتیبانی و واحد فنی</h6>
              <hr />
              <ul class="list-unstyled">
                <li><a href="">پشتیبانی</a></li>
                <li class="my-3"><a href="">گزارش مشکل</a></li>
                <li><a href="">ارتباط با واحد فنی</a></li>
              </ul>
            </div>
            <div class="col-md-4 mt-5 mt-sm-0">
              <h6 class="fw-bold">راه ارتباطی و آدرس</h6>
              <hr />
              <ul class="list-unstyled">
                <li>
                  <a href=""><span>تلفن:</span> <span dir="ltr">021-12345678</span>
                  </a>
                </li>
                <li class="my-3">
                  <a href=""><span>آدرس:</span>
                    <span>تهران،تجریش،ساختمان ایران هاست</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>