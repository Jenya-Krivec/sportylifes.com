<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Linebet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Linebet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Linebet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is an international bookmaker platform that has been offering sports, eSports, and casino betting services since 2019. Mobile applications for Android and iOS provide full access to all website functions without the need to open a browser on a smartphone or tablet. The apps are optimized for different screen sizes and ensure stable performance even under heavy load."}',
             'value_es' => '{"0":"Linebet es una plataforma internacional de apuestas que, desde 2019, ofrece servicios de apuestas deportivas, eSports y casino. Las aplicaciones móviles para Android e iOS proporcionan acceso completo a todas las funciones del sitio web sin necesidad de abrir un navegador en un teléfono o tablet. Las aplicaciones están optimizadas para diferentes tamaños de pantalla y garantizan un funcionamiento estable incluso bajo alta carga."}',
             'value_fr' => '{"0":"Linebet est une plateforme internationale de paris qui propose, depuis 2019, des services de paris sportifs, eSports et casino. Les applications mobiles pour Android et iOS offrent un accès complet à toutes les fonctionnalités du site sans avoir besoin d’ouvrir un navigateur sur un smartphone ou une tablette. Les applications sont optimisées pour différentes tailles d’écran et assurent un fonctionnement stable même sous forte charge."}',
             'value_pt' => '{"0":"Linebet é uma plataforma internacional de apostas que, desde 2019, oferece serviços de apostas esportivas, eSports e cassino. Os aplicativos móveis para Android e iOS fornecem acesso completo a todas as funções do site sem a necessidade de abrir um navegador em um smartphone ou tablet. Os aplicativos são otimizados para diferentes tamanhos de tela e garantem desempenho estável mesmo sob alta carga."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will examine the pros and cons of the mobile applications, explain the installation procedures for Android and iOS smartphones, and describe the main features of the apps."}',
             'value_es' => '{"0":"En esta reseña, examinaremos las ventajas y desventajas de las aplicaciones móviles, explicaremos los procedimientos de instalación en smartphones Android e iOS y describiremos las principales funcionalidades de las aplicaciones."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons les avantages et inconvénients des applications mobiles, expliquerons les procédures d’installation sur les smartphones Android et iOS, et décrirons les principales fonctionnalités des applications."}',
             'value_pt' => '{"0":"Nesta análise, examinaremos os prós e contras dos aplicativos móveis, explicaremos os procedimentos de instalação em smartphones Android e iOS e descreveremos os principais recursos dos aplicativos."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Stable performance on Android and iOS",
                                 "1":"Full website functionality",
                                 "2":"Ability to place sports bets and play casino games",
                                 "3":"Support for deposits and withdrawals",
                                 "4":"Activation of bonuses and use of promo codes in the app"},
                             "1":
                                {"0":"The Android app is not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionamiento estable en Android e iOS",
                                 "1":"Funcionalidad completa del sitio web",
                                 "2":"Posibilidad de realizar apuestas deportivas y jugar en el casino",
                                 "3":"Soporte para depósitos y retiros",
                                 "4":"Activación de bonos y uso de códigos promocionales en la aplicación"},
                             "1":
                                {"0":"La aplicación de Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnement stable sur Android et iOS",
                                 "1":"Fonctionnalité complète du site",
                                 "2":"Possibilité de parier sur le sport et de jouer au casino",
                                 "3":"Prise en charge des dépôts et des retraits",
                                 "4":"Activation des bonus et utilisation des codes promotionnels dans l’application"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Desempenho estável no Android e iOS",
                                 "1":"Funcionalidade completa do site",
                                 "2":"Possibilidade de fazer apostas esportivas e jogar no cassino",
                                 "3":"Suporte para depósitos e saques",
                                 "4":"Ativação de bônus e uso de códigos promocionais no aplicativo"},
                             "1":
                                {"0":"O aplicativo para Android não está disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Since Google Play does not allow the download of gambling apps, Linebet for Android must be installed through the official website. To do this, you need to go to the mobile version of the site, find the section with the apps, and download the APK file, the link to which is located at the bottom of the page."}',
             'value_es' => '{"0":"Debido a que Google Play no permite la descarga de aplicaciones de apuestas, Linebet para Android debe instalarse a través del sitio web oficial. Para ello, es necesario acceder a la versión móvil del sitio, buscar la sección de aplicaciones y descargar el archivo APK, cuyo enlace se encuentra en la parte inferior de la página."}',
             'value_fr' => '{"0":"Comme Google Play n’autorise pas le téléchargement d’applications de jeux d’argent, Linebet pour Android doit être installé via le site officiel. Pour cela, il faut accéder à la version mobile du site, trouver la section dédiée aux applications et télécharger le fichier APK, dont le lien se situe en bas de la page."}',
             'value_pt' => '{"0":"Como o Google Play não permite o download de aplicativos de apostas, o Linebet para Android deve ser instalado através do site oficial. Para isso, é necessário acessar a versão móvel do site, encontrar a seção de aplicativos e baixar o arquivo APK, cujo link está localizado na parte inferior da página."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, you need to allow the installation of apps from unknown sources in your phone’s settings. Then open the file, and the system will automatically install the app. Once the installation is complete, a Linebet icon will appear on the home screen, and the app will be ready to use."}',
             'value_es' => '{"0":"Después de la descarga, se debe permitir la instalación de aplicaciones de orígenes desconocidos en la configuración del teléfono. Luego, abre el archivo y el sistema instalará la aplicación automáticamente. Una vez finalizada la instalación, aparecerá el ícono de Linebet en la pantalla principal y la aplicación estará lista para usarse."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres du téléphone. Ensuite, ouvrez le fichier et le système installera automatiquement l’application. Une fois l’installation terminée, une icône Linebet apparaîtra sur l’écran d’accueil et l’application sera prête à être utilisée."}',
             'value_pt' => '{"0":"Após o download, é preciso permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone. Em seguida, abra o arquivo e o sistema instalará automaticamente o aplicativo. Quando a instalação for concluída, o ícone do Linebet aparecerá na tela inicial e o aplicativo estará pronto para uso."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 11
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"For iPhone users, the process is even simpler. Go to the TestFlight website and click «View in App Store» to be redirected to the App Store."}',
                'value_es' => '{"0":"Para los usuarios de iPhone, el proceso es aún más sencillo. Accede al sitio web de TestFlight y haz clic en «Ver en App Store» para ser redirigido a la App Store."}',
                'value_fr' => '{"0":"Pour les utilisateurs d’iPhone, le processus est encore plus simple. Rendez-vous sur le site TestFlight et cliquez sur « Voir dans l’App Store » pour être redirigé vers l’App Store."}',
                'value_pt' => '{"0":"Para os usuários de iPhone, o processo é ainda mais simples. Acesse o site do TestFlight e clique em «Ver na App Store» para ser redirecionado à App Store."}',
                'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 12
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"Download the TestFlight app from the App Store, wait for the installation to finish, and open TestFlight. Click the «Continue» button. Allow or deny TestFlight notifications."}',
                'value_es' => '{"0":"Descarga la aplicación TestFlight desde la App Store, espera a que finalice la instalación y abre TestFlight. Pulsa el botón «Continuar». Permite o rechaza las notificaciones de TestFlight."}',
                'value_fr' => '{"0":"Téléchargez l’application TestFlight depuis l’App Store, attendez la fin de l’installation et ouvrez TestFlight. Cliquez sur le bouton « Continuer ». Autorisez ou refusez les notifications de TestFlight."}',
                'value_pt' => '{"0":"Baixe o aplicativo TestFlight na App Store, aguarde a conclusão da instalação e abra o TestFlight. Toque no botão «Continuar». Permita ou recuse as notificações do TestFlight."}',
                'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 13
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'p',
                'value_en' => '{"0":"In the window that opens, install the Linebet app. Wait until the installation of the Linebet app is complete and then open it. In the new window, click «Next» and agree to receive notifications. Press «Start Testing» to launch Linebet. Now you can place bets, enjoy games, and win big!"}',
                'value_es' => '{"0":"En la ventana que se abre, instala la aplicación Linebet. Espera a que finalice la instalación de la aplicación Linebet y luego ábrela. En la nueva ventana, pulsa «Siguiente» y acepta recibir notificaciones. Haz clic en «Comenzar a probar» para iniciar Linebet. ¡Ahora puedes apostar, disfrutar de los juegos y obtener grandes ganancias!"}',
                'value_fr' => '{"0":"Dans la fenêtre qui s’ouvre, installez l’application Linebet. Attendez la fin de l’installation de l’application Linebet puis ouvrez-la. Dans la nouvelle fenêtre, cliquez sur « Suivant » et acceptez de recevoir des notifications. Appuyez sur « Commencer les tests » pour lancer Linebet. Vous pouvez désormais parier, profiter des jeux et remporter de gros gains !"}',
                'value_pt' => '{"0":"Na janela que se abre, instale o aplicativo Linebet. Aguarde a conclusão da instalação do aplicativo Linebet e depois abra-o. Na nova janela, clique em «Avançar» e aceite receber notificações. Toque em «Iniciar Teste» para abrir o Linebet. Agora você pode fazer apostas, aproveitar os jogos e ganhar muito!"}',
                'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
                'order' => 14
            ],
            ['key' => 'linebet',
                'bookmaker_id' => 11,
                'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
                'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"One of the main features of the Linebet mobile app is the ability to place bets in real time. You can follow the progress of the match and adjust your bets at any moment to increase your chances of winning. This gives you full control over the process and makes it even more exciting. The quick and convenient registration and account creation process with Linebet is also worth noting."}',
             'value_es' => '{"0":"Una de las principales características de la aplicación móvil de Linebet es la posibilidad de realizar apuestas en tiempo real. Puedes seguir el desarrollo del partido y ajustar tus apuestas en cualquier momento para aumentar tus posibilidades de ganar. Esto te da un control total sobre el proceso y lo hace aún más emocionante. También cabe destacar el proceso rápido y sencillo de registro y creación de cuenta en Linebet."}',
             'value_fr' => '{"0":"L’une des principales caractéristiques de l’application mobile Linebet est la possibilité de parier en temps réel. Vous pouvez suivre le déroulement du match et ajuster vos paris à tout moment pour augmenter vos chances de gagner. Cela vous donne un contrôle total sur le processus et le rend encore plus captivant. Le processus rapide et pratique d’inscription et de création de compte Linebet mérite également d’être souligné."}',
             'value_pt' => '{"0":"Uma das principais funcionalidades do aplicativo móvel Linebet é a possibilidade de fazer apostas em tempo real. Você pode acompanhar o andamento da partida e ajustar suas apostas a qualquer momento para aumentar suas chances de vitória. Isso lhe dá total controle sobre o processo e o torna ainda mais emocionante. Também vale destacar o processo rápido e conveniente de registro e criação de conta no Linebet."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In addition, Linebet offers its users a variety of bonuses and promotions that allow you to boost your winnings and receive extra rewards. All this makes the app even more attractive and engaging for all fans of gambling."}',
             'value_es' => '{"0":"Además, Linebet ofrece a sus usuarios una variedad de bonos y promociones que permiten aumentar las ganancias y obtener recompensas adicionales. Todo esto hace que la aplicación sea aún más atractiva e interesante para todos los aficionados al juego."}',
             'value_fr' => '{"0":"De plus, Linebet propose à ses utilisateurs une variété de bonus et de promotions qui permettent d’augmenter les gains et de recevoir des récompenses supplémentaires. Tout cela rend l’application encore plus attractive et intéressante pour tous les amateurs de jeux d’argent."}',
             'value_pt' => '{"0":"Além disso, o Linebet oferece aos seus usuários uma variedade de bônus e promoções que permitem aumentar os ganhos e receber recompensas extras. Tudo isso torna o aplicativo ainda mais atraente e interessante para todos os fãs de jogos de azar."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is not just a mobile application, it is a whole world of entertainment and opportunities. Stay at the center of the action, place bets on your favorite teams, and enjoy the thrill with Linebet. Don’t miss your chance to become a real winner!"}',
             'value_es' => '{"0":"Linebet no es solo una aplicación móvil, es todo un mundo de entretenimiento y oportunidades. Mantente en el centro de la acción, apuesta por tus equipos favoritos y disfruta de la emoción junto a Linebet. ¡No pierdas tu oportunidad de convertirte en un verdadero ganador!"}',
             'value_fr' => '{"0":"Linebet n’est pas seulement une application mobile, c’est un véritable univers de divertissement et d’opportunités. Restez au cœur de l’action, pariez sur vos équipes préférées et profitez de l’adrénaline avec Linebet. Ne manquez pas votre chance de devenir un véritable gagnant !"}',
             'value_pt' => '{"0":"O Linebet não é apenas um aplicativo móvel, é um verdadeiro mundo de entretenimento e oportunidades. Fique no centro da ação, aposte nos seus times favoritos e aproveite a emoção junto com o Linebet. Não perca a sua chance de se tornar um verdadeiro vencedor!"}',
             'order' => 17
            ]
        );
    }
}
