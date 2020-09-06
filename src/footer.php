    </div>

    <footer>
        <section class="center-section mx-auto py-5">
            <div class="row p-0 m-0 text-center">
                <div class="col-md-6">
                    <h5 class="text-uppercase mb-3">Kapcsolat</h5>
                    <ul class="list-unstyled">
                        <li><strong>InDaHouse Hungary Egyesület</strong></li>
                        <li><a href="mailto:info@indahousehungary.hu">info@indahousehungary.hu</a></li>
                        <li><a href="tel:+36705704950">+36705704950</a></li>
                        <li>3852 Hernádszentandrás, Táncsics út 91.</li>
                        <li>Adószám: 19102382-1-05</li>
                        <li>Számlaszám: 11600006-00000000-83572155</li>
                        <li>IBAN: HU79116000060000000083572155</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5 class="text-uppercase mb-3">Hivatalos dolgok</h5>
                    <ul class="list-unstyled">
                        <li><a href="/wp-content/uploads/2019/09/alapito_okirat_compressed.pdf">Alapító okirat</a></li>
                        <li><a href="/eves-penzugyi-beszamolok/">Éves pénzügyi beszámolók</a></li>
                        <li><a href="/adatvedelem/">Adatkezelési tájékoztatók</a></li>
                    </ul>
                </div>
            </div>

            <hr />

            <div class="row m-0">
                <div class="col-md-6">
                    <div class="small px-3">
                        &copy; <?= date('Y') ?> Minden jog fenntartva - InDaHouse Hungary Egyesület
                    </div>
                </div>

                <div class="col-md-6 text-right">
                    <div class="small px-3">
                        örök hála Dórinak, Jánosnak, Zsoltnak és Zolinak
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_enqueue_script( 'all.min.js', get_template_directory_uri() . '/js/all.min.js', null, null, true); ?>
    <?php wp_footer() ?>
</body>
</html>