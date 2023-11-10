@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();
$user_role_array = Auth::user()->user_role;
if (count($user_role_array) == 0) {
    $user_role = [];
} else {
    foreach ($user_role_array as $rolee) {
        $user_role[] = $rolee->role_id;
    }
}
$parentroutearray = explode('.',$route);
$parentroute = $parentroutearray[0];
$childroute = $parentroute.'.'.@$parentroutearray[1];
$nav_menu=[];
@endphp

@if (in_array(1, $user_role))
@php
$grand_parents = App\Model\Menu::where('parent', 0)->where('status',1)->orderBy('sort', 'asc')->get();
foreach ($grand_parents as  $grand_parent){
  $parents=App\Model\Menu::where('parent', $grand_parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
  foreach($parents as $parent){
        $nav_menu[$grand_parent->id]['grand_parent']=$grand_parent->name;
        $nav_menu[$grand_parent->id]['grand_parent_route']=$grand_parent->route;
        $nav_menu[$grand_parent->id]['grand_parent_icon']=$grand_parent->icon;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_id']=$parent->id;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_name']=$parent->name;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_route']=$parent->route;

    $childs=App\Model\Menu::where('parent', $parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
    if(count($childs)>0){
      foreach($childs as $child){
          $nav_menu[$grand_parent->id]['is_child']='yes';
          $nav_menu[$grand_parent->id]['grand_parent']=$grand_parent->name;
          $nav_menu[$grand_parent->id]['grand_parent_route']=$grand_parent->route;
          $nav_menu[$grand_parent->id]['grand_parent_icon']=$grand_parent->icon;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_name']=$parent->name;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_route']=$parent->route;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_id']=$child->id;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_name']=$child->name;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_route']=$child->route;
      }
    }
  }
}
@endphp
@else
@php
$grand_parents = App\Model\Menu::where('parent', 0)->where('status',1)->where('id','!=',1)->orderBy('sort', 'asc')->get();
foreach ($grand_parents as  $grand_parent){
  $parents=App\Model\Menu::where('parent', $grand_parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
  foreach($parents as $parent){
    $check_parent=App\Model\MenuPermission::where('menu_id',$parent->id)->whereIn('role_id',@$user_role)->first();
    if($check_parent){
      $permission=App\Model\MenuPermission::where('permitted_route',$parent->route)->whereIn('role_id', @$user_role)->first();
      if($permission){
        $nav_menu[$grand_parent->id]['grand_parent']=$grand_parent->name;
        $nav_menu[$grand_parent->id]['grand_parent_route']=$grand_parent->route;
        $nav_menu[$grand_parent->id]['grand_parent_icon']=$grand_parent->icon;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_id']=$parent->id;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_name']=$parent->name;
        $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_route']=$parent->route;
      }
    }

    $childs=App\Model\Menu::where('parent', $parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
    if(count($childs)>0){
      foreach($childs as $child){
        $permission=App\Model\MenuPermission::where('permitted_route',$child->route)->whereIn('role_id', @$user_role)->first();
        if($permission){
          $nav_menu[$grand_parent->id]['is_child']='yes';
          $nav_menu[$grand_parent->id]['grand_parent']=$grand_parent->name;
          $nav_menu[$grand_parent->id]['grand_parent_route']=$grand_parent->route;
          $nav_menu[$grand_parent->id]['grand_parent_icon']=$grand_parent->icon;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_name']=$parent->name;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_route']=$parent->route;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_id']=$child->id;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_name']=$child->name;
          $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_route']=$child->route;
        }
      }
    }
  }
}
@endphp
@endif


<style>
  .main-sidebar .brand-text, .main-sidebar .logo-xl, .main-sidebar .logo-xs, .sidebar .nav-link p, .sidebar .user-panel .info {
    color: #ffffff;
}

[class*=sidebar-dark-] .sidebar a {
    color: #ffffff !important;
}

.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #3780c3;
    color: #fff;
}

[class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
    background-color: #3780c3;
    color: #ffffff;
}

.asideFooter {
    width: 100%;
    position: absolute;
    bottom: 10px;
    text-align: center;
    color: #d3d9df;
}
.asideFooter h4 {
    margin-bottom: 0;
    font-size: 12px;
    color: #ffffff;
}
.asideFooter p {
    margin-bottom: 0;
    font-size: 10px;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0072bc">
  <a href="{{route('home')}}" target="_blank" class="brand-link" style="background-color: #0072bc; box-shadow: 0 1px 48px rgb(0 0 0 / 20%); border: 0;">
    <img src="{{asset('public/upload/logo.png')}}" alt="Admin Dashboard" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Comilla University</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link {{$route == 'dashboard'?'active':''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @foreach($nav_menu as $grand_menu)
        <li class="nav-item has-treeview {{$parentroute==$grand_menu['grand_parent_route'] ? 'menu-open' :''}}">
          <a href="#" class="nav-link {{$parentroute==$grand_menu['grand_parent_route'] ? 'active' :''}}">
            <i class="nav-icon {{$grand_menu['grand_parent_icon'] ? $grand_menu['grand_parent_icon'] :'fas fa-tools'}}"></i>
            <p>
              {{$grand_menu['grand_parent']}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="{{$parentroute==$grand_menu['grand_parent_route'] ? 'display:block' :'display:none'}}">
            @foreach($grand_menu['parent'] as $parent_menu)
            @if(!empty($parent_menu['child']))
            @else
            <li class="nav-item">
              <a href="{{route($parent_menu['parent_route'])}}" class="nav-link {{$route==$parent_menu['parent_route'] ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{$parent_menu['parent_name']}}</p>
              </a>
            </li>
            @endif
            @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
  <footer class="asideFooter">
    <div class="asideFooter"><h4>N-CMS 1.0.0</h4><p>Developed &amp; Maintanence by Nanosoft</p></div>
  </footer>
</aside>







