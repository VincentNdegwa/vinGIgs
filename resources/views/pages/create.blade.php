@extends('layouts.main')
@section('content')
    @props(['dataCreated','updatingData','userCreatedJobs'])
   
    <section class="create-section">
        <div class="form-create-listing">
            <x-creating-listing/>
        </div>

        <div class="created-task-listing">
            <x-mytask-listing/>
        </div>
        <div class="edit-display-hide">
          <h1>{{ $updatingData->company }}</h1>
            <button onclick="closeDisplay()">Exit</button>
        </div>
    </section>
@endsection
