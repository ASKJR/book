<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = false;
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function getScoreByUser($user_id)
	{
		//Apurando número de páginas de cada livro lido por um usuário
		$bookHaveRead = UserBook::join('book','book.id','=','user_book.book_id')
								->select('book.page')
								->where('user_book.user_id',$user_id)
								->get();
		//Regra: livro lido +1
		//Regra: a cada 100 páginas que o livro tiver ele vale um ponto adicional

		$score = 0;
		foreach ($bookHaveRead as $book) {
			 $score++;
			 if ($book->page>=100)
			 	$score += (int)(($book->page)/100);
		}

		return $score;
	}

}
