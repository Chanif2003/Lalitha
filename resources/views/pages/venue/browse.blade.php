@extends('layouts.app')

@section('content')
  @extends('layouts.sidenav')
  <div class="row">
    <div class="col-md-8">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">List Venues</li>
        </ol>
      </nav>
    </div>
    <div class="col col-md-4">
      <a href="{{ route('venue.create') }}" type="button" class="btn btn-dark">Add New Vanue</a>
    </div>
  </div>
  <hr/>
  <h4 class="text-center">List Venue. <i class="fa fa-smile-beam"></i></h4>
  <span class="m-5"></span>
  
  <table class="table">
    <caption>List of venue</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Tag</th>
        <th scope="col">Is Active</th>
        <th scope="col">Is Available</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($venue as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->tag }}</td>
          <td>
            @if($item->is_active)
              <button type="button" class="btn btn-success"><span class="badge badge-success">Yes</span></button>
            @else
              <button type="button" class="btn btn-warning"><span class="badge badge-warning">No</span></button>
            @endif
          </td>
          <td>
            @if($item->is_available)
              <button type="button" class="btn btn-success"><span class="badge badge-success">Yes</span></button>
            @else
              <button type="button" class="btn btn-warning"><span class="badge badge-warning">No</span></button>
            @endif
          </td>
          <td>
            <div class="col col-md-4">
              <a href="{{ route('venue.show', $item) }}" type="button" class="btn btn-primary">Details</a>
            </div>
          </td>
        </tr>
      @empty
        <h4>No venues to display. <i class="fa fa-sad-tear"></i></h4>
        <p>You may add venues and they will be listed here</p>
      @endforelse
    </tbody>
  </table>

  {!! $venue->links() !!}

@endsection
