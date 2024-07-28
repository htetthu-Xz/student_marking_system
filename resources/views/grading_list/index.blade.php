@extends('layouts.app')

@section('page_title', 'Graging')

@section('content')
    <div class="my-4 text-center">
        <h2>Grading list for First yrs</h2>
    </div>

    @if (session()->has('success'))
        <div class="mx-3 alert alert-success alert-dismissible fade show my-2" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="mt-5 mb-3 mx-3">
        <a href="{{ route('user.get.calculationForm') }}" class="btn btn-primary">Add Student Grading</a>
    </div>

    <div class="mx-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">အမည်</th>
                    <th scope="col">ခုံအမှက်</th>
                    <th scope="col">Myan</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">Eng</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">Phy</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">PIT</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">Math</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">MS</th>
                    <th scope="col">60%</th>
                    <th scope="col">Ass 40%</th>
                    <th scope="col">100%</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Grade Score</th>
                    <th scope="col">Grade pint</th>
                    <th scope="col">Total Grade Point</th>
                    <th scope="col">GPA</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="">{{ $student->name }}</td>
                        <td>{{ $student->roll_number }}</td>
                        <td>{{ $student->MyanmarMark->exam_mark }}</td>
                        <td>{{ $student->MyanmarMark->sixty_percent }}</td>
                        <td>{{ $student->MyanmarMark->assignment_mark }}</td>
                        <td>{{ $student->MyanmarMark->total_score }}</td>
                        <td>{{ $student->MyanmarMark->grade }}</td>
                        <td>{{ $student->MyanmarMark->grade_score }}</td>
                        <td>{{ $student->MyanmarMark->grade_point }}</td>
                        <td>{{ $student->EnglishMark->exam_mark }}</td>
                        <td>{{ $student->EnglishMark->sixty_percent }}</td>
                        <td>{{ $student->EnglishMark->assignment_mark }}</td>
                        <td>{{ $student->EnglishMark->total_score }}</td>
                        <td>{{ $student->EnglishMark->grade }}</td>
                        <td>{{ $student->EnglishMark->grade_score }}</td>
                        <td>{{ $student->EnglishMark->grade_point }}</td>
                        <td>{{ $student->PhysicsMark->exam_mark }}</td>
                        <td>{{ $student->PhysicsMark->sixty_percent }}</td>
                        <td>{{ $student->PhysicsMark->assignment_mark }}</td>
                        <td>{{ $student->PhysicsMark->total_score }}</td>
                        <td>{{ $student->PhysicsMark->grade }}</td>
                        <td>{{ $student->PhysicsMark->grade_score }}</td>
                        <td>{{ $student->PhysicsMark->grade_point }}</td>
                        <td>{{ $student->PITMark->exam_mark }}</td>
                        <td>{{ $student->PITMark->sixty_percent }}</td>
                        <td>{{ $student->PITMark->assignment_mark }}</td>
                        <td>{{ $student->PITMark->total_score }}</td>
                        <td>{{ $student->PITMark->grade }}</td>
                        <td>{{ $student->PITMark->grade_score }}</td>
                        <td>{{ $student->PITMark->grade_point }}</td>
                        <td>{{ $student->MathematicMark->exam_mark }}</td>
                        <td>{{ $student->MathematicMark->sixty_percent }}</td>
                        <td>{{ $student->MathematicMark->assignment_mark }}</td>
                        <td>{{ $student->MathematicMark->total_score }}</td>
                        <td>{{ $student->MathematicMark->grade }}</td>
                        <td>{{ $student->MathematicMark->grade_score }}</td>
                        <td>{{ $student->MathematicMark->grade_point }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->exam_mark }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->sixty_percent }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->assignment_mark }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->total_score }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->grade }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->grade_score }}</td>
                        <td>{{ $student->MicrosoftOfficeMark->grade_point }}</td>
                        <td>{{ $student->Grading->total_GP }}</td>
                        <td>{{ $student->Grading->GPA }}</td>
                        <td><a href="{{ route('user.get.grading', $student->id) }}" class="btn btn-primary">Show</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

      {{ $students->links() }}

@endsection