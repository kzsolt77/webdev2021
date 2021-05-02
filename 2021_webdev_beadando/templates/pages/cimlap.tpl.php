
<div class=row>
    <div class="col-md-8">
    <h3>Üdvözöljük honlapunkon!</h3>
        <p>Levelezőlistára
        feliratkozás Ha szeretne e-mailben aktuális információkat kapni a
        vásárolt programokról, írjon egy emailt, a tárgyban pontosan az
        alábbi szövegek egyike legyen: regramlista k regramlista e
        regramlista n regramlista s (k-kettős könyvelés, e-egyszeres
        könyvelés,n-kereskedelmi számlázó,s-számlakészítő) Az email
        szövegében tüntesse fel a vásárló nevét és címét.</p>
    </div>
    <div class="col-md-4">
        <video width="400" controls>
        <source src="assets/wind.mov" type="video/mp4">
        //<source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML video.
        </video>
            <p>
            Video courtesy of 
            <a href="https://wunderground.com/" target="_blank">Fúj a szél</a>.
            </p>
    </div>
    <hr style="margin: 20px;">
</div>
<div class="row">
<div class="col-md-12">
<iframe width="1190" height="669" src="https://www.youtube.com/embed/euNDb3kg1KI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>


<!--bevezeto vege-->
<div class="row">
<div class="col-md-4">
    <h4>Egyszeres könyvelési programban évnyitás után, a 2021-es programban „Hibás rekordhossz a SZAMLA.IDX állománynál, oszthatóság nincs …</h4>
    <p>
    Az évnyitás hibája okozza.
    Teendő: 2021-ben minden cégben belépni:
    Szerviz->Állományok újraindexelés->Összes állomány indexelése
    </p>
  </div> 
  <div class="col-md-8">
    <h4>
    Könyvelési programokban ÁFA-bevalláshoz igazodó könyvelés
    </h4>
    <p>
    Honnan lehet tudni, hogyan kell könyvelni pl. Uniós beszerzést, Uniós értékesítést, fordított áfás beszerzést stb?

    1. A könyvelő először a saját tudása és az Áfa-bevallás kitöltési útmutatója alapján megállapítja, hogy az adott számlát az Áfa-bevallás mely sorában kell szerepeltetni.

    2. A programban a Törzsek->Áfa-bevallás paramétereinél a kiszemelt soron F9-et nyomva, vagy Javításba lépve, meg kell nézni, hogy az adott sorban a program mely főkönyvi számokat (egyszeresnél mely számlatípusokat) veszi figyelembe.
    Kettős könyvelésnél a főkönyvi számokat a Szervíz->Ajánlott számlakeretben lehet megnézni, egyszeresben a számlatípusokat a Törzsek menüben

    A főkönyvi szám/számlatípus mellett két további mező szerepel.
    Az első mező: Áfakulcs. Azt határozza meg, hogy az áfa-ablakba könyvelt értékek közül melyiket vegye figyelembe.
    Lehetséges beállítások:
    2 – legnagyobb áfa% (jelenleg 27)
    1 – középső áfa% (jelenleg 18)
    5 – legkisebb áfa% (jelenleg 5)
    M – áfamentes
    0 – 0%-os
    K – áfakörön kívüli
    * - az összes fentebb felsorolt

    A második mező: Számla-e
    Ez csak némelyik sorban van kitöltve, 2009-ben pl. 58. sor Importált termék, Áfa-kivetéssel. Ha ez a mező kitöltött, akkor az adott főkönyvi számra/számlatípusra könyvelt számlák közül csak azokat veszi figyelembe, amelyek azzal a „Számla-e” jelzéssel lettek könyvelve. A „Számla-e” lehetséges értékei a Törzsek->Fordított adózáshoz számítási beállítások álnéven találhatók.

    További segítséget nyújt a programban a „Számla-e” mező. Itt F1-et nyomva a leggyakrabban előforduló számlák szerepelnek, s ezekből kiválasztva a program az adatok feltöltését elvégzi. De minden alkalommal, amikor valaki először könyvel adott típusú számlát, ellenőrizni kell az áfa-bevallást, jó sorba (sorokba) kerül-e a számla! Ha nem, akkor az előbbiekben leírtak szerint lehet az ellenőrzést és javítást elvégezni.
    </p>
