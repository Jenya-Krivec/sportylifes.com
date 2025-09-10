<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz is a multifunctional platform that combines sports betting and a casino section with a wide variety of games. The operator works in international markets under a Curacao license, which allows it to serve users in many countries. Yes, it is not a “European” gambling regulator with the strictest control, but the presence of a license and the use of SSL encryption indicate the bookmaker’s reliability."}',
             'value_es' => '{"0":"888Starz es una plataforma multifuncional que combina las apuestas deportivas y una sección de casino con una amplia variedad de juegos. El operador trabaja en mercados internacionales bajo una licencia de Curazao, lo que le permite atender a usuarios en muchos países. Sí, no es un regulador “europeo” del juego con el control más estricto, pero la existencia de una licencia y el uso de cifrado SSL hablan de la fiabilidad de la casa de apuestas."}',
             'value_fr' => '{"0":"888Starz est une plateforme multifonctionnelle qui combine les paris sportifs et une section casino avec un large choix de jeux variés. L’opérateur est actif sur les marchés internationaux sous une licence de Curaçao, ce qui lui permet de servir des utilisateurs dans de nombreux pays. Certes, il ne s’agit pas d’un régulateur « européen » du jeu avec le contrôle le plus strict, mais la présence d’une licence et l’utilisation du chiffrement SSL témoignent de la fiabilité du bookmaker."}',
             'value_pt' => '{"0":"888Starz é uma plataforma multifuncional que combina apostas esportivas e uma seção de cassino com uma grande variedade de jogos. O operador atua em mercados internacionais sob licença de Curaçao, o que lhe permite atender usuários em muitos países. Sim, não é um regulador de jogos “europeu” com o controle mais rigoroso, mas a presença da licença e o uso de criptografia SSL indicam a confiabilidade da casa de apostas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz also has mobile apps and a mobile web version of the site for quick access from smartphones. Overall, 888Starz positions itself as an “all-in-one” option for those who want to bet on sports and play casino games at the same time. The product is aimed at both traditional players and the crypto audience, as crypto payment methods are available on the site."}',
             'value_es' => '{"0":"888Starz también cuenta con aplicaciones móviles y una versión web móvil del sitio para un acceso rápido desde los teléfonos inteligentes. En general, 888Starz se posiciona como una opción “todo en uno” para quienes quieren apostar en deportes y jugar en el casino al mismo tiempo. El producto está orientado tanto a jugadores tradicionales como a la audiencia cripto, ya que en el sitio hay disponibles métodos de pago con criptomonedas."}',
             'value_fr' => '{"0":"888Starz dispose également d’applications mobiles et d’une version web mobile du site pour un accès rapide depuis les smartphones. Dans l’ensemble, 888Starz se positionne comme une solution « tout-en-un » pour ceux qui souhaitent à la fois parier sur le sport et jouer au casino. Le produit s’adresse aussi bien aux joueurs traditionnels qu’au public crypto, puisque des méthodes de paiement en cryptomonnaie sont proposées sur le site."}',
             'value_pt' => '{"0":"A 888Starz também possui aplicativos móveis e uma versão web móvel do site para acesso rápido a partir de smartphones. No geral, a 888Starz se posiciona como uma opção “tudo em um” para quem deseja apostar em esportes e jogar no cassino ao mesmo tempo. O produto é voltado tanto para jogadores tradicionais quanto para o público cripto, já que o site oferece métodos de pagamento em criptomoedas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section of 888Starz looks both familiar and modern. You can bet on classic disciplines like football, basketball, and tennis, as well as on less popular options such as esports and regional leagues. For top matches, users will find a wide range of betting opportunities. These include 1X2, handicaps, totals, individual player statistics, and various special markets."}',
             'value_es' => '{"0":"La sección de pre-partido de 888Starz se ve a la vez familiar y moderna. Es posible apostar en disciplinas clásicas como fútbol, baloncesto y tenis, así como en opciones menos populares como los deportes electrónicos y las ligas regionales. En los partidos de primer nivel, los usuarios encontrarán una amplia gama de opciones de apuestas. Esto incluye 1X2, hándicaps, totales, estadísticas individuales de jugadores y diferentes mercados especiales."}',
             'value_fr' => '{"0":"La section pré-match de 888Starz apparaît à la fois familière et moderne. Il est possible de parier sur des disciplines classiques comme le football, le basketball et le tennis, mais aussi sur des options moins populaires telles que l’esport ou les ligues régionales. Sur les matchs de haut niveau, les utilisateurs trouveront un large éventail d’options de paris. Cela comprend le 1X2, les handicaps, les totaux, les statistiques individuelles des joueurs ainsi que divers marchés spéciaux."}',
             'value_pt' => '{"0":"A seção pré-jogo da 888Starz parece ao mesmo tempo familiar e moderna. É possível apostar em disciplinas clássicas como futebol, basquete e tênis, assim como em opções menos populares, como eSports e ligas regionais. Nos jogos de maior destaque, os usuários encontram uma ampla variedade de opções de apostas. Isso inclui 1X2, handicaps, totais, estatísticas individuais de jogadores e diversos mercados especiais."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match interface allows for smooth navigation, thanks to filters and a search function. The ability to quickly add events to the bet slip makes building accumulators convenient."}',
             'value_es' => '{"0":"La interfaz de la sección pre-partido permite una navegación ágil, gracias a los filtros y a la función de búsqueda. La posibilidad de añadir rápidamente eventos al cupón hace que formar combinadas sea cómodo."}',
             'value_fr' => '{"0":"L’interface de la section pré-match permet une navigation fluide grâce aux filtres et à la fonction de recherche. La possibilité d’ajouter rapidement des événements au coupon rend la création de paris combinés plus pratique."}',
             'value_pt' => '{"0":"A interface da seção pré-jogo permite uma navegação prática, graças aos filtros e à função de busca. A possibilidade de adicionar rapidamente eventos ao cupom torna a criação de apostas múltiplas bastante conveniente."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For major events, the platform sometimes offers boosted odds. However, for those who enjoy betting on smaller leagues or exotic markets, the depth might occasionally be lacking — a fairly standard compromise for a bookmaker with such wide geographical coverage."}',
             'value_es' => '{"0":"En los eventos más importantes, la plataforma a veces ofrece cuotas mejoradas. No obstante, para quienes prefieren apostar en ligas menores o mercados exóticos, la profundidad puede resultar insuficiente en ocasiones — una situación bastante común para un operador con cobertura internacional amplia."}',
             'value_fr' => '{"0":"Lors des événements majeurs, la plateforme propose parfois des cotes boostées. En revanche, pour ceux qui aiment parier sur de petites ligues ou des marchés exotiques, la profondeur peut parfois faire défaut — une situation assez courante pour un opérateur actif sur un large éventail de marchés."}',
             'value_pt' => '{"0":"Nos eventos mais importantes, a plataforma às vezes oferece odds aumentadas. Para quem gosta de apostar em ligas menores ou mercados exóticos, a profundidade pode, por vezes, ser insuficiente — uma situação relativamente comum para um operador com cobertura geográfica tão ampla."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The casino section is one of the strong points of 888Starz. The site offers a vast library of games, with thousands of slots, live games from well-known providers, and quick games. The catalog features popular hits as well as “New Games” and “Top” categories, making it easier to navigate through the large amount of content."}',
             'value_es' => '{"0":"La sección de casino es uno de los puntos fuertes de 888Starz. El sitio ofrece una amplia biblioteca de juegos, con miles de tragamonedas, juegos en vivo de proveedores reconocidos y juegos rápidos. El catálogo incluye éxitos populares, así como las categorías «New Games» y «Top», que facilitan la navegación entre tanto contenido."}',
             'value_fr' => '{"0":"La section casino est l’un des points forts de 888Starz. Le site propose une vaste bibliothèque de jeux, comprenant des milliers de machines à sous, des jeux en direct de fournisseurs réputés et des jeux rapides. Le catalogue inclut des succès populaires ainsi que les catégories « New Games » et « Top », ce qui facilite la navigation dans l’abondance de contenu."}',
             'value_pt' => '{"0":"A seção de cassino é um dos pontos fortes da 888Starz. O site oferece uma vasta biblioteca de jogos, com milhares de slots, jogos ao vivo de provedores renomados e jogos rápidos. O catálogo conta com sucessos populares, além das categorias “New Games” e “Top”, que ajudam a navegar com mais facilidade entre tanto conteúdo."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live rooms include the standard set of games such as roulette, blackjack, baccarat, and live poker. It’s worth noting that all of this is also available in the mobile version. For players who value a wide variety of slots and live content, 888Starz is definitely a solid choice that can meet all expectations."}',
             'value_es' => '{"0":"Las salas en vivo incluyen el conjunto estándar de juegos como la ruleta, el blackjack, el baccarat y el póker en vivo. Cabe destacar que todo esto también está disponible en la versión móvil. Para los jugadores que valoran la variedad de tragamonedas y contenido en vivo, 888Starz es sin duda una opción sólida que puede satisfacer todas las necesidades."}',
             'value_fr' => '{"0":"Les salles en direct comprennent l’ensemble standard de jeux comme la roulette, le blackjack, le baccarat et le poker en direct. Il est important de noter que tout cela est également disponible en version mobile. Pour les joueurs qui apprécient la diversité des machines à sous et du contenu live, 888Starz est clairement une option capable de répondre à toutes les attentes."}',
             'value_pt' => '{"0":"As salas ao vivo incluem o conjunto padrão de jogos, como roleta, blackjack, bacará e pôquer ao vivo. Vale destacar que tudo isso também está disponível na versão móvel. Para os jogadores que valorizam a variedade de slots e conteúdo ao vivo, a 888Starz é sem dúvida uma escolha sólida que pode atender a todas as expectativas."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers fairly high odds, especially on top events. The platform sometimes provides boosted odds on specific events or markets, giving players the opportunity to find extra value."}',
             'value_es' => '{"0":"888Starz ofrece cuotas bastante altas, especialmente en los eventos más destacados. La plataforma a veces propone cuotas mejoradas en determinados mercados o partidos, lo que permite encontrar oportunidades ventajosas."}',
             'value_fr' => '{"0":"888Starz propose des cotes assez élevées, en particulier sur les grands événements. La plateforme offre parfois des cotes améliorées sur certains marchés ou rencontres, ce qui permet de trouver des opportunités avantageuses."}',
             'value_pt' => '{"0":"A 888Starz oferece odds bastante altas, especialmente em grandes eventos. A plataforma às vezes disponibiliza odds aumentadas em determinados mercados ou partidas, permitindo encontrar boas oportunidades."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Minimum deposits and withdrawal limits depend on the region and payment method. The minimum deposit usually starts from $1–3, depending on the chosen method. Withdrawal limits also vary, so it is recommended to check the details in your account, as local regulations and currency restrictions can significantly affect the parameters."}',
             'value_es' => '{"0":"Los depósitos mínimos y los límites de retiro dependen de la región y del método de pago. El depósito mínimo suele empezar desde 1 a 3 dólares, según el método elegido. Los límites máximos de retiro también varían, por lo que se recomienda revisar los detalles en su cuenta, ya que las normativas locales y las restricciones de divisas pueden afectar considerablemente estos parámetros."}',
             'value_fr' => '{"0":"Les dépôts minimums et les plafonds de retrait dépendent de la région et du mode de paiement. Le dépôt minimum commence généralement entre 1 et 3 dollars, selon la méthode choisie. Les limites maximales de retrait varient également, il est donc recommandé de vérifier les détails dans votre compte, car les règles locales et les restrictions monétaires peuvent fortement influencer ces paramètres."}',
             'value_pt' => '{"0":"Os depósitos mínimos e os limites de saque variam conforme a região e o método de pagamento. O depósito mínimo geralmente começa entre 1 e 3 dólares, dependendo da opção escolhida. Os limites máximos de saque também diferem, portanto, é recomendável verificar os detalhes na sua conta, já que regras locais e restrições cambiais podem impactar bastante esses parâmetros."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"It is also important to note that for large winnings, the operator applies identity verification procedures before processing withdrawals, which may take some time. Therefore, for high-stakes players, it is advisable to familiarize themselves with the regional limits and rules and complete verification in advance."}',
             'value_es' => '{"0":"También es importante señalar que, en el caso de ganancias elevadas, el operador aplica procedimientos de verificación de identidad antes de procesar los retiros, lo que puede demorar un poco. Por ello, para los apostadores de altas sumas, se aconseja conocer de antemano los límites y reglas regionales y completar la verificación previamente."}',
             'value_fr' => '{"0":"Il est également important de souligner que, pour les gros gains, l’opérateur applique des procédures de vérification d’identité avant le paiement, ce qui peut prendre un certain temps. Ainsi, pour les joueurs misant de fortes sommes, il est conseillé de se familiariser avec les limites et règles régionales et de procéder à la vérification à l’avance."}',
             'value_pt' => '{"0":"Também é importante destacar que, para ganhos elevados, o operador aplica procedimentos de verificação de identidade antes de processar os saques, o que pode levar algum tempo. Assim, para apostadores que movimentam grandes valores, é recomendável conhecer previamente os limites e regras regionais e realizar a verificação antecipadamente."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers a wide range of options for the most popular sports such as football, cricket, basketball, tennis, and esports. For major events, there can be several hundred different markets available, including player performance stats, Asian handicaps, totals, and unique special bets."}',
             'value_es' => '{"0":"888Starz ofrece una amplia variedad de opciones para los deportes más populares como fútbol, críquet, baloncesto, tenis y deportes electrónicos. En los eventos principales, pueden encontrarse varios cientos de mercados diferentes, incluyendo estadísticas individuales de jugadores, hándicaps asiáticos, totales y apuestas especiales poco comunes."}',
             'value_fr' => '{"0":"888Starz propose un large éventail d’options pour les sports les plus populaires comme le football, le cricket, le basketball, le tennis et l’e-sport. Lors des grands événements, on peut trouver plusieurs centaines de marchés différents, incluant les performances individuelles des joueurs, les handicaps asiatiques, les totaux et des paris spéciaux originaux."}',
             'value_pt' => '{"0":"A 888Starz oferece uma ampla gama de opções para os esportes mais populares, como futebol, críquete, basquete, tênis e eSports. Nos grandes eventos, podem estar disponíveis várias centenas de mercados diferentes, incluindo estatísticas individuais de jogadores, handicaps asiáticos, totais e apostas especiais incomuns."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For less prominent leagues, the number of markets is usually reduced. The platform also regularly adds new types of events, such as virtual sports and TV games. If you enjoy building complex bet slips and exploring interesting markets, 888Starz provides plenty of opportunities."}',
             'value_es' => '{"0":"En las ligas menos reconocidas, la cantidad de mercados suele reducirse. La plataforma también agrega regularmente nuevos tipos de eventos, como deportes virtuales y juegos de TV. Si disfrutas crear boletos de apuestas complejos y buscar mercados interesantes, 888Starz ofrece bastantes posibilidades."}',
             'value_fr' => '{"0":"Pour les ligues moins médiatisées, le nombre de marchés est généralement réduit. La plateforme ajoute régulièrement de nouveaux types d’événements, tels que le sport virtuel et les jeux TV. Si vous aimez construire des paris combinés complexes et explorer des marchés variés, 888Starz offre de nombreuses possibilités."}',
             'value_pt' => '{"0":"Nas ligas menos conhecidas, o número de mercados geralmente é reduzido. A plataforma também adiciona regularmente novos tipos de eventos, como esportes virtuais e jogos de TV. Se você gosta de montar bilhetes de apostas complexos e explorar mercados interessantes, a 888Starz oferece muitas oportunidades."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live section at 888Starz is quite functional, as the platform offers real-time odds updates, extended statistics, and the ability to place bets quickly during events. Live video streams are also available, but this depends on broadcasting rights and local restrictions."}',
             'value_es' => '{"0":"El segmento en vivo de 888Starz es bastante funcional, ya que la plataforma ofrece actualizaciones de cuotas en tiempo real, estadísticas ampliadas y la posibilidad de apostar rápidamente durante los eventos. También hay transmisiones de video en vivo disponibles, aunque esto depende de los derechos de transmisión y las restricciones locales."}',
             'value_fr' => '{"0":"La section live de 888Starz est assez fonctionnelle, car la plateforme propose des mises à jour des cotes en temps réel, des statistiques détaillées et la possibilité de parier rapidement pendant les événements. Des retransmissions vidéo en direct sont également disponibles, mais cela dépend des droits de diffusion et des restrictions locales."}',
             'value_pt' => '{"0":"O segmento ao vivo da 888Starz é bastante funcional, já que a plataforma oferece atualizações de odds em tempo real, estatísticas detalhadas e a possibilidade de apostar rapidamente durante os eventos. Também estão disponíveis transmissões de vídeo ao vivo, mas isso depende dos direitos de transmissão e das restrições locais."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"If video streaming is not available, the operator compensates with detailed infographics and previews, which help keep track of the action. It’s worth noting that there are useful tools for live bettors, such as cash-out and multi-view. The fast line updates make the section comfortable and convenient for in-play betting."}',
             'value_es' => '{"0":"Si la transmisión de video no está disponible, el operador lo compensa con infografías detalladas y vistas previas, lo que permite seguir de cerca la acción. Vale la pena mencionar que existen herramientas útiles para los apostadores en vivo, como cash-out y multi-view. La rápida actualización de la línea hace que la sección sea cómoda para apostar en directo."}',
             'value_fr' => '{"0":"Si la diffusion vidéo n’est pas disponible, l’opérateur compense par des infographies détaillées et des aperçus, permettant de suivre l’action de près. Il convient également de mentionner la présence d’outils utiles pour les parieurs en direct, comme le cash-out et le multi-view. La mise à jour rapide de la ligne rend cette section confortable pour parier pendant les matchs."}',
             'value_pt' => '{"0":"Se a transmissão de vídeo não estiver disponível, o operador compensa com infográficos detalhados e prévias, o que permite acompanhar a ação de perto. Vale destacar que existem ferramentas úteis para quem aposta ao vivo, como cash-out e multi-view. A atualização rápida da linha torna a seção confortável para apostas durante a partida."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"From a security standpoint, 888Starz operates under a Curaçao license and uses encryption to protect personal data, while also applying player verification procedures for large withdrawals. This is a standard set of measures for international operators."}',
             'value_es' => '{"0":"Desde el punto de vista de la seguridad, 888Starz opera bajo una licencia de Curazao y utiliza encriptación para proteger los datos personales, además de aplicar procedimientos de verificación de jugadores en caso de retiros grandes. Este es un conjunto de medidas estándar para los operadores internacionales."}',
             'value_fr' => '{"0":"Du point de vue de la sécurité, 888Starz opère sous licence de Curaçao et utilise le chiffrement pour protéger les données personnelles, tout en appliquant des procédures de vérification des joueurs lors de retraits importants. Il s’agit d’un ensemble de mesures standard pour les opérateurs internationaux."}',
             'value_pt' => '{"0":"Do ponto de vista da segurança, a 888Starz opera sob licença de Curaçao e utiliza criptografia para proteger os dados pessoais, além de aplicar procedimentos de verificação de jogadores em caso de grandes retiradas. Este é um conjunto de medidas padrão para operadores internacionais."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"On the positive side, the platform has a responsible gaming policy in place. Overall, we recommend testing withdrawals with smaller amounts and completing the identity verification process in advance."}',
             'value_es' => '{"0":"Entre los aspectos positivos se encuentra la existencia de una política de juego responsable. En general, recomendamos probar los retiros con montos pequeños y completar el proceso de verificación de identidad con antelación."}',
             'value_fr' => '{"0":"Parmi les points positifs, on peut souligner la présence d’une politique de jeu responsable. Globalement, nous conseillons de tester les retraits avec de petites sommes et d’effectuer la procédure de vérification d’identité à l’avance."}',
             'value_pt' => '{"0":"Entre os pontos positivos está a existência de uma política de jogo responsável. De modo geral, recomendamos testar os saques com valores menores e realizar previamente o processo de verificação de identidade."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz supports a wide range of payment methods, including VISA and Mastercard cards, e-wallets, and cryptocurrencies. Different options are available depending on the country — for example, some regions favor local services and e-wallet solutions, while others focus on crypto pairs."}',
             'value_es' => '{"0":"888Starz admite una amplia gama de métodos de pago, incluidas tarjetas VISA y Mastercard, monederos electrónicos y criptomonedas. Las opciones disponibles varían según el país; por ejemplo, en algunas regiones predominan los servicios locales y las soluciones de e-wallet, mientras que en otras se enfoca en pares de criptomonedas."}',
             'value_fr' => '{"0":"888Starz prend en charge un large éventail de méthodes de paiement, y compris les cartes VISA et Mastercard, les portefeuilles électroniques et les cryptomonnaies. Les options disponibles varient selon le pays : dans certaines régions, les services locaux et les solutions de e-wallet sont privilégiés, tandis que dans d’autres, l’accent est mis sur les crypto-paires."}',
             'value_pt' => '{"0":"A 888Starz oferece uma ampla gama de métodos de pagamento, incluindo cartões VISA e Mastercard, carteiras eletrônicas e criptomoedas. As opções disponíveis variam conforme o país — por exemplo, em algumas regiões predominam os serviços locais e soluções de e-wallet, enquanto em outras o foco é em pares de criptomoedas."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Deposit processing is usually instant, while withdrawals depend on the method and amount. For instance, e-wallets and cryptocurrencies are often processed faster, sometimes instantly or within a few hours, whereas bank transfers may take several business days."}',
             'value_es' => '{"0":"El procesamiento de depósitos suele ser instantáneo, mientras que los retiros dependen del método y del monto. Por ejemplo, los monederos electrónicos y las criptomonedas a menudo se procesan más rápido, a veces de forma instantánea o en pocas horas, mientras que las transferencias bancarias pueden tardar varios días hábiles."}',
             'value_fr' => '{"0":"Le traitement des dépôts est généralement instantané, tandis que les retraits dépendent de la méthode et du montant. Par exemple, les e-wallets et les cryptomonnaies sont souvent traités plus rapidement, parfois instantanément ou en quelques heures, tandis que les virements bancaires peuvent prendre plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"O processamento de depósitos é geralmente instantâneo, enquanto os saques dependem do método e do valor. Por exemplo, e-wallets e criptomoedas muitas vezes são processados mais rapidamente, às vezes instantaneamente ou em algumas horas, enquanto transferências bancárias podem levar vários dias úteis."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Minimum deposit and withdrawal amounts, as well as maximum limits, vary by region. The minimum deposit can range from a few dollars up to $10. Therefore, it is recommended to check the Payment section in your account in advance and coordinate payment methods with support before making large transactions."}',
             'value_es' => '{"0":"Los montos mínimos de depósito y retiro, así como los límites máximos, dependen de la región. El depósito mínimo puede variar desde unos pocos dólares hasta $10. Por ello, se recomienda revisar la sección de Pagos en su cuenta y coordinar los métodos de pago con el soporte antes de realizar transacciones grandes."}',
             'value_fr' => '{"0":"Les montants minimums pour les dépôts et les retraits, ainsi que les limites maximales, varient selon la région. Le dépôt minimum peut aller de quelques dollars jusqu’à 10 $. Il est donc recommandé de consulter à l’avance la section Paiement de votre compte et de coordonner les méthodes de paiement avec le support avant d’effectuer des transactions importantes."}',
             'value_pt' => '{"0":"Os valores mínimos de depósito e saque, assim como os limites máximos, variam de acordo com a região. O depósito mínimo pode variar de alguns dólares até $10. Portanto, recomenda-se verificar antecipadamente a seção Pagamentos na sua conta e coordenar os métodos de pagamento com o suporte antes de realizar transações de grande valor."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You can contact 888Starz support via live chat on the website, email, and phone, which are listed below."}',
             'value_es' => '{"0":"Puede ponerse en contacto con el soporte de 888Starz a través del chat en vivo en el sitio web, correo electrónico y teléfono, que se indican a continuación."}',
             'value_fr' => '{"0":"Vous pouvez contacter le support 888Starz via le chat en direct sur le site, par e-mail et par téléphone, indiqués ci-dessous."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte da 888Starz através do chat ao vivo no site, e-mail e telefone, que estão listados abaixo."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large casino section",
                                 "1":"High odds on top events",
                                 "2":"Wide range of payment methods",
                                 "3":"Convenient apps and web version",
                                 "4":"Loyalty program"},
                             "1":
                                {"0":"The Curacao license does not provide the same guarantees as European regulators",
                                 "1":"For some regions, live streaming may not be available"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran sección de casino",
                                 "1":"Altas cuotas en los principales eventos",
                                 "2":"Amplia variedad de métodos de pago",
                                 "3":"Aplicaciones y versión web convenientes",
                                 "4":"Programa de lealtad"},
                             "1":
                                {"0":"La licencia de Curazao no ofrece las mismas garantías que los reguladores europeos",
                                 "1":"En algunas regiones, puede no haber transmisión en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grande section casino",
                                 "1":"Cotes élevées sur les événements majeurs",
                                 "2":"Large choix de méthodes de paiement",
                                 "3":"Applications et version web pratiques",
                                 "4":"Programme de fidélité"},
                             "1":
                                {"0":"La licence de Curaçao n’offre pas les mêmes garanties que les régulateurs européens",
                                 "1":"Pour certaines régions, les diffusions en direct peuvent ne pas être disponibles"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande seção de cassino",
                                 "1":"Altas odds em eventos principais",
                                 "2":"Ampla variedade de métodos de pagamento",
                                 "3":"Aplicativos e versão web convenientes",
                                 "4":"Programa de fidelidade"},
                             "1":
                                {"0":"A licença de Curaçao não oferece as mesmas garantias que os reguladores europeus",
                                 "1":"Para algumas regiões, as transmissões ao vivo podem não estar disponíveis"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888Starz"}',
                'value_fr' => '{"0":"FAQ de 888Starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888Starz"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What license does 888Starz have and is it safe to play there?"}',
             'value_es' => '{"0":"¿Qué licencia tiene 888Starz y es seguro jugar allí?"}',
             'value_fr' => '{"0":"Quelle licence possède 888Starz et est-il sûr de jouer sur cette plateforme ?"}',
             'value_pt' => '{"0":"Qual é a licença do 888Starz e é seguro jogar lá?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz operates under a Curacao license and applies standard security measures, including SSL encryption and identity verification."}',
             'value_es' => '{"0":"888Starz opera bajo una licencia de Curazao y aplica medidas de seguridad estándar, incluyendo cifrado SSL y verificación de identidad."}',
             'value_fr' => '{"0":"888Starz fonctionne sous licence de Curaçao et applique des mesures de sécurité standard, y compris le cryptage SSL et la vérification d’identité."}',
             'value_pt' => '{"0":"O 888Starz opera sob licença de Curaçao e aplica medidas de segurança padrão, incluindo criptografia SSL e verificação de identidade."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 39
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Cuánto tardan en procesarse los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido são processados os saques?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 40
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawal times depend on the method: e-wallets and cryptocurrencies are processed within a few hours, while bank transfers can take from one to several business days."}',
             'value_es' => '{"0":"El tiempo de retiro depende del método: las billeteras electrónicas y las criptomonedas se procesan en pocas horas, mientras que las transferencias bancarias pueden tardar de uno a varios días hábiles."}',
             'value_fr' => '{"0":"Le délai de retrait dépend de la méthode : les portefeuilles électroniques et les cryptomonnaies sont traités en quelques heures, tandis que les virements bancaires peuvent prendre de un à plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"O tempo de saque depende do método: carteiras eletrônicas e criptomoedas são processadas em poucas horas, enquanto transferências bancárias podem levar de um a vários dias úteis."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 41
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Are there mobile apps for 888Starz?"}',
             'value_es' => '{"0":"¿Hay aplicaciones móviles de 888Starz?"}',
             'value_fr' => '{"0":"888Starz dispose-t-il d’applications mobiles ?"}',
             'value_pt' => '{"0":"O 888Starz possui aplicativos móveis?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 42
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 888Starz has native apps for Android and iOS, as well as a mobile web version, allowing users to place bets from a smartphone quickly and conveniently."}',
             'value_es' => '{"0":"Sí, 888Starz cuenta con aplicaciones nativas para Android e iOS, así como una versión web móvil, lo que permite realizar apuestas desde el smartphone de forma rápida y cómoda."}',
             'value_fr' => '{"0":"Oui , 888Starz propose des applications natives pour Android et iOS ainsi qu’une version web mobile, permettant de parier rapidement et facilement depuis un smartphone."}',
             'value_pt' => '{"0":"Sim, 888Starz tem aplicativos nativos para Android e iOS, além de uma versão web móvel, permitindo que os usuários façam apostas pelo smartphone de forma rápida e prática."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 43
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What types of gambling games are available in the casino?"}',
             'value_es' => '{"0":"¿Qué tipos de juegos de azar están disponibles en el casino?"}',
             'value_fr' => '{"0":"Quels types de jeux d’argent sont disponibles au casino ?"}',
             'value_pt' => '{"0":"Quais tipos de jogos de azar estão disponíveis no cassino?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 44
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The casino offers thousands of slots, live rooms where you can play roulette, blackjack, baccarat, and table games."}',
             'value_es' => '{"0":"El casino ofrece miles de tragamonedas, salas en vivo donde se puede jugar a la ruleta, blackjack, baccarat y juegos de mesa."}',
             'value_fr' => '{"0":"Le casino propose des milliers de machines à sous, des salons en direct où l’on peut jouer à la roulette, au blackjack, au baccarat et à des jeux de table."}',
             'value_pt' => '{"0":"O cassino oferece milhares de slots, salas ao vivo onde é possível jogar roleta, blackjack, bacará e jogos de mesa."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 45
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What to do if you have issues with verification or withdrawals?"}',
             'value_es' => '{"0":"¿Qué hacer en caso de problemas con la verificación o los retiros?"}',
             'value_fr' => '{"0":"Que faire en cas de problèmes de vérification ou de retrait ?"}',
             'value_pt' => '{"0":"O que fazer em caso de problemas com verificação ou saques?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 46
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"First, contact customer support via the live chat on the website and attach scans/photos of documents that confirm your identity and payment."}',
             'value_es' => '{"0":"Primero, contacte con el servicio de atención al cliente a través del chat en vivo del sitio web y adjunte escaneos/fotos de los documentos que confirmen su identidad y el método de pago."}',
             'value_fr' => '{"0":"Tout d’abord, contactez le support client via le chat en direct sur le site et joignez des scans/photos des documents prouvant votre identité et votre moyen de paiement."}',
             'value_pt' => '{"0":"Primeiro, entre em contato com o suporte ao cliente via chat ao vivo no site e anexe scans/fotos dos documentos que comprovem sua identidade e pagamento."}',
             'order' => 46
            ]
        );
    }
}
