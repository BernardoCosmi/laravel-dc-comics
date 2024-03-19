<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class WelcomeController extends Controller
{
  public function index()
  {
      $comics = Comic::all();

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
    $comic = Comic::findOrFail($id);

    return view('pages.comics.show', compact('comic'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
      //
  }

}
