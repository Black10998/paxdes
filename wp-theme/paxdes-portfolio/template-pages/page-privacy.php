<?php
/**
 * Template Name: Datenschutz
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="privacy-page-content">
    <div class="container">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="page-hero shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="hero-content text-center">
                        <h1 class="page-title">Datenschutzerklärung</h1>
                        <p class="lead">Transparenz und Sicherheit Ihrer Daten</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Privacy Content -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="privacy-content shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    
                    <div class="content-wrapper">
                        <p class="intro-text">Der Schutz Ihrer persönlichen Daten ist mir ein besonderes Anliegen. Diese Datenschutzerklärung informiert Sie darüber, welche Daten bei Ihrem Besuch auf dieser Website erhoben werden und wie diese verwendet werden.</p>

                        <h2>1. Verantwortlicher</h2>
                        <p>Verantwortlich für die Datenverarbeitung auf dieser Website ist:</p>
                        <div class="contact-box">
                            <p><strong>Ahmad Al Khalaf</strong><br>
                            PAXDES<br>
                            E-Mail: <?php echo esc_html( paxdes_get_option( 'paxdes_contact_email', 'info@paxdes.com' ) ); ?></p>
                        </div>

                        <h2>2. Erhebung und Speicherung personenbezogener Daten</h2>
                        
                        <h3>2.1 Beim Besuch der Website</h3>
                        <p>Beim Aufrufen dieser Website werden durch den auf Ihrem Endgerät zum Einsatz kommenden Browser automatisch Informationen an den Server dieser Website gesendet. Diese Informationen werden temporär in einem sogenannten Logfile gespeichert. Folgende Informationen werden dabei ohne Ihr Zutun erfasst und bis zur automatisierten Löschung gespeichert:</p>
                        <ul>
                            <li>IP-Adresse des anfragenden Rechners</li>
                            <li>Datum und Uhrzeit des Zugriffs</li>
                            <li>Name und URL der abgerufenen Datei</li>
                            <li>Website, von der aus der Zugriff erfolgt (Referrer-URL)</li>
                            <li>Verwendeter Browser und ggf. das Betriebssystem Ihres Rechners sowie der Name Ihres Access-Providers</li>
                        </ul>
                        <p>Die genannten Daten werden durch mich zu folgenden Zwecken verarbeitet:</p>
                        <ul>
                            <li>Gewährleistung eines reibungslosen Verbindungsaufbaus der Website</li>
                            <li>Gewährleistung einer komfortablen Nutzung der Website</li>
                            <li>Auswertung der Systemsicherheit und -stabilität</li>
                            <li>Zu weiteren administrativen Zwecken</li>
                        </ul>
                        <p>Die Rechtsgrundlage für die Datenverarbeitung ist Art. 6 Abs. 1 S. 1 lit. f DSGVO. Mein berechtigtes Interesse folgt aus oben aufgelisteten Zwecken zur Datenerhebung.</p>

                        <h3>2.2 Bei Nutzung des Kontaktformulars</h3>
                        <p>Bei Fragen jeglicher Art biete ich Ihnen die Möglichkeit, mit mir über ein auf der Website bereitgestelltes Formular Kontakt aufzunehmen. Dabei ist die Angabe einer gültigen E-Mail-Adresse erforderlich, damit ich weiß, von wem die Anfrage stammt und um diese beantworten zu können. Weitere Angaben können freiwillig getätigt werden.</p>
                        <p>Die Datenverarbeitung zum Zwecke der Kontaktaufnahme mit mir erfolgt nach Art. 6 Abs. 1 S. 1 lit. a DSGVO auf Grundlage Ihrer freiwillig erteilten Einwilligung.</p>
                        <p>Die für die Benutzung des Kontaktformulars von mir erhobenen personenbezogenen Daten werden nach Erledigung der von Ihnen gestellten Anfrage automatisch gelöscht.</p>

                        <h2>3. Weitergabe von Daten</h2>
                        <p>Eine Übermittlung Ihrer persönlichen Daten an Dritte zu anderen als den im Folgenden aufgeführten Zwecken findet nicht statt.</p>
                        <p>Ich gebe Ihre persönlichen Daten nur an Dritte weiter, wenn:</p>
                        <ul>
                            <li>Sie Ihre nach Art. 6 Abs. 1 S. 1 lit. a DSGVO ausdrückliche Einwilligung dazu erteilt haben</li>
                            <li>die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. f DSGVO zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen erforderlich ist und kein Grund zur Annahme besteht, dass Sie ein überwiegendes schutzwürdiges Interesse an der Nichtweitergabe Ihrer Daten haben</li>
                            <li>für den Fall, dass für die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. c DSGVO eine gesetzliche Verpflichtung besteht</li>
                            <li>dies gesetzlich zulässig und nach Art. 6 Abs. 1 S. 1 lit. b DSGVO für die Abwicklung von Vertragsverhältnissen mit Ihnen erforderlich ist</li>
                        </ul>

                        <h2>4. Cookies</h2>
                        <p>Diese Website verwendet Cookies. Dabei handelt es sich um kleine Textdateien, die auf Ihrem Endgerät gespeichert werden. Ihr Browser greift auf diese Dateien zu. Durch den Einsatz von Cookies erhöht sich die Benutzerfreundlichkeit und Sicherheit dieser Website.</p>
                        <p>Gängige Browser bieten die Einstellungsoption, Cookies nicht zuzulassen. Es ist nicht gewährleistet, dass Sie auf alle Funktionen dieser Website ohne Einschränkungen zugreifen können, wenn Sie entsprechende Einstellungen vornehmen.</p>

                        <h2>5. SSL-Verschlüsselung</h2>
                        <p>Um die Sicherheit Ihrer Daten bei der Übertragung zu schützen, verwende ich dem aktuellen Stand der Technik entsprechende Verschlüsselungsverfahren (z. B. SSL) über HTTPS.</p>

                        <h2>6. Ihre Rechte</h2>
                        <p>Sie haben gegenüber mir folgende Rechte hinsichtlich der Sie betreffenden personenbezogenen Daten:</p>
                        <ul>
                            <li>Recht auf Auskunft</li>
                            <li>Recht auf Berichtigung oder Löschung</li>
                            <li>Recht auf Einschränkung der Verarbeitung</li>
                            <li>Recht auf Widerspruch gegen die Verarbeitung</li>
                            <li>Recht auf Datenübertragbarkeit</li>
                        </ul>
                        <p>Sie haben zudem das Recht, sich bei einer Datenschutz-Aufsichtsbehörde über die Verarbeitung Ihrer personenbezogenen Daten durch mich zu beschweren.</p>

                        <h2>7. Widerrufsrecht</h2>
                        <p>Sofern Ihre personenbezogenen Daten auf Grundlage von berechtigten Interessen gemäß Art. 6 Abs. 1 S. 1 lit. f DSGVO verarbeitet werden, haben Sie das Recht, gemäß Art. 21 DSGVO Widerspruch gegen die Verarbeitung Ihrer personenbezogenen Daten einzulegen, soweit dafür Gründe vorliegen, die sich aus Ihrer besonderen Situation ergeben.</p>
                        <p>Möchten Sie von Ihrem Widerrufs- oder Widerspruchsrecht Gebrauch machen, genügt eine E-Mail an: <?php echo esc_html( paxdes_get_option( 'paxdes_contact_email', 'info@paxdes.com' ) ); ?></p>

                        <h2>8. Aktualität und Änderung dieser Datenschutzerklärung</h2>
                        <p>Diese Datenschutzerklärung ist aktuell gültig und hat den Stand: <?php echo date( 'F Y' ); ?>.</p>
                        <p>Durch die Weiterentwicklung dieser Website und Angebote darüber oder aufgrund geänderter gesetzlicher beziehungsweise behördlicher Vorgaben kann es notwendig werden, diese Datenschutzerklärung zu ändern. Die jeweils aktuelle Datenschutzerklärung kann jederzeit auf dieser Website von Ihnen abgerufen und ausgedruckt werden.</p>

                        <div class="contact-cta">
                            <h3>Fragen zum Datenschutz?</h3>
                            <p>Bei Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten, bei Auskünften, Berichtigung, Sperrung oder Löschung von Daten sowie Widerruf erteilter Einwilligungen wenden Sie sich bitte an:</p>
                            <a href="mailto:<?php echo esc_attr( paxdes_get_option( 'paxdes_contact_email', 'info@paxdes.com' ) ); ?>" class="theme-btn">
                                <i class="iconoir-mail"></i>
                                Kontakt aufnehmen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
