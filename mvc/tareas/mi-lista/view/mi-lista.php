<h1 class="text-center">Nueva Tarea</h1>
<hr>
<section class="row">
    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
        <h3 class="text-center"></h3>
        <hr>
        <ul class="list-group">
            <li class="list-group-item bg-primary text-white">
                <a href="/mvc/tareas/registro" class="btn btn-link text-white">Nueva Tarea</a>
            </li>
            <li class="list-group-item">
                <a href="/mvc/tareas" class="btn btn-link">Tareas</a>
            </li>
        </ul>
    </div>
    <div class="col">
        <h3 class="text-center">Tareas</h3>
        <hr>
        <?php
         include_once(".app/tareas/repositorio/tareas.repository.php");

         $tareas = TareasRepository::getInstance() ->getAllTareas();

         print_r($tareas)
        ?>
    </div>
</section>