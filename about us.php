<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("wallpaper1.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.heading{
    height: 30%;
    padding: 20px;
    margin-left: 30%;
}
    #more {display: none;}
.team{
        width: 40%;
        border: 3px solid black;
        border-radius: 40%;
}
.t{
    display: flex;
 }
 .j{
        height:140px;
        width: 20%;
        border-radius: 50%;
        border: 3px solid black;
    }
    .i{
        width: 150px;
        height: 80px;
        border: 3px solid black;
        border-radius: 50%;
    }
    .i:hover{
        transform: scale(1.2); 
    }
    .thumb{
        margin-left: 45%;
        align-items: center;
    }
    .caption{
      border: 2px solid black;
    
    }
    .h{
    height: 20%;
    background-color:black;
    color:grey;
    text-align: center;
    border:4px solid greenyellow;
    border-radius: 20px;
}
ul {
        list-style-type: none;
        margin: 0;
        padding: 5px;
        display: flex;

      }
      .u{
          background-color: blueviolet;
          border-radius: 6px;
      }
      .l{
          background: black;
          width:25%;
          border: 2px solid greenyellow;
          border-radius:10px;
      }
</style>
</head>
<body>
    
    <div>
  <div>
    <br><br>
    <p><h3>Our company is a full service event management firm based in Calgary, Alberta that was created by pairing together our passion for business and events. We bring a fresh, unique approach to the event management industry.
        Our team understands that a properly executed event can be leveraged to support an organization’s strategic vision, incorporated into a company’s marketing plan,
        or used to build networks and client loyalty.
     <span id="dots">...</span><span id="more">Spark approaches every project with meticulous attention to detail and obsessive precision.
        Regardless of size and scope, we treat your event like a business with clear strategic goals, defined milestones,
         and a comprehensive plan to ensure that your event is delivered on time and on budget. At Spark, we put your organization first. 
         We learn about your business, we focus on your challenges, and we plan events to support your goals.</h3></span></p>
    <button onclick="myFunction()" id="myBtn">Read more</button>

    </div>
    <hr>
   </div>
   <div>
     <br>
     <center>
      <h1>Our Approach<br></h1>
      <h3>LEARN: WE WANT TO GET TO KNOW YOU<br></h3>
      What is your business about? What are your challenges? What are the issues that your members or clients are dealing with? By thoroughly understanding your company’s leadership culture, how your organization operates and your long term strategic plans, we become a part of your team. Our model works best when we can become more than the “hired help” and can become strategic event management partners, so the first step for us is about getting to know you and your business.
      
       <br>
      
      <h3>BUILD: LET US DO THE HEAVY LIFTING.<br></h3>
      Because we have taken the time to learn about your business and the goals of your event, you can rest assured that the event will be on target and in line with your objectives. Leave the planning and management to us. Let us look after the details and the heavy lifting that comes with planning a professional event. From our network of preferred vendors, industry connections and years of experience, we can deliver a full service event management experience. The Spark team is well equipped to deliver a world class event, each and every time. Your job is to run your business; our job is to run your event.
      
       <br>
      
     <h3>DELIVER: SIT BACK. RELAX.<br></h3>
      Finally, this is where our event management expertise comes into play. At our core, we love events. We love the on-site details, production plans, schedules, deadlines and to do lists that come along with managing an event. From meticulous management of facility details to AV, catering and on-site coordination, we ensure every detail is looked after. Managing your event using a strategic overall plan and a methodical management approach allows you to rest easy. Knowing that every last detail is looked after will allow you to focus on your attendees and stakeholders at the event. Let us look after the rest.
<br>
<br>
<br>
   </center>
   <hr>
   </div>
<div>
<div>
    <center><h1>Team Members<br></h1></center>
    <section class="t">
      <figure class="caption"> 
            <center><img src="mayank tiwari.png" class="team"></center>
            <figcaption><b><u>Mayank Tiwari</u></b> is one of the founder of the organization.
               He takes care of the technical stuffs in the organization. He also takes care of the HR section. He make sure that we never miss any 
               oppourtinity to get talented people in our organization.
            </figcaption>
      </figure>
      <figure class="caption">
           <center><a href="https://www.linkedin.com/in/mileesinha"><img src="milee.jpg" class="team"></a></center>
            <figcaption>
              <b><u>Milee Sinha</u></b> is the creative director of the company. She takes care of all the creative stuffs inside the organization 
              and makes sure the the services we are providing is according to the demand of the market.
            </figcaption>
      </figure>
      <figure class="caption">
            <center><img src="mayank soni.png" class="team"></center>
            <figcaption>
              <b><u>Mayank Soni</u></b> is the CEO of the oragnization. He is one of the founder of the organization also. He makes sure that we 
              are always updated with the new technologies coming day ny day inn the market and help the organization members to gain technical skills.
            </figcaption>
      </figure>
        </section>
</div>
<br>
<br>
<div class="thumb"> 
       <img src="instagram.jpg" class="j" id="bigImage">
        <br><br>
    </div>
    <div id="smallImage" onclick="changeImage(event)">
       <center> <img src="facebook.png" class="i">
        <img src="instagram.jpg" class="i">
        <img src="twitter.png" class="i">
        <img src="linkedin.png" class="i"></center>
        </div>

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
function changeImage(event)
    {
        var targetElement=event.target;
        if(targetElement.tagName=='IMG')
    {
        document.getElementById("bigImage").src=targetElement.getAttribute("src");
    }
    }
</script>

</body>
</html> 
