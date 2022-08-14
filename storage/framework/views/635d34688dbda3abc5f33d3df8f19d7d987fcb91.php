<?php $__env->startSection('content'); ?>

<div class="container bg-light p-5 rounded">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-10">Welcome to <?php echo e(config('app.name')); ?></h1>
            <p></p>
            <br>
            <div class="input-group mb-3">
                <input
                    type="text"
                    name="search"
                    id="search"
                    value="<?php echo e(request()->get('search')); ?>"
                    class="form-control"
                    placeholder="Search Student..."
                    aria-label="Search"
                    aria-describedby="button-addon2">
                <button class="btn btn-primary" id="button-addon2" onclick="clearSearch();">clear</button>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Registered On</th>
                    <th scope="col">Identification No</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody id="studentTBody">

                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e(++$key); ?></td>
                        <td><a href="/student/viewDetails/<?php echo e($student->id); ?>"><?php echo e($student->Name); ?> <?php echo e($student->Surname); ?></a></td>
                        <td><?php echo e($student->RegisteredOn); ?></td>
                        <td><?php echo e($student->IdentificationNo); ?></td>
                        <td>
                            <a href="/student/edit/<?php echo e($student->id); ?>" class="btn btn-outline-primary">Edit</a>
                            <form method="POST" action="/student/delete/<?php echo e($student->id); ?>">
                                <?php echo e(method_field('delete')); ?>

                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td><p class="text-warning">No Data available</p></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>

            <label>Create new Student data</label>
            <a href="/student/createStudent" class="btn btn-outline-success">Create Student</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '<?php echo e(URL::to('student/search')); ?>',
            data:{'search':$value},
            success:function(data){
                console.log(data);
                $('body').html(data);
            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });

    function clearSearch()
    {
        $('#search').val('');
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jinugeorge/school-application/resources/views/home.blade.php ENDPATH**/ ?>