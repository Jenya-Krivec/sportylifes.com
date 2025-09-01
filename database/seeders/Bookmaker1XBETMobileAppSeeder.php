<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"1XBET Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Revue de l\'application mobile 1XBET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da 1XBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is one of the largest online bookmakers in the world, offering a wide range of opportunities for sports betting, casino games, esports, and other events. The 1XBET mobile apps for Android and iOS allow users to conveniently place bets, watch live streams, and manage their accounts without needing to use a computer."}',
             'value_es' => '{"0":"1XBET es uno de los mayores operadores de apuestas en línea del mundo, que ofrece una amplia gama de oportunidades para apuestas deportivas, juegos de casino, deportes electrónicos y otros eventos. Las aplicaciones móviles de 1XBET para Android e iOS permiten a los usuarios realizar apuestas, ver transmisiones en vivo y gestionar sus cuentas de manera conveniente sin necesidad de usar un ordenador."}',
             'value_fr' => '{"0":"1XBET est l’un des plus grands bookmakers en ligne au monde, offrant un large éventail d’opportunités pour les paris sportifs, les jeux de casino, les esports et d’autres événements. Les applications mobiles 1XBET pour Android et iOS permettent aux utilisateurs de placer des paris, de regarder des diffusions en direct et de gérer leurs comptes facilement, sans avoir besoin d’un ordinateur."}',
             'value_pt' => '{"0":"1XBET é um dos maiores bookmakers online do mundo, oferecendo uma ampla gama de oportunidades para apostas esportivas, jogos de cassino, esports e outros eventos. Os aplicativos móveis 1XBET para Android e iOS permitem que os usuários façam apostas, assistam a transmissões ao vivo e gerenciem suas contas de forma conveniente, sem precisar usar um computador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Convenient navigation",
                                 "2":"Live streams and statistics",
                                 "3":"Various deposit and withdrawal methods",
                                 "4":"Bonuses and promotions"},
                             "1":
                                {"0":"Possible technical glitches",
                                 "1":"Android app not available in the Play Market"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Navegación conveniente",
                                 "2":"Transmisiones en vivo y estadísticas",
                                 "3":"Diversos métodos de depósito y retiro",
                                 "4":"Bonos y promociones"},
                             "1":
                                {"0":"Posibles fallos técnicos",
                                 "1":"Aplicación de Android no disponible en Play Market"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Navigation pratique",
                                 "2":"Diffusions en direct et statistiques",
                                 "3":"Différentes méthodes de dépôt et de retrait",
                                 "4":"Bonus et promotions"},
                             "1":
                                {"0":"Possibles problèmes techniques",
                                 "1":"Application Android non disponible sur le Play Market"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Navegação conveniente",
                                 "2":"Transmissões ao vivo e estatísticas",
                                 "3":"Diversos métodos de depósito e saque",
                                 "4":"Bônus e promoções"},
                             "1":
                                {"0":"Possíveis falhas técnicas",
                                 "1":"Aplicativo Android não disponível na Play Market"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Installing the mobile app for Android"}',
             'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
             'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
             'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, the Android mobile app is not available in the Play Market. However, there is no need to worry, as the app can be downloaded from the official website."}',
             'value_es' => '{"0":"Desafortunadamente, la aplicación móvil para Android no está disponible en Play Market. Sin embargo, no hay por qué preocuparse, ya que la aplicación se puede descargar desde el sitio web oficial."}',
             'value_fr' => '{"0":"Malheureusement, l’application mobile Android n’est pas disponible sur le Play Market. Cependant, il n’y a pas lieu de s’inquiéter, car l’application peut être téléchargée depuis le site officiel."}',
             'value_pt' => '{"0":"Infelizmente, o aplicativo móvel para Android não está disponível no Play Market. No entanto, não há motivo para preocupação, pois o aplicativo pode ser baixado no site oficial."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1XBET mobile app on your Android device, there is a link to the mobile app download section at the bottom of the page. Follow this link and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil 1XBET en tu dispositivo Android, en la parte inferior de la página encontrarás un enlace a la sección de descarga de aplicaciones móviles. Sigue este enlace y descarga el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application mobile 1XBET sur votre appareil Android, un lien vers la section de téléchargement des applications mobiles se trouve en bas de la page. Cliquez sur ce lien et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel 1XBET em seu dispositivo Android, na parte inferior da página há um link para a seção de download de aplicativos móveis. Clique neste link e baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, make sure that your device settings allow installations from unknown sources. After downloading, open the file and follow the on-screen instructions to complete the installation."}',
             'value_es' => '{"0":"Antes de la instalación, asegúrate de que la configuración de tu dispositivo permita la instalación de aplicaciones de fuentes desconocidas. Después de descargar, abre el archivo y sigue las instrucciones en pantalla para completar la instalación."}',
             'value_fr' => '{"0":"Avant l’installation, assurez-vous que les paramètres de votre appareil permettent l’installation d’applications provenant de sources inconnues. Après le téléchargement, ouvrez le fichier et suivez les instructions à l’écran pour terminer l’installation."}',
             'value_pt' => '{"0":"Antes da instalação, certifique-se de que as configurações do dispositivo permitem a instalação de aplicativos de fontes desconhecidas. Após o download, abra o arquivo e siga as instruções na tela para concluir a instalação."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Installing the mobile app for iOS"}',
             'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
             'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
             'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1XBET app on your iOS device, open the App Store and search for «1XBET». Tap «Download» and enter your Apple ID if required. Once the download is complete, open the app and log in to your account or register if you are a new user."}',
             'value_es' => '{"0":"Para instalar la aplicación 1XBET en tu dispositivo iOS, abre el App Store y busca «1XBET». Pulsa «Descargar» e introduce tu Apple ID si es necesario. Una vez completada la descarga, abre la aplicación e inicia sesión en tu cuenta o regístrate si eres un nuevo usuario."}',
             'value_fr' => '{"0":"Pour installer l’application 1XBET sur votre appareil iOS, ouvrez l’App Store et recherchez «1XBET». Appuyez sur «Télécharger» et saisissez votre identifiant Apple si nécessaire. Une fois le téléchargement terminé, ouvrez l’application et connectez-vous à votre compte ou inscrivez-vous si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"Para instalar o aplicativo 1XBET em seu dispositivo iOS, abra a App Store e procure por «1XBET». Toque em «Baixar» e insira seu Apple ID, se necessário. Após o download ser concluído, abra o aplicativo e faça login na sua conta ou registre-se se você for um novo usuário."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET mobile app allows users to register and log in using a phone number, email, or social networks. It provides the ability to deposit and withdraw funds through various payment systems, place bets on a wide range of sports events including football, basketball, and tennis."}',
             'value_es' => '{"0":"La aplicación móvil 1XBET permite a los usuarios registrarse e iniciar sesión utilizando un número de teléfono, correo electrónico o redes sociales. Ofrece la posibilidad de depositar y retirar fondos a través de diversos sistemas de pago, realizar apuestas en una amplia gama de eventos deportivos, incluidos fútbol, baloncesto y tenis."}',
             'value_fr' => '{"0":"L’application mobile 1XBET permet aux utilisateurs de s’inscrire et de se connecter via un numéro de téléphone, un e-mail ou les réseaux sociaux. Elle offre la possibilité de déposer et retirer des fonds via divers systèmes de paiement, et de parier sur une large gamme d’événements sportifs, y compris le football, le basket-ball et le tennis."}',
             'value_pt' => '{"0":"O aplicativo móvel 1XBET permite que os usuários se registrem e façam login usando um número de telefone, e-mail ou redes sociais. Ele oferece a possibilidade de depositar e sacar fundos por meio de diversos sistemas de pagamento, e fazer apostas em uma ampla gama de eventos esportivos, incluindo futebol, basquete e tênis."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Users can watch live match streams, play casino games and slots, roulette, blackjack, and other games. The app offers 24/7 support via chat, email, or phone, making it a convenient tool for betting and gambling."}',
             'value_es' => '{"0":"Los usuarios pueden ver transmisiones en vivo de los partidos, jugar a juegos de casino y tragamonedas, ruleta, blackjack y otros juegos. La aplicación ofrece soporte 24/7 a través de chat, correo electrónico o teléfono, lo que la convierte en una herramienta conveniente para apuestas y juegos de azar."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent regarder des diffusions en direct des matchs, jouer à des jeux de casino et des machines à sous, à la roulette, au blackjack et à d’autres jeux. L’application propose un support 24h/24 et 7j/7 via chat, e-mail ou téléphone, ce qui en fait un outil pratique pour les paris et les jeux d’argent."}',
             'value_pt' => '{"0":"Os usuários podem assistir a transmissões de partidas ao vivo, jogar em cassinos e slots, roleta, blackjack e outros jogos. O aplicativo oferece suporte 24/7 via chat, e-mail ou telefone, tornando-o uma ferramenta conveniente para apostas e jogos de azar."}',
             'order' => 14
            ]
        );
    }
}
