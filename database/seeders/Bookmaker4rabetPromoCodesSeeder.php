<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET is an international bookmaker and online casino that actively operates in the South Asian markets, especially in India. The platform is known for its wide selection of sports events for betting, a large casino section, and convenient mobile applications. One of the brand’s key advantages is its system of bonuses and promo codes, which allows both new and regular users to receive additional funds for playing."}',
             'value_es' => '{"0":"4RABET es una casa de apuestas internacional y un casino en línea que opera activamente en los mercados del sur de Asia, especialmente en la India. La plataforma es conocida por su amplia selección de eventos deportivos para apostar, una gran sección de casino y aplicaciones móviles convenientes. Una de las principales ventajas de la marca es su sistema de bonos y códigos promocionales, que permite tanto a nuevos como a clientes habituales obtener fondos adicionales para jugar."}',
             'value_fr' => '{"0":"4RABET est un bookmaker international et un casino en ligne qui opère activement sur les marchés d’Asie du Sud, en particulier en Inde. La plateforme est réputée pour son large choix d’événements sportifs sur lesquels parier, sa vaste section de casino et ses applications mobiles pratiques. L’un des principaux atouts de la marque est son système de bonus et de codes promotionnels, qui permet aussi bien aux nouveaux utilisateurs qu’aux joueurs réguliers d’obtenir des fonds supplémentaires pour jouer."}',
             'value_pt' => '{"0":"4RABET é uma casa de apostas internacional e um cassino online que atua ativamente nos mercados do Sul da Ásia, especialmente na Índia. A plataforma é conhecida por sua ampla seleção de eventos esportivos para apostas, uma grande seção de cassino e aplicativos móveis convenientes. Uma das principais vantagens da marca é o seu sistema de bônus e códigos promocionais, que permite tanto a novos quanto a clientes regulares obter fundos adicionais para jogar."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The site offers welcome packages for sports and casino, special missions with prizes, as well as regular promotions for active customers. In this review, we will look at some of them and also explain how to use the promo code :promocode to receive a 150% bonus on your first deposit."}',
             'value_es' => '{"0":"En el sitio se ofrecen paquetes de bienvenida para deportes y casino, misiones especiales con premios, así como promociones regulares para los clientes activos. En esta reseña analizaremos algunas de ellas y también explicaremos cómo utilizar el código promocional :promocode para recibir un bono del 150% en el primer depósito."}',
             'value_fr' => '{"0":"Le site propose des packs de bienvenue pour les paris sportifs et le casino, des missions spéciales avec des récompenses, ainsi que des promotions régulières pour les clients actifs. Dans cet article, nous examinerons certains d’entre eux et expliquerons également comment utiliser le code promotionnel :promocode afin de recevoir un bonus de 150 % sur votre premier dépôt."}',
             'value_pt' => '{"0":"No site são oferecidos pacotes de boas-vindas para esportes e cassino, missões especiais com prêmios, bem como promoções regulares para clientes ativos. Nesta análise, vamos abordar algumas delas e também explicar como usar o código promocional :promocode para receber um bônus de 150% no primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode on 4RABET, first go to the official website and click the Registration button."}',
             'value_es' => '{"0":"Para usar el código promocional :promocode en 4RABET, primero vaya al sitio web oficial y haga clic en el botón de Registro."}',
             'value_fr' => '{"0":"Pour utiliser le code promotionnel :promocode sur 4RABET, rendez-vous d’abord sur le site officiel et cliquez sur le bouton Inscription."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode no 4RABET, primeiro acesse o site oficial e clique no botão de Registro."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"After that, fill out the standard registration form, where you need to provide your phone number, create a password, and select your account currency. Then click “I have a promo code” and enter the promo code :promocode in the new field. After this, choose one of the available welcome packages: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins» or «Live Casino Welcome Bonus 150%»."}',
             'value_es' => '{"0":"Después de eso, complete el formulario de registro estándar, donde debe ingresar su número de teléfono, crear una contraseña y seleccionar la moneda de la cuenta. Luego haga clic en “I have a promo code” e introduzca el código promocional :promocode en el nuevo campo. Después de esto, elija uno de los paquetes de bienvenida disponibles: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins» o «Live Casino Welcome Bonus 150%»."}',
             'value_fr' => '{"0":"Ensuite, remplissez le formulaire d’inscription standard, où vous devez indiquer votre numéro de téléphone, créer un mot de passe et choisir la devise de votre compte. Puis cliquez sur « I have a promo code » et saisissez le code promotionnel :promocode dans le nouveau champ. Après cela, choisissez l’un des packs de bienvenue disponibles : « Easiest Win Crash Pack 700% », « Crash Welcome 700% », « Sports Welcome Offer 700% », « Slots 150% Bonus + 200 Free Spins » ou « Live Casino Welcome Bonus 150% »."}',
             'value_pt' => '{"0":"Em seguida, preencha o formulário de registro padrão, onde deve informar seu número de telefone, criar uma senha e selecionar a moeda da conta. Depois clique em “I have a promo code” e insira o código promocional :promocode no novo campo. Após isso, escolha um dos pacotes de boas-vindas disponíveis: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins» ou «Live Casino Welcome Bonus 150%»."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Once the code is entered and the profile confirmed, you need to make a minimum deposit starting from $3 or the equivalent in another currency, and the bonus will be credited automatically according to the selected package."}',
             'value_es' => '{"0":"Una vez que el código se haya introducido y el perfil confirmado, deberá realizar un depósito mínimo a partir de $3 o el equivalente en otra moneda, y el bono se acreditará automáticamente según el paquete elegido."}',
             'value_fr' => '{"0":"Une fois le code saisi et le profil confirmé, vous devrez effectuer un dépôt minimum à partir de 3 $ ou l’équivalent dans une autre devise, et le bonus sera automatiquement crédité selon le pack choisi."}',
             'value_pt' => '{"0":"Depois de inserir o código e confirmar o perfil, será necessário fazer um depósito mínimo a partir de $3 ou o equivalente em outra moeda, e o bônus será creditado automaticamente de acordo com o pacote selecionado."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds du bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Para poder sacar os fundos do bônus, primeiro é necessário cumprir os requisitos de aposta."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the «Easiest Win Crash Pack 700%» welcome package, you need to deposit between $3 and $5 and wager your bonus 20 times within 7 days on the games Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_es' => '{"0":"Si eligió el paquete de bienvenida «Easiest Win Crash Pack 700%», debe depositar entre 3 y 5 dólares y apostar su bono 20 veces en un plazo de 7 días en los juegos Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_fr' => '{"0":"Si vous avez choisi le pack de bienvenue « Easiest Win Crash Pack 700% », vous devez déposer entre 3 et 5 $ et miser votre bonus 20 fois dans un délai de 7 jours sur les jeux Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_pt' => '{"0":"Se você escolheu o pacote de boas-vindas «Easiest Win Crash Pack 700%», precisa depositar entre $3 e $5 e apostar o bônus 20 vezes dentro de 7 dias nos jogos Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the «Crash Welcome 700%» welcome package, you need to deposit between $3 and $110 and wager your bonus 40 times within 7 days on the games Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_es' => '{"0":"Si eligió el paquete de bienvenida «Crash Welcome 700%», debe depositar entre 3 y 110 dólares y apostar su bono 40 veces en un plazo de 7 días en los juegos Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_fr' => '{"0":"Si vous avez choisi le pack de bienvenue « Crash Welcome 700% », vous devez déposer entre 3 et 110 $ et miser votre bonus 40 fois dans un délai de 7 jours sur les jeux Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_pt' => '{"0":"Se você escolheu o pacote de boas-vindas «Crash Welcome 700%», precisa depositar entre $3 e $110 e apostar o bônus 40 vezes dentro de 7 dias nos jogos Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the «Sports Welcome Offer 700%» package, you need to deposit between $3 and $55 and wager your bonus 7 times on sports bets with odds higher than 1.5 within 7 days."}',
             'value_es' => '{"0":"Si eligió el paquete «Sports Welcome Offer 700%», debe depositar entre 3 y 55 dólares y apostar su bono 7 veces en apuestas deportivas con cuotas superiores a 1,5 en un plazo de 7 días."}',
             'value_fr' => '{"0":"Si vous avez choisi le pack « Sports Welcome Offer 700% », vous devez déposer entre 3 et 55 $ et miser votre bonus 7 fois sur des paris sportifs avec une cote supérieure à 1,5 dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Se você escolheu o pacote «Sports Welcome Offer 700%», precisa depositar entre $3 e $55 e apostar o bônus 7 vezes em apostas esportivas com odds acima de 1,5 dentro de 7 dias."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the «Slots 150% Bonus + 200 Free Spins» package, you need to deposit between $3 and $110 and wager your bonus 20 times within one day on the game Slots by Three Oaks."}',
             'value_es' => '{"0":"Si eligió el paquete «Slots 150% Bonus + 200 Free Spins», debe depositar entre 3 y 110 dólares y apostar su bono 20 veces en un solo día en el juego Slots by Three Oaks."}',
             'value_fr' => '{"0":"Si vous avez choisi le pack « Slots 150% Bonus + 200 Free Spins », vous devez déposer entre 3 et 110 $ et miser votre bonus 20 fois en une journée sur le jeu Slots by Three Oaks."}',
             'value_pt' => '{"0":"Se você escolheu o pacote «Slots 150% Bonus + 200 Free Spins», precisa depositar entre $3 e $110 e apostar o bônus 20 vezes em um único dia no jogo Slots by Three Oaks."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you chose the «Live Casino Welcome Bonus 150%» package, you need to deposit between $3 and $110 and wager your bonus 45 times within one day in Live Casino by Evolution."}',
             'value_es' => '{"0":"Si eligió el paquete «Live Casino Welcome Bonus 150%», debe depositar entre 3 y 110 dólares y apostar su bono 45 veces en un solo día en el Live Casino de Evolution."}',
             'value_fr' => '{"0":"Si vous avez choisi le pack « Live Casino Welcome Bonus 150% », vous devez déposer entre 3 et 110 $ et miser votre bonus 45 fois en une journée dans le Live Casino d’Evolution."}',
             'value_pt' => '{"0":"Se você escolheu o pacote «Live Casino Welcome Bonus 150%», precisa depositar entre $3 e $110 e apostar o bônus 45 vezes em um único dia no Live Casino da Evolution."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At 4RABET, no deposit bonuses are rare and generally not a permanent part of the official promotions set. Occasionally, a small number of free spins without a deposit may be offered to limited groups of users, but this is more the exception than the rule. Nevertheless, we recommend checking the Bonuses section from time to time so you don’t miss such an offer."}',
             'value_es' => '{"0":"En 4RABET, los bonos sin depósito son poco frecuentes y, por lo general, no forman parte permanente del conjunto oficial de promociones. Ocasionalmente, se puede ofrecer una pequeña cantidad de giros gratis sin depósito a grupos limitados de usuarios, pero esto es más la excepción que la regla. Aun así, recomendamos revisar la sección de Bonos de vez en cuando para no perderse una de estas ofertas."}',
             'value_fr' => '{"0":"Chez 4RABET, les bonus sans dépôt sont rares et ne constituent généralement pas une partie permanente de l’ensemble officiel des promotions. Il arrive parfois qu’un petit nombre de free spins sans dépôt soient proposés à des groupes limités d’utilisateurs, mais cela reste l’exception plutôt que la règle. Néanmoins, nous conseillons de vérifier régulièrement la section Bonus afin de ne pas manquer une telle offre."}',
             'value_pt' => '{"0":"No 4RABET, os bônus sem depósito são raros e geralmente não fazem parte permanente do conjunto oficial de promoções. Ocasionalmente, pode ser oferecida uma pequena quantidade de rodadas grátis sem depósito para grupos limitados de usuários, mas isso é mais uma exceção do que uma regra. Ainda assim, recomendamos verificar a seção de Bônus de vez em quando para não perder esse tipo de oferta."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET actively supports a program for existing customers. Among the most common are daily and weekly missions, cashbacks, and tournaments. Players need to complete daily or weekly tasks, such as placing bets on a certain number of events. After completing a mission, users can receive free spins, bonuses, and free bets. Below, we take a closer look at some interesting promotional offers that allow you to increase your deposit for free."}',
             'value_es' => '{"0":"4RABET apoya activamente un programa para clientes existentes. Entre los más comunes se encuentran las misiones diarias y semanales, los reembolsos en efectivo y los torneos. Es necesario completar tareas diarias o semanales, como apostar en una cierta cantidad de eventos. Después de completar una misión, se pueden recibir giros gratis, bonos y freebets. A continuación, analizamos más en detalle algunas ofertas promocionales interesantes que permiten aumentar el depósito de forma gratuita."}',
             'value_fr' => '{"0":"4RABET soutient activement un programme destiné aux clients existants. Parmi les plus courants figurent les missions quotidiennes et hebdomadaires, les cashbacks et les tournois. Il est nécessaire d’accomplir des tâches quotidiennes ou hebdomadaires, comme par exemple parier sur un certain nombre d’événements. Après avoir terminé une mission, les utilisateurs peuvent recevoir des free spins, des bonus et des paris gratuits. Ci-dessous, nous examinons plus en détail certaines offres promotionnelles intéressantes qui permettent d’augmenter gratuitement le dépôt."}',
             'value_pt' => '{"0":"A 4RABET apoia ativamente um programa para clientes já registados. Entre os mais comuns estão as missões diárias e semanais, os cashbacks e os torneios. É necessário cumprir tarefas diárias ou semanais, como apostar em um determinado número de eventos. Após concluir uma missão, é possível receber rodadas grátis, bônus e apostas grátis. A seguir, analisamos com mais detalhe algumas ofertas promocionais interessantes que permitem aumentar o depósito gratuitamente."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"A promotional offer with a 700% bonus fund on the first deposits. To take part in the promotion, you need to deposit from $3 to $110. After that, you must wager your bonus 40 times before it turns into real money. For example, if you receive a $10 bonus, you will need to place bets totaling $400, and the remaining amount will then be transferred to your real balance. The bonuses are distributed as follows:"}',
             'value_es' => '{"0":"Una oferta promocional con un fondo de bonificación del 700% en los primeros depósitos. Para participar en la promoción, es necesario realizar un depósito de entre $3 y $110. Después, deberá apostar su bonificación 40 veces antes de que se convierta en dinero real. Por ejemplo, si recibe un bono de $10, deberá realizar apuestas por un total de $400 y el resto del importe se transferirá a su saldo real. Los bonos se distribuyen de la siguiente manera:"}',
             'value_fr' => '{"0":"Une offre promotionnelle avec un fonds de bonus de 700 % sur les premiers dépôts. Pour participer à la promotion, il faut effectuer un dépôt compris entre 3 $ et 110 $. Ensuite, il est nécessaire de miser le bonus 40 fois avant qu’il ne se transforme en argent réel. Par exemple, si vous recevez un bonus de 10 $, vous devrez placer des paris pour un montant total de 400 $, et le reste sera transféré sur votre solde réel. Les bonus sont distribués comme suit :"}',
             'value_pt' => '{"0":"Uma oferta promocional com um fundo de bônus de 700% nos primeiros depósitos. Para participar da promoção, é necessário depositar entre $3 e $110. Em seguida, é preciso apostar o bônus 40 vezes antes que ele se transforme em dinheiro real. Por exemplo, se você receber um bônus de $10, será necessário realizar apostas no valor total de $400, e o restante será transferido para o seu saldo real. Os bônus são distribuídos da seguinte forma:"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list_v2',
             'value_en' => '{"0":"100% — on the first deposit",
                             "1":"150% — on the second deposit",
                             "2":"200% — on the third deposit",
                             "3":"250% — on the fourth deposit"}',
             'value_es' => '{"0":"100% — en el primer depósito",
                             "1":"150% — en el segundo depósito",
                             "2":"200% — en el tercer depósito",
                             "3":"250% — en el cuarto depósito"}',
             'value_fr' => '{"0":"100 % — sur le premier dépôt",
                             "1":"150 % — sur le deuxième dépôt",
                             "2":"200 % — sur le troisième dépôt",
                             "3":"250 % — sur le quatrième dépôt"}',
             'value_pt' => '{"0":"100% — no primeiro depósito",
                             "1":"150% — no segundo depósito",
                             "2":"200% — no terceiro depósito",
                             "3":"250% — no quarto depósito"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Only Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut) participate in the promotion."}',
             'value_es' => '{"0":"Solo participan en la promoción Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut)."}',
             'value_fr' => '{"0":"Seuls Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut) participent à la promotion."}',
             'value_pt' => '{"0":"Apenas Aviator (Spribe), JetX (SmartSoft), Chicken Road (InOut), Chicken Road 2 (InOut) participam na promoção."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Daily and Weekly Missions"}',
                'value_es' => '{"0":"Misiones Diarias y Semanales"}',
                'value_fr' => '{"0":"Missions Quotidiennes et Hebdomadaires"}',
                'value_pt' => '{"0":"Missões Diárias e Semanais"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"One of the interesting promotions at 4RABET is the «Daily & Weekly Missions» — a set of tasks of varying difficulty levels (easy/medium/hard) that are updated daily and weekly. By completing these tasks, such as placing a certain number of bets, playing specific slots, or building accumulators, the player earns experience points (XP), levels up, and unlocks rewards: free spins, cashback, free bets, or bonus funds."}',
             'value_es' => '{"0":"Una de las promociones interesantes de 4RABET es «Daily & Weekly Missions», un conjunto de tareas de diferentes niveles de dificultad (fácil/medio/difícil) que se actualizan diariamente y semanalmente. Al completar estas tareas, como realizar cierta cantidad de apuestas, jugar en determinados slots o crear acumuladores, el jugador gana puntos de experiencia (XP), sube de nivel y desbloquea recompensas: giros gratis, cashback, apuestas gratis o fondos de bonificación."}',
             'value_fr' => '{"0":"Une des promotions intéressantes de 4RABET est « Daily & Weekly Missions » — un ensemble de tâches de différents niveaux de difficulté (facile/moyen/difficile) qui sont mises à jour quotidiennement et hebdomadairement. En accomplissant ces tâches, comme effectuer un certain nombre de paris, jouer à des machines spécifiques ou créer des accumulations, le joueur gagne de l\'expérience (XP), monte de niveau et débloque des récompenses : tours gratuits, cashback, paris gratuits ou fonds bonus."}',
             'value_pt' => '{"0":"Uma das promoções interessantes da 4RABET é a «Daily & Weekly Missions» — um conjunto de tarefas de diferentes níveis de dificuldade (fácil/médio/difícil) que são atualizadas diariamente e semanalmente. Ao completar essas tarefas, como fazer um certo número de apostas, jogar em slots específicos ou criar acumuladores, o jogador ganha pontos de experiência (XP), sobe de nível e desbloqueia recompensas: rodadas grátis, cashback, apostas grátis ou fundos de bônus."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4RABET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4RABET"}',
                'value_fr' => '{"0":"FAQ de 4RABET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4RABET"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is a promo code required to receive the welcome bonus on 4RABET?"}',
             'value_es' => '{"0":"¿Se necesita un código promocional para recibir el bono de bienvenida en 4RABET?"}',
             'value_fr' => '{"0":"Un code promo est-il nécessaire pour obtenir le bonus de bienvenue sur 4RABET ?"}',
             'value_pt' => '{"0":"É necessário um código promocional para receber o bônus de boas-vindas no 4RABET?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Not always, the platform often allows you to choose a welcome package during registration without entering a code, but promo codes can enhance the standard offer."}',
             'value_es' => '{"0":"No siempre, la plataforma a menudo permite elegir un paquete de bienvenida durante el registro sin ingresar un código, pero los códigos promocionales pueden mejorar la oferta estándar."}',
             'value_fr' => '{"0":"Pas toujours, la plateforme permet souvent de choisir un pack de bienvenue lors de l’inscription sans saisir de code, mais les codes promo peuvent améliorer l’offre standard."}',
             'value_pt' => '{"0":"Nem sempre, a plataforma frequentemente permite escolher um pacote de boas-vindas durante o registro sem inserir um código, mas os códigos promocionais podem reforçar a oferta padrão."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What are the typical wagering requirements on 4RABET?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos típicos de apuesta en 4RABET?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise typiques sur 4RABET ?"}',
             'value_pt' => '{"0":"Quais são os requisitos típicos de apostas no 4RABET?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The conditions depend on the type of bonus. You can find more detailed information about the wagering requirements for each welcome package at the top of this review."}',
             'value_es' => '{"0":"Las condiciones dependen del tipo de bono. Puede encontrar información más detallada sobre los requisitos de apuesta para cada paquete de bienvenida en la parte superior de esta reseña."}',
             'value_fr' => '{"0":"Les conditions dépendent du type de bonus. Vous pouvez consulter des informations plus détaillées sur les conditions de mise pour chaque pack de bienvenue en haut de cette revue."}',
             'value_pt' => '{"0":"As condições dependem do tipo de bônus. Você pode encontrar informações mais detalhadas sobre os requisitos de apostas para cada pacote de boas-vindas no topo desta análise."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Are there free spins in the welcome package?"}',
             'value_es' => '{"0":"¿Hay giros gratis en el paquete de bienvenida?"}',
             'value_fr' => '{"0":"Y a-t-il des tours gratuits dans le pack de bienvenue ?"}',
             'value_pt' => '{"0":"Existem rodadas grátis no pacote de boas-vindas?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the “Slots 150% Bonus + 200 Free Spins” welcome package provides 200 free spins after registering on the 4RABET website."}',
             'value_es' => '{"0":"Sí, el paquete de bienvenida “Slots 150% Bonus + 200 Free Spins” otorga 200 giros gratis tras registrarse en el sitio web de 4RABET."}',
             'value_fr' => '{"0":"Oui, le pack de bienvenue “Slots 150% Bonus + 200 Free Spins” offre 200 tours gratuits après l’inscription sur le site 4RABET."}',
             'value_pt' => '{"0":"Sim, o pacote de boas-vindas “Slots 150% Bonus + 200 Free Spins” oferece 200 rodadas grátis após o registro no site da 4RABET."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonus funds be withdrawn immediately after being credited?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos de bonificación inmediatamente después de ser acreditados?"}',
             'value_fr' => '{"0":"Peut-on retirer les fonds de bonus immédiatement après leur crédit ?"}',
             'value_pt' => '{"0":"É possível sacar os fundos de bônus imediatamente após serem creditados?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No, bonus funds are subject to wagering requirements according to the promotion’s terms. Until you meet these requirements, withdrawals will not be possible."}',
             'value_es' => '{"0":"No, los fondos de bonificación están sujetos a los requisitos de apuesta según los términos de la promoción. Hasta que cumpla con estos requisitos, no será posible retirar los fondos."}',
             'value_fr' => '{"0":"Non, les fonds de bonus sont soumis aux conditions de mise de la promotion. Tant que vous n’avez pas rempli ces conditions, le retrait ne sera pas possible."}',
             'value_pt' => '{"0":"Não, os fundos de bônus estão sujeitos aos requisitos de aposta de acordo com os termos da promoção. Até cumprir esses requisitos, não será possível efetuar retiradas."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Where to check the current promo codes and terms?"}',
             'value_es' => '{"0":"¿Dónde consultar los códigos promocionales y condiciones actuales?"}',
             'value_fr' => '{"0":"Où vérifier les codes promo et conditions actuels ?"}',
             'value_pt' => '{"0":"Onde verificar os códigos promocionais e condições atuais?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can check them on the «Bonuses» page of the official 4RABET website and in our review."}',
             'value_es' => '{"0":"Puede consultarlos en la página «Bonuses» del sitio web oficial de 4RABET y en nuestra reseña."}',
             'value_fr' => '{"0":"Vous pouvez les consulter sur la page « Bonuses » du site officiel de 4RABET et dans notre revue."}',
             'value_pt' => '{"0":"Você pode verificá-los na página «Bonuses» do site oficial da 4RABET e na nossa análise."}',
             'order' => 36
            ]
        );
    }
}
