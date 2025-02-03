<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $productRepo ;
    public function __construct(ProductRepository $productRepo){
        $this->productRepo = $productRepo ;
    }
        
  
    public function index()
    {
        //
        $products = Product::all() ;
        return view('products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'nom' => 'required',
        ]);

        if( $validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $product = new Product();
            $product->name = $request->name;
            $product->save();

            return response()->json([
                'status' => 200,
                'message' => 'created successfuly'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
