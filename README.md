# Calculadora de emisiones CO2.

### Prueba el resultado en este sitio: http://artfco2.herokuapp.com

### Este sitio cuenta con version móvil y desktop.

## Objetivo:

#### Desarrollo de una calculadora de huella de carbono para el transporte ferroviario y diseño de una página Web, para el análisis de ineteractivo de dicha huella y la valoración de sus mecanismos de compensación.

# Comentarios:


#### El desarrollo de este sitio web se ha realizado utilizando el framework de Laravel 8, el framework de estilos TailwindCSS, la libreria de uso de gráficos Chart.JS y los lenguajes PHP y JS.
#### A nivel de base de datos se utilizó el ORM Eloquent provisto por Laravel.

## Esta aplicación cuenta con una barra de tareas fija en la cual se encuentran los siguientes apartados:

* ### Inicio
* ### Calcular compensación
* ### Compensar
* ### Medios alternativos de transporte
* ### Estadísticas

# Inicio

#### En este apartado se encuentra el landing page y un poco de información sobre la huella de carbono además de algunos enlaces a sitios web donde se puede calcular la huella de carbono personal.

# Calcular compensación

#### En este apartado se muestra un formulario en el cual los usuarios podran ingresar su huella de carbono (En caso de tener una ya calculada), el campo esta validado como requerido, asi como cuenta con un formato específico.

#### Al momento de tratar de realizar un cálculo con datos incompletos o sin un formato adecuado la aplicacion web mostrara un cuadro con los errores registrados.

#### Una vez utilizado este formulario mostrará un listado de los árboles que sería necesario plantar para compensar la huella de carbono correspondiente.

# Compensar

#### Esta sección fue creada para dar una muestra de la importancia de la huella de carbono y algunas ideas para reducirla.

# Medios alternativos de transporte

#### Sección mediante la cual se puede realizar un cálculo de estimaciones de emisiones contaminantes de acuerdo al tipo de vehículo utilizado, la distancia recorrida y la cantidad de días que se realiza este viaje, cuenta también con una parte informativa sobre los medios de transporte eficientes y la cantidad de emisiones que estos generan.

# Estadísticas

#### Página la cual cuenta con los resultados de los cálculos de emisiones realizados en la sección anterior, estos son mostrados mediante gráficas usando ChartJS.
