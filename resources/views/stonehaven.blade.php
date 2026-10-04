@extends('layouts.app', ['title' => 'History of Stonehaven | From Steenhive to Today', 'description' => 'Discover the story of Stonehaven, from the old harbour of Steenhive and its pirates and fishing boats to the Auld Toon, New Town and seaside town we know today.'])
@section('content')
<article class="town-history">
    <header class="town-hero">
        <p class="eyebrow">About Stonehaven</p>
        <h1>Stonehaven: From Steenhive to the Seaside Town</h1>
        <div class="town-intro">
            <p>Stonehaven has been called many things over the centuries.</p>
            <p>Stanhyve. Stinhyve. Steanhyve. Stanehevin. Steenhive.</p>
            <p>Today we know it simply as Stonehaven, or just Stoney. A town shaped by the North Sea, two rivers, a stubborn little harbour and generations of people who made their lives along this stretch of the Mearns coast.</p>
            <p>Its story begins long before the neat streets, beach promenade and harbour we recognise today.</p>
        </div>
        <p class="town-colophon">The Mearns coast · The Auld Toon · The North Sea</p>
    </header>
    <section class="town-section" aria-labelledby="town-chapter-1">
        <div class="town-copy">
            <p class="eyebrow">A Harbour With A Reputation</p>
            <h2 id="town-chapter-1">Pirates, pickeroons and Steenhive</h2>
            <p>Stonehaven began as a small fishing settlement clustered around the natural harbour south of the River Carron.</p>
            <p>And apparently it wasn't always quite as respectable as it is today.</p>
            <p>In 1658 the English traveller Richard Franck visited the town. He knew it as "Steenhive" and was distinctly unimpressed with the harbour, describing it as serving "pirates and pickeroons".</p>
            <p>It is a wonderfully colourful glimpse of seventeenth-century Stonehaven: a small, rough North Sea port where fishing boats, merchants and rather less respectable seafarers sheltered beneath the cliffs.</p>
            <p>The town's old name is interesting in its own right.</p>
            <p>Historical records contain spellings including Stanhyve, Stinhyve, Steanhyve and Stanehevin, while "Steenhive" survived locally for centuries.</p>
            <p>The origin of the name isn't as simple as it first appears. Historians have debated its meaning, and early spellings suggest that the modern words "stone" and "haven" may not tell the whole story.</p>
        </div>
        <x-town-history-image image="steenhive-old-harbour.jpg" caption="The old harbour at Stonehaven — once known as Steenhive." />
    </section>
    <figure class="town-quote"><blockquote>“…a small harbour which they call Steenhive…”</blockquote><figcaption>Richard Franck, 1658</figcaption></figure>
    <section class="town-section town-section-reverse" aria-labelledby="town-chapter-2">
        <div class="town-copy">
            <p class="eyebrow">The Auld Toon</p>
            <h2 id="town-chapter-2">The town grew around the harbour</h2>
            <p>The oldest Stonehaven grew south of the Carron Water around the harbour, High Street, the Tolbooth and Market Cross.</p>
            <p>This is the part of Stonehaven now affectionately known as the Auld Toon.</p>
            <p>Stonehaven became a Burgh of Barony under George Keith, 5th Earl Marischal, in 1587. In 1600 it replaced the declining settlement of Kincardine as the county town of Kincardineshire.</p>
            <p>The harbour therefore became more than somewhere to land fish.</p>
            <p>Government, trade and everyday life gathered around the same small collection of streets.</p>
            <p>The old Tolbooth beside the harbour began as a storehouse before becoming the county courthouse and prison. It survives today as one of the clearest links with this early Stonehaven.</p>
        </div>
        <x-town-history-image image="auld-toon-high-street.jpg" caption="A historic view along the High Street in the Auld Toon heading towards the clock tower." fallback="images/stonehaven-historic-street.jpg" />
    </section>
    <section class="town-section" aria-labelledby="town-chapter-3">
        <div class="town-copy">
            <p class="eyebrow">War, Fire And A Difficult Century</p>
            <h2 id="town-chapter-3">Stonehaven wasn't always peaceful</h2>
            <p>The seventeenth century brought national conflict directly into the streets of Stonehaven.</p>
            <p>During the Wars of the Three Kingdoms, the Marquis of Montrose came to the town seeking support from the Earl Marischal.</p>
            <p>When that support was refused, Stonehaven was plundered and burned.</p>
            <p>Just a few miles south, Dunnottar Castle would become part of an even larger national story — from the imprisonment of Covenanters to the dramatic hiding of the Honours of Scotland from Cromwell's army.</p>
            <p>For a town that today feels peaceful and compact, Stonehaven has witnessed a surprising amount of Scottish history.</p>
        </div>
        <x-town-history-image image="dunnottar-castle.jpg" caption="Dunnottar Castle has watched over this coast for centuries." :modern="true" class="town-image-wide" />
    </section>
    <section class="town-section town-section-reverse" aria-labelledby="town-chapter-4">
        <div class="town-copy">
            <p class="eyebrow">Old Town, New Town</p>
            <h2 id="town-chapter-4">Stonehaven crosses the Carron</h2>
            <p>For centuries the centre of Stonehaven was the old settlement around the harbour.</p>
            <p>That began to change in the eighteenth century.</p>
            <p>In 1759 Robert Barclay of Ury purchased the estate of Arduthie and set about developing a New Town on the land north of the Carron.</p>
            <p>The difference can still be seen when walking through Stonehaven today.</p>
            <p>The Auld Toon follows the older, less regular pattern around the harbour and High Street. Cross the Carron and the town opens into the more planned streets and spaces of the later settlement.</p>
            <p>Over time the two became one Stonehaven.</p>
        </div>
    </section>
    <aside class="town-geography" aria-label="Old and new Stonehaven"><div><h3>Auld Toon</h3><p>Harbour · High Street · Tolbooth</p></div><p class="town-river">River Carron</p><div><h3>New Town</h3><p>Market Square · Allardice Street · Arduthie</p></div></aside>
    <section class="town-section" aria-labelledby="town-chapter-5">
        <div class="town-copy">
            <p class="eyebrow">Taming The Harbour</p>
            <h2 id="town-chapter-5">The North Sea kept winning</h2>
            <p>Stonehaven's harbour has always been central to the town, but building one that could survive the North Sea proved remarkably difficult.</p>
            <p>A harbour existed before 1607, but early structures were repeatedly damaged or destroyed by storms.</p>
            <p>For generations another problem sat directly in the way: a great mass of rock known as Craig-ma-Cair near the harbour entrance.</p>
            <p>In the early nineteenth century the celebrated engineer Robert Stevenson — part of the famous Stevenson engineering family — was asked to devise improvements.</p>
            <p>An Act of Parliament in 1825 created Harbour Commissioners and major works followed. Craig-ma-Cair was blasted away, the harbour was deepened and a new South Pier was constructed.</p>
            <p>Later extensions gradually produced the harbour we recognise today.</p>
        </div>
        <x-town-history-image image="historic-harbour.jpg" caption="Generations of engineering turned a difficult natural inlet into Stonehaven Harbour." />
    </section>
    <section class="town-section town-section-reverse" aria-labelledby="town-chapter-6">
        <div class="town-copy">
            <p class="eyebrow">A Working Town</p>
            <h2 id="town-chapter-6">Fish, leather, rope and whisky</h2>
            <p>Nineteenth-century Stonehaven was not primarily the visitor destination we know today.</p>
            <p>It was a working town.</p>
            <p>Fishing remained important, particularly haddock and herring, and the improved harbour supported increasing numbers of boats.</p>
            <p>But Stonehaven also had industries that have largely disappeared from the modern town.</p>
            <p>There were tanneries, breweries, distilling, textile manufacture and businesses making nets, rope and twine.</p>
            <p>By the end of the nineteenth century more than a hundred herring boats could work from the harbour during a season.</p>
            <p>The streets around the harbour and High Street were therefore filled not simply with residents, but fishermen, labourers, craftsmen, merchants and the businesses needed to support a busy coastal town.</p>
            <p><a class="text-link" href="{{ route('about') }}">Read our family’s Stonehaven story →</a></p>
        </div>
    </section>
    <section class="town-section" aria-labelledby="town-chapter-7">
        <div class="town-copy">
            <p class="eyebrow">The Seaside Town</p>
            <h2 id="town-chapter-7">From working harbour to place to escape to</h2>
            <p>As transport improved and Victorian Britain discovered the pleasures of the seaside, Stonehaven developed another identity.</p>
            <p>Its beach, bay and dramatic coastline made it a natural destination for visitors.</p>
            <p>The town expanded beyond its old industrial and fishing roots, but never completely lost them.</p>
            <p>That combination remains part of Stonehaven's character today.</p>
            <p>Walk from the town centre towards the harbour and the surroundings change quickly: shops and cafés give way to the older streets, then fishing boats, stone walls and the open North Sea.</p>
            <p>It feels less like moving through one town than walking through several centuries of it.</p>
        </div>
    </section>
    <section class="town-section town-section-reverse" aria-labelledby="town-chapter-8">
        <div class="town-copy">
            <p class="eyebrow">Stonehaven Today</p>
            <h2 id="town-chapter-8">Still recognisably Steenhive</h2>
            <p>Modern Stonehaven is obviously very different from the rough little port Richard Franck encountered in 1658.</p>
            <p>But the geography that created the town is still remarkably easy to see.</p>
            <p>The Carron still divides old from new. The Cowie still reaches the sea at the northern end of the bay. The High Street still leads towards the harbour. Fishing boats still sit inside the piers. And Dunnottar still dominates the cliffs to the south.</p>
            <p>Stonehaven has grown, changed industries and absorbed generations of new buildings and people.</p>
            <p>Yet stand at the harbour and look back towards the Auld Toon and the shape of the old settlement remains.</p>
            <p>Perhaps that is part of its appeal.</p>
            <p>Stonehaven has changed without completely erasing what came before.</p>
        </div>
        <x-town-history-image image="stonehaven-harbour-today.jpg" caption="Stonehaven Harbour and the Auld Toon today." :modern="true" class="town-image-wide" />
    </section>
    <section class="town-closing" aria-labelledby="town-closing-title">
        <p class="eyebrow">56 High Street</p>
        <h2 id="town-closing-title">And that's where you'll find us</h2>
            <p>Old Stoney Flat sits at 56 High Street, in the Auld Toon.</p>
            <p>The harbour is at one end of the street. The town centre is a short walk in the other direction. The beach is seconds away.</p>
            <p>For our family, those streets have another significance.</p>
            <p>Our records place family members on and around Stonehaven's High Street from the 1880s, and number 56 itself has been part of the family story for generations.</p>
            <p>So when we talk about Old Stoney Flat being in the heart of old Stonehaven, we mean it quite literally.</p>
        <div class="town-actions"><a class="button" href="{{ route('about') }}">Our family story →</a><a class="button town-button-outline" href="{{ route('home') }}">The flat →</a></div>
    </section>
    <aside class="town-sources" aria-labelledby="town-sources-title">
        <h2 id="town-sources-title">About the history</h2>
        <p>This page draws on historical records and published histories of Stonehaven, including Aberdeenshire’s Historic Environment Record, historical burgh records, Stonehaven harbour records and the Scottish Burgh Survey. Where the origin of a name or historical interpretation is uncertain, we’ve tried to say so.</p>
    </aside>
</article>
@endsection
