<?php

/* module_types.announcement.blog */
class __TwigTemplate_8525e4fa727d164cdfc0a82a66894fea08bf8213f2ebb0c73c4a48fb564d7c7c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.module_types.announcement.columns", "module_types.announcement.blog", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.module_types.announcement.columns";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 6);
        $filters = array("default" => 6, "escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('default', 'escape'),
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
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"thumbnail\">

\t\t";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 7
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t\t<img src=\"/site/data/images/medium/";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t\t</a>
\t\t";
        }
        // line 11
        echo "
\t\t<div class=\"caption\">

\t\t\t\t";
        // line 14
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "")) : (""))) {
            // line 15
            echo "\t\t\t\t<p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "</p>
\t\t\t";
        }
        // line 17
        echo "\t\t\t
\t\t\t
\t\t\t";
        // line 19
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 20
            echo "\t\t\t\t<h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "</h3>
\t\t\t";
        }
        // line 22
        echo "
\t\t

\t\t\t<a class=\"nurjanar\" href=\"";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\">Подробнее<img class src=\"/site/theme/images/arr_orange.png\"></a>

\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "module_types.announcement.blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 22,  91 => 20,  89 => 19,  85 => 17,  79 => 15,  77 => 14,  72 => 11,  66 => 8,  61 => 7,  59 => 6,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.module_types.announcement.columns' %}*/
/* */
/* {% block item %}*/
/* 	<div class="thumbnail">*/
/* */
/* 		{% if item.field_image|default('') %}*/
/* 			<a href="{$ item.path $}">*/
/* 				<img src="/site/data/images/medium/{$ item.field_image $}">*/
/* 			</a>*/
/* 		{% endif %}*/
/* */
/* 		<div class="caption">*/
/* */
/* 				{% if item.field_summary|default('') %}*/
/* 				<p>{$ item.field_summary $}</p>*/
/* 			{% endif %}*/
/* 			*/
/* 			*/
/* 			{% if item.field_header|default('') %}*/
/* 				<h3>{$ item.field_header $}</h3>*/
/* 			{% endif %}*/
/* */
/* 		*/
/* */
/* 			<a class="nurjanar" href="{$ item.path $}">Подробнее<img class src="/site/theme/images/arr_orange.png"></a>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* {% endblock %}*/
