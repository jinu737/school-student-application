<?php

namespace Tests\Unit;

use App\Models\Student;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_student_list()
    {
        $response = $this->get('/student');

        $response->assertStatus(200);
    }

    public function test_student_duplication()
    {
        $student1 = Student::make([
           'IdentificationNo' => 12334,
        ]);

        $student2 = Student::make([
            'IdentificationNo' => 23232,
        ]);

        $this->assertTrue($student1->IdentificationNo != $student2->IdentificationNo);
    }
}
