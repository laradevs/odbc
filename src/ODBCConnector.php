<?php namespace Laradevs\Odbc;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;
use Illuminate\Support\Arr;

class ODBCConnector extends Connector implements ConnectorInterface {

    /**
     * @param array $config
     * @return \Doctrine\DBAL\Driver\PDOConnection|\PDO
     * @throws \Exception
     */

	public function connect( array $config )
	{
		$options = $this->getOptions( $config );

		$dsn = Arr::get( $config, 'dsn' );

		return $this->createConnection( $dsn, $config, $options );
	}


}