<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="mailclass">
        <b> <p>A new machine request has been made by user <b>  {{ $name }}  </b> </p> </b>
        <b> Details of Request </b> <br>
        <b>name :</b> {{ $name }} <br>
       <b> phone number :</b> {{ $phonenumber }} <br>
        <b>main machine:</b> {{ $mainmachine }} <br>
        <b>model</b>: {{ $submachine }} <br>
        <b>Quantity :</b> {{ $qunatity }} <br> <br>

        <a href="http://localhost:8000/" class="btn btn-danger btn-lg" style="padding: 10px 24px; text-decoration:none ; background-color:green ; color:white ; text-align: center;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer; " > Click To respond </a>
        
    </div>
</body>
</html>