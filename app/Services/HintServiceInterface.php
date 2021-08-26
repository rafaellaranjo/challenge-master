<?php


namespace App\Services;


use Illuminate\Http\Request;

interface HintServiceInterface extends BaseServiceInterface
{
    public function getPaginateHints(Request $request);
}
