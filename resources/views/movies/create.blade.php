@extends ('layouts.app')


@section('content')
    <main>
        <div class="container-fluid bg-dark">
            <div class="row justify-content-center">
                <h2 class=" fw-bold text-white text-center mt-4">Aggiungi Film</h2>
                <div class="col-4 fw-bold card my-5  p-4">
                    <form action="{{route('movies.store')}}" method="POST">
                        @csrf
                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Nome
                            </label>
                            <input class="ps-3 form-control" type="text" id="name" name="name"  value="">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Immagine:
                            </label>
                            <input class="ps-3 form-control" type="text" id="img" name="img" value="">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Genere:
                            </label>
                            <input class="ps-3 form-control" type="text" id="genre" name="genre" value="">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Voto:
                            </label>
                            <input class="ps-3 form-control" type="text" id="vote" name="vote" value="">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Lingua originale:
                            </label>
                            <input class="ps-3 form-control" type="text" id="language" name="original_language" value="">
                        </div>
                        
                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                               Durata:
                            </label>
                            <input class="ps-3 form-control" type="text" id="durata" name="length" value="">
                        </div>

                        <div class="col-12 d-flex justify-content-center py-4">
                            <button type="submit" class="btn btn-md btn-success">Aggiungi Film</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

@endsection