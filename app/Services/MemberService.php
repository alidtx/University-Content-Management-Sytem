<?php

namespace App\Services;

use App\Http\Resources\MemberResource;
use Illuminate\Http\Request;
use App\Model\Member;
use App\Model\Department;
use App\Model\Faculty;
use App\Model\Hall;
use App\Model\Office;

class MemberService
{

    // This function shows list of member

    public static function memberList($type, $did = null)
    {
        try {
            //$dept_id=$request->dept_id;

            $data['members'] = Member::where('members.member_type', $type)->when($did, function ($query, $did) use ($type) {
                //dd($type);
                if ($did != null) {

                    $query->leftJoin('department_to_faculty_members', 'department_to_faculty_members.member_id', 'members.id');
                    $query->where('department_to_faculty_members.department_id', $did);
                }
                // if($did!=null && $type==2){
                // 	$query->join('department_to_faculty_members','department_to_faculty_members.member_id','members.id');
                // }
            })
                ->select('members.id', 'members.name', 'members.phone', 'members.email', 'members.member_designation')
                ->get();

            //	dd($data['members']->toArray());
            return response()->json($data['members']);
            //return new MemberResource($data['members']);
        } catch (\Exception $e) {
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
    }

    public static function DeptMemberList($did = null)
    {
        try {
            $data['members'] = Member::Join('department_to_faculty_members', 'department_to_faculty_members.member_id', 'members.id')->when($did, function ($query, $did) {
                //$query->;
                if ($did != null) {
                    $query->where('department_to_faculty_members.department_id', $did);
                }
                // if($did!=null && $type==2){
                // 	$query->join('department_to_faculty_members','department_to_faculty_members.member_id','members.id');
                // }
            })
                ->select('members.id', 'members.name', 'members.phone', 'members.email', 'members.member_designation as designation', 'members.member_type as MemberType', 'department_to_faculty_members.department_id as refId', 'members.image')
                ->get();
            $head = MemberService::headList(2, $did);
            $data2 = ["head" => $head, "members" => $data['members']];
            //	dd($data['members']->toArray());
            return $data2; //response()->json($data2);
            //return new MemberResource($data['members']);
        } catch (\Exception $e) {
            dd($e);
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
    }
    public static function officeMemberList($did = null)
    {
        try {
            $data['members'] = Member::Join('office_to_members', 'office_to_members.member_id', 'members.id')->when($did, function ($query, $did) {
                if ($did != null) {
                    $query->where('office_to_members.office_id', $did);
                }
                // if($did!=null && $type==2){
                // 	$query->join('department_to_faculty_members','department_to_faculty_members.member_id','members.id');
                // }
            })
                ->select('members.id', 'members.name', 'members.phone', 'members.email', 'members.member_designation as designation', 'members.member_type as MemberType', 'office_to_members.office_id as refId', 'members.image')
                ->get();
            $head = MemberService::headList(3, $did);
            $data2 = ["head" => $head, "members" => $data['members']];
            //	dd($data['members']->toArray());
            return $data2; //response()->json($data2);
            //return new MemberResource($data['members']);
        } catch (\Exception $e) {
            dd($e);
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
    }

    public static function HallMemberList($did = null)
    {
        try {
            $data['members'] = Member::Join('hall_members', 'hall_members.member_id', 'members.id')->when($did, function ($query, $did) {
                //$query->;
                if ($did != null) {
                    $query->where('hall_members.hall_id', $did);
                }
                // if($did!=null && $type==2){
                // 	$query->join('department_to_faculty_members','department_to_faculty_members.member_id','members.id');
                // }
            })
                ->select('members.id', 'members.name', 'members.phone', 'members.email', 'members.member_designation as designation', 'members.member_type as MemberType', 'hall_members.hall_id as refId', 'members.image')
                ->get();
            $head = MemberService::headList(4, $did);
            $data2 = ["head" => $head, "members" => $data['members']];
            //	dd($data['members']->toArray());
            return $data2; //response()->json($data2);
            //return new MemberResource($data['members']);
        } catch (\Exception $e) {
            dd($e);
            $d['error'] = 'Something wrong';
            return response()->json($d);
        }
    }
    // Head List
    // Type=1 : Faculty
    // Type=2 : Department
    // Type=3 : Office
    public static function headList($type, $id)
    {
        if ($type == 1) {
            return Faculty::with('member')->where('id', $id)->first();
        } else if ($type == 2) {
            //dd($id);

            // $newData= Department::with('member')->where('id', $id)
            // //->first()

            // ->select('name','email','contact_number')->get()
            // ;
            $newData = Department::join('members', 'members.id', 'departments.department_head')->where('departments.id', $id)
                //->first()

                ->select('departments.name as dept_name', 'members.id', 'members.name', 'members.member_designation as designation', 'members.email', 'members.image', 'members.email', 'members.phone')->first();

            return $newData;
        } else if ($type == 3) {
            $newData = Office::join('members', 'members.id', 'offices.office_head')->where('offices.id', $id)
                //->first()

                ->select('offices.name as ref_name', 'members.id', 'members.name', 'members.member_designation as designation', 'members.email', 'members.image', 'members.email', 'members.phone')->first();
            return $newData;
            //return Office::with('member')->where('id', $id)->where('id', $id)->first();;
        } else if ($type == 4) {
            $newData = Hall::join('members', 'members.id', 'halls.provost')->where('halls.id', $id)
                //->first()

                ->select('halls.name as ref_name', 'members.id', 'members.name', 'members.member_designation as designation', 'members.email', 'members.image', 'members.email', 'members.phone')->first();
            return $newData;
            //return Office::with('member')->where('id', $id)->where('id', $id)->first();;
        }
    }
}
