<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari is an international online platform for sports betting and casino games that quickly gained popularity thanks to generous bonuses and promo codes, a wide range of sporting events, and a large selection of gambling games."}',
             'value_es' => '{"0":"MegaPari es una plataforma internacional en línea para apuestas deportivas y juegos de casino que rápidamente ganó popularidad gracias a sus generosos bonos y códigos promocionales, su amplia gama de eventos deportivos y su gran selección de juegos de azar."}',
             'value_fr' => '{"0":"MegaPari est une plateforme en ligne internationale pour les paris sportifs et les jeux de casino qui a rapidement gagné en popularité grâce à des bonus et des codes promotionnels généreux, une large gamme d’événements sportifs et une grande sélection de jeux de hasard."}',
             'value_pt' => '{"0":"MegaPari é uma plataforma online internacional para apostas esportivas e jogos de cassino que rapidamente ganhou popularidade graças a bônus e códigos promocionais generosos, uma ampla gama de eventos esportivos e uma grande seleção de jogos de azar."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to a user-friendly interface and support for various currencies, including cryptocurrencies, the platform has become attractive to players from all over the world. Welcome and regular bonuses, as well as special promotions for active players, allow for significantly increased winnings and make gaming on the site more profitable and exciting. In this review, we will thoroughly examine all available bonus offers, the conditions for receiving them, and the wagering requirements. We will also explain how to use the promo code :promocode to increase your first deposit by 100% during registration."}',
             'value_es' => '{"0":"Gracias a una interfaz conveniente y al soporte de diversas monedas, incluidas las criptomonedas, la plataforma se ha vuelto atractiva para jugadores de todo el mundo. Los bonos de bienvenida y los bonos regulares, así como las promociones especiales para jugadores activos, permiten aumentar significativamente las ganancias y hacen que jugar en el sitio sea más rentable y emocionante. En esta reseña, examinaremos detalladamente todas las ofertas de bonos disponibles, las condiciones para recibirlas y los requisitos de apuesta. También explicaremos cómo utilizar el código promocional :promocode para aumentar su primer depósito en un 100% durante el registro."}',
             'value_fr' => '{"0":"Grâce à une interface conviviale et au support de différentes devises, y compris les cryptomonnaies, la plateforme est devenue attrayante pour les joueurs du monde entier. Les bonus de bienvenue et les bonus réguliers, ainsi que les promotions spéciales pour les joueurs actifs, permettent d’augmenter considérablement les gains et rendent le jeu sur le site plus rentable et passionnant. Dans cette revue, nous examinerons en détail toutes les offres de bonus disponibles, les conditions pour les obtenir et les exigences de mise. Nous expliquerons également comment utiliser le code promotionnel :promocode pour augmenter votre premier dépôt de 100 % lors de l’inscription."}',
             'value_pt' => '{"0":"Graças a uma interface amigável e ao suporte de várias moedas, incluindo criptomoedas, a plataforma se tornou atraente para jogadores de todo o mundo. Bônus de boas-vindas e bônus regulares, assim como promoções especiais para jogadores ativos, permitem aumentar significativamente os ganhos e tornam o jogo no site mais lucrativo e emocionante. Nesta análise, examinaremos detalhadamente todas as ofertas de bônus disponíveis, as condições para recebê-las e os requisitos de aposta. Também explicaremos como usar o código promocional :promocode para aumentar seu primeiro depósito em 100% durante o registro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To use a promo code on MegaPari, go to the official website and open the registration form by clicking the Register button. You can register using your email, phone number, or through social networks. When filling out the registration form, carefully enter your personal details, choose your account currency, and enter the promo code :promocode in the appropriate field. Also, don’t forget to indicate where you will use the bonuses — for sports betting, casino games, or you can receive free bets up to $100."}',
             'value_es' => '{"0":"Para usar un código promocional en MegaPari, vaya al sitio web oficial y abra el formulario de registro haciendo clic en el botón Registrarse. Puede registrarse usando su correo electrónico, número de teléfono o a través de redes sociales. Al completar el formulario de registro, ingrese cuidadosamente sus datos personales, elija la moneda de su cuenta e introduzca el código promocional :promocode en el campo correspondiente. Además, no olvide indicar dónde usará los bonos: para apuestas deportivas, para juegos de casino, o puede recibir apuestas gratuitas de hasta $100."}',
             'value_fr' => '{"0":"Pour utiliser un code promo sur MegaPari, rendez-vous sur le site officiel et ouvrez le formulaire d’inscription en cliquant sur le bouton S’inscrire. Vous pouvez vous inscrire avec votre e-mail, votre numéro de téléphone ou via les réseaux sociaux. Lors de la saisie du formulaire d’inscription, entrez soigneusement vos informations personnelles, choisissez la devise de votre compte et saisissez le code promo :promocode dans le champ approprié. N’oubliez pas non plus d’indiquer où vous utiliserez les bonus — pour les paris sportifs, les jeux de casino, ou vous pouvez recevoir des paris gratuits jusqu’à 100 $."}',
             'value_pt' => '{"0":"Para usar um código promocional no MegaPari, acesse o site oficial e abra o formulário de registro clicando no botão Registrar. Você pode se registrar usando seu e-mail, número de telefone ou através das redes sociais. Ao preencher o formulário de registro, insira cuidadosamente seus dados pessoais, escolha a moeda da conta e insira o código promocional :promocode no campo apropriado. Também não se esqueça de indicar onde usará os bônus — para apostas esportivas, jogos de cassino, ou você pode receber apostas grátis de até $100."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"After confirming your account using the code sent to your email or phone, you need to make your first deposit. For sports betting, the allowed deposit range is usually from $5 to $340, and for casino games — from $5 to $500."}',
             'value_es' => '{"0":"Después de confirmar su cuenta con el código enviado a su correo electrónico o teléfono, debe realizar su primer depósito. Para apuestas deportivas, el rango de depósito permitido suele ser de $5 a $340, y para juegos de casino, de $5 a $500."}',
             'value_fr' => '{"0":"Après avoir confirmé votre compte avec le code envoyé par e-mail ou par téléphone, vous devez effectuer votre premier dépôt. Pour les paris sportifs, la plage de dépôts autorisée est généralement de 5 $ à 340 $, et pour les jeux de casino — de 5 $ à 500 $."}',
             'value_pt' => '{"0":"Após confirmar sua conta com o código enviado para seu e-mail ou telefone, será necessário fazer o primeiro depósito. Para apostas esportivas, o intervalo de depósito permitido geralmente varia de $5 a $340, e para jogos de cassino — de $5 a $500."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Tenga en cuenta que, para poder retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que, pour pouvoir retirer les fonds bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Observe que, para poder sacar os fundos do bônus, você deve primeiro cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting bonuses must be wagered five times the bonus amount in the form of accumulator bets. Each accumulator must include at least 3 events. At least 3 events in the accumulator must have odds of at least 1.40."}',
             'value_es' => '{"0":"Los bonos para apuestas deportivas deben apostarse cinco veces el monto del bono en forma de apuestas combinadas. Cada apuesta combinada debe incluir al menos 3 eventos. Al menos 3 eventos en la apuesta combinada deben tener cuotas de al menos 1,40."}',
             'value_fr' => '{"0":"Les bonus pour les paris sportifs doivent être misés cinq fois le montant du bonus sous forme de paris combinés. Chaque combiné doit inclure au moins 3 événements. Au moins 3 événements dans le combiné doivent avoir une cote d’au moins 1,40."}',
             'value_pt' => '{"0":"Os bônus para apostas esportivas devem ser apostados cinco vezes o valor do bônus na forma de apostas acumuladas. Cada aposta acumulada deve incluir pelo menos 3 eventos. Pelo menos 3 eventos na aposta acumulada devem ter odds de pelo menos 1,40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses are subject to a wagering requirement of x35 within 7 days of activation. The maximum bet when wagering the bonus is 450 Indian Rupees."}',
             'value_es' => '{"0":"Los bonos de casino están sujetos a un requisito de apuesta de x35 dentro de los 7 días posteriores a la activación. La apuesta máxima al apostar el bono es de 450 rupias indias."}',
             'value_fr' => '{"0":"Les bonus de casino sont soumis à une exigence de mise de x35 dans les 7 jours suivant l’activation. La mise maximale lors de la mise du bonus est de 450 roupies indiennes."}',
             'value_pt' => '{"0":"Os bônus de cassino estão sujeitos a um requisito de aposta de x35 dentro de 7 dias após a ativação. A aposta máxima ao apostar o bônus é de 450 rúpias indianas."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses on MegaPari are rare, but sometimes the platform offers small free bets or free spins in the casino to regular players. For example, as part of the “PERFECT SCORE” promotion, players must place pre-match single bets on the exact score of football matches with a minimum odds of 1.7. For each winning exact score bet, the player receives 5% of the stake towards the total free bet. The minimum bet per match is $5."}',
             'value_es' => '{"0":"Los bonos sin depósito en MegaPari son poco frecuentes, pero a veces la plataforma ofrece pequeñas apuestas gratis o giros gratis en el casino a los jugadores habituales. Por ejemplo, como parte de la promoción “PERFECT SCORE”, los jugadores deben realizar apuestas simples pre-partido sobre el marcador exacto de los partidos de fútbol con una cuota mínima de 1,7. Por cada apuesta ganadora al marcador exacto, el jugador recibe el 5% de la apuesta para el total de la apuesta gratis. La apuesta mínima por partido es de $5."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sur MegaPari sont rares, mais parfois la plateforme offre de petits paris gratuits ou des tours gratuits au casino aux joueurs réguliers. Par exemple, dans le cadre de la promotion “PERFECT SCORE”, les joueurs doivent placer des paris simples pré-match sur le score exact des matchs de football avec une cote minimale de 1,7. Pour chaque pari gagnant sur le score exact, le joueur reçoit 5 % de la mise en faveur du pari gratuit total. La mise minimale par match est de 5 $."}',
             'value_pt' => '{"0":"Os bônus sem depósito no MegaPari são raros, mas às vezes a plataforma oferece pequenas apostas grátis ou giros grátis no cassino para jogadores regulares. Por exemplo, como parte da promoção “PERFECT SCORE”, os jogadores devem fazer apostas simples pré-jogo no placar exato das partidas de futebol com odds mínimas de 1,7. Para cada aposta vencedora no placar exato, o jogador recebe 5% da aposta para o total do freebet. A aposta mínima por partida é de $5."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"You can also receive a bonus for a series of losing bets. MegaPari supports its players during difficult times and gives a bonus for a streak of unsuccessful bets!"}',
             'value_es' => '{"0":"También puede recibir un bono por una serie de apuestas perdedoras. ¡MegaPari apoya a sus jugadores en momentos difíciles y otorga un bono por una racha de apuestas fallidas!"}',
             'value_fr' => '{"0":"Vous pouvez également recevoir un bonus pour une série de paris perdants. MegaPari soutient ses joueurs dans les moments difficiles et offre un bonus pour une série de paris infructueux !"}',
             'value_pt' => '{"0":"Você também pode receber um bônus por uma sequência de apostas perdedoras. O MegaPari apoia seus jogadores em momentos difíceis e concede um bônus por uma sequência de apostas malsucedidas!"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari actively supports regular players through a system of ongoing promotions and loyalty programs. For those already registered on the platform, deposit bonuses, cashback, as well as special daily and weekly offers are available."}',
             'value_es' => '{"0":"MegaPari apoya activamente a los jugadores habituales a través de un sistema de promociones continuas y programas de fidelidad. Para quienes ya están registrados en la plataforma, hay disponibles bonos por depósito, cashback, así como ofertas especiales diarias y semanales."}',
             'value_fr' => '{"0":"MegaPari soutient activement les joueurs réguliers grâce à un système de promotions continues et de programmes de fidélité. Pour ceux déjà inscrits sur la plateforme, des bonus sur dépôt, du cashback ainsi que des offres spéciales quotidiennes et hebdomadaires sont disponibles."}',
             'value_pt' => '{"0":"O MegaPari apoia ativamente os jogadores regulares por meio de um sistema de promoções contínuas e programas de fidelidade. Para aqueles que já estão registrados na plataforma, estão disponíveis bônus de depósito, cashback, assim como ofertas especiais diárias e semanais."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To receive these bonuses, players need to participate in certain promotions, place bets on sports events, or play in the casino. Below, we will take a closer look at some of them, and you can find the full list on the official website in the Bonuses section."}',
             'value_es' => '{"0":"Para recibir estos bonos, los jugadores deben participar en ciertas promociones, realizar apuestas en eventos deportivos o jugar en el casino. A continuación, analizaremos algunos de ellos con más detalle, y la lista completa se puede consultar en el sitio oficial en la sección de Bonos."}',
             'value_fr' => '{"0":"Pour obtenir ces bonus, les joueurs doivent participer à certaines promotions, parier sur des événements sportifs ou jouer au casino. Ci-dessous, nous examinerons certains d’entre eux plus en détail, et vous pouvez consulter la liste complète sur le site officiel dans la section Bonus."}',
             'value_pt' => '{"0":"Para receber esses bônus, os jogadores precisam participar de certas promoções, fazer apostas em eventos esportivos ou jogar no cassino. A seguir, examinaremos alguns deles em mais detalhes, e você pode consultar a lista completa no site oficial na seção de Bônus."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Mega Booster"}',
                'value_es' => '{"0":"Mega Booster"}',
                'value_fr' => '{"0":"Mega Booster"}',
                'value_pt' => '{"0":"Mega Booster"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The promotion offers additional bonuses for accumulator bets with 4 or more events. You can receive an enhanced bonus on bets, which allows you to increase your potential winnings."}',
             'value_es' => '{"0":"La promoción ofrece bonos adicionales para apuestas combinadas con 4 o más eventos. Puede recibir un bono mejorado en las apuestas, lo que le permite aumentar sus ganancias potenciales."}',
             'value_fr' => '{"0":"La promotion offre des bonus supplémentaires pour les paris combinés comprenant 4 événements ou plus. Vous pouvez recevoir un bonus amélioré sur les paris, ce qui vous permet d’augmenter vos gains potentiels."}',
             'value_pt' => '{"0":"A promoção oferece bônus adicionais para apostas acumuladas com 4 ou mais eventos. Você pode receber um bônus aumentado nas apostas, o que permite aumentar seus ganhos potenciais."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum stake is $2, and the maximum is $5,800. To receive the bonus, all events must be winning, and the bonus is credited to the account within 24 hours after the bet is verified as a win."}',
             'value_es' => '{"0":"La apuesta mínima es de $2 y la máxima de $5,800. Para recibir el bono, todos los eventos deben ser ganadores, y el bono se acredita en la cuenta dentro de las 24 horas posteriores a la verificación de la apuesta ganadora."}',
             'value_fr' => '{"0":"La mise minimale est de 2 $ et la maximale de 5 800 $. Pour recevoir le bonus, tous les événements doivent être gagnants, et le bonus est crédité sur le compte dans les 24 heures suivant la vérification du pari gagnant."}',
             'value_pt' => '{"0":"O valor mínimo da aposta é $2 e o máximo é $5.800. Para receber o bônus, todos os eventos devem ser vencedores, e o bônus é creditado na conta dentro de 24 horas após a verificação da aposta vencedora."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Your birthday with MEGAPARI!"}',
                'value_es' => '{"0":"¡Su cumpleaños con MEGAPARI!"}',
                'value_fr' => '{"0":"Votre anniversaire avec MEGAPARI !"}',
                'value_pt' => '{"0":"O seu aniversário com a MEGAPARI!"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari celebrates users\' birthdays by offering special gifts in the form of a promo code. To activate the gift, a verified account is required. The value of the promo code depends on the client’s profit and average deposit."}',
             'value_es' => '{"0":"MegaPari celebra los cumpleaños de los usuarios ofreciendo regalos especiales en forma de código promocional. Para activar el regalo, se requiere una cuenta verificada. El valor del código promocional depende del beneficio del cliente y del depósito promedio."}',
             'value_fr' => '{"0":"MegaPari fête les anniversaires des utilisateurs en offrant des cadeaux spéciaux sous forme de code promo. Pour activer le cadeau, un compte vérifié est nécessaire. La valeur du code promo dépend des gains du client et du dépôt moyen."}',
             'value_pt' => '{"0":"O MegaPari celebra os aniversários dos usuários oferecendo presentes especiais na forma de um código promocional. Para ativar o presente, é necessário ter uma conta verificada. O valor do código promocional depende do lucro do cliente e do depósito médio."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The Accumulator of the Day promotion allows you to receive additional bonuses for accumulator bets. Every day, there are over 1,000 sports events on the site. The best events are selected and combined into several accumulators of two types: Line and Live. If the chosen accumulator wins, MegaPari will increase the accumulator’s odds by 10%."}',
             'value_es' => '{"0":"La promoción Acumulador del Día te permite recibir bonos adicionales para apuestas combinadas. Cada día, hay más de 1.000 eventos deportivos en el sitio. Se seleccionan los mejores eventos y se combinan en varios acumuladores de dos tipos: Línea y Live. Si el acumulador elegido gana, MegaPari aumentará las cuotas del acumulador en un 10%."}',
             'value_fr' => '{"0":"La promotion Accumulateur du Jour vous permet de recevoir des bonus supplémentaires pour les paris combinés. Chaque jour, plus de 1 000 événements sportifs sont disponibles sur le site. Les meilleurs événements sont sélectionnés et regroupés en plusieurs combinés de deux types : Ligne et Live. Si le combiné choisi gagne, MegaPari augmentera les cotes du combiné de 10 %."}',
             'value_pt' => '{"0":"A promoção Acumulador do Dia permite receber bônus adicionais para apostas acumuladas. Todos os dias, há mais de 1.000 eventos esportivos no site. Os melhores eventos são selecionados e combinados em vários acumuladores de dois tipos: Linha e Live. Se o acumulador escolhido ganhar, o MegaPari aumentará as odds do acumulador em 10%."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To place an accumulator bet, go to the homepage or the «Line» and «Live» sections. Choose your preferred Accumulator of the Day, place your bet, and wait for the win!"}',
             'value_es' => '{"0":"Para realizar una apuesta combinada, ve a la página principal o a las secciones «Línea» y «Live». Elige tu Acumulador del Día preferido, realiza tu apuesta y ¡espera la victoria!"}',
             'value_fr' => '{"0":"Pour placer un pari combiné, rendez-vous sur la page d’accueil ou dans les sections « Ligne » et « Live ». Choisissez votre Accumulateur du Jour préféré, placez votre pari et attendez la victoire !"}',
             'value_pt' => '{"0":"Para fazer uma aposta acumulada, vá para a página inicial ou para as seções «Linha» e «Live». Escolha o Acumulador do Dia de sua preferência, faça sua aposta e aguarde a vitória!"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MegaPari"}',
                'value_fr' => '{"0":"FAQ de MegaPari"}',
                'value_pt' => '{"0":"Perguntas frequentes do MegaPari"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How to get a registration bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono al registrarse?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como obter o bônus de registro?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To use the bonus, you need to enter the promo code :promocode in the appropriate field during registration and make your first deposit."}',
             'value_es' => '{"0":"Para usar el bono, debes ingresar el código promocional :promocode en el campo correspondiente durante el registro y realizar tu primer depósito."}',
             'value_fr' => '{"0":"Pour utiliser le bonus, vous devez saisir le code promo :promocode dans le champ approprié lors de l’inscription et effectuer votre premier dépôt."}',
             'value_pt' => '{"0":"Para usar o bônus, você precisa inserir o código promocional :promocode no campo apropriado durante o registro e fazer seu primeiro depósito."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for bonuses?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta para los bonos?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise des bonus ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de aposta dos bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirements for bonuses depend on the type of bonus. We have explained the wagering conditions in more detail at the beginning of this review."}',
             'value_es' => '{"0":"Los requisitos de apuesta para los bonos dependen del tipo de bono. Hemos explicado las condiciones de apuesta con más detalle al inicio de esta reseña."}',
             'value_fr' => '{"0":"Les conditions de mise des bonus dépendent du type de bonus. Nous avons expliqué les conditions de mise plus en détail au début de cette revue."}',
             'value_pt' => '{"0":"Os requisitos de aposta dos bônus dependem do tipo de bônus. Explicamos as condições de aposta com mais detalhes no início desta análise."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Are there no deposit bonuses?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
             'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Currently, MegaPari does not offer permanent no deposit bonuses, but small free bets or free spins are sometimes available as part of promotions."}',
             'value_es' => '{"0":"Actualmente, MegaPari no ofrece bonos sin depósito permanentes, pero a veces están disponibles pequeñas apuestas gratis o giros gratis como parte de las promociones."}',
             'value_fr' => '{"0":"Actuellement, MegaPari n’offre pas de bonus sans dépôt permanents, mais de petits paris gratuits ou des tours gratuits sont parfois disponibles dans le cadre de promotions."}',
             'value_pt' => '{"0":"Atualmente, o MegaPari não oferece bônus sem depósito permanentes, mas pequenas apostas grátis ou giros grátis estão às vezes disponíveis como parte das promoções."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about new promotions?"}',
             'value_es' => '{"0":"¿Cómo enterarse de las nuevas promociones?"}',
             'value_fr' => '{"0":"Comment se renseigner sur les nouvelles promotions ?"}',
             'value_pt' => '{"0":"Como saber sobre novas promoções?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"We recommend regularly checking the «Bonuses» section on the official MegaPari website and subscribing to the newsletter."}',
             'value_es' => '{"0":"Recomendamos revisar regularmente la sección «Bonos» en el sitio web oficial de MegaPari y suscribirse al boletín de noticias."}',
             'value_fr' => '{"0":"Nous recommandons de consulter régulièrement la section « Bonus » sur le site officiel de MegaPari et de s’abonner à la newsletter."}',
             'value_pt' => '{"0":"Recomendamos verificar regularmente a seção «Bônus» no site oficial do MegaPari e assinar a newsletter."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser plusieurs codes promo en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, only one promo code can be applied per account."}',
             'value_es' => '{"0":"No, solo se puede aplicar un código promocional por cuenta."}',
             'value_fr' => '{"0":"Non, un seul code promo peut être appliqué par compte."}',
             'value_pt' => '{"0":"Não, apenas um código promocional pode ser aplicado por conta."}',
             'order' => 37
            ]
        );
    }
}
