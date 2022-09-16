# MANUAL TECNICO APLICATIVO LESAN ACADEMY

## INTRODUCCIÓN

La academia Lesan Academy venía trabajando con un aplicativo rudimentario hecho
aproximadamente hace 9 años el cual no había sido actualizado ni modificado de ninguna manera, y la mayor parte de su información se trabajada con hojas de cálculo de Microsoft Excel, por lo cual no cumplia las necesidades que presenta hoy en día la academia. Con el fin de mejorar la agilidad en sus procesos y brindar un mejor servicio, la academia Lesan ha recurrido a adquirir un nuevo aplicativo adaptado a las necesidades actuales. El cual les garantiza altísimos estándares de calidad en sus procesos, entregando siempre a sus clientes los mejores productos, que se ajustan a sus expectativas.
Es así como se ha creado el aplicativo Lesan Academy, que proporcionará a la empresa
cliente herramientas para desarrollar de manera efectiva sus procesos de inscripción de
estudiantes y docentes, además de proporcionar toda la información necesaria como cursos, materias y datos sobre la academia.
El presente documento pretende ser un medio de apoyo para aquellos desarrolladores que lleguen a estar implicados en cualquier fase del desarrollo del aplicativo. Lesan Academy incluyendo la fase de mantenimiento y actualización

## 2. OBJETIVOS

Para el presente manual se ha definido un objetivo general y dos objetivos específicos que se detallan a continuación.

#### 2.1.Objetivo General
Proveer información acerca del aplicativo Lesan Academy como herramienta de apoyo a los desarrolladores o personal con conocimiento técnico que, en alguna fase del ciclo de vida del aplicativo, deban cumplir con alguna función respecto a este.

#### 2.2.Objetivos Específicos
1. Proporcionar información técnica relevante sobre entornos de desarrollo y
configuraciones especializadas del aplicativo Lesan Academy

2. Brindar información general sobre el aplicativo para que se conozca su funcionalidad, su forma de uso, clases, modelos y líneas de código importantes.

## 3. ALCANCE

Este documento está dirigido a personal de desarrollo con conocimientos técnicos tanto
de la empresa de desarrollo Senita Ltda, como de la empresa cliente Lesan Academy que tengan algún rol dentro de la programación, mantenimiento y actualización de la aplicación Lesan Academy. No está destinado a usuarios comunes.
También, se prohíbe la difusión de este documento por diferentes medios de comunicación como internet o uso fuera de la empresa de desarrollo Senita Ltda., y del área de sistemas de Lesan Academy. Senita Ltda., se reserva el derecho de producir nuevas versiones de este documento técnico.

## 4. USUARIOS

Actualmente el aplicativo Lesan Academy por petición y teniendo en cuenta el documento de requisitos dado por el cliente, fue realizado para uso de todo el personal académico, tanto estudiantes como docentes, coordinadores y personal administrativo.
De acuerdo al documento de requisitos, los usuarios que tendrá este aplicativo son:
Aspirantes: Estos usuarios son las personas que desean estudiar en la academia Lesan
Academy, lo podrán hacer por medio de un formulario el cual recibe todos los datos personales y una vez registrados, pueden visualizar toda la información de la academia.
Estudiantes: Estos usuarios podrán modificar algunos de sus datos personales, consultar
información general de su usuario, materias, cursos, docentes entre otras cosas.
Usuario Administrador: Este usuario podrá realizar acciones como: crear usuarios
nuevos, brindar acceso a funciones específicas, modificar información ya registrada, eliminar datos de usuarios etc.

## 5. HERRAMIENTAS UTILIZADAS EN EL DESARROLLO

#### 5.1. Composer

Se necesita un paquete o herramienta que contenga php, MySQL y una interfaz
que facilite trabajar visualmente la base de datos, en este caso se recomienda Xampp, pero usted puede usar cualquier otra. Para trabajar con la última versión de laravel se debe verificar que php está instalado en el equipo en su versión 8.x. La manera de descargar composer es por el link https://getcomposer.org/download/ y se da clic en `composer-setup.exe.`

