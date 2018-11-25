<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
 // return view('welcome');
//});




Route::resource('admin/posts', 'Admin\\PostsController');
//Route::get('/','Admin\\PostsController@prueba');
Route::get('/','menuPrincipalController@index');
// es pararte cuando esta logueado


Route::resource('admin/permisos', 'Admin\\permisosController');
Route::resource('admin/roles', 'Admin\\rolesController');
Route::resource('admin/users', 'Admin\\UsersController');
Route::resource('admin/docente', 'Admin\\docenteController');
Route::resource('admin/administrador', 'Admin\\administradorController');

Route::resource('admin/curso', 'Admin\\cursoController');

Route::resource('admin/curso_dicta', 'Admin\\curso_dictaController');

Route::get('admin/desabilitados/{id_curso}/habilitar', 'Admin\\curso_dictaController@create');

Route::resource('admin/curso_inscrito', 'Admin\\curso_inscritoController');


Route::get('admin/curso/vista_inscribirse/cursos', 'Admin\\cursoController@visualizar_inscribirse');

Route::get('admin/curso/{parametro}/vista_inscribirse/{boton_todosloscursos}/materias', 'Admin\\cursoController@visualizar_inscribirse');


Route::get('admin/curso/index_todo/todo', 'Admin\\cursoController@visualizar_categoria_carrera');
Route::get('admin/curso/{id_materia}/borrar', 'Admin\\cursoController@desinscribirse');
Route::get('admin/curso/desinscribirse/borrarmostrar', 'Admin\\cursoController@visualizar_desinscribirse');
// para visualizar el contenido edel curso
Route::get('admin/curso_dicta/{id_curso}/vista_contenido_curso', 'Admin\\curso_dictaController@vis_contenido_curso');

Route::get('admin/curso_inscrito/{id_curso}/vista_contenido_curso', 'Admin\\curso_inscritoController@vis_contenido_curso');



Route::resource('gestor_examenes/examen', 'gestor_examenes\\examenController');
Route::resource('gestor_examenes/nota', 'gestor_examenes\\notaController');
Route::resource('gestor_examenes/pregunta', 'gestor_examenes\\preguntaController');
Route::get('gestor_examenes/pregunta/{id_examen}/index', 'gestor_examenes\\preguntaController@index');
Route::get('gestor_examenes/pregunta/{id_examen}/create', 'gestor_examenes\\preguntaController@create');
Route::get('gestor_examenes/pregunta/{id}/{id_examen}/edit', 'gestor_examenes\\preguntaController@edit');
Route::get('gestor_examenes/pregunta/{id}/{id_examen}/show', 'gestor_examenes\\preguntaController@show');
Route::get('gestor_examenes/pregunta/{id}/{id_examen}/delete', 'gestor_examenes\\preguntaController@destroy');
Route::resource('gestor_examenes/tipo_pregunta', 'gestor_examenes\\tipo_preguntaController');

//INICIO RUTAS RESPUESTAS DE OPCION MULTIPLE
Route::resource('gestor_examenes/multiples', 'gestor_examenes\\multiplesController');
Route::get('gestor_examenes/multiples/{id_pregunta}/index', 'gestor_examenes\\multiplesController@index');
Route::get('gestor_examenes/multiples/{id_pregunta}/create', 'gestor_examenes\\multiplesController@create');
Route::get('gestor_examenes/multiples/{id}/{id_pregunta}/edit', 'gestor_examenes\\multiplesController@edit');
Route::get('gestor_examenes/multiples/{id}/{id_pregunta}/show', 'gestor_examenes\\multiplesController@show');
Route::get('gestor_examenes/multiples/{id}/{id_pregunta}/delete', 'gestor_examenes\\multiplesController@destroy');
//FIN RUTAS RESPUESTAS DE OPCION MULTIPLE

//INICIO RUTAS RESPUESTAS DE OPCION MULTIPLE_VARIOS

Route::resource('gestor_examenes/multiples_varios', 'gestor_examenes\\multiples_variosController');
Route::get('gestor_examenes/multiples_varios/{id_pregunta}/index', 'gestor_examenes\\multiples_variosController@index');
Route::get('gestor_examenes/multiples_varios/{id_pregunta}/create', 'gestor_examenes\\multiples_variosController@create');
Route::get('gestor_examenes/multiples_varios/{id}/{id_pregunta}/edit', 'gestor_examenes\\multiples_variosController@edit');

Route::get('gestor_examenes/multiples_varios/{id}/{id_pregunta}/show', 'gestor_examenes\\multiples_variosController@show');
Route::get('gestor_examenes/multiples_varios/{id}/{id_pregunta}/delete', 'gestor_examenes\\multiples_variosController@destroy');

