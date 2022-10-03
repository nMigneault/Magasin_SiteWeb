
--
-- Base de données : `panier`
--
DROP DATABASE IF EXISTS panier;
CREATE DATABASE panier CHARACTER SET 'utf8';
USE panier;

DROP TABLE IF EXISTS products;
-- --------------------------------------------------------
--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `quantity`, `img`, `date_added`) VALUES
(1, 'Hosta', '<p>Ce hosta porte de grandes feuilles en forme de cœur, d’un vert bleuté et très texturées. Il fleurit en juillet. Les hostas sont des plantes faciles à entretenir, c’est pourquoi on les retrouve dans presque tous les jardins. Plantez-le dans un sol riche, mais une fois bien établi, il tolère presque tous les types de sol.</p>', '29.99', 23, 'hosta.png', '2022-06-24 07:05:22'),
(2, 'Échinacée', '<p>Superbes fleurs ressemblant à une tranche de melon d’eau avec ses pétales vert lime au coeur rouge foncé. Préparez-vous pour une quantité incroyable de fleurs de l’été jusqu’à tard à l’automne. Certainement la vedette de l’année.</p>', '14.99', 34, 'echinacea.png', '2022-04-03 19:22:39'),
(3, 'Lilas', '<p>Arbuste de bonne taille qui, dès le printemps, produit de magnifiques épis de couleur bleu-clair, délicieusement parfumés. Complément coloré dans votre jardin, en isolé ou en haie libre.</p>', '19.99', 23, 'lilas.jpg', '2021-08-13 18:47:56'),
(4, 'Maguerite', '<p>Variété de marguerite rustique présentant des pétales, de type double, quelque peu hirsute, d’un blanc pur autour d’un centre jaune. Elle est idéale en fleur coupée, car ses tiges, très solides, offrent un bon soutien à la fleur. Cette marguerite fleurit du début de l’été jusqu’à la fin de l’automne. Elle fait meilleure figure regroupée en bordure en plein soleil, mais elle est tout aussi spectaculaire en pot. Elle s’épanouit dans un sol normal, sablonneux ou argileux. Cette plante tolère bien la pollution des villes. En guise de préparation pour l’hiver, il faut la tailler au ras du sol. Ses fleurs ont un fort pouvoir d’attraction sur les papillons.</p>', '22.99', 17, 'margerite.jpg', '2022-06-23 19:14:44'),
(5, 'Clématie', '<p>Petite fleur blanche contrastant avec le feuillage persistant très découper vert. Le feuillage ressemble à du persil. Le plus produit :Garde ses feuilles l’hiver !</p>', '12.99', 67, 'clematis.jpg', '2022-04-23 13:44:44'),
(6, 'Coquelicot', '<p>Le coquelicot est une plante classique des prairies en jachère ou des bords de routes. Il y pousse spontanément et égaye nos campagnes de ses fleurs froissées rouge vif marquées à la base des pétales d\'une tâche noire.  Cette plante originaire d\'Afrique du Nord et d\'Eurasie s\'est largement naturalisée partout ailleurs, elle possède un cycle végétatif annuel, c\'est à dire qu\'elle se développe et meurt sur une même année.</p>', '22.99', 15, 'poppy.jpg', '2022-06-23 09:14:44'),
(7, 'Hydrangée', '<p>Si vous aimez le rose, l’hydrangée Pinkerella sera parfaite pour vous! D’immenses grappes de fleurs apparaissent dès la mi-juillet. Elles perdurent et conservent leur belle couleur au-delà de la saison, puisqu’elles restent tout aussi roses une fois séchées. Facile à cultiver et à entretenir, cette hydrangée nécessite un sol humide, bien drainé et modérément fertile. Versatile à souhait, elle peut éblouir comme plante d’accent dans l’aménagement paysager, former une haie basse et même devenir un merveilleux bouquet de fleurs coupées.</p>', '42.99', 27, 'hydrange.png', '2022-04-23 22:44:44'),
(8, 'Orchidée', '<p>Les orchidées constituent la plus grande famille de plantes à fleurs. On dénombre plus de 30 000 espèces regroupées dans quelque 750 genres. On les trouve partout sur la planète, à l\'exception des régions polaires et désertiques. De nos jours, de nouvelles espèces sont encore découvertes. Leur grande diversité et leurs fleurs spectaculaires expliquent l\'engouement que suscite la culture des orchidées partout dans le monde.</p>', '22.99', 0, 'orchid.jpg', '2022-06-23 19:14:44');
