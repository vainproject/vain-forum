<?php namespace Modules\Forum\Http\Controllers;

use Vain\Http\Controllers\Controller;

class ForumController extends Controller {
	
	public function index()
	{
		return view('Forum::index');
	}
	
}