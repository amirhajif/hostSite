<?php
session_start();
include ("checkFile/countVisitor.php");
if (isset($_SESSION['firstLogin']))
{
    unset($_SESSION['firstLogin']);
    echo '<script>window.alert("به فروش هاست ما خوش آمدید")</script>';
}
if (isset($_SESSION['adminFirstLogin'])){
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
  </head>

  <body>
    <header class="shadow">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                  <li><a class="dropdown-item" href="#">ا پشن یک</a></li>
                  <li><a class="dropdown-item" href="#">اپشن دو</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">اپشن سه</a>
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
                <form action="" class="d-flex mt-1 ms-4">
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
                  <?php
                  if (isset($_SESSION['admin']))
                  {
                      ?>
                          href="admin-dashboard.php"
                  <?php
                  }
                  if (isset($_SESSION['active']) && !(isset($_SESSION['admin']))){
                      ?>
                          href="index.php"
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

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6 mt-5 mt-lg-0">
            <h4 class="fw-bold">لورم ایپسوم متن ساختگی</h4>
            <h5 class="fw-bold text-primary my-4">MySite</h5>
            <p class="lead text-secondary">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
              استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
              ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
            </p>
            <button class="btn btn-primary">دکمه یک</button>
            <button class="btn btn-outline-secondary ms-4">دکمه دو</button>
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
            <img
              src="img/transparent.svg"
              width="150"
              class="img-fluid"
              alt=""
            />
            <h6 class="fw-bold text-muted mt-2">همگام بودن با تکنولوژی</h6>
          </div>
        </div>
      </div>
    </section>
    <br />
    <br />
    <div style="height: 150px; overflow: hidden">
      <svg
        viewBox="0 0 500 150"
        preserveAspectRatio="none"
        style="height: 100%; width: 100%"
      >
        <path
          d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z"
          style="stroke: none; fill: #f8f9fa"
        ></path>
      </svg>
    </div>

    <section class="bg-light">
      <div class="container mt-lg-0">
        <div class="row align-items-center">
          <div class="col-md-5">
            <i class="bi bi-stack fs-2 icon mt-2"></i>
            <p class="fw-bold lead my-3">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
            </p>
            <p class="lead text-secondary">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
              استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
              ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
            </p>
            <button class="btn btn-outline-dark">دکمه سه</button>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-center shadow mt-3">
                  <div class="card-body">
                    <i class="bi bi-layers fs-2 icon"></i>
                    <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                    <p class="card-text text-muted">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                  </div>
                </div>

                <div class="card text-center shadow mt-4">
                  <div class="card-body">
                    <i class="bi bi-layers fs-2 icon"></i>
                    <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                    <p class="card-text text-muted">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-center shadow mt-5">
                  <div class="card-body">
                    <i class="bi bi-layers fs-2 icon"></i>
                    <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                    <p class="card-text text-muted">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                  </div>
                </div>

                <div class="card text-center shadow mt-4">
                  <div class="card-body">
                    <i class="bi bi-layers fs-2 icon"></i>
                    <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                    <p class="card-text text-muted">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                  </div>
                </div>
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
          d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z"
          style="stroke: none; fill: #f8f9fa"
        ></path>
      </svg>
    </div>

    <section>
      <div class="container">
        <div class="row text-center">
          <h4 class="fw-bold">لورم ایپسوم متن ساختگی</h4>
          <p class="lead text-muted">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
            استفاده از طراحان گرافیک است
          </p>
        </div>
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="card text-center shadow mt-4 py-4">
              <div class="card-body">
                <i class="bi bi-layers fs-2 icon"></i>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>

                <p class="card-text text-muted">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                </p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <br />
                <button class="btn btn-primary">خرید</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center shadow mt-4 py-5 card-black">
              <div class="card-body">
                <i class="bi bi-layers fs-2 icon"></i>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>

                <p class="card-text black-card-text">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                </p>
                <p class="card-text black-card-text">لورم</p>
                <p class="card-text black-card-text">لورم</p>
                <p class="card-text black-card-text">لورم</p>
                <p class="card-text black-card-text">لورم</p>
                <br />
                <button class="btn btn-outline-light">خرید</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center shadow mt-4 py-4">
              <div class="card-body">
                <i class="bi bi-layers fs-2 icon"></i>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>
                <p class="lead card-title fw-bold my-3">لورم ایپسوم</p>

                <p class="card-text text-muted">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                </p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <p class="card-text text-muted">لورم</p>
                <br />
                <button class="btn btn-primary">خرید</button>
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
          style="stroke: none; fill: #0d6efd"
        ></path>
      </svg>
    </div>

    <section id="carousel-section">
      <div class="container">
        <div class="row text-center">
          <h4 class="fw-bold">لورم ایپسوم</h4>
          <p>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
            استفاده از طراحان گرافیک است
          </p>
        </div>
        <div class="row">
          <div
            id="carouselExampleCaptions"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                aria-current="true"
                aria-label="Slide 1"
                class="active carousel-button-style"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/carousel-img-1.jpg"
                  class="d-block w-100 rounded-3"
                  alt="..."
                />
                <div class="carousel-caption d-md-block text-start">
                  <h5 class="ms-4">لورم ایپسوم</h5>
                  <p>لورم اپیسوم متن ساختگی</p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="./img/carousel-img-2.jpg"
                  class="d-block w-100 rounded-3"
                  alt="..."
                />
                <div class="carousel-caption d-md-block">
                  <h5>لورم ایپسوم</h5>
                  <p>لورم اپیسوم متن ساختگی</p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="./img/carousel-img-3.jpg"
                  class="d-block w-100 rounded-3"
                  alt="..."
                />
                <div class="carousel-caption d-md-block text-end">
                  <h5 class="me-5">لورم ایپسوم</h5>
                  <p class="me-2">لورم اپیسوم متن ساختگی</p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon ms-5"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon me-5"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <button class="btn btn-outline-light mt-4">دکمه چهار</button>
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
          d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z"
          style="stroke: none; fill: #0d6efd"
        ></path>
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
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Accordion Item #1
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It
                  is shown by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the showing
                  and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also
                  worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit
                  overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Accordion Item #2
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the showing
                  and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also
                  worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit
                  overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Accordion Item #3
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the showing
                  and hiding via CSS transitions. You can modify any of this
                  with custom CSS or overriding our default variables. It's also
                  worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit
                  overflow.
                </div>
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
            <h3 class="fw-bold">MySite</h3>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            <a href=""><i class="bi bi-instagram fs-3 ms-5"></i></a>
            <a href=""><i class="bi bi-facebook fs-3 ms-5"></i></a>
            <a href=""><i class="bi bi-linkedin fs-3 ms-5"></i></a>
            <a href=""><i class="bi bi-telegram fs-3 ms-5"></i></a>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4 mt-5 mt-sm-0">
                <h6 class="fw-bold">لورم ایپسوم</h6>
                <hr />
                <ul class="list-unstyled">
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                </ul>
              </div>
              <div class="col-md-4 mt-5 mt-sm-0">
                <h6 class="fw-bold">لورم ایپسوم</h6>
                <hr />
                <ul class="list-unstyled">
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                </ul>
              </div>
              <div class="col-md-4 mt-5 mt-sm-0">
                <h6 class="fw-bold">لورم ایپسوم</h6>
                <hr />
                <ul class="list-unstyled">
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
                  <li><a href="">لورم</a></li>
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
