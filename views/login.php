<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <br><br><br><br>
    <div class="container" style="margin: auto; width: fit-content;">
        <center>
            <img style="align-items: center;" src=" " width="90" alt="">
        </center>
    </div>
    <div class="container" style="margin: auto; width: fit-content; ">
        <h3 style="align-items: center; margin-right:200px;"><b>Good to see you again</b></h3>
        <div class="card">
            <div class="card-body">
                <h5 class="modal-title" id="staticBackdropLabel"> <img src="https://cdn1.iconfinder.com/data/icons/users-vol-3/32/user-man-enter-login-signup-512.png" height="50" alt="not found">Login </h5>
                <hr>
                <form action="../torouter/action/login.php" name="login" autocomplete="off" method="POST">
                    <input type="hidden" name="_token" value="0ilLOGuUybgPAzoVMs0MnR9XlIS6JZLisFmuLbOQ">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope-at-fill" style="font-size:18px;"></i> Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="vineetkrishnagupta@gmail.com" required>
                        <label for="password" class="form-label"><i class='bi bi-key-fill' style='font-size:20px'></i> Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" value="india@123" required>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input success" id="exampleCheck" onclick="Show()">
                            <label class="form-check-label" for="exampleCheck">Show Password</label>
                        </div>
                        <a href="forgetPassword.php" class="text-success">
                            <div id="emailHelp" class="form-text text-success">Forget password.</div>
                        </a>
                    </div>
                    <button type="submit" class="btn btn-outline-success"><b>Submit</b></button>
                    <a href="../torouter/registration" class="btn btn-outline-primary"><b>Sign in</b></a>
                </form>
                <hr>
                <a href="/" style="width:100%;">
                    <button type="button" style="width:100%;" class="btn btn-secondary btn-lg"><b>Back</b></button>
                </a>
            </div>
        </div>
    </div>

    <script src="../torouter/assets/scr.js"></script>
</body>

</html>