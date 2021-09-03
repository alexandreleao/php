<?php require_once "./vendor/autoload.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PAGINA DE INICIO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1><?php echo "Teste PHP"; ?></h1>

    <?php
        
        
        $loader = new \Twig\Loader\ArrayLoader([
            'index' => 'Render from twig {{ nome }} {{sobrenome}}! {{texto}} {{maiuscula}}',
            'teste' => '{{nova_variavel}} {{t}}',
            'home'  => '{{home }} {{h}}',
            'produto'  => '{{produto }} {{produto}}',
            
        ]);
        $twig = new \Twig\Environment($loader);
        $user = new App\User;
        $teste = new App\Teste;
        $home = new  App\Home;
        $produto = new App\Produto;

        

        echo "<p>". $twig->render('index', ['nome' => $user->getNome(), 'texto' => $user->texto, 'maiuscula' => $user->getTextpMaiuscula()  ]) . "</p>";
        
        echo "<p>" . $twig->render('teste', ['nova_variavel' =>$teste->getNomeTexto(), 't' => $teste->t ]). "</p>";
        echo "<br>";
        echo $twig ->render('home', ['home' =>$home->getHome(), 'home' => $home->home ]);
        echo  "<p>" .$twig ->render('produto', ['produto' =>$produto->getProduto(), 'prod' => $produto->prod ]) ."</p>";

        $div= "<ul>";
        foreach($user->renderArray() as $item){
            $titulo = "<b>" .ucwords($item['titulo']) . "</b>";
            $nome = $item['nome'];
            $tags = App\User::renderTags($item['tags']);
            $div .= "<li> {$nome} - {$titulo} - {$tags} </li>";
             
        }
        $div .= "</ul>";

        echo $div;
        


        use App\Facade\Facade;
        use App\Facade\Subsystem1;
        use App\Facade\Subsystem2;
        
        
        $subsystem1 = new Subsystem1();
        $subsystem2 = new Subsystem2();
        $facade = new Facade($subsystem1, $subsystem2);
        clientCode($facade);
        function clientCode(Facade $facade)
        {
            echo $facade->operation();
        }




        echo "<hr>";
        use App\AbstractClass\Filha1;
        use App\AbstractClass\Filha2;
        
        $filha1 = new Filha1;
        $filha1->imprimir();
        echo $filha1->valorComPrefixo('prefixo');
        echo "<hr>";
        $filha2 = new Filha2;
        $filha2->imprimir();
        echo $filha2->valorComPrefixo('Outro');


    ?>
</body>
</html>