
<h1>Dear  {{$data['name']}}, Welcome to our online shop.</h1>
<h2>Your Order Total Amount: {{$data['total']}} </h2>
<p>You registration process is complete.Now You can login to our online shop</p>
<p>Login Link<a href="{{$data['login_link']}}">Click Here For Login</a></p>
<p>User: {{$data['user']}}</p>
<p>Password: {{$data['password']}}</p>
