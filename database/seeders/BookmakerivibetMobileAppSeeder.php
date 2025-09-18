<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Ivibet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Ivibet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Ivibet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet is a modern international platform for sports betting and online casino. Although there are no full mobile apps, you can use web apps for Android and iOS. These apps allow players to enjoy their favorite games and bets anytime and anywhere."}',
             'value_es' => '{"0":"Ivibet es una plataforma internacional moderna para apuestas deportivas y casino en línea. Aunque no existen aplicaciones móviles completas, se pueden usar las aplicaciones web para Android e iOS. Estas aplicaciones permiten a los jugadores disfrutar de sus juegos y apuestas favoritas en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Ivibet est une plateforme internationale moderne pour les paris sportifs et le casino en ligne. Bien qu’il n’y ait pas d’applications mobiles complètes, vous pouvez utiliser les applications web pour Android et iOS. Ces applications permettent aux joueurs de profiter de leurs jeux et paris préférés à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"Ivibet é uma plataforma internacional moderna para apostas esportivas e cassino online. Embora não existam aplicativos móveis completos, você pode usar os aplicativos web para Android e iOS. Esses aplicativos permitem que os jogadores aproveitem seus jogos e apostas favoritos a qualquer hora e em qualquer lugar."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of games and bets",
                                 "1":"User-friendly interface",
                                 "2":"Ability to choose the interface language"},
                             "1":
                                {"0":"No Android app",
                                 "1":"No iOS app"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de juegos y apuestas",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Posibilidad de elegir el idioma de la interfaz"},
                             "1":
                                {"0":"No hay aplicación para Android",
                                 "1":"No hay aplicación para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de jeux et de paris",
                                 "1":"Interface conviviale",
                                 "2":"Possibilité de choisir la langue de l’interface"},
                             "1":
                                {"0":"Pas d’application Android",
                                 "1":"Pas d’application iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla variedade de jogos e apostas",
                                 "1":"Interface amigável",
                                 "2":"Possibilidade de escolher o idioma da interface"},
                             "1":
                                {"0":"Sem aplicativo para Android",
                                 "1":"Sem aplicativo para iOS"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To use the Ivibet web app on Android, open the browser on your smartphone, go to the official website, and wait for the page to fully load."}',
             'value_es' => '{"0":"Para usar la aplicación web de Ivibet en Android, abra el navegador en su smartphone, visite el sitio web oficial y espere a que la página se cargue completamente."}',
             'value_fr' => '{"0":"Pour utiliser l’application web Ivibet sur Android, ouvrez le navigateur sur votre smartphone, accédez au site officiel et attendez que la page soit entièrement chargée."}',
             'value_pt' => '{"0":"Para usar o aplicativo web Ivibet no Android, abra o navegador em seu smartphone, acesse o site oficial e aguarde o carregamento completo da página."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Then you can add the site to your home screen. Tap the «Add to Home Screen» button in the browser, confirm the action, and the Ivibet icon will appear on your screen along with other apps. You can now open Ivibet with a single tap and use all the features of the web app."}',
             'value_es' => '{"0":"Luego puede agregar el sitio a la pantalla de inicio. Toque el botón «Agregar a la pantalla de inicio» en el navegador, confirme la acción, y el icono de Ivibet aparecerá en su pantalla junto con otras aplicaciones. Ahora puede abrir Ivibet con un solo toque y utilizar todas las funciones de la aplicación web."}',
             'value_fr' => '{"0":"Ensuite, vous pouvez ajouter le site à l’écran d’accueil. Appuyez sur le bouton « Ajouter à l’écran d’accueil » dans le navigateur, confirmez l’action, et l’icône Ivibet apparaîtra sur votre écran avec les autres applications. Vous pourrez désormais ouvrir Ivibet d’une seule touche et utiliser toutes les fonctionnalités de l’application web."}',
             'value_pt' => '{"0":"Em seguida, você pode adicionar o site à tela inicial. Toque no botão «Adicionar à tela inicial» no navegador, confirme a ação, e o ícone Ivibet aparecerá na sua tela junto com outros aplicativos. Agora você pode abrir o Ivibet com um único toque e usar todos os recursos do aplicativo web."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To use the Ivibet web app on iOS, open Safari, go to the official platform website, and wait for the page to fully load. In the mobile apps section, click the link to add it to the home screen."}',
             'value_es' => '{"0":"Para usar la aplicación web de Ivibet en iOS, abra Safari, visite el sitio web oficial de la plataforma y espere a que la página se cargue completamente. En la sección de aplicaciones móviles, haga clic en el enlace para agregarlo a la pantalla de inicio."}',
             'value_fr' => '{"0":"Pour utiliser l’application web Ivibet sur iOS, ouvrez Safari, accédez au site officiel de la plateforme et attendez que la page soit entièrement chargée. Dans la section des applications mobiles, cliquez sur le lien pour l’ajouter à l’écran d’accueil."}',
             'value_pt' => '{"0":"Para usar o aplicativo web Ivibet no iOS, abra o Safari, acesse o site oficial da plataforma e aguarde o carregamento completo da página. Na seção de aplicativos móveis, clique no link para adicioná-lo à tela inicial."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The app will automatically be added as an icon on the home screen. Once opened, you can log into your account or register if you are a new user."}',
             'value_es' => '{"0":"La aplicación se agregará automáticamente como un ícono en la pantalla de inicio. Una vez abierta, puede iniciar sesión en su cuenta o registrarse si es un usuario nuevo."}',
             'value_fr' => '{"0":"L’application sera automatiquement ajoutée en tant qu’icône sur l’écran d’accueil. Une fois ouverte, vous pouvez vous connecter à votre compte ou vous inscrire si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"O aplicativo será adicionado automaticamente como um ícone na tela inicial. Depois de aberto, você pode entrar em sua conta ou se registrar, caso seja um novo usuário."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet mobile web app provides the full range of features available in the desktop version of the platform. Users can place pre-match and live bets on sports events, view match results, and track odds changes in real time. In the casino section, thousands of slots, table games, live dealer games, as well as TV games, keno, and bingo are available."}',
             'value_es' => '{"0":"La aplicación web móvil de Ivibet ofrece la gama completa de funciones disponibles en la versión de escritorio de la plataforma. Los usuarios pueden realizar apuestas pre-partido y en vivo en eventos deportivos, consultar los resultados de los partidos y seguir los cambios en las cuotas en tiempo real. En la sección de casino, están disponibles miles de tragamonedas, juegos de mesa, juegos en vivo con crupieres, así como juegos de TV, keno y bingo."}',
             'value_fr' => '{"0":"L’application web mobile Ivibet offre l’ensemble des fonctionnalités disponibles dans la version bureau de la plateforme. Les utilisateurs peuvent placer des paris pré-match et en direct sur les événements sportifs, consulter les résultats des matchs et suivre les variations des cotes en temps réel. Dans la section casino, des milliers de machines à sous, jeux de table, jeux avec croupiers en direct ainsi que des jeux TV, keno et bingo sont disponibles."}',
             'value_pt' => '{"0":"O aplicativo web móvel Ivibet oferece toda a gama de funcionalidades disponíveis na versão para desktop da plataforma. Os usuários podem fazer apostas pré-jogo e ao vivo em eventos esportivos, consultar resultados de partidas e acompanhar alterações nas odds em tempo real. Na seção de cassino, estão disponíveis milhares de slots, jogos de mesa, jogos ao vivo com dealers, bem como jogos de TV, keno e bingo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The app allows users to deposit and withdraw funds using various payment methods, participate in promotions, and receive bonuses. The interface is intuitive, and profile settings allow for quick management of notifications and account preferences. Additionally, support is available 24/7 via live chat and email, ensuring prompt resolution of any user issues."}',
             'value_es' => '{"0":"La aplicación permite a los usuarios depositar y retirar fondos mediante diversos métodos de pago, participar en promociones y recibir bonos. La interfaz es intuitiva y la configuración del perfil permite gestionar rápidamente las notificaciones y preferencias de la cuenta. Además, el soporte está disponible las 24 horas a través del chat en vivo y el correo electrónico, garantizando una rápida resolución de cualquier problema del usuario."}',
             'value_fr' => '{"0":"L’application permet aux utilisateurs de déposer et retirer des fonds via différents moyens de paiement, de participer à des promotions et de recevoir des bonus. L’interface est intuitive et les paramètres du profil permettent de gérer rapidement les notifications et les préférences du compte. De plus, l’assistance est disponible 24h/24 via le chat en direct et l’email, garantissant une résolution rapide de toute demande des utilisateurs."}',
             'value_pt' => '{"0":"O aplicativo permite que os usuários depositem e retirem fundos através de vários métodos de pagamento, participem de promoções e recebam bônus. A interface é intuitiva, e as configurações de perfil permitem gerenciar rapidamente notificações e preferências da conta. Além disso, o suporte está disponível 24 horas por dia via chat ao vivo e e-mail, garantindo a rápida resolução de qualquer problema do usuário."}',
             'order' => 14
            ]
        );
    }
}
