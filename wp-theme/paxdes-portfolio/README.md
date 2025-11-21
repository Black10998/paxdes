# PAXDES Portfolio WordPress Theme

Ein professionelles, modernes Portfolio-Theme für **Ahmad Al Khalaf** - Webentwickler, Systemingenieur und Plattform-Architekt.

## Über das Theme

PAXDES Portfolio ist ein minimalistisches, performance-optimiertes WordPress-Theme, das speziell für die Präsentation von Webentwicklungs- und IT-Dienstleistungen entwickelt wurde. Das Theme kombiniert modernes Design mit technischer Exzellenz und Sicherheit.

## Features

### Design & Layout
- ✅ Modernes, minimalistisches Design
- ✅ Vollständig responsive (Mobile, Tablet, Desktop)
- ✅ Smooth Scroll-Animationen (AOS)
- ✅ Dunkles Farbschema mit professionellen Akzenten
- ✅ Shadow-Box-Effekte für moderne Optik

### WordPress-Integration
- ✅ Gutenberg Block Editor kompatibel
- ✅ Elementor Page Builder kompatibel
- ✅ Custom Post Types (Projekte, Leistungen)
- ✅ Taxonomien für Projekt-Kategorien
- ✅ Widget-Bereiche (Sidebar, Footer)
- ✅ Navigationsmenüs (Header, Footer)

### Customizer-Optionen
- ✅ Hero-Bereich (Titel, Name, Beschreibung, Bild)
- ✅ CTA-Button (Text, URL)
- ✅ Kontaktinformationen (E-Mail, Telefon)
- ✅ Social Media Links (GitHub, LinkedIn, Twitter, Xing)
- ✅ Custom Logo Upload
- ✅ Preloader aktivieren/deaktivieren

### Performance & Sicherheit
- ✅ Lokale Assets (keine externen CDNs)
- ✅ Lazy Loading für Bilder
- ✅ Optimierte CSS/JS-Dateien
- ✅ XML-RPC deaktiviert
- ✅ WordPress-Version aus Header entfernt
- ✅ Emoji-Scripts deaktiviert
- ✅ Sauberer, sicherer Code

### SEO & Accessibility
- ✅ Semantisches HTML5
- ✅ Korrekte Heading-Hierarchie
- ✅ Alt-Tags für Bilder
- ✅ ARIA-Labels
- ✅ SEO-Plugin kompatibel (Yoast, RankMath)

## Installation

### Voraussetzungen
- WordPress 6.0 oder höher
- PHP 7.4 oder höher
- MySQL 5.7 oder höher

### Installationsschritte

1. **Theme hochladen**
   - Gehe zu `Design > Themes > Theme hinzufügen`
   - Klicke auf "Theme hochladen"
   - Wähle die `paxdes-portfolio.zip` Datei
   - Klicke auf "Jetzt installieren"

2. **Theme aktivieren**
   - Nach der Installation auf "Aktivieren" klicken

3. **Menüs einrichten**
   - Gehe zu `Design > Menüs`
   - Erstelle ein neues Menü für "Hauptmenü"
   - Erstelle ein weiteres Menü für "Footer-Menü"
   - Weise die Menüs den entsprechenden Positionen zu

4. **Customizer konfigurieren**
   - Gehe zu `Design > Customizer`
   - Konfiguriere Hero-Bereich, Kontaktinformationen und Social Media

5. **Empfohlene Plugins**
   - Contact Form 7 (für Kontaktformular)
   - Advanced Custom Fields (für erweiterte Felder)
   - Yoast SEO oder RankMath (für SEO)

## Verwendung

### Startseite einrichten

1. Erstelle eine neue Seite mit dem Titel "Startseite"
2. Gehe zu `Einstellungen > Lesen`
3. Wähle "Eine statische Seite" und wähle deine Startseite aus

### Projekte hinzufügen

1. Gehe zu `Projekte > Neues Projekt`
2. Füge Titel, Beschreibung und Beitragsbild hinzu
3. Optional: Füge Custom Fields hinzu:
   - `project_url` - URL zum Live-Projekt
   - `project_client` - Kundenname
   - `project_date` - Projektdatum
   - `project_technologies` - Verwendete Technologien

### Leistungen hinzufügen

1. Gehe zu `Leistungen > Neue Leistung`
2. Füge Titel, Beschreibung und Icon/Bild hinzu
3. Die Leistungen werden automatisch auf der Startseite angezeigt

### Customizer-Einstellungen

#### Hero-Bereich
- **Hero Titel**: z.B. "Webentwickler & Systemingenieur"
- **Name**: "Ahmad Al Khalaf"
- **Beschreibung**: Kurze Beschreibung deiner Expertise
- **Hero Bild**: Profilbild oder Avatar

#### Kontakt-Informationen
- **E-Mail**: Deine Kontakt-E-Mail
- **Telefon**: Deine Telefonnummer (optional)
- **Social Media**: URLs zu deinen Profilen

## Anpassungen

### Farben ändern

Bearbeite die Datei `assets/css/style.css` und passe die CSS-Variablen an:

```css
:root {
    --primary-color: #your-color;
    --secondary-color: #your-color;
    --text-color: #your-color;
}
```

### Logo ändern

1. Gehe zu `Design > Customizer > Website-Identität`
2. Lade dein Logo hoch
3. Empfohlene Größe: 400x100px (transparent PNG)

### Schriftarten ändern

Das Theme verwendet standardmäßig die Schriftart "Inter". Um diese zu ändern:

1. Lade die gewünschte Schriftart in `assets/fonts/`
2. Füge die @font-face Regel in `assets/css/style.css` hinzu
3. Aktualisiere die font-family Eigenschaften

## Struktur

```
paxdes-portfolio/
├── assets/
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   ├── aos.css
│   │   ├── iconoir.css
│   │   └── style.css
│   ├── js/
│   │   ├── bootstrap.bundle.min.js
│   │   ├── aos.js
│   │   └── main.js
│   └── images/
│       ├── logo.svg
│       ├── bg1.png
│       └── ...
├── template-parts/
│   ├── content.php
│   ├── content-none.php
│   └── content-search.php
├── 404.php
├── archive.php
├── archive-project.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── search.php
├── searchform.php
├── sidebar.php
├── single.php
├── single-project.php
├── style.css
└── README.md
```

## Support & Dokumentation

### Häufige Fragen

**Q: Wie ändere ich die Texte auf der Startseite?**
A: Gehe zu `Design > Customizer > Hero-Bereich` und bearbeite die Felder.

**Q: Wie füge ich ein Kontaktformular hinzu?**
A: Installiere Contact Form 7 und füge den Shortcode auf der Kontaktseite ein.

**Q: Kann ich das Theme mit Elementor verwenden?**
A: Ja, das Theme ist vollständig mit Elementor kompatibel.

**Q: Wie optimiere ich die Performance?**
A: Verwende ein Caching-Plugin wie WP Rocket oder W3 Total Cache.

## Changelog

### Version 1.0.0 (2025)
- Initiales Release
- Vollständige WordPress-Integration
- Custom Post Types (Projekte, Leistungen)
- Customizer-Optionen
- Responsive Design
- Performance-Optimierungen
- Sicherheits-Hardening

## Credits

- **Design & Entwicklung**: Ahmad Al Khalaf
- **Bootstrap**: v5.3
- **AOS (Animate On Scroll)**: v2.3
- **Iconoir**: Icon-Set

## Lizenz

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

---

**Entwickelt mit ❤️ von Ahmad Al Khalaf**
Website: https://paxdes.com