#### 5.2.Visual Studio Code
![](https://github.com/SLeonC05/Academia2/blob/master/imagenes-git/visual%20studio.png?raw=true)
Se optó por esta herramienta por su versatilidad, facilidad de uso, y aspecto
moderno. Permite el uso de gran cantidad de extensiones, su aprendizaje es rápido, la
integración con GitHub es intuitiva y, sin lugar a dudas, es uno de los editores más
utilizados por los desarrolladores en el ámbito web por todo el mundo.
Para este proyecto se uso la version 1.69.1 de Visual Studio Code para windows y el link
de descarga es: https://code.visualstudio.com/download

#### 5.2.1. Plugins instalados:
● Bootstrap Snippets

● Laravel Blade Snippets

Permite trabajar de manera más fluida con las plantillas de Blade propias del framework
laravel. Da sugerencias y da errores de sintaxis. Se puede encontrar dentro de Laravel
Extension Pack.

● Laravel Snippets

Brinda facilidades para codificar los proyectos con líneas propias de Laravel. Se puede
encontrar dentro de Laravel Extension Pack.
● Laravel-goto-controller

Permite ir a un controlador específico cuando se da Alt clic (o Ctrl clic) sobre una ruta.

● Laravel goto view

Con el cual se puede ir rápidamente a una vista específica.

● PHP Intelephense

Una poderosa herramienta para trabajar con lenguaje PHP, resalta errores típicos, emite
sugerencias de código, entre otras funcionalidades

#### 5.3. Framework Laravel

Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es
simple, muy potente y tiene una interfaz elegante y divertida de usar. Se usó la versión 4.2. El link de descarga es: https://laravel.com/docs/4.2

#### 5.4. GitHub

En este repositorio online se realizó el trabajo colaborativo con los desarrolladores para
realizar las respectivas modificaciones al aplicativo

## 6. METODOLOGÍA DE PROYECTO

#### 6.1. CASCADA
Para el desarrollo de este proyecto de software se utilizó la metodología en CASCADA,
la cual consiste en dividir en fases cada etapa del desarrollo de software y completar cada una de ellas en un orden específico, es decir, no puedes iniciar la “fase 2” hasta que hayas concluido la“fase 1”.De esta forma primero se realizó un análisis y comprobación del funcionamiento de cada una de las fases al concluirlas, antes de pasar a la siguiente, detectando así los posibles errores y corrigiéndolos antes de avanzar.

#### Modelo de metodología en cascada

#### Trabajo desde ramas en GitHub

## 7. REQUISITOS TÉCNICOS PARA DESARROLLAR EL SISTEMA

Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes
características:

RAM: 64,0 GB

Disco Duro: 1 TB

Procesador: Intel(R) Xeon(R) W-10855M CPU @ 2.80GHz 2.81 GHz

Pantalla: Estándar

Este aplicativo solo ha sido probado y visualizado en el terminal local localhost:8000, no se ha subido a ningún servidor hasta el momento.

## 8. REQUISITOS TÉCNICOS PARA LA EJECUCIÓN DEL SISTEMA

La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características:

Procesador: 1 GHz o más rápido o sistema en un chip (SoC)

RAM: 1 GB para 32 bits o 2 GB para 64 bits

Disco duro: 16 GB para un SO de 32 bits o 32 GB para un SO de 64 bits

Se ha probado que el sistema funciona correctamente en los siguientes navegadores:

● Google Chrome en su última versión

● Mozilla Firefox

● Opera

● Microsoft Edge

Ancho de banda: 5 Mbps

Es de resaltar que entre más crezca el aplicativo podrían variar estos requisitos para su correcto funcionamiento.

## 9. REGLAS DE NEGOCIO

#### 9.1. Marco Legal
La educación superior, por su parte, es reglamentada por la Ley 30 de 1992 que define el carácter y autonomía de las Instituciones de Educación Superior -IES-, el objeto de los programas académicos y los procedimientos de fomento, inspección y vigilancia de la enseñanza.

● Decreto 1403 de 1993- Reglamentación de Ley 30 de 1992. Establece que mientras se dictaminan los requisitos para la creación y funcionamiento de los programas académicos de pregrado que puedan ofrecer las instituciones de educación superior, estas deberán presentar al Ministerio de Educación Nacional por conducto del Instituto Colombiano para el Fomento de la Educación Superior (ICFES), con el fin de garantizar el cumplimiento de los fines de la educación, la información referida al correspondiente  programa. Así también regula lo referido a la autorización de la oferta de programas de Maestría, Doctorado y Postdoctorado, de conformidad con la referida Ley. (Dado el 21 de Julio de 1993 y Publicado en el Diario Oficial N° 41.476 del 5 de agosto de 1994.

● Ley 115 de 1994- Ley General de Educación. Ordena la organización del Sistema Educativo General Colombiano. Esto es, establece normas generales para regular el Servicio Público de la Educación que cumple una función social acorde con las necesidades e intereses de las personas, de la familia y de la sociedad. Respecto a la Educación Superior, señala que ésta es regulada por ley especial, excepto lo dispuesto en la presente Ley. "Excepto en lo dispuesto en la Ley 115 de 1994, sobre Educación Tecnológica que había sido omitida en la Ley 30 de 1992. Ver Artículo 213 de la Ley 115.

● Decreto 644 de 2001- Reglamentación sobre puntajes altos en Exámenes de Estado.

-Acuerdo No. 01 de Junio 23 de 2005 . Consejo Nacional de Educación Superior, CESU, por elcual se expide el reglamento interno de funcionamiento.

-Acuerdo No. 02 de Junio 23 de 2005. Consejo Nacional de Educación Superior, CESU, por el cual se subroga el Acuerdo 001 de 2000 del Consejo Nacional de Educación Superior, CESU, y con el cual se expide el reglamento, se determina la integración y las funciones del Consejo Nacional de Acreditación.

-Resolución No 000167 del 31 de Mayo de 2006 - Icfes, por la cual se formaliza una delegación.

#### 9.2. Política de tratamiento de datos personales
En cumplimiento de la Ley 1581 de 2012, por la cual se dictan disposiciones para la protección de datos
personales, Academia Lesan Academy, en su calidad de responsable del tratamiento de datos personales,
informa los lineamientos generales en esta materia:

● Datos Generales

El responsable del tratamiento de sus datos personales es Academia Colombiana Lesan Academy, identificado con 901210561-1, con sede principal en la Calle 17 #5 – 02 en la ciudad de Pereira, Portal www.lesanacademy.com.

● Seguridad de la información Academia Lesan Academy está comprometido en efectuar un correcto uso y tratamiento de los datos personales contenidos en sus bases de datos, evitando el acceso no autorizado a terceros que puedan conocer o vulnerar, modificar, divulgar y/o destruir la información que allí reposa.

● Vigencia de la Política de tratamiento de datos personales. La política del tratamiento de datos personales rige a partir del momento en que sea aprobada por la
Junta Directiva de la Academia..

## 10. DETALLES DE DISTRIBUCIÓN DE CARPETAS Y ARCHIVOS

#### 10.1. Distribución de carpetas en el backend

#### 10.1.1. Controladores de recursos

Dentro de Http se tiene la carpeta Controllers, donde a su vez se tinene los siguientes
controladores que son de recursos:

CursoController.php: Se encarga de manejar toda la lógica para la tabla Curso del sistema, donde se programan las rutas y conexiones de las acciones de create, store, show, edit, update y destroy lo cual proporciona la lógica de toda la vista. DocenteController.php: Se encarga de manejar toda la lógica para la tabla Docente del sistema, donde se programan las rutas y conexiones de las acciones de create, store, show, edit, update y destroy lo cual proporciona la lógica de toda la vista. EstudianteController.php: Se encarga de manejar toda la lógica para la tabla Estudiante delsistema, donde se programan las rutas y conexiones de las acciones de create, store, show, edit, update y destroy lo cual proporciona la lógica de toda la vista..

#### 10.1.2. Migraciones:
En el proyecto se pueden apreciar las siguientes migraciones, dentro de
la ruta database/Migrations:

##### create_cursos_table: 
Esta migración se refiere a la tabla cursos, donde se describen los
campos tales como: nombre, descripción y duración.

##### create_docentes_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: nombres, apellidos, título, edad, fecha, imagen y documento.

##### create_materias_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: nombreMateria, intensidad.

##### create_paises_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: nombre pais.

##### create_departamentos_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: nombreDepa y idPais.

##### create_municipios_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: nombreMunici y idDep.

##### create_cursos_materias_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: idCurso y idMateria.

##### create_estudiantes_table: 
Esta migración se refiere a la tabla cursos, donde se describen los campos tales como: tipoDoc numDoc, docIdent, fechaExp, idMuniExp, nombres, primerApellido, segundoApellido, genero, idMuni, idCurso y estrato. Dentro de esta tabla no se encuentran como llaves foráneas los países y departamentos ya que por requerimientos del cliente se optó por relacionarlos directamente al municipio que se escoja en el formulario.

#### 10.1.3. Rutas principales para el proyecto Laravel

Dentro del archivo web.php que está en routers, se encuentran las rutas principales del proyecto
como:
‘/’: esta ruta provee acceso a la página principal del Proyecto Academia.

‘/cursos/nosotros’: esta ruta provee acceso a un espacio en la parte superior derecha llamada.

‘nosotros’ la cual facilita la visualización de información de la academia.

‘/cursos’: esta ruta provee acceso a el controlador de cursos, el cual contiene las rutas de las
diferentes vistas.

‘/docentes’: esta ruta provee acceso a el controlador de docentes, el cual contiene las rutas de las
diferentes vistas.

‘/estudiantes’: esta ruta provee acceso a el controlador de estudiantes, el cual contiene las rutas
de las diferentes vistas.

## 11. CONFIGURACIÓN DE LA BASE DE DATOS

Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida
en Xampp. Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache
y MySQL, dando clic en los botones start del control panel. Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin.

Los datos de acceso a la base de datos son:

Host: 127.0.0.1

Usuario: root

Clave: Sin clave

Nombre de la BD: academia2

Para la correcto configuración del proyecto Laravel y su conexión con la base de datos se agrega
la información respectiva en el archivo .env

A través del siguiente panel se pueden hacer configuraciones en la base de datos:


## Detalles de los modelos y migraciones Laravel:

1)

Esta migración es referente al modelo Curso, la cual contiene toda la información para la tabla
curso, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Curso

2)

