@extends('layouts.app', ['title' => 'Our story'])
@section('content')
<article class="story-page">
    <header class="story-header">
        <div class="story-header-copy">
        <p class="eyebrow">Our story</p>
        <h1>More than a flat<br>on the <em>High Street</em></h1>
        <div class="story-intro">
            <p>Old Stoney Flat may be a new name, but our connection with this part of Stonehaven is anything but new.</p>
            <p>For generations, members of our family have lived and worked around the High Street, Allardice Street, Bridge of Cowie and the old town. Number 56 itself has been part of the family story since the 1950s, but our family connection with the High Street goes back to the 1880s, and our roots in Stonehaven stretch further still, to the 1700s.</p>
            <p>This page is the story of that connection — and why, for us, this will never simply be another holiday flat.</p>
        </div>
        </div>
        <div class="story-header-image">
            <x-history-postcard image="stonehaven-old-town.jpg" caption="The old town · Stonehaven" period="Our corner of Stonehaven" />
        </div>
        <p class="story-index">Stonehaven · A family story · 1880s–today</p>
    </header>
    <ol class="story-timeline" aria-label="Our family history">
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="allardice-street-1880s.jpg" caption="Allardice Street · 1880s" period="1880s" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-1">
                <p class="story-period">1880s</p>
                <h2 id="chapter-1">The story was already close to the High Street</h2>
                <p>Our family connection with Stonehaven can be traced through records from the nineteenth century.</p>
                <p>In the 1881 census, James Slorach, an agricultural and tannery labourer, was living with his wife Elizabeth and their family at 53 Allardice Street, only a short distance from the High Street.</p>
                <p>Their son William would become part of the next chapter of the family&#x27;s Stonehaven story.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="high-street-historic.jpg" caption="High Street · Stonehaven" period="1886" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-2">
                <p class="story-period">1886</p>
                <h2 id="chapter-2">64 High Street</h2>
                <p>On 30 December 1886, William G. Slorach married Christina Todd at the Manse of Dunnottar.</p>
                <p>Their marriage record gives William&#x27;s residence as Bridge of Cowie. Christina&#x27;s address was 64 High Street, Stonehaven.</p>
                <p>That small detail in an old marriage register gives us something rather special: documentary evidence of our family&#x27;s connection with the High Street almost 140 years ago.</p>
                <p>Long before Old Stoney Flat had a name, the High Street was already part of the family story.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="high-street-1890.jpg" caption="Stonehaven High Street · late 1800s" period="1890" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-3">
                <p class="story-period">1890</p>
                <h2 id="chapter-3">Back on the High Street</h2>
                <p>Only a few years later, the records bring the family back to the High Street again.</p>
                <p>James Slorach died in Stonehaven on Christmas Day 1890. His death certificate records his final address on High Street.</p>
                <p>The house number on the surviving record is difficult to read with certainty, so we won&#x27;t pretend to know exactly which doorway it was.</p>
                <p>What we do know is that by the end of the nineteenth century, several generations of the family were already living their lives within the same small part of Stonehaven that remains important to us today.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="ann-street-1920s.jpg" caption="Ann Street · Stonehaven · 1920s" period="1900–1920s" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-4">
                <p class="story-period">1900–1920s</p>
                <h2 id="chapter-4">Jessie and Alexander</h2>
                <p>William and Christina&#x27;s daughter, Jessie Watt Slorach, was born in 1900.</p>
                <p>In June 1922 she married Alexander Greig in Stonehaven, bringing together two families whose roots stretched through north-east Scotland.</p>
                <p>The Slorachs can be traced through Stonehaven, Huntly and Forgue. Alexander&#x27;s Greig family came through Kinneff, Fettercairn, Laurencekirk and Glenbervie before their own story reached Stonehaven.</p>
                <p>Alexander worked as a road foreman and the couple lived in Ann Street, another familiar old-town street only a short walk from the harbour and High Street.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="jessie-slorach.jpg" caption="56 High Street · Stonehaven" period="Later 20th century" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-5">
                <p class="story-period">Later 20th century</p>
                <h2 id="chapter-5">Jessie comes to 56 High Street</h2>
                <p>The family story eventually arrived at the address at the heart of this website: 56 High Street.</p>
                <p>Jessie Watt Slorach lived at number 56 in her later years. The High Street that had appeared in the family&#x27;s records in the 1880s had, generations later, become home again.</p>
                <p>By then this wasn&#x27;t simply a street connected to the family through old certificates and census returns. Number 56 was part of everyday family life.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="56-high-street-1957.jpg" caption="56 High Street · 1957" period="1957" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-6">
                <p class="story-period">1957</p>
                <h2 id="chapter-6">The flat becomes home</h2>
                <p>The present flat at 56 High Street became part of our family&#x27;s story in 1957, when the first member of our family moved into it.</p>
                <p>From then on, the flat became a constant.</p>
                <p>Children grew up knowing it. Family visited. Generations stood at the windows looking towards the old town, harbour and sea, and watching the fireballs at New Year.</p>
                <p>Stonehaven changed around it, but the flat remained part of the family.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="family-memories.jpg" caption="Family life at 56 High Street" period="1950s–today" />
                <x-history-postcard image="56-high-street-family.jpg" caption="At home, through the years" period="No. 56" class="history-postcard-secondary" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-7">
                <p class="story-period">1950s–today</p>
                <h2 id="chapter-7">Nearly seventy years of memories</h2>
                <p>For nearly seventy years, number 56 has been somewhere our family has returned to.</p>
                <p>The memories aren&#x27;t grand ones. That&#x27;s really the point.</p>
                <p>They&#x27;re ordinary family memories — visits, conversations, looking out of the window, walking down to the harbour, heading to the beach and stepping out onto a High Street that generations before us would also have recognised.</p>
                <p>That is what makes the flat important to us.</p>
                <p>It isn&#x27;t an investment property that happened to be in Stonehaven. It was part of our family long before we ever considered allowing other people to stay here.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="flat-before-renovation.jpg" caption="The beginning of the next chapter · 2026" period="2026" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-8">
                <p class="story-period">2026</p>
                <h2 id="chapter-8">Old Stoney Flat</h2>
                <p>Now it is our turn to look after it.</p>
                <p>In 2026 we began the process of renovating the flat — not to strip away its character or turn it into another anonymous holiday apartment, but to give it another chapter.</p>
                <p>The work will bring new heating, a new kitchen and bathroom, decoration and all the practical things an old flat needs.</p>
                <p>But the important parts won&#x27;t change.</p>
                <p>The location. The view. The old town outside the door. And the knowledge that this little part of Stonehaven has been woven through our family&#x27;s history for generations.</p>
            </section>
        </li>
        <li class="story-entry">
            <div class="story-images">
                <x-history-postcard image="flat-renovated.jpg" caption="The story continues..." period="The future" />
            </div>
            <section class="story-chapter" aria-labelledby="chapter-9">
                <p class="story-period">The future</p>
                <h2 id="chapter-9">Sharing it, without losing what it is</h2>
                <p>Old Stoney Flat will occasionally become somebody else&#x27;s home for a few nights.</p>
                <p>That helps us meet the cost of keeping and maintaining a place that means a great deal to our family. But it remains our home in Stonehaven too.</p>
                <p>We hope the photographs and stories on this website will eventually show the whole journey — what the flat was, the work involved in bringing it back to life, and what it becomes.</p>
                <p>And if you stay here one day, you&#x27;ll be staying somewhere with a story that began long before the booking page.</p>
            </section>
        </li>
    </ol>
    <aside class="story-closing" aria-label="The latest chapter">
        <p class="eyebrow">Rooted in the old town</p>
        <blockquote>“Different generations.<br>The same streets.”</blockquote>
        <p>From Christina Todd at 64 High Street in 1886, to Jessie at number 56, and our family today, Stonehaven's old town has been part of this family's story for well over a century.</p>
        <p class="story-signoff">Old Stoney Flat is simply the latest chapter.</p>
    </aside>
</article>
@endsection
