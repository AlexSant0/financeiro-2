<?= $menu ?>
<style>
    textarea {
        resize: none;
    }   
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-10 m-auto">
                        <h1>Entrada</h1>
                        <p>Adicionar nova entrada</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10 m-auto">
                        <form class="new-entrada" action="<?= base_url('admin/entrada') ?>" method="post">
                            
                            <div class="mb-2 col-6">
                                <label class="form-label">Serviço</label>
                                <select name="servico" class="form-control">
                                    <option value="1">Volume Russo</option>
                                    <option value="2">Fio a fio</option>
                                    <option value="3">Sobrancelha</option>
                                    <option value="4">Brasileiro</option>
                                </select>
                            </div>
                            <div class="mb-2 col-6">
                                <label class="form-label">Metodo de pagamento</label>
                                <select name="method" class="form-control">
                                    <option value="1">DINHEIRO</option>
                                    <option value="2">PIX</option>
                                    <option value="3">CARTÃO</option>
                                </select>
                            </div>
                            <div class="mb-2 col-6">
                                <label class="form-label">valor</label>
                                <input type="text" class="form-control" name="senha">
                            </div>
                            <div class="mb-5 col-6">
                                <label class="form-label">Descrição</label>
                                <textarea class="form-control" name="description" cols="30" rows="4"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</div>
