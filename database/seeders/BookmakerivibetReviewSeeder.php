<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet positions itself as an international platform for sports betting and casino games, owned by TechOptions Group B.V. and operating under a Curaçao license. The site supports different markets and a wide range of currencies and languages, making the service accessible to players from various countries. The platform is active in Latin America, Asia, and Europe, offering localized interface options and payment methods."}',
             'value_es' => '{"0":"Ivibet se posiciona como una plataforma internacional de apuestas deportivas y juegos de casino, propiedad de TechOptions Group B.V. y operando bajo una licencia de Curazao. El sitio admite diferentes mercados y una amplia gama de monedas e idiomas, lo que hace que el servicio sea accesible para jugadores de varios países. La plataforma opera en América Latina, Asia y Europa, ofreciendo opciones de interfaz localizadas y métodos de pago."}',
             'value_fr' => '{"0":"Ivibet se présente comme une plateforme internationale de paris sportifs et de jeux de casino, détenue par TechOptions Group B.V. et opérant sous une licence du Curaçao. Le site prend en charge différents marchés ainsi qu’un large éventail de devises et de langues, ce qui le rend accessible aux joueurs de nombreux pays. La plateforme est active en Amérique latine, en Asie et en Europe, proposant des interfaces localisées et divers moyens de paiement."}',
             'value_pt' => '{"0":"O Ivibet se posiciona como uma plataforma internacional de apostas esportivas e jogos de cassino, pertencente à TechOptions Group B.V. e operando sob licença de Curaçao. O site atende a diferentes mercados e oferece uma ampla variedade de moedas e idiomas, tornando o serviço acessível a jogadores de vários países. A plataforma atua na América Latina, Ásia e Europa, disponibilizando opções de interface localizadas e métodos de pagamento."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at the Ivibet bookmaker, so keep reading to understand whether this betting company is the right choice for you."}',
             'value_es' => '{"0":"En esta reseña, analizaremos más a fondo la casa de apuestas Ivibet, así que sigue leyendo para descubrir si esta casa de apuestas es la adecuada para ti."}',
             'value_fr' => '{"0":"Dans cet avis, nous allons examiner de plus près le bookmaker Ivibet, alors poursuivez votre lecture pour voir si cette société de paris vous convient."}',
             'value_pt' => '{"0":"Nesta análise, vamos examinar mais detalhadamente a casa de apostas Ivibet, então continue lendo para entender se esta casa de apostas é a ideal para você."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet’s pre-match line covers both popular sports and a range of niche disciplines. This section includes major sports such as football, tennis, basketball, hockey, boxing, and motorsports, along with a substantial block dedicated to esports. For key events, dozens or even hundreds of markets are available: winner, totals, handicaps, correct score, player bets, and a variety of special options."}',
             'value_es' => '{"0":"La línea previa al partido de Ivibet abarca tanto los deportes más populares como una serie de disciplinas de nicho. En esta sección se incluyen deportes destacados como fútbol, tenis, baloncesto, hockey, boxeo y automovilismo, además de un bloque amplio dedicado a los deportes electrónicos. En los eventos clave se ofrecen decenas o incluso cientos de mercados: ganador, totales, hándicaps, marcador exacto, apuestas a jugadores y diversas opciones especiales."}',
             'value_fr' => '{"0":"La ligne pré-match d’Ivibet couvre à la fois les sports populaires et diverses disciplines de niche. On y retrouve les grands sports tels que le football, le tennis, le basketball, le hockey, la boxe et le sport automobile, ainsi qu’un large espace dédié à l’esport. Pour les événements majeurs, des dizaines voire des centaines de marchés sont disponibles : vainqueur, totaux, handicaps, score exact, paris sur les joueurs et différentes options spéciales."}',
             'value_pt' => '{"0":"A linha pré-jogo da Ivibet cobre tanto os esportes mais populares quanto várias disciplinas de nicho. Esta seção inclui modalidades de destaque como futebol, tênis, basquete, hóquei, boxe e automobilismo, além de um bloco expressivo dedicado aos esportes eletrônicos. Nos principais eventos são oferecidos dezenas ou até centenas de mercados: vencedor, totais, handicaps, placar exato, apostas em jogadores e várias opções especiais."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The number of events per day depends on the season, but during peak periods Ivibet offers several thousand pre-match events. With such a wide selection, it is easy to build accumulators, place combination bets, and create system coupons across different sports."}',
             'value_es' => '{"0":"El número de eventos diarios depende de la temporada, pero en los periodos de mayor actividad Ivibet ofrece varios miles de eventos previos al partido. Gracias a esta amplia selección, resulta sencillo armar combinadas, realizar apuestas múltiples y crear cupones de sistema en diferentes deportes."}',
             'value_fr' => '{"0":"Le nombre d’événements par jour varie selon la saison, mais lors des périodes de pointe Ivibet propose plusieurs milliers d’événements pré-match. Avec un tel choix, il est facile de composer des paris combinés, de miser sur des accumulés ou de créer des systèmes couvrant plusieurs sports."}',
             'value_pt' => '{"0":"O número de eventos por dia depende da temporada, mas nos períodos de pico a Ivibet disponibiliza vários milhares de eventos pré-jogo. Com essa grande variedade, é fácil montar acumuladas, fazer apostas combinadas e criar cupons de sistema em diferentes esportes."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet Casino is designed as a separate section within the platform and includes thousands of slots and table games from well-known providers such as Pragmatic Play, Microgaming, NetEnt, Evolution, and Ezugi."}',
             'value_es' => '{"0":"El casino de Ivibet está diseñado como un bloque independiente dentro de la plataforma e incluye miles de tragamonedas y juegos de mesa de reconocidos proveedores como Pragmatic Play, Microgaming, NetEnt, Evolution y Ezugi."}',
             'value_fr' => '{"0":"Le casino Ivibet est conçu comme une section distincte au sein de la plateforme et comprend des milliers de machines à sous et de jeux de table provenant de fournisseurs renommés tels que Pragmatic Play, Microgaming, NetEnt, Evolution et Ezugi."}',
             'value_pt' => '{"0":"O cassino da Ivibet é estruturado como uma seção separada dentro da plataforma e inclui milhares de caça-níqueis e jogos de mesa de provedores renomados como Pragmatic Play, Microgaming, NetEnt, Evolution e Ezugi."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the Live section, players can find both standard roulette and various game shows. The casino features a loyalty program with VIP levels, allowing players to accumulate points through betting and later unlock personalized rewards."}',
             'value_es' => '{"0":"En las salas en vivo se pueden encontrar tanto la ruleta clásica como diferentes juegos tipo show. El casino cuenta con un programa de lealtad con niveles VIP, lo que permite acumular puntos por las apuestas y posteriormente desbloquear recompensas personalizadas."}',
             'value_fr' => '{"0":"Dans les salles en direct, on retrouve à la fois la roulette classique et divers jeux télévisés. Le casino propose un programme de fidélité avec des niveaux VIP, permettant d’accumuler des points sur les mises et de débloquer ensuite des récompenses personnalisées."}',
             'value_pt' => '{"0":"Nas salas ao vivo estão disponíveis tanto a roleta tradicional quanto diferentes jogos de entretenimento. O cassino oferece um programa de fidelidade com níveis VIP, permitindo acumular pontos através das apostas e, posteriormente, desbloquear recompensas personalizadas."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The odds at Ivibet are generally close to the market average, while on top events they can be slightly higher than at other bookmakers. For example, on popular football matches and major league games, odds are often around 1.90 for the favorite to win."}',
             'value_es' => '{"0":"Las cuotas en Ivibet suelen estar cerca del promedio del mercado, mientras que en los eventos más importantes pueden ser ligeramente superiores a las de otros operadores. Por ejemplo, en los partidos de fútbol populares y en las grandes ligas, las cotizaciones suelen situarse alrededor de 1.90 para la victoria del favorito."}',
             'value_fr' => '{"0":"Les cotes chez Ivibet se situent généralement autour de la moyenne du marché, mais lors des grands événements elles peuvent être légèrement supérieures à celles d’autres bookmakers. Par exemple, sur les matchs de football populaires et les grandes ligues, les cotes tournent souvent autour de 1.90 pour la victoire du favori."}',
             'value_pt' => '{"0":"As odds na Ivibet geralmente estão próximas da média do mercado, enquanto em eventos de maior destaque podem ser um pouco superiores às de outros operadores. Por exemplo, em partidas populares de futebol e em grandes ligas, as cotações costumam estar em torno de 1,90 para a vitória do favorito."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet in the system is $0.10, making the platform accessible even for cautious players. Maximum limits depend on the specific market and event: for top football matches, large sums can be wagered, while for niche disciplines the limits are considerably lower. Withdrawals also have restrictions, but they correspond to market standards and do not cause major difficulties for users. The daily withdrawal limit is set at $4,000."}',
             'value_es' => '{"0":"La apuesta mínima en el sistema es de 0,10 dólares, lo que hace que la plataforma sea accesible incluso para los jugadores más cautelosos. Los límites máximos dependen del mercado y del evento específico: en los grandes partidos de fútbol se pueden apostar sumas elevadas, mientras que en disciplinas de nicho los máximos son considerablemente más bajos. Los retiros también tienen restricciones, pero se ajustan a las normas del mercado y no generan grandes dificultades para los usuarios. El límite diario de retiro es de 4.000 dólares."}',
             'value_fr' => '{"0":"La mise minimale dans le système est de 0,10 dollar, ce qui rend la plateforme accessible même aux joueurs prudents. Les limites maximales dépendent du marché et de l’événement : pour les grands matchs de football, il est possible de miser des montants importants, tandis que pour les disciplines de niche les plafonds sont nettement plus bas. Les retraits comportent également certaines restrictions, mais elles restent conformes aux standards du marché et ne posent pas de difficultés majeures aux utilisateurs. La limite quotidienne de retrait est fixée à 4 000 dollars."}',
             'value_pt' => '{"0":"A aposta mínima no sistema é de US$ 0,10, o que torna a plataforma acessível mesmo para jogadores mais cautelosos. Os limites máximos dependem do mercado e do evento específico: em grandes partidas de futebol é possível apostar valores altos, enquanto em disciplinas de nicho os limites são consideravelmente mais baixos. Os saques também possuem restrições, mas seguem os padrões de mercado e não causam grandes dificuldades aos usuários. O limite diário de saque é de US$ 4.000."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet offers a wide range of betting options for each event, and this becomes clear as soon as you open the line. In football, you can find not only the classic markets such as match result or totals, but also extended options: Asian handicaps, bets on individual player statistics, the number of corners, cards, or even special offers for the first minutes of the game. Basketball and tennis also feature a detailed market selection, including games, sets, and specific in-play actions."}',
             'value_es' => '{"0":"Ivibet ofrece una gran variedad de opciones de apuestas para cada evento, y esto se nota de inmediato al abrir la línea. En el fútbol, no solo están los mercados clásicos como el resultado del partido o los totales, sino también opciones ampliadas: hándicaps asiáticos, apuestas a estadísticas individuales de jugadores, número de saques de esquina, tarjetas o incluso ofertas especiales para los primeros minutos del juego. El baloncesto y el tenis también cuentan con una cobertura de mercados detallada, incluyendo juegos, sets y acciones específicas durante el partido."}',
             'value_fr' => '{"0":"Ivibet propose un large éventail d’options de paris pour chaque événement, et cela se remarque immédiatement en consultant la ligne. Dans le football, on retrouve non seulement les marchés classiques comme le résultat du match ou les totaux, mais aussi des variantes élargies : handicaps asiatiques, paris sur les statistiques individuelles des joueurs, nombre de corners, de cartons, ou encore des offres spéciales sur les premières minutes de jeu. Le basketball et le tennis bénéficient également d’une couverture détaillée, avec des paris sur les jeux, les sets et certaines actions précises en direct."}',
             'value_pt' => '{"0":"A Ivibet oferece uma ampla variedade de opções de apostas para cada evento, algo que fica evidente logo ao abrir a linha. No futebol, não estão apenas os mercados clássicos como resultado da partida ou totais, mas também opções mais detalhadas: handicaps asiáticos, apostas em estatísticas individuais dos jogadores, número de escanteios, cartões ou até ofertas especiais para os primeiros minutos de jogo. O basquete e o tênis também apresentam mercados bem desenvolvidos, incluindo games, sets e ações específicas ao vivo."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For major championships, the number of available options is impressive, allowing players to discover unusual opportunities for betting. In lesser-known leagues, the choice is more modest, but still sufficient for basic predictions. Overall, the market coverage at Ivibet will satisfy both beginners and experienced users who are looking for variety and detailed options in the betting line."}',
             'value_es' => '{"0":"En los campeonatos más populares, la cantidad de opciones disponibles es impresionante, lo que permite a los jugadores encontrar oportunidades poco convencionales para apostar. En ligas menos conocidas, la selección es más modesta, pero sigue siendo suficiente para realizar pronósticos básicos. En general, la amplitud de mercados en Ivibet satisfará tanto a principiantes como a usuarios experimentados que buscan variedad y detalle en la línea de apuestas."}',
             'value_fr' => '{"0":"Pour les championnats majeurs, le nombre d’options disponibles est impressionnant, permettant aux parieurs de trouver des opportunités originales. Dans les ligues moins connues, le choix est plus restreint, mais reste suffisant pour les pronostics de base. Globalement, la diversité des marchés chez Ivibet saura satisfaire aussi bien les débutants que les parieurs expérimentés en quête de variété et de détails dans la ligne."}',
             'value_pt' => '{"0":"Nos campeonatos mais populares, a quantidade de opções disponíveis impressiona, permitindo aos jogadores encontrar oportunidades de apostas pouco convencionais. Em ligas menos conhecidas, a seleção é mais modesta, mas ainda suficiente para previsões básicas. No geral, a amplitude de mercados da Ivibet atende tanto iniciantes quanto apostadores experientes que procuram variedade e detalhamento na linha de apostas."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The live section at Ivibet is designed with active players in mind. Here, you can place real-time bets on football, tennis, basketball, hockey, esports, and other disciplines. Even during less popular events, users still have access to the main betting markets."}',
             'value_es' => '{"0":"La sección en vivo de Ivibet está diseñada pensando en los jugadores activos. Aquí es posible apostar en tiempo real en fútbol, tenis, baloncesto, hockey, deportes electrónicos y otras disciplinas. Incluso en eventos menos populares, los usuarios tienen acceso a los principales mercados de apuestas."}',
             'value_fr' => '{"0":"La section live d’Ivibet est pensée pour les joueurs actifs. Elle permet de parier en temps réel sur le football, le tennis, le basketball, le hockey, l’e-sport et d’autres disciplines. Même lors d’événements moins populaires, les utilisateurs ont accès aux principaux marchés de paris."}',
             'value_pt' => '{"0":"A seção ao vivo da Ivibet foi criada para atender às necessidades dos jogadores mais ativos. É possível apostar em tempo real em futebol, tênis, basquete, hóquei, e-sports e outras modalidades. Mesmo em eventos menos populares, os principais mercados de apostas estão disponíveis para os usuários."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"As for streaming, Ivibet does not yet offer coverage as extensive as some competitors, but live video is available for key events. Where streams are not provided, players can follow an interactive match tracker that displays key on-field events and statistics. Odds are updated quickly, and the system remains stable even under heavy traffic."}',
             'value_es' => '{"0":"En cuanto a las transmisiones, Ivibet aún no ofrece una cobertura tan amplia como algunos competidores, pero para los eventos clave sí están disponibles videos en directo. Cuando no hay transmisión, se puede seguir un gráfico interactivo del partido que muestra los momentos más importantes y las estadísticas. Las cuotas se actualizan rápidamente y el sistema funciona de manera estable incluso con alta demanda."}',
             'value_fr' => '{"0":"Concernant les retransmissions, Ivibet n’offre pas encore une couverture aussi vaste que certains concurrents, mais des vidéos en direct sont disponibles pour les événements clés. Lorsqu’il n’y a pas de diffusion, un suivi interactif du match permet de visualiser les moments importants et les statistiques. Les cotes se mettent à jour rapidement et la plateforme reste stable même en cas de forte affluence."}',
             'value_pt' => '{"0":"No que diz respeito às transmissões, a Ivibet ainda não oferece uma cobertura tão ampla quanto alguns concorrentes, mas os vídeos em direto estão disponíveis para os principais eventos. Quando não há transmissão, é possível acompanhar um gráfico interativo que mostra os momentos mais importantes e as estatísticas da partida. As odds são atualizadas rapidamente e o sistema mantém a estabilidade mesmo com grande volume de acessos."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet uses modern data protection and encryption technologies to guarantee the security of users’ personal information and financial transactions. The platform operates under a Curaçao license, which provides a basic level of oversight and regulation for the bookmaker’s activities."}',
             'value_es' => '{"0":"Ivibet utiliza tecnologías modernas de protección de datos y cifrado para garantizar la seguridad de la información personal y de las transacciones financieras de los usuarios. La plataforma opera bajo una licencia de Curazao, lo que asegura un nivel básico de control y regulación de la actividad del operador."}',
             'value_fr' => '{"0":"Ivibet utilise des technologies modernes de protection des données et de cryptage afin de garantir la sécurité des informations personnelles et des transactions financières des utilisateurs. La plateforme fonctionne sous licence du Curaçao, ce qui assure un niveau de contrôle et de régulation de base pour les activités du bookmaker."}',
             'value_pt' => '{"0":"A Ivibet utiliza tecnologias modernas de proteção de dados e criptografia para garantir a segurança das informações pessoais e das transações financeiras dos usuários. A plataforma opera sob licença de Curaçao, o que garante um nível básico de supervisão e regulação das atividades do operador."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To prevent fraud, identity verification is required before withdrawing large amounts. Ivibet also monitors accounts for unusual activity to prevent manipulation of bonuses or bets."}',
             'value_es' => '{"0":"Para prevenir fraudes, se requiere la verificación de identidad antes de retirar grandes sumas. Además, Ivibet supervisa la actividad inusual en las cuentas para evitar manipulaciones con bonos o apuestas."}',
             'value_fr' => '{"0":"Pour prévenir la fraude, une vérification d’identité est exigée avant tout retrait de montants importants. Ivibet surveille également les comptes afin de détecter toute activité suspecte et d’éviter les manipulations liées aux bonus ou aux paris."}',
             'value_pt' => '{"0":"Para evitar fraudes, é necessária a verificação de identidade antes de sacar grandes quantias. A Ivibet também monitora atividades anormais nas contas a fim de impedir manipulações com bônus ou apostas."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet supports various methods for deposits and withdrawals, including bank cards, e-wallets, and cryptocurrencies. The minimum deposit starts from 1 dollar, depending on the chosen method."}',
             'value_es' => '{"0":"Ivibet admite varios métodos para depósitos y retiros, incluidos tarjetas bancarias, monederos electrónicos y criptomonedas. El depósito mínimo comienza desde 1 dólar, según el método elegido."}',
             'value_fr' => '{"0":"Ivibet prend en charge différents moyens de dépôt et de retrait, y compris les cartes bancaires, les portefeuilles électroniques et les cryptomonnaies. Le dépôt minimum commence à partir de 1 dollar, selon la méthode choisie."}',
             'value_pt' => '{"0":"A Ivibet oferece diversos métodos de depósito e saque, incluindo cartões bancários, carteiras eletrônicas e criptomoedas. O depósito mínimo começa a partir de 1 dólar, dependendo do método escolhido."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The withdrawal time depends on the method: e-wallets process transactions within a few minutes, while bank cards may take up to 2 business days. The platform does not charge additional fees, although certain payment systems may apply their own."}',
             'value_es' => '{"0":"El tiempo de retiro depende del método: los monederos electrónicos procesan las transacciones en pocos minutos, mientras que las tarjetas bancarias pueden tardar hasta 2 días hábiles. La plataforma no cobra comisiones adicionales, aunque algunos sistemas de pago pueden aplicarlas."}',
             'value_fr' => '{"0":"Le délai de retrait dépend de la méthode : les portefeuilles électroniques traitent les transactions en quelques minutes, tandis que les cartes bancaires peuvent prendre jusqu’à 2 jours ouvrables. La plateforme ne facture pas de frais supplémentaires, mais certains systèmes de paiement peuvent en appliquer."}',
             'value_pt' => '{"0":"O prazo de saque depende do método: as carteiras eletrônicas processam as transações em poucos minutos, enquanto os cartões bancários podem levar até 2 dias úteis. A plataforma não cobra taxas adicionais, embora alguns sistemas de pagamento possam aplicá-las."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet customer support can be reached via the live chat on the website 24/7 and by email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Ivibet se puede contactar a través del chat en vivo en el sitio web las 24 horas del día, los 7 días de la semana, y por correo electrónico."}',
             'value_fr' => '{"0":"Le service client d’Ivibet est joignable via le chat en direct sur le site 24h/24 et 7j/7 ainsi que par e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente da Ivibet pode ser contatado pelo chat ao vivo no site 24 horas por dia, 7 dias por semana, e por e-mail."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports",
                                 "1":"Ability to place live and pre-match bets",
                                 "2":"Live streams for key events",
                                 "3":"User-friendly interface",
                                 "4":"Large number of payment methods"},
                             "1":
                                {"0":"No mobile applications",
                                 "1":"For less popular events, odds may be lower than at other bookmakers"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de deportes",
                                 "1":"Posibilidad de realizar apuestas en vivo y pre-partido",
                                 "2":"Transmisiones en directo para eventos clave",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Gran cantidad de métodos de pago"},
                             "1":
                                {"0":"Sin aplicaciones móviles",
                                 "1":"Para eventos menos populares, las cuotas pueden ser más bajas que en otros bookmakers"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de sports",
                                 "1":"Possibilité de placer des paris en direct et avant-match",
                                 "2":"Diffusions en direct pour les événements clés",
                                 "3":"Interface conviviale",
                                 "4":"Grand nombre de méthodes de paiement"},
                             "1":
                                {"0":"Absence d’applications mobiles",
                                 "1":"Pour les événements moins populaires, les cotes peuvent être inférieures à celles des autres bookmakers"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de esportes",
                                 "1":"Possibilidade de fazer apostas ao vivo e pré-jogo",
                                 "2":"Transmissões ao vivo para eventos principais",
                                 "3":"Interface amigável",
                                 "4":"Grande número de métodos de pagamento"},
                             "1":
                                {"0":"Ausência de aplicativos móveis",
                                 "1":"Para eventos menos populares, as odds podem ser mais baixas do que em outros bookmakers"}
                             }',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Ivibet"}',
                'value_fr' => '{"0":"FAQ de Ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Ivibet"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Does Ivibet have a license?"}',
             'value_es' => '{"0":"¿Ivibet tiene licencia?"}',
             'value_fr' => '{"0":"Ivibet est-elle licenciée ?"}',
             'value_pt' => '{"0":"Ivibet tem licença?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under a Curacao license, allowing it to conduct activities on the international market. The license provides a basic level of regulation, but it’s important to note that it does not offer the same level of protection as European regulatory licenses."}',
             'value_es' => '{"0":"Sí, la plataforma opera bajo una licencia de Curazao, lo que le permite actuar en el mercado internacional. La licencia proporciona un nivel básico de regulación, pero es importante tener en cuenta que no ofrece el mismo nivel de protección que las licencias de los reguladores europeos."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous licence de Curaçao, ce qui lui permet d’opérer sur le marché international. La licence assure un niveau de régulation de base, mais il est important de noter qu’elle n’offre pas le même niveau de protection que les licences des régulateurs européens."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob licença de Curaçao, permitindo atuar no mercado internacional. A licença garante um nível básico de regulamentação, mas é importante lembrar que não oferece o mesmo nível de proteção que as licenças dos reguladores europeus."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Currently, Ivibet does not offer mobile apps for Android or iOS. A mobile-optimized version of the website is available for smartphones, which works stably on any device and allows users to place bets, watch live matches, and manage their accounts."}',
             'value_es' => '{"0":"Actualmente, Ivibet no ofrece aplicaciones móviles para Android o iOS. Está disponible una versión móvil optimizada del sitio web para smartphones, que funciona de manera estable en cualquier dispositivo y permite realizar apuestas, ver partidos en vivo y gestionar la cuenta."}',
             'value_fr' => '{"0":"Actuellement, Ivibet ne propose pas d’applications mobiles pour Android ou iOS. Une version mobile optimisée du site est disponible pour les smartphones, fonctionnant de manière stable sur tous les appareils et permettant de placer des paris, de regarder des matchs en direct et de gérer son compte."}',
             'value_pt' => '{"0":"Atualmente, Ivibet não oferece aplicativos móveis para Android ou iOS. Uma versão mobile otimizada do site está disponível para smartphones, funcionando de forma estável em qualquer dispositivo e permitindo fazer apostas, assistir a partidas ao vivo e gerenciar a conta."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 38
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Are live streams available?"}',
             'value_es' => '{"0":"¿Están disponibles las transmisiones en vivo?"}',
             'value_fr' => '{"0":"Les diffusions en direct sont-elles disponibles ?"}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 39
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform provides live streams for key matches. Where video is not available, users can follow interactive match graphics and real-time statistics."}',
             'value_es' => '{"0":"Sí, la plataforma ofrece transmisiones en vivo para los partidos clave. Cuando no hay video disponible, los usuarios pueden seguir gráficos interactivos del partido y estadísticas en tiempo real."}',
             'value_fr' => '{"0":"Oui, la plateforme propose des diffusions en direct pour les matchs clés. Là où la vidéo n’est pas disponible, les utilisateurs peuvent suivre des graphiques interactifs et les statistiques en temps réel."}',
             'value_pt' => '{"0":"Sim, a plataforma oferece transmissões ao vivo para os principais jogos. Quando o vídeo não está disponível, os usuários podem acompanhar gráficos interativos e estatísticas em tempo real."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 40
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit and withdrawal methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito y retiro se admiten?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt et de retrait disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito e saque são suportados?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 41
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet supports bank cards, e-wallets, and cryptocurrencies."}',
             'value_es' => '{"0":"Ivibet admite tarjetas bancarias, monederos electrónicos y criptomonedas."}',
             'value_fr' => '{"0":"Ivibet prend en charge les cartes bancaires, les portefeuilles électroniques et les cryptomonnaies."}',
             'value_pt' => '{"0":"Ivibet aceita cartões bancários, carteiras eletrônicas e criptomoedas."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 42
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use the site?"}',
             'value_es' => '{"0":"¿Es seguro usar el sitio?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser le site ?"}',
             'value_pt' => '{"0":"É seguro usar o site?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 43
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all transactions are encrypted with modern technologies. Identity verification is required for large amounts. Player protection complies with Curaçao license standards."}',
             'value_es' => '{"0":"Sí, todas las transacciones están encriptadas con tecnologías modernas. Se requiere verificación de identidad para grandes sumas. La protección del jugador cumple con los estándares de la licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, toutes les transactions sont cryptées avec des technologies modernes. Une vérification d’identité est nécessaire pour les montants importants. La protection des joueurs est conforme aux normes de la licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, todas as transações são criptografadas com tecnologias modernas. A verificação de identidade é aplicada para grandes quantias. A proteção do jogador segue os padrões da licença de Curaçao."}',
             'order' => 43
            ]
        );
    }
}
