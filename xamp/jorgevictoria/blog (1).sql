-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2022 a las 18:31:14
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `codNoticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `articulo` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `fechaPosteo` date NOT NULL,
  `imagenuno` blob NOT NULL,
  `imagendos` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`codNoticia`, `titulo`, `articulo`, `autor`, `fechaPosteo`, `imagenuno`, `imagendos`) VALUES
(5, 'Descubre qué es el lenguaje de programación PHP y en qué situaciones se hace útil', '\r\nLa programación es una actividad muy valorada y con gran demanda en el mercado, ya que la transformación digital es una realidad, especialmente para páginas web, blogs y otros canales web.\r\n\r\nSin embargo, aquellas personas que no tienen tanto conocimiento sobre lenguajes de programación, generalmente no saben qué significa PHP. \r\n\r\nCon los años, principalmente debido a su accesibilidad, el lenguaje PHP ha ganado muchos seguidores, formando una gran comunidad de apoyo.\r\n\r\nPor lo tanto, quienes lo utilizan para programar pueden resolver dudas, aprender más y estar en constante desarrollo.\r\n\r\nTambién existen muchas ventajas al usar el lenguaje PHP, que también refuerzan este escenario tan positivo.\r\n\r\nEn este contenido, te hablaremos con más detalle sobre qué es PHP para que aprendas todo lo que necesitas saber sobre el tema.', 'Ivan de Souza', '2022-04-12', '', ''),
(6, '¿Qué es PHP y cómo funciona?', 'PHP es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear páginas web, favoreciendo la conexión entre los servidores y la interfaz de usuario.\r\n\r\nEntre los factores que hicieron que PHP se volviera tan popular, se destaca el hecho de que es de código abierto.\r\n\r\nEsto significa que cualquiera puede hacer cambios en su estructura. En la práctica, esto representa dos cosas importantes:\r\n\r\nes de código abierto, no hay restricciones de uso vinculadas a los derechos. El usuario puede usar PHP para programar en cualquier proyecto y comercializarlo sin problemas.\r\nestá en constante perfeccionamiento, gracias a una comunidad de desarrolladores proactiva y comprometida.', 'Ivan de Souza', '2022-04-12', '', ''),
(7, 'La función principal de PHP, en la práctica', 'El PHP generalmente es definido como un lenguaje del lado del servidor. Esto significa que se aplica en la programación que tiene lugar en el servidor web responsable de ejecutar la aplicación o, más a menudo, en un sitio web.\r\n\r\nEste trabajo previo permite cargar los elementos de una página antes de mostrarlos al usuario que accede a un sitio web, por ejemplo.\r\n\r\nEl código PHP se ejecuta en el servidor que, al leer los comandos, puede activar todos los elementos funcionales y la interfaz visual del sitio web.\r\n\r\nQuizás, la aplicación principal del lenguaje PHP, cuando hablamos de la web, es estructurar sitios web en WordPress.\r\n\r\nLa simplicidad para aprender a usarlo y el desarrollo del código abierto le facilita el trabajo a los profesionales que eligen estructurar sitios web utilizando la plataforma, pues a medida que avanzan las configuraciones y ediciones se simplifican aún más.', 'Ivan de Souza', '2022-04-12', '', ''),
(8, '¿Cuáles son las ventajas de usar PHP?', 'El PHP trae una serie de beneficios que se identifican fácilmente cuando analizamos sus características y las diferentes posibilidades de aplicación de dicho lenguaje.\r\n\r\nHoy en día, el mercado de programación busca profesionales con experiencia en aplicaciones web y, en este escenario, PHP es el principal recurso.\r\n\r\nA continuación, te diremos las principales ventajas que muestran por qué el PHP es un lenguaje muy utilizado, especialmente en proyectos web.', '', '0000-00-00', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`codNoticia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `codNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
