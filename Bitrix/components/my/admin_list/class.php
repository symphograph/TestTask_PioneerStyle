<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class AdminUsersListComponent extends CBitrixComponent
{
    const adminGroupId = 1;

    public function executeComponent(): void
    {
        $this->arResult = $this->getAdminUsers();
        $this->includeComponentTemplate();
    }

    private function getAdminUsers(): array
    {
        if (!Loader::includeModule('main')) {
            return [];
        }

        $filter = [
            'GROUPS_ID' => [self::adminGroupId],
        ];

        $userDb = \CUser::GetList(
            by: 'id',
            order: 'asc',
            arFilter: $filter,
            arParams: ['SELECT' => ['ID', 'LOGIN', 'EMAIL', 'NAME', 'LAST_NAME']]
        );

        $adminUsers = [];
        while ($user = $userDb->Fetch()) {
            $adminUsers[] = $user;
        }

        return $adminUsers;
    }
}
