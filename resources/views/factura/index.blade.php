@extends('adminlte::page')

@section('title', 'Factura')

@section('content_header')
    <h1>Facturas</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('nueva-factura') }}" class="btn btn-success"><i class="far fa-plus-square"></i> Nueva Factura</a>
        </div>

        <div class="card-body">
            <table id="example" class="table table-striped text-center">

                <thead class="thead-size">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i = 0; $i < 15; $i++)
                        <tr>
                            <td>123</td>
                            <td>Camilo</td>
                            <td>c@gmail.com</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info btn-size"><i class="fas fa-eye"></i></button>
                                <button type="button" class="btn btn-sm btn-danger btn-size"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{!! asset('css/factura-index.css') !!}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="
    https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                autoWidth: false,
                "lengthMenu": [[8, 15, 30, -1], [8, 15, 30, "Todos"]],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado - disculpa",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    'search': 'Buscar:',
                    'paginate': {
                        'next': '<i class="fas fa-forward"></i>',
                        'previous': '<i class="fas fa-backward"></i>'
                    }
                }
            });
        } );
    </script>
@stop
