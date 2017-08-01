<?php

function CategoryBerwarna() {
	if(has_term('Sport', 'category')){
		echo '<a href="category/sport" style="color:#fff;text-decoration:none;">Sport</a>';
}elseif(has_term('Lifestyle', 'category')){
		echo '<a href="category/lifestyle" style="color:#fff;text-decoration:none;">Lifestyle</a>';
}elseif(has_term('Activity', 'category')){
		echo '<a href="category/activity" style="color:#fff;text-decoration:none;">Activity</a>';
}elseif(has_term('Cityhall', 'category')){
		echo '<a href="category/cityhall" style="color:#fff;text-decoration:none;">Cityhall</a>';
}else{
	echo "pekok";
}

}

?>