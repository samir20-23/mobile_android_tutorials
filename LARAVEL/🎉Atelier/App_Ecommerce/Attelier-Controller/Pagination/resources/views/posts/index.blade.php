<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            text-align: center;
            color: #5a5a5a;
            font-weight: bold;
        }

        .list-group-item {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
        }

        .list-group-item:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .list-group-item h2 {
            color: #007bff;
        }

        .list-group-item p {
            color: #666;
        }

        .icon {
            margin-right: 10px;
            color: #007bff;
        }

        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <h1 class="mb-4"><i class="fas fa-list-alt"></i> Posts</h1>

        <!-- Display Total Posts Count -->
        <p class="text-center"><strong>Total Posts:</strong> {{ $totalPosts }}</p>

        <!-- Loop through Posts -->
        <div class="list-group">
            @foreach($posts as $post)
                <div class="list-group-item">
                    <h2><i class="fas fa-book icon"></i> {{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            <!-- Display Pagination Links -->
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Include Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
