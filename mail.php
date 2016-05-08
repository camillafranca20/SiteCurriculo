<?php
// recebe as Variaveis
$nome     = $_POST["nome"    ];
$email    = $_POST["email"   ];
$assunto  = $_POST["assunto" ];
$mensagem = $_POST["mensagem"];
global $email; //transforma em variavel global a variavel e-mail
$enviou =   mail("renan.cunha20@gmail.com", 
                  utf8_decode("$assunto"),
                 "
                  Nome:   $nome  
                  -----------------------------------------------
                  Mensagem: $mensagem
                  -----------------------------------------------",
                 "From: $nome <$email>");
				 
if ($enviou)
{
 echo "<script>javascript:alert('Email enviado!')</script>";
 echo "<script>javascript:location.href='index.html'</script>";
}
else
{
 echo "<script>";
 echo "javascript:alert('Erro,email nao enviado')";
 echo "javascript:location.href='index.html'";
 echo "</script>";
}
?>	