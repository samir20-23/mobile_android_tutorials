@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="{{ url('/contact') }}">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="msg" id="message" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