</div>
<div class="col-md-8">
    <h4>Hibás rekordhossz a ..... állománynál, oszthatóság nincs …</h4>
    <p>
        A hiba oka többféle lehet.
        Például

        1. Mentés visszatöltés.
        Könyvelési programokban, ha egy másik gépről töltöttek vissza mentést, akkor valószínűleg a program régebbi verziójú, mint a betöltött adatok.
        Teendő: programfrissítés

        2. Ha gépleállást v. valamilyen számítógéphibát követően írja ki a program a hibaüzenetet, valószínűleg megsérültek az állományok.
        Teendő:
        a,ha van mentés, azt vissza kell tölteni.
        b,ha nincs, először is megkísérelni menteni, utána az állományokat megpróbálni újra-indexelni.
        c,ha az előbbi lépések nem vezettek eredményre, a fejlesztő segítségét kell kérni.

        3. Ha az évnyitás 1. lépésénél kapja a hibaüzenetet:
        Olyan változás volt a programban, ami az állományok konvertálását is igényelte, de többcéges programban van olyan cég, amelyiknél a konverzió nem hajtódott végre.
        Teendő:
        1. a hibás évnyitás eredményeképp hiányosan létrejött könyvtárat, pl. EFOKee (ee: az évszám 3.és 4. jegye) , ki kell törölni
        2. ha olyan cég(mappa) nevét írta ki elakadáskor, pl. „Hibás rekordhossz az RGR\VEVOAZON állománynál...”, amilyen cég nincsen, a mappa törlendő! Csak a cégek rövid nevének megfelelő mappák, és a programot tartalmazó PRG mappa szerepelhet.
        3. ha olyan cég nevét, amelyikbe nagy régen nem léptek bele: A programon belül a nem használt cégeket ki kell törölni (az új vállalat rögzítése menüpontnál), a korábban nem használt cégekbe (a program az elakadáskor kiírta a cég ill mappa rövid nevét) legalább be kell lépni, hogy a program az állományok újraképzését el tudja végezni. A konvertálást a program az összes cégben elvégzi az „új vállalat rögzítése” menüpontban M betű (Mind) lenyomására.
        Az egyszeres könyvelési programban, ha olyan mappanevet ír ki a program (pl. „Hibás rekordhossz a XXXX\SZAMLA.DAT állományban ...”, XXXX a mappa neve) , amilyen cég nincsen, akkor az a mappa hibásan került bele a könyvelési program mappájába. Többcéges egyszeres és kettős könyvelési programban a mappák nevei a következők lehetnek: a cégek rövid neve, továbbá a PRG mappa, ami a program mappája. Az ezektől eltérő nevű mappák törölhetők.
        Több helyen találkoztam RGR mappával, ez arra utal, hogy programfrissítéskor rossz helyre másolták a frissítés telepítő állományait.

        4. Ha a kettős könyvelési programban az évnyitás 2. vagy 4. lépésénél kapja ezt a hibaüzenetet , akkor bizonyára a két évben nem ugyanaz a program megy, és állományváltozás történt a programban.
        Teendő:
        a,az új évi programba belépve:Szervíz->Ezévi program átmásolása előző évbe
        b,visszalépni az előző évi programba
        A programváltozáskor megszokott állományok újraképzését engedni kell, ill. 2008-tól (többcéges programnál) új lehetőség, hogy .az Új vállalat rögzítése menüpontban az M betűt lenyomva a program minden cégben elvégzi a szükséges konvertálásokat.
        A program kiírja, hogy a mentést kell visszatölteni, ezt az I betű lenyomásával lehet nyugtázni (mentés visszatöltésre ebben az esetben nincs szükség).
        Ha a 4. pontnál történt a hiba , a könyvelés rögzítésénél (abban az évben, ahonnan indította az évnyitást) ki kell törölni a ZRG04 számú bizonylatokat, ezek az 1-4 számlaosztály záró bizonylatai.
        S ekkor az évzárás 2. vagy 4. lépése megismételhető.
        Továbbá: a frissítéshez tartozó leírást legközelebb figyelmesebben kell elolvasni, mert erre mindig felhívjuk a figyelmet!
    </p>
