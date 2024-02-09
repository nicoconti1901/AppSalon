<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController{
    public static function login(Router $router){
        $router->render('auth/login');
    }

    public static function logout(){
        echo "Desde el logout";
    }

    public static function olvide(Router $router){
        $router->render('auth/olvide-password', [
            
        ]);
    }

    public static function recuperar(){
        echo "Desde el logout";
    }

    public static function crear(Router $router){
        $usuario = new Usuario;
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario-> sincronizar($_POST);
            //Validar
            $alertas = $usuario -> validarCuentaUsuario();
        }
        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
            
        ]);
    }
}