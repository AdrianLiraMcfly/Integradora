use integradora2;



CREATE VIEW vista_inventario AS
SELECT i.id_inventario, c.nombre AS categoria, p.nombre AS producto, i.cantidad
FROM inventario i
JOIN categorias c ON i.id_categoria = c.id_categoria
JOIN productos p ON i.id_producto = p.id_producto;



CREATE VIEW vista_productos_categoria AS
SELECT p.id_producto, p.nombre, p.descripcion, p.precio, c.nombre AS categoria
FROM productos p
JOIN categorias c ON p.id_categoria = c.id_categoria;


CREATE VIEW vista_usuarios_roles AS
SELECT u.id_usuario, u.nombre AS usuario, u.telefono, u.email, u.contraseña, r.nombre AS rol
FROM usuarios u
JOIN roles r ON u.id_rol = r.id_rol;

drop view vista_usuarios_roles;

CREATE VIEW `vista_carrito_usuarios` AS
SELECT c.id_carrito, c.id_usuario, u.nombre AS nombre_usuario, c.id_order, c.fecha_venta, c.total
FROM `carrito` c
JOIN `usuarios` u ON c.id_usuario = u.id_usuario;



CREATE VIEW vista_productos_imagenes AS
SELECT p.id_producto, p.nombre AS producto, p.descripcion, c.nombre AS categoria, p.precio, ip.imagen_path
FROM productos p
JOIN categorias c ON p.id_categoria = c.id_categoria
JOIN imagenes_productos ip ON p.id_producto = ip.id_producto;

-- Vista de inventario con cantidad disponible:

CREATE VIEW vista_inventario_disponible AS
SELECT i.id_inventario, p.nombre AS producto, c.nombre AS categoria, i.cantidad,
       (SELECT SUM(dc.cantidad) FROM detalles_carrito dc WHERE dc.id_producto = i.id_producto) AS vendido,
       i.cantidad - COALESCE((SELECT SUM(dc.cantidad) FROM detalles_carrito dc WHERE dc.id_producto = i.id_producto), 0) AS disponible
FROM inventario i
JOIN productos p ON i.id_producto = p.id_producto
JOIN categorias c ON i.id_categoria = c.id_categoria;

-- Vista de carritos con total de ventas:

CREATE VIEW vista_carritos_ventas AS
SELECT c.id_carrito, u.nombre AS usuario, c.fecha_venta, c.total
FROM carrito c
JOIN usuarios u ON c.id_usuario = u.id_usuario;


-- Vista de productos en carrito con detalles:

CREATE VIEW vista_productos_carrito AS
SELECT c.id_carrito, u.nombre AS usuario, p.nombre AS producto, dc.cantidad, dc.precio_unitario
FROM carrito c
JOIN usuarios u ON c.id_usuario = u.id_usuario
JOIN detalles_carrito dc ON c.id_carrito = dc.id_venta
JOIN productos p ON dc.id_producto = p.id_producto;


-- Vista de ventas por usuario:

CREATE VIEW vista_ventas_por_usuario AS
SELECT u.nombre AS usuario, COUNT(c.id_carrito) AS total_ventas
FROM usuarios u
LEFT JOIN carrito c ON u.id_usuario = c.id_usuario
GROUP BY u.nombre;
