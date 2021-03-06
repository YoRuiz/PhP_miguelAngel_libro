<?php


class LibroModel implements JsonSerializable
{
    private $codigo;
    private $nombre;
    private $editorial;
    private $ejemplares;

    public function __construct($cod,$nom,$edi,$eje)
    {
        $this->codigo=$cod;
        $this->nombre=$nom;
        $this->editorial=$edi;
        $this->ejemplares=$eje;
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
            'editorial' => $this->editorial,
            'ejemplares' => $this->ejemplares
        );
    }

    //para serializacion y deserializacion
    public function __sleep(){
        return array('codigo','nombre' , 'editorial' , 'ejemplares');
    }


    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $titulo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $titulo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * @param mixed $codigo
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    /**
     * @return mixed
     */
    public function getEjemplares()
    {
        return $this->ejemplares;
    }

    /**
     * @param mixed $numpag
     */
    public function setEjemplares($ejemplares)
    {
        $this->ejemplares = $ejemplares;
    }

}