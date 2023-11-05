# Generador de turnos
Simple programa realizado en PSeInt, para simular un generador de turnos del tipo que se encuentra en bancos o entidades que ofrezcan variedad de tipos de atención al público.<br>
El programa contempla dos tipos de interfaces, una para las personas que habrán de solicitar un turno y otra para los empleados del establecimiento.

## Personas
Interfaz netamente para ser usada por los clientes/usuarios que necesiten obtener un turno. Esta funcionalidad permite el ingreso de los datos del cliente para agregar en la base de datos; los datos requeridos son:
  - Tipo de documento (CC/TI)
  - Número de documento
  - ¿Atención preferencial? (S/N)

### ¿Cómo se generan?
  Una vez entregados los datos del cliente, se genera un número de turno que se conformará por una letra seguida de dos números, ej: A00.
  El turno se asignará según las siguientes condiciones:
  1. En orden alfabéticamente descendente y numéricamente ascendente (A a Z, 00 a 99)
  2. Para los turnos que no necesiten atención preferencial se reservarán las letras de la 'A' a la 'W'
  3. Para los turnos que sí necesiten atención preferencial se reservarán las letras de la 'X' a la 'Z'
  4. Se empezará siempre el primer turno para cada letra con el número 00, y el último 99
  5. Una vez se llegue al último número de cada letra, empezará la letra inmediatamente siguiente
  6. Cuando se llegue al último turno posible (A99 ó Z99), se iniciará de nuevo por el primero de la categoría según corresponda (A00 ó X00)

## Empleados
Para el acceso a la interfaz de empleados se ingresará con usuario y contraseña. Las credenciales son la palabra 'admin' para ambos campos. Una vez ingresado se podrá seleccionar entre cuatro operaciones de consulta a realizar.
Para cada turno se guardan 5 atributos: Tipo documento, Número documento, Atención preferencial (S/N), Turno, Estado (Asignado/Atendido).

- **Consulta por ID:**
   se requiere el número de documento de un cliente a consultar, muestra todos los atributos del cliente
   
- **Consulta por Turno:**
   según el turno ingresado, muestra los atributos del cliente
   
- **Ver los turnos:**
   muestra el historial de todos los turnos almacenados
   
- **Últimos turnos:**
   muestra error/opción no disponible

## Limitaciones
Debido a que PSeInt es un pseudocódigo y no un lenguaje de programación real, no se establece una fiel relación con alguna base de datos, por lo tanto, todos los datos almacenados durante la ejecución del código, son guardados de forma temporal en la memoria. Lo que significa que al finalizar la ejecución, con ello también se eliminan todos los datos y secuencia de turnos guardados.
<hr>
Desarrollado por: <a href="https://www.linkedin.com/in/camiloconc/">Camilo Sánchez</a>
