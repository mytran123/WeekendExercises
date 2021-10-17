<?php
include_once "Models/Student.php";
include_once "Services/StudentManager.php";

$studentManager = new StudentManager();
$id = $_GET["id"];
$student = $studentManager->getStudentById($id);
if (!isset($student)) {
    die("Không tồn tại người dùng này");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }
</style>
<body>
<h2 style="text-align: center">User Profile Card</h2>
<div class="card">
    <img src="assets/imges/defaultt.jpg" alt="" style="">
    <h1><?php echo $student->getName() ?></h1>
    <p><?php echo $student->getAverage() ?></p>
    <p><button>Contact</button></p>
    <a href="index.php"><button>Back</button></a>
</div>
</body>
</html>
