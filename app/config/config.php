<?php

    $config = [];

// Configuracion de acceso a base de datos Majen:    
    $majen = [];
    $majen['host'] = 'pgdb';
    $majen['userName'] = 'postgres';
    $majen['password'] = 'postgres';
    $majen['database'] = 'docentes';  
    $majen['port'] = '5432'; 

    $config['majen'] = $majen;

// Configuracion de carpeta de fotos:    
    $config['foto_path'] = 'storage/fotos'; 

// Configuracion de acceso a base de datos Majen:    
    $guarani = [];
    $guarani['host'] = '10.1.1.71';
    $guarani['userName'] = 'informix';
    $guarani['password'] = 'informix761';
    $guarani['database'] = 'siu_guarani';  
    $guarani['instancia'] = 'ol_guarani2';
    $guarani['port'] = '1600'; 

    $config['guarani'] = $guarani;
