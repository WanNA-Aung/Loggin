<?php

    session_start();

    if(!isset($_SESSION['user'])){
        header("location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .Container{
            width: 500px;
            margin: 50px auto;
        }
        h1{
            margin:10px 35px;
        }
        li{
            width:410px;
            list-style: none;
            border: 1px solid gray;
            padding: 20px;
        }

        .formContainer{
            margin:0 auto;
            border: 1px solid gray;
            display: flex;
            justify-content: space-between;
            width: 450px;
            margin-left: 40px;
            
        }

        button{
            padding: 0px 0px;
            margin:0;
            background-color: blue ;
            color: white;
            border:none;
        }
        .fileInput{
            padding:0px;
            padding-right: 102px;
            margin:0px;
            border:none;
        }

        .photo{
            margin: 35px;
        }
    </style>
</head>
<body>
    
    <div class="Container">
        <h1>John Doe (Manager)</h1>

        <?php if(isset($_GET['error'])) : ?>
        <div class="errorMessage">
            <p style="color:red; margin:10px 35px">Cannot support file type.</p>
        </div>
        <?php endif ?>

        <?php if(file_exists("_action/image/profile.jpg")) : ?>
        <img class="photo" src="_action/image/profile.jpg" alt="Profile Photo" width="200"> 
        <?php endif ?>

        <form action="_action/upload.php" method="POST" class="form-control" enctype="multipart/form-data">
            <div class="formContainer">
                <input class="fileInput" type="file" name="image">
                <button style="width:80px;">Upload</button>
            </div>
        </form>

        <ul>
            <li>
                <b>E-mail :</b> john@gmail.com
            </li>
            <li>
                <b>Phone :</b> (09)778722528
            </li>
            <li>
                <b>Address :</b> No.321,Thanlyin,Kyauktan
            </li>
        </ul>
        <a href="_action/logout.php" style="text-decoration:none;background-color: gray; color: white; padding: 10px;margin-left: 40px;">Logout</a>
    </div>
    

</body>
</html>