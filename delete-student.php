<?php
include_once "Models/Student.php";
include_once "Services/StudentManager.php";

$studentManager = new StudentManager();
$id = $_GET["id"];
$studentManager->deleteStudentId($id);
header("Location: index.php");