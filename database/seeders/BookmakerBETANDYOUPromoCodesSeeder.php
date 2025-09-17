<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a variety of bonuses and promo codes designed for both new and regular players. These include welcome bonuses on the first deposit, reload bonuses, cashback, and special promotions for active users. The bonuses are structured to provide extra opportunities for sports betting or casino play."}',
             'value_es' => '{"0":"BETANDYOU ofrece una amplia gama de bonos y códigos promocionales pensados tanto para nuevos usuarios como para jugadores habituales. Entre ellos se incluyen bonos de bienvenida en el primer depósito, bonos por recarga, reembolsos y promociones especiales para usuarios activos. Estos bonos están diseñados para brindar más oportunidades de apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"BETANDYOU propose une variété de bonus et de codes promotionnels destinés aussi bien aux nouveaux joueurs qu’aux utilisateurs réguliers. Cela inclut des bonus de bienvenue sur le premier dépôt, des bonus de recharge, du cashback ainsi que des promotions spéciales pour les joueurs actifs. Les bonus sont conçus pour offrir davantage de possibilités de paris sportifs ou de jeux de casino."}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma variedade de bônus e códigos promocionais voltados tanto para novos usuários quanto para jogadores frequentes. Entre eles estão o bônus de boas-vindas no primeiro depósito, bônus de recarga, cashback e promoções especiais para usuários ativos. Os bônus são desenvolvidos para oferecer mais oportunidades de apostas esportivas ou jogos de cassino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The company regularly updates its promo menu by adding limited-time offers and seasonal deals. The terms and conditions for claiming bonuses can be found on the official website, and in our review we highlight some of the key promotions. You will learn how to get an additional +100% on your first deposit for sports betting or casino games with the promo code :promocode."}',
             'value_es' => '{"0":"La compañía actualiza constantemente su menú de promociones, añadiendo ofertas temporales y campañas de temporada. Las condiciones para obtener los bonos se pueden consultar en el sitio web oficial, y en nuestra reseña destacamos algunas de las promociones principales. Descubrirás cómo obtener un +100% adicional en tu primer depósito para apuestas deportivas o juegos de casino con el código promocional :promocode."}',
             'value_fr' => '{"0":"L’opérateur met régulièrement à jour son menu promotionnel en ajoutant des offres limitées dans le temps et des promotions saisonnières. Les conditions d’obtention des bonus sont disponibles sur le site officiel, et dans notre revue nous présentons certaines offres clés. Vous apprendrez comment obtenir +100 % supplémentaires sur votre premier dépôt pour les paris sportifs ou les jeux de casino grâce au code promo :promocode."}',
             'value_pt' => '{"0":"A empresa atualiza constantemente o seu menu de promoções, adicionando ofertas temporárias e campanhas sazonais. As regras para obtenção dos bônus podem ser consultadas no site oficial, e em nossa análise destacamos algumas das promoções principais. Você ficará sabendo como garantir +100% extras no seu primeiro depósito para apostas esportivas ou jogos de cassino com o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode, you first need to register on the website. This can be done in two ways: by phone number or by email. You must fill in all the fields with valid information. At this stage, you need to enter the promo code :promocode in the special field. Indicate where you would like to use the bonuses, whether for casino games, for sports betting, or to receive free bets. After that, you can confirm your registration."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode primero es necesario registrarse en el sitio web. Esto puede hacerse de dos maneras: con el número de teléfono o con el correo electrónico. Debe completar todos los campos con información válida. En esta etapa es necesario ingresar el código promocional :promocode en el campo correspondiente. Indique dónde desea utilizar los bonos, ya sea para juegos de casino, apuestas deportivas o para obtener apuestas gratuitas. Después de esto, podrá confirmar su registro."}',
             'value_fr' => '{"0":"Pour utiliser le code promotionnel :promocode, il faut d’abord s’inscrire sur le site. Deux options sont possibles : par numéro de téléphone ou par adresse e-mail. Vous devez remplir tous les champs avec des informations valides. À cette étape, il est nécessaire de saisir le code promotionnel :promocode dans le champ prévu. Indiquez si vous souhaitez utiliser les bonus pour les jeux de casino, pour les paris sportifs ou pour obtenir des paris gratuits. Après cela, vous pouvez confirmer votre inscription."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode, primeiro é necessário registrar-se no site. Isso pode ser feito de duas formas: pelo número de telefone ou pelo e-mail. É preciso preencher todos os campos com informações válidas. Nesta etapa, é necessário inserir o código promocional :promocode no campo apropriado. Indique onde deseja utilizar os bônus, seja para jogos de cassino, apostas esportivas ou para receber apostas grátis. Depois disso, você pode confirmar o registro."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To receive the sports betting bonus, you need to make a deposit from $1 to $130. For casino play, the deposit must be from $10 to $340. To receive free bets, a minimum deposit of $60 is required."}',
             'value_es' => '{"0":"Para recibir el bono de apuestas deportivas, es necesario realizar un depósito de entre 1 y 130 dólares. Para el casino, el depósito debe ser de entre 10 y 340 dólares. Para obtener apuestas gratuitas, se requiere un depósito mínimo de 60 dólares."}',
             'value_fr' => '{"0":"Pour obtenir le bonus sur les paris sportifs, il faut effectuer un dépôt compris entre 1 et 130 dollars. Pour les jeux de casino, le dépôt doit être compris entre 10 et 340 dollars. Pour recevoir des paris gratuits, un dépôt minimum de 60 dollars est requis."}',
             'value_pt' => '{"0":"Para receber o bônus de apostas esportivas, é necessário fazer um depósito de 1 a 130 dólares. Para jogos de cassino, o depósito deve variar de 10 a 340 dólares. Para receber apostas grátis, é preciso realizar um depósito mínimo de 60 dólares."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw bonus funds, you must first meet the wagering requirements. Let’s review them for each type of bonus."}',
             'value_es' => '{"0":"Para poder retirar los fondos de bonificación, primero es necesario cumplir con los requisitos de apuesta. Veamos los detalles para cada tipo de bono."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds de bonus, il faut d’abord remplir les conditions de mise. Voyons-les pour chaque type de bonus."}',
             'value_pt' => '{"0":"Para poder sacar os fundos de bônus, é necessário primeiro cumprir os requisitos de apostas. Vamos analisá-los para cada tipo de bônus."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The casino bonus must be wagered 35 times within 7 days after activation. While wagering, the bet size cannot exceed $5."}',
             'value_es' => '{"0":"El bono de casino debe apostarse 35 veces en un plazo de 7 días tras la activación. Durante el rollover no se puede superar una apuesta de 5 dólares."}',
             'value_fr' => '{"0":"Le bonus de casino doit être misé 35 fois dans les 7 jours suivant l’activation. Pendant le wagering, la mise ne peut pas dépasser 5 dollars."}',
             'value_pt' => '{"0":"O bônus de cassino deve ser apostado 35 vezes no prazo de 7 dias após a ativação. Durante o rollover, não é permitido fazer apostas superiores a 5 dólares."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times using accumulator bets. Each accumulator must include at least 3 events, and at least 3 of those events must have odds of no less than 1.40."}',
             'value_es' => '{"0":"El bono para apuestas deportivas debe apostarse 5 veces en forma de apuestas combinadas. Cada combinada debe incluir al menos 3 eventos, y como mínimo 3 de esos eventos deben tener cuotas no inferiores a 1.40."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs doit être rejoué 5 fois sous forme de paris combinés. Chaque combiné doit comprendre au moins 3 événements, et au moins 3 de ces événements doivent avoir une cote d’au moins 1.40."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado 5 vezes em apostas múltiplas. Cada múltipla deve incluir pelo menos 3 eventos, e no mínimo 3 desses eventos devem ter odds de não menos que 1,40."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"If the bonus type is free bets, you must place an accumulator bet with at least 4 events, each with odds over 1.6, using the received promo code. The bonus must be used within 30 days from the date of registration."}',
             'value_es' => '{"0":"Si el tipo de bono son freebets, es necesario realizar una apuesta combinada con al menos 4 eventos con cuota superior a 1.6, utilizando el código promocional recibido. El bono debe usarse dentro de los 30 días posteriores al registro."}',
             'value_fr' => '{"0":"Si le type de bonus est des freebets, il faut placer un pari combiné avec au minimum 4 événements ayant une cote supérieure à 1.6, en utilisant le code promo reçu. Le bonus doit être utilisé dans les 30 jours suivant l’inscription."}',
             'value_pt' => '{"0":"Se o tipo de bônus for freebets, é necessário fazer uma aposta múltipla com pelo menos 4 eventos com odds acima de 1,6, utilizando o código promocional recebido. O bônus deve ser usado dentro de 30 dias a partir da data de registro."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU does not offer a permanent no deposit bonus. Occasionally, there are temporary promotions where you can receive free spins or free bets without making a deposit, for example through contests, partner promo gifts, or the loyalty program."}',
             'value_es' => '{"0":"BETANDYOU no ofrece un bono sin depósito permanente. De vez en cuando aparecen promociones temporales en las que se pueden obtener giros gratis o apuestas gratis sin necesidad de depósito, por ejemplo a través de concursos, regalos promocionales de socios o el programa de fidelidad."}',
             'value_fr' => '{"0":"BETANDYOU ne propose pas de bonus sans dépôt permanent. Parfois, il existe des promotions temporaires permettant d’obtenir des free spins ou des paris gratuits sans dépôt, par exemple via des concours, des cadeaux promotionnels de partenaires ou le programme de fidélité."}',
             'value_pt' => '{"0":"A BETANDYOU não oferece um bônus sem depósito permanente. Ocasionalmente, surgem promoções temporárias em que é possível receber rodadas grátis ou apostas grátis sem necessidade de depósito, por exemplo através de concursos, brindes promocionais de parceiros ou pelo programa de fidelidade."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Such offers are usually limited in time and come with strict wagering requirements. Therefore, it is not advisable to rely on no deposit bonuses as a steady source of funds. They are more suitable for exploring the platform and testing new games."}',
             'value_es' => '{"0":"Estas ofertas suelen estar limitadas en el tiempo y tienen condiciones estrictas de apuesta. Por lo tanto, no conviene considerar los bonos sin depósito como una fuente constante de fondos. Son más adecuados para familiarizarse con la plataforma y probar nuevos juegos."}',
             'value_fr' => '{"0":"Ces offres sont généralement limitées dans le temps et accompagnées de conditions de mise strictes. Il n’est donc pas recommandé de compter sur les bonus sans dépôt comme source régulière de fonds. Ils sont plutôt destinés à découvrir la plateforme et à tester de nouveaux jeux."}',
             'value_pt' => '{"0":"Essas ofertas geralmente são limitadas no tempo e possuem requisitos de apostas rigorosos. Por isso, não é recomendável contar com os bônus sem depósito como uma fonte constante de fundos. Eles são mais indicados para conhecer a plataforma e experimentar novos jogos."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For regular players, BETANDYOU offers ongoing promotions and bonuses. For example, you can receive bonuses after your second, third, and fourth deposit. There are also cashback programs and VIP offers for active users. Accumulator bonuses allow you to get an extra +10% on winnings, while cashback returns 3% of lost funds. Below we will look at some of the promotional offers, and the full list can be found on the official website in the PROMO section."}',
             'value_es' => '{"0":"Para los jugadores habituales, BETANDYOU ofrece promociones y bonos regulares. Por ejemplo, puedes recibir bonos tras el segundo, tercer y cuarto depósito. También existen programas de reembolso y ofertas VIP para los usuarios más activos. Los bonos en apuestas combinadas permiten obtener un +10% adicional sobre las ganancias, mientras que el cashback devuelve un 3% de las pérdidas. A continuación, analizaremos algunas de las promociones, y la lista completa está disponible en el sitio oficial en la sección PROMO."}',
             'value_fr' => '{"0":"Pour les joueurs réguliers, BETANDYOU propose des promotions et des bonus fréquents. Par exemple, vous pouvez recevoir des bonus après votre deuxième, troisième et quatrième dépôt. Il existe également des programmes de cashback et des offres VIP pour les joueurs actifs. Les bonus sur les paris combinés permettent d’obtenir +10 % supplémentaires sur les gains, tandis que le cashback restitue 3 % des pertes. Nous examinerons ci-dessous certaines des offres promotionnelles, et la liste complète est disponible sur le site officiel dans la section PROMO."}',
             'value_pt' => '{"0":"Para os jogadores regulares, a BETANDYOU oferece promoções e bônus frequentes. Por exemplo, é possível receber bônus após o segundo, terceiro e quarto depósito. Há também programas de reembolso e ofertas VIP para os usuários mais ativos. Os bônus em apostas múltiplas permitem ganhar +10% extras sobre os lucros, enquanto o cashback devolve 3% do valor perdido. A seguir, apresentaremos algumas das promoções, e a lista completa pode ser consultada no site oficial na seção PROMO."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Free bet on your first deposit"}',
                'value_es' => '{"0":"Apuesta gratis con su primer depósito"}',
                'value_fr' => '{"0":"Pari gratuit sur votre premier dépôt"}',
                'value_pt' => '{"0":"Aposta grátis no seu primeiro depósito"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"After your first deposit, you can receive a free bet as a percentage of the deposited amount. For example, if you deposit from $60, BETANDYOU credits 20% of the deposit as a free bet. The bonus is automatically issued in the form of a promo code, but it does not exceed $35."}',
             'value_es' => '{"0":"Después de tu primer depósito, puedes recibir una apuesta gratuita equivalente a un porcentaje del monto ingresado. Por ejemplo, si realizas un depósito a partir de $60, BETANDYOU acredita el 20% del depósito como freebet. El bono se entrega automáticamente en forma de un código promocional, pero no puede superar los $35."}',
             'value_fr' => '{"0":"Après votre premier dépôt, vous pouvez recevoir un freebet correspondant à un pourcentage du montant déposé. Par exemple, si vous déposez à partir de 60 $, BETANDYOU crédite 20 % du dépôt sous forme de freebet. Le bonus est automatiquement attribué sous la forme d’un code promo, mais il ne peut pas dépasser 35 $."}',
             'value_pt' => '{"0":"Após o primeiro depósito, você pode receber uma aposta grátis equivalente a uma porcentagem do valor depositado. Por exemplo, ao depositar a partir de $60, a BETANDYOU credita 20% do valor em forma de freebet. O bônus é concedido automaticamente como um código promocional, mas não pode ultrapassar $35."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To wager the bonus, you need to place an accumulator bet with at least 4 events and odds above 1.6, using the received promo code. The bonus can be used within 30 days from the date of registration."}',
             'value_es' => '{"0":"Para liberar el bono, es necesario realizar una apuesta combinada con al menos 4 eventos y una cuota superior a 1.6, utilizando el código promocional recibido. El bono puede utilizarse dentro de los 30 días posteriores al registro."}',
             'value_fr' => '{"0":"Pour miser le bonus, vous devez effectuer un pari combiné comprenant au moins 4 événements avec une cote supérieure à 1,6, en utilisant le code promo reçu. Le bonus peut être utilisé dans les 30 jours suivant la date d’inscription."}',
             'value_pt' => '{"0":"Para liberar o bônus, é necessário fazer uma aposta múltipla com no mínimo 4 eventos e odds acima de 1.6, utilizando o código promocional recebido. O bônus pode ser usado dentro de 30 dias a partir da data de registro."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_es' => '{"0":"RECOMIENDE A UN AGENTE MOBCASH"}',
                'value_fr' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_pt' => '{"0":"REFIRA UM AGENTE MOBCASH"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This promotion offers a reward for bringing in new players. Tell your friends about BETANDYOU and earn from it! Build a multi-level network by inviting friends who, in turn, invite their own friends. In your personal account, you will find your unique partner link. All you need to do is share the link with a friend and receive a reward."}',
             'value_es' => '{"0":"Esta promoción ofrece una recompensa por invitar a nuevos jugadores. ¡Habla de BETANDYOU a tus amigos y gana con ello! Crea una red multinivel invitando a tus amigos, quienes a su vez podrán invitar a los suyos. En tu cuenta personal encontrarás tu enlace de socio único. Solo tienes que compartirlo con un amigo y recibir la recompensa."}',
             'value_fr' => '{"0":"Cette promotion prévoit une récompense pour chaque nouveau joueur parrainé. Parlez de BETANDYOU à vos amis et gagnez de l’argent grâce à eux ! Construisez un réseau à plusieurs niveaux en invitant vos amis, qui à leur tour inviteront les leurs. Dans votre compte personnel, vous trouverez votre lien de partenaire unique. Il vous suffit de partager ce lien avec un ami et de recevoir une récompense."}',
             'value_pt' => '{"0":"Esta promoção oferece uma recompensa por indicar novos jogadores. Fale sobre a BETANDYOU para os seus amigos e ganhe com isso! Construa uma rede multinível, convidando amigos que, por sua vez, convidarão os seus. Na sua conta pessoal, você encontrará o seu link exclusivo de parceiro. Basta compartilhá-lo com um amigo e receber a recompensa."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Friends register, deposit funds, and place bets. You earn a percentage of BETANDYOU’s net profit as your reward."}',
             'value_es' => '{"0":"Los amigos se registran, depositan fondos y realizan apuestas. Tú recibes un porcentaje de las ganancias netas de BETANDYOU como recompensa."}',
             'value_fr' => '{"0":"Les amis s’inscrivent, déposent de l’argent et placent des paris. Vous recevez un pourcentage du bénéfice net de BETANDYOU en guise de récompense."}',
             'value_pt' => '{"0":"Os amigos se registram, depositam fundos e fazem apostas. Você recebe uma porcentagem do lucro líquido da BETANDYOU como recompensa."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Advancebet"}',
                'value_es' => '{"0":"Advancebet"}',
                'value_fr' => '{"0":"Advancebet"}',
                'value_pt' => '{"0":"Apostaconfiança"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to place bets on credit, using future potential winnings as a guarantee. The available amount is calculated individually, and the feature works for events starting within 48 hours or in live mode."}',
             'value_es' => '{"0":"Esta promoción te permite realizar apuestas a crédito, utilizando las posibles ganancias futuras como garantía. El monto disponible se calcula de manera individual y la función está disponible para eventos que comienzan en un plazo de 48 horas o en modo en vivo."}',
             'value_fr' => '{"0":"Cette promotion vous donne la possibilité de parier à crédit, en utilisant vos gains potentiels futurs comme garantie. Le montant disponible est calculé individuellement, et la fonction est disponible pour les événements qui commencent dans les 48 heures ou en direct."}',
             'value_pt' => '{"0":"Esta promoção permite fazer apostas a crédito, utilizando ganhos potenciais futuros como garantia. O valor disponível é calculado individualmente, e a função está disponível para eventos que começam dentro de 48 horas ou em modo ao vivo."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"If the winnings do not cover the used amount, the operator may cancel the bet or deduct the funds from future settlements. Thanks to this promotion, you have the opportunity not to miss events that may potentially be profitable."}',
             'value_es' => '{"0":"Si las ganancias no cubren el monto utilizado, el operador puede anular la apuesta o descontar los fondos de los próximos pagos. Gracias a esta promoción, puedes no perderte eventos que potencialmente podrían ser rentables."}',
             'value_fr' => '{"0":"Si les gains ne couvrent pas le montant utilisé, l’opérateur peut annuler le pari ou déduire les fonds des règlements futurs. Grâce à cette promotion, vous avez la possibilité de ne pas manquer des événements potentiellement gagnants."}',
             'value_pt' => '{"0":"Se os ganhos não cobrirem o valor utilizado, o operador pode cancelar a aposta ou deduzir os fundos das próximas liquidações. Graças a esta promoção, você tem a chance de não perder eventos que potencialmente podem gerar ganhos."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"How to activate a promo code during registration?"}',
             'value_es' => '{"0":"¿Cómo activar un código promocional durante el registro?"}',
             'value_fr' => '{"0":"Comment activer un code promo lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como ativar um código promocional no momento do registro?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"You need to enter the code during registration and make a deposit. At the top of this review, we mentioned the deposit limits for each type of bonus."}',
             'value_es' => '{"0":"Debes ingresar el código durante el registro y realizar un depósito. Al inicio de esta reseña hemos indicado los límites de depósito para cada tipo de bono."}',
             'value_fr' => '{"0":"Vous devez saisir le code lors de l’inscription et effectuer un dépôt. En haut de cette revue, nous avons précisé les limites de dépôt pour chaque type de bonus."}',
             'value_pt' => '{"0":"Você precisa inserir o código durante o registro e fazer um depósito. No início desta análise, mencionamos os limites de depósito para cada tipo de bônus."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Are there no deposit bonuses?"}',
             'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
             'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes there are temporary free bets or free spins, but there is no permanent no deposit program."}',
             'value_es' => '{"0":"A veces hay apuestas gratuitas o giros gratis temporales, pero no existe un programa sin depósito permanente."}',
             'value_fr' => '{"0":"Parfois, il y a des paris gratuits ou des free spins temporaires, mais il n’y a pas de programme sans dépôt permanent."}',
             'value_pt' => '{"0":"Às vezes há apostas grátis ou rodadas grátis temporárias, mas não existe um programa sem depósito permanente."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What is Advancebet?"}',
             'value_es' => '{"0":"¿Qué es Advancebet?"}',
             'value_fr' => '{"0":"Qu’est-ce que l’Advancebet ?"}',
             'value_pt' => '{"0":"O que é o Advancebet?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The feature allows you to place bets on credit within the available limit."}',
             'value_es' => '{"0":"La función permite realizar apuestas a crédito dentro del límite disponible."}',
             'value_fr' => '{"0":"Cette fonction permet de placer des paris à crédit dans la limite disponible."}',
             'value_pt' => '{"0":"A função permite fazer apostas a crédito dentro do limite disponível."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What can you get for referring a friend in the Mobcash promotion?"}',
             'value_es' => '{"0":"¿Qué se puede recibir por referir a un amigo en la promoción Mobcash?"}',
             'value_fr' => '{"0":"Que peut-on obtenir pour un ami parrainé dans le cadre de la promotion Mobcash ?"}',
             'value_pt' => '{"0":"O que se pode receber ao indicar um amigo na promoção Mobcash?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 36
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For a referred friend who completes verification and makes a deposit, a bonus is credited."}',
             'value_es' => '{"0":"Por un amigo referido que complete la verificación y realice un depósito, se acredita un bono."}',
             'value_fr' => '{"0":"Pour un ami parrainé qui effectue la vérification et fait un dépôt, un bonus est attribué."}',
             'value_pt' => '{"0":"Por um amigo indicado que concluir a verificação e fizer um depósito, um bônus é creditado."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple bonuses be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden combinar varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on combiner plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível combinar vários bônus ao mesmo tempo?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 38
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"No, usually only one bonus can be active at a time. To activate a new bonus, you need to either complete the wagering of the previous one or manually cancel it."}',
             'value_es' => '{"0":"No, normalmente solo puede estar activo un bono a la vez. Para activar uno nuevo, debes completar el requisito de apuesta del anterior o cancelarlo manualmente."}',
             'value_fr' => '{"0":"Non, en général un seul bonus peut être actif à la fois. Pour activer un nouveau bonus, il faut soit terminer le pari du précédent, soit l’annuler manuellement."}',
             'value_pt' => '{"0":"Não, geralmente apenas um bônus pode estar ativo por vez. Para ativar um novo bônus, é necessário completar o requisito de aposta do anterior ou cancelá-lo manualmente."}',
             'order' => 38
            ]
        );
    }
}
