<html>
    <head>

        <title><?php echo $titulo ?></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    </head>
    <body>
        <h2><?php echo $titulo ?></h2>
        <p><a href="<?php echo base_url('cadastros')?>">Voltar para Lista de Cadastros</a></p>
        <strong><?php echo $msg ?></strong>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo (isset($cadastro) ? $cadastro->id : '') ?>" />
            <p>Nome da pessoa: 
                <input type="text" name="nome" 
                value="<?php echo (isset($cadastro) ? $cadastro->nome : '') ?>" 
                />
            </p>

            <p>Telefone: 
                <input type="tel" name="telefone" id="telefone" 
                value="<?php echo (isset($cadastro) ? $cadastro->telefone : '') ?>" 
                />
            </p>

            <p>Email: 
                <input type="email" name="email" 
                value="<?php echo (isset($cadastro) ? $cadastro->email : '') ?>" 
                />
            </p>


            <p><input type="submit" value="<?php echo $acao ?>" />

        </form>
        <hr>

    </body>

</html>