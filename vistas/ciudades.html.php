<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Ciudades</h3>
            <h4>Formulario para ingresar los Ciudades</h4>

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
                            <th>Ciudad</th>
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
                                    <td>{$dato['city_id']}</td>
                                    <td>{$dato['city']}</td>
                                    <td>{$dato['country_id']}</td>
                                    <td>{$dato['last_update']}</td>
                                    <th>
                                        <a class='codepen-table' href='ciudades.php?editar={$dato['city_id']}'><img src='imagen/editar.png' alt='Editar'></a>
                                        <a class='codepen-table' href='ciudades.php?eliminar={$dato['city_id']}'><img src='imagen/eliminar.png' alt='Eliminar'></a>
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