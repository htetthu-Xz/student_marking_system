<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Grading;
use App\Models\PITMark;
use App\Models\Student;
use App\Models\EnglishMark;
use App\Models\MyanmarMark;
use App\Models\PhysicsMark;
use App\Models\MathematicMark;
use Illuminate\Support\Facades\DB;
use App\Models\MicrosoftOfficeMark;
use App\Http\Requests\MarkingStoreRequest;

class MarkCalculationController extends Controller
{
    public function index() 
    {
        $roll_number = '1CST-33';
        $student = Student::where('roll_number', );
        return view('mark_calculation.index');    
    }

    public function store(MarkingStoreRequest $request) 
    {
        $attributes = $request->validated();

        DB::beginTransaction();

        try {
            $student = Student::create([
                'name' => $attributes['name'],
                'roll_number' => $attributes['roll_number']
            ]);

            $marks = $attributes['marks'];

            foreach($marks as $key => $mark) {
                $marks[$key]['student_id'] = $student->id;
            }

            MyanmarMark::create($marks['myanmar']);
            EnglishMark::create($marks['english']);
            PhysicsMark::create($marks['physics']);
            PITMark::create($marks['PIT']);
            MathematicMark::create($marks['math']);
            MicrosoftOfficeMark::create($marks['MS']);
            
            Grading::create([
                'total_GP' => $attributes['total_gp'],
                'GPA' => $attributes['gpa'],
                'student_id' => $student->id
            ]);

            DB::commit();

            //return back()->with('success', 'Student marking successfully added.');

            return redirect()->route('user.get.grading', $student->id);

        } catch (Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
    }

    public function getGrading(Student $student) 
    {
        $grading = $student->Grading;
        $myanmar = $student->MyanmarMark;
        $english = $student->EnglishMark;
        $physics = $student->MathematicMark;
        $PIT = $student->PITMark;
        $microsoft = $student->MicrosoftOfficeMark;

        return view('grading_list.index', [
            'student' => $student,
            'grading' => $grading,
            'myanmar' => $myanmar,
            'english' => $english,
            'PIT' => $PIT,
            'physics' => $physics,
            'microsoft' => $microsoft,

        ]);
    }
}
