<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Muestra la página de inicio de la prueba.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $aplicante = [
            'puntos' => 0,
            'nivel' => 1, // Iniciar en nivel 1
            'nombre' => 'Nelson H. Guevara R.',
            'aprobado' => false
        ];
    
        while ($aplicante['nivel'] < 20) { // Cambiar la condición para llegar al nivel 20
            $aplicante = $this->entrenar($aplicante);
        }
    
        $aplicante['aprobado'] = $this->evaluar($aplicante);
    
        return view('prueba')->with('aplicante', $aplicante);
    }

    /**
     * Entrena al aplicante para subir de nivel
     * @param array $aplicante
     * @return array
     */
    private function entrenar(array $aplicante)
    {
        $aplicante['puntos'] += 10 / $aplicante['nivel'];
        if ($aplicante['puntos'] >= 100) {
            $aplicante['nivel']++;
            $aplicante['puntos'] = 0;
        }
        return $aplicante;
    }

    /**
     * Valida el nivel del aplicante para saber si aprobó o no, el nivel de aprobación es 20
     * @param array $aplicante
     * @return bool
     */
    private function evaluar(array $aplicante)
    {
        return $aplicante['nivel'] >= 20;
    }
}
