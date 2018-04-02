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

    public function viewAuthor(int $id)
    {
        $author = Author::findOrFail($id);
        return view('author/view_author', ['author' => $author]);
    }
}
