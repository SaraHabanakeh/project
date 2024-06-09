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

/* home/report.html.twig */
class __TwigTemplate_b611701c18c37e1d9bb96676587f5840 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/report.html.twig", 1);
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

        yield "Report";
        
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
        yield "    <h1>Redovisningar:</h1>

    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <li><a href=\"#kmom03\">Kmom03</a></li>
        <li><a href=\"#kmom04\">Kmom04</a></li>
        <li><a href=\"#kmom05\">Kmom05</a></li>
        <li><a href=\"#kmom10\">Kmom10</a></li>

    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av att arbeta med objektorienterad programmering, genom min tidigare kurs i Python. Där lärde jag mig hur man strukturerar kod genom att definiera klasser och använda objekt för att organisera och återanvända kod. Objektorientering möjliggör en mer modulär och strukturerad kodbas genom att tillåta oss att gruppera relaterade data och funktioner inom enskilda enheter kallade klasser. Detta ger ökad flexibilitet, underhållbarhet och återanvändbarhet av kod.</p><br>
    <p>PHPs modell för klasser och objekt fungerar nästan på samma sätt som i Python, med skillnaden att det är ett annat programmeringsspråk. I PHP är en klass en mall för att skapa objekt. En klass kan innehålla egenskaper (attribut) och metoder (funktioner). Att skapa en instans av en klass innebär att skapa ett objekt baserat på den klassen. En konstruktor är en speciell metod som används för att initialisera objekt av en klass genom att tilldela värden till objektets attribut.</p><br>
    <p>Strukturen som användes i uppgiften me/report är baserad på en huvudklass kallad PresentationController som ärver från AbstractController-klassen. Detta möjliggör att PresentationController kan använda attribut och metoder som är definierade i AbstractController. I koden finns det olika metoder som är definierade i PresentationController, såsom presentation, about, report och lucky. Varje metod representerar en specifik webbrutt för applikationen. Dessa metoder svarar på HTTP-förfrågningar på olika URL-rutter (/, /about, /report, /lucky) och returnerar en Response-objekt som innehåller den resulterande sidan. Varje metod använder också Twig-mallar för att rendera HTML-sidorna som ska visas för användaren. </p>
    <p>Jag fann både begreppet namespace och användningen av magiska metoder intressanta och värdefulla aspekter i artikeln \"PHP The Right Way\".
        Namespace-konceptet erbjuder en strukturerad metod för att organisera PHP-kod, vilket hjälper till att undvika namnkollisioner och göra koden mer läsbar och underhållbar. Genom att gruppera relaterade klasser och funktioner inom samma namespace blir det lättare att hantera och navigera i koden, vilket är särskilt användbart i större projekt.
        De magiska metoderna är också fascinerande eftersom de tillåter utvecklare att skapa mer dynamiska och flexibla klasser. Till exempel kan användningen av __construct()-metoden för att initiera objekt och __get() samt __set()-metoderna för att hantera egenskaper göra koden mer elegant och mindre repetitiv. Dessutom kan __toString()-metoden användas för att definiera hur objekt ska representeras som strängar, vilket kan vara användbart vid debugging och loggning.</p>
    <p> Min TiL för detta kursmomentet är Att arbeta med klasser i PHP ger en grundläggande förståelse för objektorienterad programmering och hur man strukturerar kod på ett mer organiserat sätt. Dessutom är det att skapa olika rutter med Twig och Symfony Framework ett värdefullt steg för att bygga webbapplikationer och hantera klientbegäranden på ett effektivt sätt.</p>

    <h2 id=\"kmom02\">Kmom02</h2>

    <p>I objektorienterad programmering finns det olika konstruktioner för att organisera och strukturera klasser:</p>
    <p>Arv (Inheritance):
    Arv innebär att en klass (barnklass) kan ärva egenskaper och metoder från en annan klass (förälderklass). I PHP uppnås detta genom att använda nyckelordet extends.</p> 
 
    <p>Komposition (Composition):
    Komposition innebär att en klass använder en instans av en annan klass som en av sina medlemmar. Detta ger flexibilitet genom att tillåta konstruktion av komplexa objekt genom att kombinera mindre komponenter. I PHP skapas komposition genom att skapa instanser av andra klasser inuti den aktuella klassen.</p>

    <p>Jag löste uppgiften genom att skapa fyra huvudklasser: Card, CardGraphic, DeckOfCards, och en controller-klass för spelet. Varje klass hade sin specifika uppgift och samverkade för att hantera kortspel.

