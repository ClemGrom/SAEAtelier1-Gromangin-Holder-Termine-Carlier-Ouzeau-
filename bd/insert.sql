INSERT INTO `utilisateur` (`uuid`, `nom`, `prenom`, `email`, `password`, `admin`)
VALUES ('e4cb8975-a332-431a-85f0-151babeb38b1', 'Ouzeau', 'Emeric', 'emeric.ouzeau@nrv.com', 'ideupileptique', 0),
       ('18707fc1-5927-4c3f-af2e-bb51bb9dde53', 'termine', 'matthéo', 'mattheo.termine@nrv.com', '12345', 0),
       ('786e7810-3595-4ed5-aaa3-a2f7924d0f59', 'holder', 'jules', 'jules.holder@nrv.com', 'c3l4plYb0', 1),
       ('7fea6b3a-a241-41d4-975f-e9030ca5219c', 'grom', 'clamant', 'clamant.grom@nrv.com', 'gpudidé', 1),
       ('a3c8f9d5-8c5a-4a2d-9d7e-1e2b4e9e6d4f', 'Carlier', 'Lucas', 'lucas.carlier@nrv.com', 'p4ssw0rd', 0),
       ('f5d6e7c4-3b2a-1d9c-5e6f-8a9b0c2d4e5f', 'Dupont', 'Jean', 'jean.dupont@nrv.com', 'j3@ndup0nt', 0);
INSERT INTO `artiste` (`id`, `nom_scene`, `nom`, `prenom`)
VALUES ('1', 'Mozart', 'Mozart', 'Wolfgang Amadeus'),
       ('2', 'Orelsan', 'Contentin', 'Aurélien'),
       ('3', 'Johnny Hallyday', 'Smet', 'Jean-Philippe '),
       ('4', 'Bigflo et Oli', 'Ordonez', 'Florian et Olivio'),
       ('5', 'Charles Aznavour', 'Aznavourian', 'Shahnourh Vaghinag'),
       ('6', 'Beethoven', 'Beethoven', 'Ludwig van'),
       ('7', 'Michael Jackson', 'Jackson', 'Michael'),
       ('8', 'Louis Armstrong', 'Armstrong', 'Louis');

INSERT INTO `lieu` (`id`, `nom`, `adresse`, `nb_place_assises`, `nb_place_debout`)
VALUES ('1', 'Salle de concert A', '123 Rue de la Musique, Nancy', 500, 1000),
       ('2', 'Club de musique B', '456 Rue des Artistes, Nancy', 200, 300),
       ('3', 'Salle de concert C', '789 Rue des Musiciens, Nancy', 1000, 2000),
       ('4', 'Salle de concert D', '101112 Rue des Chanteurs, Nancy', 100, 200),
       ('5', 'Salle de concert E', '131415 Rue des Chanteurs, Nancy', 100, 200);

INSERT INTO `theme` (`id`, `nom`)
VALUES ('1', 'Classique'),
       ('2', 'Rock'),
       ('3', 'Jazz'),
       ('4', 'Pop'),
       ('5', 'Rap'),
       ('6', 'Electronique'),
       ('7', 'Reggae'),
       ('8', 'Hip Hop'),
       ('9', 'Blues'),
       ('10', 'Folk');

INSERT INTO `commande` (`uuid`, `id_utilisateur`, `statut`)
VALUES ('99b58573-cb80-4d96-9900-566ba9c4853f', 'e4cb8975-a332-431a-85f0-151babeb38b1', '1'),
       ('83b5bcec-1535-43bf-87a0-3ab65ea3f7fd', '18707fc1-5927-4c3f-af2e-bb51bb9dde53', '0'),
       ('b1a5d5cd-f70e-4fcd-8850-42d4ebcb764b', '786e7810-3595-4ed5-aaa3-a2f7924d0f59', '1'),
       ('673c1a06-dfac-4b07-897c-f611d6434d46', '7fea6b3a-a241-41d4-975f-e9030ca5219c', '0'),
       ('345af03f-04f9-47de-b05c-b74954e2ee1f', 'a3c8f9d5-8c5a-4a2d-9d7e-1e2b4e9e6d4f', '1'),
       ('9493ca49-7131-47a1-9e25-6bb9c7d506f4', 'f5d6e7c4-3b2a-1d9c-5e6f-8a9b0c2d4e5f', '0');

INSERT INTO `tarifs` (`id`, `tarif_normal`, `tarif_reduit`)
VALUES ('1', '20', '15'),
       ('2', '25', '20'),
       ('3', '30', '25'),
       ('4', '35', '30'),
       ('5', '40', '35');

INSERT INTO `soiree` (`id`, `nom`, `id_theme`, `date`, `id_lieu`, `id_tarif`)
VALUES ('1', 'Disco Night', '4', '2022-01-01', '1', '1'),
       ('2', 'Rock Afternoon', '2', '2022-01-02', '2', '2'),
       ('3', 'Hip Hop Love', '8', '2022-01-03', '3', '3'),
       ('4', 'Jazz Touch', '3', '2022-01-04', '4', '4'),
       ('5', 'Les classiques des années 80', '1', '2022-01-05', '5', '5'),
       ('6', 'Electro passion', '6', '2022-01-06', '4', '2'),
       ('7', 'Reggae Night', '7', '2022-01-07', '3', '3'),
       ('8', 'Funky Franky', '10', '2022-01-08', '2', '5'),
       ('9', 'La musique dans la peau', '9', '2022-01-09', '1', '4'),
       ('10', 'Pipolapi', '5', '2022-01-10', '5', '1');

INSERT INTO `reservation` (`uuid`, `id_commande`, `id_soiree`, `type_tarif`, `nb_places`)
VALUES ('18707fc1-5927-4c3f-af2e-bb51bb9dde53', '99b58573-cb80-4d96-9900-566ba9c4853f', '1', '1', '2');

INSERT INTO `spectacle` (`id`, `titre`, `description`, `id_soiree`, `id_theme`, `horaire`)
VALUES ('1', 'Spectacle 1', 'Description du spectacle 1', '1', '1', '2022-01-01 20:00'),
       ('2', 'Spectacle 2', 'Description du spectacle 2', '2', '2', '2022-01-02 21:00'),
       ('3', 'Spectacle 3', 'Description du spectacle 3', '3', '3', '2022-01-03 22:00'),
       ('4', 'Spectacle 4', 'Description du spectacle 4', '4', '4', '2022-01-04 23:00'),
       ('5', 'Spectacle 5', 'Description du spectacle 5', '5', '5', '2022-01-05 00:00'),
       ('6', 'Spectacle 6', 'Description du spectacle 6', '6', '6', '2022-01-06 01:00'),
       ('7', 'Spectacle 7', 'Description du spectacle 7', '7', '7', '2022-01-07 02:00'),
       ('8', 'Spectacle 8', 'Description du spectacle 8', '8', '8', '2022-01-08 03:00'),
       ('9', 'Spectacle 9', 'Description du spectacle 9', '9', '9', '2022-01-09 04:00'),
       ('10', 'Spectacle 10', 'Description du spectacle 10', '10', '10', ' 2022-01-10 05:00');

INSERT INTO `participation` (`id_artiste`, `id_spectacle`)
VALUES (1, 1),
       (2, 2),
       (3, 3),
       (4, 4),
       (5, 5),
       (6, 6),
       (7, 7),
       (8, 8),
       (1, 9),
       (2, 10);
