<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4RABET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 4RABET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 4RABET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 4RABET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4RABET mobile app for Android and the iOS web app allow users to access all platform features without the need to use a desktop browser. The apps are designed for fast performance, even with unstable internet connections, and provide convenient navigation."}',
             'value_es' => '{"0":"La aplicación móvil de 4RABET para Android y la aplicación web para iOS permiten a los usuarios acceder a todas las funciones de la plataforma sin necesidad de usar un navegador de escritorio. Las aplicaciones están diseñadas para un rendimiento rápido, incluso con conexiones a internet inestables, y ofrecen una navegación conveniente."}',
             'value_fr' => '{"0":"L’application mobile 4RABET pour Android et l’application web iOS permettent aux utilisateurs d’accéder à toutes les fonctionnalités de la plateforme sans avoir besoin d’utiliser un navigateur sur un ordinateur. Les applications sont conçues pour un fonctionnement rapide, même avec une connexion Internet instable, et offrent une navigation pratique."}',
             'value_pt' => '{"0":"O aplicativo móvel 4RABET para Android e o aplicativo web para iOS permitem que os usuários acessem todos os recursos da plataforma sem precisar usar um navegador de desktop. Os aplicativos foram projetados para desempenho rápido, mesmo com conexões de internet instáveis, e oferecem navegação conveniente."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to them, sports betting, live games, and casino options are available anywhere and anytime, which is especially convenient for active players. Here are the installation instructions for Android and iOS smartphones."}',
             'value_es' => '{"0":"Gracias a ellas, las apuestas deportivas, los juegos en vivo y el casino están disponibles en cualquier lugar y en cualquier momento, lo que resulta especialmente útil para jugadores activos. A continuación, se presentan las instrucciones de instalación para smartphones Android y iOS."}',
             'value_fr' => '{"0":"Grâce à elles, les paris sportifs, les jeux en direct et le casino sont accessibles partout et à tout moment, ce qui est particulièrement pratique pour les joueurs actifs. Voici les instructions d’installation pour les smartphones Android et iOS."}',
             'value_pt' => '{"0":"Graças a eles, apostas esportivas, jogos ao vivo e cassino estão disponíveis em qualquer lugar e a qualquer momento, o que é especialmente conveniente para jogadores ativos. A seguir, apresentamos as instruções de instalação para smartphones Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full access to sports betting and casino",
                                 "1":"Optimized interface",
                                 "2":"Support for payment methods",
                                 "3":"Push notifications for promotions and bets",
                                 "4":"Support for multi-view and live betting"},
                             "1":
                                {"0":"No live match streaming",
                                 "1":"iOS web app lacks some features",
                                 "2":"Not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso completo a apuestas deportivas y casino",
                                 "1":"Interfaz optimizada",
                                 "2":"Soporte para métodos de pago",
                                 "3":"Notificaciones push sobre promociones y apuestas",
                                 "4":"Soporte para multi-view y apuestas en vivo"},
                             "1":
                                {"0":"No hay transmisión en vivo de partidos",
                                 "1":"La aplicación web para iOS carece de algunas funciones",
                                 "2":"No disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès complet aux paris sportifs et au casino",
                                 "1":"Interface optimisée",
                                 "2":"Prise en charge des méthodes de paiement",
                                 "3":"Notifications push pour les promotions et les paris",
                                 "4":"Prise en charge du multi-view et des paris en direct"},
                             "1":
                                {"0":"Pas de diffusion en direct des matchs",
                                 "1":"L’application web iOS ne dispose pas de certaines fonctionnalités",
                                 "2":"Non disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso completo a apostas esportivas e cassino",
                                 "1":"Interface otimizada",
                                 "2":"Suporte para métodos de pagamento",
                                 "3":"Notificações push sobre promoções e apostas",
                                 "4":"Suporte para multi-view e apostas ao vivo"},
                             "1":
                                {"0":"Sem transmissão ao vivo das partidas",
                                 "1":"O aplicativo web para iOS não possui alguns recursos",
                                 "2":"Não disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4RABET Android app can only be downloaded from the official website due to Google Play’s policy on gambling apps."}',
             'value_es' => '{"0":"La aplicación 4RABET para Android solo se puede descargar desde el sitio web oficial debido a la política de Google Play sobre aplicaciones de apuestas."}',
             'value_fr' => '{"0":"L’application 4RABET pour Android ne peut être téléchargée que depuis le site officiel en raison de la politique de Google Play concernant les applications de jeux d’argent."}',
             'value_pt' => '{"0":"O aplicativo 4RABET para Android só pode ser baixado do site oficial devido à política do Google Play sobre aplicativos de jogos de azar."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"First, go to the official website and scroll to the bottom of the homepage to find the link to the app download page. Go to the mobile apps section and download the APK file. Then, in your smartphone settings, allow installation from unknown sources."}',
             'value_es' => '{"0":"Primero, vaya al sitio web oficial y desplácese hasta la parte inferior de la página de inicio para encontrar el enlace a la página de descarga de la aplicación. Vaya a la sección de aplicaciones móviles y descargue el archivo APK. Luego, en la configuración de su teléfono, permita la instalación desde fuentes desconocidas."}',
             'value_fr' => '{"0":"Tout d’abord, rendez-vous sur le site officiel et faites défiler jusqu’au bas de la page d’accueil pour trouver le lien vers la page de téléchargement de l’application. Accédez à la section des applications mobiles et téléchargez le fichier APK. Ensuite, dans les paramètres de votre smartphone, autorisez l’installation depuis des sources inconnues."}',
             'value_pt' => '{"0":"Primeiro, acesse o site oficial e role até a parte inferior da página inicial para encontrar o link para a página de download do aplicativo. Vá para a seção de aplicativos móveis e baixe o arquivo APK. Em seguida, nas configurações do seu smartphone, permita a instalação a partir de fontes desconhecidas."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To do this, open your phone’s settings. Go to the «Security» section. Find the option “Allow installation from unknown sources» and enable «Allow from this source.” Launch the APK file and complete the installation."}',
             'value_es' => '{"0":"Para hacerlo, abra la configuración de su teléfono. Vaya a la sección «Seguridad». Busque la opción «Permitir instalación desde fuentes desconocidas» y active “Permitir desde esta fuente”. Abra el archivo APK y complete la instalación."}',
             'value_fr' => '{"0":"Pour ce faire, ouvrez les paramètres de votre téléphone. Allez dans la section « Sécurité ». Trouvez l’option « Autoriser l’installation à partir de sources inconnues » et activez « Autoriser depuis cette source ». Lancez le fichier APK et terminez l’installation."}',
             'value_pt' => '{"0":"Para isso, abra as configurações do telefone. Vá para a seção «Segurança». Encontre a opção «Permitir instalação de fontes desconhecidas» e ative “Permitir desta fonte”. Abra o arquivo APK e conclua a instalação."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"That’s it! After that, you can log into your existing account or create a new one."}',
             'value_es' => '{"0":"¡Eso es todo! Después de eso, puede iniciar sesión en su cuenta existente o crear una nueva."}',
             'value_fr' => '{"0":"C’est tout ! Après cela, vous pouvez vous connecter à votre compte existant ou en créer un nouveau."}',
             'value_pt' => '{"0":"Pronto! Depois disso, você poderá entrar na sua conta existente ou criar uma nova."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, the mobile app is available through the web version of the site. To install it, open Safari, go to the official 4RABET website, and add the page to your home screen."}',
             'value_es' => '{"0":"Para los usuarios de iOS, la aplicación móvil está disponible a través de la versión web del sitio. Para instalarla, abra Safari, vaya al sitio web oficial de 4RABET y agregue la página a su pantalla de inicio."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’application mobile est disponible via la version web du site. Pour l’installer, ouvrez Safari, allez sur le site officiel de 4RABET et ajoutez la page à votre écran d’accueil."}',
             'value_pt' => '{"0":"Para usuários de iOS, o aplicativo móvel está disponível através da versão web do site. Para instalá-lo, abra o Safari, acesse o site oficial da 4RABET e adicione a página à tela inicial."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To do this, select «Add to Home Screen» from the browser’s bottom menu, after which the app icon will appear on your device’s screen. Using this icon, you can quickly access the platform without needing the App Store and bypass regional restrictions."}',
             'value_es' => '{"0":"Para ello, seleccione «Agregar a la pantalla de inicio» en el menú inferior del navegador, tras lo cual aparecerá el icono de la aplicación en la pantalla del dispositivo. Con este icono, puede acceder rápidamente a la plataforma sin necesidad de usar App Store y evitando las restricciones regionales."}',
             'value_fr' => '{"0":"Pour ce faire, sélectionnez « Ajouter à l’écran d’accueil » dans le menu inférieur du navigateur, après quoi l’icône de l’application apparaîtra sur l’écran de votre appareil. Grâce à cette icône, vous pouvez accéder rapidement à la plateforme sans utiliser l’App Store et contourner les restrictions régionales."}',
             'value_pt' => '{"0":"Para isso, selecione «Adicionar à Tela de Início» no menu inferior do navegador, após o que o ícone do aplicativo aparecerá na tela do dispositivo. Com este ícone, você pode acessar rapidamente a plataforma sem precisar usar a App Store e contornar restrições regionais."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET mobile apps provide access to the full range of platform features. Users can place sports bets in pre-match and live modes, view match statistics, build accumulators, and track results in real time."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 4RABET ofrecen acceso a todo el conjunto de funciones de la plataforma. Los usuarios pueden realizar apuestas deportivas en modos pre-match y en vivo, ver estadísticas de los partidos, crear acumuladores y seguir los resultados en tiempo real."}',
             'value_fr' => '{"0":"Les applications mobiles 4RABET offrent un accès à l’ensemble des fonctionnalités de la plateforme. Les utilisateurs peuvent placer des paris sportifs en modes pré-match et live, consulter les statistiques des matchs, créer des paris combinés et suivre les résultats en temps réel."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 4RABET oferecem acesso a toda a gama de funcionalidades da plataforma. Os usuários podem fazer apostas esportivas nos modos pré-jogo e ao vivo, visualizar estatísticas de partidas, criar acumuladores e acompanhar resultados em tempo real."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino includes thousands of slots, table games, and live dealer games. The app supports payment integration, profile settings, two-factor authentication, bonus collection, and participation in promotions. Additionally, it offers push notifications and responsible gaming tools, allowing users to control spending and set limits."}',
             'value_es' => '{"0":"El casino incluye miles de tragamonedas, juegos de mesa y juegos en vivo con crupieres reales. La aplicación soporta integración de métodos de pago, configuración de perfil, autenticación de dos factores, recepción de bonos y participación en promociones. Además, cuenta con notificaciones push y herramientas de juego responsable que permiten controlar los gastos y establecer límites."}',
             'value_fr' => '{"0":"Le casino comprend des milliers de machines à sous, des jeux de table et des jeux en direct avec des croupiers réels. L’application prend en charge l’intégration des méthodes de paiement, la configuration du profil, l’authentification à deux facteurs, la réception des bonus et la participation aux promotions. De plus, des notifications push et des outils de jeu responsable permettent de contrôler les dépenses et de définir des limites."}',
             'value_pt' => '{"0":"O cassino inclui milhares de slots, jogos de mesa e jogos ao vivo com dealers reais. O aplicativo suporta integração com métodos de pagamento, configuração de perfil, autenticação de dois fatores, recebimento de bônus e participação em promoções. Além disso, oferece notificações push e ferramentas de jogo responsável, permitindo controlar gastos e definir limites."}',
             'order' => 17
            ]
        );
    }
}
