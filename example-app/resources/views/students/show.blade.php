<!-- resources/views/students/show.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>{{ $student->name_ }}</title>
</head>

<body>
    <h1>{{ $student->name_ }}</h1>
    <p>Age: {{ $student->age }}</p>
    <p>Address: {{ $student->address }}</p>
    <p>Contact Number: {{ $student->contactnumber }}</p>

    <h2>Courses</h2>
    <ul>
        @foreach($student->courses as $course)
        <li>
            <strong>{{ $course->courseid }}</strong> <u>{{ $course->coursetitle }}</u>: {{ $course->coursedescription }}
        </li>
        @endforeach
    </ul>
</body>

</html>