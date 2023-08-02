@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ Route('movies.index') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="col-12 my-5">
                <div class="card text center">
                    <!-- Card Header -->
                    <div class="card-header d-flex justify-content-center align-items-center text-center">
                        <!-- Title -->
                        <h2 class="fs-4 fw-bold">{{ $movie->name }}</h2>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <!-- Image -->
                            <div class="col-12  d-flex justify-content-center">
                                <img src="{{ $movie->img }}" alt="banner-image" class="img-fluid border border-black border-5">
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-center">
                                <!-- Edit Button -->
                                <a href="{{ Route('movies.edit', $movie) }}" class="btn btn-warning>
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