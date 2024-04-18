
<?php

include 'BD/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Games</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="home.php" class= "logo">Logo</a>
            <input type="checkbox" id = "menu"/>
            <label for="menu">
                <img src="public/images/menu.png"class = "menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <div class = "buttons">
                        <a href="juegos.php" class =" btn-1">Productos</a>
                        <a href="contacto.php" class=" btn-1">Contacto</a>
                    </div>
                    
                </ul>
            </nav>
        </div>

        <section class = "popular container">
        <h2>Registros de ventas</h2>
        </section>
        
    </header>

     <?php

                    $libreria = new  DBGGestionLibreria();
                    $libros = $libreria->getDetalle_venta();
                    //var_dump($libros);

                   
                   
                    


                    ?>



<div class="card-container">
    <?php foreach ($libros as $libro): ?>
        <div class="card">
            
            <div class="container">
                <h4>ID de las tiendas:<br><b><?php echo $libro['id_tienda']; ?></b></h4>
                <br>
                <p>Numero de orden: <?php echo $libro['num_orden']; ?></p>
                <p>ID Titulo: <?php echo $libro['id_titulo']; ?></p>
                <p>Cantidad: <?php echo $libro['cantidad']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    
    <section class = "contact container">

        <div class = "contact-content">
            <h3>Subscribete a nuestro blog</h3>
            <form action="">
                <input type="email" placeholder="Escribe tu correo">
                <input type="submit" class="btn-3" value="Enviar"> 

            </form>
        </div>

    </section>


    <footer class="footer container">
        <div class="link">
            <a href="#" class="logo">Logo</a>
        </div>

        <div class="link">
            <ul>
                <li><a href=""></a>Inicio</li>
                <li><a href=""></a>Servicios</li>
                <li><a href=""></a>Productos</li>
                <li><a href=""></a>Contacto</li>
            </ul>
            
        </div>

    </footer>

</body>
</html>