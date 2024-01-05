<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
        }

        .abc {
            width: 100%;
            position: relative;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="abc">
        <div class="slider" id="imgs" style="margin-bottom: 2rem;">
            <img src="images/slider1.jpg" width="100%" height="75%" alt="slider1" id="sliderimages">
        </div>

        <div class="about"
            style=" display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h3 style="align-items:center; font-size: 30;">WELCOME TO</h3>
            <h1 style="color: red;">Medi-Caps University</h1>
            <h2 style="color: red;">(AICTE Approved)</h2>
        </div>
        <div class="about-content" style="display: flex; flex-direction: row;">
            <img src="images/image.jpg" style="width: 20rem;">
            <p style="margin-left: 2rem;">Medi-Caps has been a brand name in the arena of technical education. Since its
                inception in July 2000, Medi-Caps has consistently aimed at creating an ideal ambiance for budding
                technocrats and managers; and helping them to grow like true professionals. With its highly qualified
                faculty there seems an optimal blend of academic brilliance and industry exposure, supplemented by
                highly specialized visiting faculty and industry experts, senior professionals from various segments of
                different industries and business houses. It was time now to spread wings and move out for more exposure
                and widening of the periphery.
                Hence the foundation of Medi-Caps University has been laid down. With a strong foundation of the Group
                since 15 years, Medi-Caps University wishes to maintain the same objective of imparting quality
                education and producing sound professionals for the benefit of the society at large.</p>
        </div>
        <button style="float: right; background-color: #4e73df; padding: 8px 16px; margin-bottom: 1rem;"><a
                style="text-decoration: none; color: black;" href="dashboard.php" class="Back">Back</a></button>
        <script>
            var imagess = ["images/slider1.jpg", "images/slider2.jpg", "images/slider3.jpg", "images/slider4.jpg", "images/slider5.jpg", "images/slider6.jpg", "images/slider7.jpg"];
            var i = 0;

            function slides() {
                document.getElementById("sliderimages").src = imagess[i];
                if (i < (imagess.length - 1))
                    i++
                else
                    i = 0;

            }
            setInterval(slides, 3000);
        </script>
</body>

</html>