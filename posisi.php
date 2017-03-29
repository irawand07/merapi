  <?php
   $tampil='on';

  ?>
  
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Merapi</title>
    
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOhnHYAnmoJUrJ7voXysccnxc1yUa2mcM"
  type="text/javascript"></script>

    <script type="text/javascript">

	//======= memilih ukuran ikon
   var ikonPilih = {
        1: {
           ikonEndi: 'gede.png'
         },
        2: {
           ikonEndi: 'sedeng.png'
         },

        3: {
           ikonEndi: 'cilik.png'
         }
   				 };
   	//-----------------------------



function bacaPeta() {

//PusaT peta
var lintang=-9.542;
var bujur=110.445;
//===========membuat obyek 	peta
var petaKu = new google.maps.Map(document.getElementById("posisiPeta"), {
        center: new google.maps.LatLng(lintang, bujur),
        zoom: 0,
        mapTypeId: 'hybrid'
      });
//------------akhir obyek peta


//==========================buat poligon dari KML ================================
var plg=new google.maps.KmlLayer({
			url:'http://www.merapi.pe.hu/merapi.kml'
								});
plg.setMap(petaKu);
//----akhir poligon

<?php
if($tampil=='on')
{
	?>


//================================================================================================
//---bagian program dibawah ini untuk membaca dan menampilkan marker/infowindow dari database ----
//=================================================================================================
  var infoWindow = new google.maps.InfoWindow;


      //============= awal download URL  ==========================
      downloadUrl("lihat_posisi.php", function(data) {
        var xml = data.responseXML;
        var posisi2 = xml.documentElement.getElementsByTagName("posisi");




        for (var i = 0; i < posisi2.length; i++) {
          var nama = posisi2[i].getAttribute("nama");
          var alamat = posisi2[i].getAttribute("alamat");
			    var titik = new google.maps.LatLng(
        	   			   parseFloat(posisi2[i].getAttribute("lintang")),parseFloat(posisi2[i].getAttribute("bujur")));
			var daya = posisi2[i].getAttribute("daya");

          var html = "<div class='alert'><b>" + nama + "</b><hr><u>Alamat:</u> "+alamat+"<br/><u>Daya Tampung:</u> "+daya+" Orang</div>";


				if(daya>400)
					   var ikon = ikonPilih['1'] || {};
				  else if(daya>=200)
				   		var ikon = ikonPilih['2'] || {};
			       else if(daya<200)
			       		  var ikon = ikonPilih['3'] || {};



          var tondo = new google.maps.Marker({
            map:petaKu,
            position: titik,
            icon: ikon.ikonEndi
          });
          bindInfoWindow(tondo, petaKu, infoWindow, html);
        }
      });
      //----------------akhir dowanload URL ------------------------------
		<?php
		}//akhri if	
		?>

    }

    function bindInfoWindow(tondo, petaKu, infoWindow, html)
    {
      google.maps.event.addListener(tondo, 'mouseover', function() {
		infoWindow.setContent(html);
        infoWindow.open(petaKu, tondo);
      });

        google.maps.event.addListener(tondo, 'mouseout', function() {
	  		infoWindow.close();
	        });

    }


    function downloadUrl(url, callback) {
      var jaluk = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      jaluk .onreadystatechange = function() {
        if (jaluk .readyState == 4) {
          jaluk .onreadystatechange = doNothing;
          callback(jaluk, jaluk.status);
        }
      };

      jaluk .open('GET', url, true);
      jaluk .send(null);
    }


    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onload="bacaPeta()">
    <div id="posisiPeta" style="width: 100%; height: 90%"></div>

   </body>

</html>







