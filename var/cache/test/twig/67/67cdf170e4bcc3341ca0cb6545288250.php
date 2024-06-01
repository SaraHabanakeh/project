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

/* home/metrics.html.twig */
class __TwigTemplate_5503654ba652679d315f1252b46380da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/metrics.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Code Metrics";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    <h1>Metrics Analys</h1>
    <h2>Introduktion:</h2>
        <p>Det finns sex viktiga aspekter som hjälper till att skapa ren kod och förbättra kodens kvalitet. Dessa aspekter är: Codestyle, Coverage, Complexity, Cohesion, Coupling och CRAP.Genom att beakta dessa sex C
kan utvecklare skapa kod som inte bara fungerar korrekt utan också är lätt att förstå, testa och underhålla över tid. </p>
        <h4>1. Codestyle </h4>
            <p>Kodstil handlar om att följa regler för indentering, namngivning av variabler och funktioner, och användning av mellanslag och kommentarer. En konsekvent kodstil gör koden mer strukturerad och läsbar.<br>

Exempel: I min kod använder jag doc-blocks i min Card-klass för att förklara syftet med varje metod och typen av variabler. Detta gör koden mer läsbar och förståelig för andra utvecklare som arbetar med samma kodbas.

</p>
        <h4>2. Coverage</h4>
            <p>Kodtäckning refererar till hur mycket av koden som är täckt av automatiserade tester. Genom att skriva tester kan vi säkerställa att varje metod fungerar som förväntat.

Exempel: I min kod har jag skrivit tester för klasserna i mitt Game-modul och uppnått 98.51% kodtäckning. Detta innebär att nästan alla metoder är testade, vilket minskar risken för buggar.</p>
        <h4>3. Complexity </h4>
            <p>Komplexitet handlar om hur komplicerad koden är att förstå och underhålla. Cyklomatisk komplexitet mäter antalet oberoende vägar genom en kodbas. Lägre komplexitet är att föredra eftersom det gör koden lättare att testa och underhålla.

Exempel: En funktion med en cyklomatisk komplexitet på 10 är mer komplex och svårare att underhålla än en med komplexiteten 2. I min kod strävar jag efter att hålla komplexiteten låg genom att dela upp stora funktioner i mindre, mer hanterbara delar.

</p>
        <h4>4. Cohesion </h4>
            <p>Samhållning betyder hur väl klasserna i en modul fungerar tillsammans för att utföra en specifik uppgift. Hög samhållning innebär att en modul har ett tydligt och avgränsat ansvar, vilket gör koden mer modulär och lättare att underhålla.

Exempel: I min kod har klasserna i Card-modulen hög samhållning eftersom varje klass har ett tydligt definierat ansvar. Till exempel hanterar en klass kortens värde och färg, medan en annan klass hanterar kortlekar och kortblandning.</p>
        <h4>5. Coupling </h4>
            <p>Koppling handlar om graden av beroende mellan olika moduler eller komponenter i ett system. Låg koppling innebär att moduler kan ändras utan att påverka andra moduler, vilket gör systemet mer flexibelt och lättare att underhålla.

Exempel: I min kod har jag hög koppling mellan klasserna i Card-modulen eftersom de har en kompositionsrelation och ärver från varandra. Detta kan göra koden mindre flexibel, och det är något jag strävar efter att förbättra.</p>
        <h4>6. CRAP </h4>
             <p>CRAP står för \"Change Risk Anti-Patterns\" och är ett mått som kombinerar komplexitet och testtäckning. Ju lägre CRAP-poäng, desto mindre risk för buggar när ändringar görs.

Exempel: Genom att hålla testtäckningen hög och komplexiteten låg i min kod har jag kunnat sänka CRAP-poängen, vilket minskar risken för buggar vid framtida förändringar.</p>

