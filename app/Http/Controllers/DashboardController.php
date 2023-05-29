<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.principal'); 
    }

    public function administrativos() {
        return view('dashboard.administrativo');
    }

    public function entrenadores() {
        return view('dashboard.entrenador');
    }

    public function disciplinas() {
        return view('dashboard.disciplina');
    }

    public function secciones() {
        return view('dashboard.seccion');
    }

    public function maquinas() {
        return view('dashboard.maquina');
    }

    public function horarios() {
        return view('dashboard.horario');
    }

    public function grupos() {
        return view('dashboard.grupo');
    }

    public function paquetes() {
        return view('dashboard.paquete');
    }

    public function duraciones() {
        return view('dashboard.duracion');
    }

}
