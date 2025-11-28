<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

    <h1>Rigester Students</h1>

    <form action="{{ route( 'student.store' )}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name"> <br>

        <label for="email">Email</label> 
        <input type="email" name="email"> <br>     

        <input type="submit" value="Rigester">
    </form>
</body>
</html>