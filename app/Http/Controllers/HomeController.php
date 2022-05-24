<?php

namespace App\Http\Controllers;

use App\Mail\FoloSupportTeam;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // Envoyer un message à l'assistance
    public function sendMessage(Request $request)
    {
        $data = $request->all();
        try {
            Mail::to('contact@foloschool.com')->send(new FoloSupportTeam($data['customer_name'], $data['customer_email'], $data['customer_subject'], $data['customer_message']));
            return response()->json([
                'success' => true,
                'message' => 'Votre message a bien été envoyé',
            ]);
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue',
            ], 400);
        }
    }
}
