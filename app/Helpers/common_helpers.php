<?php

use App\Model\FrontendMenu;
use App\Model\Menu;
use App\Model\MenuPermission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

if ( !function_exists( 'slugChecker' ) ) {
    function slugChecker($editSlug,$slug) {
        $slug = str_replace(' ', '-',preg_replace('/[^A-Za-z0-9- ]/', '', Str::lower($slug)));
        $where[] = ['slug','=',$slug];
        if($editSlug){
            $where[] = ['rand_id','!=',$editSlug];
        }
        $slug_exist = FrontendMenu::where($where)->first();
        if($slug_exist){
            $explode_array = explode('-',$slug);
            $slug = str_replace('-'.((int)end($explode_array)),'',$slug);
            $slug = $slug.'-'.((int)end($explode_array)+1);
            return slugChecker($editSlug,$slug);
        }else{
            return $slug;
        }
    }
}


if ( !function_exists( 'menuUrl' ) ) {
    function menuUrl($menu) {
    	$route_url['menu'] = Str::slug(@$menu->url_link);
    	// if($menu->program_info_id && $menu->course_info_id){
    	// 	$route_url['program_info_id'] = $menu->program_info_id;
    	// 	$route_url['course_info_id'] = $menu->course_info_id;
    	// }
    	$route_url['menu_id'] = @$menu->id;

        return (@$menu->url_link)?(route('menu_url',$route_url)):'#' ;
    }
}

// New menu get list function by Md Khalid Hossain

if ( !function_exists( 'menuList' ) ) {
    function menuList($rand_id) {
    	$menues = FrontendMenu::where('rand_id', $rand_id)->get();
    	return $menues;
    }
}


if ( !function_exists( 'menuData' ) ) {
    function menuData($menu_id) {
    	return FrontendMenu::find($menu_id);
    }
}

if ( !function_exists( 'AccessRole' ) ) {
    function AccessRole( $user_roles ) {
        $role = '';
        foreach ( $user_roles as $key => $user_role ) {
            if ( $key != 0 ) {
                $role .= ' , ';
            }
            $role .= "<span class='badge badge-success'>" . @$user_role['role_details']['name'] . "</span>";
        }

        return $role;

    }
}
if(!function_exists('inner_permission')){
	function inner_permission($permitted_route){
		if(Auth::user()->id=='1'){
			return true;
		}

		$user_role_array=Auth::user()->user_role;
		if(count($user_role_array)==0){
			$user_role = [];
		}else{
			foreach($user_role_array as $rolee){
				$user_role[] = $rolee->role_id;
			}
		}

		$existpermission = MenuPermission::where('permitted_route',$permitted_route)->whereIn('role_id',@$user_role)->first();
		if($existpermission){
			return true;
		}else{
			return false;
		}
	}
}


if ( !function_exists( 'mydate' ) ) {
	function mydate($mydate)
	{
		$date=date_create($mydate);
		$new_date = date_format($date,"d/M/Y");
		return $new_date;
	}
}


function homeNotification()
{
 $data=DB::table('popup_notifactions')->where(['status'=>1,'category'=>1])->first();
 return $data;
}
function allProrgam()
{
 $data=DB::table('popup_notifactions')->where(['status'=>1,'category'=>5])->first();
 return $data;
}
function faculty()
{
 $data=DB::table('popup_notifactions')->where(['status'=>1,'category'=>2])->first();
 return $data;
}

function department()
{
 $data=DB::table('popup_notifactions')->where(['status'=>1,'category'=>4])->first();
 return $data;
}
function hall()
{
 $data=DB::table('popup_notifactions')->where(['status'=>1,'category'=>3])->first();
 return $data;
}


