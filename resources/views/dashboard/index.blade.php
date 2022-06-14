@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')




    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Eventos <small> Panel administrativo </small>
            </h1>
        </div>
    </div>
    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3>0</h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Eventos registrados
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
                <div class="panel-body">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <h3>0</h3>
                </div>
                <div class="panel-footer back-footer-blue">
                    Total de registros
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-brown">
                <div class="panel-body">
                    <i class="fa fa-users fa-5x"></i>
                    <h3>0</h3>
                </div>
                <div class="panel-footer back-footer-brown">
                    Usuarios en sistema
                </div>
            </div>
        </div>
    </div>


    <div class="row">


        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Concurrencia de eventos
                </div>
                <div class="panel-body">
                    <div id="morris-bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Total de eventos concretados
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
            </div>
        </div>

    </div>




@endsection
