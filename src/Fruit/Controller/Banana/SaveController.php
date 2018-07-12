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
     * @throws \Psr\Cache\InvalidArgumentException
     * @throws \Exception
     */
    protected function doExecute()
    {
        $id = $this->input->getInt('id');
        $title = $this->input->getString('title');
        $desc = $this->input->getString('desc');
        $mapper = new DataMapper('bananas');

        if ($id) {
            $data = $mapper->updateOne([
                'id' => $id,
                'title' => $title,
                'desc' => $desc
            ]);
        } else {
            $data = $mapper->createOne([
                'title' => $title,
                'desc' => $desc
            ]);
        }

        // 當更新或創建資料之後就會給一個成功訊息
        $this->addMessage('儲存成功', 'success');

        // 表單送出資料之後，重導向回表單並且回到同個ID項目下面
        $this->setRedirect(
            $this->router->route('banana')
        );

        return true;
    }
}