Card representerade en enskild spelkort och innehöll information om dess svit och värde, samt en metod för att få dess strängrepresentation.

CardGraphic var en underklass av Card som utökade funktionaliteten genom att lägga till grafisk representation för varje kort, med hjälp av emojis för att representera kortets svit och värde.

DeckOfCards representerade en hel kortlek och skapade en ny kortlek med alla fyra sviterna och 13 värden (från 1 till 13). Den innehöll också metoder för att hantera kortleken som att hämta, sortera, blanda och dra kort från leken.

Jag är generellt nöjd med min implementation eftersom den uppfyller kraven för att hantera ett kortspel.</p>

    <h2 id=\"kmom03\">Kmom03</h2>
    <p> Att modellera ett kortspel med flödesdiagram och pseudokod var en givande upplevelse som hjälpte mig att sätta ett tydligt plan för implementationen. Genom att använda dessa verktyg förstod jag bättre vad jag behövde göra och hur jag skulle börja. Trots att jag behövde justera vissa delar under arbetets gång kände jag mig säker i min plan och medveten om vägen framåt mot mitt mål.</P>
    <p>När det kommer till min implementation av uppgiften, byggde jag vidare på tidigare klasser som Card, HandCard och DeckOfCards, men la till nödvändiga metoder för spelet. Till exempel utökade jag Card-klassen med en metod för att bestämma kortens värde enligt Blackjack-spelet, och i HandCard-klassen skapade jag en metod för att räkna den totala value i handen. Jag introducerade också två nya klasser, Player för spelregler och spelarinput, samt CoinGraphic som representerade spelarens balans med Unicode-symboler.När det gäller att koda i Symfony-ramverket, känner jag mig mer och mer bekväm ju längre in i kursen jag kommer.</p>

    <h2 id=\"kmom04\">Kmom04</h2>
    <p>Att skriva kod för att testa annan kod med PHPUnit var en lärorik och givande upplevelse. Enhetstestning är inte ett helt nytt koncept för mig, då jag har arbetat med det i en tidigare kurs i Python. PHPUnit visade sig vara ett mycket användbart verktyg för att säkerställa att alla metoder i min kod fungerar som förväntat. </p>
    <p>Jag lyckades uppnå mer än 90% kodtäckning, vilket jag är mycket nöjd med. Detta innebär att majoriteten av min kod är testad och att jag kan vara trygg med att de flesta funktionaliteter fungerar som de ska.</P>
    <p>Jag valde att skriva om delar av min kod för att förbättra den och göra den mer testbar. Till exempel hade jag två funktioner i mitt kortspel som jag inte använde, så jag tog bort dem. Detta innebar att jag inte behövde skriva tester för dessa onödiga funktioner, vilket gjorde min kodbas mer fokuserad och lättare att underhålla</p>
    <p>Jag anser att testbar kod ofta är en indikator på \"snygg och ren kod\". Om koden är testbar, lätt att testa betyder att vi har en kodbas som är lättare att förstå, underhålla och utöka i framtiden.</p>

    <h2 id=\"kmom05\">Kmom05</h2>
    <p>Att arbeta med Object-Relational Mapping (ORM) i CRUD-processer med Doctrine var en positiv upplevelse. ORM underlättar hanteringen av databaser genom att mappa databasstrukturer till PHP-objekt. Det påminner om hur vi tidigare arbetat med databaser och JSON, men med några viktiga skillnader:Istället för att hantera databastabeller och rader direkt, definierar vi klasser som representerar tabeller och objekt som representerar rader.Doctrine genererar SQL-frågor automatiskt.Hantering av databasstrukturändringar genom migreringar blir smidigare.</p>
    <p>Jag valde att strukturera applikationen enligt:Model som Hanterar datalagring och affärslogik. Jag använde Doctrine ORM för att mappa databasen till PHP-objekt, vilket gjorde det lättare att arbeta med databasen på ett objektorienterat sätt.
Formulär: Användning av Symfony Forms för att skapa och redigera böcker.
Controller: Hanterar användarinteraktioner och uppdaterar modellen och vyerna. Controllers använder sig av Symfony routing för att definiera hur olika URL:er ska hanteras.</p>


