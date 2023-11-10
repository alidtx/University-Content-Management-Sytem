<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Office;

class OfficeService
{

	// This function shows list of member

	public static function officeList()
	{
		try{
			$data['offices'] = Office::join('members', 'offices.office_head', 'members.id')->select('offices.id','offices.name','offices.contact_number','offices.email','members.name as office_head')->get();
			// dd($data['members']->name);
			return response()->json($data['offices']);
		}
		catch(\Exception $e){
			$d['error'] = 'Something wrong';
			return response()->json(["msg"=>$e->getMessage()]);
        }
	}
}

