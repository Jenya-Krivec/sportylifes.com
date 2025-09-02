<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is a modern international bookmaker and online casino. Like most bookmakers, MelBet offers generous bonuses and promotional offers. Whether you are a new or experienced player, the platform has something interesting for everyone. These include welcome packages, various promotions, and cashback for regular users."}',
             'value_es' => '{"0":"MelBet es una casa de apuestas internacional moderna y un casino en línea. Al igual que la mayoría de las casas de apuestas, MelBet ofrece generosos bonos y promociones. Tanto si eres un jugador nuevo como experimentado, la plataforma tiene algo interesante para todos. Entre ellos se incluyen paquetes de bienvenida, diversas promociones y reembolsos para los usuarios habituales."}',
             'value_fr' => '{"0":"MelBet est un bookmaker international moderne et un casino en ligne. Comme la plupart des bookmakers, MelBet propose des bonus généreux et des offres promotionnelles. Que vous soyez un nouveau joueur ou un utilisateur expérimenté, la plateforme a toujours quelque chose d’intéressant à offrir. Cela inclut des packs de bienvenue, différentes promotions et du cashback pour les clients réguliers."}',
             'value_pt' => '{"0":"MelBet é uma casa de apostas internacional moderna e um cassino online. Assim como a maioria das casas de apostas, a MelBet oferece bônus generosos e promoções especiais. Seja você um jogador novo ou experiente, a plataforma sempre traz algo interessante para cada perfil. Isso inclui pacotes de boas-vindas, várias promoções e cashback para usuários frequentes."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at some of them. We will also explain how to claim a 150% bonus on your first deposit with the promo code :promocode."}',
             'value_es' => '{"0":"En esta reseña, te mostraremos más detalles sobre algunos de ellos. También explicaremos cómo obtener un bono del 150% en tu primer depósito con el código promocional :promocode."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons plus en détail certaines de ces offres. Nous expliquerons également comment obtenir un bonus de 150 % sur votre premier dépôt avec le code promotionnel :promocode."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar algumas dessas ofertas. Também explicaremos como garantir um bônus de 150% no seu primeiro depósito usando o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Registering on MelBet won’t take much of your time. Go to the website and click on the «Registration» button located at the top right corner. A registration form will appear in front of you. Then choose the method that is most convenient for you. You can register via email, phone, or in just one click."}',
             'value_es' => '{"0":"Registrarse en MelBet no te tomará mucho tiempo. Ingresa al sitio web y haz clic en el botón «Registro» que se encuentra en la parte superior derecha. Aparecerá un formulario de registro. Luego elige el método que te resulte más cómodo. Puedes registrarte por correo electrónico, teléfono o con un solo clic."}',
             'value_fr' => '{"0":"L’inscription sur MelBet ne vous prendra pas beaucoup de temps. Rendez-vous sur le site et cliquez sur le bouton « Inscription » situé en haut à droite. Un formulaire d’inscription apparaîtra. Choisissez ensuite la méthode la plus pratique pour vous. Vous pouvez vous inscrire par e-mail, par téléphone ou en un seul clic."}',
             'value_pt' => '{"0":"O registro na MelBet não vai tomar muito do seu tempo. Acesse o site e clique no botão «Registro», localizado no canto superior direito. Um formulário de registro será exibido. Em seguida, escolha o método que for mais conveniente para você. É possível se registrar por e-mail, telefone ou em apenas um clique."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Be sure to pay attention to the promo code field during registration. Enter the promo code :promocode there, and it will automatically activate the bonus after your first deposit. Also, don’t forget to choose where you want to use your bonus funds, either for sports betting or casino games."}',
             'value_es' => '{"0":"Asegúrate de prestar atención al campo para el código promocional durante el registro. Ingresa allí el código :promocode y este activará automáticamente el bono después de tu primer depósito. Además, no olvides seleccionar dónde deseas usar tus fondos de bono, ya sea en apuestas deportivas o en juegos de casino."}',
             'value_fr' => '{"0":"Veillez à prêter attention au champ prévu pour le code promotionnel lors de l’inscription. Saisissez-y le code :promocode, et il activera automatiquement le bonus après votre premier dépôt. N’oubliez pas non plus de choisir où vous souhaitez utiliser vos fonds bonus, soit pour les paris sportifs, soit pour les jeux de casino."}',
             'value_pt' => '{"0":"Certifique-se de prestar atenção ao campo para o código promocional durante o registro. Insira o código :promocode e ele ativará automaticamente o bônus após o seu primeiro depósito. Além disso, não se esqueça de escolher onde deseja utilizar os fundos do bônus, seja em apostas esportivas ou em jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Tenga en cuenta que para poder retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que pour pouvoir retirer les fonds du bonus, il est d’abord nécessaire de remplir les conditions de mise."}',
             'value_pt' => '{"0":"Observe que, para poder sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you choose the sports betting bonus, you need to make a deposit between $1 and $450. The bonus amount must be wagered 5 times in accumulator bets. Each accumulator must contain 3 or more selections, and at least 3 of them must have odds of 1.40 or higher."}',
             'value_es' => '{"0":"Si elige el bono de apuestas deportivas, debe realizar un depósito entre 1 y 450 dólares. El monto del bono debe apostarse 5 veces en apuestas combinadas. Cada combinada debe contener 3 o más selecciones, y al menos 3 de ellas deben tener una cuota de 1,40 o superior."}',
             'value_fr' => '{"0":"Si vous choisissez le bonus de paris sportifs, vous devez effectuer un dépôt compris entre 1 $ et 450 $. Le montant du bonus doit être misé 5 fois sur des paris combinés. Chaque pari combiné doit contenir au moins 3 sélections, et au moins 3 de celles-ci doivent avoir une cote de 1,40 ou plus."}',
             'value_pt' => '{"0":"Se escolher o bônus de apostas esportivas, será necessário fazer um depósito entre 1 e 450 dólares. O valor do bônus deve ser apostado 5 vezes em apostas acumuladas. Cada acumulada deve conter 3 ou mais seleções, e pelo menos 3 delas devem ter odds de 1,40 ou superiores."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you choose the casino bonus, you need to deposit between $5 and $550. The bonus funds must be wagered x40 within 7 days after activation. The maximum bet while wagering the bonus is $5. Free spins can be used in the game without using real money. For this bonus, there is no need to wager bonus funds after using the free spins."}',
             'value_es' => '{"0":"Si elige el bono de casino, debe depositar entre 5 y 550 dólares. Los fondos del bono deben apostarse x40 dentro de los 7 días posteriores a la activación. La apuesta máxima durante el rollover del bono es de 5 dólares. Los giros gratis se pueden usar en el juego sin utilizar dinero real. Para este bono, no es necesario volver a apostar los fondos de bono después de usar los giros gratis."}',
             'value_fr' => '{"0":"Si vous choisissez le bonus de casino, vous devez déposer entre 5 $ et 550 $. Les fonds du bonus doivent être misés x40 dans les 7 jours suivant l’activation. La mise maximale autorisée pour le wagering est de 5 $. Les tours gratuits peuvent être utilisés dans le jeu sans argent réel. Pour ce bonus, il n’est pas nécessaire de rejouer les fonds de bonus après l’utilisation des tours gratuits."}',
             'value_pt' => '{"0":"Se escolher o bônus de cassino, será necessário depositar entre 5 e 550 dólares. Os fundos do bônus devem ser apostados x40 dentro de 7 dias após a ativação. A aposta máxima permitida durante o rollover do bônus é de 5 dólares. Os giros grátis podem ser usados no jogo sem utilizar dinheiro real. Para este bônus, não é necessário apostar novamente os fundos do bônus após usar os giros grátis."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet does not yet offer traditional no-deposit bonuses, but there are interesting ways to get something without making a deposit. For example, after placing bets from your balance, you can receive cashback or free bets as part of the loyalty program. You can find all the latest promotions in the PROMO section."}',
             'value_es' => '{"0":"MelBet todavía no ofrece bonos sin depósito tradicionales, pero sí existen formas interesantes de obtener algo sin necesidad de depositar. Por ejemplo, después de realizar apuestas con su saldo, puede recibir reembolsos o apuestas gratuitas dentro del programa de fidelidad. Todas las promociones vigentes se pueden consultar en la sección PROMO."}',
             'value_fr' => '{"0":"MelBet ne propose pas encore de bonus sans dépôt traditionnels, mais il existe des moyens intéressants d’obtenir quelque chose sans effectuer de dépôt. Par exemple, après avoir placé des paris depuis votre solde, vous pouvez recevoir du cashback ou des paris gratuits dans le cadre du programme de fidélité. Toutes les promotions actuelles sont disponibles dans la section PROMO."}',
             'value_pt' => '{"0":"A MelBet ainda não oferece bônus sem depósito tradicionais, mas há maneiras interessantes de conseguir algo sem realizar um depósito. Por exemplo, após fazer apostas com o seu saldo, você pode receber cashback ou apostas grátis dentro do programa de fidelidade. Todas as promoções disponíveis podem ser consultadas na seção PROMO."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet does not forget about regular users, and they have access to ongoing promotions. These include cashback on lost bets, boosted odds for accumulators, insured bets that refund the stake if one selection loses, and even a «100 bets bonus». Simply place one hundred bets, and as a reward, you receive a free bet equal to the average stake size."}',
             'value_es' => '{"0":"MelBet no se olvida de los usuarios habituales, y para ellos están disponibles promociones regulares. Aquí se incluye cashback por apuestas perdidas, aumentos de cuotas para combinadas, apuestas aseguradas que devuelven el importe si una selección falla, e incluso un «bono por 100 apuestas». Solo tienes que realizar cien apuestas y, como recompensa, recibes una apuesta gratuita del tamaño promedio de tus jugadas."}',
             'value_fr' => '{"0":"MelBet n’oublie pas ses utilisateurs réguliers, et des promotions récurrentes leur sont proposées. Il y a du cashback sur les paris perdus, des boosts de cotes pour les combinés, des paris assurés qui remboursent la mise si une sélection échoue, et même un «bonus pour 100 paris». Il suffit de placer cent paris et, en récompense, vous recevez un pari gratuit correspondant à la mise moyenne."}',
             'value_pt' => '{"0":"A MelBet não se esquece dos usuários frequentes e oferece promoções regulares para eles. Há cashback em apostas perdidas, aumento de odds para acumuladas, apostas seguradas que devolvem o valor se uma seleção falhar e até mesmo o «bônus por 100 apostas». Basta realizar cem apostas e, como recompensa, você recebe uma aposta grátis no valor médio das suas jogadas."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Go For Longer"}',
                'value_es' => '{"0":"No pare"}',
                'value_fr' => '{"0":"Vous pourrez jouer plus longtemps"}',
                'value_pt' => '{"0":"Vá mais além"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Every day for 42 days, you need to place an accumulator on three events with a minimum stake of 1.5 USD or the equivalent in another currency. At least one selection in the accumulator must have odds of 2.00 or higher."}',
             'value_es' => '{"0":"Todos los días durante 42 días debes hacer un acumulador de tres eventos con una apuesta mínima de 1,5 USD o su equivalente en otra moneda. Al menos una selección en el acumulador debe tener cuotas de 2,00 o superiores."}',
             'value_fr' => '{"0":"Chaque jour pendant 42 jours, vous devez placer un pari combiné sur trois événements avec une mise minimale de 1,5 USD ou équivalent dans une autre devise. Au moins une sélection dans le combiné doit avoir des cotes de 2,00 ou plus."}',
             'value_pt' => '{"0":"Todos os dias durante 42 dias, você precisa fazer um acumulador em três eventos com aposta mínima de 1,5 USD ou equivalente em outra moeda. Pelo menos uma seleção no acumulador deve ter odds de 2,00 ou mais."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Every seven days, a free bet promo code is guaranteed, which gradually increases: from a few dollars up to a maximum of 35 USD at the end of the period. The promo code is valid for several days, so it must be used in time."}',
             'value_es' => '{"0":"Cada siete días se garantiza un código de promoción para una apuesta gratuita, que aumenta gradualmente: desde unos pocos dólares hasta un máximo de 35 USD al final del periodo. El código promocional es válido por varios días, por lo que debes usarlo a tiempo."}',
             'value_fr' => '{"0":"Tous les sept jours, un code promo pour un pari gratuit est garanti, augmentant progressivement : de quelques dollars jusqu’à un maximum de 35 USD à la fin de la période. Le code promo est valable plusieurs jours, il faut donc l’utiliser à temps."}',
             'value_pt' => '{"0":"A cada sete dias, um código promocional para aposta grátis é garantido, aumentando gradualmente: de alguns dólares até um máximo de 35 USD ao final do período. O código promocional é válido por vários dias, portanto deve ser utilizado a tempo."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Royal Monday"}',
                'value_es' => '{"0":"Lunes de Reyes"}',
                'value_fr' => '{"0":"Royal Monday"}',
                'value_pt' => '{"0":"Segunda-feira Régia"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Monday becomes royal when you top up your deposit. The bonus is 100% of the deposit amount, up to a maximum of $100. The minimum deposit required to receive this bonus is $5."}',
             'value_es' => '{"0":"El lunes se vuelve real si recargas tu depósito. El bono es del 100% del monto del depósito, hasta un máximo de $100. El depósito mínimo requerido para recibir este bono es de $5."}',
             'value_fr' => '{"0":"Le lundi devient royal lorsque vous effectuez un dépôt. Le bonus correspond à 100 % du montant du dépôt, jusqu’à un maximum de 100 $. Le dépôt minimum requis pour recevoir ce bonus est de 5 $."}',
             'value_pt' => '{"0":"A segunda-feira fica real se você recarregar seu depósito. O bônus é de 100% do valor do depósito, até um máximo de $100. O depósito mínimo necessário para receber este bônus é de $5."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You need to place bets totaling six times the bonus amount in accumulators within 24 hours of receiving the bonus, otherwise, the bonus will be canceled. Each accumulator must contain three or more selections, each with odds of 1.65 or higher."}',
             'value_es' => '{"0":"Debes realizar apuestas por un total de seis veces el monto del bono en acumuladores dentro de las 24 horas posteriores a la recepción del bono; de lo contrario, el bono será cancelado. Cada acumulador debe contener tres o más selecciones, cada una con cuotas de 1,65 o superiores."}',
             'value_fr' => '{"0":"Vous devez placer des paris totalisant six fois le montant du bonus en paris combinés dans les 24 heures suivant la réception du bonus, sinon le bonus sera annulé. Chaque combiné doit contenir trois sélections ou plus, chacune avec des cotes de 1,65 ou plus."}',
             'value_pt' => '{"0":"É necessário fazer apostas no valor de seis vezes o bônus em acumuladores dentro de 24 horas após receber o bônus, caso contrário, o bônus será cancelado. Cada acumulador deve conter três ou mais seleções, cada uma com odds de 1,65 ou mais."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"TOTO"}',
                'value_es' => '{"0":"TOTO"}',
                'value_fr' => '{"0":"TOTO"}',
                'value_pt' => '{"0":"TOTO"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers daily TOTO coupons that combine the best sports events! You need to predict the outcomes of 12 specified events and submit them as a free forecast after completion. You can bet on a home win, an away win, or a draw."}',
             'value_es' => '{"0":"MelBet ofrece cupones TOTO diarios que combinan los mejores eventos deportivos. Debes predecir los resultados de 12 eventos indicados y enviarlos como pronóstico gratuito después de completarlos. Puedes apostar por la victoria del equipo local, la victoria del visitante o un empate."}',
             'value_fr' => '{"0":"MelBet propose des coupons TOTO quotidiens qui combinent les meilleurs événements sportifs ! Vous devez prédire les résultats de 12 événements spécifiés et les soumettre comme pronostic gratuit après leur clôture. Vous pouvez parier sur une victoire à domicile, une victoire à l’extérieur ou un match nul."}',
             'value_pt' => '{"0":"A MelBet oferece cupons TOTO diários que combinam os melhores eventos esportivos! Você deve prever os resultados de 12 eventos especificados e enviá-los como previsão gratuita após a conclusão. Você pode apostar na vitória do time da casa, na vitória do visitante ou no empate."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can receive 100 bonus points for 8 correctly predicted results, 250 bonus points for 9 correctly predicted results, 1,000 bonus points for 10 correctly predicted results, 3,000 bonus points for 11 correctly predicted results, and 7,000 bonus points for 12 correctly predicted results."}',
             'value_es' => '{"0":"Puedes recibir 100 puntos de bonificación por 8 resultados correctamente predichos, 250 puntos de bonificación por 9 resultados correctamente predichos, 1.000 puntos de bonificación por 10 resultados correctamente predichos, 3.000 puntos de bonificación por 11 resultados correctamente predichos y 7.000 puntos de bonificación por 12 resultados correctamente predichos."}',
             'value_fr' => '{"0":"Vous pouvez obtenir 100 points bonus pour 8 résultats correctement prédits, 250 points bonus pour 9 résultats correctement prédits, 1 000 points bonus pour 10 résultats correctement prédits, 3 000 points bonus pour 11 résultats correctement prédits et 7 000 points bonus pour 12 résultats correctement prédits."}',
             'value_pt' => '{"0":"Você pode receber 100 pontos de bônus por 8 resultados corretos, 250 pontos de bônus por 9 resultados corretos, 1.000 pontos de bônus por 10 resultados corretos, 3.000 pontos de bônus por 11 resultados corretos e 7.000 pontos de bônus por 12 resultados corretos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MelBet"}',
                'value_fr' => '{"0":"FAQ de MelBet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MelBet"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How to get a registration bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono al registrarse?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus à l’inscription ?"}',
             'value_pt' => '{"0":"Como obter o bônus ao se registrar?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Enter your promo code in the designated field during registration, and the bonus will be automatically activated after your first deposit."}',
             'value_es' => '{"0":"Ingrese su código promocional en el campo correspondiente durante el registro, y el bono se activará automáticamente después de su primer depósito."}',
             'value_fr' => '{"0":"Saisissez votre code promo dans le champ prévu lors de l’inscription, et le bonus sera automatiquement activé après votre premier dépôt."}',
             'value_pt' => '{"0":"Digite seu código promocional no campo apropriado durante o registro, e o bônus será ativado automaticamente após o seu primeiro depósito."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What is the wagering requirement for sports and casino bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el requisito de apuesta para los bonos de deportes y casino?"}',
             'value_fr' => '{"0":"Quel est le conditionnement de mise pour les bonus sportifs et casino ?"}',
             'value_pt' => '{"0":"Qual é o requisito de aposta para os bônus de esportes e cassino?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For sports, the bonuses must be wagered 5× on accumulator bets, and for casino, 40× on slots within a week."}',
             'value_es' => '{"0":"En deportes, los bonos deben apostarse 5× en apuestas acumuladoras, y en casino, 40× en tragamonedas dentro de una semana."}',
             'value_fr' => '{"0":"Pour le sport, les bonus doivent être misés 5× sur des paris combinés, et pour le casino, 40× sur les machines à sous en une semaine."}',
             'value_pt' => '{"0":"Nos esportes, os bônus devem ser apostados 5× em apostas acumuladoras, e no cassino, 40× em slots dentro de uma semana."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to get no-deposit bonuses?"}',
             'value_es' => '{"0":"¿Es posible obtener bonos sin depósito?"}',
             'value_fr' => '{"0":"Est-il possible d’obtenir des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"É possível receber bônus sem depósito?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"There are no direct no-deposit bonuses, but you can earn free bets through the loyalty program."}',
             'value_es' => '{"0":"No hay bonos directos sin depósito, pero se pueden ganar apuestas gratis a través del programa de fidelidad."}',
             'value_fr' => '{"0":"Il n’existe pas de bonus sans dépôt direct, mais vous pouvez obtenir des paris gratuits via le programme de fidélité."}',
             'value_pt' => '{"0":"Não existem bônus sem depósito direto, mas você pode ganhar apostas grátis através do programa de fidelidade."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Are there rewards for regular players?"}',
             'value_es' => '{"0":"¿Hay recompensas para los jugadores habituales?"}',
             'value_fr' => '{"0":"Y a-t-il des récompenses pour les joueurs réguliers ?"}',
             'value_pt' => '{"0":"Existem recompensas para jogadores frequentes?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, MelBet provides regular players with cashback, enhanced odds, express bet insurance, and a bonus for 100 bets."}',
             'value_es' => '{"0":"Sí, MelBet ofrece a los jugadores habituales reembolso, cuotas mejoradas, seguro para apuestas combinadas y un bono por 100 apuestas."}',
             'value_fr' => '{"0":"Oui, MelBet offre aux joueurs réguliers du cashback, des cotes améliorées, une assurance sur les paris combinés et un bonus pour 100 paris."}',
             'value_pt' => '{"0":"Sim, a MelBet oferece aos jogadores frequentes cashback, odds aumentadas, seguro para apostas acumuladas e um bônus por 100 apostas."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How does the Go For Longer promotion work?"}',
             'value_es' => '{"0":"¿Cómo funciona la promoción Go For Longer?"}',
             'value_fr' => '{"0":"Comment fonctionne la promotion Go For Longer ?"}',
             'value_pt' => '{"0":"Como funciona a promoção Go For Longer?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You place accumulator bets daily for 42 days and receive a promo code each week. This way, you can collect up to 35 USD in bonuses."}',
             'value_es' => '{"0":"Realizas apuestas acumuladoras diariamente durante 42 días y recibes un código promocional cada semana. De esta manera, puedes acumular hasta 35 USD en bonos."}',
             'value_fr' => '{"0":"Vous placez des paris combinés chaque jour pendant 42 jours et recevez un code promo chaque semaine. Ainsi, vous pouvez collecter jusqu’à 35 USD en bonus."}',
             'value_pt' => '{"0":"Você faz apostas acumuladas diariamente durante 42 dias e recebe um código promocional a cada semana. Assim, é possível acumular até 35 USD em bônus."}',
             'order' => 36
            ]
        );
    }
}
