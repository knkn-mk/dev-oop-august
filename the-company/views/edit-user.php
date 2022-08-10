<?php
    session_start();

    if(empty($_SESSION)){
        header('location: ../');
        exit;
    }

    include "../classes/User.php";

    $user = new User;
    $user_details = $user->getUserDetails($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>
<body>
<?php include "navbar.php";?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="" class="navbar-brand ms-3">
            <h1 class="h5">The Company</h1>
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <?= $_SESSION['username'];?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-danger">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container mt-5">
            <div class="card w-50 mx-auto border-0">
                <div class="card-header bg-white border-0">
                    <h1 class="display-4 fw-bold text-center text-warning">Edit User</h1>
                </div>

                <div class="card-body">
                    <form action="../actions/edit-action.php" method="post">
                        <input type="hidden" name="user_id" value="<?=$user_details['id']?>">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first-name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control" value="<?=$user_details['first_name']?>">
                            </div>

                            <div class="col-md-6">
                                <label for="last-name" class="form-label">Llast Name</label>
                                <input type="text" name="last_name" id="last-name" class="form-control" value="<?=$user_details['last_name']?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?=$user_details['username']?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <input type="hidden" name="old_password" value="<?=$user_details['password']?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 mb-3">Edit</button>

                        <a href="" class="btn btn-secondary w-100">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>