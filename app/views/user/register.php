<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>

<body>
    <form action="postregister" method="post">
        <input type="text" name='email' placeholder="email">
        <input type="text" name='name' placeholder="name">
        <input type="text" name='username' placeholder='username'>
        <input type="password" name='password' placeholder="password">
        <input type="password" name='confirm_password' placeholder="confirm password">
        <input type="submit" name='submit'>
    </form>
</body>

</html>