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
                                <h4 class="widget-title">Agregar categoria</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="m-b-lg">
                                    <small>
                                        A continuacion deberas ingresar los datos para comenzar a crear la prueba.
                                    </small>
                                </div>
                                <form method="POST" action="{{url('admin/work')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Título:</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Título de la prueba...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripción:</label>
                                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Descripción de la prueba..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Url:</label>
                                        <input type="text" name="url" class="form-control" id="url" placeholder="Url...">
                                    </div>
                                    <div class="form-group">
                                        <select name="categorie" class="form-control" id="categorie">
                                            @foreach($categories as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md">Crear</button>
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
