<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\Recipients\Recipient;
use App\Notifications\ResumeReceivedNotification;

class ResumeController extends Controller
{
    public function index() {
        $educations = [
            'fundamental' => 'Ensino Fundamental',
            'medio' => 'Ensino Médio',
            'tecnico' => 'Curso Técnico',
            'superior' => 'Ensino Superior',
            'pos' => 'Pós-graduação',
            'mestrado' => 'Mestrado',
            'doutorado' => 'Doutorado'
        ];

        return view('welcome', compact('educations'));
    }

    public function store(Request $request) {
        $rules = [
            "name" => "required|string|min:3",
            "email" => "required|email",
            "phone" => "required|string|min:8|max:15",
            "role" => "required",
            "education" => "required",
            "resume" => "required|file|mimes:pdf,docx,doc|max:1024",
            "time" => "required|date_format:Y-m-d\TH:i"
        ];

        $messages = [
            "name.required" => "Nome é obrigatório!",
            "name.min" => "Nome deve ter no mínimo 3 caracteres!",
            "email.required" => "Email é obrigatório!",
            "email.email" => "Email inválido!",
            "phone.required" => "Telefone é obrigatório!",
            "phone.min" => "Telefone deve ter no mínimo 8 dígitos!",
            "phone.max" => "Telefone deve ter no máximo 15 dígitos!",
            "role.required" => "Selecione seu cargo desejado!",
            "education.required" => "Escolaridade é obrigatória!",
            "resume.required" => "Currículo é obrigatório!",
            "resume.file" => "Currículo deve ser um arquivo!",
            "resume.mimes" => "Arquivo deve ser PDF, DOCX ou DOC!",
            "resume.max" => "O currículo não pode ter mais que 1MB!",
            "time.required" => "Data e hora é um campo obrigatório!",
            "time.date_format" => "Formato de data e hora inválido!"
        ];

        $request->validate($rules, $messages);

        $path = $request->file('resume')->store('resumes', 'public');

        $resume = Resume::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "role" => $request->role,
            "education" => $request->education,
            "observations" => $request->observations,
            "file" => $path,
            "send_date" => $request->time,
            "ip" => $request->ip()
        ]);

        $rh = new Recipient(env('RH_EMAIL'));
        $rh->notify(new ResumeReceivedNotification($resume));

        return redirect()->back()->with("success", "Currículo enviado com sucesso!");
    }
}
