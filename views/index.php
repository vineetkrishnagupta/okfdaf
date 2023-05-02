<?php include "settings/chick.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
       <link rel="stylesheet" href="../torouter/assets/style.css">
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
</head>

<body>
    <?php include "components/nev.php"; ?>
    <?php include "components/sidebar.php"; ?>

    <div class="b-example-divider" style="width: 1180px;">
        <div class="card">
            <div class="card-body">
                This is some text within a card body.


                <div>
                    <table>
                        <tr>
                            <th>
                                <h5>ALL ADMIN'S </h5>
                            </th>
                            <th><a href="../torouter/add/admin" class="btn btn-success">ADD ADMIN</a></th>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            require "../torouter/action/connection.php";
                            //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM user");
                            $stmt = $conn->query("SELECT * FROM user");
                            while ($row = $stmt->fetch()) {

                                echo "  <tr>
                                <th scope='row'>" . $row['id'] . "</th>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['password'] . "</td>
                                <td><a href='../torouter/action/deleteadmin.php?id=" . $row['id'] . "' class='btn btn-danger mx-2'>Delete</a><a href='/' class='btn btn-success'>Update</a></td>
                                </tr>";
                            }


                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </main>

    <?php include "components/footer.php"; ?>

    <script src="https://getbootstrap.com/docs/5.0//dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>