<h2 id=\"kmom10\">Kmom10</h2>
<p><strong>Krav 1-3:</strong> Spelare och Grundläggande Spelmekanik
Eftersom jag redan hade arbetat med kortklasserna i tidigare uppgifter, behövde jag inte börja från grunden. Först skapade jag en Player-klass som innehåller nödvändiga metoder för att skapa en spelare, hantera spelarens hand , spelarens tur och justera balansen. Jag implementerade metoder för att lägga till kort till spelarens hand, kontrollera om spelaren har en Blackjack, och uppdatera spelarens balans baserat på spelets utgång. Efter att ha definierat alla nödvändiga klasser för spelet, såsom DeckOfCards och Card, fortsatte jag med att skapa olika rutter för spelets logik.

Jag skapade en player-rutt som renderade en formulärmall för att välja antal spelare. Nästa steg var att implementera setup-rutten, där användaren kunde ange spelarnas namn och balans. Slutligen implementerade jag play, hit, stay, dealer rutten som styr själva spelet. Denna rutt hanterade spelarnas interaktioner med kortleken och bankens agerande. För att organisera koden och säkerställa en enhetlig design skapade jag en grundmall (base7.html.twig) som jag importerade i alla spelets relaterade mallar. Jag tillämpade också en ny stil på dessa mallar för att förbättra användarupplevelsen och göra spelet mer visuellt tilltalande.
</p>
<p><strong>Krav 4: API-kontroller</strong>JFör att möta kravet på att skapa API-kontroller, utvecklade jag en API-kontroller med fem olika rutter som ger en omfattande förståelse för spelet och dess rules.Jag började med att skapa en ny API-kontroller som innehåller fem olika API-rutter. <strong>/proj/api/intro</strong>  Denna rutt ger en kort introduktion till spelet Blackjack,<strong>  /proj/api/bust</strong> Denna rutt förklarar vad det innebär att gå \"bust\" i spelet Blackjack.<strong> /proj/api/blackjack</strong> Denna rutt förklarar vad en Blackjack är och ger ett exempel på när en spelare har en Blackjack.,
<strong> /proj/api/rules</strong>Denna rutt visar reglerna för spelet Blackjack. Alla de fyra rutten är GET rutten son returnerar  Informationen i ett JSON-format. Medan  <strong>/proj/api/value/{num}</strong> rutt tar emot ett nummer och returnerar dess värde i spelet Blackjack. Denna är en POST- och GET-rutt som hanterar värdet av ett postat nummer enligt Blackjack-reglerna. Det betyder att användaren kan skicka ett nummer och få tillbaka dess värde baserat på spelets regler.
,
</p>
<p>Projektet var lagom utmanande och tidsramen passade mycket bra med de krav som ställdes. För mig innebar projektet ett fokus på de obligatoriska kraven och även på krav 4, vilket kändes som en väl avvägd och genomförbar uppgift.

</p>
<p>En av de största utmaningarna var att säkerställa att spelreglerna implementerades korrekt och att spelet fungerade utan buggar. Det krävde en del tid och noggrannhet att se till att alla aspekter av spelets logik fungerade som de skulle. Att hantera kortleken och spelarnas handlingar på ett sätt som både var konsekvent och intuitivt var en komplex uppgift som krävde flera iterativa förbättringar och tester.</p>

