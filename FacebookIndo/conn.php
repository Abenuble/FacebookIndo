<?php 

    // LOGIC
    set_include_path(get_include_path() . PATH_SEPARATOR . './easyrdf/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";
    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('skos', 'http://www.w3.org/2004/02/skos/core#');
    EasyRdf_Namespace::set('konsep', 'http://contoh.com/konsep#');
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
    EasyRdf_Namespace::set('dimensi', 'http://contoh.com/dimensi#');
    EasyRdf_Namespace::set('qb', 'http://purl.org/linked-data/cube#');
    EasyRdf_Namespace::set('stats', 'http://contoh.com/statistik#');
    EasyRdf_Namespace::set('vocab', 'http://contoh.com/vocab#');
    EasyRdf_Namespace::set('kategori', 'http://contoh.com/kategori#');
    EasyRdf_Namespace::set('akun', 'http://contoh.com/akun#');
    EasyRdf_Namespace::set('waktu', 'http://contoh.com/waktu#');
    EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
    EasyRdf_Namespace::set('art', 'http://contoh.com/art#');
    EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
    EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
    EasyRdf_Namespace::set('sdmx-dimension', 'http://purl.org/linked-data/sdmx/2009/dimension#');
    EasyRdf_Namespace::set('sdmx-attribute', 'http://purl.org/linked-data/sdmx/2009/attribute#');
    EasyRdf_Namespace::set('sdmx-measure', 'http://purl.org/linked-data/sdmx/2009/measure#');
 
    $sparql = new EasyRdf_Sparql_Client('http://localhost:3030/fb/query');
?>