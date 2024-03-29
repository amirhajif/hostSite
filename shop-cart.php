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
  <title>Cart | سبد خرید</title>
</head>

<body>
  <header class="shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light bg-light align-items-center">
      <div class="container">
        <a class="navbar-brand lead" href="#">
          <img src="./img/logo.png" alt="" height="65px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list fs-5"></i><bdi> دسته بندی </bdi>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="window.php"><i class="fab fa-windows"></i><span> هاست ویندوز </span></a>
                </li>
                <li>
                  <a class="dropdown-item" href="linux.php"><i class="fab fa-linux"></i><span> هاست لینوکس </span></a>
                </li>
                <li>
                  <a class="dropdown-item" href="mac.php"><i class="fab fa-apple"></i><span> هاست مک </span></a>
                </li>

                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href=""><i class="fas fa-network-wired"></i><span> دسته بندی کلی </span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" tabindex="-1" aria-disabled="true">
                <i class="bi bi-at fs-5"></i><bdi>تماس با ما</bdi>
              </a>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        فرم تماس با ما
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="">
                      <div class="modal-body">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">ارسال به ایمیل</label>
                          <input type="text" class="form-control text-end" id="recipient-name" value="info@email" disabled />
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">پیام شما</label>
                          <textarea class="form-control" id="message-text" rows="8"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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
                <input type="text" class="form-control" placeholder="جست و جو ..." />
                <button class="btn btn-outline-primary ms-1" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </li>
          </ul>
          <div class="ms-auto">
            <span class="me-4 position-relative" id="cart-link">
              <a href=""><i class="bi bi-cart fs-5"></i> سبد خرید</a>
              <span class="
                    position-absolute
                    bottom-99
                    start-0
                    translate-middle
                    badge
                    rounded-circle
                    bg-danger
                  ">
                2
              </span>
            </span>
            <span>
              <a class="btn btn-outline-primary rounded-pill" style="width: 120px">
                ورود
              </a></span>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="container-fluid bg-light my-3" id="cart-items">
    <div class="container">
      <div class="row align-items-center pt-3 pb-3" id="p1">
        <div class="col-md-2 text-center my-4 my-md-0">
          <i class="fab fa-windows icon fs-3"></i>
        </div>

        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">نام محصول</h6>
          <p class="text-muted text-center fw-bold mt-3">هاست ویندوز</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold mt-3">کد</h6>
          <p class="text-muted text-center fw-bold mt-3">hw-2</p>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">قیمت(تومان)</h6>
          <p class="text-muted text-center fw-bold mt-3">35,000</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold">تعداد</h6>
          <div class="quantity mt-2">
            <a class="quantity__minus" onclick="decrement('counter1')">
              <h5 class="mt-1">-</h5>
            </a>
            <input name="quantity" type="number" class="quantity__input text-center" value="1" id="counter1" disabled min="1" />
            <a class="quantity__plus" onclick="increment('counter1')">
              <h5 class="mt-1">+</h5>
            </a>
          </div>
        </div>
        <div class="col-md-2 text-center mb-md-0 mb-3">
          <button class="btn btn-danger" onclick="hideDiv('p1')">
            <span><i class="bi bi-trash"></i></span><span> حذف محصول </span>
          </button>
        </div>
      </div>

      <div class="row align-items-center border-top pt-3 pb-3" id="p2">
        <div class="col-md-2 text-center my-4 my-md-0">
          <i class="fab fa-linux icon fs-3"></i>
        </div>

        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">نام محصول</h6>
          <p class="text-muted text-center fw-bold mt-3">هاست لینوکس</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold mt-3">کد</h6>
          <p class="text-muted text-center fw-bold mt-3">hl-2</p>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">قیمت(تومان)</h6>
          <p class="text-muted text-center fw-bold mt-3">35,000</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold">تعداد</h6>
          <div class="quantity mt-2">
            <a class="quantity__minus" onclick="decrement('counter2')">
              <h5 class="mt-1">-</h5>
            </a>
            <input name="quantity" type="number" class="quantity__input text-center" value="1" id="counter2" disabled min="1" />
            <a class="quantity__plus" onclick="increment('counter2')">
              <h5 class="mt-1">+</h5>
            </a>
          </div>
        </div>
        <div class="col-md-2 text-center mb-md-0 mb-3">
          <button class="btn btn-danger" onclick="hideDiv('p2')">
            <span><i class="bi bi-trash"></i></span><span> حذف محصول </span>
          </button>
        </div>
      </div>

      <div class="row align-items-center border-top pt-3 pb-3" id="p3">
        <div class="col-md-2 text-center my-4 my-md-0">
          <i class="fab fa-apple icon fs-3"></i>
        </div>

        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">نام محصول</h6>
          <p class="text-muted text-center fw-bold mt-3">هاست مک</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold mt-3">کد</h6>
          <p class="text-muted text-center fw-bold mt-3">hm-2</p>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="fw-bold mt-3">قیمت(تومان)</h6>
          <p class="text-muted text-center fw-bold mt-3">35,000</p>
        </div>
        <div class="col-md-2 text-center my-4 my-md-0">
          <h6 class="fw-bold">تعداد</h6>
          <div class="quantity mt-2">
            <a class="quantity__minus" onclick="decrement('counter3')">
              <h5 class="mt-1">-</h5>
            </a>
            <input name="quantity" type="number" class="quantity__input text-center" value="1" id="counter3" disabled min="1" />
            <a class="quantity__plus" onclick="increment('counter3')">
              <h5 class="mt-1">+</h5>
            </a>
          </div>
        </div>
        <div class="col-md-2 text-center mb-md-0 mb-3">
          <button class="btn btn-danger" onclick="hideDiv('p3')">
            <span><i class="bi bi-trash"></i></span><span> حذف محصول </span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light mt-2">
    <div class="container py-3">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-4">
          <form action="">
            <div class="row justify-content-center">
              <label for="totalPrice" class="col-md-4 col-form-label fw-bold">قیمت نهایی</label>
              <div class="col-md-8">
                <input class="form-control text-center w-100" id="totalPrice" disabled value="100,000" />
              </div>
            </div>
            <div class="row mt-2 g-2">
              <div class="col-12 form-floating text">
                <input type="text" class="form-control text-end" id="offCode" placeholder="name@example.com" style="height: 50px" />
                <label for="floatingInput" class="text-center">کد تخفیف</label>
              </div>
              <div class="col-12">
                <button class="btn btn-success w-100">اعمال کد تخفیف</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <h5 class="fw-bold mb-3 mt-md-0 mt-4">انتخاب درگاه:</h5>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
            <label class="form-check-label fw-bold" for="flexRadioDefault1">
              بانک سامان
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
            <label class="form-check-label fw-bold" for="flexRadioDefault2">
              بانک ملی
            </label>
          </div>
          <button class="btn btn-primary mt-3">
            ورود به درگاه برای پرداخت
          </button>
        </div>
      </div>
    </div>
  </section>

  <div style="height: 150px; overflow: hidden">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
      <path d="M-16.70,27.93 C84.87,209.50 263.20,-8.57 450.56,57.53 L646.39,157.20 L0.00,150.00 Z" style="stroke: none; fill: #212529"></path>
    </svg>
  </div>

  <footer class="bg-dark position-sticky">
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
  <script src="./cartPageScript.js"></script>
</body>

</html>