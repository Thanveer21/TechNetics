<?php
include('includes/server.php');
include('includes/header.php');
?>
<?php
if (isset($_POST['login'])) {
  $email = $_SESSION['email'];
  $regno = $_SESSION['regno'];
  if (!empty($email) && !empty($regno)) {
    $_SESSION['logged_in'] = true;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>TechNetics Team</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>

  <section id="team">
    <div class="team">
      <h2 style="color: black; text-align: center">OUR TEAM</h2>
      <p>
        <q>
          <i>
            TechNetics is made not by its projects, its events or the
            hackathons, but by its people. Here is the team behind this vision
            who are the current torch bearers of the chapter for the 2020-21
            term.
          </i>
        </q>
      </p>
      <hr />
      <table cellspacing="30px;" class="ttable">
        <tr>
          <td>
            <img src="images/picture1.jpg" alt="" width="200" height="200" />
          </td>
          <td>
            <h2>Chairperson - Bill Gates</h2>
            <p>
              He stands with zeal to achieve his vision of making TechNetics a
              memorable chapter. His unique way of mentoring brings the entire
              team together and forms a bond to be cherished for a lifetime.
            </p>
          </td>
        </tr>
        <tr class="hr">
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture2.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Vice Chairperson(Management) - Elon Musk</h2>
            <p>
              Mechanical guy turned developer turned Vice Chair of a technical
              chapter, with his thirst for knowledge and perfection,who might
              one day change the dating scene in the campus with his app;
              brings more to the table with his skills than one can fathom.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture3.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Technical Head - Sundar Pichaai</h2>
            <p>
              An epitome of all round technical and management skills, he is
              known for the websites he builds, projects he undertakes and
              hacks he triumphs. He is outgoing and addresses any technical
              concerns and queries one can possibly have. Proudly presenting
              our Technical Head.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture4.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>HR - Tim Cook</h2>
            <p>
              The members, the vision and the culture make TechNetics. His
              adaptability to organise and operate all of them with perfection
              make her the general secretary. The mastermind behind our
              flagship GraVITas event, presenting our Gensec for the 2020-21
              term.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture5.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Design Head - Mark Zuckerberg</h2>
            <p>
              When most of us are busy organising competitions, he is winning
              them. The over-achiever of the group, his CGPA draws parallels
              with Lord Voldemort himself, unconquerable and 'something that
              should not be named'. Proudly presenting our Web Development
              Lead, Mark
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture6.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Club Representative - Kamala Harris</h2>
            <p>
              Publicity and Events are the two cornerstones that make
              TechNetics-VIT one of the campus' most deemed and reputed
              chapters. Her dedication inspires our events to take greater
              strides and achieve greater heights. Kamala Harris Is The Best
              pick one could have for the Events and Publicity Director.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture7.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Finance Director - Rathan Tata</h2>
            <p>
              If one wants to know about internal institutions catering to
              clubs and chapters, don't look beyond our finance director. The
              finance office practically being her second home, he knows all
              financial chops that maintain our ever depleting treasury and
              keep our accounts clean.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture8.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Sponsorship Head - Mukesh Ambani</h2>
            <p>
              Job duties include meeting stakeholder needs, managing renewals
              and negotiations, overseeing communication with sponsors,
              aligning business and market needs, and overseeing sponsorship
              strategy and leverage planning. This career requires a strong
              background in sales and marketing.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/project11.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Project Lead - Nita A</h2>
            <p>
              The Jack of all traits is the master of none". Whoever said this
              never met our projects lead, Nita. Be it DevOps, ML, Natural
              Language Processing or back-end and server development, being
              dextrous in a variety of domains makes her the 'best fit' for
              this model named TechNetics-VIT.
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/picture12.jpg" width="200" height="200" />
          </td>
          <td>
            <h2>Social Media Head - Isha A</h2>
            <p>
              A fantastic designer, and a better CS-GO player, the creator of
              some of our most celebrated designs and event posters, the
              campus ambassador of 'free hackathons'; he has proven his mettle
              in every task that has been thrown his way. Meet our Design and
              Media head Isha
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
      </table>
    </div>
  </section>
</body>

</html>