<?php


    // Basic Controller logic
        namespace App\Http\Controllers;
        use App\Models\Product;
        use Illuminate\Http\Request;
        use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;

class ProductController extends Controller
        {
                // Display list of Product
            public function index()
            {
                return view('products.index', ['products' => Product::all()]);
            }

            // Display specific product

            public function show(string $id)
            {
                return view('products.show', ['product'=> Product::findOrFail($id)]);
            }



            // Request & Response in Laravel
            public function store(Request $request)
            {
                $name = $request->input('name');
                return "your name is $name";
            }


        }

        // Request and Response
    Route::post('/user', function (Request $request) {
        // call data input one field

        $id = $request->input('id');

        // Property access
        $name=$request->name;


        // Display data all
        $all = $request->all();

        // Display one field you want
        $only = $request->only(['name','email']);

        // Retrive all data if only cannot

        $except = $request->except(['password']);

        return $name;


            // checking input or not
        if($request->has('name')){
            // has field email
        }

        if($request->filled('email')){
            // have or not
        }

        // Retrive Query and string
        $keyword = $request->query('keyboard');

        // retrive file upload
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $path = $file->store('avatars');   // save in storage
        }


    });







?>
