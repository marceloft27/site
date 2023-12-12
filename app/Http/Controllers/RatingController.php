<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function store(Request $request)
    {
        // Valide a requisição, se necessário
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Adicione a nova classificação ao array na sessão
        session()->push('ratings', $request->input('rating'));

        // Salve os dados da sessão
        session()->save();

        // Redirecione de volta para a página do formulário
        return redirect()->back();
        dd(session('ratings'));
    }


    public function showAverages(Request $request)
    {
        // Recupere as classificações da sessão
        $ratings = $request->session()->get('ratings', []);
        // Calcule a média geral
        $overallAverage = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;

        // Calcule as médias para cada dimensão
        $totalDimensions = 8;
        $dimensionAverages = [];

        for ($i = 0; $i < $totalDimensions; $i++) {
            $dimensionRatings = array_slice($ratings, $i, count($ratings));

            $dimensionAverages["Dimensão " . ($i + 1)] = count($dimensionRatings) > 0 ? array_sum($dimensionRatings) / count($dimensionRatings) : 0;
        }

        // Retorne uma visão com os dados calculados
        return view('averages', compact('overallAverage', 'dimensionAverages'));
    }


}




