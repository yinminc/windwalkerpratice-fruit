<?php
/**
 * Part of fruit project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Fruit\Controller\Banana;

use Windwalker\Core\Controller\AbstractController;
use Windwalker\DataMapper\DataMapper;

/**
 * The GetController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class GetController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     * @throws \Exception
     */
    protected function doExecute()
    {
        $id = $this->input->get('id');

        $view = $this->getView('banana');

        $bananaMapper = new DataMapper('bananas');

        $bananas = $bananaMapper->findOne($id);

        $view['bananas'] = $bananas;

        return $view->setLayout('form')->render();

    }
}
