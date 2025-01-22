@extends('products.layouts.app')
@section('content')
<button><a id="show" href="{{route('products.create')}}">create product</a></button>

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <button class="btn btn-sm btn-warning edit" data-id="{{ $product->id }}">Edit</button>
                    <button class="btn btn-sm btn-danger delete" data-id="{{ $product->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
@section('script')
<script>
    $(document).ready(function () {
        // Show the create product modal
        $(document).on('click', '#show', function (e) {
            e.preventDefault();

            let url = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: url,
                success: function (res) {
                    bootbox.dialog({
                        title: "Create Product",
                        message: "<div class='createForm'></div>",
                    });

                    $('.createForm').html(res);
                }
            });
        });

        // Handle form submission for adding a product
        $(document).on('submit', '#addProduct', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{ route('products.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res.status === 200) {
                        bootbox.alert({
                            title: "Success",
                            message: res.message,
                            callback: function () {
                                location.reload(); // Reload to update the product list
                            }
                        });
                    } else if (res.status === 400) {
                        let errors = res.errors;
                        let errorMessages = '';

                        for (let field in errors) {
                            errorMessages += `<p>${errors[field][0]}</p>`;
                        }

                        bootbox.alert({
                            title: "Validation Errors",
                            message: errorMessages
                        });
                    }
                },
                error: function () {
                    bootbox.alert({
                        title: "Error",
                        message: "Something went wrong. Please try again."
                    });
                }
            });
        });
    });
</script>


@endsection
