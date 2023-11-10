<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Models\Event;
use App\Model\Program;
use Illuminate\Http\Request;
use Str;

class ManageProgramController extends Controller
{
    public function index()
    {
    	$data= Program::all();
        return view('backend.setup_program.list',compact('data'));
    }

    public function add()
    {
    	return view('backend.setup_program.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

    	$data           = new Program();
        $data->name     = $request->name;
        $data->description     = $request->description;
        $data->general_guideline     = $request->general_guideline;
        $data->status   = $request->status;
        $data->grid   = $request->grid;

        $slug = str_replace(' ', '-',preg_replace('/[^A-Za-z0-9- ]/', '', Str::lower($request->name)));
        $data->slug   = $slug;
        $data->save();
    	return redirect()->route('setup.manage_program')->with('success','Data Saved successfully');
    }

    public function edit($id)
    {
    	$data['editData'] = Program::find($id);
    	return view('backend.setup_program.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required'
        ]);
    	$data           = Program::find($id);
        $data->name     = $request->name;
        $data->description     = $request->description;
        $data->general_guideline     = $request->general_guideline;
        $data->status   = $request->status;
        $data->grid   = $request->grid;
        $slug = str_replace(' ', '-',preg_replace('/[^A-Za-z0-9- ]/', '', Str::lower($request->name)));
        $data->slug   = $slug;
        $data->save();
    	return redirect()->route('setup.manage_program')->with('success','Data Updated successfully');
    }

    public function delete(Request $request)
    {
    	$data = Program::find($request->id);
        $data->delete();

        return redirect()->route('setup.manage_program')->with('success','Data Deleted successfully');
    }



}