</div>
<div class="col-md-4">
    <h4>Kettős könyvelési programban a folyamatos teljesítésű, Áfa szempontjából következő évre áthúzódó számlák kezelése</h4>
    <p>A program az Áfa-nyilvántartásban csak az aktuális évi dátumú számlákat tudja kezelni. Ha valaki pl. a 2008-as programban 2009. januári Áfa-dátumú tételt könyvel, akkor azt a program a januári (2008) áfa-kimutatásba teszi bele.
        Javaslatom:
        A 2008-es programba 2008-as (tehát a számviteli törvény szerinti) teljesítés- és áfa-dátummal kell lekönyvelni a számlát úgy, hogy az Áfa ablakban a 466/467 helyett 3... főkönyvi szám szerepeljen (következő évi követelés vagy. Kötelezettség).
        A 2009-es programba - az előző évből a 3... főkönyvi számra lekért Áfa-lista alapján - ezeket a számlákat egy összegben (feltételezve, hogy mindegyik januári teljesítésű) vagy tételesen kell az alábbi módon könyvelni:

        2009-es teljesítés és Áfa dátum
        “fent” : 3 ... -as főkönyvi szám; vevőnél tartozik, szállítónál követel; bruttó összeg
        Áfa-ablak : 466/467 alap és áfa
        “lent” : ugyanaz a főkönyvi szám, mint fent; T/K a fentinek az ellenkezője; nettó összeg
</p>
</div>
<div class="col-md-4">
    <h4>Kereskedelmi számlázó és számlakészítő programhoz nyilatkozat</h4>
    <p>2014-től nem kell nyilatkozat</p>
</div>
<div class="col-md-4">
    <h4>Kereskedelmi számlázó és készletnyilvántartó programban leltár végzése</h4>
    <p>Programleírásban „-16-” -ra vagy „Leltár” szóra keresni</p>
</div>
<div class="col-md-4">
    <h4>Számlakészítő programban főkönyvi feladás készítésénél hibát jelez a program: „vevőtörzsben nincs kód v. név”</h4>
    <p>Programleírás 5. oldal</p>
</div>
<div class="col-md-6">
    <h4>Kettős könyvelési programban pénztárbizonylat-készítés</h4>
    <p>Programleírásban „Pénztár kezelése a könyvelésben” szöveget kell keresni</p>
</div>
<div class="col-md-6">
    <h4>Kettős könyvelési programban folyószámla-nyitás, mérlegkészítés utáni nyitás és ezek ismétlése
        és
        Kettős könyvelési program folyószámla-nyitáskor eltérést jelez a folyószámla és a kivonat között</h4>
    <p>Programleírás: Folyószámla-tételek átmásolása</p>
</div>
<div class="col-md-6">
    <h4>Főkönyvi kivonat átadása a Metrum Referencia könyvvizsgáló programnak</h4>
    <p>1. lépés a kivonat elkészítése TXT formában.
        A kettős könyvelési programban a főmenüben F5-öt kell nyomni. Ekkor kiírja a program a TXT állomány nevét: LISTA.TXT. El kell készíteni a főkönyvi kivonatot.
        Ha a kezdő hónap 0, akkor a nyitást is bele fogja tenni az állományba, ha a kezdő hónap 1, akkor csak a tárgyévi forgalmat – feltéve, hogy a nyitás a nulladik hónapra lett könyvelve.
        A program kérdésére: „A TXT állomány a BétaSoft-nak megy vagy Excelbe „ E-t kell válaszolni.
        A kivonatot el kell készíteni úgy, mintha nyomtatni szeretnénk, de nem kell kinyomtatni, ki lehet lépni utána a programból. Kilépéskor a 'Táblázatkezelő program indítása” kérdésnél is Esc-pel ki kell lépni.

        2. lépés: beolvasás a könyvvizsgálói programba.
        A cég és időszak kiválasztása után a beszámolókészítésnél a főkönyvi kivonatot kell kiválasztani, majd a Szerkesztés menüben a Beolvasást.
        A tallózásnál (…) meg kell keresni a LISTA.TXT állományt, ami az 1. lépésben elkészült. Az állomány egycéges programnál az EFOKxx mappában van, többcéges programnál a mappán belül a cég mappájában. Csak LISTA nevet lehet látni, a TXT-t nem mutatja.
        A LISTA-t kiválasztva még át kell írni, hogy a
        megnevezés oszlopszáma: 3
        tartozik oszlopszáma : 4
        követel oszlopszáma: 5
