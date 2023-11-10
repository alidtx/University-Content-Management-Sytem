<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Hall;
use App\Model\SliderMaster;
use App\Model\Member;
use App\Model\HallHome;
use App\Model\Department;
use App\Model\PhotoGalleryMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $data = Hall::orderBy('sort_oder','asc')->get();
        return view('backend.hall.list', compact('data'));
    }

    public function add()
    {
        $data['sliders'] = SliderMaster::get();
        $data['members'] = Hall::get();
        $data['Provosts'] = Member::get();

        return view('backend.hall.add', $data);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:halls,name' . $request->post('id'),
            'short_url' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        // dd($request->post());
        $data           = new Hall();
        $data->name     = $request->name;
        $data->sort_oder     = $request->sort_oder;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->status   = $request->status;
        $data->short_url          = $request->short_url;
        $data->create_by   = 0;
        $data->update_by   = 0;


        if ($request->hasfile('image')) {

            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/hall', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect()->route('manage_hall')->with('success', 'Data Saved successfully');
    }

    public function edit($id)
    {
        $data['sliders'] = SliderMaster::get();
        $data['members'] = Hall::get();
        $data['Provosts'] = Member::get();
        $data['editData'] = Hall::find($id);

        return view('backend.hall.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'short_url' => 'required',
        ]);

        // dd($request->post());
        $data           = Hall::find($id);
        $data->name     = $request->name;
        $data->provost     = $request->provost;
        $data->sort_oder     = $request->sort_order;
        $data->email     = $request->email;
        $data->contact_number     = $request->contact_number;
        $data->location     = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->status   = $request->status;
        $data->short_url          = $request->short_url;
        $data->create_by   = 0;
        $data->update_by   = 0;

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {
                $arrImage = DB::table('halls')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/hall/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/hall/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/hall', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect()->route('manage_hall')->with('success', 'Data Updated successfully');
    }

    public function delete(Request $request)
    {
        $data = Hall::find($request->id);
        $data->delete();

        return redirect()->route('manage_hall')->with('success', 'Data Deleted successfully');
    }
}
