CREATE DATABASE BDKudala;
USE BDKudala;

CREATE TABLE Transaccion
(
idTransaccion VARCHAR(3) PRIMARY KEY NOT NULL,
idVenta INT NOT NULL,
montoTrans DECIMAL(20,2),
resultadoTrans BOOLEAN
);

CREATE TABLE Venta
(
idVenta INT PRIMARY KEY NOT NULL,
idComprador INT NOT NULL,
fecha DATE,
valorTotal DECIMAL(20,2)
);

CREATE TABLE Categoria
(
idCategoria VARCHAR(3) PRIMARY KEY NOT NULL,
DescripcionCat VARCHAR(25) NOT NULL
);

CREATE TABLE Producto
(
idProducto INT PRIMARY KEY NOT NULL,
nombre VARCHAR(20) NOT NULL,
descrPro VARCHAR(50),
activo BIT DEFAULT 1 NOT NULL,
idUsuarioPro INT NOT NULL, 
valorPro DECIMAL(20,2)
);

CREATE TABLE ProductoCategoria
(
idProductoCategoria INT PRIMARY KEY NOT NULL,
idProducto INT NOT NULL,
idCategoria VARCHAR(3) NOT NULL
);

CREATE TABLE VentaProducto
(
idVentaProducto INT PRIMARY KEY NOT NULL,
idVenta INT NOT NULL,
idProducto INT NOT NULL,
cant INT
);

CREATE TABLE Pais
(
idPais VARCHAR(3) PRIMARY KEY NOT NULL,
DescripcionPais VARCHAR(25) NOT NULL
);

CREATE TABLE Departamento
(
idDepartamento VARCHAR(3) PRIMARY KEY NOT NULL,
DescripcionDep VARCHAR(25) NOT NULL,
idPais Varchar(3) NOT NULL
);

CREATE TABLE Ciudad
(
idCiudad VARCHAR(3) PRIMARY KEY NOT NULL,
DescripcionCiu VARCHAR(25) NOT NULL,
idDepartamento VARCHAR(3) NOT NULL
);

CREATE TABLE LugarEntrega
(
idLugarEntrega INT PRIMARY KEY NOT NULL,
idUsuario INT NOT NULL,
idCiudad VARCHAR(3) NOT NULL,
Direccion VARCHAR(50) NOT NULL
);

CREATE TABLE TipoDocumento
(
idTipoDoc VARCHAR(2) PRIMARY KEY NOT NULL,
DescripcionTD VARCHAR(25) NOT NULL
);

CREATE TABLE TipoUsuario
(
idTipoUsuario VARCHAR(2) PRIMARY KEY NOT NULL,
DescripcionTU VARCHAR(25) NOT NULL
);

CREATE TABLE TipoTelefono
(
idTipoTel VARCHAR(3) PRIMARY KEY NOT NULL,
DescripcionTT VARCHAR(25) NOT NULL
);

CREATE TABLE Usuario
(
idUsuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
docUsuario VARCHAR(14),
idTipoDoc VARCHAR(2) NOT NULL,
idTipoUsuario VARCHAR(2) NOT NULL,
nombreUsuario VARCHAR(20) NOT NULL,
apellidoUsuario VARCHAR(20) NOT NULL,
correoUsuario VARCHAR(30) NOT NULL,
contrasennia VARCHAR(30) NOT NULL,
idTipoTel VARCHAR(3) NOT NULL,
numTel VARCHAR(12) NOT NULL,
valorCredito DECIMAL(20,2)
);

CREATE TABLE Subasta
(
idSubasta INT PRIMARY KEY NOT NULL,
idProducto INT NOT NULL, 
valorInicial DECIMAL(20,2),
valorFinal DECIMAL(20,2), 
activa BIT DEFAULT 1 NOT NULL,
idGanador INT NOT NULL
);

CREATE TABLE Puja
(
idPuja INT PRIMARY KEY NOT NULL,
idSubasta INT NOT NULL,
idApostador INT NOT NULL,
valorPuja DECIMAL(20,2)
);

