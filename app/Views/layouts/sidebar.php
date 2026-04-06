<div class="sidebar-wrapper">
    <nav class="mt-2">

        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="navigation"
            aria-label="Main navigation"
            data-accordion="false"
            id="navigation"
        >

            <li class="nav-item">
                <a href="/card" class="nav-link  <?php if($view == 'home/card') echo 'active'; ?>">
                    <i class=""></i>
                    <p>Создать карточку ДЗ</p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="/position" class="nav-link  <?php if($view == 'home/position') echo 'active'; ?> ">
                    <i class=""></i>
                    <p>Позиция</p>
                </a>
            </li>


           <!-- <li class="nav-item menu-open">
                <a href="#" class="nav-link ">
                    <i class=""></i>
                    <p>
                        Dashboard
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link ">
                            <i class=""></i>
                            <p>Dashboard v1</p>
                        </a>
                    </li>


                </ul>
            </li>
-->
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Настройки</p>
                </a>
            </li>
    </nav>
</div>
