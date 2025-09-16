<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is a bookmaker for sports betting and casino games, which started operating in 2020. The operator belongs to TechSolutions Group N.V. and holds a Curaçao license, allowing it to operate in many countries."}',
             'value_es' => '{"0":"20BET es una casa de apuestas para apuestas deportivas y juegos de casino, que comenzó a operar en 2020. El operador pertenece a TechSolutions Group N.V. y cuenta con una licencia de Curazao, lo que le permite operar en muchos países."}',
             'value_fr' => '{"0":"20BET est un bookmaker pour les paris sportifs et les jeux de casino, qui a commencé ses activités en 2020. L’opérateur appartient à TechSolutions Group N.V. et détient une licence de Curaçao, ce qui lui permet d’opérer dans de nombreux pays."}',
             'value_pt' => '{"0":"20BET é uma casa de apostas para apostas esportivas e jogos de cassino, que começou a operar em 2020. O operador pertence ao TechSolutions Group N.V. e possui uma licença de Curaçao, permitindo operar em vários países."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The website is available in several languages and has a mobile version. Therefore, you can play casino games and place sports bets both through a browser and using mobile applications or the mobile version of the site. The interface is quite user-friendly, navigation through sections works quickly and does not cause any problems."}',
             'value_es' => '{"0":"El sitio web está disponible en varios idiomas y tiene una versión móvil. Por lo tanto, se puede jugar a juegos de casino y realizar apuestas deportivas tanto a través del navegador como mediante aplicaciones móviles o la versión móvil del sitio. La interfaz es bastante intuitiva, la navegación por las secciones es rápida y no presenta problemas."}',
             'value_fr' => '{"0":"Le site est disponible en plusieurs langues et dispose d’une version mobile. Il est donc possible de jouer aux jeux de casino et de placer des paris sportifs à la fois via le navigateur et grâce aux applications mobiles ou à la version mobile du site. L’interface est assez conviviale, la navigation dans les sections est rapide et ne pose aucun problème."}',
             'value_pt' => '{"0":"O site está disponível em vários idiomas e possui versão móvel. Portanto, é possível jogar jogos de cassino e fazer apostas esportivas tanto pelo navegador quanto usando aplicativos móveis ou a versão móvel do site. A interface é bastante amigável, a navegação pelas seções é rápida e não apresenta problemas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At 20BET, bets are available on more than forty sports. The main sports include football, tennis, basketball, and hockey, but there are also less common disciplines such as cricket, futsal, and darts. There is a separate section for eSports, featuring popular games like CS:GO, Dota 2, and League of Legends."}',
             'value_es' => '{"0":"En 20BET, las apuestas están disponibles en más de cuarenta deportes. Los principales deportes incluyen fútbol, tenis, baloncesto y hockey, pero también hay disciplinas menos comunes, como cricket, futsal y dardos. Hay una sección separada para eSports, que incluye juegos populares como CS:GO, Dota 2 y League of Legends."}',
             'value_fr' => '{"0":"Sur 20BET, il est possible de parier sur plus de quarante sports. Les principaux sports incluent le football, le tennis, le basket-ball et le hockey, mais il existe également des disciplines moins courantes telles que le cricket, le futsal et les fléchettes. Une section distincte est consacrée aux eSports, avec des jeux populaires comme CS:GO, Dota 2 et League of Legends."}',
             'value_pt' => '{"0":"Na 20BET, as apostas estão disponíveis em mais de quarenta esportes. Os principais esportes incluem futebol, tênis, basquete e hóquei, mas também existem disciplinas menos comuns, como críquete, futsal e dardos. Há uma seção separada para eSports, com jogos populares como CS:GO, Dota 2 e League of Legends."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For convenience, events are sorted by date and popularity. The main page immediately shows the most important matches, while the advanced search allows players to quickly find a specific game or tournament."}',
             'value_es' => '{"0":"Para mayor comodidad, los eventos se ordenan por fecha y popularidad. La página principal muestra de inmediato los partidos más importantes, mientras que la búsqueda avanzada permite a los jugadores encontrar rápidamente un juego o torneo específico."}',
             'value_fr' => '{"0":"Pour plus de commodité, les événements sont triés par date et popularité. La page principale affiche immédiatement les matchs les plus importants, tandis que la recherche avancée permet aux joueurs de trouver rapidement un jeu ou un tournoi spécifique."}',
             'value_pt' => '{"0":"Para maior conveniência, os eventos são classificados por data e popularidade. A página principal mostra imediatamente os jogos mais importantes, enquanto a pesquisa avançada permite que os jogadores encontrem rapidamente um jogo ou torneio específico."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"When preparing bets, players can use statistics and analytics that the platform updates regularly. This applies not only to major tournaments but also to less popular championships."}',
             'value_es' => '{"0":"Al preparar apuestas, los jugadores pueden utilizar estadísticas y análisis que la plataforma actualiza regularmente. Esto aplica no solo a los torneos importantes, sino también a los campeonatos menos conocidos."}',
             'value_fr' => '{"0":"Lors de la préparation des paris, les joueurs peuvent utiliser les statistiques et les analyses que la plateforme met régulièrement à jour. Cela concerne non seulement les grands tournois, mais aussi les championnats moins connus."}',
             'value_pt' => '{"0":"Ao preparar as apostas, os jogadores podem usar estatísticas e análises que a plataforma atualiza regularmente. Isso se aplica não apenas aos grandes torneios, mas também aos campeonatos menos populares."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 20BET includes over four thousand games from various providers. It features classic slots, modern graphic slots, table games, poker tables, and a live casino with real dealers. The providers working with the platform are well-known in the industry, including NetEnt, Microgaming, and Pragmatic Play."}',
             'value_es' => '{"0":"La sección de casino en 20BET incluye más de cuatro mil juegos de diferentes proveedores. Cuenta con tragamonedas clásicas, tragamonedas con gráficos modernos, juegos de mesa, mesas de póker y un casino en vivo con crupieres reales. Los proveedores que colaboran con la plataforma son conocidos en la industria, entre ellos NetEnt, Microgaming y Pragmatic Play."}',
             'value_fr' => '{"0":"La section casino de 20BET comprend plus de quatre mille jeux de différents fournisseurs. Elle propose des machines à sous classiques, des machines à sous avec graphismes modernes, des jeux de table, des tables de poker et un casino en direct avec de vrais croupiers. Les fournisseurs partenaires de la plateforme sont bien connus dans l’industrie, notamment NetEnt, Microgaming et Pragmatic Play."}',
             'value_pt' => '{"0":"A seção de cassino da 20BET inclui mais de quatro mil jogos de diversos provedores. Há slots clássicos, slots com gráficos modernos, jogos de mesa, mesas de poker e um cassino ao vivo com dealers reais. Os provedores que colaboram com a plataforma são conhecidos na indústria, incluindo NetEnt, Microgaming e Pragmatic Play."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The live casino operates in a video streaming format with professional dealers, creating the atmosphere of a real gaming hall. Players can enjoy roulette, blackjack, baccarat, and various poker variations. The 20BET casino is well-structured, and even new players can quickly navigate the catalog thanks to search and filter options."}',
             'value_es' => '{"0":"El casino en vivo funciona en formato de transmisión de video con crupieres profesionales, creando la atmósfera de una sala de juego real. Los jugadores pueden disfrutar de ruleta, blackjack, baccarat y varias variantes de póker. El casino de 20BET está bien estructurado y, gracias a las opciones de búsqueda y filtros, incluso los jugadores nuevos pueden orientarse rápidamente en el catálogo."}',
             'value_fr' => '{"0":"Le casino en direct fonctionne en streaming vidéo avec des croupiers professionnels, recréant l’atmosphère d’une véritable salle de jeu. Les joueurs peuvent profiter de la roulette, du blackjack, du baccarat et de diverses variantes de poker. Le casino 20BET est bien structuré et même les nouveaux joueurs peuvent rapidement se repérer dans le catalogue grâce aux options de recherche et de filtrage."}',
             'value_pt' => '{"0":"O cassino ao vivo funciona em formato de transmissão de vídeo com dealers profissionais, criando a atmosfera de uma verdadeira sala de jogos. É possível jogar roleta, blackjack, baccarat e várias variações de poker. O cassino da 20BET é bem estruturado, e mesmo jogadores novos conseguem navegar rapidamente pelo catálogo graças às opções de busca e filtros."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Odds are often higher than the market average. This is especially noticeable in top football leagues, where the odds for the favorite can reach 1.95. For example, in a Champions League match between Manchester City and Inter, the odds for the English club to win are 1.92."}',
             'value_es' => '{"0":"Las cuotas suelen ser más altas que el promedio del mercado. Esto es especialmente notable en las principales ligas de fútbol, donde las cuotas para el favorito pueden alcanzar 1.95. Por ejemplo, en un partido de la Liga de Campeones entre Manchester City e Inter, la cuota para la victoria del club inglés es de 1.92."}',
             'value_fr' => '{"0":"Les cotes sont souvent supérieures à la moyenne du marché. Cela est particulièrement visible dans les grandes ligues de football, où la cote du favori peut atteindre 1,95. Par exemple, lors d’un match de Ligue des champions entre Manchester City et l’Inter, la cote pour la victoire du club anglais est de 1,92."}',
             'value_pt' => '{"0":"As odds frequentemente estão acima da média do mercado. Isso é especialmente perceptível nas principais ligas de futebol, onde as odds para o favorito podem chegar a 1,95. Por exemplo, em uma partida da Liga dos Campeões entre Manchester City e Inter, a odd para a vitória do clube inglês é 1,92."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Draw odds also look attractive. In popular football matches, this option often has odds of 3.50 or higher. A similar situation is observed in tennis, where 20BET offers odds for underdogs to win in the range of 3.00–3.20."}',
             'value_es' => '{"0":"Las cuotas para el empate también son interesantes. En partidos de fútbol populares, esta opción a menudo tiene cuotas de 3.50 o más. Una situación similar se observa en el tenis, donde 20BET ofrece cuotas para la victoria de los favoritos menos probables entre 3.00 y 3.20."}',
             'value_fr' => '{"0":"Les cotes pour le match nul sont également attractives. Dans les matchs de football populaires, cette option a souvent des cotes de 3,50 ou plus. Une situation similaire se retrouve au tennis, où 20BET propose des cotes pour les outsiders dans une fourchette de 3,00 à 3,20."}',
             'value_pt' => '{"0":"As odds para o empate também são atraentes. Em partidas de futebol populares, essa opção frequentemente apresenta odds de 3,50 ou mais. Situação semelhante ocorre no tênis, onde a 20BET oferece odds para a vitória de azarões na faixa de 3,00 a 3,20."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum stake usually starts from one dollar, allowing new players to try sports betting without significant risk. Maximum winnings are generally capped at around $100,000 per event, but in the most popular tournaments and competitions, this amount can be higher."}',
             'value_es' => '{"0":"La apuesta mínima generalmente comienza desde un dólar, lo que permite a los nuevos jugadores probar las apuestas deportivas sin un riesgo significativo. Las ganancias máximas suelen estar limitadas a alrededor de 100,000 dólares por evento, aunque en los torneos y competiciones más populares, esta cantidad puede ser mayor."}',
             'value_fr' => '{"0":"La mise minimale commence généralement à un dollar, ce qui permet aux nouveaux joueurs d’essayer les paris sportifs sans risque important. Les gains maximums sont généralement limités à environ 100 000 dollars par événement, mais dans les tournois et compétitions les plus populaires, ce montant peut être plus élevé."}',
             'value_pt' => '{"0":"A aposta mínima geralmente começa em um dólar, permitindo que novos jogadores experimentem apostas esportivas sem risco significativo. Os ganhos máximos são normalmente limitados a cerca de 100.000 dólares por evento, mas nos torneios e competições mais populares, esse valor pode ser maior."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET tries to offer as many betting options as possible. In football, this includes not only bets on the main match result, but also totals, handicaps, exact scores, and bets on individual team and player statistics. In tennis, available options include bets on the number of games, exact set scores, and victory with a handicap."}',
             'value_es' => '{"0":"20BET trata de ofrecer la mayor cantidad posible de opciones de apuestas. En el fútbol, esto incluye no solo apuestas al resultado principal del partido, sino también totales, hándicaps, marcador exacto y apuestas a estadísticas individuales de equipos y jugadores. En el tenis, las opciones disponibles incluyen apuestas al número de juegos, marcador exacto de sets y victoria con hándicap."}',
             'value_fr' => '{"0":"20BET cherche à proposer le plus grand nombre possible d’options de paris. Au football, cela comprend non seulement les paris sur le résultat principal du match, mais aussi les totaux, les handicaps, le score exact et les paris sur les statistiques individuelles des équipes et des joueurs. Au tennis, les options disponibles incluent les paris sur le nombre de jeux, le score exact des sets et la victoire avec handicap."}',
             'value_pt' => '{"0":"A 20BET procura oferecer o maior número possível de opções de apostas. No futebol, isso inclui não apenas apostas no resultado principal da partida, mas também totais, handicaps, placares exatos e apostas em estatísticas individuais de equipes e jogadores. No tênis, as opções disponíveis incluem apostas no número de games, placares exatos nos sets e vitória com handicap."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For fans of accumulators, it is interesting that events from different sports can be combined in a single bet. In addition to traditional betting options, there are also long-term bets on championships, such as the tournament winner or top scorer."}',
             'value_es' => '{"0":"Para los aficionados a las apuestas combinadas, resulta interesante que los eventos de diferentes deportes puedan combinarse en una sola apuesta. Además de las opciones tradicionales, también existen apuestas a largo plazo en campeonatos, como el ganador del torneo o el máximo goleador."}',
             'value_fr' => '{"0":"Pour les amateurs de paris combinés, il est intéressant de savoir que des événements de différents sports peuvent être regroupés dans un même pari. En plus des options traditionnelles, il existe également des paris à long terme sur les championnats, comme le vainqueur du tournoi ou le meilleur buteur."}',
             'value_pt' => '{"0":"Para os fãs de acumuladores, é interessante que eventos de diferentes esportes possam ser combinados em uma única aposta. Além das opções tradicionais, também existem apostas de longo prazo em campeonatos, como o vencedor do torneio ou o artilheiro."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers a wide range of live events. Players can adjust their predictions during the match, based on the course of the game. This is especially relevant for football, tennis, and basketball, where situations can change in a matter of seconds."}',
             'value_es' => '{"0":"20BET ofrece una amplia gama de eventos en vivo. Los jugadores pueden ajustar sus predicciones durante el partido, siguiendo el desarrollo del juego. Esto es especialmente relevante en fútbol, tenis y baloncesto, donde la situación puede cambiar en cuestión de segundos."}',
             'value_fr' => '{"0":"20BET propose un large éventail d’événements en direct. Les joueurs peuvent ajuster leurs pronostics pendant le match, en fonction du déroulement du jeu. Cela est particulièrement important pour le football, le tennis et le basketball, où la situation peut changer en quelques secondes."}',
             'value_pt' => '{"0":"A 20BET oferece uma ampla variedade de eventos ao vivo. Os jogadores podem ajustar suas previsões durante a partida, com base no andamento do jogo. Isso é especialmente relevante para futebol, tênis e basquete, onde a situação pode mudar em questão de segundos."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Live broadcasts are not available for all events, but key matches are regularly shown. The live section interface includes graphic diagrams and statistics. This allows players to stay informed even when video is unavailable."}',
             'value_es' => '{"0":"Las transmisiones en vivo no están disponibles para todos los eventos, pero los partidos clave se muestran regularmente. La interfaz de la sección en vivo incluye diagramas gráficos y estadísticas, lo que permite mantenerse informado incluso cuando el video no está disponible."}',
             'value_fr' => '{"0":"Les diffusions en direct ne sont pas disponibles pour tous les événements, mais les matchs clés sont régulièrement diffusés. L’interface de la section live comporte des schémas graphiques et des statistiques, ce qui permet de rester informé même lorsque la vidéo n’est pas disponible."}',
             'value_pt' => '{"0":"As transmissões ao vivo não estão disponíveis para todos os eventos, mas as partidas principais são exibidas regularmente. A interface da seção ao vivo inclui gráficos e estatísticas, permitindo que os jogadores se mantenham informados mesmo quando o vídeo não está disponível."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET operates under a Curacao license, which provides a basic level of legal regulation. Modern SSL encryption protocols are used to protect data, ensuring the security of transactions and users\' personal information."}',
             'value_es' => '{"0":"20BET opera con una licencia de Curazao, lo que proporciona un nivel básico de regulación legal. Se utilizan protocolos modernos de cifrado SSL para proteger los datos, garantizando la seguridad de las transacciones y la información personal de los usuarios."}',
             'value_fr' => '{"0":"20BET fonctionne sous licence de Curaçao, ce qui garantit un niveau de régulation juridique de base. Des protocoles modernes de cryptage SSL sont utilisés pour protéger les données, assurant la sécurité des transactions et des informations personnelles des utilisateurs."}',
             'value_pt' => '{"0":"A 20BET opera sob licença de Curaçao, o que garante um nível básico de regulamentação legal. Protocolos modernos de criptografia SSL são usados para proteger os dados, garantindo a segurança das transações e das informações pessoais dos usuários."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Financial operations at 20BET are organized quite conveniently. You can deposit funds using bank cards, e-wallets, and cryptocurrencies. Bitcoin, Ethereum, Litecoin, and other popular coins are supported. Deposits are credited instantly, with no fees charged by the bookmaker."}',
             'value_es' => '{"0":"Las operaciones financieras en 20BET están organizadas de manera bastante conveniente. Se puede depositar fondos mediante tarjetas bancarias, monederos electrónicos y criptomonedas. Se aceptan Bitcoin, Ethereum, Litecoin y otras monedas populares. Los depósitos se acreditan al instante, sin comisiones por parte del operador."}',
             'value_fr' => '{"0":"Les opérations financières sur 20BET sont organisées de manière assez pratique. Vous pouvez déposer des fonds via des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies. Bitcoin, Ethereum, Litecoin et d\'autres monnaies populaires sont pris en charge. Les dépôts sont crédités instantanément, sans frais de la part du bookmaker."}',
             'value_pt' => '{"0":"As operações financeiras na 20BET são organizadas de forma bastante conveniente. É possível depositar fundos usando cartões bancários, carteiras eletrônicas e criptomoedas. São aceitos Bitcoin, Ethereum, Litecoin e outras moedas populares. Os depósitos são creditados instantaneamente, sem taxas cobradas pelo bookmaker."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals also work quickly, although the time may depend on the chosen payment method. In most cases, e-wallets receive payments within a day, while bank cards may take several days. The company usually does not charge a transfer fee, but it is important to consider the conditions of the payment service itself."}',
             'value_es' => '{"0":"Los retiros también se realizan rápidamente, aunque el tiempo puede depender del método de pago elegido. En la mayoría de los casos, los monederos electrónicos reciben los pagos en un día, mientras que las tarjetas bancarias pueden tardar varios días. La compañía generalmente no cobra comisión por las transferencias, pero es importante tener en cuenta las condiciones del servicio de pago."}',
             'value_fr' => '{"0":"Les retraits fonctionnent également rapidement, bien que le délai puisse dépendre du mode de paiement choisi. Dans la plupart des cas, les portefeuilles électroniques reçoivent les paiements sous un jour, tandis que les cartes bancaires peuvent prendre plusieurs jours. L’entreprise ne prélève généralement pas de frais de transfert, mais il est important de prendre en compte les conditions du service de paiement."}',
             'value_pt' => '{"0":"Os saques também funcionam rapidamente, embora o tempo possa depender do método de pagamento escolhido. Na maioria dos casos, as carteiras eletrônicas recebem os pagamentos em um dia, enquanto os cartões bancários podem levar vários dias. A empresa geralmente não cobra taxa de transferência, mas é importante considerar as condições do próprio serviço de pagamento."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from $10 or the equivalent in another currency. It is also worth noting that the minimum withdrawal threshold is $10, and daily, weekly, and monthly limits are in place."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde $10 o su equivalente en otra moneda. También vale la pena señalar que el umbral mínimo para retiros es de $10, y existen límites diarios, semanales y mensuales."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 10 $ ou l’équivalent dans une autre devise. Il convient également de noter que le seuil minimum pour les retraits est de 10 $, et que des limites quotidiennes, hebdomadaires et mensuelles sont en place."}',
             'value_pt' => '{"0":"O depósito mínimo começa a partir de $10 ou equivalente em outra moeda. Também vale notar que o limite mínimo para saque é $10, e existem limites diários, semanais e mensais."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The support service at 20BET operates around the clock. The fastest way to contact them is through the online chat on the website. Additionally, you can use email if the issue requires a more detailed review."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 20BET funciona las 24 horas. La forma más rápida de contactarlos es a través del chat en línea en el sitio web. Además, puede utilizar el correo electrónico si el asunto requiere un análisis más detallado."}',
             'value_fr' => '{"0":"Le service d’assistance de 20BET est disponible 24 heures sur 24. Le moyen le plus rapide de les contacter est via le chat en ligne sur le site web. De plus, vous pouvez utiliser l’e-mail si le problème nécessite un examen plus approfondi."}',
             'value_pt' => '{"0":"O serviço de suporte da 20BET funciona 24 horas por dia. A forma mais rápida de entrar em contato é através do chat online no site. Além disso, você pode usar o e-mail se a questão exigir uma análise mais detalhada."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Cryptocurrency support",
                                 "2":"High odds",
                                 "3":"Instant account deposits",
                                 "4":"Live casino with real dealers"},
                             "1":
                                {"0":"Not all events have live broadcasts",
                                 "1":"No full-featured iOS app"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Soporte de criptomonedas",
                                 "2":"Cuotas altas",
                                 "3":"Depósitos instantáneos en la cuenta",
                                 "4":"Casino en vivo con crupieres reales"},
                             "1":
                                {"0":"No todos los eventos tienen transmisiones en vivo",
                                 "1":"No hay aplicación completa para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Support des cryptomonnaies",
                                 "2":"Cotes élevées",
                                 "3":"Dépôts instantanés sur le compte",
                                 "4":"Casino en direct avec croupiers réels"},
                             "1":
                                {"0":"Tous les événements n’ont pas de diffusion en direct",
                                 "1":"Pas d’application complète pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Suporte a criptomoedas",
                                 "2":"Odds elevados",
                                 "3":"Depósitos instantâneos na conta",
                                 "4":"Cassino ao vivo com dealers reais"},
                             "1":
                                {"0":"Nem todos os eventos possuem transmissões ao vivo",
                                 "1":"Ausência de aplicativo completo para iOS"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app for 20BET?"}',
             'value_es' => '{"0":"¿Existe una aplicación móvil para 20BET?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile pour 20BET ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel para 20BET?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"There is a separate app for Android, and for iOS it is possible to use a web app."}',
             'value_es' => '{"0":"Hay una aplicación separada para Android, y para iOS es posible utilizar una aplicación web."}',
             'value_fr' => '{"0":"Il existe une application distincte pour Android, et pour iOS, il est possible d’utiliser une application web."}',
             'value_pt' => '{"0":"Há um aplicativo separado para Android, e para iOS é possível usar um aplicativo web."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito estão disponíveis?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 39
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"You can use bank cards, e-wallets, and cryptocurrencies."}',
             'value_es' => '{"0":"Se pueden usar tarjetas bancarias, monederos electrónicos y criptomonedas."}',
             'value_fr' => '{"0":"Vous pouvez utiliser des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies."}',
             'value_pt' => '{"0":"É possível usar cartões bancários, carteiras eletrônicas e criptomoedas."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 40
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can you trust 20BET?"}',
             'value_es' => '{"0":"¿Se puede confiar en 20BET?"}',
             'value_fr' => '{"0":"Peut-on faire confiance à 20BET ?"}',
             'value_pt' => '{"0":"É possível confiar na 20BET?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 41
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The platform operates under a Curacao license and uses modern security technologies, so user data is protected."}',
             'value_es' => '{"0":"La plataforma opera con una licencia de Curazao y utiliza tecnologías de seguridad modernas, por lo que los datos de los usuarios están protegidos."}',
             'value_fr' => '{"0":"La plateforme fonctionne sous licence de Curaçao et utilise des technologies de sécurité modernes, garantissant la protection des données des utilisateurs."}',
             'value_pt' => '{"0":"A plataforma opera sob licença de Curaçao e utiliza tecnologias de segurança modernas, garantindo que os dados dos usuários estejam protegidos."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 42
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit on the 20BET platform?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo en la plataforma 20BET?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum sur la plateforme 20BET ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo na plataforma 20BET?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 43
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $10."}',
             'value_es' => '{"0":"El depósito mínimo es de $10."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 $."}',
             'value_pt' => '{"0":"O depósito mínimo é de $10."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 44
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum withdrawal amount?"}',
             'value_es' => '{"0":"¿Cuál es el monto mínimo de retiro?"}',
             'value_fr' => '{"0":"Quel est le montant minimum de retrait ?"}',
             'value_pt' => '{"0":"Qual é o valor mínimo para saque?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 45
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum withdrawal amount is $10 or the equivalent in another currency."}',
             'value_es' => '{"0":"El monto mínimo de retiro es de $10 o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le montant minimum de retrait est de 10 $ ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O valor mínimo para saque é de $10 ou o equivalente em outra moeda."}',
             'order' => 45
            ]
        );
    }
}
