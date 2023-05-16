
<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <h1>Hello  </h1>
    <h3>Message from:{{ $message1->name}} </h3>
    <p>{{$message1->message}}</p>

    <p>Regards:</p>
    <p><small>{{ $message1->name}}</small></p>
    <p><small>{{ $message1->email}}</small></p>

</body>
</html>
