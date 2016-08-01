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
                        <a href="#">Clientes</a>
                    </li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- INICIAMOS CONTENIDO -->
                        <div class="page-header">
                            <h1>
                                Clientes
                            </h1>
                        </div>
                        <!-- FIN DE CONTENIDO -->
                    </div><!-- /.col -->
                    <div class="col-xs-12">
                        <div class="col-xs-10 col-xs-offset-1">

                            <div class="table-header">
                                Nuevo Cliente
                            </div>
                            <br>
                            @include('common.errors')
                            <form action="{{ url('cliente')  }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nombres" class="col-xs-2  control-label">NOMBRES: </label>
                                    <div class="col-xs-3">
                                        <input class="form-control" placeholder="Ingrese su Nombre" id="nombres" name="nombres" type="text" autofocus="">
                                    </div>
                                    <label for="apellidos" class="col-xs-2 control-label">APELLIDOS: </label>
                                    <div class="col-xs-4">
                                        <input class="form-control" placeholder="Ingrese sus Apellidos" id="apellidos" name="apellidos" type="text" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ruc" class="col-xs-2 control-label">RUC: </label>
                                    <div class="col-xs-3">
                                        <input class="form-control" placeholder="Ingrese su RUC" id="ruc" name="ruc" type="text" autofocus="">
                                    </div>
                                    <label for="direccion" class="col-xs-2 control-label">DIRECCION: </label>
                                    <div class="col-xs-4">
                                        <input class="form-control" placeholder="Ingrese Dirección" id="direccion" name="direccion" type="text" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="col-xs-2 control-label">TEL / CEL: </label>
                                    <div class="col-xs-3">
                                        <input class="form-control" placeholder="Ingrese numero Tel / Cel" id="telefono" name="telefono" type="text" autofocus="">
                                    </div>
                                    <label for="email" class="col-xs-2 control-label">EMAIL: </label>
                                    <div class="col-xs-4">
                                        <input class="form-control" placeholder="Ingrese Email" id="email" name="email" type="text" autofocus="">
                                    </div>
                                </div>
                                <br>
                                <div class="col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Registrar cliente
                                    </button>
                                </div>
                            </form>
                            <br>
                            <div class="table-header">
                                Lista de Pedidos realizados.
                            </div>
                            <div>

                                <table id="tablaClientes" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 5%;">CODIGO</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 15%;">NOMBRES</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 10%;">RUC</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 10%;">DIRECCION</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 5%;">TELEFONO</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 8%;">EMAIL</th>
                                            <th style="text-align: center; font-size: 11px; height: 10px; width: 15%;">OPERACIONES</th>
                                        </tr>
                                    </thead>
                                    @if (count($clientes) > 0)
                                        <tbody id="cuerpoClientes">
                                            @foreach($clientes as $cliente)
                                                <tr>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 5%;"><div>{{ $cliente->id }}</div></td>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 15%;"><div>{{ $cliente->nombres }} {{$cliente->apellidos}}</div></td>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 10%;"><div>{{ $cliente->ruc }}</div></td>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 10%;"><div>{{ $cliente->direccion }}</div></td>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 5%;"><div>{{ $cliente->telefono }}</div></td>
                                                    <td class="table-text" style="text-align: center; font-size: 11px; height: 10px; width: 8%;"><div>{{ $cliente->email }}</div></td>
                                                    <td style="text-align: center; font-size: 11px; height: 10px; width: 15%;">
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="tooltip-error" data-rel="tooltip" title="Editar" >
                                                                <span class="red">
                                                                    <i class="ace-icon fa fa-pencil bigger-120" onclick="location.href='clientes/{{ $cliente->id }}'"></i>
                                                                </span>
                                                            </a>

                                                            <a href="{{ url('cliente') }}/{{ $cliente->id }}" class="tooltip-error" data-rel="tooltip" title="Eliminar" type="submit">
                                                                <span class="red">
                                                                    <i class="ace-icon fa fa-trash bigger-120"></i>
                                                                </span>
                                                            </a>

                                                                <!--button type="submit" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash"></i>Eliminar
                                                                </button-->



                                                        </div>
                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a class="tooltip-error" data-rel="tooltip" title="Editar" >
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-pencil bigger-120" onclick="location.href='clientes/{{ $cliente->id }}'"></i>
                                                                            </span>
                                                                        </a>

                                                                        <a href="{{ url('cliente') }}/{{ $cliente->id }}" class="tooltip-error" data-rel="tooltip" title="Eliminar" type="submit">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>

                                                                            <!--button type="submit" class="btn btn-danger btn-sm">
                                                                                <i class="fa fa-trash"></i>Eliminar
                                                                            </button-->

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @endif
                                </table>

                            </div>
                        </div>


                    </div>
                </div><!-- /.row -->
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection

@section('script')
    <script src="js/cliente.js"></script>
@endsection