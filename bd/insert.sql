INSERT INTO `utilisateur` (`uuid`, `nom`, `prenom`, `email`, `password`, `admin`)
VALUES
('e4cb8975-a332-431a-85f0-151babeb38b1', 'Ouzeau', 'Emeric', 'emeric.ouzeau@nrv.com', 'ideupileptique', 0),
('18707fc1-5927-4c3f-af2e-bb51bb9dde53', 'termine', 'matthéo', 'mattheo.termine@nrv.com', '12345', 0),
('786e7810-3595-4ed5-aaa3-a2f7924d0f59', 'holder', 'jules', 'jules.holder@nrv.com', 'c3l4plYb0', 1),
('7fea6b3a-a241-41d4-975f-e9030ca5219c', 'grom', 'clamant', 'clamant.grom@nrv.com', 'gpudidé', 1),
('a3c8f9d5-8c5a-4a2d-9d7e-1e2b4e9e6d4f', 'Carlier', 'Lucas', 'lucas.carlier@nrv.com', "p4ssw0rd", 0),
('f5d6e7c4-3b2a-1d9c-5e6f-8a9b0c2d4e5f', 'Dupont', 'Jean', 'jean.dupont@nrv.com', 'j3@ndup0nt', 0);
INSERT INTO `artiste` (`id`, `nom_scene`, `nom`, `prenom`)
VALUES
('1', 'Mozart', 'Mozart', 'Wolfgang Amadeus'),
('2', 'Orelsan', 'Contentin', 'Aurélien'),
('3', 'Johnny Hallyday', 'Smet', 'Jean-Philippe '),
('4', 'Bigflo et Oli', 'Ordonez', 'Florian et Olivio'),
('5', 'Charles Aznavour', 'Aznavourian', 'Shahnourh Vaghinag'),
('6', 'Beethoven', 'Beethoven', 'Ludwig van'),
('7', 'Michael Jackson', 'Jackson', 'Michael'),
('8', 'Louis Armstrong', 'Armstrong', 'Louis');

INSERT INTO `lieu` (`nom`, `adresse`, `nb_place_assises`, `nb_place_debout`)
VALUES
('Salle de concert A', '123 Rue de la Musique, Nancy', 500, 1000),
('Club de musique B', '456 Rue des Artistes, Nancy', 200, 300),
('Salle de concert C', '789 Rue des Musiciens, Nancy', 1000, 2000),
('Salle de concert D', '101112 Rue des Chanteurs, Nancy', 100, 200),
('Salle de concert E', '131415 Rue des Chanteurs, Nancy', 100, 200);

INSERT INTO `theme` (`id`, `nom`)
VALUES
('1', 'Classique'),
('2', 'Rock'),
('3', 'Jazz'),
('4', 'Pop'),
('5', 'Rap'),
('6', 'Electronique'),
('7', 'Reggae'),
('8', 'Country'),
('9', 'Blues'),
('10', 'Folk');

INSERT INTO `commande` (`id_utilisateur`, `statut`)
VALUES
('1', '1'),
('2', '0'),
('3', '1'),
('4', '0'),
('5', '1'),
('6', '0');

INSERT INTO `tarifs` (`id`, `id_soiree`, `tarif_normal`, `tarif_reduit`)
VALUES
('1', '1', '20', '15'),
('2', '2', '25', '20'),
('3', '3', '30', '25'),
('4', '4', '35', '30'),
('5', '5', '40', '35');

INSERT INTO `soiree` (`id`, `nom`, `theme`, `date`, `lieu`)
VALUES
('1', 'Disco Night', 'Disco', '2022-01-01', '1'),
('2', 'Rock Afternoon', 'Rock', '2022-01-02', '2'),
('3', 'Hip Hop Love', 'Hip-Hop', '2022-01-03', '3'),
('4', 'Jazz Touch', 'Jazz', '2022-01-04', '4'),
('5', 'Les classiques des années 80', 'Classique', '2022-01-05', '5'),
('6', 'Electro passion', 'Electro', '2022-01-06', '6'),
('7', 'Reggae Night', 'Reggae', '2022-01-07', '7'),
('8', 'Funky Franky', 'Funk', '2022-01-08', '8'),
('9', 'La musique dans la peau', 'Soul', '2022-01-09', '9'),
('10', 'Pipolapi', 'R&B', '2022-01-10', '10');

INSERT INTO `reservation` (`uuid`, `id_commande`, `id_soiree`, `type_tarif`, `nb_places`)
VALUES
('18707fc1-5927-4c3f-af2e-bb51bb9dde53', '1', '1', 'normal', '2'),

INSERT INTO `spectacle` (`id`, `titre`, `description`, `id_soiree`, `id_theme`, `horaire`)
VALUES
('1', 'Spectacle 1', 'Description du spectacle 1', '1', '1', '20h00'),
('2', 'Spectacle 2', 'Description du spectacle 2', '2', '2', '21h00'),
('3', 'Spectacle 3', 'Description du spectacle 3', '3', '3', '22h00'),
('4', 'Spectacle 4', 'Description du spectacle 4', '4', '4', '23h00'),
('5', 'Spectacle 5', 'Description du spectacle 5', '5', '5', '00h00'),
('6', 'Spectacle 6', 'Description du spectacle 6', '6', '6', '01h00'),
('7', 'Spectacle 7', 'Description du spectacle 7', '7', '7', '02h00'),
('8', 'Spectacle 8', 'Description du spectacle 8', '8', '8', '03h00'),
('9', 'Spectacle 9', 'Description du spectacle 9', '9', '9', '04h00'),
('10', 'Spectacle 10', 'Description du spectacle 10', '10', '10', '05h00');

INSERT INTO `participation` (`id_artiste`, `id_spectacle`)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);
