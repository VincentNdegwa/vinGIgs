@extends('layouts.main')
@section('content')
 
    <section class="applicants-container">

        <table class="table align-middle table-bordered">
            <thead class="thead-applicants">
                <tr>
                    <th scope="col">Applicant</th>
                    <th scope="col">Email</th>
                    <th scope="col">CV</th>
                    <th scope="col">Job</th>
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
                        <td>
                            <span>
                                <a href="/application/{{ $item->application_id }}"><button>View</button></a>
                            </span>
                        </td>

                    </tr>
                @endforeach
            </tbody>

            </tbody>
        </table>


    </section>

    <x-viewApplication :application="$application" />
@endsection
