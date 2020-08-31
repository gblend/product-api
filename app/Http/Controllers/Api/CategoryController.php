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

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
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
     * @param StoreCategoryRequest $request
     * @return JsonResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();
        $name = '';
        if ($request->hasFile('photo')) {
            $path = 'storage/uploads';
            $photo = $request->file('photo');
            $name = $path . '/' . uniqid() . '.' . $photo->extension();
            move_uploaded_file($name, $path);
        }
        $data['photo'] = $name;
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
     * @param StoreCategoryRequest $request
     * @param Category $category
     * @return CategoryResource
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('photo')) {
            //Delete category photo from folder
            unlink($category->photo);
        }
        $category->update($request->all());
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
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
