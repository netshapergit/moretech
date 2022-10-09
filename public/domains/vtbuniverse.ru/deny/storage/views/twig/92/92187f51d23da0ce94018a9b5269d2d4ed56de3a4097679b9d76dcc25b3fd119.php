<?php

/* _.module_types.announcement.columns */
class __TwigTemplate_c8be8c26b6498eabf8c5a4724d38d029d8736f8190890a274cb2443c332f146a extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'items' => array($this, 'block_items'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "set" => 4, "block" => 7, "for" => 8);
        $filters = array("length" => 1, "default" => 1, "round" => 4, "escape" => 9);
        $functions = array("max" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'block', 'for'),
                array('length', 'default', 'round', 'escape'),
                array('max')
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

        // line 1
        if ((twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()), array())) : (array()))) > 0)) {
            // line 2
            echo "
\t";
            // line 4
            echo "\t";
            $context["size"] = max(1, twig_round((12 / twig_length_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()))), 0, "floor"));
            // line 5
            echo "
\t<div class=\"row\">
\t\t";
            // line 7
            $this->displayBlock('items', $context, $blocks);
            // line 22
            echo "\t</div>

";
        }
    }

    // line 7
    public function block_items($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t\t\t<div class=\"col-sm-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true));
            echo "\">
\t\t\t\t\t";
            // line 10
            $this->displayBlock('item', $context, $blocks);
            // line 19
            echo "\t\t\t\t</div>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t";
    }

    // line 10
    public function block_item($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true));
        echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.announcement.columns";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 14,  116 => 11,  113 => 10,  109 => 21,  94 => 19,  92 => 10,  87 => 9,  69 => 8,  66 => 7,  59 => 22,  57 => 7,  53 => 5,  50 => 4,  47 => 2,  45 => 1,);
    }
}
/* {% if config.pages|default([])|length > 0 %}*/
/* */
/* 	{# calculate column size #}*/
/* 	{% set size = max(1, (12 / config.pages|length)|round(0, 'floor')) %}*/
/* */
/* 	<div class="row">*/
/* 		{% block items %}*/
/* 			{% for item in config.pages %}*/
/* 				<div class="col-sm-{$ size $}">*/
/* 					{% block item %}*/
/* 						<div class="thumbnail">*/
/* 							<div class="caption">*/
/* 								<h3>*/
/* 									<a href="{$ item.path $}">{$ item.title $}</a>*/
/* 								</h3>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/* */
/* {% endif %}*/
/* */
