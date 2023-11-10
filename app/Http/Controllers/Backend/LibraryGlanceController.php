<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\LibraryGlance;
use App\Model\Faculty;
use Illuminate\Http\Request;

class LibraryGlanceController extends Controller
{

    public function index()
    {
        $data['at_glances'] = LibraryGlance::orderBy('id','desc')->get();
        return view('backend.library_galance.list')->with($data);
    }

    public function addAtGalance()
    {
        $data['faculties'] = Faculty::where('status', 1)->get();
        return view('backend.library_galance.add', $data);
    }

    public function storeAtGalance(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'requred|mimes:jpg,jpeg,png',

        ]);

        $data                   = new LibraryGlance();
        $data->title            = $request->title;
        $data->column_1_text    = $request->column_1_text;
        $data->column_1_number  = $request->column_1_number;
        $data->column_2_text    = $request->column_2_text;
        $data->column_2_number  = $request->column_2_number;
        $data->column_3_text    = $request->column_3_text;
        $data->column_3_number  = $request->column_3_number;
        $data->column_4_text    = $request->column_4_text;
        $data->column_4_number  = $request->column_4_number;
        $data->status           = $request->status;

        if($request->image)
    	{
            $ImageName = time().'.'.$request->image->getClientOriginalExtension();
    		$request->image->move(public_path('upload/at_a_galance'), $ImageName);
    		$data->image = $ImageName;
    	}
        // dd($data);

        $data->save();

    	return redirect()->route('site-setting.library_galance')->with('info','At a Galance added Successfully.');
    }

    public function editAtGalance($id)
    {
        $data['editData'] = LibraryGlance::find($id);
        // dd($data['editData']);
    	return view('backend.library_galance.edit')->with($data);
    }

    public function updateAtGalance(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $data                   = LibraryGlance::find($id);
        $data->title            = $request->title;
        $data->column_1_text    = $request->column_1_text;
        $data->column_1_number  = $request->column_1_number;
        $data->column_2_text    = $request->column_2_text;
        $data->column_2_number  = $request->column_2_number;
        $data->column_3_text    = $request->column_3_text;
        $data->column_3_number  = $request->column_3_number;
        $data->column_4_text    = $request->column_4_text;
        $data->column_4_number  = $request->column_4_number;
        $data->status           = $request->status;

        if($request->image)
    	{
            @unlink(public_path('upload/at_a_galance/'.$data->image));
            $ImageName = time().'.'.$request->image->getClientOriginalExtension();
    		$request->image->move(public_path('upload/at_a_galance'), $ImageName);
    		$data->image = $ImageName;
    	}
        // dd($data);

        $data->save();

    	return redirect()->route('site-setting.library_galance')->with('info','At a Galance Update Successfully');
    }

    public function deleteAtGalance(Request $request)
    {
        $data = LibraryGlance::find($request->id);
    	$data->delete();
    }




}
