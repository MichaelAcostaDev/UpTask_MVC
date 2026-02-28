<div class="contenedor forget">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu password</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>


        <form action="/forget" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email" value="">
            </div>

            <input type="submit" class="boton" value="Enviar instrucciones">
        </form>

        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            <a href="/">Ya tienes cuenta? Iniciar sesion</a>
        </div>
    </div> <!-- Contenedor Sm  --->
</div>