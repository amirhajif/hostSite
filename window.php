<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
mysqli_query($link,"SET NAMES utf8");
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-XfhC/Sid4FIGSXYebcOtcSCRFkd/zZzAMVipf0bNWucloRvcKK2/dpVWodQbQ1Ek"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <script
      src="https://kit.fontawesome.com/e95a8ce8bc.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="./style.css" />
    <title>Windows | ویندوز</title>
  </head>

  <body>
    <header class="shadow">
      <nav
        class="navbar navbar-expand-lg navbar-light bg-light align-items-center"
      >
        <div class="container">
          <a class="navbar-brand lead" href="#">
            <img src="./img/logo.png" alt="" height="65px" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link me-3" aria-current="page" href="#">
                  <i class="bi bi-house fs-5"></i><bdi> خانه </bdi>
                </a>
              </li>
              <li class="nav-item dropdown" id="drop-down-menu">
                <a
                  class="nav-link dropdown-toggle me-3"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="bi bi-list fs-5"></i
                  ><bdi class="text-dark"> دسته بندی </bdi>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="window.php"
                      ><i class="fab fa-windows"></i
                      ><span> هاست ویندوز </span></a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="linux.php"
                      ><i class="fab fa-linux"></i><span> هاست لینوکس </span></a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="mac.php"
                      ><i class="fab fa-apple"></i><span> هاست مک </span></a
                    >
                  </li>

                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-network-wired"></i
                      ><span> دسته بندی کلی </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  href="#"
                  tabindex="-1"
                  aria-disabled="true"
                >
                  <i class="bi bi-at fs-5"></i><bdi>تماس با ما</bdi>
                </a>

                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          فرم تماس با ما
                        </h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>

                      <form action="">
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"
                              >ارسال به ایمیل</label
                            >
                            <input
                              type="text"
                              class="form-control text-end"
                              id="recipient-name"
                              value="info@email"
                              disabled
                            />
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label"
                              >پیام شما</label
                            >
                            <textarea
                              class="form-control"
                              id="message-text"
                              rows="8"
                            ></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            بستن
                          </button>
                          <button type="submit" class="btn btn-primary">
                            ارسال پیام
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <form action="" class="d-flex mt-md-1 ms-md-4 my-md-0 my-4">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="جست و جو ..."
                  />
                  <button class="btn btn-outline-primary ms-1" type="submit">
                    <i class="bi bi-search"></i>
                  </button>
                </form>
              </li>
            </ul>
            <div class="ms-auto">
              <span class="me-4 position-relative" id="cart-link">
                <a href=""><i class="bi bi-cart fs-5"></i> سبد خرید</a>
                <span
                  class="
                    position-absolute
                    bottom-99
                    start-0
                    translate-middle
                    badge
                    rounded-circle
                    bg-danger
                  "
                >
                  2
                </span>
              </span>
              <span
                > <a
                          class="btn btn-outline-primary rounded-pill"
                          style="width: 120px"
                  <?php
                  if (isset($_SESSION['admin']))
                  {
                      ?>
                      href="admin-dashboard.php"
                      <?php
                  }
                  if (isset($_SESSION['active']) && !(isset($_SESSION['admin']))){
                      ?>
                      href="user-dashboard.php"
                      <?php
                  }
                  if (!(isset($_SESSION['admin'])) && !(isset($_SESSION['active']))){
                      ?>
                      href="login.php"
                      <?php
                  }
                  ?>
                >
                      <?php
                      if (isset($_SESSION['admin']))
                      {
                          ?>
                          پنل مدیریت
                          <?php
                      }
                      if (isset($_SESSION['active']) && !(isset($_SESSION['admin']))){
                          ?>
                          صفحه شخصی
                          <?php
                      }
                      if (!(isset($_SESSION['admin'])) && !(isset($_SESSION['active']))){
                          ?>
                          ورود
                          <?php
                      }
                      ?>
                </a></span
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section class="mt-3">
      <div class="container">
        <div class="row text-center">
          <h4 class="fw-bold text-start mt-4 text-dark mb-3">
            <span><i class="fab fa-windows fa-2x"></i></span
            ><span> هاست های ویندوز </span>
          </h4>
        </div>
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="card text-center shadow my-4 py-4 position-relative">
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                  <?php
                  $query="SELECT * FROM windowshost WHERE code='hw-1' ";
                  $result=mysqli_query($link,$query);
                  $row=mysqli_fetch_array($result);
                  ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
              <div class="card-body">
                <i class="fab fa-windows icon fa-2x"></i>
                <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                <p class="card-text text-muted">
                  <?php echo $row['title'];  ?>
                </p>
                <p class="card-text text-muted">
                  <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                </p>
                <p class="card-text text-muted">
                  <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                </p>
                <p class="card-text text-muted">
                  <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                </p>
                <p class="card-text text-muted">
                  <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                <?php
                $query="SELECT * FROM windowshost WHERE code='hw-2' ";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
                <div class="card-body">
                    <i class="fab fa-windows icon fa-2x"></i>
                    <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                    <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                    <p class="card-text text-muted">
                        <?php echo $row['title'];  ?>
                    </p>
                    <p class="card-text text-muted">
                        <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                    </p>
                    <p class="card-text text-muted">
                        <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                <?php
                $query="SELECT * FROM windowshost WHERE code='hw-3' ";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
                <div class="card-body">
                    <i class="fab fa-windows icon fa-2x"></i>
                    <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                    <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                    <p class="card-text text-muted">
                        <?php echo $row['title'];  ?>
                    </p>
                    <p class="card-text text-muted">
                        <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                    </p>
                    <p class="card-text text-muted">
                        <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="card text-center shadow my-4 py-4 position-relative">
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                 <?php
                 $query="SELECT * FROM windowshost WHERE code='hw-4' ";
                 $result=mysqli_query($link,$query);
                 $row=mysqli_fetch_array($result);
                 ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
                <div class="card-body">
                    <i class="fab fa-windows icon fa-2x"></i>
                    <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                    <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                    <p class="card-text text-muted">
                        <?php echo $row['title'];  ?>
                    </p>
                    <p class="card-text text-muted">
                        <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                    </p>
                    <p class="card-text text-muted">
                        <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                <?php
                $query="SELECT * FROM windowshost WHERE code='hw-5' ";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
                <div class="card-body">
                    <i class="fab fa-windows icon fa-2x"></i>
                    <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                    <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                    <p class="card-text text-muted">
                        <?php echo $row['title'];  ?>
                    </p>
                    <p class="card-text text-muted">
                        <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                    </p>
                    <p class="card-text text-muted">
                        <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
              <span
                class="
                  position-absolute
                  top-0
                  start-50
                  translate-middle
                  badge
                  rounded-pill
                  bg-danger
                  fw-bold
                  fs-6
                "
              >
                 <?php
                 $query="SELECT * FROM windowshost WHERE code='hw-6' ";
                 $result=mysqli_query($link,$query);
                 $row=mysqli_fetch_array($result);
                 ?>
                <span>Code:</span><span><?php echo $row['code']; ?></span>
              </span>
                <div class="card-body">
                    <i class="fab fa-windows icon fa-2x"></i>
                    <p class="lead card-title fw-bold my-3">هاست ویندوز</p>
                    <p class="lead card-title fw-bold my-3">نسخه ویندوز:10</p>

                    <p class="card-text text-muted">
                        <?php echo $row['title'];  ?>
                    </p>
                    <p class="card-text text-muted">
                        <span> قیمت(تومان): </span> <span><?php echo $row['price'];  ?></span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['ram'];  ?> </span> <span>:RAM</span>
                    </p>
                    <p class="card-text text-muted">
                        <span> <?php echo $row['cpu'];  ?> </span> <span>:CPU</span>
                    </p>
                    <p class="card-text text-muted">
                        <span><?php echo $row['rom'];  ?> </span> <span>:ROM</span>
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
      <svg
        viewBox="0 0 500 150"
        preserveAspectRatio="none"
        style="height: 100%; width: 100%"
      >
        <path
          d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z"
          style="stroke: none; fill: #212529"
        ></path>
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
                    <a href=""
                      ><span> دانلود برای اندروید </span>
                      <span><i class="fab fa-google-play"></i></span>
                    </a>
                  </li>
                  <li class="mt-3">
                    <a href=""
                      ><span> دانلود برای ای او اس </span>
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
                    <a href=""
                      ><span>تلفن:</span> <span dir="ltr">021-12345678</span>
                    </a>
                  </li>
                  <li class="my-3">
                    <a href=""
                      ><span>آدرس:</span>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
