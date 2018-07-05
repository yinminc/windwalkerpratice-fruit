<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) {YEAR} LYRASOFT. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

use Windwalker\Core\Migration\AbstractMigration;
use Windwalker\Database\Schema\Column;
use Windwalker\Database\Schema\DataType;
use Windwalker\Database\Schema\Schema;

/**
 * Migration class, version: 20180705075112
 */
class BananaInit extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->createTable('bananas', function (Schema $schema){
            $schema->primary('id');
            $schema->varchar('title');
            $schema->text('desc');
        });
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->drop('bananas');
    }
}
