<?php
    require_once 'Date_Time.php';
    $dt = new Date_Time();
    //$dt->getNotes('list');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Notes</title>
</head>
<body>
    <form action = "displayNote.php" method = "post">
        <div style="margin-left:45px;">
            <h1> List of Notes</h1>
            <a href="http://russet.wccnet.edu/~imwilson/Assignment8/addNote.php"> Add Note </a>
        </div><br>

        <div style="margin-left:45px;margin-right:45px;">
            Start Date<input type="date" class="form-control" id="begDate" name="begDate"> 
            End Date<input type="date" class="form-control" id="endDate" name="endDate"> 
        </div><br>

        <div class = "group" style="margin-left:45px;">
            <button type = "display" name = "display" class = "btn btn-primary"> Show Notes </button>
        </div><br>

        <div id="noteList"><?php echo $dt->getNotes('list'); ?></div>
    <?php

    ?>
</form>

</body>
</html>