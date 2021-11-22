<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        $title = 'Lorep Ipsum';
        $description = 'Lorep ipsum dolor siamet amet jabang bayi lanang wedok.';
        $cover = 'https://1.bp.blogspot.com/-Ja-SAE7ojmg/YLfR8ghALqI/AAAAAAAAOxc/G1UKsc4pc-USXbI6-wDRArvqTqDIAywLQCLcBGAsYHQ/s2048/20626297_10210074351316263_236087673830960779_o.jpg';
        $figcaption = ' lorep ipsum';
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $coversection1 = 'https://1.bp.blogspot.com/-__5S8KHhL-Q/YLfSJd7UhoI/AAAAAAAAOzk/ZDxiT4KIZAoh1LONofx8YMNJVBR46X9TgCLcBGAsYHQ/s2048/51682755_10213922670281832_6842664586575872000_n.jpg';
        $titlesection1 = 'Lorep Ipsum';
        $section1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $coversection2 = 'https://1.bp.blogspot.com/-GgYMlDvrj1I/YLfSE233gSI/AAAAAAAAOys/mb0f_iJ34eMIBuI3LZeGVg-jo4yt-K7UgCLcBGAsYHQ/s2048/45132551_10213255494042843_4396025664566722560_n.jpg';
        $iconStart= 'Lorep ipsum dolor siamet amet';
        $icon1 = 'https://axcora.com/images/4689836.png';
        $icon2 = 'https://axcora.com/images/4689713.png';
        $icon3 = 'https://axcora.com/images/4696911.png';
        $icon4 = 'https://axcora.com/images/4696908.png';
        $icon5 = 'https://axcora.com/images/4696829.png';
        $icon6 = 'https://axcora.com/images/4689830.png';
        $icon7 = 'https://axcora.com/images/4689765.png';
        $icon8 = 'https://axcora.com/images/4696956.png';
        $contenticon1 = 'lorep ispum dolor siamet';
        $contenticon2 = 'lorep ispum dolor siamet';
        $contenticon3 = 'lorep ispum dolor siamet';
        $contenticon4 = 'lorep ispum dolor siamet';
        $contenticon5 = 'lorep ispum dolor siamet';
        $contenticon6 = 'lorep ispum dolor siamet';
        $contenticon7 = 'lorep ispum dolor siamet';
        $contenticon8 = 'lorep ispum dolor siamet';
        $titlesection2 = 'lorep ispum dolor siamet';
        $section2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $menutitle = 'Lorep ipsum dolor siamet amet '; 
        $menu1img = 'https://1.bp.blogspot.com/-a06oO8J5kL0/YLfSFJ0jDxI/AAAAAAAAOyw/o_ihcROWxFo5Us9UyLAUNmICdleViFWuACLcBGAsYHQ/s2048/45163675_10213244503848095_6162866053547294720_n.jpg';
        $menu1content = 'Lorep ipsum dolor siamet amet ';
        $menu1url = '/resto-x';
        $menu2img = 'https://1.bp.blogspot.com/-3FM3secOOc4/YLfR-hsvEQI/AAAAAAAAOxs/tlk8-2X-O0wT8aIUyEdq_mzya_cVCc10wCLcBGAsYHQ/s2048/25734257_10211062510699630_6028128390988426982_o.jpg';
        $menu2content = 'Lorep ipsum dolor siamet amet ';
        $menu2url = '/bangresto';
        $menu3img = 'https://1.bp.blogspot.com/-GV2T05zt5z8/YLfR-v06NmI/AAAAAAAAOxw/yR-PAq4-lco5mJeL-aCSHeud_dwcv6DEQCLcBGAsYHQ/s2048/26170414_10211085178906321_9203449801860442032_o.jpg';
        $menu3content = 'Lorep ipsum dolor siamet amet ';
        $menu3url = '/mr-resto';
        $menu4img = 'https://1.bp.blogspot.com/-m35-InVTVA4/YLfSC8zR6RI/AAAAAAAAOyc/DQcBknqi28APaOOuhzBzsVLGPuxCmXyPACLcBGAsYHQ/s2048/36870944_10212502263492550_7984323407032352768_n.jpg';
        $menu4content = 'Lorep ipsum dolor siamet amet ';
        $menu4url = '/dexoposresto';
        $menu5img = 'https://1.bp.blogspot.com/-yT34gHKU_p8/YLfSB-QUlGI/AAAAAAAAOyQ/cGpkkRx_GqA6fK2JwbiRpTYz93K_6VkTgCLcBGAsYHQ/s2048/28337927_10211544031577351_968734448723016761_o.jpg';
        $menu5content = 'Lorep ipsum dolor siamet amet ';
        $menu5url = '/boosterposresto';
        $menu6img = 'https://1.bp.blogspot.com/-MCuSSon83Qs/YLfR_iZh7OI/AAAAAAAAOx4/yHCT0uVNQnkqBbv8aPsgMsUi7uRSyntvwCLcBGAsYHQ/s2048/26173913_10211091155735738_6985323107730628732_o.jpg';
        $menu6content = 'Lorep ipsum dolor siamet amet ';
        $menu6url = '/uniposresto';
        $cinema = 'gGZcHO32mh4';
        $foot = 'Get Started Now';
        $foot1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $foot2 = 'Axcora Technology';
        $foot3 = 'Ruko Pasar Wisata Juanda Q.07 - Sidoarjo';
        $foot4 = 'East Java - Indonesia';
        $foot5 = 'Whatsapp : +6285646104747'; 
        $foote = 'Call us : +62895339403223';
        $foot6 = 'axcora@gmail.com';
       
        return $this->render('home.html.twig', [
            'controller_name'=> 'DefaultController', 'title'=> $title, 'description'=> $description, 'cover'=> $cover, 'figcaption'=> $figcaption, 'content'=> $content, 'coversection1'=> $coversection1, 'coversection2'=> $coversection2, 'titlesection1'=> $titlesection1, 'section1'=> $section1, 'titlesection2'=> $titlesection2, 'section2'=> $section2, 'iconStart'=> $iconStart, 'icon1'=> $icon1, 'icon2'=> $icon2, 'icon3'=> $icon3, 'icon4'=> $icon4, 'icon5'=> $icon5, 'icon6'=> $icon6, 'icon7'=> $icon7, 'icon8'=> $icon8, 'contenticon1'=> $contenticon1, 'contenticon2'=> $contenticon2, 'contenticon3'=> $contenticon3, 'contenticon4'=> $contenticon4, 'contenticon5'=> $contenticon5, 'contenticon6'=> $contenticon6, 'contenticon7'=> $contenticon7, 'contenticon8'=> $contenticon8, 'menutitle'=> $menutitle, 'menu1url'=> $menu1url, 'menu1img'=> $menu1img, 'menu1content'=> $menu1content, 'menu2url'=> $menu2url, 'menu2img'=> $menu2img, 'menu2content'=> $menu2content, 'menu3url'=> $menu3url, 'menu3img'=> $menu3img, 'menu3content'=> $menu3content, 'menu4url'=> $menu4url, 'menu4img'=> $menu4img, 'menu4content'=> $menu4content, 'menu5url'=> $menu5url, 'menu5img'=> $menu5img, 'menu5content'=> $menu5content, 'menu6url'=> $menu6url, 'menu6img'=> $menu6img, 'menu6content'=> $menu6content, 'cinema'=> $cinema, 'foot'=> $foot, 'foot1'=> $foot1, 'foot2'=> $foot2, 'foot3'=> $foot3, 'foot4'=> $foot4, 'foot5'=> $foot5, 'foote'=> $foote, 'foot6'=> $foot6,]);}
  
 /**
     * @Route("/product", name="product")
     */
    public function product(): Response
    {
        $title = 'Lorem ipsum dolor sit amet';
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $cover = 'https://1.bp.blogspot.com/-d1FeB-aViHw/YLfSIupOCPI/AAAAAAAAOzY/N3zuWEsdaCcq8a3a6LMjWVSJqYel6xDaQCLcBGAsYHQ/s2048/49705038_10213666019905733_4483986139522269184_n.jpg';
        $url = '/product/';
        $menutitle = 'Lorep ipsum dolor siamet amet '; 
        $menu1img = 'https://1.bp.blogspot.com/-75PIj828w2E/YLfR_PaE2sI/AAAAAAAAOx0/bLQBdqQUO8YB3BXQRAVDpNVOFBQ0QaTQQCLcBGAsYHQ/s2048/26170731_10211140736655230_1170313066489563346_o.jpg';
        $menu1content = 'Lorep ipsum dolor siamet amet ';
        $menu1url = '/resto-x';
        $menu2img = 'https://1.bp.blogspot.com/-3FM3secOOc4/YLfR-hsvEQI/AAAAAAAAOxs/tlk8-2X-O0wT8aIUyEdq_mzya_cVCc10wCLcBGAsYHQ/s2048/25734257_10211062510699630_6028128390988426982_o.jpg';
        $menu2content = 'Lorep ipsum dolor siamet amet ';
        $menu2url = '/bangresto';
        $menu3img = 'https://1.bp.blogspot.com/-GV2T05zt5z8/YLfR-v06NmI/AAAAAAAAOxw/yR-PAq4-lco5mJeL-aCSHeud_dwcv6DEQCLcBGAsYHQ/s2048/26170414_10211085178906321_9203449801860442032_o.jpg';
        $menu3content = 'Lorep ipsum dolor siamet amet ';
        $menu3url = '/mr-resto';
        $menu4img = 'https://1.bp.blogspot.com/-m35-InVTVA4/YLfSC8zR6RI/AAAAAAAAOyc/DQcBknqi28APaOOuhzBzsVLGPuxCmXyPACLcBGAsYHQ/s2048/36870944_10212502263492550_7984323407032352768_n.jpg';
        $menu4content = 'Lorep ipsum dolor siamet amet ';
        $menu4url = '/dexoposresto';
        $menu5img = 'https://1.bp.blogspot.com/-yT34gHKU_p8/YLfSB-QUlGI/AAAAAAAAOyQ/cGpkkRx_GqA6fK2JwbiRpTYz93K_6VkTgCLcBGAsYHQ/s2048/28337927_10211544031577351_968734448723016761_o.jpg';
        $menu5content = 'Lorep ipsum dolor siamet amet ';
        $menu5url = '/boosterposresto';
        $menu6img = 'https://1.bp.blogspot.com/-MCuSSon83Qs/YLfR_iZh7OI/AAAAAAAAOx4/yHCT0uVNQnkqBbv8aPsgMsUi7uRSyntvwCLcBGAsYHQ/s2048/26173913_10211091155735738_6985323107730628732_o.jpg';
        $menu6content = 'Lorep ipsum dolor siamet amet ';
        $menu6url = '/uniposresto';

        return $this->render('product.html.twig', [
            'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover, 'menutitle'=> $menutitle, 'menu1url'=> $menu1url, 'menu1img'=> $menu1img, 'menu1content'=> $menu1content, 'menu2url'=> $menu2url, 'menu2img'=> $menu2img, 'menu2content'=> $menu2content, 'menu3url'=> $menu3url, 'menu3img'=> $menu3img, 'menu3content'=> $menu3content, 'menu4url'=> $menu4url, 'menu4img'=> $menu4img, 'menu4content'=> $menu4content, 'menu5url'=> $menu5url, 'menu5img'=> $menu5img, 'menu5content'=> $menu5content, 'menu6url'=> $menu6url, 'menu6img'=> $menu6img, 'menu6content'=> $menu6content, 
        ]);
    }
     /**
     * @Route("/techno", name="techno")
     */
    public function techno(): Response
    {
        $title = 'Lorep Ipsum';
        $description = 'Iwak Peyek Iwak Peyek Sego Jagung. ';
        $cover = 'https://1.bp.blogspot.com/-I2xDnY9H9AM/YLfCNPEy_4I/AAAAAAAAOts/SlCv5RD_m-QiExNWOIOj8MNDP1hMfz31gCLcBGAsYHQ/s2048/51855824_10213950548058759_9209447319089446912_n.jpg';
        $url = '/techno/';
        $content = 'Dengar musik lambada dalam pesta meriah , Dengan gadis yang cantik jelita Aduh senyum manisnya legak legok gayanya ,Dia tawarkan kopi lambadaHo kasihku aku jatuh cintaHo asyiknya dia balas cintaGenggam tanganku genggamlahJanganlah kau lepaskan (ya ya ya)Peluk diriku dekaplahJanganlah kau lepaskan (ya ya ya)Genggam tanganku genggamlahJanganlah kau lepaskan (ya ya ya)Peluk diriku dekaplahJanganlah kau lepaskan (ya ya ya) Genggam tanganku genggamlahJanganlah kau lepaskan (ya ya ya) Peluk diriku dekaplahJanganlah kau lepaskan (ya ya ya)';
        return $this->render('technology.html.twig', [
            'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,
        ]);
    }
 /**
     * @Route("/pointofsale", name="pos")
     */
    public function pos(): Response
    {
        $title = 'Kopi dangdut';
        $description = 'Kala kupandang kerlip bintang nan jauh disana.';
        $cover = 'https://axcora.com/images/tus.jpg';
        $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdutKarena terlena oleh pesona alunan kopi dangdut';
        $url = '/pointofsale/';
        $download= 'https://mesinkasir.github.io/e-catalog/TOUCHSCREEN POS.pdf';
        $cdownload = 'Download Now';
        $gal1 ='https://axcora.com/images/touchscreenpos (5).jpg';
        $gal2 ='https://axcora.com/images/touchscreenpos (4).jpg';
        $gal3 ='https://axcora.com/images/touchscreenpos (3).jpg';
        $gal4 ='https://axcora.com/images/touchscreenpos (2).jpg';
        $gal5 ='https://axcora.com/images/touchscreenpos (1).jpg';
        $gal6 ='https://axcora.com/images/touchscreenpos (6).jpg';
        $video1 ='NLxDbnyQ4r4';
        $video2 ='FAhCxCBu8ZE';
        $p1 ='https://axcora.com/images/TOUCHSCREEN1.png';
        $p2 ='https://axcora.com/images/TOUCHSCREEN2.png';
        $p3 ='https://axcora.com/images/TOUCHSCREEN3.png';
        $p4 ='https://axcora.com/images/TOUCHSCREEN4.png';
        $p5 ='https://axcora.com/images/TOUCHSCREEN5.png';
        $p6 ='https://axcora.com/images/TOUCHSCREEN6.png';
        $cp1 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cp2 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cp3 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cp4 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cp5 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cp6 ='Lorem ipsum dolor sit amet, consectetur adipiscing elit';

        return $this->render('mesinkasir.html.twig', [
            'controller_name' => 'DefaultController', 'title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'gal1'=> $gal1,'gal2'=> $gal2,'gal3'=> $gal3,'gal4'=> $gal4,'gal5'=> $gal5,'gal6'=> $gal6,'p1'=> $p1,'p2'=> $p2,'p3'=> $p3,'p4'=> $p4,'p5'=> $p5,'p6'=> $p6,'cp1'=> $cp1,'cp2'=> $cp2,'cp3'=> $cp3,'cp4'=> $cp4,'cp5'=> $cp5,'cp6'=> $cp6,'video1'=> $video1,'video2'=> $video2,
        ]);
    }
 /**
     * @Route("/resto-x", name="restox")
     */
    public function restox(): Response
    {
        $title = 'Lorep Ipsum';
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cover = 'https://1.bp.blogspot.com/-CvW2422KPqo/YLfB7c74KEI/AAAAAAAAOq4/-nejibx3H-YQ2mGdYARu1LADg0KvVV1PQCLcBGAsYHQ/s960/14088596_10207159106756971_2400656044542344527_n.jpg';
        $video = 'tNBRSJKN8N0';
        $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
        $url = '/resto-x/';
        $download= 'https://mesinkasir.github.io/e-catalog/RESTO-X.pdf';
        $cdownload = 'Download Now';
        return $this->render('restox.html.twig', [
            'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
        ]);
    }
    /**
        * @Route("/bangresto", name="abang")
        */
       public function abang(): Response
    {
        $title = 'Lorep Ipsum';
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $cover = 'https://1.bp.blogspot.com/-Foh-l1jWXsI/YLfCGhOcKNI/AAAAAAAAOsk/aeHbHu3YPDMAcaJWtSHdXbSROufc8kd7wCLcBGAsYHQ/s2048/18403883_10209329842864017_1947787801223790020_o.jpg';
        $video = 'tNBRSJKN8N0';
        $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
        $url = '/bangresto/';
        $download= 'https://mesinkasir.github.io/e-catalog/bang resto aplikasi restoran.pdf';
        $cdownload = 'Download Now';
        return $this->render('bangresto.html.twig', [
            'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
        ]);
    }
    /**
        * @Route("/mr-resto", name="mr")
        */
       public function mr(): Response
    {
           $title = 'Lorep Ipsum';
           $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
           $cover = 'https://1.bp.blogspot.com/-aJNDwoRcECA/YLfCDKB7M1I/AAAAAAAAOsA/8iHCapn8IHI20skh7ulMxjYPdoahYwyJACLcBGAsYHQ/s2048/17620310_10208942926631353_3510595162876744820_o.jpg';
           $video = 'tNBRSJKN8N0';
           $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
           $url = '/mr-resto/';
           $download= 'https://mesinkasir.github.io/e-catalog/MR.RESTO POS.pdf';
           $cdownload = 'Download Now';
           return $this->render('mr-resto.html.twig', [
               'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
           ]);
       }
       /**
           * @Route("/dexoposresto", name="dx")
           */
     public function dx(): Response
    {
         $title = 'Lorep Ipsum';
         $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
         $cover = 'https://1.bp.blogspot.com/-N1jI1mSc0hQ/YLfCDiu-XEI/AAAAAAAAOsI/KcVGtSvHDhc9PhLcSKMrQww9Mfk_iusOgCLcBGAsYHQ/s2048/17854804_10209034911090907_6013383141377930042_o.jpg';
         $video = 'tNBRSJKN8N0';
         $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
         $url = '/dexoposresto/';
         $download= 'https://mesinkasir.github.io/e-catalog/dexoposrestoapps.pdf';
         $cdownload = 'Download Now';
         return $this->render('dxresto.html.twig', [
         'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
          ]);
      }
          /**
              * @Route("/boosterposresto", name="bs")
              */
      public function bs(): Response
      {
          $title = 'Lorep Ipsum';
          $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
          $cover = 'https://1.bp.blogspot.com/-hVtG4an23ts/YLfCNswWniI/AAAAAAAAOt0/VhvNEwOSVvgnETKMrfH4ZbiW3cvUK4BMgCLcBGAsYHQ/s1720/81314795_10216219163012715_8744767145113550848_n.jpg';
          $video = 'tNBRSJKN8N0';
          $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
          $url = '/boosterposresto/';
          $download= 'https://mesinkasir.github.io/e-catalog/Boosterpos Resto App.pdf';
          $cdownload = 'Download Now';
          return $this->render('boosterpos.html.twig', [
              'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
          ]);
      }
             /**
                 * @Route("/uniposresto", name="uni")
                 */
     public function uni(): Response
     {
          $title = 'Lorep Ipsum';
          $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
          $cover = 'https://1.bp.blogspot.com/-qLpe_qzTIXk/YLfB9DUdX_I/AAAAAAAAOrQ/Cfe3hxsA-IwO98GHHorTQJca20Kn54UpwCLcBGAsYHQ/s960/14199238_10207237241910301_1593887801130781585_n.jpg';
          $video = 'tNBRSJKN8N0';
          $content ='Kala ku pandang kerlip bintang nun jauh di sanaKala ku pandang kerlip bintang nun jauh di sana,Sayup kudengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Dag-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Dag-dug-dug-dig-dug, detak jantungku,Ser-ser-ser-ser-ser, bunyi darahku,Na-na-na, mengapa kamu da-datang lagi menggodaku,Dulu hatiku membeku bagaikan segumpal salju,Ku tak mau peduli biar hitam, biar putih,Melangkah berhati-hati, asal jangan nyebur ke kali,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Irama kopi dangdut yang ceria,Menyengat hati menjadi gairah,Membuat aku lupa akan cintaku yang telah lalu,Kala ku pandang kerlip bintang nun jauh di sana,Sayup ku dengar melodi cinta yang menggema,Terasa kembali gelora jiwa mudaku,Karena tersentuh alunan lagu semerdu kopi dangdut,Api asmara yang dahulu pernah membara,Semakin hangat bagai ciuman yang pertama,Detak jantungku seakan ikut irama,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut,Karena terlena oleh pesona alunan kopi dangdut.';
          $url = '/uniposresto/';
          $download= 'https://mesinkasir.github.io/e-catalog/next level resto cafe system.pdf';
          $cdownload = 'Download Now';
          return $this->render('unipos.html.twig', [
             'controller_name' => 'DefaultController','title'=> $title, 'description'=> $description, 'url'=> $url,'cover'=> $cover,'content'=> $content,'download'=> $download,'cdownload'=> $cdownload,'video'=> $video,
         ]);
        }

}