<p>Något som underlättade projektet var att jag hade färdiga klasser från tidigare arbete som jag kunde bygga vidare på. Återanvändningen av dessa klasser var en av de mest nyttiga erfarenheterna och sparade mycket tid och ansträngning. Det gjorde det möjligt att fokusera mer på att förbättra och integrera funktionalitet snarare än att behöva bygga allt från grunden.</p>
<p>Kursen har varit mycket lärorik och har gett mig djupare insikter i viktiga teknologier och metoder. Jag har lärt mig en hel del under varje moment, från att arbeta med klasser och kontroller till att använda Symfony-ramverket. Det var särskilt värdefullt att få praktisk erfarenhet av ORM för databasanslutningar och att förbättra kodkvaliteten genom enhetstester samt analysverktyg som Scrutinizer och PHP Metrics.</p>
<p>Jag är mycket nöjd med kursens upplägg och den handledning som erbjudits. Lärarna har varit tillgängliga och hjälpsamma, vilket har gjort det lättare att förstå och lösa de problem som uppstod. Feedbacken på uppgifterna har varit konstruktiv och hjälpsam för att förbättra mina färdigheter.På en skala från 1 till 10 skulle jag ge kursen ett starkt betyg på 9. Det har varit en utmanande men mycket givande resa.</p>
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
        return "home/report.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block main %}
    <h1>Redovisningar:</h1>

    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <li><a href=\"#kmom03\">Kmom03</a></li>
        <li><a href=\"#kmom04\">Kmom04</a></li>
        <li><a href=\"#kmom05\">Kmom05</a></li>
        <li><a href=\"#kmom10\">Kmom10</a></li>

    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av att arbeta med objektorienterad programmering, genom min tidigare kurs i Python. Där lärde jag mig hur man strukturerar kod genom att definiera klasser och använda objekt för att organisera och återanvända kod. Objektorientering möjliggör en mer modulär och strukturerad kodbas genom att tillåta oss att gruppera relaterade data och funktioner inom enskilda enheter kallade klasser. Detta ger ökad flexibilitet, underhållbarhet och återanvändbarhet av kod.</p><br>
    <p>PHPs modell för klasser och objekt fungerar nästan på samma sätt som i Python, med skillnaden att det är ett annat programmeringsspråk. I PHP är en klass en mall för att skapa objekt. En klass kan innehålla egenskaper (attribut) och metoder (funktioner). Att skapa en instans av en klass innebär att skapa ett objekt baserat på den klassen. En konstruktor är en speciell metod som används för att initialisera objekt av en klass genom att tilldela värden till objektets attribut.</p><br>
    <p>Strukturen som användes i uppgiften me/report är baserad på en huvudklass kallad PresentationController som ärver från AbstractController-klassen. Detta möjliggör att PresentationController kan använda attribut och metoder som är definierade i AbstractController. I koden finns det olika metoder som är definierade i PresentationController, såsom presentation, about, report och lucky. Varje metod representerar en specifik webbrutt för applikationen. Dessa metoder svarar på HTTP-förfrågningar på olika URL-rutter (/, /about, /report, /lucky) och returnerar en Response-objekt som innehåller den resulterande sidan. Varje metod använder också Twig-mallar för att rendera HTML-sidorna som ska visas för användaren. </p>
    <p>Jag fann både begreppet namespace och användningen av magiska metoder intressanta och värdefulla aspekter i artikeln \"PHP The Right Way\".
        Namespace-konceptet erbjuder en strukturerad metod för att organisera PHP-kod, vilket hjälper till att undvika namnkollisioner och göra koden mer läsbar och underhållbar. Genom att gruppera relaterade klasser och funktioner inom samma namespace blir det lättare att hantera och navigera i koden, vilket är särskilt användbart i större projekt.
        De magiska metoderna är också fascinerande eftersom de tillåter utvecklare att skapa mer dynamiska och flexibla klasser. Till exempel kan användningen av __construct()-metoden för att initiera objekt och __get() samt __set()-metoderna för att hantera egenskaper göra koden mer elegant och mindre repetitiv. Dessutom kan __toString()-metoden användas för att definiera hur objekt ska representeras som strängar, vilket kan vara användbart vid debugging och loggning.</p>
    <p> Min TiL för detta kursmomentet är Att arbeta med klasser i PHP ger en grundläggande förståelse för objektorienterad programmering och hur man strukturerar kod på ett mer organiserat sätt. Dessutom är det att skapa olika rutter med Twig och Symfony Framework ett värdefullt steg för att bygga webbapplikationer och hantera klientbegäranden på ett effektivt sätt.</p>

    <h2 id=\"kmom02\">Kmom02</h2>

    <p>I objektorienterad programmering finns det olika konstruktioner för att organisera och strukturera klasser:</p>
    <p>Arv (Inheritance):
    Arv innebär att en klass (barnklass) kan ärva egenskaper och metoder från en annan klass (förälderklass). I PHP uppnås detta genom att använda nyckelordet extends.</p> 
 
    <p>Komposition (Composition):
    Komposition innebär att en klass använder en instans av en annan klass som en av sina medlemmar. Detta ger flexibilitet genom att tillåta konstruktion av komplexa objekt genom att kombinera mindre komponenter. I PHP skapas komposition genom att skapa instanser av andra klasser inuti den aktuella klassen.</p>

    <p>Jag löste uppgiften genom att skapa fyra huvudklasser: Card, CardGraphic, DeckOfCards, och en controller-klass för spelet. Varje klass hade sin specifika uppgift och samverkade för att hantera kortspel.

