@extends('layouts.app')

@section('title', 'Dc Comics | Create Create')

@section('main')
    <main>
        <h2>Crea un nuovo prodotto</h2>

        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                    />
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        name="thumb"
                        id="thumb"
                    />
                </div>


                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id="price"
                    />
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input
                        type="text"
                        class="form-control"
                        name="series"
                        id="series"
                    />
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Data</label>
                    <input
                        type="text"
                        class="form-control"
                        name="date"
                        id="date"
                    />
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Crea
                </button>


            </form>
        </div>
    </main>
@endsection