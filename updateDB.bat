php app/console doctrine:mapping:convert yml ./src/BCloud/SpoKuWaBundle/Resources/config/doctrine/metadata/orm --from-database --force
php app/console doctrine:mapping:import BCloudSpoKuWaBundle annotation
php app/console doctrine:generate:entities BCloudSpoKuWaBundle