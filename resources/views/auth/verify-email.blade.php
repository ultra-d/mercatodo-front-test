<h1>verify e-mail address</h1>
<p>You must verify your email address to access this page.</p>

<form method="POST" action="{{ route('verification.send')}}">
    @csrf
</form>