<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $allRows = Chat::all();
        return view("pages", [
            'rows' => $allRows
        ]);
    }

    public function table() {
        $allRows = Chat::all();
        return view("table", [
            'rows' => $allRows
        ]);
    }

    public function addMessage(Request $request) {
        $model = new Chat();
        $model->author = $request->input("author");
        $model->message = $request->input("message");
        $model->save();
        return $model;
    }
}
