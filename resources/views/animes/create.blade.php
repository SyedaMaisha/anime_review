@extends('layouts.app')

@section('content')

      <div class="card my-5">
            <div class="card-body">
                  <h1 >Add New Anime</h1>
                  <form action="{{route('animes.store')}}" method ="POST">
                        @csrf
                        <div class="form-group">
                              <label>Title</label>
                              <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                              <label>Image</label>
                              <input type="text" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                              <label>Ratings</label>
                              <input type="text" class="form-control" name="ratings">
                        </div>
                        <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="description" rows="10" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 float-right"> Submit </button>
                  </form>
            </div>
      </div>

@endsection