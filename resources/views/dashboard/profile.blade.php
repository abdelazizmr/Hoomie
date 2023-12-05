@extends('layouts.base')
@section('content')
<style>
    body{margin-top:20px;
        background-color:#f2f6fc;
        color:#69707a;

    }
    .img-account-profile {
        height: 10rem;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }
    .card .card-header {
        font-weight: 500;
    }
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control, .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }
    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
</style>

<br>
<br>
<br>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link {{ (request()->route()->getName() == 'dashboard.profile') ? 'active' : '' }}" href="{{ route('dashboard.profile') }}" >Profile</a>
        <a class="nav-link {{ (request()->route()->getName() == 'dashboard.security') ? 'active' : '' }}" href="{{ route('dashboard.security') }}" >Security</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-4 order-first">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Settings</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img  style=" width:150px; height:180px; border-radius: 20%; padding-bottom: 5px;" src="{{$user->image}}" alt="">

                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPEG,PNG,JPG,GIF or SVG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" style="display: none;">
                                <label class="btn btn-primary" for="image">Upload new image</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 order-last" >
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">

                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="name">Username </label>
                                    <input class="form-control" id="name" name="name" value="{{$user->name}}" type="text" placeholder="Enter your username" value="username">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="address">Address</label>
                                        <input class="form-control" id="address" name="address" value="{{$user->address}}" type="text" placeholder="Enter your first name" value="Valerie">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="gender">Gender</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="male" @if(old('gender', $user->gender) === 'male') selected @endif>Male</option>
                                            <option value="female" @if(old('gender', $user->gender) === 'female') selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email address</label>
                                    <input class="form-control" id="email" name="email" type="email" value="{{$user->email}}" placeholder="Enter your email address" value="name@example.com">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="phone">Phone number</label>
                                        <input class="form-control" id="phone" name="phone" type="tel" value="{{$user->phone}}" placeholder="Enter your phone number" value="555-123-4567">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="age">Your Age</label>
                                        <input class="form-control" id="age" type="text" name="age" value="{{$user->age}}" placeholder="Enter your birthday" value="20 years">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
