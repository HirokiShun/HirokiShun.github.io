/*STORED PRODUCEDURES*/

/*INSERTAR USUARIOS*/
DELIMITER //  
CREATE PROCEDURE INSERT_Usuarios(
				  pCorreo varchar(50),
				 Pnickname varchar(80),
			     pContraseña varchar(8),
				 pRol_Usuario varchar(20),
				 pFoto longblob,
				 pNombreCompleto varchar(100),
                 pFecha_Naci date,
                 pSexo varchar(10),
				 Tipo_Pefil varchar(16)
                 ) 
BEGIN

INSERT INTO Usuarios(Correo,
						 Nickname,
                         Contraseña,
                         Rol_Usuario,
                         Imagen,
                         NombreCompleto,
                         Fecha_Nacimiento,
                         Sexo,
                         Fecha_alta,
                         Tipo_Pefil)
    VALUES(pCorreo,
			Pnickname,
			pContraseña,
			pRol_Usuario,
			pFoto,
			pNombreCompleto,
			pFecha_Naci,
			pSexo,
            NOW(),
			Tipo_Pefil
			);
END //
DELIMITER ;

/*MODIFICAR USUARIOS*/
DELIMITER //  
CREATE PROCEDURE UPDATE_Usuarios(
				Pid int,
                pCorreo varchar(50),
				 Pnickname varchar(80),
			     pContraseña varchar(8),
				 pRol_Usuario varchar(20),
				 pFoto longblob,
				 pNombreCompleto varchar(100),
                 pFecha_Naci date,
                 pSexo varchar(10),
				 pTipo_Pefil varchar(16)
                 ) 
BEGIN
 UPDATE Usuarios
SET Correo = pCorreo,
	Nickname = Pnickname,
    Contraseña = pContraseña,
    Rol_Usuario = pRol_Usuario,
    Imagen = pFoto,
    NombreCompleto = pNombreCompleto,
    Fecha_Nacimiento = pFecha_Naci,
    sexo = pSexo,
    Fecha_alta = NOW(),
    Tipo_Pefil = pTipo_Perfil
where id = Pid;

END //
DELIMITER ;





/*ELIMINAR USUARIOS*/
/*SP para borrar EMPLEADOS/REPORTEROS*/
DELIMITER //
CREATE PROCEDURE SP_DELETE_Reportero(pId int)
Begin
      delete from Usuarios where id=pId;
End //
DELIMITER ;



