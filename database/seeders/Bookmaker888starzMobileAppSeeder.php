<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 888Starz"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 888Starz"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 888Starz"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz is an international bookmaker platform offering a wide range of sports events, casino games, and gambling options. For user convenience, the company has developed mobile applications for Android and iOS operating systems, allowing users to place bets and play casino games directly from their smartphones or tablets."}',
             'value_es' => '{"0":"888Starz es una plataforma de apuestas internacional que ofrece una amplia variedad de eventos deportivos, juegos de casino y opciones de juego. Para mayor comodidad de los usuarios, la empresa ha desarrollado aplicaciones móviles para los sistemas operativos Android e iOS, que permiten realizar apuestas y jugar en el casino directamente desde smartphones o tablets."}',
             'value_fr' => '{"0":"888Starz est une plateforme de paris internationale qui propose un large choix d’événements sportifs, de jeux de casino et d’options de jeu. Pour plus de commodité, la société a développé des applications mobiles pour les systèmes Android et iOS, permettant aux utilisateurs de parier et de jouer au casino directement depuis leur smartphone ou tablette."}',
             'value_pt' => '{"0":"888Starz é uma plataforma de apostas internacional que oferece uma ampla variedade de eventos esportivos, jogos de cassino e opções de apostas. Para conveniência dos usuários, a empresa desenvolveu aplicativos móveis para os sistemas Android e iOS, permitindo fazer apostas e jogar no cassino diretamente de smartphones ou tablets."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In this section, we provide instructions for installing mobile applications on Android and iOS smartphones."}',
             'value_es' => '{"0":"En esta sección, presentamos instrucciones para instalar las aplicaciones móviles en smartphones Android e iOS."}',
             'value_fr' => '{"0":"Dans cette section, nous vous proposons des instructions pour installer les applications mobiles sur les smartphones Android et iOS."}',
             'value_pt' => '{"0":"Nesta seção, apresentamos instruções para instalar os aplicativos móveis em smartphones Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Access to all main platform features",
                                 "1":"Deposit and withdrawal of funds",
                                 "2":"User-friendly interface",
                                 "3":"Fast registration and login",
                                 "4":"Participation in promotions"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                 "1":"Limited iOS support"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso a todas las funciones principales de la plataforma",
                                 "1":"Depósito y retiro de fondos",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Registro e inicio de sesión rápidos",
                                 "4":"Participación en promociones"},
                             "1":
                                {"0":"La aplicación de Android no está disponible en Google Play",
                                 "1":"Soporte limitado para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès à toutes les fonctionnalités principales de la plateforme",
                                 "1":"Dépôt et retrait de fonds",
                                 "2":"Interface conviviale",
                                 "3":"Inscription et connexion rapides",
                                 "4":"Participation aux promotions"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play",
                                 "1":"Support iOS limité"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso a todos os principais recursos da plataforma",
                                 "1":"Depósito e saque de fundos",
                                 "2":"Interface amigável",
                                 "3":"Registro e login rápidos",
                                 "4":"Participação em promoções"},
                             "1":
                                {"0":"Aplicativo Android não disponível no Google Play",
                                 "1":"Suporte limitado para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To install the 888Starz app on Android, you first need to visit the official website from your smartphone. At the bottom of the page, there is a link to the app download page where you can download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación 888Starz en Android, primero debe visitar el sitio web oficial desde su teléfono inteligente. En la parte inferior de la página, hay un enlace a la página de descarga de la aplicación, donde puede descargar el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application 888Starz sur Android, vous devez d’abord visiter le site officiel depuis votre smartphone. En bas de la page, il y a un lien vers la page de téléchargement de l’application où vous pouvez télécharger le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo 888Starz no Android, você primeiro precisa acessar o site oficial pelo seu smartphone. Na parte inferior da página, há um link para a página de download do aplicativo, onde você pode baixar o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, you need to allow the installation of apps from unknown sources in your phone settings. Open your smartphone Settings, go to the Security section, find the Install from unknown sources option, and enable Allow installation from unknown sources. After that, you can open APK files and install apps that are not from Google Play."}',
             'value_es' => '{"0":"Antes de la instalación, debe permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración de su teléfono. Abra la Configuración de su teléfono, vaya a la sección Seguridad, busque la opción Instalar desde fuentes desconocidas y active Permitir instalación desde fuentes desconocidas. Después de eso, puede abrir archivos APK e instalar aplicaciones que no provienen de Google Play."}',
             'value_fr' => '{"0":"Avant l’installation, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre téléphone. Ouvrez les Paramètres de votre smartphone, allez dans la section Sécurité, trouvez l’option Installer à partir de sources inconnues et activez Autoriser l’installation à partir de sources inconnues. Après cela, vous pouvez ouvrir les fichiers APK et installer des applications qui ne proviennent pas de Google Play."}',
             'value_pt' => '{"0":"Antes da instalação, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone. Abra as Configurações do seu smartphone, vá para a seção Segurança, encontre a opção Instalar de fontes desconhecidas e ative Permitir instalação de fontes desconhecidas. Depois disso, você pode abrir arquivos APK e instalar aplicativos que não vêm do Google Play."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Then open the APK file and wait for the installation to complete. After installation, you will be able to log into your existing account or create a new one."}',
             'value_es' => '{"0":"Luego abra el archivo APK y espere a que se complete la instalación. Después de la instalación, podrá iniciar sesión en su cuenta existente o crear una nueva."}',
             'value_fr' => '{"0":"Ensuite, ouvrez le fichier APK et attendez la fin de l’installation. Après l’installation, vous pourrez vous connecter à votre compte existant ou en créer un nouveau."}',
             'value_pt' => '{"0":"Em seguida, abra o arquivo APK e aguarde a conclusão da instalação. Após a instalação, você poderá entrar na sua conta existente ou criar uma nova."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, the app is available through the App Store. To install it via the App Store, search for 888Starz, tap «Get», and wait for the download to complete."}',
             'value_es' => '{"0":"Para los usuarios de iOS, la aplicación está disponible a través de la App Store. Para instalarla desde la App Store, busque 888Starz, toque «Obtener» y espere a que se complete la descarga."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’application est disponible sur l’App Store. Pour l’installer via l’App Store, recherchez 888Starz, appuyez sur «Obtenir» et attendez la fin du téléchargement."}',
             'value_pt' => '{"0":"Para usuários de iOS, o aplicativo está disponível na App Store. Para instalá-lo pela App Store, procure por 888Starz, toque em «Obter» e aguarde a conclusão do download."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"After that, open the app and log into your account or register."}',
             'value_es' => '{"0":"Luego, abra la aplicación e inicie sesión en su cuenta o regístrese."}',
             'value_fr' => '{"0":"Ensuite, ouvrez l’application et connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"Em seguida, abra o aplicativo e faça login na sua conta ou registre-se."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888Starz mobile app allows users to place sports bets in both pre-match and live modes, view match statistics, and create accumulators."}',
             'value_es' => '{"0":"La aplicación móvil de 888Starz permite a los usuarios realizar apuestas deportivas en modos pre-partido y en vivo, consultar estadísticas de los partidos y crear combinadas."}',
             'value_fr' => '{"0":"L’application mobile 888Starz permet aux utilisateurs de parier sur le sport en modes pré-match et en direct, de consulter les statistiques des matchs et de créer des paris combinés."}',
             'value_pt' => '{"0":"O aplicativo móvel 888Starz permite que os usuários façam apostas esportivas nos modos pré-jogo e ao vivo, consultem estatísticas das partidas e criem apostas múltiplas."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The casino includes thousands of slots, table games, and live games with real dealers. The app supports integration with payment methods, profile customization, two-factor authentication, and participation in bonus promotions."}',
             'value_es' => '{"0":"El casino incluye miles de tragamonedas, juegos de mesa y juegos en vivo con crupieres reales. La aplicación admite integración con métodos de pago, personalización de perfil, autenticación de dos factores y participación en promociones de bonificación."}',
             'value_fr' => '{"0":"Le casino comprend des milliers de machines à sous, de jeux de table et de jeux en direct avec de vrais croupiers. L’application prend en charge l’intégration avec les méthodes de paiement, la personnalisation du profil, l’authentification à deux facteurs et la participation aux promotions bonus."}',
             'value_pt' => '{"0":"O cassino inclui milhares de slots, jogos de mesa e jogos ao vivo com dealers reais. O aplicativo oferece integração com métodos de pagamento, personalização de perfil, autenticação de dois fatores e participação em promoções de bônus."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition, push notifications and responsible gaming tools are implemented, allowing users to control spending and set limits. Users gain quick access to all the platform’s key features directly from their mobile device, making gameplay convenient and comfortable anywhere."}',
             'value_es' => '{"0":"Además, se implementan notificaciones push y herramientas de juego responsable que permiten controlar el gasto y establecer límites. Los usuarios obtienen acceso rápido a todas las funciones principales de la plataforma directamente desde su dispositivo móvil, lo que hace que la experiencia de juego sea cómoda y práctica en cualquier lugar."}',
             'value_fr' => '{"0":"De plus, des notifications push et des outils de jeu responsable sont intégrés, permettant de contrôler les dépenses et de fixer des limites. Les utilisateurs ont un accès rapide à toutes les fonctionnalités principales de la plateforme directement depuis leur appareil mobile, rendant le jeu pratique et confortable partout."}',
             'value_pt' => '{"0":"Além disso, estão disponíveis notificações push e ferramentas de jogo responsável que permitem controlar os gastos e definir limites. Os usuários têm acesso rápido a todas as principais funcionalidades da plataforma diretamente do dispositivo móvel, tornando a experiência de jogo prática e confortável em qualquer lugar."}',
             'order' => 17
            ]
        );
    }
}
