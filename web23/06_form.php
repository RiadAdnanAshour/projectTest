<?php
// prepare upload folder
if(!file_exists('cv')){
    mkdir('cv');
}
if(!file_exists('images')){
    mkdir('images');
}
// echo getcwd();
// echo DIRECTORY_SEPARATOR;
$email = '';
$password = '';
$errors = [];

if (isset($_POST['send'])) {
    $img_name = ''; // name image

    // echo '<pre>';
    // print_r($_REQUEST);

    // print_r($_FILES);
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Enter VALID Email';
    }

    $password = $_POST['password'];
    // echo $_POST['checkMe']; // check
    // echo '<pre>';
    // print_r($_GET);
    // print_r($_POST);

    // echo $_POST['email'];

    // if(strlen($_POST['email']) == 0){
    if ($_POST['email'] == '') {
        // $errors[] = 'Enter email ';
        // echo 'Enter email <br>';
    }
    if ($_POST['password'] == '') {
        // $errors[] = 'Password Can NOT be empty';
    }

    if (strlen($_POST['password']) < 8) {
        // $errors[] = 'weak password';
    }

    if (isset($_POST['checkMe'])) {
        // echo 'CHECKED';
    }

    if (isset($_POST['gender'])) {
        if ($_POST['gender'] == 1) {
            // echo 'MALE';
        } else {
            // echo 'FEMALE';
        }
    }

    if (isset($_POST['city'])) {
        // echo '<br>City is: ' . $_POST['city'];
    }

    // echo '<pre>';
    // print_r($_FILES);
    // echo $_FILES['cv']['type'];
    // echo $_FILES['image']['size'];

    if($_FILES['cv']['type'] != 'application/pdf'){
        $errors[] = 'File must be PDF';
    }
    
    if($_FILES['image']['size'] > 1024*1024) {
        $errors[] = 'Image size must be less than 1 MB';

    } else {
        $ext =  pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        // echo mime_content_type($_FILES['image']['name']);
        $img_name = date('Y-m-dH-i-s') . md5($_FILES['image']['name']) .'.' . $ext;
    }

    if(count($errors) == 0){
        if(!move_uploaded_file($_FILES['cv']['tmp_name'], getcwd() . DIRECTORY_SEPARATOR . 'cv' . DIRECTORY_SEPARATOR . $_FILES['cv']['name'])){
            echo 'Erroe uploading file';
        }
        if(!move_uploaded_file($_FILES['image']['tmp_name'], getcwd() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $img_name)){
            echo 'Erroe uploading file';
        }
    }




    // if(count($errors) > 0) {
    //     echo "<ul class='text-danger'>";
    //     foreach($errors as $error){
    //         echo "<li>" . $error . "</li>";
    //     }
    //     echo '</ul>';
    // }


    // echo 'HELLOO';
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include 'pa0rtials/p_header.php' ?>
    <?php //require('partials/p_header.php') ?>

    <div class="container">
        <?php if (count($errors) > 0) { ?>

            <ul class="text-danger">
                <?php foreach ($errors as $error) { ?>
                    <li> <?php echo $error;  ?></li>
                <?php  } ?>
            </ul>

        <?php  } ?>


        <!-- <form method="post"> -->
        <!-- <form action="<?php //echo $_SERVER['PHP_SELF']   ?>" method="post" enctype="multipart/form-data"> -->
        <!-- <form action="06_1_formData.php" method="post" enctype="multipart/form-data"> -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="<?php echo $email  ?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="<?php echo $password  ?>" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input name='checkMe' type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="form-check">
                <input name="gender" value="1" class="form-check-input" type="radio" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input name="gender" value="2" class="form-check-input" type="radio" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>

            <select name="city" class="form-select" aria-label="Default select example">
                <option selected disabled>Plz Select City .. </option>
                <option value="1">N. Gaza</option>
                <option value="2">Gaza</option>
                <option value="3">Middle</option>
                <option value="4">Khan</option>
                <option value="5">Rafah</option>
            </select>


            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">CV</label>
                <input name="cv" class="form-control" type="file" id="formFileDisabled">
            </div>

            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Image</label>
                <input name="image" class="form-control" type="file" id="formFileDisabled">
            </div>

            <button name="send" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>