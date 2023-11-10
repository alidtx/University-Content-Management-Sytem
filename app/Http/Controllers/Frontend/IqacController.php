<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Team;
use App\Model\Document;
use App\Model\News;
use App\Model\IQACabout;
use App\Model\Office;
use App\Model\TrainingWorkShopSeminar;
use Illuminate\Http\Request;

class IqacController extends Controller
{
    public function iqacAbout()
    {

        $data['iqacAbout'] = IQACabout::where('type', 1)->get();
        $data['iqacStory'] = IQACabout::where('type', 2)->get();
        //dd($data['iqacAbout']);
        return view('frontend.single_page.iqac.iqac_about', $data);
    }
    public function iqacTeams()
    {

        $data['team'] = Team::with('member')->get();
        return view('frontend.single_page.iqac.iqac_teams', $data);
    }
    public function iqacDocuments()
    {

        $data['document'] = Document::get();
        return view('frontend.single_page.iqac.iqac_documents', $data);
    }

    public function iqacNews()
    {

        $data['news'] = News::where(['type' => 2])->get();
        // dd($data['news']);
        return view('frontend.single_page.iqac.iqac_news', $data);
    }
    public function iqacTraining()
    {
        // $data['office'] = Office::where('id', $id)->first();

        $data['training'] = TrainingWorkShopSeminar::with('member')->get();
        // dd($data['training']);
        return view('frontend.single_page.iqac.iqac_training', $data);
    }


    public function iqacContact()
    {

        $data['office'] = Office::where('id', 12)->first();
        return view('frontend.single_page.iqac.iqac_contact', $data);
    }
}