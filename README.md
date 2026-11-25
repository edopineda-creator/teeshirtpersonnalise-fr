# TEESHIRT. Personnalisé — V0.3.0

Thème WordPress personnalisé pour une landing page de devis dédiée à la personnalisation textile par sérigraphie et impression DTF.

## Contenu

- Thème : `wordpress/teeprint-landing/`
- Maquette statique complète : `preview/index.html`
- Visuel d’illustration optimisé WebP : `wordpress/teeprint-landing/assets/textile-studio-illustration.webp`
- Interactions légères : `wordpress/teeprint-landing/assets/site.js`
- Brief et préparation SEO locale : `seo/`

## Installation / mise à jour

Téléverser le dossier `wordpress/teeprint-landing` comme thème WordPress personnalisé, puis l’activer après validation dans un environnement de préproduction. La page d’accueil s’appuie sur la page d’accueil statique WordPress. Le shortcode Contact Form 7 est conservé dans le réglage Apparence → Personnaliser → Teeprint — Devis (`teeprint_form_shortcode`). La configuration Brevo existante n’est pas modifiée par ce thème.

## Formulaire

Le formulaire reste géré par Contact Form 7 : shortcode configurable, champs, consentement et pièce jointe sont administrés dans WordPress. La maquette statique montre la structure visuelle seulement ; elle ne transmet aucune demande.

## SEO et accessibilité

Le thème définit un title et une méta-description de repli, désactivés si Yoast, Rank Math ou AIOSEO est actif. Il ajoute un schéma FAQ correspondant aux questions visibles uniquement en l’absence de ces extensions. Le H1 est unique, les sections sont hiérarchisées, les ancres sont explicites, le menu mobile est pilotable au clavier et les mouvements respectent la préférence `prefers-reduced-motion`.

Les pages locales ne sont qu’une architecture préparée. Publier chaque page quand les modalités de service et son contenu original sont vérifiés.

## Ressources

Le visuel de campagne est une image générée à titre illustratif, non une photographie de réalisation TSHIRTEE. Fichier WebP 1536 × 1024, environ 111 Ko. Les noms de fichiers explicites et dimensions réservées réduisent le CLS ; l’image de tête est prioritaire, les polices système évitent une requête externe.
