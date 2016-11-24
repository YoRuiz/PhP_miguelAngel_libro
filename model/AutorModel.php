<?php


class AutorModel implements JsonSerializable
{
    private $codigo;
    private $nombre;
    private $apellidos;
    private $nacionalidad;

    public function __construct($cod,$nom,$ape,$nac)
    {
        $this->codigo=$cod;
        $this->nombre=$nom;
        $this->apellidos=$ape;
        $this->nacionalidad=$nac;
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
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'nacionalidad' => $this->nacionalidad
        );
    }

    //para serializacion y deserializacion
    public function __sleep(){
        return array('codigo','nombre' , 'apellidos' , 'nacionalidad');
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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * @param mixed $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }
}