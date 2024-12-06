<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Définir le nom de la table si ce n'est pas le pluriel par défaut
    protected $table = 'contacts';

    // Attributs qui peuvent être remplis en masse (Mass Assignment)
    protected $fillable = [
        'adresse',
        'telephone_1',
        'telephone_2',
        'email',
        'heures_ouverture_1',
        'twitter_url',
        'facebook_url',
        'youtube_url',
        'linkedin_url',
        'logo',  // Nous permet de stocker le nom du fichier du logo
    ];

    // Vous pouvez ajouter des méthodes supplémentaires si nécessaire
}