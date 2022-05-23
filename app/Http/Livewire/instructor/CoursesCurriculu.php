<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;

class CoursesCurriculu extends Component
{
    public $course, $section;

    protected $rules=[
        'section.name'=>'required'
    ];


    public function mount(Course $course){
        $this->course=$course;
        $this->section=new Section();
    }

    public function render()
    {
        return view('livewire.instructor.courses-curriculu')->layout('layouts.instructor');
    }

    public function edit (Section $section)
    {
        $this->section=$section;
    }

    public function update(){
        $this->section->save();
        $this->section=new Section();

        $this->course=Course::find($this->course->id);
    }
}
