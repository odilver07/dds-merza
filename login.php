<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">    
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body style="background-color:  #231a69;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mb-5">

            <div class="col-xl-10 col-lg-12 col-md-9" style="margin-top: 100px;">

                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="./img/merza-login.png" alt="" style="width: 480px; height: 554px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="./img/merza.png" alt="">
                                    </div>
                            <form action="login-v.php" method="POST" class="bg-white">
                                <div class="mb-3 my-auto">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" name="username"  class="form-control">
                                </div>
                                <div class="mb-2 my-auto">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="pass" class="form-control">
                                </div>
                                <div class="d-grid gap-2 mb-2 my-auto">
                                    <button class="btn btn-dark" name="login" value="login" id="login">Login</button>
                                </div>
                            </form>
                                    <hr>
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