<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<title>Business Permit</title>
<html id="clearance">
<link rel="stylesheet" href="../css/clearance.css">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>

<body>
    
    <div class="book">
        <div class="page">
            <div style="text-align: center">
                <div class="topleft"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                    <div class="topright"><img src="talavera.png"  style="width:230px; height: 230px;"/></div>
                        <div style="font-size: 25px; margin-top: -450px;">                  
                            Republic of the Philippines<br>
                            Province of Nueva Ecija<br>
                            Municipality of Talavera<br>
                            <p style="font-size: 32px;"><b>BARANGAY COLLADO</p></b>
                            <p style="font-size: 32px;">Office of the Punong Barangay</p>
                            <p class="title" style="font-size: 45px;"><b>BUSINESS PERMIT</b><p>
                                
                            <div class="card" style="width: 23rem; border-radius: 25px;">
                                    <div class="card-body">
                                        <h4 class="card-title">BARANGAY OFFICIALS</h4>
                                        <p></p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">PUNONG BARANGAY</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON INFRASTRUCTURE</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON PEACE & ORDER</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON HEALTH</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON APPROPRIATION</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON EDUCATION</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE IN SOCIAL SERVICE</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top: -15px;">COMMITTE ON AGRICULTURE</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-15px;">SK CHAIRPERSON/SPORTS</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-15px;">BARANGAY SECRETARY</p>
                                        <p style="font-size: 20px; margin-top: 40px;"><b>HON. MICHAEL G. MANABAT</b></p>
                                        <p style="font-size: 20px; margin-top:-15px;">BARANGAY TREASURER</p></br></br></br>
                                    </div>
                                </div>
                                <div class="main">
                                    <p style="font-size: 20px; margin-top:-1300px; right: 49px; position: relative;"><b>Sa kinauukulan,</p></b>
                                    <p style="font-size: 20px; margin-top:-150px; right: -247px; position: relative;"><b><?php date_default_timezone_set('Asia/Tokyo'); $currentDateTime = date('F j, Y - g:i:A'); echo $currentDateTime;?></p></b>
                                    <p style="font-size: 20px; margin-top:140px;">Ito ay pinapahintulot kay <b>MAIDEN AGUSTIN</b> upang mabigyan ng permiso na makapagtayo at makapag simula ng kanyang hanap buhay na <b>MAIDEN STORE</b> dito sa barangay.</p></br>
                                    <p style="font-size: 20px;">Ang kanyang hanap buhay ay matatagpuan sa <b>PUROK 5 Barangay Collado, Talavera, Nueva Ecija.</b></p></br>
                                    <p style="font-size: 20px;">Ang pahintulot na ito sa kanyang hanapbuhay ay iginawad ngayong ika <b>7th</b> ng buwan ng <b>February,</b> taong <b>2023.</b> Dito sa tanggapan ng punong barangay ng Barangay Collado, Talavera, Nueva Ecija.</p></br></br></br></br></br></br>
                                    <p style="font-size: 20px;  position: relative; left: -60px;">Nagpapatunay ni:</p>
                                    <p style="font-size: 20px;  position: relative; right: -282px; margin-top:-46px;">Inihanda ni:</p>
                                        <div style="font-size: 20px; margin-top: 90px;  position: relative; left: -62px; ">
                                            <p><b>HON. MICHAEL G. MANABAT</b></p>
                                            <p style="margin-top: -10px;">PUNONG BARANGAY</p>
                                        </div>
                                        <div style="font-size: 20px; margin-top: -82px;  position: relative; right: -280px; ">
                                            <p><b>MRS. PERLITA S. FORMENTO</b></p>
                                            <p style="margin-top: -10px;">BARANGAY SECRETARY</p>
                                        </div>
                                </div>                      
                                <p style="position: fixed;  left: 0;  bottom: 0;  width: 100%;"><b>Note: Valid until December 31, 2023 unless otherwise revoke</p></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div> 
<button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>


<script>
        function PrintElem(elem)
{
    window.print();
}

function Popup(data) 
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    //mywindow.document.write('<html><head><title>my div</title>');
    /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
    //mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
    //Set the print button visibility to 'hidden' 
    printButton.style.visibility = 'hidden';
    mywindow.document.write(data);
    //mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10

    amywindow.print();

    printButton.style.visibility = 'visible';
    mywindow.close();

    return true;
}
</script>
</html>