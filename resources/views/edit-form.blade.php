@extends('layouts.main')

@section('title', 'Edit Car')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>Edit Car</h3>
  </div>

  <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
      
    @csrf
    
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ $car->name }}" placeholder="Enter Name" >
      </div>
      <div class="form-group">
        <label>Make</label>
        <input class="form-control" type="text" name="make" value="{{ $car->make }}" placeholder="Enter Make">
      </div>
      <div class="form-group">
        <label>Model</label>
        <input class="form-control" type="text" name="model" value="{{ $car->model }}" placeholder="Enter Model">
      </div>
      <div class="form-group">
        <label>License_number</label>
        <input class="form-control" type="number" name="license_number" value="{{ $car->license_number }}" placeholder="Enter License_number">
      </div>
      <div class="form-group">
        <label>Weight</label>
        <input class="form-control" type="number" name="weight" value="{{ $car->weight }}" placeholder="Enter Weight">
      </div>
      <div class="form-group">
        <label>License_year</label>
        <input class="form-control" type="number" name="License_year" value="{{ $car->license_year }}" placeholder="Enter License_year">
      </div>
      <div class="form-group">
        <label>Created_at</label>
        <input class="form-control" type="number" name="created_at" value="{{ $car->created_at }}" placeholder="Enter Created_at">
      </div>
      <div class="form-group">
        <label>Updated_at</label>
        <input class="form-control" type="number" name="updated_at" value="{{ $car->updated_at }}" placeholder="Enter Updated_at">
      </div>
    </div>

    <div class="card-footer">
      <button class="btn btn-success">Update</button>
    </div>
  </form>
  
</div>
@endsection