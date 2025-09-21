<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit is a crypto-oriented betting platform that was founded in 2010. The bookmaker positions itself as a site specializing in cryptocurrency payments and focused on user privacy. Registration is often available without mandatory identity verification, and both deposits and withdrawals are carried out in cryptocurrency."}',
             'value_es' => '{"0":"1xBit es una plataforma de apuestas orientada a las criptomonedas que fue fundada en 2010. La casa de apuestas se presenta como un sitio especializado en pagos con criptomonedas y enfocado en la privacidad de los usuarios. El registro suele estar disponible sin verificación de identidad obligatoria, y tanto los depósitos como los retiros se realizan en criptomonedas."}',
             'value_fr' => '{"0":"1xBit est une plateforme de paris axée sur les cryptomonnaies, fondée en 2010. Le bookmaker se présente comme un site spécialisé dans les paiements en cryptomonnaies et axé sur la confidentialité des utilisateurs. L’inscription est souvent possible sans vérification d’identité obligatoire, et les dépôts ainsi que les retraits se font en cryptomonnaies."}',
             'value_pt' => '{"0":"1xBit é uma plataforma de apostas voltada para criptomoedas, fundada em 2010. A casa de apostas se apresenta como um site especializado em pagamentos em criptomoedas e focado na privacidade dos usuários. O registro muitas vezes está disponível sem a verificação obrigatória de identidade, e tanto os depósitos quanto os saques são realizados em criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports a wide range of coins, which is convenient for those working with Bitcoin, Ethereum, and other crypto assets. 1xBit operates under a Curaçao license."}',
             'value_es' => '{"0":"La plataforma admite una amplia variedad de monedas, lo que resulta conveniente para quienes trabajan con Bitcoin, Ethereum y otros criptoactivos. 1xBit opera bajo licencia de Curazao."}',
             'value_fr' => '{"0":"La plateforme prend en charge un large éventail de pièces, ce qui est pratique pour ceux qui utilisent le Bitcoin, l’Ethereum et d’autres actifs numériques. 1xBit fonctionne sous licence de Curaçao."}',
             'value_pt' => '{"0":"A plataforma suporta uma grande variedade de moedas, o que é conveniente para quem trabalha com Bitcoin, Ethereum e outros criptoativos. A 1xBit opera sob licença de Curaçao."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Pre-match betting holds a significant place at 1xBit. Every day, the site offers hundreds, sometimes even thousands, of matches across various sports such as football, basketball, tennis, hockey, and many less popular disciplines like curling, squash, and darts. For eSports enthusiasts, there are plenty of tournaments as well — from CS:GO to Dota 2."}',
             'value_es' => '{"0":"Las apuestas pre-partido tienen un lugar importante en 1xBit. Cada día, el sitio ofrece cientos e incluso miles de partidos en diversos deportes como fútbol, baloncesto, tenis, hockey y muchas disciplinas menos populares como curling, squash y dardos. Para los aficionados a los eSports, también hay numerosos torneos, desde CS:GO hasta Dota 2."}',
             'value_fr' => '{"0":"Les paris avant-match occupent une place importante sur 1xBit. Chaque jour, le site propose des centaines, voire des milliers de matchs dans divers sports tels que le football, le basketball, le tennis, le hockey, ainsi que de nombreuses disciplines moins populaires comme le curling, le squash et le lancer de fléchettes. Pour les amateurs d’eSports, il existe également de nombreux tournois, de CS:GO à Dota 2."}',
             'value_pt' => '{"0":"As apostas pré-jogo ocupam um lugar importante no 1xBit. Todos os dias, o site oferece centenas, às vezes até milhares, de partidas em vários esportes, como futebol, basquete, tênis, hóquei, além de muitas disciplinas menos populares, como curling, squash e dardos. Para os fãs de eSports, há também muitos torneios — de CS:GO a Dota 2."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section interface is designed for convenience. You can quickly filter events by sport, country, or start time. There is also a separate block with the most popular matches, so you won’t have to search long for, say, the Champions League or the NBA Finals."}',
             'value_es' => '{"0":"La interfaz de la sección pre-partido está diseñada para ser cómoda. Puedes filtrar rápidamente los eventos por deporte, país u hora de inicio. También hay un bloque separado con los partidos más populares, por lo que no tendrás que buscar mucho, por ejemplo, la Liga de Campeones o la final de la NBA."}',
             'value_fr' => '{"0":"L’interface de la section avant-match est conçue pour être pratique. Vous pouvez filtrer rapidement les événements par sport, pays ou heure de début. Il existe également un bloc séparé avec les matchs les plus populaires, vous n’aurez donc pas à chercher longtemps, par exemple, la Ligue des Champions ou la finale de la NBA."}',
             'value_pt' => '{"0":"A interface da seção pré-jogo é feita para ser prática. Você pode filtrar rapidamente os eventos por esporte, país ou horário de início. Há também um bloco separado com as partidas mais populares, então você não precisará procurar muito, por exemplo, a Liga dos Campeões ou a final da NBA."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Overall, the 1xBit pre-match section looks modern and quite packed. You can find both standard betting options and more original markets. So if you enjoy analyzing events before they start, this section is definitely for you."}',
             'value_es' => '{"0":"En general, la sección pre-partido de 1xBit se ve moderna y bastante completa. Aquí se pueden encontrar tanto opciones de apuestas estándar como mercados más originales. Así que si te gusta analizar los eventos antes de que comiencen, esta sección es perfecta para ti."}',
             'value_fr' => '{"0":"Dans l’ensemble, la section avant-match de 1xBit apparaît moderne et bien fournie. Vous pouvez y trouver des options de paris classiques ainsi que des marchés plus originaux. Si vous aimez analyser les événements avant leur début, cette section est faite pour vous."}',
             'value_pt' => '{"0":"No geral, a seção pré-jogo do 1xBit parece moderna e bastante completa. É possível encontrar tanto opções de apostas padrão quanto mercados mais originais. Então, se você gosta de analisar os eventos antes do início, esta seção é definitivamente para você."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit casino is a large section with thousands of games from numerous providers. It features slots, table games, live rooms with real dealers, as well as TV games, keno, and poker rooms. The game selection is constantly updated, allowing players to enjoy both popular hits and themed new releases."}',
             'value_es' => '{"0":"El casino de 1xBit es un gran bloque con miles de juegos de numerosos proveedores. Incluye tragamonedas, juegos de mesa, salas en vivo con crupieres reales, así como juegos de TV, keno y salas de póker. La selección de juegos se actualiza constantemente, permitiendo jugar tanto los éxitos populares como las novedades temáticas."}',
             'value_fr' => '{"0":"Le casino 1xBit est un vaste espace regroupant des milliers de jeux provenant de nombreux fournisseurs. On y trouve des machines à sous, des jeux de table, des salles en direct avec de vrais croupiers, ainsi que des jeux TV, du keno et des salles de poker. La sélection de jeux est constamment mise à jour, permettant de jouer aussi bien aux hits populaires qu’aux nouveautés thématiques."}',
             'value_pt' => '{"0":"O cassino do 1xBit é uma grande seção com milhares de jogos de diversos provedores. Ele oferece slots, jogos de mesa, salas ao vivo com dealers reais, além de jogos de TV, keno e salas de pôquer. A seleção de jogos é constantemente atualizada, permitindo jogar tanto os sucessos populares quanto as novidades temáticas."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform also focuses on live games from major providers, where you can play roulette, blackjack, or game shows with real dealers. If you value variety and a wide selection of slots, 1xBit is an interesting choice, offering a large game library suitable for both new and experienced players."}',
             'value_es' => '{"0":"La plataforma también se centra en los juegos en vivo de grandes proveedores, donde se puede jugar a la ruleta, blackjack o shows con crupieres reales. Si valoras la variedad y la amplitud de tragamonedas, 1xBit es una opción interesante, ya que ofrece una gran biblioteca de juegos adecuada tanto para jugadores nuevos como experimentados."}',
             'value_fr' => '{"0":"La plateforme met également l’accent sur les jeux en direct proposés par de grands fournisseurs, où il est possible de jouer à la roulette, au blackjack ou à des jeux télévisés avec de vrais croupiers. Si vous appréciez le choix et la diversité des machines à sous, 1xBit est un choix intéressant grâce à sa vaste bibliothèque de jeux adaptée aux joueurs débutants comme aux plus expérimentés."}',
             'value_pt' => '{"0":"A plataforma também dá destaque aos jogos ao vivo de grandes provedores, onde é possível jogar roleta, blackjack ou game shows com dealers reais. Se você valoriza variedade e uma ampla seleção de slots, o 1xBit é uma escolha interessante, oferecendo uma grande biblioteca de jogos adequada tanto para jogadores novos quanto para experientes."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The Odds and Limits section at 1xBit deserves special attention, as odds often become a decisive factor when choosing a bookmaker. Compared to other international platforms, 1xBit offers quite favorable quotations. For example, on popular football matches in top championships, odds for the favorite can reach 1.90–1.95."}',
             'value_es' => '{"0":"La sección de Cuotas y Límites en 1xBit merece especial atención, ya que las cuotas a menudo se convierten en un factor decisivo al elegir un corredor. En comparación con otras plataformas internacionales, 1xBit ofrece cotizaciones bastante favorables. Por ejemplo, en partidos de fútbol populares de los principales campeonatos, las cuotas para el favorito pueden alcanzar 1,90–1,95."}',
             'value_fr' => '{"0":"La section Cotes et Limites de 1xBit mérite une attention particulière, car les cotes deviennent souvent un facteur décisif lors du choix d’un bookmaker. Comparé à d’autres plateformes internationales, 1xBit propose des cotations assez avantageuses. Par exemple, sur les matchs de football populaires des principaux championnats, les cotes pour le favori peuvent atteindre 1,90–1,95."}',
             'value_pt' => '{"0":"A seção de Odds e Limites no 1xBit merece atenção especial, pois as odds frequentemente se tornam um fator decisivo na escolha de uma casa de apostas. Comparado a outras plataformas internacionais, o 1xBit oferece cotações bastante favoráveis. Por exemplo, em partidas populares de futebol de campeonatos principais, as odds para o favorito podem chegar a 1,90–1,95."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Another interesting point is the odds on underdogs. In tennis or basketball, the odds also remain above the market average, especially in live mode. The minimum deposit starts from 1 mBTC, which is considered a standard lower threshold for most coins. The minimum bet on sports events is also small — about 0.1 mBTC, making the game accessible even for those not ready to risk large sums."}',
             'value_es' => '{"0":"Otro punto interesante son las cuotas para los desfavorecidos. En tenis o baloncesto, las cuotas también se mantienen por encima del promedio del mercado, especialmente en modo en vivo. El depósito mínimo comienza desde 1 mBTC, considerado un umbral estándar para la mayoría de las criptomonedas. La apuesta mínima en eventos deportivos también es pequeña, aproximadamente 0,1 mBTC, lo que hace que el juego sea accesible incluso para quienes no desean arriesgar grandes sumas."}',
             'value_fr' => '{"0":"Un autre point intéressant concerne les cotes pour les outsiders. Au tennis ou au basket-ball, les cotes restent également supérieures à la moyenne du marché, surtout en mode live. Le dépôt minimum commence à 1 mBTC, ce qui est considéré comme un seuil inférieur standard pour la plupart des cryptomonnaies. La mise minimale sur les événements sportifs est également faible — environ 0,1 mBTC, rendant le jeu accessible même à ceux qui ne souhaitent pas risquer de grosses sommes."}',
             'value_pt' => '{"0":"Outro ponto interessante são as odds para os azarões. No tênis ou basquete, as odds também se mantêm acima da média do mercado, especialmente no modo ao vivo. O depósito mínimo começa a partir de 1 mBTC, considerado um limite inferior padrão para a maioria das criptomoedas. A aposta mínima em eventos esportivos também é baixa — cerca de 0,1 mBTC, tornando o jogo acessível mesmo para quem não quer arriscar grandes quantias."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Maximum withdrawal limits are not clearly specified by the company, and restrictions are either absent or set at a very high level, especially for VIP players. For example, the maximum withdrawal in Bitcoin can reach 9,500 mBTC per transaction."}',
             'value_es' => '{"0":"Los límites máximos de retiro no están claramente especificados por la empresa y las restricciones o bien no existen o se establecen a un nivel muy alto, especialmente para los jugadores VIP. Por ejemplo, el retiro máximo en Bitcoin puede alcanzar 9.500 mBTC por transacción."}',
             'value_fr' => '{"0":"Les limites maximales de retrait ne sont pas clairement indiquées par la société, et les restrictions sont soit absentes, soit fixées à un niveau très élevé, notamment pour les joueurs VIP. Par exemple, le retrait maximal en Bitcoin peut atteindre 9 500 mBTC par transaction."}',
             'value_pt' => '{"0":"Os limites máximos de saque não são claramente especificados pela empresa, e as restrições são ou inexistentes ou definidas em nível muito alto, especialmente para jogadores VIP. Por exemplo, o saque máximo em Bitcoin pode chegar a 9.500 mBTC por transação."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"When you enter the betting section on 1xBit, you immediately notice how many options are available to the player. It’s not limited to standard bets on the winner or totals. For football matches, you can bet not only on the score or total goals, but also on the number of yellow cards, who will take the first corner, or even whether a goal will be scored from a penalty. For basketball games, there are opportunities to bet on overall and individual totals, quarter results, or even statistics of specific players."}',
             'value_es' => '{"0":"Al ingresar a la sección de apuestas en 1xBit, se nota de inmediato la gran cantidad de opciones disponibles para el jugador. No se limita solo a las apuestas estándar sobre el ganador o los totales. En los partidos de fútbol, se puede apostar no solo al marcador o al número de goles, sino también al número de tarjetas amarillas, quién realizará el primer córner o incluso si se marcará un gol de penalti. En los partidos de baloncesto, existen oportunidades para apostar a totales generales e individuales, resultados de cuartos o incluso estadísticas de jugadores específicos."}',
             'value_fr' => '{"0":"Lorsque vous entrez dans la section paris sur 1xBit, vous remarquez immédiatement le grand nombre d’options disponibles pour le joueur. Ce n’est pas limité aux paris standards sur le vainqueur ou les totaux. Pour les matchs de football, vous pouvez parier non seulement sur le score ou le nombre de buts, mais aussi sur le nombre de cartons jaunes, qui tirera le premier corner, ou même si un but sera marqué sur penalty. Pour les matchs de basketball, il est possible de parier sur les totaux généraux et individuels, les résultats des quarts-temps ou même sur les statistiques d’un joueur précis."}',
             'value_pt' => '{"0":"Ao entrar na seção de apostas do 1xBit, você percebe imediatamente quantas opções estão disponíveis para o jogador. Não se limita apenas às apostas padrão sobre o vencedor ou totais. Nos jogos de futebol, é possível apostar não apenas no placar ou no número de gols, mas também no número de cartões amarelos, quem fará o primeiro escanteio ou mesmo se haverá um gol de pênalti. Nos jogos de basquete, há oportunidades de apostar em totais gerais e individuais, resultados de quartos ou até mesmo nas estatísticas de jogadores específicos."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Esports also deserves a separate mention. Here, the number of markets is no less than in traditional sports, which is important because many bookmakers still offer a limited selection in this category. For a major CS:GO tournament, you can find markets on the exact map score, the number of rounds, and the first kill in the match."}',
             'value_es' => '{"0":"Los deportes electrónicos merecen una mención aparte. Aquí, la cantidad de mercados no es menor que en los deportes tradicionales, lo cual es importante, porque muchos corredores aún ofrecen una selección limitada en esta categoría. En un gran torneo de CS:GO, se pueden encontrar mercados sobre el marcador exacto del mapa, el número de rondas y la primera baja del partido."}',
             'value_fr' => '{"0":"L’esport mérite également une mention particulière. Ici, le nombre de marchés n’est pas inférieur à celui des sports traditionnels, ce qui est important car de nombreux bookmakers offrent encore une sélection limitée dans cette catégorie. Pour un grand tournoi de CS:GO, vous pouvez trouver des marchés sur le score exact de la carte, le nombre de rounds et le premier kill du match."}',
             'value_pt' => '{"0":"Os esportes eletrônicos merecem uma menção especial. Aqui, o número de mercados não é menor do que nos esportes tradicionais, o que é importante, pois muitos sites de apostas ainda oferecem uma seleção limitada nesta categoria. Em um grande torneio de CS:GO, você pode encontrar mercados sobre o placar exato do mapa, o número de rounds e a primeira eliminação da partida."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The live betting format at 1xBit is designed so that players can react as quickly as possible to events happening right now. During the game, odds are updated instantly, allowing you to catch favorable moments. For example, in football matches, if the favorite concedes a goal in the first minutes, you can take advantage of significantly higher odds on their victory than before the match started."}',
             'value_es' => '{"0":"El formato de apuestas en vivo en 1xBit está diseñado para que los jugadores puedan reaccionar lo más rápido posible a los eventos que ocurren en tiempo real. Durante el juego, las cuotas se actualizan al instante, lo que permite aprovechar momentos favorables. Por ejemplo, en los partidos de fútbol, si el favorito encaja un gol en los primeros minutos, se pueden aprovechar cuotas significativamente más altas para su victoria que antes del inicio del partido."}',
             'value_fr' => '{"0":"Le format de paris en direct sur 1xBit est conçu pour que les joueurs puissent réagir le plus rapidement possible aux événements qui se déroulent en temps réel. Pendant le jeu, les cotes sont mises à jour instantanément, ce qui permet de saisir les moments avantageux. Par exemple, dans les matchs de football, si le favori encaisse un but dans les premières minutes, il est possible de profiter de cotes nettement plus élevées pour sa victoire qu’avant le début du match."}',
             'value_pt' => '{"0":"O formato de apostas ao vivo no 1xBit foi criado para que os jogadores possam reagir o mais rápido possível aos eventos que estão acontecendo em tempo real. Durante o jogo, as odds são atualizadas instantaneamente, permitindo aproveitar momentos favoráveis. Por exemplo, em partidas de futebol, se o favorito sofrer um gol nos primeiros minutos, você pode aproveitar odds significativamente mais altas para sua vitória do que antes do início do jogo."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"There are fewer live streams on 1xBit compared to major international brands. However, detailed statistics, graphic representations, and infographics help you stay on top of the game. Even without video, you can assess the flow of events and place bets in real time. For many users, this is perfectly sufficient, especially when playing on a phone, where the graphics can sometimes even be more convenient than video."}',
             'value_es' => '{"0":"Hay menos transmisiones en vivo en 1xBit en comparación con las grandes marcas internacionales. Sin embargo, las estadísticas detalladas, las representaciones gráficas y las infografías ayudan a seguir el ritmo del juego. Incluso sin video, se puede evaluar el desarrollo de los eventos y hacer apuestas en tiempo real. Para muchos usuarios, esto es más que suficiente, especialmente al jugar desde el móvil, donde la representación gráfica a veces resulta incluso más cómoda que el video."}',
             'value_fr' => '{"0":"Il y a moins de diffusions en direct sur 1xBit que sur les grandes marques internationales. Cependant, les statistiques détaillées, les représentations graphiques et les infographies aident à suivre le déroulement du jeu. Même sans vidéo, on peut évaluer le cours des événements et placer des paris en temps réel. Pour de nombreux utilisateurs, cela suffit amplement, surtout lorsqu’on joue sur mobile, où les graphiques peuvent parfois être plus pratiques que la vidéo."}',
             'value_pt' => '{"0":"Existem menos transmissões ao vivo no 1xBit em comparação com grandes marcas internacionais. No entanto, estatísticas detalhadas, representações gráficas e infográficos ajudam a acompanhar o andamento da partida. Mesmo sem vídeo, é possível avaliar o desenrolar dos eventos e fazer apostas em tempo real. Para muitos usuários, isso é totalmente suficiente, especialmente ao jogar pelo celular, onde os gráficos às vezes são até mais práticos que o vídeo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit positions itself as a service with a strong focus on player privacy. Transactions are conducted in cryptocurrency without mandatory identity verification, which appeals to those who value privacy. As mentioned earlier, the bookmaker operates under a Curaçao license, allowing it to function on the international market, but it is not equivalent to strict European licenses."}',
             'value_es' => '{"0":"1xBit se presenta como un servicio con un fuerte enfoque en la privacidad de los jugadores. Las transacciones se realizan en criptomonedas sin verificación obligatoria de identidad, lo que atrae a quienes valoran la privacidad. Como se mencionó anteriormente, el operador cuenta con licencia de Curazao, lo que le permite operar en el mercado internacional, aunque no equivale a las estrictas licencias europeas."}',
             'value_fr' => '{"0":"1xBit se positionne comme un service mettant fortement l’accent sur la confidentialité des joueurs. Les opérations se font en cryptomonnaie sans vérification d’identité obligatoire, ce qui plaît à ceux qui tiennent à leur vie privée. Comme mentionné précédemment, le bookmaker opère sous licence de Curaçao, ce qui lui permet de fonctionner sur le marché international, mais ce n’est pas équivalent aux licences européennes strictes."}',
             'value_pt' => '{"0":"1xBit se posiciona como um serviço com forte ênfase na privacidade dos jogadores. As transações são feitas em criptomoedas sem verificação de identidade obrigatória, o que atrai quem valoriza a privacidade. Como mencionado anteriormente, a casa opera com licença de Curaçao, permitindo atuar no mercado internacional, mas não é equivalente às rigorosas licenças europeias."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"We recommend using additional security measures, enabling two-factor authentication in the settings to ensure that your account and funds are reliably protected."}',
             'value_es' => '{"0":"Recomendamos utilizar medidas de seguridad adicionales, activando la autenticación de dos factores en la configuración para garantizar que su cuenta y fondos estén protegidos de manera confiable."}',
             'value_fr' => '{"0":"Nous recommandons d’utiliser des mesures de sécurité supplémentaires, comme l’activation de l’authentification à deux facteurs dans les paramètres, afin que votre compte et vos fonds soient protégés de manière fiable."}',
             'value_pt' => '{"0":"Recomendamos o uso de medidas de segurança adicionais, ativando a autenticação de dois fatores nas configurações para garantir que sua conta e seus fundos estejam protegidos de forma confiável."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The main feature of 1xBit in terms of payments is its focus on cryptocurrencies. The platform supports dozens of coins such as Bitcoin, Ethereum, Monero, and Zcash. If you don’t have cryptocurrency, 1xBit offers a service to purchase coins through partner exchangers."}',
             'value_es' => '{"0":"La característica principal de 1xBit en la parte de pagos es su enfoque en las criptomonedas. La plataforma admite decenas de monedas como Bitcoin, Ethereum, Monero y Zcash. Si no dispones de criptomonedas, 1xBit ofrece un servicio para comprar monedas a través de exchangers asociados."}',
             'value_fr' => '{"0":"La principale particularité de 1xBit dans la partie paiement est son orientation vers les cryptomonnaies. La plateforme prend en charge des dizaines de devises telles que Bitcoin, Ethereum, Monero et Zcash. Si vous ne possédez pas de cryptomonnaie, 1xBit propose un service d’achat de pièces via des partenaires d’échange."}',
             'value_pt' => '{"0":"A principal característica do 1xBit na parte de pagamentos é o foco em criptomoedas. A plataforma suporta dezenas de moedas, como Bitcoin, Ethereum, Monero e Zcash. Se você não possui criptomoeda, o 1xBit oferece um serviço de compra de moedas através de parceiros de câmbio."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Deposits in cryptocurrency are often credited instantly. Withdrawal times depend on the chosen coin and the current network load. It is also worth noting that different crypto methods may have limits on minimum deposits and withdrawals, as well as varying fees."}',
             'value_es' => '{"0":"Los depósitos en criptomonedas suelen acreditarse de manera instantánea. El tiempo de retiro depende de la moneda elegida y de la carga actual de la red. También vale la pena recordar que los distintos métodos cripto pueden tener límites mínimos de depósito y retiro, así como comisiones diferentes."}',
             'value_fr' => '{"0":"Les dépôts en cryptomonnaie sont souvent crédités instantanément. Le temps de retrait dépend de la monnaie choisie et de la charge actuelle du réseau. Il convient également de noter que les différents moyens crypto peuvent avoir des limites sur les dépôts et retraits minimums, ainsi que des frais variables."}',
             'value_pt' => '{"0":"Os depósitos em criptomoedas são frequentemente creditados instantaneamente. O tempo de saque depende da moeda escolhida e da carga atual da rede. Também vale lembrar que diferentes métodos cripto podem ter limites mínimos para depósitos e saques, além de taxas variadas."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 32
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"You can contact 1xBit support via the live chat on the website and by email."}',
             'value_es' => '{"0":"Puedes contactar con el soporte de 1xBit a través del chat en vivo en el sitio web y por correo electrónico."}',
             'value_fr' => '{"0":"Vous pouvez contacter le support 1xBit via le chat en direct sur le site et par e-mail."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte do 1xBit através do chat ao vivo no site e por e-mail."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 33
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 34
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Focus on cryptocurrencies",
                                 "1":"Large game library",
                                 "2":"Fast deposits and withdrawals",
                                 "3":"Live features and multi-view for in-play bets"},
                             "1":
                                {"0":"In some countries, video streams are not available",
                                 "1":"For large payouts, identity verification may be required"}
                             }',
             'value_es' => '{"0":
                                {"0":"Enfoque en criptomonedas",
                                 "1":"Amplia biblioteca de juegos",
                                 "2":"Depósitos y retiradas rápidas",
                                 "3":"Funciones en vivo y multivisión para apuestas en directo"},
                             "1":
                                {"0":"En algunos países no están disponibles las transmisiones de video",
                                 "1":"Para pagos grandes, puede ser necesaria la verificación de identidad"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Orientation sur les cryptomonnaies",
                                 "1":"Grande bibliothèque de jeux",
                                 "2":"Dépôts et retraits rapides",
                                 "3":"Fonctionnalités en direct et multi-vision pour les paris en direct"},
                             "1":
                                {"0":"Dans certains pays, les vidéos en direct ne sont pas disponibles",
                                 "1":"Pour les gros paiements, une vérification d\'identité peut être requise"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Foco em criptomoedas",
                                 "1":"Grande biblioteca de jogos",
                                 "2":"Depósitos e saques rápidos",
                                 "3":"Funcionalidades ao vivo e multiview para apostas in-play"},
                             "1":
                                {"0":"Em alguns países, as transmissões de vídeo não estão disponíveis",
                                 "1":"Para grandes pagamentos, pode ser necessária a verificação de identidade"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 35
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 36
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"What currencies are available for deposit and withdrawal?"}',
             'value_es' => '{"0":"¿Qué monedas están disponibles para depósitos y retiros?"}',
             'value_fr' => '{"0":"Quelles devises sont disponibles pour les dépôts et les retraits ?"}',
             'value_pt' => '{"0":"Quais moedas estão disponíveis para depósito e saque?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 37
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit specializes in cryptocurrencies. Popular coins such as Bitcoin, Ethereum, Litecoin, Dogecoin, and many other tokens are supported."}',
             'value_es' => '{"0":"1xBit se especializa en criptomonedas. Se admiten monedas populares como Bitcoin, Ethereum, Litecoin, Dogecoin y muchos otros tokens."}',
             'value_fr' => '{"0":"1xBit se spécialise dans les cryptomonnaies. Les pièces populaires telles que Bitcoin, Ethereum, Litecoin, Dogecoin et de nombreux autres jetons sont prises en charge."}',
             'value_pt' => '{"0":"1xBit é especializado em criptomoedas. São suportadas moedas populares como Bitcoin, Ethereum, Litecoin, Dogecoin e muitos outros tokens."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 38
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is KYC required during registration?"}',
             'value_es' => '{"0":"¿Es necesario realizar KYC durante el registro?"}',
             'value_fr' => '{"0":"Faut-il passer le KYC lors de l’inscription ?"}',
             'value_pt' => '{"0":"É necessário passar pelo KYC durante o registro?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 39
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"At the beginning of registration, verification is not mandatory, but for large withdrawals, 1xBit may request documents to confirm your identity."}',
             'value_es' => '{"0":"Al iniciar el registro, la verificación no es obligatoria, pero para retiros grandes, 1xBit puede solicitar documentos para confirmar tu identidad."}',
             'value_fr' => '{"0":"Au début de l’inscription, la vérification n’est pas obligatoire, mais pour des retraits importants, 1xBit peut demander des documents pour confirmer votre identité."}',
             'value_pt' => '{"0":"No início do registro, a verificação não é obrigatória, mas para grandes saques, a 1xBit pode solicitar documentos para confirmar sua identidade."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 40
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Existe una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 41
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit has a mobile version of the website optimized for smartphones and an Android app."}',
             'value_es' => '{"0":"1xBit cuenta con una versión móvil del sitio web optimizada para smartphones y una aplicación para Android."}',
             'value_fr' => '{"0":"1xBit dispose d’une version mobile du site optimisée pour les smartphones et d’une application Android."}',
             'value_pt' => '{"0":"A 1xBit possui uma versão móvel do site otimizada para smartphones e um aplicativo para Android."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 42
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Are live streams available?"}',
             'value_es' => '{"0":"¿Están disponibles las transmisiones en vivo?"}',
             'value_fr' => '{"0":"Les diffusions en direct sont-elles disponibles ?"}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 43
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1xBit provides live streams for a large number of events, and where video is not available, real-time statistics are provided."}',
             'value_es' => '{"0":"Sí, 1xBit ofrece transmisiones en vivo para una gran cantidad de eventos y, donde no hay video, se proporciona estadística en tiempo real."}',
             'value_fr' => '{"0":"Oui, 1xBit propose des diffusions en direct pour un grand nombre d’événements et, lorsqu’il n’y a pas de vidéo, des statistiques en temps réel sont disponibles."}',
             'value_pt' => '{"0":"Sim, a 1xBit fornece transmissões ao vivo para muitos eventos e, onde não há vídeo, estão disponíveis estatísticas em tempo real."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 44
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use 1xBit?"}',
             'value_es' => '{"0":"¿Es seguro usar 1xBit?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser 1xBit ?"}',
             'value_pt' => '{"0":"É seguro usar o 1xBit?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 45
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform uses standard encryption and security measures and operates under a Curacao license."}',
             'value_es' => '{"0":"La plataforma utiliza medidas estándar de cifrado y seguridad y opera bajo una licencia de Curazao."}',
             'value_fr' => '{"0":"La plateforme utilise des moyens standard de cryptage et de sécurité et fonctionne sous licence de Curaçao."}',
             'value_pt' => '{"0":"A plataforma utiliza medidas padrão de criptografia e segurança e opera sob uma licença de Curaçao."}',
             'order' => 45
            ]
        );
    }
}
