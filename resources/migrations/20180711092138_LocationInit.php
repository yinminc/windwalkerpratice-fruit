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
 * Migration class, version: 20180711092138
 */
class LocationInit extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->createTable('locations', function (Schema $schema){
            $schema->primary('id');
            $schema->varchar('title');
            $schema->text('description');
            $schema->datetime('created');
        });

        // add location_id to banana
        $this->updateTable('bananas', function (Schema $schema){
            $schema->integer('location_id')->position('AFTER id');
        });
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->drop('locations');
    }
}
