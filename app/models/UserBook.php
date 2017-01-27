<?php

class UserBook extends Eloquent {

	protected $table = 'user_book';
	public $timestamps = false;

	public function getBooksByUser($user_id) 
	{
		return $this->where('user_id',$user_id)->get();
	}


	public static function getGroupGenreBooksByUser($user_id)
	{
		return UserBook::select(DB::raw('count(*) AS total ,genre.name AS genre'))
						->join('book','user_book.book_id','=','book.id')
						->join('genre','genre.id','=','book.genre_id')
						->where('user_book.user_id',$user_id)
						->groupBy('genre')
						->get();
	}
}