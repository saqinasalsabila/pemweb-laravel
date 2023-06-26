@extends('layouts.app')
  
@section('title', 'Edit Customer')
  
@section('contents')
    <h1 class="mb-0">Edit Customer</h1>
    <hr />
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $customer->username }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $customer->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">E-mail</label>
                <input class="form-control" name="email" placeholder="E-mail" value="{{ $customer->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input class="form-control" name="telp" placeholder="Phone" value="{{ $customer->telp }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection