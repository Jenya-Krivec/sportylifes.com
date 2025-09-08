<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"General Information"}',
                'value_es' => '{"0":"Información General"}',
                'value_fr' => '{"0":"Informations Générales"}',
                'value_pt' => '{"0":"Informações Gerais"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET positions itself as an international betting and online casino operator with a strong focus on South Asian markets, particularly India. The brand has been operating since 2018, combining a sports line, live betting, and a large casino games section."}',
             'value_es' => '{"0":"4RABET se posiciona como un operador internacional de apuestas y casino en línea con un fuerte enfoque en los mercados del sur de Asia, especialmente en India. La marca opera desde 2018 y combina una línea deportiva, apuestas en vivo y una gran sección de juegos de casino."}',
             'value_fr' => '{"0":"4RABET se présente comme un opérateur international de paris et de casino en ligne avec un accent particulier sur les marchés d’Asie du Sud, notamment l’Inde. La marque est active depuis 2018 et combine une offre sportive, des paris en direct et une large section de jeux de casino."}',
             'value_pt' => '{"0":"A 4RABET se posiciona como uma operadora internacional de apostas e cassino online com forte foco nos mercados do sul da Ásia, especialmente a Índia. A marca atua desde 2018 e combina linha esportiva, apostas ao vivo e uma grande seção de jogos de cassino."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker operates under a Curaçao license, which allows it to function in a wide range of countries. 4RABET emphasizes simple registration, mobile applications, and convenient payment methods."}',
             'value_es' => '{"0":"La casa de apuestas opera bajo licencia de Curazao, lo que le permite funcionar en una gran cantidad de países. 4RABET apuesta por la simplicidad en el registro, las aplicaciones móviles y los métodos de pago."}',
             'value_fr' => '{"0":"Le bookmaker opère sous une licence du Curaçao, ce qui lui permet d’exercer dans de nombreux pays. 4RABET met l’accent sur la simplicité de l’inscription, les applications mobiles et les méthodes de paiement."}',
             'value_pt' => '{"0":"A casa de apostas opera sob licença de Curaçao, o que lhe permite atuar em diversos países. A 4RABET aposta na simplicidade do registro, nos aplicativos móveis e nos métodos de pagamento."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Pre-Match Section"}',
                'value_es' => '{"0":"Sección Prepartido"}',
                'value_fr' => '{"0":"Section Prématch"}',
                'value_pt' => '{"0":"Seção Pré-Jogo"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to pre-match at 4RABET, the platform offers a standard set of disciplines — football, cricket, tennis, and basketball. For top events, the platform provides a wide range of markets. You can place bets on classic 1X2, handicaps, and totals, as well as detailed statistics and special markets, such as individual player performances."}',
             'value_es' => '{"0":"En cuanto a la sección pre-partido en 4RABET, la plataforma ofrece un conjunto estándar de disciplinas: fútbol, críquet, tenis y baloncesto. En los eventos más importantes, la casa ofrece una gran variedad de mercados. Se pueden realizar apuestas clásicas 1X2, hándicaps y totales, así como acceder a estadísticas detalladas y mercados especiales, por ejemplo, sobre jugadores individuales."}',
             'value_fr' => '{"0":"En ce qui concerne la section pré-match de 4RABET, on retrouve un ensemble standard de disciplines — football, cricket, tennis et basketball. Lors des événements majeurs, la plateforme propose un grand nombre de marchés. Vous pourrez parier sur les classiques 1X2, les handicaps et les totaux, mais aussi sur des statistiques détaillées et des marchés spéciaux, par exemple concernant des joueurs individuels."}',
             'value_pt' => '{"0":"Quando se fala em pré-jogo na 4RABET, a plataforma reúne um conjunto padrão de modalidades — futebol, críquete, tênis e basquete. Nos grandes eventos, a casa oferece uma ampla variedade de mercados. É possível apostar nos clássicos 1X2, handicaps e totais, além de acessar estatísticas detalhadas e mercados especiais, como desempenho de jogadores individuais."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match section interface is designed for quick event selection and convenient bet slip formation. This will be especially useful for players who enjoy creating accumulators. Overall, this section of 4RABET is quite simple to navigate and will suit most players, particularly cricket fans."}',
             'value_es' => '{"0":"La interfaz de la sección pre-partido está diseñada para una selección rápida de eventos y para facilitar la creación del cupón de apuestas. Esto resulta muy útil para los usuarios que disfrutan armando combinadas. En definitiva, esta sección de 4RABET es sencilla de navegar y se adapta a la mayoría de jugadores, especialmente a los aficionados al críquet."}',
             'value_fr' => '{"0":"L’interface de la section pré-match est conçue pour permettre une sélection rapide des événements et une création simple du coupon de pari. Cela plaira particulièrement aux joueurs qui aiment préparer des combinés. En résumé, cette section de 4RABET est facile à utiliser et conviendra à la plupart des parieurs, en particulier aux amateurs de cricket."}',
             'value_pt' => '{"0":"A interface da seção pré-jogo foi pensada para facilitar a seleção rápida de eventos e a montagem prática do bilhete de apostas. Isso é especialmente útil para quem gosta de criar acumuladores. No geral, esta seção da 4RABET é bastante simples de navegar e atende à maioria dos jogadores, principalmente aos fãs de críquete."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 4RABET is one of the brand’s strongest features. The section includes thousands of slots and hundreds of live games. The total number of slots and games exceeds 2,000, featuring popular titles such as Gates of Olympus, Book of Dead, and Sweet Bonanza."}',
             'value_es' => '{"0":"La sección de casino en 4RABET es uno de los puntos fuertes de la marca. En este apartado se encuentran miles de tragamonedas y cientos de juegos en vivo. El número total de slots y juegos supera los 2.000, incluyendo títulos populares como Gates of Olympus, Book of Dead y Sweet Bonanza."}',
             'value_fr' => '{"0":"La section casino de 4RABET est l’un des atouts majeurs de la marque. Elle réunit des milliers de machines à sous et des centaines de jeux en direct. Le nombre total de slots et de jeux dépasse les 2 000, avec des titres populaires tels que Gates of Olympus, Book of Dead et Sweet Bonanza."}',
             'value_pt' => '{"0":"A seção de cassino da 4RABET é um dos pontos fortes da marca. O espaço reúne milhares de slots e centenas de jogos ao vivo. O número total de slots e jogos ultrapassa 2.000, incluindo títulos populares como Gates of Olympus, Book of Dead e Sweet Bonanza."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The live casino offers roulette, blackjack, baccarat, poker, and interactive options. The site also features «Fast Games» and «New Games» sections, where experimental game formats are presented."}',
             'value_es' => '{"0":"El casino en vivo ofrece ruleta, blackjack, bacará, póker y opciones interactivas. El sitio también dispone de las secciones «Fast Games» y «New Games», donde se presentan variantes experimentales de juegos."}',
             'value_fr' => '{"0":"Le live casino comprend la roulette, le blackjack, le baccarat, le poker ainsi que des options interactives. Le site propose également les sections « Fast Games » et « New Games », où sont regroupées des variantes expérimentales de jeux."}',
             'value_pt' => '{"0":"O cassino ao vivo inclui roleta, blackjack, bacará, pôquer e opções interativas. O site também conta com as seções «Fast Games» e «New Games», onde são reunidas versões experimentais de jogos."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The odds on 4RABET generally meet expectations for an international bookmaker operating in the Asian and Indian markets. On top events, enhanced odds are sometimes offered. For less well-known leagues and markets, the odds may be less favorable."}',
             'value_es' => '{"0":"Las cuotas en 4RABET en general cumplen con las expectativas de un operador internacional que trabaja en los mercados asiático e indio. En los eventos más importantes, a veces se ofrecen cuotas mejoradas. Para ligas y mercados menos conocidos, las cuotas pueden ser menos favorables."}',
             'value_fr' => '{"0":"Les cotes sur 4RABET correspondent globalement aux attentes d’un bookmaker international opérant sur les marchés asiatique et indien. Sur les grands événements, des cotes améliorées sont parfois proposées. Pour les ligues et marchés moins connus, les cotes peuvent être moins avantageuses."}',
             'value_pt' => '{"0":"As odds na 4RABET geralmente correspondem às expectativas de uma casa de apostas internacional que atua nos mercados asiático e indiano. Em grandes eventos, às vezes são oferecidas odds melhoradas. Para ligas e mercados menos conhecidos, as odds podem ser menos vantajosas."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit and withdrawal limits often depend on the country and payment method. For India, for example, the minimum deposit amount starts at $3. Therefore, we recommend checking the regional payment conditions in your account."}',
             'value_es' => '{"0":"El depósito mínimo y los límites de retiro suelen depender del país y del método de pago. En India, por ejemplo, el depósito mínimo comienza a partir de 3 dólares. Por eso recomendamos verificar las condiciones regionales de pago en su cuenta."}',
             'value_fr' => '{"0":"Le dépôt minimum et les limites de retrait dépendent souvent du pays et du moyen de paiement. En Inde, par exemple, le montant minimum de dépôt commence à 3 $. C’est pourquoi nous conseillons de vérifier les conditions de paiement régionales dans votre compte."}',
             'value_pt' => '{"0":"O depósito mínimo e os limites de saque frequentemente dependem do país e do método de pagamento. Na Índia, por exemplo, o valor mínimo de depósito começa a partir de 3 dólares. Por isso, recomendamos verificar as condições regionais de pagamento na sua conta."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET focuses on the disciplines that are popular in its key regions. If you prefer betting on football or cricket matches, you will find dozens, sometimes hundreds of betting options. For such matches, 4RABET offers bets on the number of goals, handicaps, individual player statistics, and bets on the number of corners or strikes."}',
             'value_es' => '{"0":"4RABET se centra en las disciplinas que son populares en sus regiones clave. Si prefieres apostar en partidos de fútbol o cricket, encontrarás docenas, a veces cientos de opciones de apuesta. Para estos partidos, 4RABET ofrece apuestas sobre el número de goles, hándicaps, estadísticas individuales de los jugadores y apuestas sobre el número de córners o strikes."}',
             'value_fr' => '{"0":"4RABET met l’accent sur les disciplines populaires dans ses principales régions. Si vous préférez parier sur des matchs de football ou de cricket, vous trouverez des dizaines, parfois des centaines d’options de paris. Pour ces matchs, 4RABET propose des paris sur le nombre de buts, les handicaps, les statistiques individuelles des joueurs et les paris sur le nombre de corners ou de strikes."}',
             'value_pt' => '{"0":"A 4RABET foca nas disciplinas populares em suas principais regiões. Se você prefere apostar em partidas de futebol ou críquete, encontrará dezenas, às vezes centenas de opções de aposta. Para essas partidas, a 4RABET oferece apostas sobre o número de gols, handicaps, estatísticas individuais dos jogadores e apostas sobre o número de escanteios ou strikes."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For less popular events, the range of betting options is significantly smaller. Additionally, 4RABET provides tools for building accumulators."}',
             'value_es' => '{"0":"En eventos menos populares, el conjunto de opciones de apuesta es significativamente menor. Además, 4RABET proporciona herramientas para construir acumuladores."}',
             'value_fr' => '{"0":"Pour les événements moins populaires, la gamme d’options de paris est nettement plus réduite. De plus, 4RABET propose des outils pour créer des accumulateurs."}',
             'value_pt' => '{"0":"Para eventos menos populares, a variedade de opções de apostas é significativamente menor. Além disso, a 4RABET disponibiliza ferramentas para montar acumuladores."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"On 4RABET’s Live platform, there is extensive game statistics and the ability to place bets during events, with odds updating in real time. There are no live video streams on the site, but the operator often compensates for the lack of video with detailed infographics and frequent statistical updates."}',
             'value_es' => '{"0":"En la plataforma Live de 4RABET hay estadísticas detalladas de los juegos y la posibilidad de realizar apuestas durante los eventos, con cuotas que se actualizan en tiempo real. No hay transmisiones de video en vivo en el sitio, pero el operador suele compensar la ausencia de video con infografías detalladas y actualizaciones frecuentes de estadísticas."}',
             'value_fr' => '{"0":"Sur la plateforme Live de 4RABET, des statistiques détaillées sur les jeux sont disponibles, ainsi que la possibilité de parier pendant les événements, avec des cotes mises à jour en temps réel. Il n’y a pas de diffusions vidéo en direct sur le site, mais l’opérateur compense souvent l’absence de vidéo par des infographies détaillées et des mises à jour fréquentes des statistiques."}',
             'value_pt' => '{"0":"Na plataforma Live da 4RABET, há estatísticas detalhadas dos jogos e a possibilidade de apostar durante os eventos, com odds atualizando em tempo real. Não há transmissões de vídeo ao vivo no site, mas o operador frequentemente compensa a ausência de vídeo com infográficos detalhados e atualizações frequentes das estatísticas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For live betting enthusiasts, cash-out and multi-view features are also available. Overall, 4RABET offers a solid set of tools for a comfortable gaming experience for most players."}',
             'value_es' => '{"0":"Para los aficionados a las apuestas en vivo, también están disponibles las funciones de cash-out y multi-view. En general, 4RABET ofrece un conjunto sólido de herramientas para una experiencia de juego cómoda para la mayoría de los jugadores."}',
             'value_fr' => '{"0":"Pour les amateurs de paris en direct, les fonctionnalités cash-out et multi-view sont également disponibles. Ainsi, 4RABET offre un ensemble d’outils solide pour une expérience de jeu confortable pour la plupart des joueurs."}',
             'value_pt' => '{"0":"Para os entusiastas de apostas ao vivo, os recursos de cash-out e multi-view também estão disponíveis. Assim, a 4RABET oferece um conjunto sólido de ferramentas para uma experiência de jogo confortável para a maioria dos jogadores."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET operates under a Curacao license. SSL encryption and KYC/AML policies are also implemented. You can further enhance your account security by enabling two-factor authentication."}',
             'value_es' => '{"0":"4RABET opera bajo una licencia de Curazao. También se implementa cifrado SSL y políticas KYC/AML. Además, puedes mejorar la seguridad de tu cuenta habilitando la autenticación de dos factores."}',
             'value_fr' => '{"0":"4RABET fonctionne sous licence de Curaçao. Le site utilise également le cryptage SSL et les politiques KYC/AML. Vous pouvez renforcer la sécurité de votre compte en activant l’authentification à deux facteurs."}',
             'value_pt' => '{"0":"A 4RABET opera sob licença de Curaçao. Também são utilizados criptografia SSL e políticas KYC/AML. Você pode aumentar a segurança da sua conta ativando a autenticação de dois fatores."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides tools for temporarily or permanently restricting access to your account. Players can choose a cooling-off period of 24 hours, 7 days, 1 month, or 3 months, or initiate self-exclusion for at least one year. During this time, marketing messages are stopped, and no account activity is possible. To control spending, options to set deposit limits are also available."}',
             'value_es' => '{"0":"La plataforma ofrece herramientas para restringir temporal o permanentemente el acceso a la cuenta. Los jugadores pueden elegir un período de cooling-off de 24 horas, 7 días, 1 mes o 3 meses, o iniciar autoexclusión por al menos un año. Durante este período, se detienen los mensajes de marketing y no es posible realizar ninguna actividad en la cuenta. También están disponibles opciones para establecer límites de depósito y controlar los gastos."}',
             'value_fr' => '{"0":"La plateforme propose des outils pour restreindre temporairement ou définitivement l’accès au compte. Les joueurs peuvent choisir une période de cooling-off de 24 heures, 7 jours, 1 mois ou 3 mois, ou activer l’auto-exclusion pour au moins un an. Pendant cette période, les messages marketing sont suspendus et aucune activité sur le compte n’est possible. Des options permettant de fixer des limites de dépôt sont également disponibles pour contrôler les dépenses."}',
             'value_pt' => '{"0":"A plataforma fornece ferramentas para restringir temporária ou permanentemente o acesso à conta. Os jogadores podem escolher um período de cooling-off de 24 horas, 7 dias, 1 mês ou 3 meses, ou iniciar autoexclusão por no mínimo um ano. Durante esse período, as mensagens de marketing são interrompidas e nenhuma atividade na conta é possível. Para controlar os gastos, também estão disponíveis opções para definir limites de depósito."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET supports a wide range of payment methods. In India, for example, this includes Paytm, IMPS, UPI, and other local payment options. Generally, Mastercard and VISA cards, as well as e-wallets, are also supported."}',
             'value_es' => '{"0":"4RABET admite una amplia variedad de métodos de pago. En India, por ejemplo, se incluyen Paytm, IMPS, UPI y otros métodos de pago locales. En general, también se aceptan tarjetas Mastercard y VISA, así como monederos electrónicos."}',
             'value_fr' => '{"0":"4RABET prend en charge un large éventail de méthodes de paiement. En Inde, par exemple, cela inclut Paytm, IMPS, UPI et d’autres options de paiement locales. En général, les cartes Mastercard et VISA ainsi que les portefeuilles électroniques sont également acceptés."}',
             'value_pt' => '{"0":"A 4RABET oferece uma ampla variedade de métodos de pagamento. Na Índia, por exemplo, isso inclui Paytm, IMPS, UPI e outros métodos de pagamento locais. No geral, cartões Mastercard e VISA, bem como carteiras eletrônicas, também são aceitos."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Minimum deposits, for instance in India, start from $3. Minimum and maximum withdrawal limits also depend on the chosen payment method. E-wallets typically process funds within 24 hours or faster, while bank transactions may take longer. Fees and limits may vary by region, so it is recommended to check the «Payments» section in your regional site version or consult customer support."}',
             'value_es' => '{"0":"Los depósitos mínimos, por ejemplo en India, comienzan desde $3. Los límites mínimos y máximos de retiro también dependen del método de pago elegido. Los monederos electrónicos suelen procesar los fondos dentro de 24 horas o menos, mientras que las operaciones bancarias pueden tardar más. Las comisiones y los límites pueden variar según la región, por lo que se recomienda revisar la sección «Pagos» en la versión regional del sitio o consultar con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Les dépôts minimums, par exemple en Inde, commencent à partir de 3 $. Les limites minimales et maximales de retrait dépendent également du mode de paiement choisi. Les portefeuilles électroniques créditent généralement les fonds sous 24 heures ou moins, tandis que les opérations bancaires peuvent prendre plus de temps. Les frais et limites peuvent varier selon la région, il est donc recommandé de consulter la section « Paiements » sur la version régionale du site ou de contacter le support client."}',
             'value_pt' => '{"0":"Os depósitos mínimos, por exemplo na Índia, começam a partir de $3. Os limites mínimos e máximos para saques também dependem do método de pagamento escolhido. As carteiras eletrônicas normalmente processam os fundos em até 24 horas ou menos, enquanto operações bancárias podem levar mais tempo. Taxas e limites podem variar por região, por isso recomenda-se verificar a seção «Payments» na versão regional do site ou consultar o suporte ao cliente."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can contact 4RABET customer support 24/7 via live chat on the website or by email:"}',
             'value_es' => '{"0":"Puede ponerse en contacto con el servicio de atención al cliente de 4RABET las 24 horas del día, los 7 días de la semana, a través del chat en vivo en el sitio web o por correo electrónico:"}',
             'value_fr' => '{"0":"Vous pouvez contacter le support client de 4RABET 24h/24 et 7j/7 via le chat en direct sur le site ou par e-mail:"}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte ao cliente da 4RABET 24 horas por dia, 7 dias por semana, através do chat ao vivo no site ou por e-mail:"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of casino games",
                                 "1":"Localized payment methods",
                                 "2":"Competitive odds on top events",
                                 "3":"Fast payouts via local services"},
                             "1":
                                {"0":"Low-quality customer support",
                                 "1":"No video streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de juegos de casino",
                                 "1":"Métodos de pago localizados",
                                 "2":"Cuotas competitivas en eventos principales",
                                 "3":"Pagos rápidos a través de servicios locales"},
                             "1":
                                {"0":"Soporte al cliente de baja calidad",
                                 "1":"Sin transmisiones de video"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de jeux de casino",
                                 "1":"Méthodes de paiement localisées",
                                 "2":"Cotes compétitives sur les événements majeurs",
                                 "3":"Paiements rapides via des services locaux"},
                             "1":
                                {"0":"Support client de mauvaise qualité",
                                 "1":"Pas de diffusion vidéo"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla variedade de jogos de cassino",
                                 "1":"Métodos de pagamento localizados",
                                 "2":"Odds competitivas em eventos principais",
                                 "3":"Pagamentos rápidos via serviços locais"},
                             "1":
                                {"0":"Suporte ao cliente de baixa qualidade",
                                 "1":"Sem transmissão de vídeo"}
                             }',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4RABET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4RABET"}',
                'value_fr' => '{"0":"FAQ de 4RABET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4RABET"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What licenses does 4RABET have and is it safe to play?"}',
             'value_es' => '{"0":"¿Qué licencias tiene 4RABET y es seguro jugar?"}',
             'value_fr' => '{"0":"Quelles licences possède 4RABET et est-il sûr de jouer ?"}',
             'value_pt' => '{"0":"Quais licenças 4RABET possui e é seguro jogar?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET operates under a Curacao license, which allows it to work in international markets. This indicates the use of basic security standards."}',
             'value_es' => '{"0":"4RABET opera bajo una licencia de Curazao, lo que le permite trabajar en mercados internacionales. Esto indica la aplicación de estándares básicos de seguridad."}',
             'value_fr' => '{"0":"4RABET fonctionne sous licence de Curaçao, ce qui lui permet d’opérer sur les marchés internationaux. Cela indique l’application de normes de sécurité de base."}',
             'value_pt' => '{"0":"4RABET opera sob uma licença de Curaçao, o que permite atuar em mercados internacionais. Isso indica a aplicação de padrões básicos de segurança."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Which payment methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de pago se aceptan?"}',
             'value_fr' => '{"0":"Quels moyens de paiement sont pris en charge ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento são suportados?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Local methods such as Paytm and IMPS are supported, as well as Mastercard and VISA bank cards and e-wallets."}',
             'value_es' => '{"0":"Se admiten métodos locales como Paytm e IMPS, así como tarjetas bancarias Mastercard y VISA y billeteras electrónicas."}',
             'value_fr' => '{"0":"Les méthodes locales telles que Paytm et IMPS sont prises en charge, ainsi que les cartes bancaires Mastercard et VISA et les portefeuilles électroniques."}',
             'value_pt' => '{"0":"São suportados métodos locais como Paytm e IMPS, além de cartões bancários Mastercard e VISA e carteiras eletrônicas."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 38
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Does 4RABET have mobile apps, and is it worth downloading them?"}',
             'value_es' => '{"0":"¿4RABET tiene aplicaciones móviles y vale la pena descargarlas?"}',
             'value_fr' => '{"0":"4RABET dispose-t-il d’applications mobiles et vaut-il la peine de les télécharger ?"}',
             'value_pt' => '{"0":"O 4RABET possui aplicativos móveis e vale a pena baixá-los?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 39
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 4RABET has a mobile app for Android and a web app for iOS."}',
             'value_es' => '{"0":"Sí, 4RABET cuenta con una aplicación móvil para Android y una aplicación web para iOS."}',
             'value_fr' => '{"0":"Oui, 4RABET propose une application mobile pour Android et une application web pour iOS."}',
             'value_pt' => '{"0":"Sim, o 4RABET tem um aplicativo móvel para Android e um aplicativo web para iOS."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 40
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Which types of bets and markets are best represented on the platform?"}',
             'value_es' => '{"0":"¿Qué tipos de apuestas y mercados están mejor representados en la plataforma?"}',
             'value_fr' => '{"0":"Quels types de paris et de marchés sont les mieux représentés sur la plateforme ?"}',
             'value_pt' => '{"0":"Quais tipos de apostas e mercados estão melhor representados na plataforma?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 41
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Football and cricket matches are the best represented on the 4RABET site."}',
             'value_es' => '{"0":"Los partidos de fútbol y cricket son los mejor representados en el sitio de 4RABET."}',
             'value_fr' => '{"0":"Les matchs de football et de cricket sont les mieux représentés sur le site de 4RABET."}',
             'value_pt' => '{"0":"As partidas de futebol e críquete são as mais bem representadas no site da 4RABET."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 42
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What should you do if you encounter issues with a withdrawal or identity verification?"}',
             'value_es' => '{"0":"¿Qué hacer si surgen problemas con un retiro o la verificación de identidad?"}',
             'value_fr' => '{"0":"Que faire en cas de problème avec un retrait ou la vérification d\'identité ?"}',
             'value_pt' => '{"0":"O que fazer se houver problemas com um saque ou verificação de identidade?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 43
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Contact customer support via live chat on the website or by e-mail. It is also recommended to keep all supporting documents and reference numbers."}',
             'value_es' => '{"0":"Comuníquese con el servicio de atención al cliente a través del chat en vivo en el sitio web o por correo electrónico. También se recomienda conservar todos los documentos de respaldo y los números de referencia."}',
             'value_fr' => '{"0":"Contactez le support client via le chat en direct sur le site ou par e-mail. Il est également conseillé de conserver tous les documents justificatifs et numéros de référence."}',
             'value_pt' => '{"0":"Entre em contato com o suporte ao cliente através do chat ao vivo no site ou por e-mail. Também é recomendável manter todos os documentos de comprovação e números de referência."}',
             'order' => 43
            ]
        );
    }
}
