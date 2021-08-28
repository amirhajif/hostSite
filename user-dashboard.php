<?php
session_start();
if (!(isset($_SESSION['active'])))
{
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
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
    <title>یک تایتل</title>
      <script defer src="checkFile/fieldValidate.js"></script>
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
                <a class="nav-link active me-3" aria-current="page" href="#">
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
                  <i class="bi bi-list fs-5"></i><bdi> دسته بندی </bdi>
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
                    <a class="dropdown-item" href=""
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
                ><a
                  class="btn btn-outline-primary rounded-pill"
                  style="width: 120px"
                  >صفحه شخصی</a
                ></span
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

    <div class="container-fluid mt-4 mb-2">
      <div class="row flex-wrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark dash-links">
          <div
            class="
              d-flex
              flex-column
              align-items-center align-items-sm-start
              px-3
              pt-2
              text-white
              min-vh-70
            "
          >
            <ul
              class="
                nav nav-pills
                flex-column
                mb-sm-auto mb-0
                align-items-center align-items-sm-start
              "
              id="menu"
            >
              <li>
                <a
                  href="#submenu1"
                  data-bs-toggle="collapse"
                  class="nav-link px-0 align-middle"
                >
                  <i class="fs-4 bi-speedometer2"></i>
                  <span class="ms-1 d-none d-sm-inline">دشبورد</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                  <i class="bi bi-clipboard-data"></i>
                  <span class="ms-1 d-none d-sm-inline">سفارش ها</span></a
                >
              </li>
              <li>
                <a
                  href="#submenu2"
                  data-bs-toggle="collapse"
                  class="nav-link px-0 align-middle"
                >
                  <i class="bi bi-wallet2"></i>
                  <span class="ms-1 d-none d-sm-inline">کیف پول</span></a
                >
              </li>
              <li>
                <a
                  href="#submenu3"
                  data-bs-toggle="collapse"
                  class="nav-link px-0 align-middle"
                >
                  <i class="bi bi-percent"></i>
                  <span class="ms-1 d-none d-sm-inline">تخفیف ها و هدایا</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                  <i class="bi bi-shop-window"></i>
                  <span class="ms-1 d-none d-sm-inline">محصولات و فروشگاه</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                  <i class="bi bi-gear"></i>
                  <span class="ms-1 d-none d-sm-inline">تنظیمات</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div
            class="
              row
              justify-content-between
              align-items-center
              shadow-sm
              bg-color-white
              px-3
            "
          >
            <div class="col-auto p-2">
              <span class="text-decoration-none"
                ><i class="bi bi-person-check fs-4"></i
                ><span class="fs-5">
                  <bdi>   <?php echo $_SESSION['email'];?>   </bdi>           خوش آمدید
                </span></span
              >
            </div>

            <div class="col-auto p-2 me-3">
              <a
                onclick="logout()"
                class="text-decoration-none btn btn-outline-danger rounded-pill"
                ><i class="bi bi-box-arrow-left fs-4"></i
                ><span class="fs-5"> خروج </span></a
              >
            </div>
          </div>

          <div class="my-2 row bg-color-white shadow-sm">
            <div class="col-12">
              <div
                class="
                  row
                  g-0
                  rounded
                  overflow-hidden
                  flex-md-row
                  mb-4
                  h-md-250
                  position-relative
                  align-items-center
                  justify-content-around
                  bg-color-white
                "
              >
                <div class="col-md-6 p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary"
                    >اطلاعات حساب
                  </strong>
                  <h3 class="mb-0"><?php echo $_SESSION['email'];?></h3>
                  <div class="mb-1 text-muted">کاربر سایت</div>
                  <p class="card-text mb-auto">
                    <span>
                      <i class="bi bi-at"></i>
                      <span>ایمیل:</span>
                      <span><?php echo $_SESSION['email'];?></span>
                      <br />
                        <?php
                        $query="SELECT phoneNumber from users WHERE email='$_SESSION[email]'";
                        $result=mysqli_query($link,$query);
                        $row=mysqli_fetch_array($result);
                        ?>
                      <i class="bi bi-telephone"></i> <span>شماره تماس:</span>
                      <span><?php echo $row['phoneNumber'];?></span>
                    </span>
                  </p>
                </div>
                <div
                  class="
                    col-md-2
                    text-center
                    bg-light
                    rounded-pill
                    border border-dark
                  "
                  id="user-info-card"
                >
                  <img src="./img/user.svg" class="img-fluid" alt="" />
                </div>
              </div>
            </div>
          </div>

          <div class="mt-1 row bg-color-white">
            <div class="col" style="height: 300px; overflow: auto">
              <h4 class="my-3">
                <span><i class="bi bi-bell"></i></span
                ><span> اعلان ها و رویداد ها</span>
              </h4>
              <div class="list-group mb-3">
                <a
                  href="#"
                  class="list-group-item list-group-item-action"
                  aria-current="true"
                >
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1 fw-bold my-2">افتتاح گروه تلگرامی سایت</h6>
                    <small class="text-muted mt-2">1 روز پیش</small>
                  </div>
                  <small class="text-muted"
                    >گروه تلگرامی ایران هاست به همراه پشتیبانی در تلگرام شروع به
                    کار کرد</small
                  >
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1 fw-bold my-2">آغاز طرح فروش ویژه</h6>
                    <small class="text-muted mt-2">2 روز پیش</small>
                  </div>
                  <small class="text-muted"
                    >مشکل عدم اتصال به هاست hl-2 از طریق مک بر طرف شد</small
                  >
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="fw-bold my-2">بر طرف شدن مشکل هاست hl-2</h6>
                    <small class="text-muted mt-2">3 روز پیش</small>
                  </div>
                  <small class="text-muted"
                    >مشکل عدم اتصال به هاست hl-2 از طریق مک بر طرف شد</small
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark pt-5">
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
