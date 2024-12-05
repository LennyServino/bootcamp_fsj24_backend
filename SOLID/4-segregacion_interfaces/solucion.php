<?php
interface AcademicManagements {
    public function registerStudent();
    public function assignProfessor();
}

interface Payments{
    public function registerPayment();
}

class Course implements AcademicManagements {
    public function registerStudent() {
        // Código para inscribir estudiante
    }

    public function assignProfessor() {
        // Código para asignar profesor
    }
}