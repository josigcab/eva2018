@extends('auth.auth')

@section('htmlheader_title')
Home
@endsection


@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-14 col-md-offset-0 borderpath" style=" width: 0%;height: 100%; margin-left:120px;">
           <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
           </ol>
       </div>

       <div class="col-md-8 col-md-offset-0">
           <div class="panel panel-default" style="margin-left:33px; width:157%;">
               <div class="panel-body" style="padding-bottom: 0px;padding-left: 0px;padding-top: 0px;padding-right: 0">
                   <div style="background-color: white ;width: 100% ; height: 100% ; padding-bottom: 187px ; margin-top: 7% " class="content" >
                       <div style="color: black ; text-align: center;">
                           <h1><strong> Bienvenidos a la Plataforma EVA </strong></h1>
                           <h1 style="text-align: center"><strong>UMSS</strong></h1>
                           <h3 style="text-align: center;">Sistema de Registro y evaluacion
                                                    para estudiantes de Ing. Informatica y de Sistemas</h3>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
