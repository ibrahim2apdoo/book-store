<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="{{url('')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('category')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('category/create')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Category</p>
                    </a>
                </li>

            </ul>

       </li><li class="nav-item has-treeview">
            <a href="{{url('')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('product')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('product/create')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Product</p>
                    </a>
                </li>

            </ul>

       </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