ALTER TABLE Transaccion ADD FOREIGN KEY (idVenta) REFERENCES Venta (idVenta);
ALTER TABLE Venta ADD FOREIGN KEY (idComprador) REFERENCES Usuario (idUsuario);
ALTER TABLE VentaProducto ADD FOREIGN KEY (idProducto) REFERENCES Producto (idProducto);
ALTER TABLE VentaProducto ADD FOREIGN KEY (idVenta) REFERENCES Venta (idVenta);
ALTER TABLE Producto ADD FOREIGN KEY (idUsuarioPro) REFERENCES Usuario (idUsuario);
ALTER TABLE ProductoCategoria ADD FOREIGN KEY (idProducto) REFERENCES Producto (idProducto);
ALTER TABLE ProductoCategoria ADD FOREIGN KEY (idCategoria) REFERENCES Categoria (idCategoria);
ALTER TABLE Ciudad ADD FOREIGN KEY (idDepartamento) REFERENCES Departamento (idDepartamento);
ALTER TABLE Departamento ADD FOREIGN KEY (idPais) REFERENCES Pais (idPais);
ALTER TABLE LugarEntrega ADD FOREIGN KEY (idCiudad) REFERENCES Ciudad (idCiudad);
ALTER TABLE LugarEntrega ADD FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE Usuario ADD FOREIGN KEY (idTipoDoc) REFERENCES TipoDocumento (idTipoDoc);
ALTER TABLE Usuario ADD FOREIGN KEY (idTipoUsuario) REFERENCES TipoUsuario (idTipoUsuario);
ALTER TABLE Usuario ADD FOREIGN KEY (idTipoTel) REFERENCES TipoTelefono (idTipoTel);
ALTER TABLE Subasta ADD FOREIGN KEY (idProducto) REFERENCES Producto (idProducto);
ALTER TABLE Subasta ADD FOREIGN KEY (idGanador) REFERENCES Usuario (idUsuario);
ALTER TABLE Puja ADD FOREIGN KEY (idSubasta) REFERENCES Subasta (idSubasta);
ALTER TABLE Puja ADD FOREIGN KEY (idApostador) REFERENCES Usuario (idUsuario);

INSERT INTO TipoDocumento VALUES 
( 'CC', 'Cédula de Ciudadanía'), ( 'NI', 'NIT'), ( 'RU', 'RUT'), 
( 'CE', 'Cédula de Extranjería'), ( 'PA', 'Pasaporte'),
( 'TI', 'Tarjeta de Identidad'),( 'RC', 'Registro Civil');

INSERT INTO TipoTelefono VALUES
('FIJ','Teléfono Fijo'),
('CEL','Teléfono Celular'),
('SAT','Teléfono Satelital');

INSERT INTO TipoUsuario VALUES
('CO','Cliente Ocasional'),
('CF','Cliente Frecuente');

INSERT INTO Pais values
('COL','Colombia'),
('USA','Estados Unidos'),
('ARG','Argentina'),
('JAP','JAPON');

INSERT INTO Departamento VALUES
('ANT','Antioquia','COL'), ('CND','Cundinamarca','COL'),
('VRG','Virginia','USA'), ('FLO','Florida','USA'),
('BAS','Buenos Aires','ARG'), ('MIS','Misiones','ARG'),
('KAN','Kanto','JAP'), ('HOK','Hokkaido','JAP');

INSERT INTO Ciudad VALUES
('MED', 'Medellín', 'ANT'), ('ENV', 'Envigado', 'ANT'),
('BOG','Bogotá','CND'), ('GIR','Girardot','CND'),
('RCM', 'Richmond', 'VRG'), ('NFK', 'Norfolk', 'VRG'),
('MIA', 'MIAMI', 'FLO'), ('ORL', 'Orlando', 'FLO'),
('BBL', 'Bahia Blanca', 'BAS'), ('PLA', 'La Plata', 'BAS'),
('IGZ', 'Puerto Iguazú', 'MIS'), ('POS', 'Posadas', 'MIS'),
('TOK', 'TOKIO', 'KAN'), ('YKM', 'Yokohama', 'KAN'),
('SPR', 'Sapporo', 'HOK'), ('ABA', 'Abashiri', 'HOK');

