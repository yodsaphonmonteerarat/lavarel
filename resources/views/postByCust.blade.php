<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>
        <p>customer ID : {{$customer->cust_id }}</p>
        <p>customer name : {{ $customer->name }}</p>
    </h3>

    <body>
        <p> Post </p>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            </br>
        </tr>
        @endforeach

    </body>

</html>