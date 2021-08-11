<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Categoria</h3>
            <h4>Formulario para ingresar las categorias</h4>

            <input type="hidden" name="id" value="<?php echo $info['category_id'] ?? '' ?>">

            <fieldset>
                <input placeholder="Ingrese su nombre" name="nombre" type="text"
                    value="<?php echo $info['name'] ?? ''?>" tabindex=" 1" required autofocus>
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
                            <th>Categoria</th>
                            <th>Ultima Actualizacion</th>
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
                                    <td>{$dato['category_id']}</td>
                                    <td>{$dato['name']}</td>
                                    <td>{$dato['last_update']}</td>
                                    <th>
                                    <a class='codepen-table' href='categorias.php?eliminar={$dato['category_id']}'><img src='imagen/editar.png' alt='Editar'></a>
                                    <a class='codepen-table' href='categorias.php?editar={$dato['category_id']}'><img src='imagen/eliminar.png' alt='Eliminar'></a>
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