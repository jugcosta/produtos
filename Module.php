<?php

/*
 * This file is part of the Jugcosta project.
 *
 * (c) Jugcosta project <http://github.com/jugcosta/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jugcosta\produtos;

use yii\base\Module as BaseModule;

/**
 * This is the main module class for the Produtos.
 *
 * @property array $admins
 *
 * @author Juliana Costa <jugcosta@ymail.com>
 */
class Module extends BaseModule
{
	const VERSION = 'beta';
	const MODULE = "produtos";
	
	public function run()
    {
        return "Hello!";
    }

	/** @var array Model map */
    public $modelMap = [];

    /**
     * @var string The prefix for user module URL.
     *
     * @See [[GroupUrlRule::prefix]]
     */
    public $urlPrefix = 'produtos';
	
	/** @var string The database connection to use for models in this module. */
    public $dbConnection = 'db';
	
	public $admins[];
	
	  /**
     * @return string
     */
    public function getDb()
    {
        return \Yii::$app->get($this->dbConnection);
    }
	
}