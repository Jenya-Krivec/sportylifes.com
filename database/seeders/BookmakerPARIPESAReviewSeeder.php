<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa positions itself as a modern international bookmaker with a wide range of diverse services, founded in 2019. The operator operates under a Curaçao license, which allows Paripesa to serve players from various countries, including Africa, Asia, and some European nations."}',
             'value_es' => '{"0":"Paripesa se presenta como un corredor de apuestas internacional moderno con una amplia gama de servicios diversos, fundado en 2019. El operador funciona bajo la licencia de Curazao, lo que permite a Paripesa atender a jugadores de varios países, incluyendo África, Asia y algunos países europeos."}',
             'value_fr' => '{"0":"Paripesa se positionne comme un bookmaker international moderne offrant un large éventail de services diversifiés, fondé en 2019. L’opérateur fonctionne sous licence de Curaçao, ce qui permet à Paripesa de servir des joueurs de différents pays, notamment en Afrique, en Asie et dans certains pays européens."}',
             'value_pt' => '{"0":"Paripesa se posiciona como um bookmaker internacional moderno com uma ampla gama de serviços diversificados, fundado em 2019. O operador funciona sob licença de Curaçao, o que permite que a Paripesa atenda jogadores de vários países, incluindo África, Ásia e alguns países europeus."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The interface is available in 16 languages, including English and Turkish, making the platform convenient for an international audience. Below, we will examine the key aspects of the bookmaker."}',
             'value_es' => '{"0":"La interfaz está disponible en 16 idiomas, incluyendo inglés y turco, lo que hace que la plataforma sea conveniente para una audiencia internacional. A continuación, examinaremos los aspectos clave del corredor."}',
             'value_fr' => '{"0":"L’interface est disponible en 16 langues, y compris l’anglais et le turc, ce qui rend la plateforme pratique pour un public international. Ci-dessous, nous examinerons les aspects clés du bookmaker."}',
             'value_pt' => '{"0":"A interface está disponível em 16 idiomas, incluindo inglês e turco, tornando a plataforma conveniente para um público internacional. A seguir, analisaremos os principais aspectos do bookmaker."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to pre-match, you will find sports such as football, tennis, basketball, and other disciplines, but attention is also given to regional leagues and less popular sports."}',
             'value_es' => '{"0":"En cuanto a las apuestas pre-match, encontrarás deportes como fútbol, tenis, baloncesto y otras disciplinas, pero también se presta atención a ligas regionales y deportes menos populares."}',
             'value_fr' => '{"0":"En ce qui concerne le pre-match, vous trouverez des sports tels que le football, le tennis, le basket-ball et d’autres disciplines, mais une attention particulière est également accordée aux ligues régionales et aux sports moins populaires."}',
             'value_pt' => '{"0":"Quando se trata de pre-match, você encontrará esportes como futebol, tênis, basquete e outras disciplinas, mas também é dada atenção a ligas regionais e esportes menos populares."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match interface is simple, allowing you to quickly build accumulators, select categories like «National Team» or «Major Tournaments», which enables fast navigation to the desired matches."}',
             'value_es' => '{"0":"La interfaz de la sección pre-match es sencilla, lo que permite crear acumuladores rápidamente y seleccionar categorías como «Selección Nacional» o «Grandes Torneos», facilitando el acceso rápido a los partidos deseados."}',
             'value_fr' => '{"0":"L’interface de la section pre-match est simple, permettant de composer rapidement des accumulateurs, de sélectionner des catégories comme « Équipe Nationale » ou « Grands Tournois », facilitant l’accès rapide aux matchs souhaités."}',
             'value_pt' => '{"0":"A interface da seção pre-match é simples, permitindo montar acumuladores rapidamente, selecionar categorias como «Seleção Nacional» ou «Grandes Torneios», facilitando a navegação rápida para as partidas desejadas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, Paripesa actively uses enhanced odds on top matches. This gives players a noticeable advantage and adds excitement even before the event starts."}',
             'value_es' => '{"0":"Además, Paripesa utiliza activamente cuotas mejoradas en los partidos principales. Esto otorga a los jugadores una ventaja notable y añade emoción incluso antes de que comience el evento."}',
             'value_fr' => '{"0":"De plus, Paripesa utilise activement des cotes améliorées sur les matchs principaux. Cela offre aux joueurs un avantage notable et ajoute de l’excitation avant même le début de l’événement."}',
             'value_pt' => '{"0":"Além disso, a Paripesa utiliza ativamente odds melhoradas nos principais jogos. Isso dá aos jogadores uma vantagem perceptível e adiciona emoção mesmo antes do início do evento."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform has established partnerships with major casino game providers, offering extensive collections of slots and live rooms with real dealers. If you enjoy trying different slot series, you will find both classic 3-reel and modern video slots with Megaways mechanics, as well as live roulette and poker tables. Overall, more than 3,500 games are available."}',
             'value_es' => '{"0":"La plataforma ha establecido asociaciones con importantes proveedores de juegos de casino, ofreciendo amplias colecciones de tragamonedas y salas en vivo con crupieres reales. Si te gusta probar diferentes series de tragamonedas, encontrarás tanto las clásicas de 3 carretes como las modernas tragamonedas de video con mecánica Megaways, así como ruletas en vivo y mesas de póker. En total, hay más de 3.500 juegos disponibles."}',
             'value_fr' => '{"0":"La plateforme a établi des partenariats avec de grands fournisseurs de jeux de casino, offrant de vastes collections de machines à sous et de salles en direct avec des croupiers réels. Si vous aimez essayer différentes séries de machines à sous, vous trouverez à la fois des classiques à 3 rouleaux et des machines à sous vidéo modernes avec mécanique Megaways, ainsi que des tables de roulette et de poker en direct. Au total, plus de 3 500 jeux sont disponibles."}',
             'value_pt' => '{"0":"A plataforma estabeleceu parcerias com grandes fornecedores de jogos de cassino, oferecendo extensas coleções de slots e salas ao vivo com dealers reais. Se você gosta de experimentar diferentes séries de slots, encontrará tanto os clássicos de 3 cilindros quanto os modernos slots de vídeo com mecânica Megaways, além de roletas e mesas de pôquer ao vivo. No total, mais de 3.500 jogos estão disponíveis."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In Paripesa’s live casino, there are over 500 games with live dealers, including roulette, blackjack, baccarat, poker, and even game shows. You will find popular titles such as Football Auto Roulette, Dream Catcher, Monopoly Live, Crazy Time, Speed Baccarat, and Dragon Tiger. Minimum bets start at $0.10, while maximum bets can reach up to $2,000."}',
             'value_es' => '{"0":"En el casino en vivo de Paripesa, hay más de 500 juegos con crupieres en vivo, incluidos ruleta, blackjack, baccarat, póker e incluso shows de juego. Encontrarás títulos populares como Football Auto Roulette, Dream Catcher, Monopoly Live, Crazy Time, Speed Baccarat y Dragon Tiger. Las apuestas mínimas comienzan en $0,10, mientras que las máximas pueden llegar hasta $2.000."}',
             'value_fr' => '{"0":"Dans le casino en direct de Paripesa, il y a plus de 500 jeux avec des croupiers en direct, y compris la roulette, le blackjack, le baccarat, le poker et même des jeux télévisés. Vous trouverez des titres populaires tels que Football Auto Roulette, Dream Catcher, Monopoly Live, Crazy Time, Speed Baccarat et Dragon Tiger. Les mises minimales commencent à 0,10 $, tandis que les mises maximales peuvent atteindre 2 000 $."}',
             'value_pt' => '{"0":"No cassino ao vivo da Paripesa, há mais de 500 jogos com dealers ao vivo, incluindo roleta, blackjack, baccarat, pôquer e até game shows. Você encontrará títulos populares como Football Auto Roulette, Dream Catcher, Monopoly Live, Crazy Time, Speed Baccarat e Dragon Tiger. As apostas mínimas começam em $0,10, enquanto as máximas podem chegar a $2.000."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa’s odds are generally in line with those of other bookmakers. For top events, for example, the site offers bets with odds of 1.95 on the favorite’s victory."}',
             'value_es' => '{"0":"Las cuotas de Paripesa están generalmente al nivel de otros corredores de apuestas. Para eventos principales, por ejemplo, el sitio ofrece apuestas con cuota de 1,95 a la victoria del favorito."}',
             'value_fr' => '{"0":"Les cotes de Paripesa sont généralement comparables à celles des autres bookmakers. Pour les événements majeurs, par exemple, le site propose des paris avec une cote de 1,95 pour la victoire du favori."}',
             'value_pt' => '{"0":"As odds da Paripesa estão geralmente no mesmo nível de outros bookmakers. Para eventos principais, por exemplo, o site oferece apostas com odds de 1,95 para a vitória do favorito."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Interestingly, Paripesa often provides enhanced odds on certain events. This could be, for example, an increased odd of 2.20 instead of the usual 2.10 for an underdog’s win."}',
             'value_es' => '{"0":"Es especialmente interesante que Paripesa a menudo ofrece cuotas mejoradas en ciertos eventos. Esto podría ser, por ejemplo, una cuota aumentada de 2,20 en lugar de la habitual 2,10 para la victoria del no favorito."}',
             'value_fr' => '{"0":"Il est particulièrement intéressant de noter que Paripesa propose souvent des cotes améliorées sur certains événements. Cela peut être, par exemple, une cote augmentée de 2,20 au lieu de 2,10 pour la victoire de l’outsider."}',
             'value_pt' => '{"0":"É especialmente interessante que a Paripesa frequentemente ofereça odds melhoradas em certos eventos. Isso pode ser, por exemplo, uma odd aumentada de 2,20 em vez da habitual 2,10 para a vitória do azarão."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Regarding limits, they are quite generous. The maximum payout on a single bet at Paripesa can reach $600,000. This makes the platform attractive for players accustomed to high-stakes betting. The minimum bet at Paripesa starts at $0.20, allowing users to test markets, bets, and strategies with minimal risk."}',
             'value_es' => '{"0":"En cuanto a los límites, son bastante buenos. La ganancia máxima que se puede obtener en una sola apuesta en Paripesa alcanza los $600.000. Esto hace que la plataforma sea atractiva para los jugadores acostumbrados a apuestas de alto riesgo. La apuesta mínima en Paripesa comienza en $0,20, lo que permite probar mercados, apuestas y estrategias con riesgos mínimos."}',
             'value_fr' => '{"0":"En ce qui concerne les limites, elles sont assez généreuses. Le gain maximum pouvant être obtenu sur un seul pari chez Paripesa peut atteindre 600 000 $. Cela rend la plateforme intéressante pour les joueurs habitués aux mises importantes. La mise minimale sur Paripesa commence à 0,20 $, ce qui permet de tester les marchés, les paris et les stratégies avec un risque minimal."}',
             'value_pt' => '{"0":"Quanto aos limites, eles são bastante generosos. O pagamento máximo em uma única aposta na Paripesa pode chegar a $600.000. Isso torna a plataforma atraente para jogadores acostumados a apostas de alto valor. A aposta mínima na Paripesa começa em $0,20, permitindo testar mercados, apostas e estratégias com riscos mínimos."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers over 55 sports, including not only popular disciplines but also unique events such as politics, lotteries, weather, or TV games. Additionally, in football, there are more than 1,300 markets available for a single event. You can bet on the number of goals, corners, totals, and much more."}',
             'value_es' => '{"0":"La plataforma ofrece más de 55 deportes, incluyendo no solo disciplinas populares, sino también eventos únicos como política, loterías, clima o juegos de televisión. Además, en el fútbol, hay más de 1.300 mercados disponibles para un solo evento. Se puede apostar a la cantidad de goles, saques de esquina, totales y mucho más."}',
             'value_fr' => '{"0":"La plateforme propose plus de 55 sports, incluant non seulement les disciplines populaires, mais aussi des événements uniques tels que la politique, les loteries, la météo ou les jeux télévisés. De plus, au football, plus de 1 300 marchés sont disponibles pour un seul événement. Vous pouvez parier sur le nombre de buts, de corners, les totaux et bien plus encore."}',
             'value_pt' => '{"0":"A plataforma oferece mais de 55 esportes, incluindo não apenas disciplinas populares, mas também eventos únicos, como política, loterias, clima ou jogos de TV. Além disso, no futebol, há mais de 1.300 mercados disponíveis para um único evento. Você pode apostar no número de gols, escanteios, totais e muito mais."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is not limited to traditional sports events. You can place bets on individual statistics, such as who will score first, the highest number of yellow cards, or even «which goalkeeper will concede the fewest matches»."}',
             'value_es' => '{"0":"Paripesa no se limita a eventos deportivos tradicionales. Puedes hacer apuestas sobre estadísticas individuales, como quién marcará primero, la mayor cantidad de tarjetas amarillas, o incluso «qué portero encajará menos partidos»."}',
             'value_fr' => '{"0":"Paripesa ne se limite pas aux événements sportifs traditionnels. Vous pouvez parier sur des statistiques individuelles, comme qui marquera en premier, le plus grand nombre de cartons jaunes, ou même « quel gardien encaissera le moins de matchs »."}',
             'value_pt' => '{"0":"A Paripesa não se limita a eventos esportivos tradicionais. Você pode fazer apostas em estatísticas individuais, como quem marcará primeiro, o maior número de cartões amarelos ou até «qual goleiro sofrerá menos gols»."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"There is also the option to create accumulators and use modern bet builder tools. This functionality is particularly useful for those who enjoy betting on different aspects of the game simultaneously."}',
             'value_es' => '{"0":"También existe la opción de crear acumuladores y usar herramientas modernas de construcción de apuestas. Esta funcionalidad es especialmente útil para quienes disfrutan apostar en diferentes aspectos del juego al mismo tiempo."}',
             'value_fr' => '{"0":"Il est également possible de créer des accumulateurs et d’utiliser des outils modernes de création de paris. Cette fonctionnalité est particulièrement utile pour ceux qui aiment parier sur différents aspects du jeu simultanément."}',
             'value_pt' => '{"0":"Também existe a opção de criar acumuladores e utilizar ferramentas modernas de construtor de apostas. Essa funcionalidade é particularmente útil para quem gosta de apostar em diferentes aspectos do jogo ao mesmo tempo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The live section of Paripesa is quite functional. Players have access to live lines with automatic odds updates and advanced statistical indicators, which make decision-making during the match easier."}',
             'value_es' => '{"0":"La sección en vivo de Paripesa es bastante funcional. Los jugadores tienen acceso a líneas en vivo con actualización automática de cuotas e indicadores estadísticos avanzados, lo que facilita la toma de decisiones durante el partido."}',
             'value_fr' => '{"0":"La section en direct de Paripesa est assez fonctionnelle. Les joueurs ont accès à des lignes en direct avec mise à jour automatique des cotes et indicateurs statistiques avancés, ce qui facilite la prise de décision pendant le match."}',
             'value_pt' => '{"0":"A seção ao vivo da Paripesa é bastante funcional. Os jogadores têm acesso a linhas ao vivo com atualização automática de odds e indicadores estatísticos avançados, facilitando a tomada de decisões durante a partida."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers a Multi-View feature that allows watching multiple events simultaneously. For example, you can follow three football matches without switching tabs and place bets without missing the dynamics of any game."}',
             'value_es' => '{"0":"Paripesa ofrece la función Multi-View, que permite observar varios eventos al mismo tiempo. Por ejemplo, puedes seguir tres partidos de fútbol sin cambiar de pestaña y realizar apuestas sin perder la dinámica de ningún juego."}',
             'value_fr' => '{"0":"Paripesa propose la fonction Multi-View, qui permet de suivre plusieurs événements simultanément. Par exemple, vous pouvez suivre trois matchs de football sans changer d’onglet et placer vos paris sans manquer la dynamique d’aucun match."}',
             'value_pt' => '{"0":"A Paripesa oferece o recurso Multi-View, que permite acompanhar vários eventos simultaneamente. Por exemplo, você pode seguir três partidas de futebol sem alternar abas e fazer apostas sem perder a dinâmica de nenhum jogo."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Moreover, although there are no live video streams on the platform, Paripesa compensates with detailed statistics, which help in making decisions during the match."}',
             'value_es' => '{"0":"Además, aunque no hay transmisiones de video en vivo en la plataforma, Paripesa lo compensa con estadísticas detalladas que ayudan a tomar decisiones durante el partido."}',
             'value_fr' => '{"0":"De plus, bien qu’il n’y ait pas de diffusion vidéo en direct sur la plateforme, Paripesa compense cela par des statistiques détaillées qui aident à prendre des décisions pendant le match."}',
             'value_pt' => '{"0":"Além disso, embora não haja transmissões de vídeo ao vivo na plataforma, a Paripesa compensa isso com estatísticas detalhadas que ajudam a tomar decisões durante a partida."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa declares the use of standard security measures such as SSL encryption, KYC procedures for large withdrawals, and responsible gaming policies. The Curaçao license allows it to operate in many countries."}',
             'value_es' => '{"0":"Paripesa declara el uso de medidas de seguridad estándar, como encriptación SSL, procedimientos KYC para retiradas grandes y políticas de juego responsable. La licencia de Curazao le permite operar en muchos países."}',
             'value_fr' => '{"0":"Paripesa déclare utiliser des mesures de sécurité standard telles que le chiffrement SSL, les procédures KYC pour les retraits importants et les politiques de jeu responsable. La licence de Curaçao lui permet d’opérer dans de nombreux pays."}',
             'value_pt' => '{"0":"A Paripesa declara o uso de medidas de segurança padrão, como criptografia SSL, procedimentos KYC para retiradas grandes e políticas de jogo responsável. A licença de Curaçao permite operar em muitos países."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa follows responsible gaming principles. Players can set deposit limits, session timers, and even self-exclusion. It is also possible to enable two-factor authentication to enhance account security."}',
             'value_es' => '{"0":"Paripesa sigue los principios de juego responsable. Los jugadores pueden establecer límites de depósito, temporizadores de sesión e incluso autoexclusión. También es posible habilitar la autenticación de dos factores para mejorar la seguridad de la cuenta."}',
             'value_fr' => '{"0":"Paripesa applique les principes du jeu responsable. Les joueurs peuvent définir des limites de dépôt, des minuteries de session et même l’auto-exclusion. Il est également possible d’activer l’authentification à deux facteurs pour renforcer la sécurité du compte."}',
             'value_pt' => '{"0":"A Paripesa segue os princípios do jogo responsável. Os jogadores podem definir limites de depósito, temporizadores de sessão e até autoexclusão. Também é possível ativar a autenticação de dois fatores para melhorar a segurança da conta."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa supports classic payment methods such as bank cards, e-wallets, terminals, and cryptocurrencies. Minimum deposits can vary significantly by country, but generally start from a few dollars or the equivalent in other currencies. More detailed limits for each method are published on the “Payments” page of the specific regional version."}',
             'value_es' => '{"0":"Paripesa admite métodos de pago clásicos, como tarjetas bancarias, monederos electrónicos, terminales y criptomonedas. Los depósitos mínimos pueden variar significativamente según el país, pero generalmente comienzan desde unos pocos dólares o el equivalente en otra moneda. Los límites más detallados por método se publican en la página “Pagos” de la versión regional correspondiente."}',
             'value_fr' => '{"0":"Paripesa prend en charge les méthodes de paiement classiques telles que les cartes bancaires, les portefeuilles électroniques, les terminaux et les cryptomonnaies. Les dépôts minimums peuvent varier considérablement selon le pays, mais commencent généralement à quelques dollars ou l’équivalent dans une autre devise. Des limites plus détaillées pour chaque méthode sont publiées sur la page « Paiements » de la version régionale correspondante."}',
             'value_pt' => '{"0":"A Paripesa oferece suporte a métodos de pagamento clássicos, como cartões bancários, carteiras eletrônicas, terminais e criptomoedas. Os depósitos mínimos podem variar bastante dependendo do país, mas geralmente começam a partir de alguns dólares ou do equivalente em outra moeda. Limites mais detalhados por método são publicados na página “Pagamentos” da versão regional correspondente."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals, as mentioned, can generally be made in large amounts, up to $600,000, but actual limits and processing speed depend on the method. Transactions via bank cards can take several business days, while e-wallets and cryptocurrencies are processed faster. Fees and withdrawal times should be confirmed during the transaction."}',
             'value_es' => '{"0":"Los retiros, como se mencionó, generalmente pueden realizarse en grandes cantidades, hasta $600.000, pero los límites reales y la velocidad de procesamiento dependen del método. Las transacciones mediante tarjetas bancarias pueden tardar varios días hábiles, mientras que los monederos electrónicos y las criptomonedas se procesan más rápido. Se recomienda verificar las comisiones y los tiempos de retiro durante la operación."}',
             'value_fr' => '{"0":"Les retraits, comme mentionné, peuvent généralement être effectués en grandes sommes, jusqu’à 600 000 $, mais les limites réelles et la vitesse de traitement dépendent de la méthode. Les transactions par carte bancaire peuvent prendre plusieurs jours ouvrables, tandis que les portefeuilles électroniques et les cryptomonnaies sont traités plus rapidement. Il est recommandé de vérifier les frais et les délais de retrait lors de l’opération."}',
             'value_pt' => '{"0":"Os saques, como mencionado, geralmente podem ser feitos em grandes quantias, até $600.000, mas os limites reais e a velocidade de processamento dependem do método. Transações com cartões bancários podem levar vários dias úteis, enquanto carteiras eletrônicas e criptomoedas são processadas mais rapidamente. Recomenda-se confirmar as taxas e os prazos de saque durante a operação."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa provides support via 24/7 live chat, phone, email, and a contact form on the website. For urgent matters, it is better to use the live chat, while for verification-related issues, email is recommended."}',
             'value_es' => '{"0":"Paripesa ofrece soporte a través de chat en vivo 24/7, teléfono, correo electrónico y un formulario de contacto en el sitio web. Para asuntos urgentes, es mejor utilizar el chat en vivo, mientras que para cuestiones relacionadas con la verificación se recomienda el correo electrónico."}',
             'value_fr' => '{"0":"Paripesa offre un support via chat en direct 24h/24 et 7j/7, téléphone, e-mail et formulaire de contact sur le site. Pour les questions urgentes, il est préférable d’utiliser le chat en direct, tandis que pour les questions liées à la vérification, l’e-mail est recommandé."}',
             'value_pt' => '{"0":"A Paripesa oferece suporte através de chat ao vivo 24/7, telefone, e-mail e formulário de contato no site. Para assuntos urgentes, é melhor utilizar o chat ao vivo, enquanto para questões relacionadas à verificação, recomenda-se o e-mail."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of markets",
                                 "1":"Mobile applications",
                                 "2":"User-friendly interface",
                                 "3":"Cryptocurrency support",
                                 "4":"High payout limits"},
                             "1":
                                {"0":"Curaçao license does not provide full guarantee",
                                 "1":"Unavailable in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia gama de mercados",
                                 "1":"Aplicaciones móviles",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Soporte de criptomonedas",
                                 "4":"Altos límites de pago"},
                             "1":
                                {"0":"La licencia de Curazao no garantiza completamente",
                                 "1":"No disponible en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de marchés",
                                 "1":"Applications mobiles",
                                 "2":"Interface conviviale",
                                 "3":"Support des cryptomonnaies",
                                 "4":"Limites de paiement élevées"},
                             "1":
                                {"0":"La licence de Curaçao ne garantit pas totalement",
                                 "1":"Indisponible dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla variedade de mercados",
                                 "1":"Aplicativos móveis",
                                 "2":"Interface amigável",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Altos limites de pagamento"},
                             "1":
                                {"0":"Licença de Curaçao não oferece garantia completa",
                                 "1":"Indisponível em algumas regiões"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Paripesa"}',
                'value_fr' => '{"0":"FAQ de Paripesa"}',
                'value_pt' => '{"0":"Perguntas frequentes do Paripesa"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed at Paripesa?"}',
             'value_es' => '{"0":"¿Cuán rápido se procesan los retiros en Paripesa?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités chez Paripesa ?"}',
             'value_pt' => '{"0":"Quão rápidas são as retiradas na Paripesa?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The answer depends on the method. E-wallets and cryptocurrencies are usually processed faster, within an hour, while cards and bank transfers can take several business days."}',
             'value_es' => '{"0":"La respuesta depende del método. Los monederos electrónicos y las criptomonedas generalmente se procesan más rápido, en hasta una hora, mientras que las tarjetas y transferencias bancarias pueden tardar varios días hábiles."}',
             'value_fr' => '{"0":"La réponse dépend du mode de paiement. Les portefeuilles électroniques et les cryptomonnaies sont généralement traités plus rapidement, en moins d’une heure, tandis que les cartes et les virements bancaires peuvent prendre plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"A resposta depende do método. Carteiras eletrônicas e criptomoedas geralmente são processadas mais rapidamente, em até uma hora, enquanto cartões e transferências bancárias podem levar vários dias úteis."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Does Paripesa have a mobile app?"}',
             'value_es' => '{"0":"¿Paripesa tiene una aplicación móvil?"}',
             'value_fr' => '{"0":"Paripesa dispose-t-il d’une application mobile ?"}',
             'value_pt' => '{"0":"A Paripesa tem um aplicativo móvel?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 41
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The operator offers a mobile version of the site and apps for Android and iOS."}',
             'value_es' => '{"0":"El operador ofrece una versión móvil del sitio y aplicaciones para Android e iOS."}',
             'value_fr' => '{"0":"L’opérateur propose une version mobile du site ainsi que des applications pour Android et iOS."}',
             'value_pt' => '{"0":"O operador oferece uma versão móvel do site e aplicativos para Android e iOS."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 42
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Does Paripesa have a license for legal operation?"}',
             'value_es' => '{"0":"¿Paripesa tiene licencia para operar legalmente?"}',
             'value_fr' => '{"0":"Paripesa dispose-t-il d’une licence pour fonctionner légalement ?"}',
             'value_pt' => '{"0":"A Paripesa possui licença para operação legal?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 43
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Paripesa operates under an international Curaçao license and holds local licenses in Nigeria (NLRC, Lagos, Oyo), ensuring legal operation in these regions."}',
             'value_es' => '{"0":"Sí, Paripesa opera bajo una licencia internacional de Curazao y posee licencias locales en Nigeria (NLRC, Lagos, Oyo), lo que garantiza su funcionamiento legal en estas regiones."}',
             'value_fr' => '{"0":"Oui, Paripesa opère sous une licence internationale de Curaçao et détient des licences locales au Nigeria (NLRC, Lagos, Oyo), garantissant une exploitation légale dans ces régions."}',
             'value_pt' => '{"0":"Sim, a Paripesa opera sob uma licença internacional de Curaçao e possui licenças locais na Nigéria (NLRC, Lagos, Oyo), garantindo operação legal nessas regiões."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 44
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to make payments?"}',
             'value_es' => '{"0":"¿Es seguro realizar pagos?"}',
             'value_fr' => '{"0":"Est-il sûr d’effectuer des paiements ?"}',
             'value_pt' => '{"0":"É seguro fazer pagamentos?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 45
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all transactions are encrypted via SSL, and two-factor authentication is available for additional account protection."}',
             'value_es' => '{"0":"Sí, todas las transacciones están encriptadas mediante SSL, y la autenticación de dos factores está disponible para mayor protección de la cuenta."}',
             'value_fr' => '{"0":"Oui, toutes les transactions sont chiffrées via SSL, et l’authentification à deux facteurs est disponible pour une protection supplémentaire du compte."}',
             'value_pt' => '{"0":"Sim, todas as transações são criptografadas via SSL, e a autenticação de dois fatores está disponível para proteção adicional da conta."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 46
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What are the betting limits?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de apuestas?"}',
             'value_fr' => '{"0":"Quelles sont les limites de mise ?"}',
             'value_pt' => '{"0":"Quais são os limites de apostas?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 47
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts from $0.20, and the maximum win on a single bet can reach €600,000. In some countries, such as Nigeria, there is no upper payout limit."}',
             'value_es' => '{"0":"La apuesta mínima comienza desde $0,20, y la ganancia máxima en una sola apuesta puede alcanzar €600,000. En algunos países, como Nigeria, no hay límite máximo de pago."}',
             'value_fr' => '{"0":"La mise minimale commence à partir de 0,20 $, et le gain maximum sur un seul pari peut atteindre 600 000 €. Dans certains pays, comme le Nigeria, il n’y a pas de limite maximale de paiement."}',
             'value_pt' => '{"0":"A aposta mínima começa em $0,20, e o ganho máximo em uma única aposta pode chegar a €600.000. Em alguns países, como a Nigéria, não há limite máximo de pagamento."}',
             'order' => 47
            ]
        );
    }
}
