<?php

/* f1.twig */
class __TwigTemplate_869632b86b16e44d9f6a436f2feeff9fd0fd54ca818fa9aadcd0b1bdbc251fe8 extends Twig_Template
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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Отзывы</title>
    <link href=\"DATA/CSS/formstyle.css\" rel=\"stylesheet\" />
  </head>
  <body>";
        // line 10
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 11
        echo "
    <form action=\"f1.php\" class=\"rewiew\" method=\"post\">
      <div class=\"stripes-block\">
        <div class=\"line\"></div>
      </div>
      <h3>Оставьте ваш отзыв</h3>
      <div class=\"form-group\" >
        <label for=\"name\">Имя </label>
        <input type=\"text\" name=\"fname\">
        <label for=\"rew\">Отзыв </label>
        <textarea name=\"message\" rows=\"10\" cols=\"45\">
        </textarea>
      </div>
      <button type=\"submit\">Отправить</button>
    </form>";
        // line 26
        $this->env->loadTemplate("comment.twig")->display($context);
        // line 27
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "f1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 27,  47 => 26,  31 => 11,  29 => 10,  19 => 1,);
    }
}
