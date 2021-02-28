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
                                <h4 class="widget-title">Ajustes del sitio</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form method="POST" action="{{url('admin/config')}}">
                                    {{ csrf_field() }}
                                    @foreach($setting as $set)
                                        <div class="form-group">
                                            <label for="title">{{$set->name}}:</label>
                                            <input type="text" name="{{$set->name}}" class="form-control" id="{{$set->name}}" value="{{$set->value}}" placeholder="Título de la prueba...">
                                        </div>
                                    @endforeach

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md">Guardar</button>
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
