<?php
include_once "Models/Student.php";
include_once "Services/StudentManager.php";

$studentManager = new StudentManager();
//$student1 = new Student(1,"My",7,8,9);
//$student2 = new Student(2,"Na",7,9,8);
//$student3 = new Student(3,"An",5,6,7);
//$studentManager->storeStudents($student1);
//$studentManager->storeStudents($student2);
//$studentManager->storeStudents($student3);


$students = $studentManager->getAllStudents();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách học sinh</title>
</head>
<body>
<button><a href="create-student.php">ADD NEW STUDENT</a></button>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Math</th>
        <th>Physic</th>
        <th>Chemistry</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><?php echo $student->getMath() ?></td>
            <td><?php echo $student->getPhysic() ?></td>
            <td><?php echo $student->getChemistry() ?></td>
            <td><a href="detail-student.php?id=<?php echo $key?>">Detail</a></td>
            <td><a onclick="return confirm('Are you sure ?')" href="delete-student.php?id=<?php echo $key?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
