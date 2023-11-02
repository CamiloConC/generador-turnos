Algoritmo GeneradorTurnos
	
	Definir datos Como Cadena //matriz general
	Definir n, fila Como Entero
	
	fila = 0
	n = (26 * 10) //26 letras y 10 números por cada una.
	Dimension datos[n, 5] //cant filas, cant columnas
	
	vaciarDatos(datos, n)
	inicio(datos, n, fila)

FinAlgoritmo

//Llena todo el arreglo con valores "null"
SubProceso vaciarDatos(datos Por Referencia, n)
	Definir i, j Como Entero
	Para i = 0 Hasta n - 1 Hacer
		Para j = 0 Hasta 5 - 1 Hacer
			datos[i, j] = "null"
		FinPara		
	FinPara
FinSubProceso


//NIVEL 0 - MENÚ INICIO
SubProceso inicio(datos Por Referencia, n, fila Por Referencia)
	Definir dato, respuesta, condition Como Cadena
	Definir condicion Como Entero
	
	condition = "true"
	Hacer
		Hacer
			condicion = 0
			Escribir "   + + + + + + + + + + + + + + "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "                               "
			Escribir "           BIENVENIDO A        "
			Escribir "       BANCO LA HONESTIDAD     "
			Escribir "                               "
			Escribir "       Elija una opción:       "
			Escribir "        1) Personas            "
			Escribir "        2) Empleado            "
			Escribir "                               "
			Escribir Sin Saltar "             "
			Leer respuesta
			Si respuesta <> "1" Y respuesta <> "2" Entonces
				condicion = 1
				Escribir "                               "
				Escribir "    *** Opción no válida ***   "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundos
				Borrar Pantalla
			FinSi
		Mientras Que condicion = 1
		Escribir "                               "
		Escribir "           cargando...         "
		Escribir "                               "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "   + + + + + + + + + + + + + + "
		Esperar 1 segundos
		Borrar Pantalla
		Segun respuesta Hacer
			Caso "1":
				dato = tipoDocumento()
				Si dato = "null" Entonces
					inicio(datos, n, fila)
				FinSi
				datos[fila, 0] = dato
				
				dato = numDocumento()
				Si dato = "null" Entonces
					inicio(datos, n, fila)
				FinSi
				datos[fila, 1] = dato
				
				dato = atencionPreferencial()
				Si dato = "null" Entonces
					inicio(datos, n, fila)
				FinSi
				datos[fila, 2] = dato
				datos[fila, 3] = asignarTurno(datos, fila)
				datos[fila, 4] = "asignado"
				imprimirTurno(datos, fila)
				fila = fila + 1
				inicio(datos, n, fila)
			Caso "2":
				dato = inicioSesion()
				Si dato = "true" Entonces
					Hacer
						dato = menuEmpleado()
						Segun dato Hacer
							Caso "1":
								consultarID(datos, n)
							Caso "2":
								consultarTurno(datos, n)
							Caso "3":
								mostrarTurnos(datos, n)
							Caso "4":
								error()
								//verUltimosTurnos
						FinSegun
						
						Si dato = "null" Entonces
							dato = "false"
						FinSi
					Mientras Que dato <> "false"
				SiNo
					inicio(datos, n, fila)
				FinSi
		FinSegun
	Mientras Que condition = "true" 
FinSubProceso

Funcion retorno <- tipoDocumento()
	Definir retorno, respuesta Como Cadena
	Definir condicion Como Entero
	Hacer
		condicion = 0
		Escribir "   + + + + + + + + + VOLVER (X)"
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Menú: Personas             "
		Escribir "                               "
		Escribir "                               "
		Escribir "       Tipo de documento:      "
		Escribir "         1) C.C.               "
		Escribir "         2) T.I.               "
		Escribir "                               "
		Escribir Sin Saltar "           "
		Leer respuesta
		Si Mayusculas(respuesta) = "X" Entonces
			Escribir "                               "
			Escribir "           saliendo...         "
			Escribir "                               "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "   + + + + + + + + + + + + + + "
			Esperar 1 segundos
			Borrar Pantalla
			retorno = "null"
		SiNo
			Si respuesta <> "1" Y respuesta <> "2" Entonces
				Escribir "                               "
				Escribir "    *** Opción no válida ***   "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundos
				Borrar Pantalla
				condicion = 1
			SiNo
				Escribir "                               "
				Escribir "           cargando...         "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 segundos
				Borrar Pantalla
				Segun respuesta Hacer
					Caso "1":
						retorno = "CC"
					Caso "2":
						retorno = "TI"
				FinSegun
			FinSi
		FinSi
	Mientras Que condicion = 1
