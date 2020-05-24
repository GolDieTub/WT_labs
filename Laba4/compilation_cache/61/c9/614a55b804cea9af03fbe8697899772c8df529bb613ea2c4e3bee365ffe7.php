<?php

/* index.twig */
class __TwigTemplate_61c9614a55b804cea9af03fbe8697899772c8df529bb613ea2c4e3bee365ffe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Claude Monet</title>
    <link href=\"DATA/CSS/style.css\" rel=\"stylesheet\" />
</head>

<body>";
        // line 11
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 12
        echo "<h2>Гастрономическое место силы - Claude Monet</h2>
<section>";
        // line 14
        $this->env->loadTemplate("Bullshit.twig")->display(array_merge($context, array("some_wrds" => "‌с неповторимым стилем имеет изысканный и аккуратный интерьер,
                                                  предоставляя своим посетителям приятные моменты в теплой и
                                                  непринужденной обстановке.")));
        // line 18
        echo "</section>
<form action=\"index.php\" method=\"post\">
    <table align=center>
        <tr>
            <td>Логин:</td>
            <td><input type=\"text\" name=\"login\" /></td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td><input type=\"password\" name=\"password\" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type=\"submit\" class=\"buttons\" value=\"Войти\" /></td>
        </tr>
    </table>
</form>";
        // line 36
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 37
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 37,  57 => 36,  39 => 18,  35 => 14,  32 => 12,  30 => 11,  19 => 1,);
    }
}
