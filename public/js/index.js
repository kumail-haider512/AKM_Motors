
	var gaCustomDimensionVars = typeof gaCustomDimensionVars !== 'undefined' ? gaCustomDimensionVars : {};

			gaCustomDimensionVars["dimension9"] = "nmgr51476584003";
	
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	
	function createTracker(trackerId, number, clientId) {
		var name = 'a' + number, fields = {'name': name};
		if (typeof clientId !== 'undefined') {
			fields['clientId'] = clientId;
		}
		ga('create', trackerId, fields);
				ga(name + '.require', 'displayfeatures');
		ga(name + '.require', 'linkid', 'linkid.js');

		
		if (typeof gaCustomDimensionVars !== 'undefined') {
			setTimeout(function () {
				for (var key in gaCustomDimensionVars) {
					if (gaCustomDimensionVars.hasOwnProperty(key)) {
						ga(name + '.set', key, gaCustomDimensionVars[key]);
					}
				}
				ga(name + '.send', 'pageview');
			}, 800);
		} else {
			ga(name + '.send', 'pageview');
		}
	}

	var gaObjects = gaObjects || {};
	(function () {
		if (window === top) {
			createGATrackers();
			// this code for postmessage cross-domain iframe client-id
			ga(function() {
				// Subscribe to the messages from iframes
				window.addEventListener('message', function(message) {
					try {
						var data = JSON.parse(message.data);
					} catch (e) {
						return;
					}
					if (data.type !== 'mod-ga-async' || data.message !== 'ready' || data.name !== 'dealerfire-iframe') return;
					// Send client id to the iframe
					message.source.postMessage(
						JSON.stringify({ type: 'mod-ga-async', message: 'client-id', data: ga.getAll()[0].get('clientId') }),
						message.origin
					);
				});

			});
		} else {
			try {
				// this code executes for top window and same domain iframe
				if (top.location && top.location.pathname !== window.location.pathname) {
					createGATrackers();
				}
			} catch (e) {
				// this code executes for cross-domain iframe
				var counter = 0;
				function createTrackers (clientId) {
					var trackersData = [{"Code":"UA-50499223-1","IsPrimary":"1"},{"Code":"UA-37552201-2","IsPrimary":"0"},{"Code":"UA-101928564-1","IsPrimary":"0"},{"Code":"UA-37552201-1","IsPrimary":"0"},{"Code":"UA-151522316-1","IsPrimary":"0"}];
					for (var i = 0; i < trackersData.length; ++i) {
						createTracker(trackersData[i]['Code'], ++counter, clientId);
					}
				}
				function messageListener (message) {
					try {
						var data = JSON.parse(message.data);
					} catch (e) {
						return;
					}
					if (data.type !== 'mod-ga-async' || (data.message !== 'client-id' || !data.data) ) return;

					window.removeEventListener('message', messageListener);
					createTrackers(data.data);
									}

				window.addEventListener('message', messageListener);
				top.postMessage(JSON.stringify({ type: 'mod-ga-async', message: 'ready', name: name ? name : '' }), '*'); // notify top window that we are ready
			}
		}
		function createGATrackers() {
								createTracker('UA-50499223-1', 1);
									createTracker('UA-37552201-2', 2);
									createTracker('UA-101928564-1', 3);
									createTracker('UA-37552201-1', 4);
									createTracker('UA-151522316-1', 5);
						}
	})();
	/**
	 * The function send google analytics event to all google accounts
	 * If callback was given it will be called when event was sent to all accounts.
	 *
	 * @param category
	 * @param action
	 * @param label
	 * @param callback
	 */
	function createEventJs(category, action, label, callback) {
		if (category != '' && action != '') {
			var analyticsObject = {
				hitType: 'event',
				eventCategory: category
			};
			if (label !== '') {
				var nonInteractionEvents = {
					'Vehicle': ['View', 'Search'], // Category: [ actions ]
					'Form': ['View'],
					'ScheduleForm': ['View'],
					'Article': ['ArticleLoaded', 'ContentBottom'],
					'Blog': ['ViewPost', 'ViewListing'],
					'GeoLocationShare': ['OptClick'],
					'AnnouncementBar': ['View']
				};
				if (category in nonInteractionEvents && nonInteractionEvents[category].indexOf(action) != -1) {
					analyticsObject.nonInteraction = 1;
				}
			}
			action = action.replace(' ', '_');
			if (label != undefined) {
				if (typeof label !== 'string') {
					label = JSON.stringify(label);
				}
			} else {
				label = '';
			}
			analyticsObject.eventAction = action;
			analyticsObject.eventLabel = label;
			// We will save statuses about sending event to accounts here.
			// After all accounts was sent we call given callback function (if it given)
			var accountsSendStatus = {};
			// hitCallBack function. It will calls when event was sent
			var hitCallback = function(accountCode) {
				accountsSendStatus[accountCode] = true;
				// check that the event was sent to all accounts
				var isAllSent = true;
				for (var accountCodeItem in accountsSendStatus) {
					if (!accountsSendStatus[accountCodeItem]) {
						isAllSent = false;
						break;
					}
				}
				// We will call callBack if only event sent to all accounts
				if (isAllSent) {
					callback();
				}
			};
			if (typeof callback === 'function') { analyticsObject.hitCallback = function(){hitCallback('UA-50499223-1');} }
accountsSendStatus['UA-50499223-1'] = false;
ga('a1.send', analyticsObject);
if (typeof callback === 'function') { analyticsObject.hitCallback = function(){hitCallback('UA-37552201-2');} }
accountsSendStatus['UA-37552201-2'] = false;
ga('a2.send', analyticsObject);
if (typeof callback === 'function') { analyticsObject.hitCallback = function(){hitCallback('UA-101928564-1');} }
accountsSendStatus['UA-101928564-1'] = false;
ga('a3.send', analyticsObject);
if (typeof callback === 'function') { analyticsObject.hitCallback = function(){hitCallback('UA-37552201-1');} }
accountsSendStatus['UA-37552201-1'] = false;
ga('a4.send', analyticsObject);
if (typeof callback === 'function') { analyticsObject.hitCallback = function(){hitCallback('UA-151522316-1');} }
accountsSendStatus['UA-151522316-1'] = false;
ga('a5.send', analyticsObject);
		}
	}
	// This need for Backwards Compatibility
	window.hasHitCallbackCompatibility = true;
	window.trackAutonationGaEvents = false;



	
		// - cross-domain tracking implementation
		window.addEventListener('message', function(event) {
			var receiveData = event.data;
			var isMethodSpecified = typeof receiveData.method === 'string';

			// if no method (command) is specified, do nothing.
			if (!isMethodSpecified) {
				return;
			}

			// blackbook implementation of cross-domain tracking.
			if (receiveData.method === 'dfCrossDomainAnalyticsReady') {

				// callback passed to ga() will be called after the analytics library is loaded.
				ga(function() {
					// rename variables for clarity.
					var sourceDomain = event.origin;
					var sourceWindow = event.source;

					// get the google analytics client id from the first tracker.
					// the clientId is the same across all trackers.
					var gaClientId = ga.getAll()[0].get('clientId');

					// get the google analytics UA codes defined in ignite.
					// note: it is important NOT to use ga.getAll() because we only want
					// the cross-domain iframe to send to the DealerFire-defined analytics properties.
					// third-party scripts may create additional trackers which will also be included in
					// ga.getAll() list.
					var gaTrackingIds = ["UA-50499223-1","UA-37552201-2","UA-101928564-1","UA-37552201-1","UA-151522316-1"];

					// send the needed google analytics data to the triggering frame.
					var sendData = {
						method: 'setGoogleAnalyticsData',
						args: {
							gaClientId: gaClientId,
							gaTrackingIds: gaTrackingIds,
							gaCustomDimensionVars: typeof gaCustomDimensionVars === 'object'
								? gaCustomDimensionVars
								: {}
						}
					};

					sourceWindow.postMessage(sendData, sourceDomain);
				});

				return;
			}

			// handle general cross domain tracking requests.
			var isCrossDomainTrackingRequest = receiveData.method === 'track';

			if (!isCrossDomainTrackingRequest) {
				return;
			}
			
			// if only event is provided, use Form|Submit namespace.
			if (receiveData.event) {
				createEventJs('Form', 'Submit', receiveData.event);
			// if all google analytics event params are provided, pass all through.
			} else if (receiveData.category && receiveData.action && receiveData.label) {
				createEventJs(receiveData.category, receiveData.action, receiveData.label);
			}
		});
		




		<meta name="msvalidate.01" content="EA306BDBD608889C9EDFB640FE5E1178" />
		<meta name="google-site-verification" content="qw3R0JUL7eNNA61i0FRxQHx0gRKpvHddlmfgD2qgThQ" />

		
		<script async src="https://auto-digital-retail.capitalone.com/loader.js" charset="utf-8">
		<!-- Prequal Navigator Checkout -->

		
