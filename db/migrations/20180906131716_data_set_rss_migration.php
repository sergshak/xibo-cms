<?php
/**
 * Copyright (C) 2018 Xibo Signage Ltd
 *
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class DataSetRssMigration
 */
class DataSetRssMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $table = $this->table('datasetrss');
        $table
            ->addColumn('dataSetId', 'integer')
            ->addColumn('psk', 'string', ['limit' => 254])
            ->addColumn('title', 'string', ['limit' => 254])
            ->addColumn('author', 'string', ['limit' => 254])
            ->addColumn('titleColumnId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('summaryColumnId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('contentColumnId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('publishedDateColumnId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('sort', 'text', ['null' => true, 'default' => null])
            ->addColumn('filter', 'text', ['null' => true, 'default' => null])
            ->addForeignKey('dataSetId', 'dataset', 'dataSetId')
            ->save();
    }
}
