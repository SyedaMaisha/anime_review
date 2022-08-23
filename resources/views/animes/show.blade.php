@extends('layouts.app')

@section('content')

    <div class="card my-5">
        <img src="{{$anime->image}}" class="card-image-top" alt="...">

        <div class="card-body">
            <h1 >{{ $anime->title }}</h1>

            <div class="text-danger">
                @for ($i = 1; $i<= $anime->ratings; $i++)
                    <i class=" fas fa-star"></i>
                @endfor

            </div>

            <p class="card-text">{{ $anime->description }}</p>


            <h3> Characters
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class=" fas fa-plus"></i>
                </button>
            </h3>
            <ul class="list-group list-group-flush">

                <li class="list-group-item"> <span class="text-muted font-italic"> </span> 

                    <form action="#" method="POST">

                        <button type="submit" class="btn btn-link text-danger float-right"> Delete</button>
                    </form>

                </li>


            </ul>
            <br>
            

            <h3> Reviews </h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b> </b>


                    <form action="#" method="POST">
                        <button type="submit" class="btn btn-link text-danger float-right"> Delete</button>
                    </form>
            
                </li>


                
            </ul>
            <form action="" method ="POST">
                @csrf
                <textarea class="form-control" name="review" placeholder=" Give Your Review" rows="10"></textarea>
                <button type="submit" class="btn btn-primary mt-2 float-right"> Review </button>
            </form>

        </div>

        <div class="card-footer">
            <form action="#">
                <button type="submit" class="btn btn-primary float-right"> Delete </button>
            </form>
        </div>



    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Character</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-6">
                        <h1>Character Role</h1>
                        <form action="{{route('anime_character_store', $anime->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                
                                <label for="">Character Name</label>
                                <select name="character_anime_name" class="form-control">
                                    <option value="" disabled selected>Choose Character</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Character Role</label>
                                <input type="text" class="form-control" name="character_anime_role">
                            </div>
                            <button type="submit" class="btn btn-primary" float-right>Submit</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h1>New Character</h1>
                        <form action="{{ route('characters.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Character Name</label>
                                <input type="text" class="form-control" name="character_name">
                            </div>
                            <div class="form-group">
                                <label for="">Character Image</label>
                                <input type="text" class="form-control" name="character_image">
                            </div>
                            <button type="submit" class="btn btn-primary" float-right>Submit</button>
                        </form>
                    </div>

                </div>
            

            
            
            
            </div>

        </div>
        </div>
    </div>

@endsection