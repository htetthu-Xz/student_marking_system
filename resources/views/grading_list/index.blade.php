@extends('layouts.app')

@section('page_title', 'Graging')

@section('content')
    <p>{{ $student->name }}</p>
    <p>{{ $myanmar->grade_score }}</p>
    <p>{{ $english->grade_score }}</p>
    <p>{{ $grading->total_GP }}</p>

@endsection