<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residtration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 fw-bold text-danger text-center">REGISTRATION</h1>
            </div>

            <div class="card-body">
                <form action="../actions/registration-action.php" method="post">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Register</button>

                    <p class="text-center small mt-3">Already Register? <a href="">Sign In</a></p>

                </form> 
            </div>
        </div>
    </div>
</body>
</html>