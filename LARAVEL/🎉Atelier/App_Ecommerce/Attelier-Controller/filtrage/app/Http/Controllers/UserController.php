<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Création d'une requête de base pour les utilisateurs
        $query = User::query();

        // Si un nom est fourni, filtre par nom
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Si un email est fourni, filtre par email
        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        // Si un rôle est fourni, filtre par rôle
        if ($request->has('role')) {
            $query->where('role', $request->input('role'));
        }

        // Récupère les utilisateurs filtrés
        $users = $query->get();

        // Retourne la vue avec les utilisateurs filtrés
        return view('users.index', compact('users'));
    }
}
