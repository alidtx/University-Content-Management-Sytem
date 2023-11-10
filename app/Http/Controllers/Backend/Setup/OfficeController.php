<?php


namespace App\Http\Controllers\Backend\Setup;

use App\Model\Office;
use App\Http\Controllers\Controller;
use App\Model\SliderMaster;
use App\Model\Member;
use App\Model\PhotoGalleryMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use storage;

class OfficeController extends Controller
{
    public function index()
    {
        $data = Office::orderBy('short_order', 'asc')->get();
        return view('backend.office.list', compact('data'));
    }

    public function add()
    {

        $result['sliders'] = SliderMaster::get();
        $result['officeHeads'] = Member::get();

        return view('backend.office.add', $result);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'name' => 'required|unique:offices,name' . $request->post('id'),
            'image' => 'required|mimes:jpeg,jpg,png',
            'email' => 'required|email',
            'contact_number' => 'required',
            'location' => 'required',
            'short_url' => 'required',
            // 'image' => 'required|mimes:jpeg,jpg,png',

        ]);

        $data                       = new Office();
        $data->name                 = $request->name;
        $data->short_order          = $request->sort_order;
        $data->email                = $request->email;
        $data->contact_number       = $request->contact_number;
        $data->location             = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->status               = $request->status;
        $data->office_head          = $request->office_head;
        $data->short_url            = $request->short_url;
        $data->additional_charge    = $request->additional_charge == 'on' ? 1 : 0;
        $data->additional_designation  = $request->additional_charge == 'on' ? $request->additional_designation : '';
        $data->created_by           = 0;
        $data->updated_by           = 0;


        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('offices')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/office/' . $arrImage[0]->image)) {

                    Storage::delete('/public/media/office/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/office', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect()->route('setup.manage_office')->with('success', 'Data Saved successfully');
    }

    public function edit($id)
    {
        $data['sliders'] = SliderMaster::get();
        $data['editData'] = Office::findOrFail($id);
        $data['officeHeads'] = Member::get();

        return view('backend.office.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'email' => 'required|email',
            'contact_number' => 'required',
            'location' => 'required',
            'short_url' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);


        $data                   = Office::findOrFail($id);
        $data->name             = $request->name;
        $data->short_order      = $request->sort_order;
        $data->email            = $request->email;
        $data->contact_number   = $request->contact_number;
        $data->location         = $request->location;
        $data->slider_master_id = $request->slider;
        $data->office_head      = $request->office_head;
        $data->status           = $request->status;
        $data->short_url          = $request->short_url;
        $data->additional_charge    = $request->additional_charge == 'on' ? 1 : 0;
        $data->additional_designation  = $request->additional_charge == 'on' ? $request->additional_designation : '';

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('offices')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/office/' . $arrImage[0]->image)) {

                    Storage::delete('/public/media/office/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/office', $image_name);
            $data->image = $image_name;
        }

        $data->save();
        return redirect()->route('setup.manage_office')->with('success', 'Data Updated successfully');
    }

    public function delete(Request $request)
    {
        $data = Office::findOrFail($request->id);
        $data->delete();

        return redirect()->route('setup.manage_office')->with('success', 'Data Deleted successfully');
    }
}
