<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;

class ProductsListComponent extends CBitrixComponent
{
    public function executeComponent(): void
    {
        $this->arResult = $this->getProductsList();
        $this->includeComponentTemplate();
    }

    private function getProductsList(): array
    {
        if (!Loader::includeModule('iblock')) {
            return [];
        }

        $iBlockId = $this->arParams['IBLOCK_ID'];
        $sectionId = $this->arParams['IBLOCK_SECTION_ID'];
        return ElementTable::getList([
            'filter' => [
                'IBLOCK_ID' => 2,
                'IBLOCK_SECTION_ID' => $sectionId,
            ],
            'select' => ['ID', 'NAME'],
        ])->fetchAll();
    }
}

