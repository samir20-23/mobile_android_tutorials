<!-- resources/views/courses.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Search</title>
</head>
<body>
    <h1>Search Courses</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('courses.search') }}">
        <input type="text" name="query" placeholder="Search for a course..." value="{{ request('query') }}">
        <select name="category">
            <option value="">All Categories</option>
            <option value="Laravel" {{ request('category') == 'Laravel' ? 'selected' : '' }}>Laravel</option>
            <option value="PHP" {{ request('category') == 'PHP' ? 'selected' : '' }}>PHP</option>
            <option value="JavaScript" {{ request('category') == 'JavaScript' ? 'selected' : '' }}>JavaScript</option>
            <option value="React" {{ request('category') == 'React' ? 'selected' : '' }}>React</option>
            <option value="CSS" {{ request('category') == 'CSS' ? 'selected' : '' }}>CSS</option>
        </select>
        <button type="submit">Search</button>
    </form>

    <h2>Available Courses</h2>
    <ul>
        @foreach($courses as $course)
            <li>{{ $course->title }} - {{ $course->category }}</li>
        @endforeach
    </ul>
</body>
</html>
