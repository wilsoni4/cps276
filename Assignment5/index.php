<?php
    require_once 'Directories.php';
    if(isset($_POST['submit'])) {
        $dirObject = new Directories($_POST["folder"], $_POST["fileContent"]);
        $dirObject->createDirectory();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
</head>
<body>

    <form action = "index.php" method = "POST">
        <div >
            <h1>Files and Directories</h1>
        </div>
        
        <div class="mb-3" ">
       
        <br>
            Folder Name: 
            <input type = "text" class="form-control" name="folder">
            <div class="form-text"></div>
        </div>

        <div class="mb-3" >
            <label for="fileContent" class="form-label">File Content:</label>
            <textarea class="form-control" name="fileContent" rows = "20"> </textarea>
        </div>
        
        <div class = "group" >
            <input type = "submit" name = "submit" class = "btn btn-primary" value="Submit"></button>
        </div>
</form>

</body>
</html>