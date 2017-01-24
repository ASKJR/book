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
}
