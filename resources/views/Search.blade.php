@extends('dashboard.master')
@section('title')
    Searching
@endsection
@section('pageHeader')
    <h3 class="card-header">Breast Cancer Prediction</h3>
@endSection
@section('content')
    <div class="container">
        @if ($preds->count())
        <h6>Search results</h6>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Results</th>
                        <th>Clinical_Notes</th>
                        <th>Regions</th>
                        <th>patient_id</th>
                        <th>Doctor_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($preds as $pred)
                        <tr>
                            <td>{{ $pred->id }}</td>
                            <td>{{ $pred->results }}</td>
                            <td>{{ $pred->Clinical_notes }}</td>
                            <td>{{ $pred->region }}</td>
                            <td>{{ $pred->Patient_id }}</td>
                            <td>{{ $pred->Doctor_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h6>Result not found.</h6>
        @endif
    </div>
@endSection
