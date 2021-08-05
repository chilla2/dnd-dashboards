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

/* private_dashboard/index.html.twig */
class __TwigTemplate_26b7bf8f05a9c6464ad52295e64e18c192c3cb21a185aba0876476d9ec2df85c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private_dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private_dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "private_dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DM Screen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid mw-100\"> <!--  container to hold whole grid -->
    <div class=\"row custom-dark\"> <!--  start row 1 of grid 1 -->
        <div class=\"col-sm-1 custom-dark m-0\"> <!--  start of col 1 of grid 1 -->
            <div class=\"container-sm p-0 m-0 custom-dark\">
                <div class=\"accordion accordion-flush custom-dark m-0\" id=\"accordionFlushExample\">
                    <div class=\"accordion-item custom-dark\">
                        <h2 class=\"accordion-header custom-dark\" id=\"flush-headingOne\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
                                Players
                            </button>
                        </h2>
                        <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0 custom-dark\">
                                <ul class=\"list-group\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 21
            echo "                                    ";
            $context["playernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 21), " ");
            // line 22
            echo "                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["playernames"]) || array_key_exists("playernames", $context) ? $context["playernames"] : (function () { throw new RuntimeError('Variable "playernames" does not exist.', 22, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingTwo\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
                                NPCs
                            </button>
                        </h2>
                        <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingTwo\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 38
            echo "                                    ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 38), " ");
            // line 39
            echo "                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 39, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingThree\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
                                Creatures
                            </button>
                        </h2>
                        <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingThree\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 55
            echo "                                    ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 55), " ");
            // line 56
            echo "                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 56, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingFour\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFour\" aria-expanded=\"false\" aria-controls=\"flush-collapseFour\">
                                Locations
                            </button>
                        </h2>
                        <div id=\"flush-collapseFour\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingFour\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 72
            echo "                                    ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72), " ");
            // line 73
            echo "                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 73, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingFive\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFive\" aria-expanded=\"false\" aria-controls=\"flush-collapseFive\">
                                Items
                            </button>
                        </h2>
                        <div id=\"flush-collapseFive\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingFive\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "                                    ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 89), " ");
            // line 90
            echo "                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 90, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingSix\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseSix\" aria-expanded=\"false\" aria-controls=\"flush-collapseSix\">
                                Other
                            </button>
                        </h2>
                        <div id=\"flush-collapseSix\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingSix\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 106
            echo "                                    ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 106), " ");
            // line 107
            echo "                                        <li class=\"list-group-item list-group-item-action m-0 p-0 custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernames"]) || array_key_exists("othernames", $context) ? $context["othernames"] : (function () { throw new RuntimeError('Variable "othernames" does not exist.', 107, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  end of col 1 of grid 1 -->
        <div class=\"col-sm-10\"> <!--  start col 2 of grid 1 and start of grid 2 -->
            <div class=\"row\"> <!--  start row 1 of grid 2 -->
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Sessions</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 124
            echo "                                <li><a class=\"dropdown-item\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Players</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 132
            echo "                                ";
            $context["playernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 132), " ");
            // line 133
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["playernames"]) || array_key_exists("playernames", $context) ? $context["playernames"] : (function () { throw new RuntimeError('Variable "playernames" does not exist.', 133, $this->source); })()), "-"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 133), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">NPCs</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 141
            echo "                                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 141), " ");
            // line 142
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 142, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 142), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Creatures</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 150
            echo "                                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 150), " ");
            // line 151
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 151, $this->source); })()), "-"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 151), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Locations</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 159
            echo "                                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 159), " ");
            // line 160
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 160, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 160), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Items</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 168
            echo "                                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 168), " ");
            // line 169
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 169, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 169), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Other</a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 177
            echo "                                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 177), " ");
            // line 178
            echo "                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernnames"]) || array_key_exists("othernnames", $context) ? $context["othernnames"] : (function () { throw new RuntimeError('Variable "othernnames" does not exist.', 178, $this->source); })()), "-"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 178), "html", null, true);
            echo "</button>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!--  end of row 1 of grid 2 -->
            <div class=\"row row-cols-6\"> <!--  start row 2 of grid 2 -->
                ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 186, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 187
            echo "                ";
            $context["playernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 187), " ");
            // line 188
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["playernames"]) || array_key_exists("playernames", $context) ? $context["playernames"] : (function () { throw new RuntimeError('Variable "playernames" does not exist.', 188, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-dark\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 192), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "description", [], "any", false, false, false, 193), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "            </div> <!--  end row 2 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 3 of grid 2 -->
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["npcs"]) || array_key_exists("npcs", $context) ? $context["npcs"] : (function () { throw new RuntimeError('Variable "npcs" does not exist.', 200, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["npc"]) {
            // line 201
            echo "                ";
            $context["npcnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 201), " ");
            // line 202
            echo "                <div class=\"col collapse multi-collapse \" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["npcnames"]) || array_key_exists("npcnames", $context) ? $context["npcnames"] : (function () { throw new RuntimeError('Variable "npcnames" does not exist.', 202, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "name", [], "any", false, false, false, 206), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "description", [], "any", false, false, false, 207), "html", null, true);
            echo "</div>
                            <div>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "showPlayers", [], "any", false, false, false, 208), "html", null, true);
            echo "</div>
                            <a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("npc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 209)]), "html", null, true);
            echo "\">edit</a>
                            <a href=\"/npc/";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 210), "html", null, true);
            echo "/show-players\" class=\"btn btn-secondary\">Show</a>
                            <a href=\"/npc/";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["npc"], "id", [], "any", false, false, false, 211), "html", null, true);
            echo "/hide-players\" class=\"btn btn-secondary\">Hide</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['npc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "            </div> <!--  end row 3 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 4 of grid 2 -->
                ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creatures"]) || array_key_exists("creatures", $context) ? $context["creatures"] : (function () { throw new RuntimeError('Variable "creatures" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 219
            echo "                ";
            $context["creaturenames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 219), " ");
            // line 220
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["creaturenames"]) || array_key_exists("creaturenames", $context) ? $context["creaturenames"] : (function () { throw new RuntimeError('Variable "creaturenames" does not exist.', 220, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "name", [], "any", false, false, false, 224), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "description", [], "any", false, false, false, 225), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 232, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 233
            echo "                ";
            $context["locationnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 233), " ");
            // line 234
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["locationnames"]) || array_key_exists("locationnames", $context) ? $context["locationnames"] : (function () { throw new RuntimeError('Variable "locationnames" does not exist.', 234, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 238), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 239), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 246, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 247
            echo "                ";
            $context["itemnames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 247), " ");
            // line 248
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["itemnames"]) || array_key_exists("itemnames", $context) ? $context["itemnames"] : (function () { throw new RuntimeError('Variable "itemnames" does not exist.', 248, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 252), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 253), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["others"]) || array_key_exists("others", $context) ? $context["others"] : (function () { throw new RuntimeError('Variable "others" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
            // line 261
            echo "                ";
            $context["othernames"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 261), " ");
            // line 262
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["othernames"]) || array_key_exists("othernames", $context) ? $context["othernames"] : (function () { throw new RuntimeError('Variable "othernames" does not exist.', 262, $this->source); })()), "-"), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "name", [], "any", false, false, false, 266), "html", null, true);
            echo "</h6>
                            <div class=\"card-title\">";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["other"], "description", [], "any", false, false, false, 267), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "            </div>
            <div class=\"row row-cols-3\">
                ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 275
            echo "                <div class=\"col collapse multi-collapse\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 275), "html", null, true);
            echo "\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 279), "html", null, true);
            echo "</h6>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "            </div>
        </div> <!--  end col 2 of grid 1 and end of grid 2 -->
        <!--
        <div class=\"col-sm-1\"> <!-  start col 3 of grid 1 ->
            Test
        </div>
        -->
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private_dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 284,  706 => 279,  698 => 275,  694 => 274,  690 => 272,  679 => 267,  675 => 266,  667 => 262,  664 => 261,  660 => 260,  656 => 258,  645 => 253,  641 => 252,  633 => 248,  630 => 247,  626 => 246,  622 => 244,  611 => 239,  607 => 238,  599 => 234,  596 => 233,  592 => 232,  588 => 230,  577 => 225,  573 => 224,  565 => 220,  562 => 219,  558 => 218,  554 => 216,  543 => 211,  539 => 210,  535 => 209,  531 => 208,  527 => 207,  523 => 206,  515 => 202,  512 => 201,  508 => 200,  504 => 198,  493 => 193,  489 => 192,  481 => 188,  478 => 187,  474 => 186,  466 => 180,  455 => 178,  452 => 177,  448 => 176,  441 => 171,  430 => 169,  427 => 168,  423 => 167,  416 => 162,  405 => 160,  402 => 159,  398 => 158,  391 => 153,  380 => 151,  377 => 150,  373 => 149,  366 => 144,  355 => 142,  352 => 141,  348 => 140,  341 => 135,  330 => 133,  327 => 132,  323 => 131,  316 => 126,  307 => 124,  303 => 123,  287 => 109,  276 => 107,  273 => 106,  269 => 105,  254 => 92,  243 => 90,  240 => 89,  236 => 88,  221 => 75,  210 => 73,  207 => 72,  203 => 71,  188 => 58,  177 => 56,  174 => 55,  170 => 54,  155 => 41,  144 => 39,  141 => 38,  137 => 37,  122 => 24,  111 => 22,  108 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DM Screen{% endblock %}

