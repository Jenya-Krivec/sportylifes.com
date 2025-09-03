<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Betwinner Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Betwinner"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Betwinner"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Betwinner"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner mobile apps are a complete and convenient way to access the bookmaker’s platform directly from your smartphone. The interface is optimized for mobile devices and works faster and more smoothly than the mobile website. Users can place bets, follow sports events, launch the casino, and manage their accounts with ease and security."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BetWinner son una forma completa y práctica de acceder a la plataforma de apuestas directamente desde su smartphone. La interfaz está adaptada a los dispositivos móviles y funciona más rápido y de manera más fluida que la versión web móvil. Los usuarios pueden realizar apuestas, seguir eventos deportivos, acceder al casino y gestionar su cuenta con comodidad y seguridad."}',
             'value_fr' => '{"0":"Les applications mobiles BetWinner offrent un accès complet et pratique à la plateforme de paris directement depuis votre smartphone. L’interface est adaptée aux appareils mobiles et fonctionne plus rapidement et plus fluidement que la version mobile du site. Les utilisateurs peuvent placer des paris, suivre des événements sportifs, accéder au casino et gérer leur compte en toute simplicité et sécurité."}',
             'value_pt' => '{"0":"Os aplicativos móveis da BetWinner são uma forma completa e conveniente de acessar a plataforma de apostas diretamente do seu smartphone. A interface é adaptada para dispositivos móveis e funciona mais rápido e de maneira mais fluida do que a versão móvel do site. Os usuários podem fazer apostas, acompanhar eventos esportivos, acessar o cassino e gerenciar sua conta com facilidade e segurança."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain how to install the mobile apps on Android and iOS smartphones, as well as explore the main features of these applications."}',
             'value_es' => '{"0":"En esta reseña explicaremos cómo instalar las aplicaciones móviles en smartphones Android e iOS, así como las principales funciones de estas aplicaciones."}',
             'value_fr' => '{"0":"Dans cette analyse, nous expliquerons comment installer les applications mobiles sur les smartphones Android et iOS, et nous examinerons les principales fonctionnalités de ces applications."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos como instalar os aplicativos móveis em smartphones Android e iOS, bem como exploraremos as principais funcionalidades dessas aplicações."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Fast performance and stability",
                                 "1":"Intuitive and user-friendly interface",
                                 "2":"Full website functionality",
                                 "3":"Push notifications",
                                 "4":"Support for cryptocurrencies and multiple payment methods",
                                 "5":"Protection via PIN code and biometrics"},
                             "1":
                                {"0":"Android version not available on Google Play",
                                 "1":"Installation from unknown sources required"}
                             }',
             'value_es' => '{"0":
                                {"0":"Rendimiento rápido y estable",
                                 "1":"Interfaz intuitiva y fácil de usar",
                                 "2":"Funcionalidad completa del sitio web",
                                 "3":"Notificaciones push",
                                 "4":"Soporte para criptomonedas y múltiples métodos de pago",
                                 "5":"Protección mediante código PIN y biometría"},
                             "1":
                                {"0":"La versión de Android no está disponible en Google Play",
                                 "1":"Se requiere instalación desde orígenes desconocidos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Performance rapide et stabilité",
                                 "1":"Interface intuitive et conviviale",
                                 "2":"Fonctionnalité complète du site web",
                                 "3":"Notifications push",
                                 "4":"Prise en charge des cryptomonnaies et de nombreux moyens de paiement",
                                 "5":"Protection par code PIN et biométrie"},
                             "1":
                                {"0":"Version Android non disponible sur Google Play",
                                 "1":"Installation à partir de sources inconnues requise"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Desempenho rápido e estável",
                                 "1":"Interface intuitiva e fácil de usar",
                                 "2":"Funcionalidade completa do site",
                                 "3":"Notificações push",
                                 "4":"Suporte para criptomoedas e diversos métodos de pagamento",
                                 "5":"Proteção através de código PIN e biometria"},
                             "1":
                                {"0":"Versão Android não disponível na Google Play",
                                 "1":"É necessária a instalação a partir de fontes desconhecidas"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To install BetWinner on Android, you need to open the bookmaker’s website through a browser on your phone, scroll to the bottom of the page, find the download page link, follow it, and download the APK file."}',
             'value_es' => '{"0":"Para instalar BetWinner en Android, debe abrir el sitio web de la casa de apuestas en el navegador de su teléfono, desplazarse hasta el final de la página, encontrar el enlace de descarga, acceder a él y descargar el archivo APK."}',
             'value_fr' => '{"0":"Pour installer BetWinner sur Android, vous devez ouvrir le site du bookmaker via le navigateur de votre téléphone, faire défiler la page jusqu’en bas, trouver le lien de téléchargement, y accéder et télécharger le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o BetWinner no Android, é necessário abrir o site da casa de apostas através do navegador do seu telemóvel, rolar até ao final da página, encontrar o link de download, aceder a ele e descarregar o ficheiro APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Next, you should allow installation from unknown sources in the security settings and install the app by following the on-screen instructions. After installation, it is recommended to disable the permission for installing from unknown sources to maintain your device’s security."}',
             'value_es' => '{"0":"A continuación, debe permitir la instalación desde orígenes desconocidos en la configuración de seguridad e instalar la aplicación siguiendo las instrucciones en pantalla. Después de la instalación, se recomienda desactivar el permiso para instalar desde orígenes desconocidos para mantener la seguridad de su dispositivo."}',
             'value_fr' => '{"0":"Ensuite, vous devez autoriser l’installation depuis des sources inconnues dans les paramètres de sécurité et installer l’application en suivant les instructions à l’écran. Après l’installation, il est recommandé de désactiver l’autorisation d’installation depuis des sources inconnues afin de préserver la sécurité de votre appareil."}',
             'value_pt' => '{"0":"De seguida, deve permitir a instalação de fontes desconhecidas nas definições de segurança e instalar a aplicação seguindo as instruções no ecrã. Após a instalação, é recomendado desativar a permissão para instalar de fontes desconhecidas a fim de manter a segurança do dispositivo."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The minimum requirements include Android 4.1 or newer and about 44 MB of free space."}',
             'value_es' => '{"0":"Los requisitos mínimos incluyen Android 4.1 o una versión más reciente y unos 44 MB de espacio libre."}',
             'value_fr' => '{"0":"Les exigences minimales incluent Android 4.1 ou une version ultérieure et environ 44 Mo d’espace libre."}',
             'value_pt' => '{"0":"Os requisitos mínimos incluem Android 4.1 ou superior e cerca de 44 MB de espaço livre."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For iOS, the app can be downloaded directly through the App Store or via a special link on the official BetWinner website. You need to visit the bookmaker’s website from your iPhone, find the download link for the iOS version, and tap it — the system will display the installation option."}',
             'value_es' => '{"0":"Para iOS, la aplicación se puede descargar directamente a través de la App Store o mediante un enlace especial en el sitio web oficial de BetWinner. Debe ingresar al sitio del operador desde su iPhone, encontrar el enlace de descarga para la versión iOS y tocarlo; el sistema mostrará la opción de instalación."}',
             'value_fr' => '{"0":"Pour iOS, l’application peut être téléchargée directement via l’App Store ou via un lien spécial sur le site officiel de BetWinner. Vous devez accéder au site du bookmaker depuis votre iPhone, trouver le lien de téléchargement pour la version iOS et appuyer dessus — le système affichera l’option d’installation."}',
             'value_pt' => '{"0":"Para iOS, a aplicação pode ser descarregada diretamente através da App Store ou através de um link especial no site oficial da BetWinner. É necessário aceder ao site da casa de apostas a partir do seu iPhone, encontrar o link de download da versão iOS e clicar nele — o sistema mostrará a opção de instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"After installation, the app can be opened from the home screen. The app supports iOS 9.0 and higher and requires approximately 18 MB of free space."}',
             'value_es' => '{"0":"Después de la instalación, la aplicación se puede abrir desde la pantalla principal. La aplicación es compatible con iOS 9.0 o superior y requiere aproximadamente 18 MB de espacio libre."}',
             'value_fr' => '{"0":"Après l’installation, l’application peut être ouverte depuis l’écran d’accueil. L’application est compatible avec iOS 9.0 et supérieur et nécessite environ 18 Mo d’espace libre."}',
             'value_pt' => '{"0":"Após a instalação, a aplicação pode ser aberta a partir do ecrã principal. A aplicação é compatível com iOS 9.0 ou superior e requer aproximadamente 18 MB de espaço livre."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The app’s functionality allows users to place sports bets and live bets, play in the casino, eSports, and virtual sports. Users can add events to favorites for quick access, view the list of live matches, choose betting markets, create accumulator coupons, and place one-touch bets just like in the web version."}',
             'value_es' => '{"0":"La funcionalidad de la aplicación permite realizar apuestas deportivas y en vivo, jugar en el casino, eSports y deportes virtuales. Los usuarios pueden añadir eventos a favoritos para un acceso rápido, ver la lista de partidos en vivo, elegir mercados de apuestas, crear cupones combinados y hacer apuestas con un solo toque, al igual que en la versión web."}',
             'value_fr' => '{"0":"Les fonctionnalités de l’application permettent de placer des paris sportifs et en direct, de jouer au casino, aux eSports et aux sports virtuels. Les utilisateurs peuvent ajouter des événements aux favoris pour un accès rapide, consulter la liste des matchs en direct, choisir les marchés de paris, créer des coupons combinés et placer des paris en un seul clic, comme dans la version web."}',
             'value_pt' => '{"0":"A funcionalidade da aplicação permite fazer apostas desportivas e ao vivo, jogar no casino, eSports e desportos virtuais. Os utilizadores podem adicionar eventos aos favoritos para acesso rápido, ver a lista de jogos ao vivo, escolher mercados de apostas, criar bilhetes acumulados e fazer apostas com um só toque, tal como na versão web."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Detailed statistics, event analysis, live streaming of certain matches, and casino games from Pragmatic Play and NetEnt are also available. There is also the option to play with live dealers."}',
             'value_es' => '{"0":"También están disponibles estadísticas detalladas, análisis de eventos, transmisión en vivo de algunos partidos y juegos de casino de Pragmatic Play y NetEnt. Además, existe la posibilidad de jugar con crupieres en vivo."}',
             'value_fr' => '{"0":"Des statistiques détaillées, des analyses d’événements, le streaming en direct de certains matchs et des jeux de casino de Pragmatic Play et NetEnt sont également disponibles. Il est aussi possible de jouer avec des croupiers en direct."}',
             'value_pt' => '{"0":"Também estão disponíveis estatísticas detalhadas, análise de eventos, transmissão em direto de alguns jogos e jogos de casino da Pragmatic Play e NetEnt. Existe ainda a possibilidade de jogar com dealers ao vivo."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The app includes account management services. You can top up your balance, withdraw funds, receive cashback, with numerous payment methods available, including cryptocurrency. Importantly, your account security is ensured through PIN codes and biometrics."}',
             'value_es' => '{"0":"La aplicación incluye servicios de gestión de cuentas. Podrá recargar el saldo, retirar fondos, recibir reembolsos, con numerosos métodos de pago disponibles, incluida la criptomoneda. Es importante destacar que la seguridad de su cuenta está garantizada mediante códigos PIN y biometría."}',
             'value_fr' => '{"0":"L’application inclut des services de gestion de compte. Vous pouvez recharger votre solde, retirer des fonds, obtenir du cashback, avec de nombreux moyens de paiement disponibles, y compris la cryptomonnaie. Il est important de noter que la sécurité de votre compte est assurée par des codes PIN et la biométrie."}',
             'value_pt' => '{"0":"A aplicação inclui serviços de gestão de conta. Pode recarregar o saldo, levantar fundos, receber cashback, com numerosos métodos de pagamento disponíveis, incluindo criptomoeda. Importa destacar que a segurança da sua conta é garantida através de códigos PIN e biometria."}',
             'order' => 17
            ]
        );
    }
}
