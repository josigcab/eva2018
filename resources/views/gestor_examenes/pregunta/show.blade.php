@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de contenido del curso.
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 34%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('/admin/curso_dicta') }}"><i class="fa fa-dashboard"></i>Cursos</a></li>
                    <li><a href="#"></i>Contenido del Curso</a></li>
                    </ol>
        </div>
    <!--Termina path de las Listas de contenido del curso.
    -->
        <div class="col-md-14 col-md-offset-0" style="padding-top:50px;">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR CURSO</div>

                <div class="panel-body">

<div class="container">
{{-- */$id_test=DB::table('examens')->where('id', $id_examen)->first();
                    $id_test=$id_test->id_cursos;
             /* --}}
    <!--Comienza path de crear preguntas para examen.
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 42%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('admin/curso_dicta/'.$id_test.'/vista_contenido_curso') }}"><i class="fa fa-dashboard"></i>Principal</a></li>
                    <li><a href="{{ url('gestor_examenes/'.$id_test.'/examen') }}"><i class="fa fa-dashboard"></i>Mis Exámenes</a></li>
                    <li><a href="{{url('/gestor_examenes/pregunta/'.$id_examen.'/index')}}"><i class="fa fa-dashboard"></i>lista de Preguntas</a></li>
                    <li><a href="#"></i>ver Pregunta</a></li>
                    </ol>
        </div>
    <!--Termina path de crear preguntas para examen.
    -->

    <h1 style="padding-top: 20px;">Pregunta {{ $preguntum->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $preguntum->id }}</td>
                </tr>
                <tr><th> {{ trans('pregunta.nombre_pregunta') }} </th><td> {{ $preguntum->nombre_pregunta }} </td></tr><tr><th> {{ trans('pregunta.puntaje_pregunta') }} </th><td> {{ $preguntum->puntaje_pregunta }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('gestor_examenes/pregunta/' . $preguntum->id . '/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Editar Preguntum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                          <a href="{{ url('/gestor_examenes/pregunta/' . $preguntum->id . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Eliminar Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Eliminar Multiple" /></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

  </div>
            </div>
        </div>
    </div>
</div>
@endsection