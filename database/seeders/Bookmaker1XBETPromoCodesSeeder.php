<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET has long established itself as one of the most popular online bookmakers in the world. The company offers not only sports betting but also a wide range of bonuses and promotions that make the experience more exciting and rewarding."}',
             'value_es' => '{"0":"1XBET se ha consolidado desde hace tiempo como una de las casas de apuestas en línea más populares del mundo. La compañía ofrece no solo apuestas deportivas, sino también una amplia variedad de bonos y promociones que hacen que la experiencia sea más emocionante y rentable."}',
             'value_fr' => '{"0":"1XBET s’est imposé depuis longtemps comme l’un des bookmakers en ligne les plus populaires au monde. L’entreprise propose non seulement des paris sportifs, mais aussi une large gamme de bonus et de promotions qui rendent l’expérience plus intéressante et plus avantageuse."}',
             'value_pt' => '{"0":"A 1XBET há muito se consolidou como uma das casas de apostas online mais populares do mundo. A empresa oferece não apenas apostas esportivas, mas também uma ampla variedade de bônus e promoções que tornam a experiência mais emocionante e vantajosa."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will cover the most relevant bonuses, explain how to use them, and provide practical tips so you can get the most out of your bets and casino games. We will also explain how to increase your starting capital by using our promo code: :promocode."}',
             'value_es' => '{"0":"En esta reseña, hablaremos de los bonos más actuales, explicaremos cómo utilizarlos y daremos consejos prácticos para que pueda sacar el máximo provecho de sus apuestas y juegos de casino. También le mostraremos cómo aumentar su capital inicial utilizando nuestro código promocional: :promocode."}',
             'value_fr' => '{"0":"Dans cette revue, nous présenterons les bonus les plus récents, expliquerons comment les utiliser et donnerons des conseils pratiques afin que vous puissiez tirer le meilleur parti de vos paris et de vos jeux de casino. Nous expliquerons également comment augmenter votre capital de départ en utilisant notre code promotionnel : :promocode."}',
             'value_pt' => '{"0":"Nesta análise, falaremos sobre os bônus mais atuais, explicaremos como usá-los e daremos dicas práticas para que você possa aproveitar ao máximo suas apostas e jogos de cassino. Também mostraremos como aumentar seu capital inicial utilizando o nosso código promocional: :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to use a promo code during registration?"}',
             'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
             'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To register, first go to the website and click the «Registration» button located at the top right. Next, you can choose the most convenient method — by phone number, in one click, by email, or via social networks. It is during the registration stage that you will find a field for the promo code. We recommend entering our promo code :promocode to receive a 120% bonus on your first deposit."}',
             'value_es' => '{"0":"Para registrarte, primero ve al sitio web y haz clic en el botón «Registro», ubicado en la parte superior derecha. Luego puedes elegir el método más conveniente: por número de teléfono, en un clic, por correo electrónico o a través de redes sociales. Es en la etapa de registro donde encontrarás el campo para el código promocional. Te recomendamos ingresar nuestro código promocional :promocode para recibir un bono del 120% en tu primer depósito."}',
             'value_fr' => '{"0":"Pour vous inscrire, allez d’abord sur le site et cliquez sur le bouton « Inscription » situé en haut à droite. Ensuite, vous pouvez choisir la méthode la plus pratique : par numéro de téléphone, en un clic, par e-mail ou via les réseaux sociaux. C’est lors de l’étape d’inscription que vous trouverez le champ pour entrer le code promotionnel. Nous vous recommandons de saisi"}',
             'value_pt' => '{"0":"Para se registrar, primeiro acesse o site e clique no botão «Registro», localizado no canto superior direito. Em seguida, você pode escolher o método mais conveniente — por número de telefone, em um clique, por e-mail ou através das redes sociais. É na etapa de registro que você encontrará o campo para inserir o código promocional. Recomendamos inserir nosso código promocional :promocode para receber um bônus de 120% no seu primeiro depósito."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Please note that you need to choose how you want to use your bonus funds — for sports betting or casino games. The bonuses at 1XBET are designed for different types of players. For example, if you enjoy sports, your first deposit will give you extra money for betting, while casino fans can also benefit from 150 free spins."}',
             'value_es' => '{"0":"Ten en cuenta que debes elegir cómo usar los fondos de bonificación, ya sea para apuestas deportivas o juegos de casino. Los bonos de 1XBET están diseñados para diferentes tipos de jugadores. Por ejemplo, si te gustan los deportes, tu primer depósito te dará dinero extra para apostar, mientras que los aficionados al casino también podrán aprovechar 150 giros gratis."}',
             'value_fr' => '{"0":"Veuillez noter que vous devez choisir comment utiliser vos fonds de bonus — pour les paris sportifs ou les jeux de casino. Les bonus de 1XBET sont conçus pour différents types de joueurs. Par exemple, si vous aimez le sport, votre premier dépôt vous offrira de l’argent supplémentaire pour parier, tandis que les amateurs de casino bénéficieront également de 150 tours gratuits."}',
             'value_pt' => '{"0":"Vale lembrar que você precisa escolher como deseja usar os fundos de bônus — para apostas esportivas ou jogos de cassino. Os bônus da 1XBET foram pensados para diferentes tipos de jogadores. Por exemplo, se você gosta de esportes, o primeiro depósito dará dinheiro extra para apostar, enquanto os fãs de cassino ainda poderão aproveitar 150 rodadas grátis."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Keep in mind that in order to withdraw bonus funds, you must first meet the wagering requirements. For sports betting, wager the bonus amount 10 times with accumulator bets in Line or LIVE. Each accumulator must include at least 3 events. At least 3 events in the accumulator must have odds no lower than 1.50. The bonus must be wagered within 30 days from the date of receipt."}',
             'value_es' => '{"0":"Tenga en cuenta que para retirar los fondos de bonificación, primero debe cumplir con los requisitos de apuesta. Para las apuestas deportivas, apueste el importe del bono 10 veces con apuestas acumuladas en Línea o en Vivo. Cada acumulador debe incluir al menos 3 eventos. Al menos 3 eventos del acumulador deben tener cuotas no inferiores a 1.50. El bono debe apostarse dentro de los 30 días posteriores a su recepción."}',
             'value_fr' => '{"0":"Veuillez noter que pour retirer les fonds bonus, vous devez d\'abord respecter les conditions de mise. Pour les paris sportifs, misez le montant du bonus 10 fois avec des paris combinés en Ligne ou en LIVE. Chaque combiné doit comporter au moins 3 événements. Au minimum, 3 événements du combiné doivent avoir une cote d’au moins 1.50. Le bonus doit être misé dans un délai de 30 jours à compter de sa réception."}',
             'value_pt' => '{"0":"Tenha em mente que, para sacar os fundos de bônus, é necessário primeiro cumprir os requisitos de apostas. Para apostas esportivas, aposte o valor do bônus 10 vezes em acumuladores na Linha ou ao Vivo. Cada acumulador deve incluir pelo menos 3 eventos. No mínimo, 3 eventos do acumulador devem ter odds de pelo menos 1.50. O bônus deve ser apostado dentro de 30 dias a partir da data de recebimento."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 35 times the bonus amount within 7 days after activation. During wagering, it is prohibited to place bets exceeding $5."}',
             'value_es' => '{"0":"Los bonos de casino deben apostarse 35 veces el importe del bono dentro de los 7 días posteriores a la activación. Durante el proceso de apuesta está prohibido realizar apuestas superiores a $5."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 35 fois le montant du bonus dans les 7 jours suivant l’activation. Pendant le wagering, il est interdit de placer des mises supérieures à 5 $."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. Durante o wagering, é proibido realizar apostas superiores a $5."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Bonuses for Registered Customers"}',
             'value_es' => '{"0":"Bonos para Clientes Registrados"}',
             'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
             'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET cares not only about new players but also about those who have been on the platform for a long time. For regular users, for example, there are promotions such as Accumulator of the Day and Hyper Bonus. The first allows you to get additional percentages on accumulator bets, while the second increases your winnings depending on the number of events in the bet slip. All promotional offers can be viewed on the official website in the Promotions section."}',
             'value_es' => '{"0":"1XBET no solo se preocupa por los nuevos jugadores, sino también por aquellos que llevan tiempo en la plataforma. Para los usuarios habituales, por ejemplo, existen promociones como Apuesta Combinada del Día y Hyper Bonus. La primera permite obtener porcentajes adicionales en las apuestas combinadas, mientras que la segunda aumenta las ganancias según el número de eventos en el cupón. Todas las ofertas promocionales se pueden consultar en el sitio web oficial en la sección Promociones."}',
             'value_fr' => '{"0":"1XBET ne s’occupe pas uniquement des nouveaux joueurs, mais aussi de ceux qui sont présents sur la plateforme depuis longtemps. Pour les utilisateurs réguliers, par exemple, il existe des promotions telles que Pari Combiné du Jour et Hyper Bonus. La première permet d’obtenir des pourcentages supplémentaires sur les paris combinés, tandis que la seconde augmente les gains en fonction du nombre d’événements dans le coupon. Toutes les offres promotionnelles peuvent être consultées sur le site officiel dans la section Promotions."}',
             'value_pt' => '{"0":"A 1XBET não se preocupa apenas com os novos jogadores, mas também com aqueles que já estão há muito tempo na plataforma. Para os usuários regulares, por exemplo, existem promoções como Acumulador do Dia e Hyper Bonus. A primeira permite obter percentuais adicionais em apostas acumuladas, enquanto a segunda aumenta os ganhos dependendo do número de eventos no bilhete. Todas as ofertas promocionais podem ser consultadas no site oficial, na seção Promoções."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Are there no deposit bonuses?"}',
             'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, and this is one of the pleasant features of 1XBET. For example, the Goalless Football Refund promotion refunds your money if the first half of a match ends without goals. This means that even if your bet doesn’t win, you don’t walk away empty-handed. The bonus is credited in the form of a promo code, which can be used within 24 hours. We will explain more about this promotion below."}',
             'value_es' => '{"0":"Sí, y este es uno de los aspectos agradables de 1XBET. Por ejemplo, la promoción Goalless Football Refund devuelve el dinero si la primera parte del partido termina sin goles. Esto significa que, incluso si tu apuesta no resulta ganadora, no te quedas con las manos vacías. El bono se acredita en forma de un código promocional que puede utilizarse en un plazo de 24 horas. Explicaremos más sobre esta promoción a continuación."}',
             'value_fr' => '{"0":"Oui, et c’est l’un des avantages agréables de 1XBET. Par exemple, la promotion Goalless Football Refund rembourse votre mise si la première mi-temps d’un match se termine sans buts. Cela signifie que même si votre pari n’est pas gagnant, vous ne repartez pas les mains vides. Le bonus est crédité sous forme de code promo, utilisable dans les 24 heures. Nous en dirons plus sur cette promotion ci-dessous."}',
             'value_pt' => '{"0":"Sim, e este é um dos pontos positivos da 1XBET. Por exemplo, a promoção Goalless Football Refund devolve o dinheiro se o primeiro tempo de uma partida terminar sem gols. Isso significa que, mesmo que sua aposta não seja vencedora, você não fica de mãos vazias. O bônus é creditado na forma de um código promocional, que pode ser usado em até 24 horas. Explicaremos mais sobre esta promoção abaixo."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET’s Goalless Football Refund"}',
                'value_es' => '{"0":"Reembolso de fútbol sin goles de 1XBET"}',
                'value_fr' => '{"0":"Remboursement football sans but de 1XBET"}',
                'value_pt' => '{"0":"Futebol sem Golos da 1XBET"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is designed for football fans. If the first half of your selected match ends without goals, the stake is refunded in the form of a promo code. The maximum refund amount is $20."}',
             'value_es' => '{"0":"Esta promoción está destinada a los aficionados al fútbol. Si la primera parte del partido seleccionado termina sin goles, la apuesta se devuelve en forma de un código promocional. El importe máximo de reembolso es de 20 $"}',
             'value_fr' => '{"0":"Cette promotion est destinée aux fans de football. Si la première mi-temps du match que vous avez choisi se termine sans buts, la mise est remboursée sous forme de code promo. Le montant maximum du remboursement est de 20 $."}',
             'value_pt' => '{"0":"Esta promoção é destinada aos fãs de futebol. Se o primeiro tempo da partida escolhida terminar sem gols, a aposta é reembolsada na forma de um código promocional. O valor máximo do reembolso é de 20 $."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This is an ideal option for those who enjoy betting on leaders or favorites but want to have some protection in case of an unexpected turn of events."}',
             'value_es' => '{"0":"Es una opción ideal para quienes disfrutan apostar por los líderes o favoritos, pero quieren asegurarse en caso de un giro inesperado de los acontecimientos."}',
             'value_fr' => '{"0":"C’est une option idéale pour ceux qui aiment parier sur les leaders ou les favoris, mais souhaitent se protéger en cas de scénario inattendu."}',
             'value_pt' => '{"0":"É uma opção ideal para quem gosta de apostar nos líderes ou favoritos, mas quer ter uma proteção em caso de um desfecho inesperado."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET’s No Risk Bet"}',
                'value_es' => '{"0":"Apuesta sin Riesgo de 1XBET"}',
                'value_fr' => '{"0":"Pari sans Risque de 1XBET"}',
                'value_pt' => '{"0":"Aposta Sem Risco da 1XBET"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The essence of this promotion is that if your bet on certain events loses, the money is returned in the form of a free bet. Another advantage of this promotion is that the bonus bets have no wagering requirements."}',
             'value_es' => '{"0":"La esencia de esta promoción es que si tu apuesta en ciertos eventos no resulta ganadora, el dinero se devuelve en forma de una apuesta gratuita. Otra ventaja de esta promoción es que las apuestas de bono no tienen requisitos de apuesta."}',
             'value_fr' => '{"0":"Le principe de cette promotion est que si votre pari sur certains événements ne passe pas, l’argent est remboursé sous forme de pari gratuit. Un autre avantage de cette offre est que les paris bonus n’ont aucune condition de mise."}',
             'value_pt' => '{"0":"A essência desta promoção é que, se a sua aposta em determinados eventos não vencer, o dinheiro é devolvido na forma de uma aposta gratuita. Outra vantagem desta promoção é que as apostas de bônus não têm requisitos de apostas."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This allows active players to experiment, making the game both safer and more exciting at the same time."}',
             'value_es' => '{"0":"Esto permite a los jugadores activos experimentar, haciendo que el juego sea más seguro y al mismo tiempo más emocionante."}',
             'value_fr' => '{"0":"Cela permet aux joueurs actifs d’expérimenter, rendant le jeu à la fois plus sûr et plus palpitant."}',
             'value_pt' => '{"0":"Isso permite que os jogadores ativos experimentem, tornando o jogo ao mesmo tempo mais seguro e mais emocionante."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Apuesta Combinada del Día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This offer is for those who enjoy creating accumulator bets from multiple events. 1XBET selects one or several relevant events daily (for example, Champions League football matches, NBA games, international tennis matches) and offers a special winnings boost of +10% if you place a bet slip specifically on these events."}',
             'value_es' => '{"0":"Esta oferta es para quienes disfrutan creando apuestas acumuladas a partir de varios eventos. 1XBET selecciona diariamente uno o varios eventos relevantes (por ejemplo, partidos de la Liga de Campeones, juegos de la NBA, partidos internacionales de tenis) y ofrece un aumento especial de las ganancias del +10% si realizas un cupón específicamente en estos eventos."}',
             'value_fr' => '{"0":"Cette offre s’adresse à ceux qui aiment composer des paris combinés à partir de plusieurs événements. 1XBET sélectionne chaque jour un ou plusieurs événements pertinents (par exemple, des matchs de la Ligue des Champions, des rencontres NBA, des matchs internationaux de tennis) et propose une augmentation spéciale des gains de +10 % si vous placez un coupon sur ces événements."}',
             'value_pt' => '{"0":"Esta oferta é para quem gosta de criar apostas acumuladas a partir de vários eventos. A 1XBET seleciona diariamente um ou mais eventos relevantes (por exemplo, partidas da Liga dos Campeões, jogos da NBA, partidas internacionais de tênis) e oferece um aumento especial nos ganhos de +10% se você fizer um bilhete especificamente nesses eventos."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"With Accumulator of the Day, you can choose events not only based on your own knowledge but also on promotional days, significantly increasing your potential winnings."}',
             'value_es' => '{"0":"Con Apuesta Combinada del Día, puedes elegir eventos no solo basándote en tu propio conocimiento, sino también en los días promocionales, aumentando significativamente tus ganancias potenciales."}',
             'value_fr' => '{"0":"Grâce à Pari Combiné du Jour, vous pouvez choisir vos événements non seulement en fonction de vos connaissances, mais aussi des jours promotionnels, augmentant ainsi considérablement vos gains potentiels."}',
             'value_pt' => '{"0":"Com o Acumulador do Dia, você pode escolher os eventos não apenas com base em seu próprio conhecimento, mas também nos dias promocionais, aumentando significativamente seus ganhos potenciais."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Hyper Bonus"}',
                'value_es' => '{"0":"Hyper Bonus"}',
                'value_fr' => '{"0":"Hyper Bonus"}',
                'value_pt' => '{"0":"Hyper Bonus"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers a progressive bonus that depends on the number of events in your accumulator. The more matches you select, the higher the bonus that is added to your winnings."}',
             'value_es' => '{"0":"1XBET ofrece un bono progresivo que depende del número de eventos en tu acumulador. Cuantos más partidos selecciones, mayor será el bono que se añade a tus ganancias."}',
             'value_fr' => '{"0":"1XBET propose un bonus progressif qui dépend du nombre d’événements dans votre combiné. Plus vous sélectionnez de matchs, plus le bonus ajouté à vos gains est important."}',
             'value_pt' => '{"0":"A 1XBET oferece um bônus progressivo que depende do número de eventos no seu acumulador. Quanto mais partidas você selecionar, maior será o bônus adicionado aos seus ganhos."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For example, if you create a bet slip with 5 events, you receive +10% on your winnings. If you add 10 events, the bonus increases to +40%, and if 25 events win, you get an incredible +250%! Of course, this does not mean you are playing without risk, as all events on the slip must win, otherwise the bet loses."}',
             'value_es' => '{"0":"Por ejemplo, si creas un cupón con 5 eventos, recibes un +10% sobre tus ganancias. Si agregas 10 eventos, el bono aumenta a +40%, y si 25 eventos resultan ganadores, obtienes un increíble +250%. Por supuesto, esto no significa que juegues sin riesgo, ya que todos los eventos del cupón deben ganar; de lo contrario, la apuesta se pierde."}',
             'value_fr' => '{"0":"Par exemple, si vous composez un coupon avec 5 événements, vous recevez +10 % sur vos gains. Si vous ajoutez 10 événements, le bonus augmente à +40 %, et si 25 événements sont gagnants, vous obtenez un incroyable +250 % ! Bien sûr, cela ne signifie pas que vous jouez sans risque, car tous les événements du coupon doivent être gagnants, sinon le pari est perdu."}',
             'value_pt' => '{"0":"Por exemplo, se você criar um bilhete com 5 eventos, recebe +10% sobre seus ganhos. Se adicionar 10 eventos, o bônus aumenta para +40%, e se 25 eventos forem vencedores, você recebe incríveis +250%! Claro, isso não significa que você está jogando sem risco, pois todos os eventos no bilhete devem vencer; caso contrário, a aposta perde."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Also, keep in mind that each event in the accumulator must have odds of at least 1.2."}',
             'value_es' => '{"0":"Además, ten en cuenta que cada evento en el acumulador debe tener cuotas de al menos 1.2."}',
             'value_fr' => '{"0":"Aussi, gardez à l’esprit que chaque événement dans le combiné doit avoir une cote d’au moins 1.2."}',
             'value_pt' => '{"0":"Além disso, tenha em mente que cada evento no acumulador deve ter odds de pelo menos 1.2."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1. How to use a promo code during registration?"}',
             'value_es' => '{"0":"1. ¿Cómo usar un código promocional durante el registro?"}',
             'value_fr' => '{"0":"1. Comment utiliser un code promo lors de l’inscription ?"}',
             'value_pt' => '{"0":"1. Como usar um código promocional durante o registro?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Enter it in the special field during registration, and the bonus will be activated immediately after making a deposit."}',
             'value_es' => '{"0":"Introdúcelo en el campo especial durante el registro y el bono se activará inmediatamente después de realizar el depósito."}',
             'value_fr' => '{"0":"Saisissez-le dans le champ prévu à cet effet lors de l’inscription, et le bonus sera activé immédiatement après le dépôt."}',
             'value_pt' => '{"0":"Digite-o no campo especial durante o registro, e o bônus será ativado imediatamente após o depósito."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"2. Are there no deposit bonuses?"}',
             'value_es' => '{"0":"2. ¿Hay bonos sin depósito?"}',
             'value_fr' => '{"0":"2. Y a-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"2. Existem bônus sem depósito?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, for example, the Goalless Football Refund promotion allows you to receive a bet without any additional deposits."}',
             'value_es' => '{"0":"Sí, por ejemplo, la promoción Goalless Football Refund permite recibir una apuesta sin realizar depósitos adicionales."}',
             'value_fr' => '{"0":"Oui, par exemple, la promotion Goalless Football Refund permet d’obtenir un pari sans dépôt supplémentaire."}',
             'value_pt' => '{"0":"Sim, por exemplo, a promoção Goalless Football Refund permite receber uma aposta sem depósitos adicionais."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"3. How to get bonuses for regular customers?"}',
             'value_es' => '{"0":"3. ¿Cómo obtener bonos para clientes habituales?"}',
             'value_fr' => '{"0":"3. Comment obtenir des bonus pour les clients réguliers ?"}',
             'value_pt' => '{"0":"3. Como obter bônus para clientes regulares?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Simply participate in the daily promotions and special offers on the site."}',
             'value_es' => '{"0":"Simplemente participa en las promociones diarias y ofertas especiales en el sitio."}',
             'value_fr' => '{"0":"Il suffit de participer aux promotions quotidiennes et aux offres spéciales sur le site."}',
             'value_pt' => '{"0":"Basta participar das promoções diárias e ofertas especiais no site."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"4. Can promotions be combined?"}',
             'value_es' => '{"0":"4. ¿Se pueden combinar las promociones?"}',
             'value_fr' => '{"0":"4. Peut-on combiner les promotions ?"}',
             'value_pt' => '{"0":"4. É possível combinar promoções?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, promotions can be combined, but it’s best to check the specific bonus rules before using them."}',
             'value_es' => '{"0":"En la mayoría de los casos, las promociones se pueden combinar, pero es mejor revisar las reglas del bono específico antes de utilizarlas."}',
             'value_fr' => '{"0":"Dans la plupart des cas, les promotions peuvent être combinées, mais il est préférable de vérifier les règles du bonus spécifique avant de les utiliser."}',
             'value_pt' => '{"0":"Na maioria dos casos, as promoções podem ser combinadas, mas é melhor verificar as regras do bônus específico antes de usá-las."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"5. Is verification required for bonuses?"}',
             'value_es' => '{"0":"5. ¿Se requiere verificación para los bonos?"}',
             'value_fr' => '{"0":"5. La vérification est-elle nécessaire pour les bonus ?"}',
             'value_pt' => '{"0":"5. É necessária verificação para os bônus?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, to receive winnings from bonuses, it is recommended to complete the verification of personal information and documents."}',
             'value_es' => '{"0":"Sí, para recibir las ganancias de los bonos se recomienda completar la verificación de la información personal y los documentos."}',
             'value_fr' => '{"0":"Oui, pour recevoir les gains des bonus, il est recommandé de procéder à la vérification des informations personnelles et des documents."}',
             'value_pt' => '{"0":"Sim, para receber os ganhos dos bônus, recomenda-se concluir a verificação das informações pessoais e documentos."}',
             'order' => 40
            ]
        );
    }
}