//FIN RUTAS RESPUESTAS DE OPCION MULTIPLE_VARIOS

//INICIO RUTAS RESPUESTAS DE OPCION DE DESARROLLO

Route::resource('gestor_examenes/desarrollo', 'gestor_examenes\\desarrolloController');
//{id_pregunta} id de la pregunta
Route::get('gestor_examenes/desarrollo/{id_pregunta}/{id_examen}/create', ['as' => 'examenes.desarrollo.create','uses' => 'gestor_examenes\\desarrolloController@create']);
//{id} id de la respuesta
Route::get('gestor_examenes/desarrollo/{id}/{id_examen}/edit', ['as' => 'examenes.desarrollo.edit','uses' => 'gestor_examenes\\desarrolloController@edit']);
//{id} id de la respuesta
Route::get('gestor_examenes/desarrollo/{id}/{id_examen}/show', ['as' => 'examenes.desarrollo.show','uses' => 'gestor_examenes\\desarrolloController@show']);
//{id} id de la respuesta
Route::get('gestor_examenes/desarrollo/{id}/{id_examen}/delete', ['as' => 'examenes.desarrollo.delete','uses' => 'gestor_examenes\\desarrolloController@destroy']);


//FIN RUTAS RESPUESTAS DE OPCION DE DESARROLLO

//INICIO RUTAS RESPUESTAS DE OPCION SIMPLE

Route::resource('gestor_examenes/simple', 'gestor_examenes\\simpleController');

//{id_pregunta} id de la pregunta
Route::get('gestor_examenes/simple/{id_pregunta}/{id_examen}/create', ['as' => 'examenes.simple.create','uses' => 'gestor_examenes\\simpleController@create']);
//{id} id de la respuesta
Route::get('gestor_examenes/simple/{id}/{id_examen}/edit', ['as' => 'examenes.simple.edit','uses' => 'gestor_examenes\\simpleController@edit']);
//{id} id de la respuesta
Route::get('gestor_examenes/simple/{id}/{id_examen}/show', ['as' => 'examenes.simple.show','uses' => 'gestor_examenes\\simpleController@show']);
//{id} id de la respuesta
Route::get('gestor_examenes/simple/{id}/{id_examen}/delete', ['as' => 'examenes.simple.delete','uses' => 'gestor_examenes\\simpleController@destroy']);

//FIN RUTAS RESPUESTAS DE OPCION SIMPLE

//INICIO RUTAS RESPUESTAS FALSO O VERDADERO
Route::resource('gestor_examenes/falsoverdadero', 'gestor_examenes\\falsoverdaderoController');

//{id_pregunta} id de la pregunta
Route::get('gestor_examenes/falsoverdadero/{id_pregunta}/{id_examen}/create', ['as' => 'examenes.falsoverdadero.create','uses' => 'gestor_examenes\\falsoverdaderoController@create']);
//{id} id de la respuesta
Route::get('gestor_examenes/falsoverdadero/{id}/{id_examen}/edit', ['as' => 'examenes.falsoverdadero.edit','uses' => 'gestor_examenes\\falsoverdaderoController@edit']);
//{id} id de la respuesta
Route::get('gestor_examenes/falsoverdadero/{id}/{id_examen}/show', ['as' => 'examenes.falsoverdadero.show','uses' => 'gestor_examenes\\falsoverdaderoController@show']);
//{id} id de la respuesta
Route::get('gestor_examenes/falsoverdadero/{id}/{id_examen}/delete', ['as' => 'examenes.falsoverdadero.delete','uses' => 'gestor_examenes\\falsoverdaderoController@destroy']);

//FIN RUTAS RESPUESTAS FALSO O VERDADERO

//INICIO DE RUTAS PARA NOTAS

Route::resource('gestor_examenes/nota', 'gestor_examenes\\notaController');

Route::get('gestor_examenes/nota/{id_curso}/{id_examen}/create', ['as' => 'examenes.nota.create','uses' => 'gestor_examenes\\notaController@create']);

//FIN DE RUTAS PARA NOTAS


//INICIO DE RUTAS PARA DAR EL EXAMEN

Route::get('darexamen/{id_nota}/{id_examen}/formulario_examen', 'gestorexamenesController@formulario_examen');
Route::get('verexamen/{id_examen}/{id_curso}/formulario_examen_docente', 'gestorexamenesController@formulario_examen_docente');
Route::post('darexamen/formulario_examen/calcular_nota', 'gestorexamenesController@calcular_nota');
//Route::get('pdf2', 'gestorexamenesController@crear_pdf');

