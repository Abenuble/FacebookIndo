var htmlobjek;
    $(document).ready(function(){
        //apabila terjadi event onchange terhadap object <select id=propinsi>
        $("#provinsi").change(function(){
            var provinsi = $("#provinsi").val();
            $.ajax({
                url: "ajaxprovinsi/ambilkota.php",
                data: "provinsi="+provinsi,
                cache: false,
                success: function(msg){
                    //jika data sukses diambil dari server kita tampilkan
                    //di <select id=kota>
                    $("#kota").html(msg);
                }
            });
          });
          $("#kota").change(function(){
            var kota = $("#kota").val();
            $.ajax({
                url: "ajaxprovinsi/ambilkecamatan.php",
                data: "kota="+kota,
                cache: false,
                success: function(msg){
                    $("#kec").html(msg);
                }
            });
          });
        });