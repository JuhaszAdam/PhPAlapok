<?php

namespace DesignPatterns\Behavioral\Visitor;

interface RoleVisitorInterface
{
    /**
     * @param User $role
     * @return mixed
     */
    public function visitUser(User $role);

    /**
     * @param Group $role
     * @return mixed
     */
    public function visitGroup(Group $role);
}
