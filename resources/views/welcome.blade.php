@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- INICIAMOS CONTENIDO -->
                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="jumbotron">
                                <center><h1>CRUD - LARAVEL</h1></center>
                                <center><p>Mi primera aplicación hecha en laravel.</p></center>
                            </div>
                        </div>
                        <!-- FIN DE CONTENIDO -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->
@endsection