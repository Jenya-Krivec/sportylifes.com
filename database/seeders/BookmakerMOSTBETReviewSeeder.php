<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is an international betting platform that operates under a Curaçao license and caters to clients from many regions of the world. The site offers a wide range of markets and has a built-in casino; the company positions itself as a universal platform for betting and gambling."}',
             'value_es' => '{"0":"Mostbet es una plataforma internacional de apuestas que opera bajo licencia de Curazao y está orientada a clientes de muchas regiones del mundo. El sitio ofrece una gran cantidad de mercados y cuenta con un casino integrado; la empresa se presenta como una plataforma universal para apuestas y juegos de azar."}',
             'value_fr' => '{"0":"Mostbet est une plateforme de paris internationale qui opère sous licence de Curaçao et s’adresse à des clients de nombreuses régions du monde. Le site propose un grand nombre de marchés et intègre un casino ; l’entreprise se positionne comme une plateforme universelle pour les paris et les jeux d’argent."}',
             'value_pt' => '{"0":"Mostbet é uma plataforma internacional de apostas que opera sob licença de Curaçao e é voltada para clientes de diversas regiões do mundo. O site oferece uma grande variedade de mercados e possui um cassino integrado; a empresa se posiciona como uma plataforma universal para apostas e jogos de azar."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet provides mobile applications for Android and iOS, along with a wide variety of payment methods, including e-wallets and cryptocurrency, which makes the platform convenient for users in countries with limited access to traditional payment instruments."}',
             'value_es' => '{"0":"Mostbet dispone de aplicaciones móviles para Android e iOS, así como de una amplia gama de métodos de pago, incluidos monederos electrónicos y criptomonedas, lo que hace que la plataforma sea cómoda para los usuarios en países con acceso limitado a los instrumentos de pago tradicionales."}',
             'value_fr' => '{"0":"Mostbet dispose d’applications mobiles pour Android et iOS, ainsi que d’un large éventail de méthodes de paiement, y compris les portefeuilles électroniques et les cryptomonnaies, ce qui rend la plateforme pratique pour les utilisateurs dans les pays où l’accès aux instruments de paiement traditionnels est limité."}',
             'value_pt' => '{"0":"A Mostbet disponibiliza aplicativos móveis para Android e iOS, além de uma ampla gama de métodos de pagamento, incluindo carteiras eletrônicas e criptomoedas, o que torna a plataforma conveniente para usuários em países com acesso limitado a instrumentos de pagamento tradicionais."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"At the same time, a Curaçao license means that the operator provides international services but does not always comply with strict European regulatory standards, which is worth keeping in mind when assessing risks."}',
             'value_es' => '{"0":"Al mismo tiempo, una licencia de Curazao significa que el operador ofrece servicios internacionales, pero no siempre cumple con los estrictos estándares regulatorios europeos, algo que conviene tener en cuenta al evaluar los riesgos."}',
             'value_fr' => '{"0":"En revanche, une licence de Curaçao signifie que l’opérateur propose des services internationaux mais ne respecte pas toujours les normes réglementaires strictes européennes, ce qu’il faut garder à l’esprit lors de l’évaluation des risques."}',
             'value_pt' => '{"0":"Ao mesmo tempo, uma licença de Curaçao significa que o operador oferece serviços internacionais, mas nem sempre cumpre os rigorosos padrões regulatórios europeus, algo a ter em mente ao avaliar os riscos."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Placing bets on Mostbet is convenient, as the site is designed so that players don’t waste much time searching for the right event. Popular leagues such as the Champions League or the EPL are always within easy reach, while less-known tournaments can be found through search or filters."}',
             'value_es' => '{"0":"Apostar en Mostbet es cómodo, ya que el sitio está diseñado para que el jugador no pierda mucho tiempo buscando el evento adecuado. Ligas populares como la Liga de Campeones o la Premier League están siempre a mano, mientras que torneos menos conocidos se pueden encontrar a través del buscador o de los filtros."}',
             'value_fr' => '{"0":"Parier sur Mostbet est pratique, car le site est conçu pour que le joueur ne perde pas trop de temps à chercher l’événement souhaité. Les ligues populaires comme la Ligue des champions ou la Premier League sont toujours accessibles, tandis que les tournois moins connus peuvent être trouvés via la recherche ou les filtres."}',
             'value_pt' => '{"0":"Apostar na Mostbet é conveniente, pois o site foi desenvolvido para que o jogador não perca muito tempo procurando o evento desejado. Ligas populares como a Liga dos Campeões ou a Premier League estão sempre à disposição, enquanto torneios menos conhecidos podem ser encontrados através da busca ou dos filtros."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The sportsbook covers more than 30 sports, ranging from football and tennis to cricket and darts. For major matches, several hundred betting options are offered. You can bet on the match result, totals, and there is also the possibility of placing combined bets."}',
             'value_es' => '{"0":"La línea cubre más de 30 deportes, desde fútbol y tenis hasta críquet y dardos. Para los partidos importantes se ofrecen varios cientos de opciones de apuestas. Es posible apostar al resultado del partido, a los totales y también realizar apuestas combinadas."}',
             'value_fr' => '{"0":"La ligne couvre plus de 30 sports, allant du football et du tennis au cricket et aux fléchettes. Pour les grands matchs, plusieurs centaines d’options de paris sont proposées. Il est possible de parier sur le résultat du match, sur le total, et il existe également la possibilité de placer des paris combinés."}',
             'value_pt' => '{"0":"A linha cobre mais de 30 modalidades esportivas, desde futebol e tênis até críquete e dardos. Para grandes partidas, são oferecidas várias centenas de opções de apostas. É possível apostar no resultado do jogo, no total, bem como realizar apostas combinadas."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The casino at Mostbet is a major part of the platform. It features more than 5,000 games from leading developers such as NetEnt, Microgaming, Pragmatic Play, and others. Slots attract the most attention, especially those with jackpot opportunities. Fans of classic games will find roulette, blackjack, baccarat, and poker in different variations."}',
             'value_es' => '{"0":"El casino de Mostbet es una parte importante de la plataforma. Reúne más de 5.000 juegos de los principales desarrolladores como NetEnt, Microgaming, Pragmatic Play y otros. Las tragamonedas son las que más interés despiertan, especialmente aquellas con opción de jackpot. Los aficionados a los clásicos encontrarán ruleta, blackjack, bacará y póker en distintas variantes."}',
             'value_fr' => '{"0":"Le casino de Mostbet constitue une partie importante de la plateforme. Il rassemble plus de 5 000 jeux provenant de développeurs de renom tels que NetEnt, Microgaming, Pragmatic Play et bien d’autres. Les machines à sous suscitent le plus d’intérêt, notamment celles offrant des jackpots. Les amateurs de classiques y trouveront de la roulette, du blackjack, du baccarat et du poker sous différentes variantes."}',
             'value_pt' => '{"0":"O cassino da Mostbet é uma parte importante da plataforma. Ele reúne mais de 5.000 jogos de desenvolvedores renomados como NetEnt, Microgaming, Pragmatic Play e outros. As slots são as que despertam maior interesse, especialmente aquelas com jackpots. Os fãs de jogos clássicos encontram roleta, blackjack, bacará e pôquer em várias versões."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"A special highlight is the live casino with real dealers, which operates around the clock and recreates the atmosphere of a real gambling venue. All games are available both on computer and smartphone, with graphics quality and loading speed remaining consistently high."}',
             'value_es' => '{"0":"Un aspecto destacado es el casino en vivo con crupieres reales, que funciona las 24 horas y recrea el ambiente de un auténtico salón de juegos. Todos los juegos están disponibles tanto en ordenador como en smartphone, manteniendo siempre una alta calidad gráfica y velocidad de carga."}',
             'value_fr' => '{"0":"Un atout particulier est le casino en direct avec de vrais croupiers, disponible 24 heures sur 24 et offrant une atmosphère digne d’un véritable établissement de jeu. Tous les jeux sont accessibles aussi bien sur ordinateur que sur smartphone, avec une qualité graphique et une vitesse de chargement élevées."}',
             'value_pt' => '{"0":"Um destaque especial é o cassino ao vivo com crupiês reais, que funciona 24 horas por dia e recria a atmosfera de um verdadeiro estabelecimento de jogos. Todos os jogos estão disponíveis tanto no computador quanto no smartphone, mantendo sempre alta qualidade gráfica e rapidez no carregamento."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers odds on par with well-known bookmakers, especially when it comes to popular sports. For example, in a Champions League match between Real Madrid and Manchester City, you might see odds of 2.40 for a win by the Spaniards, 3.40 for a draw, and 2.70 for the English side to win."}',
             'value_es' => '{"0":"Mostbet ofrece cuotas al nivel de las casas de apuestas más conocidas, especialmente en lo que respecta a los deportes populares. Por ejemplo, en un partido de la Liga de Campeones entre el Real Madrid y el Manchester City, se pueden ver cuotas de 2.40 a favor de los españoles, 3.40 al empate y 2.70 a favor de los ingleses."}',
             'value_fr' => '{"0":"Mostbet propose des cotes comparables à celles des bookmakers les plus connus, surtout lorsqu’il s’agit de sports populaires. Par exemple, pour un match de Ligue des Champions entre le Real Madrid et Manchester City, on peut voir des cotes de 2.40 pour une victoire des Espagnols, 3.40 pour un match nul et 2.70 pour une victoire des Anglais."}',
             'value_pt' => '{"0":"A Mostbet oferece odds ao nível das casas de apostas mais conhecidas, especialmente quando se trata de desportos populares. Por exemplo, num jogo da Liga dos Campeões entre o Real Madrid e o Manchester City, é possível encontrar odds de 2.40 para a vitória dos espanhóis, 3.40 para o empate e 2.70 para a vitória dos ingleses."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"On less popular tournaments, odds can be slightly lower. For instance, in Spain’s second division or in the Kazakhstan championship, the favorite’s odds are sometimes 0.10 lower compared to some other bookmakers."}',
             'value_es' => '{"0":"En torneos menos populares, las cuotas pueden ser un poco más bajas. Por ejemplo, en la segunda división de España o en el campeonato de Kazajistán, la cuota del favorito puede ser 0.10 más baja que en otras casas de apuestas."}',
             'value_fr' => '{"0":"Dans les tournois moins populaires, les cotes peuvent être légèrement plus basses. Par exemple, en deuxième division espagnole ou dans le championnat du Kazakhstan, la cote du favori est parfois inférieure de 0,10 à celle proposée par certains autres bookmakers."}',
             'value_pt' => '{"0":"Em torneios menos populares, as odds podem ser um pouco mais baixas. Por exemplo, na segunda divisão de Espanha ou no campeonato do Cazaquistão, a odd do favorito pode ser 0,10 inferior em comparação com outras casas de apostas."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts from $0.2, which allows players to test different strategies without significant risk. Maximum amounts depend on the event. For top matches, you can wager up to $2000, while for less popular tournaments the limits are considerably lower."}',
             'value_es' => '{"0":"La apuesta mínima empieza desde 0,2 $, lo que permite probar distintas estrategias sin un gran riesgo. Las cantidades máximas dependen del evento. En los partidos más importantes se puede apostar hasta 2.000 $, mientras que en torneos menos populares los límites son bastante más bajos."}',
             'value_fr' => '{"0":"La mise minimale commence à 0,2 $, ce qui permet de tester différentes stratégies sans grand risque. Les mises maximales dépendent de l’événement. Pour les matchs phares, on peut parier jusqu’à 2.000 $, tandis que pour les tournois moins populaires, les limites sont nettement plus basses."}',
             'value_pt' => '{"0":"A aposta mínima começa em 0,2 $, o que permite testar diferentes estratégias sem grande risco. Os valores máximos dependem do evento. Nos jogos de topo é possível apostar até 2.000 $, enquanto nos torneios menos populares os limites são consideravelmente mais baixos."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet gives players an impressively wide selection of betting options, especially for popular sports. In football, for example, a Champions League match can feature more than a thousand different markets. You can bet on the match result, totals and handicaps, the number of yellow cards, corners, player statistics, and even combined outcomes such as events in the opening or closing minutes of the match."}',
             'value_es' => '{"0":"Mostbet ofrece a los jugadores una selección muy amplia de mercados, especialmente en los deportes más populares. En el fútbol, por ejemplo, un partido de la Liga de Campeones puede contar con más de mil opciones distintas. Se puede apostar al resultado, a totales y hándicaps, al número de tarjetas amarillas, saques de esquina, estadísticas de jugadores e incluso a combinaciones como lo que ocurra en los primeros o últimos minutos del encuentro."}',
             'value_fr' => '{"0":"Mostbet propose aux joueurs un choix extrêmement large de marchés, en particulier pour les sports populaires. Dans le football, par exemple, un match de Ligue des Champions peut offrir plus d’un millier d’options différentes. Il est possible de parier sur le résultat, les totaux et les handicaps, le nombre de cartons jaunes, les corners, les statistiques des joueurs, ainsi que sur des combinaisons liées aux premières ou aux dernières minutes du match."}',
             'value_pt' => '{"0":"A Mostbet oferece aos jogadores uma seleção muito ampla de mercados, sobretudo nos desportos mais populares. No futebol, por exemplo, um jogo da Liga dos Campeões pode ter mais de mil opções diferentes. É possível apostar no resultado da partida, em totais e handicaps, no número de cartões amarelos, cantos, estatísticas de jogadores e até em combinações relacionadas com os primeiros ou últimos minutos do jogo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Basketball also comes with plenty of engaging markets. Beyond the standard bets on the winner and totals, you’ll find options like individual player performance, the number of three-pointers, or free throws."}',
             'value_es' => '{"0":"En el baloncesto también hay mercados muy interesantes. Además de las apuestas estándar al ganador y a los totales, se encuentran opciones como el rendimiento individual de los jugadores, el número de triples o los tiros libres."}',
             'value_fr' => '{"0":"Le basketball offre également de nombreux marchés attractifs. En plus des paris classiques sur le vainqueur et les totaux, on retrouve des options comme la performance individuelle des joueurs, le nombre de tirs à trois points ou de lancers francs."}',
             'value_pt' => '{"0":"No basquetebol também existem muitos mercados interessantes. Para além das apostas padrão no vencedor e nos totais, estão disponíveis opções como o desempenho individual dos jogadores, o número de triplos ou os lances livres."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Of course, in less popular sports like volleyball or handball, the selection is a bit more modest. Esports, however, may pleasantly surprise you, as for titles like CS:GO or Dota 2 you can bet not only on map winners but also on special events such as the number of rounds or «first blood»."}',
             'value_es' => '{"0":"Por supuesto, en disciplinas menos populares como el voleibol o el balonmano la oferta es más reducida. En cambio, los eSports sorprenden gratamente, ya que en juegos como CS:GO o Dota 2 se puede apostar no solo al ganador de los mapas, sino también a eventos adicionales como el número de rondas o la primera sangre."}',
             'value_fr' => '{"0":"Bien sûr, dans les disciplines moins suivies comme le volley-ball ou le handball, le choix est un peu plus limité. En revanche, l’e-sport réserve de belles surprises : pour des jeux comme CS:GO ou Dota 2, on peut miser non seulement sur les vainqueurs de cartes, mais aussi sur des événements spécifiques comme le nombre de manches ou le « first blood »."}',
             'value_pt' => '{"0":"Naturalmente, em modalidades menos populares, como o voleibol ou o andebol, a oferta é um pouco mais reduzida. Já os eSports surpreendem positivamente, pois em jogos como CS:GO ou Dota 2 é possível apostar não só nos vencedores dos mapas, mas também em eventos adicionais, como o número de rondas ou o «first blood»."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The live betting section at Mostbet leaves a solid impression, especially if you enjoy placing bets during a match. In popular games, you can wager on the result of each half, the number of goals or points, individual player statistics, or specific in-game events. For instance, during a football match, you might bet on which team will earn the first corner or whether a goal will be scored in the next ten minutes."}',
             'value_es' => '{"0":"La sección en vivo de Mostbet deja una buena impresión, especialmente si estás acostumbrado a apostar durante el partido. En los encuentros más populares puedes apostar al resultado de cada tiempo, al número de goles o puntos, a las estadísticas individuales de los jugadores o a episodios concretos del juego. Por ejemplo, en un partido de fútbol se puede apostar a qué equipo sacará el primer córner o si habrá un gol en los próximos diez minutos."}',
             'value_fr' => '{"0":"La section « live » de Mostbet fait bonne impression, surtout si vous aimez parier en cours de match. Lors des rencontres populaires, vous pouvez miser sur le résultat de chaque mi-temps, le nombre de buts ou de points, les statistiques individuelles des joueurs ou encore sur des actions précises. Par exemple, lors d’un match de football, il est possible de parier sur l’équipe qui obtiendra le premier corner ou s’il y aura un but dans les dix prochaines minutes."}',
             'value_pt' => '{"0":"A secção de apostas ao vivo da Mostbet causa uma boa impressão, sobretudo para quem gosta de apostar durante os jogos. Nos encontros mais populares é possível apostar no resultado de cada parte, no número de golos ou pontos, nas estatísticas individuais dos jogadores ou em acontecimentos específicos. Por exemplo, num jogo de futebol pode-se apostar em qual equipa ganhará o primeiro canto ou se haverá um golo nos próximos dez minutos."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Live streams are not available for every event, but for major matches in football, tennis, basketball, or esports, you can usually expect one. This makes it possible to follow the action while placing bets. For less popular tournaments, graphical streams are offered with live updates on statistics and key moments."}',
             'value_es' => '{"0":"Las transmisiones en directo no están disponibles en todos los eventos, pero en los principales partidos de fútbol, tenis, baloncesto o eSports lo más probable es que sí. Esto permite seguir el juego y apostar al mismo tiempo. En torneos menos populares se ofrecen transmisiones gráficas con actualizaciones de estadísticas y momentos clave."}',
             'value_fr' => '{"0":"Les retransmissions en direct ne sont pas disponibles pour tous les événements, mais pour les grandes affiches de football, de tennis, de basketball ou d’e-sport, elles le sont généralement. Cela permet de suivre la rencontre tout en pariant. Pour les compétitions moins médiatisées, Mostbet propose des animations graphiques avec mise à jour des statistiques et des moments clés."}',
             'value_pt' => '{"0":"As transmissões em direto não estão disponíveis para todos os eventos, mas nos principais jogos de futebol, ténis, basquetebol ou eSports geralmente estão. Isso permite acompanhar a ação e apostar ao mesmo tempo. Para torneios menos populares, são oferecidas transmissões gráficas com atualização das estatísticas e dos momentos-chave."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet operates under an international Curaçao license. All personal data and transactions are protected with SSL encryption. For large withdrawals, the bookmaker may request identity verification, which is a standard practice in the industry."}',
             'value_es' => '{"0":"Mostbet opera con una licencia internacional de Curazao. Todos los datos personales y transacciones están protegidos mediante encriptación SSL. Para retiros de grandes sumas, la casa de apuestas puede solicitar una verificación de identidad, lo cual es una práctica estándar en la industria."}',
             'value_fr' => '{"0":"Mostbet fonctionne sous une licence internationale délivrée à Curaçao. Toutes les données personnelles et les transactions sont protégées par un cryptage SSL. Pour les retraits de montants importants, le bookmaker peut demander une vérification d’identité, ce qui constitue une pratique courante dans l’industrie."}',
             'value_pt' => '{"0":"A Mostbet opera sob uma licença internacional de Curaçao. Todos os dados pessoais e transações são protegidos com encriptação SSL. Para levantamentos de grandes valores, a casa de apostas pode solicitar a verificação de identidade, o que é uma prática padrão no setor."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Financial transactions at Mostbet are organized so that users can quickly fund their accounts and withdraw winnings without unnecessary delays. Deposits can be made using Visa and Mastercard bank cards, e-wallets, and even cryptocurrencies. The minimum deposit amount starts from $10 for bank cards and from $2 for cryptocurrencies."}',
             'value_es' => '{"0":"Las transacciones financieras en Mostbet están organizadas para que los usuarios puedan recargar sus cuentas rápidamente y retirar las ganancias sin retrasos innecesarios. Los depósitos pueden realizarse con tarjetas bancarias Visa y Mastercard, monederos electrónicos e incluso criptomonedas. El importe mínimo de depósito comienza desde 10 $ para tarjetas bancarias y desde 2 $ para criptomonedas."}',
             'value_fr' => '{"0":"Les opérations financières sur Mostbet sont organisées de manière à permettre aux utilisateurs de recharger rapidement leur compte et de retirer leurs gains sans délais inutiles. Les dépôts peuvent être effectués à l’aide de cartes bancaires Visa et Mastercard, de portefeuilles électroniques et même de cryptomonnaies. Le montant minimum du dépôt commence à 10 $ pour les cartes bancaires et à 2 $ pour les cryptomonnaies."}',
             'value_pt' => '{"0":"As transações financeiras na Mostbet são organizadas de forma a permitir que os utilizadores depositem rapidamente e levantem os ganhos sem atrasos desnecessários. Os depósitos podem ser feitos com cartões bancários Visa e Mastercard, carteiras eletrónicas e até criptomoedas. O valor mínimo de depósito começa a partir de 10 $ para cartões bancários e 2 $ para criptomoedas."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"As for withdrawals, Mostbet usually processes payouts to the same method that was used for the deposit. The withdrawal time depends on the chosen payment system. For example, funds are credited to e-wallets within an hour, while bank card transactions may take several business days."}',
             'value_es' => '{"0":"En cuanto a los retiros, Mostbet generalmente procesa los pagos al mismo método que se utilizó para el depósito. El tiempo de retiro depende del sistema de pago elegido. Por ejemplo, los fondos se acreditan a los monederos electrónicos en el plazo de una hora, mientras que en las tarjetas bancarias pueden tardar varios días hábiles."}',
             'value_fr' => '{"0":"En ce qui concerne les retraits, Mostbet crédite généralement les paiements sur la même méthode utilisée pour le dépôt. Le délai de retrait dépend du système de paiement choisi. Par exemple, les fonds arrivent sur les portefeuilles électroniques en une heure environ, tandis que les cartes bancaires peuvent prendre plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"Quanto aos levantamentos, a Mostbet normalmente processa os pagamentos para o mesmo método que foi utilizado no depósito. O tempo de levantamento depende do sistema de pagamento escolhido. Por exemplo, os fundos chegam às carteiras eletrónicas dentro de uma hora, enquanto nos cartões bancários podem demorar vários dias úteis."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"It should also be noted that for large withdrawal amounts, the bookmaker may request identity verification. To complete this procedure, you will need to upload scans of your documents and send them to the bookmaker."}',
             'value_es' => '{"0":"También hay que tener en cuenta que, para cantidades grandes de retiro, la casa de apuestas puede solicitar una verificación de identidad. Para completar este procedimiento, será necesario cargar escaneos de sus documentos y enviarlos a la casa de apuestas."}',
             'value_fr' => '{"0":"Il faut également noter que pour les montants de retrait élevés, le bookmaker peut demander une vérification d’identité. Pour effectuer cette procédure, vous devrez télécharger les scans de vos documents et les envoyer au bookmaker."}',
             'value_pt' => '{"0":"Também é importante ter em conta que, para valores elevados de levantamento, a casa de apostas pode solicitar a verificação de identidade. Para concluir este procedimento, será necessário carregar digitalizações dos seus documentos e enviá-los à casa de apostas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The support service at Mostbet operates 24/7 and is available via online chat on the website, email, and even messengers."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Mostbet funciona las 24 horas y está disponible a través del chat en línea en el sitio web, correo electrónico e incluso mensajeros."}',
             'value_fr' => '{"0":"Le service d’assistance de Mostbet fonctionne 24h/24 et est disponible via le chat en ligne sur le site, par e-mail et même par messageries."}',
             'value_pt' => '{"0":"O serviço de apoio da Mostbet funciona 24 horas por dia e está disponível através do chat online no site, e-mail e até mensageiros."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and casino games",
                                 "1":"Availability of mobile apps",
                                 "2":"Live streaming and in-play betting",
                                 "3":"Large variety of deposit and withdrawal methods"},
                             "1":
                                {"0":"Not the highest odds on less popular events"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos y juegos de casino",
                                 "1":"Disponibilidad de aplicaciones móviles",
                                 "2":"Transmisiones en vivo y apuestas en directo",
                                 "3":"Gran variedad de métodos de depósito y retiro"},
                             "1":
                                {"0":"Cuotas no tan altas en eventos menos populares"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs et de jeux de casino",
                                 "1":"Disponibilité d’applications mobiles",
                                 "2":"Diffusions en direct et paris en live",
                                 "3":"Large variété de méthodes de dépôt et de retrait"},
                             "1":
                                {"0":"Cotes pas les plus élevées sur les événements moins populaires"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos e jogos de cassino",
                                 "1":"Disponibilidade de aplicativos móveis",
                                 "2":"Transmissões ao vivo e apostas em tempo real",
                                 "3":"Grande variedade de métodos de depósito e saque"},
                             "1":
                                {"0":"Cotações não tão altas em eventos menos populares"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Mostbet"}',
                'value_fr' => '{"0":"FAQ de Mostbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Mostbet"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to play on Mostbet?"}',
             'value_es' => '{"0":"¿Es legal jugar en Mostbet?"}',
             'value_fr' => '{"0":"Est-il légal de jouer sur Mostbet ?"}',
             'value_pt' => '{"0":"É legal jogar na Mostbet?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet operates under an international Curaçao license, and the company is authorized to provide online bookmaker and casino services."}',
             'value_es' => '{"0":"Mostbet opera con una licencia internacional de Curazao, y la empresa está autorizada para ofrecer servicios de casa de apuestas y casino en línea."}',
             'value_fr' => '{"0":"Mostbet fonctionne sous une licence internationale de Curaçao, et la société est autorisée à fournir des services de bookmaker et de casino en ligne."}',
             'value_pt' => '{"0":"A Mostbet opera sob uma licença internacional de Curaçao, e a empresa está autorizada a fornecer serviços de casa de apostas e cassino online."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 39
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit at Mostbet?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo en Mostbet?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum sur Mostbet ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo na Mostbet?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 40
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is usually $10 or the equivalent in another currency."}',
             'value_es' => '{"0":"El depósito mínimo suele ser de 10 dólares o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum est généralement de 10 dollars ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O depósito mínimo costuma ser de 10 dólares ou o equivalente noutra moeda."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 41
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 42
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the app is available for Android and iOS."}',
             'value_es' => '{"0":"Sí, la aplicación está disponible para Android e iOS."}',
             'value_fr' => '{"0":"Oui, l’application est disponible pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, o aplicativo está disponível para Android e iOS."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 43
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 44
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, it takes from a few minutes to a few hours."}',
             'value_es' => '{"0":"En la mayoría de los casos, tarda de unos minutos a unas pocas horas."}',
             'value_fr' => '{"0":"Dans la plupart des cas, cela prend de quelques minutes à quelques heures."}',
             'value_pt' => '{"0":"Na maioria dos casos, leva de alguns minutos a algumas horas."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 45
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Es necesario pasar por verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle nécessaire ?"}',
             'value_pt' => '{"0":"É necessário passar por verificação?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 46
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, for large withdrawals, the bookmaker may request documents."}',
             'value_es' => '{"0":"Sí, para retiros grandes, la casa de apuestas puede solicitar documentos."}',
             'value_fr' => '{"0":"Oui, pour les gros retraits, le bookmaker peut demander des documents."}',
             'value_pt' => '{"0":"Sim, para levantamentos de grandes valores, a casa de apostas pode solicitar documentos."}',
             'order' => 46
            ]
        );
    }
}
