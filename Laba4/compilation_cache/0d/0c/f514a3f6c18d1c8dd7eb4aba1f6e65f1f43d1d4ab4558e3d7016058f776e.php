<?php

/* about.twig */
class __TwigTemplate_0d0cf514a3f6c18d1c8dd7eb4aba1f6e65f1f43d1d4ab4558e3d7016058f776e extends Twig_Template
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
    <title>О Компании</title>
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
            О компании
        </h2>
        <article>";
        // line 18
        $this->env->loadTemplate("Bullshit.twig")->display(array_merge($context, array("some_wrds" => "Claude Monet – это компания единомышленников, которая стремится сделать
                                                          этот мир вкуснее, ярче и чувственнее.")));
        // line 21
        $this->env->loadTemplate("Bullshit.twig")->display(array_merge($context, array("some_wrds" => "Ведь так мало нужно человеку для хорошего старта. «Доброе утро»
                                                          начинается с улыбки персонала, круассана и чашечки бодрящего кофе. В
                                                          суете большого города всегда хочется найти место, где тебя узнают,
                                                          где тебе рады и где тебя ждут.")));
        // line 26
        $this->env->loadTemplate("Bullshit.twig")->display(array_merge($context, array("some_wrds" => "Claude Monet – это маленький праздник, который всегда с тобой. И благодаря
                                                          творческому потенциалу нашей команды, этот праздник не устанет вас
                                                          удивлять.")));
        // line 30
        echo "
        </article>
    </section>";
        // line 33
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 34
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  55 => 33,  51 => 30,  47 => 26,  42 => 21,  39 => 18,  32 => 12,  30 => 11,  19 => 1,);
    }
}
