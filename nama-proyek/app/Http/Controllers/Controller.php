<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}


use Illuminate\Http\Request;

class DataInputController extends Controller
{
    public function showForm()
    {
        return view('data-input'); // Pastikan nama file blade adalah 'data-input.blade.php'
        {
            dd('Form muncul');
            return view('data-input');
        }
        
    }
}
