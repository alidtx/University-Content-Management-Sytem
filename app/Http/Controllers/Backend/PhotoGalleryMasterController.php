<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\Faculty;
use App\Model\Department;
use App\Model\Office;
use App\Model\Hall;
use App\Model\PhotoGalleryMaster;
use App\Model\PhotoGalleryImage;
use Illuminate\Http\Request;
use Image;

class PhotoGalleryMasterController extends Controller

{
    public function index()
    {
        $data['photoGalleriesList'] = PhotoGalleryMaster::orderBy('id','desc')->get();

        //dd($data['photoGalleriesList']);
        return view('backend.photo_gallery_master.photo_gallery_master-list', $data);
    }

   public function addPhotoGallery()

    {
        return view('backend.photo_gallery_master.photo_gallery_master-add');
    }


 public function categoryWisePhoto(Request $request)

 {

    if($request->type_id == 1){

        $data['categories'] = Faculty::get();
    }

    elseif($request->type_id == 2)
    {
        $data['categories'] = Department::get();
    }

    elseif($request->type_id == 3)
    {
        $data['categories'] = Office::get();
    }

    elseif($request->type_id == 4)
    {
        $data['categories'] = Hall::get();
    }

        if(isset($data['categories']))
        {
            return response()->json($data['categories']);
        }
        else
        {
            return response()->json('fail');
        }

    }

  public function storePhotoGallery(Request $request)

  {

    $request->validate([
        'name' => 'required',
    ]);

   $data= New PhotoGalleryMaster();
   $data->name=$request->post('name');
   $data->type=$request->post('type');
   $data->category=$request->post('category_id');
   $data->status=$request->post('status');
   $data->save();
   return redirect()->route('top-menu.photo_gallery_master')->with('success','Data Inserted successfully');

  }

  public function editPhotoGalleryMaster(Request $request, $id)

  {

    $data['editImageGallery']=PhotoGalleryMaster::findOrFail($id);



    return view('backend.photo_gallery_master.photo_gallery_master-edit',$data);

  }

  public function updatePhotoGalleryMaster(Request $request,$id)

  {

    $request->validate([
        'name' => 'required',
    ]);


   $data= PhotoGalleryMaster::findOrFail($id);
   $data->name=$request->post('name');
   $data->type=$request->post('type');
   $data->category=$request->post('category_id');
   $data->status=$request->post('status');
   $data->save();
   return redirect()->route('top-menu.photo_gallery_master')->with('success','Data Updated successfully');

  }


  public function deletePhotoGalleryMaster(Request $request)
  {
    $data = PhotoGalleryMaster::find($request->id);
    $data->delete();
    return redirect()->route('top-menu.photo_gallery_master')->with('success','Data Deleted successfully');

  }



  public function addPhotoGalleryImage()

  {
    return view('backend.photo_gallery_master.photo_gallery_master-image-add');
  }


  public function storePhotoGalleryImage()

  {

  Echo 'lkasl;kdl;sakd;';

  }







}
