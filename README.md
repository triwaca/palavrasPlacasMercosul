# palavrasPlacasMercosul
 Aplicação em PHP que gera possiveis nomes em placas no padrão Mercosul brasileiro, usando corpus de palavras livres. As listas de palavras são passadas em um REGEX para ver se encaixam nas placas Mercosul. O REGEX para o padrão brasileiro é `/^([a-zA-Z]{3}[o|i|s][a-z]([o|i|s]{0,2}))$/`. Ao selecionar um corpus, o código irá filtrar quais palavras são possíveis de se formar uma placa mercosul, e irá criar cada uma das imagens das placas. Se a palavra for menor que os 7 caracteres da placa, os últimos caracteres serão gerados aleatoriamente.

 ![exemplo de placas geradas através de corpus de palavras](https://github.com/triwaca/palavrasPlacasMercosul/blob/main/images/example.png.png)

Desenvolvido como um exercício das possibilidades de escrita de nomes em placas. O corpus de palavras usado foi encontrado buscando por termos de palavras para quebra de senha por força bruta e listas de palavrões para busca por discurso de ódio. Fontes:

- https://pt.scribd.com/document/345921799/lista-palavroes-bloqueio-txt
- https://github.com/masterzion/mztg
- https://github.com/dunossauro/chat-detox

## Testes
Você pode testar o código funcionando no meu servidor de trabalho: https://lapin.cloud/mercosul/ 

## Lista de palavras temáticas
academia-brasileira-letras, academico, algoritimos, americanos, artes_marciais, artistas_contemporaneos, arvores, aves, batalhas-revolucoes, batman, biblia, biologia, biologos, blues, bolsas, br-600-mais, brincadeirascrianca, budismo, carros, cartunistas, cidades, cigarros, criaturaslendarias, desportos, dinossauros, divindades, doencas, elementosquimicos, escolasdesamba, escoteiros, escritores-lingua-portuguesa, escultores, estados, estrelas, exploradores-portugueses, filmes_acao, filmes_drama, filmes_famosos, filmes_ficcao, filmes_musicais, filmes_romance, filmes_suspense, filmes_terror, filosofos, fisica-particulas, fisicos, fobias, formula1, frutas, gentilicos, geografos, geologia-termos, geologos, girias, hannibal, harryPotter, herois, hipismo, historia, homemAranha, humoristas, ilustradores, industrias, jazz, jornalistas, lgbt, lugaresmitologicos, mamiferosbrasil, matematica, medicina, medicos, minerios, mitologiachinesa, mitologiagrecoromana, montanhas, musicaEletronica, natacao, nautica, nobels, orchidaceae, palavroes-regionais, palavroes, pintores, plantasbrasil, praias, psicologos, refrescos-refrigerantes, reggae, religiao, repiteis, rochas, rock, rockbalboa, rpg, santos, senhordosaneis, sociedadesecreta, teatrosbr, termos-latim, universidades, vulcoes, xote.
