<?php
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
mysqli_query($link, "SET NAMES utf8");

?>
<header class="shadow">
    <nav class="navbar navbar-expand-xl navbar-light bg-light align-items-center">
        <div class="container">
            <a class="navbar-brand lead">
                <img src="./img/logo.png" alt="" height="65px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-3" aria-current="page" href="./index.php">
                            <i class="bi bi-house fs-5"></i><bdi> خانه </bdi>
                        </a>
                    </li>
                    <li class="nav-item dropdown" id="drop-down-menu">
                        <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list fs-5"></i><bdi> دسته بندی </bdi>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="window.php"><i class="fab fa-windows"></i><span> هاست ویندوز </span></a></li>
                            <li><a class="dropdown-item" href="linux.php"><i class="fab fa-linux"></i><span> هاست لینوکس </span></a></li>
                            <li><a class="dropdown-item" href="mac.php"><i class="fab fa-apple"></i><span> هاست مک </span></a></li>

                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                            <li><a class="dropdown-item" href="./allProducts.php"><i class="fas fa-network-wired"></i><span> دسته بندی کلی </span></a></li>
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

                                <!-- check -->
                                <form action="#" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">ارسال به ایمیل</label>
                                            <input type="text" class="form-control text-end" id="recipient-name" value="info@email" disabled />
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">پیام شما</label>
                                            <textarea class="form-control" id="message-text" name="message" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            بستن
                                        </button>
                                        <button type="submit" class="btn btn-primary" name="submit">
                                            ارسال پیام
                                        </button>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['submit'])) {
                                    //                                    echo '<script>console.log("clicked")</script>';
                                    $message = $_POST['message'];
                                    $query = "INSERT INTO messages (message) VALUES ('$message')";
                                    mysqli_query($link, $query);
                                    echo '<script>window.alert("پیغام شما ارسال شد")</script>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">

                    <!-- check -->
                    <form action="" class="d-flex mt-md-1 ms-md-4 my-md-0 my-4">
                        <div>
                            <input type="text" class="form-control" placeholder="جست و جو ..." id="search-input" />
                            <div class="dropdown-menu" id="suggest-box">
                            </div>
                        </div>
                        <a class="btn btn-outline-primary ms-1" id="search-btn" type="submit" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </form>
                </li>

                </ul>
                <div class="ms-auto">
                    <span class="me-4 position-relative" id="cart-link">
                        <a href="./shop-cart.php"><i class="bi bi-cart fs-5"></i> سبد خرید</a>
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
                        <a class="btn btn-outline-primary rounded-pill" style="width: 120px" <?php
                                                                                                if (isset($_SESSION['admin'])) {
                                                                                                ?> href="admin-dashboard.php" <?php
                                                                                                                            }
                                                                                                                            if (isset($_SESSION['active']) && !(isset($_SESSION['admin']))) {
                                                                                                                                ?> href="user-dashboard.php" <?php
                                                                                                                                                            }
                                                                                                                                                            if (!(isset($_SESSION['admin'])) && !(isset($_SESSION['active']))) {
                                                                                                                                                                ?> href="login.php" <?php
                                                                                                                                                                                }
                                                                                                                                                                                    ?>>
                            <?php
                            if (isset($_SESSION['admin'])) {
                            ?>
                                پنل مدیریت
                            <?php
                            }
                            if (isset($_SESSION['active']) && !(isset($_SESSION['admin']))) {
                            ?>
                                صفحه شخصی
                            <?php
                            }
                            if (!(isset($_SESSION['admin'])) && !(isset($_SESSION['active']))) {
                            ?>
                                ورود
                            <?php
                            }
                            ?>

                        </a></span>
                </div>
            </div>
        </div>

    </nav>
    <script src="headerScript.js"></script>

</header>