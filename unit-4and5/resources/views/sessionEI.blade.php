@if(session()->has('name'))
    <h1>Welcome {{session('name')}}</h1>
    <a href="/logout">Logout</a>
@else
    <h1>Welcome</h1>
    <a href="/loginform">Login</a>
@endif
