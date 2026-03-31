<h1>Vote Casting</h1>

@if($age < 18)
    <p>You are not allowed to vote.</p>
@elseif($age >= 18)
    <p>You are allowed to vote.</p>
@endif