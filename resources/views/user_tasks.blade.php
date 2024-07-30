<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>

    <form action="{{ url('user_tasks') }}" method="POST">
        @csrf
        <div>
            <label for="task_name">Task Name:</label>
            <input type="text" id="name" name="task_name" value="{{ old('task_name') }}">
            @error('task_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
            
            <option value="on_process">On Process</option>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            </select>
            @error('status')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="5" style="width: 100%"></textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}">
            @error('deadline')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    @if(session('success'))
    <div>{{ session('success')}}</div>
    @endif
</body>
</html>