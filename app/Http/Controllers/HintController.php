<?php


namespace App\Http\Controllers;


use App\Http\Requests\CreateHintRequest;
use App\Providers\RouteServiceProvider;
use App\Services\HintServiceInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HintController extends Controller
{
    private $service;

    public function __construct(HintServiceInterface $hintService)
    {
        $this->service = $hintService;
    }

    public function index(Request $request)
    {
        $data =  $this->service->getPaginateHints($request);
        return view('dashboard', $data->toArray());
    }

    public function create()
    {
        return view('create');

    }

    public function store(CreateHintRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        $this->service->store($data);
        return view('create', 201);

    }

}
