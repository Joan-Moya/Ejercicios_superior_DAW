<?php
        function accesoUsuario($usuarios, $usuario, $pass){
            $existe = false;
                foreach($usuarios as $valor){
                    if ($valor[3]==$usuario && $valor[4]==$pass){
                            $existe=true;
                            break;
                }
            }
             return $existe;
            }
     
        function devuelveId($usuario, $usuarios){
            $id_usu = 0;
                foreach($usuarios as $valor){
                    if ($valor[3]==$usuario){
                        $id_usu = $valor[0];
                        break;
                    }
                }
                return $id_usu;
                }

        function devuelveRol($id_usu, $usuarios_roles){
            $id_rol = 0;
                foreach($usuarios_roles as $valor){
                    if ($valor[0]==$id_usu){
                        $id_rol = $valor[1];
                        break;
                    }
                }
                return $id_rol;
                }

        function devuelvePermisos($id_rol, $roles_permisos){
            $id_permisos = array();

            foreach($roles_permisos as $valor){
                    if ($valor[0]==$id_rol){
                        array_push($id_permisos, $valor[1]);
                    }
                }
                return $id_permisos;
                }

        function muestraUsuario($id_usu, $usuarios){
             $nombreCompleto = "";
                foreach($usuarios as $valor){
                    if ($valor[0]==$id_usu){
                        $nombreCompleto=$valor[1]." ".$valor[2];
                        break;
                        }
                    }
                    return $nombreCompleto;
                    }

        function muestraRol($id_rol, $roles){
                $rol = "";
                foreach($roles as $valor){
                    if ($valor[0]==$id_rol){
                        $rol=$valor[1];
                        break;
                    }
                }
                return $rol;
        }

        function muestraPermisos($listaPermisos, $permisos){
                 $nombrePermisos = "";
                    foreach ($listaPermisos as $valor){
                        foreach($permisos as $dato){
                            if ($dato[0]==$valor){
                                $nombrePermisos.=$dato[1]." ";
                            }
                        }
                    }
            return $nombrePermisos;
        }
?>       