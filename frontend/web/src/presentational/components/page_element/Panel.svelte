<script>
    import {_} from 'svelte-i18n';
    import CollapsibleSection from "src/presentational/components/element/CollapsibleSection.svelte";
</script>

<section class="hero is-fullheight ">
    <div class="hero-body ">
        <div class="container has-text-centered ">
            <div class="column ">
                <div class="box mobilwidth">

                    <h1 class="title has-text-centered mb-6">{$_('main.page_title')}</h1>
                    <h2 class="subtitle has-text-left is-size-4 is-size-6-mobile mt-6 ml-5 has-text-danger">
                                Felhívjuk szíves figyelmüket, hogy a rendezvény csak védettségi igazolvánnyal vagy azzal egyenértékű igazolással látogatható!<br>
                    </h2>

                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph1')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph2')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph3')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph4')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph5')}</p>
                    </div>

                    <h1 class="has-text-left is-size-3 mb-6 ml-4  is-size-5-mobile">Programok</h1>
                    <h2 class="has-text-left has-text-danger is-size-4 mb-6 ml-5 is-size-6-mobile">A programváltozás jogát fenntartjuk.</h2>
                    <table class="table has-text-left ml-4 is-size-7-mobile">
                        <tr>
                            <td>9:00-9:50</td>
                            <td><b>Regisztráció</b></td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                            <td><b>Megnyitó</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>PTE Rektor köszöntője</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>PTE MIK Dékán köszöntője</b></td>
                        </tr>
                        <tr>
                            <td>10:30</td>
                            <td><b>Ünnepélyes szerződéskötési ceremónia</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>MaTáSzSz - aláírás, felszólalás</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>FESTO - aláírás, felszólalás</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>ExxonMobil terem kulcsátadója</b></td>
                        </tr>
                        <tr>
                            <td>11:00-12:00</td>
                            <td><b>Plenáris előadások</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>INNOVATÍV ORVOSMÉRNÖKI KUTATÁSOK A MIK-EN</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><b>ZERO CARBON CITIES Solar Decathlon 2021</b></td>
                        </tr>
                        <tr>
                            <td>12:00-13:00</td>
                            <td><b>Szendvicsebéd</b></td>
                        </tr>
                        <tr>
                            <td>12:30</td>
                            <td><b>Sajtótájékoztató (Aula)</b></td>
                        </tr>
                        <tr>
                            <td>13:00-15:00</td>
                            <td><b>Szekcióelőadások I. blokk</b></td>
                        </tr>
                        <tr>
                            <td>15:00-15:30</td>
                            <td><b>Kávészünet</b></td>
                        </tr>
                        <tr>
                            <td>15:30-17:30</td>
                            <td><b>Szekcióelőadások II. blokk</b></td>
                        </tr>
                        <tr>
                            <td>17:30-18:30</td>
                            <td><b>Szünet</b></td>
                        </tr>
                        <tr>
                            <td>18:30-19:00</td>
                            <td><b>Szoboravatás - MIK 51 ÉV</b></td>
                        </tr>
                        <tr>
                            <td>19:00 - 24:00</td>
                            <td><b>Jubileumi Est - PTE100 / MIK 51</b></td>
                        </tr>
                    </table>

                    <h1 class="has-text-left is-size-4 mb-6 ml-4 is-size-6-mobile">MIK PARTNERS - I. BLOKK - 13:00 - 15:00</h1>

                    <CollapsibleSection section="1/A. szekció" place="A010" sectionName="MI, VR, Cloud megoldások" leader="Dr. Schiffer Ádám">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:30</td>
                                    <td>Hybrid Cloud Management</td>
                                    <td>ITSH / Fehér Milán</td>
                                </tr>
                                <tr>
                                    <td>13:30 - 14:00</td>
                                    <td>5G és a mesterséges intelligencia gyakorlati példái</td>
                                    <td>Huawei / Bóday Tamás</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:30</td>
                                    <td>Virtuális- és kevert valóság alapú edutainment megoldások</td>
                                    <td>Innoteq / Rendes Péter</td>
                                </tr>
                                <tr>
                                    <td>14:30 - 15:00</td>
                                    <td>Színek és formák - MIK-et lát a gép?</td>
                                    <td>MIK / Dr. Várady Géza</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="1/B. szekció" place="A008" sectionName="Szoftverfejlesztés, üzleti megoldások" leader="Dr. Iványi Péter">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:30</td>
                                    <td>Low-code: A vállalati digitalizáció jövője?</td>
                                    <td>Saltech Consulting / Oláh Zsófia</td>
                                </tr>
                                <tr>
                                    <td>13:30 - 14:00</td>
                                    <td>Paradigmaváltás a nagyvállalati informatikában - Miért, hogyan és kivel?</td>
                                    <td>ULX / Török Tamás</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:30</td>
                                    <td>Üzleti alkalmazások gyors fejlesztése</td>
                                    <td>ExxonMobil / Szűcs Attila</td>
                                </tr>
                                <tr>
                                    <td>14:30 - 15:00</td>
                                    <td>Szoftverfejlesztés egyedi igényekre szabva napjainkban </td>
                                    <td>suIT Solutions / Pintér Tamás</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="2. szekció" place="E81" sectionName="Könnyűszerkezet / Fenntartható jövő" leader="Dr. Perényi László Mihály">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:20</td>
                                    <td>A készház építés / európai és magyarországi trendek</td>
                                    <td>Kárpáti József - ÉVOSZ / MAKÉSZ</td>
                                </tr>
                                <tr>
                                    <td>13:20 - 13:40</td>
                                    <td>SIP Paneles építés - Új fal és födémpanel fejlesztése</td>
                                    <td>Gebri László Variosystem / Dr. Perényi László Mihály PTE MIK</td>
                                </tr>
                                <tr>
                                    <td>13:40 - 14:00</td>
                                    <td>Könnyűszerkezetes épület tervezési kérdései kiviteli terv kapcsán</td>
                                    <td>Beregszászi Pál - BERGER Ház Kft. / Dr. Sztranyák Gergely - PTE MIK</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:20</td>
                                    <td>Membránszerkezetek tervezése</td>
                                    <td>PTE MIK / Dr. Halada Miklós</td>
                                </tr>
                                <tr>
                                    <td>14:20 - 14:40</td>
                                    <td>Tervezés segítés parametrikus modellezéssel</td>
                                    <td>PTE MIK / Dr. Széll Attila Béla és Dr. Sárközi Réka</td>
                                </tr>
                                <tr>
                                    <td>14:40 - 15:00</td>
                                    <td>Függönyfal tervezés alkalmazások - WIC3D szoftver</td>
                                    <td>WICONA / Dömötör Álmos és Pályi Péter</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="3. szekció" place="A302" sectionName="Modern infrastruktúra - új kihívások" leader="Prof. Dr. Lindenbach Ágnes / Dr. Pál-Schreiner Judit">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:15</td>
                                    <td>A jövő útjai, az intelligens közúti infrastruktúra</td>
                                    <td>Magyar Közút NZRt. / Tomaschek Tamás, forgalomszabályozási csoportvezető</td>
                                </tr>
                                <tr>
                                    <td>13:15 - 13:30</td>
                                    <td>Közlekedési létesítmények fenntartható zajvédelme </td>
                                    <td>Hunyadi Mérnöki Tervező Iroda / Dr. Hunyadi Dóra</td>
                                </tr>
                                <tr>
                                    <td>13:30 - 13:45</td>
                                    <td>Vasúti híd helyreállítása a Rinya folyó felett a 2020-as nyári villámárvíz után </td>
                                    <td>MÁV Zrt. / Simon Ilona, pályalétesítményi szakértő és Giczi Katalin, kiemelt beruházási projekt-koordinátor</td>
                                </tr>
                                <tr>
                                    <td>13:45 - 14:00</td>
                                    <td>Betonpaplan réteg optimális alkalmazása a közlekedésépítésben </td>
                                    <td>PTE MIK / Eller Balázs</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:15</td>
                                    <td>Modern infrastruktúra a gyakorlatban</td>
                                    <td>Szabadics Zrt. - Duális partner / Kovács Tamás, elnök</td>
                                </tr>
                                <tr>
                                    <td>14:15 - 14:30</td>
                                    <td>Csapadékvíz elvezetés és környezettudatos betonfejlesztés</td>
                                    <td>BG-Graspointner Kft. / Bencze Zoltán, tervezési tanácsadó</td>
                                </tr>
                                <tr>
                                    <td>14:30 - 14:45</td>
                                    <td>A műszaki pálya jövője</td>
                                    <td>Tettyeforrásház Zrt. - Duális partner / Jádi Barnabás, Kósa Dániel és Varga Róbert</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="4. szekció" place="A015" sectionName="Modern méréstechnika és jelfeldolgozás" leader="Kisander Zsolt">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:20</td>
                                    <td>Roncsolásmentes méréstechnika</td>
                                    <td>PTE MIK / Máthé Kálmán</td>
                                </tr>
                                <tr>
                                    <td>13:20 - 13:40</td>
                                    <td>A fül nemlineáris torzításának vizsgálata</td>
                                    <td>PTE MIK / Bagdán Viktor </td>
                                </tr>
                                <tr>
                                    <td>13:40 - 14:00</td>
                                    <td>Misszió kritikus elektronikai áramkörök EMC emissziós vizsgálata GTEM cella alkalmazásával</td>
                                    <td>PTE MIK / Dr. Gyurcsek István  </td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:20</td>
                                    <td>Új generációs mérőműszerek </td>
                                    <td>Rohde &amp; Schwarz / Herceg Zoltán</td>
                                </tr>
                                <tr>
                                    <td>14:20 - 14:40</td>
                                    <td>Mesterséges intelligencia alkalmazása a jelfeldolgozásban</td>
                                    <td>PTE MIK / Kisander Zsolt </td>
                                </tr>
                                <tr>
                                    <td>14:40 - 15:00</td>
                                    <td>Az 5G hatása az ipari alkalmazásokra</td>
                                    <td>PTE MIK / Dr. Maros Dóra </td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="5. szekció" place="A017" sectionName="Kötés- és gyártástechnológiák" leader="Vasvári Gyula Ferenc">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:20</td>
                                    <td>Lézerhegesztés technológia bevezetése a Körber Hungária Gépgyártó Kft.-nél</td>
                                    <td>KÖRBER HUNGÁRIA KFT. / Riszt Péter</td>
                                </tr>
                                <tr>
                                    <td>13:20 - 13:40</td>
                                    <td>Ragasztástechnológia gépipari alkalmazásai</td>
                                    <td>LOCTITE / Bakai Péter</td>
                                </tr>
                                <tr>
                                    <td>13:40 - 14:00</td>
                                    <td>Automatizált préselő cella koncepcionális tervezése</td>
                                    <td>PTE MIK / Kovács Mátyás</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:20</td>
                                    <td>Hegesztőrobotok a gépgyártás szolgálatában</td>
                                    <td>FLEXMAN ROBOTICS / Barabás Péter</td>
                                </tr>
                                <tr>
                                    <td>14:20 - 14:40</td>
                                    <td>Mélyfurat fúrás technológiai kérdései</td>
                                    <td>BÜTTNER KFT. / Bencsik László </td>
                                </tr>
                                <tr>
                                    <td>14:40 - 15:00</td>
                                    <td>Karbantartás a 21. sz.ban</td>
                                    <td>LAFARGE / Garai Gergely</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="6. szekció" place="A019" sectionName="Épületgépészeti irányítástechnika - Vinkler Károly Emlékülés" leader="Baumann Mihály">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:15</td>
                                    <td>Több mint hidraulika</td>
                                    <td>HERZ Armatúra Hungária Kft. / Doholuczki Tibor</td>
                                </tr>
                                <tr>
                                    <td>13:15 - 13:30</td>
                                    <td>Távhő rendszer irányítása a TERMIS programmal</td>
                                    <td>PÉTÁV / Győri Csaba</td>
                                </tr>
                                <tr>
                                    <td>13:30 - 13:45</td>
                                    <td>IoT technológia épületeinken belüli alkalmazási lehetőségei és integrálása napjaink épületfelügyeleti rendszereibe. </td>
                                    <td>SIEMENS ZRT. / Erhardt Tamás</td>
                                </tr>
                                <tr>
                                    <td>13:45 - 14:00</td>
                                    <td>Meglévő gázfűtéses rendszer kiegészítése hőszivattyúval hybrid rendszerben</td>
                                    <td>Weishaupt Hőtechnika Kft. / Versits Tamás</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 14:15</td>
                                    <td>Fűtési rendszerek hidraulikai optimalizálása</td>
                                    <td>PTE MIK / Baumann Mihály</td>
                                </tr>
                                <tr>
                                    <td>14:15 - 14:30</td>
                                    <td>Épületenergetikai rendeletmódosítások: változások és kihívások</td>
                                    <td>BMGE / Dr. Csoknyai Tamás</td>
                                </tr>
                                <tr>
                                    <td>14:30 - 14:45</td>
                                    <td>Intelligens szelepmozgató motorok szerepe az épület-felügyeletben</td>
                                    <td>DANFOSS / Székely Tamás</td>
                                </tr>
                                <tr>
                                    <td>14:45 - 15:00</td>
                                    <td>Hőtermelő berendezések és rendszerek energetikai felülvizsgálatának szabályozása</td>
                                    <td>PTE MIK / Lenkovics László</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="7. szekció" place="A202" sectionName="Energiatárolás és hidrogéntechnológiák" leader="Dr. Kvasznicza Zoltán">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:20</td>
                                    <td>Tüzelőanyagcella és hidrogéntechnológia kutatási és oktatásfejlesztési projektek a
                                        PTE MIK-en</td>
                                    <td>PTE MIK / Vér Csaba </td>
                                </tr>
                                <tr>
                                    <td>13:25 - 13:45</td>
                                    <td>Magyarország törekvései a hidrogéngazdaság irányába</td>
                                    <td>Pannon Egyetem / Szép Károly</td>
                                </tr>
                                <tr>
                                    <td>13:50 - 14:10</td>
                                    <td>Hidrogéntechnológiák szerepe a hazai villamosenergia szektorban</td>
                                    <td>MVM Kft. / Kubus Péter</td>
                                </tr>
                                <tr>
                                    <td>14:15 - 14:35</td>
                                    <td>Tüzelőanyagcellás termékek fejlesztése</td>
                                    <td>Kontakt-Elektro Kft. / Hirth Olivér</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="8. szekció" place="A007" sectionName="Építőipari munkabiztonság" leader="Bogos Csaba">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 13:30</td>
                                    <td>Megnyitó és köszöntők </td>
                                    <td>Bogos Csaba - Gazek®  Ügyvezető, tulajdonos  / Dr. Kondor Tamás PTE MIK dékán helyettes/ Koji László ÉVOSZ elnök/ Dr. Síkfői Tamás PBKIK elnök </td>
                                </tr>
                                <tr>
                                    <td>13:30 - 14:15</td>
                                    <td>Magasban végzett munka kockázatainak csökkentése a gyakorlatban</td>
                                    <td>Szalados László, KÉSZ Holding Zrt Műszaki vezérigazgató-helyettes</td>
                                </tr>
                                <tr>
                                    <td>14:15 - 15:00</td>
                                    <td>Virtuális munkavédelem</td>
                                    <td>PTE MIK BIM SKILL LAB / Dr. Zagorácz Márk Balázs, kutatásvezető</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="9. szekció" place="A201" sectionName="Média műhely - Vizuális trendek, VR, AR" leader="Dr. Kovács Éva">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>13:00 - 14:00</td>
                                    <td>A Virtuális Valóság és a Mesterséges Intelligencia aprópénzre váltása a mindennapokban</td>
                                    <td>Koscsó Média Engineering Kft. / Koscsó Ferenc</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 15:00</td>
                                    <td>Vizuális utómunka, 2D-3D kompozitálás</td>
                                    <td>Umbrella Kreatív Műhely / Veszely Dániel (TV FOKSZ alumni)</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="10. szekció" place="A204" sectionName="Betontechnológia 2." leader="Prof. Dr. Orbán József">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td></td>
                                    <td>Betontechnológia 2.</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>

                    <h1 class="has-text-left is-size-4 mb-6 ml-4  is-size-6-mobile">MIK PARTNERS - II. BLOKK - 15:30 - 17:30</h1>
                    <CollapsibleSection section="1. szekció" place="A010" sectionName="Alkalmazott informatika" leader="Dr. Várady Géza">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 16:00</td>
                                    <td>Az önvezető autók hajnala - A mobilitás jelene és jövője</td>
                                    <td>Continental / Dósa Patrik</td>
                                </tr>
                                <tr>
                                    <td>16:00 - 16:30</td>
                                    <td>Innovatív digitális HR-megoldások</td>
                                    <td>NEXON / Barna István és Purcsi János </td>
                                </tr>
                                <tr>
                                    <td>16:30 - 17:00</td>
                                    <td>Mesterséges intelligencia kutatás-fejlesztés a Robert Bosch Kft.-nél</td>
                                    <td>Robert Bosch Kft. / Dr. Molnár László Milán</td>
                                </tr>
                                <tr>
                                    <td>17:00 - 17:30</td>
                                    <td>3D nyomtatás, prototipizálás és szoftverfejlesztés az egészségügy szolgálatában</td>
                                    <td>PTE 3D Központ / Bene Mátyás Péter</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="2. szekció" place="A008" sectionName="Digitalizált építőipari értéklánc" leader="Dr. Zagorácz Márk Balázs">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:45</td>
                                    <td>BIM bevezetése a Market Építő Zrt.-nél</td>
                                    <td>Market Építő Zrt. / Grátzer Szabolcs</td>
                                </tr>
                                <tr>
                                    <td>15:45 - 16:00</td>
                                    <td>BIM a generáltervezésben</td>
                                    <td>Kreatív Magyar Mérnök Kft. / Repáruk András</td>
                                </tr>
                                <tr>
                                    <td>16:00 - 16:15</td>
                                    <td>BIM a közműépítésben</td>
                                    <td>BIMFRA Kft. / Földi Attila</td>
                                </tr>
                                <tr>
                                    <td>16:15 - 16:30</td>
                                    <td>BIM a létesítményüzemeltetésben</td>
                                    <td>Budapest Airport Zrt. / Bedő Gergely</td>
                                </tr>
                                <tr>
                                    <td>16:30 - 16:45</td>
                                    <td>BIM kitekintés</td>
                                    <td>7D Tender Kft. / Dr. Czira Szabolcs</td>
                                </tr>
                                <tr>
                                    <td>16:45 - 17:00</td>
                                    <td>BIM menedzsment</td>
                                    <td>BIMPROVE Kft. / Máder Patrik Márk</td>
                                </tr>
                                <tr>
                                    <td>17:00 - 17:15</td>
                                    <td>BIM oktatás</td>
                                    <td>PTE MIK BIM SKILLS Kutatócsoport / Dr. Rák Olivér</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="3. szekció" place="E81" sectionName="Carbon-semleges építészet felé" leader="Dr. Kistelegdi István / Dr. Kondor Tamás">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:50</td>
                                    <td>Transzparenciától a körkörösségig</td>
                                    <td>Reith András Dr. - ABUD Kft. </td>
                                </tr>
                                <tr>
                                    <td>15:50 - 16:10</td>
                                    <td>GREENOLOGY</td>
                                    <td>Dr. Boros Anita / Huszár Barbara Eszter - Zöldinnovációs Fenntarthatósági Tudásközpont</td>
                                </tr>
                                <tr>
                                    <td>16:10 - 16:30</td>
                                    <td>GENERON - Energiatetők</td>
                                    <td>Terrán - Jankó Árpád / Takaró Gábor</td>
                                </tr>
                                <tr>
                                    <td>16:30-16:50</td>
                                    <td>Numerikus áramlástani és dinamikus, termikus szimulációval tervezett prototipikus épületek</td>
                                    <td>Prof. Dr. Kistelegdi István</td>
                                </tr>
                                <tr>
                                    <td>16:50 - 17:10</td>
                                    <td>CLEAN TECHNOLOGIES - Zöld úton a cementgyártás</td>
                                    <td>LAFARGE / Zadravecz Zsófia</td>
                                </tr>
                                <tr>
                                    <td>17:10-17:30</td>
                                    <td>Energiatermelő homlokzatok</td>
                                    <td>KÉSZ Csoport - Metaltech Kft. / Figeczki Péter</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="4. szekció" place="A302" sectionName="SUSTAINABILITY PRINCIPLES IN CIVIL ENGINEERING" leader="Dr. Zoltán Orbán">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:50</td>
                                    <td>Civil engineering research and education for sustainable development</td>
                                    <td>Zoltan Orban, Andras Dormany (UP FEIT)</td>
                                </tr>
                                <tr>
                                    <td>15:50 - 16:10 </td>
                                    <td>International Engineering Project</td>
                                    <td>Marcus Juby (UP FEIT), Zsuzsa Balogh (MSU Denver, US)</td>
                                </tr>
                                <tr>
                                    <td>16:10 - 16:30</td>
                                    <td>Sustainable Structural Solutions for Adaptable Living Spaces</td>
                                    <td>Agnes Borsos (UP FEIT) Jeno Balogh (MSU Denver, US)</td>
                                </tr>
                                <tr>
                                    <td>16:30 - 16:50</td>
                                    <td>Sustainable construction in practice</td>
                                    <td>Adrienn Tomor (Brunel University London, UK)</td>
                                </tr>
                                <tr>
                                    <td>16:50 - 17:10</td>
                                    <td>Does the earthquake resistance contributes to overall sustainability of buildings</td>
                                    <td>Ivica Guljas (University of Osijek, CRO)</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="5. szekció" place="A017" sectionName="Alternatív tüzelőanyagok" leader="Dr. Kiss Tibor">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:50</td>
                                    <td>Alternatív tüzelőanyagok - tüzelőanyag előkészítés vagy füstgáz kezelés?</td>
                                    <td>FKF Zrt. / PTE MIK / Dr. Kiss Tibor</td>
                                </tr>
                                <tr>
                                    <td>15:55 - 16:15</td>
                                    <td>Települési szilárd hulladékból tüzelőanyag előállítása</td>
                                    <td>Dél-Kom Kft. / PTE MIK / Dr. Leitol Csaba</td>
                                </tr>
                                <tr>
                                    <td>16:20 - 16:40</td>
                                    <td>"Hulladékból konnektorba"  avagy az energetikai hulladékhasznosítás szerepe a városok energiaellátásában</td>
                                    <td>MVM Zrt. / Molnár Szabolcs</td>
                                </tr>
                                <tr>
                                    <td>16:45 - 17:05</td>
                                    <td>Ko-fermentációs biogáz technológia üzemeltetésének nyomon követése dehidrogenáz enzimaktivitás vizsgálattal a TETTYE FORRÁSHÁZ Zrt. biogáz üzemében</td>
                                    <td>Tettye Forrásház Zrt. / Ambrusits Balázs, Kósa Dániel</td>
                                </tr>
                                <tr>
                                    <td>17:10 - 17:30</td>
                                    <td>Energetikai célú dendromassza előállítása, forrásai</td>
                                    <td>Hepik Bt. / PTE MIK / Dr. Ivelics Ramón</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="6. szekció" place="A019" sectionName="Innovatív fejlesztések a gépgyártásban" leader="Zsebe Tamás">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:50</td>
                                    <td>Gyártástervezés a sorozatgyártásban</td>
                                    <td>MATRO KFT. / Samu Attila</td>
                                </tr>
                                <tr>
                                    <td>15:50 - 16:10</td>
                                    <td>Kompozit építésű könnyűrepülőgép tervezésének és tanúsításának kihívásai</td>
                                    <td>MAGNUS AIRCRAFT / Dr. Gáti Balázs </td>
                                </tr>
                                <tr>
                                    <td>16:10 - 16:30</td>
                                    <td>A Zalaegerszegi Járműipari Tesztpálya bemutatása</td>
                                    <td>Autóipari Próbapálya Zala Kft./ Bognár Szilárd </td>
                                </tr>
                                <tr>
                                    <td>16:30 - 16:50</td>
                                    <td>Autonóm mezőgazdasági jármű, illetve autonóm munkagép fejlesztésének lehetőségei</td>
                                    <td>TOMELILA KFT. / Dr. Borsiczky István</td>
                                </tr>
                                <tr>
                                    <td>16:50 - 17:10</td>
                                    <td>Hajótervezés és építés magyaroszágon</td>
                                    <td>PTE MIK / Csonka Dávid Ciprián</td>
                                </tr>
                                <tr>
                                    <td>17:10 - 17:30</td>
                                    <td>Méréstechnikai eszközök a minőségirányításban</td>
                                    <td>Z Elektronika Kft. / Ulrich Gyula</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="7. szekció" place="A015" sectionName="Energiatudatos épületgépészet" leader="Eördöghné Dr. Miklós Mária">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:45</td>
                                    <td>Energiatakarékos szellőztetés</td>
                                    <td>HELIOS / Kovács István</td>
                                </tr>
                                <tr>
                                    <td>15:45 - 16:00</td>
                                    <td>Intelligens szellőző rendszerek szerepe az épületenergetikában</td>
                                    <td>Aereco Légtechnika Kft. / Király Tamás</td>
                                </tr>
                                <tr>
                                    <td>16:00 - 16:15</td>
                                    <td>Igénykövető lakásszellőztetés hővisszanyerővel</td>
                                    <td>DRGB Kft. / Adonyi Péter</td>
                                </tr>
                                <tr>
                                    <td>16:15 - 16:30</td>
                                    <td>Korszerű víztisztítás az uszodatechnológiában</td>
                                    <td>MECSEKTERV Kft. / Eördögh Zsolt</td>
                                </tr>
                                <tr>
                                    <td>16:30 - 16:45</td>
                                    <td>Ivóvízhigiénia- és biztonság a házbelépéstől a csapolóig</td>
                                    <td>REHAU / Lászlófi András Béla</td>
                                </tr>
                                <tr>
                                    <td>16:45 - 17:00</td>
                                    <td>A víz fontossága az épületgépészetben</td>
                                    <td>UPONOR / Behul Dávid</td>
                                </tr>
                                <tr>
                                    <td>17:00 - 17:15 </td>
                                    <td>Szennyvízhálózatok hidraulikája</td>
                                    <td>GEBERIT / Mészáros Sándor</td>
                                </tr>
                                <tr>
                                    <td>17:15 - 17:30</td>
                                    <td>Higiénia- és energiatudatos vízellátó rendszerek jogi, szabályozási háttere és műszaki megoldásai</td>
                                    <td>VIEGA / Nagy Zoltán </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Termikus mérőbábu a PTE MIK kutatási portfóliójában - mérőeszköz bemutató</td>
                                    <td>MIK / Cakó Balázs, Loch Gábor</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="8. szekció" place="A202" sectionName="Energiatárolás és hidrogéntechnológiák" leader="Dr. Kvasznicza Zoltán">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 16:00</td>
                                    <td>Electrix energiatároló létesítése -
                                        Az energiatároló bemutatása</td>
                                    <td>E.ON Zrt. / Kiss-Pataki Anna</td>
                                </tr>
                                <tr>
                                    <td>16:00 - 16:30</td>
                                    <td>Electrix energiatároló létesítése - EMS - Energiamenedzsment rendszer</td>
                                    <td>E.ON Zrt. / Varga Viktória</td>
                                </tr>
                                <tr>
                                    <td>16:30 - 17:00</td>
                                    <td>Electrix energiatároló létesítése - DLC - Direct load Control System / Fogyasztó oldali befolyásoló rendszer</td>
                                    <td>E.ON Zrt. /Papp Péter</td>
                                </tr>
                                <tr>
                                    <td>17:00 - 17:30</td>
                                    <td>Electrix energiatároló létesítése - Az energiatároló közcélú hálózatra kapcsolása</td>
                                    <td>E.ON Zrt. / Simon Csongor</td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="9. szekció" place="A007" sectionName="Épületipari munkabiztonság" leader="Bogos Csaba">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td>15:30 - 15:45</td>
                                    <td>Munkavédelmi szakmérnök képzés bemutatása</td>
                                    <td>Dr. Füredi Balázs, Okleveles építész,mb. tanszékvezető, adjunktus PTE MIK</td>
                                </tr>
                                <tr>
                                    <td>15:45 - 16:30</td>
                                    <td>Állványok, zsaluzatok és azok munkabiztonsági kérdései</td>
                                    <td>Bertalan Károly  projekt menedzser / Kenessey Márk értékesítő mérnök - PERI Kft. </td>
                                </tr>
                                <tr>
                                    <td>16:30 - 17:15</td>
                                    <td>Zuhanásbiztonsági pályarendszerek </td>
                                    <td>Meiszterics Gábor, GAZEK® Operatív igazgató </td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>
                    <CollapsibleSection section="10. szekció" place="A204" sectionName="Betontechnológia 2." leader="Prof. Dr. Orbán József">
                        <div class="content">
                            <table class="table has-text-left is-size-7-mobile">
                                <tr>
                                    <td></td>
                                    <td>Betontechnológia 2.</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </CollapsibleSection>





                    <div class="has-text-centered mt-6">
                        <img src="/~web/images/main_mik51.PNG" alt="MIK 51 logo" width="376" height="203">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .maincontainer {
        background-color: #ffffff;
        padding: 30px;
        min-height: 90vh;
    }

    @media only screen and (max-width: 350px) {

        .mobilwidth {
            min-width: 98vw;
        }
    }

    p {
        margin: 0 20px 16px 20px;
    }


    @media screen and (min-width: 600px) {
        .maincontainer {
            border-radius: 20px;
        }
    }

    @media screen and (max-width: 599px) {
        .maincontainer {
            border-radius: 0px;
        }
    }

</style>