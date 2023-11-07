<header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown px-1 text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                <div class="nav-item col-auto" style="height: 32px;">
                    <div class="vr d-flex h-100 mx-2 "></div>
                    <!-- <hr class="d-lg-none my-2 text-white-50"> -->
                </div>
                <div class="nav-item dropdown  bd-mode-toggle">
                    <button class="btn px-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
                        aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static"
                        aria-label="Toggle theme (dark)">
                        <svg class="bi theme-icon-active" width="32" height="32">
                            <use href="#moon-stars-fill"></use>
                        </svg>
                        <span class="d-none ms-2" id="bd-theme-text">Toggle theme</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text" style="">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                data-bs-theme-value="light" aria-pressed="true">
                                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                    <use href="#sun-fill"></use>
                                </svg>
                                Light
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="dark" aria-pressed="false">
                                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                    <use href="#moon-stars-fill"></use>
                                </svg>
                                Dark
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="auto" aria-pressed="false">
                                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                    <use href="#circle-half"></use>
                                </svg>
                                Auto
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>