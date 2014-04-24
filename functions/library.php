<?php
/*
Domingo Ilarreta
Libreria de Clases
*/
// Esqueleto Básico de HTML 5
class Html_5{
// Atributos
    public $titulo;
    public $tipo;
    public $ruta;
// Métodos
    // Imprime el doctype, html, meta, title
    public function __construct($title){
    $this->titulo = $title;
    echo '<!doctype html>';
    echo '<html lang="es">';  
    echo '<head>';
        echo '<meta charset="UTF-8">';
        if($title==""){
            echo '<title>Sistema Controlador de Indicadores de Mortalidad por Enfermedades</title>';
        }else{
            echo '<title>'. $title .'</title>';
        }
    echo '<link type="text/css" rel="stylesheet" href="css/global.css">';
    echo '<script type="text/javascript" src="js/library.js"></script>';
    }
    // Imprime la etiqueta </head> y <body>
    public function body_I(){
    echo '</head>';
    echo '<body>';
    }
    // Imprime la etiqueta </body> y </html>
    public function body_F(){
    echo '</body>';
    echo '</html>';
    }
    // Método para llamar librerias
    public function links($type,$url){
        $this->tipo = $type;
        $this->ruta = $url;
        switch ($type){
            case 'CSS':
                echo '<link type="text/css" rel="stylesheet" href="'. $url .'">';
            break;
            
            case 'JS' :
                echo '<script type="text/javascript" src="'. $url .'"></script>';
            break;
        }
    }
    
}

// Formulario y sus Etiquetas
class Formulario{
// Atributos
public $accept, $accept_charset, $accesskey, $action, $alt, $autocomplete, $autofocus, $checked, $class, $contenteditable, $contextmenu, $dir, $dirname, $disabled, $draggable, $dropzone, $enctype, $for_, $form, $formaction, $formenctype, $formmethod, $formnovalidate, $formtarget, $height, $hidden, $id, $lang, $list, $max, $maxlength, $min, $method, $multiple, $name, $novalidate, $onabort, $onblur, $oncanplay, $oncanplaythrough, $onchange, $onclick, $oncontextmenu, $oncuechange, $ondblclick, $ondrag, $ondragend, $ondragenter, $ondragleave, $ondragover, $ondragstart, $ondrop, $ondurationchange, $onemptied, $onended, $onerror, $onfocus, $oninput, $oninvalid, $onkeydown, $onkeypress, $onkeyup, $onload, $onloadeddata, $onloadedmetadata, $onloadstart, $onmousedown, $onmousemove, $onmouseout, $onmouseover, $onmouseup, $onmousewheel, $onpause, $onplay, $onplaying, $onprogress, $onratechange, $onreadystatechange, $onreset, $onscroll, $onseeked, $onseeking, $onselect, $onshow, $onstalled, $onsubmit, $onsuspend, $ontimeupdate, $onvolumechange, $onwaiting, $pattern, $placeholder, $readonly, $required, $role, $size, $spellcheck, $src, $step, $style, $tabindex, $target, $title, $type, $value, $width;
public $titulo;
public $atributo;
public $atributo2;
public $option;
public $posicion;
// Métodos
    // <form> Inicio
    public function __construct($title){
    $this->titulo = $title;
    }
    public function form_I($method,$action,$name,$onsubmit,$atributo){
    $this->method = $method;
    $this->action = $action;
    $this->name = $name;
    $this->onsubmit = $onsubmit;
    $this->atributo = $atributo;
    echo '<form ';
        echo 'action="'. $action .'" ';
        echo 'method="'. $method .'" ';
        echo 'name="'. $name .'" ';
        echo 'onsubmit="'. $onsubmit .'"';
        echo ' ' . $atributo;
    echo '>';
        echo '<fieldset>';
            if($this->titulo==""){
            echo '<legend>Formulario</legend>';
            }else{
            echo '<legend>'. $this->titulo .'</legend>';
            }            
    }
    public function form_F(){
        echo '<div class="row">';
            echo '<small class="large-12 columns text-right">* Campo Obligatorio</small>';
        echo '</div><br>';
        echo '</fieldset>';
    echo '</form>';
    }
    // Imprime el Label
    public function label($for, $title, $atributo){
    $this->for_ = $for;
    $this->titulo = $title;
    $this->atributo = $atributo;
    echo '<label ';
    echo 'for="'. $for .'" ';
    echo ' ' . $atributo;
    echo '>'. $title .'</label>'; 
    }
    // Imprime el textarea
    public function textarea($name,$placeholder,$atributo){
    $this->name = $name;
    $this->placeholder = $placeholder;
    $this->atributo = $atributo;
    echo '<textarea ';
    echo 'name="'. $name .'" ';
    echo 'placeholder="'. $placeholder .'" ';
    //echo ' required ';
    echo ' ' . $atributo;
    echo '>';
    echo '</textarea>';    
    echo '<small class="error">Campo Obligatorio</small>';
    }
    
