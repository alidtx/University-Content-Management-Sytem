<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Department;
use Image;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = News::orderBy('id', 'desc')->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterNews()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 1)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterEvent()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 2)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterNotice()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 3)->get();
        return view('backend.news.news-view')->with($data);
    }
    public function filterPressRelease()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 7)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterGeneralNotice()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 4)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterSpecialNotice()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 5)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function filterTenderNotice()
    {
        $data['news'] = News::orderBy('id', 'desc')->where('type', 6)->get();
        return view('backend.news.news-view')->with($data);
    }

    public function addNews()
    {
        return view('backend.news.news-add');
    }

    public function storeNews(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'date' => 'required',
            'file' => 'mimes:pdf,doc,docx,jpeg,jpg,png',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        //dd($request->all());
        $params = $request->all();
        $params['date'] = date('Y-m-d', strtotime($request->date));
        $params['start_date'] = date('Y-m-d', strtotime($request->start_date));
        $params['end_date'] = date('Y-m-d', strtotime($request->end_date));
        $params['display_on_scrollbar'] = $request->display_on_scrollbar ?? 0;
        $params['faculty_id'] = $request->faculty_id;
        $params['department_id'] = $request->department_id;
        $params['hall_id'] = $request->hall_id;
        $params['office_id'] = $request->office_id;

        // dd($params);
        if ($file = $request->file('image')) {
            $filename = date('Ymd') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $filename);
            //$image=Image::make(public_path('upload/news/').$filename);
            //$image->resize(643,360)->save(public_path('upload/news/').$filename);
            $params['image'] = $filename;
        }
        if ($file = $request->file('file')) {
            $filename = date('Ymd') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $filename);
            $params['file'] = $filename;
        }
        News::create($params);

        return redirect()->route('site-setting.news')->with('success', 'News stored successfully.');
    }

    public function editNews($id)
    {
        $data['editData'] = News::find($id);
        return view('backend.news.news-add')->with($data);
    }

    public function updateNews(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'file' => 'mimes:pdf,doc,docx,jpeg,jpg,png',
            'image' => 'mimes:jpeg,jpg,png',
        ]);
        $params = $request->all();
        $params['date'] = date('Y-m-d', strtotime($request->date));
        $params['start_date'] = date('Y-m-d', strtotime($request->start_date));
        $params['end_date'] = date('Y-m-d', strtotime($request->end_date));
        $params['display_on_scrollbar'] = $request->display_on_scrollbar ?? 0;
        $data = News::find($id);

        if ($file = $request->file('image')) {
            @unlink(public_path('upload/news/' . $data->image));
            $filename = date('Ymd') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $filename);
            //$image=Image::make(public_path('upload/news/').$filename);
            //$image->resize(643,360)->save(public_path('upload/news/').$filename);
            $params['image'] = $filename;
        }
        if ($file = $request->file('file')) {
            @unlink(public_path('upload/news/' . $data->file));
            $filename = date('Ymd') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/news'), $filename);
            //$image=Image::make(public_path('upload/news/').$filename);
            //$image->resize(643,360)->save(public_path('upload/news/').$filename);
            $params['file'] = $filename;
        }
        $data->update($params);
        return redirect()->route('site-setting.news')->with('info', 'News updated successfully.');
    }

    public function deleteNews(Request $request)
    {
        // dd($id);
        $id = $request->id;
        $deleteData = News::find($id);
        // @unlink(public_path('upload/faculty/'.$deleteData->image));
        $deleteData->delete();
        return redirect()->route('site-setting.news');
    }
    public function facultyWiseDepartment(Request $request)
    {
        // if ($request->faculty_id == -1) {
        //     $facultyWiseDepartments = "";
        // } else {
            $facultyWiseDepartments = Department::where('faculty_id', $request->faculty_id)->get();
        // }

        if (isset($facultyWiseDepartments)) {
            return response()->json($facultyWiseDepartments);
        } else {
            return response()->json('fail');
        }
    }
}
