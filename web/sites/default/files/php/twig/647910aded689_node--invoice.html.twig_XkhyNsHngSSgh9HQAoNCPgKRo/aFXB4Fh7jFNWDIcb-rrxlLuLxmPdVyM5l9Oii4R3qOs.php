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

/* themes/custom/b5_extutor/templates/node/node--invoice.html.twig */
class __TwigTemplate_2fcf959cc6b64929179a5d48b442b2de extends Template
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
        echo "<div class=\"fs-3\">Invoice Date: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_invoice_date", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "</div>
<div class=\"fs-3\">Tutor: <a href=\"/node/";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_tutor", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "nid", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_tutor", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</a></div>
<div>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_course", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "title", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</div>
<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th>Date</th>
            <th>Course</th>
            <th>Fee</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_line_item", [], "any", false, false, true, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_item_date", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</td>
            <td><a href=\"/node/";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 16), "field_course", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "nid", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 16), "field_course", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</a></td>
            <td class=\"text-end\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 17), "field_value", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <tr>
            <td colspan=\"2\">&nbsp;</td>
            <td class=\"text-end\">
                ";
        // line 23
        $context["sum"] = 0;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_line_item", [], "any", false, false, true, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 25
            echo "                    ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "entity", [], "any", false, false, true, 25), "field_value", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25));
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sum"] ?? null), 27, $this->source), 2, ".", ","), "html", null, true);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/b5_extutor/templates/node/node--invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  104 => 26,  101 => 25,  96 => 24,  94 => 23,  89 => 20,  80 => 17,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  50 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/b5_extutor/templates/node/node--invoice.html.twig", "/var/www/html/web/themes/custom/b5_extutor/templates/node/node--invoice.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13, "set" => 23);
        static $filters = array("escape" => 1, "number_format" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
