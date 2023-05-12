<?php 
    include "connection.php";

    $query = "SELECT * FROM tblresident";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<title>Certificate of Good Moral</title>
<html id="clearance">
<link rel="stylesheet" href="../css/form.css">
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
                    Republic of the Philippines<br>Province of Nueva Ecija<br>Municipality of Talavera<br>
                    <p style="font-size: 32px;"><b>BARANGAY COLLADO</p></b>
                    <p style="font-size: 32px;">Office of the Punong Barangay</p>
                    <p style="font-size: 45px;"><b>CERTIFICATE OF GOOD MORAL</b><p>
                </div>
            </div>       

            <div>

                <?php 
                    $con = mysqli_connect("localhost","root","admin","barangay_system_db");

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM tblresident WHERE id='$id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <p style="font-size: 20px; margin-top: 180px;"><b>TO WHOM IT MAY CONCERN:</p></b>
                                    <p class="intro"><b>THIS IS TO CERTIFY</b> that<b> <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?>. <?php echo $row['lastname'];?>, <?php echo $row['age']; ?> years old,</b> Filipino and a bonafide resisdent of this Barangay is a law abiding citizen with no degregatory record nor any pending case filed before the Barangay Peace and Order Council of this Barangay, <b><?php echo $row['gender']; ?></b> is known to me of having a good moral character.<br></p>
                                    <p class="intro">This certification is issued upon the request of the above mention person for reference whatever legal intent or purpose it may serve.</p></br>
                                    <p class="intro">Issued this <b>7th</b> day of <b>February 2023,</b> hereat the Office of The Punong Barangay of Barangay Collado, Talavera, Nueva Ecija, Republic of the Philippines.</p></br></br></br></br>
                                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                    }
                    
                ?>

                <div>
                    <div>
                        <label style="padding-bottom: 10px">Certified by:</label>
                        <?php   
                            $qry = mysqli_query($con,"SELECT * from tblofficials WHERE status='Active' ");
                                while($row=mysqli_fetch_array($qry)){
                                    if($row['position'] == "Secretary"){
                                    echo '
                                        <p style="font-size: 18px; margin-top: 50px">
                                            <b>'.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                            <span style="text-align: center;">BARANGAY SECRETARY</span>
                                        </p>
                                    ';
                                }
                            }
                        ?>
                    </div>
                    
                    <div style="margin-top: -135px; margin-left: 38em;">
                        <label style="padding-bottom: 10px">Prepared by:</label>
                        <?php   
                            $qry = mysqli_query($con,"SELECT * from tblofficials WHERE status='Active'  ");
                                while($row=mysqli_fetch_array($qry)){
                                    if($row['position'] == "Barangay Captain"){
                                    echo '
                                        <p style="font-size: 18px; margin-top: 50px">
                                            <b>'.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'.<br></b>
                                            <span style="text-align: center;">PUNONG BARANGAY</span>
                                        </p>
                                    ';
                                }
                                
                            }
                        ?>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
    <button class="noprint" id="printpagebutton" onclick="PrintElem('#clearance')" style="position: fixed">Print</button>


</body>
   
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