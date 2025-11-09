@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Enrollment</div>
  <div class="card-body">

      <form action="{{ url('enrollments') }}" method="post">
        @csrf

        <div class="mb-3">
          <label>Enroll no</label>
          <input type="text" name="enroll_no" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Batch </label>
          <input type="number" name="batch_id" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Student </label>
          <input type="number" name="student_id" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Join Date</label>
          <input type="date" name="join_date" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Fee</label>
          <input type="number" step="0.01" name="fee" class="form-control">
        </div>

        <input type="submit" value="Save" class="btn btn-success">
    </form>

  </div>
</div>

@stop
