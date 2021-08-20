<?php
session_start();
if (isset($_SESSION['failSignUp']))
{
    unset($_SESSION['failSignUp']);
    echo '<script>window.alert("این ایمیل ثبت شده است")</script>';
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

  <body class="bg-dark">
    <section>
      <div class="container bg-light" id="signup-form">
        <div class="row align-items-center justify-content-evenly">
          <div class="col-md-5">
            <h4 class="text-center fw-bold my-4 my-md-0">فرم ثبت نام</h4>
            <form action="checkFile/checkSignUp.php" method="post" onsubmit="return signup()">
              <div class="form-floating my-3">
                <input
                  onchange="change('email')"
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="name@example.com"
                  required
                />
                <label for="floatingInput"><i class="bi bi-at"></i>ایمیل</label>
              </div>
              <div class="form-floating my-3">
                <input
                  onchange="change('phoneNumber')"
                  type="text"
                  class="form-control text-end"
                  id="phoneNumber"
                  name="phoneNumber"
                  placeholder="phoneNumber"
                  required
                />
                <label for="floatingPassword"
                  ><i class="bi bi-telephone"></i>شماره تماس
                </label>
              </div>
              <div class="form-floating">
                <input
                  onchange="change('password')"
                  type="password"
                  name="password"
                  class="form-control text-end"
                  id="password"
                  placeholder="password"
                  required
                />
                <label for="floatingPassword"
                  ><i class="bi bi-shield-exclamation"></i>رمز عبور</label
                >
                <div class="form-text">
                  رمز عبور حداقل دارای 8 کاراکتر شامل عدد،حروف کوچک و بزرگ باید
                  باشد
                </div>
              </div>
              <div class="form-floating my-3">
                <input
                  onchange="change('passwordVerify')"
                  type="password"
                  class="form-control text-end"
                  id="passwordVerify"
                  name="passwordVerify"
                  placeholder="password"
                  required
                />
                <label for="floatingPassword"
                  ><i class="bi bi-shield-check"></i>تایید رمز عبور</label
                >
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check pt-md-2">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault"
                    />

                    <label class="form-check-label" for="flexCheckDefault">
                      <bdi
                        ><a
                          href=""
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBottom"
                          aria-controls="offcanvasTop"
                          >شرایط</a
                        > </bdi
                      >را مطالعه کردم و میپذیرم

                      <div class="form-text">
                        برای خواندن شرایط روی شرایط کلیک کنید
                      </div>

                      <div
                        class="offcanvas offcanvas-bottom"
                        tabindex="-1"
                        id="offcanvasBottom"
                        aria-labelledby="offcanvasBottomLabel"
                      >
                        <div class="offcanvas-header">
                          <button
                            type="button"
                            class="btn-close text-reset text-end"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                          ></button>
                          <div></div>
                        </div>
                        <div class="offcanvas-body">
                          <h4 class="text-center fw-bold">
                            شرایط و حریم خصوصی
                          </h4>
                          <p class="text-muted">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                            آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا
                            با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به
                            پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                            اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                            اساسا مورد استفاده قرار گیرد.
                            <br />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                            آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا
                            با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به
                            پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                            اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                            اساسا مورد استفاده قرار گیرد.
                            <br />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                            آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا
                            با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                            ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به
                            پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                            اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                            اساسا مورد استفاده قرار گیرد.
                          </p>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
                <div class="col-md-6 my-4 my-md-0">
                  <button class="btn btn-primary fw-bold" type="submit">
                    ثبت نام
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <img src="./img/signup.png" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
