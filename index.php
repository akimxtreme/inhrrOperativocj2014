<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/modernizr.js');
// Formulario: Planilla de Solicitud
echo '<div class="row">';
    // Inicio del Menu Principal
    //$menu = new Menu();
    //$menu->menu_I(); // Imprime el inicio del menu
    $titulo = new Titulo('Operativo de Consultoría Jurídica','CJ - Consultoria Jurídica');
    // Inicio del Formulario
    $form = new Formulario('Planilla de Solicitud');
    // form_I($method,$action,$name,$onsubmit,$atributo)
    $form->form_I('post','#','formulario','','class="large-12 columns" data-abide="ajax"');
    // label($for, $title, $atributo)
    // textarea($name,$placeholder,$atributo)
    // input($name,$type,$placeholder,$atributo)
    // checkbox($name,$title,$atributoRadio,$atributoLabel,$posicion)
    // radio($name,$title,$atributoRadio,$atributoLabel)
    // select($name,$atributo,$option)
    echo '<div class="row">';
        echo '<div class="large-6 columns">';
            $form->label('nombre1', '1er Nombre *','');
            $form->input('nombre1','text','Agregue su 1er Nombre','required');
        echo '</div>'; 
        echo '<div class="large-6 columns">';
            $form->label('nombre2', '2do Nombre','');
            $form->input('nombre2','text','Agregue su 2do Nombre','');
        echo '</div>';  
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="large-6 columns">';
            $form->label('apellido1', '1er Apellido *','');
            $form->input('apellido1','text','Agregue su 1er Apellido','required');
        echo '</div>';         
        echo '<div class="large-6 columns">';
            $form->label('apellido2', '2do Apellido','');
            $form->input('apellido2','text','Agregue su 2do Apellido','');
        echo '</div>'; 
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="large-6 columns">';
            $form->label('cedula', 'Cédula de Identidad *','');
            echo '<div class="row">';
                echo '<div class="large-2 columns">';
                    $form->select('nacionalidad','','nacionalidad');
                echo '</div>';
                echo '<div class="large-10 columns">';
                    $form->input('cedula','text','0000000','required');
                echo '</div>';            
            echo '</div>';
        echo '</div>'; 
        echo '<div class="large-6 columns">';
            $form->label('correo', 'Correo Institucional *','');
            $form->input('correo','text','nombreCorreo@inhrr.gob.ve','required');
        echo '</div>';
    echo '</div>';
    echo '<div class="row">';
        echo '<div class="large-6 columns">';
            $form->label('cedula', 'Teléfono Personal *','');
            echo '<div class="row">';
                echo '<div class="large-2 columns">';
                    $form->select('codigo','','codigo');
                echo '</div>';
                echo '<div class="large-10 columns">';
                    $form->input('telefono','text','0000000','required');
                echo '</div>';            
            echo '</div>';
        echo '</div>';
        echo '<div class="large-6 columns">';
            $form->label('extension', 'Extensión del INHRR *','');
            $form->input('extension','text','1600','required');
        echo '</div>';
    echo '</div>';
    echo '<fieldset><legend>Trámite(s) a Solicitar</legend>';    
        // CARTA DE SOLTERÍA
        echo '<div class="large-12 columns">';
            $sol1 = "visibleHidden('sol11')";
            $form->checkbox('sol1','<b>CARTA DE SOLTERÍA</b>','onclick="'.$sol1.'" id="sol1"','','2'); 
                echo '<fieldset id="sol11"><legend>Requisitos para Solicitar Carta de Soltería - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-12 columns">';
                            $form->label('sol1_r1','Cópia de la Cédula de Identidad *','');     
                            $form->input('sol1_r1','file','','required');     
                        echo '</div>';
                    echo '</div>';  
                echo '</fieldset>';     
        echo '</div>'; 
        // COMPRA - VENTA DE VEHÍCULO
        echo '<div class="large-12 columns">';
            $sol2 = "visibleHidden('sol22')";
            $form->checkbox('sol2','<b>COMPRA - VENTA DE VEHÍCULO</b>','onclick="'.$sol2.'" id="sol2"','','2'); 
                echo '<fieldset id="sol22"><legend>Requisitos para Solicitar Compra - Venta de Vehículo - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-6 columns">';
                            $form->label('sol2_r1','Cédula de Identidad del VENDEDOR del Vehículo *','');     
                            $form->input('sol2_r1','file','','required'); 
                        echo '</div>';
                        echo '<div class="large-6 columns">';
                            $form->label('sol2_r2','Cédula de Identidad del COMPRADOR del Vehículo *','');     
                            $form->input('sol2_r2','file','','required'); 
                        echo '</div>';
                        echo '<div class="large-6 columns">';
                            $form->label('sol2_r3','Cópia del Título de Propiedad *','');     
                            $form->input('sol2_r3','file','','required'); 
                        echo '</div>';
                        echo '<div class="large-6 columns">';
                            $form->label('sol2_r4','Inspección Emitidad por el I.N.T.T *','');     
                            $form->input('sol2_r4','file','','required'); 
                        echo '</div>';
                        echo '<div class="large-12 columns">';
                            $form->label('sol2_r5','Cópia del Cheque correspondiente a la suma de la compra *','');     
                            $form->input('sol2_r5','file','','required'); 
                        echo '</div>';
                    echo '</div>';                       
                echo '</fieldset>';     
        echo '</div>';  
        // DECLARACIÓN DE NO POSEER VIVIENDA
        echo '<div class="large-12 columns">';
            $sol3 = "visibleHidden('sol33')";
            $form->checkbox('sol3','<b>DECLARACIÓN DE NO POSEER VIVIENDA</b>','onclick="'.$sol3.'" id="sol3"','','2'); 
                echo '<fieldset id="sol33"><legend>Requisitos para Solicitar Declaración de no poseer Vivienda - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-12 columns">';
                            $form->label('sol3_r1','Cópia de la Cédula de Identidad *','');     
                            $form->input('sol3_r1','file','','required');     
                        echo '</div>';
                    echo '</div>';  
                echo '</fieldset>';     
        echo '</div>';
        // PERMISO(S) PARA VIAJES DE NIÑA(S), NIÑO(S) Y ADOLESCENTE(S)
        echo '<div class="large-12 columns">';
            $sol4 = "visibleHidden('sol44')";
            $form->checkbox('sol4','<b>PERMISO(S) PARA VIAJES DE NIÑA(S), NIÑO(S) Y ADOLESCENTE(S)</b>','onclick="'.$sol4.'" id="sol4"','','2'); 
                echo '<fieldset id="sol44"><legend>Requisitos Solicitud Permisos de Viaje "Niño(a)/ Adolescente(s)"  - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-12 columns">';
                            $form->label('sol4_r1','Cópia de la Cédula de Identidad del Trabajador *','');     
                            $form->input('sol4_r1','file','','required');     
                        echo '</div>';       
                    echo '</div>';                                          
                        echo '<fieldset><legend>Niño(a) o Adolescente(s)"</legend>';
                            
                            echo '<div class="large-6 columns">';
                                $form->label('sol4_r2','Es Mayor a 9 (nueve) años *','');  
                                $form->radio('sol4_r3','SI','','');
                                $form->radio('sol4_r3','NO','','');
                                $form->label('sol4_r4','Cédula de Identidad *','');     
                                $form->input('sol4_r4','file','','required');
                            echo '</div>';
                            
                            echo '<div class="large-6 columns">';
                                $form->label('sol4_r2','Partida de Nacimiento del Niño(a) o Adolescente *','');     
                                $form->input('sol4_r2','file','','required'); 
                            echo '</div>'; 
                                                                     
                        echo '</fieldset>'; 
                        
                        echo '<div class="row">';
                            echo '<div class="large-12 columns">';
                                echo '<button class="button tiny" type="button">AGREGAR OTRO</button>';
                            echo '</div>';
                        echo '</div>';                    
                echo '</fieldset>';     
        echo '</div>'; 
        // PODER GENERAL
        echo '<div class="large-12 columns">';
            $sol5 = "visibleHidden('sol55')";
            $form->checkbox('sol5','<b>PODER GENERAL</b>','onclick="'.$sol5.'" id="sol5"','','2'); 
                echo '<fieldset id="sol55"><legend>Requisitos para Solicitar Poder General - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-6 columns">';
                            $form->label('sol5_r1','Cópia de la Cédula de Identidad del Otorgante *','');     
                            $form->input('sol5_r1','file','','required');     
                        echo '</div>';
                        echo '<div class="large-6 columns">';
                            $form->label('sol5_r2','Cópia de la Cédula de Identidad del Mandatario *','');     
                            $form->input('sol5_r2','file','','required');     
                        echo '</div>';
                        echo '<div class="large-12 columns">';
                            $form->label('sol5_r3','Especificaciones del Poder *','');     
                            $form->input('sol5_r3','file','','required');     
                        echo '</div>';
                    echo '</div>';  
                echo '</fieldset>';     
        echo '</div>';
        // PODER ESPECIAL
        echo '<div class="large-12 columns">';
            $sol6 = "visibleHidden('sol66')";
            $form->checkbox('sol6','<b>PODER ESPECIAL</b>','onclick="'.$sol6.'" id="sol6"','','2'); 
                echo '<fieldset id="sol66"><legend>Requisitos para Solicitar Poder General - (Formatos Permitidos: .png, .jpg, .pdf)</legend>';
                    echo '<div class="row">';
                        echo '<div class="large-6 columns">';
                            $form->label('sol6_r1','Cópia de la Cédula de Identidad del Otorgante *','');     
                            $form->input('sol6_r1','file','','required');     
                        echo '</div>';
                        echo '<div class="large-6 columns">';
                            $form->label('sol6_r2','Cópia de la Cédula de Identidad del Mandatario *','');     
                            $form->input('sol6_r2','file','','required');     
                        echo '</div>';
                        echo '<div class="large-12 columns">';
                            $form->label('sol6_r3','Especificaciones del Poder *','');     
                            $form->input('sol6_r3','file','','required');     
                        echo '</div>';
                    echo '</div>';  
                echo '</fieldset>';     
        echo '</div>';        
    echo '</fieldset>';       
    $form->form_F();
    // Fin del Formulario
    //$menu->menu_F(); // Imprime el fin del menu 
echo '</div>';
$html->links('JS','js/foundation/foundation.js');
$html->links('JS','js/foundation/foundation.abide.js');
$html->links('JS','js/jquery.js');
$html->links('JS','js/foundation.min.js');
echo '<script>
      $(document).foundation();
    </script>';
$html->body_F();

?>


