<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <?php include "includes.php"; ?>

    <!-- Inclui a base de dados -->

    <?php include "dados.php";
    $films = (object)$dados; ?>
</head>
<body>

<div id="site-content">
    <?php include "header.php"; ?>

    <?
    ?>
    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="movie-list">
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img1.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Toy Story</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Animação|Aventura|Comédia</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">8.3</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: O aniversário de Andy está chegando e os brinquedos estão nervosos. Afinal de contas, eles temem que um novo brinquedo possa substituí-los. Liderados por Woody, um caubói que é também o brinquedo predileto de Andy, eles montam uma escuta que lhes permite saber dos presentes ganhos. Entre eles está Buzz Lightyear, o boneco de um patrulheiro espacial, que logo passa a receber mais atenção do garoto. Isto aos poucos gera ciúmes em Woody, que tenta fazer com que ele caia atrás da cama. Só que o plano dá errado e Buzz cai pela janela. É o início da aventura de Woody, que precisa resgatar Buzz também para limpar sua barra com os outros brinquedos.</p></li>
                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img2.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Jumanji</h3>
                                <br>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Ação|Aventura|Família</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">6.9</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Dois garotos apavorados enterram um baú e, cem anos depois, o filho de um empresário descobre que dentro dele há um jogo chamado Jumanji. Quando começa a jogar com uma amiga, ele logo é penalizado a ficar na floresta até que alguém tire cinco ou oito. Como na jogada seguinte ela é atacada por morcegos, em virtude de seu posicionamento no tabuleiro, o jogo é interrompido e ele imediatamente fica preso dentro de Jumanji. Mas, vinte e seis anos depois, duas crianças começam a jogar e uma acaba libertando-o. Porém, a única forma de deixar tudo como antes é terminar a partida, mas para isto é preciso achar a participante da partida de 1969. Juntos eles enfrentam perigos, que surgem a cada jogada, e enquanto o jogo se desenrola a cidade se transforma em um caos, pois animais selvagens, plantas assassinas e até um caçador de pessoas saem do tabuleiro e vão permanecer enquanto o jogo não findar.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img3.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Dois Velhos Mais Rabugentos</h3>
                                <br>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Romance</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">6.6</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Dois velhos amigos brigam por vários anos e exceto pelo fato de um deles (Jack Lemmon) ter casado recentemente, parece que nada mais mudou. Mas quando uma bela italiana (Sophia Loren) decide transformar a loja de iscas em um "ristorante" as coisas se complicam, se complicando ainda mais quando ela passa a se interessar pelo solteirão (Walter Matthau) da dupla.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img4.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Falando de Amor</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Drama|Romance</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">5.7</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Savannah, Bernadine, Robin e Gloria estão todas em busca do amor verdadeiro. Bernadine achava que tinha encontrado a felicidade, até que seu marido a deixou por outra mulher. Savannah e Robin são bem sucedidas em suas carreiras, mas suas vidas amorosas são um fracasso. E a divorciada Gloria está de volta à parada flertando com seu novo e muito interessante vizinho. Baseado no best-seller de Terry McMillan.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img5.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">O Pai da Noiva 2</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Famiilia|Romance</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">5.9</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Após todas as confusões envolvendo o casamento de sua filha, George Banks (Steve Martin) vê sua vida virar de cabeça para baixo ao receber uma dupla notícia: sua filha recém-casada e sua esposa estão grávidas.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img6.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Fogo Contra Fogo</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Ação|Crime|Drama</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">8.2</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Em Los Angeles é cometido um assalto no qual são roubados US$ 1,6 milhão de títulos ao portador e três policiais são mortos no assalto. Assim, um detetive da Divisão de Roubo e Homicídio (Al Pacino) assume o caso. Apesar de contar com poucas pistas, de estar lidando com ladrões profissionais além de ter problemas em sua vida pessoal, ele tenta impedir que esta quadrilha continue operando.</p></li>
                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img7.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Sabrina</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Drama</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">6.3</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Prestes a se casar, o filho caçula de uma rica família se apaixona pela filha do motorista, que retornou após uma viagem de 2 anos a Paris. Ao tentar dissuadi-lo da idéia de romper o noivado, seu irmão mais velho acaba também se apaixonando por ela. Dirigido por Sidney Pollack (A Firma) e com Harrison Ford, Julia Ormond e Greg Kinnear no elenco. Recebeu 2 indicações ao Oscar.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img8.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Morte Súbita</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Ação|Crime|Terror</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">5.7</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Nas finais de uma decisiva partida de hockey sobre gelo, um grupo de terroristas ameaça a vida dos torcedores, inclusive a do vice-presidente, caso o governo norte americano não pague, até o final do jogo, a quantia de um bilhão e setecentos milhões de dólares.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img9.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">007 - Contra GoldenEye</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Ação|Aventura|Suspense</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">7.2</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Com a queda da Cortina de Ferro e o final da Guerra Fria, o modo de obter poder deu ao mundo uma nova ordem, que envolvem esquemas perigosos que visam apenas o lucro. Neste contexto, James Bond conhece em Mônaco Xenia Onatopp, uma mulher extremamente bela e perigosamente mortal, que pertence a Máfia russa. Bond tenta encontrar o GoldenEye, uma arma secreta espacial que destrói tudo que tenha um circuito eletrônico e que, caso caia em mãos erradas dará aos seus donos o poder de derrubar governos. Para impedir um catástrofe mundial, James se une a Natalya Simonova, uma programadora de computadores</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img10.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Meu Querido Presidente</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Drama|Romance</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">6.8</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Andrew Sheperd (Michael Douglas) é o atual presidente americano, que perdeu a mulher, vítima de câncer, logo após ter sido eleito por uma margem mínima. No decorrer de três anos ele conseguiu uma aprovação de 63% do eleitorado, mas quando entra em uma fase do seu mandato em que tudo é calculado visando a reeleição, se envolve com uma lobista (Annette Bening). A paixão do presidente passa a ser o principal alvo de um senador (Richard Dreyfuss), que é candidato à presidência.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img11.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Drácula - Morto mas Feliz</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Comédia|Fantásia|Terror</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">5.8</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Paródia da história de Bram Stoker. Aqui, rico inglês é atacado pelo Conde Drácula, e Van Helsing entra em cena para salvar todos e garantir a maior confusão.</p></li>

                        </div>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src= "images/img12.jpg"></figure>
                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div align="center" class="card-body text-warning">
                                <h3 class="card-title">Balto</h3>
                            </div>
                            <li class="list-group-item">Genêro <p align="center">Animação|Aventura|Drama</p></li>
                            <br>
                            <li class="list-group-item">Avaliação no IMBD   <a class="page-link">7.1</a></li>
                            <br>
                            <li align ="justify" class="list-item"> Descrição: Balto é um animal meio-cão, meio-lobo, que tem a chance de se tornar um grande herói. No inverno de 1925, uma epidemia de difteria ameaça as crianças de Nome, no Alasca. Ele, então, lidera uma matilha de 600 cachorros em uma longa viagem para conseguir a quantidade de remédios necessária, tendo de enfrentar uma forte tempestade de neve. Baseado em fatos reais.</p></li>

                        </div>
                    </div>
                </div> <!-- .movie-list -->

                <div class="pagination">
                    <span class="page-number current">1</span>
                    <a href="page2.php" class="page-number">2</a>
                    <a href="page3.php" class="page-number">3</a>
                    <a href="page4.php" class="page-number">4</a>
                    <a href="page5.php" class="page-number">5</a>
                    <a href="page2.php" class="page-number next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div> <!-- .container -->
    </main>
    <?php include "footer.php"?>
</div>
</body>
</html>

