<h1>CA1</h1>
<h1>Selected Course</h1>
<p>course ID: {{ $CoursesID }} </p>
<p>course Name: {{ $courseName }}</p>
<hr>
<h1>select Another Course</h1>
<ul>
    @foreach ($course as $id => $c)
        <li><a href="/course/{{ $id }}">{{ $c }}</a></li>
    @endforeach
</ul>