    // Imprime el input
    public function input($name,$type,$placeholder,$atributo){
    $this->name = $name;
    $this->type = $type;
    $this->placeholder = $placeholder;
    $this->atributo = $atributo;
    echo '<input ';
    echo 'name="'. $name .'" ';
    echo 'placeholder="'. $placeholder .'" ';
    echo 'type="'. $type .'" ';
    //echo ' required ';
    echo ' ' . $atributo;
    echo '>';    
    echo '<small class="error">Campo Obligatorio</small>';
    }
    
    // Imprime el checkbox
    public function checkbox($name,$title,$atributoRadio,$atributoLabel, $posicion){
    $this->name = $name;
    $this->title = $title;
    $this->atributo = $atributoRadio;
    $this->atributo2 = $atributoLabel;    
    $this->posicion = $posicion;        
        switch ($posicion){
        case '1':
            // <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
            echo '<input type="checkbox" ';
            echo 'name="'. $name .'" ';
            echo ' ' . $atributoRadio;
            echo '>';
            echo '<label ';
            echo 'for="'. $name .'" ';
            echo ' ' . $atributoLabel;
            echo '>';
            echo ' ' . $title;
            echo '</label>';
        break;
        case '2':
            // <label for="checkbox1">Checkbox 1<input id="checkbox1" type="checkbox"></label>
            echo '<label ';
            echo 'for="'. $name .'" ';
            echo ' ' . $atributoLabel;
            echo '>';
            echo ' ' . $title;
            echo ' ';
            echo '<input type="checkbox" ';
            echo 'name="'. $name .'" ';
            echo ' ' . $atributoRadio;
            echo '>';   
            echo '</label>';     
        break;

        }    
    }
    // Imprime el radio
    public function radio($name,$title,$atributoRadio,$atributoLabel){
    $this->name = $name;
    $this->title = $title;
    $this->atributo = $atributoRadio;
    $this->atributo2 = $atributoLabel;     
    // <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
    
    echo '<input type="radio" ';
    echo 'name="'. $name .'" ';
    echo ' ' . $atributoRadio;
    echo '>';
    echo '<label ';
    echo 'for="'. $name .'" ';
    echo ' ' . $atributoLabel;
    echo '>';
    echo ' ' . $title;
    echo '</label>';
    }
    
    // Imprime el o los option
    public function option($atributo){
    $this->atributo = $atributo;
        switch ($atributo){
        case 'date': 
            echo '<option value="">dd</option>';
            for($i=1;$i<=31;$i++){echo '<option value="'. $i .'">'. $i .'</option>';}
        break;
        case 'month':
            echo '<option value="">mm</option>';
            for($i=1;$i<=12;$i++){echo '<option value="'. $i .'">'. $i .'</option>';}
        break;
        case 'year': 
            echo '<option value="">yy</option>';
            for($i=date('Y');$i>=2000;$i--){echo '<option value="'. $i .'">'. $i .'</option>';}
        break;
        case 'hour': 
            echo '<option value="">hh</option>';
            for($i=1;$i<=12;$i++){echo '<option value="'. $i .'">'. $i .'</option>';}
        break;
        case 'minute': 
            echo '<option value="">mn</option>';
            for($i=1;$i<=59;$i++){echo '<option value="'. $i .'">'. $i .'</option>';}
        break;
        case 'nacionalidad': 
            echo '<option value="V">V</option>';
            echo '<option value="E">E</option>';            
        break;
        case 'codigo': 
            echo '<option value="0416">0416</option>';
            echo '<option value="0426">0426</option>';            
            echo '<option value="0414">0414</option>';            
            echo '<option value="0424">0424</option>';            
            echo '<option value="0412">0412</option>';            
        break;
        default :
        echo '<option value="">Seleccione...</option>';
        echo '<option value="Lorem">Lorem ipsum dolor sit.</option>';
        
        }
    }
    
