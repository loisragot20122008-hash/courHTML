<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color: grey;">
        <div id="format">
            <script type="text/javascript">
                //var name = prompt("Quelle est votre prénom ?");
                //document.write("Hello " + name);
                //alert("Vous avez été piraté " + name);
                //function enigme() {
                    //let reponse = "";
                    //while (reponse.trim().toLowerCase() !=="Paris") {
                        //reponse = prompt("Quelle est la capitale de la France ?")
                        //if (reponse === nul) {
                            //return;
                        //if (reponse.trim().toLowerCase() !=="Paris") {
                            //alert("Mauvaise réponse !");
                            //}
                        //}
                        //alert("Bonne réponse !");
                    //}
                //}
                //enigme();
            </script>
            <a href="index.html">Mon CV</a>

            <?php
            //$prenom = 'Loïs';
                //echo 'Hello ' . $prenom;
            $age = 17;
            if($age>=18){
                echo 'Tu es majeur';
            }
            else{
                echo 'Tu es mineur';
            }
            ?>

        
            <form>
                <input type="text" name="nom" placeholder="nom" autofocus="autofocus" style="text-transform: capitalize;"><br>
                <input type="text" name="prenom" placeholder="pr&eacute;nom" style="text-transform: capitalize;"><br>
                <input type="email" name="Email" placeholder="adresse email"><br>
                <input type="tel" name="tel" oninput="this.value = this.value.replace(/\D/g, '').replace(/(\d{2})(?=\d)/g, '$1 ').trim()" placeholder="t&eacute;l&eacute;phone" required="required" maxlength="14"><br>
                <input type="password" placeholder="mot de passe"><br>
                <input type="date" name="date" maxlength="10" min="1000-01-01" max="9999-12-31"><br>
                Genre : <input type="radio" name="genre" value="mr">Mr<input type="radio" name="genre" value="mme">Mme<input type="radio" name="genre" value="pikatchu">Pikatchu<br>
                <label for="Pays">Pays:</label> 
                <select id="Pays">
                    <option value="AF">Afghanistan</option>
                    <option value="ZA">Afrique du sud</option>
                    <option value="AX">&Aring;land, &icirc;les</option>
                    <option value="AL">Albanie</option>
                    <option value="DZ">Alg&eacute;rie</option>
                    <option value="DE">Allemagne</option>
                    <option value="AD">Andorre</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctique</option>
                    <option value="AG">Antigua et barbuda</option>
                    <option value="SA">Arabie saoudite</option>
                    <option value="AR">Argentine</option>
                    <option value="AM">Arm&eacute;nie</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australie</option>
                    <option value="AT">Autriche</option>
                    <option value="AZ">Azerba&iuml;djan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahre&iuml;n</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbade</option>
                    <option value="BY">B&eacute;larus</option>
                    <option value="BE">Belgique</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">B&eacute;nin</option>
                    <option value="BM">Bermudes</option>
                    <option value="BT">Bhoutan</option>
                    <option value="BO">Bolivie, l'&eacute;tat plurinational de</option>
                    <option value="BQ">Bonaire, saint eustache et saba</option>
                    <option value="BA">Bosnie herz&eacute;govine</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet, &icirc;le</option>
                    <option value="BR">Br&eacute;sil</option>
                    <option value="BN">Brunei darussalam</option>
                    <option value="BG">Bulgarie</option>
                    <option value="BF">Burkina faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Ca&iuml;mans, &icirc;les</option>
                    <option value="KH">Cambodge</option>
                    <option value="CM">Cameroun</option>
                    <option value="CV">Cap vert</option>
                    <option value="CF">Centrafricaine, r&eacutepublique</option>
                    <option value="CL">Chili</option>
                    <option value="CN">Chine</option>
                    <option value="CX">Christmas, &icirc;le</option>
                    <option value="CY">Chypre</option>
                    <option value="CC">Cocos (keeling), &icirc;les</option>
                    <option value="CO">Colombie</option>
                    <option value="KM">Comores</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, la r&eacute;publique d&eacute;mocratique du</option>
                    <option value="CK">Cook, &icirc;les</option>
                    <option value="KR">Cor&eacute;e, r&eacute;publique de</option>
                    <option value="KP">Cor&eacute;e, r&eacute;publique populaire d&eacute;mocratique de</option>
                    <option value="CR">Costa rica</option>
                    <option value="CI">C&ocirc;te d'ivoire</option>
                    <option value="HR">Croatie</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Cura&ccedil;ao</option>
                    <option value="DK">Danemark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DO">Dominicaine, r&eacute;publique</option>
                    <option value="DM">Dominique</option>
                    <option value="EG">&Eacute;gypte</option>
                    <option value="SV">El salvador</option>
                    <option value="AE">&Eacute;mirats arabes unis</option>
                    <option value="EC">&Eacute;quateur</option>
                    <option value="ER">&Eacute;rythr&eacute;e</option>
                    <option value="ES">Espagne</option>
                    <option value="EE">Estonie</option>
                    <option value="US">&Eacute;tats unis</option>
                    <option value="ET">&Eacute;thiopie</option>
                    <option value="FK">Falkland, &icirc;les (malvinas)</option>
                    <option value="FO">F&eacute;ro&eacute;, &icirc;les</option>
                    <option value="FJ">Fidji</option>
                    <option value="FI">Finlande</option>
                    <option value="FR">France</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambie</option>
                    <option value="GE">G&eacute;orgie</option>
                    <option value="GS">G&eacute;orgie du sud et les &icirc;les sandwich du sud</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Gr&egrave;ce</option>
                    <option value="GD">Grenade</option>
                    <option value="GL">Groenland</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernesey</option>
                    <option value="GN">Guin&eacute;e</option>
                    <option value="GW">Guin&eacute;e bissau</option>
                    <option value="GQ">Guin&eacute;e &eacute;quatoriale</option>
                    <option value="GY">Guyana</option>
                    <option value="GF">Guyane fran&ccedil;aise</option>
                    <option value="HT">Ha&iuml;ti</option>
                    <option value="HM">Heard et &icirc;les macdonald, &icirc;le</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong kong</option>
                    <option value="HU">Hongrie</option>
                    <option value="IM">&Icirc;le de man</option>
                    <option value="UM">&Icirc;les mineures &eacute;loign&eacute;es des &eacute;tats unis</option>
                    <option value="VG">&Icirc;les vierges britanniques</option>
                    <option value="VI">&Icirc;les vierges des &eacute;tats unis</option>
                    <option value="IN">Inde</option>
                    <option value="ID">Indon&eacute;sie</option>
                    <option value="IR">Iran, r&eacute;publique islamique d'</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Irlande</option>
                    <option value="IS">Islande</option>
                    <option value="IL">Isra&euml;l</option>
                    <option value="IT">Italie</option>
                    <option value="JM">Jama&iuml;que</option>
                    <option value="JP">Japon</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordanie</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KG">Kirghizistan</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kowe&iuml;t</option>
                    <option value="LA">Lao, r&eacute;publique d&eacute;mocratique populaire</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Lettonie</option>
                    <option value="LB">Liban</option>
                    <option value="LR">Lib&eacute;ria</option>
                    <option value="LY">Libye</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lituanie</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Mac&eacute;doine, l'ex r&eacute;publique yougoslave de</option>
                    <option value="MG">Madagascar</option>
                    <option value="MY">Malaisie</option>
                    <option value="MW">Malawi</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malte</option>
                    <option value="MP">Mariannes du nord, &icirc;les</option>
                    <option value="MA">Maroc</option>
                    <option value="MH">Marshall, &icirc;les</option>
                    <option value="MQ">Martinique</option>
                    <option value="MU">Maurice</option>
                    <option value="MR">Mauritanie</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexique</option>
                    <option value="FM">Micron&eacute;sie, &eacute;tats f&eacute;d&eacute;r&eacute;s de</option>
                    <option value="MD">Moldova, r&eacute;publique de</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolie</option>
                    <option value="ME">Mont&eacute;n&eacute;gro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibie</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">N&eacute;pal</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nig&eacute;ria</option>
                    <option value="NU">Niu&eacute;</option>
                    <option value="NF">Norfolk, &icirc;le</option>
                    <option value="NO">Norv&egrave;ge</option>
                    <option value="NC">Nouvelle cal&eacute;donie</option>
                    <option value="NZ">Nouvelle z&eacute;lande</option>
                    <option value="IO">Oc&eacute;an indien, territoire britannique de l'</option>
                    <option value="OM">Oman</option>
                    <option value="UG">Ouganda</option>
                    <option value="UZ">Ouzb&eacute;kistan</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palaos</option>
                    <option value="PS">Palestinien occup&eacute;, territoire</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papouasie nouvelle guin&eacute;e</option>
                    <option value="PY">Paraguay</option>
                    <option value="NL">Pays bas</option>
                    <option value="PE">P&eacute;rou</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Pologne</option>
                    <option value="PF">Polyn&eacute;sie fran&ccedil;aise</option>
                    <option value="PR">Porto rico</option>
                    <option value="PT">Portugal</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">R&eacute;union</option>
                    <option value="RO">Roumanie</option>
                    <option value="GB">Royaume uni</option>
                    <option value="RU">Russie, f&eacute;d&eacute;ration de</option>
                    <option value="RW">Rwanda</option>
                    <option value="EH">Sahara occidental</option>
                    <option value="BL">Saint barth&eacute;lemy</option>
                    <option value="SH">Sainte h&eacute;l&egrave;ne, ascension et tristan da cunha</option>
                    <option value="LC">Sainte lucie</option>
                    <option value="KN">Saint kitts et nevis</option>
                    <option value="SM">Saint marin</option>
                    <option value="MF">Saint martin(partie fran&ccedil;aise)</option>
                    <option value="SX">Saint martin (partie n&eacute;erlandaise)</option>
                    <option value="PM">Saint pierre et miquelon</option>
                    <option value="VA">Saint si&egrave;ge (&eacute;tat de la cit&eacute; du vatican)</option>
                    <option value="VC">Saint vincent et les grenadines</option>
                    <option value="SB">Salomon, &icirc;lles</option>
                    <option value="WS">Samoa</option>
                    <option value="AS">Samoa am&eacute;ricaines</option>
                    <option value="ST">Sao tom&eacute; et principe</option>
                    <option value="SN">S&eacute;n&eacute;gal</option>
                    <option value="RS">Serbie</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra leone</option>
                    <option value="SG">Singapour</option>
                    <option value="SK">Slovaquie</option>
                    <option value="SI">Slov&eacute;nie</option>
                    <option value="SO">Somalie</option>
                    <option value="SD">Soudan</option>
                    <option value="SS">Soudan du sud</option>
                    <option value="LK">Sri lanka</option>
                    <option value="SE">Su&grave;de</option>
                    <option value="CH">Suisse</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard et &icirc;le jan mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SY">Syrienne, r&eacute;publique arabe</option>
                    <option value="TJ">Tadjikistan</option>
                    <option value="TW">Ta&iuml;wan, province de chine</option>
                    <option value="TZ">Tanzanie, r&eacute;publique unie de</option>
                    <option value="TD">Tchad</option>
                    <option value="CZ">Tch&grave;que, r&eacute;publique</option>
                    <option value="TF">Terres australes fran&ccedil;aises</option>
                    <option value="TH">Tha&iuml;lande</option>
                    <option value="TL">Timor leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinit&eacute; et tobago</option>
                    <option value="TN">Tunisie</option>
                    <option value="TM">Turkm&eacute;nistan</option>
                    <option value="TC">Turks et ca&iuml;cos, &icirc;les</option>
                    <option value="TR">Turquie</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UA">Ukraine</option>
                    <option value="UY">Uruguay</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, r&eacute;publique bolivarienne du</option>
                    <option value="VN">Viet nam</option>
                    <option value="WF">Wallis et futuna</option>
                    <option value="YE">Y&eacute;men</option>
                    <option value="ZM">Zambie</option>
                    <option value="ZW">Zimbabwe</option>
                </select><br><br>
                <textarea placeholder="Information suppl&eacute;mentaire"></textarea><br>
                <label for="J'autorise la conservation de mes donn&eacute;es"><input type="checkbox" name="authorize" id="J'autorise la conservation de mes donn&eacute;es">J'autorise la conservation de mes données<br>
                <input type="submit" value="contactez-moi">
            </form>
        </div>
    </body>
</html>