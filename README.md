# generador-turnos
Simple programa realizado en PSeInt, para simular un generador de turnos del tipo que se encuentra en bancos o entidades que ofrezcan variedad de tipos de atención al público.
El programa contempla dos tipos de interfaces, una para las personas que habrán de solicitar un turno y otra para los empleados del establecimiento.

**Personas**
1. Generación de turnos:
  Esta funcinalidad permite el ingreso de los datos del cliente para agregar en la base de datos; los datos requeridos son:
  Descripción                    Tipo Input        vlr posible
  a). Tipo de docmento           numérico          1, 2
  b). Número de documento        numérico
  c). ¿Atención preferencial?    texto             S, N

  Una vez entregados los datos del cliente, se genera un número de turno que se conformará por una letra seguida de dos números, ej: A00.
  El turno se asignará según las siguientes condiciones:
  a) En orden alfabéticamente descendente y numéricamente ascendente (A a Z, 00 a 99)
  b). Para los turnos que no necesiten atención preferencial se reservarán las letras de la 'A' a la 'W'
  c). Para los turnos que sí necesiten atención preferencial se reservarán las letras de la 'X' a la 'Z'
  d). Se empezará siempre el primer turno para cada letra con el número 00, y el último 99
  e). Una vez se llegue al último número de cada letra, empezará la letra inmediatamente siguiente
  f). Cuando se llegue al último turno posible (A99 ó Z99), se iniciará de nuevo por el primero de la categoría según corresponda (A00 ó X00)

**Empleados**
Para el acceso a la interfaz de empleados se ingresará con usuario y contraseña. Las credenciales son la palabra 'admin' para ambos campos. Una vez ingresado se podrá seleccionar entre cuatro operaciones de consulta a realizar.
Para cada turno se guardan 5 atributos:
- Tipo documento
- Número documento
- Atención preferencial (S/N)
- Turno
- Estado (Asignado/Atendido)

1. Consulta por ID:
   Se requiere el número de documento de un cliente a consultar, muestra todos los atributos del cliente
   
3. Consulta por Turno:
   Según el turno ingresado, muestra los atributos del cliente
   
5. Ver los turnos:
   Muestra el historial de todos los turnos almacenados
   
7. últimos turnos:
   Muestra error/opción no disponible

--
**Limitaciones**
Debido a que PSeInt es un pseudocódigo y no un lenguaje de programación real, no se establece una fiel relación con alguna base de datos, por lo tanto, todos los datos almacenados durante la ejecución del código, son guardados de forma temporal en la memoria. Lo que significa que al finalizar la ejecución, con ello también se eliminan todos los datos y secuencia de turnos guardados.

Desarrollado por: Camilo Sánchez
