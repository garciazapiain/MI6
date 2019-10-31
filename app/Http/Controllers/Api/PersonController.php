<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        $selected = Person::limit(10)->orderby('name')->get();
        return $selected;
    }
}