INSERT INTO Usuario VALUES
(1,123,'CC','CO','Camilo','Vasquez','camilovasquez@gmail.com','cv123','CEL','3001452112',0.00),
(2,456,'CE','CO','Alejandro','Giraldo','alejandrogiraldo@gmail.com','ag456','CEL','3001452113',0.00),
(3,789,'CC','CF','Juan','Florez','juanflorez@gmail.com','jf789','CEL','3001452114',10000.00),
(4,000,'PA','CO','Brayan','Muñeton','brayanmuñeton@gmail.com','bm000','CEL','3001452115',0.00);

INSERT INTO Producto Values
(01,'Celular','iPhone 13 Pro Max',1,789,6000000.00),
(02,'Televisor','Televisor Samsung 50 Pulgadas',1,789,3500000.00),
(03,'Cuadro','Cuadro de Pintura',1,123,00.00);

INSERT INTO Categoria Values
('TEC','Tecnología'),
('HOG','Hogar');

INSERT INTO ProductoCategoria Values
(01,01,'TEC'),
(02,01,'TEC'),
(03,02,'TEC'),
(04,03,'HOG');

INSERT INTO Venta Values
(01,123,"2022-04-01",6000000.00),
(02,456,"2022-04-07",9500000.00),
(03,789,"2022-04-20",3500000.00);

INSERT INTO VentaProducto Values
(01,01,01,1),
(02,01,02,1),
(03,02,02,1),
(04,03,01,1);

INSERT INTO LugarEntrega Values
(01,789,'MED','Carrera 23 # 54-32'),
(02,123,'MIA','Av 65 # 01-34'),
(03,456,'TOK','Calle 09 # 61-12');

INSERT INTO Transaccion Values
(01,01,200000.00,1),
(02,02,50000.00,0),
(03,02,50000.00,1),
(04,03,1000000.00,1);

INSERT INTO Subasta Values
(01,03,1000000.00,5000000.00,1,789),
(02,03,1000000.00,3000000.00,1,456);

INSERT INTO Puja Values
(01,01,789,3000000.00),
(02,01,789,5000000.00),
(03,02,456,2000000.00),
(04,02,456,3000000.00);

##DROP DATABASE BDKudala

-- STORED PROCEDURES

--*****Tipo de Documento*****
-- ========== Para mostrar el tipo de documento ============= 
DELIMITER $$
CREATE PROCEDURE BuscarTipoDocGeneral ()
	BEGIN
		SELECT idTipoDoc as Codigo, 
		DescripcionTD as Descripcion
		FROM TipoDocumento
		ORDER BY DescripcionTD;
	END
$$
DELIMITER ;
-- CALL BuscarTipoDocGeneral();

DELIMITER $$
CREATE PROCEDURE GuardarTipoDoc (idTDoc VARCHAR(2),Descripcion VARCHAR(25))
	BEGIN
		IF EXISTS( SELECT * FROM tipodocumento WHERE idTipoDoc = idTDoc OR DescripcionTD = Descripcion) 
				THEN SELECT -1 AS Rpta;
		ELSE
			START TRANSACTION; 
					INSERT INTO `tipodocumento` (`idTipoDoc`, `DescripcionTD`) 
					VALUES (idTDoc, Descripcion);
			COMMIT;
			SELECT idTDoc AS Rpta;
		END IF;
	END
$$
DELIMITER ;
-- CALL GuardarTipoDoc("","");

