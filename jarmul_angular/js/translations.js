/**
 * INSPINIA - Responsive Admin Theme
 *
 */
function config($translateProvider) {

    $translateProvider
        .translations('en', {

            // Define all menu elements
            DASHBOARD: 'Dashboard',
            GRAPHS: 'Graphs',
            MAILBOX: 'Mailbox',
            WIDGETS: 'Widgets',
            METRICS: 'Metrics',
            FORMS: 'Forms',
            APPVIEWS: 'App views',
            OTHERPAGES: 'Other pages',
            UIELEMENTS: 'UI elements',
            MISCELLANEOUS: 'Miscellaneous',
            GRIDOPTIONS: 'Grid options',
            TABLES: 'Tables',
            COMMERCE: 'E-commerce',
            GALLERY: 'Gallery',
            MENULEVELS: 'Menu levels',
            ANIMATIONS: 'Animations',
            LANDING: 'Landing page',
            LAYOUTS: 'Layouts',

            // Define some custom text
            WELCOME: 'Welcome',
            MESSAGEINFO: 'You have 42 messages and 6 notifications.',
            SEARCH: 'Search for something...',
            DEMO: 'Internationalization (sometimes shortened to \"I18N , meaning \"I - eighteen letters -N\") is the process of planning and implementing products and services so that they can easily be adapted to specific local languages and cultures, a process called localization . The internationalization process is sometimes called translation or localization enablement .'

        })
        .translations('es', {

            // Define all menu elements
            DASHBOARD: 'Salpicadero',
            GRAPHS: 'Gráficos',
            MAILBOX: 'El correo',
            WIDGETS: 'Widgets',
            METRICS: 'Métrica',
            FORMS: 'Formas',
            APPVIEWS: 'Vistas app',
            OTHERPAGES: 'Otras páginas',
            UIELEMENTS: 'UI elements',
            MISCELLANEOUS: 'Misceláneo',
            GRIDOPTIONS: 'Cuadrícula',
            TABLES: 'Tablas',
            COMMERCE: 'E-comercio',
            GALLERY: 'Galería',
            MENULEVELS: 'Niveles de menú',
            ANIMATIONS: 'Animaciones',
            LANDING: 'Página de destino',
            LAYOUTS: 'Esquemas',

            // Define some custom text
            WELCOME: 'Bienvenido',
            MESSAGEINFO: 'Usted tiene 42 mensajes y 6 notificaciones.',
            SEARCH: 'Busca algo ...',
            DEMO: 'Internacionalización (a veces abreviado como \"I18N, que significa\" I - dieciocho letras N \") es el proceso de planificación e implementación de productos y servicios de manera que se pueden adaptar fácilmente a las lenguas y culturas locales específicas, un proceso llamado localización El proceso de internacionalización. a veces se llama la traducción o la habilitación de localización.'
        })

        .translations('idn', {

            // Define all menu elements
            DASHBOARD: 'Beranda',
            GRAPHS: 'Grafik',
            MAILBOX: 'Kotak Surat',
            WIDGETS: 'Hiasan',
            METRICS: 'Metrik',
            FORMS: 'Formulir',
            APPVIEWS: 'Model Aplikasi',
            OTHERPAGES: 'Halaman Lain',
            UIELEMENTS: 'Element Pengguna',
            MISCELLANEOUS: 'Lain-lain',
            GRIDOPTIONS: 'Pembagian Layar',
            TABLES: 'Tabel',
            COMMERCE: 'Komersial',
            GALLERY: 'Galeri',
            MENULEVELS: 'Tingkatan Menu',
            ANIMATIONS: 'Animasi',
            LANDING: 'Halaman Single',
            LAYOUTS: 'Tata Letak',

            // Define some custom text
            WELCOME: 'Selamat Datang',
            MESSAGEINFO: 'Kamu memiliki 42 pesan dan 6 notifikasi.',
            SEARCH: 'Mencari sesuatu...',
            DEMO: 'Internasionalisasi (terkadang disingkat menjadi \"I18N , artiunya \"I - delapan huruf -N\") merupakan proses untuk persiapan dan implementasi produk dan servis agar bisa menyesuaikan budaya.'
        });

    $translateProvider.preferredLanguage('en');

}

angular
    .module('inspinia')
    .config(config)
