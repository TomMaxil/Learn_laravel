
<a href="/">Home</a>|
<a href="/about">About</a>|
<a href="/learning">Learning</a>|
<a href="/batch">Batch</a>|

<h1>My Students</h1>
<ol>
@foreach ($stds as $students)
<li>{{$students}}</li>
@endforeach
</ol>