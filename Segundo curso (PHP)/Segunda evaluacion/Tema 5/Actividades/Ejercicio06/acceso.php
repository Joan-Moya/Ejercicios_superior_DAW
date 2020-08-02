<?php
include('acl.php');
include('funciones.php');
        if (isset($_POST['usuario']) && isset($_POST['pass'])){

            $usuario=$_POST['usuario'];
            $pass=$_POST['pass'];
                if (accesoUsuario($usuarios, $usuario, $pass)){

                    $id_usu = devuelveId($usuario, $usuarios);
                    $id_rol = devuelveRol($id_usu, $usuarios_roles);
                    $listaPermisos = devuelvePermisos($id_rol, $roles_permisos);

                    echo "Nombre: ".muestraUsuario($id_usu, $usuarios)."<br>";
                    echo "Rol: ".muestraRol($id_rol, $roles)."<br>";
                    echo "Permisos: ".muestraPermisos($listaPermisos, $permisos);
                } else {
                    echo "Usuario o Contraseña incorrectos.";
                }
        }else{
            ?>
            <meta charset="UTF-8">
                <form action="" method="POST">
                    Usuario: <input type="text" name="usuario"><br>
                    Contraseña: <input type="password" name="pass"><br>
                    <input type="submit" value="Acceso">
                </form>
            <?php
            }
?>