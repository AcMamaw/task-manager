<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4">Task Manager</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>
        @yield('content')
    </div>
</body>
</html>
