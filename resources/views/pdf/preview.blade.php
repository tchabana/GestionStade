<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($qrCodes as $qrcode)
{{$qrcode['qr_code']}}
    @endforeach
</body>
</html>