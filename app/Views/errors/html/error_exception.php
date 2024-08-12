<?php
use CodeIgniter\HTTP\Header;
use Config\Services;
use CodeIgniter\CodeIgniter;

$errorId = uniqid('error', true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
    </style>
    <script>
        <?= file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.js') ?>
    </script>
</head>
<body onload="init()">

    <!-- Header -->
    <header>
        <div class="environment">
            Displayed at <?= esc(date('H:i:sa')) ?> &mdash;
            PHP: <?= esc(PHP_VERSION) ?> &mdash;
            CodeIgniter: <?= esc(CodeIgniter::CI_VERSION) ?> &mdash;
            Environment: <?= ENVIRONMENT ?>
        </div>
        <div class="container">
            <h1><?= esc($title) . (esc($exception->getCode() ? ' #' . $exception->getCode() : '')) ?></h1>
            <p>
                <?= nl2br(esc($exception->getMessage())) ?>
                <a href="https://www.duckduckgo.com/?q=<?= urlencode($title . ' ' . preg_replace('#\'.*\'|".*"#Us', '', $exception->getMessage())) ?>"
                   rel="noreferrer" target="_blank">search &rarr;</a>
            </p>
        </div>
    </header>

    <!-- Source -->
    <section class="container">
        <p><strong><?= esc(clean_path($file)) ?></strong> at line <strong><?= esc($line) ?></strong></p>

        <?php if (is_file($file)) : ?>
            <div class="source">
                <?= static::highlightFile($file, $line, 15); ?>
            </div>
        <?php endif; ?>
    </section>

    <!-- Exception Chain -->
    <section class="container">
        <?php
        $last = $exception;
        while ($prevException = $last->getPrevious()) {
            $last = $prevException;
        ?>
            <pre>
            Caused by:
            <?= esc($prevException::class) . (esc($prevException->getCode() ? ' #' . $prevException->getCode() : '')) ?>

            <?= nl2br(esc($prevException->getMessage())) ?>
            <a href="https://www.duckduckgo.com/?q=<?= urlencode($prevException::class . ' ' . preg_replace('#\'.*\'|".*"#Us', '', $prevException->getMessage())) ?>"
               rel="noreferrer" target="_blank">search &rarr;</a>
            <?= esc(clean_path($prevException->getFile()) . ':' . $prevException->getLine()) ?>
            </pre>
        <?php
        }
        ?>
    </section>

    <!-- Debug Information -->
    <?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE) : ?>
        <section class="container">
            <ul class="tabs" id="tabs">
                <li><a href="#backtrace">Backtrace</a></li>
                <li><a href="#server">Server</a></li>
                <li><a href="#request">Request</a></li>
                <li><a href="#response">Response</a></li>
                <li><a href="#files">Files</a></li>
                <li><a href="#memory">Memory</a></li>
            </ul>

            <div class="tab-content">

                <!-- Backtrace -->
                <div class="content" id="backtrace">
                    <ol class="trace">
                    <?php foreach ($trace as $index => $row) : ?>
                        <li>
                            <p>
                                <?php if (isset($row['file']) && is_file($row['file'])) : ?>
                                    <?php
                                    echo isset($row['function']) && in_array($row['function'], ['include', 'include_once', 'require', 'require_once'], true)
                                        ? esc($row['function'] . ' ' . clean_path($row['file']))
                                        : esc(clean_path($row['file']) . ' : ' . $row['line']);
                                    ?>
                                <?php else: ?>
                                    {PHP internal code}
                                <?php endif; ?>

                                <?php if (isset($row['class'])) : ?>
                                    &nbsp;&nbsp;&mdash;&nbsp;&nbsp;<?= esc($row['class'] . $row['type'] . $row['function']) ?>
                                    <?php if (!empty($row['args'])) : ?>
                                        <?php $argsId = $errorId . 'args' . $index ?>
                                        ( <a href="#" onclick="return toggle('<?= esc($argsId, 'attr') ?>');">arguments</a> )
                                        <div class="args" id="<?= esc($argsId, 'attr') ?>">
                                            <table cellspacing="0">
                                                <?php
                                                $params = null;
                                                if (!str_ends_with($row['function'], '}')) {
                                                    $mirror = isset($row['class']) ? new ReflectionMethod($row['class'], $row['function']) : new ReflectionFunction($row['function']);
                                                    $params = $mirror->getParameters();
                                                }
                                                foreach ($row['args'] as $key => $value) : ?>
                                                    <tr>
                                                        <td><code><?= esc(isset($params[$key]) ? '$' . $params[$key]->name : "#{$key}") ?></code></td>
                                                        <td><pre><?= esc(print_r($value, true)) ?></pre></td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </table>
                                        </div>
                                    <?php else : ?>
                                        ()
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if (!isset($row['class']) && isset($row['function'])) : ?>
                                    &nbsp;&nbsp;&mdash;&nbsp;&nbsp;<?= esc($row['function']) ?>()
                                <?php endif; ?>
                            </p>

                            <?php if (isset($row['file']) && is_file($row['file']) && isset($row['class'])) : ?>
                                <div class="source">
                                    <?= static::highlightFile($row['file'], $row['line']) ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    </ol>
                </div>

                <!-- Server -->
                <div class="content" id="server">
                    <?php foreach (['_SERVER', '_SESSION'] as $var) : ?>
                        <?php if (!empty($GLOBALS[$var]) && is_array($GLOBALS[$var])) : ?>
                            <h3>$<?= esc($var) ?></h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($GLOBALS[$var] as $key => $value) : ?>
                                        <tr>
                                            <td><?= esc($key) ?></td>
                                            <td>
                                                <?php if (is_string($value)) : ?>
                                                    <?= esc($value) ?>
                                                <?php else: ?>
                                                    <pre><?= esc(print_r($value, true)) ?></pre>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    <?php endforeach ?>

                    <?php if (!empty(get_defined_constants(true)['user'])) : ?>
                        <h3>Constants</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Key</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (get_defined_constants(true)['user'] as $key => $value) : ?>
                                    <tr>
                                        <td><?= esc($key) ?></td>
                                        <td>
                                            <?php if (is_string($value)) : ?>
                                                <?= esc($value) ?>
                                            <?php else: ?>
                                                <pre><?= esc(print_r($value, true)) ?></pre>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>

                <!-- Request -->
                <div class="content" id="request">
                    <?php $request = Services::request(); ?>
                    <table>
                        <tbody>
                            <tr>
                                <td style="width: 10em">Path</td>
                                <td><?= esc($request->getUri()) ?></td>
                            </tr>
                            <tr>
                                <td>HTTP Method</td>
                                <td><?= esc($request->getMethod()) ?></td>
                            </tr>
                            <tr>
                                <td>IP Address</td>
                                <td><?= esc($request->getIPAddress()) ?></td>
                            </tr>
                            <tr>
                                <td style="width: 10em">Is AJAX Request?</td>
                                <td><?= $request->isAJAX() ? 'yes' : 'no' ?></td>
                            </tr>
                            <tr>
                                <td>Is CLI Request?</td>
                                <td><?= $request->isCLI() ? 'yes' : 'no' ?></td>
                            </tr>
                            <tr>
                                <td>Is Secure Request?</td>
                                <td><?= $request->isSecure() ? 'yes' : 'no' ?></td>
                            </tr>
                            <tr>
                                <td>User Agent</td>
                                <td><?= esc($request->getUserAgent()->getAgentString()) ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <?php $empty = true; ?>
                    <?php foreach (['_GET', '_POST', '_COOKIE'] as $var) : ?>
                        <?php if (!empty($GLOBALS[$var]) && is_array($GLOBALS[$var])) : ?>
                            <?php $empty = false; ?>
                            <h3>$<?= esc($var) ?></h3>
                            <table style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($GLOBALS[$var] as $key => $value) : ?>
                                        <tr>
                                            <td><?= esc($key) ?></td>
                                            <td>
                                                <?php if (is_string($value)) : ?>
                                                    <?= esc($value) ?>
                                                <?php else: ?>
                                                    <pre><?= esc(print_r($value, true)) ?></pre>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    <?php endforeach ?>

                    <?php if ($empty) : ?>
                        <div class="alert">
                            No $_GET, $_POST, or $_COOKIE Information to show.
                        </div>
                    <?php endif; ?>

                    <?php $headers = $request->headers(); ?>
                    <?php if (!empty($headers)) : ?>
                        <h3>Headers</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Header</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($headers as $name => $value) : ?>
                                    <tr>
                                        <td><?= esc($name, 'html') ?></td>
                                        <td>
                                            <?php
                                            if ($value instanceof Header) {
                                                echo esc($value->getValueLine(), 'html');
                                            } else {
                                                foreach ($value as $i => $header) {
                                                    echo ' (' . ($i + 1) . ') ' . esc($header->getValueLine(), 'html');
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>

                <!-- Response -->
                <?php
                    $response = Services::response();
                    $response->setStatusCode(http_response_code());
                ?>
                <div class="content" id="response">
                    <table>
                        <tr>
                            <td style="width: 15em">Response Status</td>
                            <td><?= esc($response->getStatusCode() . ' - ' . $response->getReasonPhrase()) ?></td>
                        </tr>
                    </table>

                    <?php $headers = $response->headers(); ?>
                    <?php if (!empty($headers)) : ?>
                        <h3>Headers</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Header</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($headers as $name => $value) : ?>
                                    <tr>
                                        <td><?= esc($name, 'html') ?></td>
                                        <td>
                                            <?php
                                            if ($value instanceof Header) {
                                                echo esc($response->getHeaderLine($name), 'html');
                                            } else {
                                                foreach ($value as $i => $header) {
                                                    echo ' (' . ($i + 1) . ') ' . esc($header->getValueLine(), 'html');
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>

                <!-- Files -->
                <div class="content" id="files">
                    <?php $files = get_included_files(); ?>
                    <ol>
                        <?php foreach ($files as $file) : ?>
                            <li><?= esc(clean_path($file)) ?></li>
                        <?php endforeach ?>
                    </ol>
                </div>

                <!-- Memory -->
                <div class="content" id="memory">
                    <table>
                        <tbody>
                            <tr>
                                <td>Memory Usage</td>
                                <td><?= esc(static::describeMemory(memory_get_usage(true))) ?></td>
                            </tr>
                            <tr>
                                <td style="width: 12em">Peak Memory Usage:</td>
                                <td><?= esc(static::describeMemory(memory_get_peak_usage(true))) ?></td>
                            </tr>
                            <tr>
                                <td>Memory Limit:</td>
                                <td><?= esc(ini_get('memory_limit')) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div> <!-- /tab-content -->
        </section> <!-- /container -->
    <?php endif; ?>

</body>
</html>
