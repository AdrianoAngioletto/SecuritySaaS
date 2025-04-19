<?php


class ContatoController {

    public function form($nome, $email, $mensagem) {

        echo "<script>
            alert('to aqui');
        </script>";
       
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

        
        if (empty($nome) || empty($email) || empty($mensagem)) {
            echo "<script>alert('Por favor, preencha todos os campos.');</script>";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Por favor, insira um e-mail válido.');</script>";
            return;
        }

       
        echo "<script>
            let nome = " . json_encode($nome) . ";
            let email = " . json_encode($email) . ";
            let mensagem = " . json_encode($mensagem) . ";

            alert('Mensagem enviada com sucesso!\\nNome: ' + nome + '\\nEmail: ' + email + '\\nMensagem: ' + mensagem);
        </script>";
    }


}

?>