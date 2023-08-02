@extends('layouts.app')
@section('content')   
    <section class="bg-black pt-5">
        <div class="container">
            <div class="row">
                
                  @foreach ($movies as $movie)
                    <div class="col col-lg-2 col-md-4 col-sm-12">
                            <div class="card mb-3 " >
                                <img src="{{$movie->img}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->title}}</h5>
                                    <h5 class="card-title">{{$movie->genre}}</h5>
                                    <h5 class="card-title">{{$movie->title}}</h5>
                                </div>
                            </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
@endsection