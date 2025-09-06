<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is an international betting platform that is actively growing and offers a wide range of bonuses and promotions for its users. The bonus program provides favorable conditions for sports betting and casino gaming."}',
             'value_es' => '{"0":"Mostbet es una plataforma internacional de apuestas que se desarrolla activamente y ofrece una amplia gama de bonos y promociones para sus usuarios. El programa de bonificación brinda condiciones favorables para las apuestas deportivas y los juegos de casino."}',
             'value_fr' => '{"0":"Mostbet est une plateforme de paris internationale en plein développement, qui propose un large éventail de bonus et de promotions à ses utilisateurs. Le programme de bonus offre des conditions avantageuses pour les paris sportifs et les jeux de casino."}',
             'value_pt' => '{"0":"Mostbet é uma plataforma internacional de apostas que está em constante crescimento e oferece uma ampla variedade de bônus e promoções para seus usuários. O programa de bônus proporciona condições vantajosas tanto para apostas esportivas quanto para jogos de cassino."}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain which bonuses are available for new and regular customers, and which promotions are currently active. We will also show you how to use the promo code :promocode, so keep reading to make sure you don’t miss the opportunity to increase your deposit."}',
             'value_es' => '{"0":"En esta reseña explicaremos qué bonos están disponibles para nuevos y habituales clientes, así como qué promociones están activas actualmente. También mostraremos cómo utilizar el código promocional :promocode, así que sigue leyendo para no perder la oportunidad de aumentar tu depósito."}',
             'value_fr' => '{"0":"Dans cette revue, nous expliquerons quels bonus sont disponibles pour les nouveaux et les clients réguliers, ainsi que les promotions actuellement en cours. Nous montrerons également comment utiliser le code promotionnel :promocode, alors continuez à lire afin de ne pas manquer l’opportunité d’augmenter votre dépôt."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos quais bônus estão disponíveis para novos e antigos clientes, além de quais promoções estão ativas no momento. Também mostraremos como usar o código promocional :promocode, então continue lendo para não perder a oportunidade de aumentar o seu depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To use a promo code when registering at Mostbet, you need to visit the official website and then click on the Register button. A registration form will appear, where you can choose one of four methods: one-click registration, by phone, by email, or through social networks."}',
             'value_es' => '{"0":"Para utilizar un código promocional al registrarte en Mostbet, debes ingresar al sitio web oficial y hacer clic en el botón de Registro. Aparecerá un formulario de registro en el que puedes elegir uno de los cuatro métodos: registro en un clic, por teléfono, por correo electrónico o a través de redes sociales."}',
             'value_fr' => '{"0":"Pour utiliser un code promotionnel lors de l’inscription sur Mostbet, vous devez vous rendre sur le site officiel puis cliquer sur le bouton Inscription. Un formulaire apparaîtra, et vous pourrez choisir l’une des quatre méthodes suivantes : inscription en un clic, par téléphone, par e-mail ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"Para usar um código promocional ao se registrar no Mostbet, você deve acessar o site oficial e clicar no botão de Registro. Será exibido um formulário de registro no qual você pode escolher um dos quatro métodos: registro com um clique, por telefone, por e-mail ou através das redes sociais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Next, you need to fill in the standard form and create a secure password. During the registration process, there is a field for entering the promo code, where you should type in the promo code :promocode to receive a 125% bonus on your first deposit and 250 free spins in the casino. You should also indicate where you intend to use the bonuses, either for sports betting or casino games. After funding your account, the bonuses will be credited."}',
             'value_es' => '{"0":"Luego deberás completar el formulario estándar y crear una contraseña segura. Durante el proceso de registro hay un campo para ingresar el código promocional, donde deberás escribir el código :promocode para recibir un bono del 125% en el primer depósito y 250 giros gratis en el casino. También debes indicar dónde quieres usar los bonos, ya sea en apuestas deportivas o juegos de casino. Después de recargar la cuenta, los bonos se acreditarán automáticamente."}',
             'value_fr' => '{"0":"Ensuite, il faut remplir le formulaire standard et créer un mot de passe sécurisé. Pendant l’inscription, un champ est prévu pour saisir le code promotionnel :promocode, ce qui vous permet de bénéficier d’un bonus de 125 % sur le premier dépôt ainsi que de 250 tours gratuits au casino. Vous devez également indiquer si vous souhaitez utiliser les bonus pour les paris sportifs ou les jeux de casino. Après le dépôt, les bonus seront crédités sur votre compte."}',
             'value_pt' => '{"0":"Em seguida, é necessário preencher o formulário padrão e criar uma senha segura. Durante o processo de registro, há um campo para inserir o código promocional, onde você deve digitar o código :promocode para receber um bônus de 125% no primeiro depósito e 250 rodadas grátis no cassino. Também é necessário indicar onde pretende usar os bônus, seja em apostas esportivas ou jogos de cassino. Após o depósito, os bônus serão creditados em sua conta."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw bonus funds, wagering requirements must be met. For sports betting, the bonus must be wagered 5 times the bonus amount with minimum odds of 1.5, while for casino games a 40x wagering requirement applies. Usually, wagering must be completed within 7 to 30 days, depending on the type of bonus."}',
             'value_es' => '{"0":"Para retirar las ganancias del bono es necesario cumplir con los requisitos de apuesta. En apuestas deportivas, el bono debe apostarse 5 veces el importe del bono con una cuota mínima de 1.5, mientras que en el casino se requiere un rollover de 40x. Generalmente, el plazo para cumplir con el requisito de apuesta va de 7 a 30 días, según el tipo de bono."}',
             'value_fr' => '{"0":"Pour retirer les fonds issus des bonus, il est nécessaire de remplir les conditions de mise. Pour les paris sportifs, le bonus doit être misé 5 fois le montant avec une cote minimale de 1.5, tandis que pour le casino, un wagering de 40x est requis. En général, la période pour remplir ces conditions va de 7 à 30 jours selon le type de bonus."}',
             'value_pt' => '{"0":"Para sacar os fundos do bônus, é preciso cumprir os requisitos de aposta. Nas apostas esportivas, o bônus deve ser apostado 5 vezes o valor com uma odd mínima de 1.5, enquanto no cassino é exigido um rollover de 40x. Normalmente, o prazo para cumprir essas condições varia de 7 a 30 dias, dependendo do tipo de bônus."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers no-deposit bonuses that allow new players to start playing without depositing their own funds. To claim this, you need to install the mobile app on your smartphone. For doing so, Mostbet will reward you with 100 free spins."}',
             'value_es' => '{"0":"Mostbet ofrece bonos sin depósito que permiten a los nuevos jugadores comenzar a jugar sin ingresar dinero propio. Para obtenerlo, debes instalar la aplicación móvil en tu smartphone. Al hacerlo, Mostbet te otorgará 100 giros gratis."}',
             'value_fr' => '{"0":"Mostbet propose des bonus sans dépôt qui permettent aux nouveaux joueurs de commencer à jouer sans déposer leurs propres fonds. Pour en bénéficier, il suffit d’installer l’application mobile sur votre smartphone. En contrepartie, Mostbet vous offre 100 tours gratuits."}',
             'value_pt' => '{"0":"A Mostbet oferece bônus sem depósito que permitem aos novos jogadores começarem a jogar sem investir dinheiro próprio. Para isso, é necessário instalar o aplicativo móvel no seu smartphone. Ao fazer isso, a Mostbet concede 100 rodadas grátis."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, on your birthday, Mostbet gives you a free bet. To qualify, you need to have placed bets worth at least $10 during the month preceding your birthday month."}',
             'value_es' => '{"0":"Además, en tu cumpleaños, Mostbet regala una apuesta gratuita. Para acceder a ella, es necesario haber realizado apuestas por un valor mínimo de 10 dólares durante el mes anterior a tu cumpleaños."}',
             'value_fr' => '{"0":"De plus, le jour de votre anniversaire, Mostbet vous offre un pari gratuit. Pour y avoir droit, vous devez avoir placé pour au moins 10 dollars de mises durant le mois précédant votre anniversaire."}',
             'value_pt' => '{"0":"Além disso, no dia do seu aniversário, a Mostbet oferece uma aposta grátis. Para se qualificar, é necessário ter feito apostas de pelo menos 10 dólares durante o mês anterior ao seu aniversário."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Regular Mostbet users also have the opportunity to receive various bonuses. For example, the platform offers weekly deposit bonuses, cashback on lost bets, as well as holiday promotions and special offers for VIP clients."}',
             'value_es' => '{"0":"Los usuarios habituales de Mostbet también tienen la oportunidad de recibir diferentes bonos. Por ejemplo, la plataforma ofrece bonos semanales por recarga, devolución de dinero por apuestas perdidas, así como promociones en días festivos y ofertas especiales para clientes VIP."}',
             'value_fr' => '{"0":"Les utilisateurs réguliers de Mostbet ont également la possibilité de recevoir différents bonus. Par exemple, la plateforme propose des bonus hebdomadaires sur les dépôts, un cashback sur les paris perdus, ainsi que des promotions lors des fêtes et des offres spéciales pour les clients VIP."}',
             'value_pt' => '{"0":"Os usuários regulares da Mostbet também têm a oportunidade de receber vários bônus. Por exemplo, a plataforma oferece bônus semanais de recarga, cashback sobre apostas perdidas, além de promoções em feriados e ofertas especiais para clientes VIP."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is calculated based on the amount of lost bets in the casino or sports betting and is credited every Friday. These bonuses allow players to partially recover their losses and continue playing with greater chances of winning."}',
             'value_es' => '{"0":"El cashback se calcula en función del monto de las apuestas perdidas en el casino o en las apuestas deportivas y se acredita cada viernes. Estos bonos permiten recuperar parcialmente las pérdidas y seguir jugando con más posibilidades de ganar."}',
             'value_fr' => '{"0":"Le cashback est calculé sur le montant des paris perdus au casino ou sur les paris sportifs et est crédité chaque vendredi. Ces bonus permettent de compenser partiellement les pertes et de continuer à jouer avec de meilleures chances de gains."}',
             'value_pt' => '{"0":"O cashback é calculado com base no valor das apostas perdidas no cassino ou nas apostas esportivas e é creditado todas as sextas-feiras. Esses bônus permitem recuperar parcialmente as perdas e continuar jogando com maiores chances de ganhar."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"FIRST DEPOSIT BONUS"}',
                'value_es' => '{"0":"Bono por Primer Depósito"}',
                'value_fr' => '{"0":"Bonus de Premier Dépôt"}',
                'value_pt' => '{"0":"Bônus de Primeiro Depósito"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The First Deposit Bonus promotion allows new players to receive a 125% bonus on their first deposit up to $300. To claim the bonus, you need to register and deposit a minimum of $20. The bonus is automatically credited to your account after the deposit, and its wagering follows the standard conditions for sports betting and casino games."}',
             'value_es' => '{"0":"La promoción First Deposit Bonus permite a los nuevos jugadores obtener un bono del 125% en su primer depósito de hasta $300. Para recibir el bono, es necesario registrarse y realizar un depósito mínimo de $20. El bono se acredita automáticamente en la cuenta después del depósito, y su liberación se realiza según las condiciones estándar para apuestas deportivas y juegos de casino."}',
             'value_fr' => '{"0":"La promotion First Deposit Bonus permet aux nouveaux joueurs de recevoir un bonus de 125 % sur leur premier dépôt jusqu’à 300 $. Pour obtenir le bonus, il faut s’inscrire et effectuer un dépôt minimum de 20 $. Le bonus est automatiquement crédité sur le compte après le dépôt, et son exigence de mise suit les conditions standard pour les paris sportifs et les jeux de casino."}',
             'value_pt' => '{"0":"A promoção First Deposit Bonus permite que novos jogadores recebam um bônus de 125% no primeiro depósito de até $300. Para receber o bônus, é necessário registrar-se e fazer um depósito mínimo de $20. O bônus é creditado automaticamente na conta após o depósito, e o seu requisito de aposta segue as condições padrão para apostas esportivas e jogos de cassino."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Please note that the size of the bonus depends on the deposit amount. In other words, the higher your deposit, the more bonus funds you will receive."}',
             'value_es' => '{"0":"Tenga en cuenta que el monto del bono depende de la cantidad depositada. Es decir, cuanto mayor sea el depósito, más fondos de bono recibirá."}',
             'value_fr' => '{"0":"Veuillez noter que le montant du bonus dépend du dépôt effectué. Autrement dit, plus votre dépôt est élevé, plus vous recevrez de fonds bonus."}',
             'value_pt' => '{"0":"Vale lembrar que o valor do bônus depende do montante do depósito. Ou seja, quanto maior o depósito, mais fundos de bônus você receberá."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"ACCUMULATOR BOOSTER"}',
                'value_es' => '{"0":"Accumulator BOOSTER"}',
                'value_fr' => '{"0":"Accumulator BOOSTER"}',
                'value_pt' => '{"0":"REFORÇO DE COMBINADA"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to increase the potential winnings from accumulator bets. The more events included in your bet, the bigger the bonus to your payout. It is important to place bets with at least four events with odds starting from 1.2 in order to maximize the benefits of this promotion."}',
             'value_es' => '{"0":"Esta promoción permite aumentar las ganancias potenciales de las apuestas acumuladas. Cuantos más eventos se incluyan en la apuesta, mayor será el bono sobre las ganancias. Es importante realizar apuestas con un mínimo de cuatro eventos con cuotas a partir de 1.2 para aprovechar al máximo esta promoción."}',
             'value_fr' => '{"0":"Cette promotion permet d’augmenter les gains potentiels des paris combinés. Plus le nombre d’événements inclus dans le pari est élevé, plus le bonus sur les gains sera important. Il est essentiel de composer des paris avec au moins quatre événements ayant des cotes à partir de 1,2 pour tirer le meilleur parti de cette offre."}',
             'value_pt' => '{"0":"Esta promoção permite aumentar os ganhos potenciais das apostas acumuladas. Quanto mais eventos forem incluídos na aposta, maior será o bônus sobre os ganhos. É importante montar apostas com pelo menos quatro eventos com odds a partir de 1.2 para aproveitar ao máximo esta promoção."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to this offer, you can significantly boost your winnings when successfully predicting several events at the same time."}',
             'value_es' => '{"0":"Gracias a esta oferta, podrá incrementar de manera significativa sus ganancias al acertar varios eventos al mismo tiempo."}',
             'value_fr' => '{"0":"Grâce à cette promotion, vous pouvez considérablement augmenter vos gains en prédisant avec succès plusieurs événements en même temps."}',
             'value_pt' => '{"0":"Graças a esta oferta, você pode aumentar significativamente seus ganhos ao prever com sucesso vários eventos ao mesmo tempo."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"RISK-FREE BET"}',
                'value_es' => '{"0":"Apuesta Sin Riesgo"}',
                'value_fr' => '{"0":"Pari Sans Risque"}',
                'value_pt' => '{"0":"APOSTA SEM RISCO"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Risk-Free Bet promotion provides a 100% refund of the stake in case of a loss. To participate in the promotion, players must place bets on designated football matches either in LIVE or pre-match mode with odds starting from 2, and the minimum stake amount must be at least $3."}',
             'value_es' => '{"0":"La promoción Risk-Free Bet ofrece un reembolso del 100% de la apuesta en caso de pérdida. Para participar en la promoción, es necesario apostar en los partidos de fútbol indicados, ya sea en modo LIVE o prematch, con cuotas a partir de 2, y el importe mínimo de la apuesta debe ser de al menos 3 $."}',
             'value_fr' => '{"0":"La promotion Risk-Free Bet prévoit un remboursement à 100 % de la mise en cas de perte. Pour participer à l’offre, il est nécessaire de parier sur les matchs de football désignés, soit en LIVE, soit en pré-match, avec des cotes à partir de 2 et un montant de mise d’au moins 3 $."}',
             'value_pt' => '{"0":"A promoção Risk-Free Bet garante o reembolso de 100% da aposta em caso de perda. Para participar da promoção, é necessário apostar nos jogos de futebol indicados, seja em modo LIVE ou pré-jogo, com odds a partir de 2, e o valor mínimo da aposta deve ser de pelo menos 3 $."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals from the account are possible only after meeting the wagering requirements. The received bonus must be wagered five times on accumulator bets with at least three events, each with odds of no less than 1.4. If the bonus is not wagered within 4 days from the moment it is credited, it will be automatically deducted from the account."}',
             'value_es' => '{"0":"Los retiros de la cuenta son posibles únicamente tras cumplir con los requisitos de apuesta. El bono recibido debe apostarse cinco veces en apuestas combinadas con un mínimo de tres eventos y una cuota mínima de 1.4 en cada uno. Si el bono no se juega dentro de los 4 días posteriores a su acreditación, será eliminado automáticamente de la cuenta."}',
             'value_fr' => '{"0":"Le retrait des fonds du compte est possible uniquement après avoir rempli les conditions de mise. Le bonus reçu doit être rejoué cinq fois sur des paris combinés comportant au moins trois événements, chacun avec une cote minimale de 1,4. Si le bonus n’est pas misé dans un délai de 4 jours après son attribution, il sera automatiquement retiré du compte."}',
             'value_pt' => '{"0":"O saque dos fundos da conta só é possível após o cumprimento dos requisitos de apostas. O bônus recebido deve ser apostado cinco vezes em apostas múltiplas com no mínimo três eventos, cada um com odds de pelo menos 1.4. Se o bônus não for apostado dentro de 4 dias após o crédito, ele será automaticamente removido da conta."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Mostbet"}',
                'value_fr' => '{"0":"FAQ de Mostbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Mostbet"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the first deposit bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono por el primer depósito?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus du premier dépôt ?"}',
             'value_pt' => '{"0":"Como obter o bônus do primeiro depósito?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To receive the bonus, you need to register, make your first deposit, and enter the promo code :promocode during registration."}',
             'value_es' => '{"0":"Para recibir el bono, debe registrarse, realizar el primer depósito e introducir el código promocional :promocode durante el registro."}',
             'value_fr' => '{"0":"Pour recevoir le bonus, vous devez vous inscrire, effectuer votre premier dépôt et entrer le code promo :promocode lors de l’inscription."}',
             'value_pt' => '{"0":"Para receber o bônus, é necessário se registrar, fazer o primeiro depósito e inserir o código promocional :promocode durante o registro."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about new promotions?"}',
             'value_es' => '{"0":"¿Cómo enterarse de las nuevas promociones?"}',
             'value_fr' => '{"0":"Comment connaître les nouvelles promotions ?"}',
             'value_pt' => '{"0":"Como saber sobre novas promoções?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"It is recommended to subscribe to Mostbet’s newsletter and check the «Promotions» section on the official website."}',
             'value_es' => '{"0":"Se recomienda suscribirse al boletín de Mostbet y revisar la sección «Promociones» en el sitio web oficial."}',
             'value_fr' => '{"0":"Il est recommandé de s’abonner à la newsletter de Mostbet et de consulter la section « Promotions » sur le site officiel."}',
             'value_pt' => '{"0":"Recomenda-se assinar a newsletter da Mostbet e verificar a seção «Promoções» no site oficial."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple bonuses be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários bônus ao mesmo tempo?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Usually, each user can only use one bonus at a time, unless otherwise stated in the promotion terms."}',
             'value_es' => '{"0":"Por lo general, cada usuario solo puede usar un bono a la vez, a menos que se indique lo contrario en los términos de la promoción."}',
             'value_fr' => '{"0":"En général, chaque utilisateur ne peut utiliser qu’un seul bonus à la fois, sauf indication contraire dans les conditions de la promotion."}',
             'value_pt' => '{"0":"Normalmente, cada usuário pode usar apenas um bônus por vez, a menos que seja indicado o contrário nos termos da promoção."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Qué tan rápido se procesan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals are processed within a few minutes to several hours, depending on the chosen method."}',
             'value_es' => '{"0":"Los retiros se procesan en unos minutos hasta varias horas, según el método elegido."}',
             'value_fr' => '{"0":"Les retraits sont traités en quelques minutes à plusieurs heures, selon la méthode choisie."}',
             'value_pt' => '{"0":"Os saques são processados em alguns minutos até várias horas, dependendo do método escolhido."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used for live bets?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos en apuestas en vivo?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus pour les paris en direct ?"}',
             'value_pt' => '{"0":"É possível usar bônus em apostas ao vivo?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, most bonus funds allow you to place bets both in pre-match and live modes."}',
             'value_es' => '{"0":"Sí, la mayoría de los fondos de bonificación permiten realizar apuestas tanto en modo pre-partido como en vivo."}',
             'value_fr' => '{"0":"Oui, la plupart des fonds de bonus permettent de parier à la fois en mode pré-match et en direct."}',
             'value_pt' => '{"0":"Sim, a maioria dos fundos de bônus permite fazer apostas tanto no modo pré-jogo quanto ao vivo."}',
             'order' => 36
            ]
        );
    }
}
