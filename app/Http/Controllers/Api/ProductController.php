<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\Product;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group Product Management
 * Class ProductController
 * @package App\Http\Controllers\Api
 * @authenticated
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * Get all products with their category from the database and display the resource.
     * @apiResource App\Http\Resources\ProductResource
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * Perform validation of product creation request amd store product information on the database amd return the created resource.
     * @param StoreProductRequest $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(StoreProductRequest $request)
    {
        //Authorize those with policy to create product to be able to create product
        $this->authorize('create', Product::class);
        //Request data
        $data = $request->all();
        if (Product::create($data)) { // Create product if validation passes
            return response()->json([
                'success' => 'Product created successfully',
                'data' => $data
            ], 201);
        } else {
            return response()->json([
                'error' => 'Something went wrong. Please try again'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * Get the information of a specified resource and display the information.
     * @apiResource App\Http\Resources\ProductResource
     * @param Product $product
     * @return ProductResource
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * Validate incoming request fdr resource update and update the resource on successful validation
     * @apiResource App\Http\Resources\ProductResource
     * @param StoreProductRequest $request
     * @param Product $product
     * @return ProductResource
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Search if a particular resource exists and delete it if it does.
     * @param Product $product
     * @return Response
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
