<?php

function getCurrentDate()
{
    date_default_timezone_set('Asia/Jakarta');
    $now = date('Y-m-d H:i:s');

    return $now;
}

function getLoggedInUser($key = null)
{
    $CI = &get_instance();

    if (!$CI->session->has_userdata('email')) {
        return null;
    }

    $email = $CI->session->userdata('email');

    if ($email) {
        $check = $CI->db->get_where('candidate', ['email_candidate' => $email])->row_array();

        if ($check) {
            $check['is_admin'] = false;
            $check['is_candidate'] = true;

            if ($key) {
                if (array_key_exists($key, $check)) {
                    return $check[$key];
                } else {
                    return null;
                }
            }

            return $check;
        }

        $check = $CI->db->get_where('users', ['email' => $email])->row_array();

        if ($check) {
            $check['is_admin'] = true;
            $check['is_candidate'] = false;

            if ($key) {
                if (array_key_exists($key, $check)) {
                    return $check[$key];
                } else {
                    return null;
                }
            }

            return $check;
        }
    }

    return null;
}

function generateIdCandidate()
{
    $lastid = get_instance()->db->select('max(id_candidate) as last_id')->from('candidate')->get()->first_row()->last_id;
    $year   = date('Y');
    $month  = date('m');
    $idfmt  = 'TR{year}{month}{idx}';

    if (!$lastid) {
        // Start
        $fmt = str_replace(['{year}', '{month}', '{idx}'], [$year, $month, '001'], $idfmt);

        return  $fmt;
    }

    $last_m = substr($lastid, 6, 2);
    $last_i = substr($lastid, 8);

    if ($last_m != $month) {
        // Start
        $fmt = str_replace(['{year}', '{month}', '{idx}'], [$year, $month, '001'], $idfmt);

        return  $fmt;
    }

    $idx = str_pad((int) $last_i + 1, 3, '0', STR_PAD_LEFT);
    $fmt = str_replace(['{year}', '{month}', '{idx}'], [$year, $month, $idx], $idfmt);

    return $fmt;
}

function getCurrentUser()
{
    try {
        $CI = new CI_Model();
        $user = $CI->session->all_userdata();

        if (!empty($user)) {
            $user_data = (object) $user;
        } else {
            throw new Exception('User data not valid');
        }
    } catch (\Exception $e) {
        echo $e->getMessage();
        exit();
    }

    return $user_data;
}

/**
 * Gets the value of an environment variable
 *
 * @param string $key
 * @param mixed $default
 * @return void
 */
function env(string $key, $default = null)
{
    if (array_key_exists($key, $_ENV)) {
        return $_ENV[$key];
    }

    if (array_key_exists($key, $_SERVER)) {
        return $_SERVER[$key];
    }

    return $default;
}

function isCandidateTransfered($email)
{
    return get_instance()->db->get_where('tbl_karyawan', ['email' => $email])->num_rows() > 0;
}

function isFinalTimeline($kode_timeline)
{
    $CI =& get_instance();
    $CI->load->model('timeline_model');

    $timeline = $CI->timeline_model->getNextTimelineAfter($kode_timeline);

    if (!$timeline) {
        return true;
    }

    return false;
}

function getJenisKelaminValue($idx)
{
    $kelamineSopo = [
        1 => "LAKI LAKI",
        2 => "PEREMPUAN",
        3 => "TRANSGENDER",
        4 => "TIDAK INGIN MEMBERITAHU"
    ];

    if (array_key_exists((int) $idx, $kelamineSopo)) {
        return $kelamineSopo[$idx];
    }

    return null;
}

function getTimelineStatusValue($idx)
{
    $statuseTimeline = [
        1 => "SELEKSI",
        2 => "LOLOS",
        3 => "GAGAL"
    ];

    if (array_key_exists((int) $idx, $statuseTimeline)) {
        return $statuseTimeline[$idx];
    }

    return null;
}

function isAffectiveBatchRunning($startDate, $endDate)
{
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $currentDate = time();

    if ($currentDate >= $startDate && $currentDate <= $endDate) {
        return true;
    }

    return false;
}

/**
 * Get human readable time difference between 2 dates
 *
 * Return difference between 2 dates in year, month, hour, minute or second
 * The $precision caps the number of time units used: for instance if
 * $time1 - $time2 = 3 days, 4 hours, 12 minutes, 5 seconds
 * - with precision = 1 : 3 days
 * - with precision = 2 : 3 days, 4 hours
 * - with precision = 3 : 3 days, 4 hours, 12 minutes
 *
 * From: http://www.if-not-true-then-false.com/2010/php-calculate-real-differences-between-two-dates-or-timestamps/
 *
 * @param mixed $time1 a time (string or timestamp)
 * @param mixed $time2 a time (string or timestamp)
 * @param integer $precision Optional precision
 * @return string time difference
 */
function diffDateForHuman($time1, $time2 = 'now', $precision = 2)
{
    // If not numeric then convert timestamps
    if (!is_int($time1)) {
        $time1 = strtotime($time1);
    }

    if (is_string($time2) && $time2 === 'now') {
        $time2 = time();
    } elseif (!is_int($time2)) {
        $time2 = strtotime($time2);
    }

    // If time1 > time2 then swap the 2 values
    if ($time1 > $time2) {
        list($time1, $time2) = array( $time2, $time1 );
    }

    // Set up intervals and diffs arrays
    $intervals = array( 'year', 'month', 'day', 'hour', 'minute', 'second' );
    $diffs = array();

    foreach ($intervals as $interval) {
        // Create temp time from time1 and interval
        $ttime = strtotime('+1 ' . $interval, $time1);
        // Set initial values
        $add = 1;
        $looped = 0;
        // Loop until temp time is smaller than time2
        while ($time2 >= $ttime) {
            // Create new temp time from time1 and interval
            $add++;
            $ttime = strtotime("+" . $add . " " . $interval, $time1);
            $looped++;
        }

        $time1 = strtotime("+" . $looped . " " . $interval, $time1);
        $diffs[ $interval ] = $looped;
    }

    $count = 0;
    $times = array();
    foreach ($diffs as $interval => $value) {
        // Break if we have needed precission
        if ($count >= $precision) {
            break;
        }
        // Add value and interval if value is bigger than 0
        if ($value > 0) {
            if ($value != 1) {
                $interval .= "s";
            }
            // Add value and interval to times array
            $times[] = $value . " " . $interval;
            $count++;
        }
    }

    // Return string with times
    return implode(", ", $times);
}
