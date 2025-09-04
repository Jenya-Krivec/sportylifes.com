<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is an international platform for sports betting and casino games, operating since 2016 under the Curacao license No. 8048/JAZ2018. The platform is available in dozens of languages, including English, French, Polish, Turkish, Indonesian, and many more. The minimum deposit starts from $1, so new players can explore the games without significant investments or risks."}',
             'value_es' => '{"0":"1win es una plataforma internacional para apuestas deportivas y juegos de casino, que opera desde 2016 bajo la licencia de Curazao No. 8048/JAZ2018. La plataforma está disponible en decenas de idiomas, incluyendo inglés, francés, polaco, turco, indonesio y muchos más. El depósito mínimo es de $1, por lo que los nuevos jugadores pueden explorar los juegos sin grandes inversiones ni riesgos."}',
             'value_fr' => '{"0":"1win est une plateforme internationale de paris sportifs et de jeux de casino, en activité depuis 2016 sous la licence de Curaçao No. 8048/JAZ2018. La plateforme est disponible en plusieurs dizaines de langues, dont l’anglais, le français, le polonais, le turc, l’indonésien et bien d’autres. Le dépôt minimum est de 1 $, ce qui permet aux nouveaux joueurs de découvrir les jeux sans gros investissements ni risques."}',
             'value_pt' => '{"0":"1win é uma plataforma internacional de apostas esportivas e cassino, em operação desde 2016 com a licença de Curaçao No. 8048/JAZ2018. A plataforma está disponível em dezenas de idiomas, incluindo inglês, francês, polonês, turco, indonésio e muitos outros. O depósito mínimo é de 1 $, permitindo que novos jogadores explorem os jogos sem grandes investimentos ou riscos."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"With 1win, you can place sports bets, play casino games and lotteries, and even bet on eSports. The casino hosts a large number of games, totaling over 10,000. Keep reading, and in this review, we will tell you more details about this bookmaker."}',
             'value_es' => '{"0":"Con 1win, puedes realizar apuestas deportivas, jugar a juegos de casino y loterías, e incluso apostar en eSports. El casino cuenta con una gran cantidad de juegos, más de 10,000 en total. Sigue leyendo y en esta reseña te contaremos más detalles sobre este operador."}',
             'value_fr' => '{"0":"Avec 1win, vous pouvez placer des paris sportifs, jouer aux jeux de casino et aux loteries, et même parier sur les eSports. Le casino propose un grand nombre de jeux, plus de 10 000 au total. Continuez à lire et dans cet article, nous vous donnerons plus de détails sur ce bookmaker."}',
             'value_pt' => '{"0":"Com 1win, você pode fazer apostas esportivas, jogar em cassinos e loterias, e até apostar em eSports. O cassino oferece uma grande quantidade de jogos, com mais de 10.000 no total. Continue lendo e nesta análise, vamos contar mais detalhes sobre este bookmaker."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In the pre-match section at 1win, you can find not only football, tennis, basketball, or cricket, but also less popular options like Formula 1 tennis, rugby, kickboxing, Australian football, and floorball."}',
             'value_es' => '{"0":"En la sección de pre-partido de 1win, puedes encontrar no solo fútbol, tenis, baloncesto o cricket, sino también opciones menos populares como tenis de Fórmula 1, rugby, kickboxing, fútbol australiano y floorball."}',
             'value_fr' => '{"0":"Dans la section pré-match de 1win, vous pouvez trouver non seulement le football, le tennis, le basket-ball ou le cricket, mais aussi des options moins populaires comme le tennis Formule 1, le rugby, le kickboxing, le football australien et le floorball."}',
             'value_pt' => '{"0":"Na seção pré-jogo da 1win, você pode encontrar não apenas futebol, tênis, basquete ou críquete, mas também opções menos populares como tênis Fórmula 1, rúgbi, kickboxing, futebol australiano e floorball."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The interface of the pre-match section is quite convenient and logical. On the left, there are sports categories, in the center you can view events, and on the right, create your bet slip. Everything is clear, fast, and user-friendly. There is also a search function and filters by league, time, and popularity."}',
             'value_es' => '{"0":"La interfaz de la sección de pre-partido es bastante cómoda y lógica. A la izquierda se encuentran las categorías deportivas, en el centro puedes ver los eventos y a la derecha crear tu boleto de apuestas. Todo es claro, rápido y fácil de usar. También hay búsqueda y filtros por liga, hora y popularidad."}',
             'value_fr' => '{"0":"L’interface de la section pré-match est assez pratique et logique. À gauche se trouvent les catégories sportives, au centre vous pouvez consulter les événements, et à droite créer votre coupon de pari. Tout est clair, rapide et convivial. Il y a également une fonction de recherche et des filtres par ligue, horaire et popularité."}',
             'value_pt' => '{"0":"A interface da seção pré-jogo é bastante conveniente e lógica. À esquerda estão as categorias esportivas, no centro você pode visualizar os eventos e à direita criar seu bilhete de aposta. Tudo é claro, rápido e fácil de usar. Também há função de busca e filtros por liga, horário e popularidade."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"All of this together makes the 1win pre-match section very useful, especially for those who enjoy analytics and, at the same time, want convenience when creating their bet slip."}',
             'value_es' => '{"0":"Todo esto en conjunto hace que la sección de pre-partido de 1win sea muy útil, especialmente para quienes disfrutan del análisis y, al mismo tiempo, buscan comodidad al crear su boleto de apuestas."}',
             'value_fr' => '{"0":"Tout cela rend la section pré-match de 1win très utile, surtout pour ceux qui aiment l’analyse tout en recherchant la commodité lors de la création de leur coupon de pari."}',
             'value_pt' => '{"0":"Tudo isso junto torna a seção pré-jogo da 1win muito útil, especialmente para quem gosta de análise e, ao mesmo tempo, valoriza conveniência ao criar seu bilhete de aposta."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The casino section is one of the reasons for 1win’s popularity, as it hosts thousands of slots, live casino games, and «crash» games. The section features games from global providers such as Pragmatic Play, Play’n GO, and NetEnt. For example, there are over 10,000 slots, more than 180 roulette games, over 570 live games, and more than 30 1win-branded games, such as Monkey Choice and Cricket Star."}',
             'value_es' => '{"0":"La sección de casino es una de las razones de la popularidad de 1win, ya que cuenta con miles de tragamonedas, juegos de casino en vivo y juegos «crash». La sección presenta juegos de proveedores globales como Pragmatic Play, Play’n GO y NetEnt. Por ejemplo, hay más de 10,000 tragamonedas, más de 180 juegos de ruleta, más de 570 juegos en vivo y más de 30 juegos de marca 1win, como Monkey Choice y Cricket Star."}',
             'value_fr' => '{"0":"La section casino est l’une des raisons de la popularité de 1win, car elle propose des milliers de machines à sous, des jeux de casino en direct et des jeux « crash ». Cette section présente des jeux de fournisseurs mondiaux tels que Pragmatic Play, Play’n GO et NetEnt. Par exemple, il y a plus de 10 000 machines à sous, plus de 180 jeux de roulette, plus de 570 jeux en direct et plus de 30 jeux de marque 1win, tels que Monkey Choice et Cricket Star."}',
             'value_pt' => '{"0":"A seção de cassino é uma das razões da popularidade da 1win, pois conta com milhares de slots, jogos de cassino ao vivo e jogos «crash». A seção apresenta jogos de provedores globais como Pragmatic Play, Play’n GO e NetEnt. Por exemplo, há mais de 10.000 slots, mais de 180 jogos de roleta, mais de 570 jogos ao vivo e mais de 30 jogos com a marca 1win, como Monkey Choice e Cricket Star."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Live casino games with real dealers are streamed in high quality. Additionally, this section offers dozens of variants of roulette, blackjack, baccarat, and poker. It is also worth mentioning the demo mode, which in almost all games allows players to play for free."}',
             'value_es' => '{"0":"Los juegos de casino en vivo con crupieres reales se transmiten en alta calidad. Además, esta sección ofrece decenas de variantes de ruleta, blackjack, baccarat y póker. También vale la pena mencionar el modo demo, que en casi todos los juegos permite jugar gratis."}',
             'value_fr' => '{"0":"Les jeux de casino en direct avec des croupiers réels sont diffusés en haute qualité. De plus, cette section propose des dizaines de variantes de roulette, blackjack, baccarat et poker. Il convient également de mentionner le mode démo, qui permet de jouer gratuitement dans presque tous les jeux."}',
             'value_pt' => '{"0":"Os jogos de cassino ao vivo com dealers reais são transmitidos em alta qualidade. Além disso, esta seção oferece dezenas de variantes de roleta, blackjack, bacará e pôquer. Vale também mencionar o modo demo, que em quase todos os jogos permite jogar gratuitamente."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers odds in many disciplines, similar to most well-known bookmakers. For example, for popular football events in top leagues, the odds for the favorite range around 1.85, while for the underdog, you can see values from 4.50 to 6.00."}',
             'value_es' => '{"0":"1win ofrece cuotas en muchas disciplinas, al igual que la mayoría de los corredores de apuestas conocidos. Por ejemplo, en eventos de fútbol populares de las principales ligas, las cuotas para el favorito rondan 1.85, mientras que para el desfavorecido pueden encontrarse valores de 4.50 a 6.00."}',
             'value_fr' => '{"0":"1win propose des cotes dans de nombreuses disciplines, comme la plupart des bookmakers connus. Par exemple, pour les événements de football populaires dans les meilleures ligues, les cotes pour le favori tournent autour de 1,85, tandis que pour l’outsider, elles peuvent aller de 4,50 à 6,00."}',
             'value_pt' => '{"0":"1win oferece odds em muitas disciplinas, assim como a maioria dos bookmakers conhecidos. Por exemplo, em eventos populares de futebol das principais ligas, as odds para o favorito ficam em torno de 1,85, enquanto para o azarão, você pode encontrar valores de 4,50 a 6,00."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, especially in ATP or WTA matches, the odds for evenly matched opponents are often around 1.90. For basketball, particularly NBA games, odds on totals and handicaps range from 1.85 to 1.95 on both sides, which corresponds to the level of leading bookmakers."}',
             'value_es' => '{"0":"En tenis, especialmente en partidos de ATP o WTA, las cuotas para rivales equilibrados suelen ser de alrededor de 1.90. Para baloncesto, particularmente en partidos de la NBA, las cuotas de totales y hándicaps se sitúan entre 1.85 y 1.95 en ambos lados, lo que corresponde al nivel de los principales corredores de apuestas."}',
             'value_fr' => '{"0":"Au tennis, surtout dans les matchs ATP ou WTA, les cotes pour des adversaires équilibrés sont souvent autour de 1,90. Pour le basket-ball, notamment les matchs NBA, les cotes sur les totaux et les handicaps se situent entre 1,85 et 1,95 des deux côtés, ce qui correspond au niveau des bookmakers leaders."}',
             'value_pt' => '{"0":"No tênis, especialmente em partidas ATP ou WTA, as odds para adversários equilibrados costumam ser de cerca de 1,90. Para basquete, particularmente nos jogos da NBA, as odds para totais e handicaps variam entre 1,85 e 1,95 para ambos os lados, o que corresponde ao nível dos principais bookmakers."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Live betting deserves special attention. Odds change quickly, but even in dynamic disciplines like eSports, 1win offers fairly high values. For example, in CS:GO matches for top teams, you can see odds of 2.20."}',
             'value_es' => '{"0":"Las apuestas en vivo merecen atención especial. Las cuotas cambian rápidamente, pero incluso en disciplinas dinámicas como los eSports, 1win ofrece valores bastante altos. Por ejemplo, en partidos de CS:GO de equipos top, se pueden ver cuotas de 2.20."}',
             'value_fr' => '{"0":"Les paris en direct méritent une attention particulière. Les cotes changent rapidement, mais même dans des disciplines dynamiques comme l’eSports, 1win propose des valeurs assez élevées. Par exemple, dans les matchs de CS:GO pour les meilleures équipes, on peut voir des cotes de 2,20."}',
             'value_pt' => '{"0":"As apostas ao vivo merecem atenção especial. As odds mudam rapidamente, mas mesmo em disciplinas dinâmicas como eSports, a 1win oferece valores bastante altos. Por exemplo, em partidas de CS:GO de equipes top, é possível ver odds de 2,20."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At 1win, the limits system depends on the specific sport, the popularity of the event, and the level of the tournament. For the most in-demand matches, such as in the Champions League or Grand Slam tennis tournaments, it is possible to place fairly high bets. In such events, maximum bets often reach several thousand dollars. For less popular disciplines, like eSports or regional football leagues, limits are significantly lower and may be restricted to a few hundred dollars."}',
             'value_es' => '{"0":"En 1win, el sistema de límites depende del deporte específico, la popularidad del evento y el nivel del torneo. Para los partidos más demandados, como en la Liga de Campeones o los torneos de Grand Slam de tenis, es posible realizar apuestas bastante altas. En estos eventos, las apuestas máximas suelen alcanzar varios miles de dólares. Para disciplinas menos populares, como eSports o ligas de fútbol regionales, los límites son considerablemente más bajos y pueden estar restringidos a unos pocos cientos de dólares."}',
             'value_fr' => '{"0":"Chez 1win, le système de limites dépend du sport spécifique, de la popularité de l’événement et du niveau du tournoi. Pour les matchs les plus demandés, comme en Ligue des Champions ou dans les tournois du Grand Chelem de tennis, il est possible de placer des mises assez élevées. Dans de tels événements, les mises maximales atteignent souvent plusieurs milliers de dollars. Pour les disciplines moins populaires, comme l’eSports ou les ligues de football régionales, les limites sont nettement inférieures et peuvent être restreintes à quelques centaines de dollars."}',
             'value_pt' => '{"0":"Na 1win, o sistema de limites depende do esporte específico, da popularidade do evento e do nível do torneio. Para os jogos mais procurados, como na Liga dos Campeões ou nos torneios do Grand Slam de tênis, é possível fazer apostas bastante altas. Nessas competições, as apostas máximas frequentemente chegam a vários milhares de dólares. Para disciplinas menos populares, como eSports ou ligas de futebol regionais, os limites são significativamente menores, podendo se restringir a algumas centenas de dólares."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet at 1win is only a few cents, which is convenient for new players and those who want to test strategies without significant expenses."}',
             'value_es' => '{"0":"La apuesta mínima en 1win es de solo unos pocos centavos, lo que es conveniente para los nuevos jugadores y para quienes desean probar estrategias sin gastar mucho."}',
             'value_fr' => '{"0":"La mise minimale chez 1win n’est que de quelques centimes, ce qui est pratique pour les nouveaux joueurs et ceux qui souhaitent tester des stratégies sans dépenses importantes."}',
             'value_pt' => '{"0":"A aposta mínima na 1win é de apenas alguns centavos, o que é conveniente para novos jogadores e para aqueles que desejam testar estratégias sem grandes gastos."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that in live betting, maximum limits can change quickly depending on the course of the match and the volume of bets already accepted. Overall, 1win’s limits policy meets the standards of international operators, giving players sufficient freedom while restrictions apply only to niche markets or lesser-known championships."}',
             'value_es' => '{"0":"Cabe destacar que en las apuestas en vivo, los máximos pueden cambiar rápidamente según el desarrollo del partido y el volumen de apuestas ya aceptadas. En general, la política de límites de 1win cumple con los estándares de operadores internacionales, ofreciendo suficiente libertad a los jugadores mientras que las restricciones se aplican solo a mercados de nicho o campeonatos menos conocidos."}',
             'value_fr' => '{"0":"Il convient de noter que dans les paris en direct, les limites maximales peuvent changer rapidement en fonction du déroulement du match et du volume de paris déjà accepté. Dans l’ensemble, la politique de limites de 1win correspond aux standards des opérateurs internationaux, offrant aux joueurs une liberté suffisante, les restrictions ne s’appliquant qu’aux marchés de niche ou aux championnats peu connus."}',
             'value_pt' => '{"0":"Vale destacar que nas apostas ao vivo, os limites máximos podem mudar rapidamente dependendo do andamento da partida e do volume de apostas já aceitas. De forma geral, a política de limites da 1win atende aos padrões de operadores internacionais, oferecendo liberdade suficiente aos jogadores, com restrições aplicadas apenas a mercados de nicho ou campeonatos menos conhecidos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At 1win, the largest number of markets for pre-match events is offered for football, where top matches feature over 1,000 betting options. For other sports, the number of markets can be smaller, for example, from 200 to 500 in basketball."}',
             'value_es' => '{"0":"En 1win, la mayor cantidad de mercados para eventos pre-partido se ofrece en fútbol, donde los partidos más importantes cuentan con más de 1,000 opciones de apuesta. Para otros deportes, el número de mercados puede ser menor, por ejemplo, entre 200 y 500 en baloncesto."}',
             'value_fr' => '{"0":"Chez 1win, le plus grand nombre de marchés pour les événements pré-match est proposé pour le football, où les matchs de haut niveau offrent plus de 1 000 options de pari. Pour les autres sports, le nombre de marchés peut être plus faible, par exemple entre 200 et 500 pour le basket-ball."}',
             'value_pt' => '{"0":"Na 1win, o maior número de mercados para eventos pré-jogo é oferecido no futebol, onde os jogos principais contam com mais de 1.000 opções de aposta. Para outros esportes, o número de mercados pode ser menor, por exemplo, de 200 a 500 no basquete."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In every football match, you can bet on 1X2, totals, handicaps, and the correct score. There is also the possibility to bet on statistics, such as the number of corners, yellow cards, and offsides. And that’s not all. You can also place bets on the first yellow card or «who will score next»."}',
             'value_es' => '{"0":"En cada partido de fútbol, puedes apostar en 1X2, totales, hándicaps y resultado exacto. También es posible apostar en estadísticas, como la cantidad de saques de esquina, tarjetas amarillas y fueras de juego. Y eso no es todo. También puedes apostar en la primera tarjeta amarilla o «quién marcará el próximo gol»."}',
             'value_fr' => '{"0":"Dans chaque match de football, vous pouvez parier sur 1X2, les totaux, les handicaps et le score exact. Il est également possible de parier sur des statistiques, comme le nombre de corners, de cartons jaunes et de hors-jeu. Et ce n’est pas tout. Vous pouvez également parier sur le premier carton jaune ou « qui marquera ensuite »."}',
             'value_pt' => '{"0":"Em cada partida de futebol, você pode apostar em 1X2, totais, handicaps e placar exato. Também é possível apostar em estatísticas, como número de escanteios, cartões amarelos e impedimentos. E isso não é tudo. Você também pode apostar no primeiro cartão amarelo ou em «quem marcará a seguir»."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win provides live broadcasts for most matches, marked in the feed with a «TV» icon. This mainly applies to football, basketball, tennis, and some eSports tournaments. The video is stable, and the delay is minimal, allowing you to react to events almost instantly. For those placing live bets, this is especially important, as a few seconds can affect the value of the odds."}',
             'value_es' => '{"0":"1win ofrece transmisiones en vivo para la mayoría de los partidos, señaladas en el feed con un icono de «TV». Esto se aplica principalmente al fútbol, baloncesto, tenis y algunos torneos de eSports. La imagen es estable y la demora es mínima, lo que permite reaccionar a los eventos casi al instante. Para quienes realizan apuestas en vivo, esto es especialmente importante, ya que unos pocos segundos pueden afectar el valor de las cuotas."}',
             'value_fr' => '{"0":"1win propose des diffusions en direct pour la plupart des matchs, indiquées dans le flux par une icône « TV ». Cela concerne principalement le football, le basket-ball, le tennis et certains tournois d’eSports. L’image est stable et le retard minimal, ce qui permet de réagir aux événements presque instantanément. Pour ceux qui placent des paris en direct, c’est particulièrement important, car quelques secondes peuvent influencer la valeur des cotes."}',
             'value_pt' => '{"0":"A 1win oferece transmissões ao vivo para a maioria das partidas, marcadas no feed com um ícone de «TV». Isso se aplica principalmente a futebol, basquete, tênis e alguns torneios de eSports. A imagem é estável e o atraso é mínimo, permitindo reagir aos eventos quase instantaneamente. Para quem faz apostas ao vivo, isso é especialmente importante, pois alguns segundos podem influenciar o valor das odds."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Another advantage is the availability of detailed statistics and graphic broadcasts for matches without video coverage. Thanks to this, you can follow the game’s dynamics even without a live picture. Combined with fast odds updates, the live section at 1win fully matches the level of well-known international bookmakers."}',
             'value_es' => '{"0":"Otra ventaja es la disponibilidad de estadísticas detalladas y transmisiones gráficas para los partidos sin cobertura de video. Gracias a esto, puedes seguir la dinámica del juego incluso sin la imagen en vivo. Combinado con actualizaciones rápidas de las cuotas, la sección en vivo de 1win está a la altura de los corredores de apuestas internacionales reconocidos."}',
             'value_fr' => '{"0":"Un autre avantage est la disponibilité de statistiques détaillées et de diffusions graphiques pour les matchs sans vidéo. Grâce à cela, vous pouvez suivre la dynamique du jeu même sans image. Combiné avec la mise à jour rapide des cotes, le section live de 1win est totalement au niveau des bookmakers internationaux renommés."}',
             'value_pt' => '{"0":"Outra vantagem é a disponibilidade de estatísticas detalhadas e transmissões gráficas para partidas sem cobertura de vídeo. Graças a isso, você pode acompanhar a dinâmica do jogo mesmo sem a imagem ao vivo. Combinado com a atualização rápida das odds, a seção ao vivo da 1win está totalmente no nível de bookmakers internacionais conhecidos."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"From a formal regulatory perspective, 1win holds a Curacao license, allowing it to operate in many countries. Although the license is not considered the strictest in the world, it provides basic guarantees of operational transparency and player protection. For additional security, all connections on the website and in the mobile app are protected with SSL encryption, and personal data is stored in encrypted form. Nevertheless, we recommend completing KYC before withdrawing large amounts."}',
             'value_es' => '{"0":"Desde el punto de vista regulatorio formal, 1win posee una licencia de Curazao, lo que le permite operar en muchos países. Aunque la licencia no se considera la más estricta del mundo, proporciona garantías básicas de transparencia operativa y protección de los jugadores. Para mayor seguridad, todas las conexiones en el sitio web y en la aplicación móvil están protegidas con cifrado SSL, y los datos personales se almacenan de forma cifrada. No obstante, recomendamos completar KYC antes de retirar grandes sumas."}',
             'value_fr' => '{"0":"D’un point de vue réglementaire formel, 1win possède une licence de Curaçao, ce qui lui permet d’opérer dans de nombreux pays. Bien que cette licence ne soit pas considérée comme la plus stricte au monde, elle garantit une transparence minimale du fonctionnement et la protection des joueurs. Pour plus de sécurité, toutes les connexions sur le site et dans l’application mobile sont protégées par un cryptage SSL, et les données personnelles sont stockées de manière cryptée. Cependant, nous recommandons de compléter le KYC avant de retirer de grosses sommes."}',
             'value_pt' => '{"0":"Do ponto de vista regulatório formal, a 1win possui uma licença de Curaçao, permitindo operar em muitos países. Embora a licença não seja considerada a mais rigorosa do mundo, ela fornece garantias básicas de transparência operacional e proteção dos jogadores. Para segurança adicional, todas as conexões no site e no aplicativo móvel são protegidas com criptografia SSL, e os dados pessoais são armazenados de forma criptografada. No entanto, recomendamos completar o KYC antes de retirar grandes quantias."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Regarding financial operations, 1win uses only verified payment services and collaborates with popular international systems, reducing the risk of fraud. Another advantage is the possibility of additional account protection through two-factor authentication and monitoring logins from new devices. For mobile apps, authorization via PIN code or biometrics is provided, adding both convenience and security."}',
             'value_es' => '{"0":"En cuanto a las operaciones financieras, 1win utiliza únicamente servicios de pago verificados y colabora con sistemas internacionales populares, reduciendo el riesgo de fraude. Otra ventaja es la posibilidad de proteger adicionalmente la cuenta mediante autenticación de dos factores y control de accesos desde nuevos dispositivos. Para las aplicaciones móviles, se ofrece autorización mediante código PIN o biometría, lo que añade comodidad y seguridad."}',
             'value_fr' => '{"0":"En ce qui concerne les opérations financières, 1win utilise uniquement des services de paiement vérifiés et collabore avec des systèmes internationaux populaires, réduisant le risque de fraude. Un autre avantage est la possibilité de protéger davantage le compte grâce à l’authentification à deux facteurs et au contrôle des connexions depuis de nouveaux appareils. Pour les applications mobiles, une autorisation via code PIN ou biométrie est prévue, offrant à la fois commodité et sécurité."}',
             'value_pt' => '{"0":"Quanto às operações financeiras, a 1win utiliza apenas serviços de pagamento verificados e colabora com sistemas internacionais populares, reduzindo o risco de fraude. Outra vantagem é a possibilidade de proteção adicional da conta por meio de autenticação de dois fatores e monitoramento de logins em novos dispositivos. Para os aplicativos móveis, é oferecida autorização via código PIN ou biometria, proporcionando conveniência e segurança."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At 1win, every player can find a convenient method for deposits and withdrawals. The platform supports over 40 payment options, including Visa and Mastercard bank cards, popular e-wallets like Skrill, Neteller, and Perfect Money, as well as cryptocurrencies such as Bitcoin and Ethereum."}',
             'value_es' => '{"0":"En 1win, cada jugador puede encontrar un método conveniente para depósitos y retiros. La plataforma admite más de 40 opciones de pago, incluyendo tarjetas bancarias Visa y Mastercard, monederos electrónicos populares como Skrill, Neteller y Perfect Money, así como criptomonedas como Bitcoin y Ethereum."}',
             'value_fr' => '{"0":"Chez 1win, chaque joueur peut trouver une méthode pratique pour les dépôts et les retraits. La plateforme prend en charge plus de 40 options de paiement, y compris les cartes bancaires Visa et Mastercard, les portefeuilles électroniques populaires tels que Skrill, Neteller et Perfect Money, ainsi que les crypto-monnaies comme Bitcoin et Ethereum."}',
             'value_pt' => '{"0":"Na 1win, cada jogador pode encontrar um método conveniente para depósitos e saques. A plataforma suporta mais de 40 opções de pagamento, incluindo cartões bancários Visa e Mastercard, carteiras eletrônicas populares como Skrill, Neteller e Perfect Money, bem como criptomoedas como Bitcoin e Ethereum."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit in most cases is around $1 or the equivalent in another currency. Withdrawals can be made from $5–10 depending on the chosen method. E-wallets and cryptocurrencies work faster, allowing funds to be received within a few hours, while bank cards may take one to three business days."}',
             'value_es' => '{"0":"El depósito mínimo en la mayoría de los casos es de alrededor de $1 o su equivalente en otra moneda. Los retiros se pueden realizar desde $5–10 dependiendo del método elegido. Los monederos electrónicos y las criptomonedas funcionan más rápido, permitiendo recibir los fondos en unas pocas horas, mientras que las tarjetas bancarias pueden tardar de uno a tres días hábiles."}',
             'value_fr' => '{"0":"Le dépôt minimum dans la plupart des cas est d’environ 1 $ ou l’équivalent dans une autre devise. Les retraits peuvent être effectués à partir de 5 à 10 $ selon la méthode choisie. Les portefeuilles électroniques et les crypto-monnaies sont plus rapides et permettent de recevoir les fonds en quelques heures, tandis que les cartes bancaires peuvent nécessiter de un à trois jours ouvrables."}',
             'value_pt' => '{"0":"O depósito mínimo na maioria dos casos é de cerca de $1 ou equivalente em outra moeda. Os saques podem ser feitos a partir de $5–10, dependendo do método escolhido. Carteiras eletrônicas e criptomoedas funcionam mais rapidamente, permitindo receber os fundos em poucas horas, enquanto os cartões bancários podem levar de um a três dias úteis."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is important to understand that for large withdrawals, 1win may request account verification. You will need to provide passport details or other documents to confirm your identity. This is a standard practice aimed more at fraud protection than delaying payments. Usually, there are no bookmaker fees, but payment systems may charge commissions."}',
             'value_es' => '{"0":"Es importante entender que para retiros grandes, 1win puede solicitar la verificación de la cuenta. Tendrás que proporcionar los datos del pasaporte u otros documentos para confirmar tu identidad. Esta es una práctica estándar destinada más a la protección contra fraudes que a retrasar los pagos. Por lo general, no hay comisiones del corredor, pero los sistemas de pago pueden cobrar tarifas."}',
             'value_fr' => '{"0":"Il est important de comprendre que pour les gros retraits, 1win peut demander une vérification du compte. Vous devrez fournir des données de passeport ou d’autres documents pour confirmer votre identité. Il s’agit d’une pratique standard visant davantage à protéger contre la fraude qu’à retarder les paiements. En général, il n’y a pas de frais du bookmaker, mais les systèmes de paiement peuvent prélever des commissions."}',
             'value_pt' => '{"0":"É importante entender que, para saques grandes, a 1win pode solicitar a verificação da conta. Você precisará fornecer dados do passaporte ou outros documentos para confirmar sua identidade. Esta é uma prática padrão destinada mais à proteção contra fraude do que ao atraso nos pagamentos. Normalmente, não há taxas do bookmaker, mas os sistemas de pagamento podem cobrar comissões."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win support service operates 24/7. You can contact them via the website chat or by email:"}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1win funciona 24/7. Puedes contactarlos a través del chat en el sitio web o por correo electrónico:"}',
             'value_fr' => '{"0":"Le service d’assistance 1win est disponible 24h/24 et 7j/7. Vous pouvez les contacter via le chat sur le site ou par e-mail :"}',
             'value_pt' => '{"0":"O serviço de suporte da 1win funciona 24/7. Você pode contatá-los através do chat no site ou por e-mail:"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide sports line",
                                 "1":"Live match streams",
                                 "2":"Cashout",
                                 "3":"Large selection of casino games",
                                 "4":"Mobile app for Android",
                                 "5":"Various payment methods"},
                             "1":
                                {"0":"No iOS app",
                                 "1":"Occasional complaints about delayed withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia línea de deportes",
                                 "1":"Transmisiones en vivo de partidos",
                                 "2":"Cashout",
                                 "3":"Gran selección de juegos de casino",
                                 "4":"Aplicación móvil para Android",
                                 "5":"Variedad de métodos de pago"},
                             "1":
                                {"0":"No hay aplicación para iOS",
                                 "1":"Quejas ocasionales sobre retrasos en los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large gamme de sports",
                                 "1":"Diffusions en direct des matchs",
                                 "2":"Cashout",
                                 "3":"Grand choix de jeux de casino",
                                 "4":"Application mobile pour Android",
                                 "5":"Divers moyens de paiement"},
                             "1":
                                {"0":"Pas d’application pour iOS",
                                 "1":"Plaintes occasionnelles concernant les retards de retrait"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla linha de esportes",
                                 "1":"Transmissões ao vivo de partidas",
                                 "2":"Cashout",
                                 "3":"Grande seleção de jogos de cassino",
                                 "4":"Aplicativo móvel para Android",
                                 "5":"Diversos métodos de pagamento"},
                             "1":
                                {"0":"Sem aplicativo para iOS",
                                 "1":"Reclamações ocasionais sobre atrasos nos saques"}
                             }',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to play on 1win?"}',
             'value_es' => '{"0":"¿Es seguro jugar en 1win?"}',
             'value_fr' => '{"0":"Est-il sûr de jouer sur 1win ?"}',
             'value_pt' => '{"0":"É seguro jogar na 1win?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 41
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site operates under a Curacao license, uses SSL encryption, and accounts are protected with two-factor authentication."}',
             'value_es' => '{"0":"Sí, el sitio funciona bajo una licencia de Curazao, utiliza cifrado SSL y las cuentas están protegidas con autenticación de dos factores."}',
             'value_fr' => '{"0":"Oui, le site fonctionne sous licence Curaçao, utilise le cryptage SSL et les comptes sont protégés par une authentification à deux facteurs."}',
             'value_pt' => '{"0":"Sim, o site opera sob licença de Curaçao, utiliza criptografia SSL e as contas são protegidas com autenticação de dois fatores."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 42
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Does 1win offer live streams?"}',
             'value_es' => '{"0":"¿1win ofrece transmisiones en vivo?"}',
             'value_fr' => '{"0":"1win propose-t-il des diffusions en direct ?"}',
             'value_pt' => '{"0":"A 1win oferece transmissões ao vivo?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 43
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, for some events, a live stream is available in the «LIVE» section, usually marked with a «TV» icon. Viewing is possible after logging into your account."}',
             'value_es' => '{"0":"Sí, para algunos eventos hay transmisión en vivo disponible en la sección «LIVE», generalmente marcada con un icono de «TV». La visualización es posible después de iniciar sesión en tu cuenta."}',
             'value_fr' => '{"0":"Oui, pour certains événements, un streaming en direct est disponible dans la section « LIVE », généralement indiqué par une icône « TV ». La visualisation est possible après connexion à votre compte."}',
             'value_pt' => '{"0":"Sim, para alguns eventos, uma transmissão ao vivo está disponível na seção «LIVE», geralmente marcada com um ícone «TV». A visualização é possível após entrar na sua conta."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 44
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Does cashout work?"}',
             'value_es' => '{"0":"¿Funciona el cashout?"}',
             'value_fr' => '{"0":"Le cashout fonctionne-t-il ?"}',
             'value_pt' => '{"0":"O cashout funciona?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 45
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win supports early bet settlement, allowing you to secure part of your profit before the event ends."}',
             'value_es' => '{"0":"Sí, 1win admite la liquidación anticipada de apuestas, lo que permite asegurar parte de las ganancias antes de que finalice el evento."}',
             'value_fr' => '{"0":"Oui, 1win prend en charge le règlement anticipé des paris, ce qui permet de sécuriser une partie des gains avant la fin de l’événement."}',
             'value_pt' => '{"0":"Sim, a 1win oferece liquidação antecipada de apostas, permitindo garantir parte do lucro antes do término do evento."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 46
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit and withdrawal methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito y retiro están disponibles?"}',
             'value_fr' => '{"0":"Quels moyens de dépôt et de retrait sont disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito e saque estão disponíveis?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 47
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Bank cards, e-wallets (Skrill, Neteller, Perfect Money), and cryptocurrencies are supported. The minimum deposit is around $1, and withdrawals can take from a few hours up to three days depending on the chosen method."}',
             'value_es' => '{"0":"Se admiten tarjetas bancarias, monederos electrónicos (Skrill, Neteller, Perfect Money) y criptomonedas. El depósito mínimo es de aproximadamente $1 y los retiros pueden tardar desde unas pocas horas hasta tres días según el método elegido."}',
             'value_fr' => '{"0":"Les cartes bancaires, les portefeuilles électroniques (Skrill, Neteller, Perfect Money) et les cryptomonnaies sont pris en charge. Le dépôt minimum est d’environ 1 $ et les retraits peuvent prendre de quelques heures à trois jours selon la méthode choisie."}',
             'value_pt' => '{"0":"São aceitos cartões bancários, carteiras eletrônicas (Skrill, Neteller, Perfect Money) e criptomoedas. O depósito mínimo é cerca de $1 e os saques podem levar de algumas horas até três dias, dependendo do método escolhido."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 48
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can you play and place bets through the mobile app?"}',
             'value_es' => '{"0":"¿Se puede jugar y apostar a través de la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer et parier via l’application mobile ?"}',
             'value_pt' => '{"0":"É possível jogar e apostar através do aplicativo móvel?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 49
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win has apps for Android and a web app for iOS. They fully replicate the website’s functionality. You can place sports bets, play casino games, eSports, deposit funds, withdraw money, and manage bonuses."}',
             'value_es' => '{"0":"Sí, 1win tiene aplicaciones para Android y una aplicación web para iOS. Replican completamente la funcionalidad del sitio web. Podrás realizar apuestas deportivas, jugar en el casino, eSports, depositar fondos, retirar dinero y gestionar bonos."}',
             'value_fr' => '{"0":"Oui, 1win dispose d’applications pour Android et d’une application web pour iOS. Elles reproduisent entièrement les fonctionnalités du site. Vous pouvez placer des paris sportifs, jouer au casino, aux eSports, déposer des fonds, retirer de l’argent et gérer les bonus."}',
             'value_pt' => '{"0":"Sim, a 1win possui aplicativos para Android e um aplicativo web para iOS. Eles replicam totalmente a funcionalidade do site. Você pode fazer apostas esportivas, jogar no cassino, eSports, depositar fundos, sacar dinheiro e gerenciar bônus."}',
             'order' => 49
            ]
        );
    }
}
