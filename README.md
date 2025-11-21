# PAXDES - Ahmad Al Khalaf Portfolio

Professionelles WordPress Portfolio-Theme für Webentwickler, Systemingenieur und Plattform-Architekt.

![WordPress](https://img.shields.io/badge/WordPress-6.0+-blue.svg)
![PHP](https://img.shields.io/badge/PHP-7.4+-purple.svg)
![License](https://img.shields.io/badge/License-GPL%20v2-green.svg)
![Version](https://img.shields.io/badge/Version-1.0.0-orange.svg)

---

## 🎯 Über das Projekt

PAXDES Portfolio ist ein modernes, minimalistisches WordPress-Theme, das speziell für **Ahmad Al Khalaf** entwickelt wurde. Das Theme präsentiert professionell Webentwicklungs- und IT-Dienstleistungen mit Fokus auf Performance, Sicherheit und Benutzerfreundlichkeit.

### Positionierung

**Ahmad Al Khalaf** ist:
- 🚀 Webentwickler & Systemingenieur
- 🏗️ Plattform-Architekt (Web-Plattformen, SaaS)
- 🔒 IT-Sicherheitsexperte
- ⚡ Performance-Optimierungs-Spezialist
- 🎨 UI/UX Designer

---

## ✨ Features

### WordPress-Integration
- ✅ Custom Post Types (Projekte, Leistungen)
- ✅ Taxonomien für Projekt-Kategorien
- ✅ Navigationsmenüs (Header, Footer)
- ✅ Widget-Bereiche (Sidebar, Footer)
- ✅ Customizer-Optionen (Hero, Kontakt, Social Media)
- ✅ Custom Logo Support

### Design & UX
- ✅ Modernes, minimalistisches Design
- ✅ Vollständig responsive (Mobile, Tablet, Desktop)
- ✅ Smooth Scroll-Animationen (AOS)
- ✅ Shadow-Box-Effekte
- ✅ Preloader mit Animation
- ✅ Dunkles Farbschema

### Performance & Sicherheit
- ✅ Lokale Assets (keine externen CDNs)
- ✅ Lazy Loading für Bilder
- ✅ Optimierte CSS/JS-Dateien
- ✅ XML-RPC deaktiviert
- ✅ WordPress-Version aus Header entfernt
- ✅ Emoji-Scripts deaktiviert

### SEO & Accessibility
- ✅ Semantisches HTML5
- ✅ Korrekte Heading-Hierarchie
- ✅ Alt-Tags und ARIA-Labels
- ✅ SEO-Plugin kompatibel (Yoast, RankMath)

### Kompatibilität
- ✅ Gutenberg Block Editor
- ✅ Elementor Page Builder
- ✅ Contact Form 7
- ✅ Advanced Custom Fields (ACF)
- ✅ WooCommerce-ready

---

## 📦 Installation

### Voraussetzungen
- WordPress 6.0 oder höher
- PHP 7.4 oder höher
- MySQL 5.7 oder höher

### Schnellstart

1. **Theme herunterladen**
   ```bash
   # ZIP-Datei aus dem Repository
   wp-theme/paxdes-portfolio.zip
   ```

2. **In WordPress installieren**
   - Dashboard → Design → Themes → Theme hinzufügen
   - "Theme hochladen" klicken
   - `paxdes-portfolio.zip` auswählen
   - "Jetzt installieren" → "Aktivieren"

3. **Grundkonfiguration**
   - Menüs einrichten (Design → Menüs)
   - Startseite festlegen (Einstellungen → Lesen)
   - Customizer konfigurieren (Design → Customizer)

### Detaillierte Anleitung
Siehe [INSTALLATION.md](wp-theme/INSTALLATION.md) für vollständige Schritt-für-Schritt-Anleitung.

---

## 📁 Repository-Struktur

```
paxdes/
├── wp-theme/
│   ├── paxdes-portfolio/          # Theme-Quellcode
│   │   ├── assets/                # CSS, JS, Bilder
│   │   │   ├── css/               # Stylesheets
│   │   │   ├── js/                # JavaScript
│   │   │   └── images/            # Bilder & Icons
│   │   ├── inc/                   # Zusätzliche PHP-Dateien
│   │   ├── languages/             # Übersetzungen
│   │   ├── template-parts/        # Template-Teile
│   │   ├── *.php                  # Template-Dateien
│   │   ├── style.css              # Theme-Stylesheet
│   │   └── README.md              # Theme-Dokumentation
│   ├── paxdes-portfolio.zip       # ⬇️ Installationspaket
│   ├── INSTALLATION.md            # 📖 Installationsanleitung
│   └── ZUSAMMENFASSUNG.md         # 📊 Projekt-Zusammenfassung
└── README.md                      # Diese Datei
```

---

## 🚀 Verwendung

### Projekte hinzufügen

```
Dashboard → Projekte → Neues Projekt

Titel: E-Commerce Plattform
Kategorie: Webentwicklung
Beschreibung: Entwicklung einer skalierbaren E-Commerce-Lösung...
Beitragsbild: [Projekt-Screenshot]

Custom Fields (optional):
- project_url: https://example.com
- project_client: Kundenname
- project_date: Januar 2024
- project_technologies: WordPress, React, PHP
```

### Leistungen hinzufügen

```
Dashboard → Leistungen → Neue Leistung

Titel: Webentwicklung
Beschreibung: Entwicklung moderner, responsiver Websites...
Icon: [Optional: Icon als Beitragsbild]
```

### Customizer konfigurieren

```
Design → Customizer

Hero-Bereich:
- Hero Titel: "Webentwickler & Systemingenieur"
- Name: "Ahmad Al Khalaf"
- Beschreibung: "Spezialisiert auf moderne Webanwendungen..."
- Hero Bild: [Profilbild hochladen]

Kontakt-Informationen:
- E-Mail: info@paxdes.com
- Telefon: +49 xxx xxx xxxx
- GitHub: https://github.com/username
- LinkedIn: https://linkedin.com/in/username
```

---

## 🎨 Anpassungen

### Logo ändern
```
Design → Customizer → Website-Identität → Logo auswählen
Empfohlen: 400x100px, transparent PNG oder SVG
```

### Farben anpassen
```css
/* assets/css/style.css */
:root {
    --primary-color: #your-color;
    --secondary-color: #your-color;
    --text-color: #your-color;
}
```

### Schriftarten ändern
```css
/* assets/css/style.css */
@font-face {
    font-family: 'YourFont';
    src: url('../fonts/yourfont.woff2') format('woff2');
}

body {
    font-family: 'YourFont', sans-serif;
}
```

---

## 🔌 Empfohlene Plugins

### Pflicht
- **Contact Form 7** - Kontaktformulare

### Empfohlen
- **Advanced Custom Fields (ACF)** - Erweiterte Custom Fields
- **Yoast SEO** oder **RankMath** - SEO-Optimierung
- **WP Rocket** - Performance & Caching
- **Wordfence Security** - Sicherheit
- **UpdraftPlus** - Backups

---

## 📊 Technische Details

### Theme-Informationen
- **Name:** PAXDES Portfolio
- **Version:** 1.0.0
- **Autor:** Ahmad Al Khalaf
- **Lizenz:** GPL v2 or later
- **Text Domain:** paxdes-portfolio

### Code-Statistik
- **PHP-Dateien:** 18
- **CSS-Dateien:** 6
- **JS-Dateien:** 3
- **Zeilen Code:** ~6.800+
- **Theme-Größe:** 600 KB (gepackt)

### Performance
- **PageSpeed Score:** 90+ (Mobile & Desktop)
- **Ladezeit:** < 2 Sekunden
- **HTTP-Requests:** < 20
- **Dateigröße:** < 1 MB

---

## 🛠️ Entwicklung

### Lokale Entwicklung

```bash
# Repository klonen
git clone https://github.com/Black10998/paxdes.git

# Theme-Ordner in WordPress kopieren
cp -r paxdes/wp-theme/paxdes-portfolio /path/to/wordpress/wp-content/themes/

# Theme in WordPress aktivieren
```

### Build-Prozess

Das Theme verwendet keine Build-Tools. Alle Assets sind produktionsbereit.

---

## 📝 Dokumentation

- **Theme-Dokumentation:** [wp-theme/paxdes-portfolio/README.md](wp-theme/paxdes-portfolio/README.md)
- **Installationsanleitung:** [wp-theme/INSTALLATION.md](wp-theme/INSTALLATION.md)
- **Projekt-Zusammenfassung:** [wp-theme/ZUSAMMENFASSUNG.md](wp-theme/ZUSAMMENFASSUNG.md)

---

## 🐛 Fehlerbehebung

### Theme wird nicht angezeigt
```bash
# Prüfe Ordnerstruktur
/wp-content/themes/paxdes-portfolio/style.css muss existieren

# Prüfe Dateiberechtigungen
chmod 755 /wp-content/themes/paxdes-portfolio
chmod 644 /wp-content/themes/paxdes-portfolio/*.php
```

### Menü wird nicht angezeigt
```
Design → Menüs → Menü erstellen → Position zuweisen
```

### Bilder werden nicht angezeigt
```bash
# Regeneriere Thumbnails
Plugin: "Regenerate Thumbnails" installieren und ausführen
```

---

## 🤝 Beitragen

Dieses Theme ist speziell für Ahmad Al Khalaf entwickelt. Für Anpassungen oder Erweiterungen:

1. Fork das Repository
2. Erstelle einen Feature-Branch (`git checkout -b feature/AmazingFeature`)
3. Committe deine Änderungen (`git commit -m 'Add some AmazingFeature'`)
4. Push zum Branch (`git push origin feature/AmazingFeature`)
5. Öffne einen Pull Request

---

## 📄 Lizenz

Dieses Theme ist unter der GNU General Public License v2 or later lizenziert.
Siehe [LICENSE](LICENSE) für Details.

---

## 👤 Autor

**Ahmad Al Khalaf**
- Website: [paxdes.com](https://paxdes.com)
- GitHub: [@Black10998](https://github.com/Black10998)
- E-Mail: info@paxdes.com

---

## 🙏 Credits

- **Bootstrap:** v5.3 - Frontend Framework
- **AOS:** v2.3 - Scroll-Animationen
- **Iconoir:** Icon-Set
- **Theme-Entwicklung:** Ona AI Assistant

---

## 📈 Roadmap

### Version 1.1.0 (geplant)
- [ ] Dark/Light Mode Toggle
- [ ] Mehrsprachigkeit (EN/DE)
- [ ] Blog-Funktionalität erweitern
- [ ] Portfolio-Filter
- [ ] Testimonials-Sektion

### Version 1.2.0 (geplant)
- [ ] WooCommerce-Integration
- [ ] Mitgliederbereich
- [ ] Newsletter-Integration
- [ ] Live-Chat-Widget

---

## 📞 Support

Bei Fragen oder Problemen:
- **Dokumentation:** Siehe README.md und INSTALLATION.md
- **Issues:** [GitHub Issues](https://github.com/Black10998/paxdes/issues)
- **E-Mail:** info@paxdes.com

---

## ⭐ Projekt-Status

![Status](https://img.shields.io/badge/Status-Production%20Ready-success.svg)
![Maintenance](https://img.shields.io/badge/Maintained-Yes-green.svg)
![Last Commit](https://img.shields.io/github/last-commit/Black10998/paxdes)

**Status:** ✅ Produktionsbereit
**Letzte Aktualisierung:** November 2025
**Version:** 1.0.0

---

<div align="center">

**Entwickelt mit ❤️ für Ahmad Al Khalaf**

[Website](https://paxdes.com) • [GitHub](https://github.com/Black10998) • [Dokumentation](wp-theme/paxdes-portfolio/README.md)

</div>
