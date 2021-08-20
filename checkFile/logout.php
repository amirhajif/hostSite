<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>
<script>
    window.alert("asdad");
    if (window.confirm("آیا مطمئن هستید که می خواهید خارج شوید؟")){
        <?php
        unset($_SESSION['active']);
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        ?>
        window.open("./index.php","از بازدید شما متشکریم");
    }
</script>
</body>
</html>