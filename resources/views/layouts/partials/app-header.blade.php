<header class="header">
    <nav class="navbar">

        <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
        </div>

        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">

                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block"><span>Laravel </span><strong>Boilerplate</strong></div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                    </a>
                    <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                </div>

                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item d-flex align-items-center">
                        <a id="search" href="#"><i class="icon-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link logout"><span class="d-none d-sm-inline">{{ __('Logout') }}</span><i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>