Card representerade en enskild spelkort och innehöll information om dess svit och värde, samt en metod för att få dess strängrepresentation.

CardGraphic var en underklass av Card som utökade funktionaliteten genom att lägga till grafisk representation för varje kort, med hjälp av emojis för att representera kortets svit och värde.

DeckOfCards representerade en hel kortlek och skapade en ny kortlek med alla fyra sviterna och 13 värden (från 1 till 13). Den innehöll också metoder för att hantera kortleken som att hämta, sortera, blanda och dra kort från leken.

Jag är generellt nöjd med min implementation eftersom den uppfyller kraven för att hantera ett kortspel.</p>

    <h2 id=\"kmom03\">Kmom03</h2>
    <p> Att modellera ett kortspel med flödesdiagram och pseudokod var en givande upplevelse som hjälpte mig att sätta ett tydligt plan för implementationen. Genom att använda dessa verktyg förstod jag bättre vad jag behövde göra och hur jag skulle börja. Trots att jag behövde justera vissa delar under arbetets gång kände jag mig säker i min plan och medveten om vägen framåt mot mitt mål.</P>
    <p>När det kommer till min implementation av uppgiften, byggde jag vidare på tidigare klasser som Card, HandCard och DeckOfCards, men la till nödvändiga metoder för spelet. Till exempel utökade jag Card-klassen med en metod för att bestämma kortens värde enligt Blackjack-spelet, och i HandCard-klassen skapade jag en metod för att räkna den totala value i handen. Jag introducerade också två nya klasser, Player för spelregler och spelarinput, samt CoinGraphic som representerade spelarens balans med Unicode-symboler.När det gäller att koda i Symfony-ramverket, känner jag mig mer och mer bekväm ju längre in i kursen jag kommer.</p>

    <h2 id=\"kmom04\">Kmom04</h2>
    <p>Att skriva kod för att testa annan kod med PHPUnit var en lärorik och givande upplevelse. Enhetstestning är inte ett helt nytt koncept för mig, då jag har arbetat med det i en tidigare kurs i Python. PHPUnit visade sig vara ett mycket användbart verktyg för att säkerställa att alla metoder i min kod fungerar som förväntat. </p>
    <p>Jag lyckades uppnå mer än 90% kodtäckning, vilket jag är mycket nöjd med. Detta innebär att majoriteten av min kod är testad och att jag kan vara trygg med att de flesta funktionaliteter fungerar som de ska.</P>
    <p>Jag valde att skriva om delar av min kod för att förbättra den och göra den mer testbar. Till exempel hade jag två funktioner i mitt kortspel som jag inte använde, så jag tog bort dem. Detta innebar att jag inte behövde skriva tester för dessa onödiga funktioner, vilket gjorde min kodbas mer fokuserad och lättare att underhålla</p>
    <p>Jag anser att testbar kod ofta är en indikator på \"snygg och ren kod\". Om koden är testbar, lätt att testa betyder att vi har en kodbas som är lättare att förstå, underhålla och utöka i framtiden.</p>

    <h2 id=\"kmom05\">Kmom05</h2>
    <p>Att arbeta med Object-Relational Mapping (ORM) i CRUD-processer med Doctrine var en positiv upplevelse. ORM underlättar hanteringen av databaser genom att mappa databasstrukturer till PHP-objekt. Det påminner om hur vi tidigare arbetat med databaser och JSON, men med några viktiga skillnader:Istället för att hantera databastabeller och rader direkt, definierar vi klasser som representerar tabeller och objekt som representerar rader.Doctrine genererar SQL-frågor automatiskt.Hantering av databasstrukturändringar genom migreringar blir smidigare.</p>
    <p>Jag valde att strukturera applikationen enligt:Model som Hanterar datalagring och affärslogik. Jag använde Doctrine ORM för att mappa databasen till PHP-objekt, vilket gjorde det lättare att arbeta med databasen på ett objektorienterat sätt.
Formulär: Användning av Symfony Forms för att skapa och redigera böcker.
Controller: Hanterar användarinteraktioner och uppdaterar modellen och vyerna. Controllers använder sig av Symfony routing för att definiera hur olika URL:er ska hanteras.</p>


