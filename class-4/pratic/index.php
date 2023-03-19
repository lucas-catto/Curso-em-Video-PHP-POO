<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula Prática 4 – Métodos Getter, Setter e Construtor</title>
    </head>
    <body>
        <pre>
            <?php
                // Aula Prática 4 – Métodos Getter, Setter e Construtor

                require_once('Caneta.php');
                /*
                $c1 = new Caneta();
                
                //$c1->setModelo("BIC");  // alterando o nome do modelo através de um método (Setter)
                $c1->modelo = "BIC";  // alterando o nome do modelo diretamente
                // -----------------------------------------------------------------------------------
                $c1->setPonta(0.5);  // alterando ovalor da ponta atráves de um método (Setter)
                //$c1->ponta = 0.5;  // alterando o valor da ponta diretamente - mas isso dá erro pois é privado e para fazer acesso desse atributo é necessário fazer uso do método acessor (Setter).

                print_r($c1); // mostra a estrutura dentro do objeto
                */

                /*
                $c1 = new Caneta();

                $c1->setModelo("BIC"); // inserindo os valores pelo método Setter
                $c1->setPonta(0.5);    // inserindo os valores pelo método Setter
                print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.");
                */

                $c1 = new Caneta("BIC", "black", 0.5);
                $c2 = new Caneta("BIC", "Green", 1.0);
                print_r($c1);
                print_r($c2);


            ?>
        </pre>
    </body>
</html>