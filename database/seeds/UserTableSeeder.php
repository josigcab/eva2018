<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([    //administrador
            'name' => 'admin',
            'apellido' => 'admin',
            'direccion' => 'c:/sucre #1111 ',
            'telefono' => '60000000',
            'genero' => 'm',
            'email' => 'admin@umss.edu',
            'password' => bcrypt('administrador')
            ]);
        factory(App\User::class)->create([       //docente
            'name' => 'jezelp',
            'apellido' => 'poma',
            'direccion' => 'c:/sucre #1000 ',
            'telefono' => '40000000',
            'genero' => 'f',
            'email' => 'je123@gmail.com',
            'password' => bcrypt('administrador')
            ]);



         factory(App\User::class)->create([      //estudiante
            'name' => 'yela',
            'apellido' => 'zelaya',
            'direccion' => 'c:/lanza #39 ',
            'telefono' => '70000000',
            'genero' => 'm',
            'email' => 'yela@gmail.com',
            'password' => bcrypt('yela123')
            ]);

         factory(App\User::class)->create([
            'name' => 'alex',
            'apellido' => 'Nose',
            'direccion' => 'c:/heroinas #46 ',
            'telefono' => '79000000',
            'genero' => 'm',
            'email' => 'ale@gmail.com',
            'password' => bcrypt('ale12345')
            ]);
        factory(App\User::class)->create([
            'name' => 'Jhonatan',
            'apellido' => 'pol',
            'direccion' => 'c:/guerrilleros #222 ',
            'telefono' => '72290479',
            'genero' => 'm',
            'email' => 'chizo@gmail.com',
            'password' => bcrypt('chizo123')
        ]);
        factory(App\User::class)->create([
            'name' => 'patricio',
            'apellido' => 'Meneses',
            'direccion' => 'c:/aniceto arze #333 ',
            'telefono' => '73767252',
            'genero' => 'm',
            'email' => 'patricio@gmail.com',
            'password' => bcrypt('pato123')
        ]);
        factory(App\User::class)->create([
            'name' => 'santi',
            'apellido' => 'mamani',
            'direccion' => 'c:/primero de mayo #444 ',
            'telefono' => '67568124',
            'genero' => 'm',
            'email' => 'santi@gmail.com',
            'password' => bcrypt('santiago')
        ]);
        factory(App\User::class)->create([
            'name' => 'Miki',
            'apellido' => 'Rodriguez',
            'direccion' => 'c:/blasco nunez #555 ',
            'telefono' => '78325467',
            'genero' => 'm',
            'email' => 'miki@gmail.com',
            'password' => bcrypt('miki123')
        ]);


        DB::table('role_user')->insert(
        ['user_id' => 1, 'role_id' => 1]
        ); 
        DB::table('role_user')->insert(
        ['user_id' => 2, 'role_id' => 2]
        );

        DB::table('role_user')->insert(
        ['user_id' => 3, 'role_id' => 3]
        );
        DB::table('role_user')->insert(
            ['user_id' => 4, 'role_id' => 3]
        );
        DB::table('role_user')->insert(
            ['user_id' => 5, 'role_id' => 3]
        );
        DB::table('role_user')->insert(
            ['user_id' => 6, 'role_id' => 3]
        );
        DB::table('role_user')->insert(
            ['user_id' => 7, 'role_id' => 3]
        );

      

        // DATOS PARA LA TABLA "TIPO DE PREGUNTAS"
        DB::table('tipo_preguntas')->insert(
                ['id'=> 1, 'tipo'=> 'complemento']
        );
        DB::table('tipo_preguntas')->insert(
                ['id'=> 2, 'tipo'=> 'desarrollo']
        );
        DB::table('tipo_preguntas')->insert(
                ['id'=> 3, 'tipo'=> 'seleccion simple']
        );

        DB::table('tipo_preguntas')->insert(
                ['id'=> 4, 'tipo'=> 'falso/verdadero']
        );

         DB::table('tipo_preguntas')->insert(
                ['id'=> 5, 'tipo'=> 'seleccion multiple']
        );

        // DATOS PARA LA TABLA DE CURSO

        DB::table('cursos')->insert([
            'id' => 1,
            'nombre' => 'Ingenieria de Software',
            'codigo' => 'IS'
        ]);

        DB::table('cursos')->insert([
            'id' => 2,
            'nombre' => 'Inteligencia Artificial',
            'codigo' => 'artificial'
        ]);

        // DATOS PARA LA TABLA CURSO_DICTAS

        DB::table('curso_dictas')->insert([
            'id' => 1,
            'grupo' => '1',
            'curso_id' => 1,
            'user_id' => 2

        ]);

        DB::table('curso_dictas')->insert([
            'id' => 2,
            'grupo' => '1',
            'curso_id' => 2,
            'user_id' => 2

        ]);
        // para la tabla de inscrito a una materia, se inscribio al estudiante jhosmar
        
        DB::table('curso_inscritos')->insert([
            'fecha' => date("Y-m-d"),
            'curso_id' => 1,
            'user_id' => 7
        ]);

        DB::table('curso_inscritos')->insert([
            'fecha' => date("Y-m-d"),
            'curso_id' => 2,
            'user_id' => 3
        ]);

        // DATOS PARA LA TABLA EXAMEN

        DB::table('examens')->insert([
            'id' => 1,
            'nombre_examen' => 'Primer Parcial',
            'estado_examen' => 1,
            'fecha_examen' => date("Y-m-d"),
            'puntaje_totalm' => 100,
            'id_cursos' => 1

        ]);


        // DATOS PARA LA TABLA PREGUNTAS

        DB::table('preguntas')->insert([
            'id' => 1,
            'nombre_pregunta' => 'el lenguaje ensamblador se situa:',
            'puntaje_pregunta' => 10,
            'tipo_pregunta_id' => 3,
            'examen_id' => 1,

        ]);

        // DATOS PARA LA TABLA MULTIPLES

        DB::table('multiples')->insert([
            'id' => 1,
            'respuesta' => 'mas cerca del lenguaje maquina',
            'correcta' => 1,
            'pregunta_id' => 1

        ]);

        DB::table('multiples')->insert([
            'id' => 2,
            'respuesta' => 'mas cerca de los lenguajes de alto nivel',
            'correcta' => 0,
            'pregunta_id' => 1

        ]);
        DB::table('multiples')->insert([
            'id' => 3,
            'respuesta' => 'no es un lenguaje',
            'correcta' => 0,
            'pregunta_id' => 1

        ]);

        DB::table('preguntas')->insert([
            'id' => 2,
            'nombre_pregunta' => 'un algoritmo es un conjunto de ',
            'puntaje_pregunta' => 10,
            'tipo_pregunta_id' => 1,
            'examen_id' => 1,

        ]);

        DB::table('simples')->insert([
            'id' => 1,
            'respuesta' => 'instrucciones',
            'pregunta_id' => 2

        ]);

        DB::table('preguntas')->insert([
            'id' => 3,
            'nombre_pregunta' => ' que es un bucle o ciclo ?  ',
            'puntaje_pregunta' => 10,
            'tipo_pregunta_id' => 2,
            'examen_id' => 1,

        ]);

        DB::table('desarrollos')->insert([
            'id' => 1,
            'respuesta' => 'Una sentencia que permite decidir si se ejecuta o no un bloque de codigo',
            'pregunta_id' => 3

        ]);

        DB::table('preguntas')->insert([
            'id' => 4,
            'nombre_pregunta' => ' int, char, float son algunos tipos de datos?  ',
            'puntaje_pregunta' => 10,
            'tipo_pregunta_id' => 4,
            'examen_id' => 1,

        ]);

        DB::table('falsoverdaderos')->insert([
            'id' => 1,
            'respuesta' => 1,
            'pregunta_id' => 4

        ]);


    }
}