{% block body %}
<div class=\"container-fluid mw-100\"> <!--  container to hold whole grid -->
    <div class=\"row custom-dark\"> <!--  start row 1 of grid 1 -->
        <div class=\"col-sm-1 custom-dark m-0\"> <!--  start of col 1 of grid 1 -->
            <div class=\"container-sm p-0 m-0 custom-dark\">
                <div class=\"accordion accordion-flush custom-dark m-0\" id=\"accordionFlushExample\">
                    <div class=\"accordion-item custom-dark\">
                        <h2 class=\"accordion-header custom-dark\" id=\"flush-headingOne\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
                                Players
                            </button>
                        </h2>
                        <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0 custom-dark\">
                                <ul class=\"list-group\">
                                    {% for player in players %}
                                    {% set playernames = player.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ playernames|join('-') }}\">{{ player.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingTwo\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
                                NPCs
                            </button>
                        </h2>
                        <div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingTwo\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    {% for npc in npcs %}
                                    {% set npcnames = npc.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ npcnames|join('-') }}\">{{ npc.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingThree\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
                                Creatures
                            </button>
                        </h2>
                        <div id=\"flush-collapseThree\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingThree\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    {% for creature in creatures %}
                                    {% set creaturenames = creature.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ creaturenames|join('-') }}\">{{ creature.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingFour\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFour\" aria-expanded=\"false\" aria-controls=\"flush-collapseFour\">
                                Locations
                            </button>
                        </h2>
                        <div id=\"flush-collapseFour\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingFour\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    {% for location in locations %}
                                    {% set locationnames = location.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ locationnames|join('-') }}\">{{ location.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingFive\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseFive\" aria-expanded=\"false\" aria-controls=\"flush-collapseFive\">
                                Items
                            </button>
                        </h2>
                        <div id=\"flush-collapseFive\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingFive\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    {% for item in items %}
                                    {% set itemnames = item.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action custom-dark text-white m-0 p-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ itemnames|join('-') }}\">{{ item.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"flush-headingSix\">
                            <button class=\"accordion-button collapsed custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseSix\" aria-expanded=\"false\" aria-controls=\"flush-collapseSix\">
                                Other
                            </button>
                        </h2>
                        <div id=\"flush-collapseSix\" class=\"accordion-collapse collapse custom-dark text-white\" aria-labelledby=\"flush-headingSix\" data-bs-parent=\"#accordionFlushExample\">
                            <div class=\"accordion-body p-0\">
                                <ul class=\"list-group\">
                                    {% for other in others %}
                                    {% set othernames = other.name|split(' ') %}
                                        <li class=\"list-group-item list-group-item-action m-0 p-0 custom-dark text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ othernames|join('-') }}\">{{ other.name }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  end of col 1 of grid 1 -->
        <div class=\"col-sm-10\"> <!--  start col 2 of grid 1 and start of grid 2 -->
            <div class=\"row\"> <!--  start row 1 of grid 2 -->
                <div class=\"container\">
                    <ul class=\"nav justify-content-center\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Sessions</a>
                            <ul class=\"dropdown-menu\">
                                {% for session in sessions %}
                                <li><a class=\"dropdown-item\" href=\"#\">{{ session.id }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Players</a>
                            <ul class=\"dropdown-menu\">
                                {% for player in players %}
                                {% set playernames = player.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ playernames|join('-') }}\" >{{ player.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">NPCs</a>
                            <ul class=\"dropdown-menu\">
                                {% for npc in npcs %}
                                {% set npcnames = npc.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ npcnames|join('-') }}\">{{ npc.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Creatures</a>
                            <ul class=\"dropdown-menu\">
                                {% for creature in creatures %}
                                {% set creaturenames = creature.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ creaturenames|join('-') }}\" >{{ creature.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Locations</a>
                            <ul class=\"dropdown-menu\">
                                {% for location in locations %}
                                {% set locationnames = location.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ locationnames|join('-') }}\">{{ location.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Items</a>
                            <ul class=\"dropdown-menu\">
                                {% for item in items %}
                                {% set itemnames = item.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ itemnames|join('-') }}\">{{ item.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Other</a>
                            <ul class=\"dropdown-menu\">
                                {% for other in others %}
                                {% set othernames = other.name|split(' ') %}
                                <button class=\"dropdown-item btn btn-primary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ othernnames|join('-') }}\">{{ other.name }}</button>
                                {% endfor %}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!--  end of row 1 of grid 2 -->
            <div class=\"row row-cols-6\"> <!--  start row 2 of grid 2 -->
                {% for player in players %}
                {% set playernames = player.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ playernames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 rounded custom-dark\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ player.name }}</h6>
                            <div class=\"card-title\">{{ player.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div> <!--  end row 2 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 3 of grid 2 -->
                {% for npc in npcs %}
                {% set npcnames = npc.name|split(' ') %}
                <div class=\"col collapse multi-collapse \" id=\"{{ npcnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ npc.name }}</h6>
                            <div class=\"card-title\">{{ npc.description }}</div>
                            <div>{{ npc.showPlayers }}</div>
                            <a href=\"{{ path('npc_edit', { 'id': npc.id }) }}\">edit</a>
                            <a href=\"/npc/{{ npc.id }}/show-players\" class=\"btn btn-secondary\">Show</a>
                            <a href=\"/npc/{{ npc.id }}/hide-players\" class=\"btn btn-secondary\">Hide</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div> <!--  end row 3 of grid 2 -->
            <div class=\"row row-cols-3\"> <!--  start row 4 of grid 2 -->
                {% for creature in creatures %}
                {% set creaturenames = creature.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ creaturenames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ creature.name }}</h6>
                            <div class=\"card-title\">{{ creature.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for location in locations %}
                {% set locationnames = location.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ locationnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ location.name }}</h6>
                            <div class=\"card-title\">{{ location.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for item in items %}
                {% set itemnames = item.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ itemnames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ item.name }}</h6>
                            <div class=\"card-title\">{{ item.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for other in others %}
                {% set othernames = other.name|split(' ') %}
                <div class=\"col collapse multi-collapse\" id=\"{{ othernames|join('-') }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ other.name }}</h6>
                            <div class=\"card-title\">{{ other.description }}</div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"row row-cols-3\">
                {% for session in sessions %}
                <div class=\"col collapse multi-collapse\" id=\"{{ session.id }}\">
                    <div class=\"card shadow p-3 mb-5 custom-dark rounded\">
                        <div class=\"card-body custom-dark\">
                            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
                            <h6 class=\"card-title\">{{ session.id }}</h6>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div> <!--  end col 2 of grid 1 and end of grid 2 -->
        <!--
        <div class=\"col-sm-1\"> <!-  start col 3 of grid 1 ->
            Test
        </div>
        -->
    </div>
</div>


{% endblock %}
", "private_dashboard/index.html.twig", "/var/www/html/templates/private_dashboard/index.html.twig");
    }
}