Esta migración es referente al modelo Estudiante, la cual contiene toda la información para la
tabla estudiante, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Estudiante

3)

Esta migración es referente al modelo Docente, la cual contiene toda la información para la tabla
docentes, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Docente

4)

Esta migración es referente al modelo Materia, la cual contiene toda la información para la tabla
materias, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Materia

5)

Esta migración es referente al modelo País, la cual contiene toda la información para la tabla
países, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Materia

6)

Esta migración es referente al modelo País, la cual contiene toda la información para la tabla
países, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Departamento

7)

Esta migración es referente al modelo Municipio, la cual contiene toda la información para la
tabla municipios, para la cual se han definido los siguientes campos y tipos de datos:

El modelo respectivo se llama Departamento

## 12. DETALLES TÉCNICOS MÓDULOS DEL SISTEMA

#### Módulo Estudiantes
Este módulo se ha creado para estudiantes de la academia, cualquier persona puede registrarse, la información aquí suministrada se guardará en la tabla Estudiantes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres y primer y segundo apellido solo acepten letras. El campo numDoc solo acepta caracteres numerico que no se encuentren ya registrados en la tabla y con un máximo de 10 caracteres. El campo para docIdent solo permite subir archivos en formato PDF, El campo fechaExp fue modificado para no ser un dato nulo, es decir, siempre debe ser diligenciado. Este módulo está conectado con el módulo cursos, ya que el en formulario se debe diligenciar a qué curso está relacionado el estudiante, por esto es necesario que existan cursos almacenados en la tabla cursos para poder ingresar un estudiante.

