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

    .btn-danger-soft {
        color: #000;
        background-color: #f1e0e3;
        border-color: #f1e0e3;
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
            <div class="col-lg-8">
                <!-- Change password card-->
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.updatePassword') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Form Group (current password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="currentPassword">Current Password</label>
                                <input class="form-control" id="current_password" name="current_password" type="password" placeholder="Enter current password">
                                @error('current password')
                                    <span class="text-danger mt-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Form Group (new password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="newPassword">New Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter new password">
                                @error('new password')
                                    <span class="text-danger mt-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Form Group (confirm password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm new password">
                                @error('password confirmation')
                                    <span class="text-danger mt-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Change the button type to "submit" -->
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <!-- Security preferences card-->
                <div class="card mb-4">
                    <div class="card-header">Security Preferences</div>
                    <div class="card-body">
                        <!-- Account privacy options-->
                        <h5 class="mb-1">Account Privacy</h5>
                        <p class="small text-muted">By setting your account to private, your profile information and posts will not be visible to users outside of your user groups.</p>
                        <form method="post" action="{{ route('update.privacy') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-check">
                                <input class="form-check-input" id="radioPrivacy1" type="radio" name="privacy" value="public" {{ $user->privacy === 'public' ? 'checked' : '' }}>
                                <label class="form-check-label" for="radioPrivacy1">Public (posts are available to all users)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="radioPrivacy2" type="radio" name="privacy" value="private" {{ $user->privacy === 'private' ? 'checked' : '' }}>
                                <label class="form-check-label" for="radioPrivacy2">Private (posts are available to only users in your groups)</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Delete account card-->
                <div class="card mb-4">
                    <div class="card-header">Delete Account</div>
                    <div class="card-body">
                        <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>

                        <form id="deleteForm" action="{{ route('delete.account', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger-soft text-danger" type="button" onclick="deleteAccount()">I understand, delete my account</button>
                        </form>
                    </div>
                </div>

                <script>
                    function deleteAccount() {
                        var confirmDelete = confirm("Are you sure you want to delete your account?");
                        if (confirmDelete) {
                            document.getElementById("deleteForm").submit();
                        }
                    }
                </script>

            </div>
        </div>
    </div>

@endsection
