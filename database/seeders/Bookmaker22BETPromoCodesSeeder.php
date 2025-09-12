<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is an international betting platform that, in addition to sports betting and casino games, also offers a wide range of bonuses and promotions for both new and regular users. From generous welcome bonuses to regular promotions such as Wednesday Cash Splash, Rebate Bonus, and Bet Booster, 22BET aims to provide its customers with rewarding offers."}',
             'value_es' => '{"0":"22BET es una plataforma internacional de apuestas que, además de las apuestas deportivas y los juegos de casino, también ofrece una amplia gama de bonos y promociones tanto para nuevos usuarios como para clientes habituales. Desde generosos bonos de bienvenida hasta promociones regulares como Wednesday Cash Splash, Rebate Bonus y Bet Booster, 22BET busca brindar a sus clientes ofertas atractivas."}',
             'value_fr' => '{"0":"22BET est une plateforme de paris internationale qui, en plus des paris sportifs et des jeux de casino, propose également un large éventail de bonus et de promotions pour les nouveaux utilisateurs comme pour les clients réguliers. Des généreux bonus de bienvenue aux promotions régulières telles que Wednesday Cash Splash, Rebate Bonus et Bet Booster, 22BET s’efforce d’offrir à ses clients des avantages attractifs."}',
             'value_pt' => '{"0":"22BET é uma plataforma internacional de apostas que, além das apostas esportivas e dos jogos de cassino, também oferece uma ampla variedade de bônus e promoções tanto para novos usuários quanto para clientes já cadastrados. Desde generosos bônus de boas-vindas até promoções regulares como Wednesday Cash Splash, Rebate Bonus e Bet Booster, a 22BET busca oferecer aos seus clientes oportunidades vantajosas."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at the registration process, no-deposit bonuses, promotions for regular customers, and provide answers to the most frequently asked questions. You will also learn how to use the promo code :promocode to increase your first deposit by +100%."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle el proceso de registro, los bonos sin depósito, las promociones para clientes existentes y responderemos a las preguntas más frecuentes. También descubrirás cómo, con el código promocional :promocode, puedes aumentar tu primer depósito en un +100%."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail le processus d’inscription, les bonus sans dépôt, les promotions destinées aux clients existants et nous répondrons aux questions les plus fréquentes. Vous découvrirez également comment, grâce au code promo :promocode, augmenter votre premier dépôt de +100%."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar o processo de registro, os bônus sem depósito, as promoções para clientes existentes e responder às perguntas mais frequentes. Você também vai descobrir como, utilizando o código promocional :promocode, pode aumentar seu primeiro depósito em +100%."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To register, go to the official website and click the Registration button located at the top right. Choose one of the available registration methods. You can complete full registration, register via phone number, or use social media accounts."}',
             'value_es' => '{"0":"Para registrarte, dirígete al sitio web oficial y haz clic en el botón de Registro ubicado en la parte superior derecha. Elige uno de los métodos de registro disponibles. Puedes completar un registro completo, hacerlo mediante número de teléfono o a través de redes sociales."}',
             'value_fr' => '{"0":"Pour vous inscrire, rendez-vous sur le site officiel et cliquez sur le bouton Inscription situé en haut à droite. Choisissez l’une des méthodes d’inscription disponibles. Vous pouvez effectuer une inscription complète, vous inscrire avec un numéro de téléphone ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"Para se registrar, acesse o site oficial e clique no botão de Registro localizado no canto superior direito. Escolha um dos métodos de registro disponíveis. Você pode fazer um registro completo, registrar-se com número de telefone ou através das redes sociais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode on 22BET, you need to enter it in the special field during registration. For example, by using the promo code :promocode, new users can receive a 100% bonus on their first deposit up to $100 or a casino bonus up to $300 + 30 free spins. The minimum deposit required to activate the bonus is $1 for sports betting and $10 for casino games."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode en 22BET, debes ingresarlo en el campo correspondiente durante el registro. Por ejemplo, al usar el código :promocode, los nuevos usuarios pueden obtener un bono del 100% en el primer depósito de hasta $100 o un bono de casino de hasta $300 + 30 giros gratis. El depósito mínimo para activar el bono es de $1 para apuestas deportivas y $10 para juegos de casino."}',
             'value_fr' => '{"0":"Pour utiliser le code promo :promocode sur 22BET, vous devez l’indiquer dans le champ prévu à cet effet lors de l’inscription. Par exemple, en utilisant le code :promocode, les nouveaux utilisateurs peuvent obtenir un bonus de 100% sur leur premier dépôt jusqu’à 100 $ ou un bonus de casino allant jusqu’à 300 $ + 30 tours gratuits. Le dépôt minimum requis pour activer le bonus est de 1 $ pour les paris sportifs et de 10 $ pour les jeux de casino."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode na 22BET, é necessário inseri-lo no campo específico durante o registro. Por exemplo, utilizando o código :promocode, novos usuários podem receber um bônus de 100% no primeiro depósito de até $100 ou um bônus de cassino de até $300 + 30 rodadas grátis. O depósito mínimo para ativar o bônus é de $1 para apostas esportivas e $10 para jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Para poder retirar los fondos de bonificación, primero es necesario cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds de bonus, il est d’abord nécessaire de remplir les conditions de mise."}',
             'value_pt' => '{"0":"Para poder sacar os fundos de bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"If the bonus funds were credited to the bonus account for sports betting, the bonus must be wagered five times the bonus amount on accumulator bets. Each accumulator must include at least three events. At least three events in each accumulator must have odds of no less than 1.4. The wagering of the bonus must be completed within seven days."}',
             'value_es' => '{"0":"Si los fondos de bonificación fueron acreditados en la cuenta de bonos para apuestas deportivas, el bono debe apostarse cinco veces el monto del bono en apuestas combinadas. Cada combinada debe incluir al menos tres eventos. Al menos tres de los eventos en cada combinada deben tener cuotas no inferiores a 1.4. El requisito de apuesta debe completarse dentro de siete días."}',
             'value_fr' => '{"0":"Si les fonds de bonus ont été crédités sur le compte bonus pour les paris sportifs, le montant du bonus doit être misé cinq fois sur des paris combinés. Chaque combiné doit comprendre au moins trois événements. Au moins trois événements dans chaque combiné doivent avoir une cote d’au moins 1,4. Le bonus doit être misé dans un délai de sept jours."}',
             'value_pt' => '{"0":"Se os fundos de bônus foram creditados na conta de bônus para apostas esportivas, o valor do bônus deve ser apostado cinco vezes em apostas múltiplas. Cada múltipla deve incluir pelo menos três eventos. Pelo menos três eventos em cada múltipla devem ter odds de no mínimo 1.4. O bônus deve ser apostado no prazo de sete dias."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"If the bonus funds were credited to the bonus account for casino games, deposit bonuses are subject to wagering x35 the bonus amount within 7 days after activation. When wagering, it is prohibited to place bets exceeding $5. Free spins are available only after the deposit bonus has been wagered and are credited for play on Mariachi Afortunado."}',
             'value_es' => '{"0":"Si los fondos de bonificación fueron acreditados en la cuenta de bonos para juegos de casino, los bonos por depósito están sujetos a un requisito de apuesta de x35 el monto del bono dentro de los 7 días posteriores a la activación. Al apostar, está prohibido realizar apuestas superiores a $5. Los giros gratis estarán disponibles solo después de cumplir con el requisito del bono por depósito y se acreditan para jugar en Mariachi Afortunado."}',
             'value_fr' => '{"0":"Si les fonds de bonus ont été crédités sur le compte bonus pour les jeux de casino, les bonus de dépôt doivent être misés 35 fois le montant du bonus dans un délai de 7 jours après activation. Lors du wagering, il est interdit de placer des mises supérieures à 5 $. Les tours gratuits ne sont disponibles qu’après que le bonus de dépôt ait été misé et sont crédités pour le jeu Mariachi Afortunado."}',
             'value_pt' => '{"0":"Se os fundos de bônus foram creditados na conta de bônus para jogos de cassino, os bônus de depósito estão sujeitos a um requisito de aposta de x35 o valor do bônus no prazo de 7 dias após a ativação. Durante o wagering, é proibido fazer apostas superiores a $5. Os giros grátis só ficam disponíveis após o cumprimento do requisito do bônus de depósito e são creditados para o jogo Mariachi Afortunado."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, 22BET does not offer standard no-deposit bonuses. However, the platform occasionally runs promotions where new users can receive free spins or bonuses without making a deposit. Therefore, it is recommended to regularly check the Bonuses section on the official 22BET website for the latest information."}',
             'value_es' => '{"0":"Actualmente, 22BET no ofrece bonos sin depósito estándar. Sin embargo, la plataforma ocasionalmente realiza promociones en las que los nuevos usuarios pueden recibir giros gratis o bonos sin necesidad de realizar un depósito. Por lo tanto, se recomienda consultar regularmente la sección de Bonos en el sitio web oficial de 22BET para obtener la información más actualizada."}',
             'value_fr' => '{"0":"Actuellement, 22BET n’offre pas de bonus sans dépôt standard. Cependant, la plateforme organise occasionnellement des promotions où les nouveaux utilisateurs peuvent recevoir des tours gratuits ou des bonus sans effectuer de dépôt. Il est donc recommandé de vérifier régulièrement la section Bonus sur le site officiel de 22BET pour obtenir les informations les plus récentes."}',
             'value_pt' => '{"0":"No momento, a 22BET não oferece bônus sem depósito padrão. No entanto, a plataforma realiza ocasionalmente promoções em que novos usuários podem receber rodadas grátis ou bônus sem precisar fazer um depósito. Portanto, recomenda-se verificar regularmente a seção de Bônus no site oficial da 22BET para obter informações atualizadas."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET offers numerous bonuses for regular users. One of the most popular promotions is Wednesday Cash Splash, which provides a 50% deposit bonus up to $210 every Wednesday. To activate the bonus, a minimum deposit of $5 must be made on Wednesday. It is important to note that the bonus is automatically credited after making the deposit unless the user opts out before depositing."}',
             'value_es' => '{"0":"Sí, 22BET ofrece numerosos bonos para usuarios habituales. Una de las promociones más populares es ¡Cash Splash los miércoles!, que otorga un bono del 50% sobre el depósito hasta $210 cada miércoles. Para activar el bono, se debe realizar un depósito mínimo de $5 el miércoles. Es importante señalar que el bono se acredita automáticamente después de realizar el depósito, a menos que el usuario decida no aceptarlo antes de depositar."}',
             'value_fr' => '{"0":"Oui, 22BET propose de nombreux bonus pour les utilisateurs réguliers. L’une des promotions les plus populaires est Mercredi Cash Splash !, qui offre un bonus de dépôt de 50 % jusqu’à 210 $ chaque mercredi. Pour activer le bonus, un dépôt minimum de 5 $ doit être effectué le mercredi. Il est important de noter que le bonus est automatiquement crédité après le dépôt, sauf si l’utilisateur choisit de ne pas en bénéficier avant de déposer."}',
             'value_pt' => '{"0":"Sim, a 22BET oferece diversos bônus para usuários regulares. Uma das promoções mais populares é o Cash Splash de quarta-feira!, que oferece um bônus de 50% no depósito de até $210 todas as quartas-feiras. Para ativar o bônus, é necessário fazer um depósito mínimo de $5 na quarta-feira. É importante notar que o bônus é creditado automaticamente após o depósito, a menos que o usuário opte por não recebê-lo antes de depositar."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In addition, there are other regular promotions, such as Rebate Bonus and Bet Booster, which offer extra benefits for active players. Below we will look at them in more detail."}',
             'value_es' => '{"0":"Además, existen otras promociones regulares, como Bono de Recuperación y Bet Booster, que ofrecen beneficios adicionales para los jugadores activos. A continuación, las analizaremos con más detalle."}',
             'value_fr' => '{"0":"De plus, il existe d’autres promotions régulières, telles que Bonus de remise et Bet Booster, qui offrent des avantages supplémentaires aux joueurs actifs. Nous les examinerons ci-dessous plus en détail."}',
             'value_pt' => '{"0":"Além disso, existem outras promoções regulares, como Bónus de Rebate e Bet Booster, que oferecem benefícios adicionais para jogadores ativos. A seguir, iremos analisá-las com mais detalhes."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Wednesday Cash Splash"}',
                'value_es' => '{"0":"¡Cash Splash los miércoles!"}',
                'value_fr' => '{"0":"Mercredi Cash Splash !"}',
                'value_pt' => '{"0":"Cash Splash de quarta-feira!"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This is a weekly promotion that allows players to receive a 50% deposit bonus up to $210. To take advantage of this offer, users must make a minimum deposit of $5 on Wednesday. The bonus is automatically credited after the account is funded unless the user opts out before making the deposit."}',
             'value_es' => '{"0":"Se trata de una promoción semanal que permite recibir un bono del 50% en el depósito hasta $210. Para aprovechar esta oferta, los usuarios deben realizar un depósito mínimo de $5 el miércoles. El bono se acredita automáticamente después de recargar la cuenta, a menos que el usuario renuncie a él antes de realizar el depósito."}',
             'value_fr' => '{"0":"Il s’agit d’une promotion hebdomadaire qui permet de recevoir un bonus de dépôt de 50 % jusqu’à 210 $. Pour profiter de cette offre, les utilisateurs doivent effectuer un dépôt minimum de 5 $ le mercredi. Le bonus est automatiquement crédité après le dépôt, sauf si l’utilisateur choisit de s’en désister avant de déposer."}',
             'value_pt' => '{"0":"Esta é uma promoção semanal que permite receber um bônus de 50% no depósito de até $210. Para aproveitar esta oferta, os usuários devem fazer um depósito mínimo de $5 na quarta-feira. O bônus é creditado automaticamente após a recarga da conta, a menos que o usuário opte por não recebê-lo antes de depositar."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that the following wagering requirements must be met to withdraw the bonus. Players must wager the bonus amount 40 times on slots within 7 days. Other games, such as roulette, blackjack, poker, and others, do not count toward the wagering requirements. During the wagering process, the maximum allowed bet is $5."}',
             'value_es' => '{"0":"Es importante señalar que para retirar el bono deben cumplirse los siguientes requisitos de apuesta. El monto del bono debe apostarse 40 veces en tragamonedas dentro de los 7 días. Otros juegos, como la ruleta, el blackjack, el póker y similares, no cuentan para los requisitos de apuesta. Durante el proceso de liberación, la apuesta máxima permitida es de $5."}',
             'value_fr' => '{"0":"Il est important de noter que les conditions suivantes doivent être respectées pour pouvoir retirer le bonus. Le montant du bonus doit être misé 40 fois sur les machines à sous dans un délai de 7 jours. Les autres jeux, tels que la roulette, le blackjack, le poker et d’autres, ne comptent pas dans les conditions de mise. Pendant le processus de mise, la mise maximale autorisée est de 5 $."}',
             'value_pt' => '{"0":"É importante observar que, para sacar o bônus, devem ser cumpridos os seguintes requisitos. O valor do bônus deve ser apostado 40 vezes em slots dentro de 7 dias. Outros jogos, como roleta, blackjack, pôquer e similares, não contam para os requisitos de aposta. Durante o processo de apostas, a aposta máxima permitida é de $5."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Rebate Bonus"}',
                'value_es' => '{"0":"Bono de Recuperación"}',
                'value_fr' => '{"0":"Bonus de remise"}',
                'value_pt' => '{"0":"Bónus de Rebate"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This is a loyalty program that gives players the opportunity to receive cashback. The conditions of the promotion may vary depending on the user’s loyalty level and betting volume. The weekly cashback is 0.3% of the total amount wagered during the previous week. The minimum amount is $1, and the maximum amount you can receive is $1170."}',
             'value_es' => '{"0":"Este es un programa de fidelidad que ofrece a los jugadores la posibilidad de recibir reembolsos. Las condiciones de la promoción pueden variar según el nivel de fidelidad del usuario y el volumen de apuestas. El reembolso semanal es del 0,3 % del monto total apostado durante la semana anterior. El monto mínimo es de $1 y el máximo que se puede recibir es de $1170."}',
             'value_fr' => '{"0":"Il s’agit d’un programme de fidélité qui permet aux joueurs de recevoir un remboursement partiel. Les conditions de la promotion peuvent varier en fonction du niveau de fidélité de l’utilisateur et du volume de mises. Le cashback hebdomadaire correspond à 0,3 % du montant total des mises effectuées la semaine précédente. Le montant minimum est de 1 $, et le montant maximum que vous pouvez recevoir est de 1170 $."}',
             'value_pt' => '{"0":"Este é um programa de fidelidade que oferece aos jogadores a oportunidade de receber reembolso de parte do valor apostado. As condições da promoção podem variar de acordo com o nível de fidelidade do usuário e o volume de apostas. O cashback semanal é de 0,3% do valor total apostado durante a semana anterior. O valor mínimo é de $1 e o máximo que pode ser recebido é de $1170."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To participate in the promotion, you must be an active platform user and place regular bets on sports events with odds of at least 1.50."}',
             'value_es' => '{"0":"Para participar en la promoción, es necesario ser un usuario activo de la plataforma y realizar apuestas regulares en eventos deportivos con cuotas de al menos 1,50."}',
             'value_fr' => '{"0":"Pour participer à la promotion, vous devez être un utilisateur actif de la plateforme et placer régulièrement des paris sur des événements sportifs avec une cote d’au moins 1,50."}',
             'value_pt' => '{"0":"Para participar da promoção, é necessário ser um usuário ativo da plataforma e fazer apostas regulares em eventos esportivos com odds de pelo menos 1,50."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Bet Booster"}',
                'value_es' => '{"0":"Bet Booster"}',
                'value_fr' => '{"0":"Bet Booster"}',
                'value_pt' => '{"0":"Bet Booster"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows users to increase their winnings on accumulator bets. The offer provides an additional percentage to the winnings depending on the number of events included in the bet. For example, a bet with 4 events will receive an extra +5% to the winnings, while a coupon with 14 winning events will grant a +50% boost. Importantly, there are no wagering requirements on the awarded bonus."}',
             'value_es' => '{"0":"Esta promoción permite a los usuarios aumentar sus ganancias en apuestas acumuladas. La oferta otorga un porcentaje adicional a las ganancias según la cantidad de eventos incluidos en la apuesta. Por ejemplo, una apuesta con 4 eventos recibe un extra de +5% en las ganancias, mientras que un cupón con 14 eventos ganadores otorga un aumento de +50%. Es importante destacar que el bono acreditado no requiere condiciones de apuesta."}',
             'value_fr' => '{"0":"Cette promotion permet aux utilisateurs d’augmenter leurs gains sur les paris combinés. L’offre accorde un pourcentage supplémentaire sur les gains en fonction du nombre d’événements inclus dans le pari. Par exemple, un pari de 4 événements donne droit à un bonus de +5 % sur les gains, tandis qu’un coupon avec 14 événements gagnants offre une augmentation de +50 %. Il est important de noter qu’aucune condition de mise n’est requise sur le bonus attribué."}',
             'value_pt' => '{"0":"Esta promoção permite aos usuários aumentarem seus ganhos em apostas acumuladas. A oferta concede um percentual adicional sobre os ganhos dependendo do número de eventos incluídos na aposta. Por exemplo, uma aposta com 4 eventos recebe um extra de +5% nos ganhos, enquanto um cupom com 14 eventos vencedores garante um aumento de +50%. É importante destacar que o bônus concedido não exige requisitos de aposta."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To take advantage of this promotion, players must place accumulator bets with the minimum number of events specified in the promotion’s terms. Full details and the percentage increase for each level can be found on the official 22BET website."}',
             'value_es' => '{"0":"Para aprovechar esta promoción, los jugadores deben realizar apuestas acumuladas con el número mínimo de eventos indicado en los términos de la promoción. Los detalles completos y los porcentajes de aumento se encuentran en el sitio oficial de 22BET."}',
             'value_fr' => '{"0":"Pour profiter de cette promotion, les joueurs doivent placer des paris combinés avec le nombre minimum d’événements indiqué dans les conditions. Les détails complets et les pourcentages d’augmentation sont disponibles sur le site officiel de 22BET."}',
             'value_pt' => '{"0":"Para aproveitar esta promoção, os jogadores devem fazer apostas acumuladas com o número mínimo de eventos especificado nos termos da promoção. Os detalhes completos e os percentuais de aumento podem ser encontrados no site oficial da 22BET."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the first deposit bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono por el primer depósito?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus sur le premier dépôt ?"}',
             'value_pt' => '{"0":"Como obter o bônus no primeiro depósito?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To receive the first deposit bonus, you need to register on the 22BET website, make your first deposit, and enter the promo code :promocode during registration. You can read more details at the beginning of this review."}',
             'value_es' => '{"0":"Para recibir el bono por el primer depósito, es necesario registrarse en el sitio web de 22BET, realizar el primer depósito e ingresar el código promocional :promocode durante el registro. Puede leer más detalles al inicio de esta reseña."}',
             'value_fr' => '{"0":"Pour recevoir le bonus sur le premier dépôt, vous devez vous inscrire sur le site de 22BET, effectuer votre premier dépôt et saisir le code promo :promocode lors de l’inscription. Vous pouvez lire plus de détails au début de cette revue."}',
             'value_pt' => '{"0":"Para receber o bônus no primeiro depósito, é necessário registrar-se no site da 22BET, realizar o primeiro depósito e inserir o código promocional :promocode durante o cadastro. Você pode ler mais detalhes no início desta análise."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for the bonus?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta del bono?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise du bonus ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de apostas do bônus?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirements for the bonus may vary depending on the type of bonus. Usually, for sports betting, you need to wager the bonus amount 5 times on accumulator bets with minimum odds of 1.40 within 7 days. Casino bonuses must be wagered 35 times the bonus amount within 7 days."}',
             'value_es' => '{"0":"Los requisitos de apuesta del bono pueden variar según el tipo de bono. Generalmente, para las apuestas deportivas es necesario apostar 5 veces el importe del bono en apuestas combinadas con cuotas mínimas de 1.40 en un plazo de 7 días. Los bonos de casino deben apostarse 35 veces el importe del bono en un plazo de 7 días."}',
             'value_fr' => '{"0":"Les conditions de mise du bonus peuvent varier en fonction du type de bonus. En général, pour les paris sportifs, il faut miser 5 fois le montant du bonus sur des paris combinés avec des cotes minimales de 1.40 dans un délai de 7 jours. Les bonus de casino doivent être misés 35 fois le montant du bonus dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Os requisitos de apostas do bônus podem variar dependendo do tipo de bônus. Normalmente, para apostas esportivas é necessário apostar 5 vezes o valor do bônus em apostas acumuladas com odds mínimas de 1.40 no prazo de 7 dias. Os bônus de cassino devem ser apostados 35 vezes o valor do bônus no prazo de 7 dias."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used on all games?"}',
             'value_es' => '{"0":"¿Se pueden utilizar los bonos en todos los juegos?"}',
             'value_fr' => '{"0":"Les bonus peuvent-ils être utilisés sur tous les jeux ?"}',
             'value_pt' => '{"0":"Os bônus podem ser usados em todos os jogos?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"No, not all games count towards the wagering of bonuses. For example, in the Wednesday Cash Splash promotion, the bonus can only be wagered on slots, while other games such as roulette, blackjack, poker, and others do not count towards the wagering requirements."}',
             'value_es' => '{"0":"No, no todos los juegos cuentan para el requisito de apuesta de los bonos. Por ejemplo, en la promoción Wednesday Cash Splash, el bono solo puede apostarse en las tragamonedas, mientras que otros juegos como la ruleta, el blackjack, el póker y otros no cuentan para los requisitos de apuesta."}',
             'value_fr' => '{"0":"Non, tous les jeux ne sont pas pris en compte pour les conditions de mise des bonus. Par exemple, dans la promotion Wednesday Cash Splash, le bonus ne peut être misé que sur les machines à sous, tandis que d\'autres jeux comme la roulette, le blackjack, le poker et autres ne sont pas pris en compte pour les conditions de mise."}',
             'value_pt' => '{"0":"Não, nem todos os jogos contam para os requisitos de apostas dos bônus. Por exemplo, na promoção Wednesday Cash Splash, o bônus só pode ser apostado em slots, enquanto outros jogos como roleta, blackjack, pôquer e outros não contam para os requisitos de apostas."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How can I find out about the latest promotions and bonuses?"}',
             'value_es' => '{"0":"¿Cómo puedo enterarme de las promociones y bonos actuales?"}',
             'value_fr' => '{"0":"Comment connaître les promotions et bonus actuels ?"}',
             'value_pt' => '{"0":"Como saber sobre as promoções e bônus atuais?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The latest promotions and bonuses can be found on the official 22BET website in the «Bonuses» section. It is also recommended to subscribe to the newsletter and follow 22BET’s official social media accounts to stay up to date with the latest offers."}',
             'value_es' => '{"0":"Las promociones y bonos más recientes se pueden encontrar en el sitio web oficial de 22BET en la sección «Bonos». También se recomienda suscribirse al boletín de noticias y seguir las cuentas oficiales de 22BET en las redes sociales para estar al tanto de las últimas ofertas."}',
             'value_fr' => '{"0":"Les promotions et bonus actuels sont disponibles sur le site officiel de 22BET dans la section «Bonus». Il est également recommandé de s’abonner à la newsletter et de suivre les comptes officiels de 22BET sur les réseaux sociaux afin de rester informé des dernières offres."}',
             'value_pt' => '{"0":"As promoções e bônus mais recentes podem ser encontrados no site oficial da 22BET na seção «Bônus». Também é recomendado assinar a newsletter e seguir as contas oficiais da 22BET nas redes sociais para ficar por dentro das últimas ofertas."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any restrictions on withdrawing winnings obtained from bonuses?"}',
             'value_es' => '{"0":"¿Existen restricciones para retirar las ganancias obtenidas de los bonos?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions sur le retrait des gains obtenus grâce aux bonus ?"}',
             'value_pt' => '{"0":"Há restrições para o saque dos ganhos obtidos com bônus?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Winnings obtained from bonuses can be withdrawn after meeting all wagering requirements. If the requirements are not met, the winnings may be canceled."}',
             'value_es' => '{"0":"Las ganancias obtenidas de los bonos se pueden retirar después de cumplir con todos los requisitos de apuesta. Si no se cumplen los requisitos, las ganancias pueden ser anuladas."}',
             'value_fr' => '{"0":"Les gains obtenus grâce aux bonus peuvent être retirés après avoir rempli toutes les conditions de mise. Si les conditions ne sont pas respectées, les gains peuvent être annulés."}',
             'value_pt' => '{"0":"Os ganhos obtidos com bônus podem ser sacados após o cumprimento de todos os requisitos de aposta. Caso os requisitos não sejam cumpridos, os ganhos poderão ser cancelados."}',
             'order' => 36
            ]
        );
    }
}
