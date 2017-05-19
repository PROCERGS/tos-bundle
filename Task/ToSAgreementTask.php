<?php
/**
 * This file is part of the login-cidadao project or it's bundles.
 *
 * (c) Guilherme Donato <guilhermednt on github>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LoginCidadao\TOSBundle\Task;

use LoginCidadao\TaskStackBundle\Model\AbstractTask;
use LoginCidadao\TaskStackBundle\Model\RouteTaskTarget;
use LoginCidadao\TaskStackBundle\Model\TaskTargetInterface;

class ToSAgreementTask extends AbstractTask
{
    /** @var RouteTaskTarget */
    private $target;

    /**
     * ToSAgreementTask constructor.
     */
    public function __construct()
    {
        $this->target = new RouteTaskTarget('tos_agree');
    }

    /**
     * @return array
     */
    public function getRoutes()
    {
        return [
            'tos_agree',
            'tos_terms',
        ];
    }

    /**
     * @return TaskTargetInterface
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return boolean
     */
    public function isMandatory()
    {
        return true;
    }

    /**
     * Returns a value that can be used to identify a task. This is used to avoid repeated Tasks in the TaskStack.
     *
     * If a Task is specific to a given RP this method could return something like {TASK_NAME}_{RP_ID}
     *
     * @return string
     */
    public function getId()
    {
        return 'tos.agreement';
    }
}
