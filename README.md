<p align="center"><img src="https://avatars2.githubusercontent.com/u/51764637?s=200&v=4" height="240"></p>

# Laravel ODBC Connector

This is a simple ODBC connector for Laravel.

### Installation
Add this to the require section in your composer.json file
```
composer require "laradevs/odbc"
```

Now in your config/database.php...
```
......
'odbc'   => [
	'driver'   => 'odbc',
	'dsn'      => 'odbc:DB_CONNECTION_STRING', //
	'host'     => 'DB_HOST',
	'database' => 'DB_NAME,
	'username' => 'DB_USERNAME',
	'password' => 'DB_PASSWORD',
],
....
```

#### Custom Grammar
To use SQL Server or other database engines, set the grammar in the config:
```
'odbc'   => [
	...
	'grammar' => [
		'query' => Illuminate\Database\Query\Grammars\SqlServerGrammar::class,
		'schema' => Illuminate\Database\Schema\Grammars\SqlServerGrammar::class,
	],
],
```
