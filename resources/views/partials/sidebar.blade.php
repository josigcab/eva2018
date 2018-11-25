<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


   

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" >
            <li class="header">EVA UMSS</li>
            <!-- Optionally, you can add icons to the links -->
              {{-- */$id_user=Auth::id();   
             /* --}}
             {{-- */$id_rol=DB::table('role_user')->where('user_id', $id_user)->first();
                   $id_rol=$id_rol->role_id;    
             /* --}}
             {{-- */$name_rol=DB::table('roles')->where('id', $id_rol)->first();
                    $name_rol=$name_rol->nombre_rol;
             /* --}}
               @if($name_rol=='docente') 
                  <!--DOCENTE GESTOR-->

            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Gestor de Cursos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/curso/create') }}">Crear Curso</a></li>
                    <li><a href="{{ url('admin/curso_dicta') }}">Mis Cursos</a></li>
                </ul>
            </li>
               @elseif($name_rol=='estudiante')  
                <!--ESTUDIANTE GESTOR-->
         

            <li class="treeview ">
                <a href="#"><i class='fa fa-user'></i> <span>Gestor de Cursos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                 <li><a href="{{ url('admin/curso/index_todo/todo')}}">Mis Cursos</a></li>
                 <li><a href="{{ url('admin/curso/vista_inscribirse/cursos') }}">Inscribirse a una materia</a></li>
                 <li><a href="{{ url('admin/curso/desinscribirse/borrarmostrar')}}">Retirar una Materia</a></li>
                 
                
                    
                </ul>
            </li>

               @else
                   <li class="treeview active">
                <a href="#"><i class='fa fa-user'></i> <span>Gestor de Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Estudiantes</a></li>
                    <li><a href="{{ url('admin/docente') }}">Docentes</a></li>
                    <li><a href="{{ url('admin/administrador') }}">Administradores</a></li>
                    
                </ul>
                   </li>


                    <li class="treeview active">
                <a href="#"><i class='fa fa-user'></i> <span>Gestor de Cursos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/curso/create') }}">Crear Curso</a></li>

                    <li><a href="{{ url('admin/curso_dicta') }}">Todos los Cursos</a></li>

                   
                    

                </ul>
                    </li>
           


               @endif 
            
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
