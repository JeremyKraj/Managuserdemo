Managuserdemo
=============

Paramètrage et configuration et gestion des groupes d'utilisateurs avec PUGXMultiUserBundle associé à FOSUserBundle pour Symfony 3.

Il s'agit d'un modèle, qui à pour vocation d'être complété au fur et à mesure selon les préconisations habituelles
(mailing, groups etc...) et tends donc à évoluer. 


**Fonctionne avec :**

- [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle/)
- [PUGXMultiUserBundle](https://github.com/PUGX/PUGXMultiUserBundle)

Installation
------------

    php ../composer.phar install

Créez votre fichier parameters.yml

    php bin/console doctrine:database:create

    php bin/console doctrine:schema:update


{WebMoeurs.NET}
# Managuserdemo