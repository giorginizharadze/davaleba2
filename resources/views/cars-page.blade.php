@extends('layouts.main')

@section('content')

<div class="card">
  <div class="card-header">
    <h3>All Product Car</h3>
  </div>

  <div class="card-body">
    <table class="table">

      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Make</th>
        <th>Model</th>
        <th>License_number</th>
        <th>Weight</th>
        <th>Registration_year</th>
        <th>Created_at</th>
        <th>Updated_at</th>
      </thead>

      <tbody>
      <form action="{{ route('cars.save') }}" method="post">
        @csrf
        <tr>
          <td><input type="number" name="id" class="form-control" /></td>
          <td><input type="text" name="name" class="form-control" /></td>
          <td><input type="text" name="make" class="form-control" /></td>
          <td><input type="text" name="model" class="form-control" /></td>
          <td><input type="number" name="license_number" class="form-control" /></td>
          <td><input type="number" name="weight" class="form-control" /></td>
          <td><input type="number" name="registration_year" class="form-control" /></td>
          <td><input type="date" name="created_at" class="form-control" /></td>
          <td><input type="date" name="updated_at" class="form-control" /></td>
          <td><button class="btn btn-success">Create</button></td>
          <td class="btn btn-link">Edit</td>
        </tr>
      </form>
      @foreach($cars as $car)
        <tr>
          <td>{{ $car->id }}</td>
          <td>{{ $car->name }}</td>
          <td>{{ $car->make }}</td>
          <td>{{ $car->model }}</td>
          <td>{{ $car->license_number }}</td>
          <td>{{ $car->weight }}</td>
          <td>{{ $car->registration_year }}</td>
          <td>{{ $car->created_at }}</td>
          <td>{{ $car->updated_at }}</td>
          <td>
            <form action="{{ route('cars.delete') }}" method="post">
              @csrf
              <input type="hidden" name="car_id" value="{{ $car->id }}">

              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
          <td>
            <a href="{{ route('cars.edit', ['id' => $car->id]) }}">Edit</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection