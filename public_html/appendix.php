<!-- <dev class="my-div d-flex justify-content-center align-items-center">
        <?php
        $output = shell_exec('whois bordo-dev.ru');
        echo "<pre>$output</pre>";
        ?>
    </dev> -->

<?php

class NewColor
{
    public $color;

    public $forma;

    public function SetColor($cvet)
    {
        $this->color = $cvet;
    }

    public function SetForm($format)
    {
        $this->forma = $format;
    }
}



