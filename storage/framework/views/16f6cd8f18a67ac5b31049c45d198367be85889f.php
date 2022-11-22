<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview <?php echo e(active_menu('admin')[0]); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    <?php echo e(trans('admin.dashboard')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" <?php echo e(active_menu('admin')[1]); ?>>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?php echo e(trans('admin.dashboard')); ?></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('settings')); ?>" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?php echo e(trans('admin.settings')); ?></p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview <?php echo e(active_menu('users')[0]); ?>">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    <?php echo e(trans('admin.users')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview <?php echo e(active_menu('users')[1]); ?>">
                <li class="nav-item">
                    <a href="<?php echo e(url('users')); ?>" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <?php echo e(trans('admin.users')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('users/create')); ?>" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <?php echo e(trans('admin.user_add')); ?>

                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
<?php /**PATH E:\project book-store\Book-store\resources\views/admin/layouts/menu.blade.php ENDPATH**/ ?>