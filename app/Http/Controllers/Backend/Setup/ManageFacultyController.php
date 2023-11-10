<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Model\Faculty;
use App\Model\SliderMaster;
use App\Model\Member;
use App\Model\PhotoGalleryMaster;
use Illuminate\Http\Request;

class ManageFacultyController extends Controller
{
    public function index()
    {
    	$data = Faculty::orderBy('short_order','asc')->get();
        return view('backend.faculty.list',compact('data'));
    }

    public function add()
    {

       $result['sliders']=SliderMaster::get();
       $result['faculties'] = Faculty::where('status', 1)->get();
       $result['members']=Member::get();
    	return view('backend.faculty.add', $result);
    }

    public function store(Request $request)
    {
         //return $request->all();

        $request->validate([

            'name' => 'required|unique:faculties,name'.$request->post('id'),
            'sort_order' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'email' => 'required|email',
            'contact_number' => 'required',
            'location' => 'required',
            'short_url' => 'required',
            'slider' => 'required',

        ]);

    	$data           = new Faculty();
        $data->name     = $request->name;
        $data->short_order     = $request->sort_order;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->short_url          = $request->short_url;

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/faculty/',$image_name);
            $data->image=$image_name;
        }

        $data->faculty_head   = $request->faculty_head;
        $data->status   = $request->status;
        $data->save();
    	return redirect()->route('setup.manage_faculty')->with('success','Data Saved successfully');
    }

    public function edit($id)
    {
        $data['sliders']=SliderMaster::get();
    	$data['editData'] = Faculty::find($id);
        $data['members']=Member::get();

        $data['faculties'] = Faculty::where('status', 1)->get();

    	return view('backend.faculty.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'sort_order' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'location' => 'required',
            'short_url' => 'required',
            'slider' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);
    	$data           = Faculty::find($id);
        // dd($data);
        // $data->faculty_head = $request->faculty_id;
        $data->name     = $request->name;
        $data->short_order     = $request->sort_order;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->short_url          = $request->short_url;

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/faculty/',$image_name);
            $data->image=$image_name;

        }
        $data->faculty_head   = $request->faculty_head;
        $data->status   = $request->status;
        $data->save();
    	return redirect()->route('setup.manage_faculty')->with('success','Data Updated successfully');
    }

    public function delete(Request $request)
    {
    	$data = Faculty::find($request->id);
        $data->delete();

        return redirect()->route('setup.manage_faculty')->with('success','Data Deleted successfully');
    }
}
