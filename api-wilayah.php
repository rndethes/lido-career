<?php

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'api-wilayah-indonesia');

/**
 * Join paths
 *
 * @param string ...$args
 * @return string
 */
function pathJoin(...$args)
{
    $paths = '';

    foreach ($args as $path) {
        $paths .= rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    return rtrim($paths, DIRECTORY_SEPARATOR);
}

/**
 * Load json
 *
 * @param string $file
 * @return array
 */
function loadJson(string $file)
{
    $data = file_get_contents($file);
    $data = json_decode($data, true);

    return $data;
}

/**
 * Send response
 *
 * @param integer $status
 * @param array $data
 * @return void
 */
function sendResponse(int $status, array $data)
{
    http_response_code($status);

    header("Content-type: application/json");
    header("X-Api-Powered-By: Ethes Tech");

    echo json_encode($data);
}

function handleRequest()
{
    if (!isset($_GET)) {
        return sendResponse(500, [
            'message' => 'Sorry, currently server is busy :)'
        ]);
    }

    if (!array_key_exists('s', $_GET)) {
        return sendResponse(400, [
            'message' => 'Bad Request.'
        ]);
    }

    $source = $_GET['s'];
    $scinfo = pathinfo($source, PATHINFO_EXTENSION);
    $scpath = pathJoin(ROOT_PATH, $source);

    if ('json' !== strtolower($scinfo) || strpos($scpath, ROOT_PATH) !== 0) {
        return sendResponse(403, [
            'message' => 'Access Denied.'
        ]);
    }

    $scdata = loadJson($scpath);

    if (empty($scdata)) {
        return sendResponse(404, [
            'message' => 'Resource not found.'
        ]);
    }

    return sendResponse(200, $scdata);
}

try {
    handleRequest();
} catch (Exception $err) {
    sendResponse(500, [
        'message' => 'Sorry, currently server is busy :)'
    ]);
}
