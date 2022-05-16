<?php require_once 'includes/helpers.php';?>
<!--BARRA LATERAL-->

<div id="login" class="bloque"> 
    <h3>Identificate</h3>
    <form action="login.php" method="POST">
       <label for="email">Usuario</label>
       <input type="email" name="email"/>
       <label for="password">Contraseña</label>
       <input type="password" name="password"/>

       <input type="submit" value="Entrar"/>

    </form>
</div>



