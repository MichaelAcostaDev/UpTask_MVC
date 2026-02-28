<div class="contenedor login">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar sesion</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email" value="">
            </div>

            <div class="campo">
                <label for="password">password</label>
                <input type="password" id="password" placeholder="Tu password" name="password" value="">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>

        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            <a href="/forget">Olvidaste tu password?</a>
        </div>
    </div> <!-- Contenedor Sm  --->
</div>