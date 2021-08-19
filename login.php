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

  <body class="bg-dark">
    <section class="mt-3" id="login-form">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-11 col-10">
            <img src="./img/logo.png" alt="" />
          </div>
        </div>
        <div class="row bg-light" id="login-from">
          <h5 class="fw-bold text-black text-center my-3">ورود از طریق</h5>
          <p class="text-center">
            <a href="" class="btn btn-primary rounded-pill mx-2 shadow"
              ><i class="bi bi-facebook fs-2 px-auto py-auto"></i>facebook</a
            >
            <a href="" class="btn btn-danger rounded-pill mx-2 shadow"
              ><i class="bi bi-google fs-2"></i>google</a
            >
          </p>
          <div class="mx-auto" id="login-hr">یا</div>
          <form action="">
            <div class="form-floating form-element mx-auto mt-2 text-center">
              <input
                type="email"
                class="form-control"
                placeholder="ایمیل"
                id="email"
                required
              />
              <label for="email"><i class="bi bi-at"></i>ایمیل</label>
            </div>

            <div class="form-floating form-element mx-auto my-3 text-center">
              <input
                type="email"
                class="form-control"
                placeholder="رمز عبور"
                id="password"
                required
              />
              <label for="password"
                ><i class="bi bi-shield-lock"></i>رمز عبور</label
              >
            </div>

            <div class="text-center">
              <button
                class="btn btn-danger form-element shadow-lg"
                type="submit"
              >
                ورود
              </button>
            </div>
          </form>

          <p class="text-center mt-5">
            <a href="signup.php" class="text-muted">اکانت ندارید؟از اینجا ثبت نام کنید</a>
          </p>
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