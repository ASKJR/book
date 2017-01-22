@extends('layout.login')
@section('content')
    <form class="form-signin" method="POST" action="login/process">
		<h1 class="form-signin-heading text-muted">Esse eu já li!</h1>
		<input type="email" name="email" class="form-control" placeholder="E-mail" required="" autofocus="" value="{{Input::old('email');}}">
		<input type="password" name="password" pattern=".{6,}"   required title="A senha deve ter no mínimo 6 dígitos." class="form-control" placeholder="Senha" required="">
		<button class="btn btn-lg btn-primary btn-block" type="submit">
			Login
		</button>
	</form>
@stop
@section('own_js')
	<script type="text/javascript">
			$(function (){
				@if ($errors->any())
					setTimeout(function(){
	  					swal(
  							'Oops... :(',
  							'Login inválido!',
  							'error'
						)
					}, 200);
				@endif
			});
	</script>
@stop