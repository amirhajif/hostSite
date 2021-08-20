<?php
session_start();
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
    <link rel="stylesheet" href="./style.css" />
    <title>یک تایتل</title>
      <script src="checkFile/fieldValidate.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark dash-links">
          <div
            class="
              d-flex
              flex-column
              align-items-center align-items-sm-start
              px-3
              pt-2
              text-white
              min-vh-100
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
                  <i class="bi bi-bank"></i>
                  <span class="ms-1 d-none d-sm-inline"
                    >اطلاعات بانکی و کارت ها</span
                  ></a
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
                  <i class="bi bi-people"></i>
                  <span class="ms-1 d-none d-sm-inline">اطلاعات مشتریان</span>
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
            "
          >
            <div class="col-auto p-2">
              <span class="text-decoration-none"
                ><i class="bi bi-person-check fs-4"></i
                ><span class="fs-5">
                  <bdi> امیر حسین  </bdi> خوش آمدید
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

          <div class="row mt-3 bg-color-white">
            <div class="col-lg-3 col-md-6">
              <div class="card my-3 shadow-lg">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img
                      src="./img/view.svg"
                      class="img-fluid rounded-start pt-5"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title border-bottom">بازدید های امروز</h5>
                        <?php
                        $date=date("Y-m-d");
                        $query="SELECT * FROM visitors WHERE date='$date'";
                        $result=mysqli_query($link,$query);
                        ?>
                      <p class="card-text">
                        <span
                          ><i class="bi bi-google fs-5"></i> از طریق گوگل:
                          <bdi><?php echo $result->num_rows; ?></bdi>
                        </span>
                        <br />
                        <span
                          ><i class="bi bi-globe fs-5"></i> از طریق ادرس:
                          <bdi><?php echo $result->num_rows; ?></bdi>
                        </span>
                        <br />
                        <span
                          ><i class="bi bi-link-45deg fs-5"></i> از طریق بک
                          لینک:
                          <bdi><?php echo $result->num_rows; ?></bdi>
                        </span>
                        <span><i class="bi bi-eye fs-5"></i> کل بازدید ها:
                          <bdi ><?php echo $result->num_rows; ?></bdi>
                        </span>
                      </p>
                      <p class="card-text border-top">
                        <small class="text-muted"
                          >آخرین اپدیت 1 دقیقه پیش</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card my-3 shadow-lg" style="max-width: 540px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img
                      src="./img/people.svg"
                      class="img-fluid rounded-start pt-5"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title border-bottom">یوزرهای جدید</h5>
                      <p class="card-text">
                        <span
                          ><i class="bi bi-person-plus fs-5"></i> یوزر های جدید:
                          <bdi>4</bdi>
                        </span>
                        <br />
                        <span
                          ><i class="bi bi-people fs-5"></i> کل یوزر ها:
                          <bdi>200</bdi>
                        </span>
                      </p>
                      <p class="card-text border-top">
                        <small class="text-muted">آخرین اپدیت 2 ساعت پیش</small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card my-3 shadow-lg" style="max-width: 540px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img
                      src="./img/buy.svg"
                      class="img-fluid rounded-start pt-5"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title border-bottom">خرید های امروز</h5>
                      <p class="card-text">
                        <span
                          ><i class="bi bi-cart-plus fs-5"></i> خرید های امروز:
                          <bdi>6</bdi>
                        </span>
                        <br />
                        <span
                          ><i class="bi bi-cart-check fs-5"></i> خرید های موفق:
                          <bdi>6</bdi>
                        </span>
                        <br />
                        <span
                          ><i class="bi bi-cart-dash fs-5"></i> خرید های ناموفق:
                          <bdi>6</bdi>
                        </span>
                        <span
                          ><i class="bi bi-cart2 fs-5"></i> کل خرید ها:
                          <bdi>200</bdi>
                        </span>
                      </p>
                      <p class="card-text border-top">
                        <small class="text-muted">آخرین اپدیت 2 ساعت پیش</small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card my-3 shadow-lg" style="max-width: 540px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img
                      src="./img/money.svg"
                      class="img-fluid rounded-start pt-5"
                      alt="..."
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title border-bottom">
                        درامد امروز <bdi>(تومان)</bdi>
                      </h5>
                      <p class="card-text">
                        <span
                          ><i class="bi bi-cash-coin fs-5"></i> درامد امروز:
                          <bdi>6,000</bdi>
                        </span>

                        <span
                          ><i class="bi bi-piggy-bank fs-5"></i> درامد کل:
                          <bdi>200,000</bdi>
                        </span>
                      </p>
                      <p class="card-text border-top">
                        <small class="text-muted"
                          >آخرین اپدیت 24 ساعت پیش</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-2 justify-content-md-evenly bg-color-white">
            <div class="col-12 col-lg-5 mt-2 mb-2 bg-white shadow-lg">
              <img src="./img/chart.svg" class="img-fluid" alt="" />
            </div>
            <div
              class="col-12 col-lg-6 mt-2 mb-2 bg-white shadow-lg"
              style="overflow: auto; height: 350px"
            >
              <div class="row text-center">
                <h5 class="fw-bold pt-3">خرید ها</h5>
              </div>
              <form action="">
                <div class="row align-items-center justify-content-md-evenly">
                  <div class="col-md-6 my-3">
                    <h6>بازه مورد نظر را انتخاب کنید</h6>
                    <select class="form-select">
                      <option value="1" selected>امروز</option>
                      <option value="2">هفته اخیر</option>
                      <option value="3">ماه اخیر</option>
                      <option value="4">سال</option>
                    </select>
                  </div>
                  <div class="col-md-4 my-3">
                    <button
                      class="btn btn-outline-primary rounded-pill"
                      type="submit"
                    >
                      جست و جو
                    </button>
                  </div>
                </div>
              </form>

              <div class="table-responsive">
                <table
                  class="
                    table table-striped table-hover
                    caption-top
                    table-bordered
                    text-center
                  "
                >
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">ردیف</th>
                      <th scope="col">نام کاربری</th>
                      <th scope="col">ایمیل</th>
                      <th scope="col">نوع هاست</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>user1</td>
                      <td>user1@gmail.com</td>
                      <td>لینوکس</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>user2</td>
                      <td>user2@gmail.com</td>
                      <td>ویندوز</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>user3</td>
                      <td>user3@gmail.com</td>
                      <td>سایر</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row mt-4 shadow-sm bg-color-white">
            <div class="row mt-2 justify-content-center mb-2">
              <div class="col-md-3">
                <h4>امتیاز کاربران به سایت</h4>
                <p class="text-muted">بر اساس 85 امتیاز ثبت شده</p>
              </div>
              <div class="col-md-2">
                <i class="bi bi-star-half text-warning fs-3"></i>
                <i class="bi bi-star-fill text-warning fs-3"></i
                ><i class="bi bi-star-fill text-warning fs-3"></i
                ><i class="bi bi-star-fill text-warning fs-3"></i
                ><i class="bi bi-star-fill text-warning fs-3"></i
                ><i class="bi bi-star-filltext-warning fs-3"></i>
                <p class="text-muted">4.5از 5</p>
              </div>
            </div>
            <div class="row mt-2">
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                </div>
                <div class="col-md-3 ms-auto">
                  <div class="progress border border-dark mt-2">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 15%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="col-md-3 ms-auto mt-1">
                  <p class="text-muted">10</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                </div>
                <div class="col-md-3 ms-auto">
                  <div class="progress border border-dark mt-2">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="col-md-3 ms-auto mt-1">
                  <p class="text-muted">15</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                </div>
                <div class="col-md-3 ms-auto">
                  <div class="progress border border-dark mt-2">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 40%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="col-md-3 ms-auto mt-1">
                  <p class="text-muted">25</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                </div>
                <div class="col-md-3 ms-auto">
                  <div class="progress border border-dark mt-2">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 60%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="col-md-3 ms-auto mt-1">
                  <p class="text-muted">30</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3">
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                  <i class="bi bi-star-fill fs-3 text-warning"></i>
                </div>
                <div class="col-md-3 ms-auto">
                  <div class="progress border border-dark mt-2">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 70%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="col-md-3 ms-auto mt-1">
                  <p class="text-muted">35</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="
              row
              mt-4
              justify-content-evenly
              align-items-center
              mb-5
              bg-color-white
            "
          >
            <div class="col-md-5 bg-white mb-1 mt-1 shadow-lg check-form">
              <h5 class="fw-bold my-3">
                پیام های جدید
                <span class="badge bg-danger rounded-pill">4</span>
              </h5>
              <ol class="list-group list-group-numbered">
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-start
                  "
                >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">پیام یک</div>
                    خلاصه متن پیام یک
                  </div>
                  <button class="btn btn-primary rounded-pill me-1">
                    خواندن
                  </button>
                  <button class="btn btn-danger rounded-pill">حذف</button>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-start
                  "
                >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">پیام دو</div>
                    خلاصه متن پیام دو
                  </div>
                  <button class="btn btn-primary rounded-pill me-1">
                    خواندن
                  </button>
                  <button class="btn btn-danger rounded-pill">حذف</button>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-start
                  "
                >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">پیام سه</div>
                    خلاصه متن پیام سه
                  </div>
                  <button class="btn btn-primary rounded-pill me-1">
                    خواندن
                  </button>
                  <button class="btn btn-danger rounded-pill">حذف</button>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-start
                  "
                >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">پیام چهار</div>
                    خلاصه پیام چهار
                  </div>
                  <button class="btn btn-primary rounded-pill me-1">
                    خواندن
                  </button>
                  <button class="btn btn-danger rounded-pill">حذف</button>
                </li>
              </ol>
            </div>
            <div
              class="col-md-5 bg-white mb-1 mt-1 shadow-lg check-form"
              id="works-list"
            >
              <div class="list-group">
                <h5 class="fw-bold my-3">
                  لیست کارها
                  <span class="badge bg-danger rounded-pill">3</span>
                </h5>
                <label class="list-group-item d-flex gap-3">
                  <input
                    class="form-check-input flex-shrink-0"
                    type="checkbox"
                    value=""
                    checked=""
                  />
                  <span class="pt-1 form-checked-content">
                    <strong>کار یک</strong>
                    <small class="d-block text-muted">
                      <span><i class="bi bi-clock"></i>زمان:</span>
                      <span>12:00</span>
                      <br />
                      <span><i class="bi bi-calendar-date"></i>تاریخ:</span>
                      <span>1400/1/1</span>
                      <br />
                      <span><i class="bi bi-info-circle"></i>توضیحات:</span>
                      <span>توضیحات کار یک</span>
                    </small>
                  </span>
                </label>
                <label class="list-group-item d-flex gap-3">
                  <input
                    class="form-check-input flex-shrink-0"
                    type="checkbox"
                    value=""
                  />
                  <span class="pt-1 form-checked-content">
                    <strong>کار دو</strong>
                    <small class="d-block text-muted">
                      <span><i class="bi bi-clock"></i>زمان:</span>
                      <span>12:00</span>
                      <br />
                      <span><i class="bi bi-calendar-date"></i>تاریخ:</span>
                      <span>1400/1/1</span>
                      <br />
                      <span><i class="bi bi-info-circle"></i>توضیحات:</span>
                      <span>توضیحات کار دو</span>
                    </small>
                  </span>
                </label>
                <label class="list-group-item d-flex gap-3">
                  <input
                    class="form-check-input flex-shrink-0"
                    type="checkbox"
                    value=""
                  />
                  <span class="pt-1 form-checked-content">
                    <strong>کار سه</strong>
                    <small class="d-block text-muted">
                      <span><i class="bi bi-clock"></i>زمان:</span>
                      <span>12:00</span>
                      <br />
                      <span><i class="bi bi-calendar-date"></i>تاریخ:</span>
                      <span>1400/1/1</span>
                      <br />
                      <span><i class="bi bi-info-circle"></i>توضیحات:</span>
                      <span>توضیحات کار سه</span>
                    </small>
                  </span>
                </label>
              </div>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-12">
              <div
                class="
                  row
                  g-0
                  rounded
                  overflow-hidden
                  flex-md-row
                  mb-4
                  shadow-sm
                  h-md-250
                  position-relative
                  align-items-center
                  justify-content-center
                  bg-color-white
                "
              >
                <div class="col-md-6 p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary"
                    >اطلاعات حساب
                  </strong>
                  <h3 class="mb-0">اسم کاربری</h3>
                  <div class="mb-1 text-muted">amir.h.h</div>
                  <p class="card-text mb-auto">
                    <span>
                      <span><i class="bi bi-info-circle"></i></span>
                      <span>نام و نام خانوادگی:</span>
                      <span>امیرحسین حاجی تبار</span>
                      <br />
                      <i class="bi bi-at"></i>
                      <span>ایمیل:</span>
                      <span>amirhh@gmail.com</span>
                      <br />
                      <span><i class="bi bi-geo-alt"></i></span>
                      <span>محل سکونت:</span>
                      <span>تهران - پاسداران</span>
                      <br />
                      <span><i class="bi bi-hash"></i></span>
                      <span>لینک شبکه های اجتماعی</span>
                      <br />
                      <span class="ms-3"></span>
                      <span
                        ><a href=""><i class="bi bi-facebook fs-3"></i></a
                      ></span>
                      <span
                        ><a href=""><i class="bi bi-instagram fs-3"></i></a
                      ></span>
                      <span
                        ><a href=""><i class="bi bi-telegram fs-3"></i></a
                      ></span>
                      <span
                        ><a href=""><i class="bi bi-whatsapp fs-3"></i></a
                      ></span>
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
        </div>
      </div>
    </div>
  </body>
</html>
