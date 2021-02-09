<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Roboto+Condensed:wght@700&display=swap"
      rel="stylesheet"
    />

    <?php
    wp_head()
    ?>

    <style>
      * {
        /* outline: 1px dashed red !important; */
      }
    </style>
  </head>
  <body>
    <!-- Banner -->

    <!-- Header -->
    <header id="header" class="header">
      <nav class="header__nav nav">
        <div class="banner" id="banner">
          <div class="banner__wrapper">
            <p class="banner__text">
              Wir reparieren weiter! Schreib uns per &nbsp;

              <a class="banner__link" href="https://wa.me/491628282353">
                <img
                  class="banner__image"
                  src="images/icons/whatsapp_button_orange.svg"
                  alt="WhatsApp"
                />
              </a>
              &nbsp; unter 0162-8282353.
            </p>
            <button id="closeBanner" class="banner__button">
              <img src="images/icons/banner_cross.svg" alt="Close Banner" />
            </button>
          </div>
        </div>
        <div class="nav__wrapper">
          <a class="nav__item logo" href="#">
            <img
              class="logo__img"
              src="images/logo/logo_blackorange.svg"
              alt="Smartphoniker Logo"
            />
          </a>

          <ul id="nav" class="nav__list">
            <li class="nav__listitem"><a href="#">Shop</a></li>
            <li class="nav__listitem"><a href="#">Services</a></li>
            <li class="nav__listitem"><a href="#">Standort</a></li>
            <li class="nav__listitem"><a href="#">Nachhaltigkeit</a></li>
            <li class="nav__listitem"><a href="#">Über Uns</a></li>
          </ul>

          <a class="nav__phone" href="tel:+4943190700390">
            <img
              class="nav__img"
              src="images/icons/phone_orangewhite.svg"
              alt="Jetzt anrufen"
            />
          </a>
          <button class="nav__menuicon menuicon" id="menuicon">
            <span class="menuicon__line menuicon__line--1"></span>
            <span class="menuicon__line menuicon__line--2"></span>
            <span class="menuicon__line menuicon__line--3"></span>
          </button>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main class="content">
      <!-- Hero -->
      <section class="content__section content__section--hero section hero">
        <img
          width="1"
          height="1"
          class="hero__image"
          src="images/hero_image_phone.svg"
          alt="Nachhaltiges Handy"
        />
        <div class="hero__wrapper">
          <h1 class="section__heading hero__heading">
            Nachhaltig. Qualitativ. Unkompliziert.
          </h1>
          <p class="hero__text">
            Reparaturen, Zubehör oder Gebrauchtgeräte An- und Verkauf. Wir sind
            Dein Partner für nachhaltige Lösungen in der mobilen Kommunikation.
            <span class="hero__text hero__text--hidden">
              Komm einfach in einen unserer Shops vorbei und lass dich von einem
              unserer erfahrenen Mitarbeit beraten oder fülle das folgende
              Formular aus und erfahre unkompliziert die Kosten für eine
              Reparatur.
            </span>
          </p>
        </div>

        <form class="hero__form block-form" action="#">
          <div class="block-form__wrapper select">
            <label class="select__label" for="select-manufacturer">
              Hersteller wählen
            </label>
            <select
              class="select__select"
              name="manufacturer"
              id="select-manufacturer"
            >
              <option value="apple">Apple</option>
              <option value="htc">HTC</option>
              <option value="huawei">Huawei</option>
              <option value="lg">LG</option>
              <option value="samsung">Samsung</option>
              <option value="sony">Sony</option>
              <option value="xiaomi">Xiaomi</option>
              <option value="other">nicht dabei?</option>
            </select>
          </div>
          <div class="block-form__wrapper select">
            <label class="select__label" for="select-modell"
              >Modell wählen</label
            >
            <select class="select__select" name="modell" id="select-modell">
              <option value="ip6">iPhone 6</option>
              <option value="other">nicht dabei?</option>
            </select>
          </div>

          <button class="block-form__button button" type="submit">
            Handy reparieren lassen
          </button>
        </form>

        <ul class="hero__brands columns-5">
          <li class="columns-5__column">
            <img
              class="columns-5__image"
              src="images/partner_logos/bartels_langness.svg"
              alt="bartels_langness"
            />
          </li>
          <li class="columns-5__column">
            <img
              class="columns-5__image"
              src="images/partner_logos/coop.svg"
              alt="coop"
            />
          </li>
          <li class="columns-5__column">
            <img
              class="columns-5__image"
              src="images/partner_logos/chefs_culinar.svg"
              alt="chefs_culinar"
            />
          </li>
          <li class="columns-5__column">
            <img
              class="columns-5__image"
              src="images/partner_logos/vater.svg"
              alt="vater"
            />
          </li>
          <li class="columns-5__column">
            <img
              class="columns-5__image"
              src="images/partner_logos/der_echte_norden.svg"
              alt="der_echte_norden"
            />
          </li>
        </ul>
      </section>

      <!-- News -->
      <section class="content__section section">
        <h2 class="section__heading">Das gibt es Neues:</h2>
        <div class="section__content section__content--large block-2">
          <div class="block-2__block">
            <picture>
              <img class="block-2__img" src="images/phone01.jpg" alt="Handy" />
            </picture>
          </div>

          <div class="block-2__block block-2__block--center">
            <p class="block-2__text">
              Bei uns kannst du nicht nur dein altes Gerät zur Reparatur
              vorbeibringen, sondern auch ein Gebrauchtgerät kaufen und
              verkaufen, sollte sich die Reparatur einmal doch nicht mehr
              lohnen.
            </p>
            <a class="block-2__button button" href="#">Standorte ansehen</a>
          </div>
        </div>
      </section>

      <!-- Benefits -->
      <section class="content__section section">
        <h2 class="section__heading">Warum Smartphoniker?</h2>
          <div class="section__content columns-3">
            <div class="columns-3__column">
              <img
                class="columns-3__icon"
                src="images/icons/clock.svg"
                alt="Uhr"
              />
              <h3 class="columns-3__heading">kurze Reparaturdauer</h3>
              <p class="columns-3__text">
                Die Reparatur dauert in der Regel nicht länger als 1-2 Stunden
                Gerne kannst du auch einen Termin für den Einbau vereinbaren.
                Während du wartest kannst du dich in unserem gemütlichen
                Loungebereich entspannen oder in unserem Sharing-Bücherregal
                stöbern.
              </p>
            </div>
            <div class="columns-3__column">
              <img
                class="columns-3__icon"
                src="images/icons/hands.svg"
                alt="Uhr"
              />
              <h3 class="columns-3__heading">Lebenslange Garantie</h3>
              <p class="columns-3__text">
                Seit über 7 Jahren bieten wir hochqualitative Smartphone- &
                Tablet- Reparaturen an. Wir sind von unserer Qualität überzeugt
                und geben daher eine lebenslange Garantie auf alle
                Display-Reparaturen. Dein Gerät ist bei uns in guten Händen
              </p>
            </div>
            <div class="columns-3__column">
              <img
                class="columns-3__icon"
                src="images/icons/map_needle.svg"
                alt="Uhr"
              />
              <h3 class="columns-3__heading">Wir reparieren vor Ort</h3>
              <p class="columns-3__text">
                Augenkontakt ist uns wichtig und schafft Vertrauen. Unsere
                Standorte sind zentral gelegen und wir sind direkt telefonisch
                und per e-Mail erreichbar. Deinen Termin bei uns kannst du
                wunderbar mit einer Einkaufstour verbinden.
              </p>
            </div>
          </div>
        <div class="section__content section__content--small">
          <div class="video">
            <iframe
              src="https://www.youtube.com/embed/R5J75Pl-n_k?ps=docs&controls=1"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </section>

      <!-- Feature -->
      <section class="content__section section">
        <h2 class="section__heading">Unser Nachhaltigkeitsversprechen</h2>
        <div class="section__content section__content--large block-2 block-2--green">
          <div class="block-2__block">
            <picture>
              <img
                class="block-2__img"
                src="images/people/bene_new.jpg"
                alt="Bene im Laden"
              />
            </picture>
          </div>
          <div class="block-2__block block-2__block--center">
            <p class="block-2__text">
              „Auch traditionelles Zubehör schadet der Umwelt. Bei uns gibt es
              deshalb ausgewählte und nachhaltige Produkte von Firmen, die sich
              für die Umwelt einsetzen. Ob Bäume pflanzen oder die Meere von
              Plastik befreien - jedes Produkt unterstützt ein nachhaltiges
              Projekt.”
            </p>
            <a class="block-2__button button button--green" href="#"
              >mehr zum Thema</a
            >
          </div>
        </div>
      </section>

      <!-- Testimonial -->
      <section class="content__section section">
        <h2 class="section__heading">Das sagen unsere Kund:innen!</h2>
        <div class="section__content">
          <div class="columns-3">
            <div class="columns-3__column">
              <img
                class="columns-3__icon columns-3__icon--small"
                src="images/icons/5-stars.svg"
                alt="Uhr"
              />
              <p class="columns-3__text">
                „Tolle Beratung mein Smartphone hat nicht mehr richtig
                funktioniert und durch die schnelle und professionelle Betreuung
                konnte das Problem fix gelöst werden.“
              </p>
              <p class="columns-3__subtitle">Marina H.</p>
            </div>
            <div class="columns-3__column">
              <img
                class="columns-3__icon columns-3__icon--small"
                src="images/icons/5-stars.svg"
                alt="Uhr"
              />
              <p class="columns-3__text">
                „Ich war heute im Shop und bin begeistert, der Kollege ist sehr
                professionell und kann alles super erklären. Es standen viele
                Menschen an, trotzdem hat er sich Die Zeit genommen. Kompetent,
                schnell und günstig.“
              </p>
              <p class="columns-3__subtitle">Gerd H.</p>
            </div>
            <div class="columns-3__column">
              <img
                class="columns-3__icon columns-3__icon--small"
                src="images/icons/5-stars.svg"
                alt="Uhr"
              />
              <p class="columns-3__text">
                „Danke für die schnelle Reparatur und die kompetente Beratung.
                Es wurde ein originales Display verbaut und war sogar noch etwas
                günstiger als bei der Konkurrenz!“
              </p>
              <p class="columns-3__subtitle">Julian K.</p>
            </div>
          </div>
        </div>
        <div class="section__content section__content--large block-2">
          <div class="block-2__block block-2__block--center">
            <a href="https://g.page/Smartphoniker-Express-S?gm">
              <img
              class="block-2__img"
                src="images/googlerating.svg"
                alt="4.5 Sterne auf Google"
              />
            </a>
          </div>
          <div class="block-2__block block-2__block--center">
              <p class="block-2__text block-2__text--center">
                Bewertet uns auf Google und sichert euch einen 10 Euro
                Gutschein.
              </p>
              <a class="block-2__button button" href="#"
                >Jetzt bewerten</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- Info -->
      <section class="content__section section">
        <h2 class="info__heading section__heading">
          Zuverlässiger Handy-Reparatur-Service
        </h2>
        <div class="section__content section__content--small columns-1">
          <p class="columns-1__text">
            Ein Leben ohne Smartphone – in der heutigen Zeit ist ein solches
          Szenario für viele Menschen nahezu undenkbar. Doch was tun, wenn das
          geliebte Smartphone defekt ist und all diese Dinge, die mit einem
          Handy machbar und vor allem so angenehm praktisch sind, nicht mehr
          funktionieren? Falls Sie dann einen überaus erfahrenen
          Handy-Reparatur-Service im hohen Norden Deutschlands suchen, der Ihr
          Smartphone schnellstmöglich wieder auf Kurs bringt, stehen die
          Experten von Smartphoniker bereit.
          </p>
          
        </div>
        <div class="section__content columns-3">
          <div class="columns-3__column">
            <h3
              class="columns-3__heading columns-3__heading--left columns-3__heading--altcolor"
            >
              iPhone-Reparatur in Kiel
            </h3>
            <p class="columns-3__text columns-3__text--left">
              iPhones sind immer noch Kult! Wer auf die innovativen Smartphones
              schwört, macht keinen Schritt mehr ohne sie. Ist das Gerät jedoch
              nicht mehr voll funktionsfähig und liegt ein Display-
              beziehungsweise Hard- oder Software-Schaden vor, ist das noch
              lange kein Weltuntergang: Sie können gerne jederzeit eine
              iPhone-Reparatur an unseren weiteren Standorten vornehmen lassen.
              Unser versierter Reparaturservice kennt alle iPhone-Versionen aus
              dem Effeff und ist in der Lage, das beliebte Apple-Handy wieder in
              Top-Zustand zu versetzen.
            </p>
          </div>
          <div class="columns-3__column">
            <h3
              class="columns-3__heading columns-3__heading--left columns-3__heading--altcolor"
            >
              Samsung Galaxy-Reparatur
            </h3>
            <p class="columns-3__text columns-3__text--left">
              Wenn Sie Ihr Samsung Galaxy-Handy in die Reparatur geben müssen,
              haben Sie in uns einen Partner gefunden, der Ihnen schnell
              weiterhilft. Das gilt natürlich auch, wenn ein
              Huawei-Reparatur-Service benötigt wird. Entweder Sie besuchen uns
              in den Stores in Schleswig-Holstein oder Sie senden uns Ihr
              defektes Handy per Post. In diesem Fall wäre es von Vorteil, wenn
              Sie uns vorab per Telefon oder E-Mail kontaktieren und uns
              mitteilen, was an Ihrem Handy gemacht werden muss.
            </p>
          </div>
          <div class="columns-3__column">
            <h3
              class="columns-3__heading columns-3__heading--left columns-3__heading--altcolor"
            >
              Datenrettung
            </h3>
            <p class="columns-3__text columns-3__text--left">
              Sei es durch einen Sturz oder Virus – wenn Sie befürchten, dass
              Fotos, Videos, Dokumente etc. auf Ihrem Smartphone nicht mehr
              abrufbar sind, sollten Sie zu uns kommen. Daten vom defekten Handy
              retten oder einen Displayschaden beheben – für unseren erfahrenen
              Handy-Reparatur-Service ist das Alltag! Wir kennen uns mit allen
              Smartphone-Marken aus und stehen Ihnen ebenfalls zur Verfügung,
              wenn Sie Probleme mit Ihrem Tablet oder PC haben. Wir reparieren
              Ihre Consumer Elektronik-Geräte und retten Ihre Daten zum
              Festpreis!
            </p>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
      



    <iframe
      src="footer.html"
      onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"
    ></iframe>
    
    <?php wp_footer(); ?>
  </body>
</html>
