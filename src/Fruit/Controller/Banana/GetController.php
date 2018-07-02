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
        $view = $this->input->get('view', 'banana');
        $layout = $this->input->get('layout', 'default');
        $foo = $this->input->get('foo', 'bar');

        return $this->renderView($view, $layout, 'edge', [
            'location' => 'Taiwan',
            'color' => 'warning',
            'foo' => $foo
        ]);

    }
}
