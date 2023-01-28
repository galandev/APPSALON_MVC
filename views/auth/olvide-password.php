<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Introduce tu email para restablecer tu password</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">Volver a Inicio de Sesión</a>
    <a href="/crear-cuenta">Crear una nueva cuenta</a>
</div>