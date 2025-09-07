<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Paripesa"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Paripesa"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Paripesa"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa positions itself as an international bookmaker with a wide range of opportunities for sports betting and casino games, and mobile applications for Android and iOS are an important part of its ecosystem. Thanks to these mobile solutions, you get access to all the site’s functions without the need to open the desktop version."}',
             'value_es' => '{"0":"Paripesa se posiciona como una casa de apuestas internacional con una amplia gama de opciones para apuestas deportivas y juegos de casino, y las aplicaciones móviles para Android e iOS son una parte importante de su ecosistema. Gracias a estas soluciones móviles, tendrás acceso a todas las funciones del sitio sin necesidad de abrir la versión de escritorio."}',
             'value_fr' => '{"0":"Paripesa se positionne comme un bookmaker international offrant un large éventail de possibilités pour les paris sportifs et les jeux de casino, et les applications mobiles pour Android et iOS constituent une partie essentielle de son écosystème. Grâce à ces solutions mobiles, vous accédez à toutes les fonctionnalités du site sans avoir à ouvrir la version de bureau."}',
             'value_pt' => '{"0":"A Paripesa se posiciona como uma casa de apostas internacional com uma ampla gama de possibilidades para apostas esportivas e jogos de cassino, e os aplicativos móveis para Android e iOS são uma parte importante de seu ecossistema. Graças a essas soluções móveis, você terá acesso a todas as funções do site sem precisar abrir a versão desktop."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The apps are designed to provide fast page loading, stable performance even with a weak internet connection, and convenient navigation, which allows you to place bets anytime and anywhere. In this review, we will explain how to install them."}',
             'value_es' => '{"0":"Las aplicaciones están diseñadas para garantizar una carga rápida de las páginas, un funcionamiento estable incluso con una conexión a internet débil y una navegación sencilla, lo que permite realizar apuestas en cualquier momento y lugar. En esta reseña explicaremos cómo instalarlas."}',
             'value_fr' => '{"0":"Les applications sont conçues pour assurer un chargement rapide des pages, un fonctionnement stable même avec une connexion internet faible et une navigation pratique, ce qui permet de placer des paris à tout moment et en tout lieu. Dans cet article, nous expliquerons comment les installer."}',
             'value_pt' => '{"0":"Os aplicativos foram desenvolvidos para garantir carregamento rápido das páginas, funcionamento estável mesmo com conexão de internet fraca e navegação conveniente, permitindo fazer apostas em qualquer hora e lugar. Nesta análise, explicaremos como instalá-los."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full access to site functions",
                                 "1":"Optimized interface",
                                 "2":"Support for deposit and withdrawal methods",
                                 "3":"Push notifications",
                                 "4":"Fast performance with weak internet connection"},
                             "1":
                                {"0":"No live match streaming",
                                 "1":"Limited availability in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso completo a las funciones del sitio",
                                 "1":"Interfaz optimizada",
                                 "2":"Soporte para métodos de depósito y retiro",
                                 "3":"Notificaciones push",
                                 "4":"Funcionamiento rápido con conexión débil a internet"},
                             "1":
                                {"0":"Sin transmisión en vivo de partidos",
                                 "1":"Disponibilidad limitada en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès complet aux fonctionnalités du site",
                                 "1":"Interface optimisée",
                                 "2":"Prise en charge des méthodes de dépôt et de retrait",
                                 "3":"Notifications push",
                                 "4":"Fonctionnement rapide avec une connexion internet faible"},
                             "1":
                                {"0":"Absence de diffusion en direct des matchs",
                                 "1":"Disponibilité limitée dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso completo às funções do site",
                                 "1":"Interface otimizada",
                                 "2":"Suporte para métodos de depósito e saque",
                                 "3":"Notificações push",
                                 "4":"Funcionamento rápido com conexão de internet fraca"},
                             "1":
                                {"0":"Ausência de transmissões ao vivo dos jogos",
                                 "1":"Disponibilidade limitada em alguns países"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Paripesa app for Android can only be downloaded from the official website, as it is not available on Google Play due to the store’s policy on gambling."}',
             'value_es' => '{"0":"La aplicación de Paripesa para Android solo se puede descargar desde el sitio web oficial, ya que no está disponible en Google Play debido a la política de la tienda sobre juegos de azar."}',
             'value_fr' => '{"0":"L’application Paripesa pour Android ne peut être téléchargée que depuis le site officiel, car elle n’est pas disponible sur Google Play en raison de la politique de la boutique concernant les jeux d’argent."}',
             'value_pt' => '{"0":"O aplicativo Paripesa para Android só pode ser baixado no site oficial, pois não está disponível no Google Play devido à política da loja em relação a jogos de azar."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To install it, you need to open the Paripesa website from your mobile device, go to the mobile apps section, and download the APK file. After downloading, you must allow installation from unknown sources in your smartphone settings, then launch the file and complete the installation."}',
             'value_es' => '{"0":"Para instalarla, debe abrir el sitio web de Paripesa desde su dispositivo móvil, ir a la sección de aplicaciones móviles y descargar el archivo APK. Después de la descarga, es necesario permitir la instalación de fuentes desconocidas en la configuración del smartphone, luego iniciar el archivo y completar la instalación."}',
             'value_fr' => '{"0":"Pour l’installer, vous devez ouvrir le site de Paripesa depuis votre appareil mobile, accéder à la section des applications mobiles et télécharger le fichier APK. Après le téléchargement, il faut autoriser l’installation à partir de sources inconnues dans les paramètres du smartphone, puis lancer le fichier et terminer l’installation."}',
             'value_pt' => '{"0":"Para instalá-lo, é necessário abrir o site da Paripesa a partir do dispositivo móvel, acessar a seção de aplicativos móveis e baixar o arquivo APK. Após o download, é preciso permitir a instalação de fontes desconhecidas nas configurações do smartphone, em seguida abrir o arquivo e concluir a instalação."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The app installs quite quickly, after which the user can log in to their account or create a new one."}',
             'value_es' => '{"0":"La aplicación se instala bastante rápido y, después de eso, el usuario puede iniciar sesión en su cuenta o crear una nueva."}',
             'value_fr' => '{"0":"L’application s’installe assez rapidement, et l’utilisateur peut ensuite se connecter à son compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"O aplicativo é instalado de forma bastante rápida e, depois disso, o usuário pode entrar em sua conta ou criar uma nova."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Installing the Paripesa app on iOS is much simpler, as it is available in the App Store. Open the App Store, go to your account, and tap on your name. Then select Change Country or Region and choose Nigeria. Next, fill in the fields:"}',
             'value_es' => '{"0":"La instalación de la aplicación Paripesa en iOS es mucho más sencilla, ya que está disponible en la App Store. Abra la App Store, vaya a su cuenta y pulse sobre su nombre. Luego seleccione Cambiar país o región y elija Nigeria. A continuación, complete los campos:"}',
             'value_fr' => '{"0":"L’installation de l’application Paripesa sur iOS est beaucoup plus simple, car elle est disponible sur l’App Store. Ouvrez l’App Store, accédez à votre compte et appuyez sur votre nom. Ensuite, sélectionnez Changer de pays ou de région et choisissez le Nigeria. Remplissez ensuite les champs :"}',
             'value_pt' => '{"0":"A instalação do aplicativo Paripesa no iOS é muito mais simples, pois ele está disponível na App Store. Abra a App Store, vá até a sua conta e toque no seu nome. Em seguida, selecione Alterar país ou região e escolha Nigéria. Depois, preencha os campos:"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
                'value_en' => '{"0":"Street: No 34 Adesanya ikeja",
                                "1":"City: Ikeja",
                                "2":"Postal code: 234",
                                "3":"Phone: 2348073560000"}',
                'value_es' => '{"0":"Calle: No 34 Adesanya ikeja",
                                "1":"Ciudad: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Teléfono: 2348073560000"}',
                'value_fr' => '{"0":"Rue: No 34 Adesanya ikeja",
                                "1":"Ville: Ikeja",
                                "2":"Code postal: 234",
                                "3":"Téléphone: 2348073560000"}',
                'value_pt' => '{"0":"Rua: No 34 Adesanya ikeja",
                                "1":"Cidade: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Telefone: 2348073560000"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Then open the App Store, type Paripesa in the search bar, download the app, and install it in the standard way."}',
             'value_es' => '{"0":"A continuación, abra la App Store, escriba Paripesa en la barra de búsqueda, descargue la aplicación e instálela de la forma habitual."}',
             'value_fr' => '{"0":"Ensuite, ouvrez l’App Store, tapez Paripesa dans la barre de recherche, téléchargez l’application et installez-la de manière standard."}',
             'value_pt' => '{"0":"Em seguida, abra a App Store, digite Paripesa na barra de pesquisa, baixe o aplicativo e instale-o da forma padrão."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"After the process is completed, the app will be available on the smartphone’s home screen, and you can immediately log in to your account or register."}',
             'value_es' => '{"0":"Una vez finalizado el proceso, la aplicación estará disponible en la pantalla principal del teléfono y podrá iniciar sesión en su cuenta o registrarse de inmediato."}',
             'value_fr' => '{"0":"Une fois le processus terminé, l’application sera disponible sur l’écran d’accueil du smartphone, et vous pourrez immédiatement vous connecter à votre compte ou vous inscrire."}',
             'value_pt' => '{"0":"Após a conclusão do processo, o aplicativo estará disponível na tela inicial do smartphone, e você poderá entrar imediatamente na sua conta ou registrar-se."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa mobile apps provide the full set of features available on the desktop version of the site. Players can place bets in pre-match and live modes, use the Multi-View function to follow several events simultaneously, and view extended statistics and real-time match graphics."}',
             'value_es' => '{"0":"Las aplicaciones móviles de Paripesa ofrecen el conjunto completo de funciones disponibles en la versión de escritorio del sitio. Los jugadores pueden realizar apuestas en los modos pre-partido y en vivo, utilizar la función Multi-View para seguir varios eventos al mismo tiempo, y consultar estadísticas ampliadas y gráficos de partidos en tiempo real."}',
             'value_fr' => '{"0":"Les applications mobiles Paripesa offrent l’ensemble des fonctionnalités disponibles sur la version de bureau du site. Les joueurs peuvent placer des paris en modes pré-match et en direct, utiliser la fonction Multi-View pour suivre plusieurs événements en même temps, et consulter des statistiques détaillées ainsi que des graphiques de matchs en temps réel."}',
             'value_pt' => '{"0":"Os aplicativos móveis da Paripesa oferecem o conjunto completo de recursos disponíveis na versão desktop do site. Os jogadores podem fazer apostas nos modos pré-jogo e ao vivo, usar a função Multi-View para acompanhar vários eventos ao mesmo tempo e visualizar estatísticas detalhadas e gráficos das partidas em tempo real."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The casino in the mobile app includes thousands of slots, table games, and live dealer tables. Full integration with payment tools is also available."}',
             'value_es' => '{"0":"El casino en la aplicación móvil incluye miles de tragamonedas, juegos de mesa y mesas con crupieres en vivo. También está disponible la integración completa con herramientas de pago."}',
             'value_fr' => '{"0":"Le casino dans l’application mobile comprend des milliers de machines à sous, de jeux de table et de tables avec croupiers en direct. Une intégration complète avec les outils de paiement est également disponible."}',
             'value_pt' => '{"0":"O cassino no aplicativo móvel inclui milhares de slots, jogos de mesa e mesas com dealers ao vivo. Também está disponível a integração completa com ferramentas de pagamento."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The app also offers profile settings, responsible gaming tools, two-factor authentication, as well as the ability to receive bonuses and participate in promotions."}',
             'value_es' => '{"0":"La aplicación incluye configuraciones de perfil, herramientas de juego responsable, autenticación de dos factores, así como la posibilidad de recibir bonos y participar en promociones."}',
             'value_fr' => '{"0":"L’application propose également des paramètres de profil, des outils de jeu responsable, une authentification à deux facteurs, ainsi que la possibilité de recevoir des bonus et de participer à des promotions."}',
             'value_pt' => '{"0":"O aplicativo conta ainda com configurações de perfil, ferramentas de jogo responsável, autenticação em dois fatores e a possibilidade de receber bônus e participar de promoções."}',
             'order' => 19
            ]
        );
    }
}
