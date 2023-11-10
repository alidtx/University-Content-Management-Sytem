<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Director;
use App\Model\Member;

class DirectorController extends Controller
{
    //
    public function index()
    {
    	// dd('test');
    	$data['director'] = Director::get();
		//  dd($data['director']);
    	return view('backend.vc-message.message-view')->with($data);
    }

    public function addDirector()
    {

    	return view('backend.vc-message.message-add');
    }

    public function storeDirector(Request $request)
    {

    //   dd($request->all());
		$request->validate([

			'title_first_part' => 'required',
    		'title_second_part' => 'required',
    		'short_description' => 'required',
            'long_description' => 'required',


    	]);
    	$params = $request->all();
    	Director::create($params);
    	return redirect()->route('site-setting.vc_message')->with('info','New director Upload Successfully.');


    }

    public function editDirector($id)
    {
		$data['editData'] = Director::find($id);

    	return view('backend.vc-message.message-add')->with($data);
    }

    public function updateDirector(Request $request, $id)
    {
		$request->validate([
			'title_first_part' => 'required',
    		'title_second_part' => 'required',
    		'short_description' => 'required',
            'long_description' => 'required',

        ]);
    	$data = Director::find($id);
    	$params = $request->all();

    	$data->update($params);

    	return redirect()->route('site-setting.vc_message')->with('info','director Update Successfully');

    }

    public function deleteDirector(Request $request)
    {
    	$data = Director::find($request->id);
    	$data->delete();

    }

}
