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
                        <h1>Saida</h1>
                        <p>gastando dinheiro de novo '-'</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10 m-auto">
                        <form class="new-transaction" action="<?= base_url('admin/saida') ?>" method="post">
                            
                            <div class="mb-2 col-6">
                                <label class="form-label">Tipo de saida</label>
                                <select name="type" class="form-control">
                                    <option value="1">Gasto pessoal</option>
                                    <option value="2">Gasto empresa</option>
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
                                <input type="text" class="form-control" name="value" required>
                            </div>
                            <div class="mb-2 col-6">
                                <label class="form-label">Data</label>
                                <input type="date" class="form-control" name="created_at" required>
                            </div>
                            <div class="mb-5 col-6">
                                <label class="form-label">Descrição(opcional)</label>
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
