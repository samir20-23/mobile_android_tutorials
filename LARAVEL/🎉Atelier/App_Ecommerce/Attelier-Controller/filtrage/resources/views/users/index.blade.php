<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Filtrer les utilisateurs</h1>

    <!-- Formulaire de recherche -->
    <form action="{{ url('/users') }}" method="GET">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ request('name') }}">

        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="{{ request('email') }}">

        <label for="role">Rôle :</label>
        <select name="role" id="role">
            <option value="">Sélectionner un rôle</option>
            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>Utilisateur</option>
        </select>

        <button type="submit">Rechercher</button>
    </form>

    <h2>Liste des utilisateurs :</h2>
    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }}) - Rôle : {{ $user->role }}</li>
        @empty
            <li>Aucun utilisateur trouvé</li>
        @endforelse
    </ul>
</body>
</html>
