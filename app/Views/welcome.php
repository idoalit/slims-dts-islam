<?php

/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 26/06/2021 2:26
 * @File name           : welcome.php
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */
?>

<div class="menuBox">
    <div class="menuBoxInner circulationIcon">
        <div class="per_title">
            <h2><?= __('DTS Islam'); ?></h2>
        </div>
        <div class="infoBox">
            <?= __('Daftar tajuk subjek Islam'); ?>
        </div>
        <div class="sub_section">
            <div class="btn-group">
                <a href="<?= $_SERVER['PHP_SELF']; ?>" class="btn btn-primary"><?= __('Merge subject'); ?></a>
                <a href="<?= $_SERVER['PHP_SELF']; ?>" class="btn btn-success"><?= __('Use DTS Islam'); ?></a>
                <a href="<?= $_SERVER['PHP_SELF']; ?>" class="btn btn-danger"><?= __('Drop DTS Islam'); ?></a>
                <a href="<?= $_SERVER['PHP_SELF']; ?>" class="btn btn-info"><?= __('Credits'); ?></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1><?= $topic_count ?></h1>
                        <div>Subject</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1><?= $relation_count ?></h1>
                        <div>Relation</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1><?= $topic_related_count ?></h1>
                        <div>Related Subjects</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>