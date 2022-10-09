<?php

/* _.module_types.auth.main */
class __TwigTemplate_a6bcf666796dfd830190ad74ef73fee99076d883f5576fae1f4c0c33e9a6f349 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user' => array($this, 'block_user'),
            'form' => array($this, 'block_form'),
            'notification' => array($this, 'block_notification'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "block" => 3);
        $filters = array("escape" => 5, "default" => 34);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
                array('escape', 'default'),
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

        // line 1
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "\t<div class=\"user\">
\t\t";
            // line 3
            $this->displayBlock('user', $context, $blocks);
            // line 11
            echo "\t</div>
";
        } else {
            // line 13
            echo "\t";
            $this->displayBlock('form', $context, $blocks);
        }
    }

    // line 3
    public function block_user($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t<span class=\"login\">
\t\t\t\t";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
        echo "
\t\t\t</span>
\t\t\t<span class=\"logout\">
\t\t\t\t<a href=\"/auth/logout\">Выйти</a>
\t\t\t</span>
\t\t";
    }

    // line 13
    public function block_form($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<form action=\"/auth/login\" class=\"form-horizontal\" method=\"post\">
\t\t\t";
        // line 15
        $this->displayBlock('notification', $context, $blocks);
        // line 24
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tЛогин
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"login\"
\t\t\t\t\t\tplaceholder=\"Логин\"
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tvalue=\"";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "login", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), "login", array()), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-4 control-label\">
\t\t\t\t\tПароль
\t\t\t\t</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input class=\"form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t\t\t\t\tВойти
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
    }

    // line 15
    public function block_notification($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => "auth"), "method")) {
            // line 17
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "first", array(0 => "auth"), "method"), "html", null, true));
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.auth.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 23,  134 => 19,  130 => 17,  127 => 16,  124 => 15,  99 => 34,  87 => 24,  85 => 15,  82 => 14,  79 => 13,  69 => 5,  66 => 4,  63 => 3,  57 => 13,  53 => 11,  51 => 3,  48 => 2,  46 => 1,);
    }
}
/* {% if user %}*/
/* 	<div class="user">*/
/* 		{% block user %}*/
/* 			<span class="login">*/
/* 				{$ user.login $}*/
/* 			</span>*/
/* 			<span class="logout">*/
/* 				<a href="/auth/logout">Выйти</a>*/
/* 			</span>*/
/* 		{% endblock %}*/
/* 	</div>*/
/* {% else %}*/
/* 	{% block form %}*/
/* 		<form action="/auth/login" class="form-horizontal" method="post">*/
/* 			{% block notification %}*/
/* 				{% if errors.has('auth') %}*/
/* 					<div class="row">*/
/* 						<div class="col-sm-offset-4 col-sm-8">*/
/* 							<div class="alert alert-danger">{$ errors.first('auth') $}</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			{% endblock %}*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					Логин*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="login"*/
/* 						placeholder="Логин"*/
/* 						type="text"*/
/* 						value="{$ request.inputPrev.login|default('') $}"*/
/* 					>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-4 control-label">*/
/* 					Пароль*/
/* 				</label>*/
/* 				<div class="col-sm-8">*/
/* 					<input class="form-control" name="password" placeholder="Пароль" type="password">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<div class="col-sm-offset-4 col-sm-8">*/
/* 					<button class="btn btn-default" type="submit">*/
/* 						Войти*/
/* 					</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	{% endblock %}*/
/* {% endif %}*/
/* */