Al entrar a este módulo desde el navegador se vería así:

La vista (view) en Laravel que permite renderizar esta vista es estudiantes.show.blade. Además, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:

#### Create.blade.php
Vista que provee el siguiente formulario en el navegador:

#### Show.blade.php
Vista que provee toda la información suministrada en el navegador posterior a haber diligenciado el formulario, esta vista también está enlazada con la vista edit.blade.php para la edición del mismo formulario o su eliminacion.

#### Edit.blade.php
Vista que provee el formulario en el navegador que permite actualizar la información del estudiante en la base de datos

#### Index.blade.php
Vista que provee una visión general de los estudiantes registrados en la base de datos, además de enlazarse a la vista create para ingresar más estudiantes

#### Update.blade.php
Vista que provee un mensaje de alerta luego de realizada la actualización de los datos de cada estudiante, con su respectivo retorno a la vista index.blade.php

#### Delete.blade.php
Vista que provee un mensaje de alerta luego de dar clic en el botón eliminar de la vista
show.blade.php, este elimina el registro del estudiante de la base de datos, con su respectivo retorno a la vista index.blade.php

Add.blade.php
Vista que provee un mensaje de alerta al diligenciar el formulario y agregar un estudiante, con su respectivo retorno a la vista index.blade.php

## 13. MODELO RELACIONAL BD DEL SISTEMA

La base de datos para este sistema, como ya se informó se llama academia2 y el modelo es el siguiente:


## 14. DICCIONARIO DE DATOS

Anexo-Vista de impresión - phpMyAdmin 5.1.1.pdf


## 15. CLASES, LIBRERÍAS Y MÉTODOS UTILIZADOS

#### 15.1. Clases utilizadas
Para el proyecto Lesan Academy no se usaron clases especiales, salvo las que trae por default el framework.

#### 15.2. Métodos utilizados:
Para este proyecto en la mayoría de controladores se utilizaron los siguientes métodos:
● Método index: Que lanza un listado de todos los registros de la tabla que se está
trabajando.
● Método create: Que permite crear nuevos registros, en este caso por medio de
formularios.
● Método store: Método que recibe todos los datos de los campos que vengan desde
create y los almacena en la base de datos.
● Método show: Que permite visualizar la información ingresada en la base de datos.
● Método update: El cual sirve para actualizar la información suministrada en los
formularios.

## 16. CONSIDERACIONES ADICIONALES

En la tabla estudiantes no se almacena directamente los datos de país y departamento, solo municipio tanto de expedición del documento como de nacimiento, debido a que municipio ya se encuentra relacionado con departamento y departamento con el país al que pertenece.
