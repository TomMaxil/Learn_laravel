<a href="/">Home</a>|
<a href="/about">About</a>|
<a href="/learning">Learning</a>|
<a href="/batch">Batch</a>|


<h2>Blade Syntax</h2>

@php
$name = "Bilal";   
$role = "admin"; 
@endphp

<h3>{{$name}}</h3>
<hr>
@if ($role == "admin")
<h3>Admin Hai</h3>
@elseif($role == "user")
<h4>User Hai</h4>
@else
<h5>Koi Toh Hai</h5>    
@endif

<hr>

@for ($i = 0; $i <= 10; $i++)
    <li>{{$i}}</li>
@endfor

<hr>

@php
  $table = 2;  
@endphp
<table border="1" width="300px">
@for ($i = 1; $i <= 10; $i++)
<tr>
    <td>{{$table}}</td>
    <td>X</td>
    <td>{{$i}}</td>
    <td>=</td>
    <td>{{$table * $i}}</td>
</tr>
@endfor
</table>