<h2>Phpmetrics:</h2>
<p>När vi tar en närmare titt på phpmetrics analys för min PHP-kod hittar vi några intressanta mätvärden som kan hjälpa oss att identifiera flaskhalsar och svaga punkter i koden.</p>
<h4>1.Hög Cyklomatisk Komplexitet i App\\Controller\\BlackJackGame:</h4>
<p>Mätvärde: Cyklomatisk komplexitet: 361.66.
Klassen BlackJackGame har en mycket hög cyklomatisk komplexitet, vilket innebär att den innehåller många olika logiska vägar och beslutspunkter. Detta gör koden svår att förstå och underhålla.För att förbättra detta kan vi bryta ner klassen i mindre, mer hanterbara komponenter. Detta kommer att minska komplexiteten och göra koden lättare att testa och underhålla.</p>
<h4>2. Brist på Enhetstester för App\\Entity\\Book:</h4>
<p>Mätvärde: Enhetstestsviter: 0. Klassen Book har inga enhetstestsviter som anropar den. Detta innebär att koden inte är tillräckligt testad, vilket ökar risken för buggar och fel. Vi kan förbättra genom att skriva enhetstester för Book-klassen som kan säkerställa att den fungerar som förväntat och minska risken för fel vid framtida förändringar.
</p>
<h4>3. Hög Relativ Strukturell Komplexitet i App\\Controller\\BookController:</h4><p>Mätvärde: Relativ strukturell komplexitet: 400.Klassen BookController har en hög relativ strukturell komplexitet, vilket innebär att dess inre struktur är komplex och svår att följa.
Man kan förbättra koden genom Att refaktorisera BookController-klassen för att minska den strukturella komplexiteten kan göra koden mer läsbar och lättare att underhålla.</p>

<h2>Scrutinizer:</h2>
<p>Scrutinizer är ett kraftfullt verktyg för kodanalys som utvärderar din kod baserat på flera viktiga faktorer såsom kodstil, komplexitet, säkerhet och testtäckning. Här är en sammanfattning av min analys och vad resultaten betyder:</p>
<h4>Kodkvalitet:</h4><p>Jag fick betyget 5.5, vilket indikerar att koden anses vara acceptabel. Det betyder att koden uppfyller grundläggande krav på kvalitet, men det finns utrymme för förbättringar för att nå en högre standard.</p>
<h4>Build Status:</h4><p> Statusen \"passed\" visar att koden har klarat alla automatiska tester och analyser som Scrutinizer har genomfört. Detta är ett tecken på att koden är stabil och att inga uppenbara fel eller problem har upptäckts.</p>
<h4>Kodtäckning:</h4><p>Min kod har en täckning på 17%, vilket innebär att 17% av kodbasen är täckt av automatiska tester. Vilket indikerar att det finns brist av kod testning,vilket kan vara en risk eftersom det kan finnas fler oupptäckta buggar och problem i den otäckta koden. </p>
<ul>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\">
            <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/qulity.png"), "html", null, true);
        yield "\" alt=\"Code Quality\" class=\"img5\">
        </a>
    </li>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\">
            <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/coverage.png"), "html", null, true);
        yield "\" alt=\"Code Coverage\" class=\"img5\">
        </a>
    </li>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\" >
            <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/build.png"), "html", null, true);
        yield "\" alt=\"Build Status\" class=\"img5\">
        </a>
    </li>

<h2>Förbättringar:</h2>
<p>För att förbättra min kod finns det flera åtgärder jag planerar att genomföra. Här är några viktiga förbättringsområden:</p>
<h4>Öka Täckningen av Enhetstester:</h4>
<p>En högre täckningsgrad av enhetstester innebär att fler delar av koden är verifierade genom tester, vilket minskar risken för buggar och säkerställer att koden fungerar som förväntat.Jag kommer att skriva fler enhetstester för att täcka alla funktioner och metoder i mina klasser.Detta kommer att öka kodtäckningsprocenten och därmed förbättra kodens kvalitet och tillförlitlighet.</p>
<h4>Förbättra Kodstilen:</h4><p>En konsekvent kodstil gör koden lättare att läsa och förstå. Jag ska gå igenom koden och se till att alla metoder och klasser har tydliga doc blocks som förklarar deras syfte och de variabler som används. </p>
<h4>Minska Cyklomatisk Komplexitet:</h4><p> Hög cyklomatisk komplexitet gör koden svår att förstå och underhålla. jag kommer att bryta ner komplexa funktioner i mindre, med mer hanterbara delar kan vi minska denna komplexitet.</p>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/metrics.html.twig";
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
        return array (  160 => 68,  152 => 63,  144 => 58,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Code Metrics{% endblock %}

{% block main %}
    <h1>Metrics Analys</h1>
    <h2>Introduktion:</h2>
        <p>Det finns sex viktiga aspekter som hjälper till att skapa ren kod och förbättra kodens kvalitet. Dessa aspekter är: Codestyle, Coverage, Complexity, Cohesion, Coupling och CRAP.Genom att beakta dessa sex C
kan utvecklare skapa kod som inte bara fungerar korrekt utan också är lätt att förstå, testa och underhålla över tid. </p>
        <h4>1. Codestyle </h4>
            <p>Kodstil handlar om att följa regler för indentering, namngivning av variabler och funktioner, och användning av mellanslag och kommentarer. En konsekvent kodstil gör koden mer strukturerad och läsbar.<br>

Exempel: I min kod använder jag doc-blocks i min Card-klass för att förklara syftet med varje metod och typen av variabler. Detta gör koden mer läsbar och förståelig för andra utvecklare som arbetar med samma kodbas.

</p>
        <h4>2. Coverage</h4>
            <p>Kodtäckning refererar till hur mycket av koden som är täckt av automatiserade tester. Genom att skriva tester kan vi säkerställa att varje metod fungerar som förväntat.

Exempel: I min kod har jag skrivit tester för klasserna i mitt Game-modul och uppnått 98.51% kodtäckning. Detta innebär att nästan alla metoder är testade, vilket minskar risken för buggar.</p>
        <h4>3. Complexity </h4>
            <p>Komplexitet handlar om hur komplicerad koden är att förstå och underhålla. Cyklomatisk komplexitet mäter antalet oberoende vägar genom en kodbas. Lägre komplexitet är att föredra eftersom det gör koden lättare att testa och underhålla.

Exempel: En funktion med en cyklomatisk komplexitet på 10 är mer komplex och svårare att underhålla än en med komplexiteten 2. I min kod strävar jag efter att hålla komplexiteten låg genom att dela upp stora funktioner i mindre, mer hanterbara delar.

</p>
        <h4>4. Cohesion </h4>
            <p>Samhållning betyder hur väl klasserna i en modul fungerar tillsammans för att utföra en specifik uppgift. Hög samhållning innebär att en modul har ett tydligt och avgränsat ansvar, vilket gör koden mer modulär och lättare att underhålla.

Exempel: I min kod har klasserna i Card-modulen hög samhållning eftersom varje klass har ett tydligt definierat ansvar. Till exempel hanterar en klass kortens värde och färg, medan en annan klass hanterar kortlekar och kortblandning.</p>
        <h4>5. Coupling </h4>
            <p>Koppling handlar om graden av beroende mellan olika moduler eller komponenter i ett system. Låg koppling innebär att moduler kan ändras utan att påverka andra moduler, vilket gör systemet mer flexibelt och lättare att underhålla.

Exempel: I min kod har jag hög koppling mellan klasserna i Card-modulen eftersom de har en kompositionsrelation och ärver från varandra. Detta kan göra koden mindre flexibel, och det är något jag strävar efter att förbättra.</p>
        <h4>6. CRAP </h4>
             <p>CRAP står för \"Change Risk Anti-Patterns\" och är ett mått som kombinerar komplexitet och testtäckning. Ju lägre CRAP-poäng, desto mindre risk för buggar när ändringar görs.

Exempel: Genom att hålla testtäckningen hög och komplexiteten låg i min kod har jag kunnat sänka CRAP-poängen, vilket minskar risken för buggar vid framtida förändringar.</p>

<h2>Phpmetrics:</h2>
<p>När vi tar en närmare titt på phpmetrics analys för min PHP-kod hittar vi några intressanta mätvärden som kan hjälpa oss att identifiera flaskhalsar och svaga punkter i koden.</p>
<h4>1.Hög Cyklomatisk Komplexitet i App\\Controller\\BlackJackGame:</h4>
<p>Mätvärde: Cyklomatisk komplexitet: 361.66.
Klassen BlackJackGame har en mycket hög cyklomatisk komplexitet, vilket innebär att den innehåller många olika logiska vägar och beslutspunkter. Detta gör koden svår att förstå och underhålla.För att förbättra detta kan vi bryta ner klassen i mindre, mer hanterbara komponenter. Detta kommer att minska komplexiteten och göra koden lättare att testa och underhålla.</p>
<h4>2. Brist på Enhetstester för App\\Entity\\Book:</h4>
<p>Mätvärde: Enhetstestsviter: 0. Klassen Book har inga enhetstestsviter som anropar den. Detta innebär att koden inte är tillräckligt testad, vilket ökar risken för buggar och fel. Vi kan förbättra genom att skriva enhetstester för Book-klassen som kan säkerställa att den fungerar som förväntat och minska risken för fel vid framtida förändringar.
</p>
<h4>3. Hög Relativ Strukturell Komplexitet i App\\Controller\\BookController:</h4><p>Mätvärde: Relativ strukturell komplexitet: 400.Klassen BookController har en hög relativ strukturell komplexitet, vilket innebär att dess inre struktur är komplex och svår att följa.
Man kan förbättra koden genom Att refaktorisera BookController-klassen för att minska den strukturella komplexiteten kan göra koden mer läsbar och lättare att underhålla.</p>

<h2>Scrutinizer:</h2>
<p>Scrutinizer är ett kraftfullt verktyg för kodanalys som utvärderar din kod baserat på flera viktiga faktorer såsom kodstil, komplexitet, säkerhet och testtäckning. Här är en sammanfattning av min analys och vad resultaten betyder:</p>
<h4>Kodkvalitet:</h4><p>Jag fick betyget 5.5, vilket indikerar att koden anses vara acceptabel. Det betyder att koden uppfyller grundläggande krav på kvalitet, men det finns utrymme för förbättringar för att nå en högre standard.</p>
<h4>Build Status:</h4><p> Statusen \"passed\" visar att koden har klarat alla automatiska tester och analyser som Scrutinizer har genomfört. Detta är ett tecken på att koden är stabil och att inga uppenbara fel eller problem har upptäckts.</p>
<h4>Kodtäckning:</h4><p>Min kod har en täckning på 17%, vilket innebär att 17% av kodbasen är täckt av automatiska tester. Vilket indikerar att det finns brist av kod testning,vilket kan vara en risk eftersom det kan finnas fler oupptäckta buggar och problem i den otäckta koden. </p>
<ul>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\">
            <img src=\"{{ asset('img/qulity.png') }}\" alt=\"Code Quality\" class=\"img5\">
        </a>
    </li>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\">
            <img src=\"{{ asset('img/coverage.png') }}\" alt=\"Code Coverage\" class=\"img5\">
        </a>
    </li>
    <li>
        <a href=\"https://scrutinizer-ci.com/g/SaraHabanakeh/mvc2/?branch=main\" >
            <img src=\"{{ asset('img/build.png') }}\" alt=\"Build Status\" class=\"img5\">
        </a>
    </li>

<h2>Förbättringar:</h2>
<p>För att förbättra min kod finns det flera åtgärder jag planerar att genomföra. Här är några viktiga förbättringsområden:</p>
<h4>Öka Täckningen av Enhetstester:</h4>
<p>En högre täckningsgrad av enhetstester innebär att fler delar av koden är verifierade genom tester, vilket minskar risken för buggar och säkerställer att koden fungerar som förväntat.Jag kommer att skriva fler enhetstester för att täcka alla funktioner och metoder i mina klasser.Detta kommer att öka kodtäckningsprocenten och därmed förbättra kodens kvalitet och tillförlitlighet.</p>
<h4>Förbättra Kodstilen:</h4><p>En konsekvent kodstil gör koden lättare att läsa och förstå. Jag ska gå igenom koden och se till att alla metoder och klasser har tydliga doc blocks som förklarar deras syfte och de variabler som används. </p>
<h4>Minska Cyklomatisk Komplexitet:</h4><p> Hög cyklomatisk komplexitet gör koden svår att förstå och underhålla. jag kommer att bryta ner komplexa funktioner i mindre, med mer hanterbara delar kan vi minska denna komplexitet.</p>





{% endblock %}
", "home/metrics.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/home/metrics.html.twig");
    }
}
