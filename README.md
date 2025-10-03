# Site WordPress 25-26 

Ceci est un repo du site WordPress 25-26. 

## Tâche

Notre mission est de concevoir un site web WordPress dédié au département d’informatique. 

Ce site a pour objectif de mettre à disposition différentes ressources telles que :

* Une bibliothèque regroupant les cours dispensés dans la section informatique. 
* Une présentation des services proposés par l’école. 
* Un chatbot destiné à faciliter l’accompagnement et la communication avec les utilisateurs du site.
* Etc.

Toutes ces ressources sont accessibles via des pages différentes, par exemple :

* Une page de connexion.
* Une page d'accueil.
* Un menu.
* Un formulaire.
* Etc ..

# WorkFlow

## Prérequis

Avant de commencer, assurez-vous d'avoir :

- Compte GitHub
- Git installé sur votre machine
- Serveur WordPress configuré (local ou distant)

## Collaboration
Pour collaborer efficacement, chaque membre de l'équipe doit suivre les étapes suivantes :

1. **Clôner le dépôt** : `git clone https://github.com/IS3-LACS/Wordpress-25-26`
2. **Mettez à jour votre dépôt local** :
* `git checkout test`
* `git pull origin test`
2. **Créer une branche** : `git checkout -b nom_de_la_branche`

Apporter des modifications

3. **Stage vos modifications** : `git add .` ou  `git add fichier_ou_dossier`
4. **Valider vos modifications**: `git commit -m "message" `

**Personne ne Push directement vers main**. Toutes les contributions passent par `nom_de_la_branche` (branches de fonctionnalités) → `test` → `main`.

5. **Push les modifications**: `git push origin nom_de_la_branche`

6. **Créer un Pull Request** : Allez sur GitHub et créez une Pull Request pour fusionner/merger vos modifications sur la branche `test`.

# Gestion des branches

Il y a deux branches majeures `main` et `test`. La branche `main` est pour la version finale du site web (sans bugs, etc.), et la branche `test` est pour 
l’ajout de nouvelles fonctionnalités ou juste des tests généraux.

# Gestion de la base de donnée (mySQL)

?








