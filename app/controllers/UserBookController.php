<?php

class UserBookController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$bookId = Input::get('book_id');
		$userId = Auth::User()->id;
		$userBook = new UserBook();
		$userBook->user_id = $userId;
		$userBook->book_id = $bookId;
		$userBook->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		$bookId = Input::get('book_id');
		$userId = Auth::User()->id;
		$userBook = UserBook::where('user_id',$userId)->where('book_id',$bookId)->first();
		if (!is_null($userBook)) {
			$userBook->delete();
		}
	}

	public function showPontuacao()
	{
		$this->data['score'] = User::getScoreByUser(Auth::User()->id);
		return View::make('score')->with($this->data);	
	}

	public function showTrofeu()
	{
		$this->data['trophies'] = UserBook::getGroupGenreBooksByUser(Auth::User()->id);
		$trophies = UserBook::getGroupGenreBooksByUser(Auth::User()->id);
		// foreach ($trophies as $trophy) {
		// 	echo $trophy->total . " " . $trophy->genre . "<br>";
		// } 
		// dd();
		return View::make('trophy')->with($this->data);	
	}

	public function showRanking()
	{
		$users = User::all();
		
		$ranking   = array();
		$usersName = array();
		
		foreach ($users as $user) {
			$ranking[$user->id] = User::getScoreByUser($user->id);
			$usersName[$user->id] = $user->name;
		}
		arsort($ranking);
		$this->data['ranking'] = $ranking; 
		$this->data['users']   = $usersName;
		//dd(arsort($ranking));

		return View::make('ranking')->with($this->data);		
	}

}
