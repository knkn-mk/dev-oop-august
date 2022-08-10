<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price">

        <br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?php
        include "Book(constructor).php";

        if(isset($_POST['btn_submit'])){
            // $title = $_POST['title'];
            // $price = $_POST['price'];

            $book = new Book($_POST['title'], $_POST['price'], $_POST['author']);

            echo "Title: " . $book->getTitle() . "<br>";
            echo "Price: " . $book->getPrice() . "<br>";
            echo "Author: " . $author->getAuthor() . "<br>";
        }
    
    ?>
</body>
</html>