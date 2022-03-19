<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="mailclass">
        <b> <p>A New claim request have been made by  <b>  {{ $name }}  </b> </p> </b>
        <b> Details of Insurance claim </b> <br>
        <b>name :</b> {{ $name }} <br>
        <b>email</b>: {{ $claimemail }} <br>
        <b>phone number :</b> {{ $phonenumber }} <br>
        <b>company</b>: {{ $company }} <br>
        <b>main machine</b>: {{ $claimachine }} <br>
        <b>model</b>: {{ $claimsubmachine }} <br>
        <b>serial no</b>: {{ $claimserialno }} <br>
        <b>waranty</b>: {{ $claimwarantyfrom }} &nbsp; till &nbsp; {{ $claimwarantyto }} <br>
        <b>message by {{ $name }} </b>: {{ $claimmessage }} <br> <br> <br>


        <a href="http://localhost:8000/" class="btn btn-danger btn-lg" style="padding: 10px 24px; text-decoration:none ; background-color:rgb(245, 10, 10) ; color:white ; text-align: center;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer; " > Click To respond </a>
        
    </div>
</body>
</html>