<?php





// Get user info using api from server
function getInfo()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://unicorn.inlab.uz/api/me',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ab64f907-5e8a-4f38-95a8-11fe0adebbb2'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
}

//get user info from api response
$result = getInfo();

$result =  $result['result'];

$user = $result['name'];
$phone = $result['phone'];
$date = $result['token_expires_at'];


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

<!--show user info -->
<div class="container">
    <h2>welcome <?php echo $user ?></h2>
    <div class="card">
        <div class="card-body">phone : <?php echo $phone ?> </div>
        <div class="card-body">Today`s date is : <?php echo $date ?> </div>

    </div>
</div>

</body>
</html>
