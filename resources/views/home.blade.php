@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de Home
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 8%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    </ol>
        </div>
    <!--Termina path de Home
    -->
        <div class="col-md-14 col-md-offset-0" style="padding-top:50px;">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">

                     <div class="container">

                  <div class="content">
                    <div style="height:200px; width:200px; float: left;"></div>
                    <div style="margin-left: 250px;margin-right: 15%;">
                        <h1 style="text-align: center;"><strong> Bienvenido a la Plataforma EVA </strong> </h1>
                        <h1 style="text-align: center"><strong>UMSS</strong></h1>
                        <h3 style="text-align: center;">Sistema de Registro y evaluacion
                                                    para estudiantes de Ing. Informatica y de Sistemas</h3> 
                    </div>
                    <img src="{{asset('/img/img_panelPrincipal/logoUMSS12.jpg')}}" class="img-circle"
                        alt="User Image" style="height:90px; margin-left: 50%;" />

                  </div>

        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
