<?php require_once(realpath(dirname(__FILE__))."/../../Views/header.php") ?>
    <div class="container">
        <form method="POST" action="/cliente/editar/<?php echo $data['cliente']->id; ?>" id="editar">
            <div class="form-group">
            
                <label for="nomeCompleto">Nome completo</label>
                <input type="text" value="<?php echo $data['cliente']->nome_completo; ?>" name="nome_completo" class="form-control" id="nomeCompleto" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $data['cliente']->email; ?>" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" value="<?php echo $data['cliente']->cpf; ?>" name="cpf" class="form-control" id="cpf" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" value="<?php echo $data['cliente']->telefone; ?>" name="telefone" class="form-control" id="telefone">
            </div>
        </form>
        <form method="POST" action="/cliente/excluir/<?php echo $data['cliente']->id; ?>" id="excluir">
        </form>
        <div class="row no-gutters">
            <div class="col-auto mr-3">
                <button type="submit" form="excluir" class="btn btn-danger">Excluir</button>
            </div>
            <div class="col-auto">
                <button type="submit" form="editar" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </div>
    
<?php require_once(realpath(dirname(__FILE__))."/../../Views/footer.php") ?>