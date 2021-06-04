<?php
    require_once "api.php";
    $datas = fetchTransactions();
    // print_r($datas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAMALERT</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="image/cider transparent.png" rel="icon">
</head>
    <body>
        <section id="top"></section>
        <div class="topHeader"  id="topHeader" style="position:relative;">
            <nav>
                <div class="topLogoDiv">   
                    <img src="image/impersonator-scamc645.png" alt="">
                </div>
                <div>
                    <i class="fa fa-bars barsIon barsIcon" style="transform:scale(1)"></i>
                    <i class="fa fa-remove barsIon removeIcon" style="transform:scale(0);"></i>

                </div>
                <div class="linksDiv">
                    <ul class="ul1" style="left:-80%">
                        <li><a href="#adressCheck">Address Check</a></li>
                        <li><a href="#transaction">Transaction</a></li>
                        <li><a href="#topScams">Top 10</a></li>
                        <li><a href="#commonScam">Common Scam</a></li>
                        <li><a href="#prevention">Prevention</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <main>
            <header>
                <div class="headerDiv">
                    <div class="topAbout">
                        <div>
                            <h2>This is <span>SCAMALERT</span></h2>
                            <h3>The first line of defense in fighting cryptocurrency crime with live tracking of 78,795 scams</h3>
                            <p>Our mission is to make blockchain safer to use for everyone by exposing scammers and other criminals who abuse it. 
                                Report scams, thefts and fraudulent websites involving any blockchain or cryptocurrency 
                                and help us fight crypto crime! Use our free address check to help protect yourself and others against scams.
                            </p>
                            <br><br>
                            <span><a class="first" href="#"><i class="fa fa-whatsapp"></i> Whatsapp</a></span>
                                <span><a class="second" href="#"><i class="fa fa-facebook"></i>Facebook</a></span>
                        </div>
                    </div>
                


                    <div class="formDiv">

                        <form action="" method="POST">
                            <div class="formTitle">
                                <h2>File SCAM Report</h2>
                                <h5>Let us fight crypto crime together</h5>
                            </div>
                            <div class="inputSec">
                                <div>
                                    <h4>Scam</h4>

                                    <select  name="cars" id="cars">
                                        <optgroup label="Swedish Cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        </optgroup>
                                        <optgroup label="German Cars">
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                        </optgroup>
                                    </select>
                                </div>



                                <div>
                                    <div>Blockchain Payment Address</div>
                                    <input type="text" placeholder="JHH-232DS-ZAXC2-XCDC-13DQ-ACS">
                                </div>

                                <div>
                                    <div>Description</div>
                                    <textarea name="" id="" placeholder="Our mission is to make blockchain safer to use for everyone by exposing scammers and othe">

                                    </textarea>
                                </div>
                                <button type="submit"><i class="fa fa-caret-right"></i> Share Report</button>
                            </div>
                        </form>

                    </div>
                </div>
            </header>    
        </main>
        <section id=adressCheck>
            <br><br><br>
            <div class="AddressDiv">
                <h2>Address Check</h2>
                <p>Not sure if the address you are about to send money to is safe or if the website you visited is real or a scam? 
                    Use our free check to see if the PAYMENT ADDRESS or WEBSITE has been reported.
                </p>
                <div class="inputSearch">
                    <input type="text">
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </section>


            <!-- <div class="AddressDiv opp">
                <h2>Latest Transactions</h2>
            </div> -->


            <section id="transaction">
                <div class="AddressDiv opp">
                    <h2>Latest Transactions</h2>
                    <p>The top 10 most successful currently active scammers. Listed by total lifetime
                    earnings in USD based on prices at the moment of transaction.
                    </p>

                    <div class="inputSearch">
                        <table>
                            <?php foreach($datas as $data) : ?>

                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$5,601,554</td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </section>

            <section id="topScams">
                <div class="AddressDiv">
                    <h2>Top Scammers</h2>
                    <p>The top 10 most successful currently active scammers. Listed by total lifetime
                    earnings in USD based on prices at the moment of transaction.
                    </p>

                    <div class="inputSearch">
                        <table>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$4,601,554</td>
                            </tr>
                            <tr>
                                <td>MALWARE</td>
                                <td>bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</td> 
                                <td>$5,601,554</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <section id="commonScam">
            <div class="AddressDiv opp sm-d1">
                <h2>Common Scams</h2>

                <div class="AddressDivDiv1">
                    <div>
                        <img src="image/sextortion.png" alt="">
                        <h3>Sextortion</h3>
                        <h4>FELONY</h4>
                        <p>
                            A popular blackmail scam in which victims receive an e-mail stating that their webcam was hacked and used to
                            record them watching porn. They are told to make a payment or risk the video being released. 
                            Scammers risk a maximum prison sentence of 15 years and a $10,000 fine per sextortion e-mail in the US.
                        </p>
                    </div>


                    <div>
                        <img src="image/ransomware.png" alt="">
                        <h3>Ransomware</h3>
                        <h4>FELONY</h4>
                        <p>
                            Through the use of malware, hackers have managed to lock and encrypt the victim's computer and demand a hefty ransom.
                            People, companies and even universities have fallen victim to this dangerous scam.
                            In the US, ransomware scams carry a penalty of up to 10 years in prison and a $10,000 fine per attack.
                        </p>
                    </div>

                    
                    <div>
                        <img src="image/ponzi.png" alt="">
                        <h3>Ponzi Schemes</h3>
                        <h4>FELONY</h4>
                        <p>
                            Scammers promise extremely high profits, but are secretive about their strategies.
                            Victims are encouraged to find new investors to keep the illusion alive as long as possible.
                            Operators can be charged with securities and commodities fraud in the US which carries a penalty of 20 years to life in 
                            prison and a fine of up to $5 million
                        </p>
                    </div>


                    <div>
                        <img src="image/fraud.png" alt="">
                        <h3>Giveaway</h3>
                        <h4>FELONY</h4>
                        <p>
                            Scammers often pretend to be famous people and promise their victims free money if they send them some first, 
                            but of course nothing is ever sent back. Online fraud carries a maximum sentence of 5 years in prison
                            in the US for first time offenders.
                        </p>
                    </div>


                    <div>
                        <img src="image/web.png" alt="">
                        <h3>Dark Web</h3>
                        <h4>FELONY</h4>
                        <p>
                            A hidden part of the internet only accessible with special software where anything can be bought and where criminals
                            launder their stolen cryptocurrencies. 
                            For his role in the popular Silk Road market, Ross Ulbricht was sentenced in the US to life in prison without possibility of parole.
                        </p>
                    </div>

                    <div>
                        <img src="image/theft.png" alt="">
                        <h3>Theft</h3>
                        <h4>FELONY</h4>
                        <p>
                            Hackers and scammers have stolen billions of dollars in cryptocurrency over the years.
                            Not even the largest exchanges are safe from these skilled and sometimes familiar criminals. 
                            In 2019, hacker Joel Ortiz received a 10 year prison sentence for stealing more than $7,5 million in 
                            cryptocurrencies using a SIM swap technique.
                        </p>
                    </div>
                </div>
            </div>
        </section>












        <footer>
            <div class="divFooter">
                <div>
                    <h2>About</h2>
                    <p>Scam Alert is powered by Whale Alert, a powerful and popular blockchain analytics engine that tracks and analyzes
                        millions of blockchain transactions every day. 
                        Our goal is to make blockchain safer for everyone by tracking and exposing criminals who abuse blockchain for illegal activities.
                    </p>
                </div>


                <div>
                    <h2>Disclaimer</h2>
                    <p>Scam Alert is not responsible for any errors or omissions or for the results obtained from the use of the information listed on this website. 
                        All information is provided "as is", with no guarantee of completeness, accuracy, 
                        timeliness or of the results obtained from the use of this information.
                    </p>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <p>
                        The information submitted on this website is used to track and expose scammers and other criminals.
                        Scam Alert does not collect any additional personal information unless required for this purpose or to prevent abuse.
                        Any submitted or collected information may be shared with third parties or law enforcement if required.
                    </p>
                </div>
            </div>
            <div class="sc-32-d">
                <span><h3>scamalert@whale-alert.io | </span><span><a href="#"><i class="fa fa-twitter"></i> @whale_alert</a></span></h3>
            </div>
            <div class="sc-30-d">
                <h3>&#169 2021 scamalert</h3>
            </div>
        </footer>

        <div id="scrollUp" style="right:-10px; opacity:0;">
             <a href="#top"><i class="fa fa-caret-up"></i></i></a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/app.js"></script>
        <script>

            var prevScrollpos = window.pageYOffset;
            console.log(prevScrollpos)
            window.onscroll= function(){
                var currentScrollPos = window.pageYOffset;
                if(prevScrollpos > currentScrollPos){
                    document.getElementById("topHeader").style.position = "fixed";
                    document.getElementById("scrollUp").style.display = "block";
                }else{
                    document.getElementById("topHeader").style.position = "relative";
                    document.getElementById("scrollUp").style.display = "none";
                }


                if(currentScrollPos > 300){
                
                    document.getElementById("scrollUp").style.right = "30px";
                    document.getElementById("scrollUp").style.opacity = "1";
                    
                }else{
                    document.getElementById("scrollUp").style.opacity = "0";
                    document.getElementById("scrollUp").style.right = "-10px";
                }
                prevScrollpos=currentScrollPos;

            }
        </script>

    </body>
</html>