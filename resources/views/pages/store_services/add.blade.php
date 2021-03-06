@extends('layouts.app')

@section('content')
  @extends('layouts.sidenav')
  <div class="row">
    <div class="col-md-8">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('store_services.index') }}">List Store Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Store Service</li>
        </ol>
      </nav>
    </div>
  </div>
  <hr/>
  <h4 class="text-center">Add New Store Service. <i class="fa fa-smile-beam"></i></h4>
  <span class="m-5"></span>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  @if (session('failure'))
    <div class="alert alert-danger">
        {{ session('failure') }}
    </div>
  @endif
  <form class="needs-validation" novalidate action="{{ route('store_services.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="picture_id">Picture</label>
        <input type="file" class="form-control" id="picture_id" name="picture">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="sku_id">Sku</label>
        <input type="text" class="form-control" id="sku_id" name="sku" value="" maxlength="30" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please make sure the are only alpha-numeric are allowed.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="name_id">Name</label>
        <input type="text" class="form-control" id="name_id" name="name" value="" maxlength="30" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please make sure the are only alphabets and character are less than 30.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="price_id">Price</label>
        <input type="number" step='0.01' class="form-control" id="price_id" name="price" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please make sure the are only numbers/decimals only Use . for decimal point (NO ,).
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="cost_id">Cost</label>
        <input type="number" step='0.01' class="form-control" id="cost_id" name="cost" value="">
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please make sure the are only numbers/decimals only Use . for decimal point (NO ,).
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="duration_id">Duration</label>
        <input type="time" class="form-control" id="duration_id" name="duration" value=""  placeholder="HH:MM:SS">
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please stick to this format HH:MM:SS. Include the :.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="delay_time_id">Delay Time</label>
        <input type="time"  class="form-control" id="delay_time_id" name="delay_time" value="" placeholder="HH:MM:SS">
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please stick to this format HH:MM:SS. Include the :.
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="tag_id">Tag</label>
        <input type="text" class="form-control" id="tag_id" name="tag" value="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="description_id">Description</label>
        <textarea class="form-control" id="description_id" name="description" value=""></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="is_active" id="is_active">
        <label class="form-check-label" for="is_active">
          Is Service Available ?
        </label>
      </div>
    </div>
    <div class="form-row">.</div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
  
@endsection
