<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function contact(Request $request)
    {
        try {
            //TODO: Cambiar correo electrónico por soywarmiglobal.edu@gmail.com
            Mail::to($request->email)->send(new ContactForm($request->all()));
            Toastr::success('Mensaje enviado, puedes seguir navegando, Gracias', 'Enviado', [
                'positionClass' => 'toast-bottom-right',
                'progressBar' => true,
                'duration' => 2000,
                'closeButton' => true,
            ]);

            return redirect()->route('home');
        } catch (\Throwable $th) {
            Toastr::error('Error al enviar el mensaje', 'Error', [
                'positionClass' => 'toast-bottom-right',
                'progressBar' => true,
                'duration' => 2000,
                'closeButton' => true,
            ]);

            return redirect()->route('home');
        }
    }
}
