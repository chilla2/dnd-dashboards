<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_fc7184b5c9f6ef6d2a47f3bff8f93b3188b904aa53c46ec64b6e64eec2eac98d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        // line 1
        $context["__internal_c6c0391a7505b795b5ad6a88d7ff38bfa3c6f1f15ace9078fb46abfccf839781"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 1, $this->source); })()), "i18n", [], "any", false, false, false, 1), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "started", [], "any", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 5, $this->source); })())), 0))) {
                // line 6
                echo "        <div id=\"flash-messages\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 7, $this->source); })()));
                foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                    // line 8
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 9
                        echo "                    <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo " alert-dismissible fade show\" role=\"alert\">
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        ";
                        // line 11
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                         // line 1
(isset($context["__internal_c6c0391a7505b795b5ad6a88d7ff38bfa3c6f1f15ace9078fb46abfccf839781"]) || array_key_exists("__internal_c6c0391a7505b795b5ad6a88d7ff38bfa3c6f1f15ace9078fb46abfccf839781", $context) ? $context["__internal_c6c0391a7505b795b5ad6a88d7ff38bfa3c6f1f15ace9078fb46abfccf839781"] : (function () { throw new RuntimeError('Variable "__internal_c6c0391a7505b795b5ad6a88d7ff38bfa3c6f1f15ace9078fb46abfccf839781" does not exist.', 1, $this->source); })()));
                        // line 11
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </div>
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 14,  76 => 11,  74 => 1,  73 => 11,  67 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain ea.i18n.translationDomain %}
{% if app.session is not null and app.session.started %}
    {% set flash_messages = app.session.flashbag.all %}

    {% if flash_messages|length > 0 %}
        <div id=\"flash-messages\">
            {% for label, messages in flash_messages %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        {{ message|trans|raw }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    {% endif %}
{% endif %}
", "@EasyAdmin/flash_messages.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/src/Resources/views/flash_messages.html.twig");
    }
}
