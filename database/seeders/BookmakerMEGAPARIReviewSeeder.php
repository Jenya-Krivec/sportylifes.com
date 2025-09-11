<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari is an international bookmaker for sports betting and online casino games that emerged in the late 2010s and quickly expanded its presence in the markets of Asia, Africa, and Europe. The operator offers both a sports section and a large casino area with hundreds of games from numerous providers. The site supports multiple currencies and cryptocurrencies, making it convenient for an international audience."}',
             'value_es' => '{"0":"MegaPari es una casa de apuestas internacional para apuestas deportivas y juegos de casino en línea que apareció a finales de la década de 2010 y rápidamente expandió su presencia en los mercados de Asia, África y Europa. El operador ofrece tanto una sección deportiva como un amplio apartado de casino con cientos de juegos de numerosos proveedores. El sitio admite múltiples divisas y criptomonedas, lo que lo hace conveniente para una audiencia internacional."}',
             'value_fr' => '{"0":"MegaPari est un bookmaker international proposant des paris sportifs et des jeux de casino en ligne, apparu à la fin des années 2010 et ayant rapidement étendu sa présence sur les marchés d’Asie, d’Afrique et d’Europe. L’opérateur offre à la fois une section sportive et un vaste espace casino avec des centaines de jeux provenant de nombreux fournisseurs. Le site prend en charge plusieurs devises et cryptomonnaies, ce qui le rend pratique pour un public international."}',
             'value_pt' => '{"0":"MegaPari é uma casa de apostas internacional para apostas esportivas e jogos de cassino online, que surgiu no final da década de 2010 e rapidamente expandiu sua presença nos mercados da Ásia, África e Europa. O operador oferece tanto uma seção esportiva quanto uma ampla área de cassino com centenas de jogos de diversos provedores. O site suporta várias moedas e criptomoedas, tornando-o conveniente para um público internacional."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari operates under a Curaçao license, which allows it to provide services in many countries. The site features sports betting with a wide line and live section, as well as a casino with slots and live rooms. Therefore, MegaPari often has a very large selection of betting options, although the exact number depends on the regional version of the site."}',
             'value_es' => '{"0":"MegaPari opera bajo una licencia de Curazao, lo que le permite ofrecer sus servicios en muchos países. El sitio presenta apuestas deportivas con una amplia línea y sección en vivo, así como un casino con tragamonedas y salas en vivo. Por lo tanto, MegaPari suele contar con una gran variedad de opciones de apuestas, aunque la cifra exacta depende de la versión regional del sitio."}',
             'value_fr' => '{"0":"MegaPari opère sous une licence de Curaçao, ce qui lui permet de fournir ses services dans de nombreux pays. Le site propose des paris sportifs avec une large gamme et une section en direct, ainsi qu’un casino avec des machines à sous et des salles en direct. Ainsi, MegaPari dispose souvent d’un très grand choix d’options de paris, mais le chiffre exact dépend de la version régionale du site."}',
             'value_pt' => '{"0":"A MegaPari opera sob licença de Curaçao, o que lhe permite oferecer serviços em muitos países. O site apresenta apostas esportivas com uma ampla linha e seção ao vivo, além de um cassino com slots e salas ao vivo. Assim, a MegaPari geralmente oferece uma grande variedade de opções de apostas, embora o número exato dependa da versão regional do site."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the Pre-Match section of MegaPari, you can place bets on classic disciplines such as football, tennis, basketball, and hockey, but there are also regional sports, less popular disciplines, and esports."}',
             'value_es' => '{"0":"En la sección Pre-Match de MegaPari se pueden realizar apuestas en disciplinas clásicas como fútbol, tenis, baloncesto y hockey, pero también hay deportes regionales, disciplinas menos populares y deportes electrónicos."}',
             'value_fr' => '{"0":"Dans la section Pré-Match de MegaPari, il est possible de parier sur des disciplines classiques comme le football, le tennis, le basketball et le hockey, mais également sur des sports régionaux, des disciplines moins populaires et l’esport."}',
             'value_pt' => '{"0":"Na seção Pré-Jogo da MegaPari é possível apostar em disciplinas clássicas como futebol, tênis, basquete e hóquei, mas também em esportes regionais, modalidades menos populares e eSports."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The interface allows you to quickly filter events, choose leagues, and build your bet slip. For top matches, a wide range of markets is available, including handicaps, totals, and bets on individual player statistics. On major events, MegaPari sometimes offers boosted odds or special promotions."}',
             'value_es' => '{"0":"La interfaz permite filtrar rápidamente los eventos, elegir ligas y armar el cupón de apuestas. En los partidos más importantes, se ofrece una gran variedad de mercados, entre ellos hándicaps, totales y apuestas sobre estadísticas individuales de los jugadores. En grandes eventos, MegaPari a veces propone cuotas mejoradas o promociones especiales."}',
             'value_fr' => '{"0":"L’interface permet de filtrer rapidement les événements, de sélectionner les ligues et de composer son coupon de paris. Sur les matchs importants, un grand nombre de marchés est disponible, notamment les handicaps, les totaux et les paris sur les statistiques individuelles des joueurs. Lors des grands événements, MegaPari propose parfois des cotes améliorées ou des offres spéciales."}',
             'value_pt' => '{"0":"A interface permite filtrar rapidamente os eventos, escolher ligas e montar o bilhete de apostas. Nos principais jogos, está disponível uma grande variedade de mercados, incluindo handicaps, totais e apostas em estatísticas individuais de jogadores. Em grandes eventos, a MegaPari às vezes oferece odds aumentadas ou promoções especiais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that in top championships the number of betting options can be very large, while in lower-league matches it is significantly smaller. Navigation and search work quickly, which is useful if you are building accumulators or looking for special markets."}',
             'value_es' => '{"0":"Cabe destacar que en los campeonatos principales la cantidad de opciones de apuestas puede ser muy amplia, mientras que en los partidos de ligas inferiores es bastante más reducida. La navegación y la búsqueda funcionan de forma rápida, lo que resulta útil si se quieren crear combinadas o buscar mercados especiales."}',
             'value_fr' => '{"0":"Il convient de noter que dans les principaux championnats, le nombre d’options de paris peut être très élevé, tandis que dans les ligues inférieures, il est nettement plus limité. La navigation et la recherche fonctionnent rapidement, ce qui est pratique pour créer des paris combinés ou rechercher des marchés spécifiques."}',
             'value_pt' => '{"0":"Vale destacar que nos principais campeonatos o número de opções de apostas pode ser muito amplo, enquanto em jogos de ligas inferiores é consideravelmente menor. A navegação e a busca funcionam de forma ágil, o que é útil para quem monta acumuladores ou procura mercados específicos."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the casino section of MegaPari, you will find slots, video slots, jackpots, card games, as well as live rooms with real dealers from major providers. The game catalog can include thousands of titles depending on the regional version of the site, while new releases and popular hits are placed in the «New/Top» category for easier navigation. In the live casino, there are standard roulette, blackjack, baccarat, poker tables, and game shows."}',
             'value_es' => '{"0":"En la sección de casino de MegaPari se pueden encontrar tragamonedas, video tragamonedas, jackpots, juegos de cartas, así como salas en vivo con crupieres reales de grandes proveedores. El catálogo de juegos puede incluir miles de títulos dependiendo de la versión regional del sitio, mientras que las novedades y los éxitos populares se encuentran en la categoría «New/Top» para una navegación más rápida. En el casino en vivo están disponibles la ruleta, el blackjack, el bacará, las mesas de póker y los juegos tipo show."}',
             'value_fr' => '{"0":"Dans la section casino de MegaPari, on retrouve des machines à sous, des vidéos slots, des jackpots, des jeux de cartes, ainsi que des salles en direct avec de vrais croupiers proposés par de grands fournisseurs. Le catalogue de jeux peut compter des milliers de titres selon la version régionale du site, tandis que les nouveautés et les succès populaires se trouvent dans la catégorie «New/Top» pour une navigation rapide. Dans le live casino, on trouve la roulette, le blackjack, le baccarat, les tables de poker et les jeux télévisés."}',
             'value_pt' => '{"0":"Na seção de cassino da MegaPari estão disponíveis caça-níqueis, vídeo slots, jackpots, jogos de cartas, bem como salas ao vivo com crupiês reais de grandes provedores. O catálogo de jogos pode incluir milhares de títulos, dependendo da versão regional do site, e as novidades e os sucessos populares ficam na categoria «New/Top» para facilitar a navegação. No cassino ao vivo, estão disponíveis roleta, blackjack, bacará, mesas de pôquer e jogos de show."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets and maximum ranges depend on the specific game and provider. However, it is worth noting that many games feature a demo mode, which allows players to test them without unnecessary expenses."}',
             'value_es' => '{"0":"Las apuestas mínimas y los límites máximos dependen de cada juego y del proveedor. Sin embargo, cabe destacar que muchos juegos cuentan con un modo demo, lo que permite probarlos sin gastos innecesarios."}',
             'value_fr' => '{"0":"Les mises minimales et les limites maximales varient selon le jeu et le fournisseur. Cependant, il convient de noter que de nombreux jeux disposent d’un mode démo, permettant de les tester sans dépenses inutiles."}',
             'value_pt' => '{"0":"As apostas mínimas e os limites máximos variam de acordo com o jogo e o provedor. No entanto, vale destacar que muitos jogos oferecem um modo de demonstração, permitindo testá-los sem custos desnecessários."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"At MegaPari, the odds are often at the same level as those offered by other major bookmakers, especially when it comes to top leagues. For example, in Champions League matches on the 1X2 market, you can see odds around 1.85 – 3.60 – 4.20, which is almost identical to the offers of well-known brands such as 1xBet or Betwinner."}',
             'value_es' => '{"0":"En MegaPari, las cuotas suelen estar al mismo nivel que las de otras casas de apuestas importantes, especialmente en las ligas principales. Por ejemplo, en los partidos de la Liga de Campeones en el mercado 1X2 se pueden ver cuotas alrededor de 1.85 – 3.60 – 4.20, casi idénticas a las ofrecidas por marcas conocidas como 1xBet o Betwinner."}',
             'value_fr' => '{"0":"Chez MegaPari, les cotes se situent souvent au même niveau que celles proposées par d’autres grands bookmakers, en particulier lorsqu’il s’agit des grandes ligues. Par exemple, pour les matchs de Ligue des Champions sur le marché 1X2, on peut voir des cotes autour de 1.85 – 3.60 – 4.20, quasiment identiques à celles de marques connues comme 1xBet ou Betwinner."}',
             'value_pt' => '{"0":"No MegaPari, as odds muitas vezes estão no mesmo nível das oferecidas por outras grandes casas de apostas, especialmente nas principais ligas. Por exemplo, em partidas da Liga dos Campeões no mercado 1X2, é possível encontrar odds em torno de 1.85 – 3.60 – 4.20, quase idênticas às ofertas de marcas conhecidas como 1xBet ou Betwinner."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts from $0.20–$0.30, making it possible to try your luck even with a small bankroll. At the same time, the maximum bet often depends on the sport and the importance of the event. For example, you can place several thousand euros on a Champions League final, while for a less popular match the limits might be capped at $500–$700. It is important to note that MegaPari does not have a single global withdrawal maximum; the limits depend on the chosen payment method. For Visa and Mastercard, the maximum withdrawal per transaction is usually around $2,000, for Skrill or Neteller up to $5,000, and for cryptocurrency transactions (such as Bitcoin or Tether), the limits can reach $50,000 per operation."}',
             'value_es' => '{"0":"La apuesta mínima comienza desde $0.20–$0.30, lo que permite probar suerte incluso con un bankroll reducido. Al mismo tiempo, la apuesta máxima suele depender del deporte y del nivel del evento. Por ejemplo, en una final de la Liga de Campeones se pueden apostar varios miles de euros, mientras que en un partido menos popular los límites pueden estar restringidos a $500–$700. Es importante señalar que MegaPari no tiene un máximo global de retiro; los límites dependen del método de pago elegido. Para Visa y Mastercard, el máximo por transacción suele ser de $2,000, para Skrill o Neteller hasta $5,000, y en operaciones con criptomonedas (como Bitcoin o Tether) los límites pueden llegar a $50,000 por operación."}',
             'value_fr' => '{"0":"La mise minimale commence à partir de $0.20–$0.30, ce qui permet de tenter sa chance même avec une petite bankroll. En revanche, la mise maximale dépend souvent du sport et de l’importance de l’événement. Par exemple, pour une finale de Ligue des Champions, il est possible de miser plusieurs milliers d’euros, tandis que pour un match moins populaire les limites peuvent être fixées à $500–$700. Il est important de noter que MegaPari n’a pas de plafond global unique pour les retraits ; les limites dépendent du mode de paiement choisi. Pour Visa et Mastercard, la limite maximale est généralement d’environ $2,000 par transaction, pour Skrill ou Neteller jusqu’à $5,000, et pour les transactions en cryptomonnaies (comme Bitcoin ou Tether), les plafonds peuvent atteindre $50,000 par opération."}',
             'value_pt' => '{"0":"A aposta mínima começa a partir de $0.20–$0.30, permitindo tentar a sorte mesmo com um bankroll pequeno. Ao mesmo tempo, a aposta máxima geralmente depende do esporte e da importância do evento. Por exemplo, em uma final da Liga dos Campeões é possível apostar vários milhares de euros, enquanto em uma partida menos popular os limites podem ser de apenas $500–$700. É importante destacar que o MegaPari não possui um limite global único para saques; os valores dependem do método de pagamento escolhido. Para Visa e Mastercard, o limite por transação geralmente é de cerca de $2,000, para Skrill ou Neteller até $5,000, e para operações com criptomoedas (como Bitcoin ou Tether), os limites podem chegar a $50,000 por operação."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari offers players a wide variety of betting options in popular sports. For top football events, there can be hundreds of markets, including 1X2, handicaps, totals, Asian markets, individual player statistics, bets on halves and corners, as well as special markets such as political betting. For cricket and basketball matches, which are popular in certain countries, the platform also provides a broad range of markets."}',
             'value_es' => '{"0":"MegaPari ofrece a los jugadores una gran variedad de opciones de apuestas en los deportes más populares. En los principales eventos de fútbol puede haber cientos de mercados, entre ellos 1X2, hándicaps, totales, mercados asiáticos, estadísticas individuales de jugadores, apuestas por mitades y saques de esquina, además de mercados especiales como apuestas políticas. Para partidos de críquet y baloncesto, que son muy populares en ciertos países, la plataforma también ofrece una amplia gama de mercados."}',
             'value_fr' => '{"0":"MegaPari propose aux joueurs de nombreuses options de paris dans les sports les plus populaires. Lors des grands événements de football, il peut y avoir des centaines de marchés, notamment 1X2, handicaps, totaux, marchés asiatiques, statistiques individuelles des joueurs, paris sur les mi-temps et les corners, ainsi que des marchés spéciaux comme les paris politiques. Pour le cricket et le basketball, qui sont très populaires dans certains pays, la plateforme propose également un large éventail de marchés."}',
             'value_pt' => '{"0":"A MegaPari oferece aos jogadores muitas opções de apostas nos esportes mais populares. Nos principais eventos de futebol, pode haver centenas de mercados, incluindo 1X2, handicaps, totais, mercados asiáticos, estatísticas individuais dos jogadores, apostas em tempos e escanteios, além de mercados especiais como apostas políticas. Para partidas de críquete e basquete, que são populares em certos países, a plataforma também disponibiliza uma ampla variedade de mercados."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"However, in less popular leagues or more exotic disciplines, the number of available betting options can be significantly reduced."}',
             'value_es' => '{"0":"Sin embargo, en ligas menos conocidas o disciplinas más exóticas, la cantidad de opciones de apuestas disponibles puede reducirse considerablemente."}',
             'value_fr' => '{"0":"En revanche, dans les ligues moins populaires ou les disciplines plus exotiques, le nombre d’options de paris disponibles peut être fortement réduit."}',
             'value_pt' => '{"0":"No entanto, em ligas menos conhecidas ou disciplinas mais exóticas, a quantidade de opções de apostas pode ser bastante reduzida."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari has a functional live section with extended statistics and the ability to place bets in real time. The odds for events are updated quickly, so there are no issues with delays."}',
             'value_es' => '{"0":"MegaPari cuenta con una sección en vivo funcional con estadísticas ampliadas y la posibilidad de realizar apuestas en tiempo real. Las cuotas de los eventos se actualizan rápidamente, por lo que no hay problemas de retraso."}',
             'value_fr' => '{"0":"MegaPari dispose d’une section en direct fonctionnelle avec des statistiques détaillées et la possibilité de placer des paris en temps réel. Les cotes des événements sont mises à jour rapidement, ce qui évite les retards."}',
             'value_pt' => '{"0":"A MegaPari possui uma seção ao vivo funcional com estatísticas detalhadas e a possibilidade de fazer apostas em tempo real. As odds dos eventos são atualizadas rapidamente, evitando problemas de atraso."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The platform also offers live video streaming of events, with the list of available streams published in the Live section. If live streaming is not available, the service usually compensates with detailed infographics and live statistics, which help players make decisions during the match. Cash-out and multi-view tools are also available, which are convenient for live betting."}',
             'value_es' => '{"0":"La plataforma también ofrece transmisiones de video en vivo de los eventos, cuyo listado se publica en la sección Live. Si la transmisión en directo no está disponible, el servicio suele compensarlo con infografías detalladas y estadísticas en vivo, lo que permite tomar decisiones durante el partido. También están disponibles herramientas como cash-out y multi-view, muy prácticas para las apuestas en directo."}',
             'value_fr' => '{"0":"La plateforme propose également la diffusion en direct des événements, dont la liste est publiée dans la section Live. Si une retransmission en direct n’est pas disponible, le service compense généralement par des infographies détaillées et des statistiques en direct, ce qui permet de prendre des décisions pendant le match. Des outils comme le cash-out et le multi-view sont également disponibles, ce qui est pratique pour les paris en direct."}',
             'value_pt' => '{"0":"A plataforma também oferece transmissões de vídeo ao vivo dos eventos, cuja lista é publicada na seção Live. Caso a transmissão ao vivo não esteja disponível, o serviço geralmente compensa com infográficos detalhados e estatísticas em tempo real, ajudando os jogadores a tomar decisões durante a partida. Também estão disponíveis ferramentas como cash-out e multi-view, que são bastante úteis para as apostas ao vivo."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari operates under a Curaçao license and uses standard security measures such as SSL encryption to protect traffic, identity verification procedures for large withdrawals, as well as policies related to responsible gaming. Thanks to the latter, you can set deposit limits, activate self-exclusion, and more."}',
             'value_es' => '{"0":"MegaPari opera bajo una licencia de Curazao y utiliza medidas de seguridad estándar como el cifrado SSL para proteger el tráfico, procedimientos de verificación de identidad para retiros de grandes sumas, así como políticas relacionadas con el juego responsable. Gracias a esto, puedes establecer límites de depósito, activar la autoexclusión, entre otras opciones."}',
             'value_fr' => '{"0":"MegaPari opère sous une licence de Curaçao et utilise des mesures de sécurité standard telles que le cryptage SSL pour protéger le trafic, des procédures de vérification d’identité pour les retraits importants, ainsi que des politiques liées au jeu responsable. Grâce à ces dernières, vous pouvez fixer des limites de dépôt, activer l’auto-exclusion, etc."}',
             'value_pt' => '{"0":"A MegaPari opera sob licença de Curaçao e utiliza medidas de segurança padrão, como a criptografia SSL para proteger o tráfego, procedimentos de verificação de identidade para grandes retiradas, além de políticas relacionadas ao jogo responsável. Graças a estas últimas, é possível definir limites de depósito, ativar autoexclusão, entre outras opções."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The site also publishes rules and terms, so it is worth reviewing them before playing to avoid misunderstandings. We also recommend completing verification in advance if you plan to place large bets or withdraw significant amounts of funds."}',
             'value_es' => '{"0":"El sitio también publica reglas y términos, por lo que vale la pena revisarlos antes de jugar para evitar malentendidos. También recomendamos completar la verificación con antelación si planeas realizar apuestas grandes o retirar sumas importantes de dinero."}',
             'value_fr' => '{"0":"Le site publie également ses règles et conditions, il est donc conseillé de les consulter avant de jouer afin d’éviter tout malentendu. Nous recommandons également d’effectuer la vérification à l’avance si vous prévoyez de placer des mises importantes ou de retirer des montants élevés."}',
             'value_pt' => '{"0":"O site também publica regras e termos, por isso vale a pena consultá-los antes de jogar para evitar mal-entendidos. Também recomendamos realizar a verificação antecipadamente caso pretenda fazer apostas elevadas ou retirar quantias significativas de dinheiro."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari supports a wide range of payment methods, including Visa and Mastercard bank cards, e-wallets, as well as a large number of cryptocurrencies. Deposits are usually processed almost instantly for bank cards, e-wallets, and cryptocurrencies. Withdrawals depend on the method. E-wallets and cryptocurrencies are typically processed within about an hour, while bank transfers may take longer."}',
             'value_es' => '{"0":"MegaPari admite una amplia variedad de métodos de pago, incluidas tarjetas bancarias Visa y Mastercard, monederos electrónicos, así como una gran cantidad de criptomonedas. Los depósitos suelen procesarse casi al instante en el caso de tarjetas bancarias, e-wallets y criptomonedas. Los retiros dependen del método. Los monederos electrónicos y criptomonedas se procesan generalmente en aproximadamente una hora, mientras que las transferencias bancarias pueden tardar más."}',
             'value_fr' => '{"0":"MegaPari prend en charge un large éventail de méthodes de paiement, notamment les cartes bancaires Visa et Mastercard, les portefeuilles électroniques, ainsi qu’un grand nombre de cryptomonnaies. Les dépôts sont généralement traités presque instantanément pour les cartes bancaires, e-wallets et cryptomonnaies. Les retraits dépendent de la méthode. Les portefeuilles électroniques et cryptomonnaies sont généralement traités en environ une heure, tandis que les virements bancaires peuvent prendre plus de temps."}',
             'value_pt' => '{"0":"A MegaPari oferece uma ampla variedade de métodos de pagamento, incluindo cartões bancários Visa e Mastercard, carteiras eletrônicas, além de um grande número de criptomoedas. Os depósitos geralmente são processados quase de forma instantânea em cartões bancários, e-wallets e criptomoedas. Os saques dependem do método. As carteiras eletrônicas e criptomoedas costumam ser processadas em cerca de uma hora, enquanto transferências bancárias podem levar mais tempo."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Minimum deposit amounts are usually small, but withdrawal minimums and maximums depend on the region and payment method. For example, cryptocurrency limits can reach up to $50,000, while bank card thresholds are lower, around $2,000, and Skrill or Neteller up to $5,000. For large transactions, we recommend checking the limits with customer support in advance."}',
             'value_es' => '{"0":"Los montos mínimos de depósito suelen ser bajos, pero los mínimos y máximos de retiro dependen de la región y del método de pago. Por ejemplo, los límites con criptomonedas pueden alcanzar los $50,000, mientras que en tarjetas bancarias son más bajos, alrededor de $2,000, y en Skrill o Neteller hasta $5,000. Para operaciones grandes, recomendamos consultar previamente los límites con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Les montants minimums de dépôt sont généralement faibles, mais les minimums et maximums de retrait dépendent de la région et de la méthode de paiement. Par exemple, les limites pour les cryptomonnaies peuvent atteindre 50 000 $, tandis que pour les cartes bancaires elles sont plus basses, autour de 2 000 $, et jusqu’à 5 000 $ pour Skrill ou Neteller. Pour les transactions importantes, nous recommandons de vérifier les limites auprès du support client à l’avance."}',
             'value_pt' => '{"0":"Os valores mínimos de depósito costumam ser baixos, mas os limites mínimos e máximos de saque variam conforme a região e o método de pagamento. Por exemplo, os limites para criptomoedas podem chegar a US$ 50.000, enquanto para cartões bancários são mais baixos, cerca de US$ 2.000, e para Skrill ou Neteller até US$ 5.000. Para grandes transações, recomendamos verificar os limites com o suporte ao cliente antecipadamente."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari provides 24/7 support via live chat on the website, by phone, and also through email and a contact form on the site. Usually, the live chat on the website is the fastest and most convenient way to get assistance for urgent issues."}',
             'value_es' => '{"0":"MegaPari ofrece soporte 24/7 a través del chat en vivo en el sitio web, por teléfono, así como mediante correo electrónico y un formulario de contacto en el sitio. Normalmente, el chat en vivo en la página web es la forma más rápida y conveniente de resolver cuestiones urgentes."}',
             'value_fr' => '{"0":"MegaPari fournit un support 24h/24 et 7j/7 via le chat en direct sur le site, par téléphone, ainsi que par e-mail et via un formulaire de contact sur le site. En général, le chat en direct sur le site est le moyen le plus rapide et pratique pour résoudre des problèmes urgents."}',
             'value_pt' => '{"0":"A MegaPari oferece suporte 24/7 através do chat ao vivo no site, por telefone, além de e-mail e formulário de contato no site. Normalmente, o chat ao vivo no site é a forma mais rápida e conveniente de resolver questões urgentes."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide betting line",
                                 "1":"Large catalog of casino games with live rooms",
                                 "2":"Support for cryptocurrencies and multiple payment methods",
                                 "3":"Availability of live streams",
                                 "4":"24/7 support"},
                             "1":
                                {"0":"Regional differences in the number of games",
                                 "1":"Regional differences in the availability of streams"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia línea de apuestas",
                                 "1":"Gran catálogo de juegos de casino con salas en vivo",
                                 "2":"Soporte para criptomonedas y múltiples métodos de pago",
                                 "3":"Disponibilidad de transmisiones en vivo",
                                 "4":"Soporte 24/7"},
                             "1":
                                {"0":"Diferencias regionales en la cantidad de juegos",
                                 "1":"Diferencias regionales en la disponibilidad de transmisiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large éventail de paris",
                                 "1":"Grand catalogue de jeux de casino avec salles en direct",
                                 "2":"Prise en charge des cryptomonnaies et de plusieurs méthodes de paiement",
                                 "3":"Disponibilité de flux en direct",
                                 "4":"Support 24/7"},
                             "1":
                                {"0":"Différences régionales dans le nombre de jeux",
                                 "1":"Différences régionales dans la disponibilité des flux"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Linha de apostas ampla",
                                 "1":"Grande catálogo de jogos de cassino com salas ao vivo",
                                 "2":"Suporte para criptomoedas e múltiplos métodos de pagamento",
                                 "3":"Disponibilidade de transmissões ao vivo",
                                 "4":"Suporte 24/7"},
                             "1":
                                {"0":"Diferenças regionais no número de jogos",
                                 "1":"Diferenças regionais na disponibilidade de transmissões"}
                             }',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MegaPari"}',
                'value_fr' => '{"0":"FAQ de MegaPari"}',
                'value_pt' => '{"0":"Perguntas frequentes do MegaPari"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What license does MegaPari have and is it safe?"}',
             'value_es' => '{"0":"¿Qué licencia tiene MegaPari y es seguro?"}',
             'value_fr' => '{"0":"Quelle licence possède MegaPari et est-ce sûr ?"}',
             'value_pt' => '{"0":"Qual licença o MegaPari possui e é seguro?"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari operates under a Curacao license and applies standard technical security measures (SSL, KYC/AML)."}',
             'value_es' => '{"0":"MegaPari opera bajo licencia de Curazao y aplica medidas técnicas de seguridad estándar (SSL, KYC/AML)."}',
             'value_fr' => '{"0":"MegaPari fonctionne sous licence de Curaçao et applique des mesures techniques de sécurité standard (SSL, KYC/AML)."}',
             'value_pt' => '{"0":"O MegaPari opera sob licença de Curaçao e aplica medidas técnicas de segurança padrão (SSL, KYC/AML)."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Qué tan rápido se procesan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The withdrawal time depends on the payment method. E-wallets and cryptocurrencies are often processed within an hour, while bank transfers can take from one to several business days."}',
             'value_es' => '{"0":"El tiempo de retiro depende del método de pago. Las billeteras electrónicas y las criptomonedas a menudo se procesan en aproximadamente una hora, mientras que las transferencias bancarias pueden tardar de uno a varios días hábiles."}',
             'value_fr' => '{"0":"Le délai de retrait dépend du mode de paiement. Les portefeuilles électroniques et les crypto-monnaies sont souvent traités en une heure, tandis que les virements bancaires peuvent prendre de un à plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"O tempo de saque depende do método de pagamento. E-wallets e criptomoedas geralmente são processados dentro de uma hora, enquanto transferências bancárias podem levar de um a vários dias úteis."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 39
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Are there live streams of events?"}',
             'value_es' => '{"0":"¿Hay transmisiones en vivo de los eventos?"}',
             'value_fr' => '{"0":"Y a-t-il des diffusions en direct des événements ?"}',
             'value_pt' => '{"0":"Existem transmissões ao vivo dos eventos?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 40
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, MegaPari offers live streams for most matches. If the video stream is unavailable, detailed statistics and infographics are provided."}',
             'value_es' => '{"0":"Sí, MegaPari ofrece transmisiones en vivo para la mayoría de los partidos. Si la transmisión de video no está disponible, se proporcionan estadísticas detalladas e infografías."}',
             'value_fr' => '{"0":"Oui, MegaPari propose des diffusions en direct pour la plupart des matchs. Si la diffusion vidéo n’est pas disponible, des statistiques détaillées et des infographies sont fournies."}',
             'value_pt' => '{"0":"Sim, o MegaPari oferece transmissões ao vivo para a maioria das partidas. Se a transmissão de vídeo não estiver disponível, são fornecidas estatísticas detalhadas e infográficos."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 41
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What payment methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de pago están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les moyens de paiement disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento estão disponíveis?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 42
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari supports Visa and Mastercard cards, e-wallets, and cryptocurrencies."}',
             'value_es' => '{"0":"MegaPari admite tarjetas Visa y Mastercard, monederos electrónicos y criptomonedas."}',
             'value_fr' => '{"0":"MegaPari prend en charge les cartes Visa et Mastercard, les portefeuilles électroniques et les cryptomonnaies."}',
             'value_pt' => '{"0":"O MegaPari aceita cartões Visa e Mastercard, carteiras eletrônicas e criptomoedas."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 43
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Where can you get help if problems arise?"}',
             'value_es' => '{"0":"¿Dónde encontrar ayuda si surgen problemas?"}',
             'value_fr' => '{"0":"Où trouver de l’aide en cas de problème ?"}',
             'value_pt' => '{"0":"Onde encontrar ajuda se surgirem problemas?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 44
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The fastest way is to contact the live chat on the website. You can also reach support via email or phone."}',
             'value_es' => '{"0":"La forma más rápida es contactar con el chat en vivo en el sitio web. También puede comunicarse con el soporte por correo electrónico o teléfono."}',
             'value_fr' => '{"0":"Le moyen le plus rapide est de contacter le chat en direct sur le site. Vous pouvez également joindre le support par e-mail ou par téléphone."}',
             'value_pt' => '{"0":"A maneira mais rápida é contatar o chat ao vivo no site. Também é possível entrar em contato com o suporte por e-mail ou telefone."}',
             'order' => 44
            ]
        );
    }
}
