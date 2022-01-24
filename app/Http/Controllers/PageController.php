<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function index() {
        return view("pages");
    }
    public function addMessage(Request $request) {
        $model = new Chat();
        $model->message = $request->input("message");
        $model->author = "lena@gmail.com";
        $model->save();
        return redirect("/pages");
    }
}
