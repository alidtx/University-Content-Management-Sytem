<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PhotoGallery;
use App\Model\PhotoGalleryImage;
use App\Model\Gallery;
use Image;

class PhotoGalleryController extends Controller
{
    public function photoGallery()
    {
        $data['photoGalleries'] = PhotoGallery::where('status',1)->orderBy('publish_date','desc')->get();
        return view('frontend.photo-gallery')->with($data);
    }

    public function index($photo_master_id)
    {
        //dd($photo_master_id);
        $data['photoGalleries'] = PhotoGallery::where('photo_master_id',$photo_master_id)->orderBy('publish_date','desc')->get();
        $data['photo_master_id'] = $photo_master_id;
        // $data['photoGalleries'] = PhotoGallery::orderBy('publish_date','desc')->get();
        return view('backend.photo_gallery.photo_gallery-list')->with($data);
    }

    public function addPhotoGallery($photo_master_id)
    {
        $data['photo_master_id'] = $photo_master_id;

    	return view('backend.photo_gallery.photo_gallery-add', $data);
    }

    public function storePhotoGallery(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'publish_date' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
    //    dd($request->all());
        $params = $request->all();
        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['status'] = $request->status ?? 0;

        $image = $request->file('image');
        if($request->hasfile('image'))
        {
            $filename = date('Ymd') . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/photo_gallery'), $filename);
            $image= Image::make(public_path('upload/photo_gallery/').$filename);
            //$image->resize(643,360)->save(public_path('upload/activity/').$filename);
            $image->save(public_path('upload/photo_gallery/').$filename);
            $params['image']= $filename;
        }

        PhotoGallery::create($params);

        return redirect()->route('top-menu.photo_gallery', $request->photo_master_id)->with('info', 'Photo Gallery store successfully.');
    }

    public function editPhotoGallery($photo_master_id, $id)
    {
        $data['editData'] = PhotoGallery::find($id);
        $data['photo_master_id'] = $photo_master_id;

        return view('backend.photo_gallery.photo_gallery-add')->with($data);

    }

    public function updatePhotoGallery(Request $request,$id)
    {
            // dd($request->all());
        $request->validate([
            'title' => 'required',
            'publish_date' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $params = $request->all();
        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['status'] = $request->status ?? 0;
        $photoGallery = PhotoGallery::find($id);
        
        $image = $request->file('image');
        if($request->hasfile('image'))
        {
            $filename = date('Ymd') . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/photo_gallery'), $filename);
            $image= Image::make(public_path('upload/photo_gallery/').$filename);
            //$image->resize(643,360)->save(public_path('upload/activity/').$filename);
            $image->save(public_path('upload/photo_gallery/').$filename);
            $params['image']= $filename;
        }
        
        $photoGallery->update($params);
        return redirect()->route('top-menu.photo_gallery',$request->photo_master_id)->with('info','Photo Gallery update successfully.');

    }

    public function deletePhotoGallery(Request $request)
    {
            // dd($id);
        $id = $request->id;
        $deleteData = PhotoGallery::find($id);
            // @unlink(public_path('upload/faculty/'.$deleteData->image));
        $del = $deleteData->delete();
        if($del)
        {
            $images = PhotoGalleryImage::where('photo_gallery_id',$id)->get();
            foreach($images as $image)
            {
                @unlink(public_path('upload/photo_gallery/'.$image->image));
            }
            PhotoGalleryImage::where('photo_gallery_id',$id)->delete();
        }
        return redirect()->route('top-menu.video_gallery');
    }

    public function removeImageFromPhotoGallery($id)
    {
        // $id = $request->id;
        // dd($id);
        $deleteData = PhotoGallery::find($id);
        @unlink(public_path('upload/photo_gallery/'.$deleteData->image));
        $deleteData->image = null;
        $deleteData->save();
        return redirect()->back();
    }
}
