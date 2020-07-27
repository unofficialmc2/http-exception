<?php
declare(strict_types=1);
/**
 * @author Fabien Sanchez
 * created at 2020-07-27
 */

require __DIR__ . '/../vendor/autoload.php';

$template = file_get_contents(__DIR__ . "/Template");
$templateTest = file_get_contents(__DIR__ . "/TemplateTest");

/**
 * Class HE
 */
class HE extends \HttpException\HttpException
{

    /**
     * @return string[]
     */
    public static function getFullMessageStatus(): array
    {
        return self::$messageStatus;
    }
}

function getNomFrom(string $base): string
{
    $base = str_replace("'", '', $base);
    $words = preg_split('/[\s\-_\/]+/', $base);
    foreach ($words as $k => $word) {
        $words[$k] = ucfirst(strtolower($word));
    }
    return implode('', $words);
}

function replaceInTemplate(string $template, array $context): string
{
    foreach ($context as $t => $v) {
        $template = str_replace('%' . $t . '%', $v, $template);
    }
    return $template;
}

$listeCode = HE::getFullMessageStatus();
foreach ($listeCode as $code => $message) {
    $nom = getNomFrom($message) . 'Exception';
    $nomTest = $nom . 'Test';
    $php = replaceInTemplate($template, [
        'CODE' => $code,
        'NOM' => $nom
    ]);
    $test = replaceInTemplate($templateTest, [
        'NOM' => $nom,
        'NOMTEST' => $nomTest,
        'CODE' => $code,
        'MESSAGE' => addslashes($message),
    ]);
    $filename = __DIR__ . '/../src/' . $nom . '.php';
    $filenameTest = __DIR__ . '/../test/' . $nomTest . '.php';
    if (is_file($filename)) {
        unlink($filename);
    }
    if (is_file($filenameTest)) {
        unlink($filenameTest);
    }

    file_put_contents($filename, $php);
    file_put_contents($filenameTest, $test);
// print_r([
//     'CODE' => $code,
//     'NOM' => $nom
// ]);
// echo PHP_EOL;
    echo __DIR__ . '/../src/' . $nom . '.php' . PHP_EOL;
    echo __DIR__ . '/../test/' . $nomTest . '.php' . PHP_EOL;
// echo $php . PHP_EOL;

}
