

            <?= $menu ?>
            <div class="bg-secondary bg-opacity-25" id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <h3 class="card-body">Entradas</h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>R$ <?= $soma ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <h3 class="card-body">Saidas<h2>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>R$ <?= $sub ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <h3 class="card-body">Saldo</h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2>R$ <?= $saldo ?></h2>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                           
                            <div class="col-xl-10 m-auto">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                        
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Entradas
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Valor</th>
                                            <th>Método</th>
                                            <th>Serviço</th>
                                            <th>Descrição</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <!-- aqui vai ser inserida as entradas -->
                                    <tbody>
                                           
                                        <? foreach($entradas as $entrada => $val): ?>
                                        <tr>
                                            
                                            <td>R$ <?= $val['value'] ?></td>
                                            <td><?= $val['method'] ?></td>
                                            <td><?= $val['service'] ?></td>
                                            <td><?= $val['description'] ?></td>
                                            <td><?= $val['created_at'] ?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

