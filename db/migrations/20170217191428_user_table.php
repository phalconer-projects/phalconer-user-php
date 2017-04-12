<?php

use Phinx\Migration\AbstractMigration;

class UserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('user')
            ->addColumn('name', 'string', ['limit' => 255, 'collation' => 'utf8_unicode_ci'])
            ->addColumn('email', 'string', ['limit' => 255, 'collation' => 'utf8_unicode_ci', 'null' => true])
            ->addColumn('password_hash', 'string', ['limit' => 60, 'collation' => 'utf8_unicode_ci'])
            ->addIndex(['name'], ['unique' => true])
            ->addIndex(['email'], ['unique' => true])
            ->create();
    }
}
