<?php


namespace App\Services;



use Illuminate\Database\Eloquent\Model;

class BaseService implements BaseServiceInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function all()
    {
        return $this->model::all();
    }

    public function show($id)
    {

        return $this->model::find($id);
    }

    public function delete($id)
    {
        return $this->model::find($id)->delete();
    }

    public function store($data)
    {
        return $this->model::firstOrCreate($data);
    }

    public function update($data, $id)
    {
        return $this->model::find($id)->update($data);
    }
}
