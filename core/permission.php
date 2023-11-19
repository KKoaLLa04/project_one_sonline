<?php

function checkPermission($permissionData, $module, $role = 'Xem')
{
    if (!empty($permissionData)) {
        if (!empty($permissionData[$module])) {
            $moduleDetail = $permissionData[$module];

            foreach ($moduleDetail as $item) {
                if ($role == $item) {
                    return true;
                }
            }
        }
    }

    return false;
}

function getGroupId($id = 1)
{
    $sql = "SELECT * FROM teacher WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

function permissionData($groupId = 1)
{
    $sql = "SELECT * FROM groups WHERE id=$groupId";
    $data = firstRaw($sql);

    $teacher = getGroupId(1);
    $groupId = $teacher['group_id'];
    $permissionJson = $data['permission'];
    $permissionArr = json_decode($permissionJson, true);
    return $permissionArr;
}
