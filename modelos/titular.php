<?php

class Titular
{
    public $Direccion;
    public $NroDocumento;
    public $ApellidoNombre;

    public function ValidarDatos()
    {
        $Mensaje = null;

        if ($this->Direccion == null) {

            $Mensaje = 'La direccion es obligatoria';
        }

        if ($this->NroDocumento == null) {

            $Mensaje = $Mensaje . '-El Numero de Documento es obligatorio';
        }

        if ($this->ApellidoNombre == null) {

            $Mensaje = $Mensaje . '-El Apellido y Nombre es obligatorio';
        }
        return $Mensaje;
    }
}
