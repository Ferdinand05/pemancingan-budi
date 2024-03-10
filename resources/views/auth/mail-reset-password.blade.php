<h4>Hello!</h4>
<h5>RESET PASSWORD</h5>
<br>
<p>Click link down below to reset your password!</p>
<a href="{{ route('reset-password', ['token' => $token]) }}">Reset Password</a>
