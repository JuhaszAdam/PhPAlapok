<?php

namespace DesignPatterns\Behavioral\Visitor;
require_once 'RoleVisitorInterface.php';
require_once 'Role.php';
require_once 'Group.php';
require_once 'RolePrintVisitor.php';
require_once 'Group.php';
require_once 'User.php';

$visitor = new RolePrintVisitor();
$user = new User('Bob');
$user->accept($visitor);
echo PHP_EOL;
$group = new Group('Admin');
$group->accept($visitor);
