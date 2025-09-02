<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
             'value_en' => '{"0":"MelBet Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de MelBet"}',
             'value_fr' => '{"0":"Revue de l\'application mobile MelBet"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da MelBet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is an international bookmaker that offers a wide range of services in online betting and gambling. Its mobile applications for Android and iOS allow users to conveniently place bets, play in the casino, and use other services without needing to be at a computer."}',
             'value_es' => '{"0":"MelBet es una casa de apuestas internacional que ofrece una amplia gama de servicios en apuestas en línea y juegos de azar. Sus aplicaciones móviles para Android e iOS permiten a los usuarios realizar apuestas, jugar en el casino y utilizar otros servicios de manera cómoda sin necesidad de estar frente a un ordenador."}',
             'value_fr' => '{"0":"MelBet est un bookmaker international qui propose un large éventail de services dans le domaine des paris en ligne et des jeux d’argent. Ses applications mobiles pour Android et iOS permettent aux utilisateurs de placer des paris, de jouer au casino et d’utiliser d’autres services sans avoir besoin d’être devant un ordinateur."}',
             'value_pt' => '{"0":"MelBet é uma casa de apostas internacional que oferece uma ampla gama de serviços em apostas online e jogos de azar. Seus aplicativos móveis para Android e iOS permitem que os usuários façam apostas, joguem no cassino e usem outros serviços de forma conveniente, sem precisar estar em um computador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This review will help you get acquainted with the features and capabilities of the MelBet mobile apps. We will also explain how to install the apps on different devices."}',
             'value_es' => '{"0":"Esta reseña le ayudará a familiarizarse con las funciones y características de las aplicaciones móviles de MelBet. También explicaremos cómo instalar las aplicaciones en diferentes dispositivos."}',
             'value_fr' => '{"0":"Cette revue vous aidera à vous familiariser avec les fonctionnalités et les particularités des applications mobiles MelBet. Nous expliquerons également comment installer les applications sur différents appareils."}',
             'value_pt' => '{"0":"Esta análise ajudará você a conhecer os recursos e as funcionalidades dos aplicativos móveis MelBet. Também explicaremos como instalar os aplicativos em diferentes dispositivos."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place sports bets and play in the casino",
                                 "1":"Live streaming available",
                                 "2":"Ability to receive cashback and bonuses",
                                 "3":"User-friendly interface",
                                 "4":"Support for multiple languages"},
                             "1":
                                {"0":"No Android app available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de realizar apuestas deportivas y jugar en el casino",
                                 "1":"Transmisión en vivo disponible",
                                 "2":"Posibilidad de recibir cashback y bonos",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Soporte para varios idiomas"},
                             "1":
                                {"0":"No hay aplicación de Android disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de parier sur les sports et de jouer au casino",
                                 "1":"Streaming en direct disponible",
                                 "2":"Possibilité de recevoir des cashback et des bonus",
                                 "3":"Interface conviviale",
                                 "4":"Support de plusieurs langues"},
                             "1":
                                {"0":"Aucune application Android disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas esportivas e jogar no cassino",
                                 "1":"Transmissão ao vivo disponível",
                                 "2":"Possibilidade de receber cashback e bônus",
                                 "3":"Interface amigável",
                                 "4":"Suporte a vários idiomas"},
                             "1":
                                {"0":"Nenhum aplicativo Android disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for Android"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para Android"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour Android"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Although the Android mobile app is not available on Google Play, you can still download it from the official website. Below we provide instructions on how to do this."}',
             'value_es' => '{"0":"Aunque la aplicación móvil para Android no está disponible en Google Play, aún puede descargarla desde el sitio web oficial. A continuación, proporcionamos instrucciones sobre cómo hacerlo."}',
             'value_fr' => '{"0":"Bien que l’application mobile Android ne soit pas disponible sur Google Play, vous pouvez toujours la télécharger depuis le site officiel. Voici les instructions pour le faire."}',
             'value_pt' => '{"0":"Embora o aplicativo móvel para Android não esteja disponível no Google Play, você ainda pode baixá-lo no site oficial. Abaixo fornecemos instruções sobre como fazer isso."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To install the MelBet mobile app on your Android device, go to the official MelBet website using your phone’s browser. In the «Mobile App» section, select to download the Android app. Before downloading the APK file, allow installation of apps from unknown sources in your phone’s settings."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil MelBet en su dispositivo Android, vaya al sitio web oficial de MelBet a través del navegador de su teléfono. En la sección «Aplicación Móvil», seleccione descargar la aplicación para Android. Antes de descargar el archivo APK, permita la instalación de aplicaciones desde fuentes desconocidas en la configuración de su teléfono."}',
             'value_fr' => '{"0":"Pour installer l’application mobile MelBet sur votre appareil Android, accédez au site officiel de MelBet via le navigateur de votre téléphone. Dans la section «Application mobile», choisissez de télécharger l’application Android. Avant de télécharger le fichier APK, autorisez l’installation d’applications provenant de sources inconnues dans les paramètres de votre téléphone."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel MelBet no seu dispositivo Android, acesse o site oficial da MelBet pelo navegador do seu telefone. Na seção «Aplicativo Móvel», selecione baixar o aplicativo para Android. Antes de baixar o arquivo APK, permita a instalação de aplicativos de fontes desconhecidas nas configurações do seu telefone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"After downloading the file, open it and confirm the installation. Once the process is complete, you will be able to launch the app and log into your account or register a new one."}',
             'value_es' => '{"0":"Después de descargar el archivo, ábralo y confirme la instalación. Una vez completado el proceso, podrá iniciar la aplicación e iniciar sesión en su cuenta o registrar una nueva."}',
             'value_fr' => '{"0":"Après avoir téléchargé le fichier, ouvrez-le et confirmez l’installation. Une fois le processus terminé, vous pourrez lancer l’application et vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Após baixar o arquivo, abra-o e confirme a instalação. Depois de concluir o processo, você poderá abrir o aplicativo e entrar na sua conta ou registrar uma nova."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Installing the mobile app for iOS"}',
                'value_es' => '{"0":"Instalación de la aplicación móvil para iOS"}',
                'value_fr' => '{"0":"Installation de l’application mobile pour iOS"}',
                'value_pt' => '{"0":"Instalação do aplicativo móvel para iOS"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, the process of installing the MelBet app is simpler."}',
             'value_es' => '{"0":"Para los usuarios de iOS, el proceso de instalación de la aplicación MelBet es más sencillo."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, le processus d’installation de l’application MelBet est plus simple."}',
             'value_pt' => '{"0":"Para usuários de iOS, o processo de instalação do aplicativo MelBet é mais simples."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Open the App Store on your device and type «MelBet» in the search bar. Find the official MelBet app and tap «Download»."}',
             'value_es' => '{"0":"Abra la App Store en su dispositivo y escriba «MelBet» en la barra de búsqueda. Encuentre la aplicación oficial de MelBet y toque «Descargar»."}',
             'value_fr' => '{"0":"Ouvrez l’App Store sur votre appareil et tapez «MelBet» dans la barre de recherche. Trouvez l’application officielle MelBet et appuyez sur «Télécharger»."}',
             'value_pt' => '{"0":"Abra a App Store no seu dispositivo e digite «MelBet» na barra de pesquisa. Encontre o aplicativo oficial da MelBet e toque em «Baixar»."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Once the download is complete, the app will automatically install on your device. Launch the app, log into your account, or create a new one to start using it."}',
             'value_es' => '{"0":"Una vez completada la descarga, la aplicación se instalará automáticamente en su dispositivo. Abra la aplicación, inicie sesión en su cuenta o cree una nueva para comenzar a usarla."}',
             'value_fr' => '{"0":"Une fois le téléchargement terminé, l’application s’installera automatiquement sur votre appareil. Lancez l’application, connectez-vous à votre compte ou créez-en un nouveau pour commencer à l’utiliser."}',
             'value_pt' => '{"0":"Após o download ser concluído, o aplicativo será instalado automaticamente no seu dispositivo. Abra o aplicativo, entre na sua conta ou crie uma nova para começar a usar."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet mobile app provides users with a full range of features necessary for convenient and efficient use of the platform. Through the app, you can register and log into your account, place sports bets in pre-match and live modes on various disciplines, including football, tennis, basketball, hockey, and esports. Casino games, slots, table games, roulette, blackjack, and poker are also available, with the option to play for real money or use bonuses and free spins."}',
             'value_es' => '{"0":"La aplicación móvil MelBet ofrece a los usuarios una gama completa de funciones necesarias para usar la plataforma de manera cómoda y eficiente. A través de la app, puede registrarse e iniciar sesión en su cuenta, realizar apuestas deportivas en modos pre-partido y en vivo en diversas disciplinas, incluyendo fútbol, tenis, baloncesto, hockey y esports. También están disponibles juegos de casino, tragamonedas, juegos de mesa, ruleta, blackjack y póker, con la opción de jugar con dinero real o usar bonos y giros gratis."}',
             'value_fr' => '{"0":"L’application mobile MelBet offre aux utilisateurs un ensemble complet de fonctionnalités nécessaires pour utiliser la plateforme de manière pratique et efficace. Via l’application, vous pouvez vous inscrire et vous connecter à votre compte, placer des paris sportifs en mode pré-match et en direct sur diverses disciplines, y compris le football, le tennis, le basketball, le hockey et l’esport. Les jeux de casino, les machines à sous, les jeux de table, la roulette, le blackjack et le poker sont également disponibles, avec la possibilité de jouer avec de l’argent réel ou d’utiliser des bonus et des tours gratuits."}',
             'value_pt' => '{"0":"O aplicativo móvel MelBet oferece aos usuários uma gama completa de recursos necessários para o uso conveniente e eficiente da plataforma. Através do aplicativo, você pode se registrar e entrar em sua conta, fazer apostas esportivas nos modos pré-jogo e ao vivo em diversas modalidades, incluindo futebol, tênis, basquete, hóquei e esports. Jogos de cassino, slots, jogos de mesa, roleta, blackjack e pôquer também estão disponíveis, com a opção de jogar com dinheiro real ou utilizar bônus e rodadas grátis."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Users can watch live sports broadcasts and synchronize them with their bets, which is especially convenient for live betting. The app allows account deposits and withdrawals using various methods, including bank cards, e-wallets, cryptocurrencies, and mobile payments. The app supports a multilingual interface and provides 24/7 support via chat, email, or phone."}',
             'value_es' => '{"0":"Los usuarios pueden ver transmisiones deportivas en vivo y sincronizarlas con sus apuestas, lo que resulta especialmente útil para las apuestas en vivo. La aplicación permite depósitos y retiros a través de diversos métodos, incluyendo tarjetas bancarias, e-wallets, criptomonedas y pagos móviles. La app soporta un interfaz multilingüe y ofrece atención al cliente 24/7 mediante chat, correo electrónico o teléfono."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent regarder les diffusions sportives en direct et les synchroniser avec leurs paris, ce qui est particulièrement pratique pour les paris en direct. L’application permet de déposer et de retirer des fonds via différents moyens, y compris les cartes bancaires, les portefeuilles électroniques, les cryptomonnaies et les paiements mobiles. L’application prend en charge une interface multilingue et offre une assistance 24/7 via chat, email ou téléphone."}',
             'value_pt' => '{"0":"Os usuários podem assistir a transmissões esportivas ao vivo e sincronizá-las com suas apostas, o que é especialmente conveniente para apostas ao vivo. O aplicativo permite depósitos e saques usando diversos métodos, incluindo cartões bancários, carteiras digitais, criptomoedas e pagamentos móveis. O aplicativo suporta interface multilíngue e oferece suporte 24/7 via chat, e-mail ou telefone."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to these features, the MelBet mobile app offers users a convenient and functional tool for participating in online betting and gambling."}',
             'value_es' => '{"0":"Gracias a estas características, la aplicación móvil MelBet brinda a los usuarios una herramienta conveniente y funcional para participar en apuestas y juegos de azar en línea."}',
             'value_fr' => '{"0":"Grâce à ces fonctionnalités, l’application mobile MelBet fournit aux utilisateurs un outil pratique et fonctionnel pour participer aux paris en ligne et aux jeux d’argent."}',
             'value_pt' => '{"0":"Graças a esses recursos, o aplicativo móvel MelBet oferece aos usuários uma ferramenta conveniente e funcional para participar de apostas online e jogos de azar."}',
             'order' => 18
            ]
        );
    }
}
