<?php
if(isset($_GET['getSchlType'])){
  include "include/database.php";
  $sql = "SELECT * FROM tbl_options WHERE itemcategory = 'SCHOOL_TYPE'";
  $type_array = array();
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    $type_array[] = array(
      "schl_type" => $row['itemname'],
    );
  }
  echo json_encode($type_array);
}
if(isset($_GET['getStudType'])){
  include "include/database.php";
  $sql = "SELECT stud_type FROM tbl_studtype GROUP BY stud_type";
  $type_array = array();
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    $type_array[] = array(
      "stud_type" => $row['stud_type'],
    );
  }
  echo json_encode($type_array);
}

if(isset($_GET['getIdType'])){
    include "include/database.php";
    $type = $_GET['type'];
    $year = $_GET['year'];
    $sql = "SELECT label FROM tbl_school_id WHERE schoolyear = '$year' AND type = '$type' AND status = 'Active'";
    $idtype_array = array();
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
      $idtype_array[] = array(
        "id_type" => $row['label'],
      );
    }
    echo json_encode($idtype_array);
}

if(isset($_GET['getGradeLevel'])) {
    include "include/database.php";
    $type = $_GET['type'];
    $sql = "SELECT grade_level FROM tbl_gradetype WHERE stud_type = '$type'";
    $jhsgradelevel_array = array();
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $jhsgradelevel_array[] = array(
        "grade_level" => $row['grade_level'],
      );
    }
    echo json_encode($jhsgradelevel_array);
  }

  if(isset($_GET['getSem'])) {
    include "include/database.php";
    $type = $_GET['type'];
    $sql = "SELECT term FROM tbl_term WHERE stud_type = '$type'";
    $jhs_semester_array = array();
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $jhs_semester_array[] = array(
        "semester" => $row['term'],
      );
    }
    echo json_encode($jhs_semester_array);
  }

  if(isset($_GET['getSection'])){
    include "include/database.php";
    $grade = $_GET['grade'];
    $strand = $_GET['strand'];
    $section_array = array();
    $sql ="SELECT * FROM tbl_section WHERE grade_level LIKE '%$grade%' AND strand LIKE '%$strand%'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $section_array[] = array(
        "section" => $row['section'],
      );
    }
    echo json_encode($section_array);
  }


  //No current consolidated grade table to connect to reference the grades with to for the enrollemnt
  if(isset($_GET['getGradeReq'])){
    include "include/database.php";
    $studType = $_GET['type'];
    $studId = $_GET['stud_id'];
    $grade_array = array();
  
    $sql = "SELECT * FROM tbl_general_avg WHERE student_id = '$studId'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
      $grade = $row['gen_avg'];
      if ($studType == "JHS"){
        $sql2 = "SELECT jhspassgrade FROM tbl_configuration";
      } else if ($studType == "SHS"){
        $sql2 = "SELECT shspassgrade FROM tbl_configuration";
      }
      $result2 = $conn->query($sql2);
      while ($row2 = $result2->fetch_assoc()){
        if ($studType == "JHS"){
          $passingGrade = $row2['jhspassgrade'];
        } else if ($studType == "SHS"){
          $passingGrade = $row2['shspassgrade'];
        }
      }
    }
  }

  if(isset($_GET['getTuition'])){
    include "include/database.php";
    $type = $_GET['type'];
    $grade = $_GET['grade'];
    $track = $_GET['track'];
    $strand = $_GET['strand'];
    $sem = $_GET['semester'];
    $sql = "SELECT fee FROM tbl_program_fees WHERE grade_level LIKE '$grade' AND type LIKE '$type' AND track LIKE '$track' AND strand LIKE '$strand' AND term LIKE '$sem'";
    $tuition_array = array();
    $result = $conn->query($sql);
    if($result->num_rows > 0){ // Check if there are any rows returned by the query
      $sql2 = "SELECT SUM(misc_amount) FROM tbl_misc_fee";
      $result2 = $conn->query($sql2);
      $row2 = $result2->fetch_row();
      $sum = $row2[0]; // Assign the sum of misc fees to a variable
    }
    else{
      $sum = 0; // If no rows are returned, set the misc fee sum to 0
    }
    while($row = $result->fetch_assoc()) {
      $total = $row['fee'] + $sum;
      $tuition_array[] = array(
        "tuition" => $row['fee'],
        "misc" => $sum,
        "total" => $total,
      );
    }
    echo json_encode($tuition_array);
}

  if(isset($_GET['getVouchAmount'])) { 
    include "include/database.php";
    $discount = $_GET['discount'];
    $discount_array = array();
    $sql = "SELECT amount FROM tbl_discount WHERE discount_id = '$discount'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $discount_array[] = array(
        "amount" => $row['amount'],
      );
    }
    echo json_encode($discount_array);
  }

  if(isset($_GET['getSchoAmount'])) { 
    include "include/database.php";
    $discount = $_GET['discount'];
    $discount_array = array();
    $sql = "SELECT amount FROM tbl_discount WHERE discount_id = '$discount'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $discount_array[] = array(
        "amount" => $row['amount'],
      );
    }
    echo json_encode($discount_array);
  }

  if(isset($_GET['getTuitionRecord'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $tuition_array = array();
    $sql = "SELECT * FROM tbl_program_fees_history WHERE schoolyear = '$schoolyear'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $tuition_array[] = array(
        "schoolyear" => $row['schoolyear'],
        "program" => $row['program'],
        "grdlvl" => $row['grade_level'],
        "type" => $row['type'],
        "track" => $row['track'],
        "strand" => $row['strand'],
        "term" => $row['term'],
        "fee" => $row['fee'],
      );
    }
    echo json_encode($tuition_array);
  }

  if(isset($_GET['getMiscRecord'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $misc_array = array();
    $sql = "SELECT * FROM tbl_misc_fee_history WHERE schoolyear = '$schoolyear'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $misc_array[] = array(
        "schoolyear" => $row['schoolyear'],
        "miscN" => $row['misc_name'],
        "miscD" => $row['misc_description'],
        "miscA" => $row['misc_amount'],
      );
    }
    echo json_encode($misc_array);
  }

  if(isset($_GET['getOtrRecord'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $otr_array = array();
    $sql = "SELECT * FROM tbl_other_fee_history WHERE schoolyear = '$schoolyear'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $otr_array[] = array(
        "schoolyear" => $row['schoolyear'],
        "otrN" => $row['otrf_name'],
        "otrA" => $row['otrf_amount'],
      );
    }
    echo json_encode($otr_array);
  }

  if(isset($_GET['getVoucherRecord'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $vouch_array = array();
    $sql = "SELECT * FROM tbl_discount_history WHERE schoolyear = '$schoolyear' && discount_type = 'Voucher'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $vouch_array[] = array(
        "schoolyear" => $row['schoolyear'],
        "vouchname" => $row['discount_name'],
        "amount" => $row['amount'],
        "desc" => $row['description'],
        "esc" => $row['esc_id'],
        "type" => $row['stud_type'],
        
      );
    }
    echo json_encode($vouch_array);
  }

  if(isset($_GET['getDiscountRecord'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $discount_array = array();
    $sql = "SELECT * FROM tbl_discount_history WHERE schoolyear = '$schoolyear' && discount_type = 'Discount/Scholarship'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $discount_array[] = array(
        "schoolyear" => $row['schoolyear'],
        "discname" => $row['discount_name'],
        "disctype" => $row['discount_type'],
        "amount" => $row['amount'],
        "desc" => $row['description'],
        "custAmt" => $row['customAmount'],
        "referral" => $row['referral'],
        "remarks" => $row['remarks'],
        "approval" => $row['approval'],
        "rank1" => $row['rank1'],
        "askianid" => $row['askian_id'],
        "prcntAmt" => $row['percentageAmount'],
        "lessTuition" => $row['lessInTuition'],
        "esc" => $row['esc_id'],
        
      );
    }
    echo json_encode($discount_array);
  }

  if(isset($_GET['getRecords'])){
    include "include/database.php";
    $schoolyear = $_GET['schoolyear'];
    $records_array = array();
    $sql = "SELECT * FROM tbl_enrolled_student WHERE schoolyear = '$schoolyear'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $sql2 = "SELECT * FROM tbl_studentinfo WHERE student_id = '$row[student_id]'";
      $result2 = $conn->query($sql2);
      while ($row2 = $result2->fetch_assoc()){
        $sql3 = "SELECT *, CONCAT_WS(', ',
        IF(voucherName = '', NULL, voucherName),
        IF(discountName = '', NULL, discountName),
        IF(discountReq = '', NULL, discountReq),
        IF(discountRemarks = '', NULL, discountRemarks)
      ) AS concat_remarks FROM tbl_enrolled_payment_fees WHERE student_id = '$row[student_id]'";
        $result3 = $conn->query($sql3);
        
        while ($row3 = $result3->fetch_assoc()){
          $records_array[] = array(
            "series" => $row2['series'],
            "studentid" => $row['student_id'],
            "grade_lvl" => $row['grade_lvl'],
            "sex" => $row['sex'],
            "fullname" => $row['fullname'],
            "enroll_type" => $row['enroll_type'],
            "moniker" => $row3['moniker'],
            "tuitionDiscount" => $row3['tuitionDiscount'],
            "concatRemarks" => $row3['concat_remarks'],
            "vouchName" => $row3['voucherName'],
            "discName" => $row3['discountName'],
            "discReq" => $row3['discountReq'],
            "discRemarks" => $row3['discountRemarks'],
            "from" => $row2['last_school_attended'],
            "date" => $row['date_enrolled'],
            "payment" => $row3['amountPaid'],
          );
        }
      }
    }
    echo json_encode($records_array);
  }
  

  if(isset($_GET['schedule'])) {
    include "include/database.php";
    $term = $_GET['term'];
    $type = $_GET['type'];
    $strand = $_GET['strand'];
    $gradelevel = $_GET['grade'];
    $section = $_GET['section'];
    $schedule_array = array();
    if($type == "JHS") {
      $sql = "SELECT * FROM tbl_schedule WHERE stud_type LIKE '%$type%' AND strand LIKE '%$strand%' AND grade_level LIKE '%$gradelevel%' AND section LIKE '%$section%' ORDER BY grade_level DESC";
    } elseif($type == "SHS") {
      $sql = "SELECT * FROM tbl_schedule WHERE stud_type LIKE '%$type%' AND strand LIKE '%$strand%' AND grade_level LIKE '%$gradelevel%' AND section LIKE '%$section%' AND term LIKE '%$term%' ORDER BY grade_level DESC";
    }
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $daytime = array();
      $scheduleno = $row['schedule_no'];
      $sql2 = "SELECT sched_day, sched_time, sched_room FROM tbl_schedule_day WHERE schedule_no = '$scheduleno'";
      $result2 = $conn->query($sql2);
      while($row2 = $result2->fetch_assoc()) {
        $daytime[] = "$row2[sched_day] $row2[sched_time] ($row2[sched_room]) <br />";
      }
      $subjectcode = $row['subject_code'];
      $descriptiontitle = $row['description_title'];
      $numhour = $row['numhour'];
      $teachername = $row['teacher_name'];
      $strandResult = $row['strand'];
      $gradelevelResult = $row['grade_level'];
      $sectionResult = $row['section'];
      $termResult = $row['term'];
      $stud_type = $row['stud_type'];
      $schedule_array[] = array(
        "scheduleno" => $scheduleno,
        "subjectcode" => $subjectcode,
        "descriptiontitle" => $descriptiontitle,
        "numhour" => $numhour,
        "daytime" => $daytime,
        "teachername" => $teachername,
        "strandResult" => $strandResult,
        "gradelevelResult" => $gradelevelResult,
        "sectionResult" => $sectionResult,
        "typeResult" => $stud_type,
        "termResult" => $termResult,
      );
    }
    echo json_encode($schedule_array);
}

