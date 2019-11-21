@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List of Biodata</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('biodata.create') }}">Create New Biodata</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Name</th>
        <th>Address</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($biodatas as $biodata)
        <tr>
          <td width = "50px"><b>{{++$i}}.</b></td>
          <td width = "300px">{{$biodata->name}}</td>
          <td>{{$biodata->details}}</td>
          <td>
            <form action="{{ route('biodata.destroy', $biodata->id) }}" method="post">
              @csrf
              <a class="btn btn-sm btn-success" href="{{route('biodata.show',$biodata->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('biodata.edit',$biodata->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $biodatas->links() !!}
  </div>
@endsection
