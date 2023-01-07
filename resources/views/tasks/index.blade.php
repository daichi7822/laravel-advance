<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../css/app.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>COACHTECH</title>
</head>
<!DOCTYPE html>
<html lang="ja">

</html>

<body>
    <div class="container">
        <div class="card">
            <p class="title mb-15">Todo List</p>
            <ul>
                @error('task')
                <li>{{ $message }}</li>
                @enderror
            </ul>
            <div class="todo">
                <form action="/tasks" method="post" class="flex between mb-30">
                    @csrf
                    <input type="text" class="input-add" name="task" />
                    <input class="button-add" type="submit" value="追加" />
                </form>
                <table>
                    <tr>
                        <th>作成日</th>
                        <th>タスク名</th>
                        <th>更新</th>
                        <th>削除</th>
                    </tr>
                    @foreach ($tasks as $item)
                    <tr>
                        <td>
                            {{ $item->created_at }}
                        </td>
                        <form action="/tasks/{{ $item->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <td>
                                <input type="text" class="input-update" value={{ $item->name }} name="task" />
                            </td>
                            <td>
                                <button class="button-update">更新</button>
                            </td>
                        </form>
                        <form action="/tasks/{{ $item->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td>
                                <button class="button-delete">削除</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>