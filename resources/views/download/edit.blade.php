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
                                <h4 class="widget-title">Editar Sistema de descargas</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="m-b-lg">
                                    <small>
                                        A continuacion deberas ingresar los datos para comenzar a crear la prueba.
                                    </small>
                                </div>
                                <form method="POST" action="{{url('admin/work/'.$data->id)}}">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Título:</label>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control" id="title" placeholder="Título de la prueba...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripción:</label>
                                        <textarea type="text" name="description"  class="form-control" id="description" placeholder="Descripción de la prueba...">{{$data->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Url:</label>
                                        <input type="text" name="link" class="form-control" id="url" value="{{$data->link}}" placeholder="Url...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">video:</label>
                                        <input type="text" name="video" class="form-control" id="url" value="{{$data->video}}" placeholder="Url...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">BD:</label>
                                        <input type="text" name="bd" class="form-control" id="url" value="{{$data->bd}}" placeholder="Url...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Gif:</label>
                                        <input type="text" name="gif" class="form-control" id="url" value="{{$data->gif}}" placeholder="Url...">
                                    </div>
                                    <div class="form-group">
                                        <select name="categorie" class="form-control" id="categorie">
                                            <option value="">Seleccion</option>
                                            @foreach($categories as $c)
                                                @if($data->categorie == $c->id)
                                                    <option value="{{$c->id}}" selected>{{$c->name}}</option>
                                                @endif
                                                <option value="{{$c->id}}">{{$c->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md">Guardar</button>
                                    </div>
                                </form>
                                <form action="{{url('admin/download/'.$data->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                                </form>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
