<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function listAuthors() : View
    {
        $authors = Author::all();
        return view('author/list_authors', ['authors' => $authors]);
    }

    public function viewAuthor(int $id) : View
    {
        $author = Author::findOrFail($id);
        return view('author/view_author', ['author' => $author]);
    }

    public function createAuthor() : View
    {
        $author = new Author();
        return view('author/edit_author', [
            'title' => 'Create new author',
            'cancelUrl' => route('authors.list'),
            'author' => $author
        ]);
    }

    public function editAuthor(int $id) : View
    {
        $author = Author::findOrFail($id);
        return view('author/edit_author', [
            'title' => 'Edit ' . $author->name,
            'cancelUrl' => route('authors.view', [$author->id]),
            'author' => $author
        ]);
    }

    public function updateAuthor(AuthorRequest $request, $id = null) : Response
    {
        if ($id === null) {
            $author = new Author();
        } else {
            $author = Author::findOrFail($id);
        }

        // Note: The data in $request has been validate
        $author->fill($request->validated());
        $author->save();

        return redirect()->route('authors.view', [$author->id]);
    }
}
