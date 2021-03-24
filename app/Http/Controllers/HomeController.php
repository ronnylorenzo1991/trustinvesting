<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {

        SEOTools::setTitle(trans('multi-leng.menu_home'));
        SEOTools::setDescription(trans('multi-leng.cripto_investment_description'));
        OpenGraph::setDescription(trans('multi-leng.cripto_investment_description'));
        OpenGraph::setTitle('Trustinvesting');
        OpenGraph::setUrl('https://www.trustinvesting.us');
        OpenGraph::addProperty('type', 'articles');

        return view('welcome');
    }

    public function marketing()
    {

        SEOTools::setTitle(trans('multi-leng.marketing_plans'));
        SEOTools::setDescription(trans('multi-leng.marketing_plans_description'));
        OpenGraph::setDescription(trans('multi-leng.marketing_plans_description'));
        OpenGraph::setTitle(trans('multi-leng.marketing_plans'));
        OpenGraph::setUrl('https://www.trustinvesting.us/marketing');
        OpenGraph::addProperty('type', 'articles');

        return view('marketing');
    }

    public function manage()
    {

        SEOTools::setTitle(trans('multi-leng.manage_plans'));
        SEOTools::setDescription(trans('multi-leng.manage_plans_description'));
        OpenGraph::setDescription(trans('multi-leng.manage_plans_description'));
        OpenGraph::setTitle(trans('multi-leng.manage_plans'));
        OpenGraph::setUrl('https://www.trustinvesting.us/manage');
        OpenGraph::addProperty('type', 'articles');

        return view('manage-plans');
    }

    public function videos()
    {

        SEOTools::setTitle('Videos');
        SEOTools::setDescription(trans('multi-leng.videos_description'));
        OpenGraph::setDescription(trans('multi-leng.videos_description'));
        OpenGraph::setTitle('Videos');
        OpenGraph::setUrl('https://www.trustinvesting.us/videos');
        OpenGraph::addProperty('type', 'articles');

        return view('videos');
    }
}
