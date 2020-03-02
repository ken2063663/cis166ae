<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manipulate Strings</title>
</head>
<body>
<?php echo strlen("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at maximus sem, ut dignissim nibh. Phasellus iaculis sed metus in laoreet. Nullam bibendum molestie augue ut ullamcorper. Vestibulum ut mattis diam, nec sollicitudin libero. Integer turpis nisi, efficitur pellentesque bibendum vel, venenatis sed sapien. Ut vitae maximus dui. Nullam nec accumsan leo. Nullam non tortor lobortis, tincidunt dui sed, placerat felis. Donec convallis id nisl ultrices luctus. Cras convallis iaculis diam, quis congue ex lobortis vel."); ?>
<br>
<?php echo str_word_count("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at maximus sem, ut dignissim nibh. Phasellus iaculis sed metus in laoreet. Nullam bibendum molestie augue ut ullamcorper. Vestibulum ut mattis diam, nec sollicitudin libero. Integer turpis nisi, efficitur pellentesque bibendum vel, venenatis sed sapien. Ut vitae maximus dui. Nullam nec accumsan leo. Nullam non tortor lobortis, tincidunt dui sed, placerat felis. Donec convallis id nisl ultrices luctus. Cras convallis iaculis diam, quis congue ex lobortis vel."); ?>
<br>
<?php echo strstr("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at maximus sem, ut dignissim nibh. Phasellus iaculis sed metus in laoreet. Nullam bibendum molestie augue ut ullamcorper. Vestibulum ut mattis diam, nec sollicitudin libero. Integer turpis nisi, efficitur pellentesque bibendum vel, venenatis sed sapien. Ut vitae maximus dui. Nullam nec accumsan leo. Nullam non tortor lobortis, tincidunt dui sed, placerat felis. Donec convallis id nisl ultrices luctus. Cras convallis iaculis diam, quis congue ex lobortis vel.", "bibendum"); ?>
</body>
</html>