<?php

    require_once('PHPMailer/PHPMailer.php');
    require_once('PHPMailer/SMTP.php');
    require_once('PHPMailer/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    
    $getPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

            //Captura dados do formulário
    $erro = true;
    $nome = $getPost['nome'];
    $email = $getPost['email'];
    $mensagem = $getPost['mensagem'];

    if( empty($nome) || empty($email) || empty($mensagem)){
        echo '
            <script>
                $(document).ready( function(){

                    swal({
                        title: "Oops!",
                        text: "Preencha todos os campos obrigatórios...",
                        icon: "warning"
                    })
                
                });
            </script>
        ';        
    }else {
        /*
        echo '
            <script>
                $(document).ready( function(){
                    swal("Sucesso","Mensagem envida!","success");
                });
            </script>
        ';
        */
        FormContato::enviar($nome,$email,$mensagem);
    }

    class FormContato{

        public static function enviar ($nome,$email,$mensagem){            

            // Inicia a classe PHPMailer 
            $mail = new PHPMailer(); 

            // Método de envio 
            $mail->IsSMTP(); 

            // Enviar por SMTP 
            //$mail->Host = "smtp.gmail.com"; 
            $mail->Host = "smtp.live.com"; 


            // Você pode alterar este parametro para o endereço de SMTP do seu provedor 
            //$mail->Port = 587; 
            $mail->Port = 587; 


            // Usar autenticação SMTP (obrigatório) 
            $mail->SMTPAuth = true; 

            // Usuário do servidor SMTP (endereço de email) 
            // obs: Use a mesma senha da sua conta de email 
            $mail->Username = 'partyybox@hotmail.com'; 
            $mail->Password = 'cestasecaixas@2020'; 

            // Configurações de compatibilidade para autenticação em TLS 
            $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

            // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
            // $mail->SMTPDebug = 2; 

            // Define o remetente 
            // Seu e-mail 
            $mail->From = "partyybox@hotmail.com"; 

            // Seu nome
            $mail->FromName = "PartyyBox"; 

            // Define o(s) destinatário(s) 
            $mail->AddAddress('partyybox@hotmail.com', 'PartyyBox'); 

            // Opcional: mais de um destinatário
            // $mail->AddAddress('fernando@email.com'); 

            // Opcionais: CC e BCC
            // $mail->AddCC('joana@provedor.com', 'Joana'); 
            // $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

            // Definir se o e-mail é em formato HTML ou texto plano 
            // Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
            $mail->IsHTML(true); 

            // Charset (opcional) 
            $mail->CharSet = 'UTF-8'; 

            // Assunto da mensagem 
            $mail->Subject = "Partyybox - Formulário de contato"; 

            // Corpo do email 
            $mail->Body = "
                Nome: {$nome}  <br>
                Email: {$email} <br>
                Mensagem: {$mensagem} <br><br>

                Att, <br>
                PartyyBox
            "; 

            // Opcional: Anexos 
            // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

            // Envia o e-mail 
            $enviado = $mail->Send(); 

            // Exibe uma mensagem de resultado 
            if ($enviado) 
            { 
                echo '
                    <script>    
                
                        swal({
                            title: "Sucesso!",
                            text: "Mensagem enviada com sucesso...",
                            icon: "success"
                        })

                    </script>
                '; 
            } else { 
                echo '
                    <script>    
                        
                        swal({
                            title: "Ops!",
                            text: "Houve um erro ao enviar mensagem...",
                            icon: "error"
                        })
                        
                    </script>
                ';//.$mail->ErrorInfo;
            } 
        }   

    }
    
     
?>