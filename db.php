<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
-->

$mysql_database = getenv("MYSQL_DATABASE");
$mysql_server_name =getenv("MYSQL_HOST");
$mysql_username = getenv("MYSQL_USER");
$mysql_password = getenv("MYSQL_ROOT_PASSWORD");
$mysql_port = getenv("MYSQL_PORT");


$mysqli = new mysqli($mysql_server_name, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
}

?>
