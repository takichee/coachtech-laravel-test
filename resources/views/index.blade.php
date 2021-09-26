<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        
        <label>名前<br><input type="text" name="name" id=""></label><br>
        <label>メールアドレス<br><input type="email" name="email" id=""></label><br>
        <input type="submit" value="送信する">
    </form>
</body>
</html>