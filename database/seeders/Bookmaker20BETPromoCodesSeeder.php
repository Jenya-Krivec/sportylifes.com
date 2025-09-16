<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers both new and existing players a variety of promotions, ranging from a welcome package to special weekend offers. New players can take advantage of the promo code :promocode during registration to receive an enhanced bonus. Regular players are not left behind either, as 20BET provides ongoing promotions tailored to different types of betting and casino gaming."}',
             'value_es' => '{"0":"20BET ofrece a los jugadores nuevos y ya registrados una variedad de promociones, que van desde el paquete de bienvenida hasta ofertas especiales de fin de semana. Los nuevos usuarios pueden utilizar el código promocional :promocode durante el registro para obtener un bono aumentado. Los jugadores habituales tampoco se quedan fuera, ya que 20BET cuenta con promociones regulares diseñadas para distintos tipos de apuestas y juegos de casino."}',
             'value_fr' => '{"0":"20BET propose aux nouveaux joueurs comme aux utilisateurs déjà inscrits une variété de promotions, allant du pack de bienvenue aux offres spéciales du week-end. Les nouveaux joueurs peuvent utiliser le code promo :promocode lors de l’inscription afin de recevoir un bonus augmenté. Les joueurs réguliers ne sont pas oubliés, puisque 20BET propose également des promotions régulières adaptées aux différents types de paris et aux jeux de casino."}',
             'value_pt' => '{"0":"A 20BET oferece aos novos e já registados jogadores uma variedade de promoções, que vão desde o pacote de boas-vindas até ofertas especiais de fim de semana. Os novos utilizadores podem aproveitar o código promocional :promocode durante o registo para receber um bónus aumentado. Os jogadores regulares também não ficam de fora, pois a 20BET disponibiliza promoções regulares adaptadas a diferentes tipos de apostas e jogos de casino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at all the available bonuses and special offers, as well as explain how to make the most of them. We will also cover how to claim a 100% deposit bonus of up to $100 for sports betting and up to $120 for casino gaming."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle todos los bonos y ofertas especiales disponibles, y también explicaremos cómo aprovecharlos al máximo. Además, hablaremos de cómo obtener un bono del 100% en el depósito de hasta 100 $ para apuestas deportivas y hasta 120 $ para juegos de casino."}',
             'value_fr' => '{"0":"Dans cet article, nous passerons en revue tous les bonus et offres spéciales disponibles et nous expliquerons comment en tirer le meilleur parti. Nous verrons également comment obtenir un bonus de 100 % sur le dépôt jusqu’à 100 $ pour les paris sportifs et jusqu’à 120 $ pour les jeux de casino."}',
             'value_pt' => '{"0":"Nesta análise vamos detalhar todos os bónus e ofertas especiais disponíveis, além de explicar como aproveitá-los ao máximo. Também veremos como garantir um bónus de 100% no depósito até 100 $ para apostas desportivas e até 120 $ para jogos de casino."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To activate the promo code :promocode at 20BET, you first need to create a new account. The process takes three steps and only a few minutes."}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en 20BET, primero es necesario crear una nueva cuenta. El proceso consta de tres pasos y solo toma unos minutos."}',
             'value_fr' => '{"0":"Pour activer le code promo :promocode sur 20BET, vous devez d’abord créer un nouveau compte. Le processus se fait en trois étapes et ne prend que quelques minutes."}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode na 20BET, primeiro é necessário criar uma nova conta. O processo é feito em três etapas e leva apenas alguns minutos."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official website and open the registration form. Then fill in your personal details, choose the account currency, and in the special field on the first step, enter the promo code :promocode, which will activate the 100% bonus after your first deposit. You also need to select where you want to use the bonus – for sports betting or casino games. If you choose the sports betting bonus, the deposit must be between $10 and $100; if you choose the casino bonus, the deposit should be between $20 and $120."}',
             'value_es' => '{"0":"Accede al sitio web oficial y abre el formulario de registro. Luego completa tus datos personales, selecciona la moneda de la cuenta y, en el campo especial del primer paso, introduce el código promocional :promocode, que activará el bono del 100% tras el primer depósito. También debes elegir dónde utilizar el bono, ya sea para apuestas deportivas o para juegos de casino. Si eliges el bono de apuestas deportivas, el depósito debe ser entre 10 $ y 100 $; si eliges el de casino, el depósito debe estar entre 20 $ y 120 $."}',
             'value_fr' => '{"0":"Rendez-vous sur le site officiel et ouvrez le formulaire d’inscription. Ensuite, remplissez vos informations personnelles, choisissez la devise du compte et, dans le champ prévu à cet effet dès la première étape, saisissez le code promo :promocode, qui activera le bonus de 100 % après votre premier dépôt. Vous devez également choisir où utiliser le bonus – pour les paris sportifs ou les jeux de casino. Si vous optez pour le bonus de paris sportifs, le dépôt doit être compris entre 10 $ et 100 $ ; si vous choisissez le bonus de casino, le dépôt doit être compris entre 20 $ et 120 $."}',
             'value_pt' => '{"0":"Aceda ao site oficial e abra o formulário de registo. Em seguida, preencha os seus dados pessoais, escolha a moeda da conta e, no campo especial do primeiro passo, introduza o código promocional :promocode, que ativará o bónus de 100% após o primeiro depósito. Também deve escolher onde pretende utilizar o bónus – em apostas desportivas ou em jogos de casino. Se escolher o bónus de apostas desportivas, o depósito deve ser entre 10 $ e 100 $; se optar pelo bónus de casino, o depósito deve ser entre 20 $ e 120 $."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Next, you need to meet the wagering requirements. If you don’t, the bonus funds cannot be withdrawn and will eventually expire."}',
             'value_es' => '{"0":"A continuación, es necesario cumplir con los requisitos de apuesta. Si no lo haces, los fondos de bonificación no podrán retirarse y con el tiempo caducarán."}',
             'value_fr' => '{"0":"Ensuite, il faut remplir les conditions de mise. Si cela n’est pas fait, les fonds de bonus ne pourront pas être retirés et expireront après un certain temps."}',
             'value_pt' => '{"0":"Em seguida, é necessário cumprir os requisitos de apostas. Caso contrário, os fundos de bónus não poderão ser levantados e expirarão após algum tempo."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times using accumulator bets. Each accumulator must include at least two selections, and the total odds must be 2.00 or higher. You have 7 days to meet the wagering requirement."}',
             'value_es' => '{"0":"El bono de apuestas deportivas debe apostarse 5 veces utilizando apuestas combinadas. Cada combinada debe incluir al menos dos selecciones, y la cuota total debe ser de 2.00 o superior. Tienes 7 días para cumplir con el requisito de apuesta."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs doit être rejoué 5 fois en utilisant des paris combinés. Chaque combiné doit inclure au moins deux sélections, et la cote totale doit être de 2,00 ou plus. Vous disposez de 7 jours pour satisfaire aux conditions de mise."}',
             'value_pt' => '{"0":"O bónus de apostas desportivas deve ser apostado 5 vezes utilizando apostas múltiplas. Cada múltipla deve incluir pelo menos duas seleções e a odd total deve ser de 2.00 ou superior. Tem 7 dias para cumprir o requisito de apostas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino bonus must be wagered 40 times. You also have 7 days to meet the wagering requirement."}',
             'value_es' => '{"0":"El bono de casino debe apostarse 40 veces. También tienes 7 días para cumplir con el requisito de apuesta."}',
             'value_fr' => '{"0":"Le bonus de casino doit être rejoué 40 fois. Vous avez également 7 jours pour remplir la condition de mise."}',
             'value_pt' => '{"0":"O bónus de casino deve ser apostado 40 vezes. Também tem 7 dias para cumprir o requisito de apostas."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses are among the most popular requests from players today, but 20BET does not offer this option. The platform focuses on a more traditional reward system, where bonus activation is linked to deposits."}',
             'value_es' => '{"0":"Los bonos sin depósito son hoy en día una de las solicitudes más populares entre los jugadores, pero en 20BET esta opción no está disponible. La plataforma se centra en un sistema de recompensas más tradicional, donde la activación de los bonos está vinculada a los depósitos."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sont aujourd’hui l’une des demandes les plus populaires parmi les joueurs, mais 20BET ne propose pas cette option. La plateforme privilégie un système de récompenses plus traditionnel, où l’activation des bonus est liée aux dépôts."}',
             'value_pt' => '{"0":"Os bónus sem depósito são atualmente um dos pedidos mais populares entre os jogadores, mas na 20BET essa opção não está disponível. A plataforma aposta num sistema de recompensas mais tradicional, em que a ativação dos bónus está ligada aos depósitos."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"However, it’s worth noting that the lack of no deposit bonuses is compensated by a wide range of other promotions. For those who want to try their luck without taking big risks, the minimum deposit at 20BET is just ten dollars, making entry into the game accessible. In addition, regular promotions can bring extra value even to players who prefer smaller bets."}',
             'value_es' => '{"0":"Sin embargo, cabe destacar que la ausencia de bonos sin depósito se compensa con una amplia variedad de otras promociones. Para quienes desean probar suerte sin asumir grandes riesgos, el depósito mínimo en 20BET es de solo diez dólares, lo que hace que la entrada al juego sea accesible. Además, las promociones regulares pueden aportar un valor adicional incluso a quienes realizan apuestas pequeñas."}',
             'value_fr' => '{"0":"Cependant, il convient de souligner que l’absence de bonus sans dépôt est compensée par un large éventail d’autres promotions. Pour ceux qui souhaitent tenter leur chance sans prendre de gros risques, le dépôt minimum chez 20BET est de dix dollars, ce qui rend l’accès au jeu plus abordable. De plus, les promotions régulières peuvent apporter un avantage supplémentaire même aux joueurs qui misent de petites sommes."}',
             'value_pt' => '{"0":"No entanto, vale destacar que a ausência de bónus sem depósito é compensada por uma grande variedade de outras promoções. Para quem quer experimentar sem assumir grandes riscos, o depósito mínimo na 20BET é de apenas dez dólares, o que torna a entrada no jogo acessível. Além disso, as promoções regulares podem trazer benefícios adicionais mesmo para quem prefere apostar valores menores."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Players who already have an account can also count on bonuses from 20BET. The platform offers various types of rewards, including free bets, extra percentages on deposits, and special offers on certain days of the week. For example, active players can receive regular promotions such as boosted odds or cashback on lost bets."}',
             'value_es' => '{"0":"Los jugadores que ya tienen una cuenta también pueden contar con bonos de 20BET. La plataforma ofrece varios tipos de recompensas, incluidos freebets, porcentajes adicionales en los depósitos y promociones especiales en determinados días de la semana. Por ejemplo, los jugadores activos pueden recibir ofertas regulares como cuotas mejoradas o devolución de parte de las apuestas perdidas."}',
             'value_fr' => '{"0":"Les joueurs qui possèdent déjà un compte peuvent également bénéficier de bonus chez 20BET. La plateforme propose différents types de récompenses, notamment des paris gratuits, des pourcentages supplémentaires sur les dépôts et des offres spéciales certains jours de la semaine. Par exemple, les joueurs actifs peuvent recevoir régulièrement des promotions telles que des cotes boostées ou un remboursement partiel des mises perdues."}',
             'value_pt' => '{"0":"Os jogadores que já têm conta também podem contar com bónus da 20BET. A plataforma oferece vários tipos de recompensas, incluindo apostas grátis, percentagens adicionais nos depósitos e promoções especiais em determinados dias da semana. Por exemplo, os jogadores ativos podem receber regularmente ofertas como odds aumentadas ou reembolso de parte das apostas perdidas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the casino, there is a loyalty system for regular players that allows them to earn free spins or bonus money. Keep reading, and we will tell you more about some of these promotional offers in detail."}',
             'value_es' => '{"0":"En el casino, existe un sistema de fidelidad para los jugadores habituales que les permite obtener giros gratis o dinero de bonificación. Sigue leyendo y te contaremos más detalles sobre algunas de estas promociones."}',
             'value_fr' => '{"0":"Au casino, un programme de fidélité est en place pour les joueurs réguliers, leur permettant de gagner des tours gratuits ou de l’argent bonus. Continuez à lire et nous vous présenterons plus en détail certaines de ces offres promotionnelles."}',
             'value_pt' => '{"0":"No casino, existe um sistema de fidelidade para jogadores frequentes que lhes permite ganhar rodadas grátis ou dinheiro de bónus. Continue a ler e iremos detalhar algumas destas ofertas promocionais."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Saturday reload bonus"}',
                'value_es' => '{"0":"Bono de recarga del sábado"}',
                'value_fr' => '{"0":"Bonus de dépôt du samedi"}',
                'value_pt' => '{"0":"Bónus de recarga ao sábado"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The promotion is active every Saturday and allows you to receive an additional 100% on your deposit. To activate it, you need to top up your account from $10 to $100 on the weekend and enter the promo code SRB in the bonus section. Also, between Monday and Friday, you need to place bets totaling at least $20. Do not withdraw anything within six hours after your Saturday deposit."}',
             'value_es' => '{"0":"La promoción está activa todos los sábados y permite recibir un 100% adicional en tu depósito. Para activarla, debes recargar tu cuenta entre $10 y $100 durante el fin de semana e ingresar el código promocional SRB en la sección de bonos. Además, entre lunes y viernes, necesitas realizar apuestas por un total de al menos $20. No retires nada durante las seis horas posteriores a tu depósito del sábado."}',
             'value_fr' => '{"0":"La promotion est valable tous les samedis et permet de recevoir 100 % supplémentaires sur votre dépôt. Pour l’activer, vous devez recharger votre compte de 10 à 100 $ le week-end et entrer le code promo SRB dans la section des bonus. De plus, entre lundi et vendredi, vous devez placer des paris totalisant au moins 20 $. Ne retirez rien dans les six heures suivant votre dépôt du samedi."}',
             'value_pt' => '{"0":"A promoção está ativa todos os sábados e permite receber 100% adicionais no seu depósito. Para ativá-la, é necessário recarregar sua conta de $10 a $100 no fim de semana e inserir o código promocional SRB na seção de bónus. Além disso, entre segunda e sexta-feira, você deve fazer apostas que totalizem pelo menos $20. Não retire nada nas seis horas após o seu depósito de sábado."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Wagering conditions are standard: the bonuses must be used for accumulator bets with at least three events. Each event in the bet must have a minimum odds of 1.50. Your free bet is valid for 2 days."}',
             'value_es' => '{"0":"Las condiciones de apuesta son estándar: los bonos deben utilizarse en apuestas combinadas con al menos tres eventos. Cada evento de la apuesta debe tener una cuota mínima de 1,50. Tu apuesta gratis es válida por 2 días."}',
             'value_fr' => '{"0":"Les conditions de mise sont standard : les bonus doivent être utilisés pour des paris combinés avec au moins trois événements. Chaque événement du pari doit avoir une cote minimale de 1,50. Votre pari gratuit est valable pendant 2 jours."}',
             'value_pt' => '{"0":"As condições de aposta são padrão: os bónus devem ser usados em apostas acumuladas com pelo menos três eventos. Cada evento na aposta deve ter odds mínimas de 1,50. Sua aposta grátis é válida por 2 dias."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Forecasts"}',
                'value_es' => '{"0":"Pronósticos"}',
                'value_fr' => '{"0":"Pronostics"}',
                'value_pt' => '{"0":"Previsões"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In this promotion, players are invited to predict the outcomes of a specific list of events. To participate, the total amount of deposits over the last 5 days must be at least $20. Each participant who correctly predicts the results of 10 selected matches will receive $1,000 as a free bet. For 9 correct predictions, the reward is $100, and for 8 correct predictions, $50."}',
             'value_es' => '{"0":"En esta promoción, se invita a los jugadores a predecir los resultados de una lista específica de eventos. Para participar, el monto total de los depósitos durante los últimos 5 días debe ser al menos de $20. Cada participante que prediga correctamente los resultados de 10 partidos seleccionados recibirá $1,000 como apuesta gratuita. Por 9 predicciones correctas, la recompensa es de $100, y por 8 predicciones correctas, $50."}',
             'value_fr' => '{"0":"Dans cette promotion, les joueurs sont invités à prédire les résultats d’une liste spécifique d’événements. Pour participer, le montant total des dépôts au cours des 5 derniers jours doit être d’au moins 20 $. Chaque participant qui prédit correctement les résultats de 10 matchs sélectionnés recevra 1 000 $ sous forme de pari gratuit. Pour 9 prédictions correctes, la récompense est de 100 $, et pour 8 prédictions correctes, 50 $."}',
             'value_pt' => '{"0":"Nesta promoção, os jogadores são convidados a prever os resultados de uma lista específica de eventos. Para participar, o valor total dos depósitos nos últimos 5 dias deve ser de pelo menos $20. Cada participante que prever corretamente os resultados de 10 partidas selecionadas receberá $1.000 como aposta grátis. Por 9 previsões corretas, a recompensa é $100, e por 8 previsões corretas, $50."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The bonus is credited automatically after the results of the selected matches are published in official sources. The free bet can be used as one or multiple bets on any event offered by the bookmaker. It is important to note that this promotion has no wagering requirements."}',
             'value_es' => '{"0":"El bono se acredita automáticamente una vez que los resultados de los partidos seleccionados se publiquen en fuentes oficiales. La apuesta gratuita se puede utilizar como una o varias apuestas en cualquier evento ofrecido por el corredor. Es importante señalar que esta promoción no tiene requisitos de apuesta."}',
             'value_fr' => '{"0":"Le bonus est crédité automatiquement après que les résultats des matchs sélectionnés apparaissent dans les sources officielles. Le pari gratuit peut être utilisé en un ou plusieurs paris sur n’importe quel événement proposé par le bookmaker. Il est important de noter que cette promotion n’a aucune condition de mise."}',
             'value_pt' => '{"0":"O bónus é creditado automaticamente após os resultados das partidas selecionadas serem publicados em fontes oficiais. A aposta grátis pode ser utilizada como uma ou várias apostas em qualquer evento oferecido pela casa de apostas. É importante notar que esta promoção não possui requisitos de aposta."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Program"}',
                'value_es' => '{"0":"Programa Vip De 20BET"}',
                'value_fr' => '{"0":"Programme Vip De 20BET"}',
                'value_pt' => '{"0":"Programa Vip Da 20BET"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For those who prefer casino games, 20BET has created a VIP program. It is structured with levels, and each new level unlocks additional privileges. Players earn 1 point for every $30 wagered, and these points can be exchanged for bonuses at a rate of 1 point = $1."}',
             'value_es' => '{"0":"Para quienes prefieren el casino, 20BET ha creado un programa VIP. Está estructurado por niveles, y cada nuevo nivel desbloquea privilegios adicionales. Los jugadores ganan 1 punto por cada $30 apostados, y estos puntos se pueden canjear por bonos a una tasa de 1 punto = $1."}',
             'value_fr' => '{"0":"Pour ceux qui préfèrent le casino, 20BET a mis en place un programme VIP. Il est structuré par niveaux, et chaque nouveau niveau débloque des privilèges supplémentaires. Les joueurs reçoivent 1 point pour chaque 30 $ misés, et ces points peuvent être échangés contre des bonus au taux de 1 point = 1 $."}',
             'value_pt' => '{"0":"Para aqueles que preferem o cassino, a 20BET criou um programa VIP. Ele é estruturado por níveis, e cada novo nível desbloqueia privilégios adicionais. Os jogadores ganham 1 ponto para cada $30 apostados, e esses pontos podem ser trocados por bônus na taxa de 1 ponto = $1."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Participation in the program does not require any extra costs; simply playing your favorite games is enough, and the system automatically tracks your activity. In this way, the VIP program acts as an additional tool, allowing players to get more out of their gaming experience."}',
             'value_es' => '{"0":"Participar en el programa no requiere gastos adicionales; basta con jugar a tus juegos favoritos y el sistema registrará automáticamente tu actividad. De este modo, el programa VIP funciona como una herramienta adicional, permitiendo a los jugadores aprovechar más su experiencia de juego."}',
             'value_fr' => '{"0":"La participation au programme ne nécessite aucun coût supplémentaire, il suffit de jouer à vos jeux préférés, et le système enregistre automatiquement votre activité. Ainsi, le programme VIP fonctionne comme un outil supplémentaire et permet aux joueurs de profiter davantage de leur expérience de jeu."}',
             'value_pt' => '{"0":"Participar do programa não requer custos adicionais; basta jogar seus jogos favoritos, e o sistema rastreia automaticamente a atividade. Dessa forma, o programa VIP funciona como uma ferramenta extra, permitindo que os jogadores aproveitem ainda mais a experiência de jogo."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple bonuses be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários bônus ao mesmo tempo?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At 20BET, the rule is that only one bonus can be active at a time. After completing the wagering requirements for one bonus, the next one can be activated."}',
             'value_es' => '{"0":"En 20BET, la norma es que solo un bono puede estar activo a la vez. Después de cumplir con los requisitos de apuesta de un bono, se puede activar el siguiente."}',
             'value_fr' => '{"0":"Chez 20BET, la règle est qu’un seul bonus peut être actif à la fois. Une fois que les conditions de mise d’un bonus sont remplies, le suivant peut être activé."}',
             'value_pt' => '{"0":"Na 20BET, a regra é que apenas um bônus pode estar ativo por vez. Após cumprir os requisitos de aposta de um bônus, o próximo pode ser ativado."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit required to activate bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo necesario para activar los bonos?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum requis pour activer les bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo necessário para ativar os bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, you need to deposit at least ten dollars or the equivalent in another currency."}',
             'value_es' => '{"0":"En la mayoría de los casos, se debe depositar al menos diez dólares o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"Dans la plupart des cas, il faut déposer au moins dix dollars ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"Na maioria dos casos, é necessário depositar pelo menos dez dólares ou o equivalente em outra moeda."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be used for live betting?"}',
             'value_es' => '{"0":"¿Se puede usar el bono para apuestas en vivo?"}',
             'value_fr' => '{"0":"Peut-on utiliser le bonus pour les paris en direct ?"}',
             'value_pt' => '{"0":"É possível usar o bônus para apostas ao vivo?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, most sports bonuses allow placing bets both in the pre-match section and in real-time."}',
             'value_es' => '{"0":"Sí, la mayoría de los bonos deportivos permiten realizar apuestas tanto en la sección previa al partido como en tiempo real."}',
             'value_fr' => '{"0":"Oui, la plupart des bonus sportifs permettent de parier à la fois sur les matchs avant le coup d’envoi et en temps réel."}',
             'value_pt' => '{"0":"Sim, a maioria dos bônus de esportes permite fazer apostas tanto na seção pré-jogo quanto em tempo real."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any withdrawal restrictions for bonus winnings?"}',
             'value_es' => '{"0":"¿Existen restricciones para retirar las ganancias de los bonos?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions pour retirer les gains issus des bonus ?"}',
             'value_pt' => '{"0":"Existem restrições para retirar os ganhos de bônus?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you must first fully complete the wagering requirements before you can withdraw the money to a card or wallet."}',
             'value_es' => '{"0":"Sí, primero debe cumplir completamente con los requisitos de apuesta antes de poder retirar el dinero a una tarjeta o monedero."}',
             'value_fr' => '{"0":"Oui, il faut d’abord remplir entièrement les conditions de mise avant de pouvoir retirer l’argent sur une carte ou un portefeuille."}',
             'value_pt' => '{"0":"Sim, é necessário cumprir completamente os requisitos de aposta antes de poder sacar o dinheiro para um cartão ou carteira."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any no-deposit bonuses?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes 20BET runs short-term promotions with no-deposit free spins or free bets, but this is not a regular practice. Keep an eye on the promotions section and newsletters."}',
             'value_es' => '{"0":"A veces, 20BET realiza promociones de corta duración con giros gratis o apuestas gratis sin depósito, pero no es una práctica habitual. Mantente atento a la sección de promociones y al boletín informativo."}',
             'value_fr' => '{"0":"Parfois, 20BET organise des promotions de courte durée avec des tours gratuits ou des paris gratuits sans dépôt, mais ce n’est pas une pratique régulière. Suivez la section promotions et les newsletters."}',
             'value_pt' => '{"0":"Às vezes, a 20BET realiza promoções de curta duração com rodadas grátis ou apostas grátis sem depósito, mas não é uma prática regular. Fique de olho na seção de promoções e nos boletins informativos."}',
             'order' => 37
            ]
        );
    }
}
