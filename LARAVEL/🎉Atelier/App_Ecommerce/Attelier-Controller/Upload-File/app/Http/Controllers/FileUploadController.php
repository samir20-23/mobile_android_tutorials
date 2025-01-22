<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showForm()
    {
        // Affiche formulaire de upload
        return view('file-upload');
    }

    public function upload(Request $request)
    {
        // Valider le fichier uploadé
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Sauvegarder le fichier uploadé
        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        // Retourner une confirmation
        return back()->with('success', 'Fichier uploadé avec succès !')->with('file', $fileName);
    }
}
