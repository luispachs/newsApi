<?php

namespace App\View\Components;

use Closure;
use jcobhams\NewsApi\NewsApi;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Psr\Http\Message\StreamInterface;

class NewsList extends Component
{
    private StreamInterface $newsList;
    private mixed $allArticles;
    public function __construct(array $request)
    {   
        extract($request);
        $newsapi = new NewsApi(env('API_KEY_NEWSAPI',''));
        $this->allArticles = $newsapi->getEverything(env('MAIN_THEME'), $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-list',['list'=>$this->allArticles]);
    }
}
