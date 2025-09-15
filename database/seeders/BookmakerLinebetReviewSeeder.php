<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is an online bookmaker and casino that was founded in 2019 and quickly gained popularity in various countries in Africa, Asia, and partly Eastern Europe. The company operates under a Curacao license, which allows it to legally conduct activities in many regions. The brand localized its websites for the languages and currencies of individual countries, which made it possible to adapt to the needs of local users."}',
             'value_es' => '{"0":"Linebet es una casa de apuestas en línea y casino que se fundó en 2019 y rápidamente ganó popularidad en varios países de África, Asia y en parte de Europa del Este. La empresa opera bajo licencia de Curazao, lo que le permite llevar a cabo actividades de forma legal en muchas regiones. La marca adaptó sus sitios web a los idiomas y monedas de cada país, lo que le permitió ajustarse a las necesidades de los usuarios locales."}',
             'value_fr' => '{"0":"Linebet est un bookmaker en ligne et un casino créé en 2019, qui a rapidement gagné en popularité dans plusieurs pays d’Afrique, d’Asie et en partie en Europe de l’Est. L’entreprise opère sous licence de Curaçao, ce qui lui permet d’exercer légalement ses activités dans de nombreuses régions. La marque a localisé ses sites en fonction des langues et des devises de chaque pays, ce qui lui a permis de s’adapter aux besoins des utilisateurs locaux."}',
             'value_pt' => '{"0":"A Linebet é uma casa de apostas online e cassino fundada em 2019 que rapidamente ganhou popularidade em vários países da África, Ásia e parte da Europa Oriental. A empresa opera sob licença de Curaçao, o que lhe permite atuar legalmente em muitas regiões. A marca localizou seus sites para os idiomas e moedas de cada país, o que possibilitou a adaptação às necessidades dos usuários locais."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, Linebet offers a casino, virtual sports, and eSports. The site has a mobile version and applications. In this review, we will take a closer look at the key aspects of this bookmaker."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, Linebet ofrece casino, deportes virtuales y eSports. El sitio cuenta con versión móvil y aplicaciones. En esta reseña analizaremos en detalle los aspectos clave de esta casa de apuestas."}',
             'value_fr' => '{"0":"En plus des paris sportifs, Linebet propose un casino, des sports virtuels et des eSports. Le site dispose d’une version mobile et d’applications. Dans cette revue, nous examinerons en détail les principaux aspects de ce bookmaker."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a Linebet oferece cassino, esportes virtuais e eSports. O site possui versão móvel e aplicativos. Nesta análise, vamos examinar em detalhe os principais aspectos desta casa de apostas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section in Linebet covers a wide range of sports disciplines: football, tennis, basketball, cricket, MMA, hockey, as well as virtual sports and eSports. For popular football championships or tennis tournaments, there are many betting options. For example, you can bet on the match winner, handicaps, totals, exact scores, or on various player statistics."}',
             'value_es' => '{"0":"La sección de pre-partido en Linebet abarca una amplia variedad de disciplinas deportivas: fútbol, tenis, baloncesto, críquet, MMA, hockey, así como deportes virtuales y eSports. Para los campeonatos de fútbol o torneos de tenis más populares, hay muchas opciones de apuestas. Por ejemplo, se puede apostar al ganador del partido, hándicaps, totales, marcador exacto o en diferentes estadísticas de los jugadores."}',
             'value_fr' => '{"0":"La section pré-match sur Linebet couvre un large éventail de disciplines sportives : football, tennis, basketball, cricket, MMA, hockey, ainsi que les sports virtuels et les eSports. Pour les championnats de football ou les tournois de tennis populaires, il existe de nombreuses options de paris. Par exemple, il est possible de parier sur le vainqueur du match, les handicaps, les totaux, le score exact ou sur diverses statistiques des joueurs."}',
             'value_pt' => '{"0":"A seção pré-jogo na Linebet cobre uma ampla variedade de disciplinas esportivas: futebol, tênis, basquete, críquete, MMA, hóquei, além de esportes virtuais e eSports. Para campeonatos de futebol ou torneios de tênis populares, existem muitas opções de apostas. Por exemplo, você pode apostar no vencedor da partida, handicaps, totais, placar exato ou em várias estatísticas de jogadores."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Odds for top events are usually at the level of other popular bookmakers, especially in football and major eSports, while they can be slightly lower for less-known sports."}',
             'value_es' => '{"0":"Las cuotas para los eventos principales suelen estar al nivel de otros corredores populares, especialmente en fútbol y eSports importantes, aunque pueden ser ligeramente más bajas para deportes menos conocidos."}',
             'value_fr' => '{"0":"Les cotes pour les événements principaux sont généralement au niveau des autres bookmakers populaires, en particulier pour le football et les eSports majeurs, et peuvent être légèrement plus faibles pour les sports moins connus."}',
             'value_pt' => '{"0":"As odds para os principais eventos geralmente estão no nível de outros bookmakers populares, especialmente no futebol e nos principais eSports, podendo ser um pouco mais baixas para esportes menos conhecidos."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to a convenient interface, it is possible to use various filters to search for events, look for matches by leagues or geography, and create accumulator bets. The pre-match betting section works smoothly, and page loading is quite fast."}',
             'value_es' => '{"0":"Gracias a una interfaz conveniente, es posible utilizar varios filtros para buscar eventos, buscar partidos por ligas o por ubicación geográfica y crear apuestas combinadas. La sección de apuestas pre-partido funciona de manera fluida y las páginas se cargan bastante rápido."}',
             'value_fr' => '{"0":"Grâce à une interface pratique, il est possible d’utiliser différents filtres pour rechercher des événements, chercher des matchs par ligues ou par géographie et créer des paris combinés. La section pré-match fonctionne de manière fluide et le chargement des pages est assez rapide."}',
             'value_pt' => '{"0":"Graças a uma interface conveniente, é possível usar vários filtros para buscar eventos, procurar partidas por ligas ou localização geográfica e criar apostas acumuladas. A seção de apostas pré-jogo funciona de forma fluida, e o carregamento das páginas é bastante rápido."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet casino section includes thousands of slots, table games, live rooms with real dealers, and instant games from various providers. The catalog contains over 10,000 games from popular providers such as Evoplay, BGaming, NetGaming, and Betsoft. Games are constantly updated, with new releases added regularly, and seasonal promotions and tournaments are held."}',
             'value_es' => '{"0":"La sección de casino de Linebet incluye miles de tragamonedas, juegos de mesa, salas en vivo con crupieres reales y juegos instantáneos de diversos proveedores. El catálogo cuenta con más de 10.000 juegos de proveedores populares como Evoplay, BGaming, NetGaming y Betsoft. Los juegos se actualizan constantemente, se agregan novedades y se realizan promociones y torneos de temporada."}',
             'value_fr' => '{"0":"La section casino de Linebet comprend des milliers de machines à sous, de jeux de table, de salons live avec de vrais croupiers et de jeux instantanés de différents fournisseurs. Le catalogue contient plus de 10 000 jeux de fournisseurs populaires tels que Evoplay, BGaming, NetGaming et Betsoft. Les jeux sont constamment mis à jour, avec de nouvelles sorties régulières, et des promotions saisonnières ainsi que des tournois sont organisés."}',
             'value_pt' => '{"0":"A seção de cassino da Linebet inclui milhares de slots, jogos de mesa, salas ao vivo com dealers reais e jogos instantâneos de diversos provedores. O catálogo contém mais de 10.000 jogos de provedores populares como Evoplay, BGaming, NetGaming e Betsoft. Os jogos são constantemente atualizados, com novos lançamentos adicionados regularmente, e promoções e torneios sazonais são realizados."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Live casino usually has high betting limits for VIP players. The minimum bet in the casino is quite low, for example, $0.10 on slots, which is convenient for testing the games. Live dealer games run smoothly without noticeable lags and with good graphics, but stream quality depends on the provider and region."}',
             'value_es' => '{"0":"El casino en vivo suele tener límites altos de apuestas para jugadores VIP. La apuesta mínima en el casino es bastante baja, por ejemplo, $0,10 en tragamonedas, lo que resulta conveniente para probar los juegos. Los juegos con crupieres en vivo funcionan sin retrasos notables y con buena calidad gráfica, aunque la calidad del streaming depende del proveedor y la región."}',
             'value_fr' => '{"0":"Le casino en direct propose généralement des limites de mise élevées pour les joueurs VIP. La mise minimale au casino est assez basse, par exemple 0,10 $ sur les machines à sous, ce qui est pratique pour tester les jeux. Les jeux avec croupiers en direct fonctionnent sans latence notable et avec de bons graphismes, mais la qualité du streaming dépend du fournisseur et de la région."}',
             'value_pt' => '{"0":"O cassino ao vivo geralmente possui limites de apostas altos para jogadores VIP. A aposta mínima no cassino é bastante baixa, por exemplo, $0,10 em slots, o que é conveniente para testar os jogos. Os jogos com dealers ao vivo funcionam sem atrasos perceptíveis e com bons gráficos, mas a qualidade da transmissão depende do provedor e da região."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers odds similar to most international bookmakers. For example, in Champions League or English Premier League matches, the odds for the favorite to win can be around 1.85–1.90. On evenly matched top games, you can often see odds of 2.95."}',
             'value_es' => '{"0":"Linebet ofrece cuotas similares a la mayoría de los bookmakers internacionales. Por ejemplo, en partidos de la Liga de Campeones o de la Premier League inglesa, las cuotas para la victoria del favorito pueden estar alrededor de 1,85–1,90. En partidos equilibrados de alto nivel, a menudo se pueden ver cuotas de 2,95."}',
             'value_fr' => '{"0":"Linebet propose des cotes similaires à la plupart des bookmakers internationaux. Par exemple, lors des matchs de la Ligue des Champions ou de la Premier League anglaise, les cotes pour la victoire du favori peuvent être de 1,85–1,90. Sur des matchs de haut niveau équilibrés, on peut souvent voir des cotes de 2,95."}',
             'value_pt' => '{"0":"Linebet oferece odds semelhantes à maioria dos bookmakers internacionais. Por exemplo, em partidas da Liga dos Campeões ou da Premier League inglesa, as odds para a vitória do favorito podem estar em torno de 1,85–1,90. Em jogos equilibrados de alto nível, é comum encontrar odds de 2,95."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In eSports, where events are dynamic, Linebet often keeps odds above average. In CS:GO or Dota 2 tournaments, the odds for the underdog to win can reach 4.20."}',
             'value_es' => '{"0":"En eSports, donde los eventos son dinámicos, Linebet suele mantener las cuotas por encima del promedio. En torneos de CS:GO o Dota 2, las cuotas para que gane el equipo desfavorecido pueden alcanzar 4,20."}',
             'value_fr' => '{"0":"Dans les eSports, où les événements sont dynamiques, Linebet maintient souvent des cotes supérieures à la moyenne. Dans les tournois CS:GO ou Dota 2, les cotes pour la victoire de l’outsider peuvent atteindre 4,20."}',
             'value_pt' => '{"0":"Nos eSports, onde os eventos são dinâmicos, Linebet geralmente mantém odds acima da média. Em torneios de CS:GO ou Dota 2, as odds para a vitória do azarão podem chegar a 4,20."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At Linebet, limits depend on the sport, tournament, and even the specific market, so they are not the same for all events. Minimum bets are quite low, starting from $0.20–$0.30, which allows users to test the platform with small risks, while maximum bets for key football matches or major eSports tournaments can reach significant amounts. For top football matches, it is possible to place bets exceeding several thousand dollars. In some cases, the bookmaker restricts the maximum coupon size. Niche sports have lower limits, often from a few hundred to one or two thousand dollars. In live betting, limits can also be reduced due to dynamic odds."}',
             'value_es' => '{"0":"En Linebet, los límites dependen del deporte, torneo e incluso del mercado específico, por lo que no son iguales para todos los eventos. Las apuestas mínimas son bastante bajas, desde $0,20–$0,30, lo que permite probar la plataforma con pequeños riesgos, mientras que los máximos para partidos de fútbol clave o torneos importantes de eSports pueden alcanzar sumas significativas. Por ejemplo, en partidos de fútbol de alto nivel se pueden realizar apuestas que superan varios miles de dólares. En algunos casos, el bookmaker limita el tamaño máximo del cupón. Los deportes de nicho tienen límites más bajos, a menudo desde unos pocos cientos hasta una o dos mil dólares. En las apuestas en vivo, los límites también pueden reducirse debido a la dinámica de las cuotas."}',
             'value_fr' => '{"0":"Chez Linebet, les limites dépendent du sport, du tournoi et même du marché spécifique, elles ne sont donc pas les mêmes pour tous les événements. Les mises minimales sont assez faibles, à partir de 0,20–0,30 USD, ce qui permet de tester la plateforme avec de petits risques, tandis que les mises maximales pour les matchs de football importants ou les grands tournois eSports peuvent atteindre des montants significatifs. Par exemple, sur les matchs de football de haut niveau, il est possible de miser plusieurs milliers de dollars. Dans certains cas, le bookmaker limite la taille maximale du coupon. Les sports de niche ont des limites plus basses, souvent de quelques centaines à une ou deux milliers de dollars. Dans les paris en direct, les limites peuvent également être réduites en raison de la dynamique des cotes."}',
             'value_pt' => '{"0":"Na Linebet, os limites dependem do esporte, do torneio e até do mercado específico, por isso não são iguais para todos os eventos. As apostas mínimas são bastante baixas, começando em $0,20–$0,30, permitindo testar a plataforma com riscos pequenos, enquanto os valores máximos para partidas de futebol importantes ou grandes torneios de eSports podem atingir quantias significativas. Por exemplo, em partidas de futebol de alto nível, é possível apostar valores que ultrapassam vários milhares de dólares. Em alguns casos, o bookmaker limita o tamanho máximo do cupom. Os esportes de nicho têm limites mais baixos, geralmente de algumas centenas a uma ou duas mil dólares. Nas apostas ao vivo, os limites também podem ser reduzidos devido à dinâmica das odds."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The number of betting options on Linebet will satisfy even the most demanding player, especially in football matches and eSports. In the pre-match football section, you can find options to bet on half-time results, handicaps and totals, exact score, and individual player statistics."}',
             'value_es' => '{"0":"La cantidad de opciones de apuestas en Linebet satisfará incluso al jugador más exigente, especialmente en partidos de fútbol y eSports. En la sección de fútbol pre-partido, se pueden encontrar apuestas sobre el resultado de los tiempos, hándicaps y totales, marcador exacto y estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Le nombre d’options de paris sur Linebet satisfera même le joueur le plus exigeant, en particulier pour les matchs de football et les eSports. Dans la section football pré-match, il est possible de parier sur le résultat des mi-temps, les handicaps et les totaux, le score exact et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"O número de opções de apostas na Linebet satisfará até o jogador mais exigente, especialmente em partidas de futebol e eSports. Na seção pré-jogo de futebol, é possível apostar em resultados de tempo, handicaps e totais, placar exato e estatísticas individuais dos jogadores."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In tennis matches, it is possible to bet on the outcome of a set or a game. In eSports, bets can be placed on maps, rounds, first blood, total maps, or total rounds. For major events or international tournaments, different markets can be combined into accumulator bets. In less popular leagues, the number of betting options may be lower, but this is common across the industry."}',
             'value_es' => '{"0":"En los partidos de tenis, es posible apostar al resultado de un set o de un juego. En eSports, se pueden realizar apuestas sobre mapas, rondas, primera sangre, totales de mapas o totales de rondas. Para eventos masivos o torneos internacionales, se pueden combinar diferentes mercados en apuestas combinadas. En ligas menos populares, la cantidad de opciones de apuestas puede ser menor, pero esto no es raro en la industria en general."}',
             'value_fr' => '{"0":"Dans les matchs de tennis, il est possible de parier sur le résultat d’un set ou d’un jeu. Dans les eSports, les paris peuvent porter sur les cartes, les manches, le premier sang, les totaux de cartes ou de manches. Pour les événements majeurs ou les tournois internationaux, différents marchés peuvent être combinés en paris combinés. Dans les ligues moins populaires, le nombre d’options de paris peut être plus faible, mais cela est courant dans l’industrie en général."}',
             'value_pt' => '{"0":"Em partidas de tênis, é possível apostar no resultado de sets ou games. Nos eSports, pode-se apostar em mapas, rounds, first blood, totais de mapas ou totais de rounds. Para eventos de grande porte ou torneios internacionais, diferentes mercados podem ser combinados em apostas acumuladas. Em ligas menos populares, a quantidade de opções de apostas pode ser menor, mas isso não é incomum na indústria como um todo."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Live betting occupies an important place on the platform. During matches, odds are updated in real time. The live section provides graphics showing events and basic statistics."}',
             'value_es' => '{"0":"Las apuestas en vivo ocupan un lugar importante en la plataforma. Durante los partidos, las cuotas se actualizan en tiempo real. La sección en vivo proporciona gráficos que muestran los eventos y estadísticas básicas."}',
             'value_fr' => '{"0":"Les paris en direct occupent une place importante sur la plateforme. Pendant les matchs, les cotes sont mises à jour en temps réel. La section live fournit des graphiques montrant les événements et des statistiques de base."}',
             'value_pt' => '{"0":"As apostas ao vivo ocupam um lugar importante na plataforma. Durante as partidas, as odds são atualizadas em tempo real. A seção ao vivo fornece gráficos que mostram os eventos e estatísticas básicas."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Video streams of popular events are also available, especially eSports or football matches, but not all events are streamed. If a live stream is important, it is better to check whether it is available in your region."}',
             'value_es' => '{"0":"También están disponibles transmisiones de video de eventos populares, especialmente de eSports o partidos de fútbol, pero no todos los eventos se transmiten. Si una transmisión en vivo es importante, es mejor comprobar si está disponible en su región."}',
             'value_fr' => '{"0":"Des diffusions vidéo des événements populaires sont également disponibles, en particulier pour les eSports ou les matchs de football, mais tous les événements ne sont pas diffusés. Si une diffusion en direct est importante, il est préférable de vérifier si elle est disponible dans votre région."}',
             'value_pt' => '{"0":"Também estão disponíveis transmissões de vídeo de eventos populares, especialmente eSports ou partidas de futebol, mas nem todos os eventos são transmitidos. Se uma transmissão ao vivo for importante, é melhor verificar se está disponível em sua região."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The live interface usually allows quick betting, modifying accumulator combinations, or removing events from the bet slip. However, from time to time there can be delays in odds updates during peak traffic."}',
             'value_es' => '{"0":"La interfaz en vivo generalmente permite apostar rápidamente, modificar combinaciones de acumuladores o eliminar eventos del cupón de apuestas. Sin embargo, de vez en cuando puede haber retrasos en la actualización de cuotas durante los picos de tráfico."}',
             'value_fr' => '{"0":"L’interface live permet généralement de placer rapidement des paris, de modifier les combinaisons d’accumulateurs ou de retirer des événements du ticket de pari. Cependant, il peut y avoir parfois des retards dans la mise à jour des cotes lors des pics de trafic."}',
             'value_pt' => '{"0":"A interface ao vivo geralmente permite apostar rapidamente, modificar combinações de acumuladores ou remover eventos do bilhete de apostas. No entanto, de vez em quando, podem ocorrer atrasos na atualização das odds durante picos de tráfego."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Data security and reliability at Linebet are ensured by industry-standard methods: SSL encryption, identity verification, and measures to protect users from fraud. The platform follows responsible gaming principles. Linebet operates under a Curacao license, allowing it to provide services in many countries."}',
             'value_es' => '{"0":"La seguridad de los datos y la fiabilidad en Linebet se garantizan mediante métodos estándar de la industria: cifrado SSL, verificación de identidad y medidas para proteger a los usuarios del fraude. La plataforma sigue los principios del juego responsable. Linebet opera bajo una licencia de Curazao, lo que le permite ofrecer servicios en muchos países."}',
             'value_fr' => '{"0":"La sécurité des données et la fiabilité chez Linebet sont assurées par des méthodes standard de l’industrie : cryptage SSL, vérification d’identité et mesures de protection des utilisateurs contre la fraude. La plateforme respecte les principes du jeu responsable. Linebet opère sous licence de Curaçao, ce qui lui permet de fournir des services dans de nombreux pays."}',
             'value_pt' => '{"0":"A segurança dos dados e a confiabilidade na Linebet são garantidas por métodos padrão da indústria: criptografia SSL, verificação de identidade e medidas para proteger os usuários contra fraudes. A plataforma segue os princípios do jogo responsável. A Linebet opera sob licença de Curaçao, permitindo fornecer serviços em muitos países."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes financial procedures (such as verification or document confirmation) may take longer, especially for large withdrawals or in regions with additional requirements."}',
             'value_es' => '{"0":"A veces, los procedimientos financieros (como la verificación o la confirmación de documentos) pueden tardar más, especialmente para retiros grandes o en regiones con requisitos adicionales."}',
             'value_fr' => '{"0":"Parfois, les procédures financières (comme la vérification ou la confirmation des documents) peuvent prendre plus de temps, en particulier pour les gros retraits ou dans les régions avec des exigences supplémentaires."}',
             'value_pt' => '{"0":"Às vezes, os procedimentos financeiros (como verificação ou confirmação de documentos) podem demorar mais, especialmente para retiradas grandes ou em regiões com requisitos adicionais."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet supports a wide range of deposit and withdrawal methods, including Visa and Mastercard bank cards, e-wallets, cryptocurrencies, and some local payment systems."}',
             'value_es' => '{"0":"Linebet admite una amplia gama de métodos de depósito y retiro, incluidos tarjetas bancarias Visa y Mastercard, monederos electrónicos, criptomonedas y algunos sistemas de pago locales."}',
             'value_fr' => '{"0":"Linebet prend en charge un large éventail de méthodes de dépôt et de retrait, y compris les cartes bancaires Visa et Mastercard, les portefeuilles électroniques, les cryptomonnaies et certains systèmes de paiement locaux."}',
             'value_pt' => '{"0":"A Linebet oferece uma ampla gama de métodos de depósito e saque, incluindo cartões bancários Visa e Mastercard, carteiras eletrônicas, criptomoedas e alguns sistemas de pagamento locais."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit amount is usually $1 or the equivalent in another currency, which allows trying Linebet with small bets."}',
             'value_es' => '{"0":"El importe mínimo de depósito suele ser de $1 o su equivalente en otra moneda, lo que permite probar Linebet con apuestas pequeñas."}',
             'value_fr' => '{"0":"Le montant minimum de dépôt est généralement de 1 $ ou l’équivalent dans une autre devise, ce qui permet d’essayer Linebet avec de petites mises."}',
             'value_pt' => '{"0":"O valor mínimo de depósito geralmente é de US$ 1 ou equivalente em outra moeda, permitindo testar a Linebet com apostas pequenas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawal times depend on the method. Funds are credited to e-wallets within a few hours, while bank card withdrawals may take up to three business days."}',
             'value_es' => '{"0":"Los tiempos de retiro dependen del método. Los fondos se acreditan en los monederos electrónicos en unas pocas horas, mientras que los retiros a tarjetas bancarias pueden tardar hasta tres días hábiles."}',
             'value_fr' => '{"0":"Les délais de retrait dépendent de la méthode. Les fonds sont crédités sur les portefeuilles électroniques en quelques heures, tandis que les retraits par carte bancaire peuvent prendre jusqu’à trois jours"}',
             'value_pt' => '{"0":"O tempo de saque depende do método. Os fundos são creditados em carteiras eletrônicas em poucas horas, enquanto saques em cartões bancários podem levar até três dias úteis."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Platform fees are generally not applied or are minimal, but fees from payment providers may apply. It is also worth noting that in some regions, there are fewer withdrawal options or they may be less convenient."}',
             'value_es' => '{"0":"Generalmente no se aplican comisiones por parte de la plataforma o son mínimas, pero pueden aplicarse comisiones de los proveedores de pago. También cabe señalar que en algunas regiones hay menos opciones de retiro o son menos cómodas."}',
             'value_fr' => '{"0":"Les frais de la plateforme sont généralement inexistants ou minimes, mais des frais de la part des fournisseurs de paiement peuvent s’appliquer. Il convient également de noter que dans certaines régions, les options de retrait sont limitées ou moins pratiques."}',
             'value_pt' => '{"0":"As taxas da plataforma geralmente não se aplicam ou são mínimas, mas podem ser cobradas pelos provedores de pagamento. Também vale ressaltar que, em algumas regiões, as opções de saque são limitadas ou menos convenientes."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"You can contact Linebet support via the website chat, by phone, or by email, mostly 24/7. Questions about bets, bonuses, or payments are usually resolved quickly through the chat, sometimes in just a few minutes. However, more complex situations, such as document verification, require more time."}',
             'value_es' => '{"0":"Se puede contactar con el servicio de atención de Linebet a través del chat del sitio web, por teléfono o por correo electrónico, en la mayoría de los casos las 24 horas, los 7 días de la semana. Las consultas sobre apuestas, bonos o pagos suelen resolverse rápidamente mediante el chat, a veces en solo unos minutos. Sin embargo, situaciones más complejas, como la verificación de documentos, requieren más tiempo."}',
             'value_fr' => '{"0":"Vous pouvez contacter le support Linebet via le chat du site, par téléphone ou par e-mail, la plupart du temps 24h/24 et 7j/7. Les questions concernant les paris, les bonus ou les paiements sont généralement résolues rapidement via le chat, parfois en quelques minutes seulement. Cependant, les situations plus complexes, comme la vérification de documents, nécessitent plus de temps."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte da Linebet pelo chat no site, por telefone ou e-mail, na maioria dos casos 24 horas por dia, 7 dias por semana. Perguntas sobre apostas, bônus ou pagamentos geralmente são resolvidas rapidamente pelo chat, às vezes em apenas alguns minutos. No entanto, situações mais complexas, como a verificação de documentos, exigem mais tempo."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Competitive odds",
                                 "1":"Large number of casino and live games",
                                 "2":"Wide selection of payment methods",
                                 "3":"Mobile apps for Android and iOS"},
                             "1":
                                {"0":"Curaçao license does not guarantee a high level of protection",
                                 "1":"Limited withdrawal methods in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Cuotas competitivas",
                                 "1":"Gran cantidad de juegos de casino y en vivo",
                                 "2":"Amplia selección de métodos de pago",
                                 "3":"Aplicaciones móviles para Android e iOS"},
                             "1":
                                {"0":"La licencia de Curazao no garantiza un alto nivel de protección",
                                 "1":"Métodos de retiro limitados en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Cotes compétitives",
                                 "1":"Grand nombre de jeux de casino et jeux en direct",
                                 "2":"Large choix de méthodes de paiement",
                                 "3":"Applications mobiles pour Android et iOS"},
                             "1":
                                {"0":"La licence de Curaçao ne garantit pas un haut niveau de protection",
                                 "1":"Méthodes de retrait limitées dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Odds competitivas",
                                 "1":"Grande número de jogos de cassino e jogos ao vivo",
                                 "2":"Ampla seleção de métodos de pagamento",
                                 "3":"Aplicativos móveis para Android e iOS"},
                             "1":
                                {"0":"A licença de Curaçao não garante um alto nível de proteção",
                                 "1":"Métodos de saque limitados em algumas regiões"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Under which license does Linebet operate?"}',
             'value_es' => '{"0":"¿Bajo qué licencia opera Linebet?"}',
             'value_fr' => '{"0":"Sous quelle licence Linebet opère-t-il ?"}',
             'value_pt' => '{"0":"Sob qual licença a Linebet opera?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 40
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet holds an international Curaçao license, which allows it to operate in various countries."}',
             'value_es' => '{"0":"Linebet cuenta con una licencia internacional de Curazao, que le permite operar en varios países."}',
             'value_fr' => '{"0":"Linebet possède une licence internationale de Curaçao, ce qui lui permet d\'opérer dans plusieurs pays."}',
             'value_pt' => '{"0":"A Linebet possui uma licença internacional de Curaçao, que permite operar em vários países."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 41
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 42
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from $1 or the equivalent in another currency."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde 1 dólar o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 1 dollar ou de l\'équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O depósito mínimo começa em 1 dólar ou equivalente em outra moeda."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 43
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 44
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals to e-wallets take a few hours, while to bank cards it can take up to three days."}',
             'value_es' => '{"0":"Los retiros a monederos electrónicos tardan unas pocas horas, mientras que a tarjetas bancarias pueden tardar hasta tres días."}',
             'value_fr' => '{"0":"Les retraits vers les portefeuilles électroniques prennent quelques heures, tandis que vers les cartes bancaires, cela peut prendre jusqu\'à trois jours."}',
             'value_pt' => '{"0":"Os saques para carteiras eletrônicas levam algumas horas, enquanto para cartões bancários podem levar até três dias."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 45
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a Linebet mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil de Linebet?"}',
             'value_fr' => '{"0":"Existe-t-il une application mobile Linebet ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel da Linebet?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 46
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the app is available for Android and iOS and can be downloaded from the official website."}',
             'value_es' => '{"0":"Sí, la aplicación está disponible para Android e iOS y se puede descargar desde el sitio web oficial."}',
             'value_fr' => '{"0":"Oui, l\'application est disponible pour Android et iOS et peut être téléchargée depuis le site officiel."}',
             'value_pt' => '{"0":"Sim, o aplicativo está disponível para Android e iOS e pode ser baixado no site oficial."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 47
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda?"}',
             'value_fr' => '{"0":"Peut-on utiliser des cryptomonnaies ?"}',
             'value_pt' => '{"0":"É possível usar criptomoedas?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 48
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Linebet supports many cryptocurrencies, including Bitcoin, Ethereum, and others."}',
             'value_es' => '{"0":"Sí, Linebet admite muchas criptomonedas, incluidas Bitcoin, Ethereum y otras."}',
             'value_fr' => '{"0":"Oui, Linebet prend en charge de nombreuses cryptomonnaies, y compris Bitcoin, Ethereum et d\'autres."}',
             'value_pt' => '{"0":"Sim, a Linebet aceita várias criptomoedas, incluindo Bitcoin, Ethereum e outras."}',
             'order' => 48
            ]
        );
    }
}
