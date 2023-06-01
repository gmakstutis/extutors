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

/* themes/custom/b5_extutor/templates/node/node--course.html.twig */
class __TwigTemplate_6555689d0877aa5fca36799f067ad60f extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_course_type", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3) == "ft")) {
            // line 4
            echo "            ";
            $context["ctype"] = "Full-time";
            // line 5
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_course_type", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5) == "pt")) {
            // line 6
            echo "            ";
            $context["ctype"] = "Part-time";
            // line 7
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_course_type", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7) == "sc")) {
            // line 8
            echo "            ";
            $context["ctype"] = "Short Course";
            // line 9
            echo "        ";
        }
        // line 10
        echo "        <div class=\"col-12 fs-3\">Course Type: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ctype"] ?? null), 10, $this->source), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Invoice Date</th>
                        <th>Tutor</th>
                        <th>Fee</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context["total"] = 0;
        // line 25
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_course_invoices", [], "any", false, false, true, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 26
            echo "                        <tr>
                            <td><a href=\"/node/";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inv"], "entity", [], "any", false, false, true, 27), "nid", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">View</a></td>
                            <td>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inv"], "entity", [], "any", false, false, true, 28), "field_invoice_date", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</td>
                            <td><a href=\"/node/";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inv"], "entity", [], "any", false, false, true, 29), "field_tutor", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "nid", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inv"], "entity", [], "any", false, false, true, 29), "field_tutor", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "title", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</a></td>
                            <td class=\"text-end\">
                                ";
            // line 31
            $context["sum"] = 0;
            // line 32
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inv"], "entity", [], "any", false, false, true, 32), "field_line_item", [], "any", false, false, true, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 33
                echo "                                        ";
                $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "entity", [], "any", false, false, true, 33), "field_value", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33));
                // line 34
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sum"] ?? null), 35, $this->source), 2, ".", ","), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
            // line 38
            $context["total"] = (($context["total"] ?? null) + ($context["sum"] ?? null));
            // line 39
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    <tr>
                        <td colspan=\"3\" class=\"text-end fw-bold\">Total</td>
                        <td class=\"text-end fw-bold\">";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["total"] ?? null), 42, $this->source), 2, ".", ","), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/b5_extutor/templates/node/node--course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  137 => 40,  131 => 39,  129 => 38,  122 => 35,  116 => 34,  113 => 33,  108 => 32,  106 => 31,  99 => 29,  95 => 28,  91 => 27,  88 => 26,  83 => 25,  81 => 24,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/b5_extutor/templates/node/node--course.html.twig", "/var/www/html/web/themes/custom/b5_extutor/templates/node/node--course.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 4, "for" => 25);
        static $filters = array("escape" => 10, "number_format" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'number_format'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