<script async src="https://content-container.edmunds.com/1863684.js" type="text/javascript">
				<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '543713413157238');
	fbq('track', 'PageView');
	
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=543713413157238&ev=PageView&noscript=1"
	/></noscript>
	</head>
	<body  class="global-index">
					<!-- Google Tag Manager -->
		<noscript>
			<iframe src="//www.googletagmanager.com/ns.html?id=GTM-KVGZN8N" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-KVGZN8N');





				<script type="text/javascript"  preventCompileOptimization>
//<![CDATA[

			window.isjQueryAvailable = function () { return typeof window.jQuery === 'function' };
			window.execIfjQueryIsAvailable = function (closure) {
				if (window.isjQueryAvailable()) {
					closure(window.jQuery);
				}
			};

			(function() {
				var waitingAfterPageLoaded = 0.5 * 60 * 1000; // half minute
				var pageLoadedTime;
				// Init dealerfire analytic if it isn't inited
				window._dfaq = window._dfaq || [];
				window.addEventListener('load', function() {
					var staticMaps = document.querySelectorAll('img[src*="maps.googleapis.com/maps/api/staticmap"]');
					for (var i = 0, l = staticMaps.length; i < l; i++) {
						sendToAnalytic(true);
					}
					pageLoadedTime = + new Date();
				});

				setTimeout(function loop() {
					var currentTime = + new Date();
					var maps;
					// Wait half minute after page fully load
					if (pageLoadedTime && currentTime - pageLoadedTime > waitingAfterPageLoaded) {
						return;
					}
					maps = document.querySelectorAll('.gm-style:not(._gm-style-counted)');
					for (var i = 0, l = maps.length; i < l; i++) {
						maps[i].className += ' _gm-style-counted';
						sendToAnalytic(false);
					}
					setTimeout(loop, 200);
				}, 200);

				function sendToAnalytic(isStatic) {
					_dfaq.push([
						'trackEvent',
						'GoogleMap',
						'View',
						{
							GoogleMapObject: { isStatic: isStatic }
						}
					]);
				}
			}());
		window.dealerfireExtensionSettings = {};

