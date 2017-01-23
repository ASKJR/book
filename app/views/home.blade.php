@extends('layout.default')
@section('content') 
   <div>
   		<h2>Livros disponíveis : {{$books->count()}} / {{$bookscount}}</h2> <br><br>
   		<table class="table table-striped table-bordered">
  			<thead>
  				<tr>
  					<th>Título</th>
  					<th class="text-center">Já leu?</th>
  				</tr>
  			</thead>
  			<tbody>
  				@foreach($books as $book)
	   				<tr>
		   				<td>
		   					<a  data-toggle="modal"   class="open-Modal"  data-title="{{$book->title}}" data-author="{{$book->author}}" data-paginas="{{$book->page}}" data-ano="{{$book->year}}" data-genre="{{$book->genre}}"
		   					href="#visualizarLivroModal"> {{$book->title}}</a>
		   				</td>
		   				<td class="text-center"><input type="checkbox" data-off-title="No" data-on-title="JDJKDJ"></td>
		   			</tr>
	   			@endforeach	
  			</tbody>
   		</table>
   </div>
   <hr>
   {{$books->links()}}
   <!-- Button trigger modal -->
@stop
<!-- Modal -->
<div class="modal fade" id="visualizarLivroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title">Modal title</h4>
      </div>
      <div class="modal-body">
      		<div style="width: 173px; margin: 0 auto;">
      			<img src="img/bookModal.png" align="center">
      		</div>
      		<label id="authorId"></label> <br>
      		<label id="anoId"></label> <br>
      		<label id="paginasId"></label> <br>
      		<label id="genreId"></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -->
@section('own_js')
<script type="text/javascript">
	$(':checkbox').checkboxpicker({
		offLabel: 'Não',
		onLabel: 'Sim'
	});
	$(document).on("click", ".open-Modal", function () {
     	var title   = $(this).data('title');
     	var author  = $(this).data('author');
     	var paginas = $(this).data('paginas');
     	var ano     = $(this).data('ano');
      var genre   = $(this).data('genre');

     	$("#title").text(title);
     	$(".modal-body #authorId").text("Autor: " + author);
     	$(".modal-body #anoId").text("Ano de puplicação: " + ano);
     	$(".modal-body #paginasId").text("Páginas: " + paginas);
      $(".modal-body #genreId").text("Gênero: " + genre);
	});

</script>
@stop