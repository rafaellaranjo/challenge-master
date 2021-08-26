<?php


namespace App\Services;


use App\Models\Hint;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HintService extends BaseService implements HintServiceInterface
{

    public function __construct(Hint $model)
    {
        parent::__construct($model);
    }

    public function getPaginateHints(Request $request)
    {
        $count_items = 10;
        $limit = $request['count_items'] ?? $count_items;

        return $this->model::where('type', 'like', "%".$request['type']."%")
            ->where('brand', 'like', "%".$request['brand']."%")
            ->where('model', 'like', "%".$request['model']."%")
            ->where('version', 'like', "%".$request['version']."%")
            ->paginate($limit);
    }
}
