<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is an international bookmaker that offers a wide range of bonuses and promotions for new and registered users. From generous welcome packages to regular promotions such as the 100% Deposit Bonus every Thursday, Big Match, and Nil-Nil Draw, BetWinner provides favorable conditions for betting and casino gaming."}',
             'value_es' => '{"0":"BetWinner es una casa de apuestas internacional que ofrece una amplia gama de bonos y promociones para usuarios nuevos y registrados. Desde generosos paquetes de bienvenida hasta promociones regulares como el Bono de Depósito del 100% todos los jueves, Big Match y Nil-Nil Draw, BetWinner proporciona condiciones favorables para apostar y jugar en el casino."}',
             'value_fr' => '{"0":"BetWinner est un bookmaker international qui propose une large gamme de bonus et de promotions pour les nouveaux utilisateurs et les utilisateurs enregistrés. Des généreux packs de bienvenue aux promotions régulières telles que le Bonus de Dépôt de 100 % chaque jeudi, le Big Match et le Nil-Nil Draw, BetWinner offre des conditions avantageuses pour les paris et le jeu en casino."}',
             'value_pt' => '{"0":"BetWinner é uma casa de apostas internacional que oferece uma ampla variedade de bónus e promoções para novos e registados. Desde pacotes de boas-vindas generosos até promoções regulares, como o Bónus de Depósito de 100% todas as quintas-feiras, Big Match e Nil-Nil Draw, a BetWinner proporciona condições vantajosas para apostas e jogos de casino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This review will take a detailed look at the available bonuses, the conditions for receiving and wagering them, as well as answers to frequently asked questions. We will also explain how to use the promo code :promocode to receive a 100% welcome bonus on your first deposit."}',
             'value_es' => '{"0":"En esta reseña analizaremos detalladamente los bonos disponibles, las condiciones para recibirlos y apostarlos, así como respuestas a preguntas frecuentes. También explicaremos cómo usar el código promocional :promocode para obtener un bono de bienvenida del 100% en tu primer depósito."}',
             'value_fr' => '{"0":"Cette revue examine en détail les bonus disponibles, les conditions pour les recevoir et les miser, ainsi que les réponses aux questions fréquentes. Nous expliquerons également comment utiliser le code promo :promocode pour obtenir un bonus de bienvenue de 100 % sur votre premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar os bónus disponíveis, as condições para os receber e apostar, bem como responder às perguntas frequentes. Também explicaremos como usar o código promocional :promocode para receber um bónus de boas-vindas de 100% no seu primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode when registering on BetWinner, go to the official website of the bookmaker and click the «Register» button. You will be offered several registration options: by phone number, email, one-click, or through social networks. Choose the method that is convenient for you and fill in all the fields. In the registration form, find the field for the promo code and enter :promocode. Also, select where you will use the bonuses, for sports betting or casino gaming."}',
             'value_es' => '{"0":"Para usar el código promocional :promocode al registrarse en BetWinner, vaya al sitio web oficial de la casa de apuestas y haga clic en el botón «Registrarse». Se le ofrecerán varias opciones de registro: por número de teléfono, correo electrónico, un clic o a través de redes sociales. Elija el método que le resulte conveniente y complete todos los campos. En el formulario de registro, busque el campo para el código promocional e ingrese :promocode. Además, seleccione dónde utilizará los bonos, para apuestas deportivas o para jugar en el casino."}',
             'value_fr' => '{"0":"Pour utiliser le code promo :promocode lors de l’inscription sur BetWinner, rendez-vous sur le site officiel du bookmaker et cliquez sur le bouton « S’inscrire ». Plusieurs options d’inscription vous seront proposées : par numéro de téléphone, e-mail, en un clic ou via les réseaux sociaux. Choisissez la méthode qui vous convient et remplissez tous les champs. Dans le formulaire d’inscription, trouvez le champ pour le code promo et saisissez :promocode. Sélectionnez également où vous utiliserez les bonus, pour les paris sportifs ou pour les jeux de casino."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode ao se registrar no BetWinner, acesse o site oficial da casa de apostas e clique no botão «Registrar». Serão oferecidas várias opções de registro: por número de telefone, e-mail, um clique ou através de redes sociais. Escolha o método que for mais conveniente para você e preencha todos os campos. No formulário de registro, encontre o campo para o código promocional e insira :promocode. Também selecione onde usará os bónus, para apostas desportivas ou jogos de casino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"After that, complete the registration by clicking «Register». It is important to note that to activate the bonuses, you need to make the first deposit from $1 to $100 if you chose the bonus for sports betting, and from $10 to $1500 for casino gaming."}',
             'value_es' => '{"0":"Después de eso, complete el registro haciendo clic en «Registrarse». Es importante tener en cuenta que para activar los bonos, debe realizar el primer depósito de $1 a $100 si eligió el bono para apuestas deportivas y de $10 a $1500 para juegos de casino."}',
             'value_fr' => '{"0":"Ensuite, terminez l’inscription en cliquant sur « S’inscrire ». Il est important de noter que pour activer les bonus, vous devez effectuer le premier dépôt de $1 à $100 si vous avez choisi le bonus pour les paris sportifs et de $10 à $1500 pour les jeux de casino."}',
             'value_pt' => '{"0":"Após isso, conclua o registro clicando em «Registrar». É importante observar que, para ativar os bónus, é necessário fazer o primeiro depósito de $1 a $100 se você escolheu o bónus para apostas desportivas e de $10 a $1500 para jogos de casino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Also note that in order to be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"También tenga en cuenta que, para poder retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez également noter que pour pouvoir retirer les fonds du bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Também note que, para poder retirar os fundos do bónus, deve primeiro cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the bonus for sports betting, you need to wager the bonus amount five times on accumulator bets. Each accumulator must contain at least 3 events. At least 3 events in the accumulator must have odds of at least 1.40."}',
             'value_es' => '{"0":"Si eligió el bono para apuestas deportivas, debe apostar el monto del bono cinco veces en apuestas combinadas. Cada apuesta combinada debe contener al menos 3 eventos. Al menos 3 eventos en la apuesta combinada deben tener cuotas de al menos 1.40."}',
             'value_fr' => '{"0":"Si vous avez choisi le bonus pour les paris sportifs, vous devez miser le montant du bonus cinq fois sur des paris combinés. Chaque combiné doit contenir au moins 3 événements. Au moins 3 événements du combiné doivent avoir des cotes d’au moins 1,40."}',
             'value_pt' => '{"0":"Se você escolheu o bónus para apostas desportivas, precisa apostar o valor do bónus cinco vezes em apostas acumuladas. Cada acumulada deve conter pelo menos 3 eventos. Pelo menos 3 eventos na acumulada devem ter odds de pelo menos 1,40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the bonus for casino gaming, you need to wager all bonus funds x35 within 7 days after activation. The maximum bet when wagering the bonus is $5. Free spins will only be available after the bonus has been wagered."}',
             'value_es' => '{"0":"Si eligió el bono para juegos de casino, debe apostar todos los fondos del bono x35 dentro de los 7 días posteriores a la activación. La apuesta máxima al apostar el bono es de $5. Los giros gratis estarán disponibles solo después de haber apostado el bono."}',
             'value_fr' => '{"0":"Si vous avez choisi le bonus pour les jeux de casino, vous devez miser tous les fonds du bonus x35 dans les 7 jours suivant l’activation. La mise maximale lors de la mise du bonus est de 5 $. Les tours gratuits ne seront disponibles qu’après avoir misé le bonus."}',
             'value_pt' => '{"0":"Se você escolheu o bónus para jogos de casino, precisa apostar todos os fundos do bónus x35 dentro de 7 dias após a ativação. A aposta máxima ao apostar o bónus é de $5. Os giros grátis estarão disponíveis apenas após o bónus ter sido apostado."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, BetWinner does not offer no-deposit bonuses. All bonuses require a deposit to be activated. However, the platform offers a variety of promotions and bonuses for active users, which can compensate for the lack of no-deposit offers. All promotional offers can be viewed on the official website in the PROMO section."}',
             'value_es' => '{"0":"Lamentablemente, BetWinner no ofrece bonos sin depósito. Todos los bonos requieren un depósito para ser activados. Sin embargo, la plataforma ofrece una variedad de promociones y bonos para usuarios activos, que pueden compensar la falta de ofertas sin depósito. Todas las ofertas promocionales se pueden consultar en el sitio web oficial, en la sección PROMO."}',
             'value_fr' => '{"0":"Malheureusement, BetWinner ne propose pas de bonus sans dépôt. Tous les bonus nécessitent un dépôt pour être activés. Cependant, la plateforme propose une variété de promotions et de bonus pour les utilisateurs actifs, ce qui peut compenser l’absence d’offres sans dépôt. Toutes les offres promotionnelles peuvent être consultées sur le site officiel dans la section PROMO."}',
             'value_pt' => '{"0":"Infelizmente, a BetWinner não oferece bónus sem depósito. Todos os bónus exigem um depósito para serem ativados. No entanto, a plataforma oferece uma variedade de promoções e bónus para utilizadores ativos, que podem compensar a ausência de ofertas sem depósito. Todas as ofertas promocionais podem ser consultadas no site oficial, na seção PROMO."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BetWinner offers a range of bonuses for existing clients:"}',
             'value_es' => '{"0":"Sí, BetWinner ofrece una variedad de bonos para clientes existentes:"}',
             'value_fr' => '{"0":"Oui, BetWinner propose une gamme de bonus pour les clients existants:"}',
             'value_pt' => '{"0":"Sim, a BetWinner oferece uma variedade de bónus para clientes existentes:"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list_v2',
             'value_en' => '{"0":"Weekly cashback of up to 3% of total betting losses, with a maximum amount of $100 or the equivalent in another currency",
                             "1":"Daily and weekly tournaments with prizes for active players",
                             "2":"A special bonus on the 10th deposit in the form of 50% of the deposit amount",
                             "3":"Cashback for VIP program members depending on their loyalty level"}',
             'value_es' => '{"0":"Cashback semanal de hasta el 3% de las pérdidas totales en apuestas, con un monto máximo de $100 o el equivalente en otra moneda",
                             "1":"Torneos diarios y semanales con premios para jugadores activos",
                             "2":"Bono especial en el décimo depósito en forma del 50% del monto del depósito",
                             "3":"Cashback para miembros del programa VIP según su nivel de lealtad"}',
             'value_fr' => '{"0":"Cashback hebdomadaire allant jusqu’à 3 % des pertes totales sur les paris, avec un montant maximum de 100 $ ou l’équivalent dans une autre devise",
                             "1":"Tournois quotidiens et hebdomadaires avec des prix pour les joueurs actifs",
                             "2":"Bonus spécial sur le 10ᵉ dépôt sous forme de 50 % du montant du dépôt",
                             "3":"Cashback pour les membres du programme VIP en fonction de leur niveau de fidélité"}',
             'value_pt' => '{"0":"Cashback semanal de até 3% das perdas totais em apostas, com um valor máximo de $100 ou equivalente em outra moeda",
                             "1":"Torneios diários e semanais com prémios para jogadores ativos",
                             "2":"Bónus especial no 10º depósito na forma de 50% do valor do depósito",
                             "3":"Cashback para membros do programa VIP, dependendo do nível de fidelidade"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"And this is far from the full list of available promotions. Below, we will take a closer look at some of them."}',
             'value_es' => '{"0":"Y esto está lejos de ser la lista completa de promociones disponibles. A continuación, analizaremos algunas de ellas con más detalle."}',
             'value_fr' => '{"0":"Et cela est loin d’être la liste complète des promotions disponibles. Ci-dessous, nous examinerons certaines d’entre elles plus en détail."}',
             'value_pt' => '{"0":"E isso está longe de ser a lista completa de promoções disponíveis. A seguir, vamos analisar algumas delas com mais detalhes."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"100% Deposit Bonus every Thursday"}',
             'value_es' => '{"0":"Bono de Depósito del 100% todos los jueves"}',
             'value_fr' => '{"0":"Bonus de Dépôt de 100 % chaque jeudi"}',
             'value_pt' => '{"0":"Bónus de Depósito de 100% todas as quintas-feiras"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Every Thursday, BetWinner offers a 100% deposit bonus. To receive the bonus, log into your account, go to the deposit section, and make a deposit from $1 to $100. The bonus will be automatically credited to your account."}',
             'value_es' => '{"0":"Cada jueves, BetWinner ofrece un bono del 100% sobre el depósito. Para recibir el bono, inicie sesión en su cuenta, vaya a la sección de depósitos y realice un depósito de $1 a $100. El bono se acreditará automáticamente en su cuenta."}',
             'value_fr' => '{"0":"Chaque jeudi, BetWinner propose un bonus de dépôt de 100 %. Pour recevoir le bonus, connectez-vous à votre compte, rendez-vous dans la section dépôt et effectuez un dépôt de 1 $ à 100 $. Le bonus sera automatiquement crédité sur votre compte."}',
             'value_pt' => '{"0":"Todas as quintas-feiras, a BetWinner oferece um bónus de 100% sobre o depósito. Para receber o bónus, entre na sua conta, vá à seção de depósitos e faça um depósito de $1 a $100. O bónus será automaticamente creditado na sua conta."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To wager the bonus, you need to place accumulator bets with at least three events, where the odds of each event are at least 1.40. The bonus must be wagered within 24 hours after being credited."}',
             'value_es' => '{"0":"Para apostar el bono, debe realizar apuestas combinadas con al menos tres eventos, donde las cuotas de cada evento sean de al menos 1.40. El bono debe apostarse dentro de las 24 horas posteriores a su acreditación."}',
             'value_fr' => '{"0":"Pour miser le bonus, vous devez placer des paris combinés avec au moins trois événements, dont les cotes de chaque événement sont d’au moins 1,40. Le bonus doit être misé dans les 24 heures suivant son crédit."}',
             'value_pt' => '{"0":"Para apostar o bónus, é necessário fazer apostas acumuladas com pelo menos três eventos, onde as odds de cada evento sejam de pelo menos 1,40. O bónus deve ser apostado dentro de 24 horas após o seu crédito."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Big Match"}',
                'value_es' => '{"0":"El Gran Partido"}',
                'value_fr' => '{"0":"Grand match"}',
                'value_pt' => '{"0":"Grande Jogo"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"As part of the Big Match promotion, BetWinner offers a 100% refund of your bet in the form of a promo code if your bet on the correct score does not win. To take part in the promotion, log into your account, go to the promotions section, and select the matches participating in the promotion. Place a bet of at least $5 on the correct score of the chosen match. If your bet loses, you will receive a 100% refund of your stake in the form of a promo code."}',
             'value_es' => '{"0":"Como parte de la promoción El Gran Partido, BetWinner ofrece un reembolso del 100% de su apuesta en forma de código promocional si su apuesta al resultado exacto no gana. Para participar en la promoción, inicie sesión en su cuenta, vaya a la sección de promociones y seleccione los partidos que participan en la promoción. Realice una apuesta de al menos $5 al resultado exacto del partido elegido. Si su apuesta pierde, recibirá un reembolso del 100% de su apuesta en forma de código promocional."}',
             'value_fr' => '{"0":"Dans le cadre de la promotion Grand match, BetWinner propose un remboursement à 100 % de votre mise sous forme de code promo si votre pari sur le score exact ne gagne pas. Pour participer à la promotion, connectez-vous à votre compte, rendez-vous dans la section promotions et sélectionnez les matchs participants à la promotion. Placez un pari d’au moins 5 $ sur le score exact du match choisi. Si votre pari perd, vous recevrez un remboursement de 100 % de votre mise sous forme de code promo."}',
             'value_pt' => '{"0":"No âmbito da promoção Grande Jogo, a BetWinner oferece um reembolso de 100% da sua aposta na forma de código promocional se a sua aposta no resultado exato não ganhar. Para participar na promoção, entre na sua conta, vá à seção de promoções e selecione os jogos que participam na promoção. Faça uma aposta de pelo menos $5 no resultado exato do jogo escolhido. Se a sua aposta perder, receberá um reembolso de 100% da sua aposta na forma de código promocional."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Nil-Nil Draw"}',
                'value_es' => '{"0":"Empate a cero"}',
                'value_fr' => '{"0":"Match nul 0-0"}',
                'value_pt' => '{"0":"Empate a zero"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to receive a refund of your bet if your first bet on the selected match does not win and the first half ends with no goals."}',
             'value_es' => '{"0":"Esta promoción le permite recibir un reembolso de su apuesta si su primera apuesta en el partido seleccionado no gana y la primera mitad termina sin goles."}',
             'value_fr' => '{"0":"Cette promotion vous permet de recevoir un remboursement de votre mise si votre premier pari sur le match sélectionné ne gagne pas et si la première mi-temps se termine sans buts."}',
             'value_pt' => '{"0":"Esta promoção permite receber um reembolso da sua aposta se a sua primeira aposta no jogo selecionado não ganhar e o primeiro tempo terminar sem golos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To participate in the promotion, log into your account, go to the promotions section, and select the matches participating in the promotion. Place a bet on the chosen match. If your bet loses and the first half ends with no goals, you will receive a refund of your stake in the form of a promo code up to $25."}',
             'value_es' => '{"0":"Para participar en la promoción, inicie sesión en su cuenta, vaya a la sección de promociones y seleccione los partidos que participan en la promoción. Realice una apuesta en el partido elegido. Si su apuesta pierde y la primera mitad termina sin goles, recibirá un reembolso de su apuesta en forma de código promocional de hasta $25."}',
             'value_fr' => '{"0":"Pour participer à la promotion, connectez-vous à votre compte, rendez-vous dans la section promotions et sélectionnez les matchs participants à la promotion. Placez un pari sur le match choisi. Si votre pari perd et que la première mi-temps se termine sans buts, vous recevrez un remboursement de votre mise sous forme de code promo jusqu’à 25 $."}',
             'value_pt' => '{"0":"Para participar na promoção, entre na sua conta, vá à seção de promoções e selecione os jogos que participam na promoção. Faça uma aposta no jogo escolhido. Se a sua aposta perder e o primeiro tempo terminar sem golos, receberá um reembolso da sua aposta na forma de código promocional de até $25."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How to register on BetWinner?"}',
             'value_es' => '{"0":"¿Cómo registrarse en BetWinner?"}',
             'value_fr' => '{"0":"Comment s’inscrire sur BetWinner ?"}',
             'value_pt' => '{"0":"Como se registrar no BetWinner?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To register, go to the official BetWinner website, click «Register», choose a registration method (phone, email, one-click, or via social networks), enter the required information, and click «Register»."}',
             'value_es' => '{"0":"Para registrarse, vaya al sitio web oficial de BetWinner, haga clic en «Registrarse», elija un método de registro (teléfono, correo electrónico, un clic o a través de redes sociales), ingrese la información requerida y haga clic en «Registrarse»."}',
             'value_fr' => '{"0":"Pour vous inscrire, rendez-vous sur le site officiel de BetWinner, cliquez sur « S’inscrire », choisissez une méthode d’inscription (téléphone, e-mail, un clic ou via les réseaux sociaux), saisissez les informations requises et cliquez sur « S’inscrire »."}',
             'value_pt' => '{"0":"Para se registrar, acesse o site oficial do BetWinner, clique em «Registrar», escolha um método de registro (telefone, e-mail, um clique ou através de redes sociais), insira as informações necessárias e clique em «Registrar»."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How to get a bonus during registration?"}',
             'value_es' => '{"0":"¿Cómo obtener un bono al registrarse?"}',
             'value_fr' => '{"0":"Comment obtenir un bonus lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como obter um bónus durante o registro?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"During registration, enter the promo code :promocode in the appropriate field. After making your first deposit, the bonus will be automatically credited to your account."}',
             'value_es' => '{"0":"Durante el registro, ingrese el código promocional :promocode en el campo correspondiente. Después de realizar su primer depósito, el bono se acreditará automáticamente en su cuenta."}',
             'value_fr' => '{"0":"Lors de l’inscription, saisissez le code promo :promocode dans le champ approprié. Après avoir effectué votre premier dépôt, le bonus sera automatiquement crédité sur votre compte."}',
             'value_pt' => '{"0":"Durante o registro, insira o código promocional :promocode no campo apropriado. Após efetuar o seu primeiro depósito, o bónus será automaticamente creditado na sua conta."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for bonuses?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta de los bonos?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise des bonus ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de aposta dos bónus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Wagering requirements depend on the type of bonus. For sports betting, you need to place accumulator bets with at least three events, where the odds of each event are at least 1.40. For casino bonuses, you must wager the bonus 35 times within 7 days."}',
             'value_es' => '{"0":"Los requisitos de apuesta dependen del tipo de bono. Para apuestas deportivas, debe realizar apuestas combinadas con al menos tres eventos, donde las cuotas de cada evento sean de al menos 1,40. Para bonos de casino, debe apostar el bono 35 veces dentro de los 7 días."}',
             'value_fr' => '{"0":"Les conditions de mise dépendent du type de bonus. Pour les paris sportifs, vous devez placer des paris combinés avec au moins trois événements, dont les cotes de chaque événement sont d’au moins 1,40. Pour les bonus de casino, vous devez miser le bonus 35 fois dans les 7 jours."}',
             'value_pt' => '{"0":"Os requisitos de aposta dependem do tipo de bónus. Para apostas desportivas, é necessário fazer apostas acumuladas com pelo menos três eventos, onde as odds de cada evento sejam de pelo menos 1,40. Para bónus de casino, deve apostar o bónus 35 vezes dentro de 7 dias."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple bonuses be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários bónus ao mesmo tempo?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"No, each bonus can be used separately. If a bonus is active on your account, other bonuses will be unavailable until it is wagered."}',
             'value_es' => '{"0":"No, cada bono se puede usar por separado. Si hay un bono activo en su cuenta, otros bonos no estarán disponibles hasta que se cumplan los requisitos de apuesta del primero."}',
             'value_fr' => '{"0":"Non, chaque bonus doit être utilisé séparément. Si un bonus est actif sur votre compte, les autres bonus ne seront pas disponibles tant qu’il n’a pas été misé."}',
             'value_pt' => '{"0":"Não, cada bónus deve ser usado separadamente. Se houver um bónus ativo na sua conta, os outros bónus não estarão disponíveis até que o primeiro seja apostado."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How to get cashback?"}',
             'value_es' => '{"0":"¿Cómo obtener cashback?"}',
             'value_fr' => '{"0":"Comment obtenir du cashback ?"}',
             'value_pt' => '{"0":"Como obter cashback?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited weekly based on your bets. To receive cashback, you need to have an active account and meet the promotion requirements."}',
             'value_es' => '{"0":"El cashback se acredita semanalmente en función de sus apuestas. Para recibirlo, debe tener una cuenta activa y cumplir con los requisitos de las promociones."}',
             'value_fr' => '{"0":"Le cashback est crédité chaque semaine en fonction de vos paris. Pour le recevoir, vous devez avoir un compte actif et remplir les conditions des promotions."}',
             'value_pt' => '{"0":"O cashback é creditado semanalmente com base nas suas apostas. Para recebê-lo, é necessário ter uma conta ativa e cumprir os requisitos das promoções."}',
             'order' => 37
            ]
        );
    }
}
