<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</body>

</html>