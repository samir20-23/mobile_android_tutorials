@extends('admin.layouts.app')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Produits</h3>
            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-right" id="addProduct">
                Ajouter un produit
            </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="productsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }} DH</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
            <div class="text-center">
                {{ $products->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            // Quand on clique sur le bouton "Ajouter un produit"
            $(document).on('click', '#addProduct', function (e) {
                e.preventDefault();

                // Récupère l'URL de la route 'products.create'
                let url = $(this).attr('href');
                console.log(url)

                // Effectuer une requête Ajax vers cette URL
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        // Créer une boîte de dialogue avec Bootbox.js
                        bootbox.dialog({
                            title: "Créer un produit",
                            message: "<div class='createForm'></div>"
                        });

                        // Insère la réponse HTML (le formulaire de création) dans la boîte de dialogue
                        $('.createForm').html(response);
                    }
                });
            });

            // Lors de la soumission du formulaire de création via Ajax
            $(document).on('submit', '#createProductForm', function (e) {
                e.preventDefault();
                
                let formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('products.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        // Si tout se passe bien, vous pouvez faire un rafraîchissement ou une autre action
                        location.reload();  // Recharge la page pour voir le produit ajouté
                    }
                });
            });
        });
    </script>
@endsection
