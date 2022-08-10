<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="number" name="age" placeholder="Age"><br>
        <input type="submit" name="btn_submit" value="Submit"><br>
    </form>

</body>
</html>    

    <?php
        include_once "Person.php";

        if(isset($_POST['btn_submit'])){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $age = $_POST['age'];

            $person = new Person;
            
            $person->setName($name);
            $person->setAddress($address);
            $person->setAge($age);
    
            echo "Name:" . $person->getName() . "<br>";
            echo "Address:". $person->getAddress() ."<br>";
            echo "Age: " . $person->getAge();
        }
    
    
    
    
    ?>
