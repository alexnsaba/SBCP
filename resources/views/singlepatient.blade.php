@extends('dashboard.master')
@section('title')
    Single Patient Prediction Results
@endsection
@section('pageHeader')
    <h3 class="card-header">Prediction Results of {{$patients[0]->Name}} </h3>
@endSection
@section('content')

{{--    <div class="row">--}}
{{--        <div class="col-sm-12">--}}

            <div class="card">
                <div class="card-block list-tag">
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <h5 class="bold mb-2">CLINICAL NOTES</h5>

                        @foreach($patients[0]->prediction as $patient)
                            <p>{{$patient->Clinical_notes}}</p>
                            @endforeach

                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <h5 class="bold mb-2">REGION</h5>

                        @foreach($patients[0]->prediction as $patient)

                            <p>{{$patient->region}}</p>
                                @endforeach
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <h5 class="bold mb-2">RESULTS</h5>

                        @foreach($patients[0]->prediction as $patient)
                            <p>{{$patient->Results}}</p>
                                @endforeach

                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <h5 class="bold mb-2">BREAST SIDE</h5>
                            @foreach($patients[0]->prediction as $patient)

                            <p>{{$patient->breastSide}}</p>
                                @endforeach

                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <h5 class="bold mb-2">DATE</h5>
                            @foreach($patients[0]->prediction as $patient)

                                <p>{{$patient->created_at}}</p>
                            @endforeach

                        </div>
                    </div>

                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
@endsection