DELIMITER $$
CREATE PROCEDURE ModificarTipoDoc ( idTDoc VARCHAR(2),Descripcion VARCHAR(25))
	BEGIN
		IF EXISTS( SELECT * FROM tipodocumento WHERE idTipoDoc = idTDoc) THEN
				UPDATE `tipodocumento` 
				SET `idTipoDoc` = idTDoc, `DescripcionTD` = Descripcion
				WHERE `tipodocumento`.`idTipoDoc` = idTDoc;
				
				SELECT idTDoc AS Rpta;
		ELSE
			SELECT -1 AS Rpta;			
		END IF;
	END
$$
DELIMITER ;
-- CALL ModificarTipoDoc("","");

DELIMITER $$
CREATE PROCEDURE EliminarTipoDoc (idTDoc VARCHAR(2))
	BEGIN
		IF EXISTS( SELECT * FROM tipodocumento WHERE idTipoDoc = idTDoc) THEN
				DELETE FROM `tipodocumento` 
				WHERE `tipodocumento`.`idTipoDoc` = idTDoc;
				
				SELECT idTDoc AS Rpta;
		ELSE
			SELECT -1 AS Rpta;			
		END IF;
	END
$$
DELIMITER ;
-- CALL EliminarTipoDoc("");

--*****Tipo Usuario*****
-- ========== Para mostrar el tipo de usuario ============= 
DELIMITER $$
CREATE PROCEDURE BuscarTipoUsuarioGeneral ()
	BEGIN
		SELECT `idTipoUsuario` as Codigo,
					`DescripcionTU` as Descripcion
		FROM `TipoUsuario`
		ORDER BY `DescripcionTU` ASC;
	END
$$
DELIMITER ;
-- CALL BuscarTipoUsuario();


--*****Tipo Telefono*****
-- ========== Para mostrar el tipo de telefono ============= 
DELIMITER $$
CREATE PROCEDURE BuscarTipoTelGeneral()
	BEGIN		
			SELECT `idTipoTel`  AS Codigo,
							`DescripcionTT` AS Descripcion
			FROM `tipotelefono`
			ORDER BY `DescripcionTT` ASC;
	END
$$
DELIMITER ;
-- CALL BuscarTipoUsuario();

--*****Pais*****
DELIMITER $$
CREATE PROCEDURE BuscarPaisGeneral()
	BEGIN		
			SELECT `idPais`  AS Codigo,
							`DescripcionPais` AS Descripcion
			FROM `pais`
			ORDER BY `DescripcionPais` ASC;
	END
$$
DELIMITER ;

--*****Departamento*****
DELIMITER $$
CREATE PROCEDURE BuscarDepartamentoGeneral(IN pais_id VARCHAR(3))
	BEGIN		
			SELECT `idDepartamento` AS Codigo,
			`DescripcionDep` AS Descripcion 
			FROM `departamento` 
			WHERE `idPais`= pais_id 
			ORDER BY `Descripcion` ASC;
	END
$$
DELIMITER ;


--*****Ciudad*****
DELIMITER $$
CREATE PROCEDURE BuscarCiudadGeneral(IN idDepart VARCHAR(3))
	BEGIN		
			SELECT `idCiudad`  AS Codigo,
							`DescripcionCiu` AS Descripcion
			FROM `ciudad`
			WHERE `idDepartamento` = idDepart
			ORDER BY `DescripcionCiu` ASC;
	END
$$
DELIMITER ;


--*****Lugar Entrega*****
DELIMITER $$
CREATE PROCEDURE BuscarLugarEntregaGeneral(idUsu VARCHAR(3))
	BEGIN		
			SELECT `idLugarEntrega`  AS Codigo,
							`idCiudad` AS Ciudad,
							`Direccion` AS Direccion						
			FROM `lugarentrega`
			WHERE `idUsuario` = idUsu;
	END
$$
DELIMITER ;

