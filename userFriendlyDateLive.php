//userFriendlyDateLive
function userFriendlyDate_live($date) {
    $myDate = date_create($date);
    $CurrentDate = date_create(date('Y-m-d h:i:s', time()));
    $interval = date_diff($myDate, $CurrentDate);

    if ($interval->format('%i') == 0) {

        if (($interval->format('%s') == 0) || ($interval->format('%s') == 1)) {
            return 'Just Now';
        } else {
            return $interval->format('%s Seconds');
        }
    } elseif ($interval->format('%h') == 0) {

        if ($interval->format('%i') == 1) {
            return $interval->format('%i Minute');
        } else {
            return $interval->format('%i Minutes');
        }
    } elseif ($interval->format('%d') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%h Hour');
        } else {
            return $interval->format('%h Hours');
        }
    } elseif ($interval->format('%m') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%d Day');
        } else {
            return $interval->format('%d Days');
        }
    } elseif ($interval->format('%y') == 0) {

        if ($interval->format('%m') == 1) {
            return $interval->format('%m Month');
        } else {
            return $interval->format('%m Months');
        }
    } else {

        return date('Y-m-d', strtotime($myDate));
    }
}

//end of userFriendlyDate_live