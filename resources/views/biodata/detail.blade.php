@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card text-center">
    <div class="card-header">
      <strong>Details</strong>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$biodata->name}}</h5>
      <p class="card-text">{{$biodata->details}}</p>
      <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="card-footer text-muted">
      <span>Biodata of {{$biodata->name}}</span>
    </div>
  </div>
      </div>
    </div>
  </div>
@endsection
