# Formulaire de devis — spécification

Champs : nom / entreprise, email, téléphone (facultatif), ville, type de client (entreprise, commerce, café/restaurant, club, association), vêtement (t-shirt, sweat), quantité (nombre entier >= 5, validation côté serveur), technique souhaitée (sérigraphie, DTF, conseil), couleurs et tailles, emplacement d'impression, détails du projet, logo ou visuel (PNG/JPG/PDF; SVG uniquement avec assainissement sécurisé), consentement RGPD non précoché.

Sécurité : limite de taille, extension + MIME autorisés, upload sécurisé géré par une extension maintenue, anti-spam, notification email, politique de conservation et suppression des fichiers. Ne jamais rendre les fichiers de devis publics. Éviter l'upload SVG non filtré.

Le thème ne prétend pas traiter les uploads : installer/configurer un plugin de formulaire adapté, puis renseigner son shortcode dans Apparence > Personnaliser > Teeprint — Devis.
