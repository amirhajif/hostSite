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
  <title>Products | محصولات</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <section class="mt-5">
    <div class="container">
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
                <a href="./window.php" class="btn btn-primary ms-4">رفتن به دسته بندی</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/carousel-img-2.jpg" class="d-block w-100 rounded-3" alt="..." />
              <div class="carousel-caption d-md-block">
                <h5>هاست های لینوکسی</h5>
                <a href="./linux.php" class="btn btn-secondary">رفتن به دسته بندی</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/carousel-img-3.jpg" class="d-block w-100 rounded-3" alt="..." />
              <div class="carousel-caption d-md-block text-end">
                <h5 class="me-5">هاست های مک</h5>
                <a href="./mac.php" class="btn btn-light me-5">رفتن به دسته بندی</a>
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
          <button class="btn btn-outline-light mt-4">
            رفتن به دسته بندی
          </button>
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section class="blue-bg">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold text-start mt-4 text-light">
          <span><i class="bi bi-percent fs-3"></i></span><span> فروش ویژه </span>
        </h4>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="card text-center shadow my-4 py-4 position-relative">
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
              <span>Code:</span><span>hs-1</span>
            </span>
            <div class="card-body">
              <i class="fab fa-linux fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">هاست لینوکس</p>
              <p class="lead card-title fw-bold my-3">نسخه لینوکس:اوبونتو</p>

              <p class="card-text text-muted">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span>
                <span class="text-danger fw-bold"> <del>15,000</del> </span><span class="text-success fw-bold"> 8,000 </span>
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
          <div class="card text-center shadow my-4 py-4 position-relative">
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
              <span>Code:</span><span>hs-2</span>
            </span>
            <div class="card-body">
              <i class="fab fa-windows icon fa-2x"></i>
              <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
              <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

              <p class="card-text text-muted">
                اشتراک دوماهه به همراه 20 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span>
                <span class="text-danger fw-bold"> <del>35,000</del> </span><span class="text-success fw-bold"> 20,000 </span>
              </p>
              <p class="card-text text-muted">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> Intel Core i7 </span> <span>:CPU</span>
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
          <div class="card text-center shadow my-4 py-4 position-relative">
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
              <span>Code:</span><span>hs-3</span>
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
                <span> قیمت(تومان): </span>
                <span class="text-danger fw-bold"> <del>35,000</del> </span><span class="text-success fw-bold"> 18,000 </span>
              </p>
              <p class="card-text text-muted">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> M1 </span> <span>:CPU</span>
              </p>
              <p class="card-text text-muted">
                <span> 256SSD </span> <span>:ROM</span>
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
      <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section>
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold text-start mt-4 text-light">
          <span><i class="fab fa-linux fa-2x text-dark"></i></span><span class="text-dark"> هاست های لینوکس </span>
        </h4>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="
                card
                text-center
                shadow
                mt-4
                py-4
                position-relative
                card-black
              ">
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
              <span>Code:</span><span>hl-1</span>
            </span>
            <div class="card-body">
              <i class="fab fa-linux fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">هاست لینوکس</p>
              <p class="lead card-title fw-bold my-3">نسخه لینوکس:اوبونتو</p>

              <p class="card-text black-card-text">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text black-card-text">
                <span> قیمت(تومان): </span> <span>15,000</span>
              </p>
              <p class="card-text black-card-text">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text black-card-text">
                <span> Intel Core i5 </span> <span>:CPU</span>
              </p>
              <p class="card-text black-card-text">
                <span> 1TB </span> <span>:ROM</span>
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
          <div class="
                card
                text-center
                shadow
                mt-4
                py-4
                position-relative
                card-black
              ">
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
              <span>Code:</span><span>hl-4</span>
            </span>
            <div class="card-body">
              <i class="fab fa-linux fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">
                <span> هاست </span><span> لینوکس </span>
              </p>
              <p class="lead card-title fw-bold my-3">
                <span>نسخه لینوکس:</span><span>کالی</span>
              </p>

              <p class="card-text black-card-text">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text black-card-text">
                <span> قیمت(تومان): </span> <span>15,000</span>
              </p>
              <p class="card-text black-card-text">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text black-card-text">
                <span> Intel Core i5 </span> <span>:CPU</span>
              </p>
              <p class="card-text black-card-text">
                <span> 1TB </span> <span>:ROM</span>
              </p>
              <br />
              <button class="btn btn-light">
                <span><i class="bi bi-cart-plus"></i></span> افزودن به سید
                خرید
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <hr class="seperator" />
          <br />
          <a href="./linux.php" class="text-decoration-none">
            <i class="bi bi-chevron-left fs-1"></i>
            <h3>مشاهده بیشتر...</h3>
          </a>
          <br />
          <hr class="seperator" />
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section class="blue-bg">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold text-start mt-4 text-light">
          <span><i class="fab fa-windows fa-2x text-light"></i></span><span class="text-light"> هاست های ویندوز </span>
        </h4>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4 text-center order-last order-md-first">
          <hr class="seperator bg-white" />
          <br />
          <a href="./window.php" class="text-decoration-none text-white">
            <i class="bi bi-chevron-right fs-1"></i>
            <h3>مشاهده بیشتر...</h3>
          </a>
          <br />
          <hr class="seperator bg-white" />
        </div>
        <div class="col-md-4">
          <div class="card text-center shadow my-4 py-4 position-relative">
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
              <span>Code:</span><span>hw-4</span>
            </span>
            <div class="card-body">
              <i class="fab fa-windows fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
              <p class="lead card-title fw-bold my-3">
                <span>نسخه ویندوز:</span><span>10</span>
              </p>

              <p class="card-text text-muted">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span> <span>30,000</span>
              </p>
              <p class="card-text text-muted">
                <span> 12GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> Intel Core i7 </span> <span>:CPU</span>
              </p>
              <p class="card-text text-muted">
                <span> 1TB + 128 SSD </span> <span>:ROM</span>
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
          <div class="card text-center shadow my-4 py-4 position-relative">
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
              <span>Code:</span><span>hw-1</span>
            </span>
            <div class="card-body">
              <i class="fab fa-windows fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">
                <span> هاست </span><span> ویندوز </span>
              </p>
              <p class="lead card-title fw-bold my-3">
                <span>نسخه ویندوز:</span><span>10</span>
              </p>

              <p class="card-text text-muted">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text text-muted">
                <span> قیمت(تومان): </span> <span>20,000</span>
              </p>
              <p class="card-text text-muted">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text text-muted">
                <span> Intel Core i7 </span> <span>:CPU</span>
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
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #0d6efd"></path>
    </svg>
  </div>

  <section class="mb-5">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold text-start mt-4 text-light">
          <span><i class="fab fa-apple fa-2x text-dark"></i></span><span class="text-dark"> هاست های مک </span>
        </h4>
      </div>
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="
                card
                text-center
                shadow
                mt-4
                py-4
                position-relative
                card-black
              ">
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
              <span>Code:</span><span>hm-2</span>
            </span>
            <div class="card-body">
              <i class="fab fa-apple fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">هاست مک</p>
              <p class="lead card-title fw-bold my-3">
                <span>نسخه مک: </span><span>12(Montrey)</span>
              </p>

              <p class="card-text black-card-text">
                اشتراک دو ماهه به همراه 20 روز هدیه
              </p>
              <p class="card-text black-card-text">
                <span> قیمت(تومان): </span> <span>65,000</span>
              </p>
              <p class="card-text black-card-text">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text black-card-text">
                <span> M1 </span> <span>:CPU</span>
              </p>
              <p class="card-text black-card-text">
                <span> 256SSD </span> <span>:ROM</span>
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
          <div class="
                card
                text-center
                shadow
                mt-4
                py-4
                position-relative
                card-black
              ">
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
              <span>Code:</span><span>hm-4</span>
            </span>
            <div class="card-body">
              <i class="fab fa-apple fa-2x icon"></i>
              <p class="lead card-title fw-bold my-3">
                <span> هاست </span><span> مک </span>
              </p>
              <p class="lead card-title fw-bold my-3">
                <span>نسخه مک:</span><span>12(Montrey)</span>
              </p>

              <p class="card-text black-card-text">
                اشتراک یک ماهه به همراه 10 روز هدیه
              </p>
              <p class="card-text black-card-text">
                <span> قیمت(تومان): </span> <span>30,000</span>
              </p>
              <p class="card-text black-card-text">
                <span> 8GB </span> <span>:RAM</span>
              </p>
              <p class="card-text black-card-text">
                <span> Intel Core i5 </span> <span>:CPU</span>
              </p>
              <p class="card-text black-card-text">
                <span> 256SSD </span> <span>:ROM</span>
              </p>
              <br />
              <button class="btn btn-light">
                <span><i class="bi bi-cart-plus"></i></span> افزودن به سید
                خرید
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <hr class="seperator" />
          <br />
          <a href="./mac.php" class="text-decoration-none">
            <i class="bi bi-chevron-left fs-1"></i>
            <h3>مشاهده بیشتر...</h3>
          </a>
          <br />
          <hr class="seperator" />
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