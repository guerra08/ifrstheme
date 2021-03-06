<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    theme_academi
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @authors    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$numberofslides = 1;

if ($numberofslides) { ?>

<div class="theme-slider">
  <div id="home-page-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <?php for($s=0;$s<$numberofslides;$s++):
					       $cls_txt = ($s=="0")?' class="active"':'';
					?>
     <li data-target="#home-page-carousel" data-slide-to="<?php echo $s; ?>" <?php echo $cls_txt; ?>></li>
					<?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

     <?php for( $s1=1; $s1<=$numberofslides; $s1++) :
								$cls_txt2 = ($s1=="1")?' active' : '';
								$slidecaption = theme_academi_get_setting('slide' . $s1 . 'caption', true);
								$slidedesc = theme_academi_get_setting('slide' . $s1 . 'desc','format_html');

								$slideimg = 'https://moodle.ifrs.edu.br/pluginfile.php/1/theme_ifrs_academi/slide1image/1496277486/MoodleFoto3.jpg';

					?>
      <div class="carousel-item<?php echo $cls_txt2; ?>" style="background-image: url(<?php echo $slideimg; ?>);">
          <div class="carousel-overlay-content container-fluid">
           
              <div class="content-wrap">
                  <?php if(!empty($slidecaption)){ ?>
              <h2><?php echo $slidecaption; ?></h2><br>
              <?php } ?>
              <?php echo $slidedesc; ?>
            </div>
          </div>
      </div>
      <?php endfor; ?>

    </div>

      <a class="left carousel-control" href="#home-page-carousel" data-slide="prev"></a>
      <a class="right carousel-control" href="#home-page-carousel" data-slide="next"></a>

  </div>
</div>
<!--E.O.Slider-->



<?php } ?>