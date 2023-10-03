<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var CAllMain|CMain $APPLICATION */
$APPLICATION->SetAdditionalCSS("/bitrix/components/my/styles/default.css"); ?>

<table class="myTable">
    <tr>
        <th>Логин</th>
        <th>Email</th>
        <th>Имя</th>
        <th>Фамилия</th>
    </tr>
    <?php
    /** @var array $arResult */
    foreach ($arResult as $user): ?>
        <tr>
            <td><?php echo $user['LOGIN'] ?></td>
            <td><?php echo $user['EMAIL'] ?></td>
            <td><?php echo $user['NAME'] ?></td>
            <td><?php echo $user['LAST_NAME'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

