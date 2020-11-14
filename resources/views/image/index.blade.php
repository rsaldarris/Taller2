<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Images</title>
</head>
<body>
    <h5>Ip del server:  {{ $data['ip'] }} </h5>
    <h1> La imagen es: </h1>
    <img src="{{ $data['storage']->url($data['image_name']) }}" alt="">
</body>
</html>