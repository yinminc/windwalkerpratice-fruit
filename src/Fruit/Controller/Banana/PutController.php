<?php
/**
 * Part of fruit project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Fruit\Controller\Banana;

use Windwalker\Core\Controller\AbstractController;

/**
 * The PutController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class PutController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     */
    protected function doExecute()
    {
        $title = $this->input->getString('title');

        $method = $this->input->getMethod();

        show($method, 'But this is Put');
    }
}
