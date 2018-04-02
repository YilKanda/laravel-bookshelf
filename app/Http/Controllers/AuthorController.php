<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function listAuthors()
    {
        $authors = Author::all();
        return view('author/list_authors', ['authors' => $authors]);
    }
}
