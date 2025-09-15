<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers betting on sports, eSports, virtual sports, as well as a full casino section with thousands of slots and live games. It is important to note that the company pays special attention to bonus offers, providing them both for sports betting and casino play."}',
             'value_es' => '{"0":"Linebet ofrece apuestas en deportes, eSports, deportes virtuales, así como una sección completa de casino con miles de tragamonedas y juegos en vivo. Es importante señalar que la compañía presta especial atención a las ofertas de bonificación, proporcionándolas tanto para las apuestas deportivas como para el casino."}',
             'value_fr' => '{"0":"Linebet propose des paris sur le sport, l’eSport, les sports virtuels, ainsi qu’une section complète de casino avec des milliers de machines à sous et de jeux en direct. Il est important de noter que l’entreprise accorde une attention particulière aux offres de bonus, en les proposant aussi bien pour les paris sportifs que pour le casino."}',
             'value_pt' => '{"0":"A Linebet oferece apostas em esportes, eSports, esportes virtuais, bem como uma seção completa de cassino com milhares de slots e jogos ao vivo. É importante destacar que a empresa dá especial atenção às ofertas de bônus, disponibilizando-as tanto para apostas esportivas quanto para o cassino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at the available promotions, wagering requirements, as well as answers to the most frequently asked questions. We will also explain how you can receive an additional $120 for sports betting and $350 + 30 free spins for casino play during registration."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle las promociones disponibles, los requisitos de apuesta, así como las respuestas a las preguntas más frecuentes. También explicaremos cómo se pueden obtener $120 adicionales para apuestas deportivas y $350 + 30 giros gratis para jugar en el casino durante el registro."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail les promotions disponibles, les conditions de mise, ainsi que les réponses aux questions les plus fréquentes. Nous expliquerons également comment obtenir 120 $ supplémentaires pour les paris sportifs et 350 $ + 30 free spins pour jouer au casino lors de l’inscription."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar as promoções disponíveis, os requisitos de aposta, bem como as respostas às perguntas mais frequentes. Também explicaremos como é possível receber US$120 adicionais para apostas esportivas e US$350 + 30 free spins para jogar no cassino durante o registro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To claim the registration bonus, the user needs to visit the official Linebet website and click the registration button located at the top right. Registration can be completed using a phone number, email address, social media account, or with the one-click option."}',
             'value_es' => '{"0":"Para obtener el bono de registro, el usuario debe ingresar al sitio oficial de Linebet y hacer clic en el botón de registro ubicado en la parte superior derecha. El registro se puede completar utilizando un número de teléfono, una dirección de correo electrónico, una cuenta de redes sociales o mediante la opción de un solo clic."}',
             'value_fr' => '{"0":"Pour obtenir le bonus d’inscription, l’utilisateur doit se rendre sur le site officiel de Linebet et cliquer sur le bouton d’inscription situé en haut à droite. L’inscription peut être effectuée avec un numéro de téléphone, une adresse e-mail, un compte de réseaux sociaux ou en utilisant l’option en un clic."}',
             'value_pt' => '{"0":"Para receber o bônus de registro, o usuário deve acessar o site oficial da Linebet e clicar no botão de registro localizado no canto superior direito. O registro pode ser feito usando um número de telefone, um endereço de e-mail, uma conta de rede social ou pela opção de um clique."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"During account creation, you must enter the promo code :promocode in the special field, which will activate the bonus on your first deposit. Also, don’t forget to indicate whether you want to use the bonuses for sports betting or for casino games."}',
             'value_es' => '{"0":"Durante la creación de la cuenta, es necesario ingresar el código promocional :promocode en el campo correspondiente, lo que activará el bono en el primer depósito. Además, no olvides indicar si deseas usar los bonos para apuestas deportivas o para juegos de casino."}',
             'value_fr' => '{"0":"Lors de la création du compte, il faut saisir le code promo :promocode dans le champ prévu à cet effet, ce qui activera le bonus sur le premier dépôt. N’oubliez pas non plus de préciser si vous souhaitez utiliser les bonus pour les paris sportifs ou pour les jeux de casino."}',
             'value_pt' => '{"0":"Durante a criação da conta, é necessário inserir o código promocional :promocode no campo apropriado, o que ativará o bônus no primeiro depósito. Além disso, não se esqueça de indicar se deseja utilizar os bônus para apostas esportivas ou para jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Please note that bonus funds must first be wagered before they can be withdrawn."}',
             'value_es' => '{"0":"Tenga en cuenta que los fondos de bonificación deben apostarse primero antes de poder retirarlos."}',
             'value_fr' => '{"0":"Veuillez noter que les fonds de bonus doivent d’abord être misés avant de pouvoir être retirés."}',
             'value_pt' => '{"0":"Observe que os fundos de bônus devem ser apostados primeiro antes de poderem ser retirados."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, the bonus must be wagered five times on accumulator bets with at least three events, each with odds of no less than 1.40. The bonus is automatically credited after a deposit of $1 to $120."}',
             'value_es' => '{"0":"Para las apuestas deportivas, el bono debe apostarse cinco veces en apuestas combinadas con al menos tres eventos, cada uno con una cuota mínima de 1.40. El bono se acredita automáticamente después de un depósito de entre 1 y 120 dólares."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le bonus doit être misé cinq fois sur des paris combinés comprenant au moins trois événements, chacun avec une cote d’au moins 1.40. Le bonus est automatiquement crédité après un dépôt de 1 à 120 dollars."}',
             'value_pt' => '{"0":"Para apostas esportivas, o bônus deve ser apostado cinco vezes em apostas acumuladas com pelo menos três eventos, cada um com odds de no mínimo 1.40. O bônus é creditado automaticamente após um depósito de 1 a 120 dólares."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The casino bonus must be wagered 35 times on slots within 7 days. The maximum bet while wagering the bonus is $5. The bonus is automatically credited after a deposit of $10 to $350."}',
             'value_es' => '{"0":"El bono de casino debe apostarse 35 veces en tragamonedas dentro de los 7 días. La apuesta máxima durante el requisito de apuesta es de 5 dólares. El bono se acredita automáticamente después de un depósito de entre 10 y 350 dólares."}',
             'value_fr' => '{"0":"Le bonus de casino doit être misé 35 fois sur les machines à sous dans un délai de 7 jours. La mise maximale pendant les conditions de mise est de 5 dollars. Le bonus est automatiquement crédité après un dépôt de 10 à 350 dollars."}',
             'value_pt' => '{"0":"O bônus de cassino deve ser apostado 35 vezes em slots dentro de 7 dias. A aposta máxima durante o requisito de apostas é de 5 dólares. O bônus é creditado automaticamente após um depósito de 10 a 350 dólares."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, Linebet does not offer standard no-deposit bonuses. Occasionally, special promotions or promo games are held where users can receive free spins or small bonuses without making a deposit. To stay informed about such offers, it is recommended to regularly check the «PROMO» section on the official website or subscribe to the newsletter and official Linebet social media accounts."}',
             'value_es' => '{"0":"Actualmente, Linebet no ofrece bonos estándar sin depósito. Ocasionalmente se realizan promociones especiales o juegos promocionales donde los usuarios pueden recibir giros gratis o pequeños bonos sin necesidad de realizar un depósito. Para estar al tanto de estas ofertas, se recomienda revisar regularmente la sección «PROMO» en el sitio web oficial o suscribirse al boletín y a las cuentas oficiales de redes sociales de Linebet."}',
             'value_fr' => '{"0":"Pour le moment, Linebet n’offre pas de bonus sans dépôt standard. Occasionnellement, des promotions spéciales ou des jeux promotionnels permettent aux utilisateurs de recevoir des tours gratuits ou de petits bonus sans effectuer de dépôt. Pour rester informé de ces offres, il est recommandé de vérifier régulièrement la section «PROMO» sur le site officiel ou de s’abonner à la newsletter et aux comptes officiels de Linebet sur les réseaux sociaux."}',
             'value_pt' => '{"0":"No momento, a Linebet não oferece bônus padrão sem depósito. Ocasionalmente, são realizadas promoções especiais ou jogos promocionais em que os usuários podem receber rodadas grátis ou pequenos bônus sem fazer depósito. Para ficar informado sobre essas ofertas, recomenda-se verificar regularmente a seção «PROMO» no site oficial ou assinar o boletim informativo e acompanhar as contas oficiais da Linebet nas redes sociais."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet actively encourages regular players. Among the promotions available after registration are weekly bonuses, boosted odds on popular accumulator bets, and cashback for active players. Promotions are available for both sports betting and casino games. For example, the weekly cashback allows players to get part of their stakes back, and VIP players can participate in special promotions with increased cashback."}',
             'value_es' => '{"0":"Linebet incentiva activamente a los jugadores habituales. Entre las promociones disponibles después del registro se encuentran bonos semanales, cuotas mejoradas en apuestas combinadas populares y reembolsos para jugadores activos. Las promociones están disponibles tanto para apuestas deportivas como para juegos de casino. Por ejemplo, el reembolso semanal permite recuperar parte de las apuestas, y los jugadores VIP pueden participar en promociones especiales con reembolsos aumentados."}',
             'value_fr' => '{"0":"Linebet encourage activement les joueurs réguliers. Parmi les promotions disponibles après l’inscription, on trouve des bonus hebdomadaires, des cotes améliorées sur les paris combinés populaires et du cashback pour les joueurs actifs. Les promotions sont disponibles aussi bien pour les paris sportifs que pour les jeux de casino. Par exemple, le cashback hebdomadaire permet de récupérer une partie des mises, et les joueurs VIP peuvent participer à des promotions spéciales avec un cashback augmenté."}',
             'value_pt' => '{"0":"A Linebet incentiva ativamente os jogadores regulares. Entre as promoções disponíveis após o registro estão bônus semanais, odds aumentadas em apostas acumuladoras populares e cashback para jogadores ativos. As promoções estão disponíveis tanto para apostas esportivas quanto para jogos de cassino. Por exemplo, o cashback semanal permite recuperar parte das apostas, e os jogadores VIP podem participar de promoções especiais com cashback aumentado."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"LUCKY MONDAY PROMO"}',
                'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE"}',
                'value_fr' => '{"0":"PROMO LUNDI CHANCEUX"}',
                'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This promotion gives users a 100% bonus on deposits from $1 to $100 every Monday. To activate the bonus, it is enough to make a deposit during Monday. There are also conditions for wagering the bonus funds."}',
             'value_es' => '{"0":"Esta promoción ofrece a los usuarios un bono del 100% en depósitos de $1 a $100 todos los lunes. Para activar el bono, basta con realizar un depósito durante el lunes. También existen condiciones para apostar los fondos del bono."}',
             'value_fr' => '{"0":"Cette promotion offre aux utilisateurs un bonus de 100 % sur les dépôts de 1 $ à 100 $ chaque lundi. Pour activer le bonus, il suffit d’effectuer un dépôt pendant le lundi. Il existe également des conditions pour miser les fonds du bonus."}',
             'value_pt' => '{"0":"Esta promoção oferece aos usuários um bônus de 100% em depósitos de $1 a $100 todas as segundas-feiras. Para ativar o bônus, basta fazer um depósito durante a segunda-feira. Existem também condições para apostar os fundos do bônus."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To wager the bonus, place bets on accumulators totaling three times the bonus amount within 24 hours of the bonus being credited (otherwise it will be canceled). Each accumulator must include at least 3 events. At least 3 events in each accumulator must have odds of at least 1.40. Create your betting slip, enter the stake amount, select the bonus account, and click the «Place Bet» button."}',
             'value_es' => '{"0":"Para apostar el bono, realice apuestas acumuladoras por un total de tres veces el importe del bono dentro de las 24 horas posteriores a que se acredite el bono (de lo contrario, se cancelará). Cada acumuladora debe incluir al menos 3 eventos. Al menos 3 eventos en cada acumuladora deben tener cuotas de al menos 1,40. Cree su cupón de apuestas, ingrese el monto de la apuesta, seleccione la cuenta de bono y haga clic en el botón «Realizar apuesta»."}',
             'value_fr' => '{"0":"Pour miser le bonus, placez des paris combinés totalisant trois fois le montant du bonus dans les 24 heures suivant le crédit du bonus (sinon il sera annulé). Chaque combiné doit inclure au moins 3 événements. Au moins 3 événements dans chaque combiné doivent avoir des cotes d’au moins 1,40. Créez votre coupon de pari, saisissez le montant de la mise, sélectionnez le compte bonus et cliquez sur le bouton « Placer le pari »."}',
             'value_pt' => '{"0":"Para apostar o bônus, faça apostas acumuladas no valor de três vezes o bônus dentro de 24 horas após o crédito do bônus (caso contrário, será cancelado). Cada acumulada deve incluir pelo menos 3 eventos. Pelo menos 3 eventos em cada acumulada devem ter odds de pelo menos 1,40. Crie seu cupom de apostas, insira o valor da aposta, selecione a conta de bônus e clique no botão «Fazer Aposta»."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This bonus allows you to start the week with extra funds for betting and increases potential profit from accumulator bets, especially when planning bets on popular football events or eSports."}',
             'value_es' => '{"0":"Este bono permite comenzar la semana con fondos adicionales para apostar y aumenta la ganancia potencial de las apuestas acumuladoras, especialmente al planificar apuestas en eventos populares de fútbol o eSports."}',
             'value_fr' => '{"0":"Ce bonus permet de commencer la semaine avec des fonds supplémentaires pour parier et augmente le gain potentiel des paris combinés, surtout si vous planifiez des paris sur des événements populaires de football ou d’eSports."}',
             'value_pt' => '{"0":"Este bônus permite começar a semana com fundos extras para apostas e aumenta o lucro potencial das apostas acumuladas, especialmente ao planejar apostas em eventos populares de futebol ou eSports."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Of The Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This promotion offers users enhanced odds on selected accumulator bets. Within this promotion, players can receive up to a 10% increase on the odds of the Bet of the Day. The odds boost is applied automatically."}',
             'value_es' => '{"0":"Esta promoción ofrece a los usuarios un aumento de cuotas en apuestas acumuladoras seleccionadas. Dentro de esta promoción, los jugadores pueden recibir hasta un 10 % adicional en las cuotas de la Apuesta del Día. El aumento de cuotas se aplica automáticamente."}',
             'value_fr' => '{"0":"Cette promotion offre aux utilisateurs une augmentation des cotes sur certaines paris combinés. Dans le cadre de cette promotion, les joueurs peuvent obtenir jusqu’à 10 % de cotes supplémentaires sur le Pari du Jour. L’augmentation des cotes est appliquée automatiquement."}',
             'value_pt' => '{"0":"Esta promoção oferece aos usuários aumento de odds em apostas acumuladas selecionadas. Dentro desta promoção, os jogadores podem receber até 10% a mais nas odds da Aposta do Dia. O aumento das odds é aplicado automaticamente."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Weekly Cashback"}',
                'value_es' => '{"0":"Devolución semanal"}',
                'value_fr' => '{"0":"Cashback hebdomadaire"}',
                'value_pt' => '{"0":"Cashback semanal"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The promotion offers a return of a portion of the total bets placed during the week. The cashback is 0.3% of all bets placed in the previous week, with a maximum amount of up to $1000."}',
             'value_es' => '{"0":"La promoción ofrece la devolución de una parte del total de las apuestas realizadas durante la semana. El cashback es del 0,3% de todas las apuestas realizadas la semana anterior, con un monto máximo de hasta $1000."}',
             'value_fr' => '{"0":"La promotion prévoit le remboursement d\'une partie du total des mises effectuées au cours de la semaine. Le cashback est de 0,3 % de toutes les mises réalisées la semaine précédente, avec un montant maximum pouvant atteindre 1000 $."}',
             'value_pt' => '{"0":"A promoção oferece o retorno de uma parte do total das apostas realizadas durante a semana. O cashback é de 0,3% de todas as apostas feitas na semana anterior, com um valor máximo de até $1000."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that to receive the cashback, you must have an active account and place bets on events with a minimum odds of 1.50. Cashback is credited every Sunday, allowing players to regularly get back a portion of their funds."}',
             'value_es' => '{"0":"Es importante destacar que para recibir el cashback se debe tener una cuenta activa y realizar apuestas en eventos con cuotas mínimas de 1,50. El cashback se acredita cada domingo, lo que permite a los jugadores recuperar regularmente parte de sus fondos."}',
             'value_fr' => '{"0":"Il est important de noter que pour recevoir le cashback, vous devez avoir un compte actif et placer des mises sur des événements avec des cotes minimales de 1,50. Le cashback est crédité chaque dimanche, permettant aux joueurs de récupérer régulièrement une partie de leurs fonds."}',
             'value_pt' => '{"0":"É importante destacar que, para receber o cashback, é necessário ter uma conta ativa e fazer apostas em eventos com odds mínimas de 1,50. O cashback é creditado todos os domingos, permitindo que os jogadores recuperem regularmente parte de seus fundos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Casino VIP Cashback is aimed at players who have reached VIP status. The size of the cashback depends on the loyalty level. Cashback is credited on all casino bets regardless of win or loss, allowing players to recover part of their gaming expenses. Loyalty levels are updated based on the volume of bets, and participation in the program is automatic, simplifying the process of receiving the bonus."}',
             'value_es' => '{"0":"El Casino VIP Cashback está dirigido a los jugadores que han alcanzado el estatus VIP. El tamaño del cashback depende del nivel de lealtad. El cashback se acredita en todas las apuestas de casino, independientemente de si se gana o se pierde, lo que permite recuperar parte de los gastos de juego. Los niveles de lealtad se actualizan según el volumen de apuestas, y la participación en el programa es automática, lo que simplifica el proceso de recibir el bono."}',
             'value_fr' => '{"0":"Le Casino VIP Cashback est destiné aux joueurs ayant atteint le statut VIP. Le montant du cashback dépend du niveau de fidélité. Le cashback est crédité sur toutes les mises au casino, qu’elles soient gagnantes ou perdantes, ce qui permet de compenser une partie des dépenses de jeu. Les niveaux de fidélité sont mis à jour en fonction du volume des mises, et la participation au programme est automatique, ce qui simplifie le processus de réception du bonus."}',
             'value_pt' => '{"0":"O Casino VIP Cashback é destinado a jogadores que alcançaram o status VIP. O valor do cashback depende do nível de fidelidade. O cashback é creditado em todas as apostas de cassino, independentemente de vitória ou derrota, permitindo recuperar parte dos gastos com jogos. Os níveis de fidelidade são atualizados de acordo com o volume de apostas, e a participação no programa é automática, simplificando o processo de recebimento do bônus."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How to get a registration bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de registro?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus d’inscription ?"}',
             'value_pt' => '{"0":"Como obter o bônus de registro?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Use the promo code :promocode during registration and make your first deposit. You can read more details at the top of this review."}',
             'value_es' => '{"0":"Utilice el código promocional :promocode durante el registro y haga su primer depósito. Puede leer más detalles en la parte superior de esta reseña."}',
             'value_fr' => '{"0":"Utilisez le code promo :promocode lors de l’inscription et effectuez votre premier dépôt. Vous pouvez lire plus de détails en haut de cette revue."}',
             'value_pt' => '{"0":"Use o código promocional :promocode durante o registro e faça seu primeiro depósito. Você pode ler mais detalhes no início desta análise."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"What are the bonus wagering requirements?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta del bono?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise du bonus ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de aposta do bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times on accumulator bets with at least three events, each with odds of at least 1.40. The casino bonus must be wagered 35 times on slots."}',
             'value_es' => '{"0":"El bono para apuestas deportivas debe apostarse 5 veces en apuestas combinadas con al menos tres eventos, cada uno con cuotas de al menos 1,40. El bono de casino debe apostarse 35 veces en tragamonedas."}',
             'value_fr' => '{"0":"Le bonus pour les paris sportifs doit être misé 5 fois sur des paris combinés comportant au moins trois événements, chacun avec des cotes d’au moins 1,40. Le bonus de casino doit être misé 35 fois sur les machines à sous."}',
             'value_pt' => '{"0":"O bônus para apostas esportivas deve ser apostado 5 vezes em apostas acumuladas com pelo menos três eventos, cada um com odds de pelo menos 1,40. O bônus de cassino deve ser apostado 35 vezes em slots."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How to get cashback?"}',
             'value_es' => '{"0":"¿Cómo obtener cashback?"}',
             'value_fr' => '{"0":"Comment obtenir le cashback ?"}',
             'value_pt' => '{"0":"Como receber o cashback?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited automatically based on the total amount of bets placed during the week and the user’s loyalty level."}',
             'value_es' => '{"0":"El cashback se acredita automáticamente según el total de apuestas realizadas durante la semana y el nivel de lealtad del usuario."}',
             'value_fr' => '{"0":"Le cashback est crédité automatiquement en fonction du montant total des paris effectués pendant la semaine et du niveau de fidélité de l’utilisateur."}',
             'value_pt' => '{"0":"O cashback é creditado automaticamente com base no valor total das apostas feitas durante a semana e no nível de fidelidade do usuário."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any no-deposit bonuses on Linebet?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito en Linebet?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt sur Linebet ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito no Linebet?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, there are no no-deposit bonuses, but sometimes the company runs temporary promotions with promo codes or free spins without requiring a deposit."}',
             'value_es' => '{"0":"Actualmente no hay bonos sin depósito, pero a veces la compañía realiza promociones temporales con códigos promocionales o giros gratis sin necesidad de depositar."}',
             'value_fr' => '{"0":"Pour le moment, il n’y a pas de bonus sans dépôt, mais la société propose parfois des promotions temporaires avec des codes promo ou des tours gratuits sans dépôt."}',
             'value_pt' => '{"0":"No momento, não há bônus sem depósito, mas às vezes a empresa realiza promoções temporárias com códigos promocionais ou rodadas grátis sem a necessidade de depósito."}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used for deposits and withdrawals?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda para depósitos y retiros?"}',
             'value_fr' => '{"0":"Peut-on utiliser les crypto-monnaies pour les dépôts et les retraits ?"}',
             'value_pt' => '{"0":"É possível usar criptomoedas para depósitos e saques?"}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Linebet supports more than 20 cryptocurrencies, including Bitcoin, Ethereum, Litecoin, Dogecoin, and other popular options."}',
             'value_es' => '{"0":"Sí, Linebet admite más de 20 criptomonedas, incluidas Bitcoin, Ethereum, Litecoin, Dogecoin y otras opciones populares."}',
             'value_fr' => '{"0":"Oui, Linebet prend en charge plus de 20 crypto-monnaies, y compris Bitcoin, Ethereum, Litecoin, Dogecoin et d\'autres options populaires."}',
             'value_pt' => '{"0":"Sim, o Linebet suporta mais de 20 criptomoedas, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin e outras opções populares.f"}',
             'order' => 39
            ]
        );
    }
}
