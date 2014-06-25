<?php
$brighton_filename = 'brighton.json';
$london_filename = 'london.json';
$brighton = $london = null;

$get_weathers = function() {

    $brighton_filename = 'brighton.json';
    $london_filename = 'london.json';

    try {
        unlink($brighton_filename);
        unlink($london_filename);
    }catch (Exception $e) {}

    $brighton = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Brighton,uk&units=metric');
    $london = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London,uk&units=metric');

    file_put_contents($london_filename, $london, LOCK_EX);
    file_put_contents($brighton_filename, $brighton, LOCK_EX);
};


if (file_exists($brighton_filename)):
    $modified_time = date("i", filemtime($brighton_filename));
    if ($modified_time - date("i", time()) > 240): // 4 hours
        $get_weathers();
    endif;
else:
    $get_weathers();
endif;
$brighton = json_decode(file_get_contents($brighton_filename));
$london = json_decode(file_get_contents($london_filename));
$london->alternate = 'Brighton';
$brighton->alternate = 'London';
$cities = array($brighton, $london);
?>
<?php if (property_exists($london, 'name') && property_exists($brighton, 'name')): ?>
    <div class="weather-info">
        <div class="temperature-info <?php echo $brighton->name ?>" style="display: none;">
            <span class="city-name"><?php echo $brighton->name ?></span>
            <img src="<?php bloginfo('template_url'); ?>/images/w/<?php echo $brighton->weather[0]->icon ?>.png" class="image-weather" alt="<?php echo $brighton->weather[0]->description ?>" title="<?php echo $brighton->weather[0]->description ?>">
            <span class="temperature"><?php echo intval($brighton->main->temp, 10) ?> &deg;C</span>
        </div>
        <span class="weather-type toggle-weather" style="display: none;"><a href="#"><?php echo $brighton->alternate ?></a></span>
        <div class="temperature-info <?php echo $london->name ?>">
            <span class="city-name"><?php echo $london->name ?></span>
            <img src="<?php bloginfo('template_url'); ?>/images/w/<?php echo $london->weather[0]->icon ?>.png" class="image-weather" alt="<?php echo $london->weather[0]->description ?>" title="<?php echo $london->weather[0]->description ?>">
            <span class="temperature"><?php echo intval($london->main->temp, 10) ?> &deg;C</span>
        </div>
        <span class="weather-type toggle-weather"><a href="#"><?php echo $london->alternate ?></a></span>
    </div>
<?php
else:
    $get_weathers();
endif;
?>