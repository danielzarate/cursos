<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Course;

class RejectCourse extends Mailable
{
    use Queueable, SerializesModels;

    public $course;
    public function __construct(Course $course)
    {
        $this->course=$course;
    }


    public function build()
    {
        return $this->view('mail.reject-course')->subject('Curso Rechazado');
    }
}
