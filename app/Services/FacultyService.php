<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Faculty;

class FacultyService
{

	// This function shows list of member
	
	public static function facultyList()
	{
		try{
			/* $data['faculties'] = Faculty::select('id','name','contact_number','email','image','faculty_head')
			->with(['member'=>function($query){
				$query->select('id','name');
			}])->get(); */

			$data['faculties'] = Faculty::leftJoin('members', 'faculties.faculty_head', 'members.id')
			->select('faculties.id as ID','faculties.name as Name','faculties.contact_number as Contact','faculties.email as Email','members.name as Faculty Head','faculties.image as image')
			->get();
			
			return response()->json($data['faculties']);
		}
		catch(\Exception $e){
			$d['error'] = 'Something wrong';
			return response()->json(["msg"=>$e->getMessage()]);
        }
	}
}

