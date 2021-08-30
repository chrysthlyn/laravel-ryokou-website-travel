@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
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
            <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Location"
                        value="{{ $item->location }}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" name="featured_event" class="form-control" placeholder="Featured Event"
                        value="{{ $item->featured_event }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" name="language" class="form-control" placeholder="Language"
                        value="{{ $item->language }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="foods" name="foods" class="form-control" placeholder="Foods"
                        value="{{ $item->foods }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure</label>
                    <input type="date" name="departure_date" class="form-control" placeholder="Departure"
                        value="{{ $item->departure_date }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="Duration"
                        value="{{ $item->duration }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $item->type }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Price"
                        value="{{ $item->price }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
