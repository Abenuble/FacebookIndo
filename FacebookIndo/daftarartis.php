<?php
    include_once('header.php');
    include_once('nav.php');
    require('conn.php');
?>
<div class="col-md-12" style="padding: 0 250px;">
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Artis</th>
        <th>Akun Facebook</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $query = 'SELECT ?label ?namaartis ?akunfb
                  WHERE {
                    ?id rdfs:label ?label;
                    foaf:name ?namaartis;
                    foaf:accountName ?akunfb;
                  }';
        $result = $sparql->query($query);
        foreach ($result as $row) {
            $label = $row->label;
            $namaartis = $row->namaartis;
            $akunfb = $row->akunfb;
            print "<tr>
                    <td>".$namaartis."</td>
                    <td><a href='https://www.facebook.com/".$akunfb."'>" . $akunfb."</a></td>
                    </tr>";
        }
    ?>
        
    </tbody>
</table>
</div>
<?php  
    include_once('footer.php');
?>