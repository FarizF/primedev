@extends('layouts.master')

@section('content')
  <div id="homephoto">
    <div class="gradientoverlay">
      <div id="intro">
        <div class="text">
          <h1>Simply solid and just perfect for you</h1>
          <p>
            A software engineering student who is passionate
            about producing clean and concise code to create digital solutions
            that fulfill any demand. Developing solutions that are ultimately of
            significance is amazingly satisfying.
          </p>
        </div>
        <div class="verticalline"></div>
        <div id="profile">
          <div id="mybigface"></div>
        </div>
      </div>
      <div class="sociallinks">
        @include('layouts.sociallinks')
      </div>
    </div>
  </div>

  <div id="moreaboutme">
    <div id="actionimage"></div>
    <div class="text">
      <h2>About Me</h2>
      <p>
        Hi! I'm Fariz, and I'm a software engineering student at the Amsterdam
        University of Applied Sciences (AUAS). I am currently based in Almere, the
        Netherlands. During my studies at the AUAS, I have been active as a (Wordpress) <b>web
        developer</b> and as an <b>Android app developer</b> creating
        <a class="isDisabled" href="/portfolio">solutions</a> for many companies, both locally and
        internationally recognized. I aspire to always improve, and create good-looking,
        complete, digital solutions that puts smiles on the faces of those I
        create them for.
      </p>
    </div>
  </div>

  <div id="skills">
    <div class="title">
      <h2>Skills</h2>
      <b>I can do pretty cool things</b>
    </div>

    <div class="container">
      <div class="skillbox">
        <div class="imgcontainer">
          <img src="{{asset('/images/icons8-source-code-100.png')}}">
        </div>
        <b>Programming</b>
        <p>Most familiar with programming languages that are inherently
          object-oriented (Java, C#), but can also work independently with
          languages more frequently used in web development (e.g. PHP, Javascript
          and libraries like jQuery and node.js).</p>
      </div>

      <div class="skillbox">
        <div class="imgcontainer">
          <img src="{{asset('/images/icons8-design-100.png')}}">
        </div>
        <b>Software Design</b>
        <p>Even though more of a technical person, uses practically developed
          insight and knowledge to either meddle in discussions or act independently to
          improve design and user experience of the system in question. Posesses
          decent knowledge of the MVC design pattern and is eager to learn about more of them.</p>
      </div>

      <div class="skillbox">
        <div class="imgcontainer">
          <img src="{{asset('/images/icons8-workflow-100.png')}}">
        </div>
        <b>Development Processes</b>
        <p>Very familiar with several popular work methods (e.g. Agile, waterfall).
          Educates and even leads team members in the use of utilized process and
          relevant tools when necessary.</p>
      </div>

      <div class="skillbox">
        <div class="imgcontainer">
          <img src="{{asset('/images/icons8-visualization-skill-100.png')}}">
        </div>
        <b>Visualization</b>
        <p>Does not shy away from taking responsibility regarding image and video editing and
          making posters when no designated craftsman is present. Creations are basic
          but effective.</p>
      </div>

      <div class="skillbox">
        <div class="imgcontainer">
          <img src="{{asset('/images/icons8-thumbs-up-100.png')}}">
        </div>
        <b>Generally a Pretty Good Guy</b>
        <p>Ridiculously empathetic and has the tendency to want make your sides
        hurt from time to time. Has a desire to be the big (little) brother of the team.
        Own opinions are elaborated and others are throughly considered and
        respected.</p>
      </div>
    </div>
    <div id="moreskills">
      More specific skills are mentioned on
      <a href="https://www.linkedin.com/in/fariz-fakkel-9086b4a1" target="_blank">my LinkedIn page</a>
    </div>
  </div>

  <div id="references">
    <div class="title">
      <h2>References</h2>
    </div>
  </div>

  <div id="contact">
    <div class="container">
      <div class="title">
        <h2>Contact</h2>
        <b>Do you like talking over coffee too? &#9749;</b>
      </div>
      <h3 class="pdtitle">Personal details</h3>
      <form>
        <div id="inputcontainer">
          <div class="inputs">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
          </div>
          <div id="messagecontainer">
            <textarea name="message" placeholder="What would you like to tell me?"></textarea>
          </div>
        </div>
        <div id="submitcontainer">
          <div class="sociallinks">
            @include('layouts.sociallinks')
          </div>
          <input class="isDisabled" type="submit" name="send" value="Send">
          @captcha('nl')
        </div>
      </form>
    </div>
  </div>
@endsection
