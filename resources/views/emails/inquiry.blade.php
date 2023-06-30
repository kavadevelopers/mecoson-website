<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry mail</title>
</head>
<body>
    <p>Inquiry at {{ date('d M Y') }}</p>
    <ul>
        <li><strong>Name : </strong>{{ $name }}</li>
        <li><strong>Email : </strong>{{ $email }}</li>
        <li><strong>Mobile : </strong>{{ $mobile }}</li>
        <li><strong>Subject : </strong>{{ $subject }}</li>
        <li><strong>Message : </strong>{{ $message }}</li>
    </ul>
</body>
</html>