
<form action="{{ route('products.store') }}" method="POST" id="addProduct">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" required>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" placeholder="Enter product price" name="price" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" placeholder="Enter product description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" placeholder="Enter stock quantity" name="stock" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
