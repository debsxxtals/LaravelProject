<!-- resources/views/students/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
</head>

<body>
    <h1>Students List</h1>
    <ul>
        @foreach($students as $student)
        <li>
            <a href="{{ url('/students', $student->studentid) }}">{{ $student->name_ }}</a>
        </li>
        @endforeach
    </ul>
</body>

</html>