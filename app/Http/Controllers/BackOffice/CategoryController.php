<?php

namespace DurianSoftware\Http\Controllers\BackOffice;

use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\CategoryFormRequest;
use DurianSoftware\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search', '');
        if (request()->has('search')) {
            $categories = $this->categoryRepository->search(
                [
                    ['name', 'LIKE', '%' . $search . '%'],
                    ['description', 'LIKE', '%' . $search . '%']
                ],
                20
            );
        } else {
            $categories = $this->categoryRepository->getModel()->withTrashed()->paginate(20);
        }

        return view('backOffice.category.index', compact('categories', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platform_id = 1;

        return view('backOffice.category.create', compact('platform_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\CategoryFormRequest|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $this->categoryRepository->create($request->all());

        return redirect()->route('category.index')->with('success', 'Create category success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->findById($id);

        return view('backOffice.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findById($id);

        return view('backOffice.category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\CategoryFormRequest|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $this->categoryRepository->update($id, $request->only(['name', 'description', 'status']));

        return redirect()->route('category.index')->with('success', 'Update category success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! $this->categoryRepository->delete($id)) {
            return back()->withErrors('Delete category failure');
        };

        return redirect()->route('category.index')->with('success', 'Delete category success');
    }

    public function restore($id)
    {
        $this->categoryRepository->restore($id);

        return redirect()->route('category.index')->with('success', 'Restore category success');
    }
}
