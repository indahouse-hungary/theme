<section class="support-section text-center">
    <div class="support-section-wrapper center-section mx-auto py-5 pb-2">
        <h2 class="text-uppercase m-0 p-1">Támogass minket és segíts a gyerekeknek</h2>

        <div class="row p-0 m-0 mt-8">
            <?php if (home_url($wp->request) != get_option('btn_support_us_partner', '')): ?>
                <div class="col-md-4">
                    <div class="card px-4 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
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
            <?php endif ?>

            <?php if (home_url($wp->request) != get_option('btn_support_us_money', '')): ?>
                <div class="col-md-4">
                    <div class="card px-4 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
                        <div class="support-icon justify-content-center mx-auto d-flex bg-primary rounded-circle">
                            <embed src="<?= get_bloginfo('template_directory') ?>/assets/svg/support-money.svg">
                        </div>
                        <h5 class="text-uppercase text-secondary m-0 mt-4">Anyagi támogatás</h5>
                        <div class="py-1 text-secondary text-center">
                            <p class="py-3 m-0">Egy InDahouse-os hétvégén 10 önkéntes 100 gyereknek tart személyre szabott fejlesztő foglalkozásokat Hernádszentandráson és környékén. Egy hétvége költsége 103 000 Ft (utazás, rezsi, eszközök), amit adományokból tudunk előteremteni. A gyerekek jövője közös felelősségünk, ehhez kérjük a segítségedet.</p>
                            <a href="<?= get_option('btn_support_us_money', '') ?>" class="btn btn-primary rounded-xl btn-sm px-3">Ezzel tudok segíteni</a>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if (home_url($wp->request) != get_option('btn_support_us_fund', '')): ?>
                <div class="col-md-4">
                    <div class="card px-4 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
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
            <?php endif ?>

            <?php if (home_url($wp->request) != get_option('btn_support_us_hero', '')): ?>
                <div class="col-md-4">
                    <div class="card px-4 py-5 mb-7 mb-md-0 mx-3 mx-md-0">
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
            <?php endif ?>
        </div>
    </div>
</section>