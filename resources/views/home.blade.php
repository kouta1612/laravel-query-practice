<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    {{-- @foreach ($users->unique('name') as $user)
        <p>ユーザ名：{{ $user->name }}</p>
        <p>役割：{{ $users->where('name', $user->name)->pluck('role_name')->join(', ') }}</p>
    @endforeach --}}
    @foreach ($users->toArray() as $user)
        <p>ユーザ名：{{ $user['name'] }}</p>
        <p>ロール名：{{ implode(', ', array_column(array_filter($users->toArray(), function ($element) use ($user) {
            return $element['name'] == $user['name'];
        }), 'role_name')) }}</p>
    @endforeach
    <p>{{ $users }}</p>
</body>

</html>