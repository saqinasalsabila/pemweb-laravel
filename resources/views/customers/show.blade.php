@extends('layouts.app')
  
@section('title', 'Show Customer')
  
@section('contents')
    <h1 class="mb-0">Detail Customer</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $customer->username }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $customer->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input class="form-control" name="email" placeholder="E-mail" value="{{ $customer->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input class="form-control" name="telp" placeholder="Phone" value="{{ $customer->telp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $customer->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $customer->updated_at }}" readonly>
        </div>
    </div>
@endsection