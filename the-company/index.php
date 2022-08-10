<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>The Company</title>
</head>
<body>
    <div class="container">
        <div class="card w-50 mx-auto my-5 border-0">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 fw-bold text-primary text-center">LOGIN</h1>
            </div>

            <div class="card-body">
                <form action="actions/login-action.php" method="post">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="username" class="form-labal">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password" class="form-labal">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <p class="text-center mt-3 small"><a href="views/registration.php">Create an Account</a></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>