//]]>


//<![CDATA[

			window.dfSiteConfig = typeof window.dfSiteConfig === "object"
				? window.dfSiteConfig
				: {};
			
//]]>


//<![CDATA[
window.dealerfireExtensionSettings.i437174 = {"facebookPagePlugin":{"isEnabled":"0","iframeWidth":"340","iframeHeight":"500"}};

//]]>


//<![CDATA[
dfSiteConfig["GoogleAnalyticsEnabled"] = true;

//]]>


//<![CDATA[
window.gaDataLayer = {"pageType":"Homepage"};

//]]>




//<![CDATA[
$(document).ready(function() {

	// - add dealerfire call tracking analytics callbacks.
	// - IMPORTANT: callback monitoring and link behavior are done in generic tel: link handling code.
	// - IMPORTANT: click() method is used -- not on() method -- to support sites with new and old jquery.
	$('body').click(function(event) {

		// check to see if a tel: link was clicked.
		var telLink = null;
		var targetAndAncestors = $(event.target).add($(event.target).parents());
		targetAndAncestors.each(function() {
			if ($(this).is('a[href^=\"tel:\"]')) {
				telLink = $(this);

				// returning false breaks each loop iteration.
				return false;
			}
		});

		// do nothing if tel: link not found.
		if (!telLink) {
			return;
		}


		// only add call tracking analytics callbacks once.
		if (telLink.data('areDfCallTrackingAnalyticsCallbacksAdded')) {
			return;
		}

		telLink.data('areDfCallTrackingAnalyticsCallbacksAdded', true);


		// get/create call tracking analytics callbacks on <a> tag.
		var callTrackingAnalyticsCallbacks = telLink.data('callTrackingAnalyticsCallbacks');
		callTrackingAnalyticsCallbacks = typeof callTrackingAnalyticsCallbacks === 'object' ? callTrackingAnalyticsCallbacks : {};


		var phoneNumber = telLink.attr('href').match(/^tel:(.*)/)[1];

		// add call tracking analytics callbacks for each dealerfire analytics property.
		
			
			callTrackingAnalyticsCallbacks["dfClickTrackingProperty1"] = {
				callback: function() {
					var self = this;
					ga("a1.send", {
						hitType: 'event',
						eventCategory: 'ExternalLink',
						eventAction: 'Click',
						eventLabel: phoneNumber,
						hitCallback: function() {
							self.isSent = true;
						}
					});
				},
				isSent: false
			};
		
			
			callTrackingAnalyticsCallbacks["dfClickTrackingProperty2"] = {
				callback: function() {
					var self = this;
					ga("a2.send", {
						hitType: 'event',
						eventCategory: 'ExternalLink',
						eventAction: 'Click',
						eventLabel: phoneNumber,
						hitCallback: function() {
							self.isSent = true;
						}
					});
				},
				isSent: false
			};
		
			
			callTrackingAnalyticsCallbacks["dfClickTrackingProperty3"] = {
				callback: function() {
					var self = this;
					ga("a3.send", {
						hitType: 'event',
						eventCategory: 'ExternalLink',
						eventAction: 'Click',
						eventLabel: phoneNumber,
						hitCallback: function() {
							self.isSent = true;
						}
					});
				},
				isSent: false
			};
		
			
			callTrackingAnalyticsCallbacks["dfClickTrackingProperty4"] = {
				callback: function() {
					var self = this;
					ga("a4.send", {
						hitType: 'event',
						eventCategory: 'ExternalLink',
						eventAction: 'Click',
						eventLabel: phoneNumber,
						hitCallback: function() {
							self.isSent = true;
						}
					});
				},
				isSent: false
			};
		
			
			callTrackingAnalyticsCallbacks["dfClickTrackingProperty5"] = {
				callback: function() {
					var self = this;
					ga("a5.send", {
						hitType: 'event',
						eventCategory: 'ExternalLink',
						eventAction: 'Click',
						eventLabel: phoneNumber,
						hitCallback: function() {
							self.isSent = true;
						}
					});
				},
				isSent: false
			};
		
		// set/update analytics callbacks.
		telLink.data('callTrackingAnalyticsCallbacks', callTrackingAnalyticsCallbacks);
	});
});

