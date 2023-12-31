@extends('layouts.main')
@section('content')
    <section>
        <div class="user-profile-container">
            <form action="/profile/edit" method="POST" class="form-control profile-form" enctype="multipart/form-data">
                @csrf
                <div class="form-item profile-form-item">
                    <div class="image-profile-holder">
                        <img  src="{{ asset('storage/'. $userData->profile_path) }}" alt="profile" id="profile-image-preview">
                        <label for="profile-image">
                            <i class='bx bxs-edit-alt'></i>
                        </label>
                        <input type="file" name="profile-image" id="profile-image" style="display: none;">
                    </div>
                </div>
                <div class="form-item">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ $userData->name }}" name="name"
                        placeholder="John" required readonly>
                </div>
                <div class="form-item">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{ $userData->email }}" name="email"
                        placeholder="test@gmail.com"required readonly>
                </div>
                <div class="form-item">
                    <label class="form-label">Email Verification Status</label>
                    <input type="text" class="form-control"
                        value="{{ $userData->email_verified_at ? 'Verified' : 'Not Valid' }}" required readonly>
                </div>
                <div class="form-item">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-item mt-4 d-flex">
                    <input type="button" value="Activate Edit" class="form-control profile-edit-btn">
                    <input type="button" value="Delete Profile" class="form-control profile-delete-btn">
                </div>
            </form>
        </div>
    </section>
@endsection
