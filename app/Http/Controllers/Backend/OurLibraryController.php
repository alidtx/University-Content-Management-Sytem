<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\OurLibrary;
use App\Model\SliderMaster;
use App\Model\Member;
use App\Model\LibraryBackground;
use Illuminate\Support\Facades\DB;
use storage;

class OurLibraryController extends Controller
{
    public function index()
    {
        $data['ourLibraries'] = OurLibrary::orderBy('sort_order', 'asc')->get();
        return view('backend.our_library.our_library-list')->with($data);
    }

    public function addOurLibrary()

    {
        $data['slider_master'] = SliderMaster::get();
        $data['officeHeads'] = Member::get();
        return view('backend.our_library.our_library-add',$data);
    }

    public function storeOurLibrary(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required',
            // 'contact_number' => 'required',
            // 'location' => 'required',
            // 'contact_number' => 'required',
            // 'sort_order' => 'required',
            // 'slider' => 'required',
            // 'short_url' => 'required',
            // 'image' => 'required|mimes:jpg,jpeg,png',
            // 'description' => 'required',
        ]);

        $data                       = new OurLibrary();
        $data->name                 = $request->name;
        $data->sort_order          = $request->sort_order;
        $data->email                = $request->email;
        $data->contact_number       = $request->contact_number;
        $data->location             = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->status               = $request->status;
        $data->library_head          = $request->office_head;
        $data->short_url            = $request->short_url;
        $data->about            = $request->about;
        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('our_libraries')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/ourlibrary/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/ourlibrary/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/ourlibrary', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect()->route('site-setting.our_library')->with('info', 'Our Library add Successfully.');
    }

    public function editOurLibrary($id)
    {   $data['slider_master'] = SliderMaster::get();
        $data['officeHeads'] = Member::get();
        $data['editData'] = OurLibrary::find($id);
        return view('backend.our_library.our_library-add')->with($data);
    }

    public function updateOurLibrary(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            // 'title' => 'required',
            // 'image' => 'mimes:jpg,jpeg,png',
        ]);

        $data                      =OurLibrary::find($id);
        $data->name                 = $request->name;
        $data->sort_order          = $request->sort_order;
        $data->email                = $request->email;
        $data->contact_number       = $request->contact_number;
        $data->location             = $request->location;
        $data->slider_master_id     = $request->slider;
        $data->status               = $request->status;
        $data->library_head          = $request->office_head;
        $data->short_url            = $request->short_url;
        $data->about            = $request->about;

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {

                $arrImage = DB::table('our_libraries')->where(['id' => $request->post('id')])->get();

                if (Storage::exists('/public/media/ourlibrary/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/ourlibrary/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/ourlibrary', $image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect()->route('site-setting.our_library')->with('info', 'Our Library Update Successfully');
    }

    public function deleteOurLibrary(Request $request)
    {
        $data = OurLibrary::find($request->id);
        @unlink(public_path('upload/our_library/' . $data->image));
        $data->delete();
    }


}
