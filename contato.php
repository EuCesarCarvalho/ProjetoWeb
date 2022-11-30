<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de Contato</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .content{
            display: flex;
            justify-content: center;
        }
        .contato{
            width: 100%;
            max-width: 500px;
        }
        .form{
            display: flex;
            flex-direction: column;
        }
        .field{
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }
        textarea{
            height: 150px;
        }

    </style>
</head>
<body>
    
    <section class="content">
        
        <div class="contato">
            <h3>Formulario de Contato</h3>
            <form action="" method="POST" class="form">
                <input class="field" type="text" placeholder="Digite o Seu Nome" name="nome">
                <input class="field" type="text" placeholder="Digite o Seu E-mail" name="email">
                <textarea class="field" name="message" placeholder="Digite sua mensagem aqui."></textarea>
                <input class="field" type="submit" value="Enviar">
            </form>
        </div>

    </section>
</body>
</html>