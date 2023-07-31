@extends('layouts.main')
@section('content')
    <section class="create-section">
        <div class="form-create-listing">
            <form action="" method="post" class="form-control">
                <div class="form-item">
                    <label class="form-label">Job Tittle</label>
                    <input type="text" class="form-control" name="title" placeholder="graphic design" required>
                </div>
                <div class="form-item">
                    <label class="form-label">Tags</label>
                    <input type="text" class="form-control" name="tags" placeholder="laravel, api, developement"> required
                </div>
                <div class="form-item">
                    <label class="form-label"> Company</label>
                    <input type="text" class="form-control" name=" company" placeholder="Microsoft Kenya" required>
                </div>
                <div class="form-item">
                    <label class="form-label"> Location</label>
                    <input type="text" class="form-control" name="tags" placeholder="Nairobi,Kenya" required>
                </div>
                <div class="form-item">
                    <label class="form-label">Website</label>
                    <input type="url" class="form-control" name="website" placeholder="www.test.com" required> 
                </div>
                <div class="form-item">
                    <label class="form-label">Description</label>
                    <input type="url" class="form-control" name=" description" placeholder="Description......." required>
                </div>
                <div class="form-item">
                    <input type="submit" class="form-control" value="Create Job">
                </div>
            </form>
        </div>
    </section>
@endsection
