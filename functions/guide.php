<?php
// Declarar una  Clase
/*
class NombreDeMiClase{
    #...
    public $varible_publica; // Propiedad que puede ser accedida desde cualquier parte de la aplicación "sin restricciones"
    private $variable_privada; // Propiedad que solo puede ser accedida por la clase que la definió.
    protected $variable_protegida; // Propiedad que solo es accedida por la propia clase que la definió, así como por las clases
                                      que la heredan, pero no desde otras partes de la aplicación.
    
    // Propiedad Estática
    public static $variable_estatica; // Representa una caracterisitica de variabilidad. Una propiedad declarada como estática
                                         puede ser accedida sin necesidad de instanciar un objeto, y su valor es estático, es
                                         decir, no puede variar si ser modificado.               
                                         
    // Acceso a variables desde el ámbito de la clase
        // Propiedade no estática
        $this->variable_publica;
        // Propiedad estática
        print self::$variable; // para variables estáticas de la clase.
        print parent::$variable_padre; // para variables estáticas de la clase padre.
    }
// Acceso a Variables desde el Exterior de la clase
     # Creo el objeto instanciando la clase
     $objeto1 = new NombreDeMiClase();
     
     # Accediendo a una propiedad No Estática
     print $objeto1->variable;
     
     # Accediendo a una propiedad Estática
     (Para acceder a una propiedad pública y estática el objeto no necesita ser instanciado)
      # Accediendo a la variable Estática
      print nombreDeMiClase::$variable;
// Constantes de Clase
 Propiedad que mantiene su valor de forma permanente y sin cambios. A diferencia de la propiedades estáticas, las contantes
 solo pueden tener una visibilidad pública
 const MI_CONSTANTE = "Valor de la constante"; // Ubicar dentro de la clase
*/

// Declarar un Clase Abstracta
/*
abstract class NombreDeMiClaseAbstracta {
    # ...
}
*/

// Herencia de Clases
/*
class NombreClasePadre {
    # ...
}

class NombreClaseHija extends NombreClasePadre {
    Esta clase hereda todos los métodos y propiedades
    de la clase Padre "NombreClasePadre"
}
*/

// Declaración de Clases Finales
/*
final class NombreClaseFinal {
    No pueden ser heredadas por otra
    # ...
}
*/

// METODOS EN PHP
    # Declarando la Clase
    /*
    class NombreDeClase {
    // propiedades
     #...
    // metodos
        function NombreMetodo($parametro1, $parametro2, $parametroN,...){
            # ...
        }
    
    // Métodos Públicos, Privados, Protegidos, Estáticos
     # Los métodos, al igual que las propiedades, pueden ser públicos, privados, protegidos o
       estáticos. La forma de declarar su visibilidad tanto como las características de ésta, es
       exactamente la misma que para las propiedades: 
        
        static function a() { }
        protected function b() { }
        private function c() { }
    // Métodos Abstractos
        # A diferencia de las propiedades, los métodos, pueden ser abstractos como sucede con
          las clases.
        # Por ejemplo, si el método abstracto está definido como protected, la implementación 
          de la función puede ser redefinida como protected o public, pero nunca como private.
    }
    */
// METODOS MÁGICOS
 # Otorgan una funcionalidad pre-definida por PHP,haciendo un lenguaje de programacion mas robusto.
    // El Método mágico __construct()
        /*
        # se invoca de manera automática, al instanciar un objeto. Su función es ejecutar cualquier inicialización que el  
          objeto necesite antes de ser utilizado
          
          
          function __construct(){}
        */
    // El Método mágico __destruct()
        /*
        encargado de liberar de la memoria, al objeto cuando ya
        no es referenciado. Se puede aprovechar este método, para 
        realizar otras tareas que se estimen necesarias al momento de destruir un objeto.
        
            # destructor de la clase
            function __destruct() {
            $this->set_estado_producto('liberado');
            print 'El objeto ha sido destruido';
            }
        */
    // Otros Métodos Mágicos
        /*
        PHP nos ofrece otros métodos mágicos tales como 
        __call, __callStatic,__get, __set, __isset, __unset,
        __sleep, __wakeup, __toString,__invoke, __set_state y __clone.
        */
        
        
?>