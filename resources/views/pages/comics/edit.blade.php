@extends('layouts.app')

@section('title', 'Dc Comics | Edit Edit')

@section('content')
    <main>
        <h2 class="text-light m-3">Modifica un fumetto</h2>

        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-light">
                
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                        value="{{ old('title') ?? $comic->title }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{!! old('description') ?? $comic->description !!}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        name="thumb"
                        id="thumb"
                        value="{{ old('thumb') ?? $comic->thumb }}"
                    />
                </div>


                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id="price"
                        value="{{ old('price') ?? $comic->price }}"

                    />
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input
                        type="text"
                        class="form-control"
                        name="series"
                        id="series"
                        value="{{ old('price') ?? $comic->price }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Data</label>
                    <input
                        type="text"
                        class="form-control"
                        name="date"
                        id="date"
                        value="{{ old('date') ?? $comic->date }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                        value="{{ old('type') ?? $comic->type }}"
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary m-3"
                >
                    Crea
                </button>


            </form>
        </div>
    </main>
@endsection