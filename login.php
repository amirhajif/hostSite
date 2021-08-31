<?php
session_start();
if (isset($_POST['signin']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($email=="amirhh@gmail.com" && $password=='12345678'){
        $_SESSION['email']=$email;
        $_SESSION['active']=true;
        $_SESSION['admin']=true;
        $_SESSION['adminFirstLogin']=true;
        header("Location: http://localhost/hostSite");
        return;
    }
    try {
        $link = mysqli_connect("localhost", "root", "", "hostsite");
    } catch (Exception $exception) {
        echo $exception;
    }
    $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 0 )
    {
        $_SESSION['failSignin']=true;
    }
    else
    {
        $_SESSION['active']=true;
        $_SESSION['email']=$email;
        $_SESSION['firstLogin']=true;
        header("Location: http://localhost/hostSite");
    }
}
if (isset($_SESSION['failSignin']))
{
    unset($_SESSION['failSignin']);
    echo '<script>alert("مشکلی در ورود رخ داده است نام کاربری و رمز عبور را چک کنید")</script>';
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
    <title>Login | ورود</title>
    <script src="checkFile/fieldValidate.js"></script>
  </head>

  <body class="bg-dark">
    <section class="mt-3" id="login-form">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-auto me-5 pe-2">
            <img src="./img/logo.png" class="me-5" alt="" />
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
          <form action="login.php" method="post" onsubmit="return signin()">
            <div class="form-floating form-element mx-auto mt-2 text-center">
              <input
                onchange="change('email')"
                type="email"
                class="form-control"
                placeholder="ایمیل"
                id="email"
                name="email"
                required
              />
              <label for="email"><i class="bi bi-at"></i>ایمیل</label>
            </div>

            <div class="form-floating form-element mx-auto my-3 text-center">
              <input
                onchange="change('password')"
                type="password"
                class="form-control text-end"
                placeholder="رمز عبور"
                id="password"
                name="password"
                required
              />
              <label for="password"
                ><i class="bi bi-shield-lock"></i>رمز عبور</label
              >
            </div>

            <div class="text-center">
              <button
                name="signin"
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