FinFuncion


Funcion retorno <- numDocumento()
	Definir retorno, respuesta Como Cadena
	Definir condicion Como Entero
	Hacer
		condicion = 0
		Escribir "   + + + + + + + + + VOLVER (X)"
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Menú: Personas             "
		Escribir "                               "
		Escribir "                               "
		Escribir "       Ingrese su número       "
		Escribir "         de documento:         "
		Escribir "                               "
		Escribir "                               "
		Escribir Sin Saltar "           "
		Leer respuesta
		Si Mayusculas(respuesta) = "X" Entonces
			Escribir "                               "
			Escribir "           saliendo...         "
			Escribir "                               "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "   + + + + + + + + + + + + + + "
			Esperar 1 segundos
			Borrar Pantalla
			retorno = "null"
		SiNo
			Si respuesta = "" Entonces
				Escribir "                               "
				Escribir "     *** Dato incorrecto ***   "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundos
				Borrar Pantalla
				condicion = 1
			SiNo
				Escribir "                               "
				Escribir "           cargando...         "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 segundos
				Borrar Pantalla
				retorno = respuesta
			FinSi
		FinSi
	Mientras Que condicion = 1
FinFuncion

Funcion retorno <- atencionPreferencial()
	Definir retorno, respuesta Como Cadena
	Definir condicion Como Entero
	Hacer
		condicion = 0
		Escribir "   + + + + + + + + + VOLVER (X)"
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Menú: Personas             "
		Escribir "                               "
		Escribir "                               "
		Escribir "       ¿Necesita atención      "
		Escribir "       preferencial? (S/N)     "
		Escribir "                               "
		Escribir "                               "
		Escribir Sin Saltar "           "
		Leer respuesta
		respuesta = Mayusculas(Subcadena(respuesta, 0, 0))
		Si respuesta = "S" O respuesta = "N" Entonces
			Escribir "                               "
			Escribir "           cargando...         "
			Escribir "                               "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "   + + + + + + + + + + + + + + "
			Esperar 1 segundos
			Borrar Pantalla
			retorno = respuesta
		SiNo
			Si respuesta = "X" Entonces
				Escribir "                               "
				Escribir "           saliendo...         "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundos
				Borrar Pantalla
				retorno = "null"
			SiNo
				Escribir "                               "
				Escribir "    *** Opción no válida ***   "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundos
				Borrar Pantalla
				condicion = 1
			FinSi
		FinSi
	Mientras Que condicion = 1
FinFuncion


Funcion retorno <- asignarTurno(datos, fila)
	Definir retorno, abecedario, letraAnterior, tipoAtencion Como Cadena
	Definir numeroAnterior, i, condicion Como Entero
	Dimension abecedario[26]
	
	abecedario[0] = "A"
	abecedario[1] = "B"
	abecedario[2] = "C"
	abecedario[3] = "D"
	abecedario[4] = "E"
	abecedario[5] = "F"
	abecedario[6] = "G"
	abecedario[7] = "H"
	abecedario[8] = "I"
	abecedario[9] = "J"
	abecedario[10] = "K"
	abecedario[11] = "L"
	abecedario[12] = "M"
	abecedario[13] = "N"
	abecedario[14] = "O"
	abecedario[15] = "P"
	abecedario[16] = "Q"
	abecedario[17] = "R"
	abecedario[18] = "S"
	abecedario[19] = "T"
	abecedario[20] = "U"
	abecedario[21] = "V"
	abecedario[22] = "W"
	abecedario[23] = "X"
	abecedario[24] = "Y"
	abecedario[25] = "Z"
	
	tipoAtencion = datos[fila, 2]
	
	Si fila = 0 Entonces // para el primer turno a asignar
		Si tipoAtencion = "N" Entonces
			retorno = "A00"
		SiNo
			retorno = "X00"
		FinSi
	SiNo
		i = fila - 1 // empieza a recorrer de atrás hacia adelante
		Hacer
			condicion = 0
			Si i = 0 Entonces
				Si datos[i, 2] = "null" Entonces // si no encuentra otro del mismo tipo, asigna el primero
					condicion = 2
				SiNo
					Si datos[i, 2] = tipoAtencion Entonces
						letraAnterior = Subcadena(datos[i, 3], 0, 0)
						numeroAnterior = ConvertirANumero(Subcadena(datos[i, 3], 1, 2))
					SiNo
						condicion = 2
					FinSi
				FinSi
			SiNo
				// encuentra el turno anterior del mismo tipo de atención
				Si datos[i, 2] = tipoAtencion Entonces
					letraAnterior = Subcadena(datos[i, 3], 0, 0)
					numeroAnterior = ConvertirANumero(Subcadena(datos[i, 3], 1, 2))
				SiNo
					condicion = 1
				FinSi
			FinSi
			i = i - 1
		Mientras Que condicion = 1
		
		Si condicion = 0 Entonces // encontró una letra y número anterior
			Si numeroAnterior < 9 Entonces // si el número es menor a 9 conservar la letra y aumenta uno
				retorno = letraAnterior + "0" + ConvertirATexto(numeroAnterior + 1)
			SiNo
				Si letraAnterior = "W" O letraAnterior = "Z" Entonces // cuando el siguiente turno vuelve a empezar la secuencia
					Si letraAnterior = "W" Entonces
						retorno = "A00"
					SiNo
						retorno = "X00"
					FinSi
				SiNo
					i = 0
					Hacer
						condicion = 0
						Si letraAnterior = abecedario[i] Entonces // cuando el turno debe cambiar de letra a la siguiente
							retorno = abecedario[i + 1] + "00"
						FinSi
						i = i + 1
					Mientras Que condicion = 1
				FinSi
			FinSi
		SiNo
			Si tipoAtencion = "N" Entonces
				retorno = "A00"
			SiNo
				retorno = "X00"
			FinSi
		FinSi
	FinSi
