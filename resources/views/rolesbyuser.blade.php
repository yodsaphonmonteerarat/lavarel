<html>

<body>
    <h1>Roles for: {{ $user->name }}</h1>
    @foreach ($roles as $role)
    <ul>
        <li> {{ $role->name }}</li>
    </ul>
    @endforeach
</body>


</html>