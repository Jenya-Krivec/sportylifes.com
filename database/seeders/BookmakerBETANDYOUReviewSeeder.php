<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international bookmaker that also includes a casino section with many games. The company operates under a Curacao license and was founded in 2010. The bookmaker covers a wide range of markets and is aimed at players from different countries, including Europe and Asia."}',
             'value_es' => '{"0":"BETANDYOU es una casa de apuestas internacional que también incluye una sección de casino con numerosos juegos. La empresa opera bajo licencia de Curazao y fue fundada en 2010. La casa de apuestas abarca una amplia gama de mercados y está orientada a jugadores de diferentes países, incluyendo Europa y Asia."}',
             'value_fr' => '{"0":"BETANDYOU est un bookmaker international qui comprend également une section casino avec de nombreux jeux. L’entreprise opère sous licence de Curaçao et a été fondée en 2010. Le bookmaker couvre une large gamme de marchés et s’adresse à des joueurs de différents pays, y compris en Europe et en Asie."}',
             'value_pt' => '{"0":"BETANDYOU é uma casa de apostas internacional que também inclui uma seção de cassino com muitos jogos. A empresa opera sob licença de Curaçao e foi fundada em 2010. A casa de apostas cobre uma ampla gama de mercados e é direcionada a jogadores de diferentes países, incluindo Europa e Ásia."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The website combines sports betting, casino games, live games, and additional products such as virtual sports and TV games. The main focus is on sports betting and the casino."}',
             'value_es' => '{"0":"El sitio combina apuestas deportivas, juegos de casino, juegos en vivo y productos adicionales como deportes virtuales y juegos de TV. El enfoque principal está en las apuestas deportivas y el casino."}',
             'value_fr' => '{"0":"Le site regroupe les paris sportifs, les jeux de casino, les jeux en direct ainsi que des produits supplémentaires tels que les sports virtuels et les jeux télévisés. L’accent principal est mis sur les paris sportifs et le casino."}',
             'value_pt' => '{"0":"O site reúne apostas esportivas, jogos de cassino, jogos ao vivo e produtos adicionais como esportes virtuais e jogos de TV. O foco principal está nas apostas esportivas e no cassino."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section of BETANDYOU covers more than 40 sports, from football, tennis, basketball, and hockey to less common disciplines such as snooker, cricket, futsal, and bowling. The line allows players to choose not only popular championships but also tournaments that are rarely found among competitors."}',
             'value_es' => '{"0":"La sección previa al partido de BETANDYOU abarca más de 40 deportes, desde fútbol, tenis, baloncesto y hockey hasta disciplinas menos comunes como snooker, críquet, fútbol sala y bolos. La línea permite a los jugadores elegir no solo campeonatos populares, sino también torneos que rara vez se encuentran entre los competidores."}',
             'value_fr' => '{"0":"La section pré-match de BETANDYOU couvre plus de 40 sports, allant du football, du tennis, du basketball et du hockey à des disciplines moins courantes comme le snooker, le cricket, le futsal et le bowling. La ligne permet aux joueurs de choisir non seulement des championnats populaires, mais aussi des tournois rarement proposés par les concurrents."}',
             'value_pt' => '{"0":"A seção pré-jogo da BETANDYOU cobre mais de 40 esportes, desde futebol, tênis, basquete e hóquei até disciplinas menos comuns, como snooker, críquete, futsal e boliche. A linha permite que os jogadores escolham não apenas campeonatos populares, mas também torneios raramente encontrados entre os concorrentes."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Esports tournaments stand out in particular, including CS:GO, Dota 2, and League of Legends, with the platform offering many betting options for them."}',
             'value_es' => '{"0":"Se destacan especialmente los torneos de deportes electrónicos, incluyendo CS:GO, Dota 2 y League of Legends, para los cuales la plataforma ofrece muchas opciones de apuestas."}',
             'value_fr' => '{"0":"Les tournois d’esport se distinguent particulièrement, notamment CS:GO, Dota 2 et League of Legends, pour lesquels la plateforme propose de nombreuses options de paris."}',
             'value_pt' => '{"0":"Destacam-se especialmente os torneios de eSports, incluindo CS:GO, Dota 2 e League of Legends, para os quais a plataforma oferece muitas opções de apostas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform’s interface makes it easy to filter matches by popularity, date, or start time."}',
             'value_es' => '{"0":"La interfaz de la plataforma permite filtrar rápidamente los partidos por popularidad, fecha o hora de inicio."}',
             'value_fr' => '{"0":"L’interface de la plateforme permet de filtrer rapidement les matchs par popularité, date ou heure de début."}',
             'value_pt' => '{"0":"A interface da plataforma permite filtrar rapidamente as partidas por popularidade, data ou horário de início."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"On the BETANDYOU platform, users have access to a large selection of games suitable for both new and experienced players. The catalog includes classic three-reel slots and video slots with high-quality graphics."}',
             'value_es' => '{"0":"En la plataforma BETANDYOU, los usuarios tienen acceso a una gran selección de juegos adecuados tanto para jugadores nuevos como experimentados. El catálogo incluye tragamonedas clásicas de tres carretes y videotragamonedas con gráficos de alta calidad."}',
             'value_fr' => '{"0":"Sur la plateforme BETANDYOU, les utilisateurs ont accès à un grand choix de jeux adaptés aussi bien aux nouveaux joueurs qu’aux joueurs expérimentés. Le catalogue comprend des machines à sous classiques à trois rouleaux ainsi que des vidéoslots avec des graphismes de haute qualité."}',
             'value_pt' => '{"0":"Na plataforma BETANDYOU, os usuários têm acesso a uma grande seleção de jogos adequados tanto para novos jogadores quanto para os mais experientes. O catálogo inclui slots clássicos de três rolos e video slots com gráficos de alta qualidade."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Fans of table games can play roulette, blackjack, baccarat, and poker. Some of these games are available in a live format with real dealers. There are also TV games, keno, and bingo."}',
             'value_es' => '{"0":"Los aficionados a los juegos de mesa pueden jugar a la ruleta, blackjack, bacará y póker. Parte de estos juegos está disponible en formato en vivo con crupieres reales. También se puede jugar a juegos de TV, keno y bingo."}',
             'value_fr' => '{"0":"Les amateurs de jeux de table peuvent jouer à la roulette, au blackjack, au baccarat et au poker. Une partie de ces jeux est disponible en direct avec de vrais croupiers. Il est également possible de jouer à des jeux télévisés, au keno et au bingo."}',
             'value_pt' => '{"0":"Os fãs de jogos de mesa podem jogar roleta, blackjack, bacará e pôquer. Parte desses jogos está disponível no formato ao vivo com dealers reais. Também é possível jogar TV games, keno e bingo."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The casino interface is designed to make it easy for players to find the games they need. Games can be filtered by genre, provider, or popularity. The casino section is constantly updated, with new slots and live tables being added regularly."}',
             'value_es' => '{"0":"La interfaz del casino está diseñada para que los jugadores encuentren fácilmente los juegos que necesitan. Los juegos se pueden filtrar por género, proveedor o popularidad. La sección del casino se actualiza constantemente, añadiendo nuevos tragamonedas y mesas en vivo."}',
             'value_fr' => '{"0":"L’interface du casino est conçue pour permettre aux joueurs de trouver facilement les jeux recherchés. Les jeux peuvent être filtrés par genre, fournisseur ou popularité. La section casino est constamment mise à jour avec de nouvelles machines à sous et de nouvelles tables en direct."}',
             'value_pt' => '{"0":"A interface do cassino foi projetada para que os jogadores encontrem facilmente os jogos desejados. Os jogos podem ser filtrados por gênero, provedor ou popularidade. A seção de cassino é constantemente atualizada, com novos slots e mesas ao vivo sendo adicionados regularmente."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"At BETANDYOU, the focus is on the odds, as they determine potential winnings and are often a key factor when choosing a betting platform. For example, on a Champions League match between major clubs, the bookmaker may offer odds of 2.10 for the favorite to win, 3.30 for a draw, and 3.60 for the underdog to win. For ATP or WTA tennis tournaments, the odds for the favorite usually stand at around 1.70, while the less likely outcome is priced at 2.50."}',
             'value_es' => '{"0":"En BETANDYOU, la atención se centra en las cuotas, ya que determinan las posibles ganancias y suelen ser un factor clave a la hora de elegir una plataforma de apuestas. Por ejemplo, en un partido de la Liga de Campeones entre grandes clubes, la casa puede ofrecer una cuota de 2,10 a la victoria del favorito, 3,30 al empate y 3,60 a la victoria del no favorito. En torneos de tenis ATP o WTA, las cuotas para el favorito suelen rondar 1,70, mientras que para el resultado menos probable suelen estar en 2,50."}',
             'value_fr' => '{"0":"Chez BETANDYOU, l’accent est mis sur les cotes, car elles déterminent les gains potentiels et constituent souvent un facteur clé dans le choix d’une plateforme de paris. Par exemple, pour un match de Ligue des Champions entre grands clubs, le bookmaker peut proposer une cote de 2,10 pour la victoire du favori, 3,30 pour un match nul et 3,60 pour la victoire de l’outsider. Dans les tournois de tennis ATP ou WTA, les cotes du favori tournent généralement autour de 1,70, tandis que le résultat le moins probable est coté à 2,50."}',
             'value_pt' => '{"0":"Na BETANDYOU, a atenção está voltada para as odds, pois elas determinam os ganhos potenciais e muitas vezes são um fator chave na escolha de uma plataforma de apostas. Por exemplo, em uma partida da Liga dos Campeões entre grandes clubes, a casa pode oferecer odds de 2,10 para a vitória do favorito, 3,30 para o empate e 3,60 para a vitória do azarão. Em torneios de tênis ATP ou WTA, as odds para o favorito geralmente ficam em torno de 1,70, enquanto o resultado menos provável aparece em 2,50."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Odds on basketball and hockey games are also high, especially in major leagues. A league leader’s win might be offered at 1.85, while the underdog could be priced at 1.95. In less popular tournaments and local championships, the odds may be slightly lower."}',
             'value_es' => '{"0":"Las cuotas en los partidos de baloncesto y hockey también son altas, especialmente en las grandes ligas. La victoria del líder de la tabla puede tener una cuota de 1,85, mientras que la del no favorito puede alcanzar 1,95. En torneos menos populares y campeonatos locales, las cuotas pueden ser un poco más bajas."}',
             'value_fr' => '{"0":"Les cotes sur les matchs de basketball et de hockey sont également élevées, en particulier dans les grandes ligues. La victoire du leader du classement peut être affichée à 1,85, tandis que celle de l’outsider peut atteindre 1,95. Pour les tournois moins populaires et les championnats locaux, les cotes peuvent être légèrement inférieures."}',
             'value_pt' => '{"0":"As odds em jogos de basquete e hóquei também são altas, especialmente nas grandes ligas. A vitória do líder da tabela pode ter odds de 1,85, enquanto a do azarão pode chegar a 1,95. Em torneios menos populares e campeonatos locais, as odds podem ser um pouco mais baixas."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet on the platform starts at $0.5. Maximum limits depend on the specific event and its popularity. For top matches, limits can reach tens of thousands of dollars per bet, while for less significant events, they are usually a few thousand."}',
             'value_es' => '{"0":"La apuesta mínima en la plataforma comienza desde 0,5 $. Los límites máximos dependen del evento específico y de su popularidad. En los partidos más importantes, los límites pueden alcanzar decenas de miles de dólares por apuesta, mientras que en los eventos de menor relevancia suelen situarse en unos pocos miles."}',
             'value_fr' => '{"0":"La mise minimale sur la plateforme commence à 0,5 $. Les limites maximales dépendent de l’événement spécifique et de sa popularité. Pour les matchs les plus importants, les limites peuvent atteindre plusieurs dizaines de milliers de dollars par pari, tandis que pour les événements moins significatifs, elles sont de quelques milliers."}',
             'value_pt' => '{"0":"A aposta mínima na plataforma começa em US$ 0,5. Os limites máximos dependem do evento específico e da sua popularidade. Nos jogos mais importantes, os limites podem chegar a dezenas de milhares de dólares por aposta, enquanto em eventos de menor relevância ficam em alguns milhares."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"With such odds, players can plan their betting strategy by choosing between safer predictions with lower odds and riskier options with potentially higher payouts. The platform provides clear information about all restrictions, so users can place their bets confidently and without surprises."}',
             'value_es' => '{"0":"Con estas cuotas, es posible planificar la estrategia de apuestas eligiendo entre pronósticos más seguros con cuotas bajas y opciones más arriesgadas con un pago potencialmente mayor. La plataforma ofrece información clara sobre todas las restricciones para que los usuarios puedan apostar con confianza y sin sorpresas."}',
             'value_fr' => '{"0":"Avec de telles cotes, les joueurs peuvent planifier leur stratégie en choisissant entre des pronostics plus sûrs avec des cotes faibles et des options plus risquées avec des gains potentiellement plus élevés. La plateforme fournit des informations claires sur toutes les restrictions afin que les utilisateurs puissent parier en toute confiance et sans mauvaises surprises."}',
             'value_pt' => '{"0":"Com essas odds, é possível planejar a estratégia de apostas escolhendo entre previsões mais seguras com odds menores e opções mais arriscadas com ganhos potencialmente maiores. A plataforma fornece informações claras sobre todas as restrições para que os usuários possam apostar com confiança e sem surpresas."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"On the BETANDYOU platform, players have access to a large selection of betting options, which makes it possible to place predictions of varying complexity and according to different strategies. For football matches, users can choose classic bets on the winner or a draw, as well as bets on the total number of goals, the exact score, and various statistical indicators of teams and players. For example, one can bet on a team scoring more than two goals in the first half, or on a specific player receiving a yellow card."}',
             'value_es' => '{"0":"En la plataforma BETANDYOU, los jugadores tienen acceso a una gran variedad de opciones de apuestas, lo que permite realizar pronósticos de distinta complejidad y adaptados a diferentes estrategias. En los partidos de fútbol, se pueden elegir apuestas clásicas al ganador o al empate, así como apuestas al número total de goles, al marcador exacto y a diferentes estadísticas de equipos y jugadores. Por ejemplo, es posible apostar a que un equipo marcará más de dos goles en la primera mitad, o a que un jugador específico recibirá una tarjeta amarilla."}',
             'value_fr' => '{"0":"Sur la plateforme BETANDYOU, les joueurs ont accès à un grand choix d’options de paris, ce qui leur permet de faire des pronostics de différents niveaux de complexité et adaptés à diverses stratégies. Pour les matchs de football, il est possible de choisir les paris classiques sur le vainqueur ou le match nul, ainsi que les paris sur le nombre total de buts, le score exact et divers indicateurs statistiques des équipes et des joueurs. Par exemple, on peut miser sur le fait qu’une équipe marquera plus de deux buts en première mi-temps, ou qu’un joueur spécifique recevra un carton jaune."}',
             'value_pt' => '{"0":"Na plataforma BETANDYOU, os jogadores têm acesso a uma grande variedade de opções de apostas, o que permite realizar previsões de diferentes níveis de complexidade e adaptadas a várias estratégias. Nos jogos de futebol, é possível escolher apostas clássicas no vencedor ou no empate, bem como apostas no número total de gols, no placar exato e em vários indicadores estatísticos de equipes e jogadores. Por exemplo, pode-se apostar que uma equipe marcará mais de dois gols no primeiro tempo, ou que um jogador específico receberá um cartão amarelo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In basketball games, the platform allows bets on the number of points scored by individual players or the team, the point difference, and the outcome of specific quarters. In hockey, users can bet on the number of shots on target, penalty minutes, and total goals. For tennis matches, available options include betting on the set winner, the exact score in sets, the total number of games, and even the result of a particular game. This provides opportunities to build both simple bets and more complex combinations for accumulators."}',
             'value_es' => '{"0":"En los partidos de baloncesto, la plataforma permite apostar al número de puntos que anotarán los jugadores individuales o el equipo, a la diferencia en el marcador y también a los resultados de cuartos específicos. En el hockey, los usuarios pueden apostar al número de tiros a portería, al tiempo de penalización y al número de goles. Para los partidos de tenis, están disponibles apuestas al ganador del set, al marcador exacto en sets, al número total de juegos e incluso al resultado de un juego en particular. Esto abre la posibilidad de construir tanto apuestas simples como combinaciones más complejas para acumuladas."}',
             'value_fr' => '{"0":"Dans les matchs de basketball, la plateforme permet de parier sur le nombre de points marqués par les joueurs ou l’équipe, sur l’écart de points ainsi que sur les résultats de certains quart-temps. Au hockey, les utilisateurs peuvent parier sur le nombre de tirs cadrés, les minutes de pénalité et le nombre de buts. Pour les matchs de tennis, il est possible de parier sur le vainqueur d’un set, le score exact en sets, le nombre total de jeux et même le résultat d’un jeu particulier. Cela permet de construire aussi bien des paris simples que des combinaisons plus complexes pour des paris combinés."}',
             'value_pt' => '{"0":"Nos jogos de basquete, a plataforma permite apostar no número de pontos marcados por jogadores individuais ou pela equipe, na diferença de pontos e também nos resultados de quartos específicos. No hóquei, os usuários podem apostar no número de chutes a gol, no tempo de penalização e no número de gols. Para partidas de tênis, estão disponíveis apostas no vencedor do set, no placar exato em sets, no número total de games e até no resultado de um game específico. Isso possibilita construir tanto apostas simples quanto combinações mais complexas para acumuladores."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform interface makes it easy to review all available markets, filtering them by events, teams, or players. This approach helps both new and experienced players find the best betting options and build strategies based on statistics and their own analysis."}',
             'value_es' => '{"0":"La interfaz de la plataforma permite revisar rápidamente todos los mercados disponibles, filtrándolos por eventos, equipos o jugadores. De esta forma, tanto los nuevos usuarios como los más experimentados pueden encontrar las opciones más adecuadas y crear estrategias basadas en estadísticas y en su propio análisis."}',
             'value_fr' => '{"0":"L’interface de la plateforme permet de parcourir rapidement tous les marchés disponibles, en les filtrant par événements, équipes ou joueurs. Cette approche permet aussi bien aux nouveaux qu’aux joueurs expérimentés de trouver les meilleures options de paris et de construire leurs stratégies à partir des statistiques et de leur propre analyse."}',
             'value_pt' => '{"0":"A interface da plataforma permite visualizar rapidamente todos os mercados disponíveis, filtrando-os por eventos, equipes ou jogadores. Essa abordagem ajuda tanto novos jogadores quanto os mais experientes a encontrar as melhores opções de apostas e a construir estratégias baseadas em estatísticas e em sua própria análise."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU allows placing in-play bets on a wide range of events in football, basketball, tennis, and hockey. It is possible to track how the odds change in real time and place bets according to the dynamics of the game."}',
             'value_es' => '{"0":"BETANDYOU permite realizar apuestas en vivo en una amplia gama de eventos de fútbol, baloncesto, tenis y hockey. Es posible seguir cómo cambian las cuotas en tiempo real y apostar de acuerdo con la dinámica del juego."}',
             'value_fr' => '{"0":"BETANDYOU permet de parier en direct sur un large éventail d’événements de football, de basketball, de tennis et de hockey. Il est possible de suivre l’évolution des cotes en temps réel et de placer ses mises en fonction de la dynamique du match."}',
             'value_pt' => '{"0":"A BETANDYOU permite fazer apostas ao vivo numa ampla variedade de eventos de futebol, basquete, tênis e hóquei. É possível acompanhar como as odds mudam em tempo real e apostar de acordo com a dinâmica da partida."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For most matches, high-quality live streams are available, and if there is no video, detailed graphic visualization and statistics are provided. Thanks to the convenient live betting interface, users can quickly switch between events and add bets to the slip."}',
             'value_es' => '{"0":"En la mayoría de los partidos hay transmisiones en directo de alta calidad, y si no hay vídeo, se ofrece una visualización gráfica detallada y estadísticas. Gracias a la interfaz práctica de apuestas en vivo, los usuarios pueden cambiar rápidamente entre eventos y añadir apuestas al cupón."}',
             'value_fr' => '{"0":"Pour la plupart des rencontres, des retransmissions en direct de haute qualité sont disponibles, et lorsqu’il n’y a pas de vidéo, une visualisation graphique détaillée et des statistiques sont proposées. Grâce à l’interface pratique des paris en direct, les utilisateurs peuvent passer rapidement d’un événement à l’autre et ajouter leurs mises au coupon."}',
             'value_pt' => '{"0":"Na maioria dos jogos há transmissões ao vivo em alta qualidade e, quando não há vídeo, são disponibilizadas visualizações gráficas detalhadas e estatísticas. Graças à interface prática das apostas ao vivo, os usuários podem alternar rapidamente entre os eventos e adicionar apostas ao bilhete."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Security at BETANDYOU is ensured through advanced encryption technologies and data protection measures. All transactions are carried out via secure channels, and players’ personal information is stored on servers with multi-layered protection."}',
             'value_es' => '{"0":"La seguridad en BETANDYOU se garantiza mediante tecnologías avanzadas de encriptación y medidas de protección de datos. Todas las transacciones se realizan a través de canales seguros, y la información personal de los jugadores se almacena en servidores con protección multinivel."}',
             'value_fr' => '{"0":"La sécurité sur BETANDYOU est assurée grâce à des technologies de chiffrement avancées et des mesures de protection des données. Toutes les transactions passent par des canaux sécurisés, et les informations personnelles des joueurs sont stockées sur des serveurs dotés d’une protection multicouche."}',
             'value_pt' => '{"0":"A segurança na BETANDYOU é garantida por tecnologias avançadas de criptografia e medidas de proteção de dados. Todas as transações são realizadas por meio de canais seguros, e as informações pessoais dos jogadores são armazenadas em servidores com proteção em múltiplas camadas."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform operates under a Curaçao license and undergoes regular audits to comply with security standards. To prevent fraud, identity verification is required before withdrawing large amounts."}',
             'value_es' => '{"0":"La plataforma opera bajo licencia de Curazao y se somete a auditorías periódicas para cumplir con los estándares de seguridad. Para prevenir fraudes, se exige la verificación de identidad antes de retirar sumas importantes."}',
             'value_fr' => '{"0":"La plateforme fonctionne sous licence de Curaçao et est régulièrement auditée afin de garantir sa conformité aux normes de sécurité. Pour prévenir la fraude, une vérification d’identité est requise avant tout retrait de montants importants."}',
             'value_pt' => '{"0":"A plataforma opera sob licença de Curaçao e passa regularmente por auditorias para assegurar a conformidade com os padrões de segurança. Para prevenir fraudes, é necessária a verificação de identidade antes de sacar grandes quantias."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports more than 50 payment methods, including Visa and MasterCard bank cards, e-wallets such as Skrill, Neteller, Apple Pay, Google Pay, as well as cryptocurrencies like Bitcoin, Ethereum, and others. Deposits are processed instantly, while withdrawals take from a few minutes to several hours depending on the selected method. Bank cards may require up to two days to process transactions."}',
             'value_es' => '{"0":"La plataforma admite más de 50 métodos de pago, incluidas tarjetas bancarias Visa y MasterCard, monederos electrónicos como Skrill, Neteller, Apple Pay, Google Pay, así como criptomonedas como Bitcoin, Ethereum y otras. Los depósitos se procesan de forma instantánea, mientras que los retiros tardan desde unos minutos hasta varias horas, según el método seleccionado. Las tarjetas bancarias pueden requerir hasta dos días para procesar la transacción."}',
             'value_fr' => '{"0":"La plateforme prend en charge plus de 50 méthodes de paiement, y compris les cartes bancaires Visa et MasterCard, les portefeuilles électroniques tels que Skrill, Neteller, Apple Pay, Google Pay, ainsi que les cryptomonnaies comme Bitcoin, Ethereum et d’autres. Les dépôts sont traités instantanément, tandis que les retraits prennent de quelques minutes à plusieurs heures selon la méthode choisie. Les cartes bancaires peuvent nécessiter jusqu’à deux jours pour le traitement des transactions."}',
             'value_pt' => '{"0":"A plataforma suporta mais de 50 métodos de pagamento, incluindo cartões bancários Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, Apple Pay, Google Pay, bem como criptomoedas como Bitcoin, Ethereum e outras. Os depósitos são processados instantaneamente, enquanto os saques podem levar de alguns minutos a várias horas, dependendo do método escolhido. Os cartões bancários podem exigir até dois dias para processar a transação."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from $1, and the minimum bet is $0.5. The company does not charge any fees for deposits or withdrawals, although some payment methods may apply their own fees."}',
             'value_es' => '{"0":"El depósito mínimo es de $1 y la apuesta mínima de $0.5. La empresa no cobra comisiones por depósitos ni retiros, aunque algunos métodos de pago pueden aplicar sus propias tarifas."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $ et la mise minimale de 0,5 $. L’entreprise ne prélève aucune commission sur les dépôts ou retraits, mais certains moyens de paiement peuvent appliquer leurs propres frais."}',
             'value_pt' => '{"0":"O depósito mínimo é de $1 e a aposta mínima é de $0,5. A empresa não cobra comissão por depósitos ou saques, embora alguns métodos de pagamento possam aplicar suas próprias taxas."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"You can contact customer support 24/7 via the live chat on the website and the email address provided below."}',
             'value_es' => '{"0":"Puede ponerse en contacto con el servicio de atención al cliente las 24 horas del día a través del chat en vivo en el sitio web y el correo electrónico que se indica a continuación."}',
             'value_fr' => '{"0":"Vous pouvez contacter le service d’assistance 24h/24 via le chat en direct sur le site et l’adresse e-mail indiquée ci-dessous."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte ao cliente 24 horas por dia através do chat ao vivo no site e do e-mail indicado abaixo."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 36
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports and events",
                                 "1":"High-quality live match streaming",
                                 "2":"Support for over 100 currencies",
                                 "3":"Mobile applications",
                                 "4":"Availability of cryptocurrency payments"},
                             "1":
                                {"0":"Curaçao license with limited player protection",
                                 "1":"Occasional delays in withdrawals and verification"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de deportes y eventos",
                                 "1":"Transmisiones en vivo de alta calidad",
                                 "2":"Compatibilidad con más de 100 monedas",
                                 "3":"Aplicaciones móviles",
                                 "4":"Disponibilidad de pagos con criptomonedas"},
                             "1":
                                {"0":"Licencia de Curazao con protección limitada para los jugadores",
                                 "1":"Retrasos ocasionales en retiros y verificaciones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de sports et d’événements",
                                 "1":"Diffusions en direct de haute qualité",
                                 "2":"Prise en charge de plus de 100 devises",
                                 "3":"Applications mobiles",
                                 "4":"Disponibilité des paiements en cryptomonnaies"},
                             "1":
                                {"0":"Licence Curaçao avec protection limitée des joueurs",
                                 "1":"Retards occasionnels lors des retraits et de la vérification"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de esportes e eventos",
                                 "1":"Transmissões ao vivo de alta qualidade",
                                 "2":"Suporte a mais de 100 moedas",
                                 "3":"Aplicativos móveis",
                                 "4":"Disponibilidade de pagamentos em criptomoedas"},
                             "1":
                                {"0":"Licença de Curaçao com proteção limitada aos jogadores",
                                 "1":"Atrasos ocasionais em saques e verificações"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 38
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 39
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Does BETANDYOU have a license?"}',
             'value_es' => '{"0":"¿Tiene BETANDYOU licencia?"}',
             'value_fr' => '{"0":"BETANDYOU possède-t-il une licence ?"}',
             'value_pt' => '{"0":"A BETANDYOU possui licença?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 40
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BETANDYOU operates under a Curaçao license."}',
             'value_es' => '{"0":"Sí, BETANDYOU opera bajo una licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, BETANDYOU fonctionne sous licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, a BETANDYOU opera sob licença de Curaçao."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 41
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Are live streams available and how can they be found?"}',
             'value_es' => '{"0":"¿Están disponibles las transmisiones en vivo y cómo encontrarlas?"}',
             'value_fr' => '{"0":"Les diffusions en direct sont-elles disponibles et comment les trouver ?"}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis e como encontrá-las?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 42
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform offers live streams for many events. You can start a stream by clicking on the «TV» icon."}',
             'value_es' => '{"0":"Sí, la plataforma ofrece transmisiones en vivo para muchos eventos. Se puede iniciar la transmisión haciendo clic en el ícono de «televisor»."}',
             'value_fr' => '{"0":"Oui, la plateforme propose des flux en direct pour de nombreux événements. Vous pouvez lancer la diffusion en cliquant sur l’icône « télévision »."}',
             'value_pt' => '{"0":"Sim, a plataforma oferece transmissões ao vivo para muitos eventos. É possível iniciar a transmissão clicando no ícone de «TV»."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 43
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit and withdrawal methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito y retiro están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les méthodes de dépôt et de retrait prises en charge ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito e saque são suportados?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 44
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU supports a wide range of options: bank cards, e-wallets, local payment systems, and cryptocurrencies."}',
             'value_es' => '{"0":"BETANDYOU admite una amplia variedad de opciones: tarjetas bancarias, monederos electrónicos, sistemas de pago locales y criptomonedas."}',
             'value_fr' => '{"0":"BETANDYOU prend en charge un large éventail d’options : cartes bancaires, portefeuilles électroniques, systèmes de paiement locaux et cryptomonnaies."}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma ampla variedade de opções: cartões bancários, carteiras eletrônicas, sistemas de pagamento locais e criptomoedas."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 45
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use the site?"}',
             'value_es' => '{"0":"¿Es seguro usar el sitio?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser le site ?"}',
             'value_pt' => '{"0":"É seguro usar o site?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 46
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, transactions are encrypted, but in disputed cases, player protection depends on the rules of the Curaçao license."}',
             'value_es' => '{"0":"Sí, las transacciones están cifradas, pero en casos de disputa, la protección del jugador depende de las normas de la licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, les transactions sont cryptées, mais en cas de litige, la protection des joueurs dépend des règles de la licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, as transações são criptografadas, mas em casos de disputa, a proteção ao jogador depende das regras da licença de Curaçao."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 47
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Are there mobile applications?"}',
             'value_es' => '{"0":"¿Existen aplicaciones móviles?"}',
             'value_fr' => '{"0":"Existe-t-il des applications mobiles ?"}',
             'value_pt' => '{"0":"Existem aplicativos móveis?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 48
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU has a mobile-optimized version of the website that works smoothly on any smartphone, as well as apps for Android and iOS."}',
             'value_es' => '{"0":"BETANDYOU cuenta con una versión del sitio optimizada para móviles que funciona correctamente en cualquier smartphone, así como aplicaciones para Android e iOS."}',
             'value_fr' => '{"0":"BETANDYOU dispose d’une version mobile du site qui fonctionne parfaitement sur tous les smartphones, ainsi que d’applications pour Android et iOS."}',
             'value_pt' => '{"0":"A BETANDYOU possui uma versão do site adaptada para dispositivos móveis, que funciona de forma estável em qualquer smartphone, além de aplicativos para Android e iOS."}',
             'order' => 48
            ]
        );
    }
}
