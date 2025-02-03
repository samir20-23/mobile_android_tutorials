<div class="card" id="createProduct">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Ajouter un produit</h3>
    </div>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf <!-- Protection contre les attaques CSRF -->
        <div class="card-body">
            <!-- Champ : Nom du produit -->
            <div class="form-group">
                <label for="name">Nom du produit</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Entrez le nom du produit" required>
            </div>
            
            <!-- Champ : Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Entrez une description" required></textarea>
            </div>
            
            <!-- Champ : Prix -->
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Entrez le prix" step="0.01" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
