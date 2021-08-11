<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Actores</h3>
            <h4>Formulario para ingresar los actores</h4>

            <input type="hidden" name="id" value="<?php echo $info['actor_id'] ?? '' ?>">

            <fieldset>
                <input placeholder="Ingrese su nombre" name="nombre" value="<?php echo $info['first_name'] ?? '' ?>"
                    type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <select name="pais">
                    <option value="">Seleccione un país</option>

                    <?php
                foreach ( $resultPais as $pais ) {
                    echo "<option value='{$pais['country_id']}'>{$pais['country']}</option>";
                }

            ?>
                </select>

            </fieldset>
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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Acciones</th>
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
                                    <td>{$dato['actor_id']}</td>
                                    <td>{$dato['first_name']}</td>
                                    <td>{$dato['last_name']}</td>
                                    <th>
                                        <a class='codepen-table' href='actores.php?editar={$dato['actor_id']}'>Editar</a>
                                        <a class='codepen-table' href='actores.php?eliminar={$dato['actor_id']}'>Eliminar</a>
                                    </th>
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