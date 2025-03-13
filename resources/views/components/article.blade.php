<section class="w-[100%] md:w-[40%] lg:w-[40%] flex flex-col justify-start items-center bg-[var(--primary100)] md:flex-col lg:flex-col xl:flex-col 2xl:flex-col p-4 rounded-xs h-[80vh] ">
    <article class="w-[100%] flex flex-col justify-center items-center h-[30vh] rounded-xs">
        <h5 class="w-[100%] p-md md:w-[100%] lg:w-[100%] xl:w-[100%] text-center md:text-center lg:text-center xl:text-center 2xl:text-center 2xl:w-[100%] flex flex-row font-bold text-[var(--text100)] h-[8vh] text-xs md:text-md lg:text-md xl:text-md 2xl:text-md  bg-[var(--accent100)]  justify-center items-center rounded-xs">{{$title}}</h5>
        <h6 class="w-[100%] pl-[5px] p-md md:w-[100%] lg:w-[100%] xl:w-[100%] 2xl:w-[100%] text-center md:text-center lg:text-center xl:text-center 2xl:text-center flex font-bold text-[var(--text100)] h-[2vh] text-xs md:text-md lg:text-md xl:text-md 2xl:text-md  bg-[var(--accent100)] rounded-xs">Autor: {{$author}} - Fuente: {{$source}}</h6>
            @php
              $date = new \DateTime($published);  
            @endphp
        <h6  class="w-[100%] pl-[5px] md:w-[100%] lg:w-[100%] xl:w-[100%] 2xl:w-[100%] text-center md:text-center lg:text-center xl:text-center 2xl:text-center flex font-bold text-[var(--text100)] h-[2vh]  text-xs md:text-md lg:text-md xl:text-md 2xl:text-md  bg-[var(--accent100)] rounded-xs">{{$date->format('Y-m-d H:i:s')}}</h6>
        <div class="w-[100%] flex flex-row justify-center items-center h-[20vh]">
            <img src="{{$image}}" class="w-[200px] h-[100px] rounded-xs"/>
        </div>
    </article>
    <article class="w-[100%] flex flex-col justify-center items-center h-[40vh]">
        <p class="w-[100%] md:w-[100%] lg:w-[100%] xl:w-[100%] 2xl:w-[100%] flex font-thin text-[var(--text100)] text-center  text-xs md:text-md lg:text-md xl:text-md 2xl:text-md">{{$description}}</p>
    </article>
    <article class="w-[100%] flex flex-col justify-center items-center h-[10vh]">
        <a href="{{$url}}" target="_blank" class="w-[200px] h-[5vh] rounded-xs flex flex-col justify-center items-center bg-[var(--accent100)] text-[var(--text100)]">Visitar Articulo</a>
    </article>
</section>