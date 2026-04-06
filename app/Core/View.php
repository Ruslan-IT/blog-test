<?php

namespace App\Core;


use Smarty\Smarty;

class View
{
    private static ?Smarty $smarty = null;

    private static function getSmarty(): Smarty
    {



        if (self::$smarty === null) {
            $smarty = new Smarty();

            //exit();

            $smarty->setTemplateDir(__DIR__ . '/../../templates/');
            $smarty->setCompileDir(__DIR__ . '/../../storage/templates_s/');
            $smarty->addTemplateDir(__DIR__ . '/../../templates/layouts/', 'layouts');

            $smarty->setCacheDir(__DIR__ . '/../../storage/cache/');
            $smarty->setConfigDir(__DIR__ . '/../../config/');

            self::$smarty = $smarty;
        }

        return self::$smarty;
    }

    public static function render(string $template, array $data = []): void
    {
        $smarty = self::getSmarty();

        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }

        $smarty->display($template . '.tpl');
    }
}