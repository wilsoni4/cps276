<?php
    require_once 'Date_Time.php';
   // print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notes</title>
</head>
<body>
    <?php
    if(count($_POST) > 0) {
        $dt = new Date_Time();
        $notes=$dt->addNote();
        echo $notes;
    }
    ?>
    <form action = "addNote.php" method = "post">
        <div style="margin-left:45px;">
            <h1> Add Notes</h1>
            <a href="http://russet.wccnet.edu/~imwilson/Assignment8/displayNote.php/"> Show Notes </a>
        </div><br>

        <div class="mb-3" style="margin-left:45px;margin-right:45px;">
            <label for="timestamp" class="form-label">Date and Time</label><br>
            <input type="datetime-local" class="form-control" id="dT" name="dT"> 
        </div>

        <div class="form-group" style="margin-left:45px;margin-right:45px;">
            <label for="note">Note</label>
            <textarea class="form-control" id="note" name="note" rows="10"></textarea>
        </div>
        <div class = "group" style="margin-left:45px;">
            <button type = "submit" name = "submit" class = "btn btn-primary"> Add Note </button>
        </div>

</form>

</body>
</html>