<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Course;

class CoursesReviews extends Component
{

    public $course_id;

    public function mount(Course $course){
        $this->course_id=$course->id;
    }

    public function render()
    {
        $course=Course::find($this->course_id);
        return view('livewire.courses-reviews',compact('course'));
    }
}
