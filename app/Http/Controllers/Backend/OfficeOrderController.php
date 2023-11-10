<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\OfficeOrder;
use App\Model\OfficeOrderAttachment;
use App\Model\Office;
use App\Model\Department;
use App\Model\DepartmentToFacultyMember;
use App\Services\MemberService;

class OfficeOrderController extends Controller
{
    public function frontend()
    {
        $data['officeOrders'] = OfficeOrder::with('member')->where('publish_date','<=',date('Y-m-d'))->where('status',1)->orderBy('publish_date','desc')->get();
        return view('frontend.office_order')->with($data);
    }

    public function list()
    {
        $data['officeOrders'] = OfficeOrder::orderBy('publish_date','desc')->get();
        return view('backend.office_order.office_order-list')->with($data);
    }

    public function add()
    {
        // $data['editData'] = NULL;
        return view('backend.office_order.office_order-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

    		'title' => 'required',
    		'publish_date' => 'required',
            'attachment' => 'max:20000|mimes:pdf,doc,docx,jpg,png,jpeg',
        ]);

        $params = $request->all();
        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['status'] = $request->status ?? 0;

        $officeOrder = OfficeOrder::create($params);
        //$params['member_id'] = $member->id;

        // foreach($file = $request->file('attachment') as $key => $val){
        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $store = new OfficeOrderAttachment();
            $store->office_order_id = $officeOrder->id;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/office_order'), $filename);
            $store->attachment= $filename;
            $store->save();
        }

    	return redirect()->route('footer-menu.office.order')->with('success','NOC/ Office Order added Successfully.');
    }

    public function edit($id)
    {
        $data['editData'] = OfficeOrder::findOrFail($id);
        $data['editDataAttachments'] = OfficeOrderAttachment::where('office_order_id',$data['editData']->id)->get();
    	return view('backend.office_order.office_order-add')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
    		'title' => 'required',
    		'publish_date' => 'required',
            'attachment' => 'max:20000|mimes:pdf,doc,docx,jpg,png,jpeg',
            // 'attachment' => 'max:20000|mimes:pdf,doc,docx',
        ]);
        // dd($request->all());
    	$data = OfficeOrder::find($id);
        $params = $request->except(['_token']);
        $params['publish_date'] = date('Y-m-d',strtotime($request->publish_date));
        $params['status'] = $request->status ?? 0;

        $data->update($params);

        $officeOrder = OfficeOrder::find($id);
        if($request->hasFile('attachment'))
        {

            $file = $request->file('attachment');
            $editDataAttachments = OfficeOrderAttachment::where('office_order_id',$officeOrder->id)->first();
            if($editDataAttachments){
                $store = $editDataAttachments;
                unlink(public_path('upload/office_order/'.$editDataAttachments->attachment));
            }
            else{
                $store = new OfficeOrderAttachment();
            }
            $store->office_order_id = $officeOrder->id;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/office_order'), $filename);
            $store->attachment= $filename;
            $store->save();
        }
        return redirect()->route('footer-menu.office.order')->with('info','NOC/ Office Order Update Successfully');
    }

    public function delete(Request $request)
    {
        $data = OfficeOrder::find($request->id);
    	$data->delete();
    }

    public function officeOrderAttachmentRemove($id)
    {
        $data = OfficeOrderAttachment::find($id);
        @unlink(public_path('upload/office_order/'.$data->image));
        $data->delete();
        return redirect()->back()->with('info','Attachment Deleted Successfully');
    }

    public function categoryWiseDeptOrOffice(Request $request)
    {
        if($request->category_type_value==1){
            $data['categories'] = Department::get();
        }
        elseif($request->category_type_value==2){
            $data['categories'] = Office::get();
        }
        // dd( $data['categories']);
        if(isset($data['categories']))
		{
			return response()->json($data['categories']);
		}
		else
		{
			return response()->json('fail');
		}
    }
    public function departmentWiseMember(Request $request)
    {
        // $data['members'] = DepartmentToFacultyMember::with('member')->where('department_id', $request->category_id)->get();

        if ($request->category_type == 2) {
            $data['members'] = MemberService::officeMemberList($request->category_id);
        } elseif ($request->category_type == 1) {
            $data['members'] = MemberService::DeptMemberList($request->category_id);
        }
        // dd($data['members']);
        // dd(response()->json($data['members']['members']));

        if(isset($data['members']))
		{
			return response()->json($data['members']['members']);
		}
		else
		{
			return response()->json('fail');
		}
    }

}
