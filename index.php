<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queiries PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<?php
include 'post.php';
$educationList = ["Primary education","Secondary education","Vocational education",
                    "Higher education","Undergraduate education ","Graduate education",
                    "Postgraduate education"];
?>

<body>
    <div class="container">
        <h2> User Form Test: </h2>
        <form action="post.php" method="post">
            <div class="form-group my-2">
                <label for="username">Name: </label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group my-2">
                <label for="age">Name: </label>
                <input type="date" class="form-control" id="age" name="age">
            </div>
            <br>
            <div class="form-group my-2">
                <label for="sex">male </label>
                <input type="radio" class="form-control" id="sex" name="sex" value="male">
            </div>
            <div class="form-group my-2">
                <label for="sex">female</label>
                <input type="radio" class="form-control" id="sex" name="sex" value="female">
            </div>
            <div class="form-group my-2">
            <label for="selectedEducation">Choose your education:</label>
               <select name="selectedEducation" id="selectedEducation">
                <?php
                    foreach ($educationList as $edu) {
                    echo "<option value='$edu'>$edu</option>";
                    }
                    ?>
               </select>
            </div>
            <input type="submit" value="submit" class="btn btn-outline-primary mt-2">
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>

</html>