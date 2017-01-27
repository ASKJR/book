@extends('layout.default')
@section('content')
	<div>
		<h2>Sua pontuação é de:</h2> <br><br>
		<div class="box" style=" width: 20%;
    margin: 0 auto; ">
			<h3 class="heading-box">Pontuação</h3>
			<p class="p-box">{{$score}}</p>
		</div>
	</div>
@stop

@section('own_js')
@stop