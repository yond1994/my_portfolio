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
                                <h4 class="widget-title">Agregar trabajo</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="m-b-lg">
                                    <small>
                                        A continuacion deberas ingresar los datos para comenzar a crear la prueba.
                                    </small>
                                </div>
                                <form method="POST" action="{{url('admin/work/'.$id)}}">
                                    <div class="form-group">
                                        <label for="title">Título:</label>
                                        <input type="text" name="title" readonly value="{{$name}}" class="form-control" id="title" placeholder="Título de la prueba...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripción:</label>
                                        <textarea type="text" name="description" readonly  class="form-control" id="description" placeholder="Descripción de la prueba...">{{$description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{url('admin/work/'.$id.'/edit')}}" class="btn btn-primary btn-md">Editar</a>
                                    </div>
                                </form>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
