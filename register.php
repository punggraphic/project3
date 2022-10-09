<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>

<body>

    <?php
       include "navbar.php";
    ?>

    <div class="container col-md-6">
        <h1 class="abc text-center"> Register </h1>
        <form action="reg_insert.php" method="post" enctype="multipart/form-data">
            <div class="row pt-2">
                <div class="col-md-2">
                    First Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="firstname" class="form-control form-control-sm"
                        placeholder="กรุณากรอกชื่อ" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Last Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="lastname" class="form-control form-control-sm"
                        placeholder="กรุณากรอกนามสกุล" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    E-mail
                </div>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control form-control-sm"
                        placeholder="name@example.com" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Password
                </div>
                <div class="col-md-10">
                    <input type="text" name="password" class="form-control form-control-sm"
                        placeholder="กรุณากรอกรหัสผ่าน" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Address
                </div>
                <div class="col-md-10">
                    <input type="text" name="address" class="form-control form-control-sm"
                        placeholder="กรุณากรอกที่อยู่" />
                </div>
            </div>
            <div class="d-grid pt-3">
                <input type="submit" value="ลงทะเบียน" class="btn btn-danger" />
            </div>
        </form>

    </div>

</body>

</html>