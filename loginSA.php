<? php 
	// declaración de variable
	$ username  =  " " ;
	$ email     =  " " ;
	$ errores  =  array ();
	// conectarse a la base de datos
	$ db  =  mysqli_connect ( ' db4free.net ' , ' tareasroot ' , ' contraseña ' , ' tareasdb1234 ' );
	// REGISTRO DE USUARIO
	if ( isset ( $ _POST [ ' reg_user ' ])) {
		// recibir todos los valores de entrada del formulario
		$ username  =  mysqli_real_escape_string ( $ db , $ _POST [ ' nombre de usuario ' ]);
		$ email  =  mysqli_real_escape_string ( $ db , $ _POST [ ' correo electrónico ' ]);
		$ contraseña_1  =  mysqli_real_escape_string ( $ db , $ _POST [ ' contraseña_1 ' ]);
		$ contraseña_2  =  mysqli_real_escape_string ( $ db , $ _POST [ ' contraseña_2 ' ]);
		// validación del formulario: asegúrese de que el formulario se complete correctamente
		if ( empty ( $ username )) { array_push ( $ errors , " Se requiere nombre de usuario " ); }
		if ( vacío ( $ correo electrónico )) { array_push ( $ errores , " Se requiere correo electrónico " ); }
		if ( vacío ( $ contraseña_1 )) { array_push ( $ errores , " Se requiere contraseña " ); }
		if ( $ contraseña_1  ! =  $ contraseña_2 ) {
			array_push ( $ errores , " Las dos contraseñas no coinciden " );
		}
		// registrar usuario si no hay errores en el formulario
		if ( cuenta ( $ errores ) ==  0 ) {
			$ query  =  " INSERTAR EN usuarios (nombre de usuario, correo electrónico, contraseña)
					  VALUES ( ' $ nombre de usuario ' , ' $ correo electrónico ' , ' $ contraseña_1 ' ) " ;
			if ( $ db -> query ( $ query ) ===  TRUE ) {
			    echo  " Nueva tabla bien creada " ;
			} más {
			    echo  " Error: "  .  $ consulta  .  " <br> "  .  $ db -> error ;
			}
			
		}
	}
	// ...
	// INICIAR SESIÓN
	if ( isset ( $ _POST [ ' login_user ' ])) {
		$ username  =  mysqli_real_escape_string ( $ db , $ _POST [ ' nombre de usuario ' ]);
		$ contraseña  =  mysqli_real_escape_string ( $ db , $ _POST [ ' contraseña ' ]);
		if ( vacío ( $ nombre de usuario )) {
			array_push ( $ errores , " Se requiere nombre de usuario " );
		}
		if ( vacío ( $ contraseña )) {
			array_push ( $ errores , " Se requiere contraseña " );
		}
		if ( cuenta ( $ errores ) ==  0 ) {
			$ query  =  " SELECT  *  FROM users WHERE username = ' $ username '  AND password = ' $ password ' " ;
			$ resultados  =  mysqli_query ( $ db , $ consulta );
			if (mysqli_num_rows ( $ resultados ) ==  1 ) {
				echo "Login sucess";
			} más {
				array_push ( $ errores , " combinación de nombre de usuario / contraseña incorrecta " );
			}
		}
	}
? >