--*****Usuario*****
-- ======== Para buscar al usuario =========== 
DELIMITER $$
CREATE PROCEDURE BuscarUsuario ()
	BEGIN
		SELECT idUsuario AS IDUsuario,
		docUsuario AS NroDoc,
		idTipoDoc AS TipoDoc,
		idTipoUsuario AS TipoUsuario,
		nombreUsuario AS NombreUsuario,
		apellidoUsuario AS ApellidoUsuario,
		correoUsuario AS CorreoUsuario,
        valorCredito AS Credito
		FROM Usuario
		ORDER BY NombreUsuario;
	END
$$
DELIMITER ;
-- CALL BuscarUsuario();

-- ======== Para buscar al usuario por ID ===========
DELIMITER $$
CREATE PROCEDURE BuscarUsuarioPorId (id int)
	BEGIN
		SELECT `idUsuario` AS idUsuario,
		`docUsuario` AS NroDocumento,
        `idTipoDoc` AS TipoDocumento,
        `idTipoUsuario` AS TipoUsuario,
        `nombreUsuario` AS Nombre,
        `apellidoUsuario` AS Apellido,
        `correoUsuario` AS Correo,
        `contrasennia` AS Contrasennia,
        `idTipoTel` AS TipoTel,
        `numTel` AS NroTelefono,
        `valorCredito` AS VrCredito 
		FROM `usuario`
		WHERE `idUsuario`= id;
	END
$$
DELIMITER ;
-- CALL BuscarUsuarioPorId(123);

-- ======== Para llenar combo de cliente ===========
DELIMITER $$
CREATE PROCEDURE Cliente_LlenarCombo()
	BEGIN
		SELECT idUsuario as Codigo, nombreUsuario as Nombre, apellidoUsuario as Apellido
		FROM Usuario
		ORDER BY Nombre;
	END
$$
DELIMITER ;    
-- CALL Cliente_LlenarCombo();

-- ======== Para mostrar productos x categorias ================
DELIMITER $$
CREATE PROCEDURE MostrarProductoPorCategoria(cod VARCHAR(3))
		BEGIN
			SELECT P.idProducto, P.Nombre,P.descrPro,P.activo, valorPro FROM Producto P
            INNER JOIN productocategoria PC ON P.idProducto = PC.idProducto
            INNER JOIN categoria C ON C.idCategoria = PC.idCategoria
            WHERE C.idCategoria = cod;
		END
$$
DELIMITER ;
-- CALL MostrarProductoPorCategoria('tec')

-- ======== Para llenar combo de categorias ===========
DELIMITER $$
CREATE PROCEDURE LlenarCategoria()
	BEGIN
		SELECT idCategoria as Codigo, DescripcionCat as Nombre
		FROM Categoria
		ORDER BY Nombre;
	END
$$
DELIMITER ;    
-- CALL LlenarCategoria();

-- ======== Para mostrar productos ===========
DELIMITER $$
CREATE PROCEDURE LlenarProductos()
	BEGIN
		SELECT idProducto as Codigo, descrPro as Descripcion, 
        nombre as Nombre, activo as Activo, valorPro as Valor
		FROM Producto
		ORDER BY Nombre;
	END
$$
DELIMITER ;   
-- CALL LlenarProductos()

-- ======== Para mostrar productos de subastas ===========
DELIMITER $$
CREATE PROCEDURE MostrarProductoSubasta()
		BEGIN
			SELECT P.idProducto, P.Nombre,P.descrPro,P.activo, valorPro FROM Producto P
            INNER JOIN subasta S ON P.idProducto = S.idProducto;
		END
$$
DELIMITER ;
-- CALL MostrarProductoSubasta()

-- ======== Para mostrar productos en venta ===========
DELIMITER $$
CREATE PROCEDURE MostrarProductoVenta()
		BEGIN
			SELECT P.idProducto, P.Nombre,P.descrPro,P.activo, valorPro FROM Producto P
            INNER JOIN ventaproducto VP ON P.idProducto = VP.idProducto
            INNER JOIN venta V ON V.idVenta = VP.idProducto;
		END
$$
DELIMITER ;
-- CALL MostrarProductoVenta()

