<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Model\Office;
use App\Model\News;

class NewsService
{

	// This function shows list of member

	public static function getNews($id)
	{
		try {
			$data['news'] = News::orderBy('id', 'desc')->where('type', $id)->select('id','title','date','short_description','image','file')->get();
			// $data['offices'] = Office::join('members', 'offices.office_head', 'members.id')->select('offices.id', 'offices.name', 'offices.contact_number', 'offices.email', 'members.name as office_head')->get();
			// dd($data['members']->name);
			//asset('public/upload/news/'.$data->image) 
			$items= $data['news'];
			foreach($items as $item){
			
				$item->file_name =  isset($item->image) ? asset('public/upload/news/'.$item->image) :
				(isset($item->file) ? asset('public/upload/news/'.$item->file):"") ;
				//$items->push($product);
				// or 
				// $items->put('products', $product);
			}
			return $items;
		} catch (\Exception $e) {
			$d['error'] = 'Something wrong';
			return response()->json(["msg" => $e->getMessage()]);
		}
	}
}
