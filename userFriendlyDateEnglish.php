//userFriendlyDateEnglish
function userFriendlyDate($date) {
    $myDate = date_create($date);
    $CurrentDate = date_create(date('Y-m-d h:i:s', time()));
    $interval = date_diff($myDate, $CurrentDate);

    if ($interval->format('%i') == 0) {

        if (($interval->format('%s') == 0) || ($interval->format('%s') == 1)) {
            return 'Just Now';
        } else {
            return $interval->format('%s Seconds ago');
        }
    } elseif ($interval->format('%h') == 0) {

        if ($interval->format('%i') == 1) {
            return $interval->format('%i Minute ago');
        } else {
            return $interval->format('%i Minutes ago');
        }
    } elseif ($interval->format('%d') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%h Hour ago');
        } else {
            return $interval->format('%h Hours ago');
        }
    } elseif ($interval->format('%m') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%d Day ago');
        } else {
            return $interval->format('%d Days ago');
        }
    } elseif ($interval->format('%y') == 0) {

        if ($interval->format('%m') == 1) {
            return $interval->format('%m Month ago');
        } else {
            return $interval->format('%m Months ago');
        }
    } else {

        return date('Y-m-d', strtotime($myDate));
    }
}
