<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\About;

class AboutController extends Controller
{
    //
    public function index()
    {
        // dd('test');
        $data['about'] = About::all();
        return view('backend.about.about-view')->with($data);
    }

    public function addAbout()
    {
        return view('backend.about.about-add');
    }

    public function storeAbout(Request $request)
    {
        $request->validate([
            'short_description' => 'required',
            'large_image' => 'required',
            'small_image' => 'required',
            'small_image' => 'requred|mimes:jpg,jpeg,png',

        ]);
        $params = $request->all();
        if ($request->large_image) {
            $largeImageName = time() . '.' . $request->large_image->getClientOriginalExtension();
            $request->large_image->move(public_path('upload/about'), $largeImageName);
            $params['large_image'] = $largeImageName;
        }

        if ($request->small_image) {
            $smallImageName = time() . '.' . $request->small_image->getClientOriginalExtension();
            $request->small_image->move(public_path('upload/about'), $smallImageName);
            $params['small_image'] = $smallImageName;
        }

        About::create($params);
        return redirect()->route('site-setting.about')->with('info', 'New about Upload Successfully.');
    }

    public function editAbout($id)
    {
        $data['editData'] = About::find($id);
        return view('backend.about.about-add')->with($data);
    }

    public function updateAbout(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'short_description' => 'required',
            'small_image' => 'mimes:jpg,jpeg,png',

        ]);
        $data = About::find($id);
        $params = $request->all();
        if ($request->large_image) {
            @unlink(public_path('upload/about/' . $data->large_image));
            $largeImageName = time() . '.' . $request->large_image->getClientOriginalExtension();
            $request->large_image->move(public_path('upload/about'), $largeImageName);
            $params['large_image'] = $largeImageName;
        }
        if ($request->small_image) {
            @unlink(public_path('upload/about/' . $data->small_image));
            $smallImageName = (time() + 1) . '.' . $request->small_image->getClientOriginalExtension();
            $request->small_image->move(public_path('upload/about'), $smallImageName);
            $params['small_image'] = $smallImageName;
        }
        $data->update($params);

        return redirect()->route('site-setting.about')->with('info', 'about Update Successfully');
    }

    public function deleteAbout(Request $request)
    {
        $data = About::find($request->id);
        $data->delete();
    }
}
