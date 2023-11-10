<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\PopupNotifaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopupNotifactionController extends Controller
{
    public function index()
    {
       $data['notification']=PopupNotifaction::get();
       return view('backend.notification.view',$data);
    }

    public function add( $id='')
    {
    $data['notificationEdit']=PopupNotifaction::find($id);
     if($id>0)
     {
        $arr=PopupNotifaction::where(['id'=>$id])->get();
        $data['notification']=$arr[0]->notifaction;
        $data['date']=$arr[0]->date;
        $data['url']=$arr[0]->url;
        $data['description']=$arr[0]->description;
        $data['category']=$arr[0]->category;
        $data['id']=$arr[0]->id;
     }else{
        $data['notification']='';
        $data['date']='';
        $data['url']='';
        $data['description']='';
        $data['category']='';
        $data['id']='';
     }
     return view('backend.notification.add', $data);
    }

    public function notification_process(Request $request)
    {
    $request->validate([
        'notification' => 'required',
    ]);

       if($request->post('id')>0)
       {
        $data=PopupNotifaction::find($request->post('id'));
        $msg="Notification is Updated";
       }else{
        $data=new PopupNotifaction();
        $msg="Notification is Inserted";
       }
         $data->notifaction=$request->notification;
         $data->date=0;
         $data->url=0;
         $data->category=$request->category;
         $data->description=$request->description;
         $data->status=1;
         $data->save();
         $request->session()->flash('message',$msg);
         return redirect('backend/setup/notification');
    }

    public function status(Request $request, $status,$id)
    {
        $data=PopupNotifaction::find($id);
        $data->status=$status;
        $data->save();
        $request->session()->flash('message','Notification successfully updated');
        return redirect('backend/setup/notification');
    }

    public function delete(Request $request, $id)
    {
     $data=PopupNotifaction::find($id);
     $data->delete();
     $request->session()->flash('message','Category is successfully deleted!!');
     return redirect('backend/setup/notification');
    }
}
