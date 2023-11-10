<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\Member;
use App\Model\SliderMaster;
use App\Model\Faculty;
use App\Model\PhotoGalleryMaster;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $data['departments'] = Department::with(['faculty'])->orderBy('short_order','asc')->get();
        return view('backend.department.list')->with($data);
    }

    public function addDepartment()
    {
        $data['faculties'] = Faculty::where('status', 1)->get();
       $data['sliders'] = SliderMaster::get();
        $data['members'] = Member::get();
        return view('backend.department.add', $data);
    }

    public function storeDepartment(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments,name' . $request->post('id'),
            'faculty_id' => 'required',
            'sort_order' => 'required',
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'contact_number' => 'required',
            'slider' => 'required',
            'short_url' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        //    return $request->all();

        $data               = new Department();
        $data->faculty_id   = $request->faculty_id;
        $data->short_order     = $request->sort_order;
        $data->name     = $request->name;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->short_url          = $request->short_url;

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('departments')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/departments/' . $arrImage[0]->image)) {

                    Storage::delete('/public/media/departments/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/departments', $image_name);
            $data->image = $image_name;
        }

        $data->department_head   = $request->department_head;
        $data->status            = $request->status;
        $data->save();

        return redirect()->route('setup.department')->with('info', 'New Department add Successfully.');
    }

    public function editDepartment($id)
    {
        $data['editData'] = Department::find($id);
        $data['sliders'] = SliderMaster::get();
       $data['members'] = Member::get();

        $data['faculties'] = Faculty::where('status', 1)->get();
        return view('backend.department.edit')->with($data);
    }

    public function updateDepartment(Request $request, $id)
    {

        $request->validate([

            'faculty_id' => 'required',
            'sort_order' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'contact_number' => 'required',
            'slider' => 'required',
            'short_url' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);

        $data           = Department::find($id);
        // dd($data);
        $data->faculty_id   = $request->faculty_id;
        $data->name     = $request->name;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->short_order     = $request->sort_order;
        $data->short_url          = $request->short_url;

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('departments')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/departments/' . $arrImage[0]->image)) {

                    Storage::delete('/public/media/departments/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/departments', $image_name);
            $data->image = $image_name;
        }
        $data->department_head   = $request->department_head;
        $data->status            = $request->status;
        $data->save();

        return redirect()->route('setup.department')->with('info', 'Department Update Successfully');
    }

    public function deleteDepartment(Request $request)
    {
        $data = Department::find($request->id);
        $data->delete();
    }
}
