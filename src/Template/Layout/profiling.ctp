<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?= $this->Html->docType(); ?>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <?= $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no']) ?>
        <title>
            <?= $cakeDescription, ': ', $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <!-- CSS  -->
        <?=
        $this->Html->css([
            'cake.css',
            'materialize.css',
            'style.css',
            'href' => 'https://fonts.googleapis.com/icon?family=Material+Icons'
        ])
        ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <?= $this->Flash->render() ?>
        <?=
        $this->element('load'),
        $this->element('nav'),
        $this->fetch('content'),
        $this->element('footer')
        ?>
        <!--  Scripts-->
        <?php
        $this->Html->scriptStart(['block' => true, 'type' => 'text/javascript']);
        echo "jwplayer.key = \"yX6bjefwNPS4S+JqyvCIw3voUfS80iYOtc/HOA==\";";
        $this->Html->scriptEnd();
        ?>
        <?=
        $this->Html->script([
            './jquery/jquery-2.1.4.min.js',
            './bin/materialize.min.js',
            './script_materialize.js',
            './vegas/vegas.min.js',
            './jwplayer/jwplayer.js',
            './bin/materialize.min.js'
        ]),
        $this->fetch('script'),
        $this->Html->script('./bin/init.js')
        ?>
    </body>
</html>