<h2 id=\"kmom10\">Kmom10</h2>
<p><strong>Krav 1-3:</strong> Spelare och Grundläggande Spelmekanik
Eftersom jag redan hade arbetat med kortklasserna i tidigare uppgifter, behövde jag inte börja från grunden. Först skapade jag en Player-klass som innehåller nödvändiga metoder för att skapa en spelare, hantera spelarens hand , spelarens tur och justera balansen. Jag implementerade metoder för att lägga till kort till spelarens hand, kontrollera om spelaren har en Blackjack, och uppdatera spelarens balans baserat på spelets utgång. Efter att ha definierat alla nödvändiga klasser för spelet, såsom DeckOfCards och Card, fortsatte jag med att skapa olika rutter för spelets logik.

Jag skapade en player-rutt som renderade en formulärmall för att välja antal spelare. Nästa steg var att implementera setup-rutten, där användaren kunde ange spelarnas namn och balans. Slutligen implementerade jag play, hit, stay, dealer rutten som styr själva spelet. Denna rutt hanterade spelarnas interaktioner med kortleken och bankens agerande. För att organisera koden och säkerställa en enhetlig design skapade jag en grundmall (base7.html.twig) som jag importerade i alla spelets relaterade mallar. Jag tillämpade också en ny stil på dessa mallar för att förbättra användarupplevelsen och göra spelet mer visuellt tilltalande.
</p>
<p><strong>Krav 4: API-kontroller</strong>JFör att möta kravet på att skapa API-kontroller, utvecklade jag en API-kontroller med fem olika rutter som ger en omfattande förståelse för spelet och dess rules.Jag började med att skapa en ny API-kontroller som innehåller fem olika API-rutter. <strong>/proj/api/intro</strong>  Denna rutt ger en kort introduktion till spelet Blackjack,<strong>  /proj/api/bust</strong> Denna rutt förklarar vad det innebär att gå \"bust\" i spelet Blackjack.<strong> /proj/api/blackjack</strong> Denna rutt förklarar vad en Blackjack är och ger ett exempel på när en spelare har en Blackjack.,
<strong> /proj/api/rules</strong>Denna rutt visar reglerna för spelet Blackjack. Alla de fyra rutten är GET rutten son returnerar  Informationen i ett JSON-format. Medan  <strong>/proj/api/value/{num}</strong> rutt tar emot ett nummer och returnerar dess värde i spelet Blackjack. Denna är en POST- och GET-rutt som hanterar värdet av ett postat nummer enligt Blackjack-reglerna. Det betyder att användaren kan skicka ett nummer och få tillbaka dess värde baserat på spelets regler.
,
</p>
<p>Projektet var lagom utmanande och tidsramen passade mycket bra med de krav som ställdes. För mig innebar projektet ett fokus på de obligatoriska kraven och även på krav 4, vilket kändes som en väl avvägd och genomförbar uppgift.

</p>
<p>En av de största utmaningarna var att säkerställa att spelreglerna implementerades korrekt och att spelet fungerade utan buggar. Det krävde en del tid och noggrannhet att se till att alla aspekter av spelets logik fungerade som de skulle. Att hantera kortleken och spelarnas handlingar på ett sätt som både var konsekvent och intuitivt var en komplex uppgift som krävde flera iterativa förbättringar och tester.</p>

<p>Något som underlättade projektet var att jag hade färdiga klasser från tidigare arbete som jag kunde bygga vidare på. Återanvändningen av dessa klasser var en av de mest nyttiga erfarenheterna och sparade mycket tid och ansträngning. Det gjorde det möjligt att fokusera mer på att förbättra och integrera funktionalitet snarare än att behöva bygga allt från grunden.</p>
<p>Kursen har varit mycket lärorik och har gett mig djupare insikter i viktiga teknologier och metoder. Jag har lärt mig en hel del under varje moment, från att arbeta med klasser och kontroller till att använda Symfony-ramverket. Det var särskilt värdefullt att få praktisk erfarenhet av ORM för databasanslutningar och att förbättra kodkvaliteten genom enhetstester samt analysverktyg som Scrutinizer och PHP Metrics.</p>
<p>Jag är mycket nöjd med kursens upplägg och den handledning som erbjudits. Lärarna har varit tillgängliga och hjälpsamma, vilket har gjort det lättare att förstå och lösa de problem som uppstod. Feedbacken på uppgifterna har varit konstruktiv och hjälpsam för att förbättra mina färdigheter.På en skala från 1 till 10 skulle jag ge kursen ett starkt betyg på 9. Det har varit en utmanande men mycket givande resa.</p>
{% endblock %}
", "home/report.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/home/report.html.twig");
    }
}
