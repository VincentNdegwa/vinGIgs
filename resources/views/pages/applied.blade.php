@extends('layouts.main')
@section('content')
    <section class="applicants-container">

        <table class="table align-middle table-bordered">
            <thead class="thead-applicants">
                <tr>
                    <th scope="col">Recruiter</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent CV</th>
                    <th scope="col">Job</th>
                    <th scope="col">Company</th>
                    <th>Time</th>
                    <th>Status</th>
                    <td>Button2</td>
                </tr>
            </thead>
            <tbody>
            <tbody class="mt-2">
                @foreach ($data as $item)
                    <tr>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->email }}</th>
                        <td>
                            @if ($item->cv_path)
                                <a href="{{ asset('storage/' . $item->cv_path) }}" target="_blank">View File</a>
                            @else
                                No File Available
                            @endif
                        </td>
                        <td>{{ $item->job_tittle }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td>
                            @if ($item->status == 'accepted')
                                <p class="green">Accepted</p>
                            @elseif($item->status == 'review')
                                <p class="gray">Pending</p>
                            @else
                                <p class="red">Rejected</p>
                            @endif
                        </td>

                        <td>
                            <span>
                                <a href="/">View</a>
                            </span>
                        </td>

                    </tr>
                @endforeach
            </tbody>

            </tbody>
        </table>


    </section>
@endsection
