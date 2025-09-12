<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 22BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 22BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET has long established itself as an international bookmaker with a wide selection of sports events and casino games, as well as convenient tools for users, including full-featured mobile applications for Android and iOS."}',
             'value_es' => '{"0":"22BET se ha consolidado desde hace tiempo como una casa de apuestas internacional con una amplia selección de eventos deportivos y juegos de casino, así como herramientas convenientes para los usuarios, incluidos completos aplicativos móviles para Android e iOS."}',
             'value_fr' => '{"0":"22BET s\'est depuis longtemps imposée comme un bookmaker international avec un large choix d\'événements sportifs et de jeux de casino, ainsi que des outils pratiques pour les utilisateurs, y compris des applications mobiles complètes pour Android et iOS."}',
             'value_pt' => '{"0":"A 22BET consolidou-se há muito tempo como uma casa de apostas internacional com uma ampla seleção de eventos esportivos e jogos de cassino, bem como ferramentas convenientes para os usuários, incluindo aplicativos móveis completos para Android e iOS."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"They allow quick access to all site functions, including sports betting, live betting, casino, financial transactions, and customer support. Thanks to an intuitive interface, the apps provide comfortable usage even on devices with small screens."}',
             'value_es' => '{"0":"Permiten un acceso rápido a todas las funciones del sitio, incluidas las apuestas deportivas, las apuestas en vivo, el casino, las transacciones financieras y el servicio de atención al cliente. Gracias a una interfaz intuitiva, las aplicaciones ofrecen un uso cómodo incluso en dispositivos con pantallas pequeñas."}',
             'value_fr' => '{"0":"Elles permettent un accès rapide à toutes les fonctions du site, y compris les paris sportifs, les paris en direct, le casino, les transactions financières et le support client. Grâce à une interface intuitive, les applications offrent une utilisation confortable même sur des appareils à petit écran."}',
             'value_pt' => '{"0":"Eles permitem acesso rápido a todas as funções do site, incluindo apostas esportivas, apostas ao vivo, cassino, transações financeiras e suporte ao cliente. Graças a uma interface intuitiva, os aplicativos proporcionam um uso confortável mesmo em dispositivos com telas pequenas."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Stable app performance",
                                 "1":"Intuitive interface",
                                 "2":"Support for account deposits and withdrawals",
                                 "3":"Ability to activate bonuses and participate in promotions",
                                 "4":"Access to the full functionality of the site"},
                             "1":
                                {"0":"App updates are sometimes released with delays",
                                 "1":"Android app is not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Rendimiento estable de la aplicación",
                                 "1":"Interfaz intuitiva",
                                 "2":"Compatibilidad con depósitos y retiros de cuenta",
                                 "3":"Posibilidad de activar bonos y participar en promociones",
                                 "4":"Acceso a todas las funcionalidades del sitio"},
                             "1":
                                {"0":"Las actualizaciones de la aplicación a veces se publican con retraso",
                                 "1":"La aplicación de Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnement stable de l\'application",
                                 "1":"Interface intuitive",
                                 "2":"Prise en charge des dépôts et retraits de compte",
                                 "3":"Possibilité d\'activer des bonus et de participer à des promotions",
                                 "4":"Accès à toutes les fonctionnalités du site"},
                             "1":
                                {"0":"Les mises à jour de l\'application sont parfois publiées avec un certain retard",
                                 "1":"L\'application Android n\'est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Desempenho estável do aplicativo",
                                 "1":"Interface intuitiva",
                                 "2":"Suporte para depósitos e saques de conta",
                                 "3":"Possibilidade de ativar bônus e participar de promoções",
                                 "4":"Acesso a todas as funcionalidades do site"},
                             "1":
                                {"0":"As atualizações do aplicativo às vezes são lançadas com atraso",
                                 "1":"O aplicativo Android não está disponível no Google Play"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Since it is not possible to download bookmaker apps from Google Play, installing 22BET on Android is done through the official website. You need to go to the mobile version of the 22BET site and find the apps section; the link is located at the top of the site."}',
             'value_es' => '{"0":"Dado que no es posible descargar aplicaciones de casas de apuestas desde Google Play, la instalación de 22BET en Android se realiza a través del sitio web oficial. Debe ir a la versión móvil del sitio de 22BET y buscar la sección de aplicaciones; el enlace se encuentra en la parte superior del sitio."}',
             'value_fr' => '{"0":"Comme il n\'est pas possible de télécharger des applications de bookmakers depuis Google Play, l\'installation de 22BET sur Android se fait via le site officiel. Vous devez accéder à la version mobile du site 22BET et trouver la section des applications ; le lien se trouve en haut du site."}',
             'value_pt' => '{"0":"Como não é possível baixar aplicativos de casas de apostas pelo Google Play, a instalação do 22BET no Android é feita através do site oficial. Você precisa acessar a versão móvel do site 22BET e localizar a seção de aplicativos; o link está na parte superior do site."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"After downloading the installation file, you need to allow the installation of apps from unknown sources in your phone settings. Open the downloaded file, and the system will automatically complete the installation. Once this process is finished, the 22BET icon will appear on your smartphone’s home screen, and the app will be ready to use."}',
             'value_es' => '{"0":"Después de descargar el archivo de instalación, debe permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración del teléfono. Abra el archivo descargado y el sistema completará automáticamente la instalación. Una vez finalizado este proceso, el ícono de 22BET aparecerá en la pantalla de inicio de su smartphone y la aplicación estará lista para usar."}',
             'value_fr' => '{"0":"Après avoir téléchargé le fichier d\'installation, vous devez autoriser l\'installation d\'applications provenant de sources inconnues dans les paramètres de votre téléphone. Ouvrez le fichier téléchargé et le système exécutera automatiquement l\'installation. Une fois ce processus terminé, l\'icône 22BET apparaîtra sur l\'écran d\'accueil de votre smartphone et l\'application sera prête à l\'emploi."}',
             'value_pt' => '{"0":"Após baixar o arquivo de instalação, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone. Abra o arquivo baixado, e o sistema concluirá automaticamente a instalação. Após a conclusão deste processo, o ícone do 22BET aparecerá na tela inicial do smartphone e o aplicativo estará pronto para uso."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Apple device owners can install the app much more easily, as it is officially available in the App Store. To do this, simply open the App Store, enter “22BET” in the search bar, and go to the app page."}',
             'value_es' => '{"0":"Los propietarios de dispositivos Apple pueden instalar la aplicación mucho más fácilmente, ya que está disponible oficialmente en la App Store. Para hacerlo, solo abra la App Store, escriba “22BET” en la barra de búsqueda y vaya a la página de la aplicación."}',
             'value_fr' => '{"0":"Les utilisateurs d’appareils Apple peuvent installer l’application beaucoup plus facilement, car elle est officiellement disponible sur l’App Store. Pour ce faire, il suffit d’ouvrir l’App Store, de taper « 22BET » dans la barre de recherche et d’accéder à la page de l’application."}',
             'value_pt' => '{"0":"Os proprietários de dispositivos Apple podem instalar o aplicativo muito mais facilmente, pois ele está oficialmente disponível na App Store. Para isso, basta abrir a App Store, digitar “22BET” na barra de pesquisa e acessar a página do aplicativo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"After pressing the download button, the installation process begins and runs automatically. Once installed, the app icon appears on the smartphone screen, and you can immediately log in to your account and start placing bets."}',
             'value_es' => '{"0":"Después de presionar el botón de descarga, el proceso de instalación comienza y se realiza automáticamente. Una vez instalada, el ícono de la aplicación aparecerá en la pantalla del smartphone y podrá iniciar sesión de inmediato y realizar apuestas."}',
             'value_fr' => '{"0":"Après avoir appuyé sur le bouton de téléchargement, le processus d’installation commence et se déroule automatiquement. Une fois installée, l’icône de l’application apparaît sur l’écran du smartphone, et vous pouvez immédiatement vous connecter à votre compte et placer des paris."}',
             'value_pt' => '{"0":"Após pressionar o botão de download, o processo de instalação começa e é realizado automaticamente. Após a instalação, o ícone do aplicativo aparecerá na tela do smartphone, e você poderá acessar sua conta imediatamente e começar a fazer apostas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The functionality of the 22BET mobile apps is fully on par with the desktop version of the site. Users have access to all sporting events, including popular championships and niche sports, with the ability to place both pre-match and live bets."}',
             'value_es' => '{"0":"La funcionalidad de las aplicaciones móviles de 22BET está completamente a la par con la versión de escritorio del sitio. Los usuarios tienen acceso a todos los eventos deportivos, incluidos campeonatos populares y deportes de nicho, con la posibilidad de realizar apuestas previas al partido y en vivo."}',
             'value_fr' => '{"0":"Les fonctionnalités des applications mobiles 22BET sont entièrement comparables à celles de la version de bureau du site. Les utilisateurs ont accès à tous les événements sportifs, y compris les championnats populaires et les sports de niche, avec la possibilité de placer des paris avant le match et en direct."}',
             'value_pt' => '{"0":"A funcionalidade dos aplicativos móveis da 22BET está totalmente equivalente à versão para desktop do site. Os usuários têm acesso a todos os eventos esportivos, incluindo campeonatos populares e esportes de nicho, com a possibilidade de fazer apostas pré-jogo e ao vivo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The app provides match statistics, results, and live graphics. The casino is available in full: slots, table games, and live casino with real dealers."}',
             'value_es' => '{"0":"La aplicación ofrece estadísticas de los partidos, resultados y gráficos en tiempo real. El casino está disponible en su totalidad: tragamonedas, juegos de mesa y casino en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application fournit des statistiques de match, les résultats et des graphiques en temps réel. Le casino est entièrement disponible : machines à sous, jeux de table et casino en direct avec des croupiers réels."}',
             'value_pt' => '{"0":"O aplicativo fornece estatísticas de partidas, resultados e gráficos em tempo real. O cassino está disponível na íntegra: slots, jogos de mesa e cassino ao vivo com dealers reais."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"It is possible to deposit and withdraw funds in just a few clicks, as well as activate bonuses and use promo codes. Customer support is also accessible through the mobile app via chat or email. Overall, the app is designed to provide users with maximum autonomy and comfort anytime, anywhere."}',
             'value_es' => '{"0":"Es posible depositar y retirar fondos en solo unos clics, así como activar bonos y usar códigos promocionales. El servicio de atención al cliente también está disponible a través de la aplicación móvil mediante chat o correo electrónico. En general, la aplicación está diseñada para brindar a los usuarios la máxima autonomía y comodidad en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Il est possible de déposer et retirer des fonds en quelques clics, ainsi que d’activer des bonus et d’utiliser des codes promotionnels. Le support client est également accessible via l’application mobile, par chat ou par e-mail. Dans l’ensemble, l’application est conçue pour offrir aux utilisateurs un maximum d’autonomie et de confort à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"É possível depositar e retirar fundos em apenas alguns cliques, além de ativar bônus e usar códigos promocionais. O suporte ao cliente também está acessível pelo aplicativo móvel via chat ou e-mail. No geral, o aplicativo foi projetado para proporcionar aos usuários máxima autonomia e conforto a qualquer hora e em qualquer lugar."}',
             'order' => 15
            ]
        );
    }
}
