<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
        public function showForm()
        {
            // Lógica para exibir o formulário
            return view('forms');
        }

}
