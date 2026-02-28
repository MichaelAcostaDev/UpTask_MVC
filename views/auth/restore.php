<div class="contenedor restore">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nuevo password</p>

        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <?php if ($mostrar) { ?>


            <form method="POST" class="formulario">

                <div class="campo">
                    <label for="password">password</label>
                    <input type="password" id="password" placeholder="Tu password" name="password" value="">
                </div>

                <input type="submit" class="boton" value="Guardar password">
            </form>

        <?php } ?>

        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            <a href="/forget">Olvidaste tu password?</a>
        </div>
    </div> <!-- Contenedor Sm  --->
</div>