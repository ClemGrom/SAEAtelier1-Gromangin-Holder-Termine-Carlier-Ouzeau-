DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur`
(
    `uuid`     varchar(255) NOT NULL,
    `nom`      text         NOT NULL,
    `prenom`   text         NOT NULL,
    `email`    varchar(255) NOT NULL,
    `password` BINARY(60)   NOT NULL,
    `admin`    boolean      NOT NULL,
    PRIMARY KEY (`uuid`)
);

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste`
(
    `id`        int          NOT NULL AUTO_INCREMENT,
    `nom_scene` varchar(255) NOT NULL,
    `nom`       text         NOT NULL,
    `prenom`    text         NOT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu`
(
    `id`               int          NOT NULL AUTO_INCREMENT,
    `nom`              varchar(255) NOT NULL,
    `adresse`          varchar(255) NOT NULL,
    `nb_place_assises` int          NOT NULL,
    `nb_place_debout`  int          NOT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media`
(
    `id`          int          NOT NULL AUTO_INCREMENT,
    `lien`        varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme`
(
    `id`  int          NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande`
(
    `uuid`           varchar(255) NOT NULL,
    `id_utilisateur` varchar(255) NOT NULL,
    `statut`         int          NOT NULL,
    PRIMARY KEY (`uuid`),
    FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`uuid`)
);

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs`
(
    `id`           int NOT NULL AUTO_INCREMENT,
    `tarif_normal` int NOT NULL,
    `tarif_reduit` int NOT NULL,
    PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `soiree`;
CREATE TABLE IF NOT EXISTS `soiree`
(
    `id`       int          NOT NULL AUTO_INCREMENT,
    `nom`      varchar(255) NOT NULL,
    `id_theme` int          NOT NULL,
    `date`     timestamp    NOT NULL,
    `id_lieu`  int          NOT NULL,
    `id_tarif` int          NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id`),
    FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id`),
    FOREIGN KEY (`id_tarif`) REFERENCES `tarifs` (`id`)
);

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation`
(
    `uuid`        varchar(255) NOT NULL,
    `id_commande` varchar(255) NOT NULL,
    `id_soiree`   int          NOT NULL,
    `type_tarif`  int          NOT NULL,
    `nb_places`   int          NOT NULL,
    PRIMARY KEY (`uuid`),
    FOREIGN KEY (`id_commande`) REFERENCES `commande` (`uuid`),
    FOREIGN KEY (`id_soiree`) REFERENCES `soiree` (`id`)
);

DROP TABLE IF EXISTS `spectacle`;
CREATE TABLE IF NOT EXISTS `spectacle`
(
    `id`          int          NOT NULL AUTO_INCREMENT,
    `titre`       varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `id_soiree`   int          NOT NULL,
    `id_theme`    int          NOT NULL,
    `horaire`     timestamp    NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_soiree`) REFERENCES `soiree` (`id`),
    FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id`)
);

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation`
(
    `id_artiste`   int NOT NULL,
    `id_spectacle` int NOT NULL,
    FOREIGN KEY (`id_artiste`) REFERENCES `artiste` (`id`),
    FOREIGN KEY (`id_spectacle`) REFERENCES `spectacle` (`id`)
);

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet`
(
    `uuid`           varchar(255) NOT NULL,
    `id_reservation` varchar(255) NOT NULL,
    PRIMARY KEY (`uuid`),
    FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`uuid`)
);

DROP TABLE IF EXISTS `illustration_lieu`;
CREATE TABLE IF NOT EXISTS `illustration_lieu`
(
    `id_media` int NOT NULL,
    `id_lieu`  int NOT NULL,
    FOREIGN KEY (`id_media`) REFERENCES `media` (`id`),
    FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id`)
);

DROP TABLE IF EXISTS `illustration_spectacle`;
CREATE TABLE IF NOT EXISTS `illustration_spectacle`
(
    `id_media`     int NOT NULL,
    `id_spectacle` int NOT NULL,
    FOREIGN KEY (`id_media`) REFERENCES `media` (`id`),
    FOREIGN KEY (`id_spectacle`) REFERENCES `spectacle` (`id`)
);