FinFuncion

SubProceso imprimirTurno(datos, fila)
	Escribir "   + + + + + + + + + + + + + + "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "    Banco La honestidad        "
	Escribir "    Menú: Personas             "
	Escribir "                               "
	Escribir "                               "
	Escribir "                               "
	Escribir "        TURNO No. ", datos[fila, 3]
	Escribir "        ", datos[fila, 0], ": ", datos[fila, 1]
	Escribir "                               "
	Escribir "                               "
	Escribir "    ¡Gracias por preferirnos!  "
	Escribir "                               "
	Escribir "                               "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "   + + + + + + + + + + + + + + "
	Esperar 1 segundos
	Esperar Tecla
	Borrar Pantalla
FinSubProceso

//NIVEL 0 --- INICIO DE SESIÓN / EMPLEADO
Funcion retorno <- inicioSesion()
	Definir retorno, usuario, usuarioIngreso, clave, claveIngreso Como Cadena
	Definir condicion Como Entero
	usuario = "admin"
	clave = "admin"
	Hacer
		condicion = 0
		Escribir "   + + + + + + + + + VOLVER (X)"
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Menú: Empleados            "
		Escribir "                               "
		Escribir "           Usuario:            "
		Escribir Sin Saltar "       "
		Leer usuarioIngreso
		Si Mayusculas(usuarioIngreso) = "X" Entonces
			Escribir "                               "
			Escribir "                               "
			Escribir "                               "
			Escribir "                               "
			Escribir "                               "
			Escribir "           saliendo...         "
			Escribir "                               "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "   + + + + + + + + + + + + + + "
			Esperar 1 segundos
			Borrar Pantalla
			retorno = "null"
		SiNo
			Escribir "                               "
			Escribir "          Contraseña:          "
			Escribir Sin Saltar "       "
			Leer claveIngreso
			Si Mayusculas(claveIngreso) = "X" Entonces
				Escribir "                               "
				Escribir "                               "
				Escribir "           saliendo...         "
				Escribir "                               "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 segundos
				Borrar Pantalla
				retorno = "null"
			SiNo
				Escribir "                               "
				Si usuarioIngreso = usuario Y claveIngreso = clave Entonces
					Escribir "                               "
					Escribir "           cargando...         "
					Escribir "                               "
					Escribir "   . . . . . . . . . . . . . . "
					Escribir "   + + + + + + + + + + + + + + "
					Esperar 1 segundos
					Borrar Pantalla
					retorno = "true"
				SiNo
					Escribir "                               "
					Escribir "      Usuario y/o contraseña   "
					Escribir "           incorrectos.        "
					Escribir "   . . . . . . . . . . . . . . "
					Escribir "   + + + + + + + + + + + + + + "
					Esperar 1 segundos
					Borrar Pantalla
					condicion = 1
				FinSi
			FinSi
		FinSi
	Mientras Que condicion = 1
FinFuncion

