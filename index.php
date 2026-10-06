
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mahmoud & Habiba | Wedding Invitation</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- COVER -->
    <section class="cover" id="cover">

        <div class="cover-card">

            <p class="cover-subtitle">
                YOU ARE INVITED TO
            </p>

            <div class="cover-heart">
                ♥
            </div>

            <h1>
                Mahmoud
                <small>&</small>
                Habiba
            </h1>

            <div class="cover-divider"></div>

            <p class="cover-description">
                OUR WEDDING DAY
            </p>

            <button
                class="open-button"
                onclick="openInvitation()">
                OPEN INVITATION
            </button>

        </div>

    </section>


    <!-- MAIN INVITATION -->
    <main id="mainContent">


        <!-- INTRO -->
        <section class="intro-section">

            <p class="section-label">
                THE WEDDING OF
            </p>

            <h2 class="couple-names">
                Mahmoud
                <span>&</span>
                Habiba
            </h2>

            <div class="small-divider"></div>

            <p class="intro-text">
                With great joy and happiness,
                we invite you to celebrate
                our wedding day with us.

                <br><br>

                Your presence would make
                our special day even more beautiful.
            </p>

        </section>


        <!-- MESSAGE -->
        <section class="message-section">

            <div class="section-decoration">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <p class="section-label">
                WITH LOVE
            </p>

            <h2>
                Join Us On Our Special Day
            </h2>

            <div class="small-divider"></div>

            <p class="message-text">
                Together with our families,
                we are delighted to invite you
                to celebrate the beginning
                of our new journey together.

                <br><br>

                We would be honored to have you
                share this beautiful moment with us.
            </p>

        </section>


        <!-- WEDDING DETAILS -->
        <section class="details-section">

            <p class="section-label">
                SAVE THE DATE
            </p>

            <h2>
                Our Wedding Day
            </h2>

            <div class="small-divider"></div>


            <div class="details-grid">

                <!-- DATE -->
                <div class="detail-card">

                    <div class="detail-icon">
                        ♡
                    </div>

                    <h3>
                        Date
                    </h3>

                    <p>
                        14 November 2026
                    </p>

                </div>


                <!-- TIME -->
                <div class="detail-card">

                    <div class="detail-icon">
                        ◷
                    </div>

                    <h3>
                        Time
                    </h3>

                    <p>
                        7:00 PM
                    </p>

                </div>


                <!-- LOCATION -->
                <div class="detail-card">

                    <div class="detail-icon">
                        ⌖
                    </div>

                    <h3>
                        Location
                    </h3>

                    <p>
                        Wedding Venue
                    </p>

                </div>

            </div>


            <button
                class="location-button"
                onclick="openLocation()">
                VIEW LOCATION
            </button>

        </section>


        <!-- COUNTDOWN -->
        <section class="countdown-section">

            <p class="section-label">
                COUNTING DOWN
            </p>

            <h2>
                Until Our Wedding Day
            </h2>

            <div class="small-divider"></div>


            <div class="countdown-grid">

                <div class="count-box">
                    <strong id="days">00</strong>
                    <span>DAYS</span>
                </div>

                <div class="count-box">
                    <strong id="hours">00</strong>
                    <span>HOURS</span>
                </div>

                <div class="count-box">
                    <strong id="minutes">00</strong>
                    <span>MINUTES</span>
                </div>

                <div class="count-box">
                    <strong id="seconds">00</strong>
                    <span>SECONDS</span>
                </div>

            </div>

        </section>


        <!-- WISHES -->
        <section class="wishes-section">

            <p class="section-label">
                WITH LOVE
            </p>

            <h2>
                Leave Your Wishes
            </h2>

            <div class="small-divider"></div>

            <p class="wishes-description">
                Share your love and congratulations
                with Mahmoud & Habiba.
            </p>


            <form
                class="wish-form"
                action="save_wish.php"
                method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required>

                <textarea
                    name="message"
                    placeholder="Write your message here..."
                    required></textarea>

                <button
                    type="submit"
                    class="wish-button">
                    SEND YOUR WISHES
                </button>

            </form>

        </section>


        <!-- FOOTER -->
        <footer>

            <div class="footer-flower">
                ✦
            </div>

            <h2>
                Mahmoud & Habiba
            </h2>

            <p>
                Thank you for being part of our special day
            </p>

            <div class="footer-line"></div>

            <p class="copyright">
                Made with love
            </p>

        </footer>

    </main>


    <!-- JAVASCRIPT -->
    <script>

        function openInvitation() {

            const cover =
                document.getElementById("cover");

            cover.classList.add("open");

            document.body.classList.add(
                "invitation-open"
            );
        }


        function openLocation() {

            window.open(
                "https://maps.app.goo.gl/N2Ne1mAiEapcerrE6",
                "_blank"
            );
        }


        const weddingDate =
            new Date(
                "November 14, 2026 19:00:00"
            ).getTime();


        function updateCountdown() {

            const now =
                new Date().getTime();

            const difference =
                weddingDate - now;


            if (difference <= 0) {

                document.getElementById("days")
                    .textContent = "00";

                document.getElementById("hours")
                    .textContent = "00";

                document.getElementById("minutes")
                    .textContent = "00";

                document.getElementById("seconds")
                    .textContent = "00";

                return;
            }


            const days =
                Math.floor(
                    difference /
                    (1000 * 60 * 60 * 24)
                );


            const hours =
                Math.floor(
                    (difference %
                        (1000 * 60 * 60 * 24))
                    /
                    (1000 * 60 * 60)
                );


            const minutes =
                Math.floor(
                    (difference %
                        (1000 * 60 * 60))
                    /
                    (1000 * 60)
                );


            const seconds =
                Math.floor(
                    (difference %
                        (1000 * 60))
                    /
                    1000
                );


            document.getElementById("days")
                .textContent =
                String(days).padStart(2, "0");

            document.getElementById("hours")
                .textContent =
                String(hours).padStart(2, "0");

            document.getElementById("minutes")
                .textContent =
                String(minutes).padStart(2, "0");

            document.getElementById("seconds")
                .textContent =
                String(seconds).padStart(2, "0");
        }


        updateCountdown();

        setInterval(
            updateCountdown,
            1000
        );

    </script>

</body>

</html>
