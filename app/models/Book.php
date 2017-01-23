<?php

class Book extends Eloquent {

	protected $table = 'book';
	public $timestamps = false;
	
	public function getBooks()
	{
		return $this->join('genre','genre.id','=','book.genre_id')
					->select('book.*', 'genre.name AS genre')
					->orderBy('title')
					->paginate(10);
	}

}