if(isset($_GET['getProv'])){
  include "include/database.php";
  $region = $_GET['region'];
  $province_array = array();
  $sql = "SELECT DISTINCT region_id, region_name FROM tble_region WHERE region_name = '$region'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $regionId = $row['region_id'];
    $sql2 = "SELECT DISTINCT region_id, province_name FROM tble_province WHERE region_id = '$regionId'";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    while($row2 = $result2->fetch_assoc()) {
      $province_array[] = array(
        "province" => $row2['province_name'],
      );
    }
  }
  echo json_encode($province_array);
}

if(isset($_GET['getCity'])){
  include "include/database.php";
  $province = $_GET['prov'];
  $city_array = array();
  $sql = "SELECT DISTINCT province_id, province_name FROM tble_province WHERE province_name = '$province'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $provinceId = $row['province_id'];
    $sql2 = "SELECT DISTINCT province_id, municipality_name FROM tble_municipality WHERE province_id = '$provinceId'";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    while($row2 = $result2->fetch_assoc()) {
      $city_array[] = array(
        "cityN" => $row2['municipality_name'],
      );
    }
  }
  echo json_encode($city_array);
}

if(isset($_GET['getBrgy'])){
  include "include/database.php";
  $city = $_GET['city'];
  $city_array = array();
  $sql = "SELECT DISTINCT municipality_id, municipality_name FROM tble_municipality WHERE municipality_name = '$city'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $municipalityId = $row['municipality_id'];
    $sql2 = "SELECT DISTINCT municipality_id, barangay_name FROM tble_barangay WHERE municipality_id = '$municipalityId'";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    while($row2 = $result2->fetch_assoc()) {
      $city_array[] = array(
        "brgyN" => $row2['barangay_name'],
      );
    }
  }
  echo json_encode($city_array);
}

if(isset($_GET['getOtrOptions'])){
  include "include/database.php";
  $otr_array = array();
  $sql = "SELECT * FROM tbl_other_fee";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

  while($row = $result->fetch_assoc()) {
    $otr_array[$row['otrf_id']] = $row['otrf_name'];
  }
  echo json_encode($otr_array);
}

// if(isset($_GET['getOtrAmount'])){
//   include "include/database.php";
//   $id = $_GET['id'];
//   $otramt_array = array();
//   $sql = "SELECT * FROM tbl_other_fee WHERE otrf_d ='$id'";
//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
//   $result = $stmt->get_result();
//   while($row = $result->fetch_assoc()) {
//     $otramt_array[] = array(
//       "amount" => $row['otrf_amount'],
//       );
//   }
//   echo json_encode($otramt_array);
// }
?>