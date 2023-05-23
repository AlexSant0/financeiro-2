<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('admin') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="<?= base_url('admin/entrada') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Entradas
                            </a>
                            <a class="nav-link collapsed" href="<?= base_url('admin/saida') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Saidas
                            </a>

                            <a class="accordion-button nav-link collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-days"></i></div>
                            Agendamento
                            </a>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a class="nav-link collapsed" href="<?= base_url('admin/agenda') ?>">
                                        Ver agendamentos
                                    </a>
                                    <a class="nav-link collapsed" href="<?= base_url('admin/agenda') ?>">
                                        Novo Agendamento
                                    </a>
                                </div>
                            </div>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('admin/agenda') ?>">Novo Agendamento</a></li>
                                <li><a class="dropdown-item" href="#">Ver agendamentos</a></li>
                            </ul>
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>