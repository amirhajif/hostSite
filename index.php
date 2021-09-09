<?php
session_start();
include("checkFile/countVisitor.php");
if (isset($_SESSION['firstLogin'])) {
  unset($_SESSION['firstLogin']);
  echo '<script>window.alert("به فروش هاست ما خوش آمدید")</script>';
}
if (isset($_SESSION['adminFirstLogin'])) {
  unset($_SESSION['adminFirstLogin']);
  echo '<script>alert("ادمین خوش آمدی")</script>';
}
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
  <title>IranHost.Ir | ایران هاست</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6 mt-5 mt-lg-0">
          <h4 class="fw-bold"><span class="text-primary">ایران </span><span class="text-secondary">هاست</span></h4>
          <p class="lead text-secondary">
            ایران هاست یه سایت ارائه دهنده هاسته که میتونی خیلی راحت هاست مناسب خودتو پیدا کنی و سایت خودتو بسانی،اگه عضو سایت ما نیستی میتونی از دکمه زیر ثبت نام کنی یا اینکه از اون یکی دکمه محصولات مارو ببینی
          </p>
          <a class="btn btn-primary" href="./signup.php">ثبت نام</a>
          <a class="btn btn-outline-secondary ms-4" href="./allProducts.php">دیدن محصولات</a>
        </div>
        <div class="col-sm-6">
          <img src="./img/header-img.png" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <br />
  <br />
  <section>
    <div class="container">
      <div class="row mt-2 mb-3 text-center">
        <hr>
        <br>
        <h4 class="fw-bold py-4">چه ویژگی هایی هاست های مارو منحصر به فرد کرده؟</h4>
        <hr>
      </div>
      <div class="row text-center justify-content-evenly">
        <div class="col-md-2 mt-5 mt-sm-0">
          <img src="img/server.svg" width="150" class="img-fluid" alt="" />
          <h6 class="fw-bold text-muted mt-2">امن بودن</h6>
        </div>
        <div class="col-md-2 mt-5 mt-sm-0">
          <img src="img/elearning.svg" width="150" class="img-fluid" alt="" />
          <h6 class="fw-bold text-muted mt-2">ذخیره سازی ابری</h6>
        </div>
        <div class="col-md-2 mt-5 mt-sm-0">
          <img src="img/license.svg" width="150" class="img-fluid" alt="" />
          <h6 class="fw-bold text-muted mt-2">لایسنس اورجینال</h6>
        </div>
        <div class="col-md-2 mt-5 mt-sm-0">
          <img src="img/backup.svg" width="150" class="img-fluid" alt="" />
          <h6 class="fw-bold text-muted mt-2">بکاپ اطلاعات</h6>
        </div>
        <div class="col-md-2 mt-5 mt-sm-0">
          <img src="img/transparent.svg" width="150" class="img-fluid" alt="" />
          <h6 class="fw-bold text-muted mt-2">همگام بودن با تکنولوژی</h6>
        </div>
      </div>
    </div>
  </section>
  <br />
  <br />
  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #f8f9fa"></path>
    </svg>
  </div>

  <section class="bg-light">
    <div class="container mt-lg-0">
      <div class="row align-items-center">
        <div class="col-md-5">
          <p class="fw-bold lead my-3">ایران هاست دیگه چه ویژگی هایی داره؟</p>
          <p class="lead text-secondary">
            ما تو ایران هاست با بیش از 10 سال سابقه، از بهترین نیروی های متخصص
            و تحصیل کرده استفاده کردیم تا بتونیم بهترین کیفیت رو به مشتری
            هامون ارائه بدیم همچنین از درگاه های ایمن و مطئمن استفاده میکنیم
            که امنیت حساب بانکی شمارو تضمین کنه و در اخر پشتیبانی 24 ساعته!
          </p>
        </div>
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-6">
              <div class="card text-center shadow mt-3">
                <div class="card-body">
                  <i class="fas fa-user-graduate icon fa-2x"></i>
                  <p class="lead card-title fw-bold my-3">کادر تحصیل کرده</p>
                  <p class="card-text text-muted">
                    کادر تحصیل کرده دارای مدرک تخصصی
                  </p>
                </div>
              </div>

              <div class="card text-center shadow mt-4">
                <div class="card-body">
                  <i class="fas fa-money-check-alt icon fa-2x"></i>
                  <p class="lead card-title fw-bold my-3">درگاه ایمن</p>
                  <p class="card-text text-muted">
                    درگاه ایمن برای حفظ اطلاعات بانکی شما
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card text-center shadow mt-5">
                <div class="card-body">
                  <i class="fas fa-certificate icon fa-2x"></i>
                  <p class="lead card-title fw-bold my-3">سابقه بالا</p>
                  <p class="card-text text-muted">بیش از 10 سال سابقه</p>
                </div>
              </div>

              <div class="card text-center shadow mt-4">
                <div class="card-body">
                  <i class="fas fa-headset fa-2x icon"></i>
                  <p class="lead card-title fw-bold my-3">پشتیبانی</p>
                  <p class="card-text text-muted">پشتیبانی 24 ساعته</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #f8f9fa"></path>
    </svg>
  </div>

  <section>
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold">محصولات پرفروش ما</h4>
        <p class="lead text-muted">
          3 محصولی که کاربران تو یک ماه گذشته بیشترین خرید رو از ما داشتن
        </p>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="card text-center shadow mt-4 py-4 position-relative">
            <span class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                ">
              <span>Code:</span><span>hl-1</span>
            </span>

            <div class="card-body">
              <i class="fab fa-linux fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">هاست لینوکس</p>
              <p class="lead card-title fw-bold my-3">نسخه لینوکس:اوبونتو</p>

              <p class="card-text text-muted">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span> <span>15,000</span>
              </p>
              <p class="card-text text-muted">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> Intel Core i5 </span> <span>:CPU</span>
              </p>
              <p class="card-text text-muted">
                <span> 1TB </span> <span>:ROM</span>
              </p>
              <br />
              <button class="btn btn-primary">
                <span><i class="bi bi-cart-plus"></i></span> افزودن به سید
                خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center shadow mt-4 py-5 card-black position-relative">
            <span class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-dark
                  fw-bold
                  fs-6
                ">
              <span>Code:</span><span>hw-2</span>
            </span>

            <div class="card-body">
              <i class="fab fa-windows icon fa-2x"></i>
              <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
              <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

              <p class="card-text black-card-text">
                اشتراک دوماهه به همراه 20 روز هدیه
              </p>
              <p class="card-text black-card-text">
                <span> قیمت(تومان): </span> <span>35,000</span>
              </p>
              <p class="card-text black-card-text">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text black-card-text">
                <span> Intel Core i7 </span> <span>:CPU</span>
              </p>
              <p class="card-text black-card-text">
                <span> 1TB</span> <span>:ROM</span>
              </p>
              <br />
              <button class="btn btn-light">
                <span><i class="bi bi-cart-plus"></i></span> افزودن به سید
                خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center shadow mt-4 py-4 position-relative">
            <span class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                ">
              <span>Code:</span><span>hm-1</span>
            </span>

            <div class="card-body">
              <i class="fab fa-apple icon fa-2x"></i>
              <p class="lead card-title fw-bold my-3">هاست مک</p>
              <p class="lead card-title fw-bold my-3">
                نسخه مک اوس:12(Montrey)
              </p>

              <p class="card-text text-muted">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span> <span>35,000</span>
              </p>
              <p class="card-text text-muted">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> M1 </span> <span>:CPU</span>
              </p>
              <p class="card-text text-muted">
                <span> SSD 256 </span> <span>:ROM</span>
              </p>
              <br />
              <button class="btn btn-primary">
                <span><i class="bi bi-cart-plus"></i></span> افزودن به سید
                خرید
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section id="carousel-section">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold">هاست های موجود</h4>
        <p>
          در حال حاصر هاست های ویندوز،لینوکس و مک موجود است
        </p>
      </div>
      <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="active carousel-button-style"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/carousel-img-1.jpg" class="d-block w-100 rounded-3" alt="..." />
              <div class="carousel-caption d-md-block text-start">
                <h5 class="ms-4">هاست های ویندوزی</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/carousel-img-2.jpg" class="d-block w-100 rounded-3" alt="..." />
              <div class="carousel-caption d-md-block">
                <h5>هاست های لینوکسی</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/carousel-img-3.jpg" class="d-block w-100 rounded-3" alt="..." />
              <div class="carousel-caption d-md-block text-end">
                <h5 class="me-5">هاست های مک</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon ms-5" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon me-5" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <a class="btn btn-outline-light mt-4" href="./allProducts.php">رفتن به دسته بندی</a>
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section>
    <div class="container">
      <div class="row text-center">
        <h3 class="fw-bold">
          <i class="bi bi-question-circle fs-3"></i> <bdi>سوالات متداول</bdi>
        </h3>
      </div>
      <div class="row my-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                چجوری هاست رو بخریم؟
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted">
                کاری نداره فقط کافیه که وارد سایت ما و حسابت بشی،هاست مورد نظرتو انتخاب کنی و بعدش به سبد خریدت بری و خریدتو انجام بدی،اگه اکانت نداری همین حالا ثبت نام کن !
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                هاست چجوری به دستم میرسه؟
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted">
                بعد خرید،یه یوزر نیم و پسوورد به ایمیلت ارسال میشه که با اون باید به کامپیوتر هاستت وصل بشی(از طریق ریموت دسکتاپ)
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ایمیل ارسالی یوزر پاس رو ندارم یا گم کردم!
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted">
                نگران نباش کافیه با بخش پشتیبانی ما تماس بگیری و مشکلت رو با اونا مطرح کنی
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                خرید کردم ولی لینکی برام نیومد!
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted">
                بعضی وقتا بدلیل مشکلات بانکی و درگاه ممکنه عملیات پرداخت با مشکل مواجه بشه،شناسه پیگیری و زمان پرداخت و نوع محصول رو به پشتیبانی بگید تا پیگیری کنن
              </div>
            </div>
          </div>

        </div>
      </div>
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
                <li><a href=""><span> دانلود برای اندروید </span> <span><i class="fab fa-google-play"></i></span> </a></li>
                <li class="mt-3"><a href=""><span> دانلود برای ای او اس </span> <span><i class="fab fa-app-store-ios"></i></span> </a></li>

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
                <li><a href=""><span>تلفن:</span> <span dir="ltr">021-12345678</span> </a></li>
                <li class="my-3"><a href=""><span>آدرس:</span> <span>تهران،تجریش،ساختمان ایران هاست</span> </a></a></li>
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