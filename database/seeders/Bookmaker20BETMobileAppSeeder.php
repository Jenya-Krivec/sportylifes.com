<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 20BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 20BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is a modern betting platform that allows users to place bets on sports and play casino games directly from a smartphone or tablet. With the Android mobile app and the iOS web app, users have full access to all site features without needing to open a browser."}',
             'value_es' => '{"0":"20BET es una plataforma de apuestas moderna que permite a los usuarios realizar apuestas deportivas y jugar en el casino directamente desde un smartphone o tablet. Con la aplicación móvil para Android y la web app para iOS, los usuarios tienen acceso completo a todas las funciones del sitio sin necesidad de abrir un navegador."}',
             'value_fr' => '{"0":"20BET est une plateforme de paris moderne qui permet aux utilisateurs de placer des paris sportifs et de jouer au casino directement depuis un smartphone ou une tablette. Avec l’application mobile Android et la web app iOS, les utilisateurs ont un accès complet à toutes les fonctionnalités du site sans avoir besoin d’ouvrir un navigateur."}',
             'value_pt' => '{"0":"20BET é uma plataforma de apostas moderna que permite aos usuários fazer apostas esportivas e jogar no cassino diretamente do smartphone ou tablet. Com o aplicativo móvel para Android e o web app para iOS, os usuários têm acesso completo a todos os recursos do site sem precisar abrir um navegador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The app interface is optimized for different screen sizes, making navigation convenient and fast. Betting on popular sports, esports, and various casino games is available at any time, and the apps’ stable performance ensures no disconnections during crucial moments."}',
             'value_es' => '{"0":"La interfaz de la aplicación está optimizada para diferentes tamaños de pantalla, lo que hace que la navegación sea cómoda y rápida. Apostar en deportes populares, esports y disfrutar de diversos juegos de casino está disponible en cualquier momento, y la estabilidad de las aplicaciones garantiza que no haya interrupciones en momentos clave."}',
             'value_fr' => '{"0":"L’interface de l’application est optimisée pour différentes tailles d’écran, ce qui rend la navigation pratique et rapide. Les paris sur les sports populaires, les esports et divers jeux de casino sont disponibles à tout moment, et la stabilité des applications garantit qu’il n’y aura pas de coupures lors des moments importants."}',
             'value_pt' => '{"0":"A interface do aplicativo é otimizada para diferentes tamanhos de tela, tornando a navegação prática e rápida. Apostar em esportes populares, esports e aproveitar diversos jogos de cassino está disponível a qualquer momento, e a estabilidade dos aplicativos garante que não haja desconexões nos momentos importantes."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Easy navigation and modern interface",
                                 "1":"Full access to sports betting and casino",
                                 "2":"Support for deposits and withdrawals",
                                 "3":"Ability to activate bonuses and enter promo codes",
                                 "4":"Stable performance even under high load"},
                             "1":
                                {"0":"Android app must be downloaded from the official website",
                                 "1":"Only a web app is available for iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Navegación fácil e interfaz moderna",
                                 "1":"Acceso completo a apuestas deportivas y casino",
                                 "2":"Soporte para depósitos y retiros",
                                 "3":"Posibilidad de activar bonos e ingresar códigos promocionales",
                                 "4":"Rendimiento estable incluso bajo alta carga"},
                             "1":
                                {"0":"La aplicación de Android debe descargarse desde el sitio web oficial",
                                 "1":"Solo hay disponible una web app para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Navigation facile et interface moderne",
                                 "1":"Accès complet aux paris sportifs et au casino",
                                 "2":"Support pour les dépôts et les retraits",
                                 "3":"Possibilité d’activer les bonus et d’entrer des codes promotionnels",
                                 "4":"Performance stable même sous forte charge"},
                             "1":
                                {"0":"L’application Android doit être téléchargée depuis le site officiel",
                                 "1":"Seule une web app est disponible pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Navegação fácil e interface moderna",
                                 "1":"Acesso completo a apostas esportivas e cassino",
                                 "2":"Suporte para depósitos e saques",
                                 "3":"Possibilidade de ativar bônus e inserir códigos promocionais",
                                 "4":"Desempenho estável mesmo com alta carga"},
                             "1":
                                {"0":"O aplicativo Android deve ser baixado pelo site oficial",
                                 "1":"Apenas um web app está disponível para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To install the 20BET app on Android, go to the official website and open the mobile apps section, the link is at the top. Scan the QR code and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación 20BET en Android, dirígete al sitio web oficial y abre la sección de aplicaciones móviles, el enlace está en la parte superior. Escanea el código QR y descarga el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application 20BET sur Android, rendez-vous sur le site officiel et ouvrez la section des applications mobiles, le lien se trouve en haut. Scannez le QR code et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo 20BET no Android, acesse o site oficial e abra a seção de aplicativos móveis, o link está no topo. Escaneie o código QR e baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, you need to allow installation from unknown sources in your phone settings. Then open the file, and the system will automatically install the app. Once the installation is complete, the 20BET icon will appear on your home screen, and the app will be ready to use."}',
             'value_es' => '{"0":"Después de la descarga, debes permitir la instalación desde fuentes desconocidas en la configuración de tu teléfono. Luego abre el archivo y el sistema instalará automáticamente la aplicación. Una vez completada la instalación, el icono de 20BET aparecerá en la pantalla de inicio y la aplicación estará lista para usar."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez autoriser l’installation depuis des sources inconnues dans les paramètres de votre téléphone. Ensuite, ouvrez le fichier et le système installera automatiquement l’application. Une fois l’installation terminée, l’icône 20BET apparaîtra sur l’écran d’accueil et l’application sera prête à l’emploi."}',
             'value_pt' => '{"0":"Após o download, é necessário permitir a instalação a partir de fontes desconhecidas nas configurações do seu telefone. Em seguida, abra o arquivo e o sistema instalará automaticamente o aplicativo. Quando a instalação for concluída, o ícone 20BET aparecerá na tela inicial e o aplicativo estará pronto para uso."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For iOS smartphones, only the web app is available, which does not require installation from the App Store. To set it up, open the mobile version of the 20BET website in Safari and wait for the page to fully load. Then add it to your home screen using the «Add to Home Screen» feature."}',
             'value_es' => '{"0":"Para los smartphones con iOS, solo está disponible la aplicación web, que no requiere instalación desde la App Store. Para configurarla, abre la versión móvil del sitio web de 20BET en Safari y espera a que la página se cargue por completo. Luego agrégala a la pantalla de inicio usando la función «Agregar a la pantalla de inicio»."}',
             'value_fr' => '{"0":"Pour les smartphones iOS, seule l’application web est disponible, et elle ne nécessite pas d’installation depuis l’App Store. Pour la configurer, ouvrez la version mobile du site 20BET dans Safari et attendez que la page soit complètement chargée. Ensuite, ajoutez-la à votre écran d’accueil via la fonction « Ajouter à l’écran d’accueil »."}',
             'value_pt' => '{"0":"Para smartphones com iOS, apenas o web app está disponível, não sendo necessário instalá-lo pela App Store. Para configurá-lo, abra a versão móvel do site 20BET no Safari e aguarde o carregamento completo da página. Em seguida, adicione-o à tela inicial usando a função «Adicionar à Tela de Início»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After that, an icon will appear on your screen, allowing quick access to the platform without entering the website address. The web app supports all the main features for sports betting and casino games."}',
             'value_es' => '{"0":"Después de eso, aparecerá un icono en tu pantalla que permite un acceso rápido a la plataforma sin tener que ingresar la dirección del sitio web. La aplicación web admite todas las funciones principales de apuestas deportivas y juegos de casino."}',
             'value_fr' => '{"0":"Après cela, une icône apparaîtra sur votre écran, permettant un accès rapide à la plateforme sans saisir l’adresse du site. L’application web prend en charge toutes les fonctionnalités principales des paris sportifs et des jeux de casino."}',
             'value_pt' => '{"0":"Após isso, um ícone aparecerá na tela, permitindo acesso rápido à plataforma sem digitar o endereço do site. O web app suporta todas as principais funcionalidades de apostas esportivas e jogos de cassino."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET mobile app allows you to place bets on pre-match and live events, track the progress of matches in real time, create accumulator combinations, and participate in all promotions and bonus programs. In the casino section, you can play thousands of slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil de 20BET permite realizar apuestas en eventos previos al partido y en vivo, seguir el desarrollo de los partidos en tiempo real, crear combinaciones acumuladoras y participar en todas las promociones y programas de bonificación. En la sección de casino, puedes jugar miles de tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile 20BET permet de placer des paris sur des événements avant-match et en direct, de suivre le déroulement des matchs en temps réel, de créer des combinaisons accumulées et de participer à toutes les promotions et programmes de bonus. Dans la section casino, vous pouvez jouer à des milliers de machines à sous, jeux de table et jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O aplicativo móvel 20BET permite fazer apostas em eventos pré-jogo e ao vivo, acompanhar o andamento das partidas em tempo real, criar combinações acumuladoras e participar de todas as promoções e programas de bônus. Na seção de cassino, você pode jogar milhares de slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Users can deposit and withdraw funds via bank cards, e-wallets, and cryptocurrencies. In addition, the app keeps a history of bets and allows quick access to active events. All functionality is optimized for convenient use even on small smartphone screens."}',
             'value_es' => '{"0":"Los usuarios pueden depositar y retirar fondos mediante tarjetas bancarias, monederos electrónicos y criptomonedas. Además, la aplicación guarda el historial de apuestas y permite acceder rápidamente a los eventos activos. Todas las funciones están optimizadas para un uso cómodo incluso en pantallas pequeñas de smartphones."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent déposer et retirer des fonds via des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies. De plus, l’application conserve l’historique des paris et permet un accès rapide aux événements actifs. Toutes les fonctionnalités sont optimisées pour une utilisation confortable même sur de petits écrans de smartphone."}',
             'value_pt' => '{"0":"Os usuários podem depositar e sacar fundos através de cartões bancários, carteiras eletrônicas e criptomoedas. Além disso, o aplicativo mantém o histórico de apostas e permite acesso rápido aos eventos ativos. Todas as funcionalidades são otimizadas para uso conveniente, mesmo em telas pequenas de smartphones."}',
             'order' => 15
            ]
        );
    }
}
