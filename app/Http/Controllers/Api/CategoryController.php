<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Product;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use function GuzzleHttp\Psr7\str;

/**
 * @group Category Management
 * Class CategoryController
 * @package App\Http\Controllers\Api
 * @authenticated
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * Get all products with their category from the database and display the resource.
     * @return AnonymousResourceCollection
     * @apiResource App\Http\Resources\CategoryResource
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return CategoryResource::collection($categories);
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
     * @param StoreCategoryRequest $request
     * @return JsonResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();
        $photo = '';
        if ($request->hasFile('photo')) {
            $path = 'public/uploads';
            $file = $request->file('photo');
            $photo = $path . '/' . uniqid() . '.' . strtolower($file->getClientOriginalExtension());
            $file->move($path, $photo);
        }
        $data['photo'] = $photo;
        if (Category::create($data)) {
            return response()->json([
                'message' => 'Category created successfully',
                'data' => $data
            ], 200);
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
     * @apiResource App\Http\Resources\CategoryResource
     * @param Category $category
     * @return CategoryResource
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return void
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * Validate incoming request fdr resource update and update the resource on successful validation
     * @apiResource App\Http\Resources\CategoryResource
     * @param StoreCategoryRequest $request
     * @param Category $category
     * @return CategoryResource
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $data = $request->all();
        $photo = '';
        if ($request->hasFile('photo')) {
            //Delete old category photo from folder
            unlink($category->photo);
            $path = 'public/uploads';
            $file = $request->file('photo');
            $photo = $path . '/' . uniqid() . '.' . strtolower($file->getClientOriginalExtension());
            $file->move($path, $photo);
        }
        $data['photo'] = $photo;
        $category->update($data);
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Search if a particular resource exists and delete it if it does.
     * @param Category $category
     * @return Application|ResponseFactory|Response
     * @throws Exception
     */
    public function destroy(Category $category)
    {
        //Delete category photo from folder
        unlink($category->photo);
        $category->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
