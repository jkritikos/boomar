<nav id="main-nav">	
    <ul>
        <li <?php if($menuClass == 'about') echo "class=\"current\" "; ?>>
            <a href="/about" data-description="get to know us">About</a>
            <ul>
                <li><a href="/about">What we are</a></li>
                <li><a href="/team">Who we are</a></li>
                <li><a href="/approach">Our Approach</a></li>
            </ul>
        </li>
        <li <?php if($menuClass == 'services') echo "class=\"current\" "; ?>>
            <a href="/services" data-description="what we offer">Services</a>
            <ul>
                <li style="background-color: #595757;"><a href="/services">Overview</a></li>
                <li><a href="/services/mobile">Mobile Apps</a></li>
                <li><a href="/services/web">Websites</a></li>
                <li><a href="/services/branding">Branding</a></li>
                <li><a href="/services/strategy">Digital Strategy</a></li>
            </ul>
        </li>
        <li <?php if($menuClass == 'portfolio') echo "class=\"current\" "; ?>>
            <a href="/portfolio" data-description="Work we are proud of">Portfolio</a>
        </li>
        <li <?php if($menuClass == 'contact') echo "class=\"current\" "; ?>>
            <a href="/contact" data-description="get in touch">Contact</a>
        </li>
    </ul>
</nav><!-- end #main-nav -->