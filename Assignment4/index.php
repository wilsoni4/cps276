<?php
    $output = "";
    if(count($_POST) > 0) {
        require_once "NameList.php";
        $addName = new NameList();
        $output = $addName->addAndClear(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names List</title>
</head>
<body>
    <?php

    ?>
    <form action = "index.php" method = "post">
        <div style="margin-left:45px;">
            <h1> Add Names </h1>
        </div>

        <div class = "group" style="margin-left:45px;">
            <button type = "submit" name = "addButton" class = "btn btn-primary"> Add Name </button>
            <button type = "submit" name = "clearButton" class = "btn btn-primary"> Clear Names </button>
        </div>

        <div class="mb-3" style="margin-left:45px;margin-right:45px;">
            <label for="name" class="form-label">Enter Name</label>
            <input type = "text" class="form-control" id="name" >
            <div id="enter name" class="form-text"></div>
        </div>

        <div class="mb-3" style="margin-left:45px;margin-right:45px;">
            <label for="listNames" class="form-label">List of Names</label>
            <textarea class="form-control" id="listNames" rows = "20">  <?php echo $output; ?></textarea>
        </div>
        
</form>

</body>
</html>