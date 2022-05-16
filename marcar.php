<?php require_once 'includes/cabecera.php'; ?>


    <!--CAJA PRINCIPAL-->
    <div id="principal">

    <form class="formulario ">
            <fieldset>
              
            <div class="contenedor-campos ">
                <div class="campo ">
                    <label>Nombre</label> <input class="input-text " type=" text " placeholder=" Nombre " />
                </div>
                <div class="campo ">
                    <label>Apellido</label> <input class="input-text " type=" tel " placeholder=" Apellido" />
                </div>
                <div class="campo ">
                    <label>Ficha</label> <input class="input-text " type=" email " placeholder=" Ficha " />
                </div>
                <div class="campo ">
                    <label>Cedula</label> <input class="input-text " type=" text " placeholder=" Cédula " />
                </div>
            </div>
                <div class="alinear-derecha flex ">
                    <button class="boton w-100 ">Filtrar</button>
                </div>

            </fieldset>
        </form>
<table class="table">
    <thead>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Ficha</th>
    <th>Cédula</th>
    <th>Estado</th>
    <th>Acción</th>
</tr>
</thead>
<tr><td>Miguel Angel</td><td>Sosa Peombo</td> <td>5196</td> <td>4.731.369-6</td><td>SI</td> <td><a href="">Cambiar Estado</a></td></tr>
<tr><td>Miguel Angel</td><td>Sosa Peombo</td> <td>5196</td> <td>4.731.369-6</td><td>NO</td><td> <a href="">Cambiar Estado</a></td></tr>
<tr><td>Miguel Angel</td><td>Sosa Peombo</td> <td>5196</td> <td>4.731.369-6</td><td>SI</td><td><a href="">Cambiar Estado</a></td></tr>
<tr><td>Miguel Angel</td><td>Sosa Peombo</td> <td>5196</td> <td>4.731.369-6</td><td>NO</td><td><a href="">Cambiar Estado</a></td></tr>
</table>
        

    </div>

<?php require_once 'includes/footer.php'; ?>