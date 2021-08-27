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

/* dash/player_display.html.twig */
class __TwigTemplate_105209265acd15678e97e62fa1ebecd01dd519b056338e887ae5beddf50250f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/player_display.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/player_display.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/player_display.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Player Display";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- dash player_display -->
<div class=\"container-fluid vw-100 player-display-container\">
    <img class=\"background-image\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 6, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 6, $this->source); })()), "imageName", [], "any", false, false, false, 6), "html", null, true);
        echo "\" />
    <div class=\"overlay-image\">
        <div class=\"row justify-content-evenly align-items-center\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 10
            echo "            ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 10), " ");
            // line 11
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["npc"], "showPlayers", [], "any", false, false, false, 11), true))) {
                // line 12
                echo "                    ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["npc"], "imageName", [], "any", false, false, false, 12)) && twig_get_attribute($this->env, $this->source, $context["npc"], "imageName", [], "any", true, true, false, 12))) {
                    // line 13
                    echo "                        <div class=\"col\" id=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 13, $this->source); })()), "-"), "html", null, true);
                    echo "\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["npc"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "imageName", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"card-img-top\">
                            </div>
                        </div>
                        ";
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                ";
            }
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 31
            echo "            ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 31), " ");
            // line 32
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["creature"], "showPlayers", [], "any", false, false, false, 32), true))) {
                // line 33
                echo "                    ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["creature"], "imageName", [], "any", false, false, false, 33)) && twig_get_attribute($this->env, $this->source, $context["creature"], "imageFile", [], "any", true, true, false, 33))) {
                    // line 34
                    echo "                        <div class=\"col\" id=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 34, $this->source); })()), "-"), "html", null, true);
                    echo "\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["creature"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "imageName", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" class=\"card-img-top\">
                            </div>
                        </div>
                        ";
                    // line 46
                    echo "                    ";
                }
                // line 47
                echo "                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 50
            echo "            ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 50), " ");
            // line 51
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["location"], "showPlayers", [], "any", false, false, false, 51), true))) {
                // line 52
                echo "                    ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["location"], "imageName", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, $context["location"], "imageName", [], "any", true, true, false, 52))) {
                    // line 53
                    echo "                        <div class=\"col\" id=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 53, $this->source); })()), "-"), "html", null, true);
                    echo "\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["location"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "imageName", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" class=\"card-img-top\">
                            </div>
                        </div>
                        ";
                    // line 65
                    echo "                    ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "            ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 69), " ");
            // line 70
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "showPlayers", [], "any", false, false, false, 70), true))) {
                // line 71
                echo "                    ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "imageName", [], "any", false, false, false, 71)) && twig_get_attribute($this->env, $this->source, $context["item"], "imageName", [], "any", true, true, false, 71))) {
                    // line 72
                    echo "                        <div class=\"col\" id=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 72, $this->source); })()), "-"), "html", null, true);
                    echo "\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["item"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageName", [], "any", false, false, false, 74), "html", null, true);
                    echo "\" class=\"card-img-top\">
                            </div>
                        </div>
                        ";
                    // line 84
                    echo "                    ";
                }
                // line 85
                echo "                ";
            }
            // line 86
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 88
            echo "            ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "heading", [], "any", false, false, false, 88), " ");
            // line 89
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["other"], "showPlayers", [], "any", false, false, false, 89), true))) {
                // line 90
                echo "                    ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["other"], "imageName", [], "any", false, false, false, 90)) && twig_get_attribute($this->env, $this->source, $context["other"], "imageName", [], "any", true, true, false, 90))) {
                    // line 91
                    echo "                        <div class=\"col\" id=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernames"]) || array_key_exists("othernames", $context) ? $context["othernames"] : (function () { throw new RuntimeError('Variable "othernames" does not exist.', 91, $this->source); })()), "-"), "html", null, true);
                    echo "\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["other"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "imageName", [], "any", false, false, false, 93), "html", null, true);
                    echo "\" class=\"card-img-top\">
                            </div>
                        </div>
                        ";
                    // line 103
                    echo "                    ";
                }
                // line 104
                echo "                ";
            }
            // line 105
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/player_display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 106,  293 => 105,  290 => 104,  287 => 103,  279 => 93,  273 => 91,  270 => 90,  267 => 89,  264 => 88,  259 => 87,  253 => 86,  250 => 85,  247 => 84,  239 => 74,  233 => 72,  230 => 71,  227 => 70,  224 => 69,  219 => 68,  213 => 67,  210 => 66,  207 => 65,  199 => 55,  193 => 53,  190 => 52,  187 => 51,  184 => 50,  179 => 49,  173 => 48,  170 => 47,  167 => 46,  159 => 36,  153 => 34,  150 => 33,  147 => 32,  144 => 31,  139 => 30,  133 => 29,  130 => 28,  127 => 27,  119 => 15,  113 => 13,  110 => 12,  107 => 11,  104 => 10,  100 => 9,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Player Display{% endblock %}
{% block body %}
<!-- dash player_display -->
<div class=\"container-fluid vw-100 player-display-container\">
    <img class=\"background-image\" src=\"{{ vich_uploader_asset(game, 'imageFile') }}\" alt=\"{{ game.imageName }}\" />
    <div class=\"overlay-image\">
        <div class=\"row justify-content-evenly align-items-center\">
            {% for npc in npcs %}
            {% set npcnames = npc.name|split(' ') %}
                {% if npc.showPlayers == TRUE %}
                    {% if npc.imageName is not null and npc.imageName is defined %}
                        <div class=\"col\" id=\"{{ npcnames|join('-') }}\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"{{ vich_uploader_asset(npc, 'imageFile') }}\" alt=\"{{ npc.imageName }}\" class=\"card-img-top\">
                            </div>
                        </div>
                        {#
                        <!--
                        <div class=\"col-4\" id=\"{{ npcnames|join('-') }}\">
                            <figure class=\"figure\">
                                <img class=\"figure-img img-fluid rounded\" src=\"{{ vich_uploader_asset(npc, 'imageFile') }}\" alt=\"{{ npc.imageName }}\" />
                            </figure>
                        </div>
                        -->
                        #}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% for creature in creatures %}
            {% set creaturenames = creature.name|split(' ') %}
                {% if creature.showPlayers == TRUE %}
                    {% if creature.imageName is not null and creature.imageFile is defined %}
                        <div class=\"col\" id=\"{{ creaturenames|join('-') }}\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"{{ vich_uploader_asset(creature, 'imageFile') }}\" alt=\"{{ creature.imageName }}\" class=\"card-img-top\">
                            </div>
                        </div>
                        {# <!--
                        <div class=\"col\" id=\"{{ creaturenames|join('-') }}\">
                            <figure class=\"figure\">
                                <img class=\"figure-img img-fluid rounded\" src=\"{{ vich_uploader_asset(creature, 'imageFile') }}\" alt=\"{{ creature.imageName }}\" />
                            </figure>
                        </div>
                        --> #}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% for location in locations %}
            {% set locationnames = location.name|split(' ') %}
                {% if location.showPlayers == TRUE %}
                    {% if location.imageName is not null and location.imageName is defined %}
                        <div class=\"col\" id=\"{{ locationnames|join('-') }}\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"{{ vich_uploader_asset(location, 'imageFile') }}\" alt=\"{{ location.imageName }}\" class=\"card-img-top\">
                            </div>
                        </div>
                        {# <!--
                            <div class=\"col\" id=\"{{ locationnames|join('-') }}\">
                                <figure class=\"figure\">
                                    <img class=\"figure-img img-fluid rounded\" src=\"{{ vich_uploader_asset(location, 'imageFile') }}\" alt=\"{{ location.imageName }}\" />
                                </figure>
                            </div>
                        --> #}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% for item in items %}
            {% set itemnames = item.name|split(' ') %}
                {% if item.showPlayers == TRUE %}
                    {% if item.imageName is not null and item.imageName is defined %}
                        <div class=\"col\" id=\"{{ itemnames|join('-') }}\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"{{ vich_uploader_asset(item, 'imageFile') }}\" alt=\"{{ item.imageName }}\" class=\"card-img-top\">
                            </div>
                        </div>
                        {# <!--
                        <div class=\"col\" id=\"{{ itemnames|join('-') }}\">
                            <figure class=\"figure\">
                                <img class=\"figure-img img-fluid rounded\" src=\"{{ vich_uploader_asset(item, 'imageFile') }}\" alt=\"{{ item.imageName }}\" />
                            </figure>
                        </div>
                        --> #}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% for other in others %}
            {% set othernames = other.heading|split(' ') %}
                {% if other.showPlayers == TRUE %}
                    {% if other.imageName is not null and other.imageName is defined %}
                        <div class=\"col\" id=\"{{ othernames|join('-') }}\">
                            <div class=\"card shadow mb-5 rounded\">
                                <img src=\"{{ vich_uploader_asset(other, 'imageFile') }}\" alt=\"{{ other.imageName }}\" class=\"card-img-top\">
                            </div>
                        </div>
                        {# <!--
                        <div class=\"col\" id=\"{{ othernames|join('-') }}\">
                            <figure class=\"figure\">
                                <img class=\"figure-img img-fluid rounded\" src=\"{{ vich_uploader_asset(other, 'imageFile') }}\" alt=\"{{ other.imageName }}\" />
                            </figure>
                        </div>
                        --> #}
                    {% endif %}
                {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "dash/player_display.html.twig", "/var/www/html/templates/dash/player_display.html.twig");
    }
}
