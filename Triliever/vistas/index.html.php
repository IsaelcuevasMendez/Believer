<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<body>
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


                </tbody>
                </table>
        </div>

        <!-- tabla y contenido-->
        <div class="centrar">
            <table class="rwd-table">
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
            <tbody>
                <?php
        while ($dato = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <th  scope='row'>{$dato['actor_id']}</th>
                    <td>{$dato['first_name']}</td>
                    <td>{$dato['last_name']}</td>
                    </tr>";
        }
        ?>
        </div>
        <script src="javascript/js.js"></script>
</body>

</html>