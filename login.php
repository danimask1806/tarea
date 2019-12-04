<? php include ( ' server.php ' ) ? > 
<! DOCTYPE html>
< html >
< cabeza >
	< título > MA </ título >
	< link  rel = " stylesheet "  type = " text / css "  href = " style.css " >
</ cabeza >
< body  background = " 123456789.svg " >
< cuerpo >
	< div  class = " header " >
		< h2 > Iniciar sesión </ h2 >
	</ div >
	
	< form  method = " post "  action = " login.php " >

		<? php include ( ' errors.php ' ); ? > 

		< div  class = " input-group " >
			< etiqueta > Nombre de usuario </ etiqueta >
			< input  type = " text "  name = " username " >
		</ div >
		< div  class = " input-group " >
			< etiqueta > Contraseña </ etiqueta >
			< input  type = " password "  name = " password " >
		</ div >
		< div  class = " input-group " >
			< input  type = " submit "  name = " login_user " > Iniciar sesión </ button >
		</ div >
		< p >
			¿Todavía no eres miembro? < Un  href = " loginSA.php " > Regístrese </ a >
		</ p >
	</ form >


</ cuerpo >
</ html >
