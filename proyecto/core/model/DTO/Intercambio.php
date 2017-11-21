<?php
class Intercambio{

    public $idintercambio;
    public $nombre;
    public $fecha_ini;
    public $fecha_fin;
    public $lugar;
    public $direccion;
    public $fecha;
    public $hora;
    public $usuario_idusuario;
    public $estatus;

    function __construct() {
        $this->idintercambio = 0;
        $this->nombre = "";
        $this->fecha_ini = "";
        $this->fecha_fin = "";
        $this->lugar = "";
        $this->direccion = "";
        $this->fecha = "";
        $this->hora = "";
        $this->usuario_idusuario = 0;
        $this->estatus = "";
    }

    function getIdintercambio() {
        return $this->idintercambio;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaIni() {
        return $this->fecha_ini;
    }

    function getFechaFin() {
        return $this->fecha_fin;
    }

    function getLugar() {
        return $this->lugar;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function getUsuarioIdusuario() {
        return $this->usuario_idusuario;
    }

    function getEstatus() {
        return $this->estatus;
    }



    function setIdintercambio($idintercambio) {
        $this->idintercambio = $idintercambio;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaIni($fecha_ini) {
        $this->fecha_ini = $fecha_ini;
    }

    function setFechaFin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setUsuarioIdusuario($usuario_idusuario) {
        $this->usuario_idusuario = $usuario_idusuario;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

}
