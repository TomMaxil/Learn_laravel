<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <h1>Edit Students</h1>

    <form action="{{ route( 'student.update', $student['id'] )}}" method="Post">
        @method('PUT')
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $student['sname'] }}"> <br>

        <label for="email">Email</label> 
        <input type="email" name="email" value="{{ $student['semail'] }}"> <br>     

        <input type="submit" value="Update">
    </form>
</body>
</html>