<?php

namespace Admin\Mail;

use Zend\Mail\Message;
use Zend\Mail\Transport\Sendmail as SendmailTransport;
use Zend\Mime\Message as MimeMessage;
use Zend\Mime\Part as MimePart;
use Zend\Mime\Mime;

class Mailer
{
    protected $candidates = 'rekrutacja@wincklerpersonal.pl';
    protected $contact    = 'rekrutacja@wincklerpersonal.pl';
    protected $client     = 'info@wincklerpersonal.pl';
    protected $care       = 'rekrutacja@wincklerpersonal.pl';
    protected $note       = 'info@wincklerpersonal.pl';
    protected $personel   = 'info@wincklerpersonal.pl';
    protected $notification   = 'info@wincklerpersonal.pl';
       
    protected $serviceMail = 'gielarek@gmail.com';
    
//    protected $ofiiceMail = 'gielarek@gmail.com';
//    protected $infoMail = 'gielarek@gmail.com';



    protected $answer = array ('yes' => '<span class="label label-primary">Tak</span>','no' => '<span class="label label-danger">Nie</span>');    
    protected $sex = array('yes' => 'Tak', 'women' => 'Chcę się opiekować kobietą', 'men' => 'Chcę się opiekować mężczyzną', 'mariage' => 'Chcę się opiekować małżeństwem', 'no' => 'Nie');
    protected $language = array( 'no' => 'brak', 'basic' => 'podstawowy', 'inter' => 'średniozaawansowany', 'pro' => 'zaawansowany');


