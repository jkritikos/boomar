<?php

App::uses('CakeEmail', 'Network/Email');
class BoomarController extends AppController {
    
    var $components = array('Cookie', 'RequestHandler');
    var $helpers = array('Js','Time');
    
    function beforeFilter() {
        parent::beforeFilter();
        
        $this->set('menuClass',"");
    }
    
    function home(){
        $this->layout = 'home';
    }
    
    function whatweare(){
        $this->layout = 'about';
        $this->set('menuClass',"about");
    }
    
    function whoweare(){
        $this->layout = 'team';
        $this->set('menuClass',"about");
    }
    
    function services(){
        $this->layout = 'services';
        $this->set('menuClass',"services");
    }
    
    function mobile(){
        $this->layout = 'mobile';
        $this->set('menuClass',"services");
    }
    
    function web(){
        $this->layout = 'web';
        $this->set('menuClass',"services");
    }
    
    function branding(){
        $this->layout = 'branding';
        $this->set('menuClass',"services");
    }
    
    function strategy(){
        $this->layout = 'strategy';
        $this->set('menuClass',"services");
    }
    
    function portfolio(){
        $this->layout = 'portfolio';
        $this->set('menuClass',"portfolio");
    }
    
    function approach(){
        $this->layout = 'approach';
        $this->set('menuClass',"about");
    }
    
    function contact(){
        $this->layout = 'contact';
        $this->set('menuClass',"contact");
    }
    
