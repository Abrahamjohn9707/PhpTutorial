<?php

$user = 'Ibrohim';

$date = date('Y-m-d', time());

$score = 30
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>welcome <?php echo $user?></h2>
  <div class="card">
    <div class="card-body">Today`s date is : <?php echo $date?> </div>
    <div class="card-body">Your score is : <?php echo $score?> </div>
  </div>
</div>

</body>
</html>
