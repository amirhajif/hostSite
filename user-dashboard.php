<?php
session_start();
if (!(isset($_SESSION['active']))) {
  header("Location: 403.php");
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-XfhC/Sid4FIGSXYebcOtcSCRFkd/zZzAMVipf0bNWucloRvcKK2/dpVWodQbQ1Ek" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/e95a8ce8bc.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./style.css" />

  <title>Dashboard | دشبورد</title>
  <script defer src="checkFile/fieldValidate.js"></script>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <div class="container-fluid mt-4 mb-2">
    <div class="row flex-wrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark dash-links">
        <div class="
              d-flex
              flex-column
              align-items-center align-items-sm-start
              px-3
              pt-2
              text-white
              min-vh-70
            ">
          <ul class="
                nav nav-pills
                flex-column
                mb-sm-auto mb-0
                align-items-center align-items-sm-start
              " id="menu">
            <li>
              <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-speedometer2"></i>
                <span class="ms-1 d-none d-sm-inline">دشبورد</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-0 align-middle">
                <i class="bi bi-clipboard-data"></i>
                <span class="ms-1 d-none d-sm-inline">سفارش ها</span></a>
            </li>
            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="bi bi-wallet2"></i>
                <span class="ms-1 d-none d-sm-inline">کیف پول</span></a>
            </li>
            <li>
              <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
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
        <div class="
              row
              justify-content-between
              align-items-center
              shadow-sm
              bg-color-white
              px-3
            ">
          <div class="col-auto p-2">
            <span class="text-decoration-none"><i class="bi bi-person-check fs-4"></i><span class="fs-5">
                <bdi> <?php echo $_SESSION['email']; ?> </bdi> خوش آمدید
              </span></span>
          </div>

          <div class="col-auto p-2 me-3">
            <a onclick="logout()" class="text-decoration-none btn btn-outline-danger rounded-pill"><i class="bi bi-box-arrow-left fs-4"></i><span class="fs-5"> خروج </span></a>
          </div>
        </div>

        <div class="my-2 row bg-color-white shadow-sm">
          <div class="col-12">
            <div class="
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
                ">
              <div class="col-md-6 p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">اطلاعات حساب
                </strong>
                <h3 class="mb-0"><?php echo $_SESSION['email']; ?></h3>
                <div class="mb-1 text-muted">کاربر سایت</div>
                <p class="card-text mb-auto">
                  <span>
                    <i class="bi bi-at"></i>
                    <span>ایمیل:</span>
                    <span><?php echo $_SESSION['email']; ?></span>
                    <br />
                    <?php
                    $query = "SELECT phoneNumber from users WHERE email='$_SESSION[email]'";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <i class="bi bi-telephone"></i> <span>شماره تماس:</span>
                    <span><?php echo $row['phoneNumber']; ?></span>
                  </span>
                </p>
              </div>
              <div class="
                    col-md-2
                    text-center
                    bg-light
                    rounded-pill
                    border border-dark
                  " id="user-info-card">
                <img src="./img/user.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="mt-1 row bg-color-white">
          <div class="col" style="height: 300px; overflow: auto">
            <h4 class="my-3">
              <span><i class="bi bi-bell"></i></span><span> اعلان ها و رویداد ها</span>
            </h4>
            <div class="list-group mb-3">
              <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 fw-bold my-2">افتتاح گروه تلگرامی سایت</h6>
                  <small class="text-muted mt-2">1 روز پیش</small>
                </div>
                <small class="text-muted">گروه تلگرامی ایران هاست به همراه پشتیبانی در تلگرام شروع به
                  کار کرد</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1 fw-bold my-2">آغاز طرح فروش ویژه</h6>
                  <small class="text-muted mt-2">2 روز پیش</small>
                </div>
                <small class="text-muted">مشکل عدم اتصال به هاست hl-2 از طریق مک بر طرف شد</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="fw-bold my-2">بر طرف شدن مشکل هاست hl-2</h6>
                  <small class="text-muted mt-2">3 روز پیش</small>
                </div>
                <small class="text-muted">مشکل عدم اتصال به هاست hl-2 از طریق مک بر طرف شد</small>
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