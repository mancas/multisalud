<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->meta('description', 'Centro Multisalud: Especialistas en psicología, fisioterapia, nutrición y dietética, podología, medicina natural, acupuntura y análisis clínicos');

        echo $this->Html->css(array('bootstrap.min', 'main', 'font-awesome.min', 'open-sans'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCGqvjREs8byd_h8OIF7PGNUsgH0M8CIl0&sensor=false');
    ?>
</head>
<body id="home" data-spy="scroll" data-target=".multisalud-navbar">
    <?php echo $this->element('navbar'); ?>

    <div id="wrap" class="clearfix">
        <?php echo $this->element('carrousel'); ?>
        <?php echo $this->fetch('content'); ?>
    </div>

    <?php echo $this->fetch('script'); ?>
</body>
</html>
