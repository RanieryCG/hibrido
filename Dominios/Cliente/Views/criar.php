<?php require_once(realpath(dirname(__FILE__))."/../../Views/header.php") ?>
    <div class="container">
        <form method="POST" action="/cliente/salvar">
            <div class="form-group">
                <label for="nomeCompleto">Nome completo</label>
                <input type="text" name="nome_completo" class="form-control" id="nomeCompleto" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone">
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
    
<?php require_once(realpath(dirname(__FILE__))."/../../Views/footer.php") ?>