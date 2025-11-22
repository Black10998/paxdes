# PAXDES Portfolio - Empfohlene Seitenstruktur

## 📄 Hauptseiten

Diese Seiten sollten in WordPress angelegt werden, um die vollständige Website-Struktur zu haben:

### 1. **Startseite** (Home)
- **Slug:** `/` (Startseite)
- **Template:** Automatisch (front-page.php)
- **Einstellung:** Einstellungen → Lesen → "Eine statische Seite" → Startseite auswählen
- **Inhalt:** Hero-Bereich, Featured-Banner, Credentials, Services, Projekte, Kontakt

### 2. **Über mich** (About)
- **Slug:** `/ueber-mich` oder `/about`
- **Template:** "Über mich"
- **Inhalt:** 
  - Professionelle Vorstellung
  - Expertise-Bereiche
  - Arbeitsweise
  - CTA

### 3. **Leistungen** (Services)
- **Slug:** `/leistungen` oder `/services`
- **Template:** "Leistungen"
- **Inhalt:**
  - 6 Hauptleistungen
  - Entwicklungsprozess
  - Zusätzliche Dienstleistungen
  - CTA

### 4. **Technologien** (Technologies)
- **Slug:** `/technologien` oder `/technologies`
- **Template:** "Technologien"
- **Inhalt:**
  - Frontend-Technologien
  - Backend-Technologien
  - CMS & Frameworks
  - DevOps & Tools

### 5. **Projekte** (Projects/Work)
- **Slug:** `/projekte` oder `/work`
- **Template:** "Projekte"
- **Inhalt:**
  - Projekt-Grid mit Filter
  - Kategorien
  - Projekt-Details
  - CTA

### 6. **Kontakt** (Contact)
- **Slug:** `/kontakt` oder `/contact`
- **Template:** "Kontakt"
- **Inhalt:**
  - Kontaktinformationen
  - Kontaktformular (Contact Form 7)
  - Social Media Links
  - Zusätzliche Infos

### 7. **Datenschutz** (Privacy Policy)
- **Slug:** `/datenschutz` oder `/privacy-policy`
- **Template:** "Datenschutz"
- **Inhalt:**
  - DSGVO-konforme Datenschutzerklärung
  - Vollständig auf Deutsch
  - Alle relevanten Abschnitte

### 8. **Datenabsicherung & Compliance** (Data Security)
- **Slug:** `/datenabsicherung` oder `/data-security`
- **Template:** "Datenabsicherung & Compliance"
- **Inhalt:**
  - IT-Sicherheits-Expertise
  - Sicherheits-Services
  - Compliance-Standards
  - Sicherheitsansatz

---

## 🗂️ Menü-Struktur

### Hauptmenü (Header)
```
- Startseite
- Über mich
- Leistungen
- Technologien
- Projekte
- Kontakt
```

### Footer-Menü
```
- Startseite
- Über mich
- Leistungen
- Projekte
- Kontakt
- Datenschutz
```

---

## 📋 Schritt-für-Schritt Anleitung

### 1. Seiten erstellen

Für jede Seite:

1. **WordPress-Dashboard** → **Seiten** → **Neue Seite erstellen**

2. **Titel eingeben:**
   - Deutsch: "Über mich", "Leistungen", etc.
   - Oder Englisch: "About", "Services", etc.

3. **Template auswählen:**
   - Rechte Sidebar → "Seiten-Attribute" → "Template"
   - Entsprechendes Template auswählen

4. **Permalink anpassen:**
   - Unter dem Titel → "Permalink bearbeiten"
   - Kurzen, SEO-freundlichen Slug eingeben
   - Beispiel: `ueber-mich`, `leistungen`, `projekte`

5. **Veröffentlichen**

### 2. Startseite festlegen

1. **Einstellungen** → **Lesen**
2. **"Eine statische Seite"** auswählen
3. **Startseite:** Ihre "Startseite"-Seite auswählen
4. **Speichern**

### 3. Menüs einrichten

#### Hauptmenü:

1. **Design** → **Menüs**
2. **"Neues Menü erstellen"** → Name: "Hauptmenü"
3. **Seiten hinzufügen:**
   - Startseite
   - Über mich
   - Leistungen
   - Technologien
   - Projekte
   - Kontakt
4. **Position zuweisen:** "Hauptmenü" (Primary)
5. **Menü speichern**

#### Footer-Menü:

1. **"Neues Menü erstellen"** → Name: "Footer-Menü"
2. **Seiten hinzufügen:**
   - Startseite
   - Über mich
   - Leistungen
   - Projekte
   - Kontakt
   - Datenschutz
3. **Position zuweisen:** "Footer-Menü"
4. **Menü speichern**

---

## 🎨 Bilder hochladen

