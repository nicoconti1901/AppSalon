<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicio de sesion con tus datos</p>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu password">
    </div>
    <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aun no tienes una cuenta?</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>