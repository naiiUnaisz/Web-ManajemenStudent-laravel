@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enroll No : {{ $payments->enrollment->name }}</h5>
        <p class="card-text">Paid Date : {{ $payments->paid_date}}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection