
# Sujet de validation - PrepaDFS

## Contexte
Vous tenez une boutique de jeux de sociétés et de livres. Afin de mieux vous organiser, vous décidez de créer une application web vous permettant de tenir à jour vos stocks.


## L'appli
Cette application devra vous permettre de gérer (CRUD) aussi bien vos produits que les différents utilisateurs auxquels vous souhaiteriez donner l’accès à l’appli  (employés par ex.). Ces utilisateurs devront avoir des droits différents suivant leur rôle. Dans ce sens, seul l’administrateur possède les droits de CRUD les employés. Ces derniers ne peuvent CRUD que les produits, et le site n’est pas accessible aux utilisateurs non identifiés, de telle sorte qu'il faudra  être connecté avant  de pouvoir accéder à l'appli.

Les produits auront plusieurs caractéristiques, dont le nombre afin de pouvoir en gérer le stock.

De plus, pour être utilisée sur des terminaux différent et dans les meilleures conditions, l'appli devra présenter un front ergonomique, agréable et responsive.  
Toute fonctionnalité supplémentaire sera appréciée ( recherche de produits par catégories, etc. )


## Technos
Technologies que vous devrez utiliser :
- Laravel
- Mysql/Eloquent pour le stockage des données (obligation d’utiliser des tables intermédiaires et clés étrangères) ainsi que des migrations/seeds.
- JavaScript pour ce que vous jugerez opportun (mais vous devez en utiliser)
- Templating (layouts)

## Autres critères d'évaluation
- la propreté de votre code
- la pertinence de vos fonctions
- votre manière d’utiliser le framework Laravel ainsi que son MVC
- la simplicité de déploiement de votre application qui devra reposer impérativement sur un "vagrant up"

## Deadline
Votre dernier push dans ce dépôt devra impérativement intervenir avant le 1er mars 2019 18h00.

Dernière consigne : votre présentation devant jury sera accompagnée d'un slide agréable à l'oeil ;)

Bonne chance !
