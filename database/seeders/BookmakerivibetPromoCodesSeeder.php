<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet is a modern international platform for sports betting and casino games, and thanks to a wide variety of bonuses and promotional offers, playing on the site becomes even more exciting and rewarding. New players can claim a first deposit bonus, while regular users have access to weekly promotions, cashback, and a VIP program."}',
             'value_es' => '{"0":"Ivibet es una plataforma internacional moderna para apuestas deportivas y juegos de casino, y gracias a la gran variedad de bonos y ofertas promocionales, jugar en el sitio se vuelve aún más emocionante y rentable. Los nuevos jugadores pueden obtener un bono por el primer depósito, mientras que los usuarios habituales tienen acceso a promociones semanales, reembolsos y un programa VIP."}',
             'value_fr' => '{"0":"Ivibet est une plateforme internationale moderne dédiée aux paris sportifs et aux jeux de casino. Grâce à la diversité de ses bonus et offres promotionnelles, l’expérience de jeu sur le site devient encore plus intéressante et avantageuse. Les nouveaux joueurs peuvent recevoir un bonus sur leur premier dépôt, tandis que les utilisateurs réguliers bénéficient de promotions hebdomadaires, de cashback et d’un programme VIP."}',
             'value_pt' => '{"0":"Ivibet é uma plataforma internacional moderna para apostas esportivas e jogos de cassino, e graças à variedade de bônus e ofertas promocionais, jogar no site torna-se ainda mais emocionante e vantajoso. Novos jogadores podem receber um bônus no primeiro depósito, enquanto os usuários frequentes têm acesso a promoções semanais, cashback e um programa VIP."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain how to use the promo code :promocode, what wagering requirements apply to casino games and sports betting, and we will also highlight the most attractive promotions that allow players to earn additional winnings and rewards."}',
             'value_es' => '{"0":"En esta reseña explicaremos cómo utilizar el código promocional :promocode, cuáles son los requisitos de apuesta aplicables para los juegos de casino y las apuestas deportivas, y también mostraremos las promociones más atractivas que permiten a los usuarios obtener ganancias y recompensas adicionales."}',
             'value_fr' => '{"0":"Dans cet article, nous expliquerons comment utiliser le code promotionnel :promocode, quelles sont les conditions de mise applicables aux jeux de casino et aux paris sportifs, et nous présenterons également les promotions les plus intéressantes permettant aux joueurs d’obtenir des gains et des récompenses supplémentaires."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos como utilizar o código promocional :promocode, quais são os requisitos de aposta aplicáveis para os jogos de cassino e apostas esportivas, e também apresentaremos as promoções mais atrativas que permitem aos usuários obter ganhos e recompensas adicionais."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode, you first need to register. The registration process consists of three steps and does not take much time. All fields must be filled in with accurate information."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode, primero debes registrarte. El proceso de registro consta de tres pasos y no toma mucho tiempo. Todos los campos deben completarse con datos verídicos."}',
             'value_fr' => '{"0":"Pour utiliser le code promotionnel :promocode, vous devez d’abord vous inscrire. L’inscription se fait en trois étapes et ne prend que peu de temps. Tous les champs doivent être remplis avec des informations exactes."}',
             'value_pt' => '{"0":"Para utilizar o código promocional :promocode, é necessário primeiro registrar-se. O processo de registro ocorre em três etapas e não leva muito tempo. Todos os campos devem ser preenchidos com dados corretos."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the first step, in the special field for the promo code, you need to enter :promocode, which will grant you a 100% bonus on your deposit. You should also specify where you intend to use the bonus: for sports betting or for casino games. After completing all steps, you can confirm your registration. Once you make your first deposit, the bonus will be credited to your bonus account."}',
             'value_es' => '{"0":"En el primer paso, en el campo especial para el código promocional, debes ingresar :promocode, lo que te otorgará un bono del 100% sobre tu depósito. También debes indicar dónde deseas usar el bono: en apuestas deportivas o en juegos de casino. Después de completar todos los pasos, podrás confirmar tu registro. Una vez realizado tu primer depósito, el bono se acreditará en tu cuenta de bonos."}',
             'value_fr' => '{"0":"Lors de la première étape, dans le champ prévu pour le code promotionnel, vous devez saisir :promocode, ce qui vous donnera droit à un bonus de 100 % sur votre dépôt. Vous devez également indiquer si vous souhaitez utiliser le bonus pour les paris sportifs ou pour les jeux de casino. Après avoir complété toutes les étapes, vous pourrez confirmer votre inscription. Une fois votre premier dépôt effectué, le bonus sera crédité sur votre compte bonus."}',
             'value_pt' => '{"0":"Na primeira etapa, no campo específico para o código promocional, você deve inserir :promocode, o que lhe garantirá um bônus de 100% sobre o depósito. Também é necessário indicar onde pretende usar o bônus: em apostas esportivas ou em jogos de cassino. Após concluir todas as etapas, poderá confirmar o registro. Depois de realizar o primeiro depósito, o bônus será creditado na sua conta de bônus."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Please note! In order to be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"¡Atención! Para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Attention ! Pour pouvoir retirer les fonds du bonus, il est nécessaire de remplir d’abord les conditions de mise."}',
             'value_pt' => '{"0":"Atenção! Para poder sacar os fundos do bônus, é necessário cumprir primeiro os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"If you have chosen the sports betting bonus, you need to deposit between $5 and $150. The bonus must be wagered 5 times in accumulator bets. Each accumulator must include at least two selections with total odds of 2.0 or higher. The bonus must be wagered within 7 days."}',
             'value_es' => '{"0":"Si eliges el bono para apuestas deportivas, debes realizar un depósito de entre $5 y $150. El bono debe apostarse 5 veces en apuestas combinadas. Cada apuesta combinada debe contener al menos dos selecciones con una cuota total de 2.0 o superior. El bono debe jugarse dentro de un plazo de 7 días."}',
             'value_fr' => '{"0":"Si vous avez choisi le bonus pour les paris sportifs, vous devez effectuer un dépôt compris entre 5 $ et 150 $. Le bonus doit être misé 5 fois sur des paris combinés. Chaque pari combiné doit contenir au moins deux sélections avec une cote totale de 2,0 ou plus. Le bonus doit être misé dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Se você escolheu o bônus para apostas esportivas, deve depositar entre $5 e $150. O bônus deve ser apostado 5 vezes em apostas acumuladas. Cada aposta acumulada deve incluir pelo menos duas seleções com odds totais de 2.0 ou superiores. O bônus deve ser apostado dentro de 7 dias."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"If you have chosen the casino bonus, you need to deposit between $20 and $100. The bonus must be wagered 40 times."}',
             'value_es' => '{"0":"Si eliges el bono para el casino, debes realizar un depósito de entre $20 y $100. El bono debe apostarse 40 veces."}',
             'value_fr' => '{"0":"Si vous avez choisi le bonus de casino, vous devez effectuer un dépôt compris entre 20 $ et 100 $. Le bonus doit être misé 40 fois."}',
             'value_pt' => '{"0":"Se você escolheu o bônus de cassino, deve depositar entre $20 e $100. O bônus deve ser apostado 40 vezes."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet does not have a permanent no-deposit program, but from time to time there are temporary promotions that allow players to receive free spins or bets without making a deposit. Therefore, we recommend visiting the PROMOTIONS section on the company’s official website from time to time."}',
             'value_es' => '{"0":"Ivibet no cuenta con un programa permanente de bonos sin depósito, pero de vez en cuando aparecen promociones temporales que permiten obtener giros gratis o apuestas sin necesidad de recargar la cuenta. Por eso, recomendamos visitar periódicamente la sección PROMOTIONS en el sitio web oficial de la compañía."}',
             'value_fr' => '{"0":"Ivibet ne propose pas de programme permanent de bonus sans dépôt, mais il existe parfois des promotions temporaires qui permettent d’obtenir des tours gratuits ou des paris sans dépôt. Nous vous conseillons donc de consulter régulièrement la section PROMOTIONS sur le site officiel de la société."}',
             'value_pt' => '{"0":"A Ivibet não possui um programa fixo de bônus sem depósito, mas ocasionalmente surgem promoções temporárias que permitem receber rodadas grátis ou apostas sem necessidade de depósito. Por isso, recomendamos visitar de tempos em tempos a seção PROMOTIONS no site oficial da empresa."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet actively supports its regular players through a loyalty program and ongoing promotional offers. For example, you can receive a +50% bonus after making a subsequent deposit."}',
             'value_es' => '{"0":"Ivibet apoya activamente a sus jugadores habituales a través de un programa de fidelidad y ofertas promocionales regulares. Por ejemplo, se puede recibir un bono del +50% tras un nuevo depósito."}',
             'value_fr' => '{"0":"Ivibet soutient activement ses joueurs réguliers grâce à un programme de fidélité et à des offres promotionnelles régulières. Par exemple, il est possible de recevoir un bonus de +50 % après un dépôt supplémentaire."}',
             'value_pt' => '{"0":"Ivibet apoia ativamente os seus jogadores regulares através de um programa de fidelidade e promoções regulares. Por exemplo, é possível receber um bónus de +50% após um depósito subsequente."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, Ivibet runs a VIP program that awards points for bets, which can later be exchanged for cash or free spins. Weekly promotions, such as the Friday Reload, allow you to increase your deposit by 50%. Below, we will take a closer look at some of the most interesting promotions."}',
             'value_es' => '{"0":"Además, Ivibet implementa un programa VIP que otorga puntos por las apuestas, que luego se pueden canjear por dinero o giros gratis. Las promociones semanales, como el Friday Reload, permiten aumentar el depósito en un 50%. A continuación, analizaremos con más detalle algunas de las promociones más interesantes."}',
             'value_fr' => '{"0":"De plus, Ivibet propose un programme VIP qui attribue des points pour les mises, pouvant ensuite être échangés contre de l\'argent ou des tours gratuits. Les promotions hebdomadaires, comme le Friday Reload, permettent d’augmenter le dépôt de 50 %. Ci-dessous, nous examinerons plus en détail certaines des promotions les plus intéressantes."}',
             'value_pt' => '{"0":"Além disso, Ivibet implementa um programa VIP que concede pontos pelas apostas, que podem ser trocados posteriormente por dinheiro ou rodadas grátis. Promoções semanais, como o Friday Reload, permitem aumentar o depósito em 50%. A seguir, detalharemos algumas das promoções mais interessantes."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Fortune Wheel Bonus"}',
                'value_es' => '{"0":"Bono de Ruleta de la suerte"}',
                'value_fr' => '{"0":"Bonus Roue de la Fortune"}',
                'value_pt' => '{"0":"Bónus Roda da Fortuna"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This is a unique offer from Ivibet that allows users to spin the Fortune Wheel after each deposit. With this promotion, you can receive free spins, free bets, or direct cash to your account."}',
             'value_es' => '{"0":"Esta es una oferta única de Ivibet que permite a los usuarios girar la Rueda de la Fortuna después de cada depósito. Con esta promoción, puedes obtener giros gratis, apuestas gratis o dinero directo en tu cuenta."}',
             'value_fr' => '{"0":"Il s\'agit d\'une offre unique d\'Ivibet qui permet aux utilisateurs de tourner la Roue de la Fortune après chaque dépôt. Grâce à cette promotion, vous pouvez obtenir des tours gratuits, des paris gratuits ou de l\'argent directement sur votre compte."}',
             'value_pt' => '{"0":"Esta é uma oferta única da Ivibet que permite aos utilizadores girar a Roda da Fortuna após cada depósito. Com esta promoção, você pode receber rodadas grátis, apostas grátis ou dinheiro direto na sua conta."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To use the offer, select the «Fortune Wheel Bonus» card in the deposit window. Deposit at least 20 USD to receive the Silver Wheel. Deposit at least 100 USD to receive the Gold Wheel. Open the wheel and click «Spin»!"}',
             'value_es' => '{"0":"Para aprovechar la oferta, selecciona la tarjeta «Bono de Ruleta de la suerte» en la ventana de depósito. Deposita al menos 20 USD para recibir la Rueda de Plata. Deposita al menos 100 USD para recibir la Rueda de Oro. ¡Abre la rueda y haz clic en «Girar»!"}',
             'value_fr' => '{"0":"Pour profiter de l\'offre, sélectionnez la carte «Bonus Roue de la Fortune» dans la fenêtre de dépôt. Déposez au moins 20 USD pour obtenir la Roue d’Argent. Déposez au moins 100 USD pour obtenir la Roue d’Or. Ouvrez la roue et cliquez sur «Tourner» !"}',
             'value_pt' => '{"0":"Para usufruir da oferta, selecione o cartão de «Bónus Roda da Fortuna» na janela de depósito. Deposite pelo menos 20 USD para receber a Roda de Prata. Deposite pelo menos 100 USD para receber a Roda de Ouro. Abra a roda e clique em «Girar»!"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Friday Reload"}',
                'value_es' => '{"0":"VIERNES DE RECARGAS"}',
                'value_fr' => '{"0":"Bonus Du Vendredi"}',
                'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This is a weekly promotion for active Ivibet players, allowing them to receive a 50% deposit bonus up to $150 plus 50 free spins over two days. To participate in the promotion, you simply need to make a deposit on Friday, and to receive the 50 free spins, the deposit must be at least $20."}',
             'value_es' => '{"0":"Esta es una promoción semanal para los jugadores activos de Ivibet, que les permite recibir un bono del 50% sobre el depósito hasta $150, además de 50 giros gratis durante dos días. Para participar en la promoción, solo necesitas realizar un depósito el viernes, y para recibir los 50 giros gratis, el depósito debe ser de al menos $20."}',
             'value_fr' => '{"0":"Il s\'agit d\'une promotion hebdomadaire pour les joueurs actifs d\'Ivibet, leur permettant de recevoir un bonus de dépôt de 50 % jusqu\'à 150 $ ainsi que 50 tours gratuits sur deux jours. Pour participer à la promotion, il suffit de déposer un vendredi, et pour recevoir les 50 tours gratuits, le dépôt doit être d\'au moins 20 $."}',
             'value_pt' => '{"0":"Esta é uma promoção semanal para jogadores ativos da Ivibet, permitindo receber um bónus de depósito de 50% até $150, mais 50 rodadas grátis ao longo de dois dias. Para participar da promoção, basta fazer um depósito na sexta-feira, e para receber as 50 rodadas grátis, o depósito deve ser de pelo menos $20."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Keep in mind that winnings from free spins are subject to a 40x wagering requirement."}',
             'value_es' => '{"0":"Ten en cuenta que las ganancias obtenidas con los giros gratis están sujetas a un requisito de apuesta de 40x."}',
             'value_fr' => '{"0":"Veuillez noter que les gains provenant des tours gratuits sont soumis à une exigence de mise de 40x."}',
             'value_pt' => '{"0":"Tenha em mente que os ganhos provenientes das rodadas grátis estão sujeitos a um requisito de aposta de 40x."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Program Casino"}',
                'value_es' => '{"0":"Programa VIP de Casino"}',
                'value_fr' => '{"0":"Programme Vip De ivibet"}',
                'value_pt' => '{"0":"Programa VIP Casino"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet VIP program includes 30 levels, allowing players to accumulate points from casino bets and exchange them for cash rewards or free spins. You automatically become a member of the program after making a deposit."}',
             'value_es' => '{"0":"El programa VIP de Ivibet cuenta con 30 niveles, lo que permite a los jugadores acumular puntos de las apuestas de casino y canjearlos por recompensas en efectivo o giros gratis. Te conviertes automáticamente en miembro del programa después de realizar un depósito."}',
             'value_fr' => '{"0":"Le programme VIP d\'Ivibet comporte 30 niveaux, permettant aux joueurs d\'accumuler des points sur les paris de casino et de les échanger contre des récompenses en argent ou des tours gratuits. Vous devenez automatiquement membre du programme après avoir effectué un dépôt."}',
             'value_pt' => '{"0":"O programa VIP da Ivibet possui 30 níveis, permitindo que os jogadores acumulem pontos de apostas de cassino e os troquem por recompensas em dinheiro ou rodadas grátis. Você se torna automaticamente membro do programa após fazer um depósito."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The maximum potential win within the program reaches $100,000. Levels increase depending on the player\'s activity. All rewards have a 10x wagering requirement. Funds received from exchanging CP for real money are credited with a 5x wagering requirement."}',
             'value_es' => '{"0":"El máximo posible de ganancias dentro del programa alcanza los $100,000. Los niveles aumentan según la actividad del jugador. Todas las recompensas tienen un requisito de apuesta de 10x. Los fondos obtenidos al cambiar CP por dinero real se acreditan con un requisito de apuesta de 5x."}',
             'value_fr' => '{"0":"Le gain potentiel maximum dans le cadre du programme atteint 100 000 $. Les niveaux augmentent en fonction de l\'activité du joueur. Toutes les récompenses sont soumises à une exigence de mise de 10x. Les fonds reçus en échangeant des CP contre de l\'argent réel sont soumis à une exigence de mise de 5x."}',
             'value_pt' => '{"0":"O ganho potencial máximo dentro do programa atinge $100.000. Os níveis aumentam de acordo com a atividade do jogador. Todas as recompensas têm um requisito de aposta de 10x. Os fundos recebidos ao trocar CP por dinheiro real são creditados com um requisito de aposta de 5x."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Ivibet"}',
                'value_fr' => '{"0":"FAQ de Ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Ivibet"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the registration bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de registro?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Como obter o bônus de registro?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"During registration, enter the promo code :promocode in the designated field and make a deposit."}',
             'value_es' => '{"0":"Durante el registro, introduce el código promocional :promocode en el campo correspondiente y realiza un depósito."}',
             'value_fr' => '{"0":"Lors de l\'inscription, saisissez le code promo :promocode dans le champ prévu à cet effet et effectuez un dépôt."}',
             'value_pt' => '{"0":"Durante o registro, insira o código promocional :promocode no campo designado e faça um depósito."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Are there bonuses for existing customers?"}',
             'value_es' => '{"0":"¿Hay bonos para clientes existentes?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les clients existants ?"}',
             'value_pt' => '{"0":"Existem bônus para clientes existentes?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Ivibet offers a variety of promotions for regular users, including loyalty programs and weekly bonuses. You can view the full list in the PROMOTIONS section on the official website."}',
             'value_es' => '{"0":"Sí, Ivibet ofrece diversas promociones para usuarios habituales, incluyendo programas de fidelidad y bonos semanales. Puede consultar la lista completa en la sección PROMOTIONS del sitio web oficial."}',
             'value_fr' => '{"0":"Oui, Ivibet propose diverses promotions pour les utilisateurs réguliers, y compris des programmes de fidélité et des bonus hebdomadaires. Vous pouvez consulter la liste complète dans la section PROMOTIONS sur le site officiel."}',
             'value_pt' => '{"0":"Sim, a Ivibet oferece várias promoções para usuários regulares, incluindo programas de fidelidade e bônus semanais. Você pode ver a lista completa na seção PROMOTIONS no site oficial."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be activated at the same time?"}',
             'value_es' => '{"0":"¿Se pueden activar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on activer plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"É possível ativar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, it is not possible to activate multiple promo codes simultaneously."}',
             'value_es' => '{"0":"No, no es posible activar varios códigos promocionales simultáneamente."}',
             'value_fr' => '{"0":"Non, il n’est pas possible d’activer plusieurs codes promotionnels simultanément."}',
             'value_pt' => '{"0":"Não, não é possível ativar vários códigos promocionais simultaneamente."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to withdraw bonus funds without fully meeting the wagering requirements?"}',
             'value_es' => '{"0":"¿Es posible retirar fondos de bonificación sin cumplir completamente con los requisitos de apuesta?"}',
             'value_fr' => '{"0":"Est-il possible de retirer des fonds bonus sans avoir rempli toutes les conditions de mise ?"}',
             'value_pt' => '{"0":"É possível retirar fundos de bônus sem cumprir totalmente os requisitos de apostas?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, the system automatically blocks this option until all requirements are fulfilled."}',
             'value_es' => '{"0":"No, el sistema bloquea automáticamente esta opción hasta que se cumplan todos los requisitos."}',
             'value_fr' => '{"0":"Non, le système bloque automatiquement cette option jusqu’à ce que toutes les exigences soient remplies."}',
             'value_pt' => '{"0":"Não, o sistema bloqueia automaticamente essa opção até que todos os requisitos sejam cumpridos."}',
             'order' => 35
            ]
        );
    }
}
