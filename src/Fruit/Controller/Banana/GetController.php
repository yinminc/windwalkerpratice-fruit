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
        $db = $this->app->database;

        $query = $db->getQuery(true);

        $id = 1;

        echo $query->select('*')
            ->from('bananas')
            ->where('%n = %q', 'id', $id)
                ->orWhere([
                    'id > 1',
                    'id < 3'
                ])
            ->order('id DESC')
            ->limit(2,0);

        $bananas = $db->setQuery($query)->loadAll();

        show($bananas);
        
        $view = $this->input->get('view', 'banana');
        $format = $this->input->get('format', 'html');
        $layout = $this->input->get('layout', 'default');
        $foo = $this->input->get('foo', 'bar');

        $view = $this->getView('Banana', $format);
        $view['location'] = 'Japan';
        $view->setLayout($layout);
        $view->set('color', 'warning');
        $view->set('foo', $foo);
        $view->set('id', $this->input->get('id'));
        $view->set('date', '2018-07-02 00:00:00');

        return $view->render();

    }
}
