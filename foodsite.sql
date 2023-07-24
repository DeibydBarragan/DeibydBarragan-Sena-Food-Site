-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2023 a las 05:33:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodsite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `Categoria`) VALUES
(1, 'Comida rapida'),
(2, 'Bebidas'),
(3, 'Almuerzo'),
(4, 'Paquetes'),
(5, 'Dulces'),
(6, 'Postres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroaprendizaje`
--

CREATE TABLE `centroaprendizaje` (
  `id` int(11) NOT NULL,
  `Centro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `centroaprendizaje`
--

INSERT INTO `centroaprendizaje` (`id`, `Centro`) VALUES
(1, 'CME'),
(2, 'CEET'),
(3, 'CMM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  `Comentario` varchar(200) NOT NULL,
  `fechaHora` timestamp NOT NULL DEFAULT current_timestamp(),
  `Imagen` varchar(100) DEFAULT NULL,
  `id_estado` int(1) NOT NULL DEFAULT 1,
  `id_usuario` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `Tipo`, `Comentario`, `fechaHora`, `Imagen`, `id_estado`, `id_usuario`) VALUES
(1, 'doloremque', 'Id ipsam sequi et et. Asperiores quo est sed officiis. Maiores est quaerat dolorum placeat et omnis omnis.', '2022-09-13 19:03:09', NULL, 3, 86),
(2, 'impedit', 'Et ratione totam sed molestiae error. Quisquam est odit laudantium voluptatem et. Quas quisquam iste ut sit quis. Voluptatum soluta sint incidunt vero repellat repudiandae.', '2022-09-13 19:03:09', NULL, 3, 79),
(3, 'cumque', 'Dolor ratione labore ut recusandae ut. Eaque laboriosam necessitatibus rem quas molestiae labore ut. Eaque voluptatem dolor eaque ducimus.', '2022-09-13 19:03:09', NULL, 2, 76),
(4, 'accusantium', 'Voluptas ratione voluptatem et voluptates nam. Minima labore neque sunt. Non voluptas necessitatibus eveniet non corrupti error ea. Amet aut quis at quae voluptatibus.', '2022-09-13 19:03:09', NULL, 3, 64),
(5, 'illum', 'Atque et placeat aliquam voluptas quibusdam. Possimus consequatur doloremque est nam nam quas. Sint id ad facere qui. Illum modi corrupti fuga asperiores expedita.', '2022-09-13 19:03:09', NULL, 2, 48),
(6, 'est', 'Aut totam doloribus ea amet. Quia maiores vitae quibusdam quia maxime. Et vel beatae alias dolores assumenda aut ducimus pariatur.', '2022-09-13 19:03:09', NULL, 1, 78),
(7, 'quisquam', 'Ut corrupti eaque saepe est. Eveniet inventore aut quo nisi doloremque quos. Mollitia est expedita dignissimos velit facere provident. Laborum porro a repellendus ratione.', '2022-09-13 19:03:09', NULL, 2, 16),
(8, 'mollitia', 'Ut occaecati non similique non placeat. Veniam non qui earum ducimus et iure est. Est explicabo necessitatibus rerum et.', '2022-09-13 19:03:09', NULL, 3, 5),
(9, 'adipisci', 'Minus vel reiciendis necessitatibus maiores nihil vero in. Sit totam omnis aut quo ad. Tenetur facere rerum autem. Minus autem quia velit.', '2022-09-13 19:03:09', NULL, 2, 87),
(10, 'assumenda', 'Necessitatibus et occaecati sed. Neque dolore voluptas beatae ea est ut. Aliquid ad porro quia ipsam dolor.', '2022-09-13 19:03:09', NULL, 2, 4),
(11, 'et', 'Culpa placeat culpa veniam vel ad eum. Molestias dolor aut eum. Quis rerum voluptatum sunt. Quia consequatur at id quod.', '2022-09-13 19:03:09', NULL, 2, 77),
(12, 'inventore', 'Occaecati dolor quidem qui. Porro quo ratione dolores nostrum quos sed sit. Doloremque expedita omnis consequatur consequuntur assumenda quidem.', '2022-09-13 19:03:09', NULL, 1, 12),
(13, 'voluptatum', 'Qui autem voluptas eaque consequatur voluptatibus consequuntur. Autem est quo officia nobis iure autem accusantium. Minus quam voluptas reprehenderit rem atque rerum.', '2022-09-13 19:03:09', NULL, 2, 94),
(14, 'est', 'Rerum dicta et tempora. Quas aperiam ea et dolorem. Esse velit illo nihil eveniet soluta doloribus.', '2022-09-13 19:03:09', NULL, 3, 62),
(15, 'quos', 'Dolores atque et odio ab rerum ea dolores sint. Facilis consequatur consequatur est numquam vel repudiandae quod. Sapiente natus culpa laborum veniam.', '2022-09-13 19:03:09', NULL, 1, 36),
(16, 'aperiam', 'Non rerum expedita voluptas non explicabo autem sunt dolor. Excepturi impedit perferendis dolor. Qui et ea nam enim sed.', '2022-09-13 19:03:09', NULL, 2, 90),
(17, 'similique', 'Quaerat sapiente ipsa quis quibusdam quae consequuntur. Assumenda enim modi et illo. Quibusdam iste commodi voluptates pariatur iure est.', '2022-09-13 19:03:09', NULL, 2, 93),
(18, 'eaque', 'Non ad omnis inventore sed voluptates. Autem eos praesentium dolorum dolorem. Explicabo non autem minima modi dolor laboriosam. Eum et libero sit non.', '2022-09-13 19:03:09', NULL, 2, 101),
(19, 'rerum', 'Cupiditate dolores harum voluptas nihil doloremque. Aut qui non impedit nostrum vel vitae non. Sunt et ut voluptatem debitis aspernatur quasi molestias.', '2022-09-13 19:03:09', NULL, 1, 6),
(20, 'consequatur', 'Mollitia aut repellat excepturi fugit. Aliquam praesentium laboriosam accusantium ex consequuntur provident pariatur quia. Cumque perferendis ut optio vero.', '2022-09-13 19:03:09', NULL, 1, 92),
(21, 'consectetur', 'Molestiae dolores minima error libero iure. Id officiis veritatis reiciendis sequi ipsa saepe. Eveniet in ea animi et non.', '2022-09-13 19:03:09', NULL, 3, 37),
(22, 'molestias', 'Dolorem et facilis officia rem. Aut occaecati aliquam rerum ratione eaque vel animi. Consectetur ipsa quisquam ab laborum. Quam sit eius vel enim quisquam nisi fugiat sit.', '2022-09-13 19:03:09', NULL, 2, 25),
(23, 'unde', 'Ea ea officia hic et quisquam est saepe. Voluptatem voluptatem omnis explicabo voluptas. Et et ea sunt suscipit sint corrupti incidunt nisi.', '2022-09-13 19:03:09', NULL, 3, 36),
(24, 'iure', 'Cumque dicta eum qui consequuntur. Qui ipsam nihil maxime corporis. Necessitatibus odit optio eveniet aut sit beatae in.', '2022-09-13 19:03:09', NULL, 1, 79),
(25, 'suscipit', 'Exercitationem sit voluptatum explicabo qui. Consectetur error dolor eveniet illo et. Qui earum consectetur veritatis. Omnis adipisci et velit ratione.', '2022-09-13 19:03:09', NULL, 1, 103),
(26, 'voluptatem', 'Aperiam distinctio ratione et ducimus. Sint eveniet et expedita animi numquam ut.', '2022-09-13 19:03:09', NULL, 2, 60),
(27, 'rerum', 'Non voluptatum et repellat. Deleniti saepe non dolorem officiis.', '2022-09-13 19:03:09', NULL, 3, 61),
(28, 'saepe', 'Voluptas animi explicabo inventore ipsam reiciendis. Odit qui unde impedit. Nihil minima quia est illo.', '2022-09-13 19:03:09', NULL, 1, 30),
(29, 'dolorum', 'Adipisci eum laborum nobis cum. Voluptas veniam sunt ea eveniet sint. Commodi laboriosam dolorum eum ducimus et fuga. Id exercitationem nihil reiciendis voluptatibus.', '2022-09-13 19:03:09', NULL, 2, 84),
(30, 'consectetur', 'Occaecati iure aut earum nulla consectetur. Alias quidem id enim consequuntur. Sed neque qui maxime reprehenderit velit.', '2022-09-13 19:03:09', NULL, 2, 60),
(31, 'voluptatibus', 'In iusto amet dolorum quisquam et animi voluptate. Libero explicabo cupiditate non autem alias rem. Sunt quis temporibus rerum adipisci.', '2022-09-13 19:03:09', NULL, 3, 10),
(32, 'eaque', 'Sed incidunt quidem ut quos cum. Quas facilis harum ea eum. Voluptatem quos nemo rerum totam voluptas quod commodi. Et id numquam qui nisi sed accusantium accusantium.', '2022-09-13 19:03:09', NULL, 3, 54),
(33, 'animi', 'Architecto molestiae in qui odit id. Blanditiis explicabo sunt asperiores sed molestiae laudantium sit. Et dolor nobis dolore quidem eos.', '2022-09-13 19:03:09', NULL, 3, 74),
(34, 'animi', 'Illo esse consequatur mollitia dolorem itaque. Delectus doloribus ab at ut. Ut aliquam quia in aliquid quis maiores.', '2022-09-13 19:03:09', NULL, 1, 25),
(35, 'tenetur', 'Ut id nulla quo quam omnis. Perferendis quas nihil voluptas corrupti. Sed id laboriosam quia reiciendis quidem vel odit tempore.', '2022-09-13 19:03:09', NULL, 3, 65),
(36, 'tempore', 'Quis suscipit ut iusto consectetur vitae illo dolor. Error omnis sit consequatur officia eos voluptatem. Voluptatum error et rerum deleniti.', '2022-09-13 19:03:09', NULL, 2, 76),
(37, 'dignissimos', 'Voluptas voluptatem porro dignissimos tempora ut excepturi. Est praesentium fugiat dolore qui nobis repellendus.', '2022-09-13 19:03:09', NULL, 3, 95),
(38, 'ut', 'Officiis voluptate voluptas inventore non provident odit nesciunt. Reprehenderit illo nisi eius omnis. Omnis deleniti aut ad sed et porro.', '2022-09-13 19:03:09', NULL, 3, 67),
(39, 'repudiandae', 'Illo aliquid odio reiciendis enim eius et minima nihil. In et et aut et. Et corporis repudiandae maxime dolor.', '2022-09-13 19:03:09', NULL, 2, 31),
(40, 'qui', 'Libero adipisci nulla dolor recusandae qui et. Et excepturi porro fugiat dicta est neque fuga. Sed sapiente adipisci et soluta neque dignissimos.', '2022-09-13 19:03:09', NULL, 1, 66),
(41, 'impedit', 'Sit nulla est dolores sit. Et exercitationem iste ut voluptatem earum delectus alias qui. Omnis quis laboriosam eos est eos quibusdam.', '2022-09-13 19:03:09', NULL, 2, 43),
(42, 'quaerat', 'Earum nostrum unde esse sunt. Ab rerum rem minima. Libero quia sapiente omnis beatae sint voluptatem. Aut itaque natus aliquam quod deleniti.', '2022-09-13 19:03:09', NULL, 1, 31),
(43, 'qui', 'Quo est dignissimos id aspernatur sed. Earum illo voluptatem distinctio non sed. Nihil ut soluta ducimus ut. Error est quia eos sit accusantium.', '2022-09-13 19:03:09', NULL, 2, 10),
(44, 'non', 'In sed exercitationem omnis quod quae qui nisi. Dignissimos a numquam quia sapiente. Dolores similique voluptas sed odit.', '2022-09-13 19:03:09', NULL, 2, 89),
(45, 'aut', 'Perferendis praesentium velit incidunt voluptates. Aperiam voluptas odio tenetur quis doloribus. Quia et et sunt rerum.', '2022-09-13 19:03:09', NULL, 3, 72),
(46, 'enim', 'Dolor cupiditate veritatis praesentium itaque quae. Dolorum est dignissimos veniam voluptas. Numquam unde ea debitis in. Recusandae numquam rem ipsum aliquam.', '2022-09-13 19:03:09', NULL, 1, 72),
(47, 'dolores', 'Deleniti consectetur amet consequuntur fugiat ut. Harum perferendis harum rem qui. Alias soluta eligendi accusantium omnis.', '2022-09-13 19:03:09', NULL, 2, 47),
(48, 'dolor', 'Occaecati porro nostrum vel quae. Hic nobis officiis sed possimus eligendi. Eius quos illo eum magnam quaerat qui nisi. Tempore reprehenderit est et est eaque architecto quo.', '2022-09-13 19:03:09', NULL, 1, 82),
(49, 'voluptatem', 'Ipsa quod quos sint ut veniam. Accusamus nemo sequi dolorem. Voluptas modi esse tempora voluptate iure sit. Labore asperiores velit suscipit enim et odit amet quia.', '2022-09-13 19:03:09', NULL, 3, 39),
(50, 'consectetur', 'Delectus rerum et nihil omnis minima vel. Neque quis sit sit voluptatibus suscipit similique. Laborum quisquam pariatur repellendus aliquam ut.', '2022-09-13 19:03:09', NULL, 1, 28),
(51, 'similique', 'Quas voluptates reiciendis omnis id tempore amet totam. Qui rerum dolorem molestiae cumque saepe et doloribus nisi. Asperiores non eius fugiat ut qui error.', '2022-09-13 19:03:09', NULL, 3, 37),
(52, 'autem', 'Corporis quos illum ipsum sit distinctio aliquid reiciendis. Nam perferendis vitae unde minima repudiandae aut. Eos et aut omnis sint. Labore libero dolor nobis quod.', '2022-09-13 19:03:09', NULL, 1, 49),
(53, 'rerum', 'Facilis ut omnis nostrum repellendus atque sed voluptatum. Soluta ea fugit qui itaque. Illo nostrum est dolores id voluptas porro cumque. Accusamus et dolorum officia quisquam ad.', '2022-09-13 19:03:09', NULL, 2, 59),
(54, 'deserunt', 'Doloremque rerum id quis delectus dolorem omnis explicabo fugiat. Temporibus nihil velit ut quia modi excepturi in. Et est mollitia excepturi esse magnam.', '2022-09-13 19:03:09', NULL, 1, 28),
(55, 'nobis', 'Ea non hic suscipit aut. Voluptas officia iusto vero est. Ut ex eos sunt.', '2022-09-13 19:03:09', NULL, 3, 97),
(56, 'sunt', 'Qui voluptate debitis beatae harum optio in aut. Temporibus debitis modi at quae.', '2022-09-13 19:03:09', NULL, 3, 24),
(57, 'voluptas', 'Ut repellendus doloribus ea consequatur eos ut. Repellat voluptatem laborum error minus et repellat. Commodi aut velit et dolor voluptas.', '2022-09-13 19:03:09', NULL, 3, 15),
(58, 'possimus', 'Eos dolor rerum consequuntur optio quod. Commodi consequatur voluptas nam consectetur. Sapiente dolor amet nobis ut neque.', '2022-09-13 19:03:09', NULL, 3, 4),
(59, 'voluptatem', 'Esse eum et aut et et alias tempora id. Est voluptas excepturi dolores porro culpa. Consequatur neque ut et.', '2022-09-13 19:03:09', NULL, 3, 77),
(60, 'facilis', 'Dolorum quia nemo laudantium deleniti voluptatem. A doloremque blanditiis repellat dolorem odio. Id enim dicta ab officia. Alias rem dolor eligendi nobis.', '2022-09-13 19:03:09', NULL, 1, 57),
(61, 'fugiat', 'Non labore dolore ut dolor. Illo culpa eveniet repellat nam voluptas eum ut. Maiores autem quis suscipit quo.', '2022-09-13 19:03:09', NULL, 1, 31),
(62, 'quos', 'Rerum facere illum ex ad. Voluptatem sapiente et ullam ea recusandae omnis laborum. Voluptatem impedit et ratione exercitationem.', '2022-09-13 19:03:09', NULL, 3, 66),
(63, 'aut', 'Inventore et sunt pariatur. Ipsum aut qui aut maiores illo quo. Quae culpa porro consequuntur doloremque.', '2022-09-13 19:03:09', NULL, 3, 75),
(64, 'hic', 'Id hic doloremque molestiae et vel temporibus. Eum hic vel eaque sed voluptate sunt et. Et vel consectetur autem illo.', '2022-09-13 19:03:09', NULL, 2, 49),
(65, 'blanditiis', 'Exercitationem officia consequatur enim. Dignissimos sequi perferendis quis est quam minus autem. Consequatur magnam dolores veniam dolores.', '2022-09-13 19:03:09', NULL, 3, 12),
(66, 'itaque', 'Velit voluptates ut voluptates dolor doloribus. Voluptatem sint recusandae in vitae hic voluptas. Voluptas dolorum quia ut cumque.', '2022-09-13 19:03:09', NULL, 2, 5),
(67, 'est', 'Sunt laborum nihil cumque dolores. Officiis rerum dignissimos soluta fuga eaque magnam dolor neque. Ullam in ipsa id aut dolorum qui deserunt.', '2022-09-13 19:03:09', NULL, 1, 16),
(68, 'incidunt', 'Molestiae et suscipit debitis corporis omnis maxime. Voluptates minus odio culpa ipsa sit. Reiciendis tempore iste ut eum non.', '2022-09-13 19:03:09', NULL, 2, 22),
(69, 'harum', 'Atque perferendis iusto numquam veniam quidem voluptas ut. Distinctio fugiat dolores in. Sed sed perferendis atque perferendis. Aspernatur esse adipisci error harum.', '2022-09-13 19:03:09', NULL, 2, 97),
(70, 'vel', 'Et asperiores sed et enim expedita soluta voluptatem reprehenderit. Praesentium exercitationem nam incidunt aut. Nostrum tenetur minus qui.', '2022-09-13 19:03:09', NULL, 3, 57),
(71, 'voluptas', 'Et fugit voluptas est ut labore. Et officia ea consequatur. Et aliquid itaque id provident ullam quae aut.', '2022-09-13 19:03:09', NULL, 1, 96),
(72, 'fuga', 'Ut voluptates totam ea. Quam qui nihil ad beatae provident. Dolores consectetur ea aliquid iure ea facere.', '2022-09-13 19:03:09', NULL, 3, 15),
(73, 'natus', 'Et dolor qui laborum placeat ut quos. Sint qui sed soluta. Reprehenderit dolor deserunt consectetur tenetur.', '2022-09-13 19:03:09', NULL, 3, 35),
(74, 'consequatur', 'Odio animi vero qui nulla dolorem dolor. Inventore earum et est quos. Commodi rem sed qui minus expedita id qui. Quo sit quae qui quo quod omnis.', '2022-09-13 19:03:09', NULL, 1, 11),
(75, 'at', 'Facilis perferendis quidem consequuntur sed voluptatum aliquid facilis. Accusamus eaque et necessitatibus ipsum in magnam voluptatem. Illo sint vel non aut ullam.', '2022-09-13 19:03:09', NULL, 1, 35),
(76, 'est', 'Sed repellendus quisquam nam labore explicabo adipisci possimus. Distinctio modi dicta assumenda error nisi. Et iure consectetur harum odio qui.', '2022-09-13 19:03:09', NULL, 2, 6),
(77, 'dolorum', 'Distinctio incidunt voluptatibus saepe provident praesentium laudantium. Deserunt repellat aperiam consectetur amet. Libero amet amet culpa accusamus ut sunt quia.', '2022-09-13 19:03:09', NULL, 2, 5),
(78, 'et', 'Ipsam ipsum doloribus doloribus esse libero est rerum. Alias eum consequuntur odio et velit repudiandae ut ad. A aliquid qui ut eum.', '2022-09-13 19:03:09', NULL, 3, 19),
(79, 'odit', 'Voluptates et sit nostrum nesciunt. Quia aut suscipit fugiat cupiditate qui et non. Eos sit quia odio nihil.', '2022-09-13 19:03:09', NULL, 2, 30),
(80, 'ut', 'Et fuga eum molestias exercitationem. Cupiditate sed et inventore a reprehenderit ad deleniti. Aut rerum provident dolor nesciunt minus.', '2022-09-13 19:03:09', NULL, 1, 56),
(81, 'repellat', 'Doloremque nihil qui sequi culpa. Explicabo exercitationem ut quo debitis. Et repellendus fugit voluptatem et illum velit.', '2022-09-13 19:03:09', NULL, 2, 87),
(82, 'quia', 'Ab quisquam facilis velit voluptatum repellendus et. Vitae in corrupti vel illo dolor nihil. Minus deleniti eligendi quis.', '2022-09-13 19:03:09', NULL, 2, 81),
(83, 'amet', 'Animi sint blanditiis quo quia asperiores. Unde nam voluptas quia odio tenetur rerum expedita. Praesentium animi qui eum mollitia exercitationem adipisci.', '2022-09-13 19:03:09', NULL, 3, 14),
(84, 'quia', 'Officia rerum dolor molestiae nulla expedita. Dolorem nostrum et sit est ad. Veniam expedita et consequuntur omnis molestiae earum a eius. Necessitatibus qui consectetur esse quo.', '2022-09-13 19:03:09', NULL, 3, 75),
(85, 'alias', 'Eveniet quis magnam sapiente consequatur. Sint exercitationem sunt illo blanditiis et eveniet labore ducimus. Doloremque distinctio maxime iusto vel.', '2022-09-13 19:03:09', NULL, 2, 33),
(86, 'qui', 'Esse itaque tenetur fuga autem temporibus. Quam qui labore ut. Nam nobis numquam recusandae ad. Iusto ipsum modi accusantium qui. Libero natus est quia cumque blanditiis et.', '2022-09-13 19:03:09', NULL, 1, 33),
(87, 'non', 'Saepe amet sint voluptatibus maiores sit et. Voluptatem tempore ex molestiae beatae consequatur blanditiis tempora. Neque corporis autem mollitia alias et sit.', '2022-09-13 19:03:09', NULL, 2, 88),
(88, 'repudiandae', 'Ut veniam officia velit dolore. Porro fugit dolor distinctio et perferendis consequatur. Ea nihil quisquam qui dolores optio hic iure. Expedita error a recusandae.', '2022-09-13 19:03:09', NULL, 1, 71),
(89, 'neque', 'Minus laboriosam nam eaque laboriosam. Architecto aliquam quis nihil est sit corporis et. Sed velit modi ipsum commodi iure unde.', '2022-09-13 19:03:09', NULL, 2, 77),
(90, 'nam', 'Harum sit eum accusantium incidunt non nihil. Itaque beatae placeat autem qui recusandae et et. Voluptatem aut corrupti ab consectetur non. Est impedit quia soluta et unde.', '2022-09-13 19:03:09', NULL, 2, 39),
(91, 'rerum', 'Voluptates consequuntur dignissimos porro error molestias non dolorem. Labore sint cupiditate eos occaecati sunt. Omnis ducimus qui sit.', '2022-09-13 19:03:09', NULL, 2, 63),
(92, 'repellendus', 'Optio corrupti ducimus tenetur. Iure totam debitis quo quia aut dignissimos.', '2022-09-13 19:03:09', NULL, 2, 93),
(93, 'maxime', 'Sint fugit saepe et ipsa esse sapiente debitis. Quia architecto sed et nostrum qui. Corrupti nesciunt autem deleniti. Cupiditate nihil accusantium mollitia earum.', '2022-09-13 19:03:09', NULL, 3, 99),
(94, 'dolor', 'Exercitationem voluptatibus cum sit corrupti. Tempore cupiditate ratione aut qui placeat beatae nam. Voluptatum maiores ipsum culpa quod. Accusantium nam vel porro odio provident.', '2022-09-13 19:03:09', NULL, 1, 96),
(95, 'rem', 'Enim est sed quibusdam provident. Eaque ad sit ea maiores iusto. Incidunt enim occaecati mollitia inventore exercitationem adipisci in quidem.', '2022-09-13 19:03:09', NULL, 1, 65),
(96, 'iure', 'Vero ipsam commodi consequatur esse quo. Vel qui sapiente earum illum est rerum facilis odit. Quam esse sit pariatur delectus eos reiciendis.', '2022-09-13 19:03:09', NULL, 1, 14),
(97, 'cumque', 'Aliquam nam magnam laboriosam. Molestiae quibusdam voluptatem voluptatem pariatur quisquam officia qui. Cumque dolor est autem asperiores. Maiores in consequatur id commodi.', '2022-09-13 19:03:09', NULL, 3, 40),
(98, 'itaque', 'Doloribus unde ipsa cumque eos. Fugiat ex velit optio molestiae est laudantium et. Beatae cumque dolor autem qui modi aliquid. Veniam quibusdam aut ullam ipsam.', '2022-09-13 19:03:09', NULL, 2, 54),
(99, 'non', 'Ea voluptas ut ut quos ut et modi eius. Debitis ipsa repellendus autem iusto at et. Sit iusto et reprehenderit distinctio quidem.', '2022-09-13 19:03:09', NULL, 1, 90),
(100, 'qui', 'Inventore itaque quas minima sapiente tempore ipsa corrupti. Vel et ipsum unde et. Saepe ut dolorum ut ratione.', '2022-09-13 19:03:09', NULL, 2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `id` int(1) NOT NULL,
  `Disponibilidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `disponibilidad`
--

INSERT INTO `disponibilidad` (`id`, `Disponibilidad`) VALUES
(1, 'Disponible'),
(2, 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedido`
--

CREATE TABLE `estadopedido` (
  `id` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  `Color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estadopedido`
--

INSERT INTO `estadopedido` (`id`, `Estado`, `Color`) VALUES
(1, 'No pagado', 'warning'),
(2, 'Pagado', 'info'),
(3, 'Entregado', 'light'),
(4, 'Cancelado', 'danger'),
(5, 'Carrito', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosoporte`
--

CREATE TABLE `estadosoporte` (
  `id` int(1) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estadosoporte`
--

INSERT INTO `estadosoporte` (`id`, `Estado`, `Color`) VALUES
(1, 'No arreglado', 'danger'),
(2, 'En revisión', 'warning'),
(3, 'Arreglado', 'light');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialpedidos`
--

CREATE TABLE `historialpedidos` (
  `id` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(30) NOT NULL,
  `id_estado` int(1) NOT NULL DEFAULT 5,
  `id_preparacion` int(1) NOT NULL DEFAULT 1,
  `id_pago` int(1) DEFAULT NULL,
  `Precio` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historialpedidos`
--

INSERT INTO `historialpedidos` (`id`, `Fecha`, `id_usuario`, `id_estado`, `id_preparacion`, `id_pago`, `Precio`) VALUES
(1, '2022-09-13 19:03:28', 100, 3, 2, 1, 193072),
(2, '2022-09-13 19:03:28', 67, 1, 1, 1, 117291),
(3, '2022-09-13 19:03:28', 69, 1, 2, 1, 233223),
(4, '2022-09-13 19:03:28', 17, 4, 2, 1, 153179),
(5, '2022-09-13 19:03:28', 85, 3, 1, 2, 18831),
(6, '2022-09-13 19:03:28', 33, 4, 2, 1, 231859),
(7, '2022-09-13 19:03:28', 75, 3, 1, 3, 79631),
(8, '2022-09-13 19:03:28', 76, 4, 2, 1, 177506),
(9, '2022-09-13 19:03:28', 70, 4, 1, 2, 13246),
(10, '2022-09-13 19:03:28', 17, 1, 1, 1, 96543),
(11, '2022-09-13 19:03:28', 24, 1, 2, 1, 125767),
(12, '2022-09-13 19:03:28', 69, 2, 2, 1, 199958),
(13, '2022-09-13 19:03:28', 8, 3, 2, 2, 146289),
(14, '2022-09-13 19:03:28', 78, 4, 1, 2, 122686),
(15, '2022-09-13 19:03:28', 69, 1, 1, 3, 75387),
(16, '2022-09-13 19:03:28', 70, 2, 1, 3, 169538),
(17, '2022-09-13 19:03:28', 59, 4, 2, 2, 240003),
(18, '2022-09-13 19:03:28', 65, 5, 2, 3, 124167),
(19, '2022-09-13 19:03:28', 77, 5, 1, 3, 161148),
(20, '2022-09-13 19:03:28', 52, 5, 2, 1, 35826),
(21, '2022-09-13 19:03:28', 18, 2, 1, 1, 234572),
(22, '2022-09-13 19:03:28', 95, 4, 2, 1, 52871),
(23, '2022-09-13 19:03:28', 19, 4, 2, 2, 100831),
(24, '2022-09-13 19:03:28', 32, 4, 1, 3, 17120),
(25, '2022-09-13 19:03:28', 50, 3, 1, 3, 192994),
(26, '2022-09-13 19:03:28', 6, 3, 1, 2, 220909),
(27, '2022-09-13 19:03:28', 6, 4, 1, 1, 36303),
(28, '2022-09-13 19:03:28', 82, 4, 1, 3, 65037),
(29, '2022-09-13 19:03:28', 31, 3, 2, 3, 57550),
(30, '2022-09-13 19:03:28', 61, 1, 1, 3, 82854),
(31, '2022-09-13 19:03:28', 84, 4, 1, 3, 1845),
(32, '2022-09-13 19:03:28', 93, 5, 1, 1, 163238),
(33, '2022-09-13 19:03:28', 95, 1, 1, 2, 110158),
(34, '2022-09-13 19:03:28', 53, 3, 1, 2, 99230),
(35, '2022-09-13 19:03:28', 36, 2, 2, 3, 10792),
(36, '2022-09-13 19:03:28', 31, 3, 2, 2, 40383),
(37, '2022-09-13 19:03:28', 89, 5, 2, 3, 136090),
(38, '2022-09-13 19:03:28', 53, 2, 1, 2, 26012),
(39, '2022-09-13 19:03:28', 45, 3, 2, 1, 248841),
(40, '2022-09-13 19:03:28', 17, 2, 1, 1, 94157),
(41, '2022-09-13 19:03:28', 20, 4, 1, 3, 17333),
(42, '2022-09-13 19:03:28', 43, 5, 1, 2, 218355),
(43, '2022-09-13 19:03:28', 25, 1, 1, 1, 222207),
(44, '2022-09-13 19:03:28', 29, 5, 2, 2, 84342),
(45, '2022-09-13 19:03:28', 103, 2, 2, 2, 205505),
(46, '2022-09-13 19:03:28', 40, 2, 2, 2, 242784),
(47, '2022-09-13 19:03:28', 12, 1, 2, 1, 79184),
(48, '2022-09-13 19:03:28', 94, 2, 2, 1, 3613),
(49, '2022-09-13 21:53:51', 82, 5, 1, 2, 29492),
(50, '2022-09-13 21:53:51', 67, 1, 2, 2, 145598),
(51, '2022-09-13 21:53:51', 63, 3, 2, 1, 117228),
(52, '2022-09-13 21:53:51', 101, 3, 1, 3, 15366),
(53, '2022-09-13 21:53:51', 95, 5, 2, 3, 54173),
(54, '2022-09-13 21:53:51', 46, 5, 1, 3, 129055),
(55, '2022-09-13 21:53:51', 32, 5, 1, 3, 74941),
(56, '2022-09-13 21:53:51', 66, 2, 2, 2, 13465),
(57, '2022-09-13 21:53:51', 42, 3, 2, 2, 5858),
(58, '2022-09-13 21:53:51', 87, 4, 2, 2, 17970),
(59, '2022-09-13 21:53:51', 86, 1, 1, 2, 218045),
(60, '2022-09-13 21:53:51', 86, 4, 1, 3, 237440),
(61, '2022-09-13 21:53:51', 59, 3, 2, 1, 75394),
(62, '2022-09-13 21:53:51', 15, 1, 1, 2, 53208),
(63, '2022-09-13 21:53:51', 69, 1, 1, 3, 28900),
(64, '2022-09-13 21:53:51', 68, 3, 2, 3, 47373),
(65, '2022-09-13 21:53:51', 38, 1, 1, 1, 248361),
(66, '2022-09-13 21:53:51', 74, 4, 2, 1, 56042),
(67, '2022-09-13 21:53:51', 50, 4, 1, 3, 22105),
(68, '2022-09-13 21:53:51', 44, 5, 1, 1, 156156),
(69, '2022-09-13 21:53:51', 98, 4, 1, 1, 169645),
(70, '2022-09-13 21:53:51', 4, 3, 1, 1, 107381),
(71, '2022-09-13 21:53:51', 37, 4, 2, 1, 57313),
(72, '2022-09-13 21:53:51', 74, 4, 1, 2, 213175),
(73, '2022-09-13 21:53:51', 11, 1, 2, 3, 149877),
(74, '2022-09-13 21:53:51', 57, 2, 1, 3, 99820),
(75, '2022-09-13 21:53:51', 22, 4, 2, 1, 239503),
(76, '2022-09-13 21:53:51', 36, 4, 2, 1, 67485),
(77, '2022-09-13 21:53:51', 14, 2, 2, 3, 191787),
(78, '2022-09-13 21:53:51', 55, 5, 1, 3, 14307),
(79, '2022-09-13 21:53:51', 21, 2, 2, 3, 106519),
(80, '2022-09-13 21:53:51', 39, 1, 2, 3, 157517),
(81, '2022-09-13 21:53:51', 55, 4, 2, 1, 159380),
(82, '2022-09-13 21:53:51', 9, 4, 1, 2, 17554),
(83, '2022-09-13 21:53:51', 35, 4, 2, 1, 218821),
(84, '2022-09-13 21:53:51', 39, 5, 2, 2, 192162),
(85, '2022-09-13 21:53:51', 5, 4, 2, 1, 235419),
(86, '2022-09-13 21:53:51', 43, 2, 1, 3, 94192),
(87, '2022-09-13 21:53:51', 40, 3, 1, 2, 198011),
(88, '2022-09-13 21:53:51', 61, 1, 2, 3, 110107),
(89, '2022-09-13 21:53:51', 5, 1, 2, 2, 43214),
(90, '2022-09-13 21:53:51', 80, 3, 1, 3, 1087),
(91, '2022-09-13 21:53:51', 20, 5, 2, 3, 99238),
(92, '2022-09-13 21:53:51', 49, 1, 2, 3, 52351),
(93, '2022-09-13 21:53:51', 67, 4, 2, 1, 249562),
(94, '2022-09-13 21:53:51', 102, 1, 2, 2, 167820),
(95, '2022-09-13 21:53:51', 28, 2, 1, 1, 123116),
(96, '2022-09-13 21:53:51', 29, 1, 1, 1, 152909),
(97, '2022-09-13 21:53:51', 23, 1, 2, 2, 148902),
(98, '2022-09-13 21:53:51', 41, 2, 2, 3, 69195),
(99, '2022-09-13 21:53:51', 64, 5, 2, 1, 75091),
(100, '2022-09-13 21:53:51', 77, 5, 2, 3, 100409),
(101, '2022-09-13 21:53:51', 87, 3, 1, 1, 172445),
(102, '2022-09-13 21:53:51', 18, 4, 2, 2, 13741),
(103, '2022-09-13 21:53:51', 48, 5, 1, 1, 116375),
(104, '2022-09-13 21:53:51', 65, 2, 1, 3, 223944),
(105, '2022-09-13 21:53:51', 78, 2, 2, 2, 190700),
(106, '2022-09-13 21:53:51', 82, 1, 1, 3, 141572),
(107, '2022-09-13 21:53:51', 69, 3, 2, 2, 179011),
(108, '2022-09-13 21:53:51', 9, 4, 1, 3, 25440),
(109, '2022-09-13 21:53:51', 95, 3, 1, 3, 82659),
(110, '2022-09-13 21:53:51', 87, 3, 2, 3, 214793),
(111, '2022-09-13 21:53:51', 29, 3, 2, 1, 18024),
(112, '2022-09-13 21:53:51', 61, 1, 1, 1, 156117),
(113, '2022-09-13 21:53:51', 7, 3, 2, 1, 56687),
(114, '2022-09-13 21:53:51', 18, 4, 1, 3, 103353),
(115, '2022-09-13 21:53:51', 51, 3, 1, 1, 88433),
(116, '2022-09-13 21:53:51', 65, 3, 2, 1, 227126),
(117, '2022-09-13 21:53:51', 91, 4, 2, 2, 94416),
(118, '2022-09-13 21:53:51', 11, 1, 1, 3, 115818),
(119, '2022-09-13 21:53:51', 82, 1, 1, 1, 169463),
(120, '2022-09-13 21:53:51', 24, 5, 2, 2, 122930),
(121, '2022-09-13 21:53:51', 51, 4, 2, 3, 62275),
(122, '2022-09-13 21:53:51', 28, 5, 2, 1, 79955),
(123, '2022-09-13 21:53:51', 46, 1, 2, 1, 123878),
(124, '2022-09-13 21:53:51', 44, 1, 1, 3, 200018),
(125, '2022-09-13 21:53:51', 7, 1, 2, 2, 14209),
(126, '2022-09-13 21:53:51', 71, 2, 1, 2, 206105),
(127, '2022-09-13 21:53:51', 46, 3, 2, 2, 187713),
(128, '2022-09-13 21:53:51', 103, 4, 2, 1, 205779),
(129, '2022-09-13 21:53:51', 15, 2, 1, 2, 106862),
(130, '2022-09-13 21:53:51', 58, 3, 1, 3, 32727),
(131, '2022-09-13 21:53:51', 45, 4, 1, 3, 123976),
(132, '2022-09-13 21:53:51', 87, 4, 1, 1, 70810),
(133, '2022-09-13 21:53:51', 94, 5, 2, 1, 138247),
(134, '2022-09-13 21:53:51', 82, 2, 1, 2, 170328),
(135, '2022-09-13 21:53:51', 27, 5, 2, 1, 97657),
(136, '2022-09-13 21:53:51', 6, 5, 2, 2, 156264),
(137, '2022-09-13 21:53:51', 85, 5, 2, 1, 197692),
(138, '2022-09-13 21:53:51', 13, 1, 2, 1, 132585),
(139, '2022-09-13 21:53:51', 32, 1, 2, 2, 44223),
(140, '2022-09-13 21:53:51', 53, 4, 1, 2, 117840),
(141, '2022-09-13 21:53:51', 63, 1, 2, 3, 73987),
(142, '2022-09-13 21:53:51', 76, 4, 1, 3, 81286),
(143, '2022-09-13 21:53:51', 69, 4, 2, 1, 156903),
(144, '2022-09-13 21:53:51', 29, 3, 2, 1, 192331),
(145, '2022-09-13 21:53:51', 36, 5, 1, 3, 54831),
(146, '2022-09-13 21:53:51', 15, 2, 2, 1, 47775),
(147, '2022-09-13 21:53:51', 76, 3, 1, 2, 202265),
(148, '2022-09-13 21:53:51', 83, 1, 2, 2, 200623);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `id` int(11) NOT NULL,
  `Metodo` varchar(30) NOT NULL,
  `Descripcion` varchar(600) NOT NULL,
  `Foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`id`, `Metodo`, `Descripcion`, `Foto`) VALUES
(1, 'Efectivo', 'Obtienes un código QR que presentas en la caja de la cafetería para poder pagar en efectivo y registrar el pago, una vez registrado puedes usar el mismo código para reclamar el pedido', 'efectivo.png'),
(2, 'PSE', 'Eres redirigido a la página de PSE, en la que podrás entrar a tu banco para poder realizar la transferencia electrónica, una vez sea validado el pago se generará un código QR con el que podrás reclamar el pedido una vez esté listo', 'pse.jpg'),
(3, 'Nequi', 'Eres redirigido a la página/aplicación de Nequi para que realices el pago del pedido, una vez esta transacción sea válida entonces se generará un código QR para que puedas reclamar tus productos en la cafetería', 'nequi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `Cantidad` int(4) NOT NULL DEFAULT 1,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_producto`, `Cantidad`, `id`) VALUES
(64, 20, 1, 1),
(141, 49, 3, 2),
(117, 14, 4, 3),
(28, 20, 5, 4),
(104, 57, 1, 5),
(107, 44, 3, 6),
(145, 14, 1, 7),
(76, 54, 2, 8),
(107, 20, 5, 9),
(11, 62, 2, 10),
(4, 58, 5, 11),
(101, 14, 1, 12),
(45, 40, 4, 13),
(125, 13, 5, 14),
(32, 46, 4, 15),
(115, 15, 5, 16),
(45, 26, 3, 17),
(74, 2, 3, 18),
(55, 51, 3, 19),
(70, 14, 4, 20),
(69, 12, 5, 21),
(124, 12, 5, 22),
(42, 12, 1, 23),
(81, 54, 5, 24),
(38, 40, 1, 25),
(112, 25, 4, 26),
(81, 20, 2, 27),
(73, 18, 5, 28),
(117, 42, 3, 29),
(148, 5, 1, 30),
(88, 34, 1, 31),
(142, 60, 2, 32),
(135, 55, 2, 33),
(107, 48, 1, 34),
(133, 34, 5, 35),
(81, 49, 1, 36),
(64, 39, 3, 37),
(10, 50, 3, 38),
(10, 42, 1, 39),
(145, 16, 2, 40),
(119, 28, 3, 41),
(51, 14, 3, 42),
(116, 13, 4, 43),
(122, 54, 5, 44),
(2, 37, 1, 45),
(62, 36, 5, 46),
(116, 41, 2, 47),
(26, 57, 3, 48),
(102, 4, 3, 49),
(99, 9, 2, 50),
(23, 4, 2, 51),
(55, 5, 3, 52),
(36, 59, 3, 53),
(145, 36, 3, 54),
(4, 35, 4, 55),
(62, 14, 2, 56),
(51, 23, 1, 57),
(118, 56, 4, 58),
(122, 43, 3, 59),
(33, 56, 5, 60),
(108, 15, 1, 61),
(36, 35, 2, 62),
(103, 27, 4, 63),
(111, 40, 2, 64),
(108, 60, 3, 65),
(11, 4, 4, 66),
(34, 15, 1, 67),
(110, 23, 3, 68),
(76, 38, 3, 69),
(24, 1, 3, 70),
(82, 4, 3, 71),
(71, 26, 5, 72),
(30, 35, 1, 73),
(146, 35, 2, 74),
(80, 37, 4, 75),
(59, 8, 3, 76),
(100, 1, 1, 77),
(69, 37, 2, 78),
(108, 43, 3, 79),
(57, 51, 2, 80),
(105, 37, 5, 81),
(106, 45, 2, 82),
(8, 30, 2, 83),
(28, 15, 2, 84),
(18, 64, 2, 85),
(37, 50, 1, 86),
(92, 45, 1, 87),
(80, 3, 4, 88),
(64, 59, 1, 89),
(62, 9, 1, 90),
(118, 38, 5, 91),
(67, 35, 2, 92),
(15, 22, 5, 93),
(8, 18, 4, 94),
(116, 20, 1, 95),
(66, 49, 3, 96),
(60, 15, 2, 97),
(81, 21, 4, 98),
(30, 29, 3, 99),
(99, 49, 5, 100),
(138, 54, 1, 101),
(3, 26, 2, 102),
(123, 53, 3, 103),
(92, 46, 3, 104),
(50, 1, 5, 105),
(118, 18, 2, 106),
(85, 50, 5, 107),
(98, 24, 2, 108),
(69, 35, 1, 109),
(106, 20, 1, 110),
(112, 5, 5, 111),
(43, 41, 5, 112),
(102, 10, 4, 113),
(98, 8, 4, 114),
(63, 19, 2, 115),
(126, 43, 1, 116),
(107, 55, 3, 117),
(148, 48, 3, 118),
(102, 59, 4, 119),
(121, 19, 4, 120),
(81, 49, 5, 121),
(58, 32, 3, 122),
(115, 59, 5, 123),
(118, 31, 2, 124),
(90, 48, 4, 125),
(106, 29, 4, 126),
(93, 40, 4, 127),
(27, 8, 3, 128),
(37, 52, 1, 129),
(32, 15, 4, 130),
(46, 33, 3, 131),
(65, 27, 2, 132),
(21, 10, 5, 133),
(62, 25, 3, 134),
(126, 40, 4, 135),
(66, 23, 5, 136),
(21, 21, 2, 137),
(121, 5, 3, 138),
(121, 51, 4, 139),
(84, 3, 4, 140),
(43, 61, 5, 141),
(110, 52, 1, 142),
(94, 31, 3, 143),
(139, 28, 1, 144),
(22, 46, 2, 145),
(121, 17, 4, 146),
(37, 9, 2, 147),
(134, 9, 1, 148),
(136, 32, 3, 149),
(39, 51, 3, 150),
(113, 3, 3, 151),
(78, 49, 2, 152),
(37, 14, 2, 153),
(7, 42, 1, 154),
(74, 27, 5, 155),
(95, 63, 1, 156),
(71, 37, 2, 157),
(145, 34, 4, 158),
(37, 51, 4, 159),
(104, 60, 2, 160),
(134, 51, 4, 161),
(140, 59, 3, 162),
(20, 37, 1, 163),
(36, 26, 5, 164),
(55, 19, 2, 165),
(29, 10, 4, 166),
(21, 35, 2, 167),
(41, 12, 5, 168),
(68, 47, 1, 169),
(101, 57, 3, 170),
(121, 33, 4, 171),
(141, 54, 4, 172),
(138, 14, 3, 173),
(145, 8, 5, 174),
(39, 12, 4, 175),
(16, 33, 5, 176),
(50, 6, 3, 177),
(18, 25, 4, 178),
(67, 25, 5, 179),
(102, 27, 2, 180),
(76, 35, 3, 181),
(63, 40, 5, 182),
(126, 5, 2, 183),
(122, 13, 4, 184),
(86, 60, 4, 185),
(87, 7, 4, 186),
(80, 53, 1, 187),
(122, 18, 4, 188),
(4, 29, 5, 189),
(29, 59, 5, 190),
(31, 3, 5, 191),
(140, 9, 5, 192),
(13, 15, 2, 193),
(42, 2, 1, 194),
(81, 11, 2, 195),
(142, 55, 1, 196),
(95, 36, 1, 197),
(80, 39, 3, 198),
(52, 9, 2, 199),
(101, 61, 3, 200),
(20, 54, 5, 201),
(116, 28, 5, 202),
(9, 50, 1, 203),
(100, 43, 2, 204),
(145, 27, 5, 205),
(76, 61, 3, 206),
(97, 14, 5, 207),
(82, 39, 4, 208),
(128, 18, 2, 209),
(97, 5, 5, 210),
(81, 7, 1, 211),
(25, 40, 2, 212),
(85, 12, 1, 213),
(132, 45, 2, 214),
(4, 29, 2, 215),
(43, 64, 4, 216),
(100, 12, 2, 217),
(60, 64, 1, 218),
(11, 59, 4, 219),
(109, 5, 4, 220),
(85, 53, 3, 221),
(104, 17, 2, 222),
(115, 56, 3, 223),
(53, 23, 5, 224),
(72, 34, 4, 225),
(49, 43, 2, 226),
(56, 3, 3, 227),
(57, 13, 5, 228),
(10, 34, 2, 229),
(83, 11, 3, 230),
(63, 1, 1, 231),
(84, 59, 4, 232),
(27, 22, 5, 233),
(102, 12, 2, 234),
(116, 52, 4, 235),
(18, 21, 1, 236),
(140, 23, 1, 237),
(92, 51, 5, 238),
(73, 39, 5, 239),
(85, 41, 3, 240),
(54, 20, 5, 241),
(62, 28, 2, 242),
(127, 49, 3, 243),
(83, 61, 4, 244),
(75, 36, 2, 245),
(67, 51, 2, 246),
(145, 3, 2, 247),
(106, 13, 5, 248),
(80, 12, 3, 249),
(27, 37, 4, 250),
(109, 7, 1, 251),
(70, 29, 1, 252),
(77, 13, 5, 253),
(75, 43, 1, 254),
(131, 46, 5, 255),
(31, 1, 3, 256),
(143, 18, 3, 257),
(85, 11, 4, 258),
(103, 34, 4, 259),
(11, 6, 4, 260),
(21, 30, 3, 261),
(106, 33, 3, 262),
(98, 8, 4, 263),
(50, 55, 1, 264),
(115, 25, 2, 265),
(52, 36, 1, 266),
(71, 58, 1, 267),
(119, 47, 2, 268),
(122, 19, 5, 269),
(138, 27, 1, 270),
(51, 44, 1, 271),
(75, 29, 5, 272),
(89, 16, 5, 273),
(23, 56, 1, 274),
(137, 38, 2, 275),
(117, 30, 5, 276),
(88, 62, 1, 277),
(81, 50, 4, 278),
(75, 13, 1, 279),
(14, 10, 1, 280),
(32, 59, 5, 281),
(131, 54, 4, 282),
(120, 36, 1, 283),
(25, 2, 1, 284),
(93, 3, 1, 285),
(37, 11, 1, 286),
(97, 30, 3, 287),
(23, 9, 5, 288),
(121, 18, 4, 289),
(52, 43, 5, 290),
(67, 48, 1, 291),
(94, 27, 3, 292),
(110, 57, 5, 293),
(45, 44, 1, 294),
(87, 41, 1, 295),
(21, 6, 3, 296),
(9, 32, 1, 297),
(125, 6, 4, 298),
(63, 50, 2, 299),
(9, 47, 4, 300),
(55, 4, 5, 301),
(117, 5, 1, 302),
(46, 14, 3, 303),
(28, 21, 3, 304),
(1, 43, 5, 305),
(21, 25, 5, 306),
(98, 54, 4, 307),
(109, 26, 3, 308),
(12, 32, 3, 309),
(145, 3, 3, 310),
(35, 39, 4, 311),
(16, 64, 5, 312),
(19, 37, 2, 313),
(74, 1, 2, 314),
(98, 3, 3, 315),
(79, 43, 1, 316),
(123, 12, 5, 317),
(5, 23, 3, 318),
(34, 7, 5, 319),
(20, 11, 1, 320),
(72, 6, 5, 321),
(78, 47, 5, 322),
(19, 19, 2, 323),
(46, 10, 3, 324),
(103, 34, 5, 325),
(50, 4, 4, 326),
(50, 6, 4, 327),
(142, 13, 4, 328),
(82, 9, 4, 329),
(80, 8, 4, 330),
(67, 63, 3, 331),
(75, 32, 4, 332),
(50, 42, 3, 333),
(82, 47, 3, 334),
(7, 14, 1, 335),
(104, 55, 1, 336),
(120, 29, 2, 337),
(27, 22, 2, 338),
(12, 13, 2, 339),
(119, 22, 4, 340),
(35, 62, 1, 341),
(10, 62, 1, 342),
(4, 1, 4, 343),
(72, 4, 3, 344),
(23, 6, 2, 345),
(76, 45, 1, 346),
(19, 36, 1, 347),
(39, 30, 4, 348),
(15, 64, 2, 349),
(59, 32, 5, 350),
(112, 51, 2, 351),
(128, 27, 5, 352),
(19, 42, 1, 353),
(10, 38, 3, 354),
(31, 36, 5, 355),
(70, 14, 4, 356),
(51, 20, 3, 357),
(123, 31, 2, 358),
(66, 21, 1, 359),
(90, 28, 2, 360),
(136, 20, 5, 361),
(143, 42, 1, 362),
(89, 16, 4, 363),
(54, 36, 1, 364),
(73, 35, 1, 365),
(91, 23, 2, 366),
(77, 42, 1, 367),
(40, 41, 1, 368),
(50, 13, 5, 369),
(123, 57, 1, 370),
(146, 53, 5, 371),
(45, 1, 4, 372),
(87, 44, 1, 373),
(8, 63, 4, 374),
(117, 60, 4, 375),
(94, 38, 2, 376),
(136, 10, 1, 377),
(38, 43, 3, 378),
(2, 18, 4, 379),
(9, 61, 4, 380),
(54, 21, 3, 381),
(146, 28, 1, 382),
(93, 36, 3, 383),
(84, 17, 5, 384),
(105, 15, 4, 385),
(130, 26, 5, 386),
(117, 19, 4, 387),
(122, 48, 1, 388),
(115, 18, 1, 389),
(72, 59, 5, 390),
(14, 32, 1, 391),
(76, 28, 1, 392),
(34, 12, 1, 393),
(71, 22, 4, 394),
(82, 13, 5, 395),
(32, 39, 4, 396),
(32, 4, 3, 397),
(59, 36, 4, 398),
(23, 36, 1, 399),
(126, 26, 2, 400),
(148, 5, 4, 401),
(32, 32, 3, 402),
(93, 64, 5, 403),
(139, 45, 2, 404),
(140, 63, 1, 405),
(137, 39, 1, 406),
(76, 40, 2, 407),
(21, 16, 1, 408),
(50, 48, 5, 409),
(9, 42, 1, 410),
(21, 25, 1, 411),
(7, 47, 4, 412),
(24, 37, 3, 413),
(118, 25, 2, 414),
(76, 5, 3, 415),
(68, 53, 3, 416),
(50, 20, 5, 417),
(137, 44, 1, 418),
(42, 1, 5, 419),
(66, 29, 5, 420),
(113, 37, 1, 421),
(121, 20, 3, 422),
(4, 48, 4, 423),
(40, 4, 3, 424),
(10, 32, 5, 425),
(78, 1, 1, 426),
(120, 17, 1, 427),
(35, 18, 2, 428),
(39, 59, 5, 429),
(135, 49, 3, 430),
(76, 26, 3, 431),
(78, 42, 4, 432),
(93, 22, 1, 433),
(40, 29, 2, 434),
(108, 35, 2, 435),
(24, 22, 4, 436),
(3, 5, 4, 437),
(59, 26, 3, 438),
(4, 44, 1, 439),
(141, 62, 3, 440),
(68, 37, 3, 441),
(111, 7, 3, 442),
(80, 54, 1, 443),
(112, 1, 1, 444),
(92, 17, 3, 445),
(119, 21, 4, 446),
(42, 41, 5, 447),
(28, 62, 5, 448),
(122, 37, 1, 449),
(94, 26, 1, 450),
(125, 54, 4, 451),
(119, 40, 5, 452),
(85, 4, 1, 453),
(62, 39, 5, 454),
(63, 59, 4, 455),
(44, 29, 1, 456),
(38, 62, 2, 457),
(27, 38, 2, 458),
(42, 53, 3, 459),
(71, 60, 3, 460),
(34, 14, 2, 461),
(133, 28, 2, 462),
(66, 1, 5, 463),
(75, 4, 3, 464),
(27, 2, 5, 465),
(148, 9, 2, 466),
(143, 14, 5, 467),
(86, 41, 3, 468),
(128, 18, 3, 469),
(23, 35, 4, 470),
(135, 47, 1, 471),
(109, 59, 4, 472),
(145, 47, 2, 473),
(67, 46, 4, 474),
(117, 51, 5, 475),
(88, 31, 2, 476),
(6, 33, 1, 477),
(109, 56, 5, 478),
(8, 49, 4, 479),
(55, 29, 5, 480),
(146, 20, 2, 481),
(101, 28, 2, 482),
(42, 2, 4, 483),
(11, 52, 3, 484),
(143, 26, 2, 485),
(125, 37, 4, 486),
(93, 24, 1, 487),
(8, 62, 4, 488),
(126, 16, 4, 489),
(21, 31, 3, 490),
(137, 1, 1, 491),
(110, 20, 1, 492),
(67, 10, 4, 493),
(67, 15, 3, 494),
(58, 44, 4, 495),
(105, 2, 5, 496),
(8, 37, 2, 497),
(44, 36, 4, 498),
(84, 43, 2, 499),
(23, 37, 5, 500),
(49, 39, 4, 501),
(76, 24, 3, 502),
(15, 37, 2, 503),
(82, 47, 2, 504),
(119, 11, 4, 505),
(108, 32, 3, 506),
(50, 44, 1, 507),
(68, 33, 1, 508),
(62, 12, 5, 509),
(84, 29, 3, 510),
(64, 23, 2, 511),
(61, 18, 3, 512),
(94, 9, 4, 513),
(71, 30, 3, 514),
(49, 29, 2, 515),
(74, 30, 4, 516),
(107, 18, 4, 517),
(72, 18, 5, 518),
(127, 22, 4, 519),
(20, 33, 1, 520),
(76, 35, 1, 521),
(88, 56, 1, 522),
(26, 51, 1, 523),
(114, 1, 5, 524),
(127, 48, 3, 525),
(132, 2, 1, 526),
(67, 16, 3, 527),
(9, 44, 2, 528),
(46, 38, 2, 529),
(142, 6, 3, 530),
(1, 63, 3, 531),
(47, 44, 2, 532),
(25, 15, 1, 533),
(27, 57, 2, 534),
(33, 21, 4, 535),
(63, 27, 2, 536),
(110, 64, 4, 537),
(114, 31, 2, 538),
(101, 21, 2, 539),
(13, 33, 4, 540),
(142, 58, 2, 541),
(23, 55, 3, 542),
(8, 20, 3, 543),
(122, 55, 2, 544),
(132, 9, 1, 545),
(67, 1, 4, 546),
(24, 53, 5, 547),
(91, 11, 3, 548),
(85, 16, 2, 549),
(139, 54, 2, 550),
(73, 17, 5, 551),
(114, 21, 2, 552),
(142, 32, 4, 553),
(97, 51, 4, 554),
(123, 17, 2, 555),
(125, 17, 2, 556),
(4, 15, 5, 557),
(12, 39, 1, 558),
(57, 6, 4, 559),
(29, 22, 4, 560),
(100, 30, 3, 561),
(30, 60, 5, 562),
(143, 59, 4, 563),
(37, 6, 3, 564),
(24, 17, 1, 565),
(78, 33, 4, 566),
(40, 52, 5, 567),
(17, 25, 4, 568),
(56, 21, 2, 569),
(8, 41, 3, 570),
(59, 42, 3, 571),
(109, 32, 2, 572),
(26, 44, 4, 573),
(38, 55, 5, 574),
(53, 18, 3, 575),
(146, 58, 4, 576),
(18, 21, 2, 577),
(114, 24, 1, 578),
(17, 32, 1, 579),
(123, 59, 3, 580),
(119, 4, 2, 581),
(50, 26, 2, 582),
(37, 21, 2, 583),
(14, 2, 2, 584),
(126, 51, 2, 585),
(111, 22, 4, 586),
(16, 19, 4, 587),
(29, 40, 5, 588),
(147, 34, 2, 589),
(8, 25, 5, 590),
(135, 52, 5, 591),
(38, 49, 1, 592),
(60, 20, 3, 593),
(84, 52, 1, 594),
(114, 32, 1, 595),
(106, 24, 3, 596),
(48, 40, 4, 597),
(33, 50, 5, 598),
(45, 34, 3, 599),
(132, 50, 1, 600),
(128, 34, 2, 601),
(104, 63, 4, 602),
(29, 34, 1, 603),
(62, 45, 1, 604),
(79, 31, 4, 605),
(22, 1, 1, 606),
(30, 4, 5, 607),
(69, 21, 5, 608),
(45, 59, 1, 609),
(79, 43, 2, 610),
(32, 17, 5, 611),
(35, 29, 3, 612),
(5, 48, 2, 613),
(45, 60, 1, 614),
(19, 19, 5, 615),
(65, 27, 5, 616),
(3, 46, 1, 617),
(52, 21, 1, 618),
(19, 15, 1, 619),
(26, 42, 4, 620),
(119, 34, 5, 621),
(28, 45, 2, 622),
(53, 1, 4, 623),
(47, 3, 1, 624),
(68, 23, 1, 625),
(99, 19, 3, 626),
(23, 35, 5, 627),
(68, 28, 2, 628),
(24, 4, 5, 629),
(76, 29, 5, 630),
(117, 3, 5, 631),
(7, 7, 3, 632),
(127, 36, 2, 633),
(28, 8, 2, 634),
(62, 41, 1, 635),
(106, 54, 4, 636),
(25, 14, 5, 637),
(104, 52, 2, 638),
(105, 19, 1, 639),
(124, 16, 3, 640),
(49, 21, 1, 641),
(96, 32, 4, 642),
(125, 19, 4, 643),
(53, 38, 1, 644),
(117, 52, 5, 645),
(118, 16, 4, 646),
(6, 64, 4, 647),
(67, 54, 4, 648),
(103, 41, 1, 649),
(131, 41, 1, 650),
(93, 26, 4, 651),
(26, 29, 1, 652),
(90, 40, 3, 653),
(129, 34, 4, 654),
(122, 23, 1, 655),
(60, 27, 1, 656),
(142, 31, 1, 657),
(88, 8, 4, 658),
(145, 53, 3, 659),
(145, 31, 5, 660),
(12, 54, 1, 661),
(21, 59, 2, 662),
(29, 49, 3, 663),
(131, 1, 1, 664),
(3, 29, 3, 665),
(140, 43, 2, 666),
(98, 46, 4, 667),
(47, 20, 2, 668),
(130, 12, 2, 669),
(139, 27, 1, 670),
(114, 22, 1, 671),
(35, 16, 5, 672),
(111, 45, 3, 673),
(80, 30, 2, 674),
(57, 63, 2, 675),
(19, 53, 3, 676),
(127, 39, 3, 677),
(65, 44, 1, 678),
(135, 46, 1, 679),
(68, 2, 2, 680),
(79, 35, 2, 681),
(11, 10, 3, 682),
(18, 43, 5, 683),
(3, 56, 4, 684),
(31, 8, 1, 685),
(125, 14, 2, 686),
(52, 35, 3, 687),
(35, 7, 1, 688),
(79, 25, 1, 689),
(138, 7, 5, 690),
(135, 4, 1, 691),
(88, 59, 5, 692),
(29, 12, 5, 693),
(5, 15, 5, 694),
(88, 31, 3, 695),
(111, 15, 4, 696),
(49, 63, 5, 697),
(5, 13, 2, 698),
(116, 60, 1, 699),
(103, 13, 5, 700),
(47, 23, 5, 701),
(69, 44, 5, 702),
(71, 43, 3, 703),
(133, 56, 5, 704),
(59, 41, 1, 705),
(125, 62, 2, 706),
(63, 47, 5, 707),
(79, 5, 2, 708),
(128, 19, 2, 709),
(44, 9, 3, 710),
(105, 34, 2, 711),
(25, 62, 1, 712),
(106, 33, 2, 713),
(30, 19, 4, 714),
(25, 20, 5, 715),
(84, 18, 2, 716),
(56, 54, 2, 717),
(78, 14, 1, 718),
(74, 10, 3, 719),
(58, 38, 4, 720),
(73, 23, 4, 721),
(75, 38, 2, 722),
(146, 13, 2, 723),
(88, 27, 5, 724),
(104, 56, 2, 725),
(145, 4, 4, 726),
(2, 55, 2, 727),
(120, 41, 2, 728),
(61, 64, 1, 729),
(6, 41, 2, 730),
(127, 23, 5, 731),
(126, 6, 5, 732),
(63, 15, 4, 733),
(9, 42, 3, 734),
(84, 8, 4, 735),
(58, 51, 3, 736),
(132, 58, 5, 737),
(142, 21, 5, 738),
(93, 38, 4, 739),
(92, 32, 2, 740),
(107, 29, 3, 741),
(99, 45, 5, 742),
(127, 50, 5, 743),
(3, 60, 5, 744),
(37, 37, 5, 745),
(119, 30, 4, 746),
(143, 32, 1, 747),
(33, 5, 1, 748),
(120, 6, 1, 749),
(66, 13, 1, 750),
(99, 40, 4, 751),
(63, 18, 3, 752),
(13, 9, 1, 753),
(34, 9, 3, 754),
(101, 47, 1, 755),
(110, 54, 3, 756),
(132, 28, 4, 757),
(108, 55, 4, 758),
(92, 15, 4, 759),
(56, 44, 5, 760),
(21, 9, 2, 761),
(40, 26, 3, 762),
(60, 44, 3, 763),
(92, 44, 5, 764),
(77, 9, 3, 765),
(9, 26, 1, 766),
(129, 52, 2, 767),
(126, 63, 5, 768),
(14, 53, 1, 769),
(1, 28, 3, 770),
(48, 26, 3, 771),
(120, 2, 2, 772),
(128, 31, 5, 773),
(44, 35, 1, 774),
(71, 59, 5, 775),
(58, 52, 2, 776),
(99, 55, 2, 777),
(4, 6, 1, 778),
(148, 38, 2, 779),
(105, 54, 4, 780),
(24, 11, 2, 781),
(31, 31, 4, 782),
(84, 32, 2, 783),
(30, 11, 1, 784),
(87, 28, 5, 785),
(106, 38, 5, 786),
(96, 58, 1, 787),
(128, 48, 1, 788),
(58, 15, 2, 789),
(73, 4, 3, 790),
(74, 6, 2, 791),
(101, 41, 3, 792),
(41, 17, 3, 793),
(86, 13, 4, 794),
(72, 50, 3, 795),
(34, 62, 2, 796),
(117, 52, 4, 797),
(88, 35, 4, 798),
(53, 38, 5, 799),
(8, 64, 2, 800),
(68, 35, 5, 801),
(53, 7, 2, 802),
(122, 9, 1, 803),
(94, 29, 3, 804),
(128, 64, 4, 805),
(62, 4, 1, 806),
(101, 52, 2, 807),
(56, 64, 5, 808),
(115, 11, 3, 809),
(87, 64, 4, 810),
(33, 17, 3, 811),
(83, 53, 2, 812),
(34, 49, 2, 813),
(90, 51, 5, 814),
(91, 41, 5, 815),
(138, 39, 4, 816),
(35, 8, 3, 817),
(143, 53, 4, 818),
(17, 18, 4, 819),
(121, 55, 2, 820),
(17, 40, 1, 821),
(31, 38, 5, 822),
(103, 8, 5, 823),
(136, 40, 1, 824),
(130, 17, 2, 825),
(8, 23, 2, 826),
(47, 31, 4, 827),
(82, 44, 2, 828),
(114, 35, 5, 829),
(29, 29, 4, 830),
(140, 38, 3, 831),
(109, 3, 5, 832),
(93, 31, 3, 833),
(99, 9, 3, 834),
(91, 14, 2, 835),
(54, 15, 4, 836),
(19, 36, 5, 837),
(57, 26, 1, 838),
(111, 5, 1, 839),
(120, 58, 5, 840),
(137, 32, 4, 841),
(45, 33, 4, 842),
(85, 2, 1, 843),
(84, 44, 3, 844),
(138, 10, 1, 845),
(48, 62, 5, 846),
(114, 38, 2, 847),
(92, 4, 5, 848),
(21, 19, 4, 849),
(55, 56, 4, 850),
(71, 51, 1, 851),
(109, 61, 3, 852),
(27, 10, 5, 853),
(16, 30, 5, 854),
(74, 11, 3, 855),
(23, 4, 4, 856),
(39, 61, 4, 857),
(23, 17, 3, 858),
(21, 63, 2, 859),
(101, 48, 1, 860),
(66, 9, 3, 861),
(83, 7, 1, 862),
(101, 20, 4, 863),
(77, 39, 5, 864),
(7, 39, 2, 865),
(37, 37, 3, 866),
(36, 9, 2, 867),
(128, 50, 3, 868),
(38, 47, 1, 869),
(19, 22, 4, 870),
(144, 29, 1, 871),
(11, 18, 3, 872),
(60, 38, 4, 873),
(98, 62, 2, 874),
(121, 13, 2, 875),
(56, 28, 5, 876),
(119, 55, 3, 877),
(53, 56, 1, 878),
(74, 8, 5, 879),
(146, 55, 3, 880),
(133, 61, 4, 881),
(68, 60, 3, 882),
(94, 14, 4, 883),
(143, 22, 2, 884),
(12, 47, 2, 885),
(57, 57, 2, 886),
(65, 62, 5, 887),
(62, 29, 1, 888),
(14, 47, 1, 889),
(25, 24, 2, 890),
(131, 34, 2, 891),
(85, 40, 3, 892),
(37, 11, 3, 893),
(110, 18, 3, 894),
(84, 1, 5, 895),
(70, 27, 2, 896),
(33, 38, 2, 897),
(73, 10, 5, 898),
(68, 45, 2, 899),
(95, 60, 3, 900),
(143, 28, 4, 901),
(116, 6, 3, 902),
(30, 4, 5, 903),
(122, 61, 3, 904),
(60, 59, 4, 905),
(15, 20, 4, 906),
(100, 54, 4, 907),
(95, 33, 5, 908),
(67, 52, 2, 909),
(83, 40, 3, 910),
(122, 27, 5, 911),
(99, 29, 4, 912),
(29, 22, 1, 913),
(140, 13, 4, 914),
(65, 45, 1, 915),
(115, 44, 1, 916),
(24, 32, 1, 917),
(53, 33, 4, 918),
(103, 33, 2, 919),
(66, 64, 2, 920),
(126, 1, 3, 921),
(58, 25, 2, 922),
(57, 36, 4, 923),
(117, 41, 4, 924),
(133, 12, 1, 925),
(59, 38, 2, 926),
(7, 11, 5, 927),
(131, 20, 3, 928),
(137, 41, 5, 929),
(137, 19, 2, 930),
(81, 46, 5, 931),
(139, 24, 3, 932),
(128, 1, 2, 933),
(97, 3, 5, 934),
(88, 48, 2, 935),
(7, 32, 5, 936),
(139, 34, 1, 937),
(98, 23, 3, 938),
(99, 7, 1, 939),
(61, 62, 1, 940),
(104, 60, 4, 941),
(15, 32, 1, 942),
(19, 24, 4, 943),
(62, 40, 1, 944),
(114, 24, 4, 945),
(15, 2, 5, 946),
(49, 44, 2, 947),
(147, 55, 5, 948),
(32, 1, 2, 949),
(67, 44, 4, 950),
(82, 14, 3, 951),
(137, 9, 4, 952),
(70, 15, 1, 953),
(113, 57, 1, 954),
(2, 56, 1, 955),
(44, 24, 4, 956),
(116, 41, 4, 957),
(89, 25, 3, 958),
(75, 42, 5, 959),
(46, 39, 5, 960),
(146, 55, 3, 961),
(96, 27, 2, 962),
(89, 13, 5, 963),
(80, 9, 2, 964),
(14, 22, 1, 965),
(20, 45, 3, 966),
(117, 64, 1, 967),
(72, 64, 1, 968),
(33, 40, 1, 969),
(40, 56, 3, 970),
(75, 48, 2, 971),
(29, 17, 2, 972),
(65, 23, 3, 973),
(73, 57, 2, 974),
(123, 29, 5, 975),
(146, 39, 3, 976),
(145, 55, 5, 977),
(133, 12, 4, 978),
(146, 51, 3, 979),
(43, 17, 1, 980),
(25, 64, 3, 981),
(18, 12, 2, 982),
(62, 52, 5, 983),
(21, 29, 1, 984),
(98, 41, 3, 985),
(56, 3, 1, 986),
(107, 63, 4, 987),
(39, 53, 2, 988),
(4, 54, 3, 989),
(80, 30, 4, 990),
(122, 2, 2, 991),
(104, 33, 3, 992),
(135, 56, 3, 993),
(143, 42, 1, 994),
(79, 18, 2, 995),
(147, 7, 2, 996),
(32, 37, 3, 997),
(35, 61, 4, 998),
(134, 41, 2, 999),
(26, 18, 2, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preparacionpedido`
--

CREATE TABLE `preparacionpedido` (
  `id` int(11) NOT NULL,
  `Preparacion` varchar(15) NOT NULL,
  `Color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `preparacionpedido`
--

INSERT INTO `preparacionpedido` (`id`, `Preparacion`, `Color`) VALUES
(1, 'En preparación', 'warning'),
(2, 'Listo', 'info');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `id_categoria` int(1) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Disponibilidad` int(1) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Nombre`, `id_categoria`, `Precio`, `Descripcion`, `Disponibilidad`, `Foto`) VALUES
(1, 'Empanada', 1, 1500, 'Ingredientes dentro de una masa', 1, 'public/productos/XZs8QoBdwH5Q1UoXjAvqIUwjI8pQGMEIlRTAsnI4.jpg'),
(2, 'Arepa', 1, 2000, 'Arepa con jamon y queso', 1, 'public/productos/hlyq989ZJCouSkD3Nlp1Q343AqCD1zVaQTugrSeb.png'),
(3, 'Big-cola', 2, 1500, 'Bebida negra gaseosa', 1, 'public/productos/S6dm3E5qKnxqCeblucaL8u7X7Zt9LHIZ09L2M9N1.webp'),
(4, 'Festival chocolate', 5, 1200, 'Gallete de chocolate con relleno', 1, 'public/productos/Vfyt2Gyi2gwkIIJjSgNumYjIUM53el5LSzJ0PXSR.jpg'),
(5, 'Festival vainilla', 5, 1200, 'Galleta con relleno de vainilla', 1, 'public/productos/lAJNy3yE70e8rSnul3yOVENeplsVMrbEV0HYZMEm.jpg'),
(6, 'Festival limon', 5, 1200, 'Galleta con relleno de limón', 1, 'public/productos/EwkeIUz5baJjY7Ydo5AWQMP7TnJDIVtvK96B7Dsh.jpg'),
(7, 'Festival fresa', 5, 1200, 'Galleta con relleno de fresa', 1, 'public/productos/DekA88lxl2DkmbtALg6sC6UTj7qde53r2c97BxSJ.jpg'),
(8, 'Trululu gusanos', 5, 2000, 'Gomita saborizada', 1, 'public/productos/HxjkiPnFZlDOSoHEPoYvSyxYWheuUHG8wXqTHWys.webp'),
(9, 'Trululu aros', 5, 2000, 'Gomita azucarada en forma de aros', 1, 'public/productos/MleLPmLgv3EMIB3zFk5tYksHLsbnYR4gNpZHuM4y.jpg'),
(10, 'Trululu casquitos', 5, 2000, 'Gomita azucarada con vitamina c', 1, 'public/productos/v0zh3YtZGBQlGctJsw4cLOSSyisNfjZ6m8Yy3ZWz.jpg'),
(11, 'Trululu oro', 5, 2000, 'Gomita saborizada con forma de oso', 1, 'public/productos/VPtsLjx7AzUHJchY6YkwygpVm75UavFyRT1bmSKU.jpg'),
(12, 'Trululu tropical', 5, 2000, 'Gomita saborizada con formas de animales', 1, 'public/productos/QRxOwIoCAX7l8mWCuTcsftZpbiRribZAMThe9kCC.jpg'),
(13, 'Hit Piña', 2, 2500, 'Jugo hit sabor piña/naranja', 1, 'public/productos/Wjcq0BDAUkNpynt4D2eAIiPJDAjnyZ6On4Glfydq.png'),
(14, 'Hit Frutos tropicales', 2, 2500, 'Jugo hit sabor frutos tropicales', 1, 'public/productos/d7ZwVJeZUIxBUXugbFIK6Lrj596RKzMxNqHjZ981.png'),
(15, 'Hit Mora', 2, 2500, 'Jugo hit sabor mora', 1, 'public/productos/qIhCOWURX4YoMV9Y9zZD2HePEyGKkrImbgTWTMK4.webp'),
(16, 'Hit Mango', 2, 2500, 'Jugo hit sabor mango', 1, 'public/productos/EIHsHU6LakaEZiLm36aq3g7ltLhmSt2sD2bXWm1o.jpg'),
(17, 'Hit Lulo', 2, 2500, 'Juego hit sabor lulo', 1, 'public/productos/UsbIYybArwESv2QfajgLfFgoKEO6yD6zLF1Wlnca.jpg'),
(18, 'Speed max', 2, 2000, 'Energizante', 1, 'public/productos/0nKFPUblYXi30Wgw71cNr7XapFLGe9NW0KLhZJ1f.jpg'),
(19, 'Vive100 fusión', 2, 2500, 'Energizante', 1, 'public/productos/SMGLhMSEk8YAgAEsF7N4U6lr6BiqGx0AQCRgO26f.jpg'),
(20, 'Big-cola', 2, 1500, 'Bebida gaseosa sabor limon', 1, 'public/productos/sytt9owBM6w3F3CjSKJlUuZazD2KhM9PXaFZ83Gq.webp'),
(21, 'Vive100 asaí', 2, 2500, 'Energizante', 1, 'public/productos/LGktQuNgPMn0DX6m3pGPSvfooAoXnfTFoRig0Cig.jpg'),
(22, 'Vive100', 2, 2500, 'Energizante', 1, 'public/productos/u3F4m8pSewGxrFDX5oLk8dyn7qZpu7OJIZCCtgga.jpg'),
(23, 'Canada dry', 2, 2000, 'Bebida gaseosa', 1, 'public/productos/Wki7bHBU5N9yYXSjraSi4XtyiwzAsZcQj7r1gC4L.jpg'),
(24, 'Coca-cola', 2, 2500, 'Bebida negra gaseosa enlatada', 1, 'public/productos/GdzEXKR8BajodpwN1iX3YEJPYArzcs7X0ao7cluQ.jpg'),
(25, 'Cafe', 2, 1500, 'Cafe con leche', 1, 'public/productos/nncR7lkMx7WTn2YDI4UAr7oXcHbwXL7HbEKOBWyS.jpg'),
(26, 'Tinto', 2, 1000, 'Bebida negra a base de café', 1, 'public/productos/Vs7iHIyASMvuQ1xxkfItjQi6NJxiOMJtNyUdX4de.jpg'),
(27, 'Bianchi', 5, 2500, 'Chocolate con maní', 1, 'public/productos/EnVwfPqYuD9wDaOnBUWoSpG8SOOttV5OzipK9Ced.jpg'),
(28, 'Bianchi', 5, 2500, 'Dulce con arándanos, maní y crispy', 1, 'public/productos/gjFZLzUYZ0SdTv8cgRYVwKlHFPiG4H7qxqrmaraZ.jpg'),
(29, 'Bianchi', 5, 2500, 'Cookies and cream', 1, 'public/productos/iRCMjswnXVrLSatNZ98gpEVgvcf86oZq6Zw1zC6X.jpg'),
(30, 'Mentas chao', 5, 200, 'caramelo sabor fresa', 1, 'public/productos/c3d28eu6lR5CvcLoayMmAXC72q9U376Ghb91eymC.jpg'),
(31, 'Mentas chao', 5, 200, 'caramelo con sabor a limón', 1, 'public/productos/XeAPGzJOYSHPTjzwSCpeHFy6pf0dNeYkiwktpGSV.jpg'),
(32, 'Mentas chao', 5, 200, 'caramelo', 1, 'public/productos/T7x5TihldADPUPRlpXqcI7bqars834yIsKvA5stM.jpg'),
(33, 'Chocolatina jet', 5, 1000, 'Chocolatina jet pequeña', 1, 'public/productos/wsFiKRqPvEoJGT65sb6gRIMjKnSWOBCEsCyVqa6y.jpg'),
(34, 'Chocolatina jumbo', 5, 2000, 'chocolatina grande con maní', 1, 'public/productos/SaTQ1nQf5TKftrFtUdo06zjQrUiuUhiuofUaYIvx.webp'),
(35, 'Chocolatina jet', 5, 2000, 'chocolatina jet grande sabor mora', 1, 'public/productos/I3y9npToLjKJocbcao552nZz7WqJjnlZsohFpTx1.jpg'),
(36, 'Chocolatina jet', 5, 2000, 'chocolatina jet grande sabor arequipe', 1, 'public/productos/YHuFs0kC1JqyyiEWTHknIzEKoJBl3RI5wORssqdg.jpg'),
(37, 'Perro caliente', 1, 3000, 'Pan acompañado de diversos ingredientes', 1, 'public/productos/pNvIi3S3wdi88nd41yNoTox1wthWsPFLGZLZJgsJ.jpg'),
(38, 'Ponky nucita', 6, 2000, 'pastel cubierto con crema de nucita', 1, 'public/productos/kcryNefWfnyYBKxsEkvc0EcextupiUHMyFv7Ilxg.jpg'),
(39, 'Ponky', 6, 2000, 'Pastel relleno de crema sabor vainilla', 1, 'public/productos/CGlupSrk7AEMTgzmOHfxJQbs6BLTTTVkvXwuOygK.jpg'),
(40, 'Bianchi', 5, 2500, 'Chocolate con maní crocante', 1, 'public/productos/Ha2J2gjKFiHeXwi5eFr1Ykq82gE3O8PZlYPhzj19.jpg'),
(41, 'Bridge vainilla', 5, 2000, 'galleta con doble crema sabor vainilla', 1, 'public/productos/Mpk9qsIDi6FyhTziMDfWtMPnHOqpZ5fidQAa3bjo.jpg'),
(42, 'Bridge chocolate', 5, 2000, 'galleta con doble crema sabor chocolate', 1, 'public/productos/tHzUvdaBathomvEERQB4YSRVKKYn8SvRcNalRryn.webp'),
(43, 'Bridge fresa', 5, 2000, 'gallete con doble crema sabor fresa', 1, 'public/productos/sY9LeLcPpM0Y8PgkARXZENdZ6cFl3CV1DTLZwXKV.jpg'),
(44, 'Papas super ricas', 4, 2500, 'Papas fritas sabor polló', 1, 'public/productos/rT2gBa56Em9Q9hFfrRLUyVQXGmrz8wkMIK5CV37E.jpg'),
(45, 'Hamaburguesa', 1, 3000, 'Pan acompañado de diversos ingredientes', 1, 'public/productos/xKjzavldXtCmBdgrIGlNO1B1qyYBhwO0rw8acOFD.jpg'),
(46, 'Papa rellena', 1, 2000, 'Masa rellena con diversos ingredientes', 1, 'public/productos/8AkI1fqws4aan6NJX7FqPceSyS4sTfLh69iBICdl.jpg'),
(47, 'Todo Rico criollo aji', 4, 2500, 'Paquete compuesto de papa, yuca, tajamiel y chicharron', 1, 'public/productos/z03vvWkA3hRpxk71yZHx88Gvt9gQlDT3FkNkJT9u.jpg'),
(48, 'Todo Rico BBQ', 4, 2500, 'Paquete compuesto por chicharrones, papas fritas y tajaditas', 1, 'public/productos/Rveauf3fNrXAzAigc4KGp92kKKyYkRFrw3lR0Rdq.webp'),
(49, 'Todo Rico natural', 4, 2500, 'Paquete compuesto por chicharrones, papas fritas y tajaditas', 1, 'public/productos/4nMWjmJXoVIVAORv9XBjXN6A0CEdkhWHOCFUS4yj.webp'),
(50, 'Pastel de pollo', 1, 2000, 'Pan relleno de pollo', 1, 'public/productos/wTSfRDBAigArfgXgSUJj8PILfWn0wqjz0YMDV4Qu.jpg'),
(51, 'Sandwich', 1, 2000, 'Pan acompañado de jamon y queso', 1, 'public/productos/PCW91qjOiQHqSakkFeRoBqk1VhiXZF2vMbpFnSfK.jpg'),
(52, 'Pizza', 1, 3000, 'Masa acompañada de diversos ingredientes y sabores', 1, 'public/productos/tAJ5mPe8fDAw6HVgKxZH0K7BXbxAPk2SiJwKq7XI.jpg'),
(53, 'Salchipapas', 1, 2500, 'Salchipapas', 1, 'public/productos/3pvOTIhWsBYJ6CG2Jd0RBFf1Y1KLstxpBbtcscR3.jpg'),
(54, 'Arepa Boyacense', 1, 1800, 'Arepa boyacense', 1, 'public/productos/UjsRMbkcvituvhW1VQcgr5qpyopxvR8KbZgl7aAY.png'),
(55, 'Doritos', 4, 2000, 'Tortilla de maíz frita con sabor a queso', 1, 'public/productos/gcK5miKyiFQrEGbmqckUJKBo388YHd33zWSo5Tgu.jpg'),
(56, 'NatuChips', 4, 1700, 'Chips de plátano verde', 1, 'public/productos/4aMJhjTjlP7rZPB7Mt4sThxmwJfFDY4NHJi0hUcx.jpg'),
(57, 'NatuChips Miel', 4, 1800, 'Chips de plátano sabor a miel', 1, 'public/productos/3ItAu90esdLWPxC0cBZRfsiDraOt9025Ub4k0MhT.jpg'),
(58, 'Cheese tris', 4, 1800, 'Palitos de queso', 1, 'public/productos/SrWeusziBEPIkr8dwfTzbqOKAKY5ER5KxURgrT2V.jpg'),
(59, 'Cheetos Picantes', 4, 1800, 'Cheetos horneados', 1, 'public/productos/uURFs20CiFvp4WWWtxwGctcUKM6jWOkSOGBtEKjQ.jpg'),
(60, 'Tostacos', 4, 1500, 'Pasabocas de maíz sabor picante', 1, 'public/productos/w8l2sYOade4K0OoapJhM0JIOebISMdohXmwY8Sey.jpg'),
(61, 'Arroz con leche', 6, 2000, 'Arroz con leche', 1, 'public/productos/wGeIvN3vnZJn9mZQyGLSarr6bOFcuntHEoeSconp.jpg'),
(62, 'Brazo de reina', 6, 2000, 'Pastel relleno en forma de cilindro', 1, 'public/productos/78lOaava0OWuxduFclsHdj3JbeRvFLv2LZdRvvvr.png'),
(63, 'Mosaico de gelatina', 6, 2500, 'Cubos de gelatina con leche condensada', 1, 'public/productos/imO7uGyGZSHtfVGDhJrwCqioEbQqIk6DGuSirJAW.jpg'),
(64, 'Brownie', 6, 2000, 'Bizcocho de chocolate', 1, 'public/productos/AEmwcwA4uapEUnWUI5UJfPeZBOIgsDDEJ9XN2lvD.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL,
  `Rol` varchar(40) NOT NULL,
  `Color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `Rol`, `Color`) VALUES
(1, 'Administrador', 'secondary'),
(2, 'Vendedor', 'warning'),
(3, 'Consumidor', 'light');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Contrasena` varchar(32) NOT NULL,
  `id_centro` int(1) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `id_tipousuario` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `Apellidos`, `Correo`, `Contrasena`, `id_centro`, `Foto`, `id_tipousuario`) VALUES
(1, 'admin', 'admin', 'admin@admin.foodsite', '202cb962ac59075b964b07152d234b70', 1, NULL, 1),
(2, 'vendor', 'vendor', 'vendor@vendor.foodsite', '202cb962ac59075b964b07152d234b70', 1, NULL, 2),
(4, 'Damion Williamson', 'Berniece Johnston', 'isabel.jerde@hotmail.com', '8441605f0b19d978b282704782dc9c1b', 3, NULL, 3),
(5, 'Elnora Keebler', 'Prof. Kristy Bernier DVM', 'wintheiser.yvonne@yahoo.com', 'b0fbb1aff362d6d4dc46c2eccbd8c3b5', 3, NULL, 3),
(6, 'Kaleigh Rath', 'Tyrique Kuvalis', 'kari.crona@corwin.net', '5a39c31de2bdd82cbb67a3934542ebf6', 2, NULL, 2),
(7, 'Helena Dietrich', 'Andre Haag', 'leanna.fritsch@yahoo.com', '1e5a94bb17426804a83d3eda192eabcf', 2, NULL, 2),
(8, 'Kara Koelpin Sr.', 'Mr. Mavis Cole III', 'paula.schmeler@yahoo.com', 'd35a2f6240fc583b3703481e33dae6f6', 3, NULL, 1),
(9, 'Marcelle Purdy', 'Ms. Peggie Bartoletti MD', 'ngislason@gmail.com', '213efce83a333706a131a4a1434cdf97', 1, NULL, 2),
(10, 'Dr. Geoffrey Dickinson', 'Mr. Erling Goodwin PhD', 'legros.felipa@christiansen.info', 'd284bc9fda32498a132c6947c69e1c1d', 1, NULL, 2),
(11, 'Ariane Osinski', 'Taya Nikolaus', 'zauer@beatty.com', '238c3f8a991c7f3c7f37b4b0f222e09e', 3, NULL, 1),
(12, 'Laverne Steuber', 'Mr. Vicente Fisher MD', 'dorcas83@yahoo.com', '9117f57146cfd98e36020f72d3ef28be', 1, NULL, 1),
(13, 'Mrs. Katlynn Hermann MD', 'Mr. Tre Feil PhD', 'elian13@gmail.com', 'ffcb589ab67faf97384613b2e22ef68d', 2, NULL, 3),
(14, 'Prof. Modesto Bayer DDS', 'Tremayne Schultz', 'rickey.bode@upton.org', '97c50fb01e5731562f091e3df1fede45', 3, NULL, 3),
(15, 'Alexandro Bins', 'Adrian Konopelski IV', 'jakubowski.maryam@casper.net', '190a70d239213b999924a7f2bca2d716', 3, NULL, 2),
(16, 'Sammie Schroeder', 'Prof. Cleora Kreiger', 'kendall.fadel@hamill.com', '1152112d60a1b3567cf5528f8160ee97', 3, NULL, 1),
(17, 'Marcia Rodriguez DVM', 'Sydni Cole I', 'ilegros@hotmail.com', 'ae4d69a3f2729a8824b302fcf9b63f09', 1, NULL, 2),
(18, 'Ms. Lulu Gleason Jr.', 'Dane Mertz', 'auer.ellis@stokes.info', '03495df632e888c8cd6138922014cee1', 2, NULL, 1),
(19, 'Luciano Swaniawski', 'Iva Brakus', 'gabriella.ferry@hotmail.com', 'cda0ddc8129be68adc1ced6dee39e7c1', 3, NULL, 1),
(20, 'Dr. Michael Wehner', 'Nellie Bechtelar', 'coralie48@walsh.com', '94cb8c3002bcf0afeb6536fca4c8f714', 1, NULL, 3),
(21, 'Mr. Keeley Rogahn', 'Alexie Lockman II', 'randerson@hotmail.com', 'd0420d04225b892fe906a6c064c7583d', 3, NULL, 1),
(22, 'Marlene Hagenes', 'Dolly Wiegand', 'remington31@hotmail.com', '23c1cd486a023887865e33620c44881a', 3, NULL, 3),
(23, 'Ms. Estella Hahn', 'Dr. Corbin Collier', 'jones.magdalen@fadel.com', '70cf4e658116ae0d7daa489d4217bb32', 1, NULL, 1),
(24, 'Leif Sporer', 'Bennie Konopelski V', 'dave.sanford@yahoo.com', '1e6791c723b530f30d69511d94a80a8b', 3, NULL, 1),
(25, 'Fleta Labadie', 'Ivah Wolff', 'murray.michaela@yahoo.com', '3f6f12061afd01011d6292a704d13923', 1, NULL, 2),
(26, 'Nichole Dooley', 'Ewell McClure V', 'kozey.jayda@schroeder.info', '7e39e2185d10b11d6a5e450fcb4d98aa', 2, NULL, 2),
(27, 'Prof. Merlin Turner DDS', 'Mellie Walter', 'flakin@rohan.biz', '9a1492d4a3576222363709ac5e4bb54d', 3, NULL, 1),
(28, 'Dillan Mohr', 'Walker Kiehn', 'ddurgan@hotmail.com', '1c8ff3e1bf7a6216c095a0cb8cc9e739', 3, NULL, 3),
(29, 'Prof. Jayde Botsford', 'Ezra Boyle', 'providenci.kunde@ward.info', 'a8c85adf79031bfc597738c760aee659', 2, NULL, 2),
(30, 'Dr. Darion Weimann', 'Korey Gerlach', 'tito.altenwerth@gmail.com', 'e3194e724b4905777b61bd86bba02b22', 2, NULL, 1),
(31, 'Timmothy Watsica', 'Nona Treutel', 'pgislason@herman.com', '1d9261073df279c6379b24e8eed53e28', 3, NULL, 1),
(32, 'Verlie Lueilwitz Sr.', 'Dr. Trudie Schowalter', 'alana78@gmail.com', '23899dcebc1ad29d856856e8b5a0d0e4', 2, NULL, 2),
(33, 'Scarlett Ratke', 'Genevieve Runolfsson', 'aurelio81@macejkovic.com', 'f60d7f901ce75dcb1bf13dc423a74ec4', 1, NULL, 1),
(34, 'Camron Satterfield', 'Dale Grant', 'smith.taryn@heller.info', 'e08a1d6ec325a36867b1a0d433ed85ef', 2, NULL, 3),
(35, 'Dr. Kale Kuhic MD', 'Terence Powlowski', 'mkertzmann@steuber.com', 'd887a024c88dab265dabfeb9ef99af71', 3, NULL, 2),
(36, 'Dr. Caden Schmitt II', 'Ashton Hudson', 'wisoky.oleta@gmail.com', 'bd7c599b262b78662787da7747470514', 1, NULL, 2),
(37, 'Beulah Buckridge', 'Henderson Goldner', 'johara@yahoo.com', '643f989d1c33cdba4760f56fc6e4cb85', 2, NULL, 2),
(38, 'Mr. Zack Balistreri', 'Haskell Effertz', 'lheidenreich@yahoo.com', 'b49c72c0550d996d1780b86ce4376cfc', 3, NULL, 2),
(39, 'Dr. Luigi King', 'Giuseppe Langosh II', 'pgislason@gmail.com', '75ccaf944bbfb0fe9b3de9b03122fb6b', 1, NULL, 3),
(40, 'Miss Mckayla Kunze Jr.', 'Ova Schuster DDS', 'virginia.ullrich@yahoo.com', 'ced058a15ab69db1d7fbfa97eda137a3', 1, NULL, 2),
(41, 'Miss Flossie Hagenes', 'Eliane Pollich', 'willy21@rath.com', '6307dd13b6785c3d17f9de4c8695c260', 3, NULL, 2),
(42, 'Melissa Ortiz', 'Clement Jaskolski', 'drew58@koepp.com', '3a7ca52a3630af2944c6949013eefe33', 1, NULL, 2),
(43, 'Mr. Javier Cartwright', 'Ms. Carlotta Dietrich V', 'sbarrows@yost.org', '509ca8de813df684d75beb95de0b546d', 3, NULL, 1),
(44, 'Mr. Cory Morissette MD', 'Miss Crystel Kemmer', 'burdette96@gmail.com', '5c3dc718f3eef15ee9d7ab8e4ba29be9', 1, NULL, 2),
(45, 'Myrtie Douglas', 'Amalia Bernhard III', 'stoltenberg.carolina@schmeler.net', '8050c219c9383deb50ea6a65b3c6fcbf', 1, NULL, 1),
(46, 'Marcelino Macejkovic', 'Mr. Lennie McGlynn', 'beier.kaia@carroll.com', '5dd7e51f1c3deb624a78cf3f4c62bd9d', 3, NULL, 2),
(47, 'Prof. Percival Lynch DVM', 'Cielo Altenwerth', 'jaydon.ondricka@gmail.com', '7964f74934dfcd244add1e55560662a6', 1, NULL, 3),
(48, 'Maritza Morissette', 'Tony Donnelly', 'kerluke.jarret@yahoo.com', 'f5479ee48b4826eb9223d3f62455f192', 3, NULL, 2),
(49, 'Ms. Katelynn Lindgren PhD', 'Ursula Harvey', 'ulices62@yahoo.com', 'e15a68fea32d67adc79e88be757bbfb8', 1, NULL, 3),
(50, 'Angela Bode', 'Mr. Tate Cremin MD', 'zena22@hagenes.com', '4764acc8433b04eeaf55e04d200cad16', 1, NULL, 2),
(51, 'Miss Nakia Satterfield', 'Romaine Hoeger', 'runte.tania@hotmail.com', 'b7ec247607e94a456aca81dc6324aa6c', 1, NULL, 2),
(52, 'Miss Burdette Kshlerin III', 'Brett Dibbert', 'bayer.josiah@kreiger.com', 'a30b74cbfd8a6e264c19ca36166b1a86', 2, NULL, 2),
(53, 'Mr. Royce Bradtke', 'Emmy Dibbert', 'katlyn.zemlak@ryan.com', '175c847d452ad83e1d003e012edb9e7f', 2, NULL, 2),
(54, 'Emmanuelle Emard', 'Henri Considine Jr.', 'kirk51@yahoo.com', '6fa22f1d447dd106c35314e232ce5469', 3, NULL, 3),
(55, 'Dr. Janick Crooks DVM', 'Prof. Gustave Cole', 'ywintheiser@hotmail.com', '088172d4c35d13c94d121a7f12305ca8', 2, NULL, 3),
(56, 'Brice Kirlin', 'Dr. Dovie Bahringer MD', 'glover.spencer@hotmail.com', 'd3cd481be2139ed08700eb2d417e5c77', 1, NULL, 2),
(57, 'Shakira Emard', 'Berta Price MD', 'clyde.bartell@dickens.info', 'c08c3587b6e5839bdc89b0107bede263', 2, NULL, 2),
(58, 'Prof. Weston Goldner', 'Prof. Nestor Jerde II', 'stracke.rhiannon@zemlak.org', '4b9c20d23024b009dc31912933352af6', 1, NULL, 2),
(59, 'Christy Considine', 'Felicia Kerluke', 'paucek.annette@yahoo.com', 'e4cfac4a45d71e5a6881dc9b96297ab8', 3, NULL, 1),
(60, 'Aditya Nolan', 'Dr. Pete Runolfsson Sr.', 'cathy25@hotmail.com', '1da99253bf4452133c52b05228b4954c', 1, NULL, 1),
(61, 'Mrs. Fabiola Franecki', 'Martine Keeling DVM', 'dwalter@gmail.com', 'e7a693d681db35fc2f64131431d39e91', 1, NULL, 2),
(62, 'Mr. Vaughn Stracke V', 'Rahul Mueller', 'garrett.wuckert@harris.com', '2645ab449946dd10cb78ceee7cbda108', 3, NULL, 3),
(63, 'Olen Upton II', 'Mrs. Mandy Hoeger DVM', 'robel.dion@hotmail.com', '7d53fa496c3458fdb342c904c5493be4', 2, NULL, 2),
(64, 'Mrs. Phoebe Halvorson II', 'Rowan Fritsch IV', 'vgerhold@ziemann.org', '60a7106308919dac37b8700131c9dbe8', 3, NULL, 1),
(65, 'Icie Predovic', 'Arvel Lowe', 'pearlie.rowe@auer.com', '92f148591eafb3e13470483574b584c1', 3, NULL, 1),
(66, 'Miss Lurline Hessel', 'Meagan Jerde I', 'trevion.terry@bauch.net', 'f2d713b36c5490e4cbac9b78d0a78185', 1, NULL, 1),
(67, 'Antoinette Brekke', 'Ford Kshlerin', 'keven59@oconnell.com', 'af79eb51992fce77fe0f1f981b357052', 3, NULL, 1),
(68, 'Josefa Gulgowski', 'Demario Mann', 'jfeest@weber.biz', '7a13901143e663b7c6f2b7d43f36ab0c', 1, NULL, 1),
(69, 'Maximus Ledner', 'Priscilla Cole', 'mohr.skylar@hackett.net', '6e8ff7dcc9465b31ecf27cbca0078f72', 3, NULL, 2),
(70, 'Prof. Flavie Baumbach V', 'Genesis Klocko', 'kenneth48@gmail.com', 'cecaa75336318ad1d7334da78df341c1', 2, NULL, 1),
(71, 'Aron McKenzie', 'Wilburn Hauck Sr.', 'cbalistreri@yahoo.com', '09ae5f23efb541ed99a0e89075a941b9', 3, NULL, 2),
(72, 'Dallin Wunsch', 'Ola Bernier III', 'tbechtelar@bashirian.com', 'ef6aa4cbefb4c9db45f412ef5db7b095', 3, NULL, 1),
(73, 'Prof. Prince Bins I', 'Mrs. Eula O\'Connell', 'odell.crist@larkin.com', '1e5fbaaa30c5a625ff2dd40b8c21d484', 1, NULL, 3),
(74, 'Mr. Jamie Stark V', 'Miss Emie Herman', 'kariane29@gmail.com', '4bf05ccdbe91096b1de98b823bb846be', 1, NULL, 3),
(75, 'Edmond Bauch', 'Caleigh Feest', 'zemlak.arch@yahoo.com', '2fe06af7980ebafbe5a1d5167e2b5455', 2, NULL, 1),
(76, 'Sabina Kovacek', 'Chelsea Ebert', 'johnnie97@gmail.com', '044ab8e64b5a168983edcce4ef7c5274', 3, NULL, 2),
(77, 'Ryleigh Homenick', 'Mellie Kozey', 'yblick@trantow.com', '9ce9d26da901f64b91be388fcf21ff03', 2, NULL, 2),
(78, 'Dr. Nicolette Lind I', 'Prof. Aiyana Yundt', 'powlowski.martine@heidenreich.com', 'ffb610ff007c94ecef3a24f6ca791d9c', 3, NULL, 3),
(79, 'Presley Conn', 'Mrs. Haylie Hoppe DDS', 'erna62@gmail.com', 'abebffdbf5445faa91d51b542b276b23', 3, NULL, 3),
(80, 'Gus Runte', 'Rhett Monahan', 'nprosacco@schiller.com', 'a27078efa15578858b1ee0c34bfb30bf', 3, NULL, 1),
(81, 'Stephanie Hartmann', 'Letha Hauck', 'lexie32@price.info', 'fb67a3223d827459e103ced3cbef67d1', 1, NULL, 3),
(82, 'Piper Brown Sr.', 'Mr. Dario Blick PhD', 'torphy.gustave@gmail.com', 'd59669ec2b29b13d1f90b12db396470a', 3, NULL, 3),
(83, 'Isobel Bartoletti', 'Prof. Germaine Hayes MD', 'marcelle14@leuschke.com', '1f131c20a707b050af1e762eee19e93a', 2, NULL, 3),
(84, 'Brendon Hegmann IV', 'Joyce Ortiz', 'rdurgan@hotmail.com', 'd1875df0d44d128b9fa8cf8d4c4de688', 1, NULL, 1),
(85, 'Gia Reinger', 'Mr. Toni Buckridge II', 'jackson83@gmail.com', 'eae6fb301a9c56fb6d4a4120356fe76c', 3, NULL, 1),
(86, 'Virgil Hill', 'Morton Lebsack', 'walter.hassan@ratke.com', '4b702a99bb663414aa6605c0078846a8', 2, NULL, 2),
(87, 'Nathaniel Cole', 'Gideon Goldner', 'judy.labadie@hotmail.com', 'c1987f7620bfd692965aa898d7416c3c', 3, NULL, 1),
(88, 'Casimir Kuhlman', 'Friedrich Kuhlman', 'kirlin.selina@hotmail.com', '3e32a90ff855caa6b52094bbf7598158', 3, NULL, 2),
(89, 'Clare Kuhic', 'Miss Kenya Rath', 'dickens.hudson@hotmail.com', '82897518106c8a72cb913ad55f7fd0eb', 1, NULL, 3),
(90, 'Kiel Bruen', 'Prof. Hanna Murphy', 'heathcote.dominic@dooley.info', 'dd212369c1c370cfef4713cc788b8010', 3, NULL, 1),
(91, 'Daryl Leannon MD', 'Avery Schiller', 'rice.jolie@gmail.com', '7cd5b1b86c52384e14f584a20f1a8407', 2, NULL, 1),
(92, 'Katrina Feeney Jr.', 'Kelvin Lynch', 'ublick@heaney.com', '8377f5d68d14eefeb2a18e75a1a1eb21', 2, NULL, 2),
(93, 'Ms. Clara Cole DDS', 'Orlo Parisian', 'zion18@kreiger.com', '483b7bf479c559b3818e03ca4067d5c5', 3, NULL, 3),
(94, 'Justyn Jast DDS', 'Dr. Maria Lehner', 'nova76@berge.com', 'ea3b540e7051fbc0c469acc5d8c9aad1', 2, NULL, 2),
(95, 'Miss Margarita Wisoky PhD', 'Lenora O\'Conner', 'buckridge.cletus@vonrueden.org', 'c5eed1bbbeffdffdfd39e0dd36b3389a', 2, NULL, 2),
(96, 'Wade Metz', 'Stevie Nicolas', 'kailey25@jacobs.biz', 'b7fffa4fa92c6cdb1db785257809ce52', 3, NULL, 1),
(97, 'Lauren Jones', 'Muriel Huels V', 'strosin.hettie@gmail.com', 'c7d74c1b20fc3b66773a80938dbcf45e', 3, NULL, 3),
(98, 'Prof. Jewel Hessel I', 'Mr. Salvatore Aufderhar', 'rod54@jacobs.info', '647ae0b2625e1031b3d2ae08db30580e', 3, NULL, 2),
(99, 'Hazel Bashirian', 'Dr. Cooper Dare', 'qvonrueden@mitchell.com', '5e5bc6de959243f245a65e45242189c1', 2, NULL, 1),
(100, 'Juliana Wiegand', 'Abelardo Gaylord', 'parisian.alexandrine@boehm.info', '20c5f8139a66078d11db3b20bff9f49c', 1, NULL, 1),
(101, 'Sammie Haag', 'Bobbie Auer', 'lehner.ella@gmail.com', '67589a7ae91a4b07ea7c62902323e5d9', 3, NULL, 1),
(102, 'Ms. Bulah Streich PhD', 'Lea Kemmer', 'sipes.bret@bechtelar.com', '74c162e3b9e5aec45f33cd720b6568ad', 2, NULL, 1),
(103, 'Myrtle Feeney', 'Mr. Cameron Renner Jr.', 'heidi21@rice.com', '4feab7514462c27b23ba1a4db937dc65', 3, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `centroaprendizaje`
--
ALTER TABLE `centroaprendizaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadopedido`
--
ALTER TABLE `estadopedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadosoporte`
--
ALTER TABLE `estadosoporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historialpedidos`
--
ALTER TABLE `historialpedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `Preparacion` (`id_preparacion`),
  ADD KEY `id_preparacion` (`id_preparacion`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `preparacionpedido`
--
ALTER TABLE `preparacionpedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`id_categoria`),
  ADD KEY `Disponibilidad` (`Disponibilidad`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipousuario` (`id_tipousuario`),
  ADD KEY `centro` (`id_centro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `centroaprendizaje`
--
ALTER TABLE `centroaprendizaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estadopedido`
--
ALTER TABLE `estadopedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estadosoporte`
--
ALTER TABLE `estadosoporte`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historialpedidos`
--
ALTER TABLE `historialpedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT de la tabla `preparacionpedido`
--
ALTER TABLE `preparacionpedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estadosoporte` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `historialpedidos`
--
ALTER TABLE `historialpedidos`
  ADD CONSTRAINT `historialpedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `historialpedidos_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estadopedido` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historialpedidos_ibfk_3` FOREIGN KEY (`id_pago`) REFERENCES `metodopago` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historialpedidos_ibfk_4` FOREIGN KEY (`id_preparacion`) REFERENCES `preparacionpedido` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `historialpedidos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Disponibilidad`) REFERENCES `disponibilidad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `centro` FOREIGN KEY (`id_centro`) REFERENCES `centroaprendizaje` (`id`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipousuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
