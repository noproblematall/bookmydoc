<?php
$currDate = date('Y-m-d');


Function GetDays($sStartDate, $sEndDate)
{
    $sStartDate   = gmdate("Y-m-d", strtotime($sStartDate));
    $sEndDate     = gmdate("Y-m-d", strtotime($sEndDate));
    $aDays[]      = $sStartDate;
    $sCurrentDate = $sStartDate;
    while ($sCurrentDate < $sEndDate) {
        $sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));
        $aDays[]      = $sCurrentDate;
    }
    return $aDays;
}
//print_r(GetDays('2007-01-01', '2007-01-31'));
//print_r(GetDays('2007-01-01', '2007-01-31'));
function get_days($startdate, $enddate)
{
    $begin = new DateTime(date("Y-m-d", strtotime($startdate)));
    $end   = new DateTime(date("Y-m-d", strtotime($enddate)));
    
    $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
    
    foreach ($daterange as $date) {
        $adays[] = $date->format("Y-m-d");
    }
    $adays[] = date("Y-m-d", strtotime($enddate));
    return $adays;
}
//print_r(get_times('12:45 AM', '13:00 PM'));
function get_times($starttime, $endtime)
{
    $begin = new DateTime(date("H:i", strtotime($starttime)));
    $end   = new DateTime(date("H:i", strtotime($endtime)));
    
    $timerange = new DatePeriod($begin, new DateInterval('PT900S'), $end);
    
    foreach ($timerange as $time) {
        $atimes[] = $time->format("H:ia");
    }
    $atimes[] = date("H:ia", strtotime($enddate));
    return $atimes;
}
function init($doc, $cur_date, $status)
{
    $CI =& get_instance();
    $result     = $CI->db->where('id', $doc)->get('doctor')->row_array();
    $id[]       = $result['id'];
    $t          = $result['working_time'];
    $b          = $result['break_time'];
    $v          = $result['vacation_time'];
    $docId[]    = $result['id'];
    $work[]     = json_decode($t, TRUE);
    $break[]    = json_decode($b, TRUE);
    $vecation[] = json_decode($v, TRUE);
    $count      = 0;
    foreach ($docId as $value) {
        $apntdetails = $CI->db->where('doctor_id', $value)->get('appointment')->result_array();
        foreach ($apntdetails as $keey => $valus) {
            $apnts[] = array(
                $valus['appointment_date'] => array(
                    $valus['doctor_id'] => array(
                        'start' => $valus['appointment_time'],
                        'ends' => $valus['end_time'],
                        'dates' => $valus['appointment_date']
                    )
                )
            );
            $count++;
        }
    }
    //print_r($vecation);
    foreach ($vecation as $key => $valueve) {
        $leng = count($valueve);
        for ($jk = 0; $jk < $leng; $jk++) {
            $vecation_dates[] = get_days($valueve[$jk]['startdate'], $valueve[$jk]['enddate']);
            $ve_time[]        = get_times($valueve[$jk]['starttime'], $valueve[$jk]['endtime']);
        }
    }
    //print_r($vecation_dates);
    //print_r($ve_time);
    
    $max = count($apnts);
    for ($i = 0; $i < 1; $i++) {
        if (empty($work[$i])) {
            $Date = date('Y-m-d', strtotime($currDate . ' + 0 days'));
            return get_error($Date, $work[$i], $break[$i], $id[$i], $apnts, $max);
        } else {
            if ($status == 'first') {
                $Date = date('Y-m-d', strtotime($currDate . ' + 0 days'));
                return get_week_dates($Date, $work[$i], $break[$i], $id[$i], $apnts, $max, $ve_time, $vecation_dates);
            } else if ($status == 'next') {
                $Date = date('Y-m-d', strtotime($dateCnt . ' + 5 days'));
                return get_week_dates($Date, $work[$i], $break[$i], $id[$i], $apnts, $max, $ve_time, $vecation_dates);
            } else {
                $Date = date('Y-m-d', strtotime($dateCnt . ' - 5 days'));
                return get_week_dates($Date, $work[$i], $break[$i], $id[$i], $apnts, $max, $ve_time, $vecation_dates);
            }
        }
    }
}
function calendarPeriod($firstTime, $lastTime, $breakTime, $res, $i, $apns, $max, $dateInc, $ve_time, $vecation_dates)
{
    $res         = strtolower($res);
    $brTime      = array();
    $apntTime    = array();
    $time        = $firstTime . "-" . $lastTime;
    $ve_date_len = count($vecation_dates);
    $breakmax    = count($breakTime[$res]);
    $breakMax    = count($breakTime[$res], 1);
    if ($breakMax > 2) {
        for ($j = 0; $j < $breakmax; $j++) {
            $break_start = strtotime($breakTime[$res][$j]['start']);
            $break_end   = strtotime($breakTime[$res][$j]['end']);
            $break_time  = $break_start . "-" . $break_end;
            while ($break_time < $break_end) {
                $brTime[]   = date('H:ia', $break_time);
                $break_time = strtotime('+15 minutes', $break_time);
            }
        }
    } else {
        $break_start = strtotime($breakTime[$res]['start']);
        $break_end   = strtotime($breakTime[$res]['end']);
        $break_time  = $break_start . "-" . $break_end;
        while ($break_time < $break_end) {
            $brTime[]   = date('H:ia', $break_time);
            $break_time = strtotime('+15 minutes', $break_time);
        }
    }
    /*echo "<pre>";
    print_r($breakTime);
    echo "<pre>";
    echo $dateInc;
    print_r($apns);*/
    for ($j = 0; $j < $max; $j++) {
        $apnt_start = strtotime($apns[$j][$dateInc][$i]['start']);
        $apnt_end   = strtotime($apns[$j][$dateInc][$i]['end']);
        $apnt_time  = $apnt_start . "-" . $apnt_end;
        while ($apnt_time < $apnt_end) {
            $apntTime[] = date('H:ia', $apnt_time);
            $apnt_time  = strtotime('+15 minutes', $apnt_time);
        }
    }
    //print_r($apntTime);
    $html = '';
    while ($time < $lastTime) {
        
        $Times[] = date('H:ia', $time);
        $time    = strtotime('+15 minutes', $time);
    }
    $k = 0;
    if ($ve_date_len > 0) {
        for ($vei = 0; $vei < $ve_date_len; $vei++) {
            if (in_array($dateInc, $vecation_dates[$vei])) {
                foreach ($Times as $key => $value) {
                   // if (in_array($value, $ve_time[$vei])) {
                        $tmpAry[$key] = "Vacation";
                   // }
                }
            } else {
                
                foreach ($Times as $key => $value) {
                    //echo $value."<br>";
                    
                    // 
                    if (in_array($value, $brTime)) {
                        $tmpAry[$key] = "Break";
                    } elseif (in_array($value, $apntTime)) {
                        $tmpAry[$key] = "Booked";
                    }
                    
                }
            }
        }
    } else {
        $brTime   = array();
        $apntTime = array();
        foreach ($Times as $key => $value) {
            if (in_array($value, $brTime)) {
                $tmpAry[$key] = "Break";
            } elseif (in_array($value, $apntTime)) {
                $tmpAry[$key] = "Booked";
            }
            
        }
    }
    if (!empty($tmpAry)) {
        $basket = array_replace($Times, $tmpAry);
    } else {
        $basket = $Times;
    }
    // echo "<pre>";
    // print_r($basket);
    $k = 0;
    return $basket;
}
function get_error($Date, $work, $break, $id, $apns, $max)
{
    
    
    //$data .= '<div class="" align="center" style="background: none repeat scroll 0 0 #ccc;width: 772px;text-align: center;line-height:198px;min-height: 208px;vertical-align: middle;color:blue;" >';
    $data .= "No availability these days.";
    //$data .= '</div>';
    return $data;
}
function get_week_dates($Date, $work, $break, $id, $apns, $max, $ve_time, $vecation_dates)
{
    $start = strtotime($Date);
    $data  = '';
    //print_r($work);
    //if(empty($work)){
    
    /*$data .= '<div class="calender_custom1">';
    $data .= '<div class="calender_custom1">';
    $data .= '<div class="calender_custom1">';*/
    //$data .= '<div class="calender_custom1cl">';
    
    //$data .= '<div class="" align="center" style="min-height:208px;background:red;width: 417px;text-align: center;vertical-align: middle;line-height: 200px;color:blue;" >Time Not Specified</div>';
    /*$data .= '</div>';
    $data .= '</div>';
    $data .= '</div>';*/
    //}else{
    
    for ($i = 0; $i < 5; $i++) {
        $res                     = date('D', ($start + ($i * (60 * 60 * 24))));
        $res                     = strtolower($res);
        $breakTime               = $break;
        $breakMax                = count($breakTime, 1);
        $startTime               = $work[$res]['start'];
        $endTime                 = $work[$res]['end'];
        $res                     = date('D', ($start + ($i * (60 * 60 * 24))));
        //echo $res;
        $dateInc                 = date('Y-m-d', ($start + ($i * (60 * 60 * 24))));
        $data['dates'][$dateInc] = calendarPeriod(strtotime($dateInc . " " . $startTime), strtotime($dateInc . " " . $endTime), $breakTime, $res, $id, $apns, $max, $dateInc, $ve_time, $vecation_dates);
    }
    return $data;
}
?>