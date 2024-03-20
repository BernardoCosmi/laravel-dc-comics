<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
  public function index()
  {
      $comic = Comic::all();

      return view('pages.comics.index', compact('comics'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view('pages.comics.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|unique:posts'
    ]);


    $form_data= $request->all();
    $new_comic = new Comic();

    $new_comic->fill($form_data);
    $new_comic->save();

    return redirect()->route('comics.show', ['comic' =>$new_comic->id]);
  }

  /**
   * Display the specified resource.
   */
  public function show(Comic $comic)
  {
    // $comic = Comic::findOrFail($id);

    return view('pages.comics.show', compact('comic'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $comic = Comic::findOrFail($id);
    return view('pages.comics.edit', compact('comic'));
      
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $form_data= $request->all();
      
    $comic = Comic::find($id);
    $new_comic->update($form_data);

    return redirect()->route('comics.show', ['comic' => $comic->id]);

  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
      $comic = Comic::find($id);
      $comic->delete();

      return redirect()->route('comics.index');
  }

}
