<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryRoles;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('partials.category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return void
     */
    public function show(Category $category)
    {
        dd($category, $category->categoryroles, $category->categoryroles[0]->user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return void
     */
    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        Category::create($data);

        $category = Category::query()
            ->where('name', $data['name'])
            ->first();

        $role = new CategoryRoles;
        $role->role_name = 'user';
        $role->category_id = $category->id;
        $role->permissions = json_encode([]);
        $role->save();

        $role = new CategoryRoles;
        $role->role_name = 'Admin';
        $role->category_id = $category->id;
        $role->permissions = json_encode([]);
        $role->save();

        $categoryRole = CategoryRoles::query()
            ->where('category_id', $category->id)
            ->where('role_name', 'Admin')
            ->first();

        DB::table('user_category_role')->insert([
           'user_id' => Auth::id(),
           'category_role_id' => $categoryRole->id,
        ]);

        return redirect()
            ->route('category.show', ['category' => $data['name']])
            ->withSuccess(['Created category']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Category $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
