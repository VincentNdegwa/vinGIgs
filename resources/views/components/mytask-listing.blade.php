{{-- @props(['userCreatedJobs']) --}}
@php
    if ($userCreatedJobs != 'undefined') {
        $mydata = [];
        foreach ($userCreatedJobs as $item) {
            array_push($mydata, $item);
        }
    }
@endphp

<h4>Jobs Created</h4>
<div class="jobs-created-holder">
    @if ($mydata)
        @foreach ($mydata as $item)
            <div class="item-listing">
                <div class="item-details">
                    <p>
                        {{ $item->title }}
                    </p>
                    <p>{{ date('d M Y', strtotime($item->updated_at)) }}</p>
                    <span>
                        @foreach (explode(',', $item->tags) as $tag)
                            <p>{{ $tag }}</p>
                        @endforeach
                    </span>

                </div>
                <div class="item-functionalities">
                    <button>

                        <a href="{{ url('/list/get', $item->id) }}">
                            Edit
                        </a>
                    </button>
                    <button>
                        <a href="{{ url('/list/delete', $item->id) }}">Delete</a>

                    </button>
                </div>
            </div>
        @endforeach
    @endif
</div>
