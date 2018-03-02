<?php
class MySQLDatabase {

	public $last_query;

	private $_connection;
	private $_magic_quotes_active;
	private $_real_escape_string_exists;
	private $_db_extention;
	public   $_conn_info=array();

	function __construct($number=1) {

		if($number==1)
		{
			// LOCAL
            $this->_conn_info['DB_HOST'] = 'localhost';
            $this->_conn_info['DB_USER'] = 'root';
            $this->_conn_info['DB_PASS'] = '12345678';
            $this->_conn_info['DB_NAME'] = '';
		}
		$this->open_connection();
		$this->_magic_quotes_active = get_magic_quotes_gpc();
		$this->_real_escape_string_exists = function_exists( "mysql_real_escape_string" );
	}
	public function open_connection() {

		$this->_connection = mysql_connect($this->_conn_info["DB_HOST"], $this->_conn_info["DB_USER"], $this->_conn_info["DB_PASS"]);
		mysql_set_charset('utf8',$this->_connection);
		if(!$this->_connection)
		die('Database connection failed: ' . mysql_error());
		else {
			$db_select = mysql_select_db($this->_conn_info["DB_NAME"], $this->_connection);
			//mysql_set_charset('utf8',$this->_connection);
			if(!$db_select)
			die('Database selection failed: ' . mysql_error());
		}
	}
	public function DbHost()
	{
		return($this->_conn_info['DB_HOST']);

	}
	public function DbUser()
	{
		return($this->_conn_info['DB_USER']);
	}
	public function DbPass()
	{
		return($this->_conn_info['DB_PASS']);
	}
	public function DbName()
	{
		return($this->_conn_info['DB_NAME']);
	}
	public function close_connection() {
		if(isset($this->_connection)) {
			mysql_close($this->_connection);
			unset($this->_connection);
		}
	}

	public function query($sql) {
		$this->last_query = $sql;
		$result = mysql_query($sql, $this->_connection);
		$this->_confirm_query($result);
		return $result;
	}

	public function escape_value( $value ) {
		if( $this->_real_escape_string_exists ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $this->_magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$this->_magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}

	public function fetch_array($result_set) {
		return mysql_fetch_array($result_set);
	}
	public function fetch_array_name($result_set) {
		return mysql_fetch_array($result_set,MYSQL_ASSOC);
	}
	public function result($result,$row,$field) {
		return mysql_result($result,$row,$field);
	}

	public function num_rows($result_set) {
		return mysql_num_rows($result_set);
	}
	public function mysql_num_fields ($result_set) {
		return mysql_num_fields ($result_set);
	}
	public function mysql_fetch_field($result_set,$set=0) {
		$result = mysql_fetch_field($result_set,$set);
		return ($result->name);
	}
	public function mysql_field_type($result_set,$set=0) {
		$result = mysql_field_type($result_set,$set);
		return ($result);
	}

	public function insert_id() {
		// get the last id inserted over the current db connection
		return mysql_insert_id($this->_connection);
	}

	public function affected_rows() {
		return mysql_affected_rows($this->_connection);
	}

	public function get_field_by_name($result_set,$row) {
		return mysql_result($result_set,0, $row);
	}
	public function get_field_at_pos_by_name($result_set,$index,$row) {
		return mysql_result($result_set,0, $row);
	}
	private function _confirm_query($result) {
		if(!$result) {
			$output  = "Database query failed: " . mysql_error();

			// uncomment below line when you want to debug your last query
			$output .= "<br /><br />Last SQL Query: " . $this->last_query;
			die($output);
		}
	}
}
?>
