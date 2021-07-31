Proyecto realizado en Laravel 8, 
instalación con sails, 

ruta para iniciar procesos
api/generatePrimes/5

se crea una url que llama la funcion de un controlador, desde esta se ejecuta el disparador del evento, este evento tiene asociado dos listeners, uno para calcular los primos, y el segundo envia un correo con una plantilla basica en blade, en el momento esta puesto para que se envie a el correo arojast95@gmail.com

Se intenta usar las colas de redis, pero por algun tema de configuración no fue posible, para ese caso se creo un job desde el que se ejecuta la cantidad que se paso como un parametro, esto se corre en un ciclo enviado disparadores de evento
