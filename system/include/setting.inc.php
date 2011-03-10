<?php
	define('LOG_PATH', '/var/log/ember/');

	// CSRF SECURITY
	define('CSRF_LOG_FILE', LOG_PATH.'csrf-log');
	define('CSRF_FIELD', 'csrf_key');

	// EXCEPTION HANDLER
	if(isset($exception_log_file))
	{
		define('EXCEPTION_LOG_FILE', $exception_log_file);
		unset($exception_log_file);
	}
	else
		define('EXCEPTION_LOG_FILE', LOG_PATH.'exception-log');

	// DOC ROOT
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
	define('CODE_BASE', 'ember');
	$parts = explode('/', $_SERVER['DOCUMENT_ROOT']);
	array_pop($parts);
	define('CODE_BASE_ROOT', implode('/', $parts).'/');
	unset($parts);

	define('SMARTY_SYSPLUGINS_OVERLOAD_DIR', CODE_BASE_ROOT.'system/smarty/sysplugins/');

	define('TEMP_SPACE', '/tmp/');

	//used by the file uploader
	define('TEMP_UPLOAD_DIR', TEMP_SPACE . 'ember-http-uploads/');

	// no php end tag (not required- causes problems with unwanted whitespace)