<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(Request $request)
    {
        $list = BookModel::query()->with('author');
        $search = $request->get('search');
        if ($search)
        {
            $list = $list->where('title', 'like', '%'.$search.'%');
        }
        return view('books', [
            'list' => $list->get(),
            'search' => $search
        ]);
    }
}
