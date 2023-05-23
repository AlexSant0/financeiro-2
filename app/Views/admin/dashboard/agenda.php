<?= $menu ?>
<style>
    textarea {
        resize: none;
    }   
</style>
<div class="bg-secondary bg-opacity-25" id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-10 m-auto">
                        <h1>Agendamentos</h1>
                        <p>Agenda uma nova cliente</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10 m-auto">
                        <form class="new-transaction mb-5 pb-5" action="<?= base_url('admin/entrada') ?>" method="post">
                            
                            <div class="mb-2 col-6">
                                <label class="form-label">Nome da cliente</label>
                                <input type="text" name="set[client_name]" placeholder="Nome da cliente" class="form-control date">
                            </div>
                            <div class="mb-2 col-6 select-method">
                                <label class="form-label">Metodo de pagamento</label>
                                <input type="radio" id="dinheiro" name="method" value="1">
                                <label for="dinheiro">Dinheiro</label><br>
                                <input type="radio" id="pix" name="method" value="2">
                                <label for="pix">Pix</label><br>
                                <input type="radio" id="cartao" name="method" value="3">
                                <label for="cartao">Cartão</label>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="mb-2 col-6">
                                        <label class="form-label">valor</label>
                                        <input type="text" class="form-control" name="value" placeholder="R$" required>
                                    </div>
                                    <div class="mb-2 col-6">
                                        <label class="form-label">Data</label>
                                        <input type="date" class="form-control" name="created_at" required>
                                    </div>
                                </div>
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
