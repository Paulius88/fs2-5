<?php

require_once 'definitions.php';
function generateRandomCode(int $leght =6): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomCode = '';

  for ($i = 0; $i < $lenght; $i++) {
    $randomCode .= $characters [rand(0, $charactersLength - 1)];
  }

  return $randomCode;

}

function getFullProjectPath(): string
{
    $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $port = $_SERVER['SERVER_PORT'] ? ':' . $_SERVER['SERVER_PORT'] : '';
    $dir = dirname($_SERVER['REQUEST_URI']) ?? '';

    return $protocol . $host . $port . $dir;
}

function addHttpProtocol($url)
{
    if (!preg_match('~^(?:f|ht)tps?://~i', $url)) {
        $url = 'http://' . $url;
      }

      return $url;
    }

    function filterRedirectsByIp(array $redirects, string $ip):array
    {
      $result = [];

      foreach ($redirects as $redirect) {
        if ($redirect['ip'] === $ip) {
          $results[] = $redirect;
        }
      }

      return $result;

    }
    function sortRedirectsByTimestamp(array $redirects): array
{
    usort($redirects, function($a, $b) {
        return $b['timestamp'] <=> $a['timestamp'];
    });

    return $redirects;
}

function isAllowedToCreateRedirect(array $redirects, string $ip): bool
{
    $redirects = filterRedirectsByIp($redirects, $ip);
    $redirects = sortRedirectsByTimestamp($redirects);

    if (count($redirects) >= MAX_REDIRECTS_PER_MINUTE) {
        $currentTimestamp = time();
        $oldTimestamp = $redirects[MAX_REDIRECTS_PER_MINUTE - 1]['timestamp'];
        $diff = $currentTimestamp - $oldTimestamp;

        if ($diff < 60) {
            return false;
        }
    }

    return true;
}

function throwError($code = null)
{
    $_SESSION['error'] = $code;


    header("Location: index.php");
}





 ?>
