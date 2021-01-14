<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>Agenda de Contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form action="#" class="contacto">
        <legend>Añade contacto <span>Todos los campos son obligatorios</span></legend>

        <?php include 'inc/layout/form.php' ?>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar contacto ...">
        
        <p class="total-contactos"><span>1</span> Contactos</p>

        <div class="contenedor-tabla">
            <table id="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Constantin</td>
                        <td>DDConsulting</td>
                        <td>643453462</td>
                        <td>
                            <a class="btn-editar btn" href="edit.php?id=1"><i class="fas fa-pen-square"></i></a>
                            <button data-id="" type="button" class="btn-borrar btn"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/layout/footer.php'; ?>