<html>
    <head>

        <title><?php echo $titulo ?></title>
        <style>
            .tabela {
                border: 1px solid;
            }
            .tabela td {
                padding: 5px 10px;
                border: 1px solid;
                text-align: center;
            }
             .tabela tr {
                border:  white;
            }

            * {
                font-family: arial, helvetica, sans-serif;
            }
            
        </style>
    </head>
    <body>
        <h2><?php echo $titulo ?></h2>
       
        <p><a href="<?php echo base_url('cadastros/inserir') ?>">+Inserir Novo Cadastro</a></p>
        <table class="tabela">
            <tr>
                <td>Código de cadastro</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($cadastros as $cadastro) : ?>
            <tr>
                <td><?php echo $cadastro->id ?></td>
                <td><?php echo $cadastro->nome ?></td>
                <td><?php echo $cadastro->telefone ?></td>
                <td><?php echo $cadastro->email ?></td>
                <td><a href="<?php echo base_url('cadastros/editar/' . $cadastro->id)?>">Editar</a></td>
                <td><a href="<?php echo base_url('cadastros/excluir/' . $cadastro->id)?>">Excluir</a></td>
            </tr>
            <?php endforeach ?>
        </table>
        <hr>

    </body>
 
</html>