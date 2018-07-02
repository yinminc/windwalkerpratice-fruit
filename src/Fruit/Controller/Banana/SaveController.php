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
 * The SaveController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SaveController extends AbstractController
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

        show($method);

        show($title, $this);
    }
}
