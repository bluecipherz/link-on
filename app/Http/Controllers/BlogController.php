<?php namespace App\Http\Controllers;

use Input;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogController extends Controller {

	protected $rules = array(
		'title' => ['required', 'min:3'],
		'body' => ['required'],
		'author' => ['required']
	);

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $blogs = Blog::all();
		$blogs = Blog::with('user')->orderBy('updated_at', 'desc')->paginate(5);
		return view('blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blogs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
		$input = array_except(Input::all(), ['_method', '_token']);
		// print_r($input);
		// echo 'ok';
		Blog::create($input);
		return redirect()->back()->with('success-message', 'Successfully created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::with('user')->whereId($id)->first();
		return view('blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);
		return view('blogs.edit', compact('$blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, $this->rules);
		$input = array_except(Input::all(), ['_method', '_token']);
		Blog::find($id)->update($input);
		return redirect()->back()->with('success-message', 'Successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Blog::find($id)->delete();
		return redirect()->back()->with('success-message', 'Successfully deleted.');
	}

}
