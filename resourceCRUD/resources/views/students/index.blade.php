<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>Students</h1>

    <a href="{{ route( 'student.create') }}">Create</a>

  <table border="10">
    <thead>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        @php
        $count = 1;    
        @endphp
        @foreach ($students as $std)
            <tr>

            <td>{{ $count }}</td>
            <td>{{ $std['sname']}}</td>
            <td>{{ $std['semail']}}</td>
            <td><a href="{{ route( 'student.edit',$std['id']) }}">Update</a>
           <form action="{{ route( 'student.destroy',$std['id']) }}" method="POST" 
           onclick="return 'Are You Want To Delete ?'">
           @csrf
           @method('DELETE')
            <input type="submit" value="Delete">
           </form>
           </td>
            </tr>
            @php
            $count++;    
            @endphp
        @endforeach
       
          
    </tbody>
  </table>
</body>
</html>