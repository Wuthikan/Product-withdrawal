<?php

namespace DurianSoftware\Repositories;

use DurianSoftware\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Category();
    }
    /**
     * Get model instant
     * @return \DurianSoftware\Category
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get all records
     * @return mixed
     */
    public function all()
    {
        return $this->model->withTrashed()->get();
    }

    /**
     * @param $expressions
     * @param int $paginate
     *
     * @return $this
     *
     */
    public function search($expressions, $paginate = 20)
    {
        $query = $this->getModel();

        foreach ($expressions as $index => $expression) {
            if ($index === 0) {
                $query = $query->where($expression[0], $expression[1], $expression[2]);
            } else {
                $query = $query->orWhere($expression[0], $expression[1], $expression[2]);
            }
        }

        return $query->withTrashed()->paginate($paginate);
    }

    /**
     * Create Category
     *
     * @param $data
     *
     * @return \DurianSoftware\Category
     */
    public function create($data)
    {
        $model = $this->model;

        return $model->create($data);
    }

    /**
     * Update data
     *
     * @param $id
     * @param $data
     *
     * @return bool
     */
    public function update($id, $data)
    {
        $category = $this->findById($id);

        return $category->update($data);
    }

    /**
     * @param $id
     *
     * @return \DurianSoftware\Category
     */
    public function findById($id)
    {
        $model = $this->model->withTrashed()->where('id', $id)->first();

        if (!$model) {
            throw new ModelNotFoundException();
        }

        return $model;
    }

    /**
     * @param $id
     * @param bool $force
     *
     * @return bool|null
     */
    public function delete($id)
    {
        $category = $this->findById($id);

        if ($category->trashed()) {
            return $category->forceDelete();
        }

        return $category->delete();
    }

    /**
     * Restore data from soft delete
     *
     * @param $id
     *
     * @return bool|null
     */
    public function restore($id)
    {
        $category = $this->findById($id);

        return $category->restore();
    }
}
