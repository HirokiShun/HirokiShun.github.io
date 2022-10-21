Use tienda_pwci
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
				 Tipo_Perfil varchar(16)
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
                         Tipo_Perfil)
    VALUES(pCorreo,
			Pnickname,
			pContraseña,
			pRol_Usuario,
			pFoto,
			pNombreCompleto,
			pFecha_Naci,
			pSexo,
            NOW(),
			Tipo_Perfil
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
				 pTipo_Perfil varchar(16)
                 ) 
BEGIN
 UPDATE Usuarios
SET Correo = IFNULL(pCorreo,Correo) ,
	Nickname = IFNULL(Pnickname,Nickname),
    Contraseña = IFNULL(pContraseña,Contraseña),
    Rol_Usuario = IFNULL(pRol_Usuario,Rol_Usuario),
    Imagen = IFNULL(pFoto,Imagen),
    NombreCompleto = IFNULL(pNombreCompleto,NombreCompleto),
    Fecha_Nacimiento = IFNULL(pFecha_Naci,Fecha_Nacimiento),
    sexo = IFNULL(pSexo,sexo),
    Tipo_Perfil = IFNULL(pTipo_Perfil,Tipo_Perfil)
where id = Pid;

END //
DELIMITER ;


/*ELIMINAR USUARIOS*/
/*SP para borrar Usuarios*/
DELIMITER //
CREATE PROCEDURE SP_DELETE_Usuario(pId int)
Begin
		Update Usuarios 
        Set
			Activo=0
        where id=pId;
End //
DELIMITER ;



