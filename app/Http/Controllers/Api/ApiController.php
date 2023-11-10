<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MemberService;
use App\Services\FacultyService;
use App\Services\DepartmentService;
use App\Services\OfficeService;
use App\Services\TransportService;
use App\Services\NewsService;
use App\Model\Member;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Head List
    // Type=1 : Faculty
    // Type=2 : Department
    // Type=3 : Office
    public function memberListApi(Request $request)
    {
        if ($request->qtype == 2) {
            $data1 = MemberService::officeMemberList($request->refid);
            return response()->json($data1);
        } elseif ($request->qtype == 1) {
            $data1 = MemberService::DeptMemberList($request->refid);
            return response()->json($data1);
        } elseif ($request->qtype == 3) {

            $data1 = MemberService::HallMemberList($request->refid);
            return response()->json($data1);
        } else {
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
        //return MemberService::DeptMemberList( $request->deptid);
    }

    public function depertmentMemberListApi(Request $request)
    {
        //return MemberService::memberList($request->type, $request->iid);
        $data1 = MemberService::DeptMemberList($request->deptid);
        // $head=MemberService::headList(1, 0);
        // $data2 = ["head" => $head, "members" => $data1];
        // dd($data['members']->toArray());
        return response()->json($data1);
    }

    public function latestNews(Request $request)
    {
        try {

            //code...
            $d = NewsService::getNews($request->id);
            return response()->json($d);
        } catch (\Throwable $th) {
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
    }

    public function facultyListApi()
    {
        return FacultyService::facultyList();
    }
    /**
     * Api for get department list 
     * retrun all 
     */
    public function departmentListApi(Request $request)
    {
        return DepartmentService::departmentList($request->faculty_id);
    }
    public function officeListApi()
    {
        return OfficeService::officeList();
    }

    public function index(TransportService $transport)
    {
        $result = $transport->rootWay();
        return response()->json(['result' => $result], 200);
    }

    public function showTransport($id = null)
    {
        $result = TransportService::rootWay();

        return response()->json(['result' => $result], 200);
    }
}
