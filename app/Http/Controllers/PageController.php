<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Services;
use App\Models\Dossiers;
use App\Models\Team;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $services = Services::all();
        $dossierCount = Dossiers::count();
        $dossierWithDateCount = Dossiers::whereNotNull('datedebut')->count();
        $teamMembers = Team::all(); // Récupération des membres de l'équipe
        $testimonials = Testimonial::all(); // Récupération des témoignages

        return view('font-end.index', compact('contact', 'services', 'dossierCount', 'dossierWithDateCount', 'teamMembers', 'testimonials'));
    }

    public function about()
    {
        $contact = Contact::first();
        $services = Services::all();
        $dossierCount = Dossiers::count();
        $dossierWithDateCount = Dossiers::whereNotNull('datedebut')->count();
        $teamMembers = Team::all(); // Récupération des membres de l'équipe
        $testimonials = Testimonial::all(); // Récupération des témoignages

        return view('font-end.about', compact('contact', 'services', 'dossierCount', 'dossierWithDateCount', 'teamMembers', 'testimonials'));
    }

    public function Services()
    {
        $contact = Contact::first();
        $services = Services::all();
        $dossierCount = Dossiers::count();
        $dossierWithDateCount = Dossiers::whereNotNull('datedebut')->count();
        $teamMembers = Team::all(); // Récupération des membres de l'équipe
        $testimonials = Testimonial::all(); // Récupération des témoignages

        return view('font-end.service', compact('contact', 'services', 'dossierCount', 'dossierWithDateCount', 'teamMembers', 'testimonials'));
    }
    public function Contact()
    {
        $contact = Contact::first();
        $services = Services::all();
        $dossierCount = Dossiers::count();
        $dossierWithDateCount = Dossiers::whereNotNull('datedebut')->count();
        $teamMembers = Team::all(); // Récupération des membres de l'équipe
        $testimonials = Testimonial::all(); // Récupération des témoignages

        return view('font-end.Contact', compact('contact', 'services', 'dossierCount', 'dossierWithDateCount', 'teamMembers', 'testimonials'));
    }
}