</p>
</div>
<div class="col-md-6">
    <h4>Többcéges könyvelési programokba évnyitás után került be új cég az előző évbe</h4>
    <p>Ha megnyitotta az új évet (EFOK17-et /NAPLO17-et), és utána vitt be egy új céget a korábbi évbe, akkor az újonnan megnyitott cég és annak adatai az új évben nem látszanak.
        Teendők:
        0. Meggyőződni róla, hogy van mentése mind a régi, mind az új évről, vagy cégenként, vagy egyben!
        1. A korábbi évből (az előbbi példánknak megfelelően az EFOK16 / NAPLO16-ból) ismét évet kell nyitni, de az új év nevében az évszám 77 legyen (EFOK77/NAPLO77)
        2. Az EFOK77/NAPLO77 mappából a cég rövid nevével megegyező nevű mappát át kell másolni az EFOK17/NAPLO17 mappába, az alábbi 2 módszer közül a szimpatikusabbat kiválasztva
        a) A mappa átmásolása történhet manuálisan, pl. a Total Commander-rel. Ebben az esetben, ha az új évben már létezik ilyen nevű mappa, annak tartalmát előbb törölni kell!
        b) Vagy a program segítségével:
        -előbb a 77-es programból pendrive-ra mentést kell készíteni a cégről : Mentés->Összes adatállomány mentése
        -majd belépni a 17-es programba, létrehozni az új céget, mentés visszatöltést kérni: Mentés->Másik cég mentésének visszatöltése ide-> megkeresni a pendrive-on a ...77-es mappában a céget, és úgy visszatölteni.
        3. Az új évben lépjen be az „Új vállalat” menüpontba, ekkor fogja a program a cégválasztó-menübe is beletenni a céget.
        4. Törölje ki az 1. pontban létrehozott mappát és a hozzátartozó .BAT file-t, ellenkező esetben 2077-ben probléma lesz évnyitáskor :)
    </p>
</div>
<div class="col-md-12">
    <h4>Kettős könyvelési programban az év lezárása után az adatállományok ellenőrzésekor az áfa-kimutatás és kivonat összehasonlításakor a program hibát jelez. Az eltérésről a hibajelzést az Áfa-kimutatásra is ráírja.</h4>
    <p>Hibajelzést okozhat, ha az áfa-számlák összevezetésének a könyvelése a 12. könyvelési hónapra történt. Teendő: a 468-ra való összevezetést a 13. hónapra kell könyvelni (vagy az új évben a nulladikra).</p>
</div>
<div class="col-md-7">
    <h4>Évnyitás és ikonkészítés</h4>
    <p>Az évnyitás az összes programban (kereskedelmi számlázó és készletnyilvántartó ; kettős könyvelés, egyszeres könyvelés; pénztárbizonylat-készítés, számlakészítő program, szigorú számadású nyomtatványok értékesítésének nyilvántartó programja, és egyéb, egyedi programok) az alábbi módon történik.
    I. A programban évnyitást kell kérni az új év indítása előtt. Ezt célszerű már az új naptári évben elvégezni, ellenkező esetben több átállítást is meg kell csinálni:az új év neve, valamint az új évben az évszám.
    A régi év megmarad, ott lehet pl. a könyvelést folytatni, de az új év adatait már nem ott, hanem az évnyitással létrehozott új könyvtárban kell feldolgozni.

    II. Ikonkészítés Amennyiben Windows operációs rendszer működteti a gépet, s azt szeretné, hogy az új program is ikon-nal induljon,az alábbi a teendő:
    Létre kell hozni az „asztal”-on egy új ikont, mely az évnyitás által újonnan létrehozott „BAT” file-ra mutat.
    Erre több módszer is van , s a Windows változataitól függően eltérő módon történhet
    Az alábbi módszer általában megfelelő:

    1. A régi évet indító ikonról másolatot kell készíteni.
    Az ikont a bal egérgombbal kijelölve (általában kék szín jelzi a kijelölést) az alábbi 2 módon készíthet másolatot
    1.1.: először Ctrl C (vágópadra helyezés) majd Ctrl V (vágópadról beillesztés) billentyűket nyomva létrejön a másolat
    1.2.: a jobb egérgomb lenyomásakor megjelenő menüben másolás, majd az asztalon egy üres helyen jobb egérgomb, beillesztés.
    Ha véletlenül 7-8 új ikont „sikerült” létrehozni, azokat lehet törölni: ki kell jelölni a törölni kívánt ikont, majd a Delete törlő billentyűvel törölni.

    2. Az új -másolat vagy (2) jelzéssel megjelenő - ikont át kell nevezni : ki kell jelölni az ikont, és az F2 lenyomásával átnevezni, vagy jobb egérgomb->átnevezés.
    Az ikon neve csak az ügyfél számára fontos, de tanácsos az előző ikon-névhez hasonlót adni, csak az évszámban különbözzenek pl. ha a régi név EFOK08 volt, az új EFOK09 legyen

    3. Az új ikonnak elő kell írni, hogy mit indítson el:
    Az ikont ki kell jelölni, majd a jobb egérgomb lenyomásával, a tulajdonságok menüpontban a program v. parancsikon fülnél minden korábbi (általában kétjegyű) évhivatkozást az új év számára kell átírni, pl. NAPLO08-at NAPLO09-re. A leglényegesebb a parancssor és a munkakönyvtár - ez utóbbiban nem mindig van szöveg.


    Ha a program kis ablakban jön elő, az Alt Enter billentyűk lenyomásával az ablak mérete növelhető, vagy ismét csökkenthető.

    Az új ikon létrehozására vonatkozó fenti tanácsok csak magyar nyelvű és eddig forgalomban lévő Windows verziókra érvényesek (95, 98, Nt, XP, ME, 2000).</p>
