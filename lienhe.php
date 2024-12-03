<?php session_start() ?>
<?php require_once('layout/header.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<!-- <style>

    form {
        display: flex;
        flex-flow: column;
        justify-content: center;
        align-items: center;
    }

    .form-group {
        padding: 10px;
        width: 650px;
    }

    .form-group input {
        padding: 5px 0;
        width: 100%;
    }

    textarea {
        width: 100%;
    }

    button {
        padding: 10px 50px;
        border-radius: 5px;
        color: white;
        background-color: red;
        border: none;
        outline: 0;
    }

    button:hover {
        opacity: 0.7;
        cursor: pointer;
    }

    center {
        font-size: 20px;
        font-weight: bold;
        color: green;
        padding: 20px;
    }
</style> -->

<body>
    <h2 style="text-align: center;">Hãy liên hệ với chúng tôi nếu các bạn gặp các vấn đề trên Website</h2>
    <div class="container" style= "display: flex;  
    justify-content: center;
    align-items: center;
    height: 20vh; margin-top: 10px;">
        <ul style="">
            <li>Mua nhanh online: <b>0948601613</b></li>
            <li>Gợi ý phản ánh về dịch vụ: <b>123123123</b></li>
            <li>Hỗ trợ khách hàng: <b>Ducorgan2003@gmail.com</b></li>
        </ul>
    </div>
    
</body>
<footer style=" position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 35%;
    padding-bottom: 100px; /* Giữ khoảng cách dưới của footer */ ">
    <?php require('layout/footer.php') ?>
</footer>


</html>