<?php
class Application_Form_CertificadosLaboralFiltro extends Zend_Form
{
    
    public function init() {

        $this->setMethod('post')
             ->setAction('/certificados/laboral');        
        
        $tipoDocumento = new Zend_Form_Element_Select('tipoDocumento');
        $tipoDocumento
            ->setMultiOptions(fnTiposIdentificacion())
            ->setLabel('Tipo Documento')
            ->setRequired()             
            ->setAttribs(array(                
                'class' => 'span2'                
                ));    
        $this->addElement($tipoDocumento);
        
        $numeroDocumento = new Zend_Form_Element_Text('numeroDocumento');
        $numeroDocumento
            ->setLabel('Número Documento')
            ->setRequired() 
            ->setAttribs(array(                
                'class' => 'span2',                
                'required' => ''                
                ));    
        $this->addElement($numeroDocumento);
        
        $dirigido = new Zend_Form_Element_Text('dirigido');
        $dirigido
            ->setValue('A QUIEN PUEDA INTERESAR')
            ->setLabel('Dirigido a')
            ->setRequired() 
            ->setAttribs(array(                
                'class' => 'span2',                
                'required' => ''                
                ));    
        $this->addElement($dirigido);
        
        $enviar = new Zend_Form_Element_Submit('enviar');
        $enviar
            ->setLabel('Generar')            
            ->setAttribs(array(                
                'class' => 'btnGeneral' 
                ));    
        $this->addElement($enviar);                                         
    }
}
