<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('web.layouts.style')
</head>
<body>
    

    <h1>Head</h1>

    @yield('content')

    <h1>Foot</h1>
    @include('web.layouts.script')

</body>
</html>




