@extends('layouts.app')

@section('page_title', 'Graging')

@section('content')
    <div class="p-4">
        <h5>{{  $student->MyanmarMark->exam_mark }}</h5>
        <h5>{{  $student->PhysicsMark->exam_mark }}</h5>
        <h5>{{  $student->PITMark->total_score }}</h5>
        <h5>{{  $student->MicrosoftOfficeMark->grade }}</h5>
        <h5>{{  $student->Grading->total_GP }}</h5>
        <h5>{{  $student->Grading->GPA }}</h5>
    </div>
@endsection