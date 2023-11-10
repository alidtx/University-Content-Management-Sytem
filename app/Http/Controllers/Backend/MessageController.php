<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Services\MemberService;
use App\Model\Member;
use App\Model\Faculty;
use App\Model\Department;
use App\Model\Hall;
use App\Model\Office;
use App\Model\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = auth()->user()->user_role->pluck('role_id')->toArray();
        // dd($roles);
        if (in_array(1, $data['roles']) || in_array(2, $data['roles'])) {
            $where = [];
        }
        else if (in_array(8, $data['roles']) || in_array(9, $data['roles']) || in_array(10, $data['roles']) || in_array(11, $data['roles']) ) {
            $where[] = ['member_id', auth()->user()->member_id];
        }

        $data['messages'] = Message::with(['member', 'category1', 'category2', 'category3', 'category4'])->where($where)->orderBy('id', 'desc')->get();

        return view('backend.message.message-view')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['roles'] = auth()->user()->user_role->pluck('role_id')->toArray();
        $data['members'] = Member::all();
        return view('backend.message.message-add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title_first_part' => 'required',
            // 'title_second_part' => 'required',
            // 'short_description' => 'required',

        ]);

        $data                   = new Message();
        $data->type_id          = $request->category_type;
        $data->category_id      = $request->category_id;
        $data->member_id        = $request->member_id;
        $data->title_first_part = $request->title_first_part;
        $data->title_second_part = $request->title_second_part;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->status           = 1;
        $data->save();

        return redirect()->route('site-setting.message')->with('success', 'New Message Saved Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData'] = Message::findOrFail($id);
        // dd($data['editData']);
        $data['roles'] = auth()->user()->user_role->pluck('role_id')->toArray();
        $data['members'] = Member::get();
        return view('backend.message.message-add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_first_part' => 'required',
            // 'title_second_part' => 'required',
            // 'short_description' => 'required',

        ]);

        $data                   = Message::findOrFail($id);
        // dd($data);
        $data->type_id          = $request->category_type;
        $data->category_id      = $request->category_id;
        $data->member_id        = $request->member_id;
        $data->title_first_part = $request->title_first_part;
        $data->title_second_part = $request->title_second_part;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->status           = 1;
        $data->save();

        return redirect()->route('site-setting.message')->with('info', 'Message Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Message::findOrFail($request->id);
        $data->delete();
    }

    public function typeWiseCategory(Request $request)
    {
        if ($request->type_id == 1) {
            $data['categories'] = Faculty::where('status',1)->get();
        } elseif ($request->type_id == 2) {
            $data['categories'] = Department::where('status',1)->get();
        } elseif ($request->type_id == 3) {
            $data['categories'] = Office::where('status',1)->get();
        } elseif ($request->type_id == 4) {
            $data['categories'] = Hall::where('status',1)->get();
        }
        // dd( $data['categories']);
        if (isset($data['categories'])) {
            return response()->json($data['categories']);
        } else {
            return response()->json('fail');
        }
    }
    public function categoryWiseHead(Request $request)
    {
        $data = MemberService::headList($request->category_type_id, $request->category_id);
        // dd($data);

        if (isset($data)) {
            return $data;
        } else {
            return response()->json('fail');
        }
    }
}
