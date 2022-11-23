<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 259px;margin-inline-end: auto;" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <h1 class="m-0 text-dark" style="text-align: center"><?php echo e(!empty($title)?$title:trans('admin.admin_control')); ?> </h1>

                    <div class="col-12">
                        <div class="card">
                            <div class="m-0 text-dark" style="text-align: center">Users </div>
                            <div class="card-body">
                                  <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th><?php echo e(trans('admin.created_at')); ?></th>
                                <th><?php echo e(trans('admin.updated_at')); ?></th>
                                <th><?php echo e(trans('admin.email')); ?></th>
                                <th><?php echo e(trans('admin.name')); ?></th>
                                <th><?php echo e(trans('admin.role')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('users/'.$userinfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo e(url ('users/'.$userinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td><?php echo e($userinfo->created_at); ?></td>
                                    <td><?php echo e($userinfo->updated_at); ?></td>
                                    <td><?php echo e($userinfo->email); ?></td>
                                    <td><?php echo e($userinfo->name); ?></td>
                                    <td><?php echo e($userinfo->role); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th><?php echo e(trans('admin.created_at')); ?></th>
                                <th><?php echo e(trans('admin.updated_at')); ?></th>
                                <th><?php echo e(trans('admin.email')); ?></th>
                                <th><?php echo e(trans('admin.name')); ?></th>
                                <th><?php echo e(trans('admin.role')); ?></th>
                            </tr>
                            </tfoot>
                        </table>

                            </div>

                            <?php echo e($user->render()); ?>


                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="m-0 text-dark" style="text-align: center">Categories </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th> delete </th>
                                            <th> edit </th>
                                            <th> created at </th>
                                            <th> updated at </th>
                                            <th> category name </th>
                                            <th>category description</th>
                                            <th>added by</th>
                                            <th> number of product </th>
                                            <th>category image</th>
                                            <th>category id </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo Form::open(['id'=>'form_delete','url'=>url('category/'.$categoryinfo->id),'method'=>'delete']); ?>

                                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                                    <?php echo Form::close(); ?>

                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo e(url ('category/'.$categoryinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                                </td>
                                                <td><?php echo e($categoryinfo->created_at); ?></td>
                                                <td><?php echo e($categoryinfo->updated_at); ?></td>
                                                <td><a href="category/<?php echo e($categoryinfo->id); ?>"><?php echo e($categoryinfo->category_name); ?></a></td>
                                                <td><?php echo e($categoryinfo->category_description); ?></td>
                                                <td><?php echo e($categoryinfo->categories->name); ?></td>
                                                <td><?php echo e($categoryinfo->products()->count()); ?></td>
                                                <td>
                                                    <?php if(!empty($categoryinfo->category_image)): ?>
                                                        <img src="<?php echo e(asset('storage/public/'.$categoryinfo->category_image)); ?>" style="width: 100px;height: 100px;">
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($categoryinfo->id); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th> category name </th>
                                            <th> delete </th>
                                            <th> edit </th>
                                            <th> created at </th>
                                            <th> updated at </th>
                                            <th>category description</th>
                                            <th>added by</th>
                                            <th> number of product </th>
                                            <th>category image</th>
                                            <th>category id </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            <?php echo e($category->render()); ?>

                        </div>

                    </div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <?php echo $__env->make('admin.layouts.massage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </section>
<!-- /.content-wrapper -->
</div>
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/admin/index.blade.php ENDPATH**/ ?>