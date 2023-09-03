<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Login:</label>
        <input type="text" name="usuario" value="<?php print $row->usuario; ?>" class="form-control">
    </div>
    <!-- <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div> -->
    <div class="mb-3">
        <label>Nível:</label>
        <select class="form-select" name="tipo" aria-label="Default select example">
            <option selected value="<?php print $row->tipo; ?>">Selecione o nível</option>
            <option value="1" <?=$row->tipo == '1' ? 'selected' : ''?>>Administrador</option>
            <option value="2" <?=$row->tipo == '2' ? 'selected' : ''?>>Usuário</option>
            
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>