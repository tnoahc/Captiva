<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta name="keywords" content="Captiva, Captiva Africa, Uganda, Kenya, Captiva Communications, Captiva Uganda, communications">
<title>Clients</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href="css/media_queries.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.flip.min.js"></script>
<script type="text/javascript" src="js/script.js"></script><script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35501042-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div class="container">
  <header>
    <h1>Our Clients</h1>
    <pre><a href="index.html">Home</a> | <a href="client_service.html">Client Service</a> | <a href="../clients.php">Clients</a> | <a href="../marketing.html">Captiva Marketing</a> | <a href="../careers.html">Careers</a></pre>
    <a href="index.html"><img src="imgs/captiva-logo.svg" alt="Captiva Africa: Logo" width="120" height="120"></a></header>
  <section>
    <?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array (array('mof-Zambia','A world class institution in the mobilization and management of public resources for sustainable national development.','http://www.mofnp.gov.zm/'),array('moh-Zambia','A Nation of Healthy & Productive People','http://www.moh.gov.zm/'),array('chaz','The largest non-government health provider in Zambia.','http://www.chaz.org.zm/'),array('Fanisi-Capital','A US$50M fund which makes direct investments in businesses with potential for substantial growth.','http://fanisi.com/'),array('Pivotworks','A city-scale treatment solution that converts human waste into renewable fuel.','http://pivotworks.co/'),array('C&R-Group','The largest share registrar in the region with a strong brand, service excellence track record & a leadership position of 33%.','http://www.crsltd.co.ke'),array('gavi','A global Vaccine Alliance, bringing together public and private sectors with the shared goal of creating equal access to new and underused vaccines for children living in the world’s poorest countries.','http://www.gavi.org/'),array('WaterOrg','Safe water and the dignity of a toilet for all, in our lifetime.','http://water.org/'), array('GulfEnergy','Providing energy solutions to the region.','http://gulfenergy.co.ke/'), array('BioFil','Development of innovative products for dealing with liquid and solid waste.','http://www.biofilcom.org/'), array('ABL-Dunamis','A Sub-Saharan Africa focussed Finance and Investment services firm.','http://abl.co.ug/'), array('Energy Services Ltd','Aims to explore the creation and delivery of information and knowledge that facilitates the development of sustainable energy solutions.','http://www.energy.ug/'), array('World Bank','One of the worlds largest sources of development assistance','http://www.worldbank.org/'),
array('The Uniform Store East Africa','Kenya’s leading stockist of school and staff uniforms.','http://uniformshopeafrica.com/'),
array('Aquasantec-Group','An association of companies that are focused on delivering innovative water and sanitation solutions.','http://afritank.com/kent/'),
array('Silafrica','Innovation in our products, our process, and our approach to making plastics that are of the highest quality for the communities we serve.','http://www.silafrica.com/'),
array('WSP','A multi-donor partnership administered by the World Bank to support poor people in obtaining affordable, safe and sustainable access to water and sanitation services.','http://www.wsp.org/'),
array('Gold-Coin-Forex-Bureau','Understanding and meeting your financial needs.
Suite 264 Conference Centre Serena P.O Box 28904 Kampala, Uganda. T +256 414 371 042 | F +256 414 258 013
',''),
array('Kosiya Hotel','An inspirational blend of culture, pan-African panache, social style and business reliability','http://www.kosiyahotel.com/'),
array('psi','A global health organization dedicated to improving the health of people in the developing world by focusing on serious challenges','http://psi.org'),
array('Crestanks','Delivering innovative low cost, easy to install, use and long lasting water and sanitation solutions','http://afritank.com/kent/crestanks.html'),
array('Vision Sanitation Solutions','Provider of affordable wet and solid waste management solutions',''),
array('Ministry of Internal Affairs','A peaceful,safe and stable Uganda','http://www.mia.go.ug/'),
array('Waste Enterprisers','A registered LLC in Ghana since February 2010.','http://www.waste-enterprisers.com/'),
array('Excloosive','A well-established Sanitation Solutions Provider, known for the provision of hygenic and innovative mobile sanitation facilities, for outdoor gatherings, since 2004.','http://www.excloosive.co.ke/'),
array('Uganda Police Force','Established under Article 211 of the Constitution of the Republic of Uganda 1995 and Section 2 of the Police Act Cap 303.','http://www.upf.go.ug/'),
array('United Nations Development Programme (UNDP)','Is the United Nations global development network.','http://www.undp.org/content/undp/en/home.html'),
	array('Akiba Products','A leading food products development and management company located in East Africa.','http://akibaproducts.com/'),
	array('Cessfumi','This pit and septic tank emptying and fumigation company serves a diversified range of clients and offers high quality, responsive and competitively priced services.',''),
	array('CleanLand Sanitation','Is a pit emptying business that was created in 2001. Since inception the company has expanded to cover 5 districts in Uganda and it continues to grow and dominate a large part of the market.',''),
	array('Corporate Technical Services','Is a Kenyan based business dealing in security control equipment and systems. It has had unrelenting growth and continues to provide unequalled security safety.',''),
	array('Design Group & Associates','For over 40 years, Design Group has been one of the leading Architectural, Engineering and Planning consultancy firms in East Africa.','http://dga-africa.com/'),
	array('Ema Properties','One of the leading property management companies in Uganda',''),
	array('ESSAR','Is a multinational conglomerate in the sectors of steel, oil & gas, power, communications, shipping, ports & logistics, projects and minerals.','http://www.essar.com'),
	array('Gloria Wavamunno','Was created under the artistic direction of Gloria Wavamunno, a Ugandan based designer. Influenced by culture, music and all things unexplainable.','http://www.gloriawavamunno.com/'),
	array('Heineken','Is a proud, independent global brewer committed to surprise and excite consumers with its brands and products everywhere.','http://www.heinekeninternational.com'),
	array('Intensive Care Society','Dr. Arthur Kwizera brought together a group of practitioners to discuss strategies for moving forward intensive care medicine leading to the birth of Intensive Care Uganda.','http://www.intensivecareuganda.com/'),
	array('International Finance Corporation','Is the largest global development institution focused exclusively on the private sector.','http://www.ifc.org'),
	array('Just Clean It','It operates in Solid Waste Management, fumigation and domestic cleaning services; it has over the years expanded and incorporated other services of industry, office, home cleaning and fumigation.',''),
	array('Mambo Bado','Is a leaking solutions company formed in 2007 on the initiative of passionate entrepreneurs to aid in the rehabilitation of juvenile youth.',''),
	array('Milestones','It is famous for its savoury and sweet pastries. With its great location and unique character, it is the ideal spot for post-shopping coffee, cake breaks with friends and leisurely lunches. ',''),
	array('Rainbow Ranchers','A continuous family venture, that seeks to promote the Ankole culture of cattle-keeping by economically empowering the people.','http://www.rainbowranchers.com/'),
	array('Rift Valley Investments','This is an investment company based in Uganda and expanding throughout the great lakes region. They are both a provider and a manager of funds.','http://rvinvest.com/'),
	array('Sanitation Solutions','A program launched in 2011 in response to the realization that the traditional subsidy-based model of helping millions of the poor access sanitation is not sustainable.','http://sanitation.captivaafrica.com/'),
	array('Simplicity Street','A dynamic movement of concerned Ugandans championing positive ideologies for the growth and rebuidling of our societal framework from cultural to work place related issues.','http://simplicitystreet.org/'),
	array('Tesi & Siima','Is a fast growing commercial and corporate law consultancy in the heart of Kampala, solely committed to providing cutting-edge legal services to their clients.',''),
	array('The Imani Foundation','A registered Community Based Organisation (CBO) established to advocate for improved services for children with critical illness which require intensive care services.','http://imani-foundation.org/'),
	array('Water for People','Is an international, nonprofit humanitarian organization that focuses on long-lasting, safe drinking water resources and improved sanitation','http://www.waterforpeople.org/'),
	array('Ecotact','A Social enterprise that invests in Innovations to solve sanitation crisis in Africa and beyond.','http://www.ecotact.org/')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>
    <div id="main">
      <div class="sponsorListHolder">
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="imgs/logos/'.$company[0].'.gif" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>
        <div class="clear"></div>
      </div>
    </div>
  </section>
  <footer>
    <p>©2014 Captiva Africa LLC. All rights reserved <br>
      Tel: +256 414 236 303 | +256 312 514 327 | <a href="mailto:info@captivaafrica.com">info@captivaafrica.com</a> | <a href="about.html">about</a> | <a href="contact.html">contact us</a> | <a href="sitemap.xml">sitemap</a></p>
  </footer>
  <!-- end .container --></div>
</body>
</html>