    // Imprime el Select
    public function select($name,$atributo,$option){
    $this->name = $name;
    $this->atributo = $atributo;
    $this->option = $option;
    echo '<select ';
    echo ' name="'. $name .'" ';
    //echo ' required ';
    echo ' ' . $atributo;
    echo ' >';
    $this->option($option);
    echo '</select>';
    echo '<small class="error">Campo Obligatorio</small>';
    }
}

class Menu{
// Atributos

// Métodos
    // Imprimir el inicio del Menu
    public function menu_I(){
    echo '<div class="off-canvas-wrap">';
        echo '<div class="inner-wrap">';
            
            echo '<nav class="tab-bar">';
                
                echo '<section class="left-small">';
                    echo '<a class="left-off-canvas-toggle menu-icon" ><span></span></a>';
                echo '</section>';

                echo '<section class="middle tab-bar-section">';
                    echo '<h1 class="title">SCIME</h1>';
                echo '</section>';

                echo '<section class="right-small">';
                    echo '<a class="right-off-canvas-toggle menu-icon" ><span></span></a>';
                echo '</section>';
            echo '</nav>';

            echo '<aside class="left-off-canvas-menu">';
                echo '<ul class="off-canvas-list">';
                    /*
                    echo '<li><label>LOREM</label></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    */
                    echo '<li><a href="mVI.php">Agregar un Caso</a></li>';
                    
                    // * (I) ASPECTOS GEOGRÁFICOS
                    echo '<li><label>(1.1) Estado</label></li>';
                        // (1.1) Estado
                    echo '<li><a href="mI_1-1.php"><small>(1.1)</small> Estado <kbd>@</kbd></a></li>';
                    
                    // * (II) ASPECTOS DEMOGRÁFICOS
                        // (2.1) Población
                    echo '<li><label>(2.1) Población</label></li>';
                            // (2.1.1)
                    echo '<li><a href="mII_2-1-1.php"><small>(2.1.1)</small> Población Total</a></li>';
                            // (2.1.2)
                    echo '<li><a href="mII_2-1-2.php"><small>(2.1.2)</small> Otras Poblaciones</a></li>';
                            // (2.1.3)
                    echo '<li><a href="mII_2-1-3.php"><small>(2.1.3)</small> Indicadores sobre Población Femenina Fértil <kbd>@</kbd></a></li>';
                            // (2.1.4)
                    echo '<li><a href="mII_2-1-4.php"><small>(2.1.4)</small> Título para Pirámide Poblacional <kbd>@</kbd></a></li>';
                            // (2.1.5)
                    echo '<li><a href="mII_2-1-5.php"><small>(2.1.5)</small> Población según Municipios</a></li>';
                        // (2.2) Fecundidad
                    echo '<li><label>(2.2) Fecundidad</label></li>';
                            // (2.2.1)
                    echo '<li><a href="mII_2-2-1.php"><small>(2.2.1)</small> Nacimientos Vivos según edad y residencia habitual de la madre</a></li>';
                            // (2.2.2)
                    echo '<li><a href="mII_2-2-2.php"><small>(2.2.2)</small> Población Femenina Fértil (15-49 años)</a></li>';
                            // (2.2.3)
                    echo '<li><a href="mII_2-2-3.php"><small>(2.2.3)</small> Tasas de Fecundidad Específica</a></li>';
                    
                    // * (III) MUERTES MATERNAS SEMANALES
                        // (3.1) Título del Gráfico Anual
                    echo '<li><label>(3.1) Título del Gráfico Anual</label></li>';
                    echo '<li><a href="mIII_3-1.php"><small>(3.1)</small> Título del Gráfico Anual <kbd>@</kbd></a></li>';
                        // (3.2) Tabla de Muertes Maternas por Semana
                    echo '<li><label>(3.2) Tabla de Muertes Maternas por Semana</label></li>';
                    echo '<li><a href="mIII_3-2.php"><small>(3.2)</small> Tabla de Muertes Maternas por Semana</a></li>';
                        // (3.3) Fuente del Gráfico Anual
                    echo '<li><label>(3.3) Fuente del Gráfico Anual</label></li>';
                    echo '<li><a href="mIII_3-3.php"><small>(3.3)</small> Fuente del Gráfico Anual <kbd>@</kbd></a></li>';
                    
                    // * (IV) MUERTES MATERNAS DEL TRIENIO
                        // (4.1) Título del Gráfico Trienal
                    echo '<li><label>(4.1) Título del Gráfico Trienal</label></li>';
                    echo '<li><a href="mIV_4-1.php"><small>(4.1)</small> Título del Gráfico Trienal <kbd>@</kbd></a></li>';
                        // (4.2) Muertes maternas, Número de Nacidos Vivos y Mazón de Mortalidad Materna y Mortalidad Proporcional por Año
                    echo '<li><label>(4.2) M. M. Nº de Nacidos Vivos y Mazón de Mortal. M. y Mortal. Propor. por Año</label></li>';
                    echo '<li><a href="mIV_4-2.php"><small>(4.2)</small> Muertes Maternas, Número de Nacidos Vivos y Mazón de Mortalidad Materna y Mortalidad Proporcional por Año</a></li>';
                        // (4.3) Fuente del Gráfico Trienal
                    echo '<li><label>(4.3) Fuente del Gráfico Trienal</label></li>';
                    echo '<li><a href="mIV_4-3.php"><small>(4.3)</small> Fuente del Gráfico Trienal <kbd>@</kbd></a></li>';
                        // (4.4) Muertes Maternas, Nacidos Vivos y  Razón de Mortalidad Materna según Municipios por Año del Trienio
                    echo '<li><label>(4.4) M. M. Naci. Vivos y  Razón de Mortal. M. según Mun. por Año del Trienio</label></li>';
                    echo '<li><a href="mIV_4-4.php"><small>(4.4)</small> Muertes Maternas, Nacidos Vivos y  Razón de Mortalidad Materna según Municipios por Año del Trienio </a></li>';
                    
                    // * (V) DATOS SOBRE RESPUESTA SOCIAL A LA POBLACIÓN MATERNA
                    echo '<li><label>(V) Datos sobre Repuesta Social a la Población Materna</label></li>';
                        // (5.1) Establecimientos de Salud según tipo, cifras absolutas por municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-1.php"><small>(5.1)</small> Establecimientos de Salud según tipo, cifras absolutas por municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.2) Servicios de Obstetricia. Número por adscripción según municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-2.php"><small>(5.2)</small> Servicios de Obstetricia. Número por adscripción según municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.3) Unidades de Cuidados intensivos. Número por adscripción según municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-3.php"><small>(5.3)</small> Unidades de Cuidados intensivos. Número por adscripción según municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.4) Establecimientos de Barrio Adentro, según tipo. Número según municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-4.php"><small>(5.4)</small> Establecimientos de Barrio Adentro, según tipo. Número según municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.5) Comités de Prevención y Control de la Morbilidad y Mortalidad Materna e Infantil. Número  según ubicación y municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-5.php"><small>(5.5)</small> Comités de Prevención y Control de la Morbilidad y Mortalidad Materna e Infantil. Número  según ubicación y municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.6) Establecimientos asistenciales según tipo de Centros Obstétricos de Emergencia. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-6.php"><small>(5.6)</small> Establecimientos asistenciales según tipo de Centros Obstétricos de Emergencia. Estado XXXX. Año XXXX</a></li>';
                        // (5.7) Casas de abrigo maternal municipales y en establecimientos de salud. Número según municipio. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-7.php"><small>(5.7)</small> Casas de abrigo maternal municipales y en establecimientos de salud. Número según municipio. Estado XXXX. Año XXXX</a></li>';
                        // (5.8) Camas hospitalarias Obstétricas y de Cuidados intensivos. Hospitales y Maternidades. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-8.php"><small>(5.8)</small> Camas hospitalarias Obstétricas y de Cuidados intensivos. Hospitales y Maternidades. Estado XXXX. Año XXXX</a></li>';
                        // (5.9) Indicadores de rendimiento y productividad. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-9.php"><small>(5.9)</small> Indicadores de rendimiento y productividad. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX</a></li>';
                        // (5.10) Personal  médico, de  enfermería y obreros. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-10.php"><small>(5.10)</small> Personal  médico, de  enfermería y obreros. Servicios de obstetricia de hospitales y maternidades. Estado XXXX. Año XXXX</a></li>';
                        // (5.11) Servicios de laboratorio, Banco de Sangre y Epidemiología. Establecimientos de Salud. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-11.php"><small>(5.11)</small> Servicios de laboratorio, Banco de Sangre y Epidemiología. Establecimientos de Salud. Estado XXXX. Año XXXX</a></li>';
                        // (5.12) Cobertura de vacunación en gestantes según municipios. Estado XXXX. Año XXXX
                    echo '<li><a href="mV_5-12.php"><small>(5.12)</small> Cobertura de vacunación en gestantes según municipios. Estado XXXX. Año XXXX</a></li>';
                        // (5.13) Cobertura de control pre y post natal. Estado XXX. Año XXX 
                    echo '<li><a href="mV_5-13.php"><small>(5.13)</small> Cobertura de control pre y post natal. Estado XXX. Año XXX</a></li>';
                    
                    // * (VI) DATOS PARA CARACTERIZACIÓN DE MUERTES MATERNAS
                    echo '<li><label>(VI) Datos para Caract. de M.M</label></li>';
                    echo '<li><a href="mVI.php"><small>(VI)</small> Datos para Caracterización de Muertes Maternas</a></li>';
                    // * (VII) CUADROS SOBRE CARACTERIZACIÓN DE MUERTES MATERNAS
                    echo '<li><label>(VII) Cuadros sobre Caract. de M.M</label></li>';
                        // (7.1)
                    echo '<li><a href="mVII_7-1.php"><small>(7.1)</small> Mortalidad proporcional. Muertes maternas</a></li>';
                        // (7.2)
                    echo '<li><a href="mVII_7-2.php"><small>(7.2)</small> Muertes maternas según municipio de residencia</a></li>';
                        // (7.3)
                    echo '<li><a href="mVII_7-3.php"><small>(7.3)</small> Mortalidad Materna según clasificación, número y porcentaje</a></li>';
                        // (7.4)
                    echo '<li><a href="mVII_7-4.php"><small>(7.4)</small> Mortalidad Materna por municipios según grupo de causas. Estado XXXX. Año XXXX</a></li>';
                        // (7.5)
                    echo '<li><a href="mVII_7-5.php"><small>(7.5)</small> Muertes Maternas según causas, cifras absolutas  y porcentajes</a></li>';
                        // (7.6)
                    echo '<li><a href="mVII_7-6.php"><small>(7.6)</small> Mortalidad Materna según  complicación directa que concluye en la muerte. Número, porcentaje y Razón*</a></li>';
                        // (7.7)
                    echo '<li><a href="mVII_7-7.php"><small>(7.7)</small> Mortalidad Materna según  causas de muerte indirecta. Número, porcentaje y Razón*</a></li>';
                        // (7.8)
                    echo '<li><a href="mVII_7-8.php"><small>(7.8)</small> Causas de muertes no maternas</a></li>';
                        // (7.9)
                    echo '<li><a href="mVII_7-9.php"><small>(7.9)</small> Muertes maternas según cantidad de hijos huérfanos</a></li>';
                        // (7.10)
                    echo '<li><a href="mVII_7-10.php"><small>(7.10)</small> Mortalidad Materna según edad, número, porcentaje y Razón*</a></li>';
                        // (7.11)
                    echo '<li><a href="mVII_7-11.php"><small>(7.11)</small> Muertes maternas según pertenencia a grupo indígena</a></li>';
                        // (7.12)
                    echo '<li><a href="mVII_7-12.php"><small>(7.12)</small> Muertes maternas según Nivel de Instrucción</a></li>';
                        // (7.13)
                    echo '<li><a href="mVII_7-13.php"><small>(7.13)</small> Muertes maternas según Nivel de Instrucción <kbd>@</kbd></a></li>';
                        // (7.14)
                    echo '<li><a href="mVII_7-14.php"><small>(7.14)</small> Muertes maternas según Situación Laboral <kbd>@</kbd></a></li>';
                        // (7.15)
                    echo '<li><a href="mVII_7-15.php"><small>(7.15)</small> Muertes maternas según Condición de la Pareja</a></li>';
                        // (7.16)
                    echo '<li><a href="mVII_7-16.php"><small>(7.16)</small> Muertes maternas según Disponibilidad de Atención hospitalaria</a></li>';
                        // (7.17)
                    echo '<li><a href="mVII_7-17.php"><small>(7.17)</small> Muertes maternas según Condiciones de Vida</a></li>';
                        // (7.18)
                    echo '<li><a href="mVII_7-18.php"><small>(7.18)</small> Muertes maternas según N° embarazos anteriores</a></li>';
                        // (7.19)
                    echo '<li><a href="mVII_7-19.php"><small>(7.19)</small> Muertes maternas según N° partos vaginales anteriores</a></li>';
                        // (7.20)
                    echo '<li><a href="mVII_7-20.php"><small>(7.20)</small> Muertes maternas según N° de cesáreas anteriores</a></li>';
                        // (7.21)
                    echo '<li><a href="mVII_7-21.php"><small>(7.21)</small> Muertes maternas según N° de nacidos vivos  anteriores</a></li>';
                        // (7.22)
                    echo '<li><a href="mVII_7-22.php"><small>(7.22)</small> Muertes maternas según N° de Mortinatos  anteriores</a></li>';
                        // (7.23)
                    echo '<li><a href="mVII_7-23.php"><small>(7.23)</small> Muertes maternas según intervalo intergenésico</a></li>';
                        // (7.24)
                    echo '<li><a href="mVII_7-24.php"><small>(7.24)</small> Muertes maternas según Antecedentes patológicos embarazos anteriores</a></li>';
                        // (7.25)
                    echo '<li><a href="mVII_7-25.php"><small>(7.25)</small> Muertes maternas según Antecedentes patológicos de riesgo</a></li>';
                        // (7.26)
                    echo '<li><a href="mVII_7-26.php"><small>(7.26)</small> Muertes maternas según asistencia a control prenatal</a></li>';
                        // (7.27)
                    echo '<li><a href="mVII_7-27.php"><small>(7.27)</small> Muertes maternas según semanas de gestación al inicio del control prenatal</a></li>';
                        // (7.28)
                    echo '<li><a href="mVII_7-28.php"><small>(7.28)</small> Muertes maternas según N° de consultas prenatales</a></li>';
                        // (7.29)
                    echo '<li><a href="mVII_7-29.php"><small>(7.29)</small> Muertes maternas según necesidad de consulta de Alto Riesgo</a></li>';
                        // (7.30)
                    echo '<li><a href="mVII_7-30.php"><small>(7.30)</small> Muertes maternas según tipo de embarazo</a></li>';
                        // (7.31)
                    echo '<li><a href="mVII_7-31.php"><small>(7.31)</small> Muertes maternas según Problemas y complicaciones detectadas durante el presente embarazo</a></li>';
                        // (7.32)
                    echo '<li><a href="mVII_7-32.php"><small>(7.32)</small> Muertes maternas según terminación del embarazo</a></li>';
                        // (7.33)
                    echo '<li><a href="mVII_7-33.php"><small>(7.33)</small> Muertes maternas según sitio donde ocurrió el fallecimiento</a></li>';
                        // (7.34)
                    echo '<li><a href="mVII_7-34.php"><small>(7.34)</small> Muertes maternas según Edad gestacional</a></li>';
                        // (7.35)
                    echo '<li><a href="mVII_7-35.php"><small>(7.35)</small> Muertes maternas según periodo de ocurrencia  del fallecimiento</a></li>';
                        // (7.36)
                    echo '<li><a href="mVII_7-36.php"><small>(7.36)</small> Muertes maternas según trimestre de embarazo</a></li>';
                        // (7.37)
                    echo '<li><a href="mVII_7-37.php"><small>(7.37)</small> Muertes maternas según Periodo del puerperio</a></li>';
                        // (7.38)
                    echo '<li><a href="mVII_7-38.php"><small>(7.38)</small> Muertes maternas según momento  del aborto</a></li>';
                        // (7.39)
                    echo '<li><a href="mVII_7-39.php"><small>(7.39)</small> Muertes maternas según momento del curetaje</a></li>';
                        // (7.40)
                    echo '<li><a href="mVII_7-40.php"><small>(7.40)</small> Muertes maternas según referencia</a></li>';
                        // (7.41)
                    echo '<li><a href="mVII_7-41.php"><small>(7.41)</small> Muertes maternas según causa de referencia</a></li>';
                        // (7.42)
                    echo '<li><a href="mVII_7-42.php"><small>(7.42)</small> Muertes maternas según Atención requerida al ingreso</a></li>';
                        // (7.43)
                    echo '<li><a href="mVII_7-43.php"><small>(7.43)</small> Muertes maternas según tiempo transcurrido entre la admisión y la defunción de la madre</a></li>';
                        // (7.44)
                    echo '<li><a href="mVII_7-44.php"><small>(7.44)</small> Muertes maternas según presencia de infección hospitalaria</a></li>';
                        // (7.45)
                    echo '<li><a href="mVII_7-45.php"><small>(7.45)</small> Muertes maternas según realización de necropsia</a></li>';
                        // (7.46)
                    echo '<li><a href="mVII_7-46.php"><small>(7.46)</small> Muertes maternas según tipo de demora</a></li>';
                        // (7.47)
                    echo '<li><a href="mVII_7-47.php"><small>(7.47)</small> Muertes maternas según limitaciones en demora 1</a></li>';
                        // (7.48)
                    echo '<li><a href="mVII_7-48.php"><small>(7.48)</small> Muertes maternas según problemas en demora 2</a></li>';
                        // (7.49)
                    echo '<li><a href="mVII_7-49.php"><small>(7.49)</small> Muertes maternas según limitaciones en demora 3</a></li>';
                        // (7.50)
                    echo '<li><a href="mVII_7-50.php"><small>(7.50)</small> Matriz de productos cruzados sobre presencia de Alto Riesgo en muertes maternas</a></li>';
                    // * (VIII) GRÁFICOS AUTOMÁTICOS
                    echo '<li><label> (VIII) Gráficos Automáticos</label></li>';
                        // (8.1)
                    echo '<li><a href="mVIII_8-1.php"><small>(8.1)</small> Pirámide Poblacional <kbd>@</kbd></a></li>';
                        // (8.2)
                    echo '<li><a href="mVIII_8-2.php"><small>(8.2)</small> Muertes Maternas según semana epidemiológica <kbd>@</kbd></a></li>';
                        // (8.3)
                    echo '<li><a href="mVIII_8-3.php"><small>(8.3)</small> Razón de Mortalidad Materna del trienio <kbd>@</kbd></a></li>';
                        // (8.4)
                    echo '<li><a href="mVIII_8-4.php"><small>(8.4)</small> Diagrama sectorial sobre causas de mortalidad materna <kbd>@</kbd></a></li>';
                    /*
                    echo '<li><label>LOREM</label></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    echo '<li><a href="#">lorem</a></li>';
                    */
                    
                echo '</ul>';
            echo '</aside>';

            echo '<aside class="right-off-canvas-menu">';
                echo '<ul class="off-canvas-list">';
                    echo '<li><label>Usuario</label></li>';
                    echo '<li><a href="#">Mi Perfil <kbd>@</kbd></a></li>';
                    echo '<li><a href="#">Cerrar Sesión <kbd>@</kbd></a></li>';
                    echo '<li><label>Configuraciones</label></li>';
                    echo '<li><a href="#">Configuraciones I <kbd>@</kbd></a></li>';
                    echo '<li><a href="#">Configuraciones II <kbd>@</kbd></a></li>';
                    echo '<li><a href="#">Configuraciones III <kbd>@</kbd></a></li>';
                echo '</ul>';
            echo '</aside>';

            echo '<section class="main-section">';
            echo '<!-- content goes here -->';
    }
    // Imprimir el incio del Menu
    public function menu_F(){
            
            echo'</section>';
            
            echo '<a class="exit-off-canvas"></a>';
        echo '</div>';
    echo '</div>';
    
    }
} // Fin de la Clase Menu

// Titulo de Página
class Titulo {
// Atributos
private $titulo;
private $modulo;
// Métodos
// Imprime el Titulo y el nombre del Módulo
public function __construct($titulo,$modulo){
    $this->titulo = $titulo;
    $this->modulo = $modulo;
    
        
        echo '<h5 class="small-12  text-left panel callout radius"><small>'. $modulo .'</small><br>'. $titulo .'</h5>';
        //echo '<p class="small-4 small-centered columns  text-center panel">'. $modulo .'</p>';
        
    
    }
}
// Pie de Página
class Pie{
    public function __construct(){
        echo '<div class="row panel callout radius" id="pie">';
            echo '<h5 class="text-center"><small>Sistema para el Reporte de Reacciones Adversas a Medicamentos</small></h5>';
            echo '<h5 class="text-center"><small>Sistema Desarrollado para el CENAVIF por el Instituto Nacional de Higiene "Rafael Rangel" &copy; Todos los derechos resevados</small></h5>';
        echo '</div>';
    }
}

?>
 
