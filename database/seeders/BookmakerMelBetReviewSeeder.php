<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is an international bookmaker and online casino that has been operating since 2012 under the brand Pelican Entertainment B.V. The company operates under a Curacao license (Company №134359)."}',
             'value_es' => '{"0":"MelBet es una casa de apuestas y casino en línea internacional que opera desde 2012 bajo la marca Pelican Entertainment B.V. La empresa funciona con una licencia de Curazao (Compañía Nº134359)."}',
             'value_fr' => '{"0":"MelBet est un bookmaker et casino en ligne international qui opère depuis 2012 sous la marque Pelican Entertainment B.V. L’entreprise exerce sous licence de Curaçao (Société n°134359)."}',
             'value_pt' => '{"0":"A MelBet é uma casa de apostas e cassino online internacional que atua desde 2012 sob a marca Pelican Entertainment B.V. A empresa opera com licença de Curaçao (Empresa nº134359)."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker serves players from many countries thanks to the platform being available in dozens of languages. However, it is important to note that the availability of the product, domains, and even bonuses may vary depending on the country and local regulations, so the specific conditions should always be checked in your region before registering."}',
             'value_es' => '{"0":"La casa de apuestas atiende a jugadores de muchos países gracias a que la plataforma está disponible en decenas de idiomas. Sin embargo, conviene tener en cuenta que la disponibilidad del producto, los dominios e incluso los bonos pueden variar según el país y las normativas locales, por lo que siempre es recomendable comprobar las condiciones específicas en su región antes de registrarse."}',
             'value_fr' => '{"0":"Le bookmaker accueille des joueurs de nombreux pays grâce à une plateforme disponible en dizaines de langues. Toutefois, il est important de noter que la disponibilité du produit, des domaines et même des bonus peut varier selon le pays et la réglementation locale. Il est donc conseillé de vérifier les conditions spécifiques dans votre région avant de vous inscrire."}',
             'value_pt' => '{"0":"A casa de apostas atende jogadores de diversos países, já que a plataforma está disponível em dezenas de idiomas. No entanto, é importante destacar que a disponibilidade do produto, dos domínios e até mesmo dos bônus pode variar de acordo com o país e as exigências locais. Por isso, é sempre recomendável verificar as condições específicas na sua região antes de se registrar."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In the pre-match section, MelBet offers a wide line on football, basketball, tennis, hockey, cricket, esports, and other disciplines. For top events, hundreds of betting options are available."}',
             'value_es' => '{"0":"En la sección de prepartido, MelBet ofrece una amplia línea en fútbol, baloncesto, tenis, hockey, críquet, deportes electrónicos y otras disciplinas. En los eventos principales hay disponibles cientos de opciones de apuesta."}',
             'value_fr' => '{"0":"Dans la section pré-match, MelBet propose une large offre sur le football, le basketball, le tennis, le hockey, le cricket, l’esport et d’autres disciplines. Pour les grands événements, des centaines d’options de paris sont disponibles."}',
             'value_pt' => '{"0":"Na seção de pré-jogo, a MelBet oferece uma ampla linha em futebol, basquete, tênis, hóquei, críquete, eSports e outras modalidades. Nos principais eventos, estão disponíveis centenas de opções de apostas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The interface of the website and mobile apps allows users to quickly create bet slips, sort markets, and use the search function. The bookmaker covers more than a thousand sporting events daily, combining popular European leagues with regional competitions."}',
             'value_es' => '{"0":"La interfaz del sitio web y de las aplicaciones móviles permite crear boletos rápidamente, ordenar los mercados y utilizar la función de búsqueda. La casa de apuestas cubre diariamente más de mil eventos deportivos, combinando ligas europeas populares con campeonatos regionales."}',
             'value_fr' => '{"0":"L’interface du site et des applications mobiles permet de composer rapidement des coupons, de trier les marchés et d’utiliser la recherche. Le bookmaker couvre chaque jour plus de mille événements sportifs, associant les grandes ligues européennes aux compétitions régionales."}',
             'value_pt' => '{"0":"A interface do site e dos aplicativos móveis permite montar bilhetes rapidamente, organizar os mercados e utilizar a função de busca. A casa de apostas cobre diariamente mais de mil eventos esportivos, combinando ligas europeias populares com competições regionais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For those interested in esports, the line on CS2, Dota 2, League of Legends, and mobile titles is updated promptly, with support for special markets on maps and rounds. Overall, MelBet’s pre-match section looks competitive in terms of both coverage and usability, especially for major tournaments."}',
             'value_es' => '{"0":"Para quienes se interesan por los eSports, la línea en CS2, Dota 2, League of Legends y títulos móviles se actualiza de forma ágil, con mercados especiales en mapas y rondas. En conjunto, la sección de prepartido de MelBet resulta competitiva tanto por su amplitud como por su comodidad, sobre todo en los campeonatos masivos."}',
             'value_fr' => '{"0":"Pour les amateurs d’esport, la ligne sur CS2, Dota 2, League of Legends et les disciplines mobiles est actualisée rapidement, avec des marchés spéciaux sur les cartes et les manches. Dans l’ensemble, la section pré-match de MelBet apparaît compétitive en termes de variété et de praticité, en particulier sur les grands championnats."}',
             'value_pt' => '{"0":"Para os interessados em eSports, a linha em CS2, Dota 2, League of Legends e títulos móveis é atualizada de forma ágil, com suporte a mercados especiais em mapas e rodadas. No geral, a seção de pré-jogo da MelBet se mostra competitiva em termos de variedade e praticidade, especialmente nos campeonatos de grande porte."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v3',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet casino section is quite diverse, as it features thousands of slots, table games, and a large live-casino block. In the live section, you’ll find tables with real dealers from well-known providers. You can also play live roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"La sección de casino de MelBet es bastante variada, ya que reúne miles de tragamonedas, juegos de mesa y un amplio bloque de casino en vivo. En la sección en vivo encontrarás mesas con crupieres reales de proveedores reconocidos. También podrás jugar en vivo a la ruleta, blackjack, bacará y póker."}',
             'value_fr' => '{"0":"La section casino de MelBet est très variée, avec des milliers de machines à sous, de jeux de table et un large espace de casino en direct. Dans la section live, vous trouverez des tables avec de vrais croupiers provenant de fournisseurs réputés. Vous pouvez également jouer en direct à la roulette, au blackjack, au baccarat et au poker."}',
             'value_pt' => '{"0":"A seção de cassino da MelBet é bastante diversificada, reunindo milhares de slots, jogos de mesa e um grande bloco de cassino ao vivo. No modo ao vivo, você encontrará mesas com crupiês reais de provedores renomados. Também é possível jogar roleta, blackjack, bacará e pôquer ao vivo."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The assortment is complemented by fast games and titles tailored for local markets. It’s worth noting that there is an optimized mobile version, so playing from your phone is just as comfortable as from a PC. Keep in mind that the list of providers and specific games may vary by region due to licensing restrictions."}',
             'value_es' => '{"0":"La oferta se complementa con juegos rápidos y títulos adaptados a los mercados locales. Cabe destacar que existe una versión móvil optimizada, por lo que jugar desde el teléfono es tan cómodo como desde el ordenador. Ten en cuenta que la lista de proveedores y los juegos disponibles pueden variar según la región debido a restricciones de licencia."}',
             'value_fr' => '{"0":"L’offre est complétée par des jeux rapides et des titres adaptés aux marchés locaux. Il convient de noter qu’il existe une version mobile optimisée, ce qui rend le jeu sur téléphone aussi confortable que sur PC. Gardez à l’esprit que la liste des fournisseurs et certains jeux peuvent varier selon les régions en raison des restrictions de licence."}',
             'value_pt' => '{"0":"A variedade é complementada por jogos rápidos e títulos voltados para mercados locais. Vale destacar que existe uma versão móvel otimizada, tornando a experiência no celular tão confortável quanto no PC. Lembre-se de que a lista de provedores e jogos específicos pode variar conforme a região devido a restrições de licença."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At MelBet, the odds are generally in line with those offered by most popular bookmakers. For example, in football matches, the prices hover around 1.92 for «both teams to score» or handicap bets. In basketball, odds for favorites can reach 1.90, which is slightly above the market average."}',
             'value_es' => '{"0":"En MelBet, las cuotas se mantienen en un nivel similar al de la mayoría de las casas de apuestas populares. Por ejemplo, en los partidos de fútbol, las cotizaciones suelen rondar 1,92 para apuestas de «gol/no gol» o hándicap. En baloncesto, las cuotas para los favoritos pueden llegar a 1,90, lo que también está por encima de la media del mercado."}',
             'value_fr' => '{"0":"Chez MelBet, les cotes se situent en moyenne au même niveau que celles proposées par la plupart des bookmakers populaires. Par exemple, pour les matchs de football, elles tournent autour de 1,92 pour les paris «but/pas de but» ou les handicaps. Pour le basket-ball, les cotes des favoris peuvent atteindre 1,90, ce qui reste légèrement supérieur à la moyenne du marché."}',
             'value_pt' => '{"0":"Na MelBet, as odds ficam, em média, no mesmo nível da maioria das casas de apostas populares. Por exemplo, em jogos de futebol, as cotações giram em torno de 1,92 para apostas de «gol/não gol» ou handicap. No basquete, as odds para os favoritos podem chegar a 1,90, o que também está acima da média do mercado."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The limit system at MelBet is not based on a single fixed rule but is instead determined dynamically, depending on several factors. Primarily, the maximum stake size depends on the sport, the level of the tournament, and the popularity of the specific event. For top competitions such as the Champions League or national team matches, the cap can reach tens of thousands of euros per bet. For lesser-known leagues or niche disciplines, the restrictions are significantly lower, sometimes only a few hundred euros."}',
             'value_es' => '{"0":"El sistema de límites en MelBet no sigue una regla fija, sino que se determina de manera dinámica según varios factores. Principalmente, el tamaño máximo de la apuesta depende del deporte, el nivel del torneo y la popularidad del evento. En competiciones de alto nivel, como la Liga de Campeones o partidos de selecciones nacionales, el límite puede alcanzar decenas de miles de euros por apuesta. En ligas menores o disciplinas de nicho, las restricciones son mucho más reducidas, a veces de solo unos cientos de euros."}',
             'value_fr' => '{"0":"Le système de limites de MelBet n’est pas basé sur une règle unique mais est déterminé de manière dynamique, selon plusieurs facteurs. Le montant maximal de mise dépend avant tout du sport, du niveau de la compétition et de la popularité de l’événement. Pour les grandes compétitions comme la Ligue des Champions ou les matchs internationaux, le plafond peut atteindre plusieurs dizaines de milliers d’euros par pari. En revanche, pour les ligues mineures ou les disciplines de niche, les restrictions sont bien plus modestes, parfois de seulement quelques centaines d’euros."}',
             'value_pt' => '{"0":"O sistema de limites da MelBet não segue uma regra única, sendo definido de forma dinâmica, de acordo com vários fatores. O valor máximo de aposta depende principalmente do esporte, do nível do torneio e da popularidade do evento. Em competições de topo, como a Liga dos Campeões ou jogos de seleções nacionais, o teto pode chegar a dezenas de milhares de euros por aposta. Já em ligas menores ou disciplinas de nicho, as restrições são bem mais modestas, às vezes de apenas algumas centenas de euros."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is also important to note that individual account history plays a role. Players who consistently win or place large bets may face personalized restrictions, meaning their maximum stake could be lower than the average customer’s."}',
             'value_es' => '{"0":"También hay que tener en cuenta el historial individual de cada cuenta. Los jugadores que obtienen ganancias constantes o elevadas pueden encontrarse con limitaciones personalizadas, lo que significa que su apuesta máxima será más baja que la de un usuario promedio."}',
             'value_fr' => '{"0":"Il faut également prendre en compte l’historique du compte. Les joueurs qui gagnent régulièrement ou qui réalisent de gros gains peuvent être soumis à des restrictions personnalisées, ce qui signifie que leur mise maximale sera inférieure à celle d’un joueur moyen."}',
             'value_pt' => '{"0":"Também é importante considerar o histórico individual da conta. Jogadores que demonstram sucesso consistente ou grandes ganhos podem receber restrições personalizadas, o que significa que o valor máximo da aposta será menor do que o de um usuário médio."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The minimum stake at MelBet is very accessible at just €0.20, allowing users to test markets without major risks. As for the maximum possible winnings, the official figure is set at around €600,000 per event, though in practice the actual limits depend on the specific market."}',
             'value_es' => '{"0":"La apuesta mínima en MelBet es bastante accesible, de tan solo 0,20 €, lo que permite probar mercados sin grandes riesgos. En cuanto a las ganancias máximas, la cifra oficial es de unos 600 000 € por evento, aunque en la práctica las limitaciones reales dependen del mercado concreto."}',
             'value_fr' => '{"0":"La mise minimale chez MelBet est très accessible, à seulement 0,20 €, ce qui permet de tester les marchés sans gros risques. Quant au gain maximum, il est officiellement fixé à environ 600 000 € par événement, bien que dans la pratique les limites réelles varient en fonction du marché concerné."}',
             'value_pt' => '{"0":"A aposta mínima na MelBet é bastante acessível, de apenas €0,20, permitindo testar mercados sem grandes riscos. Quanto ao ganho máximo, o valor oficial é de cerca de €600.000 por evento, mas na prática os limites reais variam conforme o mercado específico."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"One of the reasons for MelBet’s popularity is the wide range of betting options. In popular matches, you can easily find hundreds of markets. For example, you can bet on the outcome and double chances, handicaps and totals, goal intervals, corner and card statistics, individual player performance, as well as place combined bets."}',
             'value_es' => '{"0":"Una de las razones de la popularidad de MelBet es la amplitud de su oferta. En los partidos más populares es fácil encontrar cientos de mercados. Así, podrás apostar al resultado y a la doble oportunidad, hándicaps y totales, intervalos de goles, estadísticas de saques de esquina y tarjetas, rendimiento individual de los jugadores, además de realizar apuestas combinadas."}',
             'value_fr' => '{"0":"L’une des raisons de la popularité de MelBet est la diversité de son offre. Dans les matchs populaires, vous trouverez facilement des centaines de marchés. Vous pourrez ainsi parier sur le résultat et les doubles chances, les handicaps et les totaux, les intervalles de buts, les statistiques des corners et des cartons, les performances individuelles des joueurs, ainsi que placer des paris combinés."}',
             'value_pt' => '{"0":"Uma das razões da popularidade da MelBet é a variedade das opções de apostas. Nos jogos mais populares, é fácil encontrar centenas de mercados. Assim, você poderá apostar no resultado e em chances duplas, handicaps e totais, intervalos de gols, estatísticas de escanteios e cartões, desempenho individual de jogadores, além de realizar apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Esports adds its own unique markets, such as map winners, total rounds, and handicap by maps. It is also worth noting that in the bet slip you can quickly switch between bet types (single, accumulator, system), while filters help you navigate through hundreds of options. For daily betting, this saves time, especially if you combine multiple sports and leagues."}',
             'value_es' => '{"0":"Los deportes electrónicos añaden sus propios mercados únicos, como ganadores de mapas, totales de rondas o hándicaps por mapas. También cabe destacar que en el cupón se puede cambiar rápidamente el tipo de apuesta (simple, combinada, sistema), y los filtros ayudan a no perderse entre cientos de opciones. Para el juego diario, esto ahorra tiempo, especialmente si combinas varios deportes y ligas."}',
             'value_fr' => '{"0":"L’e-sport apporte également ses propres marchés uniques, comme les vainqueurs de cartes, le total de manches ou les handicaps par cartes. Il convient aussi de souligner que dans le coupon, il est possible de changer rapidement le type de pari (simple, combiné, système), tandis que les filtres permettent de s’orienter parmi des centaines d’options. Pour un usage quotidien, c’est un gain de temps, surtout si vous combinez plusieurs sports et championnats."}',
             'value_pt' => '{"0":"O eSports acrescenta seus próprios mercados exclusivos, como vencedores de mapas, totais de rodadas e handicap por mapas. Também vale destacar que no bilhete de apostas é possível alterar rapidamente o tipo de aposta (simples, acumulada, sistema), e os filtros ajudam a não se perder entre centenas de opções. Para o jogo diário, isso economiza tempo, especialmente se você combina vários esportes e ligas."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet’s live platform is one of the brand’s strongest features. During a match, you get access to a wide range of live markets and the option to connect to a video stream. The presence of streams is a significant advantage, as it allows you to synchronize the timeline with your bets."}',
             'value_es' => '{"0":"La plataforma en vivo de MelBet es uno de los puntos más fuertes de la marca. Durante un partido, se obtiene acceso a una amplia variedad de mercados en vivo y la posibilidad de conectarse a un video stream. La presencia de transmisiones es una gran ventaja, ya que permite sincronizar la línea de tiempo con las apuestas."}',
             'value_fr' => '{"0":"La plateforme live de MelBet est l’un des points forts de la marque. Pendant un match, vous avez accès à un large éventail de marchés en direct et la possibilité de lancer un streaming vidéo. La présence de flux en direct est un atout majeur, car elle permet de synchroniser la timeline avec vos paris."}',
             'value_pt' => '{"0":"A plataforma ao vivo da MelBet é um dos pontos fortes da marca. Durante uma partida, você tem acesso a uma grande variedade de mercados ao vivo e a opção de ativar a transmissão de vídeo. A presença dos streams é uma vantagem significativa, pois permite sincronizar a linha do tempo com as apostas."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that the service supports live streaming for esports, which is not always available with other bookmakers. From a technical perspective, everything runs smoothly, but the quality of the broadcast and the selection of leagues depend on the country."}',
             'value_es' => '{"0":"Cabe destacar que el servicio ofrece transmisión en vivo para los deportes electrónicos, algo que no siempre está disponible en otras casas de apuestas. Desde el punto de vista técnico todo funciona de manera estable, aunque la calidad de la transmisión y la selección de ligas dependen del país."}',
             'value_fr' => '{"0":"Il convient de noter que le service prend en charge le streaming en direct pour l’esport, ce qui n’est pas toujours proposé par d’autres bookmakers. Techniquement, tout semble stable, mais la qualité de la diffusion et le choix des ligues varient selon le pays."}',
             'value_pt' => '{"0":"Vale destacar que o serviço oferece streaming ao vivo para eSports, algo que nem sempre está disponível em outras casas de apostas. Do ponto de vista técnico, tudo funciona de forma estável, mas a qualidade da transmissão e a seleção de ligas dependem do país."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Formally, MelBet operates under a Curaçao license. This ensures a standard set of KYC/AML requirements, responsible gaming policies, and complaint handling procedures. At the same time, it is worth noting that Curaçao is not MGA or UKGC, so consumer protection mechanisms are more limited."}',
             'value_es' => '{"0":"Desde un punto de vista formal, MelBet opera bajo una licencia de Curazao. Esto garantiza un conjunto estándar de requisitos de KYC/AML, políticas de juego responsable y procedimientos para la atención de reclamaciones. Al mismo tiempo, cabe señalar que Curazao no es MGA ni UKGC, por lo que los mecanismos de protección al consumidor son más limitados."}',
             'value_fr' => '{"0":"Sur le plan formel, MelBet opère sous licence de Curaçao. Cela garantit un ensemble standard d’exigences KYC/AML, des politiques de jeu responsable et le traitement des réclamations. Il convient toutefois de noter que Curaçao n’est pas MGA ni UKGC, et que les mécanismes de protection des consommateurs sont donc plus limités."}',
             'value_pt' => '{"0":"Do ponto de vista formal, a MelBet opera sob licença de Curaçao. Isso garante um conjunto padrão de requisitos KYC/AML, políticas de jogo responsável e tratamento de reclamações. Ao mesmo tempo, é importante notar que Curaçao não é MGA nem UKGC, portanto, os mecanismos de proteção ao consumidor são mais limitados."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"We recommend completing full verification in advance and keeping copies of your payment documents. Once full verification is completed, you will be able to withdraw funds faster without long delays."}',
             'value_es' => '{"0":"Recomendamos completar la verificación completa con anticipación y guardar copias de los comprobantes de pago. Una vez realizada la verificación completa, podrá retirar fondos más rápido, sin largos tiempos de espera."}',
             'value_fr' => '{"0":"Nous recommandons de procéder à une vérification complète à l’avance et de conserver des copies des documents de paiement. Une fois la vérification complète effectuée, vous pourrez retirer vos fonds plus rapidement, sans longues attentes."}',
             'value_pt' => '{"0":"Recomendamos realizar a verificação completa antecipadamente e guardar cópias dos comprovantes de pagamento. Após a verificação completa, você poderá sacar fundos mais rapidamente, sem longas esperas."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is known for its variety of payment methods. You can use over 100 options for deposits, including bank cards, e-wallets, mobile payments, cryptocurrencies, and bank transfers. The specific selection depends on your region."}',
             'value_es' => '{"0":"MelBet es conocido por su variedad de métodos de pago. Puede utilizar más de 100 opciones para depósitos, incluyendo tarjetas bancarias, monederos electrónicos, pagos móviles, criptomonedas y transferencias bancarias. La selección concreta depende de la región."}',
             'value_fr' => '{"0":"MelBet est connu pour la diversité de ses méthodes de paiement. Vous pouvez utiliser plus de 100 options pour les dépôts, y compris les cartes bancaires, les portefeuilles électroniques, les paiements mobiles, les cryptomonnaies et les virements bancaires. La sélection spécifique dépend de la région."}',
             'value_pt' => '{"0":"MelBet é conhecido pela variedade de métodos de pagamento. Você pode usar mais de 100 opções para depósitos, incluindo cartões bancários, carteiras eletrônicas, pagamentos móveis, criptomoedas e transferências bancárias. A seleção específica depende da região."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are usually credited instantly, while withdrawals require completed KYC. To minimize delays, it is recommended to verify your identity in advance, confirm your payment method, and avoid frequently changing payment instruments."}',
             'value_es' => '{"0":"Los depósitos generalmente se acreditan al instante, mientras que los retiros requieren haber completado el KYC. Para minimizar retrasos, se recomienda verificar la identidad con anticipación, confirmar el método de pago y evitar cambios frecuentes de instrumentos de pago."}',
             'value_fr' => '{"0":"Les dépôts sont généralement crédités instantanément, tandis que les retraits nécessitent la vérification KYC. Pour minimiser les délais, il est recommandé de vérifier votre identité à l’avance, de confirmer le moyen de paiement et d’éviter de changer fréquemment d’instruments de paiement."}',
             'value_pt' => '{"0":"Os depósitos geralmente são creditados instantaneamente, enquanto os saques exigem KYC completo. Para minimizar atrasos, recomenda-se verificar sua identidade com antecedência, confirmar o método de pagamento e evitar mudanças frequentes nos instrumentos de pagamento."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet customer support operates 24/7 via live chat on the website, email, and phone."}',
             'value_es' => '{"0":"El servicio de atención al cliente de MelBet funciona las 24 horas, los 7 días de la semana, a través del chat en vivo en el sitio web, correo electrónico y teléfono."}',
             'value_fr' => '{"0":"Le service client de MelBet est disponible 24h/24 et 7j/7 via le chat en direct sur le site, par e-mail et par téléphone."}',
             'value_pt' => '{"0":"O suporte ao cliente da MelBet funciona 24 horas por dia, 7 dias por semana, através do chat ao vivo no site, e-mail e telefone."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide pre-match and live betting lines",
                                 "1":"Availability of live streams",
                                 "2":"Many payment methods",
                                 "3":"Live casino with top providers"},
                             "1":
                                {"0":"Limits and service availability vary by country",
                                 "1":"Additional KYC verification may sometimes be required"}
                             }',
             'value_es' => '{"0":
                                {"0":"Línea amplia en pre-partido y en vivo",
                                 "1":"Disponibilidad de transmisiones en directo",
                                 "2":"Muchos métodos de pago",
                                 "3":"Casino en vivo con los principales proveedores"},
                             "1":
                                {"0":"Los límites y la disponibilidad de los servicios varían según el país",
                                 "1":"A veces se requieren verificaciones adicionales de KYC"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large éventail de paris pré-match et en direct",
                                 "1":"Disponibilité des diffusions en direct",
                                 "2":"De nombreux moyens de paiement",
                                 "3":"Casino en direct avec des fournisseurs de premier plan"},
                             "1":
                                {"0":"Les limites et la disponibilité des services varient selon les pays",
                                 "1":"Des vérifications KYC supplémentaires peuvent parfois être nécessaires"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla linha de apostas pré-jogo e ao vivo",
                                 "1":"Disponibilidade de transmissões ao vivo",
                                 "2":"Muitos métodos de pagamento",
                                 "3":"Cassino ao vivo com provedores de topo"},
                             "1":
                                {"0":"Os limites e a disponibilidade dos serviços variam conforme o país",
                                 "1":"Às vezes, verificações KYC adicionais podem ser necessárias"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MelBet"}',
                'value_fr' => '{"0":"FAQ de MelBet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MelBet"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How safe is it to play on MelBet?"}',
             'value_es' => '{"0":"¿Qué tan seguro es jugar en MelBet?"}',
             'value_fr' => '{"0":"Jouer sur MelBet est-il sûr ?"}',
             'value_pt' => '{"0":"Quão seguro é jogar no MelBet?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet operates under an international Curaçao license. The site uses SSL encryption to protect data and supports two-factor authentication."}',
             'value_es' => '{"0":"MelBet opera bajo una licencia internacional de Curazao. El sitio utiliza cifrado SSL para proteger los datos y admite autenticación de dos factores."}',
             'value_fr' => '{"0":"MelBet fonctionne sous licence internationale de Curaçao. Le site utilise un cryptage SSL pour protéger les données et prend en charge l’authentification à deux facteurs."}',
             'value_pt' => '{"0":"O MelBet opera sob uma licença internacional de Curaçao. O site utiliza criptografia SSL para proteger os dados e suporta autenticação de dois fatores."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Does MelBet offer live streams?"}',
             'value_es' => '{"0":"¿MelBet ofrece transmisiones en vivo?"}',
             'value_fr' => '{"0":"MelBet propose-t-il des diffusions en direct ?"}',
             'value_pt' => '{"0":"O MelBet oferece transmissões ao vivo?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, video streams are available in live betting for some matches and esports events."}',
             'value_es' => '{"0":"Sí, hay transmisiones de video disponibles en las apuestas en vivo para algunos partidos y eventos de deportes electrónicos."}',
             'value_fr' => '{"0":"Oui, des flux vidéo sont disponibles en direct pour certains matchs et événements e-sport."}',
             'value_pt' => '{"0":"Sim, há transmissões de vídeo disponíveis nas apostas ao vivo para algumas partidas e eventos de eSports."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What payment methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de pago se aceptan?"}',
             'value_fr' => '{"0":"Quels modes de paiement sont pris en charge ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento são aceitos?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Bank cards, e-wallets, mobile payments, cryptocurrencies, and bank transfers."}',
             'value_es' => '{"0":"Tarjetas bancarias, monederos electrónicos, pagos móviles, criptomonedas y transferencias bancarias."}',
             'value_fr' => '{"0":"Cartes bancaires, portefeuilles électroniques, paiements mobiles, cryptomonnaies et virements bancaires."}',
             'value_pt' => '{"0":"Cartões bancários, carteiras eletrônicas, pagamentos móveis, criptomoedas e transferências bancárias."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Does MelBet have a mobile app?"}',
             'value_es' => '{"0":"¿MelBet tiene una aplicación móvil?"}',
             'value_fr' => '{"0":"MelBet dispose-t-il d’une application mobile ?"}',
             'value_pt' => '{"0":"O MelBet possui um aplicativo móvel?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, MelBet offers mobile apps for Android and iOS. They support full functionality, from pre-match and live betting to casino access."}',
             'value_es' => '{"0":"Sí, MelBet ofrece aplicaciones móviles para Android e iOS. Soportan todas las funciones, desde apuestas pre-partido y en vivo hasta acceso al casino."}',
             'value_fr' => '{"0":"Oui, MelBet propose des applications mobiles pour Android et iOS. Elles offrent toutes les fonctionnalités, des paris pré-match et en direct à l’accès au casino."}',
             'value_pt' => '{"0":"Sim, o MelBet oferece aplicativos móveis para Android e iOS. Eles suportam todas as funcionalidades, desde apostas pré-jogo e ao vivo até acesso ao cassino."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 45
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum bet on the platform?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima en la plataforma?"}',
             'value_fr' => '{"0":"Quel est le pari minimum sur la plateforme ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima na plataforma?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 46
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet at MelBet starts from €0.20 or the equivalent in another currency. This makes the service accessible even for those who do not want to risk large amounts."}',
             'value_es' => '{"0":"La apuesta mínima en MelBet comienza desde 0,20 € o su equivalente en otra moneda. Esto hace que el servicio sea accesible incluso para quienes no desean arriesgar grandes cantidades."}',
             'value_fr' => '{"0":"Le pari minimum chez MelBet commence à 0,20 € ou l’équivalent dans une autre devise. Cela rend le service accessible même pour ceux qui ne veulent pas risquer de grosses sommes."}',
             'value_pt' => '{"0":"A aposta mínima na MelBet começa em 0,20 € ou equivalente em outra moeda. Isso torna o serviço acessível mesmo para quem não quer arriscar grandes quantias."}',
             'order' => 46
            ]
        );
    }
}
