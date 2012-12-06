<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
	<link rel="stylesheet" href="http://traicosport.com/portal/cache/css/default/lightbox.1325194606.css" type="text/css" />
	<link rel="stylesheet" href="http://traicosport.com/portal/cache/css/default/elgg.1325194606.css" type="text/css" />

		<script src="http://www.traicosport.com/js/jquery-1.4.4.min.js" type="text/javascript"></script>
		<script src="http://www.traicosport.com/js/jquery.hashchange.min.js" type="text/javascript"></script>
		<script src="http://www.traicosport.com/js/jquery.easytabs.js" type="text/javascript"></script>
		<script type="text/javascript">
      $(document).ready(function(){

        $('#languages').easytabs({
          collapsible: false
        });

        $('#login-dropdown').easytabs({
          collapsible: true,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

        $('#tabs').easytabs({
          collapsible: false,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

        $('#slider').easytabs({
          collapsible: false,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

        $('#login-dropdown_da').easytabs({
          collapsible: true,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

        $('#tabs_da').easytabs({
          collapsible: false,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

        $('#slider_da').easytabs({
          collapsible: false,
          transitionIn: 'slideDown',
          transitionOut: 'slideUp',
          transitionCollapse: 'fadeOut',
          transitionUncollapse: 'fadeIn'
        });

      });
		</script>
</head>
<body>
<div id="languages">
  <ul>
    <li><a href="#da"></a></li>
    <li><a href="#en"></a></li>
  </ul>
  <div>





<!--- START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA START DA --->





    <div id="da">
        <div class="elgg-page elgg-page-default">

          	<div class="elgg-page-header">
          		<div class="elgg-inner">
                      <div id="logo"><a href="http://traicosport.com/portal/"><img border="0" alt="Traicosport" src="http://traicosport.com/images/logo.png"></a></div>
                  </div>
          	</div>

            <div id="login-dropdown_da" style="margin-right:150px;">
              <ul>
                <li><a href="#Login_da" class="elgg-button elgg-button-dropdown">Login</a></li>
              </ul>
              <div class="panel-container">
                <div class="elgg-body elgg-module  elgg-module-dropdown" id="Login_da">
                    <?php echo elgg_view_form('login'); ?>
                </div>
              </div>
            </div>

        <div id="slider_da">

          <div class="panel-container">
            <div id="Home_da">
            	<div class="elgg-page-body">
            		<div class="elgg-inner">
                        <div class="elgg-page elgg-page-walledgarden">

                          <div id="view_header">
                              <ul class="elgg-system-messages"><li class="hidden"></li></ul>                      </div>
                          <div class="colmask rightmenu">
                          	<div class="colleft">
                          		<div class="col1">
                          			<!-- Column 1 start -->
                                          <div style="padding-bottom:5px;">
                                              <h4 style="color:#379ED0;font-size:22px;padding-bottom:20px;">Traicosport hjælper dig med at forbedre din sport<br /> som atlet, coach eller sportsklub!</h4>
                                              <p style="font-size:14px">Traicosport forbinder alle sportsgrene, atleter, trænere og sportsklubber på et sted. Det bedste af alt - det er gratis!</p>
                                              <p style="text-align:center;"><img src="http://traicosport.com/images/front_sport.png" /></p>
                                          </div>
                          			<!-- Column 1 end -->
                          		</div>
                          		<div class="col2">

                                  <div id="tabs_da">
                                    <ul class="tab_container">
                                      <li class="accordion_headings header_highlight"><a href="#register_da">Registrer</a></li>
                                      <li class="accordion_headings"><a href="#why_da">Hvorfor?</a></li>
                                      <li class="accordion_headings"><a href="#idea_da">Idéen</a></li>
                                    </ul>
                                    <div class="panel-container">
                                      <div id="register_da" class="accordion_child">
                                          <div>
                                            <p class="register" style="margin:10px 0;">
                                                <a href="http://traicosport.com/portal/register">
                                                    <span class="link">Opret din sportsprofil her</span>
                                                </a>
                                            </p>
                                          </div>
                                          <div id="login_with_facebook">
                                              <p style="color:#777777;"><span style="padding-top:20px;font-size:16px;">.. Eller Forbind med Facebook eller Twitter</span></p>
                                          	<a href="https://www.facebook.com/login.php?api_key=252770421408236&cancel_url=http%3A%2F%2Ftraicosport.com%2Fportal%2F&display=page&fbconnect=1&next=http%3A%2F%2Ftraicosport.com%2Fportal%2Ffacebook_connect%2Flogin&return_session=1&session_version=3&v=1.0&req_perms=user_status%2Cpublish_stream%2Cemail%2C">
                                                  <img src="http://traicosport.com/images/logo_facebook.jpg" alt="Facebook" />
                                              </a>
                                          </div>
                                          <div id="login_with_twitter">
                                          	<a href="http://traicosport.com/portal/twitter_api/forward">
                                                  <img src="http://traicosport.com/images/logo_twitter.png" alt="Twitter" />
                                              </a>
                                          </div>
                                      </div>
                                      <div id="why_da" class="accordion_child">
                                        <p>
                                            <ol style="font-size:14px;">
                                                <li style="padding-bottom:15px;"><b>1.</b> Se hvordan andre træner, og del din sports viden med dem..</li>
                                                <li style="padding: 0 0 15px; 30px;"><b>2.</b> Administrer din klub eller dit team, og brug Traicosport som dit kommunikationskanal</li>
                                                <li style="padding-bottom:15px;"><b>3.</b> Lad nye klubmedlemmer, sponsorer og andre interesserede finde din idrætsklub endnu nemmere!</li>
                                                <li style="padding: 0 0 15px; 30px;"><b>4.</b> Vær en vinder og fortæl hele verdenen om det!</li>
                                            </ol>
                                        </p>
                                      </div>
                                      <div id="idea_da" class="accordion_child">
                                        <h3>Først af alt, eksisterer Traicosport for sportsklubberne og deres frivillige</h3>
                                        <p>
                                            Vi er team af sportsfanatikere der gerne vil bruge Traicosport til at levere simple værktøjer der gør det nemmere at navigere rundt i sportens verden.
                                        </p>
                                        <p>
                                            Traicosport vil gøre det sjovere og nemmere for dig at være frivillig i en idrætsklub.
                                            Funktionerne gør det også nemmere at reklamere for din sportsklub og klubaktiviteter, og få flere sponsorer og klubmedlemmer til klubben.</p>
                                        <h3>We want to give you more time..</h3>
                                        <p>
                                            Der er ofte mange grunde til, hvorfor det er kan være hård at være frivillig i en idrætsklub. Men den største grund på verdensplan er: <b>Manglende tid! </b> <br />
                                            Mange mennesker har ikke særlig meget fritid længere, og det har du sikkert heller ikke. Hvordan skulle du så kunne finde energien til f.eks. at udvikle din sportsklub, eller tiden til at overhovedet at træne et hold?
                                        </p>
                                        <p>
                                            Traicosport er en blanding af funktioner der dækker behovene for en træner, klubleder eller sportsatlet. Alle funktioner er designet til, at du kan <b> koncentrere dig mere omkring din sport, og bruge mindre tid på administrative opgaver.</b>
                                        </p>
                                        <p>
                                            <b>Kort sagt</b>, der skal ikke være der noget der holder dig tilbage fra at være frivillig i din sportsklub, med Traicosport som din service.
                                            <a href="http://www.traicosport.com/portal/register.php">Opret en gratis profil</a>, og start med at komme i kontakt med andre personer indenfor den sportsgren du holder af..</p>
                                        <p style="margin-top:20px;">Velkommen til Danmarks Sportsportal!</p>
                                        <p>Start sporting!<br />Team Traicosport</p>
                                        <p>
                                            <b>Vidste du, at Traicosport = Trainer and Coaches Sport?</b>
                                        </p>
                                        <p></p>
                                      </div>
                                    </div>
                                  </div>

                          		</div>
                          	</div>
                          </div>
                          <div id="view_footer">

                          </div>


                            <div class="elgg-foot"></div>
                        	                    </div>
                	</div>

            	</div><!--- End elgg-page-body --->
            </div><!--- End show1 --->

            <div id="Functions_da">

                    <div id="landingFocusTop">
                      <div id="landingFocusTopBox">
                        <div class="featureBox">
                            <p class="register">
                                <a href="http://traicosport.com/portal/register">
                                    Opret din<br /> sportsprofil<br /> <span class="link">her</span>
                                </a>
                            </p>
                        </div>
                        <div class="featureBox">
                            <p>
                                <span style="color:#777777;padding-top:20px;font-size:16px;">.. Eller Forbind<br /> med<br /> Facebook eller Twitter</span>
                            </p>
                        </div>
                        <div class="featureBox">
                            <p>
                        	<a href="https://www.facebook.com/login.php?api_key=252770421408236&cancel_url=http%3A%2F%2Ftraicosport.com%2Fportal%2F&display=page&fbconnect=1&next=http%3A%2F%2Ftraicosport.com%2Fportal%2Ffacebook_connect%2Flogin&return_session=1&session_version=3&v=1.0&req_perms=user_status%2Cpublish_stream%2Cemail%2C">
                                <img src="http://traicosport.com/images/logo_facebook.jpg" alt="Facebook" />
                            </a>
                        </div>
                        <div class="featureBox">
                        	<a href="http://traicosport.com/portal/twitter_api/forward">
                                <img src="http://traicosport.com/images/logo_twitter.png" alt="Twitter" />
                            </a>
                        </div>
                        <div class="featureBox" style="width:50px;text-align:left;">
                            <p style="margin-top:10px;"><a href="#Home_da" class="button">Hjem</a></p>
                        </div>
                      </div>
                    </div>
                    <div id="landingFocus">
                      <div id="landingFocusContent">
                        <div id="feature1" class="featureBox">
                          <h1>Sportstalenter<br> og atleter</h1>
                          <p>Del din sportsviden med andre
                              <ul>
                                  <li>- Upload billeder og videoer</li>
                                  <li>- Start en blog</li>
                                  <li>- Del links, øvelser og mere</li>
                              </ul>
                          </p>
                        </div>
                        <div id="feature2" class="featureBox">
                          <h1>Sportklubber<br>og teams</h1>
                          <p>Administrer din klub eller team
                              <ul>
                                  <li>- Eksporter deltagerlisterne fra dine events</li>
                                  <li>- Vis din klub eller team frem til resten af verdenen</li>
                                  <li>- Få flere sponsorer gennem sponsormodulet</li>
                                  <li>- Administrer dine medlemmer</li>
                              </ul>
                          </p>
                        </div>
                        <div id="feature3" class="featureBox">
                          <h1>Trænere<br>og managers</h1>
                          <p>Forbedre dine træninger og hold
                              <ul>
                                  <li>- Find øvelser i video, billede og tekst</li>
                                  <li>- Del dine træningserfaringer med andre trænere</li>
                                  <li>- Administrer dit træner CV, så scouts nemmere kan finde dig</li>
                              </ul>
                          </p>
                        </div>
                      </div>
                    </div><!--- End Landing Focus --->
            </div>
          </div>

          <ul>
            <li>
                <a href="#Home_da"></a>
            </li>
            <li style="text-align:center;padding-top:30px;height:100px;background-color:#222222;">
                <a href="#Functions_da" id="bottom_header"><img src="http://www.traicosport.com/images/front_functions_text_da.png" /></a>
            </li>
          </ul>

        </div><!--- End bottomslide --->
        <div id="view_footer">
            <ul>
                <li><a href="http://www.traicosport.com/sportsklubber">Sportsklubber</a></li>
                <li><a href="http://www.traicosport.com/sportsfaciliteter">Sportshaller</a></li>
                <li><a href="http://www.traicosport.com/search/search.php">Søgemaskine</a></li>
                <li><a href="http://www.traicosport.com/portal/terms">Betingelser</a></li>
                <li><a href="http://www.traicosport.com/portal/privacy">Privat indhold</a></li>
                <li>Sprog: <a href="http://traicosport.com/portal/#en">Engelsk</a></li>
            </ul>
        </div>

        </div><!--- End elgg-page elgg-page-default --->
    </div>

    <div id="en">
      <div class="elgg-page elgg-page-default">

        	<div class="elgg-page-header">
        		<div class="elgg-inner">
                    <div id="logo"><a href="http://traicosport.com/portal/#en"><img border="0" alt="Traicosport" src="http://traicosport.com/images/logo.png"></a></div>
                </div>
        	</div>

          <div id="login-dropdown" style="margin-right:150px;">
            <ul>
              <li><a href="#Login" class="elgg-button elgg-button-dropdown">Login</a></li>
            </ul>
            <div class="panel-container">
              <div class="elgg-body elgg-module  elgg-module-dropdown" id="Login">
                  <?php echo elgg_view_form('login'); ?>
              </div>
            </div>
          </div>

      <div id="slider">

        <div class="panel-container">
          <div id="Home">
          	<div class="elgg-page-body">
          		<div class="elgg-inner">
                      <div class="elgg-page elgg-page-walledgarden">

                        <div id="view_header">
                            <?php echo elgg_view('page/elements/messages', array('object' => $vars['sysmessages'])); ?>
                        </div>
                        <div class="colmask rightmenu">
                        	<div class="colleft">
                        		<div class="col1">
                        			<!-- Column 1 start -->
                                        <div style="padding-bottom:5px;">
                                            <h4 style="color:#379ED0;font-size:22px;padding-bottom:20px;">Traicosport helps you improve your sport<br /> as athlete, coach or sportsclub!</h4>
                                            <p style="font-size:14px">Traicosport connects all sports, athletes, coaches and sportsclubs in one single place. The best of it all - it's free!</p>
                                            <p style="text-align:center;"><img src="http://traicosport.com/images/front_sport.png" /></p>
                                        </div>
                        			<!-- Column 1 end -->
                        		</div>
                        		<div class="col2">

                                <div id="tabs">
                                  <ul class="tab_container">
                                    <li class="accordion_headings header_highlight"><a href="#register">Register</a></li>
                                    <li class="accordion_headings"><a href="#why">Why?</a></li>
                                    <li class="accordion_headings"><a href="#idea">The idea</a></li>
                                  </ul>
                                  <div class="panel-container">
                                    <div id="register" class="accordion_child">
                                        <div>
                                          <p class="register" style="margin:10px 0;">
                                              <a href="http://traicosport.com/portal/register">
                                                  Create your sport profile <span class="link">here</span>
                                              </a>
                                          </p>
                                        </div>
                                        <div id="login_with_facebook">
                                            <p style="color:#777777;"><span style="padding-top:20px;font-size:16px;">.. Or Connect using Facebook or Twitter</span></p>
                                        	<a href="https://www.facebook.com/login.php?api_key=252770421408236&cancel_url=http%3A%2F%2Ftraicosport.com%2Fportal%2F&display=page&fbconnect=1&next=http%3A%2F%2Ftraicosport.com%2Fportal%2Ffacebook_connect%2Flogin&return_session=1&session_version=3&v=1.0&req_perms=user_status%2Cpublish_stream%2Cemail%2C">
                                                <img src="http://traicosport.com/images/logo_facebook.jpg" alt="Facebook" />
                                            </a>
                                        </div>
                                        <div id="login_with_twitter">
                                        	<a href="http://traicosport.com/portal/twitter_api/forward">
                                                <img src="http://traicosport.com/images/logo_twitter.png" alt="Twitter" />
                                            </a>
                                        </div>
                                    </div>
                                    <div id="why" class="accordion_child">
                                      <p>
                                          <ol style="font-size:14px;">
                                              <li style="padding-bottom:15px;"><b>1.</b> Look at how others train, and share your sports knowledge with them..</li>
                                              <li style="padding: 0 0 15px; 30px;"><b>2.</b> Administrate your sportsclub or team, and use Traicosport as your channel for communication</li>
                                              <li style="padding-bottom:15px;"><b>3.</b> Let new clubmembers, sponsors and other stakeholders find your sportsclub more easily!</li>
                                              <li style="padding: 0 0 15px; 30px;"><b>4.</b> Be a winner and tell the whole world about it!</li>
                                          </ol>
                                      </p>
                                    </div>
                                    <div id="idea" class="accordion_child">
                                      <h3>First of all, Traicosport is here for the sports clubs and its volunteers</h3>
                                      <p>
                                          We are a team of sports fanatics who wants to use Traicosport to provide simple tools which make it easier to navigate in the world of sports.
                                      </p>
                                      <p>
                                          Traicosport will make it more fun and easier for you to be a volunteer in your sports club.
                                          The features also make it easier to advertise for your sports club and club activities, and get more sponsors and club members to the club.</p>
                                      <h3>We want to give you more time..</h3>
                                      <p>
                                          There are many reasons why it may be hard to be a volunteer in a sports club. But 1 reason is world wide: <b>The lack of time! </b> <br />
                                          Many people could use more spare time, and you probably also. So how do you manage to find the time and energy to develope your sports club to be the worlds best, or the time be able to coach a team?
                                      </p>
                                      <p>
                                          Traicosport offers a mix of features of needs as a coach, clubleder or sports athlet. All features make sure that you can <b>concentrate more on your sport, and spend less time on administrative tasks.</b>
                                      </p>
                                      <p>
                                          <b>In short</b>, there should be nothing holding you back from being a volunteer in your sports club, with Traicosport at your service.
                                          <a href="http://www.traicosport.com/portal/register.php">Create a profile for free</a>, and start to get in touch with others in the sport you love..</p>
                                      <p style="margin-top:20px;">Velkommen til Danmarks Sportsportal!</p>
                                      <p>Start sporting!<br />Team Traicosport</p>
                                      <p>
                                          <b>Did you know that Traicosport = Trainer and Coaches Sport?</b>
                                      </p>
                                      <p></p>
                                    </div>
                                  </div>
                                </div>

                        		</div>
                        	</div>
                        </div>
                        <div id="view_footer">

                        </div>


                          <div class="elgg-foot"></div>
                      	<?php /*echo $vars['body'];*/ ?>
                      </div>
              	</div>

          	</div><!--- End elgg-page-body --->
          </div><!--- End show1 --->

          <div id="Functions">

                  <div id="landingFocusTop">
                    <div id="landingFocusTopBox">
                      <div class="featureBox">
                          <p class="register">
                              <a href="http://traicosport.com/portal/register">
                                  Create your<br /> sport profile<br /> <span class="link">here</span>
                              </a>
                          </p>
                      </div>
                      <div class="featureBox">
                          <p>
                              <span style="color:#777777;padding-top:20px;font-size:16px;">.. Or Connect<br /> using<br /> Facebook or Twitter</span>
                          </p>
                      </div>
                      <div class="featureBox">
                          <p>
                      	<a href="https://www.facebook.com/login.php?api_key=252770421408236&cancel_url=http%3A%2F%2Ftraicosport.com%2Fportal%2F&display=page&fbconnect=1&next=http%3A%2F%2Ftraicosport.com%2Fportal%2Ffacebook_connect%2Flogin&return_session=1&session_version=3&v=1.0&req_perms=user_status%2Cpublish_stream%2Cemail%2C">
                              <img src="http://traicosport.com/images/logo_facebook.jpg" alt="Facebook" />
                          </a>
                      </div>
                      <div class="featureBox">
                      	<a href="http://traicosport.com/portal/twitter_api/forward">
                              <img src="http://traicosport.com/images/logo_twitter.png" alt="Twitter" />
                          </a>
                      </div>
                      <div class="featureBox" style="width:50px;text-align:left;">
                          <p style="margin-top:10px;"><a href="#Home" class="button">Home</a></p>
                      </div>
                    </div>
                  </div>
                  <div id="landingFocus">
                    <div id="landingFocusContent">
                      <div id="feature1" class="featureBox">
                        <h1>Sports talents<br> and athletes</h1>
                        <p>Share your sport knowledge with others
                            <ul>
                                <li>- Upload photos and videos</li>
                                <li>- Start a blog</li>
                                <li>- Share links, drills and more</li>
                            </ul>
                        </p>
                      </div>
                      <div id="feature2" class="featureBox">
                        <h1>Sport clubs<br>and teams</h1>
                        <p>Administrate your club or team
                            <ul>
                                <li>- Export particpant lists of your events</li>
                                <li>- Show your club or team to the rest of the world</li>
                                <li>- Get more sponsors through our sponsormodule</li>
                                <li>- Administrate your members</li>
                            </ul>
                        </p>
                      </div>
                      <div id="feature3" class="featureBox">
                        <h1>Coaches<br>and managers</h1>
                        <p>Approve your training and teams
                            <ul>
                                <li>- Find drills in videos, photos and text</li>
                                <li>- Share your training experiences with other coaches</li>
                                <li>- Administrate your coaching CV for scouts to find you</li>
                            </ul>
                        </p>
                      </div>
                    </div>
                  </div><!--- End Landing Focus --->
          </div>
        </div>

        <ul>
          <li>
              <a href="#Home"></a>
          </li>
          <li style="text-align:center;padding-top:30px;height:100px;background-color:#222222;">
              <a href="#Functions" id="bottom_header"><img src="http://www.traicosport.com/images/front_functions_text.png" /></a>
          </li>
        </ul>

      </div><!--- End bottomslide --->

      <div id="view_footer">
          <ul>
              <li><a href="http://www.traicosport.com/sportsclubs">Sports clubs</a></li>
              <li><a href="http://www.traicosport.com/sportsfacilities">Sports facilities</a></li>
              <li><a href="http://www.traicosport.com/search/search.php">Search engine</a></li>
              <li><a href="http://www.traicosport.com/portal/terms">Terms</a></li>
              <li><a href="http://www.traicosport.com/portal/privacy">Privacy</a></li>
              <li>Language: <a href="http://traicosport.com/portal/">Danish</a></li>
          </ul>
      </div>

      </div><!--- End elgg-page elgg-page-default --->
    </div>


  </div>
</div>


</body>