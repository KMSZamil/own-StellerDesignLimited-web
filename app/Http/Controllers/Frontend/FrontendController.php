<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\HomeSeo;
use App\Models\Project;
use App\Models\Visitor;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->user_data_store();
    }

    public function index()
    {
        $seo_data = HomeSeo::all();
        SEOMeta::setTitle($seo_data[0]['title']);
        SEOMeta::setDescription($seo_data[0]['description']);
        SEOMeta::setCanonical($seo_data[0]['url']);

        OpenGraph::setDescription($seo_data[0]['description']);
        OpenGraph::setTitle($seo_data[0]['title']);
        OpenGraph::setUrl($seo_data[0]['url']);
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('image', asset('/' . $seo_data[0]['image_path']));
        $myArray = explode(',', $seo_data[0]['keywords']);
        if (count($myArray) > 0) {
            $temp_status_name_output = "'" . implode("', '", $myArray) . "'";
            //dd($temp_status_name_output);
        }

        TwitterCard::setTitle($seo_data[0]['title']);
        //TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle($seo_data[0]['title']);
        JsonLd::setDescription($seo_data[0]['description']);
        JsonLd::addImage(asset('/' . $seo_data[0]['image_path']));

        return view('frontend.home');
    }

    public function terms_and_condition()
    {
        return view('frontend.terms_and_conditions');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }

    function user_data_store()
    {
        $user_agent = request()->userAgent();
        $ip_address = request()->ip();

        Visitor::updateOrCreate(
            ['ip_address' => $ip_address],
            [
                'user_agent' => $user_agent,
                'ip_address' => $ip_address
            ]
        );
        return true;
    }
}
