# Exercice MVC | mvc-19

## Marche a suivre préparation TI1

### Phase 1

1. On part de votre ordinateur :

- création d'un dossier sur votre ordinateur : `git init`
- Création d'un `repository` sur `Github`, puis on le lie en local : `git remote add origin KEY@SSH`

#### Ou

2. On part de 'Github' :

- On crée un `fork`' du `repository` "**upstream**" sur `Github`
- On clone le `fork` du `repository` depuis `Github` (utilisation de 'SSH' de préférence) sur votre ordinateur mais **pas dans un projet git existant ni un endroit suivi par une synchronisation (OneDrive, Dropox, ICloud etc,...)**
- Ajout de l'upstream (pour le `pull request final` final) : `git remote add upstream KEY@SSh`

#### Ensuite

- Création du `.gitignore` vide
- Dossier vide ? `.gitkep`
- Informer sur le projet ? `README.md`

### Phase 2

Création des dossiers importants du site pour le MVC (Model View Controller)

- `public` accessible à tous (**Frontend**)
- `model` Dossier qui gère l'accés aux données (**Backend**)
- `view` Dossier contenant les vues (templates **Backend**)
- `controller` Dossier qui gère le lien entre les `view` et les `model` (Entre **Backend** et **Middle-end**)
- `datas` - nos fichiers de préparation du travail

#### .gitkeep

Mettez-y des `.gitkeep` dans chaque nouveau dossier et faites des commit

#### Création du config.php

**AVANT** la création de `Stagiaire\Bryan\mvc-19\config.php`, ouvrez `.gitignore` et mettez-y : 
``
