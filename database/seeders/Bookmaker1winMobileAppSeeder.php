<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1win"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1win"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win bookmaker offers users convenient mobile applications for sports betting and online casino, available for Android platforms and a web application for iOS. These applications allow players to enjoy their favorite games and bets anytime and anywhere, providing the full functionality of the main website on mobile devices."}',
             'value_es' => '{"0":"La casa de apuestas 1win ofrece a los usuarios aplicaciones móviles convenientes para apuestas deportivas y casino en línea, disponibles para plataformas Android y una aplicación web para iOS. Estas aplicaciones permiten a los jugadores disfrutar de sus juegos y apuestas favoritas en cualquier momento y lugar, ofreciendo toda la funcionalidad del sitio principal en dispositivos móviles."}',
             'value_fr' => '{"0":"Le bookmaker 1win propose aux utilisateurs des applications mobiles pratiques pour les paris sportifs et le casino en ligne, disponibles pour les plateformes Android et une application web pour iOS. Ces applications permettent aux joueurs de profiter de leurs jeux et paris favoris à tout moment et en tout lieu, offrant toutes les fonctionnalités du site principal sur les appareils mobiles."}',
             'value_pt' => '{"0":"A casa de apostas 1win oferece aos usuários aplicativos móveis convenientes para apostas esportivas e cassino online, disponíveis para plataformas Android e um aplicativo web para iOS. Esses aplicativos permitem que os jogadores desfrutem de seus jogos e apostas favoritos a qualquer hora e em qualquer lugar, oferecendo toda a funcionalidade do site principal em dispositivos móveis."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain the installation procedures for the apps and explore their main features."}',
             'value_es' => '{"0":"En esta reseña, explicaremos los procedimientos de instalación de las aplicaciones y analizaremos sus principales características."}',
             'value_fr' => '{"0":"Dans cette revue, nous expliquerons les procédures d’installation des applications et examinerons leurs principales fonctionnalités."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos os procedimentos de instalação dos aplicativos e exploraremos suas principais funcionalidades."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to register",
                                 "1":"Ability to place sports bets, play in the casino",
                                 "2":"Ability to deposit and withdraw funds",
                                 "3":"Convenient interface",
                                 "4":"Speed of operation"},
                             "1":
                                {"0":"No app for iOS",
                                 "1":"No app for Android in Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de registrarse",
                                 "1":"Posibilidad de realizar apuestas deportivas, jugar en el casino",
                                 "2":"Posibilidad de depositar y retirar fondos",
                                 "3":"Interfaz conveniente",
                                 "4":"Velocidad de funcionamiento"},
                             "1":
                                {"0":"No hay aplicación para iOS",
                                 "1":"No hay aplicación para Android en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de s’inscrire",
                                 "1":"Possibilité de placer des paris sportifs, jouer au casino",
                                 "2":"Possibilité de déposer et retirer des fonds",
                                 "3":"Interface pratique",
                                 "4":"Vitesse de fonctionnement"},
                             "1":
                                {"0":"Pas d’application pour iOS",
                                 "1":"Pas d’application pour Android sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de se registrar",
                                 "1":"Possibilidade de fazer apostas esportivas, jogar no cassino",
                                 "2":"Possibilidade de depositar e sacar fundos",
                                 "3":"Interface conveniente",
                                 "4":"Velocidade de funcionamento"},
                             "1":
                                {"0":"Não há aplicativo para iOS",
                                 "1":"Não há aplicativo para Android no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To install the mobile application on Android, you need to go to the official 1win website through the browser on your device and click the «Download App» button located at the bottom of the page."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil en Android, debe ir al sitio web oficial de 1win a través del navegador en su dispositivo y hacer clic en el botón «Descargar aplicación» que se encuentra en la parte inferior de la página."}',
             'value_fr' => '{"0":"Pour installer l’application mobile sur Android, vous devez accéder au site officiel de 1win via le navigateur de votre appareil et cliquer sur le bouton «Télécharger l’application» situé en bas de la page."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel no Android, você precisa acessar o site oficial da 1win através do navegador do seu dispositivo e clicar no botão «Baixar aplicativo», localizado na parte inferior da página."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"After the download is complete, you need to open the file to install it, allowing the option to install from unknown sources in your device’s security settings. After this, the installation process will be completed, and you will be able to open the app, log into your account, or register a new one."}',
             'value_es' => '{"0":"Después de completar la descarga, debe abrir el archivo para instalarlo, permitiendo la opción de instalar desde fuentes desconocidas en la configuración de seguridad de su dispositivo. Después de esto, el proceso de instalación se completará y podrá abrir la aplicación, iniciar sesión en su cuenta o registrar una nueva."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez ouvrir le fichier pour l’installer, en autorisant l’option d’installation à partir de sources inconnues dans les paramètres de sécurité de votre appareil. Après cela, le processus d’installation sera terminé et vous pourrez ouvrir l’application, vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Após o término do download, você deve abrir o arquivo para instalá-lo, permitindo a opção de instalação de fontes desconhecidas nas configurações de segurança do seu dispositivo. Após isso, o processo de instalação será concluído e você poderá abrir o aplicativo, entrar em sua conta ou registrar uma nova."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"This installation procedure is typical for most bookmakers and carries no danger. It is due to Google’s policy regarding gambling apps, which is why the app is not available in the Play Store."}',
             'value_es' => '{"0":"Este procedimiento de instalación es típico para la mayoría de las casas de apuestas y no representa ningún peligro. Se debe a la política de Google respecto a las aplicaciones de juego, por lo que la aplicación no está disponible en la Play Store."}',
             'value_fr' => '{"0":"Cette procédure d’installation est typique pour la plupart des bookmakers et ne présente aucun danger. Elle est due à la politique de Google concernant les applications de jeux d’argent, raison pour laquelle l’application n’est pas disponible sur le Play Store."}',
             'value_pt' => '{"0":"Este procedimento de instalação é típico para a maioria das casas de apostas e não apresenta nenhum perigo. Ele é devido à política do Google em relação a aplicativos de jogos, motivo pelo qual o aplicativo não está disponível na Play Store."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, 1win offers a web application that functions like a regular app but does not require downloading from the App Store. To install it on an iPhone or iPad, simply open the 1win website in the Safari browser and wait for the page to fully load."}',
             'value_es' => '{"0":"Para los usuarios de iOS, 1win ofrece una aplicación web que funciona como una aplicación normal pero no requiere descarga desde la App Store. Para instalarla en un iPhone o iPad, simplemente abra el sitio web de 1win en el navegador Safari y espere a que la página se cargue por completo."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, 1win propose une application web qui fonctionne comme une application normale mais ne nécessite pas de téléchargement depuis l’App Store. Pour l’installer sur un iPhone ou un iPad, il suffit d’ouvrir le site 1win dans le navigateur Safari et d’attendre le chargement complet de la page."}',
             'value_pt' => '{"0":"Para os usuários de iOS, a 1win oferece um aplicativo web que funciona como um aplicativo normal, mas não requer download da App Store. Para instalá-lo em um iPhone ou iPad, basta abrir o site da 1win no navegador Safari e aguardar o carregamento completo da página."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Then, tap the «Share» icon and select the «Add to Home Screen» option. After confirmation, an icon for 1win will appear on the home screen, providing quick access to the site and all its features."}',
             'value_es' => '{"0":"Luego, toque el icono «Compartir» y seleccione la opción «Agregar a la pantalla de inicio». Tras la confirmación, aparecerá un icono de 1win en la pantalla de inicio, proporcionando acceso rápido al sitio y a todas sus funciones."}',
             'value_fr' => '{"0":"Ensuite, appuyez sur l’icône «Partager» et sélectionnez l’option «Ajouter à l’écran d’accueil». Après confirmation, une icône 1win apparaîtra sur l’écran d’accueil, offrant un accès rapide au site et à toutes ses fonctionnalités."}',
             'value_pt' => '{"0":"Em seguida, toque no ícone «Compartilhar» e selecione a opção «Adicionar à Tela de Início». Após a confirmação, um ícone da 1win aparecerá na tela inicial, proporcionando acesso rápido ao site e a todas as suas funções."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win mobile application provides users with a full range of features, including registration and account login, sports betting, and playing a variety of casino games, including slots, roulette, and blackjack."}',
             'value_es' => '{"0":"La aplicación móvil de 1win ofrece a los usuarios una gama completa de funciones, que incluyen registro e inicio de sesión en la cuenta, apuestas deportivas y juego en una variedad de juegos de casino, incluidos tragamonedas, ruleta y blackjack."}',
             'value_fr' => '{"0":"L’application mobile 1win offre aux utilisateurs une gamme complète de fonctionnalités, incluant l’inscription et la connexion au compte, les paris sportifs et la participation à divers jeux de casino, tels que les machines à sous, la roulette et le blackjack."}',
             'value_pt' => '{"0":"O aplicativo móvel 1win oferece aos usuários uma gama completa de recursos, incluindo registro e login na conta, apostas esportivas e participação em diversos jogos de cassino, incluindo slots, roleta e blackjack."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The app allows users to deposit and withdraw winnings through various payment systems, provides access to customer support, and enables participation in bonus programs and promotions offered by 1win."}',
             'value_es' => '{"0":"La aplicación permite a los usuarios depositar y retirar ganancias a través de varios sistemas de pago, brinda acceso al servicio de atención al cliente y permite la participación en programas de bonos y promociones ofrecidos por 1win."}',
             'value_fr' => '{"0":"L’application permet aux utilisateurs de déposer et retirer leurs gains via différents systèmes de paiement, offre un accès au service client et permet de participer aux programmes de bonus et promotions proposés par 1win."}',
             'value_pt' => '{"0":"O aplicativo permite que os usuários depositem e retirem ganhos por meio de vários sistemas de pagamento, fornece acesso ao suporte ao cliente e possibilita a participação em programas de bônus e promoções oferecidos pela 1win."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to these features, the mobile applications offer players a convenient and efficient way to enjoy sports betting and casino games without the need to use a desktop computer."}',
             'value_es' => '{"0":"Gracias a estas funciones, las aplicaciones móviles ofrecen a los jugadores una forma conveniente y eficiente de disfrutar de las apuestas deportivas y los juegos de casino sin necesidad de utilizar un ordenador de escritorio."}',
             'value_fr' => '{"0":"Grâce à ces fonctionnalités, les applications mobiles offrent aux joueurs un moyen pratique et efficace de profiter des paris sportifs et des jeux de casino sans avoir besoin d’utiliser un ordinateur de bureau."}',
             'value_pt' => '{"0":"Graças a esses recursos, os aplicativos móveis oferecem aos jogadores uma forma conveniente e eficiente de aproveitar apostas esportivas e jogos de cassino sem a necessidade de usar um computador desktop."}',
             'order' => 17
            ]
        );
    }
}
