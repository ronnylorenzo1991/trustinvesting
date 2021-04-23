<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\DB;

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

    public function paymentHistory()
    {
        SEOTools::setTitle(trans('multi-leng.payments'));
        SEOTools::setDescription(trans('multi-leng.payments_history'));
        OpenGraph::setDescription(trans('multi-leng.payments_history'));
        OpenGraph::setTitle(trans('multi-leng.payments'));
        OpenGraph::setUrl('https://www.trustinvesting.us/historico-de-pagos');
        OpenGraph::addProperty('type', 'articles');

        $yearStart = date('Y-01-01');
        $yearEnd = date('Y-12-31');

        $monthStart = date('Y-m-01');
        $monthEnd = date('Y-m-31');

        $day = date('w');
        $weekStart = date('Y-m-d', strtotime('-' . $day . ' days'));
        $weekEnd = date('Y-m-d', strtotime('+' . ( 6 - $day ) . ' days'));

        $today = date('Y-m-d');

        $paymentsYear = DB::table('payments')->whereBetween(DB::raw('DATE(date)'), array ( $yearStart, $yearEnd ))->sum('qty');
        $paymentsWeek = DB::table('payments')->whereBetween(DB::raw('DATE(date)'), array ( $weekStart, $weekEnd ))->sum('qty');
        $paymentsMonth = DB::table('payments')->whereBetween(DB::raw('DATE(date)'), array ( $monthStart, $monthEnd ))->sum('qty');

        $paymentsDay = DB::table('payments')->select('qty')->where('date', $today)->get();

        if (!count($paymentsDay) > 0)
        {
            $paymentsDay = DB::table('payments')->select('qty')->orderBy('date', 'DESC')->first();
            $paymentsDay = $paymentsDay->qty;
        }

        return view('payments-history', compact('paymentsDay', 'paymentsMonth', 'paymentsWeek', 'paymentsYear'));
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
