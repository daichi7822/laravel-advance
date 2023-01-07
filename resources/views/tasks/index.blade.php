<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="BTGJDhHwtOoejpWUYrjWUGXFIHbDAfPyucblMAts">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="http://54.65.181.123/css/common.css">
</head>

<body class="font-sans antialiased">
    <div class="container">
        <div class="card">
            <div class="card__header">
                <p class="title mb-15">Todo List</p>
                <div class="auth mb-15">
                    <p class="detail">「dtest」でログイン中</p>
                    <form method="post" action="http://54.65.181.123/todo-advance/logout">
                        <input type="hidden" name="_token" value="BTGJDhHwtOoejpWUYrjWUGXFIHbDAfPyucblMAts"> <input class="btn btn-logout" type="submit" value="ログアウト">
                    </form>
                </div>
            </div>
            <a class="btn btn-search" href="http://54.65.181.123/todo-advance/todo/find">タスク検索</a>
            <div class="todo">
                <ul>
                    @error('task')
                    <li>{{ $message }}</li>
                    @enderror
                </ul>
                <div class="todo">
                    </form>
                    <form action="/tasks" method="post" class="flex between mb-30">
                        @csrf
                        <input type="text" class="input-add" name="task" />
                        <select name="tag_id" class="select-tag">
                            <option value="1">家事</option>
                            <option value="2">勉強</option>
                            <option value="3">運動</option>
                            <option value="4">食事</option>
                            <option value="5">移動</option>
                        </select>
                        <input class="btn btn-add" type="submit" value="追加" />
                    </form>
                    <table>
                        <tr>
                            <th>作成日</th>
                            <th>タスク名</th>
                            <th>タグ</th>
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
                                    <select name="tag_id" class="select-tag">
                                        <option selected value="1">家事</option>
                                        <option value="2">勉強</option>
                                        <option value="3">運動</option>
                                        <option value="4">食事</option>
                                        <option value="5">移動</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-update">更新</button>
                                </td>
                            </form>
                            <form action="/tasks/{{ $item->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td>
                                    <button class="btn btn-delete">削除</button>
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