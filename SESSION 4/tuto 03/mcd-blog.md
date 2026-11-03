# MCD complet du Blog

## 1. Les entités

### VILLE
- **id_ville** (Identifiant)
- nom_ville

### AUTEUR
- **id_auteur** (Identifiant)
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- **id_article** (Identifiant)
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- **id_categorie** (Identifiant)
- nom_categorie

## 2. Les relations et cardinalités

1. VILLE (0,N) — habite — (1,1) AUTEUR

2. AUTEUR (0,N) — rédige — (1,1) ARTICLE

3. CATEGORIE (0,N) — regroupe — (1,1) ARTICLE

## 3. Vérification

- Les 4 entités sont présentes.
- Les 3 relations sont présentes.
- Les cardinalités sont respectées.
- La donnée calculée duree_lecture est absente.