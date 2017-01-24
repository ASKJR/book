<?php

class UserBook extends Eloquent {

	protected $table = 'user_book';
	public $timestamps = false;

	public function getBooksByUser($user_id) 
	{
		return $this->where('user_id',$user_id)->get();
	}
}