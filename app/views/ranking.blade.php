@extends('layout.default')
@section('content')
	<div>
		<h2>Ranking:</h2>
		<hr>
		<ul class="list-unstyled">
			<?php $i=0 ?>
			@foreach($ranking as $id => $score)
				<?php $i++ ?>
				@if($i<=10)
					<li><b>#{{$i}}</b> {{$users[$id]}} - {{$score}} pontos</li>
					<hr>
				@endif
			@endforeach
		</ul>
	</div>
@stop
@section('own_js')
@stop