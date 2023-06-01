@extends('adminlte::page')

@section('title', "Patient's Records")

@section('content_header')
    <h1>Patient's Record</h1>
@stop

@section('content')
    <div class="position-relative">
        <!-- Going Back to Patient's Record -->
        <div class="position-left">
            <a class="btn btn-primary" href="{{ route('doctor.recordIndex') }}">Go Back</a>
        </div>
    </div>

    <!-- Genral Information -->
    <div class="container shadow mt-4 px-4 py-3 mx-auto mb-3" style="border-style: solid; border-color: #bfbfbf;">
        <div class="row">
            <!-- Right Side -->
            <div class=col>
                <!-- Name -->
                <p class="h5 mb-3"><strong>Name: </strong> {{ $record->user->name }}</p>
                
                @if($record->user->role == 'faculty')
                    <!-- Department -->
                    <p class="h5 mb-3"><strong>Department: </strong> {{ $record->user->department }}</p>
                @else
                    <!-- Course -->
                    <p class="h5 mb-3"><strong>Course: </strong> {{ $record->user->course }}</p>
                    
                    @if ($record->user->year && is_null($record->user->grade))
                        <!-- Year -->
                        <p class="h5 mb-3"><strong>Year: </strong> {{ $record->user->year }}</p>
                    @elseif($record->user->grade && is_null($record->user->year))
                        <!-- Grade -->
                        <p class="h5 mb-3"><strong>Grade: </strong> {{ $record->user->grade }}</p>
                    @endif
                    <!-- Section -->
                    <p class="h5 mb-3"><strong>Section: </strong> {{ $record->user->section }}</p>
                @endif
                <!-- ID -->
                <p class="h5"><strong>School ID: </strong> {{ $record->user->school_id }}</p>
            </div>

            <!-- Left Side -->
            <div class=col>
                <!-- Firts Line -->
                <ul class="list-inline mb-3">
                    <!-- Birth Date -->
                    <li class="list-inline-item h5 mr-4"><strong>Birth Date: </strong> {{ $record->birth_date }}</li>
                    <!-- Age -->
                    <li class="list-inline-item h5 mr-4"><strong>Age: </strong> {{ $record->age }}</li>
                    <!-- Sex -->
                    <li class="list-inline-item h5"><strong>Sex: </strong> {{ $record->sex }}</li>  
                </ul>
                
                <!-- Second Line -->
                <ul class="list-inline mb-3">
                    <!-- Civil Status -->
                    <li class="list-inline-item h5 mr-5"><strong>Civil Status: </strong> {{ $record->civil_status }}</li>
                    <!-- Mobile Number -->
                    <li class="list-inline-item h5"><strong>Mobile #: </strong> +63{{ $record->mobile_number }}</li>
                </ul>
                <!-- Contact Person Name -->
                <p class="h5 mb-2"><strong>Contact Person Name: </strong> {{ $record->contact_person }}</p>
                <!-- Contact Person Mobile Number -->
                @if($record->contact_person_mobile != 'null')
                    <p class="h5 mb-3"><strong>Contact Person Mobile #: </strong> +63{{ $record->contact_person_number }}</p>
                @else
                    <p class="h5 mb-3"><strong>Contact Person Mobile #: </strong></p>
                @endif
                <!-- Address -->
                <p class="h5"><strong>Address: </strong> {{ $record->address }}</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="row">
            <button type="button" class="col btn btn-secondary mx-1">Consultation</button>
            <button type="button" class="col btn btn-info mr-1">Medical Exam</button>
            <button type="button" class="col btn btn-info mx-1">Dental Exam</button>
            <button type="button" class="col btn btn-danger ml-1">Emergency Report</button>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop