<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Faculty;
use App\Model\Department;

class DepartmentService
{

	// This function shows list of member
	
	public static function departmentList($faculty_id)
	{
		try{
			$data['departments'] = Department::join('members', 'departments.department_head', 'members.id')
			->join('faculties', 'departments.faculty_id', 'faculties.id')
			->select('departments.id','departments.name','departments.contact_number','departments.email','members.name as department_head', 'faculties.name  as faculty_name')
			->where('departments.faculty_id', $faculty_id)
			->get();
			// dd($data['members']->name);
			return response()->json($data['departments']);
		}
		catch(\Exception $e){
			$d['error'] = 'Something wrong';
			return response()->json(["msg"=>$e->getMessage()]);
        }
	}
}

