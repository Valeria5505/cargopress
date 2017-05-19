
<?
function getCopyrightYearRange($startYear){
    $today = date("Y");
    if($startYear == $today){
        return $startYear;
    }else{
        return $startYear." - ".$today;
    }
};