//FIN DE RUTAS PARA DAT EL EXAMEN

//

Route::get('gestor_examenes/examen/{id_curso}/ver_examenes_estudiante', 'gestor_examenes\\examenController@ver_examenes_estudiante');
Route::get('gestor_examenes/examen/{id_curso}/listar_estudiantes', 'gestor_examenes\\examenController@listar_estudiantes');
Route::get('gestor_examenes/examen/{id_curso}/create', 'gestor_examenes\\examenController@crear_examen');
Route::get('gestor_examenes/{id_curso}/examen', 'gestor_examenes\\examenController@listar');
Route::get('gestor_examenes/examen/{id}/update/{id_curso}/edit', 'gestor_examenes\\examenController@edit');
Route::get('gestor_examenes/examen/{id}/ver/{id_curso}/materia', 'gestor_examenes\\examenController@show');
Route::get('gestor_examenes/examen/{id}/delete/{id_curso}/destroy', 'gestor_examenes\\examenController@destroy');

//INICIO DE RUTAS PARA COPIAS DE SEGURIDAD
Route::get('gestor_examenes/{id_curso}/tareas/listar', 'gestor_examenes\\tareaController@listar');
// route for create task
Route::get('/gestor_examenes/{id_curso}/tarea/create', 'gestor_examenes\\tareaController@createTask');	



Route::get('gestor_examenes/{id_curso}/materia/{tipo}/tarea/{id}/edit', 'gestor_examenes\\tareaController@edit');
Route::post('/gestor_examenes/{id_curso}/tarea/upload', 'gestor_examenes\\tareaController@store');
Route::get('gestor_examenes/{id_curso}/materia/tarea/{id_tarea}/destroy', 'gestor_examenes\\tareaController@destroy');
//Route::post('/upload','gestor_examenes\\tareaController@postUpload');
Route::get('/probando_test', 'gestorusuarioController@ellasefue');
Route::post('/probando2_test/lola', 'gestorusuarioController@envio');
Route::resource('admin/enviado', 'gestor_examenes\\enviadoController');

Route::get('/gestor_examenes/{id_curso}/enviar/{id}/edit', 'gestor_examenes\\tareaController@editEnviar');
Route::resource('gestor_examenes/tarea', 'gestor_examenes\\tareaController');
Route::get('/gestor_examenes/enviar/{id_curso}/{id}/create', 'gestor_examenes\\enviadoController@create');
Route::get('gestor_examenes/{id_curso}/envio', 'gestor_examenes\\enviadoController@listar');
Route::get('gestor_examenes/{id_curso}/materia/{tipo}/tarea/{id_tarea}/edit', 'gestor_examenes\\tareaController@edit');
Route::get('/gestor_examenes/{id_curso}/tarea/{tipo}/{id}/update', 'gestor_examenes\\tareaController@update');


Route::get('/gestor_examenes/{id_curso}/tareas/recibidos', 'gestor_examenes\\enviadoController@tareas_recibidos');


Route::get('/gestor_examenes/{id_curso}/{id}/entregar_tarea','gestor_examenes\\entregadoController@mostrar_formulario');
//gestor_examenes.tareasrecibidos.recibidos
//Route::get('/gestor_examenes/{id_curso}/tareas/recibidos', 'gestor_examenes\\enviadoController@tareas_recibidos');
Route::resource('gestor_examenes/entregado', 'gestor_examenes\\entregadoController');
Route::post('/gestor_examenes/{id_curso}/archivo/{id}/upload','gestor_examenes\\entregadoController@store');
Route::resource('admin/notificacion', 'Admin\\notificacionController');
Route::get('gestor_examenes/{id_curso}/tareas/recibidos/estudiantes','gestor_examenes\\entregadoController@index');
Route::get('gestor_planillas/{id_curso}/planilla/listar', 'gestor_planillas\\planillaController@listar');
Route::get('/gestor_planillas/{id_curso}/planilla/{id_user}/modificar','gestor_planillas\\planillaController@modificar');
Route::get('/gestor_planillas/{id_curso}/modificar/varios','gestor_planillas\\planillaController@modificar_notas');
Route::get('/gestor_planillas/{id_curso}/planilla/{id_user}/{id_examen}/calificar', 'gestor_planillas\\planillaController@calificar');
Route::resource('gestor_planillas/planilla', 'gestor_planillas\\planillaController');
Route::get('gestor_planillas/{id_curso}/ver/kardex', 'gestor_planillas\\planillaController@kardex');
Route::resource('gestor_examenes/respuesta_desarrollo', 'gestor_examenes\\respuesta_desarrolloController');