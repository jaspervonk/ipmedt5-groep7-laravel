<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('recepten')->insert([
        //     'naam' => 'Ontbijt Cake',
        //     'soort' => 'ontbijt',
        //     'ingredienten' => '100 gram (spelt)bloem, 100 gram amandelmeel, 75 gram palmsuiker, 1 eetlepel kokosolie',
        //     'bereiden' => 'Meng de droge ingrediënten in een kom. Dit is de bloem, amandelmeel, het bakpoeder, de specerijen en het zout. Met een vork meng je dit goed met elkaar.',
        //     'afbeelding' => '/img/recept_default.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Kip Pesto Tosti',
        //     'soort' => 'ontbijt',
        //     'ingredienten' => '1 kipfilet
        //     1 bouillonblokje (kip of groente)
        //     4 boterhammen
        //     4-6 zongedroogde tomaatjes
        //     2 el pesto
        //     1 rode ui
        //     1 bol mozzarella
        //     snufje zwarte peper',
        //     'bereiden' => 'Vul een pan met water en breng het water aan de kook. Als het water kookt, voeg je de kipfilet en 1 bouillonblokje toe. Kook de kipfilet circa 10 minuten totdat de kip gaar is. Ondertussen snijd je de zongedroogde tomaatjes fijn en de ui in halve ringen. Snijd de mozzarella in plakjes. Als de kip gaar is, laat je hem een beetje afkoelen. Daarna pluk je de kip uit elkaar met je handen of 2 vorken. Meng in een bakje de kip en pesto door elkaar. Besmeer 2 boterhammen met dit mengsel. Leg hier wat ui, zongedroogde tomaatjes en mozzarella op. Daarna leg je er de andere boterham op en bak je de tosti’s een paar minuten op een tosti-ijzer totdat ze goudbruin zijn.',
        //     'afbeelding' => '/img/kip_pesto_tosti.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Pittige Tosti',
        //     'soort' => 'ontbijt',
        //     'ingredienten' => '2 plakken oude of belegen kaas
        //     4 boterhammen
        //     1 tl sambal
        //     paar plakjes chorizo
        //     1 tomaat',
        //     'bereiden' => 'Besmeer een boterham met een dun laagje sambal en snijd de tomaat in plakjes. Beleg de boterham met kaas, plakjes chorizo en plakjes tomaat. Leg een andere boterham er bovenop en bak de tosti 5 minuten op een tostigrill.',
        //     'afbeelding' => '/img/pittige_tosti.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Chocolade Pannenkoeken Met Havermout',
        //     'soort' => 'ontbijt',
        //     'ingredienten' => '2 bananen (het liefst zo rijp mogelijk)
        //     200 ml melk
        //     125 gr havermout
        //     2 eieren
        //     1 el cacaopoeder
        //     4 el mascarpone
        //     4 el kwark
        //     1 tl honing
        //     vers fruit zoals blauwe bessen en druiven',
        //     'bereiden' => 'Prak de bananen met een vork tot moes. Doe de geprakte bananen, de melk, cacaopoeder en de havermout in een hoge mengkom en maal het geheel fijn met de staafmixer. Voeg daarna het ei toe en meng dit met een lepel door het beslag. Verwarm een beetje olie of boter in een pan en schep met een lepel kleine hoopjes in de pan. Ik bak ongeveer 3 pannenkoekjes per keer. ',
        //     'afbeelding' => '/img/choco_pannenkoek.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Omelet',
        //     'soort' => 'ontbijt',
        //     'ingredienten' => '2 eieren
        //     scheutje melk
        //     1/4 paprika
        //     halve rode ui
        //     1/4 courgette
        //     1 kleine aardappel
        //     2-3 cherrytomaatjes
        //     1 tl Provençaalse kruiden
        //     evt. handje geraspte kaas
        //     snufje zout en peper',
        //     'bereiden' => 'Schil de aardappel en snijd in kleine blokjes. Giet een scheutje olie in een pan en bak de aardappelblokjes circa 7-8 minuten. Ondertussen snijd je de paprika, courgette, tomaatjes en ui in stukjes. Na 8 minuten voeg je de groenten en de kruiden toe aan de stukjes aardappel. Bak dit een paar minuutjes mee. Meng in een bakje de eieren met een scheutje melk of room. Giet dit mengsel over de groenten in de pan. Zet de deksel op de pan en laat circa 5 minuten bakken. Als de bovenkant gestold is, kun je de omelet omdraaien met behulp van een spatel of een bord. Bak nog 2 minuutjes aan de andere kant en klaar is je omelet.',
        //     'afbeelding' => '/img/omelet.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Broodje Italiaanse Omelet',
        //     'soort' => 'lunch',
        //     'ingredienten' => '2 broodjes naar keuze
        //     3 eieren
        //     handje geraspte kaas
        //     1 bosui
        //     4 zongedroogde tomaten
        //     1 stuk gegrilde paprika
        //     scheutje slagroom of kookroom
        //     handje rucola
        //     2 theelepels truffelmayonaise
        //     halve theelepel paprikapoeder
        //     zout en peper',
        //     'bereiden' => 'Kluts de eieren samen met de kaas, een scheutje slagroom of kookroom, paprikapoeder en zout en peper los. Snij de bosui in ringen en de zongedroogde tomaatjes en gegrilde paprika mogen in kleine stukjes gesneden worden. Doe je eimengsel in een koekenpan en bak de omelet totdat deze aan beide kanten mooi bruin is. Doe wat olijfolie in een aparte pan en bak hierin kort de bosui, paprika en zongedroogde tomaatjes. Besmeer de broodjes ieder met een theelepel truffelmayonaise. Verdeel de omelet en je bosui met paprika en tomaatjes over de twee broodjes en maak af met een handje rucola. Eet smakelijk!',
        //     'afbeelding' => '/img/broodje_omelet.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Lunchwrap',
        //     'soort' => 'lunch',
        //     'ingredienten' => '4 wraps
        //     5 eieren
        //     scheutje melk
        //     60 gr chorizo
        //     1 ui
        //     1 paprika
        //     25 gr geraspte kaas
        //     3 tomaten
        //     1 teen knoflook
        //     2 tl peterselie
        //     snufje zout en peper',
        //     'bereiden' => 'Snijd de ui, paprika, tomaten en chorizo in stukjes. Meng in een bakje de eieren met een scheutje melk, peterselie en een snufje zout en peper. Giet een scheutje olie in een koekenpan en voeg de ui, paprika en chorizo toe. Bak dit ongeveer 5 minuten en voeg dan de geklutste eieren toe. Blijf ondertussen roeren en na ongeveer 4-5 minuten is het ei gaar. Zet het vuur uit en voeg de geraspte kaas toe. Meng de tomatenblokjes met een scheutje olie en een snufje zout en peper in een bakje. Eventueel kun je wat mayonaise over de wrap uitsmeren. Verdeel ongeveer 1/4 van het ei-mengsel over een wrap en daarna 2-3 eetlepels van de tomatensalsa erop. Even oprollen en klaar!',
        //     'afbeelding' => '/img/lunchwrap.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Bami Goreng',
        //     'soort' => 'diner',
        //     'ingredienten' => '150 gr Eiermie
        //     1 zak bami groente
        //     Wortel, prei, spitskool
        //     1 teen knoflook
        //     rode peper
        //     0.5 tl trassi
        //     evt zonder trassi voor een vega versie
        //     1 tl kurkuma
        //     0.5 cm verse gember
        //     1 tl gemalen koriander/ketoembar
        //     1 tl komijn
        //     3 el ketjap manis
        //     2 eieren
        //     kroepoek, sate saus',
        //     'bereiden' => 'Gebruik je geen zakje gesneden bami groente? Begin dan met het snijden van de prei, wortel en spitskool. Kook de eiermie volgens de instructies op de verpakking. Schil de gember, pel het teentje knoflook en verwijder de zaadjes van de rode peper en snijd in kleine stukjes. Doe een scheutje olie in een hapjespan of wok en bak de groente en de rode peper een minuut of 4-5. Doe dan de kruiden erbij, pers de knoflook en gember boven de pan en doe de ketjap erdoor. Laat dit vervolgens nog een paar minuutjes zachtjes pruttelen. Schep dan de mie erdoor en laat nog even meebakken terwijl je in een andere pan twee spiegeleitjes bakt. Dan is het alleen nog een kwestie van opscheppen en opeten maar. ',
        //     'afbeelding' => '/img/bami_goreng.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Lasagne Carbonara',
        //     'soort' => 'diner',
        //     'ingredienten' => 'lasagne bladen
        //     1 rode ui
        //     250 gr ricotta
        //     200 ml kookroom
        //     150 gr spekreepjes
        //     2 tenen knoflook
        //     1 el maizena/allesbinder
        //     eventueel
        //     2 tl peterselie
        //     geraspte kaas
        //     peper',
        //     'bereiden' => 'Verwarm de oven voor op 180 graden. Bak de spekreepjes in ongeveer 5 minuten krokant, in een pan zonder olie. Snijd ondertussen de knoflook fijn en snipper de rode ui. Haal de spekreepjes vervolgens uit de pan en laat even uitlekken op een keukenpapiertje. Doe vervolgens een piepklein scheutje olie in een pan en fruit de ui en knoflook aan. Voeg na een minuutje de kookroom, ricotta en een snufje peper toe. Roer de spekjes erdoor en het vuur kan uit. Doe een klein beetje saus op de bodem van de ovenschaal. Daarbovenop doe je een laagje lasagnebladen, dan weer saus, dan weer lasganebladen en zo ga je door. De bovenste laag eindig je met saus en daarover strooi je nog geraspte kaas. Dan kan de lasagne nu de oven in voor ongeveer 30 minuten.',
        //     'afbeelding' => '/img/lasagne.jpg'
        // ]);
        
        // DB::table('recepten')->insert([
        //     'naam' => 'Kip Pesto Couscous',
        //     'soort' => 'diner',
        //     'ingredienten' => '150 gr couscous
        //     blokje groentebouillon
        //     zongedroogde tomaatjes
        //     pijnboompitten
        //     170 gr gerookte kipfilet
        //     3 tl groene pesto
        //     rucola
        //     peper',
        //     'bereiden' => 'Begin met het maken van de couscous. Doe de couscous in een pan of kom. Verkruimel hierover een half bouillonblokje en giet er kokend water over. Zorg ervoor dat het water 1cm boven de couscous uitkomt. Dan een schone theedoek over de pan/kom en laat vervolgens 5-10 minuten staan. Rooster ondertussen de pijnboompitjes. Doe de pijnboompitten in een pan zonder olie en rooster ze op middelhoog voor voor ongeveer 3-4 minuten totdat ze een beetje bruin beginnen te kleuren. Dan kan het vuur uit en doe je de pijnboompitjes in een schaaltje. Kleine tip, loop niet weg tijdens het roosteren van de pijnboompitten, het kan opeens hard gaan weet ik uit ervaring. Snijd de zongedroogde tomaten in stukjes net als de gerookte kipfilet. Snijd eventueel ook de rucola nog iets fijner. Als de cousccous klaar is, is het slechts nog een kwestie van alle ingrediënten erdoorheen mengen en opscheppen maar.',
        //     'afbeelding' => '/img/kip_couscous.jpg'
        // ]);
        
        // DB::table('recepten')->insert([
        //     'naam' => 'Pumpkin Pie',
        //     'soort' => 'dessert',
        //     'ingredienten' => '150 gr speculaasjes
        //     75 gr boter
        //     500 gr pompoenblokjes
        //     1 blikje gecondenseerde melk (397 gr)
        //     3 eieren
        //     1 tl koek- en speculaaskruiden
        //     50 gr suiker',
        //     'bereiden' => 'Kook de pompoenblokjes circa 10 minuten in een pan met water. Giet het water (goed!) af en stamp de pompoenblokjes tot puree. Dit kun je eventueel ook doen met een staafmixer. Schep daarna het pompoenmengsel op een bord, dek af met vershoudfolie en laat goed afkoelen. Verwarm de oven voor op 160 graden. Als het pompoenmengsel is afgekoeld, meng je de 3 eieren, het blikje gecondenseerde melk, de koek- en speculaaskruiden en de suiker er doorheen. Schep het geheel op de koekjesbodem in de (spring)vorm (22 cm). Bak de taart circa 70 minuten in de oven. Zet de oven op een kier (bijvoorbeeld door een pollepel er tussen te doen) en laat nog 2 uur in de oven staan. Daarna kan de taart de koelkast in. Als de taart goed afgekoeld is, kun je hem serveren met een lekkere dot slagroom.',
        //     'afbeelding' => '/img/pumpkin_pie.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'IJstaart met Fruit',
        //     'soort' => 'dessert',
        //     'ingredienten' => '1 liter vanille ijs
        //     aardbeien
        //     kiwi
        //     ananas
        //     cake
        //     kaneel',
        //     'bereiden' => 'Haal het vanille ijs uit de diepvries en wacht ongeveer 15 minuten totdat het ijs zacht genoeg is om te kunnen mengen. Snijd de cake in plakken. Leg een stuk huishoudfolie of bakpapier in een cakevorm. Bedek de bodem van de cakevorm met plakken cake. Snijd het fruit in stukjes en meng het ijs met het fruit en kaneel in een grote kom. Verdeel ongeveer de helft van het ijs over de plakken cake. Daarna weer een laagje cake en daarna de rest van het ijs. Zet de ijstaart in de diepvries. Na een nachtje in de diepvries is de ijstaart klaar. Snijd de ijstaart in plakken en serveer met wat slagroom. ',
        //     'afbeelding' => '/img/ijstaart_fruit.jpg'
        // ]);

        // DB::table('recepten')->insert([
        //     'naam' => 'Tiramisu',
        //     'soort' => 'dessert',
        //     'ingredienten' => '100 gr suiker
        //     250 gr mascarpone
        //     2 eieren
        //     cacao
        //     175 gr lange vingers
        //     1 espresso (90 ml)
        //     2 tl amandel aroma (of amaretto)',
        //     'bereiden' => 'Begin met het zetten van een espresso en laat de koffie afkoelen. Maak een kom en je mixer vetvrij. Dit kun je doen door met een keukenpapiertje met wat citroensap erop er langs te gaan. Scheid de eieren. Doe de eiwitten in de kom die je net vetvrij hebt gemaakt. Klop de eiwitten op totdat de stijf zijn en je de kom dus ondersteboven kunt houden. Meng in een andere kom het eigeel met het suiker totdat het romig is. Daarna meng je de mascarpone er even kort doorheen. Als dit goed gemengd is schep je ook de eiwitten er doorheen. Doe de koffie en amandel aroma/amaretto in een kom. Doop een lange vinger even kort in dit mengsel en leg dan in een (oven)schaal (met de gesuikerde kant naar boven). Bedek de bodem van de ovenschaal met lange vingers die je allemaal in de koffie hebt gedoopt. Daarna verdeel je de helft van het mascarpone mengsel over de lange vingers. Daarna weer een laag lange vingers en eindig met een laag van het mascarpone mengsel. Strooi wat cacao over de bovenkant. Dit kun je doen met behulp van een zeefje. Zet de tiramisu een paar uur in de koelkast (het liefste een hele nacht), totdat hij goed is opgesteven.',
        //     'afbeelding' => '/img/tiramisu.jpg'
        // ]);
        

    }
}
