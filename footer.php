<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	
	astra_body_bottom();
?>

<!-- Footer -->

<footer>
       
	<div class="footer-column">
                	<a href="<?php bloginfo('url'); ?>">
						<img class='logoimg2' src="<?php bloginfo('template_url'); ?>/images/logo.webp" alt="Logo"/>
				   </a>

			<div class="">
			<p class='fpara'>Create a website that works</p>
			</div>

			<div class="fsvg-layout">

			
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/li.svg" alt="linkedin">
				   </a>

				   <a href="<?php bloginfo('url'); ?>">
				   		<img src="<?php bloginfo('template_url'); ?>/images/f.svg" alt="facebook">
				   </a>

				   <a href="<?php bloginfo('url'); ?>">
				        <img src="<?php bloginfo('template_url'); ?>/images/insta.svg" alt="instagram">
				   </a>

				   <a href="<?php bloginfo('url'); ?>">
				   		<img src="<?php bloginfo('template_url'); ?>/images/twi.svg" alt="twitter">
				   </a>
			</div>
        </div>



        <div class="footer-column">
            
			<div class="flayout">
			<p class='fhead'>Menu</p>

			<div class="">
				<div ><a class='fp' href="">About</a></div>
				<div ><a class='fp' href="">Our work</a></div>
				<div ><a class='fp' href="">Packages</a></div>
				<div ><a class='fp' href="">Blog</a></div>
				<div ><a class='fp' href="">Contact Us</a></div>

				<!-- <p ><a class='fp' href="">About</a></p>
				<p ><a class='fp' href="">Our work</a></p>
				<p ><a class='fp' href="">Packages</a></p>
				<p ><a class='fp' href="">Blog</a></p>
				<p ><a class='fp' href="">Contact Us</a></p> -->
			</div>
			</div>
			
        </div>

		<div class="footer-column">
            
			<div class="flayout sol">
			<p class='fhead'>Solutions</p>

			<div class="">
				<div ><a class='fp' href="http://localhost/stepforadder/responsive-web-design/">Web Design</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/services/web-development/">Web Development</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/mobile-app-development/">Mobile App development</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/services/web-development/#">Branding</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/services/seo/">SEO</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/services/ppc/">PPC</a></div>
				<div ><a class='fp' href="http://localhost/stepforadder/social-adverising/">Social Media</a></div>

				<!-- <p ><a class='fp' href="">Web Design</a></p>
				<p ><a class='fp' href="">Web Development</a></p>
				<p ><a class='fp' href="">Mobile App development</a></p>
				<p ><a class='fp' href="">Branding</a></p>
				<p ><a class='fp' href="">SEO</a></p>
				<p ><a class='fp' href="">PPC</a></p>
				<p ><a class='fp' href="">Social Media</a></p> -->
			</div>
			</div>
			
        </div>

		<div class="footer-column">
            
			<div class="flayout sol">
			<p class='fhead'>Support</p>

			<div class="">
				<div ><a class='fp' href="http://localhost/stepforadder/privacy-policy/">Privacy Policy</a></div>
				<div ><a class='fp' href="">Cookie Policy</a></div>
				<div ><a class='fp' href="">Support</a></div>

				<!-- <p ><a class='fp' href="">Privacy Policy</a></p>
				<p ><a class='fp' href="">Cookie Policy</a></p>
				<p ><a class='fp' href="">Support</a></p> -->
			</div>
			</div>
			

        </div>


		<div class="hrlayout">
		<hr class='line'>
		</div>

        <!-- <div class="footer-column">
            <h3>Column 3</h3>
            <p>Content for column 3 goes here.</p>
        </div>

        <div class="footer-column">
            <h3>Column 4</h3>
            <p>Content for column 4 goes here.</p>
        </div> -->


    </footer>

	<!-- 2nd row started from here -->

	<footer>
 <div class="footer-column " id='firststcol'>
            <div class=''><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23" fill="none" class="two_elementor_element"><rect x="0.55957" y="0.55957" width="22.2373" height="22.2373" fill="url(#pattern0)" style="mix-blend-mode:screen" class="two_elementor_element"></rect><defs class="two_elementor_element"><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1" class="two_elementor_element"><use xlink:href="#image0_211_1268" transform="scale(0.0104167)" class="two_elementor_element"></use></pattern><image id="image0_211_1268" width="96" height="96" xlink:href="data:image/png;base64,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" class="two_elementor_element"></image></defs></svg></div>


			<div class='add'>Plot No. A-40, 422A 4th Floor Tower<br>
B, Sector 62, Noida, Uttar Pradesh</div>
        </div>

		<div class="footer-column">
		<p><a class='ficon' href="tel:+919990734162"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M20 4.16797H0V15.8359H20V4.16797Z" fill="white"></path><path d="M20 4.16797H0V8.05859H20V4.16797Z" fill="#F0953D"></path><path d="M20 11.9453H0V15.8359H20V11.9453Z" fill="#3D8A41"></path><path d="M10 8.25C9.03516 8.25 8.25 9.03516 8.25 10C8.25 10.9648 9.03516 11.75 10 11.75C10.9648 11.75 11.75 10.9648 11.75 10C11.75 9.03516 10.9648 8.25 10 8.25ZM10 8.42188L9.95703 9.30078L10.0039 9.80078L10.0508 9.30078L10.0078 8.42188C10.0547 8.42188 10.0977 8.42578 10.1406 8.42969C10.1406 8.43359 10.1406 8.43359 10.1406 8.4375C10.1406 8.47656 10.1719 8.51172 10.2148 8.51172C10.25 8.51172 10.2812 8.48438 10.2852 8.44922C10.3281 8.45703 10.3711 8.46484 10.4141 8.47656L10.1445 9.3125L10.0586 9.80859L10.2344 9.33594L10.418 8.47656C10.4609 8.48828 10.5039 8.5 10.543 8.51563C10.5391 8.52344 10.5391 8.53125 10.5391 8.54297C10.5391 8.58203 10.5703 8.61328 10.6133 8.61328C10.6445 8.61328 10.668 8.59375 10.6797 8.57031C10.7187 8.58984 10.7578 8.60937 10.7969 8.63281L10.3203 9.37109L10.1094 9.82812L10.4023 9.41797L10.8047 8.63281C10.8437 8.65625 10.8789 8.67969 10.9141 8.70313C10.9062 8.71484 10.8984 8.73047 10.8984 8.74609C10.8984 8.78516 10.9297 8.82031 10.9727 8.82031C10.9961 8.82031 11.0156 8.80859 11.0312 8.79297C11.0664 8.82031 11.0977 8.85156 11.1289 8.88281L10.4766 9.47266L10.1562 9.85937L10.543 9.53906L11.1328 8.88672C11.1641 8.91797 11.1953 8.94922 11.2227 8.98437C11.207 8.99609 11.1953 9.01953 11.1953 9.03906C11.1953 9.07812 11.2266 9.11328 11.2695 9.11328C11.2852 9.11328 11.3008 9.10937 11.3125 9.09766C11.3359 9.13281 11.3633 9.17187 11.3828 9.21094L10.582 9.60937L10.1719 9.90234L10.6289 9.69141L11.3672 9.21094C11.3906 9.25 11.4102 9.29297 11.4297 9.33594C11.4023 9.34766 11.3867 9.37109 11.3867 9.40234C11.3867 9.44141 11.418 9.47656 11.4609 9.47656C11.4727 9.47656 11.4805 9.47656 11.4883 9.47266C11.5039 9.51172 11.5156 9.55078 11.5273 9.59375L10.668 9.77734L10.1953 9.95312L10.6914 9.86719L11.5273 9.59766C11.5391 9.64062 11.5469 9.68359 11.5547 9.72656C11.5195 9.73047 11.4922 9.76172 11.4922 9.79687C11.4922 9.83594 11.5234 9.87109 11.5664 9.87109C11.5703 9.87109 11.5703 9.87109 11.5742 9.87109C11.5781 9.91406 11.582 9.95703 11.582 10.0039L10.7031 9.96094L10.1992 10.0078L10.6992 10.0547L11.5781 10.0117C11.5781 10.0547 11.5742 10.1016 11.5703 10.1445C11.5664 10.1445 11.5664 10.1445 11.5625 10.1445C11.5234 10.1445 11.4883 10.1758 11.4883 10.2187C11.4883 10.2539 11.5156 10.2852 11.5508 10.2891C11.543 10.332 11.5352 10.375 11.5234 10.418L11.2266 10.3203L10.6875 10.1445L10.1914 10.0586L10.6641 10.2344L11.5234 10.418C11.5117 10.4609 11.5 10.5039 11.4844 10.543C11.4805 10.543 11.4766 10.5391 11.4727 10.5391C11.4687 10.5391 11.4648 10.5391 11.457 10.5391C11.418 10.5391 11.3828 10.5703 11.3828 10.6133C11.3828 10.625 11.3828 10.6328 11.3867 10.6406C11.3906 10.6523 11.3984 10.6602 11.4062 10.668L11.4102 10.6719L11.4141 10.6758L11.418 10.6797C11.3984 10.7187 11.3789 10.7578 11.3555 10.7969L10.6172 10.3203L10.1602 10.1094L10.3984 10.2773L10.5703 10.3984L11.3516 10.7969C11.3281 10.8359 11.3047 10.875 11.2773 10.9102C11.2656 10.9023 11.25 10.8984 11.2344 10.8984C11.1953 10.8984 11.1602 10.9297 11.1602 10.9727C11.1602 10.9961 11.1719 11.0156 11.1875 11.0273C11.1602 11.0625 11.1289 11.0937 11.1016 11.125L10.5117 10.4727L10.125 10.1523L10.4453 10.5391L11.0977 11.1289C11.0664 11.1602 11.0352 11.1875 11.0039 11.2148C10.9922 11.2031 10.9766 11.1992 10.957 11.1992C10.918 11.1992 10.8828 11.2305 10.8828 11.2734C10.8828 11.2852 10.8867 11.293 10.8906 11.3047C10.8516 11.332 10.8125 11.3555 10.7734 11.3789L10.3711 10.5977L10.0781 10.1875L10.2891 10.6445L10.7656 11.3828C10.7266 11.4062 10.6875 11.4258 10.6484 11.4414C10.6367 11.418 10.6133 11.3984 10.582 11.3984C10.543 11.3984 10.5078 11.4297 10.5078 11.4727C10.5078 11.4805 10.5078 11.4922 10.5117 11.5C10.4687 11.5156 10.4258 11.5273 10.3828 11.5391L10.1992 10.6797L10.0234 10.207L10.1094 10.7031L10.3789 11.5391C10.3359 11.5508 10.293 11.5586 10.25 11.5664C10.2461 11.5312 10.2148 11.5039 10.1797 11.5039C10.1406 11.5039 10.1055 11.5352 10.1055 11.5781C10.1055 11.582 10.1055 11.582 10.1055 11.5859C10.0625 11.5898 10.0195 11.5937 9.97266 11.5937L10.0195 10.7148L9.97266 10.2148L9.92578 10.7148L9.97266 11.5937C9.92578 11.5937 9.88281 11.5898 9.83594 11.5859C9.83594 11.582 9.83594 11.582 9.83594 11.5781C9.83594 11.5391 9.80469 11.5039 9.76172 11.5039C9.72656 11.5039 9.69531 11.5312 9.69141 11.5664C9.64844 11.5586 9.60547 11.5508 9.56641 11.5391L9.83594 10.7031L9.92187 10.207L9.74609 10.6797L9.5625 11.5391C9.51953 11.5273 9.47656 11.5156 9.4375 11.5C9.44141 11.4922 9.44141 11.4844 9.44141 11.4727C9.44141 11.4336 9.41016 11.3984 9.37109 11.3984C9.33984 11.3984 9.31641 11.418 9.30469 11.4414C9.26562 11.4219 9.22656 11.4023 9.1875 11.3789L9.66406 10.6406L9.875 10.1836L9.58203 10.5937L9.20703 11.3672C9.16797 11.3437 9.13281 11.3203 9.09375 11.2969C9.10156 11.2852 9.10937 11.2695 9.10937 11.2539C9.10937 11.2148 9.07812 11.1797 9.03516 11.1797C9.01172 11.1797 8.99219 11.1914 8.98047 11.207C8.94531 11.1797 8.91406 11.1484 8.88281 11.1211L9.53516 10.5312L9.85547 10.1445L9.46875 10.4648L8.87891 11.1172C8.84766 11.0859 8.81641 11.0547 8.78906 11.0195C8.80469 11.0078 8.81641 10.9844 8.81641 10.9648C8.81641 10.9258 8.78516 10.8906 8.74609 10.8906C8.73047 10.8906 8.71484 10.8945 8.70313 10.9062C8.67969 10.8711 8.65234 10.832 8.63281 10.793L9.41797 10.3906L9.82812 10.0977L9.37109 10.3086L8.63281 10.7891C8.60937 10.75 8.58984 10.7148 8.57422 10.6758C8.60156 10.6641 8.62109 10.6406 8.62109 10.6094C8.62109 10.5703 8.58984 10.5352 8.54688 10.5352C8.53516 10.5352 8.52344 10.5391 8.51563 10.543C8.5 10.5 8.48828 10.457 8.47656 10.4141L9.33594 10.2305L9.80859 10.0547L9.3125 10.1406L8.47656 10.4102C8.46484 10.3672 8.45703 10.3242 8.44922 10.2812C8.48438 10.2773 8.51172 10.2461 8.51172 10.2109C8.51172 10.1719 8.48047 10.1367 8.4375 10.1367C8.43359 10.1367 8.43359 10.1367 8.42969 10.1367C8.42578 10.0937 8.42578 10.0508 8.42188 10.0039L9.30078 10.0469L9.80078 10L9.30078 9.95312L8.42188 10C8.42188 9.95703 8.42578 9.91016 8.42969 9.86719C8.43359 9.86719 8.4375 9.86719 8.44141 9.86719C8.48047 9.86719 8.51563 9.83594 8.51563 9.79297C8.51563 9.75391 8.48828 9.72266 8.44922 9.71875C8.45703 9.67578 8.46484 9.63281 8.47656 9.58984L9.3125 9.85937L9.80859 9.94531L9.33594 9.76953L8.47656 9.58594C8.48828 9.54297 8.5 9.5 8.51563 9.46094C8.52344 9.46484 8.53125 9.46484 8.54297 9.46484C8.58203 9.46484 8.61719 9.43359 8.61719 9.39453C8.61719 9.36328 8.59766 9.33984 8.57422 9.32812C8.59375 9.28906 8.61328 9.25 8.63672 9.21094L9.375 9.6875L9.83203 9.89844L9.42187 9.60547L8.63281 9.20703C8.65625 9.16797 8.67969 9.13281 8.70313 9.09375C8.71484 9.10156 8.73047 9.10937 8.74609 9.10937C8.78516 9.10937 8.82031 9.07812 8.82031 9.03906C8.82031 9.01562 8.80859 8.99609 8.79297 8.98047C8.82031 8.94531 8.85156 8.91406 8.88281 8.88281L9.47266 9.53516L9.85937 9.85547L9.53906 9.46875L8.88672 8.87891C8.91797 8.84766 8.94922 8.81641 8.98437 8.78906C8.99609 8.80469 9.01953 8.81641 9.03906 8.81641C9.07812 8.81641 9.10937 8.78516 9.10937 8.74609C9.10937 8.73047 9.10547 8.71484 9.09766 8.70313C9.13281 8.67969 9.17187 8.65234 9.20703 8.63281L9.60937 9.41797L9.90234 9.82812L9.69141 9.37109L9.21484 8.63281C9.25391 8.60937 9.28906 8.58984 9.33203 8.57422C9.34375 8.60156 9.36719 8.62109 9.39844 8.62109C9.4375 8.62109 9.47266 8.58984 9.47266 8.55078C9.47266 8.53906 9.46875 8.53125 9.46484 8.51953C9.50781 8.50391 9.55078 8.49219 9.59375 8.48047L9.77734 9.33984L9.95312 9.8125L9.86719 9.31641L9.59766 8.48047C9.64062 8.46875 9.68359 8.46094 9.72656 8.45312C9.73047 8.48828 9.76172 8.51563 9.79687 8.51563C9.83594 8.51563 9.87109 8.48438 9.87109 8.44141C9.87109 8.4375 9.87109 8.4375 9.87109 8.43359C9.91016 8.42187 9.95312 8.42188 10 8.42188Z" fill="#2A2874"></path><path d="M10 9.73828C10.1445 9.73828 10.2617 9.85547 10.2617 10C10.2617 10.1445 10.1445 10.2617 10 10.2617C9.85547 10.2617 9.73828 10.1445 9.73828 10C9.73828 9.85547 9.85547 9.73828 10 9.73828Z" fill="white"></path><path d="M10 9.79688C10.1133 9.79688 10.2031 9.88672 10.2031 10C10.2031 10.1133 10.1133 10.2031 10 10.2031C9.88672 10.2031 9.79688 10.1133 9.79688 10C9.79688 9.89062 9.89062 9.79688 10 9.79688Z" fill="#2A2874"></path></svg></i> +91 999-073-4162</a></p>
        </div>

		<div class="footer-column">
		<p><a class='ficon' href="mailto:sales@stepforadder.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21 9.75C20.8011 9.75 20.6103 9.82902 20.4697 9.96967C20.329 10.1103 20.25 10.3011 20.25 10.5V16.5C20.25 16.6989 20.171 16.8897 20.0303 17.0303C19.8897 17.171 19.6989 17.25 19.5 17.25H4.5C4.30109 17.25 4.11032 17.171 3.96967 17.0303C3.82902 16.8897 3.75 16.6989 3.75 16.5V10.5C3.75 10.3011 3.67098 10.1103 3.53033 9.96967C3.38968 9.82902 3.19891 9.75 3 9.75C2.80109 9.75 2.61032 9.82902 2.46967 9.96967C2.32902 10.1103 2.25 10.3011 2.25 10.5V16.5C2.25053 17.0965 2.48792 17.6684 2.91 18.09C3.33155 18.5121 3.90346 18.7495 4.5 18.75H19.5C20.0965 18.7495 20.6684 18.5121 21.09 18.09C21.5121 17.6684 21.7495 17.0965 21.75 16.5V10.5C21.75 10.3011 21.671 10.1103 21.5303 9.96967C21.3897 9.82902 21.1989 9.75 21 9.75Z" fill="#FE445C"></path><path d="M11.5505 14.1C11.6803 14.1974 11.8382 14.25 12.0005 14.25C12.1627 14.25 12.3206 14.1974 12.4505 14.1L21.308 7.455C21.4461 7.3508 21.544 7.20202 21.585 7.03389C21.6261 6.86576 21.6077 6.68862 21.533 6.5325C21.4213 6.30174 21.2717 6.09133 21.0905 5.91C20.6689 5.48792 20.097 5.25053 19.5005 5.25H4.50047C3.90393 5.25053 3.33202 5.48792 2.91047 5.91C2.72924 6.09133 2.57967 6.30174 2.46797 6.5325C2.39328 6.68862 2.37488 6.86576 2.41589 7.03389C2.4569 7.20202 2.55479 7.3508 2.69297 7.455L11.5505 14.1ZM4.50047 6.75H19.5005C19.57 6.73904 19.6409 6.73904 19.7105 6.75L12.0005 12.5625L4.29047 6.75C4.36004 6.73904 4.4309 6.73904 4.50047 6.75Z" fill="#FE445C"></path></svg> sales@stepforadder.com</a></p>
        </div>

		<div class="footer-column" >
		<p><a class='ficon' href="tel:+919990734162"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><g clip-path="url(#clip0_250_330)"><path d="M12.6157 9.84374C12.282 9.62946 11.9198 9.46317 11.5398 9.34976C11.3067 9.27926 11.0486 9.2103 10.7812 9.14382C10.5486 9.07897 10.2717 9.01244 9.92934 8.93716C9.52162 8.85173 9.12144 8.73361 8.73267 8.58396C8.53237 8.50604 8.35561 8.37764 8.21957 8.21125C8.12028 8.07517 8.07321 7.90794 8.08692 7.74006C8.08647 7.55996 8.14635 7.38491 8.25701 7.24282C8.41224 7.06074 8.61366 6.92383 8.8401 6.8465C9.22151 6.71549 9.62347 6.65456 10.0266 6.66666C10.338 6.66167 10.6484 6.7028 10.9478 6.78872C11.1466 6.84438 11.3338 6.93504 11.5008 7.05646C11.6086 7.13335 11.7007 7.23034 11.7718 7.34211C11.8234 7.43881 11.8936 7.52437 11.9784 7.59389C12.0631 7.6634 12.1608 7.7155 12.2657 7.7472C12.3707 7.77891 12.4808 7.78959 12.5899 7.77863C12.699 7.76768 12.8048 7.73531 12.9013 7.68337C12.9979 7.63143 13.0832 7.56095 13.1525 7.47597C13.2217 7.39099 13.2735 7.29318 13.3049 7.18814C13.3363 7.08311 13.3466 6.97291 13.3353 6.86387C13.324 6.75483 13.2913 6.6491 13.2391 6.55272C13.0632 6.24187 12.8258 5.9702 12.5412 5.75439C12.2126 5.50198 11.84 5.31294 11.4422 5.19693C10.9828 5.0611 10.5056 4.99472 10.0266 4.99999C9.41787 4.98705 8.81198 5.08608 8.23907 5.29215C7.72072 5.4803 7.26523 5.80951 6.92395 6.24266C6.59735 6.67357 6.42046 7.19937 6.42021 7.74006C6.40671 8.27835 6.57723 8.80513 6.90361 9.2334C7.21867 9.63027 7.63167 9.93823 8.10194 10.1269C8.45729 10.2636 8.82113 10.3772 9.19116 10.4669C9.19813 10.4692 9.20282 10.4747 9.20993 10.4769C9.36943 10.5249 9.62456 10.5892 9.99321 10.6689C10.1368 10.6997 10.2722 10.7338 10.4075 10.7676C10.4206 10.7716 10.4396 10.7757 10.4522 10.7796L10.4673 10.7819C10.6742 10.8346 10.8731 10.8892 11.0552 10.9448C11.2796 11.0103 11.4938 11.1067 11.6916 11.2313C11.8147 11.3088 11.918 11.4138 11.9935 11.5381C12.067 11.6896 12.101 11.8573 12.0924 12.0256C12.1041 12.2433 12.0412 12.4586 11.9142 12.6359C11.7425 12.8592 11.5103 13.0284 11.2452 13.1234C10.8506 13.2757 10.4294 13.3471 10.0066 13.3333C9.51734 13.3523 9.03061 13.2541 8.58696 13.0469C8.38222 12.9378 8.20635 12.7816 8.07385 12.5911C7.98094 12.4692 7.92286 12.3244 7.9058 12.172C7.9058 11.951 7.818 11.7391 7.66172 11.5828C7.50544 11.4265 7.29348 11.3387 7.07246 11.3387C6.85145 11.3387 6.63949 11.4265 6.48321 11.5828C6.32693 11.7391 6.23913 11.951 6.23913 12.172C6.25311 12.6634 6.41459 13.1392 6.7026 13.5376C6.99047 13.9524 7.37399 14.2919 7.82076 14.5272C8.50052 14.859 9.25052 15.0212 10.0066 15C10.6491 15.0154 11.288 14.9006 11.8849 14.6623C12.4397 14.4495 12.9214 14.0813 13.2724 13.6019C13.6059 13.1344 13.7768 12.5703 13.7586 11.9962C13.7664 11.5513 13.6588 11.1119 13.4461 10.721C13.2409 10.3683 12.9566 10.068 12.6157 9.84374ZM18.6342 11.4095C18.8591 10.0397 18.7547 8.63611 18.3295 7.31473C17.9043 5.99335 17.1706 4.79221 16.189 3.81067C15.2075 2.82913 14.0063 2.09542 12.685 1.67023C11.3636 1.24504 9.95996 1.1406 8.59021 1.36555C7.57906 0.880768 6.44237 0.721804 5.33702 0.910597C4.23168 1.09939 3.21219 1.62663 2.41927 2.41955C1.62636 3.21246 1.09912 4.23195 0.910323 5.3373C0.721529 6.44264 0.880493 7.57933 1.36527 8.59048C1.14033 9.96024 1.24477 11.3639 1.66996 12.6852C2.09515 14.0066 2.82886 15.2078 3.8104 16.1893C4.79193 17.1708 5.99308 17.9046 7.31446 18.3297C8.63584 18.7549 10.0395 18.8594 11.4092 18.6344C12.4204 19.1192 13.5571 19.2782 14.6624 19.0894C15.7678 18.9006 16.7872 18.3733 17.5802 17.5804C18.3731 16.7875 18.9003 15.768 19.0891 14.6627C19.2779 13.5573 19.1189 12.4206 18.6342 11.4095ZM13.7497 17.5C13.1176 17.4997 12.4958 17.3399 11.9419 17.0353C11.77 16.9404 11.5702 16.909 11.3775 16.9466C10.3504 17.1515 9.29073 17.1258 8.2748 16.8715C7.25887 16.6172 6.31204 16.1406 5.50262 15.4761C4.6932 14.8116 4.04136 13.9756 3.59412 13.0287C3.14689 12.0817 2.91541 11.0473 2.91638 9.99999C2.91724 9.53712 2.96303 9.07543 3.0531 8.62141C3.09072 8.4289 3.05947 8.22929 2.96481 8.05749C2.57312 7.34588 2.42311 6.52633 2.53736 5.72212C2.6516 4.91791 3.02391 4.17256 3.59827 3.59818C4.17264 3.02381 4.918 2.65149 5.7222 2.53724C6.52641 2.42299 7.34596 2.57299 8.05757 2.96467C8.22936 3.05984 8.42925 3.09126 8.62195 3.05337C9.64899 2.84851 10.7087 2.87415 11.7246 3.12844C12.7406 3.38273 13.6874 3.85934 14.4968 4.52388C15.3062 5.18842 15.9581 6.02433 16.4053 6.97131C16.8525 7.91828 17.084 8.95272 17.083 9.99999C17.0822 10.4629 17.0364 10.9246 16.9463 11.3786C16.9087 11.5711 16.94 11.7707 17.0347 11.9425C17.3491 12.5134 17.5092 13.1564 17.4993 13.8081C17.4894 14.4598 17.3098 15.0976 16.9781 15.6587C16.6465 16.2198 16.1743 16.6847 15.6082 17.0076C15.042 17.3305 14.4015 17.5002 13.7497 17.5Z" fill="#FE445C"></path></g><defs><clipPath id="clip0_250_330"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg> +91 999-073-4162</a></p>
        </div>

		<div class="hrlayout">
		<hr class='line'>
		</div>
		

</footer>
<div class="last">
	<p class='copyright'>Copyrights By Stepforadder - 2023</p>
</div>

<?php   
	wp_enqueue_script('jquery');
	wp_enqueue_script('hoverintent', get_bloginfo('template_url').'/assets/js/hoverintent.min.js');
	wp_footer(); 
?>
<script>

jQuery(document).ready(function(){


    var downarrow = "<svg class='downarrow' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' viewBox='0 0 64 80' enable-background='new 0 0 64 64' xml:space='preserve'><g><polyline fill='none' stroke='#000000' stroke-width='5' stroke-linejoin='bevel' stroke-miterlimit='10' points='15,24 32,41 49,24'/></g></svg>";
	var uparrow = "<svg class='uparrow' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' viewBox='0 0 64 80' enable-background='new 0 0 64 64' xml:space='preserve'><g><polyline fill='none' stroke='#000000' stroke-width='5' stroke-linejoin='bevel' stroke-miterlimit='10' points='15,41 32,24 49,41'/></g></svg>";

	jQuery(".hassubmenu > a").append(downarrow);
	var menucontent = jQuery(".megamenuitem_wrap[data-item='services']").html();
	var packages = jQuery(".megamenuitem_wrap[data-item='pack']").html();
	var ourwork = jQuery(".megamenuitem_wrap[data-item='work']").html();

	jQuery(".desktopmenu ul li.services a").after("<div class='overlaymcontainer'><div class='megamenu_wrap'>"+menucontent+"</div></div>");
	
	jQuery(".desktopmenu ul li.pack a").after("<div class='overlaymcontainer'><div class='megamenu_wrap'>"+packages+"</div></div>");
	jQuery(".desktopmenu ul li.work a").after("<div class='overlaymcontainer'><div class='megamenu_wrap'>"+ourwork+"</div></div>");

	
	jQuery(".desktopmenu ul li.services").hoverIntent(function(){
		jQuery(this).find(".overlaymcontainer").addClass("in");
		jQuery(this).find(".downarrow").remove()
		jQuery(this).find("> a").append(uparrow);
	}, function(){
		jQuery(this).find(".overlaymcontainer").removeClass("in");
		jQuery(this).find(".uparrow").remove()
		jQuery(this).find("> a").append(downarrow);

	});



	// Packages

	jQuery(".desktopmenu ul li.pack").hoverIntent(function(){
		jQuery(this).find(".overlaymcontainer").addClass("in");
		jQuery(this).find(".downarrow").remove()
		jQuery(this).find("> a").append(uparrow);
	}, function(){
		jQuery(this).find(".overlaymcontainer").removeClass("in");
		jQuery(this).find(".uparrow").remove()
		jQuery(this).find("> a").append(downarrow);

	});



	// Our Work

	jQuery(".desktopmenu ul li.work").hoverIntent(function(){
		jQuery(this).find(".overlaymcontainer").addClass("in");
		jQuery(this).find(".downarrow").remove()
		jQuery(this).find("> a").append(uparrow);
	}, function(){
		jQuery(this).find(".overlaymcontainer").removeClass("in");
		jQuery(this).find(".uparrow").remove()
		jQuery(this).find("> a").append(downarrow);

	});

	const swiper = new Swiper('.testmonial_slider .swiper', {});
	jQuery(".movenext").click(function(){
		swiper.slideNext(500, function(){});
	});
	
	jQuery(".moveprev").click(function(){
		swiper.slidePrev(500, function(){});
	});

	});
</script>

	</body>
</html>
