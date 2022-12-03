<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview" <?php echo e(request()->routeIs('users.*') ? 'menu-open' : ''); ?>>
            <a href="<?php echo e(route('users')); ?>" class="nav-link active"  <?php echo e(request()->routeIs('users.*') ? 'active' : ''); ?> >
                <i class="nav-icon fas fa-users"></i>
                <p>
                    <?php echo e(trans('admin.users')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('users')); ?>" class="nav-link" <?php echo e(request()->routeIs('users') ? 'active' : ''); ?>>
                        <i class="fas fa-users nav-icon"></i>
                        <?php echo e(trans('admin.users')); ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('users.create')); ?>" class="nav-link" <?php echo e(request()->routeIs('users.create') ? 'active' : ''); ?>>
                        <i class="fas fa-plus nav-icon"></i>
                        <?php echo e(trans('admin.user_add')); ?>

                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview <?php echo e(request()->routeIs('category.*') ? 'menu-open' : ''); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('category.*') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    <?php echo e(trans('admin.category')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('category.index')); ?>" class="nav-link <?php echo e(request()->routeIs('category.index') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>

                        <p><?php echo e(trans('admin.categories')); ?></p>

                        <p><?php echo e(trans('admin.category')); ?></p>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('category/create')); ?>" class="nav-link <?php echo e(request()->routeIs('category.create') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?php echo e(trans('admin.category_add')); ?></p>
                    </a>
                </li>

            </ul>

        </li>
        <li class="nav-item has-treeview  <?php echo e(request()->routeIs('product.*') ? 'menu-open' : ''); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('product.*') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>



                    <?php echo e(trans('admin.product')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('product.index')); ?>" class="nav-link  <?php echo e(request()->routeIs('product.index') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>

                        <p><?php echo e(trans('admin.products')); ?></p>

                        <p><?php echo e(trans('admin.product')); ?></p>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('product.create')); ?>" class="nav-link  <?php echo e(request()->routeIs('product.create') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?php echo e(trans('admin.product_add')); ?></p>
                    </a>
                </li>

            </ul>

        </li>
        <li class="nav-item has-treeview  <?php echo e(request()->routeIs('contact.*') ? 'menu-open' : ''); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('contact.*') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    <?php echo e(trans('admin.massage')); ?>

                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('contact.showindex')); ?>" class="nav-link  <?php echo e(request()->routeIs('contact.showindex') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p><?php echo e(trans('admin.Massage')); ?></p>
                    </a>
                </li>
            </ul>

        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
<?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/admin/layouts/menu.blade.php ENDPATH**/ ?>