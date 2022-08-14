<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class="btn btn-outline-primary btn-sm">Go back to Home</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h3 class="display-5 text-center">Create New Student data</h3>
                    <hr>

                    <form action="/studentcreate" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Student Name</label>
                                <input type="text" id="title" class="form-control" name="Name"
                                       placeholder="Enter Name" value="" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="title">Student Surname</label>
                                <input type="text" id="title" class="form-control" name="Surname"
                                       placeholder="Enter Surname" value="" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="title">Identification No</label>
                                <input type="text" id="title" class="form-control" name="IdentificationNo"
                                       placeholder="Enter Identification No" value="" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="title">Country</label>
                                <input type="text" id="title" class="form-control" name="Country"
                                       placeholder="Enter Country" value="" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="title">Date Of Birth</label>
                                <input type="date" id="title" class="form-control" name="DateOfBirth"
                                       value="" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="title">Registered On</label>
                                <input type="datetime-local" id="title" class="form-control" name="RegisteredOn"
                                       value="" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Save Student Data!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jinugeorge/school-application/resources/views/student/create.blade.php ENDPATH**/ ?>