</div>
<div class="col-md-5">
    <h4>Szűrő használata (F7-tel aktivizálható)</h4>
    <p>Szűrőt ott lehet használni, ahol rögzíteni, keresni tudunk. Számláknál használata (nagyker és számlakészítő programban is) :
        az F7 lenyomása után megjelenő táblázatba beírja a számla keltét .07.03.13., F10-zel lezárja, így a képernyőn csak a megadott dátumú számlák látszódnak, melyeket F9-cel meg lehet tekinteni.
        Karakteres mezőknél használható a ? . Pl. ha egy mezőnél azt írja be, hogy ????????????R, akkor csak azok a rekordok jelennek meg, melyekben a mező 13. karaktere R . Ha csak R betűt ír be, akkor pedig azok, amelyeknek a kódjában szerepel a R betű.
        Dátum mezőnél (pl. teljesítés dátuma) beírható pl. : 07.02.?? (utána F10): ekkor a program csak a 2007. 02. havi (teljesítés) dátumú számlákat mutatja (ill. ha utána Listázást kér akkor csak azokat listázza) (ha a kérdőjeles szűrés nem, vagy hibásan működik, bizonyára túl régi a program)

        A szűrő kikapcsolása úgy történik, hogy az F7 lenyomása után a mezők kitöltése helyett rögtön Esc-et nyom.
        A szűrő bekapcsolt állapotát a bal felső sarokban lévő rekord db-szám melletti ! mutatja.
        Nagyker.programban Törzseknél a használata . ha csak egy adott árucsoportban lévő termékeket bevételez, az első sornál F1-gyel át kell lépni az árutörzsbe (a kódnál, név-elejénél vagy belső kódnál; névrészletnél nem) F7-tel a szűrőt beállítani, így a szűrő kikapcsolásáig mindig csak a szűrési feltételnek megfelelő termékek jelennek meg kiválasztásra. Hálózaton, tízezres nagyságrendű állománynál ez lassú lehet!
    </p>
</div>
<div class="col-md-5">
    <h4>TXT-állomány előállítása EXCEL/LibreOffice Calc/Openoffice Calc program számára</h4>
    <p>A főmenüben állva F5-öt nyomva bekapcsolásra kerül a TXT file készítés funkció,és kiírja a program a készítésre kerülő TXT állomány nevét. (A TXT állomány készítés szükség esetén F6-tal kikapcsolható. A programba való belépéskor mindig kikapcsolt állapotban van a TXT-file készítés funkció.)
        Ezután kell kérni a szükséges listát. A fontosabb listák készülnek csak TXT-ben, pl kettős könyvelési programban kivonat, karton, naplólisták, keresk.számlázóban Partner törzslista, árutörzslista, értékesítési összesítők., ha a program még nem készít TXT-t, azt a „'TXT-állomány nincs!” üzenet jelzi. Lehet kérni más listákat is TXT formátumban, ezt vagy külön díjazásért, vagy az ötletbörze keretében megcsináljuk.
        A lista képernyős nézegetéséből való kilépés után kérésre a program elindítja a beállított táblázatkezelő programot az elkészült állománnyal, amit szükség esetén xls vagy ods formátumban lehet a megfelelő helyre menteni.
        (2009. április előtti programoknál a táblázatkezelő automatikusan nem indul, ezért az Excel-t vagy Openoffice Calc-ot indítva meg kell nyitni az SZLxx vagy EFOKxx\cégnév mappában szöveges állományként a TXT állományt, és fel lehet dolgozni.
        Openoffice-ban megnyitás előtt a fájltípus-nál a Struktúrált szöveget kell kiválasztani.)</p>
