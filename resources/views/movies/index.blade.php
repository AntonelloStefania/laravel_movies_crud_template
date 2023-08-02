@extends('layouts.app')
@section('content')   
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
                
                  @foreach ($movies as $movie)
                  <a href="{{route('movies.show', $movie->id)}}">
                        <div class="col col-lg-2 col-md-4 col-sm-12">
                            <div class="card mb-3 " >
                                <img src="{{$movie->img}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="">{{$movie->genre}}</h5>
                                    <h5 class="">{{$movie->name}}</h5>
                                
                                    <a class="btn btn-sm btn-primary" href="{{route('movies.edit', $movie->id)}}">modifica</a> 
                                    <form action="{{route('movies.destroy', $movie->id)}}" onsubmit="return confirm('Press ok to confirm')" class="d-block" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger mx-2">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach 
            </div>
        </div>
    </section>
@endsection