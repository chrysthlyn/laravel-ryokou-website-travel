@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Location"
                        value="{{ old('location') }}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" name="featured_event" class="form-control" placeholder="Featured Event"
                        value="{{ old('featured_event') }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" name="language" class="form-control" placeholder="Language"
                        value="{{ old('language') }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="foods" name="foods" class="form-control" placeholder="Foods"
                        value="{{ old('foods') }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure</label>
                    <input type="date" name="departure_date" class="form-control" placeholder="Departure"
                        value="{{ old('departure_date') }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="Duration"
                        value="{{ old('duration') }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ old('type') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Price"
                        value="{{ old('price') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
