<?php get_header() ?>

    <section class="center-section text-center d-sm-none d-block">
        <div class="center-section-wrapper center-section mx-auto py-5 px-4">
            <h1 class="text-uppercase">InDaHouse Hungary</h1>
            <h6 class="text-uppercase text-secondary">Önkéntes munkával a Borsodban élő gyerekek egyenlő esélyeiért</h6>
            <div>
                Az InDaHouse Hungary Egyesület önkéntesei borsodi falvakban élő,
                hátrányos helyzetű gyerekeknek tartanak egyéni és csoportos fejlesztő
                foglalkozásokat heti rendszerességgel. Célunk, hogy a hozzánk járó
                gyerekek önmegvalósító, felelős, a saját sorsukat irányító felnőttekké
                váljanak, akik a tőlünk kapott támogatást be tudják építeni a gyermekeik nevelésébe.
            </div>
            <div class="mt-3 d-block">
                <div class="row m-0 p-0">
                    <div class="col-4 p-1"><a href="<?= get_option('btn_about_us', '') ?>" class="btn btn-primary btn-sm rounded-xl" style="width: 100%">Rólunk</a></div>
                    <div class="col-4 p-1"><a href="<?= get_option('btn_join', '') ?>" class="btn btn-primary btn-sm rounded-xl" style="width: 100%">Csatlakozom</a></div>
                    <div class="col-4 p-1"><a href="<?= get_option('btn_support', '') ?>" class="btn btn-primary btn-sm rounded-xl" style="width: 100%">Támogatom</a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-jarallax data-img-position="50% 65%" class="heading-section d-flex align-items-center bg-1">
        <div class="heading-section-wrapper center-section mx-auto d-none d-sm-block">
            <div class="card rounded-lg">
                <div class="card-body">
                    <h1 class="text-uppercase">InDaHouse Hungary</h1>
                    <h6 class="text-uppercase text-secondary">Önkéntes munkával a Borsodban élő gyerekek egyenlő esélyeiért</h6>
                    <div>
                        Az InDaHouse Hungary Egyesület önkéntesei borsodi falvakban élő,
                        hátrányos helyzetű gyerekeknek tartanak egyéni és csoportos fejlesztő
                        foglalkozásokat heti rendszerességgel. Célunk, hogy a hozzánk járó
                        gyerekek önmegvalósító, felelős, a saját sorsukat irányító felnőttekké
                        váljanak, akik a tőlünk kapott támogatást be tudják építeni a gyermekeik nevelésébe.
                    </div>
                    <div class="mt-3">
                        <div class="row m-0 p-0">
                            <div class="col-sm-4"><a href="<?= get_option('btn_about_us', '') ?>" class="btn btn-primary rounded-xl" style="width: 100%">Rólunk</a></div>
                            <div class="col-sm-4"><a href="<?= get_option('btn_join', '') ?>" class="btn btn-primary rounded-xl" style="width: 100%">Csatlakozom</a></div>
                            <div class="col-sm-4"><a href="<?= get_option('btn_support', '') ?>" class="btn btn-primary rounded-xl" style="width: 100%">Támogatom</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="candidate-section text-center pt-5" id="onkentesseg">
        <div class="candidate-section-wrapper center-section mx-auto">
            <h2 class="text-uppercase m-0 p-1">Légy InDaHouse önkéntes!</h2>

            <div class="row p-0 m-0">
                <div class="col-lg-3 col-sm-6 text-center py-sm-5 py-3 mt-sm-0 mt-3">
                    <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/candidate-study-hall.svg" class="mb-3" />
                    <h5 class="text-uppercase text-secondary">Tanodázz a gyerekekkel</h5>
                    <p class="text-secondary p-3 p-md-0 py-md-1">Hetente tartunk személyre szabott iskola előkészítő és készségfejlesztő foglalkozásokat 6 -16 éves gyerekeknek, akik számára felbecsülhetetlen az a koncentrált figyelem és bátorítás,amit a tanodai önkénteseinktől kapnak. A törtek osztása csak ráadás :)</p>
                    <a href="<?= get_option('btn_join_us_study_hall', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Többet akarok tudni</a>
                </div>
                <div class="col-lg-3 col-sm-6 text-center py-sm-5 py-3 mt-sm-0 mt-3">
                    <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/candidate-early-childhood.svg" class="mb-3" />
                    <h5 class="text-uppercase text-secondary">Fejleszd a legkisebbeket</h5>
                    <p class="text-secondary p-3 p-md-0 py-md-1">A fejlesztést nem lehet elég korán kezdeni, mert a hátrányok is az első naptól kezdve halmozódnak. A koragyerekkoris önkénteseink házról házra járnak, hogy az 6 évesnél fiatalabb gyerekekkel játékosan tanulják a színeket, formákat, és a számokat.</p>
                    <a href="<?= get_option('btn_join_us_early_childhood', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Többet akarok tudni</a>
                </div>
                <div class="col-lg-3 col-sm-6  text-center py-sm-5 py-3 mt-sm-0 mt-3">
                    <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/candidate-mentor.svg" class="mb-3" />
                    <h5 class="text-uppercase text-secondary">Legyél mentor</h5>
                    <p class="text-secondary p-3 p-md-0 py-md-1">Az InDaHouse-os gyerek mindig számíthat a mentorára, aki figyelemmel kíséri tanodai és iskolai előrehaladását, kapcsolatot tart a feladatlap készítővel, az iskolával, a családdal. És ami a legfontosabb, odafigyel a gyerek testi-lelki-szellemi fejlődésére.</p>
                    <a href="<?= get_option('btn_join_us_mentor', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Többet akarok tudni</a>
                </div>
                <div class="col-lg-3 col-sm-6  text-center py-sm-5 py-3 mt-sm-0 mt-3">
                    <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/candidate-worksheet.svg" class="mb-3" />
                    <h5 class="text-uppercase text-secondary">Készíts feladatlapokat</h5>
                    <p class="text-secondary p-3 p-md-0 py-md-1">A feladatlap készítő önkénteseink gondoskodnak arról, hogy az InDaHouse-os gyerekek hétről-hétre személyre szabott feladatlapokon keresztül gyakorolhassák azt, ami nehezen megy az iskolában. Mottó: Messivel a matek is könnyebben megy!</p>
                    <a href="<?= get_option('btn_join_us_worksheet', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Többet akarok tudni</a>
                </div>
            </div>
            <div class="text-center">
                <hr class="bg-secondary border-0 mb-5" style="width: 65px; height: 2px;" />
                <h5 class="text-uppercase text-secondary">...Vagy segíts online bárhonnan!</h5>
                <div class="row p-0 m-0">
                    <div class="col"></div>
                    <div class="col-md-6 text-secondary">
                        <p class="p-3 p-md-0 py-md-1">Külföldön élsz, vagy nem tudod egy egész hétvégére otthon hagyni a családod? Tarts foglalkozást Skype-on keresztül!</p>
                        <a href="<?= get_option('btn_join_us_online', '') ?>" class="btn btn-outline-primary rounded-xl btn-sm">Hogy működik?</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="volunteer-section bg-gradient text-center mt-5" id="csapatunk">
        <div class="volunteer-section-wrapper center-section mx-auto py-5">
            <h2 class="text-uppercase m-0 p-1">Ismerj meg minket</h2>

            <div class="owl-carousel volunteer-carousel owl-theme mt-5">
                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/benkofruzsi.jpg?1);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Benkő Fruzsi</h4>
                    <div class="text-uppercase small text-muted">alapító, az egyesület elnöke</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2004 óta dolgozom hátrányos helyzetű gyerekekkel különböző intézményekben. 2014-ben megalapítottam az InDaHouse-t, mert szerettem volna egy olyan programot, ami valóban segít a gyerekeknek.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/csabaviki.jpg?1);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Csaba Viki</h4>
                    <div class="text-uppercase small text-muted">operatív munkatárs</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Végzettségem szerint vegyészmérnök vagyok, 10 évig dolgoztam vegyipari vállalatoknál, majd két évvel ezelőtt az InDaHouse önkéntese lettem, amely alapjában változtatta meg az életem.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/tillmannkinga.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Tillmann Kinga</h4>
                    <div class="text-uppercase small text-muted">szakmai munkatárs</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Hiszem azt, hogy minden gyermeket egyenlő esélyek illetnek meg. Így 2016 őszétől csatlakoztam az InDaHouse koragyerekkori csapatához, ahol szívvel lélekkel foglalkozunk a legkisebbekkel.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/nemethdetti.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Németh Detti</h4>
                    <div class="text-uppercase small text-muted">iskolaelőkészítő koordinátor</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Mindig is nagyon szerettem gyerekekkel foglalkozni. Egy éve léptem be az InDaHouse kapuin önkéntesként, hogy pedagógusi végzettségeimnek köszönhetően szakmai tudásommal is segíthessem a gyerekeket.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/kondorzsuzsi.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Kondor Zsuzsi</h4>
                    <div class="text-uppercase small text-muted">csoportos játék koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Szociális munkát és szociálpolitikát végeztem. Most társadalomkutatóként dolgozom. Leginkább a fogyatékos emberek élethelyzetét, lakhatási és egyéb segítő szolgáltatásait kutatom. 2014 óta vagyok az InDaHouse önkéntese.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/polgarzoli.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Polgár Zoli</h4>
                    <div class="text-uppercase small text-muted">webes koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2017 ősze óta vagyok InDaHouse önkéntes. A koragyerekkori önkéntesség mellett én fejlesztem az InDaHouse belső felületét, és weboldalát. Civilként a PORT.hu, és a blog.hu vezető fejlesztője vagyok.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/komaromitamas.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Komáromi Tamás</h4>
                    <div class="text-uppercase small text-muted">túrakör koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2017 januárja óta játszom, tanulok, táborozok, túrázok a gyerekekkel. Korábban multinál dolgoztam
                            tréning vezetőként, azóta átálltam a civil oldalra. A gyerkőcök és én is sokat fejlődtünk együtt :)
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/frankviktor.jpg?1);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Frank Viktor</h4>
                    <div class="text-uppercase small text-muted">önkéntes-koordinátor</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            A tanítás és a társadalmi felelősségvállalás kombinációja vonzott be az InDaHouse-ba. A jó társaság és a sok jó élmény, ami benntart a szervezetben. Önkénteskoordinátorként elsősorban az új jelentkezőkkel foglalkozom.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/juhaszaliz.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Juhász Alíz</h4>
                    <div class="text-uppercase small text-muted">szakmai koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2018 októberében csatlakoztam az InDaHouse-hoz mint szakmai koordinátor, hogy a nagyvállalati környezetben szerzett koordinációs és csapatvezetői tapasztalatommal támogassak egy olyan szervezetet amely gyerekek segítését tűzte ki célul.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/marlokdori.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Marlok Dóri</h4>
                    <div class="text-uppercase small text-muted">önkéntes-koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2015 óta vagyok InDaHouse önkéntes. Sok háttérmunkát is végzek a szervezetben, de minden feladatom közül a legfontosabbnak  gyerekekkel való foglalkozást tartom.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/hejjasdora.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Héjjas Dóra</h4>
                    <div class="text-uppercase small text-muted">pénzügyi koordinátor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Gazdasági területről csöppentem az InDaHouse csapatába 2018. tavaszán. Egyből éreztem, hogy itt valami tényleg JÓ történik, és ennek a jónak részese szeretnék lenni. Elsősorban mentorként és tanodai önkéntesként támogatom a szervezetet, melynek küldetése mára szívügyemmé vált.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/feketedorottya.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Fekete Dorottya</h4>
                    <div class="text-uppercase small text-muted">feladatlapos patrónus</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            A tesóm tőlem tanult írni és számolni és nekem köszönhetően ismeri az összes egyiptomi istent.
                            Végül nem lettem pedagógus, de az InDaHouse segítségével idén már a harmadik tanévben csinálok
                            személyre szabott feladatlapokat két tündéri gyerkőcnek.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/vagyasreka.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Vagyas Réka</h4>
                    <div class="text-uppercase small text-muted">Skype-os patrónus</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Tavaly csatlakoztam az InDaHousehoz, mint Skype önkéntes. Az egyetem mellett szerettem volna
                            hasznosan eltölteni a szabadidőmet, de sajnos nincs lehetőségem elutazni a gyerekekhez, ezért
                            választottam ezt a felületet.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/juhaszreka.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Juhász Réka</h4>
                    <div class="text-uppercase small text-muted">szenior önkéntes, mentor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            18 éves korom óta önkénteskedem az IDH-ban, ez idő alatt nagyon sokat tanultam a gyerekektől és
                            az önkéntestársaimtól. Nem csak a tanodásokat bíztatom a komfortzónájukból való kilépésre, hanem
                            én is igyekszem ezt tenni minden hétvégén.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/ungeralexa.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Unger Alexa</h4>
                    <div class="text-uppercase small text-muted">feladatlapos patrónus</div>
                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2013-ban végeztem az ELTE-n pedagógia szakos bölcsészként. Bár végül nem ezt a területet választottam hivatásomnak, mégis imádom a gyerekeket és a tanítást. Az IDH remek hely arra, hogy szabadidőmben segíthessek nekik fejlődni úgy, hogy én magam is töltődöm, így mindenki nyer :)
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/szemanlivia.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Szemán Lívia</h4>
                    <div class="text-uppercase small text-muted">feladatlapos patrónus</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Feladatlapíró önkéntesként csatlakoztam az InDaHouse csapatához 2019 januárjában, mert pedagógusként hiszek
                            abban, hogy személyre szabott oktatással lehet igazán nagy sikereket elérni.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/eszenyizsofi.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Eszenyi Zsófi</h4>
                    <div class="text-uppercase small text-muted">utazó önkéntes</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            2017-ben csatlakoztam az InDaHouse-hoz, mert szerettem volna valami társadalmilag hasznosat csinálni. De ennél sokkal többet kapok a programtól: a határaimat átlépve jobban megismerem önmagam, jobb ember leszek a cuki gyerekek és a szuper önkéntesek elfogadó közegében.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/donkoanna.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Donkó Anna</h4>
                    <div class="text-uppercase small text-muted">feladatlapos patronóus</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Másfél éve csatlakoztam az InDaHousehoz, miután az ELTE egyik rendezvényén találkoztam velük és lenyűgözött a tenni akarásuk. Feladatlapokat készítek a gyerekeknek, ami hétről hétre új kihívás elé állít. Az idei tanévtől patrónusként is részt veszek a munkában.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="rounded-circle mx-auto volunteer-profile-img" style="background-image: url(<?= get_bloginfo('template_directory') ?>/images/volunteers/gulyavaleria.jpg);"></div>
                    <h4 class="text-uppercase text-secondary my-1 pt-3">Gulya Valéria</h4>
                    <div class="text-uppercase small text-muted">mentor</div>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-md-10">
                            Nyugdíjas vagyok, korábban az igazságszolgáltatásban dolgoztam. Azért csatlakoztam az InDaHouse-hoz, mert nem tudom tétlenül nézni, hogy gyerekek nagy csoportja él úgy, hogy az elfogadható életre előreláthatóan már most nincs reális esélye, s erről a gyerek sohasem tehet.
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

            </div>
        </div>

    <div class="center-section mx-auto pb-5 text-left">
        <div class="birthday-promo">
            <div class="p-4">
                <h2 class="text-uppercase pb-0 mb-1">Önzetlen szülinaposok</h2>
                <h3 class="text-uppercase pt-0 mt-0">Ajándék helyett gyűjts nekünk!</h3>
                <p class="my-3">
                    <strong>
                        Olyan ajándékot szeretnél kérni a barátaidtól, aminek biztosan örülnél?
                    </strong>
                </p>

                <p class="my-3 d-none d-md-block">
                    Születésnapod alkalmából kérj jótékonykodást! Mozgósítsd a barátaidat, kérd meg őket, hogy szülinapi ajándék helyett támogassák az InDaHouse önkénteseinek munkáját, akik minden hétvégén szegénységben élő, borsodi gyerekeknek tartanak fejlesztő foglalkozásokat.
                </p>

                <div class="d-none d-md-block">
                    <a class="btn btn-primary rounded-xl px-3 mr-2 btn-sm" href="<?= get_permalink(726) ?>">Ilyen ajándékot kérek</a>
                    <a class="rounded-xl btn btn-white px-3 btn-sm" href="<?= get_permalink(718) ?>">Kinek van szülinapja?</a>
                </div>
                <div class="d-block d-md-none">
                    <div class="mb-2"><a class="btn btn-primary rounded-xl px-3 mr-2" href="<?= get_permalink(726) ?>">Ilyen ajándékot kérek</a></div>
                    <div><a class="rounded-xl btn btn-white px-3" href="<?= get_permalink(718) ?>">Kinek van szülinapja?</a></div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <section data-jarallax class="heading-section d-flex align-items-center bg-2">
        <div class="heading-section-wrapper center-section mx-auto">

        </div>
    </section>

    <section class="support-section text-center" id="tamogatas">
        <div class="support-section-wrapper center-section mx-auto pt-5 pb-2">
            <h2 class="text-uppercase m-0 p-1">Támogass minket és segíts a gyerekeknek</h2>

            <div class="row p-0 m-0 mt-8">
                <div class="col-md-3">
                    <div class="card px-3 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
                        <div class="support-icon justify-content-center mx-auto d-flex bg-primary rounded-circle">
                            <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/support-partner.svg" width="120">
                        </div>
                        <h5 class="text-uppercase text-secondary m-0 mt-4">Cégeknek</h5>
                        <div class="py-1 text-secondary text-center">
                            <p class="py-3 m-0">A hátrányokkal küzdő gyerekek helyzetének javítása hosszú folyamat. Mi ehhez adjuk az elköteleződésünket, de stabil anyagi háttérre van szükségünk, amit az ad hoc pályázatok nem biztosítanak. Ezért olyan cégeket és magánszemélyeket keresünk, akik nyitottak az akár éveken át tartó támogatásra, együttműködésre.</p>
                            <a href="<?= get_option('btn_support_us_partner', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Többet akarok tudni</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card px-3 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
                        <div class="support-icon justify-content-center mx-auto d-flex bg-primary rounded-circle">
                            <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/support-money.svg">
                        </div>
                        <h5 class="text-uppercase text-secondary m-0 mt-4">Anyagi támogatás</h5>
                        <div class="py-1 text-secondary text-center">
                            <p class="py-3 m-0">Egy InDahouse-os hétvégén 12 önkéntes 110 gyereknek tart személyre szabott fejlesztő foglalkozásokat Hernádszentandráson és környékén. Az InDaHouse havi működési költsége másfél millió forint, amit adományokból tudunk előteremteni. A gyerekek jövője közös felelősségünk, ehhez kérjük a segítségedet.</p>
                            <a href="<?= get_option('btn_support_us_money', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Ezzel tudok segíteni</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card px-3 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
                        <div class="support-icon justify-content-center mx-auto d-flex bg-primary rounded-circle">
                            <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/support-fund.svg">
                        </div>
                        <h5 class="text-uppercase text-secondary m-0 mt-4">Tárgyi adományok</h5>
                        <div class="py-1 text-secondary text-center">
                            <p class="py-3 m-0">Célunk a gyerekek oktatása, ezt tekintjük a társadalmi problémák megoldásának, ezért a foglalkozásainkhoz szükséges fejlesztő eszközök kivételével adományokat csak meghatározott esetekben fogadunk: tavasszal és ősszel ruhákat, augusztusban tanszereket, decemberben karácsonyi ajándékokat.</p>
                            <a href="<?= get_option('btn_support_us_fund', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Aktuális gyűjtéseink</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card px-3 py-5 mx-3 mx-md-0">
                        <div class="support-icon justify-content-center mx-auto d-flex bg-primary rounded-circle">
                            <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/support-hero.svg">
                        </div>
                        <h5 class="text-uppercase text-secondary m-0 mt-4">Gyűjts nekünk</h5>
                        <div class="py-1 text-secondary text-center">
                            <p class="py-3 m-0">Az éves költségvetésünk 25 millió forint, előteremtéséhez különleges ötletekre és megoldásokra is szükségünk van. Az InDaFundraiser-ek olyan tettre kész, kreatív, elkötelezett önkéntesek, akiknek fontos az InDaHouse ügye és fenntarthatósága, ezért adománygyűjtő kampányokat valósítanak meg.</p>
                            <a href="<?= get_option('btn_support_us_hero', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Csatlakozom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="construction-section bg-gradient text-center mt-5" id="kozpont">
        <div class="construction-section-wrapper center-section mx-auto py-5 px-4">
            <h2 class="text-uppercase m-0 p-1 text-secondary">Minden mosolynak kell egy hely</h2>
            <p class="pt-3 m-0">A gyerekek iránti elköteleződésünket bizonyítja, hogy saját házat építettünk a programunk számára. Közel 20 hónapon át készült az InDaHouse Önkéntes- és Gyerekközpont Hernádszentandráson 600 önkéntes keze által, több, mint 1200 magánszemély és 20 vállalat adományaiból. A földszint helyiségeiben kapnak helyet a gyerekfoglalkozások, a tetőtérben pedig az önkéntesszállás.</p>
            <p class="py-3 m-0">A házunkban, és a kertünkben mindig szivesen látjuk a csapatépítésre érkező vállalatokat.</p>
            <div>
                <a href="mailto:benko.fruzsina@indahousehungary.hu" class="btn btn-primary mr-2 rounded-xl btn-sm">Kapcsolatfelvétel</a>
            </div>
            <div class="text-left mt-4">
                <h5 class="text-uppercase text-secondary">Nézd meg hogy épült</h5>
                <div class="owl-carousel construction-carousel owl-theme construction-gallery" style="width: 100%">
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/000.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/000.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/010.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/010.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/020.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/020.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/030.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/030.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/040.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/040.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/050.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/050.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/060.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/060.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/070.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/070.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/080.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/080.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/090.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/090.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/100.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/100.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/110.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/110.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/120.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/120.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/130.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/130.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/140.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/140.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/150.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/150.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/160.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/160.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/170.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/170.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/180.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/180.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/190.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/190.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/200.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/200.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/210.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/210.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/220.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/220.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/230.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/230.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/240.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/240.jpg" />
                        </a>
                    </div>
                    <div>
                        <a href="<?= get_bloginfo('template_directory') ?>/images/construction/250.jpg" data-lightbox="construction">
                            <img src="<?= get_bloginfo('template_directory') ?>/images/construction/thumbnails/250.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="partners-section-wrapper center-section mx-auto pt-5 pb-2 px-4 text-center">
            <h2 class="text-uppercase m-0 mb-4">Támogatóink</h2>
            <div class="text-center">
                <a href="https://www.allianz.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/allianz.svg" alt="Allianz" />
                </a>

                <a href="http://www.bachl.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/bachl.svg" alt="Bachl" />
                </a>

                <a href="http://colt-info.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/colt.svg" alt="Colt" />
                </a>

                <a href="http://erstebank.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/erste.svg" alt="Erste" />
                </a>

                <a href="https://drkovacsbalazs.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/kbl.svg" alt="KBL" />
                </a>

                <a href="https://fundamenta.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/fundamenta.svg" alt="Fundamenta" />
                </a>

                <a href="https://kpmg.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/kpmg.svg" alt="KPMG" />
                </a>

                <a href="https://ledlampahaz.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/ledlampahaz.svg" alt="Ledlamaphaz" />
                </a>

                <a href="https://www.liferay.com/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/liferay.svg" alt="Liferay" />
                </a>

                <a href="https://marktsoft.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/marktsoft.svg" alt="Marktsoft" />
                </a>

                <a href="https://www.meva.net/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/meva.svg" alt="Meva" />
                </a>

                <a href="http://www.murexin.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/murexin.svg" alt="Murexin" />
                </a>

                <a href="https://www.prefa.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/prefa.svg" alt="Prefa" />
                </a>

                <a href="https://specsolutions.eu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/specsolution.png" alt="Specsolutions" />
                </a>

                <a href="https://www.stavmat.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/stavmat.svg" alt="Stavmat" />
                </a>

                <a href="https://www.velux.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/velux.svg" alt="Velux" />
                </a>

                <a href="https://www.wienerberger.hu/" target="_blank" class="mx-2 mb-2 d-inline-block">
                    <img src="<?= get_bloginfo('template_directory') ?>/images/partners/wienerberger.svg" alt="Wienerberger" />
                </a>
            </div>
        </div>
    </section>

    <section class="quotes-section bg-gradient text-center mt-5">
        <div class="quotes-section-wrapper center-section mx-auto py-5">
            <h2 class="text-uppercase m-0 p-1">Gyerekszáj</h2>

            <div class="owl-carousel quotes-carousel owl-theme mt-5">
                <div class="text-center">
                    <h5 class="text-uppercase text-secondary">Az InDaHouse nekem...</h5>
                    <div class="text-secondary quote pb-3">
                        ... boldogság
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-uppercase text-secondary">Az InDaHouse-ban az a jó, hogy...</h5>
                    <div class="text-secondary quote pb-3">
                        ... kedvesek, és jól végzik a dolgukat
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-uppercase text-secondary">Az InDaHouse-ban az a rossz, hogy...</h5>
                    <div class="text-secondary quote pb-3">
                        ... nincs rossz
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-uppercase text-secondary">Az InDaHouse-ban az a rossz, hogy...</h5>
                    <div class="text-secondary quote pb-3">
                        ... mindig játszunk és le kell ülni a földre és elzsibbadok
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-uppercase text-secondary">Az InDaHouse-ban az a jó, hogy...</h5>
                    <div class="text-secondary quote pb-3">
                        ... segítséget nyújtanak nekem
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>
