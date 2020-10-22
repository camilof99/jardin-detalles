@extends('adminlte::page')

@section('title', 'Factura')

@section('content_header')
    <h1>Facturas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('lista-facturas') }}" class="btn btn-info"><i class="far fa-list-alt"></i> Lista Facturas</a>
        </div>

        <div class="card-body">
            <form>
               
                <div class="form-row">
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fecha">Fecha</label>
                                <div class="input-group">
                                    <input id="fecha" type='text' class='form-control datepicker-here' data-language='es' placeholder="Fecha"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nroFactura"># Factura de Venta</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nroFactura" placeholder="" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="arregloSolicitado">Arreglo solicitado</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="arregloSolicitado" placeholder="Arreglo solicitado">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-gifts"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <div class="input-group">
                                    {{--  <i class="fas fa-money-bill-wave"></i>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="para">Para</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="para" placeholder="Para">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="de">De</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="de" placeholder="De">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="container">
                        <div class="">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="far fa-file"></i> Generar Factura</button>
                </div>
                
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{!! asset('css/factura-index.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" integrity="sha512-Ujn3LMQ8mHWqy7EPP32eqGKBhBU8v39JRIfCer4nTZqlsSZIwy5g3Wz9SaZrd6pp3vmjI34yyzguZ2KQ66CLSQ==" crossorigin="anonymous" />
@stop

@section('js')
    <script>

        $(document).ready(function () {
            $('#fecha').datepicker({
                language: 'es',
                minDate: new Date() // Now can select only dates, which goes after today
            });
        });

    </script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js" integrity="sha512-sM9DpZQXHGs+rFjJYXE1OcuCviEgaXoQIvgsH7nejZB64A09lKeTU4nrs/K6YxFs6f+9FF2awNeJTkaLuplBhg==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.es.min.js" integrity="sha512-0clikq7f8OJ04PvXXXFCwakn6rKXt445mKS8ttWE4l53cdlsR8gVwVKQWdDSnRLRi5AFOtZtcPHSOL5dk0jmnw==" crossorigin="anonymous"></script>

@stop