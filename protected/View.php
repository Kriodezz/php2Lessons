<?php

class View
{
    use MagicTrait;

    /* вместо этого метода делаем __set();
        public function assign($name, $value)
        {
            $this->data[$name] = $value;
        }
    */

    public function display($template)
    {
        include $template;
    }
}
