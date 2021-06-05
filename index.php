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
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="image/cider transparent.png" rel="icon">
</head>
    <body>
        <section id="top"></section>
        <div class="topHeader"  id="topHeader" style="top:0;">
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
                        <li><a href="#AddressDiv">Address Check</a></li>
                        <li><a href="#Transactions">Transaction</a></li>
                        <li><a href="#Scammers">Top 10</a></li>
                        <li><a href="#Common">Common Scam</a></li>
                        <li><a href="#Prevention">Prevention</a></li>
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
                                <div class="submitSide">
                                    <h3><i class="fa fa-info"></i>  Privacy Statement</h3>
                                    <button type="submit"><i class="fa fa-caret-right"></i> Share Report</button>
                                </div>
                            </div>
                        </form>
                        <div class="bottomBase"> 
                            <h4> Privacy Statement SEND REPORT Scam Alert is protected by reCAPTCHA and the Google Privacy Policy and Terms apply</h4>
                        </div>
                    </div>
                </div>
            </header>    
        </main>
        <section>
            <br><br><br>
            <div id="AddressDiv" class="AddressDiv">
                <h2>Address Check</h2>
                <p>Not sure if the address you are about to send money to is safe or if the website you visited is real or a scam? 
                    Use our free check to see if the PAYMENT ADDRESS or WEBSITE has been reported.
                </p>
                <div class="inputSearch">
                    <input type="text">
                    <i class="fa fa-search"></i>
                </div>
            </div>


            <div id="Transactions" class="AddressDiv opp">
                <h2>Latest Transactions</h2>
            </div>


            <div id="Scammers" class="AddressDiv tablesec">
                <h2>Top Scammers</h2>
                <p>The top 10 most successful currently active scammers. Listed by total lifetime
                earnings in USD based on prices at the moment of transaction.
                </p>

                <div class="inputSearch myTable">
                    <table id="topten">
                        <tbody>
                            <tr class="tabletext">
                                <td class="scam-type">Malware</td>
                                <td><a href="/scam/bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt" class="address-hash"><span class="d-none d-md-block">bc1qqcs77r7g08tqwurs7mms5wp346h75qhjx0c5zt</span><span class="d-none d-sm-block d-md-none">bc1qqcs77r7g...h75qhjx0c5zt</span><span class="d-sm-none">bc1qq...0c5zt</span></a></td>
                                <td class="latest-transaction-value">$4,601,554</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">1. Another very successful malware scam </td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Malware</td>
                                <td><a href="/scam/bc1q39axrttxmu544gaz82pa8zlyj4dnsdzlzleya8" class="address-hash"><span class="d-none d-md-block">bc1q39axrttxmu544gaz82pa8zlyj4dnsdzlzleya8</span><span class="d-none d-sm-block d-md-none">bc1q39axrttx...dnsdzlzleya8</span><span class="d-sm-none">bc1q3...leya8</span></a></td>
                                <td class="latest-transaction-value">$2,799,128</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">2. An address used by malware that sneakily changes a payment address.</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Tumbler</td>
                                <td><a href="/scam/1CoiNMixqJdctqazGsTvDcAygqHPUvmRo8" class="address-hash"><span class="d-none d-md-block">1CoiNMixqJdctqazGsTvDcAygqHPUvmRo8</span><span class="d-none d-sm-block d-md-none">1CoiNMixqJdc...AygqHPUvmRo8</span><span class="d-sm-none">1CoiN...vmRo8</span></a></td>
                                <td class="latest-transaction-value">$2,494,503</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">3. A fake tumbler that sends your hard earned bitcoin to several well known exchanges</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Fake Investment</td>
                                <td><a href="/scam/19k5ey65q3g44GTG3ZaKYjPEkdSshq1vjg" class="address-hash"><span class="d-none d-md-block">19k5ey65q3g44GTG3ZaKYjPEkdSshq1vjg</span><span class="d-none d-sm-block d-md-none">19k5ey65q3g4...PEkdSshq1vjg</span><span class="d-sm-none">19k5e...q1vjg</span></a></td>
                                <td class="latest-transaction-value">$2,096,767</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">4. A fake credit card provider with a spelling error riddled website</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Fake Investment</td>
                                <td><a href="/scam/1HepvEVnkMNCJ5iD7RHJVyk1ZiXzUM9PcQ" class="address-hash"><span class="d-none d-md-block">1HepvEVnkMNCJ5iD7RHJVyk1ZiXzUM9PcQ</span><span class="d-none d-sm-block d-md-none">1HepvEVnkMNC...k1ZiXzUM9PcQ</span><span class="d-sm-none">1Hepv...M9PcQ</span></a></td>
                                <td class="latest-transaction-value">$1,347,410</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">5. </td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Fake Investment</td>
                                <td><a href="/scam/1MHwLU6hqHi7HcZENp4XsZQkYb2nNWGBLf" class="address-hash"><span class="d-none d-md-block">1MHwLU6hqHi7HcZENp4XsZQkYb2nNWGBLf</span><span class="d-none d-sm-block d-md-none">1MHwLU6hqHi7...QkYb2nNWGBLf</span><span class="d-sm-none">1MHwL...WGBLf</span></a></td>
                                <td class="latest-transaction-value">$1,338,847</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">6. A fake investment site offering 60% daily returns and claims comply with IRFB.</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Malware</td>
                                <td><a href="/scam/bc1qrwhmhlrj63hetznl984d9zgvh5q428j28klrlt" class="address-hash"><span class="d-none d-md-block">bc1qrwhmhlrj63hetznl984d9zgvh5q428j28klrlt</span><span class="d-none d-sm-block d-md-none">bc1qrwhmhlrj...q428j28klrlt</span><span class="d-sm-none">bc1qr...klrlt</span></a></td>
                                <td class="latest-transaction-value">$1,297,208</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">7. </td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Terrorism</td>
                                <td><a href="/scam/1LaNXgq2ctDEa4fTha6PTo8sucqzieQctq" class="address-hash"><span class="d-none d-md-block">1LaNXgq2ctDEa4fTha6PTo8sucqzieQctq</span><span class="d-none d-sm-block d-md-none">1LaNXgq2ctDE...8sucqzieQctq</span><span class="d-sm-none">1LaNX...eQctq</span></a></td>
                                <td class="latest-transaction-value">$953,782</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">8. This address has been linked to Hamas</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Fake Investment</td>
                                <td><a href="/scam/1PVQNKnsERTx4VGbKJQJdHYDhKLCnpppaR" class="address-hash"><span class="d-none d-md-block">1PVQNKnsERTx4VGbKJQJdHYDhKLCnpppaR</span><span class="d-none d-sm-block d-md-none">1PVQNKnsERTx...YDhKLCnpppaR</span><span class="d-sm-none">1PVQN...pppaR</span></a></td>
                                <td class="latest-transaction-value">$809,916</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">9. Aside from depositing money on a fake credit card, there is not much to do on the InstaWalletPay website</td>
                            </tr>
                            <tr class="tabletext">
                                <td class="scam-type">Fake Investment</td>
                                <td><a href="/scam/1FSghaBMNHD11uKv8mQU32v6GkcYudoJzm" class="address-hash"><span class="d-none d-md-block">1FSghaBMNHD11uKv8mQU32v6GkcYudoJzm</span><span class="d-none d-sm-block d-md-none">1FSghaBMNHD1...v6GkcYudoJzm</span><span class="d-sm-none">1FSgh...doJzm</span></a></td>
                                <td class="latest-transaction-value">$762,085</td>
                            </tr>
                            <tr class="tablesubtext">
                                <td colspan="3">10. TradersAccolade offers up to 40% ROI in 7 days and is part of a series of scam websites</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Common" class="AddressDiv opp sm-d1">
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




            <!-- display under -->
            <div id="Prevention" class="AddressDiv tablesec">
                <h2>Scam Prevention</h2>
                <p>
                    The amount of scams is increasing every day and scammers are getting smarter as well. 
                    Here are a few tips to help protect yourself against them.
                </p>
                <br><br>
                <div class="scamPrevention">
                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="trustAnyone">Don't Trust Anyone</h2>
                        <p class="dicussion" id="trustAnyone-p">          
                            Always make sure you know who or what you are dealing with. If someone is offering you an
                            investment opportunity, check if they have a professional website and working Twitter account
                            and use our address check to see if it is a known scam.
                            Be especially careful with anyone asking you for money Telegram, Twitter or Facebook. If a
                            stranger is
                            asking you for money, they are probably trying to scam you, but if you are not sure try to
                            verify their claims and ask for proof of their identity. If you are still not sure if you are
                            dealing
                            with a scammer, you can send us an 
                        </p>
                    </div>

                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="verify">verify</h2>
                        <p class="dicussion" id="verify-p">          
                            Always be vigilant. If it sounds too good to be true, it is probably a scam and even when it
                            sounds reasonable, it could be a scam. If someone claims
                            to have a recording or something else belonging to you, ask for proof. Before sending money to
                            an exchange or shop, make sure you are on the correct website. If someone tells you they will
                            make you rich, ask them how. Scammers don't like to waste time, so they will probably move on
                            once they notice you are not easily fooled. 
                        </p>
                    </div>


                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="protectYourself">Protect Yourself</h2>
                        <p class="dicussion" id="protectYourself-p">          
                            Install a virus scanner and make sure it and your operating system are always up to date. Never
                            click on any links or open any files sent to you by a stranger and even be careful with anything
                            sent to you by a friend: their computer may be infected. Never give your private keys to anyone
                            and don't leave them where others might find them: write down your keys and put them somewhere
                            safe. If you use an exchange, use as many of their security measures as possible (like an
                            authenticator, phone verification or others) and make sure your passwords are complex. These
                            measures will not make it impossible to be hacked or scammed, but they will make it a lot
                            harder!
                        </p>
                    </div>



                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="Panic">Don't Panic Don't Pay</h2>
                        <p class="dicussion" id="Panic-p">          
                            Scammers are criminals with no intention of helping you and as soon as you pay them your money
                            is gone, but don't worry, because that embarrassing video of you never existed and if your
                            computer was locked or your files encrypted you can probably fix it yourself by following the
                            instructions on
                            <a href="https://www.tomsguide.com/us/ransomware-what-to-do-next,news-25107.html"
                            target="_blank">this website</a>. If someone claims
                            to know your passwords, phone number or other personal information, you are the victim of one of
                            the many data breaches. You can check if and where your personal data was leaked
                            <a href="https://haveibeenpwned.com" target="_blank">here</a>.
                        </p>
                    </div>


                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="Detecting">Detecting a Scam</h2>
                        <p class="dicussion" id="Detecting-p">          
                            There are some simple checks you can perform to check if something is a scam:
                            Make sure the website lists a Twitter channel and read the replies to their tweets.
                            Check for spelling errors; scammers often do not speak English as their first language.
                            Legitimate websites do not have reviews on their website, nor do they post certificates as proof
                            of their legitimacy.
                            Google the name of the website and read the top results carefully.
                            If the website has a privacy policy or any other text that looks professional, try googling some
                            parts;
                            they have probably copied it from somewhere else.
                            <b>Rich people do not give away free money to strangers.</b>
                        </p>
                    </div>



                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="Greedy">Don't Be Greedy</h2>
                        <p class="dicussion" id="Greedy-p">          
                            There is no such thing as free money and no reputable company will give you guaranteed returns.
                            Anyone promising to double your money or offering a guaranteed daily percentage is a scammer. Be
                            especially wary of fake rich celebrities or companies; they did not get rich by giving away free
                            money to strangers.
                            There is still a lot of opportunity for making money in crypto, but it requires effort and, most
                            importantly, research.
                        </p>
                    </div>

                    <div>
                        <h2 class="topic" onclick="toggle(this)" id="Report">Report</h2>
                        <p class="dicussion" id="Report-p">          
                            Your reports are important. By collecting data both off and on-chain we are able to determine
                            the scale and effect scams have on the crypto economy and we can prevent
                            scammers from using their stolen cryptocurrencies. In some cases your reports may even help
                            apprehend and build a case against them and every report we receive increases our chances to do
                            so, even if we already have a scam address in our databases.
                            By reporting scams you also increase their visibility and may help prevent others from making
                            payments and show criminals that their activities are not as hidden as they think they are.
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

        <script src="index.js"></script>
    </body>
</html>