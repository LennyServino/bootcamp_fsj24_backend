<?php

abstract class Personas{
    public $nombre;
    public $telefono;
    public $correo;
    public $nivel_academico;
}

interface AsignarHorario{
    public function assignSchedule($schedule);
}

class Profesor extends Persona implements AsignarHorario{
    public function assignSchedule($schedule)
    {
        // code..
    }
}

class Director extends Persona implements AsignarHorario{
    public function assignSchedule($schedule)
    {
        // code..
    }
}

class ProfesorInvitado{
    public function disponibilidad($horarios){
        // code..
    }
}