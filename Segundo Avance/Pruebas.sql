CALL INSERT_Usuarios("HomeroElGordo@gmail.com","CosmeFulanito","1234","Vendedor",null,"Homero Simpson",NOW(),"Masculino","Compra/Venta");
Call UPDATE_Usuarios(1,null,null,null,null,null,null,null,null,null);
CALL SP_DELETE_Usuario(1);
select* from Usuarios
