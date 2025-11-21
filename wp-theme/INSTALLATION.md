# PAXDES Portfolio Theme - Installationsanleitung

## Schnellstart

### 1. Theme installieren

**Option A: Über WordPress-Dashboard (empfohlen)**
1. Melde dich in deinem WordPress-Dashboard an
2. Gehe zu `Design > Themes > Theme hinzufügen`
3. Klicke auf "Theme hochladen"
4. Wähle die Datei `paxdes-portfolio.zip`
5. Klicke auf "Jetzt installieren"
6. Nach der Installation auf "Aktivieren" klicken

**Option B: Per FTP**
1. Entpacke `paxdes-portfolio.zip`
2. Lade den Ordner `paxdes-portfolio` per FTP in `/wp-content/themes/`
3. Gehe zu `Design > Themes` und aktiviere das Theme

### 2. Grundkonfiguration

#### Menüs einrichten
1. Gehe zu `Design > Menüs`
2. Erstelle ein neues Menü "Hauptmenü"
3. Füge Seiten hinzu: Startseite, Über mich, Projekte, Leistungen, Kontakt
4. Weise das Menü der Position "Hauptmenü" zu
5. Erstelle ein zweites Menü "Footer-Menü" und weise es der Position "Footer-Menü" zu

#### Startseite einrichten
1. Erstelle eine neue Seite mit dem Titel "Startseite"
2. Gehe zu `Einstellungen > Lesen`
3. Wähle "Eine statische Seite"
4. Wähle deine "Startseite" als Startseite aus

#### Customizer konfigurieren
1. Gehe zu `Design > Customizer`
2. **Hero-Bereich**:
   - Hero Titel: "Webentwickler & Systemingenieur"
   - Name: "Ahmad Al Khalaf"
   - Beschreibung: "Spezialisiert auf moderne Webanwendungen, Plattform-Architektur und IT-Sicherheit."
   - Hero Bild: Lade dein Profilbild hoch
3. **Kontakt-Informationen**:
   - E-Mail: deine@email.de
   - Telefon: +49 xxx xxx xxxx (optional)
   - Social Media URLs: GitHub, LinkedIn, Twitter, Xing
4. **Website-Identität**:
   - Logo hochladen (empfohlen: 400x100px, transparent PNG)
   - Website-Titel: "Ahmad Al Khalaf"
   - Untertitel: "Webentwickler & Systemingenieur"

### 3. Inhalte erstellen

#### Projekte hinzufügen
1. Gehe zu `Projekte > Neues Projekt`
2. Füge Titel und Beschreibung hinzu
3. Setze ein Beitragsbild (Featured Image)
4. Wähle eine Projekt-Kategorie
5. Optional: Füge Custom Fields hinzu (wenn ACF installiert):
   - Projekt-URL
   - Kunde
   - Projektdatum
   - Technologien

**Beispiel-Projekt:**
```
Titel: E-Commerce Plattform für Modeunternehmen
Kategorie: Webentwicklung
Beschreibung: Entwicklung einer skalierbaren E-Commerce-Lösung mit 
individuellen Features und nahtloser Payment-Integration.
Technologien: WordPress, WooCommerce, React, PHP
```

#### Leistungen hinzufügen
1. Gehe zu `Leistungen > Neue Leistung`
2. Füge Titel und Beschreibung hinzu
3. Optional: Setze ein Icon als Beitragsbild

**Beispiel-Leistungen:**
- Webentwicklung
- Plattform-Architektur
- IT-Sicherheit
- Performance-Optimierung
- UI/UX Design
- System-Integration

#### Seiten erstellen

**Über mich / About**
```
Titel: Über mich
Slug: ueber-mich

Inhalt:
Ich bin Ahmad Al Khalaf, ein erfahrener Webentwickler und Systemingenieur 
mit Fokus auf moderne Webtechnologien und sichere Plattform-Architekturen.

Mit über [X] Jahren Erfahrung in der Entwicklung von Webanwendungen und 
IT-Systemen unterstütze ich Unternehmen dabei, ihre digitale Präsenz 
professionell und sicher aufzubauen.

Meine Expertise:
- Entwicklung moderner Webanwendungen
- Aufbau skalierbarer Plattformen
- IT-Sicherheit und Hardening
- Performance-Optimierung
- UI/UX Design
```

**Kontakt**
```
Titel: Kontakt
Slug: kontakt

Inhalt:
Haben Sie ein Projekt im Kopf? Lassen Sie uns darüber sprechen.

[Contact Form 7 Shortcode hier einfügen]
```

