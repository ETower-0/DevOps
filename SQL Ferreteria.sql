create database ferreteria;

-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `CodigoCliente` int(11) NOT NULL,
  `NIT_Cedula` int(11) DEFAULT NULL,
  `CodigoVendedor` int(11) DEFAULT NULL,
  `NombreCliente` varchar(45) DEFAULT NULL,
  `RazonSocial` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `TipoCliente` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`CodigoCliente`, `NIT_Cedula`, `CodigoVendedor`, `NombreCliente`, `RazonSocial`, `Email`, `TipoCliente`) VALUES
(200, 2147483647, 101, 'N/a', 'Centros Electricos', 'centrosElectricos@hotmail.com', 'Persona Juridico'),
(201, 2147483647, 104, 'N/a', 'Ferreteria Luis Penagos', 'LuisPenagos@hotmail.com', 'Persona Juridico'),
(202, 51582312, 103, 'Luis Mora', 'N/a', 'luisMora@hotmail.com', 'Persona Natural'),
(203, 1020102, 101, 'Camilo PeÃ±a', 'N/a', 'camiloPeÃ±a@hotmail.com', 'Persona Natural'),
(204, 515834238, 302, 'Gilma Lozano', 'N/a', 'GilmaLozano@hotmail.com', 'Persona Natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `NoFactura` varchar(20) NOT NULL,
  `CodigoCliente` int(11) DEFAULT NULL,
  `CodigoVendedor` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `TotalFactura` int(11) DEFAULT NULL,
  `CodigoProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `ValorUnitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`NoFactura`, `CodigoCliente`, `CodigoVendedor`, `Fecha`, `TotalFactura`, `CodigoProducto`, `Cantidad`, `ValorUnitario`) VALUES
('1', 200, 100, '2020-01-01', 9000, 300, 90, 100),
('2', 201, 101, '2020-05-18', 12000, 300, 120, 100),
('3', 200, 100, '2020-05-11', 4500, 300, 45, 100),
('4', 200, 100, '2020-05-12', 4500, 300, 45, 100);

--
-- Disparadores `facturas`
--
DELIMITER $$
CREATE TRIGGER `multiplica_campo` BEFORE INSERT ON `facturas` FOR EACH ROW SET new.TotalFactura = new.Cantidad * new.ValorUnitario
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `CodigoInventario` int(11) NOT NULL,
  `NombreProducto` varchar(40) DEFAULT NULL,
  `ValorProducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventarios`
--

INSERT INTO `inventarios` (`CodigoInventario`, `NombreProducto`, `ValorProducto`) VALUES
(300, 'Tornillos M3 x 30mm Punta de', 100),
(301, 'Tornillo Hexagonal 3/8', 1000),
(302, 'Sierra 1200W', 700000),
(303, 'Martillo 16 Oz Mando Madera', 25500),
(304, 'Martillo UÃ±a 16 Oz', 28200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `Codigo` int(11) NOT NULL,
  `Cedula` int(11) DEFAULT NULL,
  `NombreVendedor` varchar(40) DEFAULT NULL,
  `ApellidosVendedor` varchar(40) DEFAULT NULL,
  `EmailVendedor` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`Codigo`, `Cedula`, `NombreVendedor`, `ApellidosVendedor`, `EmailVendedor`) VALUES
(100, 111223, 'Carla', 'Paez Velez', 'carlosPaez@hotmail.com'),
(101, 1112233, 'Adriana', 'Lozano', 'adrianaLozano@hotmail.com'),
(102, 2003564, 'Ana Lucia', 'Guerrero', 'anaGuerrero@hotmail.com'),
(103, 1122223, 'Luis', 'Penagos', 'luisPenagos@hotmail.com'),
(104, 1222331, 'Pablo', 'De la Torre', 'pabloDeLaTorre@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CodigoCliente`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`NoFactura`),
  ADD KEY `CodigoCliente` (`CodigoCliente`),
  ADD KEY `CodigoVendedor` (`CodigoVendedor`),
  ADD KEY `CodigoProducto` (`CodigoProducto`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`CodigoInventario`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`Codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`CodigoCliente`) REFERENCES `clientes` (`CodigoCliente`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`CodigoVendedor`) REFERENCES `vendedores` (`Codigo`),
  ADD CONSTRAINT `facturas_ibfk_3` FOREIGN KEY (`CodigoProducto`) REFERENCES `inventarios` (`CodigoInventario`);
