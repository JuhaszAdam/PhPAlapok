<?php

namespace DesignPatterns\Behavioral\Visitor;

abstract class Role
{
    /**
     * @param RoleVisitorInterface $visitor
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        $klass = get_called_class();
        preg_match('#([^\\\\]+)$#', $klass, $extract);
        $visitingMethod = 'visit' . $extract[1];
        if (!method_exists(__NAMESPACE__ . '\RoleVisitorInterface', $visitingMethod)) {
            throw new \InvalidArgumentException("The visitor you provide cannot visit a $klass instance");
        }
        call_user_func(array($visitor, $visitingMethod), $this);
    }
}
