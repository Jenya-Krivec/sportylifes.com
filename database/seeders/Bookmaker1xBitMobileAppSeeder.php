<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1xBit"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1xBit"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Mobile applications of 1xBit for Android and the mobile site version for iOS provide full access to sports betting and casino games. These products are designed so that users can place bets, participate in live games, track match results, and receive bonuses."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 1xBit para Android y la versión móvil del sitio para iOS ofrecen acceso completo a las apuestas deportivas y a los juegos de casino. Estos productos están diseñados para que los usuarios puedan realizar apuestas, participar en juegos en vivo, seguir los resultados de los partidos y recibir bonos."}',
             'value_fr' => '{"0":"Les applications mobiles de 1xBit pour Android et la version mobile du site pour iOS offrent un accès complet aux paris sportifs et aux jeux de casino. Ces produits sont conçus pour que les utilisateurs puissent placer des paris, participer à des jeux en direct, suivre les résultats des matchs et recevoir des bonus."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 1xBit para Android e a versão móvel do site para iOS oferecem acesso completo a apostas esportivas e jogos de cassino. Esses produtos são projetados para que os usuários possam fazer apostas, participar de jogos ao vivo, acompanhar os resultados das partidas e receber bônus."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The app interface is intuitive and allows for quick navigation between sections, and cryptocurrency support makes the platform convenient for those who prefer digital assets."}',
             'value_es' => '{"0":"La interfaz de la aplicación es intuitiva y permite una navegación rápida entre secciones, y el soporte de criptomonedas hace que la plataforma sea conveniente para quienes prefieren los activos digitales."}',
             'value_fr' => '{"0":"L\'interface de l\'application est intuitive et permet de naviguer rapidement entre les sections, et la prise en charge des cryptomonnaies rend la plateforme pratique pour ceux qui préfèrent les actifs numériques."}',
             'value_pt' => '{"0":"A interface do aplicativo é intuitiva e permite navegar rapidamente entre as seções, e o suporte a criptomoedas torna a plataforma conveniente para quem prefere ativos digitais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Integration with casino and live rooms with real dealers",
                                 "1":"Access to live broadcasts and match statistics",
                                 "2":"Mobile-optimized interface",
                                 "3":"Ability to participate in promotions",
                                 "4":"24/7 customer support"},
                             "1":
                                {"0":"Need to download APK for Android",
                                 "1":"No full-featured app for iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Integración con casino y salas en vivo con crupieres reales",
                                 "1":"Acceso a transmisiones en vivo y estadísticas de los partidos",
                                 "2":"Interfaz adaptada para dispositivos móviles",
                                 "3":"Posibilidad de participar en promociones",
                                 "4":"Atención al cliente 24/7"},
                             "1":
                                {"0":"Necesidad de descargar APK para Android",
                                 "1":"No hay una aplicación completa para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Intégration avec le casino et les salles live avec des croupiers réels",
                                 "1":"Accès aux diffusions en direct et aux statistiques des matchs",
                                 "2":"Interface adaptée aux appareils mobiles",
                                 "3":"Possibilité de participer aux promotions",
                                 "4":"Service client 24h/24 et 7j/7"},
                             "1":
                                {"0":"Nécessité de télécharger l’APK pour Android",
                                 "1":"Pas d’application complète pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Integração com cassino e salas ao vivo com dealers reais",
                                 "1":"Acesso a transmissões ao vivo e estatísticas das partidas",
                                 "2":"Interface adaptada para dispositivos móveis",
                                 "3":"Possibilidade de participar de promoções",
                                 "4":"Suporte ao cliente 24/7"},
                             "1":
                                {"0":"Necessidade de baixar o APK para Android",
                                 "1":"Não há aplicativo completo para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1xBit app on Android, you need to open the bookmaker’s official website through your smartphone browser, go to the app download section, and download the APK file. After that, you should allow installation of apps from unknown sources in your device settings and start the installation process."}',
             'value_es' => '{"0":"Para instalar la aplicación 1xBit en Android, debes abrir el sitio web oficial del bookmaker desde el navegador de tu smartphone, ir a la sección de descarga de aplicaciones y descargar el archivo APK. Después, debes permitir la instalación de aplicaciones de fuentes desconocidas en la configuración del dispositivo y comenzar el proceso de instalación."}',
             'value_fr' => '{"0":"Pour installer l’application 1xBit sur Android, vous devez ouvrir le site officiel du bookmaker via le navigateur de votre smartphone, accéder à la section de téléchargement des applications et télécharger le fichier APK. Ensuite, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre appareil et lancer l’installation."}',
             'value_pt' => '{"0":"Para instalar o aplicativo 1xBit no Android, é necessário abrir o site oficial do bookmaker através do navegador do smartphone, ir à seção de download de aplicativos e baixar o arquivo APK. Em seguida, você deve permitir a instalação de aplicativos de fontes desconhecidas nas configurações do dispositivo e iniciar a instalação."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Once the installation is complete, the app icon will appear on the home screen, and the user will be able to log in or create a new account."}',
             'value_es' => '{"0":"Una vez completada la instalación, el ícono de la aplicación aparecerá en la pantalla de inicio y el usuario podrá iniciar sesión o crear una cuenta nueva."}',
             'value_fr' => '{"0":"Une fois le processus terminé, l’icône de l’application apparaîtra sur l’écran d’accueil, et l’utilisateur pourra se connecter ou créer un nouveau compte."}',
             'value_pt' => '{"0":"Quando o processo for concluído, o ícone do aplicativo aparecerá na tela inicial, e o usuário poderá fazer login ou criar uma nova conta."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, for iOS users, a mobile app does not exist yet as it is still in development. However, despite this, you can access the 1xBit website from your smartphone using a browser. There is a mobile version of the site, which is well adapted for mobile devices and has the same functionality as the desktop version."}',
             'value_es' => '{"0":"Desafortunadamente, para los usuarios de iOS, la aplicación móvil aún no existe, ya que todavía está en desarrollo. Sin embargo, a pesar de esto, puedes acceder al sitio web de 1xBit desde tu smartphone usando un navegador. Existe una versión móvil del sitio, que está bien adaptada para dispositivos móviles y tiene la misma funcionalidad que la versión de escritorio."}',
             'value_fr' => '{"0":"Malheureusement, pour les utilisateurs iOS, l’application mobile n’existe pas encore, car elle est toujours en cours de développement. Cependant, malgré cela, vous pouvez accéder au site 1xBit depuis votre smartphone via un navigateur. Il existe une version mobile du site, bien adaptée aux appareils mobiles et offrant les mêmes fonctionnalités que la version de bureau."}',
             'value_pt' => '{"0":"Infelizmente, para os usuários de iOS, o aplicativo móvel ainda não existe, pois está em desenvolvimento. No entanto, apesar disso, você pode acessar o site 1xBit pelo smartphone usando um navegador. Existe uma versão móvel do site, que é bem adaptada para dispositivos móveis e possui a mesma funcionalidade da versão desktop."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit mobile apps allow you to place pre-match and live bets on dozens of sports, including football, basketball, hockey, tennis, and esports. For each event, extended betting markets are available, such as totals, handicaps, combination parlays, and individual player statistics."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 1xBit permiten realizar apuestas pre-match y en vivo en decenas de deportes, incluyendo fútbol, baloncesto, hockey, tenis y esports. Para cada evento, están disponibles mercados de apuestas ampliados, como totales, hándicaps, combinaciones de parlay y estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Les applications mobiles 1xBit permettent de placer des paris pré-match et en direct sur des dizaines de sports, notamment le football, le basketball, le hockey, le tennis et l’esport. Pour chaque événement, des marchés de paris étendus sont disponibles, tels que les totaux, les handicaps, les paris combinés et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 1xBit permitem fazer apostas pré-jogo e ao vivo em dezenas de esportes, incluindo futebol, basquete, hóquei, tênis e esports. Para cada evento, estão disponíveis mercados de apostas estendidos, como totais, handicaps, combinações de parlays e estatísticas individuais de jogadores."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The casino section of the app offers thousands of slots, table games, live rooms with real dealers, TV games, keno, and bingo. Through the app, you can deposit and withdraw funds using cryptocurrencies and traditional payment methods, participate in bonus promotions and loyalty programs. Profile settings, notifications, and account parameters are also available, and customer support operates 24/7 via live chat and email, ensuring quick resolution of any user inquiries."}',
             'value_es' => '{"0":"La sección de casino de la aplicación ofrece miles de tragamonedas, juegos de mesa, salas en vivo con crupieres reales, juegos de TV, keno y bingo. A través de la aplicación, puedes depositar y retirar fondos utilizando criptomonedas y métodos de pago tradicionales, participar en promociones de bonos y programas de fidelidad. También están disponibles ajustes de perfil, notificaciones y parámetros de cuenta, y el soporte al cliente funciona las 24 horas del día a través del chat en vivo y correo electrónico, asegurando una rápida resolución de cualquier consulta del usuario."}',
             'value_fr' => '{"0":"La section casino de l’application propose des milliers de machines à sous, jeux de table, salons en direct avec de vrais croupiers, jeux TV, keno et bingo. Via l’application, vous pouvez déposer et retirer des fonds en utilisant des cryptomonnaies et des méthodes de paiement traditionnelles, participer aux promotions de bonus et aux programmes de fidélité. Les paramètres de profil, les notifications et les paramètres du compte sont également disponibles, et le support client fonctionne 24h/24 via le chat en direct et le courrier électronique, garantissant une résolution rapide de toutes les demandes des utilisateurs."}',
             'value_pt' => '{"0":"A seção de cassino do aplicativo oferece milhares de slots, jogos de mesa, salas ao vivo com dealers reais, jogos de TV, keno e bingo. Pelo aplicativo, você pode depositar e sacar fundos usando criptomoedas e métodos de pagamento tradicionais, participar de promoções de bônus e programas de fidelidade. Configurações de perfil, notificações e parâmetros de conta também estão disponíveis, e o suporte ao cliente funciona 24 horas por dia via chat ao vivo e e-mail, garantindo resolução rápida de quaisquer solicitações dos usuários."}',
             'order' => 14
            ]
        );
    }
}
