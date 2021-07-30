<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Actores</h3>
            <h4>Formulario para ingresar los actores</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" required>
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
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>

    <div class="container">
        <section class="codepen-tabla">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>


                        <?php

                        while ($dato = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>
                                    <td>{$dato['actor_id']}</td>
                                    <td>{$dato['first_name']}</td>
                                    <td>{$dato['last_name']}</td>
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