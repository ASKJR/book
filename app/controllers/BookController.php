<?php

class BookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = new Book();
		$this->data['user'] = Auth::User();
		$this->data['books'] = $books->getBooks();
		$this->data['bookscount'] = $books::count();

		return View::make('home')->with($this->data);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


}
