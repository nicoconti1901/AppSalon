<?php

namespace Model;

class Usuario extends ActiveRecord {
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 
    'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? null;
        $this->confirmado = $args['confirmado'] ?? null;
        $this->token = $args['token'] ?? '';
    }

    //Mensaje de validacion para crear cuenta
    public function validarCuentaUsuario(){
        if(!$this->nombre){
            self::$alertas['error'][] = "Debes colocar tu nombre";
        }
        if(!$this->apellido){
            self::$alertas['error'][] = "Debes colocar tu apellido";
        }
        if(!$this->email){
            self::$alertas['error'][] = "Debes colocar tu email";
        }
        if(!$this->password){
            self::$alertas['error'][] = "Debes colocar tu contraseña";
        }
        if(!$this->telefono){
            self::$alertas['error'][] = "Debes colocar tu telefono";
        }
        if($this->admin){
            self::$alertas[] = "Debes colocar tu admin";
        }
        if($this->confirmado){
            self::$alertas[] = "Debes colocar tu confirmado";
        }
        if(!$this->token){
            self::$alertas[] = "Debes colocar tu token";
        }
        return self::$alertas;
    }

}
    
