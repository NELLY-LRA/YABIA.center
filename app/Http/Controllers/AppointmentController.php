<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date',
            'message' => 'required|string|max:1000',
        ]);

        // Enregistrement en BD
        $appointment = Appointment::create($request->all());

        // Préparer le message WhatsApp
        $whatsappNumber = '237653336719'; // Numéro du centre (sans le +)
        $text = "📅 Nouveau Rendez-vous reçu \n\n"
              . "👤 Nom : {$appointment->name}\n"
              . "📧 Email : {$appointment->email}\n"
              . "📞 Téléphone : {$appointment->phone}\n"
              . "🗓 Date : {$appointment->date}\n"
              . "💬 Message : {$appointment->message}";

        // Redirection vers WhatsApp Web/App
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($text);

        return redirect($whatsappUrl);
     }
}
