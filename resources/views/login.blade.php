<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login page</h1>
<form action="/login" method="post">
    @csrf
    Email: <input type="email" name="email">
    Password: <input type="password" name="password">
    <button type="submit">Login</button>
</body>
</html>