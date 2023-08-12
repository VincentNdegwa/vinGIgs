@extends('layouts.main')
@section('content')

    <section class="listing-container">
        @if ($data)
            @foreach ($data as $item)
                <div class="logo-img">
                    <img src="/images/product.jpeg" alt="">
                </div>
                <div class="listing-display-holder">

                    <div class="listing">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->company }}</p>
                        <span>
                            @foreach (explode(',', $item->tags) as $tag)
                                <p>{{ $tag }}</p>
                            @endforeach
                        </span>
                        <span>{{ $item->description }}</span>
                    </div>
                    <div class="listings-btns">
                        <button onclick="displayApply()">Easy Apply</button>
                        <button><a href="{{ $item->website }}">Visit Website</a></button>
                        <button><a href="mailto:{{ $item->email }}">Send Email</a></button>
                    </div>

                </div>

                <div class="apply-easy-hide">
                    <button onclick="exitApply()">Exit</button>
                    <div class="gig-holder">
                        <div class="gig-container">
                            <div class="gig-item">
                                <span>Job Title:</span>
                                <h3>{{ $item->title }}</h3>
                            </div>
                            <div class="gig-item">
                                <span>Job Description:</span>
                                <p>{{ $item->description }}</p>
                            </div>
                            <div class="gig-item">
                                <span>Company Name:</span>
                                <p>{{ $item->company }}</p>
                            </div>
                            <div class="gig-item">
                                <span>Main requirements</span>
                                <ul>
                                    @foreach (explode(',', $item->tags) as $tag)
                                        <li class="tag">{{ $tag }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="gig-send-apply">
                            <form action="/application/send" method="post" class="form-control form-apply"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="recruiter_id" value="{{ $data[0]['creater_id'] }}">
                                <input type="hidden" name="listing_id" value="{{ $data[0]['id'] }}">
                                <input type="hidden" name="job_tittle" value="{{ $data[0]['title'] }}">
                                <div class="form-control">
                                    <textarea class="form-control apply-textarea" name="application_text" placeholder="Letter to the HR"
                                        id="floatingTextarea" required></textarea>
                                </div>
                                <label for="" class="form-control cv-label">
                                    Select your CV
                                    <input type="file" name="cv_file" id="" class="form-control" required>
                                </label>
                                <input type="submit" class="form-cotrol apply-btn" value="Apply Job">
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </section>

@endsection
