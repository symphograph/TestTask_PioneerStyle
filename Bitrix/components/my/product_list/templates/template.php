<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var CAllMain|CMain $APPLICATION */
$APPLICATION->SetAdditionalCSS("/bitrix/components/my/styles/default.css");
?>

<table class="myTable">
    <tr>
        <th>ID товара</th>
        <th>Название товара</th>
    </tr>
    <?php
    /** @var array $arResult */
    foreach ($arResult as $product): ?>
        <tr>
            <td><?php echo $product['ID'] ?></td>
            <td><?php echo $product['NAME'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

