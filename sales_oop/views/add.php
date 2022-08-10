<!-- <?php
    session_start();

    if(empty($_SESSION)){
        header('location: ../');
        exit;
    }

    include "../classes/User.php";

    $user = new User;
    $user_details = $user->getUserDetails($_GET['user_id']);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Product</title>
</head>
<body>
        <div class="container mt-5">
            <div class="card w-50 mx-auto border-0">
                <div class="card-header bg-white border-0">
                    <h1 class="display-4 fw-bold text-center text-primary">Add Product</h1>
                </div>

                <div class="card-body">
                    <form action="../actions/add-action.php" method="post">
                        <input type="hidden" name="user_id" value="<?=$user_details['id']?>">

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="product-name" class="form-label">Product Name</label>
                                <input type="text" name="product_name" id="product-name" class="form-control" value="<?=$user_details['product_name']?>">
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" id="price" class="form-control" value="<?=$user_details['price']?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" value="<?=$user_details['quantity']?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Add</button>


                    </form>
                </div>
            </div>
        </div>
</body>
</html>