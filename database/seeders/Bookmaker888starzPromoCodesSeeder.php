<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz is a modern international platform that combines sports betting and online casino gaming. It is well-known for its wide selection of sporting events, a large variety of casino games, and generous bonus offers for both new and regular players."}',
             'value_es' => '{"0":"888Starz es una plataforma internacional moderna que combina apuestas deportivas y juegos de casino en línea. Es conocida por su amplia selección de eventos deportivos, su gran variedad de juegos de casino y sus generosas ofertas de bonos tanto para nuevos usuarios como para clientes habituales."}',
             'value_fr' => '{"0":"888Starz est une plateforme internationale moderne qui combine paris sportifs et jeux de casino en ligne. Elle est réputée pour son large choix d’événements sportifs, sa grande variété de jeux de casino et ses offres de bonus généreuses pour les nouveaux comme pour les joueurs réguliers."}',
             'value_pt' => '{"0":"888Starz é uma plataforma internacional moderna que combina apostas esportivas e jogos de cassino online. É conhecida por sua ampla seleção de eventos esportivos, grande variedade de jogos de cassino e ofertas generosas de bônus tanto para novos jogadores quanto para clientes regulares."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to its bonus promotions, new players can receive additional funds to play, while regular customers can increase their deposits. And with the promo code :promocode you can significantly boost your first deposit."}',
             'value_es' => '{"0":"Gracias a sus promociones de bonificación, los nuevos jugadores pueden obtener fondos adicionales para jugar, mientras que los clientes frecuentes pueden aumentar sus depósitos. Y con el código promocional :promocode podrás aumentar significativamente tu primer depósito."}',
             'value_fr' => '{"0":"Grâce à ses promotions, les nouveaux inscrits peuvent obtenir des fonds supplémentaires pour jouer, tandis que les clients réguliers peuvent augmenter leurs dépôts. Et avec le code promo :promocode, vous pourrez augmenter considérablement votre premier dépôt."}',
             'value_pt' => '{"0":"Graças às promoções de bônus, novos usuários podem receber fundos adicionais para jogar, enquanto os clientes frequentes podem aumentar seus depósitos. E com o código promocional :promocode você poderá aumentar significativamente o seu primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To use a promo code on 888Starz, you first need to open the official website and go to the registration form. You can register via phone number, email, one-click option, or through social networks."}',
             'value_es' => '{"0":"Para utilizar un código promocional en 888Starz, primero debes abrir el sitio web oficial y dirigirte al formulario de registro. Puedes registrarte mediante número de teléfono, correo electrónico, la opción de un clic o a través de redes sociales."}',
             'value_fr' => '{"0":"Pour utiliser un code promo sur 888Starz, il faut d’abord ouvrir le site officiel et accéder au formulaire d’inscription. Vous pouvez vous inscrire par numéro de téléphone, adresse e-mail, en un clic ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"Para usar um código promocional no 888Starz, primeiro é necessário acessar o site oficial e abrir o formulário de registro. Você pode se registrar pelo número de telefone, e-mail, opção de um clique ou através das redes sociais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"During registration, in the dedicated promo code field, you must enter the code :promocode, which will activate an additional bonus. Also, do not forget to specify where you will use the bonuses, either for sports betting or casino games. After that, you need to confirm your registration, verify your account, and make a deposit from $1 to $100 for sports betting and from $10 to $300 for casino gaming."}',
             'value_es' => '{"0":"Durante el registro, en el campo específico para el código promocional, debes introducir el código :promocode, que activará un bono adicional. Además, no olvides indicar dónde vas a utilizar los bonos, ya sea para apuestas deportivas o para juegos de casino. Después de esto, deberás confirmar tu registro, verificar tu cuenta y realizar un depósito de entre 1 $ y 100 $ para apuestas deportivas y de entre 10 $ y 300 $ para juegos de casino."}',
             'value_fr' => '{"0":"Lors de l’inscription, dans le champ prévu pour le code promo, vous devez saisir le code :promocode, qui activera un bonus supplémentaire. N’oubliez pas non plus de préciser si vous souhaitez utiliser les bonus pour les paris sportifs ou pour les jeux de casino. Ensuite, il vous faudra confirmer votre inscription, vérifier votre compte et effectuer un dépôt allant de 1 $ à 100 $ pour les paris sportifs et de 10 $ à 300 $ pour les jeux de casino."}',
             'value_pt' => '{"0":"Durante o registro, no campo específico para o código promocional, é preciso inserir o código :promocode, que ativará um bônus adicional. Além disso, não se esqueça de indicar onde pretende utilizar os bônus, seja em apostas esportivas ou em jogos de cassino. Depois disso, será necessário confirmar o registro, verificar a conta e realizar um depósito de US$ 1 a US$ 100 para apostas esportivas e de US$ 10 a US$ 300 para jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Tenga en cuenta que, para poder retirar los fondos de bonificación, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que pour pouvoir retirer les fonds bonus, il est nécessaire de remplir d’abord les conditions de mise."}',
             'value_pt' => '{"0":"Atenção: para poder sacar os fundos de bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, you need to switch to the bonus account and wager the bonus amount 10 times using accumulator bets. Each accumulator must include at least 3 events, and a minimum of 3 events in the bet must have odds of no less than 1.4. The bonus must be wagered within 7 days from the moment of deposit. After this period, both the bonus and all winnings derived from it will expire."}',
             'value_es' => '{"0":"En las apuestas deportivas, es necesario cambiar a la cuenta de bono y apostar el monto del bono 10 veces en apuestas de tipo combinada. Cada combinada debe incluir al menos 3 eventos, y un mínimo de 3 de estos deben tener cuotas no inferiores a 1.4. El bono debe apostarse dentro de los 7 días posteriores al depósito. Después de este período, tanto el bono como todas las ganancias asociadas caducarán."}',
             'value_fr' => '{"0":"Pour les paris sportifs, vous devez basculer sur le compte bonus et miser le montant du bonus 10 fois sous forme de paris combinés. Chaque combiné doit comporter au moins 3 événements, et au moins 3 de ces événements doivent avoir une cote minimale de 1,4. Le bonus doit être misé dans un délai de 7 jours à partir du dépôt. Passé ce délai, le bonus et tous les gains associés seront annulés."}',
             'value_pt' => '{"0":"Nas apostas esportivas, é preciso mudar para a conta de bônus e apostar o valor recebido 10 vezes em apostas do tipo acumulador. Cada acumulador deve incluir pelo menos 3 eventos, e no mínimo 3 desses eventos devem ter odds de 1.4 ou superiores. O bônus deve ser apostado em até 7 dias a partir do depósito. Após esse prazo, tanto o bônus quanto todos os ganhos provenientes dele expiram."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For casino play, all deposit bonuses are subject to a wagering requirement of x35 within 7 days after activation. The maximum bet allowed when wagering a bonus is $5. Free spins will only become available after the deposit bonus has been fully wagered and can only be used on the game Wild Cash."}',
             'value_es' => '{"0":"En el casino, todos los bonos de depósito están sujetos a un requisito de apuesta de x35 dentro de los 7 días posteriores a la activación. La apuesta máxima permitida al liberar el bono es de 5 $. Los giros gratis solo estarán disponibles después de liberar completamente el bono de depósito y podrán utilizarse únicamente en el juego Wild Cash."}',
             'value_fr' => '{"0":"Pour le casino, tous les bonus de dépôt sont soumis à une exigence de mise de x35 dans les 7 jours suivant l’activation. La mise maximale autorisée pour remplir cette condition est de 5 $. Les tours gratuits seront disponibles uniquement après que le bonus de dépôt ait été entièrement misé et pourront être utilisés dans le jeu Wild Cash."}',
             'value_pt' => '{"0":"No cassino, todos os bônus de depósito estão sujeitos a um requisito de aposta de x35 dentro de 7 dias após a ativação. A aposta máxima permitida ao liberar o bônus é de US$ 5. Os giros grátis só estarão disponíveis após o bônus de depósito ter sido totalmente apostado e podem ser utilizados exclusivamente no jogo Wild Cash."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses at 888Starz are not very common, but sometimes the platform offers a small selection of free spins or free bets. For example, in the promotion «Your 3rd Bet on Us», to receive a free bet bonus, you need to place 2 winning single bets in a row. The minimum bet amount must be at least $5."}',
             'value_es' => '{"0":"Los bonos sin depósito en 888Starz no son muy frecuentes, pero en ocasiones la plataforma ofrece un pequeño número de giros gratis o apuestas gratuitas. Por ejemplo, en la promoción «Tu tercera apuesta por nuestra cuenta», para recibir un bono en forma de apuesta gratuita, es necesario realizar 2 apuestas simples ganadoras consecutivas. El importe mínimo de la apuesta debe ser de al menos 5 $."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sur 888Starz ne sont pas très fréquents, mais la plateforme propose parfois un petit nombre de tours gratuits ou de paris gratuits. Par exemple, dans la promotion « Votre 3e pari offert », pour obtenir un bonus sous forme de pari gratuit, vous devez effectuer 2 paris simples gagnants consécutifs. Le montant minimum de chaque pari doit être d’au moins 5 $."}',
             'value_pt' => '{"0":"Os bônus sem depósito no 888Starz não são muito comuns, mas às vezes a plataforma oferece um pequeno conjunto de rodadas grátis ou apostas grátis. Por exemplo, na promoção «A sua 3ª aposta por nossa conta», para receber um bônus em forma de aposta grátis, é necessário fazer 2 apostas simples vencedoras consecutivas. O valor mínimo da aposta deve ser de pelo menos US$ 5."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In the «Free Bet in the App» promotion, you need to place 10 bets of at least $1 on any sporting event in the iOS/Android app. You can receive a free bet equal to the average value of the 10 bets, but not exceeding $3.5."}',
             'value_es' => '{"0":"En la promoción «Apuesta gratis en la app», es necesario realizar 10 apuestas de al menos 1 $ en cualquier evento deportivo dentro de la aplicación iOS/Android. Podrás recibir una apuesta gratuita equivalente al valor medio de las 10 apuestas, pero no superior a 3,5 $."}',
             'value_fr' => '{"0":"Dans la promotion « Pari gratuit dans l’application », il faut placer 10 paris d’au moins 1 $ sur n’importe quel événement sportif via l’application iOS/Android. Vous pouvez recevoir un pari gratuit équivalent à la valeur moyenne des 10 paris, mais ne dépassant pas 3,5 $."}',
             'value_pt' => '{"0":"Na promoção «Aposta grátis no aplicativo», é preciso fazer 10 apostas de no mínimo US$ 1 em qualquer evento esportivo no aplicativo iOS/Android. Você pode receber uma aposta grátis equivalente ao valor médio das 10 apostas, mas não superior a US$ 3,5."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz actively supports regular players through its loyalty program. Players can take part in weekly and daily promotions, complete special missions, and receive cashback. To do this, you simply need to play in the casino and place sports bets. Once missions are completed, users receive free spins, bonus funds, and free bets."}',
             'value_es' => '{"0":"888Starz apoya activamente a los jugadores habituales a través de su programa de fidelidad. Los usuarios pueden participar en promociones semanales y diarias, completar misiones especiales y recibir reembolsos en efectivo. Para ello, solo necesitas jugar en el casino y realizar apuestas deportivas. Al completar las misiones, los jugadores reciben giros gratis, fondos de bonificación y apuestas gratuitas."}',
             'value_fr' => '{"0":"888Starz soutient activement ses joueurs réguliers grâce à son programme de fidélité. Les utilisateurs peuvent participer à des promotions hebdomadaires et quotidiennes, accomplir des missions spéciales et recevoir du cashback. Pour cela, il suffit de jouer au casino et de placer des paris sportifs. Une fois les missions terminées, les joueurs reçoivent des tours gratuits, des fonds bonus et des paris gratuits."}',
             'value_pt' => '{"0":"A 888Starz apoia ativamente os jogadores regulares por meio do seu programa de fidelidade. Os usuários podem participar de promoções semanais e diárias, cumprir missões especiais e receber cashback. Para isso, basta jogar no cassino e fazer apostas esportivas. Após a conclusão das missões, os jogadores recebem rodadas grátis, fundos de bônus e apostas gratuitas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This means that even those who have been registered on the platform for a long time can regularly increase their balance and enjoy additional benefits from playing. And this is not all of the promotional offers; you can check the full list on the Bonuses page. Below, we will take a closer look at some of them."}',
             'value_es' => '{"0":"Esto significa que incluso aquellos que llevan tiempo registrados en la plataforma pueden aumentar regularmente su saldo y obtener ventajas adicionales en el juego. Y estas no son todas las ofertas promocionales; puedes consultar la lista completa en la página de Bonos. A continuación, analizaremos más de cerca algunas de ellas."}',
             'value_fr' => '{"0":"Ainsi, même ceux qui sont inscrits depuis longtemps sur la plateforme peuvent régulièrement augmenter leur solde et bénéficier d’avantages supplémentaires. Et ce ne sont pas toutes les offres promotionnelles ; vous pouvez consulter la liste complète sur la page Bonus. Ci-dessous, nous examinerons plus en détail certaines d’entre elles."}',
             'value_pt' => '{"0":"Isso significa que até mesmo aqueles que já estão registrados na plataforma há muito tempo podem aumentar regularmente o seu saldo e obter benefícios adicionais ao jogar. E estas não são todas as ofertas promocionais; você pode conferir a lista completa na página de Bônus. A seguir, analisaremos algumas delas em mais detalhes."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package up to 1500 EUR + 150 FS"}',
                'value_es' => '{"0":"Paquete de bienvenida de hasta 1500 EUR + 150 FS"}',
                'value_fr' => '{"0":"Pack de bienvenue jusqu\'à 1500 EUR + 150 FS"}',
                'value_pt' => '{"0":"Pacote de boas-vindas de até 1500 EUR + 150 FS"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The offer includes bonuses on the first four deposits. The first deposit grants a 100% bonus up to €300 and 30 free spins, the second deposit offers a 50% bonus up to €350 and 35 free spins, the third deposit gives a 25% bonus up to €400 and 40 free spins, and the fourth deposit provides a 25% bonus up to €450 and 45 free spins. All bonuses come with a wagering requirement of x35 within 7 days."}',
             'value_es' => '{"0":"La oferta incluye bonificaciones en los cuatro primeros depósitos. En el primer depósito se otorga un bono del 100% hasta 300 € y 30 giros gratis, en el segundo un bono del 50% hasta 350 € y 35 giros gratis, en el tercero un bono del 25% hasta 400 € y 40 giros gratis, y en el cuarto un bono del 25% hasta 450 € y 45 giros gratis. Todos los bonos tienen un requisito de apuesta de x35 dentro de los 7 días."}',
             'value_fr' => '{"0":"L’offre prévoit des bonus sur les quatre premiers dépôts. Le premier dépôt donne droit à un bonus de 100% jusqu’à 300 € et 30 tours gratuits, le deuxième à un bonus de 50% jusqu’à 350 € et 35 tours gratuits, le troisième à un bonus de 25% jusqu’à 400 € et 40 tours gratuits, et le quatrième à un bonus de 25% jusqu’à 450 € et 45 tours gratuits. Tous les bonus sont soumis à une exigence de mise de x35 dans un délai de 7 jours."}',
             'value_pt' => '{"0":"A oferta prevê bônus nos quatro primeiros depósitos. No primeiro depósito, há um bônus de 100% até €300 e 30 rodadas grátis; no segundo, um bônus de 50% até €350 e 35 rodadas grátis; no terceiro, um bônus de 25% até €400 e 40 rodadas grátis; e no quarto, um bônus de 25% até €450 e 45 rodadas grátis. Todos os bônus têm um requisito de apostas de x35 dentro de 7 dias."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows new users to quickly boost their balance and try out casino games. It is a comprehensive package suitable for different types of players and offers the chance to experience the full potential of the platform."}',
             'value_es' => '{"0":"Esta promoción permite a los nuevos usuarios aumentar rápidamente su saldo y probar los juegos de casino. Es un paquete completo que se adapta a diferentes tipos de jugadores y ofrece la oportunidad de descubrir todas las posibilidades de la plataforma."}',
             'value_fr' => '{"0":"Cette promotion permet aux nouveaux utilisateurs d’augmenter rapidement leur solde et d’essayer les jeux de casino. C’est une offre complète qui convient à différents types de joueurs et qui permet de profiter pleinement des possibilités de la plateforme."}',
             'value_pt' => '{"0":"Esta promoção permite que novos usuários aumentem rapidamente seu saldo e experimentem os jogos de cassino. É um pacote completo que se adapta a diferentes perfis de jogadores e permite explorar todo o potencial da plataforma."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888Starz program allows players to receive up to 11% cashback on all bets, regardless of whether they are winning or losing. The program includes 8 levels, with each new level unlocking a higher percentage of cashback. To move up a level, players simply need to keep playing casino games."}',
             'value_es' => '{"0":"El programa de 888Starz permite obtener hasta un 11% de reembolso en todas las apuestas, independientemente de si son ganadoras o perdedoras. El programa incluye 8 niveles, y cada nivel desbloquea un mayor porcentaje de reembolso. Para subir de nivel, el jugador solo necesita seguir jugando a los juegos de casino."}',
             'value_fr' => '{"0":"Le programme de 888Starz permet d’obtenir jusqu’à 11 % de cashback sur toutes les mises, qu’elles soient gagnantes ou perdantes. Le programme comprend 8 niveaux, chaque nouveau niveau donnant accès à un pourcentage de remboursement plus élevé. Pour progresser dans les niveaux, il suffit de continuer à jouer aux jeux de casino."}',
             'value_pt' => '{"0":"O programa da 888Starz permite receber até 11% de reembolso em todas as apostas, sejam elas vencedoras ou perdedoras. O programa inclui 8 níveis, e cada novo nível desbloqueia uma porcentagem maior de reembolso. Para subir de nível, o jogador precisa apenas continuar jogando os jogos de cassino."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited automatically, and the received funds can be used to continue playing in the casino."}',
             'value_es' => '{"0":"El reembolso se acredita automáticamente y los fondos recibidos pueden utilizarse para seguir jugando en el casino."}',
             'value_fr' => '{"0":"Le cashback est crédité automatiquement et les fonds reçus peuvent être utilisés pour continuer à jouer au casino."}',
             'value_pt' => '{"0":"O reembolso é creditado automaticamente e os fundos recebidos podem ser usados para continuar jogando no cassino."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sunday Boom"}',
                'value_es' => '{"0":"Domingo explosivo"}',
                'value_fr' => '{"0":"Boum du dimanche"}',
                'value_pt' => '{"0":"Explosão de Domingo"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This is a weekly promotion that allows users to receive a 100% deposit bonus on Sunday. The minimum deposit to participate in the promotion is $5, and the maximum bonus is $300. The bonus must be wagered 30 times the bonus amount in the “Slots” section within 5 days after activation."}',
             'value_es' => '{"0":"Se trata de una promoción semanal que permite a los usuarios obtener un bono del 100% en el depósito realizado el domingo. El depósito mínimo para participar en la promoción es de 5 $, y el bono máximo asciende a 300 $. El bono debe apostarse 30 veces el importe recibido en la sección «Tragamonedas» dentro de los 5 días posteriores a la activación."}',
             'value_fr' => '{"0":"Il s’agit d’une promotion hebdomadaire qui permet aux utilisateurs de recevoir un bonus de dépôt de 100 % le dimanche. Le dépôt minimum pour participer à la promotion est de 5 $, et le bonus maximum est de 300 $. Le bonus doit être rejoué 30 fois le montant reçu dans la section « Machines à sous » dans les 5 jours suivant son activation."}',
             'value_pt' => '{"0":"Esta é uma promoção semanal que permite aos usuários receberem um bônus de 100% no depósito realizado no domingo. O depósito mínimo para participar da promoção é de US$ 5, e o bônus máximo é de US$ 300. O bônus deve ser apostado 30 vezes o valor recebido na seção «Caça-níqueis» dentro de 5 dias após a ativação."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Celebrate your birthday with 888starz"}',
                'value_es' => '{"0":"Celebre su cumpleaños con 888starz"}',
                'value_fr' => '{"0":"Fêtez votre anniversaire avec 888starz"}',
                'value_pt' => '{"0":"Celebre o seu aniversário com a 888starz"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"On their birthday, 888Starz gives special bonuses, including a free bet equal to 10% of the deposit and up to 20 free spins in the game Mancala Quest by provider Mancala. To activate the gift, you need to make a deposit of at least $5."}',
             'value_es' => '{"0":"En su cumpleaños, 888Starz ofrece bonos especiales, que incluyen una apuesta gratuita equivalente al 10% del depósito y hasta 20 giros gratis en el juego Mancala Quest del proveedor Mancala. Para activar el regalo, es necesario realizar un depósito mínimo de 5 $."}',
             'value_fr' => '{"0":"Le jour de son anniversaire, 888Starz offre des bonus spéciaux, comprenant un pari gratuit égal à 10 % du dépôt et jusqu’à 20 tours gratuits dans le jeu Mancala Quest du fournisseur Mancala. Pour activer le cadeau, il faut effectuer un dépôt d’au moins 5 $."}',
             'value_pt' => '{"0":"No dia do aniversário, a 888Starz oferece bônus especiais, incluindo uma aposta gratuita equivalente a 10% do depósito e até 20 rodadas grátis no jogo Mancala Quest do provedor Mancala. Para ativar o presente, é necessário fazer um depósito mínimo de US$ 5."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The free bet can be used in an accumulator with at least 3 events. A minimum of 3 events in the accumulator must have odds of no less than 1.4. The bonus is available for 7 days from the moment it is credited."}',
             'value_es' => '{"0":"La apuesta gratuita puede usarse en una combinada con al menos 3 eventos. Un mínimo de 3 eventos en la combinada debe tener cuotas no inferiores a 1,4. El bono está disponible durante 7 días a partir del momento en que se acredita."}',
             'value_fr' => '{"0":"Le pari gratuit peut être utilisé dans un pari combiné avec au moins 3 événements. Un minimum de 3 événements dans la combinaison doit avoir une cote d’au moins 1,4. Le bonus est disponible pendant 7 jours à compter du moment où il est crédité."}',
             'value_pt' => '{"0":"A aposta gratuita pode ser usada em uma múltipla com pelo menos 3 eventos. Um mínimo de 3 eventos na múltipla deve ter odds não inferiores a 1,4. O bônus fica disponível por 7 dias a partir do momento em que é creditado."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Also note that the total deposit amount during the entire gaming period must be at least $100."}',
             'value_es' => '{"0":"Tenga en cuenta también que la suma total de depósitos durante todo el tiempo de juego debe ser de al menos 100 $."}',
             'value_fr' => '{"0":"Veuillez également noter que le montant total des dépôts effectués durant toute la période de jeu doit être d’au moins 100 $."}',
             'value_pt' => '{"0":"Observe também que o valor total de depósitos durante todo o período de jogo deve ser de pelo menos US$ 100."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888Starz"}',
                'value_fr' => '{"0":"FAQ de 888Starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888Starz"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How to use a promo code during registration?"}',
             'value_es' => '{"0":"¿Cómo usar un código promocional al registrarse?"}',
             'value_fr' => '{"0":"Comment utiliser un code promo lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como usar um código promocional ao se registrar?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"During registration, enter the promo code in the designated field before confirming your account."}',
             'value_es' => '{"0":"Durante el registro, ingrese el código promocional en el campo correspondiente antes de confirmar su cuenta"}',
             'value_fr' => '{"0":"Lors de l’inscription, saisissez le code promo dans le champ prévu avant de confirmer votre compte."}',
             'value_pt' => '{"0":"Durante o registro, insira o código promocional no campo indicado antes de confirmar sua conta."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Are there bonuses for new users?"}',
             'value_es' => '{"0":"¿Hay bonos para nuevos usuarios?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les nouveaux utilisateurs ?"}',
             'value_pt' => '{"0":"Existem bônus para novos usuários?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, new users can receive a Welcome Package of up to €1500 + 150 free spins."}',
             'value_es' => '{"0":"Sí, los nuevos usuarios pueden recibir un Paquete de Bienvenida de hasta €1500 + 150 giros gratis."}',
             'value_fr' => '{"0":"Oui, les nouveaux utilisateurs peuvent recevoir un Pack de Bienvenue jusqu’à €1500 + 150 tours gratuits."}',
             'value_pt' => '{"0":"Sim, os novos usuários podem receber um Pacote de Boas-Vindas de até €1500 + 150 rodadas grátis."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How to get cashback in the VIP program?"}',
             'value_es' => '{"0":"¿Cómo obtener cashback en el programa VIP?"}',
             'value_fr' => '{"0":"Comment obtenir du cashback dans le programme VIP ?"}',
             'value_pt' => '{"0":"Como obter cashback no programa VIP?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The more you play, the higher your level and the greater the cashback percentage."}',
             'value_es' => '{"0":"Cuanto más juegues, mayor será tu nivel y mayor el porcentaje de cashback."}',
             'value_fr' => '{"0":"Plus vous jouez, plus votre niveau est élevé et plus le pourcentage de cashback est important."}',
             'value_pt' => '{"0":"Quanto mais você joga, maior seu nível e maior a porcentagem de cashback."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 39
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What is Sunday Boom?"}',
             'value_es' => '{"0":"¿Qué es Sunday Boom?"}',
             'value_fr' => '{"0":"Qu’est-ce que le Sunday Boom ?"}',
             'value_pt' => '{"0":"O que é o Sunday Boom?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 40
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"It is a weekly 100% deposit bonus from $5, with a maximum bonus of $300."}',
             'value_es' => '{"0":"Es un bono semanal del 100% sobre el depósito desde $5, con un bono máximo de $300."}',
             'value_fr' => '{"0":"C’est un bonus hebdomadaire de 100 % sur le dépôt à partir de 5 $, avec un bonus maximum de 300 $."}',
             'value_pt' => '{"0":"É um bônus semanal de 100% no depósito a partir de $5, com um bônus máximo de $300."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 41
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Can different bonuses be combined?"}',
             'value_es' => '{"0":"¿Se pueden combinar diferentes bonos?"}',
             'value_fr' => '{"0":"Peut-on combiner différents bonus ?"}',
             'value_pt' => '{"0":"É possível combinar diferentes bônus?"}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 42
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz allows using multiple promotions, but not at the same time. Only one offer can be active. After completing the wagering requirements or the promotion ends, you can participate in other promotions."}',
             'value_es' => '{"0":"888Starz permite usar varias promociones, pero no al mismo tiempo. Solo puede estar activa una oferta. Después de cumplir los requisitos de apuesta o al finalizar la promoción, se puede participar en otras promociones."}',
             'value_fr' => '{"0":"888Starz permet d’utiliser plusieurs promotions, mais pas simultanément. Une seule offre peut être active. Après avoir rempli les conditions de mise ou à la fin de la promotion, vous pouvez participer à d’autres promotions."}',
             'value_pt' => '{"0":"A 888Starz permite usar várias promoções, mas não ao mesmo tempo. Apenas uma oferta pode estar ativa. Após cumprir os requisitos de aposta ou ao término da promoção, você pode participar de outras promoções."}',
             'order' => 42
            ]
        );
    }
}
