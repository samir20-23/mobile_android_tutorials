<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request)
    {       
        // Retrieve courses based on search query and category filter
        $query = $request->input('query');
        $category = $request->input('category');

        $courses = Course::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', '%' . $query . '%');
        })
        ->when($category, function ($queryBuilder) use ($category) {
            return $queryBuilder->where('category', $category);
        })
        ->get();

        return view('courses', compact('courses'));
    }
}
