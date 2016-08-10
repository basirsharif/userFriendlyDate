//userFriendlyDate pashto : د کارونکي دوستانه نېټه
//userFriendlyDate 
function userFriendlyDatePashto($date) {
    $myDate = date_create($date);
    $CurrentDate = date_create(date('Y-m-d h:i:s', time()));
    $interval = date_diff($myDate, $CurrentDate);

    if ($interval->format('%i') == 0) {

        if (($interval->format('%s') == 0) || ($interval->format('%s') == 1)) {
            return 'همدا اوس';
        } else {
            return $interval->format('%s ثانی وړاندې');
        }
    } elseif ($interval->format('%h') == 0) {

        if ($interval->format('%i') == 1) {
            return $interval->format('%i دقیقه وړاندې');
        } else {
            return $interval->format('%i دقيقې وړاندې');
        }
    } elseif ($interval->format('%d') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%h ساعت وړاندې');
        } else {
            return $interval->format('%h ساعت وړاندې');
        }
    } elseif ($interval->format('%m') == 0) {

        if ($interval->format('%d') == 1) {
            return $interval->format('%d ورځ مخکې');
        } else {
            return $interval->format('%d ورځې مخکې');
        }
    } elseif ($interval->format('%y') == 0) {

        if ($interval->format('%m') == 1) {
            return $interval->format('%m مياشت مخکې');
        } else {
            return $interval->format('%m میاشتې مخکې');
        }
    } else {

        return date('Y-m-d', strtotime($myDate));
    }
}
//end of userFriendlyDate