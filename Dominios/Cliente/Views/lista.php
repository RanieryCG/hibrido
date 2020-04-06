<?php require_once(realpath(dirname(__FILE__))."/../../Views/header.php") ?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
        <a href="cliente/criar" class="btn btn-success mb-3">Novo cliente</a>
        </div>
    </div>
    <div class="row">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <th>Nome completo</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                    </thead>
                    <tbody>
                        <?php if(count($data['clientes']) > 0) {?>
                            <?php foreach($data['clientes'] as $cliente) {?>
                                
                                <tr>
                                    <td>
                                        <a href="/cliente/edicao/<?php echo $cliente['id'] ?>"><?php echo $cliente['nome_completo'] ?></a>
                                    </td>
                                    <td><?php echo $cliente['email'] ?></td>
                                    <td><?php echo  $cliente['cpf'] ?></td>
                                    <td><?php echo  $cliente['telefone'] ?></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4"> Nenhum cliente cadastrado</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once(realpath(dirname(__FILE__))."/../../Views/footer.php") ?>