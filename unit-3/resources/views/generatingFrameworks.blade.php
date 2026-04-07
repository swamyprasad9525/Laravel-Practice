<p>here we will se how url and action work</p>
<a href="{{url('/data')}}">click for url</a>
<br>
<a href="{{action([App\Http\Controllers\Simplecontroller::class, 'data'])}}">click for action method</a>
//asp.net