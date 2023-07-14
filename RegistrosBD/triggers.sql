use integradora2;

-- Triggers -------------------------------

-- Comprobar si existen productos asociados a la categoría a eliminar y tomar una acción según el resultado.

DELIMITER //

CREATE TRIGGER verificar_existencia_productos
BEFORE DELETE ON Categorias
FOR EACH ROW
BEGIN
    DECLARE num_productos INT;

    SELECT COUNT(*) INTO num_productos
    FROM Productos
    WHERE id_categoria = OLD.id_categoria;

    IF num_productos > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'No se puede eliminar la categoría porque existen productos asociados.';
    END IF;
END //

DELIMITER ;

drop trigger verificar_existencia_productos;

-- DELETE FROM Categorias WHERE id_categoria = 1;

--  Asigna un rol predeterminado a un nuevo usuario cada vez que se inserta un nuevo registro en la tabla Usuarios.

DELIMITER //

CREATE TRIGGER asignar_rol_predeterminado
BEFORE INSERT ON Usuarios
FOR EACH ROW
BEGIN
    SET NEW.id_rol = 3; -- ID del rol predeterminado que deseas asignar al nuevo usuario (cliente)
END //

DELIMITER ;

-- INSERT INTO Usuarios (nombre, email) VALUES ('John Doe', 'johndoe@example.com');


-- Verifica automáticamente si hay suficiente stock disponible al insertar nuevos registros en Detalles_Carrito.

DELIMITER //

CREATE TRIGGER validar_stock
BEFORE INSERT ON Detalles_Carrito
FOR EACH ROW
BEGIN
    DECLARE stock_disponible INT;
    SET stock_disponible = (
        SELECT cantidad
        FROM Inventario
        WHERE id_producto = NEW.id_producto
    );
    
    IF NEW.cantidad > stock_disponible THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'No hay suficiente stock disponible';
    END IF;
END //

DELIMITER ;

-- INSERT INTO Detalles_Carrito (id_producto, cantidad) VALUES (1, 11);


DELIMITER //

CREATE TRIGGER after_insert_productos
AFTER INSERT ON productos
FOR EACH ROW
BEGIN
    -- Insertar un nuevo registro en la tabla "inventario"
    INSERT INTO inventario (id_producto, id_categoria, cantidad)
    VALUES (NEW.id_producto, NEW.id_categoria, 0);

END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER after_insert_productos_imagenes
AFTER INSERT ON productos
FOR EACH ROW
BEGIN
    -- Insertar un nuevo registro en la tabla "imagenes_productos"
    INSERT INTO imagenes_productos (id_producto, imagen_path)
    VALUES (NEW.id_producto, 'ruta_de_la_imagen');

END //

DELIMITER ;


DELIMITER //

CREATE TRIGGER `detalles_carrito_after_insert` AFTER INSERT ON `detalles_carrito`
FOR EACH ROW
BEGIN
    DECLARE total DECIMAL(10, 2);

    -- Calcula el monto total de la compra para el `id_carrito` correspondiente
    SELECT SUM(cantidad * precio_unitario) INTO total
    FROM `detalles_carrito`
    WHERE id_carrito = NEW.id_carrito;

    -- Actualiza el monto total de la compra en la tabla `carrito`
    UPDATE `carrito`
    SET compra_total = total
    WHERE id_carrito = NEW.id_carrito;
END //

DELIMITER ;