    function project($id){
        $this->layout = 'project';
        $this->set('menuClass',"portfolio");

        if($id == PROJECT_MINDTHEBUZZ){
            $title = "Mind the Buzz";
            $overview = "One of the success stories in the Greek AppStore, Mind the Buzz is a product of Boomar and was born out of our love for knowledge games. The app targets quiz lovers, who want to play both offline and online, alone or with friends, with a plethora of more than 5,000 questions, making the game endless!";
            $thingsWeDid = "Following extensive research and endless hours of design, development and content editing, we launched an app that was immediately adored by the public. From its launch day, the game was number one app in the Greek AppStore and remained there for nearly 5 months. With engaging gameplay, simple navigation and fascinating features, Mind the Buzz turned out to be a success story with a 5-star average rating.";
            $url = "http://www.mindthebuzz.com";
            $skills = "mobile / web / digital strategy";
            $previous = false;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/mtb/mtb_680x600_6.jpg";
            
            
        } else if($id == PROJECT_IFEELKID){
            $title = "Ifeelkid";
            $overview = "Ifeelkid is a web radio station for children, with thousands of playful tunes, dreamy lullabies and magical fairy-tales. After the web radio’s launch, our client wished to create a radio app with a creative twist.";
            $thingsWeDid = "Apart from designing a colorful radio app that streamed live music, we suggested to add another feature that would give the application an educational character. Our client was thrilled with our proposal and 100 educational cards with fascinating tips and playful icons were designed, making the ifeelkid iOS app simply irresistible!";
            $url = "http://www.ifeelkid.gr";
            $skills = "mobile / digital strategy";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_6.jpg";
            $images[] = "/img/placeholders/boomar/ifeelkid/ifeelkid_680x600_7.jpg";
   
        } else if($id == PROJECT_FINOSFILM){
            $title = "Finos Film";
            $overview = "Finos Film is a film production company that dominated the Greek film industry from 1943 to 1977. More than 180 movies that have been cherished by three generations continue to entertain the public with their authentic scripts, outstanding production and unforgettable cast.";
            $thingsWeDid = "A brand new website, that would form a library of great cultural importance was the primary goal. Apart from the design and development, we carried out an extensive research and restored more than 5,000 rare images. The brand’s social media presence followed in Facebook and Twitter, making it possible – for the first time after 30 years – to open a dialogue with the “living myth” of Greek cinematography.";
            $url = "http://www.finosfilm.com";
            $skills = "web / digital strategy";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/ff/ff_680x600_6.jpg";
        } else if($id == PROJECT_AXDW13){
            $title = "AXDW XIII";
            $overview = "Athens Xclusive Designers Week is the most prestigious fashion week in Greece, with hundreds of talented Greek and international designers participating each season. The 13th AXDW had the privilege to be renamed Mercedes-Benz AXDW, and the campaign’s objective was to endorse the artistry of the catwalk.";
            $thingsWeDid = "We designed a series of communication materials, such as the main ad for fashion magazines, the official catalogue and invitation of the event, as well as backdrops and other branding elements. The concept was purely catwalk-driven, with black and white dominating our designs. Full-page images were used in the official catalogue to display the designers’ outfits, while consistent adaptations were used for the web.";
            $url = "http://www.axdw.gr";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/axdw13/axdw13_680x600_6.jpg";
        } else if($id == PROJECT_CANDO){
            $title = "Cando";
            $overview = "Cando is an innovative training studio, with a mission to give body and mind health a new meaning, through a spectrum of imaginative practices for all ages. The client approached us from the very beginning: they needed a name, a logo and a dazzling website.";
            $thingsWeDid = "The first thing we did was train with them, in order to experience their coaching practices ourselves. Then, we brainstormed, trying to grasp the core essence of our future brand. Finally, we got to work and gave birth to a brand that was exactly what our client had in mind. The name itself was a hit, while the logo’s fluid design added a touch of tranquility that was necessary to communicate the company’s philosophy. Then, followed a full-screen web presence, focused on gorgeous images of “cando” nature!";
            $url = "http://www.cando.gr";
            $skills = "web / branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/cando/cando_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/cando/cando_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/cando/cando_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/cando/cando_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/cando/cando_680x600_5.jpg";
            
        } else if($id == PROJECT_BWIN_FB){
            $title = "Bwin - Facebook game";
            $overview = "Bwin is the world’s number one in online gaming with more than 20 million users. During the launch of bwin’s local Facebook page, the client wanted to create awareness through a quick, capturing and entertaining game.";
            $thingsWeDid = "We designed and developed an interactive game for Facebook, using bwin’s flag for a fascinating “treasure hunt”. The users’ mission was to find – through zoom & pan – as many as 100 bwin flags that were hidden in the worlds’ largest stadium, in less than 2 minutes. The game was live for 2 weeks, giving the chance to the top 100 players to win great bwin products!";
            $url = "http://www.facebook.com/BwinCorner";
            $skills = "web";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/bwin_fb/bwin_fb_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/bwin_fb/bwin_fb_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/bwin_fb/bwin_fb_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/bwin_fb/bwin_fb_680x600_4.jpg";
            
        } else if($id == PROJECT_TOG){
            $title = "Ticket On The Go";
            $overview = "Edenred is a world leader in prepaid corporate services. With more than 2,300 strategic partners, the company serves approximately 100,000 consumers around Greece. One of their objectives was to develop a friendly application for iOS and Android devices that would allow users to easily find stores for redeeming their valuable vouchers.";
            $thingsWeDid = "We developed an app that was crystal-clear to use and offered users with relevant venues, based on their geo-location. The key was to provide relevance to the user experience. To add a personal touch, we allowed users to rate and share their experiences with other consumers. The application was designed and developed for both iOS and Android markets.";
            $url = "http://www.edenred.gr";
            $skills = "mobile";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/tong/tong_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/tong/tong_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/tong/tong_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/tong/tong_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/tong/tong_680x600_5.jpg";
        } else if($id == PROJECT_SIVACO){
            $title = "Sivaco";
            $overview = "Sivaco is an insurance brokers’ agency with more than 50 years of experience. Apart from their long expertise, the company’s strongest advantage is the plethora of choices they can provide with exceptional personal support. Their need for a fresh brand identity and web presence was fundamental.";
            $thingsWeDid = "We completely redesigned the company’s logo and created a modern yet corporate brand identity. The essence of ‘security’ was depicted with an elegant blue umbrella, incorporated into the company’s name. The brand’s tagline was based on the ‘freedom’ one gets by having choices, visualized with elegant images of seagulls. Our web design was consistent to the new brand identity, with simple navigation and engaging content.";
            $url = "http://www.sivaco.gr";
            $skills = "web / branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/sivaco/sivaco_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/sivaco/sivaco_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/sivaco/sivaco_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/sivaco/sivaco_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/sivaco/sivaco_680x600_5.jpg";
        } else if($id == PROJECT_AXDW12){
            $title = "AXDW XII";
            $overview = "Athens Xclusive Designers Week is the most prestigious fashion week in Greece, with hundreds of talented Greek and international designers participating each season. The 12th AXDW wished to convey their iconic character with a tech twist.";
            $thingsWeDid = "The “X” was already engraved into the minds of our audience as a fashion icon. What was not evident – until now – was its playful connotation with the tech icons used in our everyday lives. Therefore, a series of fashionable tech icons were designed, with the X dominating as the ultimate fashion icon since 2007. All communication materials – from official catalogues to invitations – conveyed the main concept with stylish adaptations.";
            $url = "http://www.axdw.gr";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/axdw12/axdw12_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/axdw12/axdw12_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/axdw12/axdw12_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/axdw12/axdw12_680x600_4.jpg";
        } else if($id == PROJECT_ORINO){
            $title = "Orino";
            $overview = "Orino is a traditional grocery store, located on the mountains of Zagori in Greece. Before its launch, the client needed a new corporate identity that would communicate the store’s core value: “north with an attitude”.";
            $thingsWeDid = "Our design process for the store’s new logo was based on a minimal and modern approach. Vivid orange, chocolate brown and white formed our color palette used for the store’s new brand identity. Our key visual was the store itself, which was successfully shaped into a mountainous sleek house, where products are so pure that reminds you of “home”.";
            $url = "https://www.facebook.com/pages/%CE%9F%CF%81%CE%B5%CE%B9%CE%BD%CF%8C-%CE%A0%CE%B1%CE%BD%CF%84%CE%BF%CF%80%CF%89%CE%BB%CE%B5%CE%AF%CE%BF-Orino-Pantopolio/444924568875493";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/orino/orino_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/orino/orino_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/orino/orino_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/orino/orino_680x600_4.jpg";
        } else if($id == PROJECT_BWIN){
            $title = "Bwin";
            $overview = "Bwin is the world’s number one in online gaming with more than 20 million users. The brand’s local marketing efforts ranged from thrilling contests to powerful corporate campaigns, some of which we were proud to be part of.";
            $thingsWeDid = "At the “20,000,000” campaign, we designed a key visual that managed to depict the grandness of bwin’s audience. For the “Tour2010” contest, the approach was plain as day, while funky cutouts entertained the public during the contest’s closing event. But the artistry of corporate branding is evident at the “F*ck Luck” campaign. A simple image accompanied by a powerful message and a wicked tagline, was all we wished to prove that when we are inspired, we can do wonders.";
            $url = null;
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_6.jpg";
            $images[] = "/img/placeholders/boomar/bwin/bwin_680x600_7.jpg";
        } else if($id == PROJECT_KTEL){
            $title = "Ktel";
            $overview = "Ktel is the national long-distance bus operator in Greece. Their busy itineraries are available through a fully automated voice portal with speech recognition service or through their functional mobile app for both iOS and Android devices. What the client needed was a tasteful website to communicate these features.";
            $thingsWeDid = "Following a slight but delicate logo redesign, we built a website that conveyed the company’s core services with easy navigation in an inviting environment. Lime green and mustard yellow added a touch of freshness, while the mobile presence enhanced the company’s technological evolution.";
            $url = "http://www.ktel.org";
            $skills = "web";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/ktel/ktel_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/ktel/ktel_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/ktel/ktel_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/ktel/ktel_680x600_4.jpg";
        } else if($id == PROJECT_ZOFIPSI){
            $title = "Zofipsy";
            $overview = "Zofipsy is a non-profit organization for the protection of stray animals, consisting of a group of respectable volunteers who strive to provide help to our little friends in need as well as educate humans on proper animal behavior. The organization needed a memorable logo along with communication material for its intriguing events.";
            $thingsWeDid = "Boomar people are passionate about animals. Therefore, any work that has to do with non-for-profit animal help and support has to be pro bono. We were thrilled to design from scratch the organization’s logo, which turned out quite playful and catchy. We participated in many Zofipsy events, mainly designing all communication material as well as engaging memorabilia, such as stickers and t-shirts.";
            $url = "http://www.facebook.com/zofipsy";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/zofipsy/zofipsy_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/zofipsy/zofipsy_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/zofipsy/zofipsy_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/zofipsy/zofipsy_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/zofipsy/zofipsy_680x600_5.jpg";
        } else if($id == PROJECT_AXDW11){
            $title = "AXDW XI";
            $overview = "Athens Xclusive Designers Week is the most prestigious fashion week in Greece, with hundreds of talented Greek and international designers participating each season. The 11th AXDW was all about Greece – the organization needed to communicate creatively its focus on Greek designers and its continuous efforts on exporting Greek talent abroad.";
            $thingsWeDid = "When our brief is “Greece” we’re instantly inspired. Our brainstorming’s keywords – blue, export and design – immediately unfolded the 11th concept: an origami paper boat floating into the Greek blue seas. Greek talent was successfully exported. Consistent adaptations followed in all communication materials, with a DYI surprise included in the event’s invitation.";
            $url = "http://www.axdw.gr";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_5.jpg";
            $images[] = "/img/placeholders/boomar/axdw11/axdw11_680x600_6.jpg";
        } else if($id == PROJECT_AXDW14){
            $title = "AXDW XIV";
            $overview = "Athens Xclusive Designers Week is the most prestigious fashion week in Greece. The 14th AXDW's roster included talented Greek and international designers, as well as fabulous events that gave the opportunity to lucky fashionistas to meet and greet their favourite designers.";
            $thingsWeDid = "The campaign focused on the backstage madness and allure that goes with every fashion week. Abstract backstage moments were put on the spotlight of all communication material, including the Official Catalogue, invitations, print ads and branding elements. A behind-the-scenes look at the most reputable event in Greece, reminded guests about the power of exclusivity and glamour.";
            $url = "http://www.axdw.gr";
            $skills = "branding";
            $previous = true;
            $next = true;
            
            $images[] = "/img/placeholders/boomar/axdw14/axdw14_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/axdw14/axdw14_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/axdw14/axdw14_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/axdw14/axdw14_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/axdw14/axdw14_680x600_5.jpg";
        } else if($id == PROJECT_DOGSQUARE){
            $title = "Dogsquare";
            $overview = "A mobile app dedicated to man's best friend. Our client's initiative to create an app for dogs, gave us the opportunity to develop witty functionalities to improve the lives of our best friends and their tech-savvy owners.";
            $thingsWeDid = "Our team undertook the development of Dogsquare app for iOS, including dog-walk monitoring, badge-reward system, user messaging, pet-related points of interest with the ability to check-in and many many more. It was definitely a privilege to work for a project dedicated to our little friends!";
            $url = "http://www.dogsquareapp.com";
            $skills = "mobile";
            $previous = true;
            $next = false;
            
            $images[] = "/img/placeholders/boomar/dogsquare/dogsquare_680x600_1.jpg";
            $images[] = "/img/placeholders/boomar/dogsquare/dogsquare_680x600_2.jpg";
            $images[] = "/img/placeholders/boomar/dogsquare/dogsquare_680x600_3.jpg";
            $images[] = "/img/placeholders/boomar/dogsquare/dogsquare_680x600_4.jpg";
            $images[] = "/img/placeholders/boomar/dogsquare/dogsquare_680x600_5.jpg";
        } 
        
        //Return to the view
        $this->set('title', $title);
        $this->set('overview', $overview);
        $this->set('things',$thingsWeDid);
        $this->set('images', $images);
        $this->set('url', $url);
        $this->set('previous', $previous);
        $this->set('next', $next);
        $this->set('id',$id);
        $this->set('skills',$skills);
        
    }
    
    function userContact(){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $msg = $_REQUEST['message'];
        
        $Email = new CakeEmail('smtp');
        
        $Email->emailFormat('html')
                ->subject('New message from Boomar.gr')
                ->template('contact')
                ->to('info@boomar.gr')
                ->cc('j.kritikos@boomar.gr')
                ->viewVars(array('name' => $name, 'email' => $email, 'subject' => $subject, 'msg' => $msg))    
                ->send();
         
        $data = "Success! Thank you for contacting us.";
        echo $data; 
        $this->layout = 'blank';
        //echo json_encode(compact('data', $data));
    }
    
}
?>