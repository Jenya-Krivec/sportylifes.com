<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"At 1xBit, both new and regular players can benefit from extra rewards and pleasant surprises while playing. One of the main features of 1xBit is that all financial transactions are carried out in cryptocurrency, and the absence of mandatory verification makes the registration process quick and convenient."}',
             'value_es' => '{"0":"En 1xBit, tanto los nuevos como los jugadores habituales pueden obtener beneficios adicionales y agradables sorpresas durante el juego. Una de las principales características de 1xBit es que todas las transacciones financieras se realizan en criptomonedas, y la ausencia de verificación obligatoria hace que el proceso de registro sea rápido y cómodo."}',
             'value_fr' => '{"0":"Sur 1xBit, aussi bien les nouveaux joueurs que les utilisateurs réguliers peuvent profiter d’avantages supplémentaires et de surprises agréables pendant leurs parties. La particularité de 1xBit est que toutes les transactions financières se font en cryptomonnaie, et l’absence de vérification obligatoire rend le processus d’inscription rapide et pratique."}',
             'value_pt' => '{"0":"No 1xBit, tanto os novos como os jogadores habituais podem receber benefícios adicionais e agradáveis surpresas durante o jogo. A principal característica do 1xBit é que todas as transações financeiras são realizadas em criptomoedas, e a ausência de verificação obrigatória torna o processo de registro rápido e conveniente."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The bonus offers at 1xBit cover different categories: from welcome bonuses for new players to special promotions and cashback for regular users. In this review, we will explain how to use the promo code :promocode during registration, the wagering requirements, and also take a closer look at the current promotions and loyalty programs."}',
             'value_es' => '{"0":"Las ofertas de bonificación en 1xBit cubren diferentes categorías: desde bonos de bienvenida para nuevos jugadores hasta promociones especiales y reembolsos para los usuarios habituales. En esta reseña explicaremos cómo utilizar el código promocional :promocode al registrarse, los requisitos de apuesta y también analizaremos las promociones y programas de fidelidad disponibles."}',
             'value_fr' => '{"0":"Les offres de bonus chez 1xBit couvrent différentes catégories : des bonus de bienvenue pour les nouveaux joueurs aux promotions spéciales et au cashback pour les utilisateurs réguliers. Dans cette analyse, nous expliquerons comment utiliser le code promo :promocode lors de l’inscription, les conditions de mise, et nous examinerons également les promotions et programmes de fidélité actuels."}',
             'value_pt' => '{"0":"As ofertas de bônus do 1xBit abrangem diferentes categorias: desde bônus de boas-vindas para novos jogadores até promoções especiais e cashback para usuários regulares. Nesta análise, explicaremos como utilizar o código promocional :promocode no momento do registro, os requisitos de aposta e também veremos as promoções e programas de fidelidade disponíveis."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to use a promo code during registration?"}',
                'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
                'value_fr' => '{"0":"Comment utiliser un code promotionnel lors de l’inscription ?"}',
                'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To claim the welcome bonus on 1xBit, you need to use the promo code :promocode during registration. To register, simply go to the official website, click the registration button, and fill out the standard form. In the special field for the promo code, enter :promocode. After completing the registration and making your first deposit of up to 1 BTC, a 100% bonus + 70 FS will be automatically credited to your account."}',
             'value_es' => '{"0":"Para obtener el bono de bienvenida en 1xBit, es necesario utilizar el código promocional :promocode durante el registro. Para registrarte, basta con ir al sitio web oficial, hacer clic en el botón de registro y completar el formulario estándar. En el campo especial para el código promocional, introduce :promocode. Tras finalizar el registro y realizar tu primer depósito de hasta 1 BTC, se acreditará automáticamente un bono del 100% + 70 FS en tu cuenta."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue sur 1xBit, il est nécessaire d’utiliser le code promo :promocode lors de l’inscription. Pour vous inscrire, il suffit de vous rendre sur le site officiel, de cliquer sur le bouton d’inscription et de remplir le formulaire standard. Dans le champ dédié au code promo, saisissez :promocode. Une fois l’inscription terminée et le premier dépôt effectué jusqu’à 1 BTC, un bonus de 100 % + 70 FS sera automatiquement crédité sur votre compte."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas no 1xBit, é necessário utilizar o código promocional :promocode durante o registro. Para se registrar, basta acessar o site oficial, clicar no botão de registro e preencher o formulário padrão. No campo especial destinado ao código promocional, insira :promocode. Após concluir o registro e realizar o primeiro depósito de até 1 BTC, um bônus de 100% + 70 FS será automaticamente creditado na sua conta."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"All deposit bonuses are subject to a x40 wagering requirement of the deposit amount within 30 days after making the deposit. After the bonus expires or is canceled, it is considered lost. Free spins are available for 20 days from the moment they are credited. Free spins are subject to a x30 wagering requirement within 10 days after use. Only sports bets (single and accumulator) placed with odds of at least 1.6, as well as bets in the Slots section, count toward the wagering requirements."}',
             'value_es' => '{"0":"Todos los bonos por depósito están sujetos a un requisito de apuesta de x40 del importe del depósito dentro de los 30 días posteriores a la realización del mismo. Una vez que el bono expire o sea cancelado, se considerará perdido. Los giros gratis están disponibles durante 20 días desde el momento en que se acreditan. Los giros gratis están sujetos a un requisito de apuesta de x30 dentro de los 10 días posteriores a su uso. Solo cuentan las apuestas deportivas (simples y combinadas) realizadas con cuotas de al menos 1.6, así como las apuestas en la sección de Tragamonedas."}',
             'value_fr' => '{"0":"Tous les bonus de dépôt sont soumis à une exigence de mise de x40 du montant du dépôt dans les 30 jours suivant celui-ci. À l’expiration ou à l’annulation du bonus, celui-ci est considéré comme perdu. Les free spins sont disponibles pendant 20 jours à partir de leur attribution. Ils sont soumis à une exigence de mise de x30 dans les 10 jours suivant leur utilisation. Seules les paris sportifs (simples et combinés) avec une cote minimale de 1,6 ainsi que les mises dans la section Machines à sous comptent pour les conditions de mise."}',
             'value_pt' => '{"0":"Todos os bônus de depósito estão sujeitos a um requisito de apostas de x40 sobre o valor do depósito dentro de 30 dias após a realização do mesmo. Após a expiração ou o cancelamento do bônus, ele será considerado perdido. Os giros grátis ficam disponíveis por 20 dias a partir do momento do crédito. Os giros grátis estão sujeitos a um requisito de apostas de x30 dentro de 10 dias após o uso. Somente as apostas esportivas (simples e acumuladas) realizadas com odds de pelo menos 1.6, bem como as apostas na seção de Slots, contam para os requisitos de apostas."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit occasionally offers no deposit bonuses, although there is no permanent no deposit program. It is important to regularly check the Bonuses section on the website so as not to miss temporary no deposit offers, as they appear quite rarely."}',
             'value_es' => '{"0":"1xBit ofrece ocasionalmente bonos sin depósito, aunque no existe un programa permanente de este tipo. Es importante revisar con regularidad la sección de Bonos en el sitio web para no perderse las ofertas temporales de bono sin depósito, ya que aparecen con bastante poca frecuencia."}',
             'value_fr' => '{"0":"1xBit propose parfois des bonus sans dépôt, bien qu’il n’existe pas de programme permanent de ce type. Il est important de consulter régulièrement la section Bonus sur le site afin de ne pas manquer les offres temporaires de bonus sans dépôt, car elles apparaissent assez rarement."}',
             'value_pt' => '{"0":"O 1xBit oferece ocasionalmente bônus sem depósito, embora não exista um programa permanente desse tipo. É importante verificar regularmente a seção de Bônus no site para não perder as ofertas temporárias de bônus sem depósito, já que elas aparecem com bastante raridade."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Bonuses for Registered Customers"}',
                'value_es' => '{"0":"Bonos para Clientes Registrados"}',
                'value_fr' => '{"0":"Bonus pour les Clients Inscrits"}',
                'value_pt' => '{"0":"Bônus para Clientes Registrados"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Regular 1xBit players are not left out. The platform frequently launches promotions for those who already have an account to maintain interest and player activity. For example, you can get a 50% bonus on a repeated deposit, and by participating in the loyalty program, you can receive cash or free spins. The VIP program allows active players to earn cashback up to 11%, depending on their level."}',
             'value_es' => '{"0":"Los jugadores habituales de 1xBit no se quedan desatendidos. La plataforma lanza con frecuencia promociones para quienes ya tienen una cuenta, con el fin de mantener el interés y la actividad de los usuarios. Por ejemplo, se puede obtener un bono del 50% en un depósito repetido, y participando en el programa de fidelidad se pueden recibir dinero o giros gratis. El programa VIP permite a los jugadores activos obtener cashback de hasta un 11%, según su nivel."}',
             'value_fr' => '{"0":"Les joueurs réguliers de 1xBit ne sont pas oubliés. La plateforme propose fréquemment des promotions pour ceux qui ont déjà un compte afin de maintenir l’intérêt et l’activité des joueurs. Par exemple, il est possible de recevoir un bonus de 50 % sur un dépôt répété, et en participant au programme de fidélité, on peut obtenir de l’argent ou des tours gratuits. Le programme VIP permet aux joueurs actifs de bénéficier d’un cashback allant jusqu’à 11 % selon leur niveau."}',
             'value_pt' => '{"0":"Os jogadores regulares do 1xBit não ficam desamparados. A plataforma lança frequentemente promoções para quem já possui uma conta, mantendo o interesse e a atividade dos usuários. Por exemplo, é possível receber um bônus de 50% em um depósito repetido, e participando do programa de fidelidade, é possível obter dinheiro ou rodadas grátis. O programa VIP permite que jogadores ativos recebam cashback de até 11%, dependendo do nível."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Ongoing promotions also include bonuses on accumulator bets, free spins, and special offers for holidays or major sporting events."}',
             'value_es' => '{"0":"Las promociones continuas también incluyen bonos en apuestas combinadas, giros gratis y ofertas especiales para festividades o eventos deportivos importantes."}',
             'value_fr' => '{"0":"Les promotions régulières comprennent également des bonus sur les paris combinés, des tours gratuits et des offres spéciales pour les fêtes ou les événements sportifs majeurs."}',
             'value_pt' => '{"0":"As promoções contínuas também incluem bônus em apostas acumuladas, rodadas grátis e ofertas especiais para feriados ou eventos esportivos importantes."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The promotion gives players the opportunity to earn an additional win of up to 10% on pre-selected accumulator bets. Each day, the platform offers specific match combinations in popular sports that players can bet on."}',
             'value_es' => '{"0":"La promoción ofrece a los jugadores la oportunidad de obtener una ganancia adicional de hasta el 10% en apuestas combinadas preseleccionadas. Cada día, la plataforma ofrece combinaciones de partidos específicas en deportes populares sobre los que se puede apostar."}',
             'value_fr' => '{"0":"La promotion offre aux joueurs la possibilité de gagner un gain supplémentaire allant jusqu’à 10 % sur des paris combinés pré-déterminés. Chaque jour, la plateforme propose des combinaisons de matchs spécifiques dans des sports populaires sur lesquels il est possible de parier."}',
             'value_pt' => '{"0":"A promoção oferece aos jogadores a oportunidade de ganhar um lucro adicional de até 10% em apostas acumuladas pré-determinadas. Todos os dias, a plataforma oferece combinações específicas de partidas em esportes populares nas quais os jogadores podem apostar."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To participate, simply log into your account, choose a combination in the «Accumulator of the Day» section, and place a bet on the selected event."}',
             'value_es' => '{"0":"Para participar, simplemente inicia sesión en tu cuenta, elige una combinación en la sección «Combinada del día» y realiza una apuesta en el evento seleccionado."}',
             'value_fr' => '{"0":"Pour participer, il suffit de se connecter à votre compte, de choisir une combinaison dans la section «Pari Combiné du Jour» et de placer un pari sur l’événement sélectionné."}',
             'value_pt' => '{"0":"Para participar, basta entrar na sua conta, escolher uma combinação na seção «Acumulador do Dia» e fazer uma aposta no evento selecionado."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Cashback"}',
                'value_es' => '{"0":"DEVOLUCIÓN VIP"}',
                'value_fr' => '{"0":"Cashback VIP"}',
                'value_pt' => '{"0":"Cashback VIP"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This is a loyalty program through which players can receive bonuses for their activity in the casino. The amount of cashback depends on the level in the VIP program, and the most active players can get up to 11% back from their wagered amounts."}',
             'value_es' => '{"0":"Se trata de un programa de fidelidad mediante el cual los jugadores pueden recibir bonos por su actividad en el casino. El monto del cashback depende del nivel en el programa VIP, y los jugadores más activos pueden recibir hasta un 11% de devolución sobre sus apuestas."}',
             'value_fr' => '{"0":"C’est un programme de fidélité grâce auquel les joueurs peuvent recevoir des bonus pour leur activité au casino. Le montant du cashback dépend du niveau dans le programme VIP, et les joueurs les plus actifs peuvent obtenir jusqu’à 11 % de retour sur leurs mises."}',
             'value_pt' => '{"0":"Trata-se de um programa de fidelidade através do qual os jogadores podem receber bônus pela sua atividade no cassino. O valor do cashback depende do nível no programa VIP, e os jogadores mais ativos podem receber até 11% de retorno sobre os valores apostados."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited weekly and can be used for further bets or withdrawn after meeting the wagering requirements. This is an effective way to earn additional bonuses."}',
             'value_es' => '{"0":"El cashback se acredita semanalmente y se puede usar para realizar nuevas apuestas o retirarlo después de cumplir con los requisitos de apuesta. Es una forma efectiva de obtener bonificaciones adicionales."}',
             'value_fr' => '{"0":"Le cashback est crédité chaque semaine et peut être utilisé pour de nouveaux paris ou retiré après avoir rempli les conditions de mise. C’est un moyen efficace de recevoir des bonus supplémentaires."}',
             'value_pt' => '{"0":"O cashback é creditado semanalmente e pode ser usado para novas apostas ou retirado após cumprir os requisitos de apostas. É uma maneira eficaz de ganhar bônus adicionais."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Which cryptocurrencies are available for deposits and withdrawals on 1xBit?"}',
             'value_es' => '{"0":"¿Qué criptomonedas están disponibles para depósitos y retiros en 1xBit?"}',
             'value_fr' => '{"0":"Quelles cryptomonnaies sont disponibles pour les dépôts et les retraits sur 1xBit ?"}',
             'value_pt' => '{"0":"Quais criptomoedas estão disponíveis para depósitos e saques na 1xBit?"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports over 30 different cryptocurrencies, including Bitcoin, Ethereum, Litecoin, Dogecoin, and many other tokens."}',
             'value_es' => '{"0":"La plataforma admite más de 30 criptomonedas diferentes, incluyendo Bitcoin, Ethereum, Litecoin, Dogecoin y muchos otros tokens."}',
             'value_fr' => '{"0":"La plateforme prend en charge plus de 30 cryptomonnaies différentes, y compris Bitcoin, Ethereum, Litecoin, Dogecoin et de nombreux autres tokens."}',
             'value_pt' => '{"0":"A plataforma suporta mais de 30 criptomoedas diferentes, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin e muitos outros tokens."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is identity verification required during registration?"}',
             'value_es' => '{"0":"¿Es necesario pasar la verificación de identidad al registrarse?"}',
             'value_fr' => '{"0":"Faut-il passer une vérification d\'identité lors de l\'inscription ?"}',
             'value_pt' => '{"0":"É necessário passar pela verificação de identidade ao se registrar?"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"KYC is not mandatory at the start, but for withdrawing large amounts, providing documents to verify your identity may be required."}',
             'value_es' => '{"0":"El KYC no es obligatorio al principio, pero para retirar grandes cantidades puede ser necesario proporcionar documentos para verificar la identidad."}',
             'value_fr' => '{"0":"Le KYC n’est pas obligatoire au départ, mais pour retirer des sommes importantes, il peut être nécessaire de fournir des documents pour vérifier votre identité."}',
             'value_pt' => '{"0":"O KYC não é obrigatório no início, mas para sacar grandes quantias pode ser necessário fornecer documentos para comprovar a identidade."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit on the platform?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo en la plataforma?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum sur la plateforme ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo na plataforma?"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from 1 mBTC."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde 1 mBTC."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 1 mBTC."}',
             'value_pt' => '{"0":"O depósito mínimo começa a partir de 1 mBTC."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"How to get cashback in the VIP program?"}',
             'value_es' => '{"0":"¿Cómo obtener cashback en el programa VIP?"}',
             'value_fr' => '{"0":"Comment obtenir le cashback dans le programme VIP ?"}',
             'value_pt' => '{"0":"Como receber cashback no programa VIP?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is automatically credited on casino bets."}',
             'value_es' => '{"0":"El cashback se acredita automáticamente en las apuestas de casino."}',
             'value_fr' => '{"0":"Le cashback est crédité automatiquement sur les mises au casino."}',
             'value_pt' => '{"0":"O cashback é creditado automaticamente nas apostas de cassino."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, on 1xBit it is allowed to activate only one promo code at a time."}',
             'value_es' => '{"0":"No, en 1xBit solo se permite activar un código promocional a la vez."}',
             'value_fr' => '{"0":"Non, sur 1xBit, il est permis d’activer un seul code promotionnel à la fois."}',
             'value_pt' => '{"0":"Não, na 1xBit só é permitido ativar um código promocional por vez."}',
             'order' => 30
            ]
        );
    }
}
