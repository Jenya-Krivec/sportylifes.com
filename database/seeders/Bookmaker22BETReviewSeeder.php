<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET bookmaker was established in 2017. It belongs to TechSolutions Group N.V., which operates under an international Curaçao license and also has local registrations in some countries, such as Nigeria and other regions. Over the years, 22BET has gained a notable audience thanks to a wide range of markets, generous promotions, and support for cryptocurrencies."}',
             'value_es' => '{"0":"La casa de apuestas 22BET se fundó en 2017. Pertenece a TechSolutions Group N.V., que opera bajo una licencia internacional de Curazao y también tiene registros locales en algunos países, como Nigeria y otras regiones. A lo largo de los años, 22BET ha ganado una audiencia notable gracias a su amplia gama de mercados, promociones generosas y soporte para criptomonedas."}',
             'value_fr' => '{"0":"Le bookmaker 22BET a été fondé en 2017. Il appartient à TechSolutions Group N.V., qui opère sous une licence internationale de Curaçao et possède également des enregistrements locaux dans certains pays, comme le Nigeria et d’autres régions. Au fil des années, 22BET a acquis un public notable grâce à une large gamme de marchés, des promotions généreuses et le soutien des cryptomonnaies."}',
             'value_pt' => '{"0":"A casa de apostas 22BET foi fundada em 2017. Pertence à TechSolutions Group N.V., que opera sob uma licença internacional de Curaçao e também possui registros locais em alguns países, como a Nigéria e outras regiões. Ao longo dos anos, a 22BET conquistou um público notável graças à ampla variedade de mercados, promoções generosas e suporte a criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The site is aimed at a global audience and supports dozens of languages and various currencies, including cryptocurrencies. A distinctive feature of 22BET is the combination of a broad sports line and a large casino section, making the platform versatile for different categories of users. Thanks to its intuitive interface and adaptive design, the platform is convenient on both computers and mobile devices."}',
             'value_es' => '{"0":"El sitio está dirigido a una audiencia global y admite decenas de idiomas y varias monedas, incluidas las criptomonedas. Una característica distintiva de 22BET es la combinación de una amplia línea de deportes y una gran sección de casino, lo que hace que la plataforma sea versátil para diferentes categorías de usuarios. Gracias a su interfaz intuitiva y diseño adaptable, la plataforma es conveniente tanto en computadoras como en dispositivos móviles."}',
             'value_fr' => '{"0":"Le site s’adresse à un public mondial et prend en charge des dizaines de langues et différentes devises, y compris les cryptomonnaies. Une caractéristique distinctive de 22BET est la combinaison d’une large offre sportive et d’une grande section casino, ce qui rend la plateforme polyvalente pour différentes catégories d’utilisateurs. Grâce à une interface intuitive et un design adaptatif, la plateforme est pratique à la fois sur ordinateur et sur appareils mobiles."}',
             'value_pt' => '{"0":"O site é voltado para um público global e suporta dezenas de idiomas e várias moedas, incluindo criptomoedas. Uma característica distinta da 22BET é a combinação de uma ampla linha de esportes e uma grande seção de cassino, tornando a plataforma versátil para diferentes categorias de usuários. Graças à sua interface intuitiva e design adaptativo, a plataforma é conveniente tanto em computadores quanto em dispositivos móveis."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Since it is an international company, it is worth noting that the availability of services and some features may vary from country to country, so it is better to check the terms before registering. In this review, we will look at some aspects of the bookmaker that are typical for most versions of the site."}',
             'value_es' => '{"0":"Dado que es una empresa internacional, vale la pena señalar que la disponibilidad de servicios y algunas funciones pueden variar de un país a otro, por lo que es mejor revisar los términos antes de registrarse. En esta reseña, examinaremos algunos aspectos de la casa de apuestas que son típicos en la mayoría de las versiones del sitio."}',
             'value_fr' => '{"0":"Étant donné qu’il s’agit d’une entreprise internationale, il convient de noter que la disponibilité des services et certaines fonctionnalités peuvent varier d’un pays à l’autre, il est donc préférable de vérifier les conditions avant de s’inscrire. Dans cette revue, nous examinerons certains aspects du bookmaker qui sont typiques de la plupart des versions du site."}',
             'value_pt' => '{"0":"Como se trata de uma empresa internacional, vale destacar que a disponibilidade de serviços e algumas funcionalidades podem variar de país para país, portanto, é recomendável verificar os termos antes de se registrar. Nesta análise, examinaremos alguns aspectos da casa de apostas que são típicos da maioria das versões do site."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section at 22BET covers over 40 sports. The most attention is given to popular disciplines such as football, tennis, basketball, and hockey, but less common sports are also represented, including cricket, futsal, rugby, and snooker."}',
             'value_es' => '{"0":"La sección de prepartido en 22BET abarca más de 40 deportes. La mayor atención se presta a disciplinas populares como fútbol, tenis, baloncesto y hockey, pero también se incluyen deportes menos comunes, como críquet, futsal, rugby y snooker."}',
             'value_fr' => '{"0":"La section pré-match de 22BET couvre plus de 40 sports. L’accent est mis sur les disciplines populaires telles que le football, le tennis, le basket-ball et le hockey, mais des sports moins courants sont également représentés, comme le cricket, le futsal, le rugby et le snooker."}',
             'value_pt' => '{"0":"A seção de pré-jogo na 22BET cobre mais de 40 esportes. A maior atenção é dada a disciplinas populares, como futebol, tênis, basquete e hóquei, mas também são representados esportes menos comuns, como críquete, futsal, rúgbi e sinuca."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In each match, users can find dozens of betting options — from standard outcomes to statistical indicators. The line is formed in advance, and the odds are updated regularly, allowing users to track market dynamics even before the game starts. Combined with detailed match breakdowns, the pre-match section is suitable for both beginners and experienced bettors."}',
             'value_es' => '{"0":"En cada partido, los usuarios pueden encontrar decenas de opciones de apuesta, desde resultados estándar hasta indicadores estadísticos. La línea se establece con antelación y las cuotas se actualizan regularmente, lo que permite seguir la dinámica del mercado incluso antes de que comience el partido. Combinada con desgloses detallados de los partidos, la sección de prepartido es adecuada tanto para principiantes como para apostadores experimentados."}',
             'value_fr' => '{"0":"Pour chaque match, les utilisateurs peuvent trouver des dizaines d’options de pari — des résultats standard aux indicateurs statistiques. La ligne est formée à l’avance et les cotes sont mises à jour régulièrement, permettant de suivre la dynamique du marché avant même le début du jeu. Combinée à des analyses détaillées des matchs, la section pré-match convient aussi bien aux débutants qu’aux parieurs expérimentés."}',
             'value_pt' => '{"0":"Em cada partida, os usuários podem encontrar dezenas de opções de apostas — desde resultados padrão até indicadores estatísticos. A linha é formada com antecedência e as odds são atualizadas regularmente, permitindo acompanhar a dinâmica do mercado antes mesmo do início do jogo. Combinada com análises detalhadas das partidas, a seção de pré-jogo é adequada tanto para iniciantes quanto para apostadores experientes."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 22BET includes several thousand games. It features slots, table games, live casino with real dealers, as well as fast games like keno or bingo. The platform collaborates with more than a hundred well-known providers, including NetEnt, Pragmatic Play, Evolution Gaming, and others. Thanks to this, the game selection is constantly updated, and users can try new releases almost every week."}',
             'value_es' => '{"0":"La sección de casino en 22BET incluye varios miles de juegos. Aquí se encuentran tragamonedas, juegos de mesa, casino en vivo con crupieres reales, así como juegos rápidos como keno o bingo. La plataforma colabora con más de cien proveedores reconocidos, entre ellos NetEnt, Pragmatic Play, Evolution Gaming y otros. Gracias a esto, la selección de juegos se actualiza constantemente, y los usuarios pueden probar nuevos lanzamientos casi cada semana."}',
             'value_fr' => '{"0":"La section casino de 22BET comprend plusieurs milliers de jeux. Elle propose des machines à sous, des jeux de table, un casino en direct avec de vrais croupiers, ainsi que des jeux rapides comme le keno ou le bingo. La plateforme collabore avec plus d’une centaine de fournisseurs renommés, dont NetEnt, Pragmatic Play, Evolution Gaming, et d’autres. Grâce à cela, la sélection de jeux est constamment mise à jour, et les utilisateurs peuvent essayer de nouvelles sorties presque chaque semaine."}',
             'value_pt' => '{"0":"A seção de cassino na 22BET inclui vários milhares de jogos. Ela apresenta slots, jogos de mesa, cassino ao vivo com dealers reais, assim como jogos rápidos como keno ou bingo. A plataforma colabora com mais de cem provedores renomados, incluindo NetEnt, Pragmatic Play, Evolution Gaming e outros. Graças a isso, a seleção de jogos é constantemente atualizada, e os usuários podem experimentar novos lançamentos quase todas as semanas."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The live casino is especially popular because it allows players to interact with professional croupiers and experience the atmosphere of a real casino. Various bonuses are also available for players, which can be applied to casino games."}',
             'value_es' => '{"0":"El casino en vivo es especialmente popular, ya que permite a los jugadores interactuar con crupieres profesionales y experimentar la atmósfera de un casino real. También hay disponibles varios bonos para los jugadores, que se aplican a los juegos de casino."}',
             'value_fr' => '{"0":"Le casino en direct est particulièrement populaire, car il permet aux joueurs d’interagir avec des croupiers professionnels et de ressentir l’atmosphère d’un établissement réel. Différents bonus sont également disponibles pour les joueurs et peuvent s’appliquer aux jeux de casino."}',
             'value_pt' => '{"0":"O cassino ao vivo é especialmente popular, pois permite que os jogadores interajam com croupiers profissionais e sintam a atmosfera de um cassino real. Vários bônus também estão disponíveis para os jogadores, que podem ser aplicados aos jogos de cassino."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The odds at 22BET are generally similar to those of most popular bookmakers. In top football matches, the odds for evenly matched teams can reach 2.00. In basketball, on popular events, the odds are often around 1.90 for each side if both teams have approximately equal chances of winning."}',
             'value_es' => '{"0":"Las cuotas en 22BET son, en general, similares a las de la mayoría de las casas de apuestas populares. En los principales partidos de fútbol, las cuotas para equipos equilibrados pueden alcanzar 2.00. En baloncesto, en eventos populares, las cuotas suelen rondar 1.90 para cada lado si ambos equipos tienen aproximadamente las mismas posibilidades de ganar."}',
             'value_fr' => '{"0":"Les cotes sur 22BET sont généralement similaires à celles de la plupart des bookmakers populaires. Lors des principaux matchs de football, les cotes pour des équipes équilibrées peuvent atteindre 2,00. En basketball, lors d’événements populaires, les cotes sont souvent autour de 1,90 pour chaque côté si les chances de victoire des deux équipes sont à peu près égales."}',
             'value_pt' => '{"0":"As odds na 22BET são geralmente semelhantes às da maioria das casas de apostas populares. Nos principais jogos de futebol, as odds para equipes equilibradas podem chegar a 2,00. No basquete, em eventos populares, as odds costumam ser em torno de 1,90 para cada lado, se ambas as equipes tiverem chances aproximadamente iguais de vencer."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, at ATP or WTA matches, you can find odds around 1.85. For esports, which is actively represented on the platform, the odds also remain competitive. For example, in CS:GO or Dota 2 matches, the odds for the underdog often exceed 3.00."}',
             'value_es' => '{"0":"En tenis, en partidos ATP o WTA, se pueden encontrar cuotas alrededor de 1.85. Para los deportes electrónicos, que están muy presentes en la plataforma, las cuotas también se mantienen competitivas. Por ejemplo, en partidos de CS:GO o Dota 2, las cuotas para el desfavorecido a menudo superan 3.00."}',
             'value_fr' => '{"0":"Au tennis, lors des matchs ATP ou WTA, on peut trouver des cotes autour de 1,85. Pour les esports, qui sont fortement représentés sur la plateforme, les cotes restent également compétitives. Par exemple, lors des matchs de CS:GO ou Dota 2, les cotes pour l’outsider dépassent souvent 3,00."}',
             'value_pt' => '{"0":"No tênis, em partidas ATP ou WTA, você pode encontrar odds em torno de 1,85. Para os esports, que estão bem representados na plataforma, as odds também permanecem competitivas. Por exemplo, em partidas de CS:GO ou Dota 2, as odds para o azarão frequentemente superam 3,00."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"As for limits, they also vary significantly depending on the event. In top football matches, for instance in the English Premier League, the maximum bet can exceed $50,000, while in less popular regional championships, the limit often does not exceed $2,000–3,000. In NBA basketball, limits are around $20,000–30,000, and for esports matches — within $5,000–10,000."}',
             'value_es' => '{"0":"En cuanto a los límites, también varían significativamente según el evento. En los principales partidos de fútbol, por ejemplo en la Premier League inglesa, la apuesta máxima puede superar los $50,000, mientras que en campeonatos regionales menos populares, el límite a menudo no supera los $2,000–3,000. En la NBA, los límites están entre $20,000–30,000, y en partidos de esports, entre $5,000–10,000."}',
             'value_fr' => '{"0":"Quant aux limites, elles varient également considérablement selon l’événement. Lors des principaux matchs de football, par exemple en Premier League anglaise, le pari maximum peut dépasser 50 000 dollars, tandis que dans les championnats régionaux moins populaires, la limite ne dépasse souvent pas 2 000–3 000 dollars. En NBA, les limites se situent autour de 20 000–30 000 dollars, et pour les matchs d’esports — entre 5 000 et 10 000 dollars."}',
             'value_pt' => '{"0":"Quanto aos limites, eles também variam significativamente dependendo do evento. Nos principais jogos de futebol, por exemplo na Premier League inglesa, a aposta máxima pode ultrapassar $50.000, enquanto em campeonatos regionais menos populares, o limite geralmente não excede $2.000–3.000. Na NBA, os limites estão entre $20.000–30.000, e para partidas de esports — entre $5.000–10.000."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet on most markets is just $0.20, allowing new players to test the platform."}',
             'value_es' => '{"0":"La apuesta mínima en la mayoría de los mercados es de solo $0.20, lo que permite a los nuevos jugadores probar la plataforma."}',
             'value_fr' => '{"0":"La mise minimale sur la plupart des marchés est de seulement 0,20 $, ce qui permet aux nouveaux joueurs de tester la plateforme."}',
             'value_pt' => '{"0":"A aposta mínima na maioria dos mercados é de apenas $0,20, permitindo que novos jogadores testem a plataforma."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers a wide range of betting options for each event. For football matches, these can include bets on half-time results, totals, handicaps, correct scores, and individual player statistics. As with most bookmakers, there is also the possibility to place combined bets."}',
             'value_es' => '{"0":"22BET ofrece una gran variedad de opciones de apuesta para cada evento. En los partidos de fútbol, esto puede incluir apuestas sobre resultados de medio tiempo, totales, hándicaps, marcador exacto y estadísticas individuales de los jugadores. Como en la mayoría de las casas de apuestas, también existe la posibilidad de realizar apuestas combinadas."}',
             'value_fr' => '{"0":"22BET propose un large éventail d’options de pari pour chaque événement. Pour les matchs de football, cela peut inclure les résultats à la mi-temps, les totaux, les handicaps, le score exact et les statistiques individuelles des joueurs. Comme pour la plupart des bookmakers, il est également possible de placer des paris combinés."}',
             'value_pt' => '{"0":"A 22BET oferece uma grande variedade de opções de apostas para cada evento. Nos jogos de futebol, isso pode incluir apostas nos resultados do primeiro tempo, totais, handicaps, placares exatos e estatísticas individuais dos jogadores. Como na maioria das casas de apostas, também é possível fazer apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In basketball and tennis, players can bet on the number of points or sets. For esports, bets are available not only on the match winner but also on maps, rounds, or specific in-game scenarios. Thanks to such market depth, users can develop their own strategies and choose non-standard prediction options. This is one of the bookmaker’s key advantages that sets it apart from competitors."}',
             'value_es' => '{"0":"En baloncesto y tenis, se puede apostar sobre la cantidad de puntos o sets. Para los esports, hay apuestas no solo al ganador del partido, sino también a mapas, rondas o escenarios específicos del juego. Gracias a esta amplitud de mercados, los usuarios pueden desarrollar sus propias estrategias y elegir opciones de predicción no estándar. Esta es una de las principales ventajas del operador que lo distingue de la competencia."}',
             'value_fr' => '{"0":"Au basketball et au tennis, les joueurs peuvent parier sur le nombre de points ou de sets. Pour les esports, les paris sont disponibles non seulement sur le vainqueur du match, mais aussi sur les cartes, les manches ou des scénarios spécifiques du jeu. Grâce à une telle largeur de marchés, les utilisateurs peuvent élaborer leurs propres stratégies et choisir des options de prédiction non standard. C’est l’un des principaux avantages du bookmaker qui le distingue de ses concurrents."}',
             'value_pt' => '{"0":"No basquete e no tênis, é possível apostar no número de pontos ou sets. Para os esports, as apostas estão disponíveis não apenas no vencedor da partida, mas também em mapas, rounds ou cenários específicos do jogo. Graças a essa amplitude de mercados, os usuários podem desenvolver suas próprias estratégias e escolher opções de previsão não padrão. Esta é uma das principais vantagens da casa de apostas, que a diferencia dos concorrentes."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The live section of 22BET allows users to place bets during the match in real time. The selection of live events covers the same sports as pre-match, with a focus on football, tennis, basketball, and hockey."}',
             'value_es' => '{"0":"La sección en vivo de 22BET permite a los usuarios realizar apuestas durante el partido en tiempo real. La selección de eventos en vivo cubre los mismos deportes que la sección de prepartido, con énfasis en fútbol, tenis, baloncesto y hockey."}',
             'value_fr' => '{"0":"La section live de 22BET permet aux utilisateurs de placer des paris en temps réel pendant le match. La sélection d’événements en direct couvre les mêmes sports que la section pré-match, avec un accent sur le football, le tennis, le basketball et le hockey."}',
             'value_pt' => '{"0":"A seção ao vivo da 22BET permite que os usuários façam apostas durante a partida em tempo real. A seleção de eventos ao vivo cobre os mesmos esportes que na pré-jogo, com foco em futebol, tênis, basquete e hóquei."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Although the platform does not offer video streams for all matches, users can use a graphical match tracker and statistics. This makes it easy to follow the game’s dynamics and make timely decisions. Live bets at 22BET are characterized by fast acceptance and stable performance, even during peak hours."}',
             'value_es' => '{"0":"Aunque la plataforma no ofrece transmisiones de video para todos los partidos, los usuarios pueden utilizar un rastreador gráfico del partido y estadísticas. Esto facilita seguir la dinámica del juego y tomar decisiones rápidas. Las apuestas en vivo en 22BET se caracterizan por su aceptación rápida y funcionamiento estable, incluso en horas punta."}',
             'value_fr' => '{"0":"Bien que la plateforme ne propose pas de diffusion vidéo pour tous les matchs, les utilisateurs peuvent utiliser un suivi graphique du match et les statistiques. Cela permet de suivre facilement la dynamique du jeu et de prendre des décisions rapides. Les paris en direct sur 22BET se distinguent par leur rapidité d’acceptation et leur fonctionnement stable, même aux heures de pointe."}',
             'value_pt' => '{"0":"Embora a plataforma não ofereça transmissões de vídeo para todas as partidas, os usuários podem utilizar um rastreador gráfico da partida e estatísticas. Isso facilita acompanhar a dinâmica do jogo e tomar decisões rápidas. As apostas ao vivo na 22BET se destacam pela rápida aceitação e funcionamento estável, mesmo nos horários de pico."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET uses standard data protection methods, including SSL encryption, which ensures security during transactions and the processing of personal information. The operator operates under a Curaçao license, which provides a basic level of regulatory oversight, although it is not the strictest standard in the world."}',
             'value_es' => '{"0":"22BET utiliza métodos estándar de protección de datos, incluyendo cifrado SSL, que garantiza la seguridad durante las transacciones y el procesamiento de la información personal. El operador funciona bajo una licencia de Curazao, que proporciona un nivel básico de supervisión regulatoria, aunque no es el estándar más estricto del mundo."}',
             'value_fr' => '{"0":"22BET utilise des méthodes standard de protection des données, notamment le cryptage SSL, qui assure la sécurité lors des transactions et du traitement des informations personnelles. L’opérateur fonctionne sous licence de Curaçao, ce qui garantit un niveau de contrôle réglementaire de base, bien que ce ne soit pas la norme la plus stricte au monde."}',
             'value_pt' => '{"0":"A 22BET utiliza métodos padrão de proteção de dados, incluindo criptografia SSL, que garante a segurança durante transações e no processamento de informações pessoais. O operador funciona sob licença de Curaçao, que oferece um nível básico de supervisão regulatória, embora não seja o padrão mais rigoroso do mundo."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In terms of reputation, the company is known for its large customer base and long-standing presence in many countries. However, as with any international bookmaker, it is important to consider the specific legislation in each region to avoid access restrictions."}',
             'value_es' => '{"0":"En cuanto a la reputación, la compañía es conocida por su amplia base de clientes y su presencia prolongada en muchos países. Sin embargo, como ocurre con cualquier casa de apuestas internacional, es importante tener en cuenta la legislación específica de cada región para evitar restricciones de acceso."}',
             'value_fr' => '{"0":"En termes de réputation, l’entreprise est connue pour sa grande base de clients et sa présence prolongée dans de nombreux pays. Cependant, comme pour tout bookmaker international, il est important de tenir compte de la législation spécifique à chaque région afin d’éviter des restrictions d’accès."}',
             'value_pt' => '{"0":"Em termos de reputação, a empresa é conhecida por sua grande base de clientes e presença prolongada em muitos países. No entanto, como ocorre com qualquer casa de apostas internacional, é importante considerar a legislação específica de cada região para evitar restrições de acesso."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET supports over 100 payment methods, including bank cards, e-wallets, and cryptocurrencies. The minimum deposit usually starts from a few dollars, making the service accessible to almost all users."}',
             'value_es' => '{"0":"22BET admite más de 100 métodos de pago, incluidas tarjetas bancarias, monederos electrónicos y criptomonedas. El depósito mínimo suele comenzar desde unos pocos dólares, lo que hace que el servicio sea accesible para casi todos los usuarios."}',
             'value_fr' => '{"0":"22BET prend en charge plus de 100 méthodes de paiement, y compris les cartes bancaires, les portefeuilles électroniques et les cryptomonnaies. Le dépôt minimum commence généralement à quelques dollars, ce qui rend le service accessible à presque tous les utilisateurs."}',
             'value_pt' => '{"0":"A 22BET suporta mais de 100 métodos de pagamento, incluindo cartões bancários, carteiras eletrônicas e criptomoedas. O depósito mínimo geralmente começa a partir de alguns dólares, tornando o serviço acessível para quase todos os usuários."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals typically take from a few minutes up to a day, depending on the chosen method. Cryptocurrency transactions are processed faster, while bank cards take longer. The platform does not charge its own transaction fees, but certain costs may apply from the payment systems."}',
             'value_es' => '{"0":"Los retiros suelen tardar desde unos minutos hasta un día, según el método elegido. Las transacciones con criptomonedas se procesan más rápido, mientras que las tarjetas bancarias tardan más. La plataforma no cobra tarifas por transacción, pero ciertos costos pueden aplicarse por parte de los sistemas de pago."}',
             'value_fr' => '{"0":"Les retraits prennent généralement de quelques minutes à une journée, selon la méthode choisie. Les transactions en cryptomonnaies sont traitées plus rapidement, tandis que les cartes bancaires prennent plus de temps. La plateforme ne facture pas de frais de transaction, mais certains coûts peuvent être appliqués par les systèmes de paiement."}',
             'value_pt' => '{"0":"Os saques geralmente levam de alguns minutos até um dia, dependendo do método escolhido. As transações em criptomoedas são processadas mais rapidamente, enquanto os cartões bancários demoram mais. A plataforma não cobra taxas próprias pelas transações, mas certos custos podem ser aplicados pelos sistemas de pagamento."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET support service operates 24/7. The main communication channel is the online chat on the website, which allows users to get answers to basic questions within a few minutes. Additionally, support is available via email and phone, although response times may be longer through these channels."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 22BET funciona las 24 horas, los 7 días de la semana. El canal principal de comunicación es el chat en línea del sitio web, que permite a los usuarios obtener respuestas a preguntas básicas en pocos minutos. Además, el soporte está disponible por correo electrónico y teléfono, aunque los tiempos de respuesta pueden ser más largos a través de estos canales."}',
             'value_fr' => '{"0":"Le service client de 22BET est disponible 24h/24 et 7j/7. Le principal canal de communication est le chat en ligne sur le site, qui permet aux utilisateurs d’obtenir des réponses aux questions de base en quelques minutes. De plus, le support est disponible par e-mail et par téléphone, bien que les délais de réponse puissent être plus longs via ces canaux."}',
             'value_pt' => '{"0":"O serviço de suporte da 22BET funciona 24 horas por dia, 7 dias por semana. O principal canal de comunicação é o chat online no site, que permite aos usuários obter respostas para perguntas básicas em poucos minutos. Além disso, o suporte está disponível por e-mail e telefone, embora os tempos de resposta possam ser mais longos por esses canais."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and casino games",
                                 "1":"Over 100 payment methods, including cryptocurrencies",
                                 "2":"Accessibility for an international audience",
                                 "3":"Competitive odds"},
                             "1":
                                {"0":"Limited live video streams",
                                 "1":"Possible access restrictions in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de eventos deportivos y juegos de casino",
                                 "1":"Más de 100 métodos de pago, incluidas criptomonedas",
                                 "2":"Accesibilidad para una audiencia internacional",
                                 "3":"Cuotas competitivas"},
                             "1":
                                {"0":"Transmisiones en vivo limitadas",
                                 "1":"Posibles restricciones de acceso en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs et de jeux de casino",
                                 "1":"Plus de 100 méthodes de paiement, y compris les cryptomonnaies",
                                 "2":"Accessibilité pour un public international",
                                 "3":"Cotes compétitives"},
                             "1":
                                {"0":"Diffusions vidéo en direct limitées",
                                 "1":"Restrictions d’accès possibles dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos e jogos de cassino",
                                 "1":"Mais de 100 métodos de pagamento, incluindo criptomoedas",
                                 "2":"Acessibilidade para um público internacional",
                                 "3":"Odds competitivas"},
                             "1":
                                {"0":"Transmissões de vídeo ao vivo limitadas",
                                 "1":"Possíveis restrições de acesso em alguns países"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Does 22BET have a mobile app?"}',
             'value_es' => '{"0":"¿22BET tiene una aplicación móvil?"}',
             'value_fr' => '{"0":"22BET dispose-t-il d’une application mobile ?"}',
             'value_pt' => '{"0":"O 22BET tem um aplicativo móvel?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 38
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, users can download apps for Android and iOS directly from the official website."}',
             'value_es' => '{"0":"Sí, los usuarios pueden descargar las aplicaciones para Android e iOS directamente desde el sitio web oficial."}',
             'value_fr' => '{"0":"Oui, les utilisateurs peuvent télécharger les applications pour Android et iOS directement depuis le site officiel."}',
             'value_pt' => '{"0":"Sim, os usuários podem baixar os aplicativos para Android e iOS diretamente do site oficial."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 39
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit amount?"}',
             'value_es' => '{"0":"¿Cuál es el monto mínimo de depósito?"}',
             'value_fr' => '{"0":"Quel est le montant minimum de dépôt ?"}',
             'value_pt' => '{"0":"Qual é o valor mínimo de depósito?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 40
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Usually, it is a few dollars, depending on the chosen payment method."}',
             'value_es' => '{"0":"Normalmente, son unos pocos dólares, dependiendo del método de pago elegido."}',
             'value_fr' => '{"0":"En général, il s’agit de quelques dollars, selon le mode de paiement choisi."}',
             'value_pt' => '{"0":"Normalmente, são alguns dólares, dependendo do método de pagamento escolhido."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 41
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Cuán rápido se procesan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 42
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"It depends on the method, but most transactions are completed within a day."}',
             'value_es' => '{"0":"Depende del método, pero la mayoría de las transacciones se completan en un día."}',
             'value_fr' => '{"0":"Cela dépend de la méthode, mais la plupart des transactions sont effectuées en moins d’une journée."}',
             'value_pt' => '{"0":"Depende do método, mas a maioria das transações é concluída dentro de um dia."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 43
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can you place bets in live mode?"}',
             'value_es' => '{"0":"¿Se pueden realizar apuestas en modo en vivo?"}',
             'value_fr' => '{"0":"Peut-on parier en mode live ?"}',
             'value_pt' => '{"0":"É possível fazer apostas em modo ao vivo?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 44
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET offers a live betting section with constantly updated odds. Players can place bets on events in real time, track statistics, and use a graphical match tracker to predict outcomes."}',
             'value_es' => '{"0":"Sí, 22BET ofrece una sección de apuestas en vivo con cuotas actualizadas constantemente. Los jugadores pueden apostar en eventos en tiempo real, seguir las estadísticas y utilizar un rastreador gráfico de partidos para predecir los resultados."}',
             'value_fr' => '{"0":"Oui, 22BET propose une section de paris en direct avec des cotes constamment mises à jour. Les joueurs peuvent parier sur les événements en temps réel, suivre les statistiques et utiliser un suivi graphique du match pour prédire les résultats."}',
             'value_pt' => '{"0":"Sim, a 22BET oferece uma seção de apostas ao vivo com odds constantemente atualizadas. Os jogadores podem apostar em eventos em tempo real, acompanhar estatísticas e usar um rastreador gráfico da partida para prever os resultados."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 45
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Which currencies does the platform support?"}',
             'value_es' => '{"0":"¿Qué monedas admite la plataforma?"}',
             'value_fr' => '{"0":"Quelles devises la plateforme prend-elle en charge ?"}',
             'value_pt' => '{"0":"Quais moedas a plataforma suporta?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 46
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET supports over 50 currencies, including dollars, euros, and cryptocurrencies. This makes the platform convenient for international users."}',
             'value_es' => '{"0":"22BET admite más de 50 monedas, incluidos dólares, euros y criptomonedas. Esto hace que la plataforma sea conveniente para usuarios internacionales."}',
             'value_fr' => '{"0":"22BET prend en charge plus de 50 devises, y compris les dollars, les euros et les cryptomonnaies. Cela rend la plateforme pratique pour les utilisateurs internationaux."}',
             'value_pt' => '{"0":"A 22BET suporta mais de 50 moedas, incluindo dólares, euros e criptomoedas. Isso torna a plataforma conveniente para usuários internacionais."}',
             'order' => 46
            ]
        );
    }
}
