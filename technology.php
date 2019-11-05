<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body  {
  background-image: url("wallpaper1.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.block{
    border: 3px solid plum;
}
.i{
    width: 60%;
}
</style>
<body>
    <br>
    <div>
       <center> <img src="technology.jpg" class="i"></center>
    </div>
    <BR>
    <div class="block"><center><h1>APPLE</h1></center>
        <p><h3>
                Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. It is considered one of the Big Four tech companies along with Amazon, Google, and Facebook.[6][7]

                The company's hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, the AirPods wireless earbuds and the HomePod smart speaker. Apple's software includes the macOS, iOS, iPadOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, the Shazam acoustic fingerprint utility,
                 and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro, Logic Pro, and Xcode. 
        </h3></p>
             
        </div><br><br>
    <div class="block"><center><h1>MICROSOFT</h1></center>
           <h3> 
                Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures,
                 licenses, supports, and sells computer software, consumer electronics, personal computers, and related services. Its best known software
                  products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. In 2016, it was the world's largest software maker by revenue (currently Alphabet/Google has more revenue).[3] The word "Microsoft" is a portmanteau of "microcomputer" and "software".[4]
                 Microsoft is ranked No. 30 in the 2018 Fortune 500 rankings of the largest United States corporations by total revenue.[5]
           </h3>
    </div>
    <br><br>
    <div class="block"><center><h1>SMART WATCHES</h1></center>
            <h3>
                    A smartwatch is a wearable computer in the form of a wristwatch; modern smartwatches provide a local touchscreen interface for daily use, while an associated smartphone app provides for management and telemetry (such as long-term biomonitoring). While early models could perform basic tasks, such as calculations, digital time telling, translations, and game-playing, 2010s smartwatches have more general functionality closer to smartphones, including mobile apps, a mobile operating system and
                     WiFi/Bluetooth connectivity. Some smartwatches function as portable media players, with FM radio and playback of digital audio and video files 
                    via a Bluetooth headset. Some models, called 'watch phones' (or vice versa), have mobile cellular functionality like making calls.
            </h3>
    </div><br><br>
    <div class="block"><center><h1>SMARTPHONES</h1></center>
           <h3>
                Smartphones are a class of mobile phones and of multi-purpose mobile computing devices. They are distinguished from feature phones by their
                 stronger hardware capabilities and extensive mobile operating systems, which facilitate wider software, internet (including web browsing[1]
                 er mobile broadband), and multimedia functionality (including music, video, cameras, and gaming), alongside core phone functions such as 
                 voice calls and text messaging. Smartphones typically include various sensors that can be leveraged by their software, such as a
                  magnetometer, proximity sensors,
                 barometer, gyroscope and accelerometer, and support wireless communications protocols such as Bluetooth, Wi-Fi, and satellite navigation.
           </h3>
    </div>
    <br><br>
    <script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
    
    </script>
</body>
</html>