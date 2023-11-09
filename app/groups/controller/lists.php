<?php

require_once './groups/model/groups.php';

$data = [
    'groups' => getAllGroups(),
];

view($data);