@extends('layout.default')
@section('content')
	<div>
		<h2>Troféus:</h2>
		<hr>
		<p style="color: red"><i>*A cada 5 livros que você ler de um mesmo estilo, você receberá um troféu.</i><p>
		<br><br>

		<ul>
		@foreach ($trophies as $trophy)
			<li>{{$trophy->genre}}: <b>{{$trophy->total}}</b> <i>livro(s) lido(s).</i></li>	
		@endforeach
		</ul>
		@foreach ($trophies as $trophy)
			@if($trophy->total>=5)
			<div class="box" style=" width: 20%;
	    margin: 0 auto; ">
				<h3 class="heading-box">Leitor de {{$trophy->genre}}</h3>
				<p class="p-box"><img src="/img/trophy.png"></p>
			</div>
			<br><br>
			@endif
		@endforeach
	</div>
@stop

@section('own_js')
@stop