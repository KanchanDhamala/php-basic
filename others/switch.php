<?php 

$date =date('l');

switch ($date) {
    case 'Sunday':
	    echo "Time to work.";
        break;
	
    case 'Monday':
	    echo "It's alrady second day to work.";
        break;

    case 'Tuesday':
	    echo "It's going to be the half of the week soon";
        break; 
        
    case 'Wednesday':
	    echo "Just two more days";
        break;

    case 'Thursday':
	    echo " One day remaining for holiday.";
        break;

    case 'Friday':
	    echo "Just few hours then Party";
        break;

    case 'Saturday':
	    echo "Hurrah , It's a holiday.";
        break;

                                       	
	default:
        echo"{$date} is not a valid day.";
		break;
}

?>