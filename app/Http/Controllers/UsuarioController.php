<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestEmail;

class UsuarioController extends Controller
{

    public function index()
    {
        return Usuario::get(['nome', 'email']);
        //return Usuario::all();
    }

    public function store(Request $request)

    {
        $request->validate([
            'nome' => 'required',
            'email' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (Usuario::whereEmail($value)->count() > 0) {
                        $fail('O ' .$attribute.' informado já está em uso.');
                    }
                }]
        ]);

        $input = $request->all();

        $input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $record = Usuario::create($input);
        $this->sendMail($record->id);
        return $record;
    }

    public function show($id)
    {
        return Usuario::findOrfail($id);

    }

    public function sendMail($id)
    {
        $record = Usuario::findOrfail($id);
        
        Mail::to($record->email)->send(new MyTestEmail($record));
       
    }

}
  