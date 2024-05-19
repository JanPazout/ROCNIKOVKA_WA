<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/support.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Podpora</title>
</head>
<body>
<?php include 'navbar.php'?>
    <div class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <h1 style="font-size: 70px">Podpora</h1>

        <h2>Často kladené dotazy</h2>

        <div class="faq-container container">
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Jak se bránit před podvody
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Před nákupem auta na autobazaru je důležité pečlivě promyslet svůj rozpočet a
                            zohlednit náklady na provoz vozidla. Zjistěte si historii vozu, abyste měli jistotu, že nemá skryté
                            problémy, jako je nehodová historie. Osobní prohlídka auta je nezbytná, abyste mohli pečlivě zkontrolovat
                            motor, podvozek a interiér. Během testovací jízdy se ujistěte, že auto jezdí tak, jak očekáváte.

                            Doporučuje se také získat nezávislý expertní pohled od mechanika nebo technika, který vám může poskytnout
                            další informace o stavu vozidla. Nezapomeňte pečlivě prostudovat smlouvu a získat veškerou potřebnou
                            dokumentaci, včetně výpisu z evidence vozidel, technického průkazu a servisní knížky.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Záruka
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Tento autobazar poskytuje platformu pro inzerci vozidel ze strany jednotlivých uživatelů. Autor tohoto webu
                            nezaručuje za přesnost, stav ani historii vozidel uvedených v inzerátech. Všechny inzeráty jsou
                            zodpovědností inzerenta.
                            Před nákupem vozidla doporučujeme provést důkladnou prověrku, včetně osobní prohlídky a nezávislého
                            expertního názoru. Ujistěte se, že všechny aspekty nákupu jsou pečlivě promyšleny a zváženy.
                            Tato platforma slouží pouze k propojení kupujících a prodávajících a nezaručuje žádné záruky ani nespočívá v
                            odpovědnosti za jednotlivé inzeráty. Děkujeme za pochopení.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Podmínky pro inzerci
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Uživatelé, kteří chtějí inzerovat svá auta na našem webu, musí splňovat
                            následující podmínky: být plnoletí jednotlivci, poskytovat pravdivé a aktuální informace o vozidle, být
                            vlastníky vozidla nebo mít oprávnění k jeho prodeji, uvádět platné informace o vozidle včetně technického
                            průkazu, servisní historie a jiných relevantních dokumentů, neposkytovat nevhodný obsah v inzerátu,
                            dodržovat všechny zákonné požadavky týkající se prodeje automobilů, být kontaktovatelní prostřednictvím
                            informací uvedených v inzerátu, nést plnou zodpovědnost za obsah inzerátu a veškeré transakce spojené s
                            prodejem vozidla, mít oprávnění od vlastníka vozidla k inzerci a prodeji vozidla, umisťovat inzerát v
                            odpovídající kategorii a obsahovat všechny relevantní informace o vozidle.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php //include 'footer.php'?>
</body>
</html>