<?php

/* base */
class __TwigTemplate_e22d1dd45eb5bd1fc1e3efa1de8d708af32417610ce9854095611cf31ad4b50b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.new", "base", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.new";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('escape'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
        // line 5
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array())) {
            // line 6
            echo "\t\t| ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array()), "html", null, true));
            echo "
\t";
        }
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/base.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/style.css\">
\t
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.js\"></script>
\t<script src=\"/site/theme/js/style.js\"></script>
\t <script src=\"/site/theme/js/base.js\"></script>

\t<script src=\"/site/theme/js/particles.js\"></script>
\t<script src=\"/site/theme/js/particlessettings.js\"></script>
\t<script src=\"/site/theme/js/parallax.js\"></script>

\t<script src=\"/site/theme/js/calendar.js\"></script>
\t<meta name=\"yandex-verification\" content=\"899645853d5e20cb\" />
";
    }

    public function getTemplateName()
    {
        return "base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  71 => 10,  63 => 6,  61 => 5,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.new' %}*/
/* */
/* {% block title %}*/
/* 	{$ parent() $}*/
/* 	{% if site.field_name %}*/
/* 		| {$ site.field_name $}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">*/
/* 	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="/site/theme/css/base.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/style.css">*/
/* 	*/
/* 	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>*/
/* 	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.js"></script>*/
/* 	<script src="/site/theme/js/style.js"></script>*/
/* 	 <script src="/site/theme/js/base.js"></script>*/
/* */
/* 	<script src="/site/theme/js/particles.js"></script>*/
/* 	<script src="/site/theme/js/particlessettings.js"></script>*/
/* 	<script src="/site/theme/js/parallax.js"></script>*/
/* */
/* 	<script src="/site/theme/js/calendar.js"></script>*/
/* 	<meta name="yandex-verification" content="899645853d5e20cb" />*/
/* {% endblock %}*/
/* */
