@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="col-md-6 offset-md-3">

        <h3 class="text-center">Edit Biodata</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.update',$biodata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6 offset-md-3">

          <strong>Name :</strong>
          <input type="text" name="name" class="form-control" value="{{$biodata->name}}">
        </div>
        <div class="col-md-6 offset-md-3">

          <strong>Details :</strong>
          <textarea class="form-control" name="details" rows="8" cols="80">{{$biodata->details}}</textarea>
        </div>

        <div class="col-md-6 offset-md-3" style="margin-top:20px;">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection
