<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ReportTaxes.html.twig */
class __TwigTemplate_e241b11e059b7ad0b2068dd9ff03bac3fa08918c857bfcf254b723dfe852ca7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "ReportTaxes.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
";
        return; yield '';
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    <form id=\"fReportTaxes\" method=\"post\">
        ";
        // line 32
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <input type=\"hidden\" name=\"source\" value=\"sales\"/>
        <div class=\"container\" style=\"margin-top: -90px;\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card shadow mb-3\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-1\">
                                <i class=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 41), "icon", [], "any", false, false, false, 41), "html", null, true);
        yield "\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        yield "
                            </h1>
                            <p class=\"text-muted mb-4\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("report-taxes-p"), "html", null, true);
        yield "</p>
                            <div class=\"form-row\">
                                ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 45), "count", [], "method", false, false, false, 45) > 1)) {
            // line 46
            yield "                                    <div class=\"col-sm mb-3\">
                                        ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("company"), "html", null, true);
            yield "
                                        <select name=\"idempresa\" class=\"form-control\">
                                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 49), "all", [], "method", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 50
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 50) == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "idempresa", [], "any", false, false, false, 50))) {
                    // line 51
                    yield "                                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 51), "html", null, true);
                    yield "\" selected>
                                                        ";
                    // line 52
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 52);
                    yield "
                                                    </option>
                                                ";
                } else {
                    // line 55
                    yield "                                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 55), "html", null, true);
                    yield "\">
                                                        ";
                    // line 56
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 56);
                    yield "
                                                    </option>
                                                ";
                }
                // line 59
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                                        </select>
                                    </div>
                                ";
        } else {
            // line 63
            yield "                                    <input type=\"hidden\" name=\"idempresa\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "idempresa", [], "any", false, false, false, 63), "html", null, true);
            yield "\"/>
                                ";
        }
        // line 65
        yield "                                <div class=\"col-sm mb-3\">
                                    ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("serie"), "html", null, true);
        yield "
                                    <select name=\"codserie\" class=\"form-control\">
                                        <option value=\"\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        yield "</option>
                                        <option value=\"\">------</option>
                                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "serie", [], "any", false, false, false, 70), "all", [[], ["descripcion" => "ASC"], 0, 0], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 71
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 71) == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "codserie", [], "any", false, false, false, 71))) {
                // line 72
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 72), "html", null, true);
                yield "\" selected>
                                                    ";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 73);
                yield "
                                                </option>
                                            ";
            } else {
                // line 76
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 76), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 76);
                yield "</option>
                                            ";
            }
            // line 78
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                    </select>
                                </div>
                                <div class=\"col-sm mb-3\">
                                    ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("currency"), "html", null, true);
        yield "
                                    <select name=\"coddivisa\" class=\"form-control\">
                                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "divisa", [], "any", false, false, false, 84), "all", [[], ["descripcion" => "ASC"], 0, 0], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["divisa"]) {
            // line 85
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["divisa"], "coddivisa", [], "any", false, false, false, 85) == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coddivisa", [], "any", false, false, false, 85))) {
                // line 86
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["divisa"], "coddivisa", [], "any", false, false, false, 86), "html", null, true);
                yield "\" selected>
                                                    ";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["divisa"], "descripcion", [], "any", false, false, false, 87);
                yield "
                                                </option>
                                            ";
            } else {
                // line 90
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["divisa"], "coddivisa", [], "any", false, false, false, 90), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["divisa"], "descripcion", [], "any", false, false, false, 90);
                yield "</option>
                                            ";
            }
            // line 92
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divisa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                                    </select>
                                </div>
                                <div class=\"col-sm mb-3\">
                                    ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("country"), "html", null, true);
        yield "
                                    <select name=\"codpais\" class=\"form-control\">
                                        <option value=\"\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        yield "</option>
                                        <option value=\"\">------</option>
                                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pais", [], "any", false, false, false, 100), "all", [[], ["nombre" => "ASC"], 0, 0], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["pais"]) {
            // line 101
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 101) == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "codpais", [], "any", false, false, false, 101))) {
                // line 102
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 102), "html", null, true);
                yield "\" selected>
                                                    ";
                // line 103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["pais"], "nombre", [], "any", false, false, false, 103);
                yield "
                                                </option>
                                            ";
            } else {
                // line 106
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 106), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["pais"], "nombre", [], "any", false, false, false, 106);
                yield "</option>
                                            ";
            }
            // line 108
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col-sm-3 mb-3\">
                                    ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("date"), "html", null, true);
        yield "
                                    <select name=\"type-date\" class=\"form-control\">
                                        <option value=\"create\" ";
        // line 116
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "typeDate", [], "any", false, false, false, 116) == "create")) ? ("selected") : (""));
        yield ">
                                            ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("creation-date"), "html", null, true);
        yield "
                                        </option>
                                        <option value=\"accrual\" ";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "typeDate", [], "any", false, false, false, 119) == "accrual")) ? ("selected") : (""));
        yield ">
                                            ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("accrual-date"), "html", null, true);
        yield "
                                        </option>
                                    </select>
                                </div>
                                <div class=\"col-sm-3 mb-3\">
                                    ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("from-date"), "html", null, true);
        yield "
                                    <input type=\"date\" name=\"datefrom\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "datefrom", [], "any", false, false, false, 126), "html", null, true);
        yield "\" class=\"form-control\"
                                           required/>
                                </div>
                                <div class=\"col-sm-3 mb-3\">
                                    ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("until-date"), "html", null, true);
        yield "
                                    <input type=\"date\" name=\"dateto\" value=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "dateto", [], "any", false, false, false, 131), "html", null, true);
        yield "\" class=\"form-control\"
                                           required/>
                                </div>
                                <div class=\"col-sm-3 mb-3\">
                                    ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
        yield "
                                    <select name=\"format\" class=\"form-control\">
                                        <option value=\"PDF\">PDF</option>
                                        <option value=\"CSV\">CSV</option>
                                        <option value=\"XLS\">Excel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"form-row\">
                                <div class=\"col-sm\">
                                    <button type=\"button\" onclick=\"sendReportTaxes('purchases')\"
                                            class=\"btn btn-spin-action btn-block btn-secondary btn-spin-action\">
                                        ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("purchases"), "html", null, true);
        yield "
                                    </button>
                                </div>
                                <div class=\"col-sm\">
                                    <button type=\"button\" onclick=\"sendReportTaxes('sales')\"
                                            class=\"btn btn-spin-action btn-block btn-primary btn-spin-action\">
                                        ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("sales"), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 167
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function sendReportTaxes(source) {
            let form = document.getElementById('fReportTaxes');
            animateSpinner('add');
            form.source.value = source;
            form.submit();
        }
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ReportTaxes.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  384 => 168,  380 => 167,  364 => 155,  355 => 149,  338 => 135,  331 => 131,  327 => 130,  320 => 126,  316 => 125,  308 => 120,  304 => 119,  299 => 117,  295 => 116,  290 => 114,  283 => 109,  277 => 108,  269 => 106,  263 => 103,  258 => 102,  255 => 101,  251 => 100,  246 => 98,  241 => 96,  236 => 93,  230 => 92,  222 => 90,  216 => 87,  211 => 86,  208 => 85,  204 => 84,  199 => 82,  194 => 79,  188 => 78,  180 => 76,  174 => 73,  169 => 72,  166 => 71,  162 => 70,  157 => 68,  152 => 66,  149 => 65,  143 => 63,  138 => 60,  132 => 59,  126 => 56,  121 => 55,  115 => 52,  110 => 51,  107 => 50,  103 => 49,  98 => 47,  95 => 46,  93 => 45,  88 => 43,  81 => 41,  69 => 32,  66 => 31,  62 => 30,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "ReportTaxes.html.twig", "C:\\xampp\\htdocs\\facturas\\Dinamic\\View\\ReportTaxes.html.twig");
    }
}
