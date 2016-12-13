<html>
<head>
    <title>Thank you for the request!</title>
</head>
<body>
    <h1>Request for Information</h1>
    <p>
        Thank you {{$request->fname}} {{$request->lname}}, for requesting information on our {{$insurance->product}} product. <br>
        We will send an email to {{$request->email}} with detail product information.
    </p>
</body>
</html>


