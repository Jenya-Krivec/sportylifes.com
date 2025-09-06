<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Mostbet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Mostbet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Mostbet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet bookmaker has been operating in the online betting market for many years and has established itself as a reliable platform for sports betting and casino games. Considering the modern trend of mobile device usage, the company has offered users its own mobile applications for Android and iOS, which provide full access to all platform features without the need to use the desktop version of the site."}',
             'value_es' => '{"0":"La casa de apuestas Mostbet ha estado operando en el mercado de apuestas en línea durante muchos años y se ha consolidado como una plataforma confiable para apuestas deportivas y juegos de casino. Teniendo en cuenta la tendencia actual del uso de dispositivos móviles, la empresa ha ofrecido a los usuarios sus propias aplicaciones móviles para Android e iOS, que permiten acceder a todas las funciones de la plataforma sin necesidad de utilizar la versión de escritorio del sitio."}',
             'value_fr' => '{"0":"Le bookmaker Mostbet opère sur le marché des paris en ligne depuis de nombreuses années et s\'est imposé comme une plateforme fiable pour les paris sportifs et les jeux de casino. Compte tenu de la tendance actuelle à l\'utilisation des appareils mobiles, la société a proposé aux utilisateurs ses propres applications mobiles pour Android et iOS, permettant un accès complet à toutes les fonctionnalités de la plateforme sans avoir besoin d\'utiliser la version de bureau du site."}',
             'value_pt' => '{"0":"A casa de apostas Mostbet opera no mercado de apostas online há muitos anos e consolidou-se como uma plataforma confiável para apostas desportivas e jogos de cassino. Considerando a tendência atual de uso de dispositivos móveis, a empresa ofereceu aos usuários seus próprios aplicativos móveis para Android e iOS, que fornecem acesso completo a todos os recursos da plataforma sem a necessidade de utilizar a versão para desktop do site."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet mobile apps feature an intuitive interface that allows users to quickly navigate a wide range of sports markets, track changes in odds, place live and pre-match bets, and participate in bonus programs and promotions. Thanks to optimization for mobile devices, the apps run smoothly even on older smartphones."}',
             'value_es' => '{"0":"Las aplicaciones móviles de Mostbet cuentan con una interfaz intuitiva que permite a los usuarios navegar rápidamente por una amplia gama de mercados deportivos, seguir los cambios en las cuotas, realizar apuestas en vivo y pre-partido, y participar en programas de bonos y promociones. Gracias a la optimización para dispositivos móviles, las aplicaciones funcionan de manera fluida incluso en teléfonos inteligentes antiguos."}',
             'value_fr' => '{"0":"Les applications mobiles de Mostbet offrent une interface intuitive qui permet aux utilisateurs de naviguer rapidement dans une large gamme de marchés sportifs, de suivre les variations des cotes, de placer des paris en direct et pré-match, et de participer aux programmes de bonus et promotions. Grâce à l\'optimisation pour les appareils mobiles, les applications fonctionnent de manière fluide même sur les smartphones plus anciens."}',
             'value_pt' => '{"0":"Os aplicativos móveis da Mostbet possuem uma interface intuitiva que permite aos usuários navegar rapidamente por uma ampla variedade de mercados esportivos, acompanhar as mudanças nas odds, fazer apostas ao vivo e pré-jogo, e participar de programas de bônus e promoções. Graças à otimização para dispositivos móveis, os aplicativos funcionam de forma estável mesmo em smartphones mais antigos."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Fast and stable performance",
                                 "1":"Wide range of bets",
                                 "2":"Various bonuses and promotions",
                                 "3":"User-friendly interface",
                                 "4":"Security and reliability"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                 "1":"Possible restrictions in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionamiento rápido y estable",
                                 "1":"Amplia variedad de apuestas",
                                 "2":"Diversos bonos y promociones",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Seguridad y fiabilidad"},
                             "1":
                                {"0":"Aplicación para Android no disponible en Google Play",
                                 "1":"Posibles restricciones en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnement rapide et stable",
                                 "1":"Large choix de paris",
                                 "2":"Divers bonus et promotions",
                                 "3":"Interface conviviale",
                                 "4":"Sécurité et fiabilité"},
                             "1":
                                {"0":"Application Android non disponible sur Google Play",
                                 "1":"Restrictions possibles dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Desempenho rápido e estável",
                                 "1":"Ampla variedade de apostas",
                                 "2":"Diversos bônus e promoções",
                                 "3":"Interface amigável",
                                 "4":"Segurança e confiabilidade"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Google Play",
                                 "1":"Possíveis restrições em algumas regiões"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For Android users, it is necessary to visit the official website of the bookmaker and download the APK file. After downloading, you need to allow the installation of apps from unknown sources in your smartphone settings."}',
             'value_es' => '{"0":"Para los usuarios de Android, es necesario visitar el sitio web oficial de la casa de apuestas y descargar el archivo APK. Después de la descarga, debe permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración del teléfono."}',
             'value_fr' => '{"0":"Pour les utilisateurs Android, il est nécessaire de se rendre sur le site officiel du bookmaker et de télécharger le fichier APK. Après le téléchargement, il faut autoriser l’installation d’applications provenant de sources inconnues dans les paramètres du smartphone."}',
             'value_pt' => '{"0":"Para usuários de Android, é necessário visitar o site oficial da casa de apostas e baixar o arquivo APK. Após o download, é preciso permitir a instalação de aplicativos de fontes desconhecidas nas configurações do smartphone."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Once installed, the user gains full access to all sections of the platform, including sports betting, casino, and live games. The app is optimized for different screen sizes, ensuring a comfortable experience on both smartphones and tablets."}',
             'value_es' => '{"0":"Una vez instalado, el usuario obtiene acceso completo a todas las secciones de la plataforma, incluyendo apuestas deportivas, casino y juegos en vivo. La aplicación está optimizada para diferentes tamaños de pantalla, garantizando una experiencia cómoda tanto en teléfonos inteligentes como en tabletas."}',
             'value_fr' => '{"0":"Une fois installé, l’utilisateur obtient un accès complet à toutes les sections de la plateforme, y compris les paris sportifs, le casino et les jeux en direct. L’application est optimisée pour différentes tailles d’écran, assurant une expérience confortable sur les smartphones et les tablettes."}',
             'value_pt' => '{"0":"Após a instalação, o usuário tem acesso completo a todas as seções da plataforma, incluindo apostas esportivas, cassino e jogos ao vivo. O aplicativo é otimizado para diferentes tamanhos de tela, garantindo uma experiência confortável em smartphones e tablets."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For iOS device owners, installing Mostbet is done through the App Store. You need to open the app store, search for the Mostbet app, and tap «Get»."}',
             'value_es' => '{"0":"Para los propietarios de dispositivos iOS, la instalación de Mostbet se realiza a través de la App Store. Debe abrir la tienda de aplicaciones, buscar la aplicación Mostbet y tocar «Obtener»."}',
             'value_fr' => '{"0":"Pour les propriétaires d’appareils iOS, l’installation de Mostbet se fait via l’App Store. Il faut ouvrir la boutique d’applications, rechercher l’application Mostbet et appuyer sur « Obtenir »."}',
             'value_pt' => '{"0":"Para os proprietários de dispositivos iOS, a instalação do Mostbet é feita através da App Store. É necessário abrir a loja de aplicativos, procurar o aplicativo Mostbet e tocar em «Obter»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"After downloading and installing, the user can immediately log into their account and access all platform features. The iOS app interface is adapted for all iPhone and iPad versions, ensuring convenient navigation and stable performance even on older devices."}',
             'value_es' => '{"0":"Después de descargar e instalar, el usuario puede iniciar sesión inmediatamente en su cuenta y acceder a todas las funciones de la plataforma. La interfaz de la aplicación para iOS está adaptada para todas las versiones de iPhone y iPad, lo que garantiza una navegación cómoda y un rendimiento estable incluso en dispositivos antiguos."}',
             'value_fr' => '{"0":"Après le téléchargement et l’installation, l’utilisateur peut se connecter immédiatement à son compte et accéder à toutes les fonctionnalités de la plateforme. L’interface de l’application iOS est adaptée à toutes les versions d’iPhone et d’iPad, offrant une navigation pratique et une performance stable même sur les anciens appareils."}',
             'value_pt' => '{"0":"Após o download e a instalação, o usuário pode fazer login imediatamente em sua conta e acessar todos os recursos da plataforma. A interface do aplicativo iOS é adaptada para todas as versões de iPhone e iPad, garantindo navegação conveniente e desempenho estável mesmo em dispositivos mais antigos."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet mobile app provides users with the full set of features available on the desktop version of the platform. Key functionalities include sports betting, casino games, live betting, bonuses and promotions, account management, and push notifications."}',
             'value_es' => '{"0":"La aplicación móvil de Mostbet ofrece a los usuarios el conjunto completo de funciones disponibles en la versión de escritorio de la plataforma. Las funcionalidades principales incluyen apuestas deportivas, juegos de casino, apuestas en vivo, bonos y promociones, gestión de cuenta y notificaciones push."}',
             'value_fr' => '{"0":"L’application mobile Mostbet offre aux utilisateurs l’ensemble complet des fonctionnalités disponibles sur la version bureau de la plateforme. Les fonctionnalités principales incluent les paris sportifs, les jeux de casino, les paris en direct, les bonus et promotions, la gestion de compte et les notifications push."}',
             'value_pt' => '{"0":"O aplicativo móvel da Mostbet fornece aos usuários o conjunto completo de recursos disponíveis na versão desktop da plataforma. As funcionalidades principais incluem apostas esportivas, jogos de cassino, apostas ao vivo, bônus e promoções, gerenciamento de conta e notificações push."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting covers dozens of disciplines with a variety of markets and bet types. Live betting allows users to place bets in real time during event broadcasts. The casino section includes slots, roulette, poker, and other popular games."}',
             'value_es' => '{"0":"Las apuestas deportivas abarcan decenas de disciplinas con una variedad de mercados y tipos de apuestas. Las apuestas en vivo permiten a los usuarios realizar apuestas en tiempo real durante las transmisiones de eventos. La sección de casino incluye tragamonedas, ruleta, póker y otros juegos populares."}',
             'value_fr' => '{"0":"Les paris sportifs couvrent des dizaines de disciplines avec une variété de marchés et de types de paris. Les paris en direct permettent aux utilisateurs de placer des paris en temps réel lors des diffusions d’événements. La section casino comprend des machines à sous, la roulette, le poker et d’autres jeux populaires."}',
             'value_pt' => '{"0":"As apostas esportivas abrangem dezenas de disciplinas com uma variedade de mercados e tipos de apostas. As apostas ao vivo permitem que os usuários façam apostas em tempo real durante as transmissões de eventos. A seção de cassino inclui slots, roleta, pôquer e outros jogos populares."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The app offers quick access to bet history, account deposits, and withdrawals. In addition, users can receive notifications about bet results, new promotions, and changes in event schedules, allowing them not to miss important moments and make the most of the platform."}',
             'value_es' => '{"0":"La aplicación ofrece acceso rápido al historial de apuestas, depósitos y retiros de cuenta. Además, los usuarios pueden recibir notificaciones sobre resultados de apuestas, nuevas promociones y cambios en los horarios de los eventos, lo que les permite no perder momentos importantes y aprovechar al máximo la plataforma."}',
             'value_fr' => '{"0":"L’application offre un accès rapide à l’historique des paris, aux dépôts et aux retraits de compte. De plus, les utilisateurs peuvent recevoir des notifications sur les résultats des paris, les nouvelles promotions et les changements dans les horaires des événements, leur permettant de ne pas manquer les moments importants et de profiter pleinement de la plateforme."}',
             'value_pt' => '{"0":"O aplicativo oferece acesso rápido ao histórico de apostas, depósitos e saques de conta. Além disso, os usuários podem receber notificações sobre os resultados das apostas, novas promoções e alterações nos horários dos eventos, permitindo que não percam momentos importantes e aproveitem ao máximo a plataforma."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet pays special attention to convenience and security, making its mobile apps a key tool for users who want fast and reliable access to betting and gambling at any time and anywhere."}',
             'value_es' => '{"0":"Mostbet presta especial atención a la comodidad y la seguridad, convirtiendo sus aplicaciones móviles en una herramienta clave para los usuarios que desean un acceso rápido y confiable a las apuestas y juegos de azar en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Mostbet accorde une attention particulière à la commodité et à la sécurité, faisant de ses applications mobiles un outil clé pour les utilisateurs souhaitant un accès rapide et fiable aux paris et aux jeux d’argent à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"A Mostbet dedica atenção especial à conveniência e à segurança, tornando seus aplicativos móveis uma ferramenta essencial para usuários que desejam acesso rápido e confiável às apostas e jogos de azar a qualquer hora e em qualquer lugar."}',
             'order' => 17
            ]
        );
    }
}
