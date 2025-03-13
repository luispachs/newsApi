@extends("Layout")
@section("title","Blog News App")
@section("content")
    @php
        $theme =  env("MAIN_THEME");
        
        $request =[
            "page"=>$page,
            "to"=>$to,
            "from"=>$from,
            "language"=>$language,
            "page_size"=>$page_size,
            "sort_by"=>$sort_by,
            "sources"=>$sources,
            "domains"=>$domains,
            "exclude_domains"=>$exclude_domains
        ]
    @endphp
    <x-header/>
    <main class="bg-[var(--bg100)] min-h-[80vh] flex flex-col items-center justify-center px-[1rem]  md:px-[5rem] lg:px-[5rem] xl:px-[5rem] 2xl:px-[5rem] pb-[10vh] pt-2.5">
        <x-news-list :request="$request"/>
    </main>
    <x-footer/>

@endsection