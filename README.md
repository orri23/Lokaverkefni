# Lokaskýrsla
Linkur að vefsíðu: http://138.68.150.56/Verkefni6/home
### a. Höfundar
Höfundar: Eysteinn Orri, Stefán Atli, Kristófer Orri

### b. Verkefnalýsing
Hugmyndin að verkefninu er sú að hafa þjónustu fyrir sumarhús/gistiheimili/hótel sem býður upp á það að notandi sér gildin (Hitastig, raka, gas og alkóhól) í sínu valda húsnæði á vefsíðunni, en til þess verður notandinn að skrá sig inn. Vefsíðan les inn gildi af gasskynjara, hita- og rakaskynjara og alkóhól skynjara. Forritunarmálið að baki viðmótsins er PhP og Arduino. Arduino-inn sendir gögn á PHP síðu sem hendir gögnunum inn á SQL server. Notuð var Digital Ocean vefhýsing fyrir PhP síðuna. Mini3 framework var notað.



### c. Stillingar og fleira
Arduino tölva sem les gildi af skynjurunum.
SQL gagnagrunnur til þess að geyma gildin.
PHP til þess að lesa af Arduino tölvunni og henda inn á gagnagrunninn.
HTML/CSS fyrir notendaviðmót á PHP síðunni.
Digital Ocean fyrir server hýsingu.
FileZilla notað til þess að færa frá local inná server.
Mini 3 framework

Notandinn þarf að skrá sig inn (Create Account hnappurinn, Sign Up href-ið eða Log In href-ið ef hann hefur aðgang nú þegar) og sitt húsnæði svo að hann fái að sjá gildin, enginn annar möguleiki til þess að sjá upplýsingarnar. 
Um leið og hann loggar hann þá er honum hent á Account Management eða Profile síðuna sína, og þar sér notandinn allar
upplýsingarnar sínar. Svo eru flipar efst til hægri. Í Your sensors flipanum sér maður nýjustu gildi og yfirlit yfir alla sensorana, hvenær gildin voru sótt og númer þeirra - ef þú scrollar þá sérðu eldri gildi. í Register a house flipanum getur þú skráð inn nýtt húsnæði til þess að fylgjast með. Account management er þar sem maður byrjar þegar þú loggar inn, profile-inn. Log Out takki er svo í endanum. 

Footer: 
Administrator síðan: Þar sem admin loggar sig inn til þess að geta haft yfirlit yfir öllum kúnnum sínum, hve margir væru að nýta þjónustuna, hve margir þjónar væru uppi að hýsa þjónustuna. 
Contact Us síðan: Þar sem notandinn getur haft samband við admins via póst.
About Us síðan: Þar sem notandinn getur séð um þá sem gerðu síðuna.
Privacy Policy síðan: Hvernig við hyggjum á að halda upplýsingunum öruggum.

### d. Verkaskipting
Eysteinn sá meira um php en ég gerði eitthvað php líka. Kristófer sá meira um css og útlit og html en Eysteinn gerði líka í því.

### e. Skýring á afurð

Notandinn þarf að skrá sig inn (Create Account hnappurinn, Sign Up href-ið eða Log In href-ið ef hann hefur aðgang nú þegar) og sitt húsnæði svo að hann fái að sjá gildin, enginn annar möguleiki til þess að sjá upplýsingarnar. 
Um leið og hann loggar hann þá er honum hent á Account Management eða Profile síðuna sína, og þar sér notandinn allar
upplýsingarnar sínar. Svo eru flipar efst til hægri. Í Your sensors flipanum sér maður nýjustu gildi og yfirlit yfir alla sensorana, hvenær gildin voru sótt og númer þeirra - ef þú scrollar þá sérðu eldri gildi. í Register a house flipanum getur þú skráð inn nýtt húsnæði til þess að fylgjast með. Account management er þar sem maður byrjar þegar þú loggar inn, profile-inn. Log Out takki er svo í endanum. 

Footer: 
Administrator síðan: Þar sem admin loggar sig inn til þess að geta haft yfirlit yfir öllum kúnnum sínum, hve margir væru að nýta þjónustuna, hve margir þjónar væru uppi að hýsa þjónustuna. 
Contact Us síðan: Þar sem notandinn getur haft samband við admins via póst.
About Us síðan: Þar sem notandinn getur séð um þá sem gerðu síðuna.
Privacy Policy síðan: Hvernig við hyggjum á að halda upplýsingunum öruggum.
### f. Næstu skref
 Það væri hægt að setja upp SMS kerfi ef hitinn á húsinu myndi skyndilega detta niður til þess að koma í veg fyrir frosnar lagnir sem hentar einstaklega vel á Íslandi. Hægt væri að útfæra þetta enn stærra og fara upp í stór fyrirtæki eins og hótel eða gistiheimili út á landi. Til þess að stilla ofna hitann er hugmyndin annað hvort að nota Rasperry Pi sem hýsir python skriftu sem er keyrð í gegnum PHP vefsíðu sem myndi hafa fyrirfram stillt gildi sem keyrir ofnana í x mikinn hita og svo þegar einstaklingurinn fer frá húsinu væri þá hitinn stilltur aftur niður í hitastig sem heldur húsinu/hotelinu/gistiheimilinu í lagi.
Þar inni gæti notandinn fyrirfram stillt gildi fyrir ofnana sem hann myndi vilja hafa á meðan húsið er í notkun og þegar hann fer úr húsinu. Notandinn hefur svo aðgang að öllum stillingum fyrir aðganginn sinn þar sem hann getur sett upp SMS kerfið fyrir símann sinn, breytt lykilorði að aðgangi sínum og jafnvel sett upp fleiri aðganga fyrir aðra eigendur. 
Ef hannað fyrir stór fyrirtæki væri nauðsynlegt að setja upp eitthvað kerfi til þess gera við vart ef eitthverjir þjónar detta niður eða skynjarar hætta að virka. 
Ef lengra væri haldið áfram með notenda viðmótið væri hægt að setja upp betri mobile útgáfu af síðunni þannig að öll gögn væru birt á þeim máta sem myndi henta öllum símum betur, eins og til dæmis skífurit í stað töflu. 
App væri næsta skref líka, það er kannski einfaldast fyrir svona lagað.

### g. Samantekt
Tókst ágætlega. Samvinnan/samskiptin fóru fram á facebook en við hittumst einnig í skólanum og unnum hlið við hlið og spáðum og spekúlerðum í þessu.
