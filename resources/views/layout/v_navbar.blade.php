<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="/" class="{{ request()->is('/') ? 'nav-link active' : 'nav-link' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text">Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/gejala" class="{{ request()->is('gejala') ? 'nav-link active' : 'nav-link' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text">Data Gejala</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/penyakit" class="{{ request()->is('penyakit') ? 'nav-link active' : 'nav-link' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text">Data Penyakit</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/relasi" class="{{ request()->is('relasi') ? 'nav-link active' : 'nav-link' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text">Relasi Penyakit</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/user" class="{{ request()->is('user') ? 'nav-link active' : 'nav-link' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text">User</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
