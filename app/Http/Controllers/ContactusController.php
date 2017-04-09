<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Mail;
use App\Category;
use App\Http\Requests\ContactFormRequest;

use Input;


class ContactusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
public function store(ContactFormRequest $request)
{
	

 
	
	$data = array(
        'name' => $request->input("name"),
        'email' => $request->input("email"),
        'messagecontent' => $request->input("messagecontent"),
    );

	
    Mail::send('emails.layoutmail', $data, function ($message) use ($data){



        $message->from('spiral.architects.info@gmail.com', $data['email']);

        $message->to('aungtnaing82@gmail.com')->subject('New Client Enquiry')
        										->replyTo($data['email']);

    });

		$categorys = Category::orderBy('id', 'desc')->get();

    return view('pages.acknoledgeform')->with('categorys', $categorys);


}

	/**
	 * Display th$userid = $request->user()->id;specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		
		
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function rrmdir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") 
						rrmdir($dir."/".$object); 
					else unlink   ($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}

}


