<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is an international bookmaker and online casino where you can place sports and live bets, play casino games and live casino. The platform operates in the international market with 24/7 player support, including a hotline and an online consultant in the user account."}',
             'value_es' => '{"0":"BetWinner es una casa de apuestas internacional y casino en línea donde puedes realizar apuestas deportivas y en vivo, además de jugar en el casino y en el casino en vivo. La plataforma opera en el mercado internacional con atención al cliente las 24 horas, que incluye una línea telefónica directa y un consultor en línea en la cuenta del usuario."}',
             'value_fr' => '{"0":"BetWinner est un bookmaker international et un casino en ligne où vous pouvez placer des paris sportifs et en direct, jouer au casino et au casino en direct. La plateforme opère sur le marché international avec une assistance aux joueurs disponible 24h/24, comprenant une ligne téléphonique directe et un conseiller en ligne dans l’espace utilisateur."}',
             'value_pt' => '{"0":"BetWinner é uma casa de apostas internacional e um cassino online onde você pode fazer apostas esportivas e ao vivo, além de jogar em cassino e cassino ao vivo. A plataforma atua no mercado internacional com suporte ao jogador 24 horas por dia, incluindo uma linha telefônica direta e um consultor online na conta do usuário."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The interface is available in multiple languages, and the site has dedicated information sections where you can review the rules and KYC/AML policies. Importantly, the official pages publish the rules and responsible gaming policy, which at the very least reflects transparency for the player."}',
             'value_es' => '{"0":"La interfaz está disponible en varios idiomas y el sitio cuenta con secciones de información dedicadas en las que se pueden consultar las reglas y las políticas de KYC/AML. Es importante destacar que en las páginas oficiales se publican las reglas y la política de juego responsable, lo que al menos demuestra transparencia hacia el jugador."}',
             'value_fr' => '{"0":"L’interface est disponible en plusieurs langues et le site comporte des sections d’information spécifiques où il est possible de consulter les règles et les politiques KYC/AML. Il est important de souligner que les pages officielles publient les règles et la politique de jeu responsable, ce qui reflète au minimum une transparence envers le joueur."}',
             'value_pt' => '{"0":"A interface está disponível em vários idiomas e o site possui seções informativas específicas onde é possível consultar as regras e as políticas de KYC/AML. É importante ressaltar que nas páginas oficiais são publicadas as regras e a política de jogo responsável, o que demonstra, no mínimo, transparência para o jogador."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner positions itself as a platform with broad coverage of tournaments and bet types, which is confirmed by the structure of its catalog and the availability of additional tools such as BetConstructor and exchange mechanisms for specific markets."}',
             'value_es' => '{"0":"BetWinner se posiciona como una plataforma con una amplia cobertura de torneos y tipos de apuestas, lo que se confirma con la estructura de su catálogo y la disponibilidad de herramientas adicionales como BetConstructor o los mecanismos de intercambio en determinados mercados."}',
             'value_fr' => '{"0":"BetWinner se positionne comme une plateforme offrant une large couverture de tournois et de types de paris, ce qui est confirmé par la structure de son catalogue et la disponibilité d’outils supplémentaires tels que BetConstructor ou des mécanismes d’échange sur certains marchés."}',
             'value_pt' => '{"0":"A BetWinner se posiciona como uma plataforma com ampla cobertura de torneios e tipos de apostas, algo confirmado pela estrutura de seu catálogo e pela disponibilidade de ferramentas adicionais, como o BetConstructor ou mecanismos de câmbio em mercados específicos."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the pre-match section, BetWinner covers dozens of sports, with a particular focus on football, tennis, basketball, hockey, cricket, table tennis, esports, and other niche disciplines."}',
             'value_es' => '{"0":"En la sección de pre-partido, BetWinner cubre decenas de deportes, con un enfoque particular en el fútbol, tenis, baloncesto, hockey, críquet, tenis de mesa, deportes electrónicos y otras disciplinas de nicho."}',
             'value_fr' => '{"0":"Dans la section pré-match, BetWinner couvre des dizaines de sports, avec une attention particulière portée au football, au tennis, au basketball, au hockey, au cricket, au tennis de table, à l’esport et à d’autres disciplines de niche."}',
             'value_pt' => '{"0":"Na seção pré-jogo, a BetWinner cobre dezenas de esportes, com foco especial no futebol, tênis, basquete, hóquei, críquete, tênis de mesa, e-sports e outras disciplinas de nicho."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"With convenient navigation featuring filters and a search option, users can quickly find the markets they need. The platform stands out for its wide coverage and user-friendly event structure, making the preparation of accumulator bets very fast. If you are interested in tools such as bet constructors and extended markets, they are available here, although the depth depends on the specific league."}',
             'value_es' => '{"0":"Gracias a una navegación cómoda con filtros y función de búsqueda, es posible encontrar rápidamente los mercados deseados. La plataforma se distingue por la amplitud de su cobertura y por la estructura clara de presentación de los eventos, lo que hace que preparar apuestas combinadas sea muy rápido. Si te interesan herramientas como los constructores de apuestas y los mercados ampliados, también están disponibles, aunque la profundidad depende de cada liga."}',
             'value_fr' => '{"0":"Grâce à une navigation pratique avec filtres et fonction de recherche, il est possible de trouver rapidement les marchés souhaités. La plateforme se distingue par la richesse de sa couverture et par une présentation claire des événements, ce qui rend la préparation des paris combinés très rapide. Si vous êtes intéressé par des outils tels que les constructeurs de paris et les marchés élargis, ils sont proposés ici, même si la profondeur dépend de la ligue concernée."}',
             'value_pt' => '{"0":"Com uma navegação prática que inclui filtros e função de busca, é possível encontrar rapidamente os mercados desejados. A plataforma se destaca pela ampla cobertura e pela estrutura clara de apresentação dos eventos, o que torna a preparação de apostas múltiplas muito rápida. Se você se interessa por ferramentas como construtores de apostas e mercados expandidos, eles também estão disponíveis aqui, embora a profundidade dependa de cada liga."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at BetWinner is large and diverse. There are thousands of slots, table games, live tables with real dealers, fast games, toto, and even curated collections. More than 3,000 slots of different types are available, including video slots, multipliers, megaspins, as well as exclusive titles like Aviator."}',
             'value_es' => '{"0":"La sección de casino en BetWinner es amplia y variada. Hay miles de tragamonedas, juegos de mesa, mesas en vivo con crupieres reales, juegos rápidos, toto e incluso colecciones exclusivas. Se ofrecen más de 3.000 tragamonedas de distintos tipos, incluyendo videotragamonedas, multiplicadores, megagiros, así como títulos exclusivos como Aviator."}',
             'value_fr' => '{"0":"La section casino de BetWinner est vaste et variée. On y trouve des milliers de machines à sous, des jeux de table, des tables en direct avec de vrais croupiers, des jeux rapides, du toto et même des sélections spéciales. Plus de 3 000 machines à sous de différents types sont proposées, notamment des machines vidéo, des multiplicateurs, des megaspins ainsi que des titres exclusifs comme Aviator."}',
             'value_pt' => '{"0":"A seção de cassino da BetWinner é ampla e diversificada. Há milhares de caça-níqueis, jogos de mesa, mesas ao vivo com dealers reais, jogos rápidos, toto e até coleções exclusivas. São oferecidos mais de 3.000 caça-níqueis de diferentes tipos, incluindo slots de vídeo, multiplicadores, megaspins, além de títulos exclusivos como Aviator."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Providers and games may vary depending on the region, but the overall content and the availability of live options remain at a high level. Players can also enjoy the casino both through mobile apps and directly in the smartphone browser."}',
             'value_es' => '{"0":"Los proveedores y juegos pueden variar según la región, pero el contenido general y la presencia de opciones en vivo se mantienen en un nivel alto. Los jugadores también pueden disfrutar del casino tanto en las aplicaciones móviles como en el navegador del teléfono."}',
             'value_fr' => '{"0":"Les fournisseurs et les jeux peuvent varier selon la région, mais l’offre globale et la présence de jeux en direct restent à un niveau élevé. Les joueurs peuvent également profiter du casino aussi bien via les applications mobiles que dans le navigateur de leur smartphone."}',
             'value_pt' => '{"0":"Os provedores e jogos podem variar conforme a região, mas o conteúdo geral e a disponibilidade de opções ao vivo permanecem em alto nível. Os jogadores também podem aproveitar o cassino tanto pelos aplicativos móveis quanto pelo navegador do smartphone."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At BetWinner, the level of odds deserves special attention, especially when it comes to top football leagues or major tennis and basketball tournaments. For example, in a Manchester City – Real Madrid clash, the odds might look like this: 2.05 on City, 3.50 on a draw, and 3.40 on Real. In less popular tournaments and lower divisions, odds can be around 2.40 – 3.10 – 2.90."}',
             'value_es' => '{"0":"En BetWinner, el nivel de cuotas merece una atención especial, sobre todo en las principales ligas de fútbol o en los grandes torneos de tenis y baloncesto. Por ejemplo, en un partido entre Manchester City y Real Madrid, las cuotas pueden ser: 2.05 para el City, 3.50 para el empate y 3.40 para el Real. En torneos menos populares y en divisiones inferiores, las cuotas pueden situarse en torno a 2.40 – 3.10 – 2.90."}',
             'value_fr' => '{"0":"Chez BetWinner, le niveau des cotes mérite une attention particulière, notamment lorsqu’il s’agit des grandes ligues de football ou des principaux tournois de tennis et de basket. Par exemple, lors d’un match Manchester City – Real Madrid, les cotes peuvent être de 2.05 pour City, 3.50 pour le nul et 3.40 pour le Real. Dans les tournois moins populaires et les divisions inférieures, les cotes peuvent tourner autour de 2.40 – 3.10 – 2.90."}',
             'value_pt' => '{"0":"Na BetWinner, o nível das odds merece destaque, especialmente quando se trata das principais ligas de futebol ou dos grandes torneios de tênis e basquete. Por exemplo, em um confronto entre Manchester City e Real Madrid, as odds podem ser: 2.05 para o City, 3.50 para o empate e 3.40 para o Real. Em torneios menos populares e divisões inferiores, as odds podem ficar em torno de 2.40 – 3.10 – 2.90."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, for instance in NBA games, the odds on main markets are slightly higher than those offered by other popular bookmakers, while in Asian league matches they may be somewhat lower. In tennis, particularly Grand Slams, the odds are around the market average, but on Challengers or ITF events the prices tend to drop."}',
             'value_es' => '{"0":"En baloncesto, por ejemplo en la NBA, las cuotas en los mercados principales son ligeramente más altas que en otras casas de apuestas populares, mientras que en partidos de ligas asiáticas pueden ser algo más bajas. En tenis, en especial en los Grand Slams, las cuotas son de nivel medio en el mercado, pero en torneos Challenger o ITF tienden a bajar."}',
             'value_fr' => '{"0":"En basket-ball, par exemple en NBA, les cotes sur les marchés principaux sont légèrement plus élevées que chez d’autres bookmakers populaires, tandis que dans les championnats asiatiques elles peuvent être un peu plus basses. En tennis, notamment sur les Grands Chelems, les cotes sont proches de la moyenne du marché, mais sur les tournois Challengers ou ITF elles ont tendance à être plus faibles."}',
             'value_pt' => '{"0":"No basquete, por exemplo na NBA, as odds nos mercados principais são um pouco mais altas do que em outras casas de apostas populares, enquanto em partidas de ligas asiáticas podem ser um pouco mais baixas. No tênis, especialmente em Grand Slams, as cotações ficam na média de mercado, mas em Challengers ou torneios ITF tendem a cair."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At BetWinner, the limit policy is quite flexible and depends both on the specific sport and on the player’s profile. For an average bettor placing sports wagers, the restrictions are fairly comfortable and do not cause any issues. For example, the minimum bet is only 20 cents or the equivalent in another currency, which allows testing strategies without significant risks."}',
             'value_es' => '{"0":"En BetWinner, la política de límites es bastante flexible y depende tanto del deporte específico como del perfil del jugador. Para un apostador promedio que realiza apuestas deportivas, las restricciones son bastante cómodas y no generan inconvenientes. Por ejemplo, la apuesta mínima es de solo 20 céntimos o el equivalente en otra moneda, lo que permite probar estrategias sin grandes riesgos."}',
             'value_fr' => '{"0":"Chez BetWinner, la politique des limites est assez flexible et dépend à la fois du sport concerné et du profil du joueur. Pour un parieur moyen qui mise sur le sport, les restrictions sont assez confortables et ne posent aucun problème. Par exemple, la mise minimale n’est que de 20 centimes ou l’équivalent dans une autre devise, ce qui permet de tester des stratégies sans grands risques."}',
             'value_pt' => '{"0":"Na BetWinner, a política de limites é bastante flexível e depende tanto do esporte específico quanto do perfil do jogador. Para o apostador médio que faz apostas esportivas, as restrições são bastante confortáveis e não causam problemas. Por exemplo, a aposta mínima é de apenas 20 centavos ou o equivalente em outra moeda, o que permite testar estratégias sem grandes riscos."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Maximum bets vary and can reach tens of thousands of dollars on top football events such as Champions League matches or finals of major international tournaments. For instance, on a Champions League playoff match, you can wager from $10,000 to $30,000. At the same time, for less popular events, such as lower divisions or local tournaments with smaller audiences, limits can be reduced to a few hundred dollars."}',
             'value_es' => '{"0":"Las apuestas máximas varían y pueden alcanzar decenas de miles de dólares en eventos de fútbol de primer nivel, como partidos de la Liga de Campeones o finales de grandes torneos internacionales. Por ejemplo, en un partido de playoff de la Champions League se puede apostar entre 10.000 y 30.000 dólares. Al mismo tiempo, en eventos menos populares, como divisiones inferiores o torneos locales con menor audiencia, los límites pueden reducirse a unos pocos cientos de dólares."}',
             'value_fr' => '{"0":"Les mises maximales varient et peuvent atteindre plusieurs dizaines de milliers de dollars sur les grands événements de football, tels que les matchs de Ligue des Champions ou les finales de grands tournois internationaux. Par exemple, sur un match de playoff de Ligue des Champions, on peut miser entre 10 000 et 30 000 dollars. En revanche, sur des événements moins populaires, comme les divisions inférieures ou les tournois locaux avec une audience plus restreinte, les limites peuvent être réduites à quelques centaines de dollars."}',
             'value_pt' => '{"0":"As apostas máximas variam e podem chegar a dezenas de milhares de dólares em grandes eventos de futebol, como partidas da Liga dos Campeões ou finais de grandes torneios internacionais. Por exemplo, em um jogo de playoff da Champions League é possível apostar entre 10.000 e 30.000 dólares. Ao mesmo tempo, em eventos menos populares, como divisões inferiores ou torneios locais com menor público, os limites podem ser reduzidos a algumas centenas de dólares."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that BetWinner applies individual limit adjustments for players. If a user consistently shows high results, the bookmaker may reduce the allowed stake amounts, which is standard practice among bookmakers."}',
             'value_es' => '{"0":"Cabe señalar también que BetWinner aplica ajustes individuales de límites a los jugadores. Si un usuario muestra resultados consistentemente altos, la casa de apuestas puede reducir las cantidades permitidas, lo cual es una práctica estándar entre los operadores."}',
             'value_fr' => '{"0":"Il convient également de noter que BetWinner applique des ajustements individuels de limites pour les joueurs. Si un utilisateur obtient régulièrement de bons résultats, le bookmaker peut réduire les montants autorisés, ce qui est une pratique courante chez les opérateurs."}',
             'value_pt' => '{"0":"Vale destacar também que a BetWinner aplica ajustes individuais de limites para os jogadores. Se um usuário apresenta resultados consistentemente altos, a casa pode reduzir os valores permitidos, o que é uma prática comum entre os operadores."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the casino section, limits are calculated individually for each game and provider. For example, in slots, you can play with minimum bets starting from just a few cents, while in roulette or blackjack, the bet size often starts at $1 and can reach $1,000–$2,000 per round."}',
             'value_es' => '{"0":"En el casino, los límites se calculan individualmente para cada juego y proveedor. Por ejemplo, en las tragamonedas se puede jugar con apuestas mínimas de solo unos céntimos, mientras que en la ruleta o el blackjack la apuesta suele comenzar en 1 dólar y puede alcanzar entre 1.000 y 2.000 dólares por ronda."}',
             'value_fr' => '{"0":"Dans la section casino, les limites sont calculées individuellement pour chaque jeu et chaque fournisseur. Par exemple, sur les machines à sous, on peut jouer avec des mises minimales de quelques centimes, tandis qu’à la roulette ou au blackjack, la mise commence souvent à 1 dollar et peut atteindre 1 000 à 2 000 dollars par manche."}',
             'value_pt' => '{"0":"No cassino, os limites são calculados individualmente para cada jogo e provedor. Por exemplo, nos caça-níqueis é possível jogar com apostas mínimas de apenas alguns centavos, enquanto na roleta ou no blackjack a aposta geralmente começa em 1 dólar e pode chegar a 1.000–2.000 dólares por rodada."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is known for offering a large number of betting options for almost all popular sports. In football, players can find not only the classic markets like match result, totals, or handicaps, but also more specific betting options such as shots on target, number of corners, offsides, yellow cards, and even individual player statistics. For top matches, such as the Champions League or English and Spanish leagues, the number of available markets can exceed 1,500 options."}',
             'value_es' => '{"0":"BetWinner es conocido por ofrecer una gran cantidad de opciones de apuestas para casi todos los deportes populares. En fútbol, los jugadores pueden encontrar no solo los mercados clásicos como el resultado del partido, totales o hándicaps, sino también opciones más específicas como tiros a puerta, cantidad de saques de esquina, fuera de juego, tarjetas amarillas e incluso estadísticas individuales de los jugadores. En los partidos más importantes, como la Liga de Campeones o los campeonatos de Inglaterra y España, la cantidad de mercados disponibles puede superar los 1.500."}',
             'value_fr' => '{"0":"BetWinner est réputé pour offrir un grand nombre d’options de paris pour presque tous les sports populaires. Au football, les joueurs peuvent trouver non seulement les marchés classiques comme le résultat du match, les totaux ou les handicaps, mais également des options plus spécifiques telles que les tirs cadrés, le nombre de corners, les hors-jeu, les cartons jaunes, et même les statistiques individuelles des joueurs. Pour les matchs de haut niveau, comme la Ligue des Champions ou les championnats anglais et espagnols, le nombre de marchés disponibles peut dépasser 1 500 options."}',
             'value_pt' => '{"0":"A BetWinner é conhecida por oferecer uma grande variedade de opções de apostas para praticamente todos os esportes populares. No futebol, os jogadores podem encontrar não apenas os mercados clássicos, como resultado da partida, totais ou handicaps, mas também opções mais específicas, como chutes a gol, número de escanteios, impedimentos, cartões amarelos e até estatísticas individuais de jogadores. Em partidas de destaque, como a Liga dos Campeões ou campeonatos da Inglaterra e Espanha, o número de mercados disponíveis pode superar 1.500 opções."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, the situation is equally interesting. Besides betting on the match or set winner, players can predict the exact score by sets, the number of games, double faults, or even the first serve won."}',
             'value_es' => '{"0":"En tenis, la situación es igualmente interesante. Además de apostar al ganador del partido o del set, se pueden hacer pronósticos sobre el marcador exacto por sets, número de juegos, dobles faltas o incluso el primer saque ganado."}',
             'value_fr' => '{"0":"Au tennis, la situation est tout aussi intéressante. En plus de parier sur le vainqueur du match ou du set, les joueurs peuvent prédire le score exact par set, le nombre de jeux, les doubles fautes ou même le premier point gagné."}',
             'value_pt' => '{"0":"No tênis, a situação é igualmente interessante. Além de apostar no vencedor do jogo ou do set, é possível prever o placar exato por sets, o número de games, erros duplos ou até o primeiro ponto ganho."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In esports disciplines like Dota 2 or CS:GO, the bookmaker offers markets on map winners, number of rounds, first blood, or even the exact number of kills by a specific player."}',
             'value_es' => '{"0":"En disciplinas de deportes electrónicos como Dota 2 o CS:GO, el operador ofrece mercados sobre el ganador del mapa, número de rondas, primera sangre o incluso el número exacto de muertes de un jugador específico."}',
             'value_fr' => '{"0":"Dans les disciplines esports comme Dota 2 ou CS:GO, le bookmaker propose des marchés sur le vainqueur de la carte, le nombre de manches, le premier sang ou même le nombre exact de kills d’un joueur spécifique."}',
             'value_pt' => '{"0":"Em disciplinas de esports como Dota 2 ou CS:GO, a casa de apostas oferece mercados sobre o vencedor do mapa, número de rounds, first blood ou até o número exato de kills de um jogador específico."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the BetWinner live platform, odds updates and the event timeline allow users to react promptly to the flow of the game, and for some matches, video streams are available directly in the interface. However, it is worth noting that the availability of streams depends on the region."}',
             'value_es' => '{"0":"En la plataforma en vivo de BetWinner, la actualización de cuotas y la línea de tiempo de los eventos permiten a los usuarios reaccionar rápidamente a la dinámica del juego, y para algunos partidos, hay transmisiones de video disponibles directamente en la interfaz. Sin embargo, cabe destacar que la disponibilidad de los streams depende de la región."}',
             'value_fr' => '{"0":"Sur la plateforme live de BetWinner, les mises à jour des cotes et la chronologie des événements permettent aux utilisateurs de réagir rapidement au déroulement du jeu, et pour certains matchs, des flux vidéo sont disponibles directement dans l’interface. Il convient toutefois de noter que la disponibilité des diffusions dépend de la région."}',
             'value_pt' => '{"0":"Na plataforma ao vivo da BetWinner, as atualizações de odds e a linha do tempo dos eventos permitem que os usuários reajam rapidamente à dinâmica do jogo, e para algumas partidas, transmissões de vídeo estão disponíveis diretamente na interface. No entanto, vale ressaltar que a disponibilidade das transmissões depende da região."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"There is both full and partial cash-out, which significantly reduces the risk of losing. Overall, the live section is only slightly behind the pre-match section for top events. Additional features like the Bet Constructor and exchange mechanics on markets create more opportunities for successful betting."}',
             'value_es' => '{"0":"Existe la opción de cash-out completo o parcial, lo que reduce significativamente el riesgo de pérdida. En general, la sección en vivo solo queda un poco por detrás de la sección pre-partido en los eventos principales. Funciones adicionales como el Bet Constructor y las mecánicas de intercambio en los mercados crean más oportunidades para apuestas exitosas."}',
             'value_fr' => '{"0":"Il existe un cash-out complet et partiel, ce qui réduit considérablement le risque de perte. Globalement, la section live n’est que légèrement inférieure à la section pré-match pour les événements majeurs. Des fonctionnalités supplémentaires comme le Bet Constructor et les mécaniques d’échange sur les marchés offrent plus de scénarios pour parier avec succès."}',
             'value_pt' => '{"0":"Há cash-out total e parcial, o que reduz significativamente o risco de perda. No geral, a seção ao vivo fica apenas ligeiramente atrás da seção pré-jogo nos principais eventos. Recursos adicionais como o Bet Constructor e as mecânicas de bolsa nos mercados criam mais oportunidades para apostas bem-sucedidas."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"From a formal point of view, the site publishes rules, KYC/AML policies, and responsible gaming policies. The documents outline basic verification procedures, acceptable identification documents, and approaches to anti-money laundering. We recommend completing verification in advance, especially if you plan to withdraw significant amounts, and to keep all payment receipts and copies of documents."}',
             'value_es' => '{"0":"Desde un punto de vista formal, el sitio publica reglas, políticas KYC/AML y de juego responsable. Los documentos describen los procedimientos básicos de verificación, los documentos de identidad aceptables y los enfoques para la prevención del lavado de dinero. Recomendamos realizar la verificación con antelación, especialmente si planea retirar sumas significativas, y conservar todos los recibos de pago y copias de los documentos."}',
             'value_fr' => '{"0":"D’un point de vue formel, le site publie les règles, les politiques KYC/AML et les politiques de jeu responsable. Les documents décrivent les procédures de vérification de base, les documents d’identité acceptables et les approches de lutte contre le blanchiment d’argent. Nous recommandons de procéder à la vérification à l’avance, surtout si vous prévoyez de retirer des sommes importantes, et de conserver tous les reçus de paiement et copies des documents."}',
             'value_pt' => '{"0":"Do ponto de vista formal, o site publica regras, políticas KYC/AML e de jogo responsável. Os documentos descrevem os procedimentos básicos de verificação, os documentos de identificação aceitos e as abordagens de combate à lavagem de dinheiro. Recomendamos realizar a verificação com antecedência, especialmente se planeja retirar valores significativos, e guardar todos os recibos de pagamento e cópias dos documentos."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Note that in different countries, access to the site, domains, bonuses, and even streams may vary due to local regulations."}',
             'value_es' => '{"0":"Tenga en cuenta que en distintos países, el acceso al sitio, a los dominios, a los bonos e incluso a las transmisiones puede variar debido a las regulaciones locales."}',
             'value_fr' => '{"0":"Notez que dans différents pays, l’accès au site, aux domaines, aux bonus et même aux flux peut varier en raison des réglementations locales."}',
             'value_pt' => '{"0":"Observe que, em diferentes países, o acesso ao site, domínios, bônus e até transmissões pode variar devido às regulamentações locais."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner supports a very wide range of payment solutions. You can make transactions using bank cards, e-wallets, internet banking, and cryptocurrencies. The minimum deposit starts from $1, deposits are usually instant, and there are no platform fees."}',
             'value_es' => '{"0":"BetWinner admite una amplia variedad de soluciones de pago. Puede realizar transacciones mediante tarjetas bancarias, monederos electrónicos, banca por internet y criptomonedas. El depósito mínimo comienza desde $1, los depósitos suelen ser instantáneos y no hay comisiones por parte de la plataforma."}',
             'value_fr' => '{"0":"BetWinner propose une très large gamme de solutions de paiement. Vous pouvez effectuer des transactions via cartes bancaires, portefeuilles électroniques, banque en ligne et crypto-monnaies. Le dépôt minimum commence à partir de 1 $, les dépôts sont généralement instantanés et il n’y a pas de frais sur la plateforme."}',
             'value_pt' => '{"0":"BetWinner oferece uma ampla variedade de soluções de pagamento. Você pode realizar transações usando cartões bancários, carteiras eletrônicas, internet banking e criptomoedas. O depósito mínimo é a partir de $1, os depósitos geralmente são instantâneos e não há taxas pela plataforma."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, identity verification is required. The speed of withdrawals often depends on the chosen method. For cryptocurrency, for example, it takes about an hour after the request is confirmed."}',
             'value_es' => '{"0":"Para retirar fondos, se requiere verificación de identidad. La velocidad de los retiros a menudo depende del método elegido. Para criptomonedas, por ejemplo, tarda aproximadamente una hora después de que se confirma la solicitud."}',
             'value_fr' => '{"0":"Pour retirer des fonds, une vérification d’identité est requise. La rapidité des retraits dépend souvent de la méthode choisie. Pour les crypto-monnaies, par exemple, cela prend environ une heure après la confirmation de la demande."}',
             'value_pt' => '{"0":"Para sacar fundos, é necessária a verificação de identidade. A velocidade dos saques geralmente depende do método escolhido. Para criptomoedas, por exemplo, leva cerca de uma hora após a confirmação do pedido."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the account, when selecting a method, the min/max limits and expected processing times are displayed. This is convenient because you immediately understand whether a particular payment method suits your amount. To avoid additional checks, we recommend depositing and withdrawing using the same method."}',
             'value_es' => '{"0":"En la cuenta, al seleccionar un método, se muestran los límites mínimos/máximos y los tiempos de procesamiento esperados. Esto es conveniente porque se entiende de inmediato si un método de pago concreto es adecuado para su cantidad. Para evitar verificaciones adicionales, recomendamos depositar y retirar usando el mismo método."}',
             'value_fr' => '{"0":"Dans le compte, lors du choix d’une méthode, les limites min/max et les délais de traitement estimés sont affichés. C’est pratique, car on sait immédiatement si un moyen de paiement convient à votre montant. Pour éviter des vérifications supplémentaires, nous recommandons de déposer et de retirer avec le même moyen."}',
             'value_pt' => '{"0":"Na conta, ao selecionar um método, são exibidos os limites mínimo/máximo e os prazos esperados. Isso é conveniente, pois você entende imediatamente se um método de pagamento específico é adequado para o seu valor. Para evitar verificações adicionais, recomendamos depositar e sacar usando o mesmo método."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Customer support operates 24/7. You can contact them via the online chat on the website, email, and the phone number below:"}',
             'value_es' => '{"0":"El servicio de atención al cliente funciona 24/7. Puede contactarlos a través del chat en línea en el sitio web, correo electrónico y el número de teléfono a continuación:"}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7. Vous pouvez les contacter via le chat en ligne sur le site, par e-mail et par téléphone ci-dessous :"}',
             'value_pt' => '{"0":"O suporte ao cliente funciona 24/7. Você pode entrar em contato através do chat online no site, e-mail e telefone abaixo:"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of markets and detailed betting options",
                                 "1":"Availability of live streams",
                                 "2":"Cash-out feature",
                                 "3":"Large selection of payment methods",
                                 "4":"24/7 support"},
                             "1":
                                {"0":"Availability of services/streams/bonuses depends on the country",
                                 "1":"Withdrawal of funds may be delayed without completed KYC"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia línea y desgloses detallados de apuestas",
                                 "1":"Disponibilidad de transmisiones en vivo",
                                 "2":"Función de cash-out",
                                 "3":"Gran selección de métodos de pago",
                                 "4":"Soporte 24/7"},
                             "1":
                                {"0":"La disponibilidad de servicios/transmisiones/bonos depende del país",
                                 "1":"El retiro de fondos puede retrasarse sin KYC completado"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large éventail de marchés et options de paris détaillées",
                                 "1":"Disponibilité des flux en direct",
                                 "2":"Fonction de cash-out",
                                 "3":"Large choix de méthodes de paiement",
                                 "4":"Support 24/7"},
                             "1":
                                {"0":"La disponibilité des services/flux/bonus dépend du pays",
                                 "1":"Le retrait des fonds peut être retardé sans KYC complété"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla linha e mercados detalhados",
                                 "1":"Disponibilidade de transmissões ao vivo",
                                 "2":"Recurso de cash-out",
                                 "3":"Grande variedade de métodos de pagamento",
                                 "4":"Suporte 24/7"},
                             "1":
                                {"0":"A disponibilidade de serviços/transmissões/bônus depende do país",
                                 "1":"A retirada de fundos pode ser atrasada sem KYC concluído"}
                             }',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 41
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Does BetWinner offer live match streaming?"}',
             'value_es' => '{"0":"¿BetWinner ofrece transmisión en vivo de los partidos?"}',
             'value_fr' => '{"0":"BetWinner propose-t-il la diffusion en direct des matchs ?"}',
             'value_pt' => '{"0":"O BetWinner oferece transmissão ao vivo das partidas?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 42
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, video streams are available for some events directly in the website/app interface; availability depends on the region."}',
             'value_es' => '{"0":"Sí, los videos en vivo están disponibles para algunos eventos directamente en la interfaz del sitio/aplicación; la disponibilidad depende de la región."}',
             'value_fr' => '{"0":"Oui, des flux vidéo sont disponibles pour certains événements directement dans l’interface du site/application ; la disponibilité dépend de la région."}',
             'value_pt' => '{"0":"Sim, streams de vídeo estão disponíveis para alguns eventos diretamente na interface do site/aplicativo; a disponibilidade depende da região."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 43
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"What payment methods are supported and what is the minimum deposit?"}',
             'value_es' => '{"0":"¿Qué métodos de pago se aceptan y cuál es el depósito mínimo?"}',
             'value_fr' => '{"0":"Quels types de paiements sont acceptés et quel est le dépôt minimum ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento são aceitos e qual é o depósito mínimo?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 44
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Bank cards, e-wallets, online banking, mobile payments, and cryptocurrencies are available. For most methods, the minimum deposit starts at approximately $1."}',
             'value_es' => '{"0":"Están disponibles tarjetas bancarias, monederos electrónicos, banca en línea, pagos móviles y criptomonedas. Para la mayoría de los métodos, el depósito mínimo es de aproximadamente $1."}',
             'value_fr' => '{"0":"Les cartes bancaires, les portefeuilles électroniques, la banque en ligne, les paiements mobiles et les cryptomonnaies sont disponibles. Pour la plupart des méthodes, le dépôt minimum est d’environ 1 $."}',
             'value_pt' => '{"0":"Estão disponíveis cartões bancários, carteiras eletrônicas, internet banking, pagamentos móveis e criptomoedas. Para a maioria dos métodos, o depósito mínimo começa em cerca de $1."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 45
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How long do withdrawals take to process?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tardan en procesarse los retiros?"}',
             'value_fr' => '{"0":"Combien de temps prend le traitement des retraits ?"}',
             'value_pt' => '{"0":"Quanto tempo demora o processamento dos saques?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 46
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"After successful KYC, the time depends on the method. For major cryptocurrencies, payment processing takes about an hour, while for cards and e-wallets it may take longer."}',
             'value_es' => '{"0":"Después de completar el KYC con éxito, el tiempo depende del método. Para las principales criptomonedas, el procesamiento de pagos tarda aproximadamente una hora, mientras que para tarjetas y monederos electrónicos puede tardar más."}',
             'value_fr' => '{"0":"Après un KYC réussi, le délai dépend du moyen utilisé. Pour les principales cryptomonnaies, le traitement des paiements prend environ une heure, tandis que pour les cartes et portefeuilles électroniques, cela peut être plus long."}',
             'value_pt' => '{"0":"Após a verificação KYC bem-sucedida, o tempo depende do método. Para as principais criptomoedas, o processamento dos pagamentos leva cerca de uma hora, enquanto para cartões e carteiras eletrônicas pode demorar mais."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 47
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Does BetWinner have an official license?"}',
             'value_es' => '{"0":"¿BetWinner tiene una licencia oficial?"}',
             'value_fr' => '{"0":"BetWinner possède-t-il une licence officielle ?"}',
             'value_pt' => '{"0":"A BetWinner possui licença oficial?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 48
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the company operates under a Curacao license, which allows it to accept players from many countries."}',
             'value_es' => '{"0":"Sí, la empresa opera bajo una licencia de Curazao, lo que le permite aceptar jugadores de muchos países."}',
             'value_fr' => '{"0":"Oui, la société fonctionne sous une licence de Curaçao, ce qui lui permet d’accepter des joueurs de nombreux pays."}',
             'value_pt' => '{"0":"Sim, a empresa opera sob uma licença de Curaçao, o que lhe permite aceitar jogadores de muitos países."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 49
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app for Android and iOS?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil para Android e iOS?"}',
             'value_fr' => '{"0":"Existe-t-il une application mobile pour Android et iOS ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel para Android e iOS?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 50
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BetWinner has apps for both platforms. The Android version can be downloaded directly from the official website, while iOS users can install it via the App Store. The functionality of the mobile apps fully matches the desktop version."}',
             'value_es' => '{"0":"Sí, BetWinner tiene aplicaciones para ambas plataformas. La versión de Android se puede descargar directamente desde el sitio web oficial, mientras que los usuarios de iOS pueden instalarla a través de la App Store. La funcionalidad de las aplicaciones móviles coincide completamente con la versión de escritorio."}',
             'value_fr' => '{"0":"Oui, BetWinner dispose d’applications pour les deux plateformes. La version Android peut être téléchargée directement depuis le site officiel, tandis que les utilisateurs iOS peuvent l’installer via l’App Store. Les fonctionnalités des applications mobiles sont entièrement identiques à celles de la version de bureau."}',
             'value_pt' => '{"0":"Sim, a BetWinner possui aplicativos para ambas as plataformas. A versão para Android pode ser baixada diretamente no site oficial, enquanto os usuários de iOS podem instalá-la através da App Store. A funcionalidade dos aplicativos móveis corresponde totalmente à versão para desktop."}',
             'order' => 50
            ]
        );
    }
}
