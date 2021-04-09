<?php

namespace App\Http\Livewire\Classes\Students;

use App\Models\ClassModel;
use App\Models\Level;
use App\Models\ResultDegree;
use App\Models\Student;
use App\Models\Year;
use Livewire\Component;

class Result extends Component
{
    public $students;
    public $ClassModel;
    public $upadteData;
    public $result;
    public $shift;
    public $lavel_id;
    public $lavel;
    public $year_id;

    public $class_id;
    public $semester;

    public $review = ['review' => 0];
    public $memorizing = [];
    public $intonation = [];
    public $attitude_and_attendance = [];

    protected $listeners = [
        'data-update' => '$refresh',
    ];

    /**
     *       {{--  $student->resultDegree()->firstOrCreate([ 'result_id'=>$result->id,'subjects'=>'memorizing'],[
     * 'result_id'=>$result->id,
     * 'degree'=>json_encode($memorizing),
     * 'subjects'=>'memorizing'
     *
     * ]) --}}
     */
    public function upadteteacherModel(\App\Models\Student $data)
    {
        $this->upadteData = $data;

        $this->emit('getUpdateData', $data->id);
    }

    public function mount(ClassModel $data)
    {

        $this->ClassModel = $data;
        $this->class_id = $data->id;
        $this->shift=$data->shift;

        if(auth()->user()->hasRole('admin')){

        }else{
//            $this->shift=auth()->user()->shift;
        }
        $this->showResult();
    }

    public function showResult()
    {
        $data = request()->all();
        $this->lavel=Level::find($this->lavel_id);

        $data['shift']= $this->shift;

        $data['lavel_id']= 0;

        $data['semester']=2;
        $data['year_id']=1;
        $data['class_id']=$this->class_id;


        $this->reset('memorizing', 'review', 'intonation', 'attitude_and_attendance');

        $this->result = \App\Models\Result::where([['shift', $this->shift], ['year_id', $data['year_id']], ['semester', $data['semester']]])->firstOrCreate($data);


        $this->students = Student::where([['shift', $this->shift], ['class_id', $data['class_id']]])->get();//

        $this->students->each(function ($item) {
            $result = $item->resultDegree()->where(['result_id' => $this->result->id, 'subjects' => 'memorizing', 'student_id' => $item->id])->first();
            if ($result) {
                $this->memorizing[$item->id] = json_decode($result->degree)->memorizing;
                $this->review[$item->id] = json_decode($result->degree)->review;
                $this->intonation[$item->id] = json_decode($result->degree)->intonation;
                $this->attitude_and_attendance[$item->id] = json_decode($result->degree)->attitude_and_attendance;
            }
        });

    }

    public function saveData()
    {
        $this->students->each(function ($item) {

//            if (isset($this->memorizing[$item->id]) && isset($this->review[$item->id]) && isset($this->intonation[$item->id]) && isset($this->attitude_and_attendance[$item->id])) {

                $data = [
                    'result_id' => $this->result->id,
                    'degree' => json_encode([
                        'memorizing' => $this->memorizing[$item->id]??[],
                        'review' => $this->review[$item->id]??[],
                        'intonation' => $this->intonation[$item->id]??[],
                        'intonation' => $this->intonation[$item->id]??[],
                        'attitude_and_attendance' => $this->attitude_and_attendance[$item->id]??[],
                    ]),
                    'subjects' => 'memorizing'

                ];


                $result = $item->resultDegree()->updateOrCreate(['result_id' => $this->result->id, 'subjects' => 'memorizing', 'student_id' => $item->id], $data);

                session()->flash('message', 'تم الحفظ بنجاح !');

//            }
        });
    }

    public function render()
    {
        return view('livewire.classes.students.result', ['levels' => Level::all(), 'years' => Year::all(),]);
    }
}
