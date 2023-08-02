@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="fw-bold">Modifica Film</h2>
        </div>
    </div>
    <div>
        <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="w-50">
        @csrf
        @method('PUT')
            {{-- titolo --}}
            <div class="form-group py-3">
                <label class="control-label">Titolo</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="titolo" value="{{ $movie->name }}">
            </div>
            {{-- link immagine --}}
            <div class="form-group py-3">
                <label class="control-label">Link Immagine</label>
                <input type="text" id="img" name="img" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $movie->img }}">
            </div>
            {{-- link immagine --}}
            <div class="form-group py-3">
                <label class="control-label">Genere</label>
                <input type="text" id="genre" name="genre" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $movie->genre }}">
            </div>
            {{-- link immagine --}}
            <div class="form-group py-3">
                <label class="control-label">Voto</label>
                <input type="text" id="vote" name="vote" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $movie->vote }}">
            </div>
            {{-- link immagine --}}
            <div class="form-group py-3">
                <label class="control-label">Lingua Originale</label>
                <input type="text" id="original_language" name="original_language" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $movie->original_language }}">
            </div>
            {{-- link immagine --}}
            <div class="form-group py-3">
                <label class="control-label">Lunghezza</label>
                <input type="text" id="length" name="length" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $movie->length }}">
            </div>


            {{-- submit --}}
            <div class="form-group">
                <button class="btn btn-success" type="submit">modifica</button>
            </div>
        </form>
    </div>
</div>

@endsection