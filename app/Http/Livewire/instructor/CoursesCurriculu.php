<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\Course;

class CoursesCurriculu extends Component
{
    public $course;

    public function mount(Course $course){
        $this->course=$course;
    }

    public function render()
    {
        return view('livewire.instructor.courses-curriculu')->layout('layouts.instructor');
    }
}