    public function sendContactMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">
                    <p><b>Imię i Nazwisko: </b>' .$content['contactName']. '</p>
                    <p><b>E-mail: </b>' .$content['contactEmail']. '</p>                    
                    <p><b>Stanowisko: </b><span style="text-transform:uppercase">' .$content['contactPosition']. '</span></p>
                    <p><b>Telefon: </b>' .$content['contactPhone']. '</p>                        
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Treść wiadomości: </p>
                    ' .$content['contactMessage']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        $body->setParts(array($text, $html));        
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->contact)
                ->setSubject('Formularz kontaktowy Winckler Personal');
        
        $message->setBody($body);
        
        $message->addReplyTo($content['contactEmail'], $content['contactName']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
    public function sendCareMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy - 3 kroki do wyjazdu:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">
                    <p><b>Imię i Nazwisko: </b>' .$content['careName']. '</p>
                    <p><b>Data urodzenia: </b>' .$content['careDate']. '</p>
                    <p><b>Telefon komórkowy: </b>' .$content['careCellphone']. '</p>
                    <p><b>Telefon stacjonarny: </b>' .$content['carePhone']. '</p>                        
                    <p><b>E-mail: </b>' .$content['careEmail']. '</p>
                    <p><b>Województwo: </b>' .$content['careRegion']. '</p> 
                    <p><b>Miasto: </b>' .$content['careCity']. '</p> 
                    <p><b>Doświadczenie w charakterze opiekuna/opiekunki os. starszych?: </b>' .$this->answer[$content['careExp']]. '</p>
                    <p><b>Osoba paląca ?: </b>' .$this->answer[$content['careSmoke']]. '</p>
                    <p><b>Czynne prawo jazdy?: </b>' .$this->answer[$content['careDriving']]. '</p>
                    <p><b>Stopień znajomości języka niemieckiego: </b>' .$this->language[$content['careLanguage']]. '</p>
                    <p><b>Osoba, która mogłaby Pana/Panią zastępować?: </b>' .$this->answer[$content['careChange']]. '</p>                    

                    '.($content['careExtraPhone'] ? '<p><b>Numer telefonu do osoby:</b> '.$content['careExtraPhone'].'</p>' : '' ) . '   
                    <p><b>Czy płeć osoby podopiecznej ma jakieś znaczenie?: </b>' .$this->sex[$content['careSex']]. '</p>
                    <p><b>Od kiedy może rozpocząć pracę: </b>' .$content['careWhenStart']. '</p>
                    <p><b>Dodano: </b>' .date('d-m-Y G:i',time()). '</p>         
                </div>
              
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        $body->setParts(array($text, $html));        
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->care)
                ->setSubject('Formularz Opieka - zapytanie i koszty Winckler Personal - ' . $content['careName']);
        
        $message->setBody($body);
        
        $message->addReplyTo($content['careEmail'], $content['careName']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
    //attachment
    public function sendClientMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy - Pracodawcy:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">
                    <p><b>Imię i Nazwisko: </b>' .$content['clientName']. '</p>
                    <p><b>E-mail: </b>' .$content['clientEmail']. '</p>                                     
                    <p><b>Telefon: </b>' .$content['clientPhone']. '</p>                        
                    '.($content['clientAttach'] != ' ' ? '<p><b>Link do pliku: </b><a href="http://'.$_SERVER['SERVER_NAME'].'/upload/client/'.$content['clientAttach'].'"> tutaj ... </a></p>' : '').' 
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Treść wiadomości: </p>
                    ' .$content['clientMessage']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        
        if($content['clientAttach'] != ' ') {
            $filePath = 'http://'.$_SERVER['SERVER_NAME'].'/public/upload/client/'.$content['clientAttach'];
            $fileContent = fopen($filePath, 'r');
            $attachment = new MimePart($fileContent);    
            $attachment->filename = 'załącznik';
            $attachment->type = $content['fileType'];
            $attachment->encoding    = Mime::ENCODING_BASE64;
            $attachment->disposition = Mime::DISPOSITION_ATTACHMENT;
            
            
            $body->setParts(array($html, $attachment));            
        }
        else {
            $body->setParts(array($text, $html));        
        }
        
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->client)
                ->setEncoding('utf-8')
                ->setSubject('Formularz kontaktowy Winckler Personal - Zamów usługę');
        
        $message->setBody($body);
        
        $message->addReplyTo($content['clientEmail'], $content['clientName']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
    public function sendNotificationMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy - Powiadomienia mailowe:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">                  
                    <p><b>E-mail: </b>' .$content['notificationEmail']. '</p>   
                    <p><b>Preferowany kraj: </b>' .($content['notificationCountry'] == 'pl' ? 'Polska' : 'Niemcy' ). '</p>
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Preferowane stanowisko: </p>
                    ' .$content['notificationNote']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        $body->setParts(array($text, $html));        
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->notification)
                ->setSubject('Formularz kontaktowy Winckler Personal - Powiadomienia mailowe');
        
        $message->setBody($body);
        
        $message->addReplyTo($content['notificationEmail']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
    public function sendPersonelMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy - Personel medyczny:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">
                    <p><b>Firma: </b>' .$content['personelName']. '</p>
                    <p><b>E-mail: </b>' .$content['personelEmail']. '</p>                                     
                    <p><b>Telefon: </b>' .$content['personelPhone']. '</p>                        
                    '.($content['personelAttach'] != ' ' ? '<p><b>Link do pliku: </b><a href="http://'.$_SERVER['SERVER_NAME'].'/upload/personel/'.$content['personelAttach'].'"> tutaj ... </a></p>' : '').' 
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Treść wiadomości: </p>
                    ' .$content['personelMessage']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        
        if($content['personelAttach'] != ' ') {
            $filePath = 'http://'.$_SERVER['SERVER_NAME'].'/public/upload/personel/'.$content['personelAttach'];
            $fileContent = fopen($filePath, 'r');
            $attachment = new MimePart($fileContent);    
            $attachment->filename = 'załącznik';
            $attachment->type = $content['fileType'];
            $attachment->encoding    = Mime::ENCODING_BASE64;
            $attachment->disposition = Mime::DISPOSITION_ATTACHMENT;
            
            
            $body->setParts(array($html, $attachment));            
        }
        else {
            $body->setParts(array($text, $html));        
        }
        
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->personel)
                ->setSubject('Formularz kontaktowy Winckler Personal - Personel medyczny');
        
        $message->setBody($body);
        
        $message->addReplyTo($content['personelEmail'], $content['personelName']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
     public function sendCandidatesMail($content)
    {
       
        $text = new MimePart('Nowa treść dostepna na http://'.$_SERVER['SERVER_NAME'].'/admin');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Formularz kontakowy - Kandydaci:</h3> 
                </div>
                <div style="font-size:12px; font-color:#444;">
                    <p><b>Temat: </b>' .$content['candidatesSubject']. '</p>   
                    <p><b>Imię i Nazwisko: </b>' .$content['candidatesName']. '</p>
                    <p><b>E-mail: </b>' .$content['candidatesEmail']. '</p>                                     
                    <p><b>Telefon: </b>' .$content['candidatesPhone']. '</p>                        
                    '.($content['candidatesAttach'] != ' ' ? '<p><b>Link do pliku: </b><a href="http://'.$_SERVER['SERVER_NAME'].'/upload/candidates/'.$content['candidatesAttach'].'"> tutaj ... </a></p>' : '').' 
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Treść wiadomości: </p>
                    ' .$content['candidatesMessage']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        
        if($content['candidatesAttach'] != ' ') {
            $filePath = 'http://'.$_SERVER['SERVER_NAME'].'/public/upload/candidates/'.$content['candidatesAttach'];
            $fileContent = fopen($filePath, 'r');
            $attachment = new MimePart($fileContent);    
            $attachment->filename = 'załącznik';
            $attachment->type = $content['fileType'];
            $attachment->encoding    = Mime::ENCODING_BASE64;
            $attachment->disposition = Mime::DISPOSITION_ATTACHMENT;
            
            
            $body->setParts(array($html, $attachment));            
        }
        else {
            $body->setParts(array($text, $html));        
        }
        
        $message = new Message();
        
        //$message->addFrom($content['contactEmail'], $content['contactName'])
        $message->addFrom( 'biuro@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->candidates)
                ->setSubject('Formularz kontaktowy Winckler Personal - Kandydaci');
        
        $message->setBody($body);
        
        $message->addReplyTo($content['candidatesEmail'], $content['candidatesName']);
        
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
    
    public function sendServiceMail($content)
    {
       
        $text = new MimePart('Problem w WincklerPersonal ... ');
        $text->type = "text/plain";
       
        $html = new MimePart('
           <div style="font-family:Tahoma;">
                <div>
                    <h3>Serwis Mail - WINCKLERPERSONAL</h3> 
                </div>
                <div style="margin:15px 0; font-color:#444;">
                    <p><b>Treść wiadomości: </p>
                    ' .$content['emailDesc']. '
                </div>
                    <hr style="border:0; border-bottom: 1px solid #efefef"/>
                <div>
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/images/logo.png" alt="Winckler Personal"/>                             
                </div>
                <div>
                    <p>
                        ul. Bolesława Chrobrego 23 <br/>
                        02-479 Warszawa<br/>
                        WINCKLER PERSONAL<br/><br/>

                        Tel: +48 (68) 307 00 99<br/>
                        Kom: + 48 531 178 222<br/>
                        Fax: +48 12 444 70 75<br/>
                        Email: info@wincklerpersonal.pl<br/>
                    </p>
                </div>
          </div>           
          
        ');
        
        $html->type = "text/html";

        $body = new MimeMessage();
        $body->setParts(array($text, $html));        
        
        $message = new Message();
        
        $message->addFrom( 'info@wincklerpersonal.pl', 'Strona domowa')
                ->addTo($this->serviceMail)
                ->setSubject($content['emailTitle']);
        
        $message->setBody($body);                
        $message->setEncoding("UTF-8");
        $message->getHeaders()->get('content-type')->setType('multipart/alternative');
        
        $transport = new SendmailTransport();
        $transport->send($message);       
    
    }
}