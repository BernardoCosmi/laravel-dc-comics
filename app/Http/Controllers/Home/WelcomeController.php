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
      return view('pages.welcome', compact('comics'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view('welcome.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
      $validateData = $request -> validate([
          'title'=>'required',
          'description'=>'required',
          'thumb'=>'required',
          'price'=>'required',
          'series'=>'required',
          'sale_date'=>'required',
          'type'=>'required',
      ]);

      $comic = Comic::create($validateData);
      return redirect() ->route('welcome.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Comic $comic)
  {
      return view('welcome.show', compact('comic'));
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
