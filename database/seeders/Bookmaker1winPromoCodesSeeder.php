<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is a popular online platform for sports betting and casino games, which is actively developing and offers a wide range of bonuses for new and existing players."}',
             'value_es' => '{"0":"1win es una popular plataforma en línea para apuestas deportivas y juegos de casino, que se encuentra en constante desarrollo y ofrece una amplia variedad de bonos para nuevos y actuales jugadores."}',
             'value_fr' => '{"0":"1win est une plateforme en ligne populaire pour les paris sportifs et les jeux de casino, qui se développe activement et offre une large gamme de bonus pour les nouveaux et anciens joueurs."}',
             'value_pt' => '{"0":"1win é uma plataforma online popular para apostas esportivas e jogos de cassino, que está em constante desenvolvimento e oferece uma ampla variedade de bônus para novos e atuais jogadores."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will examine the available bonuses and promotions in detail, as well as the conditions for their receipt and wagering. We will also explain how to use the promo code :promocode during registration to receive a welcome bonus of 200% of the first deposit amount."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle los bonos y promociones disponibles, así como las condiciones para su obtención y requisitos de apuesta. También explicaremos cómo usar el código promocional :promocode durante el registro para recibir un bono de bienvenida del 200% del primer depósito."}',
             'value_fr' => '{"0":"Dans cet examen, nous examinerons en détail les bonus et promotions disponibles, ainsi que les conditions de leur obtention et de leur mise. Nous expliquerons également comment utiliser le code promotionnel :promocode lors de l\'inscription pour recevoir un bonus de bienvenue de 200 % du montant du premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, examinaremos detalhadamente os bônus e promoções disponíveis, bem como as condições para recebê-los e as exigências de apostas. Também explicaremos como usar o código promocional :promocode durante o registro para receber um bônus de boas-vindas de 200% do valor do primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To use a promo code during registration on 1win, you need to follow a few simple steps. First, go to the official 1win website and click the «Register» button. A registration form will appear. Next, choose your currency, enter your phone number, email, and create a password."}',
             'value_es' => '{"0":"Para usar un código promocional durante el registro en 1win, debe seguir algunos pasos simples. Primero, vaya al sitio web oficial de 1win y haga clic en el botón «Registrarse». Aparecerá un formulario de registro. Luego, elija su moneda, ingrese su número de teléfono, correo electrónico y cree una contraseña."}',
             'value_fr' => '{"0":"Pour utiliser un code promotionnel lors de l\'inscription sur 1win, vous devez suivre quelques étapes simples. Tout d\'abord, rendez-vous sur le site officiel de 1win et cliquez sur le bouton «S\'inscrire». Un formulaire d\'inscription apparaîtra. Ensuite, choisissez votre devise, saisissez votre numéro de téléphone, votre e-mail et créez un mot de passe."}',
             'value_pt' => '{"0":"Para usar um código promocional durante o registro no 1win, você precisa seguir alguns passos simples. Primeiro, acesse o site oficial do 1win e clique no botão «Registrar». Um formulário de registro aparecerá. Em seguida, escolha sua moeda, insira seu número de telefone, e-mail e crie uma senha."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"During the registration process, you will be prompted to enter the promo code. Enter the promo code :promocode. After completing the registration, top up your account to activate the bonuses."}',
             'value_es' => '{"0":"Durante el proceso de registro, se le pedirá que ingrese el código promocional. Introduzca el código promocional :promocode. Después de completar el registro, recargue su cuenta para activar los bonos."}',
             'value_fr' => '{"0":"Pendant le processus d\'inscription, il vous sera demandé de saisir le code promotionnel. Entrez le code promotionnel :promocode. Après avoir terminé l\'inscription, approvisionnez votre compte pour activer les bonus."}',
             'value_pt' => '{"0":"Durante o processo de registro, você será solicitado a inserir o código promocional. Digite o código promocional :promocode. Após concluir o registro, faça um depósito para ativar os bônus."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw bonus funds, you must first meet the wagering requirements. Bonus funds are automatically transferred to the main account if the user lost money from the main account in casino games on the previous day. The amount of the bonus transferred will depend on the amount lost the previous day."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta. Los fondos del bono se transfieren automáticamente a la cuenta principal si el usuario perdió dinero de la cuenta principal en los juegos de casino el día anterior. El monto del bono transferido dependerá de la cantidad perdida el día anterior."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds du bonus, vous devez d\'abord respecter les conditions de mise. Les fonds du bonus sont automatiquement transférés sur le compte principal si l\'utilisateur a perdu de l\'argent du compte principal dans les jeux de casino la veille. Le montant du bonus transféré dépendra du montant perdu la veille."}',
             'value_pt' => '{"0":"Para poder sacar os fundos do bônus, você deve primeiro cumprir os requisitos de apostas. Os fundos do bônus são automaticamente transferidos para a conta principal se o usuário perdeu dinheiro da conta principal nos jogos de cassino no dia anterior. O valor do bônus transferido dependerá da quantia perdida no dia anterior."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win offers no deposit bonuses. To claim them, place bets on your favorite Dota 2 TI teams and receive free bets. The more bets you place, the bigger the free bet you get. Click on the «Participate» button on the rules page in the «Sports» section, place bets on Dota 2 The International events, and receive a free bet. The larger the total bet amount, the bigger the free bet."}',
             'value_es' => '{"0":"Sí, 1win ofrece bonos sin depósito. Para obtenerlos, haga apuestas a sus equipos favoritos de Dota 2 TI y reciba apuestas gratuitas. Cuantas más apuestas realice, mayor será la apuesta gratuita. Haga clic en el botón «Participar» en la página de reglas en la sección «Deportes», apueste en los eventos de Dota 2 The International y reciba una apuesta gratuita. Cuanto mayor sea el monto total de las apuestas, mayor será la apuesta gratuita."}',
             'value_fr' => '{"0":"Oui, 1win propose des bonus sans dépôt. Pour en profiter, pariez sur vos équipes préférées de Dota 2 TI et recevez des paris gratuits. Plus vous placez de paris, plus le pari gratuit sera important. Cliquez sur le bouton «Participer» sur la page des règles dans la section «Sport», pariez sur les événements de Dota 2 The International et recevez un pari gratuit. Plus le montant total des mises est élevé, plus le pari gratuit sera important."}',
             'value_pt' => '{"0":"Sim, a 1win oferece bônus sem depósito. Para recebê-los, faça apostas nas suas equipes favoritas do Dota 2 TI e ganhe apostas grátis. Quanto mais apostas fizer, maior será a aposta grátis. Clique no botão «Participar» na página de regras na seção «Esportes», faça apostas em eventos do Dota 2 The International e receba uma aposta grátis. Quanto maior o valor total das apostas, maior será a aposta grátis."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The issued free bet can be used to place either a single or an accumulator bet with odds ranging from x1.25 to x4.0 on any sporting event. The free bet is valid for 7 days after being credited and expires once this period ends."}',
             'value_es' => '{"0":"La apuesta gratuita emitida se puede utilizar para realizar una apuesta simple o combinada con cuotas de entre x1.25 y x4.0 en cualquier evento deportivo. La apuesta gratuita es válida durante 7 días después de ser acreditada y expira al finalizar este período."}',
             'value_fr' => '{"0":"Le pari gratuit attribué peut être utilisé pour placer un pari simple ou combiné avec des cotes allant de x1.25 à x4.0 sur n’importe quel événement sportif. Le pari gratuit est valable pendant 7 jours après son attribution et expire à la fin de cette période."}',
             'value_pt' => '{"0":"A aposta grátis emitida pode ser usada para fazer uma aposta simples ou múltipla com odds entre x1.25 e x4.0 em qualquer evento esportivo. A aposta grátis é válida por 7 dias após ser creditada e expira após esse período."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win offers various bonuses for regular customers. This includes a weekly cashback of up to 30% on casino losses, activity-based rewards, as well as personalized offers for VIP users. The cashback amount depends on the total losses accumulated during the week. In addition, 1win regularly holds promotions and tournaments with prizes for active players."}',
             'value_es' => '{"0":"Sí, 1win ofrece diversos bonos para los clientes habituales. Esto incluye un reembolso semanal de hasta el 30% sobre las pérdidas en el casino, bonos por actividad, así como ofertas personalizadas para los usuarios VIP. El monto del reembolso depende de la suma de pérdidas acumuladas durante la semana. Además, 1win organiza regularmente promociones y torneos con premios para los jugadores activos."}',
             'value_fr' => '{"0":"Oui, 1win propose différents bonus pour ses clients réguliers. Cela inclut un cashback hebdomadaire allant jusqu’à 30 % sur les pertes au casino, des bonus liés à l’activité ainsi que des offres personnalisées pour les utilisateurs VIP. Le montant du cashback dépend du total des pertes enregistrées au cours de la semaine. De plus, 1win organise régulièrement des promotions et des tournois avec des prix pour les joueurs actifs."}',
             'value_pt' => '{"0":"Sim, a 1win oferece diversos bônus para clientes regulares. Isso inclui cashback semanal de até 30% sobre as perdas no cassino, bônus por atividade e também ofertas personalizadas para usuários VIP. O valor do cashback depende do total de perdas acumuladas durante a semana. Além disso, a 1win realiza regularmente promoções e torneios com prêmios para os jogadores ativos."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Below, we will take a closer look at some of the most popular promotional offers. You can find the full list of promotions on the Promotions and Bonuses page."}',
             'value_es' => '{"0":"A continuación, analizaremos más de cerca algunas de las ofertas promocionales más populares. Puede consultar la lista completa de promociones en la página Promociones y Bonos."}',
             'value_fr' => '{"0":"Ci-dessous, nous examinerons plus en détail certaines des offres promotionnelles les plus populaires. Vous pouvez consulter la liste complète des promotions sur la page Promotions et Bonus."}',
             'value_pt' => '{"0":"A seguir, analisaremos mais detalhadamente algumas das ofertas promocionais mais populares. A lista completa de promoções pode ser consultada na página Promoções e Bônus."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome Bonus"}',
                'value_es' => '{"0":"Bono de bienvenida"}',
                'value_fr' => '{"0":"Bonus de bienvenue"}',
                'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win Welcome Bonus consists of a 500% bonus on the first four deposits, which is automatically credited after funding the main account:"}',
             'value_es' => '{"0":"El Bono de Bienvenida de 1win consiste en un 500% de bonificación en los primeros cuatro depósitos, que se acredita automáticamente después de recargar la cuenta principal:"}',
             'value_fr' => '{"0":"Le Bonus de Bienvenue 1win consiste en un bonus de 500 % sur les quatre premiers dépôts, crédité automatiquement après l’approvisionnement du compte principal :"}',
             'value_pt' => '{"0":"O Bônus de Boas-Vindas da 1win consiste em um bônus de 500% nos quatro primeiros depósitos, creditado automaticamente após a recarga da conta principal:"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
             'value_en' => '{"0":"1st deposit: 200% bonus",
                             "1":"2nd deposit: 150% bonus",
                             "2":"3rd deposit: 100% bonus",
                             "3":"4th deposit: 50% bonus"}',
             'value_es' => '{"0":"1er depósito: 200% de bono",
                             "1":"2º depósito: 150% de bono",
                             "2":"3er depósito: 100% de bono",
                             "3":"4º depósito: 50% de bono"}',
             'value_fr' => '{"0":"1er dépôt : bonus de 200 %",
                             "1":"2e dépôt : bonus de 150 %",
                             "2":"3e dépôt : bonus de 100 %",
                             "3":"4e dépôt : bonus de 50 %"}',
             'value_pt' => '{"0":"1º depósito: bônus de 200%",
                             "1":"2º depósito: bônus de 150%",
                             "2":"3º depósito: bônus de 100%",
                             "3":"4º depósito: bônus de 50%"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The maximum bonus amount is $570 for a single deposit and $570 for four deposits. The transfer from the bonus account to the main account occurs when the player loses money on casino slots. For example, if a player lost $50 from the main account while the bonus account balance was $570, the next day 1% is transferred from the bonus account to the main account. As a result, the player receives $5.7 in the main account."}',
             'value_es' => '{"0":"El monto máximo del bono es de 570 $ por un solo depósito y 570 $ por cuatro depósitos. La transferencia del saldo de bonificación a la cuenta principal ocurre cuando el jugador pierde dinero en las tragamonedas del casino. Por ejemplo, si un jugador perdió 50 $ de la cuenta principal mientras el saldo de la cuenta de bonificación era de 570 $, al día siguiente se transfiere un 1% de la cuenta de bonificación a la cuenta principal. Como resultado, el jugador recibe 5.7 $ en la cuenta principal."}',
             'value_fr' => '{"0":"Le montant maximum du bonus est de 570 $ pour un dépôt unique et de 570 $ pour quatre dépôts. Le transfert du compte bonus vers le compte principal a lieu lorsque le joueur perd de l’argent sur les machines à sous du casino. Par exemple, si un joueur a perdu 50 $ de son compte principal alors que le solde du compte bonus était de 570 $, le lendemain, 1 % est transféré du compte bonus vers le compte principal. En conséquence, le joueur reçoit 5,7 $ sur son compte principal."}',
             'value_pt' => '{"0":"O valor máximo do bônus é de 570 $ por um único depósito e 570 $ por quatro depósitos. A transferência do saldo de bônus para a conta principal ocorre quando o jogador perde dinheiro em slots de cassino. Por exemplo, se um jogador perdeu 50 $ da conta principal enquanto o saldo da conta de bônus era de 570 $, no dia seguinte 1% é transferido da conta de bônus para a conta principal. Como resultado, o jogador recebe 5,7 $ na conta principal."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino Cashback"}',
                'value_es' => '{"0":"Reembolso de Casino"}',
                'value_fr' => '{"0":"Cashback de Casino"}',
                'value_pt' => '{"0":"Cashback de Cassino"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers a weekly cashback of up to 30% for casino players. The cashback amount depends on the total losses in slots during the week. Only real losses are considered for cashback calculation. Cashback is credited every Saturday and is available for further use or withdrawal without additional wagering requirements. This allows you to recover part of your losses and continue playing with better chances of winning."}',
             'value_es' => '{"0":"1win ofrece un reembolso semanal de hasta el 30% para los jugadores de casino. El monto del reembolso depende de la cantidad total de pérdidas en las tragamonedas durante la semana. Solo se consideran las pérdidas reales para el cálculo del reembolso. El reembolso se acredita cada sábado y está disponible para su uso posterior o retiro sin requisitos adicionales de apuesta. Esto le permite recuperar parte de sus pérdidas y seguir jugando con mayores posibilidades de ganar."}',
             'value_fr' => '{"0":"1win propose un cashback hebdomadaire allant jusqu’à 30 % pour les joueurs de casino. Le montant du cashback dépend du total des pertes sur les machines à sous au cours de la semaine. Seules les pertes réelles sont prises en compte pour le calcul du cashback. Le cashback est crédité chaque samedi et peut être utilisé ou retiré sans conditions de mise supplémentaires. Cela vous permet de compenser une partie de vos pertes et de continuer à jouer avec de meilleures chances de gagner."}',
             'value_pt' => '{"0":"A 1win oferece um cashback semanal de até 30% para os jogadores de cassino. O valor do cashback depende do total de perdas em slots durante a semana. Apenas as perdas reais são consideradas para o cálculo do cashback. O cashback é creditado todos os sábados e pode ser usado posteriormente ou sacado sem requisitos adicionais de apostas. Isso permite recuperar parte das suas perdas e continuar jogando com maiores chances de ganhar."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus on a multiple bet"}',
                'value_es' => '{"0":"Bono por apuesta combinada"}',
                'value_fr' => '{"0":"Bonus sur un pari combiné"}',
                'value_pt' => '{"0":"Bônus em aposta múltipla"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers a bonus of up to 15% on multiple bets. The more events included in the bet, the higher the bonus. To receive the maximum bonus, you need to place a bet with 11 or more events."}',
             'value_es' => '{"0":"1win ofrece un bono de hasta el 15% en apuestas múltiples. Cuantos más eventos incluya la apuesta, mayor será el bono. Para recibir el bono máximo, es necesario realizar una apuesta con 11 o más eventos."}',
             'value_fr' => '{"0":"1win propose un bonus allant jusqu’à 15 % sur les paris combinés. Plus il y a d’événements inclus dans le pari, plus le bonus est élevé. Pour obtenir le bonus maximum, il faut placer un pari comprenant 11 événements ou plus."}',
             'value_pt' => '{"0":"A 1win oferece um bônus de até 15% em apostas múltiplas. Quanto mais eventos incluídos na aposta, maior será o bônus. Para receber o bônus máximo, é necessário fazer uma aposta com 11 ou mais eventos."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The bonus is credited to the net winnings (winnings minus the stake amount) and is added to your account after all the events in the bet have been settled. Thanks to this promotion, you have the opportunity to increase your potential payout when successfully predicting several events at the same time."}',
             'value_es' => '{"0":"El bono se acredita sobre las ganancias netas (ganancias menos el importe de la apuesta) y se suma a su cuenta una vez que se hayan resuelto todos los eventos de la apuesta. Gracias a esta promoción, tiene la oportunidad de aumentar sus ganancias potenciales al predecir con éxito varios eventos al mismo tiempo."}',
             'value_fr' => '{"0":"Le bonus est crédité sur les gains nets (gains moins le montant de la mise) et est ajouté à votre compte une fois que tous les événements du pari ont été terminés. Grâce à cette promotion, vous avez la possibilité d’augmenter vos gains potentiels en prédisant correctement plusieurs événements en même temps."}',
             'value_pt' => '{"0":"O bônus é creditado sobre os ganhos líquidos (ganhos menos o valor da aposta) e é adicionado à sua conta após a conclusão de todos os eventos da aposta. Graças a esta promoção, você tem a oportunidade de aumentar seus ganhos potenciais ao prever com sucesso vários eventos ao mesmo tempo."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw bonuses without making a deposit?"}',
             'value_es' => '{"0":"¿Se pueden retirar los bonos sin hacer un depósito?"}',
             'value_fr' => '{"0":"Peut-on retirer les bonus sans effectuer de dépôt ?"}',
             'value_pt' => '{"0":"É possível sacar os bônus sem fazer um depósito?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"No, to withdraw bonus funds you must meet the wagering requirements and make a deposit."}',
             'value_es' => '{"0":"No, para retirar los fondos del bono es necesario cumplir con los requisitos de apuesta y realizar un depósito."}',
             'value_fr' => '{"0":"Non, pour retirer les fonds de bonus, il est nécessaire de remplir les conditions de mise et d’effectuer un dépôt."}',
             'value_pt' => '{"0":"Não, para sacar os fundos de bônus é necessário cumprir os requisitos de apostas e realizar um depósito."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Are there bonuses for mobile users?"}',
             'value_es' => '{"0":"¿Hay bonos para los usuarios móviles?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les utilisateurs mobiles ?"}',
             'value_pt' => '{"0":"Existem bônus para os usuários móveis?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1win provides bonuses and promotions for users of the mobile application."}',
             'value_es' => '{"0":"Sí, 1win ofrece bonos y promociones para los usuarios de la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, 1win propose des bonus et des promotions pour les utilisateurs de l’application mobile."}',
             'value_pt' => '{"0":"Sim, a 1win oferece bônus e promoções para os usuários do aplicativo móvel."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to verify my account?"}',
             'value_es' => '{"0":"¿Es necesario verificar la cuenta?"}',
             'value_fr' => '{"0":"Faut-il vérifier son compte ?"}',
             'value_pt' => '{"0":"É necessário verificar a conta?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, identity verification is required to withdraw large amounts."}',
             'value_es' => '{"0":"Sí, la verificación de identidad es obligatoria para retirar grandes sumas."}',
             'value_fr' => '{"0":"Oui, la vérification d’identité est nécessaire pour retirer des montants importants."}',
             'value_pt' => '{"0":"Sim, a verificação de identidade é obrigatória para sacar grandes quantias."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"How can I get cashback?"}',
             'value_es' => '{"0":"¿Cómo obtener cashback?"}',
             'value_fr' => '{"0":"Comment obtenir du cashback ?"}',
             'value_pt' => '{"0":"Como obter cashback?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Play in the casino, and a portion of your losses will be returned weekly."}',
             'value_es' => '{"0":"Juegue en el casino y una parte de sus pérdidas será devuelta semanalmente."}',
             'value_fr' => '{"0":"Jouez au casino et une partie de vos pertes vous sera remboursée chaque semaine."}',
             'value_pt' => '{"0":"Jogue no cassino e uma parte das suas perdas será devolvida semanalmente."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Are there bonuses for mobile users?"}',
             'value_es' => '{"0":"¿Hay bonos para los usuarios móviles?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les utilisateurs mobiles ?"}',
             'value_pt' => '{"0":"Existem bônus para os usuários móveis?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, by installing the mobile application, you can receive additional bonus funds."}',
             'value_es' => '{"0":"Sí, al instalar la aplicación móvil, puede recibir fondos adicionales de bonificación."}',
             'value_fr' => '{"0":"Oui, en installant l’application mobile, vous pouvez recevoir des fonds bonus supplémentaires."}',
             'value_pt' => '{"0":"Sim, ao instalar o aplicativo móvel, você pode receber fundos de bônus adicionais."}',
             'order' => 36
            ]
        );
    }
}
