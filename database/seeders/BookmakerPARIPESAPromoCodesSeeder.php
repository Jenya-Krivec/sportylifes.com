<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is an international bookmaker platform that offers a wide range of bonuses and promotions for new and registered players. Paripesa provides opportunities to increase winnings through welcome packages and special offers."}',
             'value_es' => '{"0":"Paripesa es una plataforma de apuestas internacional que ofrece una amplia gama de bonos y promociones para jugadores nuevos y registrados. Paripesa brinda oportunidades para aumentar las ganancias a través de paquetes de bienvenida y ofertas especiales."}',
             'value_fr' => '{"0":"Paripesa est une plateforme de paris internationale qui propose une large gamme de bonus et promotions pour les nouveaux joueurs et les joueurs enregistrés. Paripesa offre des opportunités d’augmenter vos gains grâce à des packages de bienvenue et des offres spéciales."}',
             'value_pt' => '{"0":"Paripesa é uma plataforma de apostas internacional que oferece uma ampla variedade de bônus e promoções para jogadores novos e registrados. Paripesa oferece oportunidades para aumentar os ganhos por meio de pacotes de boas-vindas e ofertas especiais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This review will take a detailed look at the available bonuses, the conditions for claiming and wagering them, as well as answers to frequently asked questions. We will also explain how to increase your first deposit by 100% for free during registration using the promo code: :promocode."}',
             'value_es' => '{"0":"En esta reseña analizaremos detalladamente los bonos disponibles, las condiciones para reclamarlos y apostarlos, así como las respuestas a preguntas frecuentes. También explicaremos cómo aumentar tu primer depósito en un 100% de forma gratuita durante el registro usando el código promocional: :promocode."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons en détail les bonus disponibles, les conditions pour les réclamer et les miser, ainsi que les réponses aux questions fréquentes. Nous expliquerons également comment augmenter gratuitement votre premier dépôt de 100 % lors de l’inscription avec le code promotionnel : :promocode."}',
             'value_pt' => '{"0":"Nesta análise, examinaremos detalhadamente os bônus disponíveis, as condições para resgatá-los e apostá-los, bem como as respostas às perguntas frequentes. Também explicaremos como aumentar gratuitamente seu primeiro depósito em 100% durante o registro usando o código promocional: :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To use a promo code during registration on Paripesa, you need to follow a few simple steps. First, go to the official Paripesa website. Then choose a registration method: by phone number, email, or through social networks."}',
             'value_es' => '{"0":"Para utilizar un código promocional durante el registro en Paripesa, debes seguir algunos pasos sencillos. Primero, visita el sitio web oficial de Paripesa. Luego, elige un método de registro: por número de teléfono, correo electrónico o a través de redes sociales."}',
             'value_fr' => '{"0":"Pour utiliser un code promo lors de l’inscription sur Paripesa, vous devez suivre quelques étapes simples. Tout d’abord, rendez-vous sur le site officiel de Paripesa. Ensuite, choisissez un mode d’inscription : par numéro de téléphone, e-mail ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"Para usar um código promocional durante o registro no Paripesa, você precisa seguir alguns passos simples. Primeiro, acesse o site oficial do Paripesa. Em seguida, escolha um método de registro: por número de telefone, e-mail ou através de redes sociais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"When filling out the registration form, find the field for entering the promo code. Enter the promo code :promocode to activate the bonuses. Also, don’t forget to specify where you will use the bonuses, for sports betting or casino games. After completing the registration and making a deposit of at least $1 for the sports bonus or $9 for the casino bonus, you will be able to use the provided bonuses."}',
             'value_es' => '{"0":"Al completar el formulario de registro, busca el campo para ingresar el código promocional. Ingresa el código promocional :promocode para activar los bonos. Además, no olvides indicar dónde usarás los bonos, si en apuestas deportivas o juegos de casino. Después de completar el registro y realizar un depósito de al menos $1 para el bono deportivo o $9 para el bono de casino, podrás utilizar los bonos proporcionados."}',
             'value_fr' => '{"0":"Lors du remplissage du formulaire d’inscription, trouvez le champ pour entrer le code promo. Entrez le code promo :promocode pour activer les bonus. N’oubliez pas non plus de préciser où vous utiliserez les bonus, pour les paris sportifs ou les jeux de casino. Après avoir terminé l’inscription et effectué un dépôt de 1 $ minimum pour le bonus sportif ou de 9 $ pour le bonus casino, vous pourrez profiter des bonus attribués."}',
             'value_pt' => '{"0":"Ao preencher o formulário de registro, encontre o campo para inserir o código promocional. Insira o código promocional :promocode para ativar os bônus. Além disso, não se esqueça de indicar onde você usará os bônus, para apostas esportivas ou jogos de cassino. Após concluir o registro e fazer um depósito de pelo menos $1 para o bônus esportivo ou $9 para o bônus de cassino, você poderá usar os bônus fornecidos."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Also, note that to withdraw funds, you need to meet the wagering requirements. The wagering conditions for bonuses on Paripesa depend on the type of bonus."}',
             'value_es' => '{"0":"También, ten en cuenta que para retirar fondos debes cumplir con los requisitos de apuesta. Las condiciones de apuesta para los bonos en Paripesa dependen del tipo de bono."}',
             'value_fr' => '{"0":"Notez également que pour retirer des fonds, vous devez remplir les conditions de mise. Les conditions de mise des bonus sur Paripesa dépendent du type de bonus."}',
             'value_pt' => '{"0":"Além disso, observe que para sacar fundos, você precisa cumprir os requisitos de aposta. As condições de aposta para bônus na Paripesa dependem do tipo de bônus."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For sports bets, the bonus must be wagered five times through accumulators with at least three events, where the odds of each event are at least 1.40."}',
             'value_es' => '{"0":"Para apuestas deportivas, el bono debe apostarse cinco veces a través de acumuladores con al menos tres eventos, donde las cuotas de cada evento sean de al menos 1.40."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le bonus doit être misé cinq fois via des paris combinés comportant au moins trois événements, chaque événement ayant des cotes d’au moins 1,40."}',
             'value_pt' => '{"0":"Para apostas esportivas, o bônus deve ser apostado cinco vezes através de acumuladores com pelo menos três eventos, onde as odds de cada evento devem ser de pelo menos 1,40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For casino bonuses, the bonus must be wagered 35 times on slots. Free spins can be used on the Juicy Fruits 27 game. The wagering period is 7 days. Bets must not exceed $4."}',
             'value_es' => '{"0":"Para bonos de casino, el bono debe apostarse 35 veces en tragamonedas. Los giros gratis se pueden usar en el juego Juicy Fruits 27. El período de apuesta es de 7 días. La apuesta no debe exceder los $4."}',
             'value_fr' => '{"0":"Pour les bonus de casino, le bonus doit être misé 35 fois sur les machines à sous. Les tours gratuits peuvent être utilisés sur le jeu Juicy Fruits 27. La période de mise est de 7 jours. Le montant de la mise ne doit pas dépasser 4 $."}',
             'value_pt' => '{"0":"Para bônus de cassino, o bônus deve ser apostado 35 vezes em slots. Os giros grátis podem ser usados no jogo Juicy Fruits 27. O período de aposta é de 7 dias. As apostas não devem exceder $4."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, Paripesa does not offer no-deposit bonuses for new or existing players. However, there are other promotions that may interest you. We recommend checking them out on the official website in the Bonuses section."}',
             'value_es' => '{"0":"Por el momento, Paripesa no ofrece bonos sin depósito para jugadores nuevos o existentes. Sin embargo, existen otras promociones que pueden interesarte. Te recomendamos consultarlas en el sitio web oficial en la sección de Bonos."}',
             'value_fr' => '{"0":"Pour le moment, Paripesa n’offre pas de bonus sans dépôt pour les nouveaux joueurs ni pour les joueurs existants. Cependant, il existe d’autres promotions susceptibles de vous intéresser. Nous vous recommandons de les consulter sur le site officiel dans la section Bonus."}',
             'value_pt' => '{"0":"No momento, a Paripesa não oferece bônus sem depósito para jogadores novos ou existentes. No entanto, existem outras promoções que podem lhe interessar. Recomendamos conferi-las no site oficial, na seção de Bônus."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Paripesa offers various bonuses for existing users. One such offer is a weekly cashback of 3% of the total amount of lost bets. This bonus is credited every Tuesday and is automatically added to the user’s account."}',
             'value_es' => '{"0":"Sí, Paripesa ofrece diversos bonos para usuarios existentes. Una de estas ofertas es un reembolso semanal del 3% del total de apuestas perdidas. Este bono se acredita cada martes y se añade automáticamente a la cuenta del usuario."}',
             'value_fr' => '{"0":"Oui, Paripesa propose divers bonus pour les utilisateurs existants. L’une de ces offres est un cashback hebdomadaire de 3 % du montant total des paris perdus. Ce bonus est crédité chaque mardi et est automatiquement ajouté au compte de l’utilisateur."}',
             'value_pt' => '{"0":"Sim, a Paripesa oferece vários bônus para usuários existentes. Uma dessas ofertas é o cashback semanal de 3% sobre o valor total das apostas perdidas. Este bônus é creditado toda terça-feira e é adicionado automaticamente à conta do usuário."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Another promotion is the «Bonus for a Series of Losing Bets», which allows players to receive bonuses for a sequence of losing bets. Below, we will provide a more detailed overview of some popular promotional offers."}',
             'value_es' => '{"0":"Otra promoción es el «Bono por una Serie de Apuestas Perdedoras», que permite a los jugadores recibir bonos por una secuencia de apuestas perdidas. A continuación, ofreceremos una descripción más detallada de algunas ofertas promocionales populares."}',
             'value_fr' => '{"0":"Une autre promotion est le « Bonus pour une série de paris perdants », qui permet aux joueurs de recevoir des bonus pour une série de paris perdants. Ci-dessous, nous présenterons plus en détail certaines offres promotionnelles populaires."}',
             'value_pt' => '{"0":"Outra promoção é o «Bônus por uma Série de Apostas Perdidas», que permite aos jogadores receber bônus por uma sequência de apostas perdidas. A seguir, apresentaremos uma visão mais detalhada de algumas ofertas promocionais populares."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package"}',
                'value_es' => '{"0":"Paquete de bienvenida"}',
                'value_fr' => '{"0":"Pack de bienvenue"}',
                'value_pt' => '{"0":"Pacote de boas-vindas"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers a welcome package for new users. The sports bonus is 100% up to $300, and the casino bonus is up to $1500 + 150 free spins. To activate the bonus, you need to register on the Paripesa website and make your first deposit. Bonuses are credited after completing these steps and can be used for sports betting or casino games, depending on the type of bonus."}',
             'value_es' => '{"0":"Paripesa ofrece un paquete de bienvenida para nuevos usuarios. El bono deportivo es del 100% hasta $300, y el bono de casino es de hasta $1500 + 150 giros gratis. Para activar el bono, debes registrarte en el sitio web de Paripesa y realizar tu primer depósito. Los bonos se acreditan después de completar estos pasos y pueden utilizarse para apuestas deportivas o juegos de casino, según el tipo de bono."}',
             'value_fr' => '{"0":"Paripesa propose un pack de bienvenue pour les nouveaux utilisateurs. Le bonus sportif est de 100 % jusqu’à 300 $, et le bonus casino est de jusqu’à 1500 $ + 150 tours gratuits. Pour activer le bonus, vous devez vous inscrire sur le site de Paripesa et effectuer votre premier dépôt. Les bonus sont crédités après avoir rempli ces conditions et peuvent être utilisés pour les paris sportifs ou les jeux de casino, selon le type de bonus."}',
             'value_pt' => '{"0":"A Paripesa oferece um pacote de boas-vindas para novos usuários. O bônus esportivo é de 100% até $300, e o bônus de cassino é de até $1500 + 150 rodadas grátis. Para ativar o bônus, é necessário se registrar no site da Paripesa e fazer o primeiro depósito. Os bônus são creditados após cumprir essas etapas e podem ser usados para apostas esportivas ou jogos de cassino, dependendo do tipo de bônus."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Also, note that the bonus amount depends on the deposit size. That means the larger your first deposit, the more bonus funds you will receive."}',
             'value_es' => '{"0":"También ten en cuenta que la cantidad del bono depende del tamaño del depósito. Es decir, cuanto mayor sea tu primer depósito, más fondos de bono recibirás."}',
             'value_fr' => '{"0":"Notez également que le montant du bonus dépend du montant du dépôt. Autrement dit, plus votre premier dépôt est élevé, plus vous recevrez de fonds bonus."}',
             'value_pt' => '{"0":"Além disso, observe que o valor do bônus depende do tamanho do depósito. Ou seja, quanto maior for o seu primeiro depósito, mais fundos de bônus você receberá."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus for a series of losing bets"}',
                'value_es' => '{"0":"Bono por una serie de apuestas perdidas"}',
                'value_fr' => '{"0":"Bonus pour une série de paris perdants"}',
                'value_pt' => '{"0":"Bónus por uma série de apostas perdedoras"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows players to receive bonuses for a series of losing bets. The promotion conditions may vary depending on the bet amount and the number of lost bets. For example, for a series of 20 losing bets, a user can receive a bonus of up to $400."}',
             'value_es' => '{"0":"Esta promoción permite a los jugadores recibir bonos por una serie de apuestas perdedoras. Las condiciones de la promoción pueden variar según el monto de la apuesta y la cantidad de apuestas perdidas. Por ejemplo, por una serie de 20 apuestas perdedoras, un usuario puede recibir un bono de hasta $400."}',
             'value_fr' => '{"0":"Cette promotion permet aux joueurs de recevoir des bonus pour une série de paris perdants. Les conditions de la promotion peuvent varier en fonction du montant des mises et du nombre de paris perdants. Par exemple, pour une série de 20 paris perdants, un utilisateur peut recevoir un bonus pouvant aller jusqu’à 400 $."}',
             'value_pt' => '{"0":"Esta promoção permite que os jogadores recebam bônus por uma série de apostas perdedoras. As condições da promoção podem variar dependendo do valor da aposta e do número de apostas perdedoras. Por exemplo, por uma série de 20 apostas perdedoras, um usuário pode receber um bônus de até $400."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that to participate in the promotion, certain requirements must be met. The odds of bets should not exceed 3, and bets can be placed as singles or accumulators. Accumulators must include different sports and different outcomes."}',
             'value_es' => '{"0":"Es importante señalar que para participar en la promoción se deben cumplir ciertos requisitos. Las cuotas de las apuestas no deben superar 3, y las apuestas se pueden realizar como simples o acumuladas. Los acumuladores deben incluir diferentes deportes y diferentes resultados."}',
             'value_fr' => '{"0":"Il est important de noter que pour participer à la promotion, certaines conditions doivent être respectées. Les cotes des paris ne doivent pas dépasser 3, et les paris peuvent être simples ou combinés. Les combinés doivent inclure différents sports et différents résultats."}',
             'value_pt' => '{"0":"É importante observar que, para participar da promoção, certos requisitos devem ser cumpridos. As odds das apostas não devem exceder 3, e as apostas podem ser simples ou acumuladas. As acumuladas devem incluir diferentes esportes e diferentes resultados."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Bonus"}',
                'value_es' => '{"0":"BONO DE COMBINADA"}',
                'value_fr' => '{"0":"BONUS COMBINÉ"}',
                'value_pt' => '{"0":"BÓNUS DE ACUMULADOR"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers bonuses for accumulator bets. You can select the best and most reliable events, combine them into multiple accumulators in the Line and Live sections, and receive an additional odds boost on your winnings."}',
             'value_es' => '{"0":"Paripesa ofrece bonos por apuestas combinadas. Puedes seleccionar los eventos más confiables y destacados, combinarlos en múltiples acumuladores en las secciones Línea y En Vivo, y recibir un aumento adicional en las cuotas de tus ganancias."}',
             'value_fr' => '{"0":"Paripesa propose des bonus pour les paris combinés. Vous pouvez sélectionner les événements les plus fiables et les meilleurs, les combiner en plusieurs paris combinés dans les sections Ligne et Live, et recevoir un bonus de cote supplémentaire sur vos gains."}',
             'value_pt' => '{"0":"A Paripesa oferece bônus para apostas combinadas. Você pode selecionar os melhores e mais confiáveis eventos, combiná-los em múltiplas acumuladas nas seções Linha e Ao Vivo, e receber um aumento adicional nas odds dos seus ganhos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For example, choosing a specific accumulator can give you a 10% increase in the odds. Promotion conditions may vary, so it is recommended to review the detailed terms on the official Paripesa website."}',
             'value_es' => '{"0":"Por ejemplo, al elegir un acumulador específico, puedes obtener un aumento del 10% en las cuotas. Las condiciones de la promoción pueden variar, por lo que se recomienda revisar los términos detallados en el sitio web oficial de Paripesa."}',
             'value_fr' => '{"0":"Par exemple, en choisissant un pari combiné spécifique, vous pouvez obtenir une augmentation de 10 % des cotes. Les conditions de la promotion peuvent varier, il est donc recommandé de consulter les termes détaillés sur le site officiel de Paripesa."}',
             'value_pt' => '{"0":"Por exemplo, ao escolher uma acumulada específica, você pode receber um aumento de 10% nas odds. As condições da promoção podem variar, portanto, recomenda-se consultar os termos detalhados no site oficial da Paripesa."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Paripesa"}',
                'value_fr' => '{"0":"FAQ de Paripesa"}',
                'value_pt' => '{"0":"Perguntas frequentes do Paripesa"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How to get a registration bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de registro?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Como obter o bônus de registro?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To receive the registration bonus, you need to register on the Paripesa website, make your first deposit, and enter the promo code :promocode during registration."}',
             'value_es' => '{"0":"Para recibir el bono de registro, debes registrarte en el sitio web de Paripesa, realizar tu primer depósito e ingresar el código promocional :promocode durante el registro."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue, vous devez vous inscrire sur le site de Paripesa, effectuer votre premier dépôt et entrer le code promotionnel :promocode lors de l’inscription."}',
             'value_pt' => '{"0":"Para receber o bônus de registro, é necessário se cadastrar no site da Paripesa, fazer o primeiro depósito e inserir o código promocional :promocode durante o registro."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What are the bonus wagering requirements?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta del bono?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise du bonus ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de apostas do bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For sports bets, the bonus must be wagered five times through accumulators with at least three events, where the odds of each event are at least 1.40. For casino bonuses, the bonus must be wagered 35 times on slots."}',
             'value_es' => '{"0":"Para apuestas deportivas, el bono debe apostarse cinco veces mediante acumuladores con al menos tres eventos, donde las cuotas de cada evento sean de al menos 1,40. Para los bonos de casino, el bono debe apostarse 35 veces en tragamonedas."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le bonus doit être misé cinq fois via des paris combinés comportant au moins trois événements, chaque événement ayant des cotes d’au moins 1,40. Pour les bonus de casino, le bonus doit être misé 35 fois sur les machines à sous."}',
             'value_pt' => '{"0":"Para apostas esportivas, o bônus deve ser apostado cinco vezes através de acumuladas com pelo menos três eventos, onde as odds de cada evento devem ser de pelo menos 1,40. Para bônus de cassino, o bônus deve ser apostado 35 vezes em slots."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any no-deposit bonuses?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"No, Paripesa does not offer no-deposit bonuses for new players."}',
             'value_es' => '{"0":"No, Paripesa no ofrece bonos sin depósito para jugadores nuevos."}',
             'value_fr' => '{"0":"Non, Paripesa n’offre pas de bonus sans dépôt pour les nouveaux joueurs."}',
             'value_pt' => '{"0":"Não, a Paripesa não oferece bônus sem depósito para novos jogadores."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How to activate the second deposit bonus?"}',
             'value_es' => '{"0":"¿Cómo activar el bono del segundo depósito?"}',
             'value_fr' => '{"0":"Comment activer le bonus du deuxième dépôt ?"}',
             'value_pt' => '{"0":"Como ativar o bônus do segundo depósito?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Make a deposit after your first deposit and you will automatically receive a 50% bonus."}',
             'value_es' => '{"0":"Realiza un depósito después de tu primer depósito y recibirás automáticamente un bono del 50%."}',
             'value_fr' => '{"0":"Effectuez un dépôt après votre premier dépôt et vous recevrez automatiquement un bonus de 50 %."}',
             'value_pt' => '{"0":"Faça um depósito após o primeiro e você receberá automaticamente um bônus de 50%."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are there bonuses for existing users?"}',
             'value_es' => '{"0":"¿Existen bonos para usuarios existentes?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les utilisateurs existants ?"}',
             'value_pt' => '{"0":"Existem bônus para usuários existentes?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Paripesa offers weekly cashback, deposit bonuses, and VIP programs for active players."}',
             'value_es' => '{"0":"Sí, Paripesa ofrece reembolsos semanales, bonos por depósitos y programas VIP para jugadores activos."}',
             'value_fr' => '{"0":"Oui, Paripesa propose un cashback hebdomadaire, des bonus de dépôt et des programmes VIP pour les joueurs actifs."}',
             'value_pt' => '{"0":"Sim, a Paripesa oferece cashback semanal, bônus em depósitos e programas VIP para jogadores ativos."}',
             'order' => 37
            ]
        );
    }
}
