<?php namespace LaraDevs\Odbc;

use Illuminate\Database\Connection;

class ODBCConnection extends Connection {

    /**
     * @return \Illuminate\Database\Grammar|\Illuminate\Database\Query\Grammars\Grammar
     */
	protected function getDefaultQueryGrammar()
	{
		$class = config('database.connections.odbc.grammar.query') ?: ODBCQueryGrammar::class;
		return $this->withTablePrefix( new $class );
	}

    /**
     * @return \Illuminate\Database\Grammar|\Illuminate\Database\Schema\Grammars\Grammar
     */
	protected function getDefaultSchemaGrammar()
	{
		$class = config('database.connections.odbc.grammar.schema') ?: ODBCSchemaGrammar::class;
		return $this->withTablePrefix( new $class );
	}

}
