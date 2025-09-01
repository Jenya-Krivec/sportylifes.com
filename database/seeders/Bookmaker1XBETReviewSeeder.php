<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"General Information"}',
             'value_es' => '{"0":"Información General"}',
             'value_fr' => '{"0":"Informations Générales"}',
             'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is an international online bookmaker and casino that has been operating since 2007 and provides its services in dozens of countries. The website 1xbet.com is owned by Caecus N.V. and operates under a Curaçao license (registration No. 163779)."}',
             'value_es' => '{"0":"1XBET es una casa de apuestas y casino en línea internacional que opera desde 2007 y ofrece sus servicios en decenas de países. El sitio web 1xbet.com pertenece a Caecus N.V. y funciona bajo una licencia de Curazao (n.º de registro 163779)."}',
             'value_fr' => '{"0":"1XBET est un bookmaker et casino en ligne international actif depuis 2007 qui propose ses services dans des dizaines de pays. Le site 1xbet.com appartient à Caecus N.V. et fonctionne sous licence de Curaçao (n° d’enregistrement 163779)."}',
             'value_pt' => '{"0":"A 1XBET é uma casa de apostas e cassino online internacional que atua desde 2007 e oferece seus serviços em dezenas de países. O site 1xbet.com pertence à Caecus N.V. e opera sob licença de Curaçao (nº de registro 163779)."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In some countries, the brand works under local licenses, but there are also countries where the bookmaker is unavailable due to regulatory restrictions. However, thanks to VPN, you have the possibility to bypass them. Therefore, in our review we will go into detail about the main features of 1XBET."}',
             'value_es' => '{"0":"En algunos países la marca opera con licencias locales, pero también hay países donde la casa de apuestas no está disponible debido a restricciones regulatorias. Sin embargo, gracias a una VPN es posible sortear estas limitaciones. Por ello, en nuestra reseña detallaremos las principales características de 1XBET."}',
             'value_fr' => '{"0":"Dans certains pays, la marque opère avec des licences locales, mais il existe également des pays où le bookmaker est indisponible en raison de restrictions réglementaires. Toutefois, grâce à un VPN, il est possible de contourner ces limitations. C’est pourquoi, dans notre revue, nous présenterons en détail les principales particularités de 1XBET."}',
             'value_pt' => '{"0":"Em alguns países a marca atua com licenças locais, mas também há países onde a casa de apostas não está disponível devido a restrições regulatórias. No entanto, com o uso de uma VPN é possível contornar essas limitações. Por isso, em nossa análise iremos detalhar as principais características da 1XBET."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Pre-Match Section"}',
             'value_es' => '{"0":"Sección Prepartido"}',
             'value_fr' => '{"0":"Section Prématch"}',
             'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In the pre-match section, 1XBET focuses on top matches in football, tennis, basketball, hockey, MMA, motorsports, cricket, esports, and many other disciplines. Every day, more than a thousand events are available with a wide range of betting formats, from singles to accumulators."}',
             'value_es' => '{"0":"En la sección prepartido, 1XBET se centra en los partidos más importantes de fútbol, tenis, baloncesto, hockey, MMA, automovilismo, críquet, eSports y muchas otras disciplinas. Cada día hay disponibles más de mil eventos con una amplia variedad de formatos de apuesta, desde simples hasta combinadas."}',
             'value_fr' => '{"0":"Dans la section prématch, 1XBET se concentre sur les principaux matchs de football, tennis, basketball, hockey, MMA, sports mécaniques, cricket, e-sport et bien d’autres disciplines. Chaque jour, plus d’un millier d’événements sont disponibles avec un large choix de formats de paris, des simples aux combinés."}',
             'value_pt' => '{"0":"Na seção pré-jogo, a 1XBET foca nos principais jogos de futebol, tênis, basquete, hóquei, MMA, automobilismo, críquete, eSports e muitas outras disciplinas. Diariamente, mais de mil eventos estão disponíveis com uma ampla variedade de formatos de apostas, desde simples até combinadas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The website interface allows users to quickly find the matches they need through search, add events to their bet slip, and sort markets. The site rules provide detailed definitions of bets and settlements, which is useful for those who enjoy specific markets or in-depth statistics."}',
             'value_es' => '{"0":"La interfaz del sitio permite a los usuarios encontrar rápidamente los partidos que necesitan mediante la búsqueda, añadir eventos a su cupón y ordenar los mercados. Las reglas del sitio proporcionan definiciones detalladas de apuestas y liquidaciones, lo que resulta útil para quienes disfrutan de mercados específicos o estadísticas profundas."}',
             'value_fr' => '{"0":"L’interface du site permet aux utilisateurs de trouver rapidement les matchs dont ils ont besoin grâce à la recherche, d’ajouter des événements au coupon et de trier les marchés. Les règles du site fournissent des définitions détaillées des paris et des règlements, ce qui est utile pour ceux qui apprécient les marchés spécifiques ou les statistiques approfondies."}',
             'value_pt' => '{"0":"A interface do site permite que os usuários encontrem rapidamente as partidas que precisam através da busca, adicionem eventos ao cupom e organizem os mercados. As regras do site fornecem definições detalhadas de apostas e liquidações, o que é útil para quem gosta de mercados específicos ou estatísticas detalhadas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 1XBET is large and diverse. You can play slots, table games, and game shows. The bookmaker collaborates with dozens of developers, including major live providers such as Evolution, Ezugi, and Vivo Gaming. This means live roulette, blackjack, baccarat, and game shows like Crazy Time or Lightning are available."}',
             'value_es' => '{"0":"La sección de casino en 1XBET es grande y diversa. Puedes jugar a tragamonedas, juegos de mesa y shows de casino. La casa de apuestas colabora con decenas de desarrolladores, incluidos importantes proveedores de juegos en vivo como Evolution, Ezugi y Vivo Gaming. Esto significa que hay ruleta en vivo, blackjack, baccarat y shows como Crazy Time o Lightning."}',
             'value_fr' => '{"0":"La section casino de 1XBET est grande et variée. Vous pouvez jouer aux machines à sous, aux jeux de table et aux jeux télévisés. Le bookmaker collabore avec des dizaines de développeurs, y compris de grands fournisseurs de jeux en direct comme Evolution, Ezugi et Vivo Gaming. Cela signifie que la roulette en direct, le blackjack, le baccarat et les jeux télévisés tels que Crazy Time ou Lightning sont disponibles."}',
             'value_pt' => '{"0":"A seção de cassino na 1XBET é grande e diversificada. Você pode jogar slots, jogos de mesa e game shows. A casa de apostas colabora com dezenas de desenvolvedores, incluindo grandes provedores de jogos ao vivo, como Evolution, Ezugi e Vivo Gaming. Isso significa que roleta ao vivo, blackjack, bacará e game shows como Crazy Time ou Lightning estão disponíveis."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that in live games, 1XBET offers its own tables and studio solutions, and the total pool of live tables numbers in the hundreds. If table variety is important to you, the bookmaker will definitely catch your interest."}',
             'value_es' => '{"0":"También vale la pena señalar que en los juegos en vivo, 1XBET ofrece sus propias mesas y soluciones de estudio, y el total de mesas en vivo se cuenta por cientos. Si la variedad de mesas es importante para ti, la casa de apuestas sin duda te interesará."}',
             'value_fr' => '{"0":"Il convient également de noter que dans les jeux en direct, 1XBET propose ses propres tables et solutions de studio, et le nombre total de tables en direct se compte par centaines. Si la variété des tables est importante pour vous, le bookmaker retiendra certainement votre attention."}',
             'value_pt' => '{"0":"Também vale destacar que, nos jogos ao vivo, a 1XBET oferece suas próprias mesas e soluções de estúdio, e o total de mesas ao vivo chega a centenas. Se a variedade de mesas for importante para você, a casa de apostas certamente chamará sua atenção."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET stands out noticeably for its odds, especially on top football leagues and international tournaments. For example, in English Premier League matches, odds on favorites often stay around 1.45–1.50. For underdogs and draws, 1XBET also offers attractive figures. For instance, the draw in the Barcelona vs. Athletic match has an odd of 4.00."}',
             'value_es' => '{"0":"1XBET se destaca notablemente por sus cuotas, especialmente en las principales ligas de fútbol y torneos internacionales. Por ejemplo, en los partidos de la Premier League inglesa, las cuotas para los favoritos suelen estar entre 1,45 y 1,50. Para los equipos menos favoritos y los empates, 1XBET también ofrece cifras atractivas. Por ejemplo, el empate en el partido Barcelona vs. Athletic tiene una cuota de 4,00."}',
             'value_fr' => '{"0":"1XBET se distingue particulièrement par ses cotes, surtout sur les principales ligues de football et les tournois internationaux. Par exemple, lors des matchs de la Premier League anglaise, les cotes sur les favoris se situent souvent autour de 1,45–1,50. Pour les outsiders et les matchs nuls, 1XBET propose également des chiffres attractifs. Par exemple, le match nul dans le match Barcelone vs Athletic a une cote de 4,00."}',
             'value_pt' => '{"0":"A 1XBET se destaca notavelmente por suas odds, especialmente nas principais ligas de futebol e torneios internacionais. Por exemplo, nas partidas da Premier League inglesa, as odds para os favoritos geralmente ficam entre 1,45 e 1,50. Para azarões e empates, a 1XBET também oferece números atraentes. Por exemplo, o empate no jogo Barcelona vs. Athletic tem odd de 4,00."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, for popular events such as «total games» and «set winner», 1XBET keeps odds around 1.87 for evenly matched options. In basketball, the favorite’s odds can reach 1.92."}',
             'value_es' => '{"0":"En tenis, para eventos populares como «total de juegos» y «ganador del set», 1XBET mantiene las cuotas alrededor de 1,87 para opciones equilibradas. En baloncesto, la cuota del favorito puede alcanzar 1,92."}',
             'value_fr' => '{"0":"Au tennis, pour les événements populaires comme le «total de jeux» et le «vainqueur du set», 1XBET maintient les cotes autour de 1,87 pour des options équilibrées. Au basket-ball, la cote du favori peut atteindre 1,92."}',
             'value_pt' => '{"0":"No tênis, para eventos populares como «total de games» e «vencedor do set», a 1XBET mantém as odds em torno de 1,87 para opções equilibradas. No basquete, a odd do favorito pode chegar a 1,92."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Limits at 1XBET are not fixed and depend on several factors: the sport type, tournament popularity, specific market, and even the player’s profile. In top football matches (e.g., Champions League or EPL), you can place several thousand euros, and sometimes the maximum bet exceeds €10,000."}',
             'value_es' => '{"0":"Los límites en 1XBET no son fijos y dependen de varios factores: tipo de deporte, popularidad del torneo, mercado específico e incluso el perfil del jugador. En los partidos de fútbol más importantes (por ejemplo, Liga de Campeones o Premier League), se pueden apostar varios miles de euros, y a veces la apuesta máxima supera los 10.000 €."}',
             'value_fr' => '{"0":"Les limites chez 1XBET ne sont pas fixes et dépendent de plusieurs facteurs : type de sport, popularité du tournoi, marché spécifique et même profil du joueur. Pour les matchs de football de haut niveau (par exemple, Ligue des Champions ou Premier League), il est possible de miser plusieurs milliers d’euros, et parfois le pari maximum dépasse 10 000 €."}',
             'value_pt' => '{"0":"Os limites na 1XBET não são fixos e dependem de vários fatores: tipo de esporte, popularidade do torneio, mercado específico e até mesmo o perfil do jogador. Em partidas de futebol de destaque (por exemplo, Champions League ou Premier League), é possível apostar vários milhares de euros, e às vezes a aposta máxima supera €10.000."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, for ATP or WTA series matches, the limit ranges from €3,000–5,000, but for Challengers or ITF events it is noticeably lower, sometimes just a few hundred euros. In basketball, limits are around €5,000."}',
             'value_es' => '{"0":"En tenis, para partidos de la serie ATP o WTA, el límite se encuentra entre 3.000 y 5.000 €, pero en challengers o eventos ITF es significativamente más bajo, a veces solo unos pocos cientos de euros. En baloncesto, los límites están alrededor de 5.000 €."}',
             'value_fr' => '{"0":"Au tennis, pour les matchs des séries ATP ou WTA, la limite se situe entre 3 000 et 5 000 €, mais pour les challengers ou événements ITF, elle est nettement plus basse, parfois quelques centaines d’euros seulement. Au basket-ball, les limites sont autour de 5 000 €."}',
             'value_pt' => '{"0":"No tênis, para partidas das séries ATP ou WTA, o limite varia entre €3.000–5.000, mas em challengers ou eventos ITF é significativamente menor, às vezes apenas algumas centenas de euros. No basquete, os limites ficam em torno de €5.000."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet generally starts at €0.20 or the equivalent in other currencies, meaning practically anyone can test the platform even with very small amounts."}',
             'value_es' => '{"0":"La apuesta mínima generalmente comienza en 0,20 € o su equivalente en otra moneda, lo que significa que prácticamente cualquier persona puede probar la plataforma incluso con cantidades muy pequeñas."}',
             'value_fr' => '{"0":"La mise minimale commence généralement à 0,20 € ou l’équivalent dans une autre devise, ce qui signifie que presque tout le monde peut tester la plateforme même avec de très petites sommes."}',
             'value_pt' => '{"0":"A aposta mínima geralmente começa em €0,20 ou o equivalente em outra moeda, o que significa que praticamente qualquer pessoa pode testar a plataforma mesmo com valores muito baixos."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"One of the reasons for 1XBET\'s popularity is the wide range of markets. For top events, hundreds, and sometimes even thousands, of markets are available. You can bet on match results, handicaps, totals, the number of corners, cards, offsides, and there is also the option to place combined bets."}',
             'value_es' => '{"0":"Una de las razones de la popularidad de 1XBET es la amplitud de sus mercados. Para los eventos principales, hay disponibles cientos e incluso miles de mercados. Se puede apostar al resultado del partido, hándicaps, totales, número de córners, tarjetas, fueras de juego, y también existe la posibilidad de realizar apuestas combinadas."}',
             'value_fr' => '{"0":"L’une des raisons de la popularité de 1XBET est la largeur de ses marchés. Pour les événements majeurs, des centaines, voire des milliers de marchés sont disponibles. Vous pouvez parier sur le résultat du match, les handicaps, les totaux, le nombre de corners, de cartons, de hors-jeu, et il est également possible de placer des paris combinés."}',
             'value_pt' => '{"0":"Uma das razões da popularidade da 1XBET é a variedade de mercados. Para os principais eventos, estão disponíveis centenas e, às vezes, milhares de mercados. É possível apostar no resultado da partida, handicaps, totais, número de escanteios, cartões, impedimentos, e também há a opção de fazer apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the well-designed interface, including search and favorite filters, you can build your bet slip faster and not get lost among the variations."}',
             'value_es' => '{"0":"Gracias a la interfaz bien diseñada, que incluye búsqueda y filtros de favoritos, podrás construir tu cupón más rápido y no perderte entre las diferentes opciones."}',
             'value_fr' => '{"0":"Grâce à l’interface bien pensée, notamment la recherche et les filtres de favoris, vous pouvez construire votre coupon plus rapidement et ne pas vous perdre parmi les différentes options."}',
             'value_pt' => '{"0":"Graças à interface bem projetada, incluindo busca e filtros de favoritos, você pode montar seu cupom mais rapidamente e não se perder entre as variações."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers sports betting enthusiasts a large number of live events, fast odds updates, cash-out, and streams for many matches. The site features video streams of football, tennis, hockey, cricket, and also allows watching multiple streams simultaneously, which is convenient for multi-bets. Again, the availability of streams and specific championships depends on the region."}',
             'value_es' => '{"0":"1XBET ofrece a los aficionados a las apuestas deportivas una gran cantidad de eventos en vivo, actualización rápida de cuotas, cash-out y transmisiones para muchos partidos. El sitio cuenta con transmisiones de video de fútbol, tenis, hockey, críquet, y también permite ver varias transmisiones simultáneamente, lo que resulta conveniente para apuestas múltiples. Nuevamente, la disponibilidad de transmisiones y de ciertos campeonatos depende de la región."}',
             'value_fr' => '{"0":"1XBET offre aux amateurs de paris sportifs un grand nombre d’événements en direct, une mise à jour rapide des cotes, le cash-out et des flux pour de nombreux matchs. Le site propose des vidéos en direct de football, tennis, hockey, cricket, et permet également de regarder plusieurs flux simultanément, ce qui est pratique pour les paris multiples. Encore une fois, la disponibilité des flux et de certains championnats dépend de la région."}',
             'value_pt' => '{"0":"A 1XBET oferece aos entusiastas de apostas esportivas uma grande quantidade de eventos ao vivo, atualização rápida de odds, cash-out e streams para muitas partidas. O site apresenta transmissões de vídeo de futebol, tênis, hóquei, críquete, e também permite assistir a múltiplas transmissões simultaneamente, o que é conveniente para apostas múltiplas. Novamente, a disponibilidade de streams e de certos campeonatos depende da região."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The site provides plenty of statistics widgets and timelines, and the range of in-play markets is close to that of pre-match for top events. It is also recommended to check the video delay to avoid missing important changes."}',
             'value_es' => '{"0":"El sitio proporciona numerosos widgets de estadísticas y líneas de tiempo, y la amplitud de los mercados en vivo se acerca a la del prepartido en los eventos principales. También se recomienda verificar el retraso del video para no perder cambios importantes."}',
             'value_fr' => '{"0":"Le site fournit de nombreux widgets de statistiques et timelines, et l’étendue des marchés en direct est proche de celle du prématch pour les événements majeurs. Il est également conseillé de vérifier le décalage vidéo pour ne pas manquer de changements importants."}',
             'value_pt' => '{"0":"O site fornece diversos widgets de estatísticas e timelines, e a variedade de mercados ao vivo é quase igual à do pré-jogo para os principais eventos. Também é recomendado verificar o atraso do vídeo para não perder mudanças importantes."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"From a formal point of view, the operator refers to the Curaçao regulator’s license, publishes KYC/AML and responsible gaming policies. The rules pages describe the procedure for additional verification, the list of documents, and the general process for identity confirmation. Therefore, we recommend familiarizing yourself with them."}',
             'value_es' => '{"0":"Desde un punto de vista formal, el operador se refiere a la licencia del regulador de Curazao, publica políticas de KYC/AML y de juego responsable. Las páginas de reglas describen el procedimiento de verificación adicional, la lista de documentos y el proceso general de confirmación de identidad. Por lo tanto, recomendamos familiarizarse con ellas."}',
             'value_fr' => '{"0":"D’un point de vue formel, l’opérateur se réfère à la licence du régulateur de Curaçao, publie les politiques KYC/AML et de jeu responsable. Les pages des règles décrivent la procédure de vérification supplémentaire, la liste des documents et le processus général de confirmation d’identité. Nous vous recommandons donc de vous y familiariser."}',
             'value_pt' => '{"0":"Do ponto de vista formal, o operador se refere à licença do regulador de Curaçao, publica políticas de KYC/AML e de jogo responsável. As páginas de regras descrevem o procedimento de verificação adicional, a lista de documentos e o processo geral de confirmação de identidade. Portanto, recomendamos que você se familiarize com elas."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"At the same time, in different countries the bookmaker is either unavailable or operates with restrictions. For users, this means a simple thing: study local regulations, be prepared for KYC checks, and keep an archive of payment and identification documents in advance."}',
             'value_es' => '{"0":"Al mismo tiempo, en diferentes países la casa de apuestas no está disponible o opera con restricciones. Para los usuarios, esto significa algo sencillo: estudien las normativas locales, estén preparados para verificaciones KYC y mantengan un archivo de documentos de pago e identificación con antelación."}',
             'value_fr' => '{"0":"Dans le même temps, dans différents pays, le bookmaker n’est pas disponible ou fonctionne avec des restrictions. Pour les utilisateurs, cela signifie une chose simple : étudiez la réglementation locale, soyez prêts aux contrôles KYC et conservez à l’avance un archivage des documents de paiement et d’identité."}',
             'value_pt' => '{"0":"Ao mesmo tempo, em diferentes países, a casa de apostas não está disponível ou opera com restrições. Para os usuários, isso significa algo simples: estude as regulamentações locais, esteja preparado para verificações de KYC e mantenha um arquivo de documentos de pagamento e identificação com antecedência."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET website offers a wide range of methods for conducting banking operations. You will have access to bank cards, e-wallets, online banking, and cryptocurrencies."}',
             'value_es' => '{"0":"El sitio web de 1XBET ofrece una amplia variedad de métodos para realizar operaciones bancarias. Tendrás a tu disposición tarjetas bancarias, monederos electrónicos, banca en línea y criptomonedas."}',
             'value_fr' => '{"0":"Le site 1XBET propose un large choix de méthodes pour effectuer des opérations bancaires. Vous aurez à votre disposition des cartes bancaires, des portefeuilles électroniques, la banque en ligne et les cryptomonnaies."}',
             'value_pt' => '{"0":"O site 1XBET oferece uma ampla variedade de métodos para realizar operações bancárias. Você terá à sua disposição cartões bancários, carteiras eletrônicas, internet banking e criptomoedas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Minimum thresholds and limits vary. Usually, the minimum deposit starts from €1. To be able to withdraw funds, you must first complete full account verification. It is also worth noting that it is preferable to use the same withdrawal method as you did for deposits."}',
             'value_es' => '{"0":"Los umbrales y límites mínimos varían. Por lo general, el depósito mínimo comienza desde 1 €. Para poder retirar fondos, primero debe completar la verificación completa de la cuenta. También vale la pena señalar que es preferible utilizar el mismo método de retiro que se usó para los depósitos."}',
             'value_fr' => '{"0":"Les seuils et limites minimaux varient. En général, le dépôt minimum commence à partir de 1 €. Pour pouvoir retirer des fonds, vous devez d’abord compléter la vérification complète du compte. Il convient également de noter qu’il est préférable d’utiliser la même méthode de retrait que celle utilisée pour le dépôt."}',
             'value_pt' => '{"0":"Os limites e valores mínimos variam. Normalmente, o depósito mínimo começa a partir de €1. Para poder sacar fundos, é necessário primeiro concluir a verificação completa da conta. Também vale destacar que é preferível usar o mesmo método de saque que foi utilizado para o depósito."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In practice, most users communicate through the live chat in their account, but it is also possible to call or send an email. If the inquiry is urgent, it is better to immediately provide your account ID, payment transaction number, and attach screenshots. Below we provide the contact details of the support service:"}',
             'value_es' => '{"0":"En la práctica, la mayoría de los usuarios se comunica a través del chat en vivo en su cuenta, pero también es posible llamar o enviar un correo electrónico. Si la consulta es urgente, es mejor proporcionar de inmediato el ID de la cuenta, el número de la transacción de pago y adjuntar capturas de pantalla. A continuación, proporcionamos los datos de contacto del servicio de soporte:"}',
             'value_fr' => '{"0":"En pratique, la plupart des utilisateurs communiquent via le chat en direct dans leur compte, mais il est également possible d’appeler ou d’envoyer un e-mail. Si la demande est urgente, il est préférable de fournir immédiatement l’ID du compte, le numéro de transaction et de joindre des captures d’écran. Ci-dessous, nous fournissons les coordonnées du service d’assistance :"}',
             'value_pt' => '{"0":"Na prática, a maioria dos usuários se comunica através do chat ao vivo na conta, mas também é possível ligar ou enviar um e-mail. Se a solicitação for urgente, é melhor fornecer imediatamente o ID da conta, o número da transação de pagamento e anexar capturas de tela. Abaixo fornecemos os contatos do serviço de suporte:"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of markets and detailed betting options",
                                 "1":"Many events in live mode",
                                 "2":"Availability of streams",
                                 "3":"Cash-out",
                                 "4":"Competitive odds on top events",
                                 "5":"Large selection of payment methods"},
                             "1":
                                {"0":"Unavailable in some countries",
                                 "1":"KYC procedures may delay withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia línea y opciones de apuestas detalladas",
                                 "1":"Muchos eventos en modo en vivo",
                                 "2":"Disponibilidad de transmisiones",
                                 "3":"Cash-out",
                                 "4":"Cuotas competitivas en eventos principales",
                                 "5":"Gran selección de métodos de pago"},
                             "1":
                                {"0":"No disponible en algunos países",
                                 "1":"Los procedimientos de KYC pueden retrasar los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large éventail de marchés et options de paris détaillées",
                                 "1":"De nombreux événements en direct",
                                 "2":"Disponibilité des flux",
                                 "3":"Cash-out",
                                 "4":"Cotes compétitives sur les événements majeurs",
                                 "5":"Large choix de méthodes de paiement"},
                             "1":
                                {"0":"Indisponible dans certains pays",
                                 "1":"Les procédures KYC peuvent retarder les retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla linha de mercados e opções de apostas detalhadas",
                                 "1":"Muitos eventos em modo ao vivo",
                                 "2":"Disponibilidade de streams",
                                 "3":"Cash-out",
                                 "4":"Odds competitivas em eventos principais",
                                 "5":"Grande variedade de métodos de pagamento"},
                             "1":
                                {"0":"Indisponível em alguns países",
                                 "1":"Procedimentos de KYC podem atrasar os saques"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to play on 1XBET?"}',
             'value_es' => '{"0":"¿Es legal jugar en 1XBET?"}',
             'value_fr' => '{"0":"Est-il légal de jouer sur 1XBET ?"}',
             'value_pt' => '{"0":"É legal jogar na 1XBET?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, because 1XBET operates under a Curaçao license and holds local licenses in a number of countries."}',
             'value_es' => '{"0":"Sí, porque 1XBET opera bajo una licencia de Curazao y cuenta con licencias locales en varios países."}',
             'value_fr' => '{"0":"Oui, car 1XBET fonctionne sous licence de Curaçao et possède des licences locales dans plusieurs pays."}',
             'value_pt' => '{"0":"Sim, porque a 1XBET opera sob licença de Curaçao e possui licenças locais em vários países."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What are the minimum deposits and how fast are withdrawals?"}',
             'value_es' => '{"0":"¿Cuáles son los depósitos mínimos y qué tan rápidas son las retiradas?"}',
             'value_fr' => '{"0":"Quels sont les dépôts minimum et à quelle vitesse sont effectués les retraits ?"}',
             'value_pt' => '{"0":"Quais são os depósitos mínimos e quão rápidas são as retiradas?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from €1, but it is also worth noting that it depends on the method and region. Withdrawals are processed after identity verification, so they may be delayed."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde 1 €, pero también vale la pena señalar que depende del método y la región. Los retiros se procesan después de la verificación de identidad, por lo que pueden retrasarse."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 1 €, mais il convient également de noter que cela dépend de la méthode et de la région. Les retraits sont traités après vérification de l’identité, ils peuvent donc subir des délais."}',
             'value_pt' => '{"0":"O depósito mínimo começa a partir de €1, mas também vale ressaltar que depende do método e da região. Os saques são processados após a verificação de identidade, portanto podem sofrer atrasos."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Are there streams and cash-out in live mode?"}',
             'value_es' => '{"0":"¿Hay transmisiones y cash-out en modo en vivo?"}',
             'value_fr' => '{"0":"Y a-t-il des flux et un cash-out en mode live ?"}',
             'value_pt' => '{"0":"Existem streams e cash-out no modo ao vivo?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, streams are available for many events, as well as cash-out. The availability of specific broadcasts depends on the region."}',
             'value_es' => '{"0":"Sí, hay transmisiones disponibles para muchos eventos, así como cash-out. La disponibilidad de transmisiones específicas depende de la región."}',
             'value_fr' => '{"0":"Oui, des flux sont disponibles pour de nombreux événements, ainsi que le cash-out. La disponibilité des diffusions spécifiques dépend de la région."}',
             'value_pt' => '{"0":"Sim, streams estão disponíveis para muitos eventos, assim como o cash-out. A disponibilidade de transmissões específicas depende da região."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Who is the operator of the 1xbet.com website and what is the license number?"}',
             'value_es' => '{"0":"¿Quién es el operador del sitio 1xbet.com y cuál es el número de licencia?"}',
             'value_fr' => '{"0":"Qui est l’opérateur du site 1xbet.com et quel est le numéro de licence ?"}',
             'value_pt' => '{"0":"Quem é o operador do site 1xbet.com e qual é o número da licença?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 45
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The operator is Caecus N.V. (Company No. 163779), Curaçao Gaming Control Board license OGL/2024/1262/0493."}',
             'value_es' => '{"0":"El operador es Caecus N.V. (N.º de empresa 163779), licencia de la Junta de Control de Juegos de Curazao OGL/2024/1262/0493."}',
             'value_fr' => '{"0":"L’opérateur est Caecus N.V. (Numéro d’entreprise 163779), licence du Curaçao Gaming Control Board OGL/2024/1262/0493."}',
             'value_pt' => '{"0":"O operador é Caecus N.V. (Nº da empresa 163779), licença do Curaçao Gaming Control Board OGL/2024/1262/0493."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 46
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Do the odds match top-market levels?"}',
             'value_es' => '{"0":"¿Las cuotas están al nivel del mercado principal?"}',
             'value_fr' => '{"0":"Les cotes sont-elles au niveau du marché principal ?"}',
             'value_pt' => '{"0":"As odds estão no nível do mercado principal?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 47
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For certain events — yes, however, it depends on the league and timing. Check the specific match before placing a bet."}',
             'value_es' => '{"0":"En ciertos eventos — sí, sin embargo, depende de la liga y del momento. Verifica el partido específico antes de apostar."}',
             'value_fr' => '{"0":"Pour certains événements — oui, toutefois, cela dépend de la ligue et du moment. Vérifiez le match spécifique avant de placer un pari."}',
             'value_pt' => '{"0":"Em determinados eventos — sim, no entanto, depende da liga e do momento. Verifique a partida específica antes de apostar."}',
             'order' => 47
            ]
        );
    }
}
