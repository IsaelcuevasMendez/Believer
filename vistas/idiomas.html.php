<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Idiomas</h3>
            <h4>Formulario para ingresar los Idiomas</h4>
            <fieldset>
                <input placeholder="Ingrese su nombre" name="nombre" type="text" tabindex="1" required autofocus>
            </fieldset>
            <!-- <fieldset>
                <input placeholder="Inserte su apellido" name="apellido" type="text" tabindex="2" required>
            </fieldset> -->
            <!-- <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                </fieldset> -->
            <div>
                <?php echo $_SESSION['mensaje'] ?? "" ?>
            </div>
            <fieldset>
                <button name="insetar" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>

    <div class="container2">
        <section class="codepen-tabla">
            <div class="tbl-header">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Idiomas</th>
                            <th>Ultima actualizacion</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table>
                    <tbody>


                        <?php

                        while ($dato = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>
                                    <td>{$dato['language_id']}</td>
                                    <td>{$dato['name']}</td>
                                    <td>{$dato['last_update']}</td>
                                        <td>
                                            <a class='codepen-table' href='idiomas.php?eliminar={$dato['language_id']}'><img src='imagen/editar.png' alt='Editar'></a>
                                            <a class='codepen-table' href='idiomas.php?editar={$dato['language_id']}'><img src='imagen/eliminar.png' alt='Eliminar'></a>
                                        </td>
                                </tr>";
                        }
                    

                        ?>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<?php require_once 'vistas/parte/foot.php'; ?>