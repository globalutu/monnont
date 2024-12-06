<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation de l'entrée
        $request->validate([
            'email' => 'required|email|unique:newsletters,email', // Vérifiez que la table newsletters existe
        ]);

        // Ajout de l'email dans la base de données
        try {
            \DB::table('newsletters')->insert(['email' => $request->email, 'created_at' => now()]);
            return response()->json(['message' => 'Vous êtes maintenant abonné à notre newsletter !'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue. Veuillez réessayer.'], 500);
        }
    }
}