-- ======== Para Grabar al usuario ===========
DELIMITER $$
CREATE PROCEDURE GrabarUsuario
(NroDoc INT, TipoDoc VARCHAR(2), TipoUsuario VARCHAR(2),
Nombre VARCHAR(20), Apellido VARCHAR(20), correo VARCHAR(30), 
contrasennia VARCHAR(30), idTipoTel VARCHAR(3), credito DECIMAL(20,2))
	BEGIN
		IF EXISTS( SELECT * FROM usuario WHERE idUsuario = NroDoc OR 
				(apellidoUsuario = Apellido AND nombreUsuario=Nombre)) 
				THEN SELECT -1 AS Rpta;
		ELSE
			START TRANSACTION; 
				INSERT INTO Usuario
				VALUES (NroDoc, TipoDoc, TipoUsuario, Nombre, 
                Apellido, correo, contrasennia, idTipoTel, credito);
			COMMIT;
			SELECT NroDoc AS Rpta;
		END IF;
	END
$$
DELIMITER ;
-- CALL GrabarUsuario (1234567, 'CC', 'CF', 'Lana', 'Grant', 'lanita@gmail.com','prueba','CEL',1000000.00);

-- ======== Para registrar un usuario con datos basicos ===========
DELIMITER $$
CREATE PROCEDURE RegistrarUsuario
(Nombre VARCHAR(20), Apellido VARCHAR(20), correo VARCHAR(30), 
contra VARCHAR(30))
	BEGIN
		IF EXISTS( SELECT * FROM usuario WHERE correoUsuario = correo ) 
				THEN SELECT -1 AS Rpta;
		ELSE
			START TRANSACTION; 
				
				INSERT INTO `usuario` 
				(`idTipoUsuario`, `nombreUsuario`, `apellidoUsuario`, `correoUsuario`, `contrasennia`, `valorCredito`)
				VALUES ("CO", Nombre, 
                Apellido, correo, contra, 0);
			COMMIT;
			SELECT idUsuario AS Rpta
            FROM usuario
            WHERE correoUsuario = correo;
		END IF;
	END
$$
DELIMITER ;
-- CALL RegistrarUsuario('Lana', 'Grant', 'lanita@gmail.com','prueba');
-- ======== Para Logear un Usuario ===========
DELIMITER $$
CREATE PROCEDURE LoginUsuario
(correo VARCHAR(30), 
contra VARCHAR(30))
	BEGIN
		IF EXISTS( SELECT * FROM usuario WHERE (correoUsuario = correo AND contrasennia = contra) ) 
				THEN SELECT idUsuario AS Rpta
				FROM usuario
				WHERE correoUsuario = correo;			
		ELSE
			SELECT -1 AS Rpta;
		END IF;
	END;
$$
DELIMITER ;

-- ======== Para modificar al usuario (TODO MENOS EL ID) =========== 
DELIMITER $$
CREATE PROCEDURE ModificarUsuario
(idUser INT, NroDoc VARCHAR(14), TipoDoc VARCHAR(2), TipoUsuario VARCHAR(2), Nombre VARCHAR(20), Apellido VARCHAR(20), 
correo VARCHAR(30), contra VARCHAR(30), idTipoTel VARCHAR(3))
BEGIN
		IF EXISTS( SELECT * FROM `usuario`  WHERE `usuario`.`idUsuario` = idUser ) THEN				
				START TRANSACTION; 
			
                UPDATE `usuario` 
                SET `docUsuario` = NroDoc, `idTipoDoc` = TipoDoc, `idTipoUsuario` = TipoUsuario,
                `nombreUsuario` = nombre, `apellidoUsuario` = Apellido, `correoUsuario` = correo,
                `contrasennia` = contra, `idTipoTel` = idTipoTel WHERE `usuario`.`idUsuario` = idUser;			    
                
				COMMIT;
			
				SELECT idUser AS Rpta;
		ELSE
			SELECT -1 AS Rpta;	
		END IF;
END;
$$
DELIMITER ;
