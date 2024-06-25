<html>
<head>
<title>Lista de Palavras nas placas Mercosul</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Lista de Palavras nas placas Mercosul</h1>

<?php
	$contador = 0;
	$palavras = 0;
	$txt_files = array();
	$padrao = "/^([a-zA-Z]{3}[o|i|s][a-z]([o|i|s]{0,2}))$/";
	$arquivo = $_GET["arq"];
	$letra = preg_replace('/[^[:alnum:]_]/', '',$_GET["letra"]);
	echo "<h2>Usando REGEX $padrao</h2>";
	echo "<p>Dicionário de palavras em PT-BR: ";
    echo "<a href='index.php?arq=full&letra=a'> A </a> ";
    echo "<a href='index.php?arq=full&letra=b'> B </a> ";
    echo "<a href='index.php?arq=full&letra=c'> C </a> ";
    echo "<a href='index.php?arq=full&letra=d'> D </a> ";
    echo "<a href='index.php?arq=full&letra=e'> E </a> ";
    echo "<a href='index.php?arq=full&letra=f'> F </a> ";
    echo "<a href='index.php?arq=full&letra=g'> G </a> ";
    echo "<a href='index.php?arq=full&letra=h'> H </a> ";
    echo "<a href='index.php?arq=full&letra=i'> I </a> ";
    echo "<a href='index.php?arq=full&letra=j'> J </a> ";
    echo "<a href='index.php?arq=full&letra=k'> K </a> ";
    echo "<a href='index.php?arq=full&letra=l'> L </a> ";
    echo "<a href='index.php?arq=full&letra=m'> M </a> ";
    echo "<a href='index.php?arq=full&letra=n'> N </a> ";
    echo "<a href='index.php?arq=full&letra=o'> O </a> ";
    echo "<a href='index.php?arq=full&letra=p'> P </a> ";
    echo "<a href='index.php?arq=full&letra=q'> Q </a> ";
    echo "<a href='index.php?arq=full&letra=r'> R </a> ";
    echo "<a href='index.php?arq=full&letra=s'> S </a> ";
    echo "<a href='index.php?arq=full&letra=t'> T </a> ";
    echo "<a href='index.php?arq=full&letra=u'> U </a> ";
    echo "<a href='index.php?arq=full&letra=v'> V </a> ";
    echo "<a href='index.php?arq=full&letra=w'> W </a> ";
    echo "<a href='index.php?arq=full&letra=x'> X </a> ";
    echo "<a href='index.php?arq=full&letra=y'> Y </a> ";
    echo "<a href='index.php?arq=full&letra=z'> Z </a> ";
    echo "</p>";
	echo "<p>Lista de palavras temáticas: ";
	
	//
	$txt_files = glob("./corpus/*.txt");
	foreach($txt_files as $file) {
	    $end = strpos($file,'.txt');
        echo "<a href='index.php?arq=" . substr($file,9) . "'>" . substr($file,9,strlen($file)-13) . "</a>, ";
    }
	//
	echo "<ul>";
	
	if($arquivo=="full"){
		$fn = fopen("br-sem-acentos.txt","r");
		while(! feof($fn))  {
		    $result = fgets($fn);
		    $palavras++;
		    if(substr($result,0,1)==$letra){
		        if(preg_match($padrao,$result)){
			        //echo "<li>$result</li>";
			        echo "<img src='placas.php?text=$result'>";
			        $contador++;
		        }
		    }
	    }
	} else {
		$fn = fopen("corpus/$arquivo","r");
		while(! feof($fn))  {
		    $result = fgets($fn);
		    $palavras++;
	        if(preg_match($padrao,$result)){
		        //echo "<li>$result</li>";
		        echo "<img src='placas.php?text=$result'>";
		        $contador++;
	        }
	    }
	}
  
	
	fclose($fn);
	
	echo "</ul>";
	echo "<p>Foram encontrados $contador de uma lista de $palavras palavras do arquivo <a href='corpus/$arquivo'>$arquivo</a> que podem aparecer nas placas Mercosul.</p>";
?>
<p>Desenvolvido por Daniel Chagas como um exercício das possibilidades de escrita de nomes em placas.</p>
<p>Este site é puramente informativo, não tendo qualquer ligação com o Departamento Nacional de Trânsito do Brasil, DETRAN, ou qualquer órgão ligado ao trânsito no Mercosul.</p>
<p>Este site não coleta nenhum dado dos visitantes, e nem tem qualquer </p>
<p>O corpus de palavras usado foi encontrado buscando por termos de palavras para quebra de senha por força bruta e listas de palavrões para busca por discurso de ódio. Fontes:</p>
<ul>
<li>https://pt.scribd.com/document/345921799/lista-palavroes-bloqueio-txt</li>
<li>https://github.com/masterzion/mztg</li>
<li>https://github.com/dunossauro/chat-detox</li>
</ul>
<p xmlns:cc="http://creativecommons.org/ns#" >This work is licensed under <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-SA 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/sa.svg?ref=chooser-v1"></a></p>
</body>
</html>
