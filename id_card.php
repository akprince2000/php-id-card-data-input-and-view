<?php
if (isset($_POST['btn'])) {
    $userName = $_POST['user_name'];
    $userPhone = $_POST['user_phone'];
    $userMail = $_POST['user_email'];
    $userCourse = $_POST['user_course'];
    $userBatch = $_POST['user_batch'];
}
?>
<?php
if (isset($_POST["btn"])) {
    // print_r($_FILES['profile_photo']); -> Check Coad
    $imgName = $_FILES['profile_photo']['name'];
    $temName = $_FILES['profile_photo']['tmp_name'];
    move_uploaded_file($temName, "img/" . $imgName);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/id_card.css">

</head>

<body>
    <div class="idCard mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card  border shadow " style="width: 35rem;">
                        <div class="card-body">
                            <div class="header">
                                <h3>Student Id Card</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/<?php if (isset($imgName)) {
                                                        echo $imgName;
                                                    }; ?>" class="card-img" alt="img" srcset="">
                                </div>
                                <div class="col-md-8">
                                    <h5>Name : <?php if (isset($userName)) {
                                                    echo $userName;
                                                } ?></h5>
                                    <h4>Course - <?php if (isset($userCourse)) {
                                                        echo $userCourse;
                                                    } ?></h4>
                                    </br>
                                    <ul>
                                        <li>Phone - <?php if (isset($userPhone)) {
                                                        echo $userPhone;
                                                    } ?> </li>
                                    </ul>
                                    <ul>
                                        <li>Email - <?php if (isset($userMail)) {
                                                        echo $userMail;
                                                    } ?> </li>
                                    </ul>
                                    <ul>
                                        <li>Batch No - <?php if (isset($userBatch)) {
                                                            echo $userBatch;
                                                        } ?> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>