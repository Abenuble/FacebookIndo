<?php
    include_once('header.php');
    include_once('nav.php');
    require('conn.php');

    $query = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label ?label.
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result = $sparql->query($query);
	foreach ($result as $row) {
		$totalevent = $row->totalevent;
		$totalpromosi = $row->totalpromosi;
		$totalproduk = $row->totalproduk;
		$totalmotivasi = $row->totalmotivasi;
		$totalkeluarga = $row->totalkeluarga;
	}

	//Query Jumlah Post Berdasarkan Waktu
	$query2 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label ?label.
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result2 = $sparql->query($query2);
	foreach ($result2 as $row) {
		$totalpagi = $row->totalpagi;
		$totalmalam = $row->totalmalam;
	}
	
	//Query Jumlah Post Mario Berdasarkan Kategori
	$query3 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Mario".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result3 = $sparql->query($query3);
	foreach ($result3 as $row) {
		$totalevent1 = $row->totalevent;
		$totalpromosi1 = $row->totalpromosi;
		$totalproduk1 = $row->totalproduk;
		$totalmotivasi1 = $row->totalmotivasi;
		$totalkeluarga1 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Mario Berdasarkan Waktu
	$query4 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Mario".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result4 = $sparql->query($query4);
	foreach ($result4 as $row) {
		$totalpagi1 = $row->totalpagi;
		$totalmalam1 = $row->totalmalam;
	}
	//Query Jumlah Post Vierra Berdasarkan Kategori
	$query5 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Vierra".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result5 = $sparql->query($query5);
	foreach ($result5 as $row) {
		$totalevent2 = $row->totalevent;
		$totalpromosi2 = $row->totalpromosi;
		$totalproduk2 = $row->totalproduk;
		$totalmotivasi2 = $row->totalmotivasi;
		$totalkeluarga2 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Vierra Berdasarkan Waktu
	$query6 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Vierra".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result6 = $sparql->query($query6);
	foreach ($result6 as $row) {
		$totalpagi2 = $row->totalpagi;
		$totalmalam2 = $row->totalmalam;
	}
	//Query Jumlah Post LastChild Berdasarkan Kategori
	$query7 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "LastChild".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result7 = $sparql->query($query7);
	foreach ($result7 as $row) {
		$totalevent3 = $row->totalevent;
		$totalpromosi3 = $row->totalpromosi;
		$totalproduk3 = $row->totalproduk;
		$totalmotivasi3 = $row->totalmotivasi;
		$totalkeluarga3 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post LastChild Berdasarkan Waktu
	$query8 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "LastChild".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result8 = $sparql->query($query8);
	foreach ($result8 as $row) {
		$totalpagi3 = $row->totalpagi;
		$totalmalam3 = $row->totalmalam;
	}
	//Query Jumlah Post Slank Berdasarkan Kategori
	$query9 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Slank".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result9 = $sparql->query($query9);
	foreach ($result9 as $row) {
		$totalevent4 = $row->totalevent;
		$totalpromosi4 = $row->totalpromosi;
		$totalproduk4 = $row->totalproduk;
		$totalmotivasi4 = $row->totalmotivasi;
		$totalkeluarga4 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Slank Berdasarkan Waktu
	$query10 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Slank".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result10 = $sparql->query($query10);
	foreach ($result10 as $row) {
		$totalpagi4 = $row->totalpagi;
		$totalmalam4 = $row->totalmalam;
	}
	//Query Jumlah Post IwanFals Berdasarkan Kategori
	$query11 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "IwanFals".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result11 = $sparql->query($query11);
	foreach ($result11 as $row) {
		$totalevent5 = $row->totalevent;
		$totalpromosi5 = $row->totalpromosi;
		$totalproduk5 = $row->totalproduk;
		$totalmotivasi5 = $row->totalmotivasi;
		$totalkeluarga5 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post IwanFals Berdasarkan Waktu
	$query12 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "IwanFals".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result12 = $sparql->query($query12);
	foreach ($result12 as $row) {
		$totalpagi5 = $row->totalpagi;
		$totalmalam5 = $row->totalmalam;
	}
	//Query Jumlah Post CintaLaura Berdasarkan Kategori
	$query13 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "CintaLaura".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result13 = $sparql->query($query13);
	foreach ($result13 as $row) {
		$totalevent6 = $row->totalevent;
		$totalpromosi6 = $row->totalpromosi;
		$totalproduk6 = $row->totalproduk;
		$totalmotivasi6 = $row->totalmotivasi;
		$totalkeluarga6 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post CintaLaura Berdasarkan Waktu
	$query14 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "CintaLaura".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result14 = $sparql->query($query14);
	foreach ($result14 as $row) {
		$totalpagi6 = $row->totalpagi;
		$totalmalam6 = $row->totalmalam;
	}
	//Query Jumlah Post BayuSkak Berdasarkan Kategori
	$query15 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "BayuSkak".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result15 = $sparql->query($query15);
	foreach ($result15 as $row) {
		$totalevent7 = $row->totalevent;
		$totalpromosi7 = $row->totalpromosi;
		$totalproduk7 = $row->totalproduk;
		$totalmotivasi7 = $row->totalmotivasi;
		$totalkeluarga7 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post BayuSkak Berdasarkan Waktu
	$query16 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "BayuSkak".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result16 = $sparql->query($query16);
	foreach ($result16 as $row) {
		$totalpagi7 = $row->totalpagi;
		$totalmalam7 = $row->totalmalam;
	}
	//Query Jumlah Post Armada Berdasarkan Kategori
	$query17 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Armada".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result17 = $sparql->query($query17);
	foreach ($result17 as $row) {
		$totalevent8 = $row->totalevent;
		$totalpromosi8 = $row->totalpromosi;
		$totalproduk8 = $row->totalproduk;
		$totalmotivasi8 = $row->totalmotivasi;
		$totalkeluarga8 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Armada Berdasarkan Waktu
	$query18 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Armada".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result18 = $sparql->query($query18);
	foreach ($result18 as $row) {
		$totalpagi8 = $row->totalpagi;
		$totalmalam8 = $row->totalmalam;
	}
	//Query Jumlah Post Killingmeinside Berdasarkan Kategori
	$query19 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Killingmeinside".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result19 = $sparql->query($query19);
	foreach ($result19 as $row) {
		$totalevent9 = $row->totalevent;
		$totalpromosi9 = $row->totalpromosi;
		$totalproduk9 = $row->totalproduk;
		$totalmotivasi9 = $row->totalmotivasi;
		$totalkeluarga9 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Killingmeinside Berdasarkan Waktu
	$query20 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Killingmeinside".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result20 = $sparql->query($query20);
	foreach ($result20 as $row) {
		$totalpagi9 = $row->totalpagi;
		$totalmalam9 = $row->totalmalam;
	}
	//Query Jumlah Post Jrocks Berdasarkan Kategori
	$query21 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Jrocks".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result21 = $sparql->query($query21);
	foreach ($result21 as $row) {
		$totalevent10 = $row->totalevent;
		$totalpromosi10 = $row->totalpromosi;
		$totalproduk10 = $row->totalproduk;
		$totalmotivasi10 = $row->totalmotivasi;
		$totalkeluarga10 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Jrocks Berdasarkan Waktu
	$query22 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Jrocks".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result22 = $sparql->query($query22);
	foreach ($result22 as $row) {
		$totalpagi10 = $row->totalpagi;
		$totalmalam10 = $row->totalmalam;
	}
	//Query Jumlah Post WidiVierra Berdasarkan Kategori
	$query23 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "WidiVierra".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result23 = $sparql->query($query23);
	foreach ($result23 as $row) {
		$totalevent11 = $row->totalevent;
		$totalpromosi11 = $row->totalpromosi;
		$totalproduk11 = $row->totalproduk;
		$totalmotivasi11 = $row->totalmotivasi;
		$totalkeluarga11 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post WidiVierra Berdasarkan Waktu
	$query24 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "WidiVierra".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result24 = $sparql->query($query24);
	foreach ($result24 as $row) {
		$totalpagi11 = $row->totalpagi;
		$totalmalam11 = $row->totalmalam;
	}
	//Query Jumlah Post Afgan Berdasarkan Kategori
	$query25 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Afgan".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result25 = $sparql->query($query25);
	foreach ($result25 as $row) {
		$totalevent12 = $row->totalevent;
		$totalpromosi12 = $row->totalpromosi;
		$totalproduk12 = $row->totalproduk;
		$totalmotivasi12 = $row->totalmotivasi;
		$totalkeluarga12 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Afgan Berdasarkan Waktu
	$query26 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Afgan".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result26 = $sparql->query($query26);
	foreach ($result26 as $row) {
		$totalpagi12 = $row->totalpagi;
		$totalmalam12 = $row->totalmalam;
	}
	//Query Jumlah Post Raisa Berdasarkan Kategori
	$query27 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Raisa".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result27 = $sparql->query($query27);
	foreach ($result27 as $row) {
		$totalevent13 = $row->totalevent;
		$totalpromosi13 = $row->totalpromosi;
		$totalproduk13 = $row->totalproduk;
		$totalmotivasi13 = $row->totalmotivasi;
		$totalkeluarga13 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Raisa Berdasarkan Waktu
	$query28 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Raisa".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result28 = $sparql->query($query28);
	foreach ($result28 as $row) {
		$totalpagi13 = $row->totalpagi;
		$totalmalam13 = $row->totalmalam;
	}
	//Query Jumlah Post GitaGutawa Berdasarkan Kategori
	$query29 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "GitaGutawa".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result29 = $sparql->query($query29);
	foreach ($result29 as $row) {
		$totalevent14 = $row->totalevent;
		$totalpromosi14 = $row->totalpromosi;
		$totalproduk14 = $row->totalproduk;
		$totalmotivasi14 = $row->totalmotivasi;
		$totalkeluarga14 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post GitaGutawa Berdasarkan Waktu
	$query30 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "GitaGutawa".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result30 = $sparql->query($query30);
	foreach ($result30 as $row) {
		$totalpagi14 = $row->totalpagi;
		$totalmalam14 = $row->totalmalam;
	}
	//Query Jumlah Post Dmasiv Berdasarkan Kategori
	$query31 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Dmasiv".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result31 = $sparql->query($query31);
	foreach ($result31 as $row) {
		$totalevent15 = $row->totalevent;
		$totalpromosi15 = $row->totalpromosi;
		$totalproduk15 = $row->totalproduk;
		$totalmotivasi15 = $row->totalmotivasi;
		$totalkeluarga15 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Dmasiv Berdasarkan Waktu
	$query32 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Dmasiv".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result32 = $sparql->query($query32);
	foreach ($result32 as $row) {
		$totalpagi15 = $row->totalpagi;
		$totalmalam15 = $row->totalmalam;
	}
	//Query Jumlah Post Isyana Berdasarkan Kategori
	$query33 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Isyana".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result33 = $sparql->query($query33);
	foreach ($result33 as $row) {
		$totalevent16 = $row->totalevent;
		$totalpromosi16 = $row->totalpromosi;
		$totalproduk16 = $row->totalproduk;
		$totalmotivasi16 = $row->totalmotivasi;
		$totalkeluarga16 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Isyana Berdasarkan Waktu
	$query32 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Isyana".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result32 = $sparql->query($query32);
	foreach ($result32 as $row) {
		$totalpagi16 = $row->totalpagi;
		$totalmalam16 = $row->totalmalam;
	}
	//Query Jumlah Post YusufMansur Berdasarkan Kategori
	$query33 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "YusufMansur".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result33 = $sparql->query($query33);
	foreach ($result33 as $row) {
		$totalevent17 = $row->totalevent;
		$totalpromosi17 = $row->totalpromosi;
		$totalproduk17 = $row->totalproduk;
		$totalmotivasi17 = $row->totalmotivasi;
		$totalkeluarga17 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post YusufMansur Berdasarkan Waktu
	$query34 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "YusufMansur".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result34 = $sparql->query($query34);
	foreach ($result34 as $row) {
		$totalpagi17 = $row->totalpagi;
		$totalmalam17 = $row->totalmalam;
	}
	//Query Jumlah Post ZaskiaMecca Berdasarkan Kategori
	$query35 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "ZaskiaMecca".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result35 = $sparql->query($query35);
	foreach ($result35 as $row) {
		$totalevent18 = $row->totalevent;
		$totalpromosi18 = $row->totalpromosi;
		$totalproduk18 = $row->totalproduk;
		$totalmotivasi18 = $row->totalmotivasi;
		$totalkeluarga18 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post ZaskiaMecca Berdasarkan Waktu
	$query36 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "ZaskiaMecca".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result36 = $sparql->query($query36);
	foreach ($result36 as $row) {
		$totalpagi18 = $row->totalpagi;
		$totalmalam18 = $row->totalmalam;
	}
	//Query Jumlah Post AAGym Berdasarkan Kategori
	$query37 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "AAGym".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result37 = $sparql->query($query37);
	foreach ($result37 as $row) {
		$totalevent19 = $row->totalevent;
		$totalpromosi19 = $row->totalpromosi;
		$totalproduk19 = $row->totalproduk;
		$totalmotivasi19 = $row->totalmotivasi;
		$totalkeluarga19 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post AAGym Berdasarkan Waktu
	$query38 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "AAGym".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result38 = $sparql->query($query38);
	foreach ($result38 as $row) {
		$totalpagi19 = $row->totalpagi;
		$totalmalam19 = $row->totalmalam;
	}
	//Query Jumlah Post RaffiAhmad Berdasarkan Kategori
	$query39 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "RaffiAhmad".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result39 = $sparql->query($query39);
	foreach ($result39 as $row) {
		$totalevent20 = $row->totalevent;
		$totalpromosi20 = $row->totalpromosi;
		$totalproduk20 = $row->totalproduk;
		$totalmotivasi20 = $row->totalmotivasi;
		$totalkeluarga20 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post RaffiAhmad Berdasarkan Waktu
	$query40 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "RaffiAhmad".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result40 = $sparql->query($query40);
	foreach ($result40 as $row) {
		$totalpagi20 = $row->totalpagi;
		$totalmalam20 = $row->totalmalam;
	}
	//Query Jumlah Post RadityaDika Berdasarkan Kategori
	$query41 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "RadityaDika".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result41 = $sparql->query($query41);
	foreach ($result41 as $row) {
		$totalevent21 = $row->totalevent;
		$totalpromosi21 = $row->totalpromosi;
		$totalproduk21 = $row->totalproduk;
		$totalmotivasi21 = $row->totalmotivasi;
		$totalkeluarga21 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post RadityaDika Berdasarkan Waktu
	$query42 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "RadityaDika".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result42 = $sparql->query($query42);
	foreach ($result42 as $row) {
		$totalpagi21 = $row->totalpagi;
		$totalmalam21 = $row->totalmalam;
	}
	//Query Jumlah Post MaudyAyunda Berdasarkan Kategori
	$query43 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "MaudyAyunda".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result43 = $sparql->query($query43);
	foreach ($result43 as $row) {
		$totalevent22 = $row->totalevent;
		$totalpromosi22 = $row->totalpromosi;
		$totalproduk22 = $row->totalproduk;
		$totalmotivasi22 = $row->totalmotivasi;
		$totalkeluarga22 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post MaudyAyunda Berdasarkan Waktu
	$query44 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "MaudyAyunda".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result44 = $sparql->query($query44);
	foreach ($result44 as $row) {
		$totalpagi22 = $row->totalpagi;
		$totalmalam22 = $row->totalmalam;
	}
	//Query Jumlah Post Prilly Berdasarkan Kategori
	$query45 = 'SELECT (SUM(?event) AS ?totalevent) (SUM(?promosi) AS ?totalpromosi) (SUM(?produk) AS ?totalproduk) (SUM(?motivasi) AS ?totalmotivasi) (SUM(?keluarga) AS ?totalkeluarga)
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Prilly".
  					?b a skos:Concept;
    					skos:inScheme konsep:Waktu;
    					rdfs:label ?waktu.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:event;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?event.
  					?d a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:promosi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?promosi.
  					?e a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:produk;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?produk.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:motivasi;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?motivasi.
    				?g a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori kategori:keluarga;
    					dimensi:waktu ?b;
    					stats:jumlah_post ?keluarga.
					}';
	$result45 = $sparql->query($query45);
	foreach ($result45 as $row) {
		$totalevent23 = $row->totalevent;
		$totalpromosi23 = $row->totalpromosi;
		$totalproduk23 = $row->totalproduk;
		$totalmotivasi23 = $row->totalmotivasi;
		$totalkeluarga23 = $row->totalkeluarga;
	}
	
	//Query Jumlah Post Prilly Berdasarkan Waktu
	$query46 = 'SELECT (SUM(?pagi) AS ?totalpagi) (SUM(?malam) AS ?totalmalam) 
					WHERE { 
  					?a a skos:Concept;
    					skos:inScheme konsep:akun;
    					rdfs:label "Prilly".
  					?b a skos:Concept;
    					skos:inScheme konsep:Kategori;
    					rdfs:label ?kategori.
  					?c a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:pagi;
    					stats:jumlah_post ?pagi.
  					?f a qb:Observation;
    					dimensi:akun ?a;
    					dimensi:kategori ?b;
    					dimensi:waktu waktu:malam;
    					stats:jumlah_post ?malam.
					}';
	$result46 = $sparql->query($query46);
	foreach ($result46 as $row) {
		$totalpagi23 = $row->totalpagi;
		$totalmalam23 = $row->totalmalam;
	}
	
	
?>
<div class="container">
		<div class="col-md-12" id="postkategori" style="margin-top:30px;">
		<script type="text/javascript">
			$(function () {
    			$('#postkategori').highcharts({
        					chart: {
            					type: 'pie'
        					},
        					title: {
            					text: 'Total post Berdasarkan Kategori'
        					},
        					tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
        					plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %',
										style: {
											color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
										}
									}
								}
							},
        					credits: {
            					enabled: false
        					},
        					series: [{
            					name: 'Total Post',
								colorByPoint: true,
            					data: [{name: 'Event', y: <?php echo $totalevent; ?>},{name: 'Promosi', y: <?php echo $totalpromosi; ?>},{name: 'Produk', y: <?php echo $totalproduk; ?>}, {name: 'Motivasi', y: <?php echo $totalmotivasi; ?>}, {name: 'Keluarga', y: <?php echo $totalkeluarga; ?>}]
        					}]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" id="postwaktu" style="margin-top:30px;">
		<script type="text/javascript">
			$(function () {
    			$('#postwaktu').highcharts({
        					chart: {
            					type: 'bar'
        					},
        					title: {
            					text: 'Total Post Berdasarkan Waktu'
        					},
        					xAxis: {
            					categories: ['Pagi', 'Malam'],
            					title: {
                					text: null
            					}
        					},
        					yAxis: {
            					min: 0,
            					title: {
                					text: 'Jumlah',
                					align: 'high'
            					},
            					labels: {
                					overflow: 'justify'
            					},
        					},
        					tooltip: {
            					valueSuffix: ' post'
        					},
        					plotOptions: {
            					bar: {
                					dataLabels: {
                    					enabled: true
                					}
            					}
        					},
        					legend:{
            					layout: 'vertical',
            					align: 'right',
            					verticalAlign: 'top',
            					x: -46,
            					y: -45,
            					floating: true,
            					borderWidth: 1,
            					backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            					shadow: true
        					},
        					credits: {
            					enabled: false
        					},
        					series: [{
            					name: 'Total Post',
            					data: [<?php echo $totalpagi;?>, <?php echo $totalmalam; ?>]
        					}]
    					});
					});
				</script>
			</div>

	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Mario Teguh</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/marioteguh</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart1">
				<script type="text/javascript">
					$(function () {
    					$('#piechart1').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Tweet Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent1; ?>],['Promosi',<?php echo $totalpromosi1; ?>],['Produk',<?php echo $totalproduk1; ?>],['Motivasi',<?php echo $totalmotivasi1; ?>],['Keluarga', <?php echo $totalkeluarga1; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result3 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart2">
				<script type="text/javascript">
					$(function () {
    					$('#piechart2').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi1; ?>],['Malam',<?php echo $totalmalam1; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result4 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Vierra</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/vierraband</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart3">
				<script type="text/javascript">
					$(function () {
    					$('#piechart3').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent2; ?>],['Promosi',<?php echo $totalpromosi2; ?>],['Produk',<?php echo $totalproduk2; ?>],['Motivasi',<?php echo $totalmotivasi2; ?>],['Keluarga', <?php echo $totalkeluarga2; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result5 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart4">
				<script type="text/javascript">
					$(function () {
    					$('#piechart4').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi2; ?>],['Malam',<?php echo $totalmalam2; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result6 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">LastChild</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/lastchild</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart5">
				<script type="text/javascript">
					$(function () {
    					$('#piechart5').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent3; ?>],['Promosi',<?php echo $totalpromosi3; ?>],['Produk',<?php echo $totalproduk3; ?>],['Motivasi',<?php echo $totalmotivasi3; ?>],['Keluarga', <?php echo $totalkeluarga3; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result7 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart6">
				<script type="text/javascript">
					$(function () {
    					$('#piechart6').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi3; ?>],['Malam',<?php echo $totalmalam3; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result8 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Slank</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/slankband</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart7">
				<script type="text/javascript">
					$(function () {
    					$('#piechart7').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent4; ?>],['Promosi',<?php echo $totalpromosi4; ?>],['Produk',<?php echo $totalproduk4; ?>],['Motivasi',<?php echo $totalmotivasi4; ?>],['Keluarga', <?php echo $totalkeluarga4; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result9 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart8">
				<script type="text/javascript">
					$(function () {
    					$('#piechart8').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi4; ?>],['Malam',<?php echo $totalmalam4; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result10 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">IwanFals</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/iwanfals</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart9">
				<script type="text/javascript">
					$(function () {
    					$('#piechart9').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent5; ?>],['Promosi',<?php echo $totalpromosi5; ?>],['Produk',<?php echo $totalproduk5; ?>],['Motivasi',<?php echo $totalmotivasi5; ?>],['Keluarga', <?php echo $totalkeluarga5; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result11 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart10">
				<script type="text/javascript">
					$(function () {
    					$('#piechart10').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi5; ?>],['Malam',<?php echo $totalmalam5; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result12 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">CintaLaura</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/CintaLaura.OfficialPage</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart11">
				<script type="text/javascript">
					$(function () {
    					$('#piechart11').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent6; ?>],['Promosi',<?php echo $totalpromosi6; ?>],['Produk',<?php echo $totalproduk6; ?>],['Motivasi',<?php echo $totalmotivasi6; ?>],['Keluarga', <?php echo $totalkeluarga6; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result13 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart12">
				<script type="text/javascript">
					$(function () {
    					$('#piechart12').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi6; ?>],['Malam',<?php echo $totalmalam6; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result14 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">BayuSkak</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/Bayu-Skak-223751927722679</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart13">
				<script type="text/javascript">
					$(function () {
    					$('#piechart13').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent7; ?>],['Promosi',<?php echo $totalpromosi7; ?>],['Produk',<?php echo $totalproduk7; ?>],['Motivasi',<?php echo $totalmotivasi7; ?>],['Keluarga', <?php echo $totalkeluarga7; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result15 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart14">
				<script type="text/javascript">
					$(function () {
    					$('#piechart14').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi7; ?>],['Malam',<?php echo $totalmalam7; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result16 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Armada</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/armada.musik</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart15">
				<script type="text/javascript">
					$(function () {
    					$('#piechart15').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent8; ?>],['Promosi',<?php echo $totalpromosi8; ?>],['Produk',<?php echo $totalproduk8; ?>],['Motivasi',<?php echo $totalmotivasi8; ?>],['Keluarga', <?php echo $totalkeluarga8; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result17 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart16">
				<script type="text/javascript">
					$(function () {
    					$('#piechart16').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi8; ?>],['Malam',<?php echo $totalmalam8; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result18 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Killingmeinside</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/killingmeinside</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart17">
				<script type="text/javascript">
					$(function () {
    					$('#piechart17').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent9; ?>],['Promosi',<?php echo $totalpromosi9; ?>],['Produk',<?php echo $totalproduk9; ?>],['Motivasi',<?php echo $totalmotivasi9; ?>],['Keluarga', <?php echo $totalkeluarga9; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result19 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart18">
				<script type="text/javascript">
					$(function () {
    					$('#piechart18').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi9; ?>],['Malam',<?php echo $totalmalam9; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result20 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Jrocks</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/jrocks.official</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart19">
				<script type="text/javascript">
					$(function () {
    					$('#piechart19').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent10; ?>],['Promosi',<?php echo $totalpromosi10; ?>],['Produk',<?php echo $totalproduk10; ?>],['Motivasi',<?php echo $totalmotivasi10; ?>],['Keluarga', <?php echo $totalkeluarga10; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result21 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart20">
				<script type="text/javascript">
					$(function () {
    					$('#piechart20').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi10; ?>],['Malam',<?php echo $totalmalam10; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result22 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">WidiVierra</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/Widy-Vierra-44971471700</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart21">
				<script type="text/javascript">
					$(function () {
    					$('#piechart21').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent11; ?>],['Promosi',<?php echo $totalpromosi11; ?>],['Produk',<?php echo $totalproduk11; ?>],['Motivasi',<?php echo $totalmotivasi11; ?>],['Keluarga', <?php echo $totalkeluarga11; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result23 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart22">
				<script type="text/javascript">
					$(function () {
    					$('#piechart22').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi11; ?>],['Malam',<?php echo $totalmalam11; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result24 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Afgan</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/AfganOfficial1</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart23">
				<script type="text/javascript">
					$(function () {
    					$('#piechart23').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent12; ?>],['Promosi',<?php echo $totalpromosi12; ?>],['Produk',<?php echo $totalproduk12; ?>],['Motivasi',<?php echo $totalmotivasi12; ?>],['Keluarga', <?php echo $totalkeluarga12; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result25 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart24">
				<script type="text/javascript">
					$(function () {
    					$('#piechart24').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi12; ?>],['Malam',<?php echo $totalmalam12; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result26 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Raisa</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/Raisa6690</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart25">
				<script type="text/javascript">
					$(function () {
    					$('#piechart25').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent13; ?>],['Promosi',<?php echo $totalpromosi13; ?>],['Produk',<?php echo $totalproduk13; ?>],['Motivasi',<?php echo $totalmotivasi13; ?>],['Keluarga', <?php echo $totalkeluarga13; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result27 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart26">
				<script type="text/javascript">
					$(function () {
    					$('#piechart26').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi13; ?>],['Malam',<?php echo $totalmalam13; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result28 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">GitaGutawa</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/GitaGutawa</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart27">
				<script type="text/javascript">
					$(function () {
    					$('#piechart27').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent14; ?>],['Promosi',<?php echo $totalpromosi14; ?>],['Produk',<?php echo $totalproduk14; ?>],['Motivasi',<?php echo $totalmotivasi14; ?>],['Keluarga', <?php echo $totalkeluarga14; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result29 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart28">
				<script type="text/javascript">
					$(function () {
    					$('#piechart28').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi14; ?>],['Malam',<?php echo $totalmalam14; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result30 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Dmasiv</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/dmasivband</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart29">
				<script type="text/javascript">
					$(function () {
    					$('#piechart29').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent15; ?>],['Promosi',<?php echo $totalpromosi15; ?>],['Produk',<?php echo $totalproduk15; ?>],['Motivasi',<?php echo $totalmotivasi15; ?>],['Keluarga', <?php echo $totalkeluarga15; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result31 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart30">
				<script type="text/javascript">
					$(function () {
    					$('#piechart30').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi15; ?>],['Malam',<?php echo $totalmalam15; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result32 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">Isyana</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/sarasvatisyana</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart31">
				<script type="text/javascript">
					$(function () {
    					$('#piechart31').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent16; ?>],['Promosi',<?php echo $totalpromosi16; ?>],['Produk',<?php echo $totalproduk16; ?>],['Motivasi',<?php echo $totalmotivasi16; ?>],['Keluarga', <?php echo $totalkeluarga16; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result33 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart32">
				<script type="text/javascript">
					$(function () {
    					$('#piechart32').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi16; ?>],['Malam',<?php echo $totalmalam16; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result34 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">YusufMansur</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/UstadzYusufMansur</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart33">
				<script type="text/javascript">
					$(function () {
    					$('#piechart33').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent17; ?>],['Promosi',<?php echo $totalpromosi17; ?>],['Produk',<?php echo $totalproduk17; ?>],['Motivasi',<?php echo $totalmotivasi17; ?>],['Keluarga', <?php echo $totalkeluarga17; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result35 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart34">
				<script type="text/javascript">
					$(function () {
    					$('#piechart34').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi17; ?>],['Malam',<?php echo $totalmalam17; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result36 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">ZaskiaMecca</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/ZaskiaMeccaOfficial</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart35">
				<script type="text/javascript">
					$(function () {
    					$('#piechart35').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent18; ?>],['Promosi',<?php echo $totalpromosi18; ?>],['Produk',<?php echo $totalproduk18; ?>],['Motivasi',<?php echo $totalmotivasi18; ?>],['Keluarga', <?php echo $totalkeluarga18; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result37 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart36">
				<script type="text/javascript">
					$(function () {
    					$('#piechart36').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi18; ?>],['Malam',<?php echo $totalmalam18; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result38 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">AAGym</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/KH.Abdullah.Gymnastiar</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart37">
				<script type="text/javascript">
					$(function () {
    					$('#piechart37').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent19; ?>],['Promosi',<?php echo $totalpromosi19; ?>],['Produk',<?php echo $totalproduk19; ?>],['Motivasi',<?php echo $totalmotivasi19; ?>],['Keluarga', <?php echo $totalkeluarga19; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result39 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart38">
				<script type="text/javascript">
					$(function () {
    					$('#piechart38').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi19; ?>],['Malam',<?php echo $totalmalam19; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result40 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">RaffiAhmad</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/RaffiAhmadLagi</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart39">
				<script type="text/javascript">
					$(function () {
    					$('#piechart39').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent20; ?>],['Promosi',<?php echo $totalpromosi20; ?>],['Produk',<?php echo $totalproduk20; ?>],['Motivasi',<?php echo $totalmotivasi20; ?>],['Keluarga', <?php echo $totalkeluarga20; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result41 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart40">
				<script type="text/javascript">
					$(function () {
    					$('#piechart40').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi20; ?>],['Malam',<?php echo $totalmalam20; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result42 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">RadityaDika</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/radityadikapages</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart41">
				<script type="text/javascript">
					$(function () {
    					$('#piechart41').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent21; ?>],['Promosi',<?php echo $totalpromosi21; ?>],['Produk',<?php echo $totalproduk21; ?>],['Motivasi',<?php echo $totalmotivasi21; ?>],['Keluarga', <?php echo $totalkeluarga21; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result43 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart42">
				<script type="text/javascript">
					$(function () {
    					$('#piechart42').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi21; ?>],['Malam',<?php echo $totalmalam21; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result44 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<!--PROFIL ARTIS-->
	<div class="col-md-12">
			<div class="col-md-12" >
				<dl>
					<dt class="product-spec-label">Nama Artis</dt>
					<dd class="product-spec-value">MaudyAyunda</dd>
					<dt class="product-spec-label">Akun Facebook</dt>
					<dd class="product-spec-value">www.facebook.com/AyundaFazaMaudy</dd>
				</dl>
			</div>
		
	</div>
	</div>

	<!--DATA FACEBOOK-->
	<div class="row">
		<div class="col-md-12">
			<h3>Data Facebook</h3>
			<hr>
			<div class="col-md-6 panel">
			<div class="col-md-12" id="piechart43">
				<script type="text/javascript">
					$(function () {
    					$('#piechart43').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan Kategori'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Event', <?php echo $totalevent23; ?>],['Promosi',<?php echo $totalpromosi23; ?>],['Produk',<?php echo $totalproduk23; ?>],['Motivasi',<?php echo $totalmotivasi23; ?>],['Keluarga', <?php echo $totalkeluarga23; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Event</th>
        				<th>Promosi</th>
        				<th>Produk</th>
        				<th>Motivasi</th>
        				<th>Keluarga</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result45 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
			<div class="col-md-6 panel">
				<div class="col-md-12" id="piechart44">
				<script type="text/javascript">
					$(function () {
    					$('#piechart44').highcharts({
        				chart: {
            				plotBackgroundColor: null,
            				plotBorderWidth: null,
            				plotShadow: false
        				},
        				title: {
            				text: 'Jumlah Post Berdasarkan waktu'
        				},
        				tooltip: {
            				pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        				},
        				plotOptions: {
            				pie: {
                				allowPointSelect: true,
                				cursor: 'pointer',
                				dataLabels: {
                    				enabled: true,
                    				format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    				style: {
                        				color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    				}
                				}
            				}
        				},
        				series: [{
            				type: 'pie',
            				name: 'Total',
            				data: [['Pagi', <?php echo $totalpagi23; ?>],['Malam',<?php echo $totalmalam23; ?>]]
       					 }]
    					});
					});
				</script>
			</div>
			<div class="col-md-12" style="margin:30px 0">
			<table class="table table-striped table-bordered">
    			<thead>
    				<tr>
        				<th>Pagi</th>
        				<th>Malam</th>
    				</tr>
    			</thead>
    			<tbody>
					<?php  
						foreach ($result46 as $row){
							echo "<tr>";
								foreach ($row as $data ){
									echo "<td>".$data."</td>";
								}
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
	
</div>

<?php 
	include_once('footer.php');
?>