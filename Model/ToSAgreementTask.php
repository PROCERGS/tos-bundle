<?php
/**
 * Created by PhpStorm.
 * User: gdnt
 * Date: 25/07/16
 * Time: 01:52
 */

namespace LoginCidadao\TOSBundle\Model;


use LoginCidadao\CoreBundle\Model\Task;

class ToSAgreementTask extends Task
{

    /**
     * @return string
     */
    public function getName()
    {
        return 'tos.agreement';
    }

    /**
     * @return array in the form ['route name', ['route' => 'params']]
     */
    public function getTarget()
    {
        return ['tos_agree', []];
    }

    /**
     * @return array
     */
    public function getTaskRoutes()
    {
        return [
            'tos_agree',
            'tos_terms',
        ];
    }

    /**
     * @return boolean
     */
    public function isMandatory()
    {
        return true;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return 9999;
    }
}
