<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .border_temp{
            border:2px solid #0b3251;
        }
        .logoimg{
            margin: 0 auto;
            padding: 15px;
        }
        .bar{
            height: 50px;
            background-color: #0b3251;
            width: 100%;
        }
        .midd_text{
            position: relative;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container border_temp">
    <div class="row">
        <div class="logoimg">
            <img src="{{ ('http://localhost/bangkorpulp/public/front_end/img/mainlogo.png') }}" alt="BANGKOR BULB">
        </div>
        <div class="bar"></div>
    </div>

    <div class="row">
        <div class="midd_text">
            Subject: <h1>{{ $e_subject }}</h1>
            <p>{{ $e_message }}</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
