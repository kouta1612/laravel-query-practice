<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    @foreach ($users->unique('name') as $user)
        <p>ユーザ名：{{ $user->name }}</p>
        <p>役割：{{ $users->where('name', $user->name)->pluck('role_name')->join(', ') }}</p>
    @endforeach
    <p>{{ $users }}</p>
</body>

</html>