<?php


class AutorModel implements JsonSerializable
{
    private $codigo;
    private $id_usuario;
    private $id_libro;
    private $fecha_alquiler;
    private $fecha_entrega;

    public function __construct($cod,$usu,$lib,$fec1,$fec2)
    {
        $this->codigo=$cod;
        $this->id_usuario=$usu;
        $this->id_libro=$lib;
        $this->fecha_alquiler=$fec1;
        $this->fecha_entrega=$fec2;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */

    //Needed if the properties of the class are private.
    //Otherwise json_encode will encode blank objects
    function jsonSerialize()
    {
        return array(
            'codigo' => $this->codigo,
            'id_usuario' => $this->id_usuario,
            'id_libro' => $this->id_libro,
            'fecha_alquiler' => $this->fecha_alquiler,
            'fecha_entrega' => $this->fecha_alquiler
        );
    }

    //para serializacion y deserializacion
    public function __sleep(){
        return array('codigo','id_usuario' , 'id_libro' , 'fecha_alquiler','fecha_entrega');
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getIdLibro()
    {
        return $this->id_libro;
    }

    /**
     * @param mixed $id_libro
     */
    public function setIdLibro($id_libro)
    {
        $this->id_libro = $id_libro;
    }

    /**
     * @return mixed
     */
    public function getFechaAlquiler()
    {
        return $this->fecha_alquiler;
    }

    /**
     * @param mixed $fecha_alquiler
     */
    public function setFechaAlquiler($fecha_alquiler)
    {
        $this->fecha_alquiler = $fecha_alquiler;
    }

    /**
     * @return mixed
     */
    public function getFechaEntrega()
    {
        return $this->fecha_entrega;
    }

    /**
     * @param mixed $fecha_entrega
     */
    public function setFechaEntrega($fecha_entrega)
    {
        $this->fecha_entrega = $fecha_entrega;
    }

}