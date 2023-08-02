@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ Route('movies.index') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="col-12 my-5">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header d-flex justify-content-center align-items-center text-center">
                        <!-- Title -->
                        <h2 class="fs-4 fw-bold py-2">{{ $movie->name }}</h2>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row justify-content-around">
                            <!-- Image -->
                            <!-- Left -->
                            <div class="col-4 d-flex justify-content-center">
                                <img src="{{ $movie->img }}" alt="banner-image" class="img-fluid border border-black border-5">
                            </div>
                            <div class="col-6">
                                <div class="row py-5">
                                    <!-- Right-->
                                    <div class="col-12 my-3">
                                        <h3>Lingua:</h3>
                                        <h5>{{$movie->original_language}}</h5>
                                    </div>  
                                    <div class="col-12 my-3">
                                        <h3>Genere:</h3>
                                        <h5>{{$movie->genre}}</h5>
                                    </div>  
                                    <div class="col-12 my-3">
                                        <h3>Voto:</h3>
                                        <h5>{{$movie->vote}}</h5>
                                    </div>   
                                    <div class="col-12 my-3">
                                        <h3>Lunghezza film:</h3>
                                        <h5>{{$movie->length}}</h5>
                                    </div>  
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <!-- Edit Button -->
                                <a href="{{ Route('movies.edit', $movie) }}" class="btn btn-warning mx-2">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form action="{{ Route('movies.destroy', $movie) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection