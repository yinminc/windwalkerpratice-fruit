<?php
/**
 * Part of fruit project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Fruit\View\Banana;

use Windwalker\Core\View\HtmlView;

/**
 * The BananaHtmlView class.
 *
 * @since  __DEPLOY_VERSION__
 */
class BananaHtmlView extends HtmlView
{
    /**
     * Property renderer.
     *
     * @var  string
     */
    protected $renderer = 'edge';

    /**
     * prepareData
     *
     * @param \Windwalker\Data\Data $data
     *
     * @return  void
     *
     * @since  __DEPLOY_VERSION__
     */
    protected function prepareData($data)
    {
        $date = new \DateTime($data->date);
        $date->setTimezone(new \DateTimeZone('Asia/Taipei'));

        $data->date = $date->format('Y/m/d H:i:s');

    }

}
