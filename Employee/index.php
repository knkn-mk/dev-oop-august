<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net income Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container w-100">
        <h2 class="text-center fw-bold mt-3">Employee Activity</h2>
        <form action="" method="post">
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name"class="form-control">
            </div>

            <div class="mb-2">
                <label for="civil-status" class="form-label">Civil Status</label>
                <select name="civil_status" id="civil-status" class="form-control" required>
                    <option value="" hidden>Select your Civil Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>
                
            <div class="mb-2">
                <div class="row">
                    <div class="col-6">
                        <label for="position"class="form-label">Position</label>
                        <select name="position" id="position" class="form-control" required>
                            <option hidden>Select your Position</option>
                            <option value="staff">Staff</option>
                            <option value="adimin">Admin</option>
                        </select>                   
                    </div>
                    <div class="col-6">
                        <label for="employment_status" class="form-label">Employment Status</label>
                        <select name="employment_status" id="employments-status" class="form-control" required>
                            <option hidden>Select your Employment Status</option>
                            <option value="contractual">contractual</option>
                            <option value="probationary">Probationary</option>
                            <option value="regular">Regular</option>
                        </select>
                    </div>
                </div>
            </div>  

            <div class="mb-2">
                <label for="work-hours" class="form-label">Number of Hours Worked</label>
                <input type="number" name="work_hours" id="work_hours" class="form-control" required>
            </div>
            <div>
                <input type="submit" value="Submit" name="btn_submit" class="bg-primary text-white form-control">                   
            </div>        
        </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    include_once "Employee.php";

    if(isset($_POST['btn_submit'])){

        $Employee = new Employee($_POST['civil_status'], $_POST['position'], $_POST['employment_status'], $_POST['work_hours']);

        //echo statement
            echo "Name" . $_POST['name'] . "<br>";
            echo "Regular Pay" . $employee->
    }
?>