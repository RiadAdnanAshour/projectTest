<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../partial/css/style.css" />
    <style>
    h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        border-bottom: 2px solid #ccc;
        padding-bottom: 10px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    a.btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        user-select: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    a.btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    a.btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
    </style>
    <title>manage User</title>
</head>

<body>
    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo"></a>
            <ul class="main-nav">
                <li><a href="#">profile</a></li>
                <li><a href="#">log out</a></li>
            </ul>
        </div>
    </div>
    <!-- End Header -->

    <!-- start tabel -->
    <div class="container">
        <h3>All Users</h3>
        <table class="table" border="1">
            <thead>
                <tr>

                    <th scope="col">index</th>
                    <th scope="col">name</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Riad Ashour</td>
                    <td scope="col"><a href="register.php" class="btn btn-primary">Show</a></td>
                    <td scope="col"><a href="register.php" class="btn btn-primary">Update</a></td>
                    <td scope="col"><a href="register.php" class="btn btn-primary">Delete</a></td>
                </tr>

            </tbody>
        </table><br><br><br>
        <div class="col-12">

        </div>


        <div class="col-12">
            <br><br><br>
        </div>


        <div class="col-12">
            <br><br><br>
        </div>




    </div>


    <footer>
        <br><br><br><br><br><br>
        <p>2023 All rights reserved</p>
    </footer>
</body>

</html>