//]]>


//<![CDATA[
// video tracking for youtube videos embedded as objects.
$(document).ready(function() {

	// using mousedown because click event does not get fired for flash video objects.
	// - IMPORTANT: mousedown() method is used -- not on() method -- to support sites with new and old jquery.
	$('body').mousedown(function(event) {

		// check to see if a tel: link was clicked.
		var youtubeVideoObjectElem = null;
		var targetAndAncestors = $(event.target).add($(event.target).parents());
		targetAndAncestors.each(function() {
			var youtubeVideosEmbeddedAsObjectsSelector = 'object[data*="youtube.com"]';
			if ($(this).is(youtubeVideosEmbeddedAsObjectsSelector)) {
				youtubeVideoObjectElem = $(this);

				// returning false breaks each loop iteration.
				return false;
			}
		});

		// do nothing if youtube video not found.
		if (!youtubeVideoObjectElem) {
			return;
		}

		// only send the play event once per video, per page.
		// note: the data() method does not work for object elements, so attr is used instead.
		if (youtubeVideoObjectElem.attr('is-play-event-fired')) {
			return;
		}

		youtubeVideoObjectElem.attr('is-play-event-fired', 1);

		var videoUrl = youtubeVideoObjectElem.attr('data');

		// send event to each google analytics property.
		for (var i = 0; ga.getAll()[i] !== undefined; i++) {

			// send state 1% to match the same data sent by the lunametrics youtube video tracking library.
			// 1% signifies "played".
			var state = '1%';
			ga.getAll()[i].send('event', 'YouTubeVideos', state, videoUrl);
		}
	});
});