### Für die Startseite:

1. **Seite "Startseite" bearbeiten**
2. **Scrolle nach unten zu "Startseiten-Bilder"** (ACF-Felder)
3. **Bilder hochladen:**
   - **Hero-Bild:** Ihr Profilbild (800x800px, quadratisch)
   - **Signatur-Bild:** Ihre Signatur (200x100px, transparent PNG)
   - **Featured-Banner Stern-Icon:** Stern-Icon (50x50px, SVG)
   - **Hintergrund-Muster:** Subtiles Muster (500x500px)
   - **About-Button Icon:** Icon für Buttons (30x30px, SVG)

### Für andere Seiten:

1. **Seite bearbeiten**
2. **Rechte Sidebar → "Seiten-Bilder"**
3. **Bilder hochladen:**
   - **Header-Bild:** Optional für Seiten-Header
   - **Bilder-Galerie:** Zusätzliche Bilder

### Im Customizer:

1. **Design** → **Customizer**
2. **"Hero-Bereich":**
   - Hero Bild hochladen
   - Texte anpassen
3. **"Branding & Logos":**
   - Logo hochladen (optional)
   - Favicon hochladen
   - Hintergrund-Muster hochladen

---

## 🔧 Customizer-Einstellungen

### Hero-Bereich
```
Hero Titel: "Webentwickler & Systemingenieur"
Name: "Ahmad Al Khalaf"
Beschreibung: "Spezialisiert auf moderne Webanwendungen, Plattform-Architektur und IT-Sicherheit."
Hero Bild: [Profilbild hochladen]
CTA Button Text: "Kontakt aufnehmen"
CTA Button URL: /kontakt
```

### Branding & Logos
```
Logo: [Optional - PAXDES Logo hochladen]
Favicon: [Browser-Tab-Icon hochladen]
Hintergrund-Muster: [Subtiles Muster hochladen]
```

### Kontakt-Informationen
```
E-Mail: info@paxdes.com
Telefon: +49 xxx xxx xxxx
GitHub: https://github.com/username
LinkedIn: https://linkedin.com/in/username
Twitter: https://twitter.com/username
Xing: https://xing.com/profile/username
```

---

## ✅ Checkliste

Nach der Einrichtung sollten Sie folgendes haben:

- [ ] 8 Seiten erstellt (Startseite, Über mich, Leistungen, Technologien, Projekte, Kontakt, Datenschutz, Datenabsicherung)
- [ ] Startseite als statische Seite festgelegt
- [ ] Hauptmenü mit 6 Punkten erstellt und zugewiesen
- [ ] Footer-Menü mit 6 Punkten erstellt und zugewiesen
- [ ] Hero-Bild (Profilbild) hochgeladen
- [ ] Customizer-Einstellungen konfiguriert
- [ ] Kontaktdaten eingegeben
- [ ] Social Media Links hinzugefügt
- [ ] Contact Form 7 installiert und konfiguriert
- [ ] Permalinks auf "Beitragsname" gesetzt (Einstellungen → Permalinks)

---

## 📊 SEO-Optimierung

### Empfohlene Permalink-Struktur:

**Einstellungen** → **Permalinks** → **"Beitragsname"** auswählen

### Empfohlene Slugs (SEO-freundlich):

```
Deutsch:
- /ueber-mich
- /leistungen
- /technologien
- /projekte
- /kontakt
- /datenschutz
- /datenabsicherung

Englisch (Alternative):
- /about
- /services
- /technologies
- /projects
- /contact
- /privacy-policy
- /data-security
```

### Meta-Beschreibungen:

Wenn Sie ein SEO-Plugin (Yoast, RankMath) verwenden:

1. Seite bearbeiten
2. Scrolle nach unten zum SEO-Bereich
3. Meta-Beschreibung eingeben (155-160 Zeichen)
4. Focus-Keyword festlegen

---

## 🎯 Wichtige Hinweise

### URL-Konsistenz
- Verwenden Sie konsistente Slugs (entweder Deutsch oder Englisch)
- Ändern Sie Slugs nicht nach der Veröffentlichung (SEO!)
- Verwenden Sie Bindestriche (-) statt Unterstriche (_)

### Bilder-Optimierung
- Komprimieren Sie Bilder vor dem Upload (TinyPNG, ImageOptim)
- Verwenden Sie WebP-Format wenn möglich
- Fügen Sie Alt-Tags hinzu (SEO & Accessibility)

### Performance
- Installieren Sie ein Caching-Plugin (WP Rocket, W3 Total Cache)
- Aktivieren Sie Lazy Loading für Bilder
- Minimieren Sie CSS/JS (Autoptimize)

---

**Diese Struktur entspricht den Best Practices für Portfolio-Websites und ist SEO-optimiert.**
