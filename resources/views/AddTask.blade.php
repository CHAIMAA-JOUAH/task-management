<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1 {
            color: #007bff;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .delete-button, .modify-button {
            color: #fff;
            background-color: #dc3545;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 3px;
            margin-right: 5px;
        }
        .add-button {
            color: #fff;
            background-color: #28a745;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 3px;
        }
        p {
            color: #555;
        }
        .no-tasks {
            color: #dc3545;
            font-weight: bold;
        }
        .button-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button class="add-button" onclick="location.href='{{ url('/tasks/create') }}'">Add Task</button>
    </div>

    <h1>Task List</h1>

    @if(count($tasks) > 0)
        <ul>
            @foreach($tasks as $task)
                <li>
                    {{ $task->name }}
                    <div>
                        <button class="modify-button" onclick="location.href='{{ url('/tasks/'.$task->id.'/edit') }}'">Modify</button>
                        <form method="POST" action="{{ url('/tasks/'.$task->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </div>
                </li>
                <!-- Add other fields as needed -->
            @endforeach
        </ul>
    @else
        <p class="no-tasks">No tasks available.</p>
    @endif
</body>
</html>