### 4. Empfohlene Plugins

#### Pflicht-Plugins
- **Contact Form 7** - Für Kontaktformulare
  - Nach Installation: Erstelle ein Formular und füge den Shortcode auf der Kontaktseite ein

#### Empfohlene Plugins
- **Advanced Custom Fields (ACF)** - Für erweiterte Custom Fields
- **Yoast SEO** oder **RankMath** - Für SEO-Optimierung
- **WP Rocket** oder **W3 Total Cache** - Für Performance
- **Wordfence Security** - Für zusätzliche Sicherheit
- **UpdraftPlus** - Für Backups

### 5. Erweiterte Konfiguration

#### Permalinks
1. Gehe zu `Einstellungen > Permalinks`
2. Wähle "Beitragsname" für SEO-freundliche URLs

#### Bilder-Einstellungen
1. Gehe zu `Einstellungen > Medien`
2. Empfohlene Größen:
   - Miniaturbild: 300x300 (zugeschnitten)
   - Mittlere Größe: 600x600
   - Große Größe: 1200x1200

#### Logo anpassen
1. Erstelle ein Logo (empfohlen: SVG oder PNG mit transparentem Hintergrund)
2. Gehe zu `Design > Customizer > Website-Identität`
3. Lade dein Logo hoch

### 6. Content-Vorschläge

#### Hero-Bereich Texte
```
Titel: "Webentwickler & Systemingenieur"
Name: "Ahmad Al Khalaf"
Beschreibung: "Spezialisiert auf moderne Webanwendungen, 
Plattform-Architektur und IT-Sicherheit."
```

#### Service-Beschreibungen

**Webentwicklung**
```
Entwicklung moderner, responsiver Websites und Webanwendungen mit 
neuesten Technologien. Von der Konzeption bis zur Umsetzung.
```

**Plattform-Architektur**
```
Konzeption und Aufbau skalierbarer Web-Plattformen und SaaS-Lösungen 
mit Fokus auf Performance und Wartbarkeit.
```

**IT-Sicherheit**
```
Implementierung von Sicherheitskonzepten, Hardening und Schutzmaßnahmen 
für Ihre Web-Infrastruktur.
```

**Performance-Optimierung**
```
Analyse und Optimierung der Website-Performance für maximale 
Geschwindigkeit und beste User Experience.
```

**UI/UX Design**
```
Gestaltung benutzerfreundlicher Interfaces mit Fokus auf User Experience 
und moderne Design-Prinzipien.
```

**System-Integration**
```
Integration verschiedener Systeme und APIs für nahtlose Workflows und 
automatisierte Prozesse.
```

### 7. Fehlerbehebung

#### Theme wird nicht angezeigt
- Prüfe ob alle Dateien korrekt hochgeladen wurden
- Stelle sicher, dass die Ordnerstruktur korrekt ist: `/wp-content/themes/paxdes-portfolio/`

#### Menü wird nicht angezeigt
- Gehe zu `Design > Menüs` und weise das Menü der richtigen Position zu

#### Bilder werden nicht angezeigt
- Prüfe die Dateiberechtigungen (755 für Ordner, 644 für Dateien)
- Regeneriere Thumbnails mit einem Plugin wie "Regenerate Thumbnails"

#### Styles werden nicht geladen
- Leere den Browser-Cache
- Leere den WordPress-Cache (falls Caching-Plugin aktiv)
- Prüfe ob die CSS-Dateien im Ordner `/assets/css/` vorhanden sind

### 8. Support & Updates

Bei Fragen oder Problemen:
- Prüfe die README.md im Theme-Ordner
- Kontaktiere: info@paxdes.com

### 9. Checkliste nach Installation

- [ ] Theme aktiviert
- [ ] Menüs erstellt und zugewiesen
- [ ] Startseite eingerichtet
- [ ] Customizer konfiguriert (Hero, Kontakt, Social Media)
- [ ] Logo hochgeladen
- [ ] Contact Form 7 installiert und konfiguriert
- [ ] Mindestens 3 Projekte erstellt
- [ ] Mindestens 3 Leistungen erstellt
- [ ] Über-mich-Seite erstellt
- [ ] Kontaktseite erstellt
- [ ] Permalinks auf "Beitragsname" gesetzt
- [ ] SEO-Plugin installiert und konfiguriert

---

**Viel Erfolg mit deinem neuen Portfolio!**

Bei Fragen: info@paxdes.com
