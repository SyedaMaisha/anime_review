@extends('layouts.app')

@section('content')
    <h1> <span class="text-success"> ALL ANIMES  </span>
        
        <a href="{{route('animes.create')}}" class='btn btn-dark'><i class="fa fa-plus"></i></a>
    </h1>
    

    <div class="row">
        @foreach ($animes as $anime)
        <div class="col-md-4">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="{{$anime->image}}">
                <div class="card-body">
                    <h1 class="card-title"><a href="{{route('animes.show', $anime->id)}}">{{$anime->title}} </a> </h1>
                    <div class="text-danger">
                        @for ($i = 1; $i<= $anime->ratings; $i++)
                            <i class=" fas fa-star"></i>
                        @endfor

                    </div>
                    <p>{{Str::limit($anime->description, 100)}}</p>
                </div>
            </div>
        </div>


        @endforeach
    </div>
@endsection