Funcion retorno <- menuEmpleado()
	Definir retorno, respuesta Como Cadena
	Definir condicion Como Entero
	Hacer
		condicion = 0
		Escribir "   + + + + + + + + + VOLVER (X)"
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Menú: Empleados            "
		Escribir "                               "
		Escribir "      Selecciona una opción:   "
		Escribir "                               "
		Escribir "       1) Consulta por ID      "
		Escribir "       2) Consulta por turno   "
		Escribir "       3) Ver los turnos       "
		Escribir "       4) Últimos turnos       "
		Escribir "                               "
		Escribir Sin Saltar "          "
		Leer respuesta
		Si Mayusculas(respuesta) = "X" Entonces	
			Escribir "        Cerrando sesión...     "
			Escribir "   . . . . . . . . . . . . . . "
			Escribir "   + + + + + + + + + + + + + + "
			Esperar 1 Segundo
			Borrar Pantalla
			retorno = "null"
		SiNo
			Si respuesta = "1" O respuesta = "2" O respuesta = "3" O respuesta = "4" Entonces
				Escribir "           cargando...         "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 Segundo
				Borrar Pantalla
				retorno = respuesta
			SiNo
				Escribir "    *** Opción no válida ***   "
				Escribir "   . . . . . . . . . . . . . . "
				Escribir "   + + + + + + + + + + + + + + "
				Esperar 1 segundos
				Borrar Pantalla
				condicion = 1
			FinSi
		FinSi
	Mientras Que condicion = 1
FinFuncion

//busca los datos de un cliente según su número de documento
SubProceso consultarID(datos, n)
	Definir id, condicion, turnoEncontrado Como Cadena
	Definir i Como Entero
	Dimension turnoEncontrado[5]
	Para i = 0 Hasta 4 Hacer
		turnoEncontrado[i] = "null"
	FinPara
	Escribir "   + + + + + + + + + + + + + + "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "    Banco La honestidad        "
	Escribir "    Menú: Empleados            "
	Escribir "                               "
	Escribir "      Ingresa el documento     "
	Escribir "      que deseas consultar:    "
	Escribir "                               "
	Escribir Sin Saltar "      "
	Leer id
	turnoEncontrado[1] = id
	i = 0
	Hacer
		condicion = "false"
		Si datos[i, 1] = id Entonces
			condicion = "true"
			turnoEncontrado[0] = datos[i, 0]
			turnoEncontrado[2] = datos[i, 2]
			turnoEncontrado[3] = datos[i, 3]
			turnoEncontrado[4] = datos[i, 4]
		SiNo
			Si i = n-1 Y datos[i, 1] <> id Entonces
				condicion = "true"
			FinSi
		FinSi
		i = i + 1
	Mientras Que condicion = "false"
	Borrar Pantalla
	verTurnoID(turnoEncontrado, condicion)
FinSubProceso

//muestra los datos encontrados según la búsqueda del número del documento
SubProceso verTurnoID(turnoEncontrado, condicion]
	Si condicion = "true" Y turnoEncontrado[3] <> "null" Entonces
		Escribir "   + + + + + + + + + + + + + + "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Filtro: Documento          "
		Escribir "                               "
		Escribir "    Resultado de la búsqueda:  "
		Escribir "      Tipo: ", turnoEncontrado[0]
		Escribir "    * Número: ", turnoEncontrado[1]
		Escribir "      ¿Prioridad?: ", turnoEncontrado[2]
		Escribir "      Turno No: ", turnoEncontrado[3]
		Escribir "      Estado: ", turnoEncontrado[4]
		Escribir "                               "
		Escribir "     Presione Enter para       "
		Escribir "     volver al menú anterior.  "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "   + + + + + + + + + + + + + + "
		Esperar 1 Segundo
		Esperar Tecla
		Borrar Pantalla
	SiNo
		Escribir "   + + + + + + + + + + + + + + "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Filtro: Documento          "
		Escribir "                               "
		Escribir "    Resultado de la búsqueda:  "
		Escribir "                               "
		Escribir "     No se encontraron         "
		Escribir "     coincidencias para el     "
		Escribir "     documento: ", turnoEncontrado[1]
		Escribir "                               "
		Escribir "                               "
		Escribir "     Presione Enter para       "
		Escribir "     volver al menú anterior.  "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "   + + + + + + + + + + + + + + "
		Esperar 1 Segundo
		Esperar Tecla
		Borrar Pantalla
	FinSi
FinSubProceso


