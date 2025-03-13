<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function (Request $request) {
    $page=$request->get('page',1);
    $to = $request->get('to',new \DateTime('now'));
    $fromDate =new \DateTime('now');
    $fromDateSub = $fromDate->sub(new \DateInterval('P2Y'));
    $from = $request->get('from',$fromDateSub);
    $language = env('APP_LOCALE');
    $pageSize = env('PAGE_SIZE_NEWS_API');
    $sortBy =env('SORT_BY_NEWS_API');
    $sources = $request->get('sources');
    $domains = $request->get('domains');
    $excludeDomains = $request->get('exclude_domains');
    $from = $request->get('from');
    $to = $request->get('to');

    
    return view('welcome',
    [
            "page"=>$page,
            "to"=>$to,
            "from"=>$from,
            "language"=>$language,
            "page_size"=>$pageSize,
            "sort_by"=>$sortBy,
            "sources"=>$sources,
            "domains"=>$domains,
            "exclude_domains"=>$excludeDomains
            ]
    );
});
