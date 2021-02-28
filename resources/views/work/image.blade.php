@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-lg-offset-2">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Subir fotos</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="m-b-lg">
                                    <small>
                                        A continuacion deberas ingresar los datos para comenzar a crear la prueba.
                                    </small>
                                </div>
                                <form action="{{url('upload/'.$id)}}" method="POST" enctype="multipart/form-data" id="drop-gallery" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                                <br>
                                <div>
                                    <a href="{{url('admin/work')}}" class="btn btn-primary btn-md">Continuar</a>
                                </div>
                                <div class="row">
                                    @foreach($gallery as $g)
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <div class="gallery-item">
                                                <div class="thumb">
                                                    <a href="{{url('/image/'.$g->attached_id.'/800/800')}}" target="_blank" data-lightbox="gallery-2" data-title="gallery item with caption">
                                                        <img class="img-responsive" src="{{url('/image/'.$g->attached_id.'/300/300')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="caption">
                                                    <form action="{{url('upload/'.$g->attached_id.'/'.$id)}}" method="POST">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