//]]>


//<![CDATA[

	LANG_MENU_BACK = 'Back';

//]]>


//<![CDATA[

	(function($) {
		$(function() {
			var options = {"autorotate":"1","pause":"1","interval":"5000","animationSpeed":"700","width":"980","height":"400","effect":"fadeIn","fullwidth":"0","fwmodeImageResize":"0","thumbs":"0"};
			options.pause = 'hover';
			var count = $('.mod-slideshow-i750012').find('.carousel-inner .item').length;
			if (count) {
				$('.mod-slideshow-i750012').carousel(options);//.carousel('pause');
				if (options.autorotate === '0') {
					$('.mod-slideshow-i750012').carousel('pause');
				}
			};
		});
	})(jQuery);

//]]>


//<![CDATA[

	if (!window.liveSearchSettings) {
		window.liveSearchSettings = {};
	}
	if (!window.liveSearchSettings.resultsResponsive1) {
		window.liveSearchSettings.resultsResponsive1 = {};
	}
	window.liveSearchSettings.resultsResponsive1["live-search-id-i433882"] = {
		showSuggestions: 1,
		suggestionsLimit: 5,
		searchAllCars: false,
		webserviceEndpoint: "https://search.dealerfire.com/search/3952/",
		webserviceEndpointSuggestions: "https://search.dealerfire.com/suggestions/3952/",
		isInventory: false,
		inventoryUrl: "https://www.abzmotors.com/inventory",
		resource: {
			LIVE_SEARCH: "Search for vehicle (eg silver 2013 Frontier)",
			NO_RESULTS: "No Matches Found"
		}
		,searchQueryPreProcessJsCallback:        function(query) {

            

            // remove characters with diatrics, which cause live search errors.
            // replace with equivalant non-diatric characters.
            query = query.normalize('NFD').replace(/[\u0300-\u036f]/g, '');

            // remove potentially problematic characters not matched here.
            query = query.replace(/[^A-Za-z 0-9 \.,\?""!@#\$%\^&\*\(\)-_=\+;:<>\/\\\|\}\{\[\]`~]*/g, '');

            return query;
        }
	};

//]]>


//<![CDATA[

		$(document).ready(function(){
			$('.mod-testimonials-list #testimonials-listi436648').slick({
				autoplay: false,
				autoplaySpeed: 2000,
				draggable: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							autoplay: false,
							autoplaySpeed: 2000,
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
		});
	
//]]>


//<![CDATA[

	jQuery(function() {
		couponsFeatured.url = 'https://www.abzmotors.com/?mode=_ajax&_mod%5B%5D=Dfe_Modules_CouponsFeaturedPopup_Module&_subaction=_show_coupon';
		couponsFeatured.closeRedirectUrl = '';
		couponsFeatured.width = 650;
		couponsFeatured.height = 650;
		couponsFeatured.css.position = 'absolute';
		couponsFeatured.isCouponsInSession = false;
		couponsFeatured.init(0);
	})

//]]>


//<![CDATA[
var daObjects = daObjects || {}; daObjects['GeoLocationShare'] = {};
//]]>


//<![CDATA[
var daObjects = daObjects || {}; daObjects['CouponsFeaturedPopup'] = {};
//]]>


//<![CDATA[
var gaObjects = gaObjects || {}; gaObjects['GeoLocationShare'] = {};
//]]>


//<![CDATA[
var gaObjects = gaObjects || {}; gaObjects['CouponsFeaturedPopup'] = {};
//]]>

<script type="application/ld+json"  preventCompileOptimization>
//<![CDATA[
{"@context":"http:\/\/schema.org","@type":"AutoDealer","@id":"https:\/\/www.abzmotors.com\/#dealer-8306","name":"Autobyzack Inc","url":"https:\/\/www.abzmotors.com\/","telephone":"(830) 465-4038","logo":"https:\/\/cdn-ds.com\/media\/dealers\/logos\/Autobyzack-Inc-logo-63162.png","image":"https:\/\/cdn-ds.com\/media\/dealers\/logos\/Autobyzack-Inc-logo-63162.png","priceRange":"$$$$$","sameAs":["https:\/\/www.facebook.com\/abzmotors\/","",""],"address":{"@type":"PostalAddress","streetAddress":"9120 Southwest Freeway ","addressLocality":"Houston","addressRegion":"TX","postalCode":"77074","addressCountry":{"@type":"Country","name":"USA"}},"geo":{"latitude":"29.657275","longitude":"-95.563730","@type":"GeoCoordinates"},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Monday","opens":"09:00:00","closes":"19:00:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Tuesday","opens":"09:00:00","closes":"19:00:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Wednesday","opens":"09:00:00","closes":"19:00:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Thursday","opens":"09:00:00","closes":"19:00:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Friday","opens":"09:00:00","closes":"19:00:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Saturday","opens":"09:00:00","closes":"18:00:00"}]}
//]]>




//<![CDATA[

    if (!window.slideshowOptions) {
        window.slideshowOptions = {};
    }

    window.slideshowOptions['slideshow-i433260'] = {"adaptiveHeight":false,"autoplay":true,"autoplaySpeed":5000,"arrows":true,"dots":true,"fade":false,"infinite":true,"customPauseOnHover":true,"lazyLoad":"progressive","pauseOnHover":false,"speed":500,"swipe":true,"draggable":false,"touchMove":false,"vertical":false,"verticalDirectReverse":false,"cropRatio":0,"isMobileBrowser":false,"video":{"autoplay":true,"loop":true,"showControls":true,"adjustHeightToTallestImg":true,"volume":0},"shouldGetCustomerPosition":false}; window.slideshowOptimizationFunc=function(a,b){var c=a.querySelectorAll(".slide"),
b=b||{},d=b.cropRatio,e=a.clientWidth,f=window.innerWidth,g=f<768?100:150;c.length<2||(Array.prototype.forEach.call(c,function(c)
{var h,f=0;if(d)f=e/d;else{var i;if(/slide-video/.test(c.className)&&!b.video.adjustHeightToTallestImg?(h=c.querySelector("video"),
i="loadedmetadata"):/slide-image/.test(c.className)&&(h=c.querySelector("img"),i="load"),!h)return;
h.getAttribute("data-height")&&h.getAttribute("data-width")?f=h.getAttribute("data-width")<e?h.getAttribute("data-height"):
h.getAttribute("data-height")/h.getAttribute("data-width")*e:(f=h.clientWidth<e?h.clientHeight:h.clientHeight/h.clientWidth*e,
h.addEventListener(i,function(){window.slideshowOptimizationFunc(a,b)}))}g=Math.max(f,g)}),Array.prototype.forEach.call(c,
function(a){var b=a.querySelector(".media-content .link").style;b.minHeight=Math.ceil(g)+"px",b.lineHeight=Math.ceil(g)+"px";
var c=a.querySelector("iframe");if(c){var d=a.querySelector(".link");c.addEventListener("load",
function(){d.style.paddingTop=Math.floor(d.clientHeight-c.clientHeight)/2+"px"})}}))},
window.slideshowOptimizationFunc(document.querySelector('#slideshow-i433260'),window.slideshowOptions['slideshow-i433260']);
//]]>

<script type="text/javascript" src="/public/responsive/scripts/jquery-latest.js" >

//<![CDATA[
var $buoop = {vs:{i:7,f:15,o:12,s:5}};
//]]>


//<![CDATA[

	var modGoogleMapImages = {
		baloon_blue: '//cdn-ds.com/public/responsive/images/map/baloon-blue.png',
		baloon_red: '//cdn-ds.com/public/responsive/images/map/baloon-red.png',
		baloon_green: '//cdn-ds.com/public/responsive/images/map/baloon-green.png',
		baloon_yellow: '//cdn-ds.com/public/responsive/images/map/baloon-yellow.png'
	};

//]]>