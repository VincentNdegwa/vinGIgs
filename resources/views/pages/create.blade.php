@extends('layouts.main')
@section('content')
    @props(['dataCreated', 'updatingData', 'userCreatedJobs'])

    <section class="create-section">
        <div class="form-create-listing">
            <x-creating-listing />
        </div>

        <div class="created-task-listing">
            <x-mytask-listing :userCreatedJobs="$userCreatedJobs" />
        </div>

        @isset($updatingData)
            <div class="@isset($updatingData)edit-display @else edit-display-hide @endisset">
                <button onclick="closeDisplay()" class="exit-btn">Exit</button>
                <form action="/list/edit" method="post" class="form-control">
                    @csrf
                    <div class="form-item">
                        <input type="hidden" class="form-control" value="{{ $updatingData->id }}" name="id" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label">Job Tittle</label>
                        <input type="text" class="form-control" value="{{ $updatingData->title }}" name="title"
                            placeholder="graphic design" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" value="{{ $updatingData->tags }}" name="tags"
                            placeholder="laravel, api, developement" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label"> Company</label>
                        <input type="text" class="form-control" value="{{ $updatingData->company }}" name=" company"
                            placeholder="Microsoft Kenya" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label"> Location</label>
                        <input type="text" class="form-control" value="{{ $updatingData->location }}" name="location"
                            placeholder="Nairobi,Kenya" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label">Website</label>
                        <input type="text" class="form-control" value="{{ $updatingData->website }}" name="website"
                            placeholder="www.test.com" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" value="{{ $updatingData->description }}" name=" description"
                            placeholder="Description......." required>
                    </div>
                    <div class="form-item">
                        <input type="submit" class="form-control form-btn" value="Edit Job">
                    </div>
                </form>

            </div>
        @endisset

    </section>
@endsection
