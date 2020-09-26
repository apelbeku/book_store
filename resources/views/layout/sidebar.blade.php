
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                MENU
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('book.index') }}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="mdi mdi-book-multiple-variant"></i>Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.index') }}" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="mdi mdi-book-open"></i>Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="mdi mdi-account"></i>User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('order.index') }}" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="mdi mdi-shopping"></i>Order</a>
                            </li>
                    </div>
                </nav>
            </div>
        </div>