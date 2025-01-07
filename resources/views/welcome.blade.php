<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            margin-top: 0;
        }
        form {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        li:last-child {
            border-bottom: none;
        }
        .material-icons {
            cursor: pointer;
        }
        .edit-icon {
            color: #000;
        }
        .delete-icon {
            color: #ff0000;
        }
        .icon-buttons {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('add_task') }}" method="post">
            @csrf
            <input type="text" name="task" placeholder="Task name">
            <button type="submit">Add Task</button>
        </form>

        <h2>Tasks</h2>
        <ul>
            @foreach ($tasks as $index => $task)
                <x-task :task="$task" :index="$index" />
            @endforeach
        </ul>
    </div>
</body>
</html>