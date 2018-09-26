<?php
/**
 * Template name: aboutpage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elsatheme
 */

get_header();
?>
					<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<svg id="icon-github" viewBox="0 0 33 33">
				<title>github</title>
				<path d="M16.608.455C7.614.455.32 7.748.32 16.745c0 7.197 4.667 13.302 11.14 15.456.815.15 1.112-.353 1.112-.785 0-.386-.014-1.411-.022-2.77-4.531.984-5.487-2.184-5.487-2.184-.741-1.882-1.809-2.383-1.809-2.383-1.479-1.01.112-.99.112-.99 1.635.115 2.495 1.679 2.495 1.679 1.453 2.489 3.813 1.77 4.741 1.353.148-1.052.569-1.77 1.034-2.177-3.617-.411-7.42-1.809-7.42-8.051 0-1.778.635-3.233 1.677-4.371-.168-.412-.727-2.069.16-4.311 0 0 1.367-.438 4.479 1.67a15.602 15.602 0 0 1 4.078-.549 15.62 15.62 0 0 1 4.078.549c3.11-2.108 4.475-1.67 4.475-1.67.889 2.242.33 3.899.163 4.311C26.37 12.66 27 14.115 27 15.893c0 6.258-3.809 7.635-7.437 8.038.584.503 1.105 1.497 1.105 3.017 0 2.177-.02 3.934-.02 4.468 0 .436.294.943 1.12.784 6.468-2.159 11.131-8.26 11.131-15.455 0-8.997-7.294-16.29-16.291-16.29"></path>
			</svg>
			<svg id="icon-rewind" viewBox="0 0 36 20">
				<title>rewind</title>
				<path d="M16.315.061c.543 0 .984.44.984.984v17.217c0 .543-.44.983-.984.983L.328 10.391s-.738-.738 0-1.476C1.066 8.178 16.315.061 16.315.061zM35.006.061c.543 0 .984.44.984.984v17.217c0 .543-.44.984-.984.984L19.019 10.39s-.738-.738 0-1.475C19.757 8.178 35.006.06 35.006.06z"/>
			</svg>
		</svg>
		<main>
			<header class="codrops-header">
				<div class="codrops-header__inner">
					<div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/PasswordStrengthVisualization/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=34685" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
					</div>
					<h1 class="codrops-header__title">Particle Effects for Buttons</h1>
					<span class="info">Playful particle animations for buttons</span>
					<a class="github" href="https://github.com/codrops/ParticleEffectsButtons/" title="Find this project on GitHub"><svg class="icon icon--github"><use xlink:href="#icon-github"></use></svg></a>
				</div>
			</header>
			</div>
			<div class="grid">
				<div class="grid__item theme-1">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Send</button>
				</div>
				<div class="grid__item theme-2">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Upload</button>
				</div>
				<div class="grid__item theme-3">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Delete</button>
				</div>
				<div class="grid__item theme-4">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Submit</button>
				</div>
				<div class="grid__item theme-5">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">refresh</button>
				</div>
				<div class="grid__item theme-6">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Bookmark</button>
				</div>
				<div class="grid__item theme-7">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Subscribe</button>
				</div>
				<div class="grid__item theme-8">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Logout</button>
				</div>
				<div class="grid__item theme-9">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Add to cart</button>
				</div>
				<div class="grid__item theme-10">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Pause</button>
				</div>
				<div class="grid__item theme-11">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Register</button>
				</div>
				<div class="grid__item theme-12">
					<button class="action"><svg class="icon icon--rewind"><use xlink:href="#icon-rewind"></use></svg></button>
					<button class="particles-button">Export</button>
				</div>
			</div>
		</main>	
				
<?php
get_footer(); ?>