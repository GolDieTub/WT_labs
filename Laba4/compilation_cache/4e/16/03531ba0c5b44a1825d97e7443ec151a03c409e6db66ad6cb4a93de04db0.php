<?php

/* contscts.twig */
class __TwigTemplate_4e1603531ba0c5b44a1825d97e7443ec151a03c409e6db66ad6cb4a93de04db0 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Контакты</title>
    <link href=\"DATA/CSS/contactstyle.css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">";
        // line 11
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 12
        echo "
    <section>
        <h2>
            Контакты
        </h2>

        <div><p>
                Адрес: Вилейка Ул.Партизанская 36
            </p>
            <p>
                Время работы:
            </p>
            <p>ПН - ЧТ 08:00 - 23:00;</p>
            <p>ПТ 08:00 - 02:00 СБ 10:00 - 02:00;</p>
            <p>ВС 10:00 - 23:00</p></div>

        <iframe src=\"https://www.google.com/maps/d/embed?mid=1o5WAoSh8YIB_7R42LAhnKCJ91wpxdmmj\"
                width=\"360\" height=\"360\"></iframe>

    </section>";
        // line 32
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 33
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "contscts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 33,  53 => 32,  32 => 12,  30 => 11,  19 => 1,);
    }
}
