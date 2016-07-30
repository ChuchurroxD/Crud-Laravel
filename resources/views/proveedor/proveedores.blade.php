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
                    <li>
                        <a href="#">Proveedores</a>
                    </li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- INICIAMOS CONTENIDO -->
                        <div class="page-header">
                            <h1>
                                Proveedores
                            </h1>
                        </div>
                        <!-- FIN DE CONTENIDO -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection