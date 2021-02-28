@extends('layouts.front')

@section('section')
    <div   class="portfolio-single page-layout">

        <!-- .layout-medium -->
        <div class="layout-medium">


            <!-- .hentry -->
            <article class="hentry">

                <!-- .entry-header -->
                <header class="entry-header">

                    <!-- PORTFOLIO-NAV -->
                    <div class="portfolio-nav">
                        <a class="back" href="#/portfolio"></a>
                    </div>
                    <!-- PORTFOLIO-NAV -->

                    <!-- TITLE -->
                    <h1 class="entry-title">{{$name}}</h1>
                    <!-- TITLE -->

                </header>
                <!-- .entry-header -->
                <!-- .entry-content -->
                <div class="entry-content">
                    <div style="width: 100%">
                        <iframe width="100%" height="50%" src="{{$video}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>

                    <div class="mini-text">
                        <h5>Descripción del sistema</h5>
                        <p>{!!$description!!}</p>
                    </div>
                    <p>
                        @foreach($images as $image)
                            @if($image->type=='img')
                                <img src="{{config("app.url")}}/image/{{$image->id}}/800/600/resize" alt="project">
                            @endif
                        @endforeach
                    </p>
                    <div class="mini-text">

                        <p>
                            <a href="{{$link}}" target="_blank" class="button">Descargar Mega</a>
                            <a href="{{$bd}}" target="_blank" class="button">Base de datos</a>
                            <a href="{{$gif}}" target="_blank" class="button">Repositorio Gif</a>
                        </p>

                    </div>

                    <!-- .mini-text -->

                    <!-- .mini-text -->
                    @foreach($images as $image)
                        @if($image->type=='video')
                            <div class="fluid-width-video-wrapper" style="padding-top: 56.2%;">
                                <iframe src="https://player.vimeo.com/video/57453413?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid945883"></iframe>
                            </div>
                    @endif
                @endforeach



                <!-- PORTFOLIO-NAV BOTTOM -->
                    <div class="portfolio-nav bottom">

                        <a class="back" href="#/portfolio"></a>
                    </div>
                    <!-- PORTFOLIO-NAV BOTTOM-->


                </div>
                <!-- .entry-content -->


            </article>
            <!-- .hentry -->



        </div>
        <!-- .layout-medium -->

    </div>
@endsection
