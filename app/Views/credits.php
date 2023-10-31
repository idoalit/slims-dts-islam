<?php

use DTSIslam\Lib\Url;
?>
<div class="menuBox">
    <div class="menuBoxInner circulationIcon">
        <div class="per_title">
            <h2><?= __('Credits'); ?> - <?= __('DTS Islam'); ?></h2>
        </div>
        <div class="infoBox">
            <?= __('Berikut ini mereka-mereka yang telah berkontribusi dalam pengembangan plugin DTS Islam'); ?>
        </div>
        <div class="sub_section">
            <div class="btn-group">
                <a href="<?= Url::adminSection('/merge'); ?>" class="btn btn-primary"><?= __('Merge subject'); ?></a>
                <a href="<?= Url::adminSection('/use'); ?>" class="btn btn-success"><?= __('Use DTS Islam'); ?></a>
                <a href="<?= Url::adminSection('/drop'); ?>" class="btn btn-danger"><?= __('Drop DTS Islam'); ?></a>
                <a href="<?= Url::adminSection('/credits'); ?>" class="btn btn-info"><?= __('Credits'); ?></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <dl class="row">
        <dt class="col-sm-3">Programmer</dt>
        <dd class="col-sm-9">Waris Agung Widodo.</dd>

        <dt class="col-sm-3">Data Coordinator</dt>
        <dd class="col-sm-9">Danang Dwijo Kangko</dd>

        <dt class="col-sm-3">Data Entry</dt>
        <dd class="col-sm-9">
            <ul class="list-unstyled">
                <li>Si A</li>
                <li>Si B</li>
                <li>Si C</li>
                <li>...</li>
            </ul>
        </dd>
    </dl>
</div>