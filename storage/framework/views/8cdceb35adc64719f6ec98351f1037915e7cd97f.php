<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview <?php echo e(request()->routeIs('category.*') ? 'menu-open' : ''); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('category.*') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('category.index')); ?>" class="nav-link <?php echo e(request()->routeIs('category.index') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('category/create')); ?>" class="nav-link <?php echo e(request()->routeIs('category.create') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Category</p>
                    </a>
                </li>

            </ul>

       </li>
        <li class="nav-item has-treeview  <?php echo e(request()->routeIs('product.*') ? 'menu-open' : ''); ?>">
            <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('product.*') ? 'active' : ''); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('product.index')); ?>" class="nav-link  <?php echo e(request()->routeIs('product.index') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('product.create')); ?>" class="nav-link  <?php echo e(request()->routeIs('product.create') ? 'active' : ''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Product</p>
                    </a>
                </li>

            </ul>

       </li>
     <li class="nav-item has-treeview  <?php echo e(request()->routeIs('contact.*') ? 'menu-open' : ''); ?>">
                <a href="<?php echo e(url('')); ?>" class="nav-link <?php echo e(request()->routeIs('contact.*') ? 'active' : ''); ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Massages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('contact.showindex')); ?>" class="nav-link  <?php echo e(request()->routeIs('contact.showindex') ? 'active' : ''); ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Massages</p>
                        </a>
                    </li>
                </ul>

           </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
<?php /**PATH C:\Users\pc\Desktop\book-store-master\resources\views/layouts/menu.blade.php ENDPATH**/ ?>