</div>
<div class="col-md-7">
    <h4>E-mail küldés / PDF állomány készítése / Listák exportálása</h4>
    <p>Gyakran szükséges, hogy az elkészült listákat e-mailben is el kell küldeni, vagy pl. másik számítógépen kell kinyomtatni.
        Erre jelenleg 3 módon van lehetőség:
        Mindhárom módszerhez Windows-nyomtatót kell beállítani a programban,
        ld. Nyomtatási beállítások, problémák

        1. A lista előállítása PDF-formátumban
        Ehhez PDF-nyomtatót kell feltelepíteni. Vannak ingyenesen letölthető PDF-nyomtató programok (pl. BullZipPdf, PdfCreator). Ezek feltelepítésével egy új „nyomtató” lesz a számítógépen, s Windows-os nyomtatásnál azt kiválasztva a lista PDF-formátumban fog elkészülni. Ez

        2. E-mailt lehet közvetlenül a programból küldeni, PDF-csatolmánnyal.
        A program (windows-os nyomtatáskor emailküldés kérésére) a számítógépre telepített alapértelmezett e-mailküldő programon keresztül küldi az e-mailt, így csak a küldő és a címzett e-mailcímét kell beállítani.
        Az email vagy „új levél”-ként kerül át a levelező-programba, s onnan elküldhető, vagy közvetlenül elküldi a program. Mindkét esetben az elküldött levelek között is megjelenik.
        Ha a Szerviz->Társaság főbb adatai-nál a Partner emailcím rovat kitöltött, a Címzett mezőben az jelenik meg.
        A „Nyomtatást kér <I/N...>” kérdésnél E-t nyomva (email) a lista közvetlenül emailként megy
        Ha a számítógépen fel van telepítve a PdfCreator vagy a BullZipPdf PDF-nyomtató,akkor a program (a korábbi RTF állomány helyett) PDF-állományban csatoltan küldi az elkészített listát. Megadható a PDF-állomány neve (alapértelmezés: „pdfnév”)
        A PdfCreator program első használatánál emailküldéskor megjelenhet az alábbi üzenet : A PdfCreator-ra nyomtasson előbb valamit, Csak utána tudja használni PdfCreatorral ezt a programot.
        Teendő: nyomtatni a PdfCreator-ra (pl. a Wordpad programmal), alul „Beállítások”, majd „Mentés”.
        A programokban ez 2009. november óta van!

        3. TXT állomány előállítása
        ld. TXT-állomány előállítása EXCEL vagy másik táblázatkezelő program számára</p>
</div>
<div class="col-md-12">
    <h4>Nyomtatási beállítások, problémák</h4>
    <p>Ha egyáltalán nem nyomtat a program, netán kiírja, hogy 1. nyomtatón a nyomtatás folyamatban, és vár:
        a, dugjuk be a nyomtatót
        b, valószínűleg Windows-os vezérlésű nyomtató van, de a program az LPT1-re akar nyomtatni. 2004 óta a programok tudnak csak Windows-vezérlésű nyomtatóra nyomtatni.
        Beállítás: a nyomtató típusát W-re kell állítani.:
        - könyvelési programokban (egyszeres és kettős), pénztárbizonylat-készítő programban, számlakészítő programban
        a főmenüben AltB
        - számlakészítő programban 2008 március előtt Számlakészítés->Paraméterek
        - kereskedelmi számlázó és készletnyilvántartó programban:
        hálózatos programban: Szerviz ->Hálózaton saját paraméterek beállítása->2. lapon
        nem hálózatos programban: Szerviz ->Rendszerparaméterek beállítása-> 2. Lapon a vonal alatt Nyomtató típusa vagy nyomtató vezérlőkarakter .A H betű ebben a sorban azt jelenti, hogy hálózatos verzióban gépenként kell állítani, ahogy az az a, pontban le van írva.
        - szigorú számadású nyomtatványok eladásának nyilvántartó programjában: Szerviz ->Rendszerparaméterek
        Ha beállításkor nem írja ki a Windows-os nyomtatási lehetőséget, akkor régi a program, illendő felfrissíteni.

        2. Ha nyomtat, de szét van esve, vagy túl széles, akkor bizonyára Dos-os nyomtató van, csak a nyomtató típusa hibás.
        Emlékeztetőül a nyomtató típusa:
        N - epson vezérlésű mátrixnyomtató
        I – IBM vezérlésű mátrixnyomtató
        1 -tintasugaras nyomtató
        2. lézernyomtató
        W:windows-vezérlésű nyomtató

        3. Ha Windows-os nyomtatás van beállítva, és csak a papír bal felső sarkában látszik valami, akkor hibás a fontkészlet, válasszon Courier New vagy Courier New CE fontkészletet, vagy ha van, Regram Dejavu Sans Mono fontkészletet.

        4. Ha a kettős könyvelési program Windows-os nyomtatóra némelyik folyószámla-kimutatást nem nyomtat ja
        (hibával elszáll a nyomtatás), pl. kiegyenlítetlen tételek adott napok között, de minden egyéb nyomtatás rendben van,
        akkor frissítse fel a programot, mert ez a hibajavítás 2007. április végén történt.

        5.Ha kettős és egyszeres könyvelési programokban Windows-vezérlésű nyomtatóra régi években nem nyomtat, de az újakban igen, akkor fel kell frissíteni a régi évek programját:
        Az aktuális évi programba belépni, többcéges programban egy olyan cégbe, amelyik az előző évben is megvolt. Szervíz->Ezévi program átmásolása előző évbe. A program felajánlja, hogy pl. EFOK08,. Ha nem ajánlja fel, akkor valami gond van, pl. nem ugyanaz a neve az előző évi könyvtárnak, vagy nincsen olyan cég az előző évben. Ha frissíti az előző év vagy évek programját, feltétlenül gondoljon arra, hogy minden közbeeső évbe is másolja át a programot (az előbbi példában először EFOK08, aztán EFOK07, EFOK06 stb).
        Fontos, hogy minden felfrissített évben lépjen be a programba, többcéges programban minden cégbe lépjen be, hogy a program a szükséges konvertálásokat el tudja végezni! Vagy az új vállalat menüpontban kérje M-mel Minden cég konvertálását!</p>