//busca los datos de un cliente según su consecutivo de turno
SubProceso consultarTurno(datos, n)
	Definir turno, condicion, turnoEncontrado Como Cadena
	Definir i Como Entero
	Dimension turnoEncontrado[5]
	Para i = 0 Hasta 4 Hacer
		turnoEncontrado[i] = "null"
	FinPara
	Escribir "   + + + + + + + + + + + + + + "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "    Banco La honestidad        "
	Escribir "    Menú: Empleados            "
	Escribir "                               "
	Escribir "      Ingresa el turno que     "
	Escribir "      deseas consultar:    "
	Escribir "                               "
	Escribir Sin Saltar "      "
	Leer turno
	turno = Mayusculas(turno)
	turnoEncontrado[3] = Mayusculas(turno)
	
	condicion = "false"
	Para i = 0 Hasta n-1 Hacer
		Si datos[i, 3] = turno Entonces
			condicion = "true"
			turnoEncontrado[0] = datos[i, 0]
			turnoEncontrado[1] = datos[i, 1]
			turnoEncontrado[2] = datos[i, 2]
			turnoEncontrado[3] = datos[i, 3]
			turnoEncontrado[4] = datos[i, 4]
		FinSi
	FinPara
	Borrar Pantalla
	verTurnoConsecutivo(turnoEncontrado, condicion)
FinSubProceso

//muestra los datos encontrados según la búsqueda del número del turno
SubProceso verTurnoConsecutivo(turnoEncontrado, condicion]
	Si condicion = "true" Y turnoEncontrado[2] <> "null" Entonces
		Escribir "   + + + + + + + + + + + + + + "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Filtro: Documento          "
		Escribir "                               "
		Escribir "    Resultado de la búsqueda:  "
		Escribir "      Tipo: ", turnoEncontrado[0]
		Escribir "      Número: ", turnoEncontrado[1]
		Escribir "      ¿Prioridad?: ", turnoEncontrado[2]
		Escribir "    * Turno No: ", turnoEncontrado[3]
		Escribir "      Estado: ", turnoEncontrado[4]
		Escribir "                               "
		Escribir "     Presione Enter para       "
		Escribir "     volver al menú anterior.  "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "   + + + + + + + + + + + + + + "
		Esperar 1 Segundo
		Esperar Tecla
		Borrar Pantalla
	SiNo
		Escribir "   + + + + + + + + + + + + + + "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "    Banco La honestidad        "
		Escribir "    Filtro: Turno              "
		Escribir "                               "
		Escribir "    Resultado de la búsqueda:  "
		Escribir "                               "
		Escribir "     No se encontraron         "
		Escribir "     coincidencias para el     "
		Escribir "     turno: ", turnoEncontrado[3]
		Escribir "                               "
		Escribir "                               "
		Escribir "     Presione Enter para       "
		Escribir "     volver al menú anterior.  "
		Escribir "   . . . . . . . . . . . . . . "
		Escribir "   + + + + + + + + + + + + + + "
		Esperar 1 Segundo
		Esperar Tecla
		Borrar Pantalla
	FinSi
FinSubProceso

SubProceso mostrarTurnos(datos, n)
	Definir i, j Como Entero
	Escribir "   + + + + + + + + + + + + + + "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "    Banco La honestidad        "
	Escribir "    Filtro: Mostrar todos      "
	Escribir "                               "
	Para i = 0 Hasta n-1 Hacer
		Si datos[i, 0] <> "null" Entonces
			Escribir Sin Saltar "   ", (i+1), ") ", datos[i, 0]
			Para j = 1 Hasta 4 Hacer
				Escribir Sin Saltar "|", datos[i, j]
			FinPara
			Escribir ""
		FinSi
	FinPara
	Escribir "                               "
	Escribir "     Presione Enter para       "
	Escribir "     volver al menú anterior.  "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "   + + + + + + + + + + + + + + "
	Esperar 1 Segundo
	Esperar Tecla
	Borrar Pantalla
FinSubProceso

SubProceso error()
	Escribir "   + + + + + + + + + + + + + + "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "    Banco La honestidad        "
	Escribir "    Menú: Empleados            "
	Escribir "                               "
	Escribir "                               "
	Escribir "         ¡Perdón por los       "
	Escribir "         inconvenientes!       "
	Escribir "                               "
	Escribir "                               "
	Escribir "      Esta opción aún no está  "
	Escribir "            disponible.        "
	Escribir "                               "
	Escribir "                               "
	Escribir "   . . . . . . . . . . . . . . "
	Escribir "   + + + + + + + + + + + + + + "
	Esperar 1 Segundo
	Esperar Tecla
	Borrar Pantalla
FinSubProceso
