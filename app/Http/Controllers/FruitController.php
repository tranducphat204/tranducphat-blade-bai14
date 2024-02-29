<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        $model = new Fruit();
        $rows = $model->getRows();
        return view('fruits', ['model' => $rows]);
    }
}