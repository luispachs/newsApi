<div class="w-[90%] md:w-[90%] lg:w-[90%] xl:w-[90%] 2xl:w-[90%] min-h-[75vh] rounded-xs p-2.5">
<section>
    <h1 class="text-[var(--text100)] bg-[var(--accent100)] px-[10px] text-start font-bold w-full">Listado de Articulos Acerca de: {{strtoupper(env('MAIN_THEME'))}}</h1>
</section>
<section class="w-full flex md:flex lg:flex xl:flex 2xl:flex flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row flex-wrap gap-4 justify-center items-start p-2">
    @foreach ($list->articles as $article )
        <x-article :title="$article->title" :author="$article->author" :source="$article->source->name" :description="$article->description" :image="$article->urlToImage" :url="$article->url" :published="$article->publishedAt"/>
    @endforeach
</section>
    

</div>