<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService implements UserServiceInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store($data)
    {
        $data['password'] = Hash::make($data['password']);
        return parent::store($data);
    }
}