</div>

<div class="row">
<div class="col-md-6">
    <h4>Hálózatos programnál állomásszám beállítása</h4>
    <p>Akkor lehet erre szükség, ha hálózatos a program, és mégsem fut egyszerre több gépen, hanem kiírja, hogy foglalt a rekord.
        A program magától képezi ezt a számot, de bizonyos esetekben különböző gépeken is ugyanazt a számot képezi.
        Ebben az esetben a STAT_LOG_NUMBER környezeti változót kell beállítani.
        Először is meg kell nézni, hogy a gépeken egyesével belépve a programba, a jobb alsó sarokba milyen számot ír ki.
        Az a lényeg, hogy ez a szám a gépeken különböző legyen, és ezt a számot lehet ezzel a környezeti változóval lehet beállítani.

        A beállítás módja Windows7, Windosw XP, Windows2000, Windows NT alatt:
        a Windows\System32 könyvtárban található autoexec.nt állományba kell beírni:
        SET STAT_LOG_NUMBER=XX
        (XX a többi gép számától eltérő 2 (a 32 bites programokban 4) karakter: szám, vagy az angol abc nagybetűje)

        Windows 98 alatt a C: gyökérkönyvtárában levő autoexec.bat-ba kell beírni a fenti sort, majd utána újra kell indítani a számítógépet.</p>
</div>
<div class="col-md-6">
    <h4>Programok indítóikonjának beállítása hibás ablakméret/betűforma esetén</h4>
    <p>Mind a „régi”, 16 bites programoknál, mind az „új”, 32 bitesnél , XP-n és Windows7-en is pl. az alábbi módszerrel beállítható a helyes ablakméret:
        Amikor a programot az ikonnal elindította, nyomja meg az Alt és szóköz billentyűt (vagy az ablak kék színű felső címsávjánál a jobb egérgombot)
        -Alapértelmezések->
        1. Elrendezés fül-> a szélesség 80, a magasság 25 legyen mindkét helyen.
        2. Betűtipus fül → Lucida Console A méret 20-as, nagyobb felbontású képernyőn pl. 24 legyen. Ha túl nagy a méret, teljesen elcsúsznak a betűk!
        XP-n az ablak mérete még teljes képernyős is lehet, de akkor a Betűtípus raszteres betűkészlet legyen.
        Majd kilépni a programból, és ismét elindítani.
        (Ha ez alapján nem sikerült, akkor mindent megismételni, de az „Alapértelmezések” helyett „Tulajdonság”-ot választva )</p>
