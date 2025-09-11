<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de MegaPari"}',
                'value_fr' => '{"0":"Revue de l\'application mobile MegaPari"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da MegaPari"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The mobile applications of the MegaPari bookmaker are designed for users who prefer to place bets and play in the casino without being tied to a computer. The platform has ensured that the functionality of the apps fully matches the desktop version of the website, providing complete access to the sports betting line, casino games, financial transactions, and personal settings."}',
             'value_es' => '{"0":"Las aplicaciones móviles de la casa de apuestas MegaPari están diseñadas para aquellos usuarios que prefieren realizar apuestas y jugar en el casino sin necesidad de estar vinculados a un ordenador. La plataforma se ha asegurado de que la funcionalidad de las aplicaciones coincida al máximo con la versión de escritorio del sitio web, ofreciendo acceso completo a la línea de eventos deportivos, juegos de casino, transacciones financieras y configuraciones personales."}',
             'value_fr' => '{"0":"Les applications mobiles du bookmaker MegaPari ont été créées pour les utilisateurs qui préfèrent parier et jouer au casino sans être attachés à un ordinateur. La plateforme a veillé à ce que les fonctionnalités des applications correspondent pleinement à la version de bureau du site, offrant un accès complet à la ligne d’événements sportifs, aux jeux de casino, aux transactions financières et aux paramètres personnels."}',
             'value_pt' => '{"0":"Os aplicativos móveis da casa de apostas MegaPari foram desenvolvidos para aqueles usuários que preferem fazer apostas e jogar no cassino sem depender de um computador. A plataforma cuidou para que a funcionalidade dos aplicativos correspondesse ao máximo à versão desktop do site, oferecendo acesso completo à linha de eventos esportivos, jogos de cassino, transações financeiras e configurações pessoais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the optimized interface, fast page loading, and stable performance even with an average internet connection, the MegaPari apps have become a convenient tool for users worldwide. In this review, we will explain how to install the mobile applications for smartphones with Android and iOS."}',
             'value_es' => '{"0":"Gracias a una interfaz optimizada, una carga rápida de las páginas y un rendimiento estable incluso con una conexión a internet promedio, las aplicaciones de MegaPari se han convertido en una herramienta práctica para los usuarios de todo el mundo. En esta reseña explicaremos cómo se realiza la instalación de las aplicaciones móviles en smartphones con Android e iOS."}',
             'value_fr' => '{"0":"Grâce à une interface optimisée, un chargement rapide des pages et une performance stable même avec une connexion internet moyenne, les applications MegaPari sont devenues un outil pratique pour les utilisateurs du monde entier. Dans cet article, nous expliquerons comment installer les applications mobiles sur les smartphones Android et iOS."}',
             'value_pt' => '{"0":"Graças a uma interface otimizada, ao rápido carregamento das páginas e ao desempenho estável mesmo com uma conexão de internet mediana, os aplicativos da MegaPari tornaram-se uma ferramenta prática para usuários em todo o mundo. Nesta análise, explicaremos como ocorre a instalação dos aplicativos móveis para smartphones Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full website functionality",
                                 "1":"User-friendly interface",
                                 "2":"Ability to deposit funds",
                                 "3":"Ability to withdraw funds",
                                 "4":"Push notifications"},
                             "1":
                                {"0":"Android app available only from the official website",
                                 "1":"No App Store access in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio web",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Posibilidad de depositar fondos",
                                 "3":"Posibilidad de retirar fondos",
                                 "4":"Notificaciones push"},
                             "1":
                                {"0":"La aplicación de Android solo se descarga desde el sitio web oficial",
                                 "1":"Falta de acceso a App Store en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète du site",
                                 "1":"Interface conviviale",
                                 "2":"Possibilité de déposer des fonds",
                                 "3":"Possibilité de retirer des fonds",
                                 "4":"Notifications push"},
                             "1":
                                {"0":"L’application Android se télécharge uniquement depuis le site officiel",
                                 "1":"Absence d’accès à l’App Store dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site",
                                 "1":"Interface intuitiva",
                                 "2":"Possibilidade de depositar fundos",
                                 "3":"Possibilidade de sacar fundos",
                                 "4":"Notificações push"},
                             "1":
                                {"0":"O aplicativo Android só pode ser baixado no site oficial",
                                 "1":"Falta de acesso à App Store em algumas regiões"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To install the MegaPari app on Android, you need to visit the official website of the bookmaker and open the application download section, which can be found at the bottom of the homepage."}',
             'value_es' => '{"0":"Para instalar la aplicación de MegaPari en Android, es necesario ingresar al sitio web oficial de la casa de apuestas y abrir la sección de descarga de aplicaciones, cuyo enlace se encuentra en la parte inferior de la página principal."}',
             'value_fr' => '{"0":"Pour installer l’application MegaPari sur Android, il faut se rendre sur le site officiel du bookmaker et ouvrir la section de téléchargement des applications, dont le lien se trouve en bas de la page d’accueil."}',
             'value_pt' => '{"0":"Para instalar o aplicativo MegaPari no Android, é necessário acessar o site oficial da casa de apostas e abrir a seção de download dos aplicativos, cujo link está localizado no final da página inicial."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Next, you need to download the apk file. After downloading, you must allow the installation of apps from unknown sources in your smartphone settings, and then start the installation. Within a few minutes, the app will be ready to use with full functionality."}',
             'value_es' => '{"0":"A continuación, debes descargar el archivo apk. Una vez descargado, es necesario permitir la instalación de aplicaciones de orígenes desconocidos en la configuración del smartphone y luego iniciar la instalación. En pocos minutos, la aplicación estará lista para usarse con todas sus funcionalidades."}',
             'value_fr' => '{"0":"Ensuite, il est nécessaire de télécharger le fichier apk. Après le téléchargement, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre smartphone, puis lancer l’installation. En quelques minutes, l’application sera prête à être utilisée avec toutes ses fonctionnalités."}',
             'value_pt' => '{"0":"Em seguida, é preciso baixar o arquivo apk. Após o download, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do smartphone e então iniciar a instalação. Em poucos minutos, o aplicativo estará pronto para ser utilizado com todas as suas funcionalidades."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For iPhone users, the process is even simpler. Go to the TestFlight website and click «View in App Store» to be redirected to the App Store."}',
             'value_es' => '{"0":"Para los usuarios de iPhone, el proceso es aún más sencillo. Accede al sitio web de TestFlight y haz clic en «Ver en App Store» para ser redirigido a la App Store."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’iPhone, le processus est encore plus simple. Rendez-vous sur le site TestFlight et cliquez sur « Voir dans l’App Store » pour être redirigé vers l’App Store."}',
             'value_pt' => '{"0":"Para os usuários de iPhone, o processo é ainda mais simples. Acesse o site do TestFlight e clique em «Ver na App Store» para ser redirecionado à App Store."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Download the TestFlight app from the App Store, wait for the installation to finish, and open TestFlight. Click the «Continue» button. Allow or deny TestFlight notifications."}',
             'value_es' => '{"0":"Descarga la aplicación TestFlight desde la App Store, espera a que finalice la instalación y abre TestFlight. Pulsa el botón «Continuar». Permite o rechaza las notificaciones de TestFlight."}',
             'value_fr' => '{"0":"Téléchargez l’application TestFlight depuis l’App Store, attendez la fin de l’installation et ouvrez TestFlight. Cliquez sur le bouton « Continuer ». Autorisez ou refusez les notifications de TestFlight."}',
             'value_pt' => '{"0":"Baixe o aplicativo TestFlight na App Store, aguarde a conclusão da instalação e abra o TestFlight. Toque no botão «Continuar». Permita ou recuse as notificações do TestFlight."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the window that opens, install the Megapari app. Wait until the installation of the Megapari app is complete and then open it. In the new window, click «Next» and agree to receive notifications. Press «Start Testing» to launch Megapari. Now you can place bets, enjoy games, and win big!"}',
             'value_es' => '{"0":"En la ventana que se abre, instala la aplicación Megapari. Espera a que finalice la instalación de la aplicación Megapari y luego ábrela. En la nueva ventana, pulsa «Siguiente» y acepta recibir notificaciones. Haz clic en «Comenzar a probar» para iniciar Megapari. ¡Ahora puedes apostar, disfrutar de los juegos y obtener grandes ganancias!"}',
             'value_fr' => '{"0":"Dans la fenêtre qui s’ouvre, installez l’application Megapari. Attendez la fin de l’installation de l’application Megapari puis ouvrez-la. Dans la nouvelle fenêtre, cliquez sur « Suivant » et acceptez de recevoir des notifications. Appuyez sur « Commencer les tests » pour lancer Megapari. Vous pouvez désormais parier, profiter des jeux et remporter de gros gains !"}',
             'value_pt' => '{"0":"Na janela que se abre, instale o aplicativo Megapari. Aguarde a conclusão da instalação do aplicativo Megapari e depois abra-o. Na nova janela, clique em «Avançar» e aceite receber notificações. Toque em «Iniciar Teste» para abrir o Megapari. Agora você pode fazer apostas, aproveitar os jogos e ganhar muito!"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The MegaPari mobile apps provide a complete set of tools for betting and gaming. Users get access to all sports events in both pre-match and live modes, and they can place single bets or combined accumulators. For casino enthusiasts, there are thousands of slots, table games, a live casino with real dealers, and quick access to popular new releases."}',
             'value_es' => '{"0":"Las aplicaciones móviles de MegaPari ofrecen un conjunto completo de herramientas para apuestas y juegos. Los usuarios tienen acceso a todos los eventos deportivos en modos pre-partido y en vivo, pudiendo realizar apuestas simples o combinadas. Para los aficionados al casino, se incluyen miles de tragamonedas, juegos de mesa, casino en vivo con crupieres reales y acceso rápido a las novedades más populares."}',
             'value_fr' => '{"0":"Les applications mobiles MegaPari offrent un ensemble complet d’outils pour les paris et les jeux. Les utilisateurs ont accès à tous les événements sportifs en pré-match et en direct, avec la possibilité de placer des paris simples ou des paris combinés. Pour les amateurs de casino, des milliers de machines à sous, de jeux de table, un casino en direct avec de vrais croupiers et un accès rapide aux nouveautés les plus populaires sont disponibles."}',
             'value_pt' => '{"0":"Os aplicativos móveis da MegaPari oferecem um conjunto completo de ferramentas para apostas e jogos. Os usuários têm acesso a todos os eventos esportivos em modos pré-jogo e ao vivo, podendo realizar apostas simples ou múltiplas combinadas. Para os fãs de cassino, estão disponíveis milhares de slots, jogos de mesa, cassino ao vivo com crupiês reais e acesso rápido às novidades mais populares."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The app offers a simple system for depositing and withdrawing funds, supporting bank cards, e-wallets, and cryptocurrencies. Users can also follow statistics, receive up-to-date odds in real time, and take part in promotions and bonus programs. The app also supports push notifications, ensuring you are always informed about your betting results and new offers from MegaPari."}',
             'value_es' => '{"0":"La aplicación cuenta con un sistema sencillo para depósitos y retiros, compatible con tarjetas bancarias, monederos electrónicos y criptomonedas. Los usuarios también pueden seguir estadísticas, recibir cuotas actualizadas en tiempo real y participar en promociones y programas de bonificación. Además, la aplicación admite notificaciones push, lo que garantiza que siempre estés informado sobre los resultados de tus apuestas y las nuevas ofertas de MegaPari."}',
             'value_fr' => '{"0":"L’application propose un système simple pour déposer et retirer de l’argent, avec la prise en charge des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies. Les utilisateurs peuvent également suivre les statistiques, recevoir des cotes actualisées en temps réel et participer aux promotions et programmes de bonus. L’application prend également en charge les notifications push, vous tenant ainsi informé en permanence des résultats de vos paris et des nouvelles offres de MegaPari."}',
             'value_pt' => '{"0":"O aplicativo conta com um sistema simples para depósitos e saques, com suporte a cartões bancários, carteiras eletrônicas e criptomoedas. Os usuários também podem acompanhar estatísticas, receber odds atualizadas em tempo real e participar de promoções e programas de bônus. O aplicativo também oferece suporte a notificações push, garantindo que você esteja sempre informado sobre os resultados de suas apostas e as novas ofertas da MegaPari."}',
             'order' => 16
            ]
        );
    }
}
