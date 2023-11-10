<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Model\Icon;
use App\Model\Menu;
use App\Model\MenuRoute;
use App\Model\HomeLink;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function index()
    {
        $icon = Icon::all();

        $menus = Menu::orderBy('sort', 'asc')->get();
        $parentMenu = Menu::where('parent', 0)->get();

        return view('backend.menu.view-menu', compact('menus', 'parentMenu', 'icon'));
    }

    public function add()
    {
        $icon = Icon::all();
        $menus = Menu::orderBy('sort', 'desc')->get();
        $parentMenu = Menu::where('parent', 0)->get();
        return view('backend.menu.add-menu', compact('menus', 'parentMenu', 'icon'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'parent' => 'required',
            'url' => 'required',
            'status' => 'required',
            'sort' => 'required'
        ]);

        $menuData = new Menu;
        $menuData->name   = $request->name;
        if ($request->parentchield != '0') {
            $parent = $request->parentchield;
        } else {
            $parent = $request->parent;
        }
        $menuData->parent = $parent;
        $menuData->route    = $request->url;
        $menuData->sort   = $request->sort;
        $menuData->status = $request->status;
        $menuData->icon   = $request->icon;

        if ($menuData->save()) {
            if ($request->newname != null) {
                $countnewname = count($request->newname);
                for ($i = 0; $i < $countnewname; $i++) {
                    $menuroute = new MenuRoute;
                    $menuroute->menu_id = $menuData->id;
                    $menuroute->name = $request->newname[$i];
                    $menuroute->sort = $request->newsort[$i];
                    $menuroute->route = $request->newurl[$i];
                    $menuroute->status = '1';
                    $menuroute->save();
                }
            }
        }
        $request->session()->flash('success', 'Menu Has Saved Successfully');
        return redirect()->route('menu');
    }


    public function edit(Request $request, $id)
    {
        //  $menuId = $request->input('id');
        //  dd($menuId);
        $menuData = Menu::find($id);
        $parentcheck = Menu::where('id', $menuData->parent)->first();
        if ($parentcheck) {
            if ($parentcheck->parent == '0') {
                $menuData->parent_id = $parentcheck->id;
                $menuData->parentchield_id = '0';
            } else {
                $menuData->parent_id = $parentcheck->parent;
                $menuData->parentchield_id = $parentcheck->id;
            }
        } else {
            $menuData->parent_id = '0';
            $menuData->parentchield_id = '0';
        }

        $icon = Icon::all();
        $menus = Menu::orderBy('sort', 'desc')->get();
        $editData = Menu::find($id);
        //  dd($editData);
        $parentMenu = Menu::where('parent', 0)->get();
        return view('backend.menu.edit-menu', compact('menus', 'parentMenu', 'icon', 'editData'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        // $this->validate($request, [

        //     // 'name' => 'required',
        //     // 'url' => 'required',
        //     // 'parent' => 'required',
        //     // 'status' => 'required',
        //     // 'sort' => 'required'
        // ]);

        $updateMenuData         = Menu::find($id);
        $updateMenuData->name   = $request->input('name');
        $updateMenuData->parent = $request->parent;
        $updateMenuData->route  = $request->url;
        $updateMenuData->status = $request->status;
        $updateMenuData->sort   = $request->sort;
        $updateMenuData->icon   = $request->icon;
        $updateMenuData->save();
        $request->session()->flash('success', 'Menu Has Updated Successfully');
        return redirect()->route('menu');
    }




    public function getSubParent(Request $request)
    {
        $parent = $request->input('parent');
        if ($parent == '0') {
            $childparent = '';
        } else {
            $childparent = Menu::where('parent', $parent)->get();
        }
        return response()->json($childparent);
    }

    public function viewHomeLink()
    {
        $data['homeLinks'] = HomeLink::orderBy('id','desc')->paginate(10);
        return view('backend.home_link.view-home-link', with($data));
    }
    public function addHomeLink()
    {
        $data['editData'] = NULL;
        return view('backend.home_link.add-home-link', $data);
    }
    public function storeHomeLink(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'url_link' => 'required',
        ]);

        $data = new HomeLink;
        $data->name = $request->name;
        $data->url_link = $request->url_link;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('home_link')->with('success', 'Data Saved successfully');
    }
    public function editHomeLink($id)
    {
        $data['editData'] = HomeLink::find($id);


        return view('backend.home_link.add-home-link', $data);
    }
    public function updateHomeLink(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'url_link' => 'required',
        ]);

        $data = HomeLink::findOrFail($id);
        $data->name = $request->name;
        $data->url_link = $request->url_link;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('home_link')->with('success', 'Data Saved successfully');
    }

    public function deleteHomeLink(Request $request)
    {
        // dd($request->id);
        $data = HomeLink::find($request->id);
        $data->delete();
    }
}
