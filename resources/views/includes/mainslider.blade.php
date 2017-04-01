<div class="slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <!-- <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                    <img src="images/wall2.jpg" data-fullwidthcentering="on" alt="slide">
                    <div class="tp-caption first-line lfr tp-resizeme start" data-x="center" data-hoffset="0" data-y="center" data-speed="2500" data-start="500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><span>Sprial / Architects</span><h1>ARCHITECTURE <br> URBAN PLANING <br> INTERIOR DESIGN<em>LANDSCAPE</em> INFRASTRUCTURE <br> PROJECT MANAGEMENT </h1><div class="slider-button"></div></div>
                </li> -->
                 @foreach($mainslides as $mainslide)
                <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                    <img src="{{ $mainslide->photourl1 }}" data-fullwidthcentering="on" alt="slide">
                    <!-- <div class="tp-caption first-line lfr tp-resizeme start" data-x="center" data-hoffset="0" data-y="center" data-speed="3000" data-start="500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><span>Project / March 25, 2016</span><h1>Awesome White <em>Interior</em></h1><div class="slider-button"><a href="single-project.html">View Project</a></div></div> -->
                </li>
                @endforeach
            
            </ul>
        </div>
    </div>
</div>