<?php
class Webpage_model extends CI_Model {
  public function dataTables($parameter)
  {
    $data = array();
    // data 1
    $data[0]['notification_topic'] ='คำร้องของท่านมีปัญหา';
    $data[0]['alert_to'] = 0;
    $data[0]['alert_status'] =0;
    $data[0]['channel'][0] =0;
    // data 2
    $data[1]['notification_topic'] ='กรุณาตรวจสอบ';
    $data[1]['alert_to'] = 1;
    $data[1]['alert_status'] = 2;
    $data[1]['channel'][0] = 0;
    $data[1]['channel'][1] = 1;
    if (count($data)-1 >=$parameter && is_numeric($parameter)) {
      $myJSON = json_encode($data[$parameter]);
      return $myJSON;
    }else if($parameter == 'all'){
      $myJSON = json_encode($data);
      return $myJSON;
    }

  }
}
