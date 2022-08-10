<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <div class="card mx-auto w-75 mt-5 border boder-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center">REGISTRATION</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="year-level"class="form-label">Year Level</label>
                        <select name="year_level" id="year-label" class="form-select" required>
                            <option value="" hidden>Choose your year level</option>
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                            <option value="4">Year 4</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="unit">Total Units</label><br>
                        <input type="number" name="unit" placeholder="Maximum of 23" max="23" min="1" required>
                    </div>
                    <div class="text-center mn-3">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="laboratory" id="lab" value="lab" class="form-check-input">
                            <label for="lab">With lab</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="laboratory" id="no-lab" value="no_lab">
                            <label for="no-lab">Without lab</label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="btn_submit" class="bg-dark text-white w-100">
                    </div>
                </form>    
            </div>
        </div>
   
<?php
include_once "School.php";

    if(isset($_POST['btn_submit'])){
        $name = $_POST['name'];
        $year_level = $_POST['year_level'];
        $units = $_POST['unit'];
        $laboratory = $_POST['laboratory'];

        $school = new School;
        $school->setValues($year_level, $units, $laboratory);
        $total_price = $school->computeTotalPrice();

        echo "Student name: <span class='fw-bold'>$name</span> <br>";
        echo "Year level: <span class='fw-bold'>$year_level</span> <br>";
        echo "No. of units: <span class='fw-bold'>$units</span> <br>";
        echo "Total Price: <span class='fw-bold'>$total_price</span> <br>" ;
}

?>

</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
