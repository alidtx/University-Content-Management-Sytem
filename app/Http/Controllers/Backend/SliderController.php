<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
use App\Model\SliderVideo;
use Image;

class SliderController extends Controller
{
    public function index($slider_master_id)
    {
        // dd('test');
        // $data['sliderVideo'] = SliderVideo::first();
        $data['slider'] = Slider::where('slider_master_id', $slider_master_id)->orderBy('id', 'desc')->get();
        $data['slider_master_id'] = $slider_master_id;
        return view('backend.slider.slider-view')->with($data);
    }

    public function addSlider($slider_master_id)
    {
        $data['slider_master_id'] = $slider_master_id;
        return view('backend.slider.slider-add', $data);
    }

    public function storeSlider(Request $request)
    {
        $request->validate([
            // 'title' => 'required',
            // 'description' => 'required',
            // 'image' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',

        ]);
        $params = $request->all();
        // dd($params);
        $params['show_description'] = $request->show_description ?? 0;
        // if ($file = $request->file('image'))
        // {
        //     // @unlink(public_path('upload/slider/'.$setting->site_header_logo));
        //     $config = array(
        //         'name'      => "image",
        //         'path'      => 'upload/slider',
        //         'width'     => 1440,
        //         'height'    => 600
        //     );
        //     $image = ImageHelper::uploadImage($config);
        //     $params['image'] = $image['filename'];
        // }
        $s = $request->file('image');
        // dd($request->img64);
        if ($request->img64) {
            $imgName = date('Ymd') . '_' . time() . '.' . @$s->getClientOriginalExtension();
            $file_link_decode = @base64_decode(@explode(',', @$request->img64)[1]);
            $abc = file_put_contents('public/upload/slider/' . $imgName, @$file_link_decode);
            $abc = Image::make(public_path('upload/slider/') . $imgName);
            $abc->save(public_path('upload/slider/') . $imgName);
            $params['image'] = $imgName;
        }
        // dd($params);
        Slider::create($params);
        return redirect()->route('site-setting.slider', $request->slider_master_id)->with('info', 'New Slider Upload Successfully.');
    }

    public function editSlider($slider_master_id, $id)
    {
        $data['editData'] = Slider::where('slider_master_id', $slider_master_id)->where('id', $id)->firstOrFail();
        $data['slider_master_id'] = $slider_master_id;
        return view('backend.slider.slider-add')->with($data);
    }

    public function updateSlider(Request $request, $id)
    {
        $request->validate([
            // 'title' => 'required',
            // 'description' => 'required',
            // 'image' => 'required',
            'image' => 'mimes:jpg,jpeg,png',

        ]);
        $data = Slider::find($id);
        $params = $request->all();
        $params['show_description'] = $request->show_description ?? 0;
        // if ($file = $request->img64)
        // {
        // @unlink(public_path('upload/slider/'.$data->image));
        // $filename =date('Ymd') .'_'.time() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('upload/slider'), $filename);
        // $image=Image::make(public_path('upload/slider/').$filename);
        // $image->resize(1700,1100)->save(public_path('upload/slider/').$filename);
        // $params['image']= $filename;
        // file_get_contents($file);

        // }
        // dd($request->img64);
        $s = $request->file('image');
        if ($file = $request->img64) {
            @unlink(public_path('upload/slider/' . $data->image));
            $imgName = date('Ymd') . '_' . time() . '.' . @$s->getClientOriginalExtension();
            $file_link_decode = @base64_decode(@explode(',', @$request->img64)[1]);
            // dd($file_link_decode);
            $abc = file_put_contents('public/upload/slider/' . $imgName, @$file_link_decode);
            $abc = Image::make(public_path('upload/slider/') . $imgName);
            $abc->save(public_path('upload/slider/') . $imgName);
            $params['image'] = $imgName;
        }
        $data->update($params);
        return redirect()->route('site-setting.slider', $request->slider_master_id)->with('info', 'Slider Update Successfully');
    }

    public function deleteSlider(Request $request)
    {
        $data = Slider::find($request->id);
        $data->delete();
    }

    public function storeSliderVideo(Request $request)
    {
        $data = SliderVideo::first();
        $params = $request->all();
        $params['show_video'] = $request->show_video ?? 0;
        $params['opacity'] = $request->opacity;
        if ($request->hasFile('video')) {
            if (!empty($data)) {
                @unlink(public_path('upload/slider/' . $data->video));
            }
            $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $params['video'] = $path;
        }
        if (!empty($data)) {
            $data->update($params);
        } else {
            SliderVideo::create($params);
        }
        return redirect()->back()->with('info', 'Saved Successfully.');
    }
}
