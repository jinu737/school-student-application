<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class="btn btn-outline-primary btn-sm">Go back to Home</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Student Details</h1>
                    <hr>

                    <table class="table">
                        <tr>
                            <th scope="col">Student ID</th>
                            <td><?php echo e($student->id); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Student Name</th>
                            <td><?php echo e($student->Name); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Student Surname</th>
                            <td><?php echo e($student->Surname); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Student Country</th>
                            <td><?php echo e($student->Country); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Student Identification No</th>
                            <td><?php echo e($student->IdentificationNo); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Date Of Birth</th>
                            <td><?php echo e($student->DateOfBirth); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Student Registered On</th>
                            <td><?php echo e($student->RegisteredOn); ?></td>
                        </tr>
                    </table>
                    <a href="/student/edit/<?php echo e($student->id); ?>" class="btn btn-outline-warning">Edit Student</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jinugeorge/school-application/resources/views/student/viewDetails.blade.php ENDPATH**/ ?>