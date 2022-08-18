<?php
    $senha = '12345';

    #base64: mao dupla e sempre gera o mesmo codigo pra uma sequencia

    $nova_senha = base64_encode($senha);

    echo 'Senha em base64: '.$nova_senha.'<br>';
    echo 'Senha: '.base64_decode($nova_senha).'<hr>';

    #md5 e sha1: mao unica e sempre gera o mesmo codigo pra uma sequencia

    echo 'Senha em md5: '.md5($senha).'<hr>';
    echo 'Senha em sha1: '.sha1($senha).'<hr>';

    #password hash: gera codigos diferentes pra uma mesma senha

        #'custo' de hardware para criptografia, quanto mais caro mais seguro e demanda mais do hardware
        $options = [ 'cost' => 10];

                                //senha - algoritmo de criptografia - opçoes
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

        echo $senhaSegura.'<hr>';

        #verificando senha criptografada do usuario

            #senha digitada
            $senha_digitada = '123456';

            #senha acima salva no banco com criptografia
            $senha_banco = '$2y$10$W2YId3ylqEPvgojK8OuGMu76ePBCQzj1E5J1kvdI0pIncE0qBeek6';

            if(password_verify($senha, $senha_banco)) {

                echo 'senha valida';

            } else {

                echo 'senha invalida';

            }


?>