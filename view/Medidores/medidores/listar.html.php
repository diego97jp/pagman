<div class="card-panel">
    <div class="container">
        <h4 class="header2">Listado de t&iacute;pos de medidor</h4>
        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('') ?>">Panel de control</a></li>
            <li><a href="#">Medidores</a></li>
            <li class="active">Listado T&iacute;pos de medidor</li>
        </ol>
        <!--Fin rastro de miga-->

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : Recuerde que si va modificar un t&iacute;po de medidor, el campo Acr&oacute;nimo s&oacute;lo permite 3 caracteres</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php $errores=getErrores();
        if(!$errores==""){?>
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    <p><i class="mdi-alert-error"></i> 
                        <?php echo $errores?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } ?>
        <!--Fin mensaje de campos obligatorios-->
        <form class="col s12">
                <div class="input-field">
                    <i class="mdi-action-search prefix"></i>
                    <input type="text" class="active" id="buscarMed" name='buscarMed' class="header-search-input z-depth-2" data-url="<?php echo crearUrl("Medidores", "Medidores", "buscador", array('noVista' => "noVista")) ?>" />
                    <label for="icon_prefix" class="active">Buscador de Medidores</label>
                </div>
            </form>
        
        <div id="buscarMedidor">
            
        </div>
        
            
                <?php //$paginado->render();?>
    </div>
</div>