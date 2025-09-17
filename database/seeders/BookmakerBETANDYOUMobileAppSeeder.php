<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Revue de l\'application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da BETANDYOU"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international bookmaker that offers users not only a sports betting line and a casino section but also modern mobile applications for Android and iOS."}',
             'value_es' => '{"0":"BETANDYOU es una casa de apuestas internacional que ofrece a los usuarios no solo una línea de apuestas deportivas y una sección de casino, sino también aplicaciones móviles modernas para Android e iOS."}',
             'value_fr' => '{"0":"BETANDYOU est un bookmaker international qui offre aux utilisateurs non seulement une ligne de paris sportifs et une section casino, mais également des applications mobiles modernes pour Android et iOS."}',
             'value_pt' => '{"0":"BETANDYOU é uma casa de apostas internacional que oferece aos usuários não apenas uma linha de apostas esportivas e uma seção de cassino, mas também aplicativos móveis modernos para Android e iOS."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Mobile betting is becoming increasingly popular, which is why the company has developed apps that allow users to place bets, watch live streams, and manage their gaming account anywhere and anytime. The apps are tailored to user needs, feature a convenient interface, and work reliably even with low internet speeds."}',
             'value_es' => '{"0":"Las apuestas móviles se están volviendo cada vez más populares, por lo que la compañía ha desarrollado aplicaciones que permiten a los usuarios realizar apuestas, ver transmisiones en vivo y gestionar su cuenta de juego en cualquier lugar y en cualquier momento. Las aplicaciones están adaptadas a las necesidades de los usuarios, cuentan con una interfaz cómoda y funcionan de manera estable incluso con velocidades de internet bajas."}',
             'value_fr' => '{"0":"Les paris mobiles deviennent de plus en plus populaires, c’est pourquoi la société a développé des applications permettant aux utilisateurs de placer des paris, de regarder des flux en direct et de gérer leur compte de jeu où qu’ils soient et à tout moment. Les applications sont adaptées aux besoins des utilisateurs, disposent d’une interface conviviale et fonctionnent de manière stable même avec une connexion internet faible."}',
             'value_pt' => '{"0":"As apostas móveis estão se tornando cada vez mais populares, por isso a empresa desenvolveu aplicativos que permitem aos usuários fazer apostas, assistir a transmissões ao vivo e gerenciar sua conta de jogo em qualquer lugar e a qualquer momento. Os aplicativos são adaptados às necessidades dos usuários, possuem uma interface conveniente e funcionam de forma estável mesmo com velocidades de internet baixas."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Stable performance and fast page loading",
                                 "1":"Convenient navigation",
                                 "2":"Full access to all betting markets, including live",
                                 "3":"High-quality live match streaming",
                                 "4":"Support for payment methods"},
                             "1":
                                {"0":"For Android, it is necessary to download the APK file from the official website",
                                 "1":"For iOS, TestFlight must be used"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionamiento estable y carga rápida de páginas",
                                 "1":"Navegación cómoda",
                                 "2":"Acceso completo a todos los mercados de apuestas, incluyendo en vivo",
                                 "3":"Transmisiones en vivo de alta calidad",
                                 "4":"Soporte para métodos de pago"},
                             "1":
                                {"0":"Para Android, es necesario descargar el archivo APK desde el sitio oficial",
                                 "1":"Para iOS, se debe usar TestFlight"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnement stable et chargement rapide des pages",
                                 "1":"Navigation pratique",
                                 "2":"Accès complet à tous les marchés de paris, y compris en direct",
                                 "3":"Diffusions en direct des matchs de haute qualité",
                                 "4":"Support des méthodes de paiement"},
                             "1":
                                {"0":"Pour Android, il est nécessaire de télécharger le fichier APK depuis le site officiel",
                                 "1":"Pour iOS, il faut utiliser TestFlight"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Desempenho estável e carregamento rápido das páginas",
                                 "1":"Navegação conveniente",
                                 "2":"Acesso completo a todos os mercados de apostas, incluindo ao vivo",
                                 "3":"Transmissão ao vivo de alta qualidade",
                                 "4":"Suporte para métodos de pagamento"},
                             "1":
                                {"0":"Para Android, é necessário baixar o arquivo APK do site oficial",
                                 "1":"Para iOS, é necessário usar o TestFlight"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To install the BETANDYOU app on Android, you need to visit the official website from your smartphone, open the mobile apps section, and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación BETANDYOU en Android, debes visitar el sitio web oficial desde tu smartphone, abrir la sección de aplicaciones móviles y descargar el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application BETANDYOU sur Android, vous devez visiter le site officiel depuis votre smartphone, ouvrir la section des applications mobiles et télécharger le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo BETANDYOU no Android, você precisa acessar o site oficial pelo smartphone, abrir a seção de aplicativos móveis e baixar o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"After that, you must allow the installation of apps from unknown sources in your phone settings, open the downloaded file, and confirm the installation. The app will automatically install and appear on your smartphone’s home screen. Then, you can log in to your account or register a new one."}',
             'value_es' => '{"0":"Después, debes permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración del teléfono, abrir el archivo descargado y confirmar la instalación. La aplicación se instalará automáticamente y aparecerá en la pantalla de inicio del smartphone. Luego, podrás iniciar sesión en tu cuenta o registrarte."}',
             'value_fr' => '{"0":"Ensuite, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre téléphone, ouvrir le fichier téléchargé et confirmer l’installation. L’application s’installera automatiquement et apparaîtra sur l’écran d’accueil du smartphone. Vous pourrez alors vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Em seguida, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone, abrir o arquivo baixado e confirmar a instalação. O aplicativo será instalado automaticamente e aparecerá na tela inicial do smartphone. Depois disso, você poderá entrar na sua conta ou registrar uma nova."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"For iPhone users, the process is even simpler. Go to the TestFlight website and click «View in App Store» to be redirected to the App Store."}',
                'value_es' => '{"0":"Para los usuarios de iPhone, el proceso es aún más sencillo. Accede al sitio web de TestFlight y haz clic en «Ver en App Store» para ser redirigido a la App Store."}',
                'value_fr' => '{"0":"Pour les utilisateurs d’iPhone, le processus est encore plus simple. Rendez-vous sur le site TestFlight et cliquez sur « Voir dans l’App Store » pour être redirigé vers l’App Store."}',
                'value_pt' => '{"0":"Para os usuários de iPhone, o processo é ainda mais simples. Acesse o site do TestFlight e clique em «Ver na App Store» para ser redirecionado à App Store."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Download the TestFlight app from the App Store, wait for the installation to finish, and open TestFlight. Click the «Continue» button. Allow or deny TestFlight notifications."}',
                'value_es' => '{"0":"Descarga la aplicación TestFlight desde la App Store, espera a que finalice la instalación y abre TestFlight. Pulsa el botón «Continuar». Permite o rechaza las notificaciones de TestFlight."}',
                'value_fr' => '{"0":"Téléchargez l’application TestFlight depuis l’App Store, attendez la fin de l’installation et ouvrez TestFlight. Cliquez sur le bouton « Continuer ». Autorisez ou refusez les notifications de TestFlight."}',
                'value_pt' => '{"0":"Baixe o aplicativo TestFlight na App Store, aguarde a conclusão da instalação e abra o TestFlight. Toque no botão «Continuar». Permita ou recuse as notificações do TestFlight."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"In the window that opens, install the BETANDYOU app. Wait until the installation of the BETANDYOU app is complete and then open it. In the new window, click «Next» and agree to receive notifications. Press «Start Testing» to launch BETANDYOU. Now you can place bets, enjoy games, and win big!"}',
                'value_es' => '{"0":"En la ventana que se abre, instala la aplicación BETANDYOU. Espera a que finalice la instalación de la aplicación BETANDYOU y luego ábrela. En la nueva ventana, pulsa «Siguiente» y acepta recibir notificaciones. Haz clic en «Comenzar a probar» para iniciar BETANDYOU. ¡Ahora puedes apostar, disfrutar de los juegos y obtener grandes ganancias!"}',
                'value_fr' => '{"0":"Dans la fenêtre qui s’ouvre, installez l’application BETANDYOU. Attendez la fin de l’installation de l’application BETANDYOU puis ouvrez-la. Dans la nouvelle fenêtre, cliquez sur « Suivant » et acceptez de recevoir des notifications. Appuyez sur « Commencer les tests » pour lancer BETANDYOU. Vous pouvez désormais parier, profiter des jeux et remporter de gros gains !"}',
                'value_pt' => '{"0":"Na janela que se abre, instale o aplicativo BETANDYOU. Aguarde a conclusão da instalação do aplicativo BETANDYOU e depois abra-o. Na nova janela, clique em «Avançar» e aceite receber notificações. Toque em «Iniciar Teste» para abrir o BETANDYOU. Agora você pode fazer apostas, aproveitar os jogos e ganhar muito!"}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU mobile apps provide users with full functionality for sports betting and casino games. You can place pre-match and live bets, watch live match streams, track real-time odds changes, and quickly add events to your bet slip. The casino section offers thousands of slots, table games, live games with real dealers, as well as TV games, keno, and bingo."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BETANDYOU ofrecen a los usuarios toda la funcionalidad para apuestas deportivas y juegos de casino. Se pueden realizar apuestas pre-partido y en vivo, ver transmisiones en directo, seguir los cambios de cuotas en tiempo real y añadir eventos rápidamente al cupón de apuestas. La sección de casino ofrece miles de tragamonedas, juegos de mesa, juegos en vivo con crupieres reales, así como juegos de TV, keno y bingo."}',
             'value_fr' => '{"0":"Les applications mobiles BETANDYOU offrent aux utilisateurs toutes les fonctionnalités pour les paris sportifs et les jeux de casino. Il est possible de placer des paris pré-match et en direct, de regarder des flux en direct, de suivre les variations des cotes en temps réel et d’ajouter rapidement des événements au ticket de pari. La section casino propose des milliers de machines à sous, des jeux de table, des jeux en direct avec de vrais croupiers, ainsi que des jeux TV, le keno et le bingo."}',
             'value_pt' => '{"0":"Os aplicativos móveis BETANDYOU oferecem aos usuários funcionalidade completa para apostas esportivas e jogos de cassino. É possível fazer apostas pré-jogo e ao vivo, assistir a transmissões de partidas em tempo real, acompanhar mudanças nas odds e adicionar eventos rapidamente ao cupom de apostas. A seção de cassino oferece milhares de slots, jogos de mesa, jogos ao vivo com dealers reais, além de jogos de TV, keno e bingo."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The app allows account deposits and withdrawals through dozens of payment methods, as well as receiving bonuses and participating in promotions. The interface is intuitive, and profile settings make it easy to adjust preferences and receive notifications about important events."}',
             'value_es' => '{"0":"La aplicación permite realizar depósitos y retiros mediante decenas de métodos de pago, así como recibir bonos y participar en promociones. La interfaz es intuitiva y la configuración del perfil permite ajustar preferencias rápidamente y recibir notificaciones sobre eventos importantes."}',
             'value_fr' => '{"0":"L’application permet de déposer et de retirer de l’argent via des dizaines de méthodes de paiement, ainsi que de recevoir des bonus et de participer aux promotions. L’interface est intuitive et les paramètres du profil permettent de modifier rapidement les préférences et de recevoir des notifications sur les événements importants."}',
             'value_pt' => '{"0":"O aplicativo permite depósitos e saques por meio de dezenas de métodos de pagamento, assim como receber bônus e participar de promoções. A interface é intuitiva e as configurações do perfil permitem ajustar preferências rapidamente e receber notificações sobre eventos importantes."}',
             'order' => 16
            ]
        );
    }
}