</div>
<div class="col-md-4">
    <h4>Nyomtatáskor „Frissítse a PdfCreator programját” üzenet</h4>
    <p>
            A PdfCreator 2.0-ás verziója a saját verziószámát a korábbiakkal ellentétben nem írja bele a Registry-file-ba, ezért a NYOMTATW.EXE úgy érzékeli, mintha 0.0 verziószáma lenne.
        Két megoldást tudok javasolni::
        1. Kérni kell a Regram Kft-től frissítést – ennek díjazása az árjegyzék szerint
        2. Beállítás a registry-fileban csak hozzáértőknek!!! :
        HKEY_LOCAL_MACHINE\Software\PdfCreator\Program helyen
        Szerkesztés->Új->Karakterlánc
        Név: ApplicationVersion
        Érték: 2.0
    </p>
</div>
<div class="col-md-8">
    <h4>EFOK15.BAT(NAPLO15.BAT) létrehozása sikertelen, hozzáférési hiba lehet, de a program használható...
        (régebbi programokban : A program futása során hiba történt, a hiba kódja:103 is legtöbbször ugyanezt takarja)
    </h4>
    <p>
        A hiba oka általában az, hogy Windows7/Windows8 operációs rendszerben a program mappája, pl. EFOK14, a C: meghajtó gyökerében van, s évnyitáskor a program a létrehozott könyvelési mappához a Windows korlátozásai miatt nem tudta létrehozni az EFOK15.BAT (NAPLO15.BAT)-ot.
        Teendő :

        1. A gyors megoldás : a 2015-ös programhoz az ikont az EFOK15(NAPLO15) mappában lévő
        a, többcéges programnál a TFOK.BAT (TNAPLO.BAT) -hoz
        b,egycéges programnál az EFOK.EXE-hez
        kell elkészíteni
        A gyors megoldás hátránya, hogy egy év múlva valószínűleg ugyanez a hiba fog jelentkezni -vagy már tavaly is :)

        Ha az ikon eredetileg is ilyen volt, akkor az új ikonnal az év átírásán túl nincsen teendő.

        2. A jobb, hosszú távú megoldás szakember segítségét igényli:
        Célszerű egy REGRAM mappát létrehozni a C: /D: meghajtón, oda bemásolni az összes EFOK mappát és batch file-t, és átírni az összes korábbi évre mutató ikont. Ha az ikon a batch filera mutat, a batch filet módosítani kell (CD \EFOK15 helyett CD EFOK15 legyen), vagy a batch file-t megkerülve kell a programot az 1. pontban lertak szerint indítani.</p>
</div>
<div class="col-md-12">
    <h4>Windows 32 vagy 64 bites?</h4>
    <p>A könyvelési programok és a számlakészítő program 2014-ben, a kereskedelmi program 2015-ben „windowsosítva” lett, 32 bitesek, így futnak 64 bites windowson is.
        A továbbiak csak egy programra - Szigorú számadású nyomtatványok nyilvántartó programja - illetve a többi program dos-os verziójára vonatkoznak.
        A 64 bites operációs rendszer nem futtatja a 16 bites MS-DOS programokat, erre csak a 32 bites Windows használható!
        A Windows10 alatt nem futnak a 16 bites programok!
        Megoldás lehet a 64 bites Windows 7 alábbi kiadásain : Professional , Ultimate és Enterprise kiadásainál:
        A Microsoft tanácsa:
        http://windows.microsoft.com/hu-hu/windows7/install-and-use-windows-xp-mode-in-windows-7
        A Windows7 HOME és Windows8 64 bites verzióira ez NEM ÉRVÉNYES!!!
        XP mode telepítése:
        http://windows.microsoft.com/hu-hu/windows7/install-and-use-windows-xp-mode-in-windows-7#section_3
        A Regram programok használata Windows XP Mode alatt
        Először a Windows XP mode ikonra kattintással el kell indítani az XP módot, mert csak így futnak a 16 bites programok.
        Egy új „asztal” fog megjelenni, s azon rajta vannak a korábban rátett ikonok, így pl. a Regram programjainak az ikonjai, ha már azokat valaki elkészítette.
        Ezekkel az ikonokkal fog futni a program.
        Az új (XP mode) és a régi asztal használata tetszőlegesen választható.
        Ha a gépet ki akarják kapcsolni, célszerű bezárni az XP módot, az asztal jobb felső sarkában található X gombbal. Ekkor hibernálást ír ki a Windows. Ha enélkül kapcsolják ki a gépet, újraindítás után újból látszik az XP mód, annak elindítása nélkül, de nem tudom, sérülhetnek-e így az adatok.
        A nyomtatót az XP mode alá kell feltelepíteni, a leírás szerint így a Windows 7 alatt is használható

        A DosBox-ot nem ajánlom, mert az eddigi tapasztalatom negatív volt róla.</p>
</div>
</div>
</div>

