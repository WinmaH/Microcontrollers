<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinika
 * Date: 7/10/18
 * Time: 11:56 AM
 */

const DEFAULT_URL = 'https://smart-trash-can-72c2d.firebaseio.com/';
const DEFAULT_TOKEN = 'fAeR6XbbJPuCpuJdkkcQl4AKJUzjjA7bTc6XgTPI';
const DEFAULT_PATH = 'smart-trash-can-72c2d/data';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);


// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/1/location');
echo $name;

?>